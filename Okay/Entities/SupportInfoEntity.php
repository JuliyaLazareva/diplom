<?php


namespace Okay\Entities;


use Okay\Core\Entity\Entity;

class SupportInfoEntity extends Entity
{
    private $info;

    protected static $fields = [
        'id',
        'temp_key',
        'temp_time',
        'new_messages',
        'balance',
        'private_key',
        'public_key',
        'is_auto',
        'accesses',
    ];

    protected static $table = '__support_info';
    protected static $tableAlias = 'si';

    public function getInfo()
    {
        if (!empty($this->info)) {
            return $this->info;
        }

        $this->setUp();
        $this->select->cols($this->getAllFields())->limit(1);
        $this->db->query($this->select);        
        $info = $this->getResult();

        if (!empty($info)) {
            return $this->info = $info;
        }

        $this->clearInfo();
        $this->info = [
            'private_key'  => null,
            'public_key'   => null,
            'new_messages' => 0,
            'balance'      => 0,
            'temp_key'     => null,
            'temp_time'    => null,
            'is_auto'      => 1
        ];
        $this->addInfo($this->info);

        return $this->info;
    }

    private function clearInfo()
    {
        $sql = $this->queryFactory->newSqlQuery();
        $sql->setStatement("TRUNCATE ".self::getTable());
        return (bool) $this->db->query($sql);
    }

    private function addInfo($info)
    {
        $insert = $this->queryFactory->newInsert();
        $insert->into(self::getTable());
        $insert->cols((array) $info);
        return (bool) $this->db->query($insert);
    }

    public function updateInfo($info)
    {
        unset($this->info);

        $update = $this->queryFactory->newUpdate();
        $update->table(self::getTable());
        $update->cols((array) $info);
        return (bool) $this->db->query($update);
    }

    public function get($id)
    {
        throw new \Exception("Method get() in SupportInfoEntity is not allowed");
    }

    public function add($info)
    {
        throw new \Exception("Method add() in SupportInfoEntity is not allowed");
    }

    public function update($id, $info)
    {
        throw new \Exception("Method update() in SupportInfoEntity is not allowed");
    }

    public function delete($id)
    {
        throw new \Exception("Method delete() in SupportInfoEntity is not allowed");
    }
}
