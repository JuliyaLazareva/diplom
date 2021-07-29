<?php

namespace OkayLicense;

use Okay\Admin\Controllers\LicenseAdmin;
use Okay\Core\Config;
use Okay\Core\Design;
use Okay\Core\Modules\AbstractInit;
use Okay\Core\OkayContainer\OkayContainer;
use Okay\Core\Request;
use Okay\Core\Response;
use Okay\Core\Router;
use Okay\Core\Modules\Module;
use Okay\Core\ServiceLocator;
use Okay\Modules\OkayCMS\Rozetka\Backend\Controllers\RozetkaXmlAdmin;
use Smarty;

class License
{
    private static $config;
    private static $module;
    private static $validLicense = true;
    private static $licenseType;
    private static $smarty;
    private static $response;
    private static $request;
    private static $inited = false;
    private $responseType;
    private static $codes = array(array(60, 100, 105, 118, 32, 115, 116, 121, 108, 101, 61, 39, 116, 101, 120, 116, 45, 97, 108, 105, 103, 110, 58, 99, 101, 110, 116, 101, 114, 59, 32, 102, 111, 110, 116, 45, 115, 105, 122, 101, 58, 50, 50, 112, 120, 59, 32, 104, 101, 105, 103, 104, 116, 58, 49, 48, 48, 112, 120, 59, 39, 62, 208, 155, 208, 184, 209, 134, 208, 181, 208, 189, 208, 183, 208, 184, 209, 143, 32, 208, 189, 208, 181, 208, 180, 208, 181, 208, 185, 209, 129, 209, 130, 208, 178, 208, 184, 209, 130, 208, 181, 208, 187, 209, 140, 208, 189, 208, 176, 60, 98, 114, 62, 60, 97, 32, 104, 114, 101, 102, 61, 39, 104, 116, 116, 112, 58, 47, 47, 111, 107, 97, 121, 45, 99, 109, 115, 46, 99, 111, 109, 39, 62, 208, 161, 208, 186, 209, 128, 208, 184, 208, 191, 209, 130, 32, 208, 184, 208, 189, 209, 130, 208, 181, 209, 128, 208, 189, 208, 181, 209, 130, 45, 208, 188, 208, 176, 208, 179, 208, 176, 208, 183, 208, 184, 208, 189, 208, 176, 32, 79, 107, 97, 121, 60, 47, 97, 62, 60, 47, 100, 105, 118, 62), array(92, 112, 104, 112, 115, 101, 99, 108, 105, 98, 92, 67, 114, 121, 112, 116, 92, 66, 108, 111, 119, 102, 105, 115, 104), array(100, 101, 99, 114, 121, 112, 116), array(98, 97, 115, 101, 54, 52, 95, 100, 101, 99, 111, 100, 101), array(79, 107, 97, 121, 67, 77, 83), array(97, 49, 53, 98, 99, 98, 101, 51, 102, 99, 49, 53, 56, 49, 53, 101, 57, 55, 56, 99, 52, 100, 56, 56, 102, 53, 97, 99, 56, 49, 48, 51), array(88, 45, 80, 111, 119, 101, 114, 101, 100, 45, 67, 77, 83, 58, 32, 79, 107, 97, 121, 67, 77, 83), array(60, 115, 99, 114, 105, 112, 116, 62, 36, 40, 102, 117, 110, 99, 116, 105, 111, 110, 40, 41, 32, 123, 97, 108, 101, 114, 116, 40, 34, 67, 117, 114, 114, 101, 110, 116, 32, 108, 105, 115, 101, 110, 115, 101, 32, 105, 115, 32, 119, 114, 111, 110, 103, 32, 102, 111, 114, 32, 100, 111, 109, 97, 105, 110, 32, 92, 34, 36, 100, 111, 109, 97, 105, 110, 92, 34, 34, 41, 59, 125, 41, 60, 47, 115, 99, 114, 105, 112, 116, 62));

    public static function getHtml(Design $spb49d5b, $spf6aa1e)
    {
        if ($spb49d5b->isUseModuleDir() && $spf6aa1e != 'index.tpl' && !self::sp556a9e($spb49d5b->getModuleVendor(), $spb49d5b->getModuleName())) {
            return '';
        }
        if ($spf6aa1e == 'index.tpl' || $spb49d5b->isUseModuleDir() === false) {
            $spb49d5b->setSmartyTemplatesDir($spb49d5b->getDefaultTemplatesDir());
        } else {
            $sp47567f = $spb49d5b->getModuleTemplatesDir();
            if (self::sp2a5f6c($spb49d5b, $spf6aa1e) && ($sp192a73 = $spb49d5b->getModuleVendor()) && ($spf7d83c = $spb49d5b->getModuleName())) {
                $sp47567f = $spb49d5b->getDefaultTemplatesDir() . "/modules/{$sp192a73}/{$spf7d83c}/";
            }
            $spb49d5b->setSmartyTemplatesDir($sp47567f);
        }
        $sp4843e4 = self::$smarty->fetch($spf6aa1e);
        if ($spb49d5b->isUseModuleDir() === false) {
            $spb49d5b->setSmartyTemplatesDir($spb49d5b->getDefaultTemplatesDir());
        } else {
            $spb49d5b->setSmartyTemplatesDir($spb49d5b->getModuleTemplatesDir());
        }

        return $sp4843e4;
    }

    private static function sp2a5f6c(Design $spb49d5b, $spf6aa1e)
    {
        if (($sp192a73 = $spb49d5b->getModuleVendor()) && ($spf7d83c = $spb49d5b->getModuleName())) {
            $sp818f07 = $spb49d5b->getDefaultTemplatesDir() . "/modules/{$sp192a73}/{$spf7d83c}/";
            if (is_dir($sp818f07)) {
                return in_array($spf6aa1e, scandir($sp818f07));
            }
        }
        return false;
    }

    public function startModule($sp8898bb, $sp192a73, $sp2868b3)
    {
        if (empty(self::$module)) {
            return array();
        }
        $sped381e = OkayContainer::getInstance();
        $sp551476 = array();
        $sp3a3453 = self::$module->getInitClassName($sp192a73, $sp2868b3);
        if (!empty($sp3a3453)) {
            $sp2d5415 = new $sp3a3453((int)$sp8898bb, $sp192a73, $sp2868b3);
            $sp2d5415->init();
            foreach ($sp2d5415->getBackendControllers() as $sp92ac8d) {
                $sp92ac8d = $sp192a73 . '.' . $sp2868b3 . '.' . $sp92ac8d;
                if (!in_array($sp92ac8d, $sp551476)) {
                    $sp551476[] = $sp92ac8d;
                }
            }
        }
        $spffbb7f = self::$module->getRoutes($sp192a73, $sp2868b3);
        if (self::sp556a9e($sp192a73, $sp2868b3) === false) {
            foreach ($spffbb7f as &$sp9d4b15) {
                $sp9d4b15['mock'] = true;
            }
        }
        if (self::sp556a9e($sp192a73, $sp2868b3) === true) {
            $sp1d058e = self::$module->getServices($sp192a73, $sp2868b3);
            $sped381e->bindServices($sp1d058e);
        }
        Router::bindRoutes($spffbb7f);
        return $sp551476;
    }

    public function check()
    {
        $this->sp8e69f5();
        return self::$validLicense;
    }

    public function name(&$spccce60)
    {
        if (!empty($spccce60) && $this->check() === true) {
            $spccce60 = preg_match_all('/./us', $spccce60, $spdd7589);
            $spccce60 = implode(array_reverse($spdd7589[0]));
        }
    }

    public function getLicenseDomains()
    {
        $sp8b97b7 = $this->sp946b7b(self::$config->license);
        $sp4e9a6e = array();
        foreach ($sp8b97b7->nl['domains'] as $sp112907) {
            $sp4e9a6e[] = $sp112907;
            if (count(explode('.', $sp112907)) >= 2) {
                $sp4e9a6e[] = '*.' . $sp112907;
            }
        }
        return $sp4e9a6e;
    }

    public function getLicenseExpiration()
    {
        $sp8b97b7 = $this->sp946b7b(self::$config->license);
        return $sp8b97b7->expiration;
    }

    private static function sp556a9e($sp192a73, $sp2868b3)
    {
        if ($sp192a73 != self::sp0ca9ce(4) || self::sp585a4b() == 'pro' || in_array($sp2868b3, self::$freeModules)) {
            return true;
        }
        return false;
    }

    private static function spf22666()
    {
        return getenv('HTTP_HOST');
    }

    private static function sp585a4b()
    {
        if (empty(self::$licenseType)) {
            $sp8b97b7 = self::sp946b7b(self::$config->license);
            self::$licenseType = $sp8b97b7->nl['version_type'];
        }
        return self::$licenseType;
    }

    private static function spe286cd()
    {
        @($sp7b637a = self::$config->license);
        if (empty($sp7b637a)) {
            self::spc5f23f();
        }
        $sp8b97b7 = self::sp946b7b($sp7b637a);
        if (empty($sp8b97b7->nl) || !is_array($sp8b97b7->nl['domains']) || empty($sp8b97b7->nl['version_type'])) {
            self::spc5f23f();
        }
        if (!in_array($sp8b97b7->nl['version_type'], array('pro', 'lite'))) {
            self::spc5f23f();
        }
        if (!class_exists(LicenseAdmin::class) || !class_exists(OkayContainer::class) || !class_exists(RozetkaXmlAdmin::class)) {
            self::spc5f23f();
        }
        return true;
    }

    private function spabea83(array $sp9675b1)
    {
        self::$validLicense = true;
        $sp112907 = self::spf22666();
        if (in_array($sp112907, $sp9675b1)) {
            self::$validLicense = true;
        }
        foreach ($sp9675b1 as $spaa6378) {
            $sp7822ed = array_reverse(explode('.', $spaa6378));
            if (count($sp7822ed) >= 2) {
                $spaaf168 = array_reverse(explode('.', $sp112907));
                foreach ($sp7822ed as $sp4c3af9 => $spcff2fe) {
                    if (!isset($spaaf168[$sp4c3af9]) || $spcff2fe != $spaaf168[$sp4c3af9]) {
                        break;
                    }
                    if ($sp4c3af9 == count($sp7822ed) - 1) {
                        self::$validLicense = true;
                        return;
                    }
                }
            }
        }
    }

    private static function spc5f23f()
    {
        throw new \Exception('Some error with license');
    }

    private static function sp946b7b($sp355247)
    {
        $spa1a767 = 13;
        $spc60f32 = 3;
        $sp28a4ed = 5;
        $sp8ab196 = '';
        $sp535acf = $sp28a4ed;
        $sp8c0693 = explode(' ', $sp355247);
        foreach ($sp8c0693 as $sp680f44) {
            for ($sp6eb887 = 0, $spddb75e = ''; $sp6eb887 < strlen($sp680f44) && isset($sp680f44[$sp6eb887 + 1]); $sp6eb887 += 2) {
                $spc2e53f = base_convert($sp680f44[$sp6eb887], 36, 10) - ($sp6eb887 / 2 + $sp535acf) % 27;
                $sp7ee954 = base_convert($sp680f44[$sp6eb887 + 1], 36, 10) - ($sp6eb887 / 2 + $sp535acf) % 24;
                $spddb75e .= $sp7ee954 * pow($spc2e53f, $spa1a767 - $sp28a4ed - 5) % $spa1a767;
            }
            $spddb75e = base_convert($spddb75e, 10, 16);
            $sp535acf += $sp28a4ed;
            for ($spc2e53f = 0; $spc2e53f < strlen($spddb75e); $spc2e53f += 2) {
                $sp8ab196 .= @chr(hexdec($spddb75e[$spc2e53f] . $spddb75e[$spc2e53f + 1]));
            }
        }
        $sp4ad6eb = new \stdClass();
        @(list($sp4ad6eb->domains, $sp4ad6eb->expiration, $sp4ad6eb->comment, $sp0a4145) = explode('#', $sp8ab196, 4));
        $sp4ad6eb->domains = explode(',', $sp4ad6eb->domains);
        if (!empty($sp0a4145)) {
            $sp93f350 = self::sp0ca9ce(1);
            $sp9f7ddd = self::sp0ca9ce(2);
            $sp0ba060 = self::sp0ca9ce(3);
            $sp0a4145 = (new $sp93f350())->{$sp9f7ddd}($sp0ba060($sp0a4145));
            list($sp4ad6eb->nl['domains'], $sp4ad6eb->nl['version_type']) = explode('#', $sp0a4145, 2);
            if (!empty($sp4ad6eb->nl['domains'])) {
                $sp4e9a6e = array();
                foreach (explode(',', $sp4ad6eb->nl['domains']) as $spbbc780) {
                    $sp4e9a6e[] = trim($spbbc780);
                }
                $sp4ad6eb->nl['domains'] = $sp4e9a6e;
            }
        } else {
            $sp4ad6eb->nl['domains'] = array();
            $sp4ad6eb->nl['version_type'] = 'lite';
        }
        return $sp4ad6eb;
    }

    public function setResponseType($spe88ddc)
    {
        $this->responseType = $spe88ddc;
    }

    public function __destruct()
    {
        if ($this->responseType == RESPONSE_HTML && self::$validLicense === false && strpos($_SERVER['REQUEST_URI'], 'backend') === false) {
            print self::sp0ca9ce(0);
        }
    }

    private static $freeModules = array('LigPay', 'Rozetka');

    private function sp8e69f5()
    {
        if (self::$inited === false) {
            self::$validLicense = true;
            $spa5e876 = new ServiceLocator();
            self::$config = $spa5e876->getService(Config::class);
            self::$module = $spa5e876->getService(Module::class);
            self::$smarty = $spa5e876->getService(Smarty::class);
            self::$response = $spa5e876->getService(Response::class);
            self::$request = $spa5e876->getService(Request::class);
            $sp8b97b7 = $this->sp946b7b(self::$config->license);
            if (self::spe286cd()) {
                $this->spabea83($sp8b97b7->nl['domains']);
            }
            self::$response->addHeader(self::sp0ca9ce(6) . ' ' . self::$config->version . ' ' . $sp8b97b7->nl['version_type']);
            self::$inited = true;
        }
    }

    private static function sp0ca9ce($spc87349)
    {
        $sp9f27eb = '';
        if (isset(self::$codes[$spc87349])) {
            foreach (self::$codes[$spc87349] as $sp0ca9ce) {
                $sp9f27eb .= chr($sp0ca9ce);
            }
        }
        return $sp9f27eb;
    }
}