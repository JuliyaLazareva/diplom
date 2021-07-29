var configParamsObj={minimumResultsForSearch:3,matcher:function(params,data){if($.trim(params.term)===''){return data}
if(data.text.toLowerCase().startsWith(params.term.toLowerCase())){var modifiedData=$.extend({},data,!0);return modifiedData}
return null}};$(document).ready(function(){$(".city_novaposhta").select2(configParamsObj);get_cities()});function update_redelivery(){$('select.city_novaposhta').trigger('change',calc_delivery_price)}
function get_cities(){var city=$(".city_novaposhta");var city_ref=$('input[name="delivery_city_id"]').val();var warehouse_ref=$('input[name="delivery_warehouse_id"]').val();(city_ref)?city_ref=city_ref:city_ref="";$('select.city_novaposhta').closest('.delivery_wrap').find('span.deliver_price').text('');$.ajax({url:"ajax/np/get_cities",data:{method:'get_cities',selected_city:city_ref},dataType:'json',success:function(data){if(data.cities_response.success==1){city.html(data.cities_response.cities)}
$('.warehouses_novaposhta').html('').hide();$('.warehouses_novaposhta').attr('disabled',!0);$('.labelwarehouses_novaposhta').hide();$('span.term_novaposhta span').parent().hide();$('select.city_novaposhta option:first').attr('notselected','notselected');$('select.city_novaposhta option:first').text('Выберите город...');if(city_ref){$('select.city_novaposhta').trigger('change')}}})}
function calc_delivery_price(){$('#baloon').hide();var city_novaposhta=$(this).children(':selected').data('city_ref');var city_ref=$('input[name="delivery_city_id"]').val();if(city_novaposhta!=city_ref){var remove_warehouse=!0}
if(city_ref){(city_novaposhta)?city_novaposhta=city_novaposhta:city_novaposhta=city_ref}
var novaposhta_dprice_elem=$(this).closest('.delivery_wrap').find('span.deliver_price');$('span.term_novaposhta span').text('');var payment_method_id=$('input[name="payment_method_id"]:checked').val();var redelivery=0;if($('input[name="redelivery"]').is(':checked')){redelivery=$('input[name="redelivery"]').val()}
if(city_novaposhta){$('input[name="delivery_city_id"]').val(city_novaposhta);var warehouse_ref=$('input[name="delivery_warehouse_id"]').val();(warehouse_ref)?warehouse_ref=warehouse_ref:warehouse_ref="";if(remove_warehouse){warehouse_ref=""}
novaposhta_dprice_elem.text('Вычисляем...');$('input[name="delivery_price"]').val('0');$.ajax({url:"ajax/np.php",data:{method:'calc_price_term',city:city_novaposhta,redelivery:redelivery,warehouse:warehouse_ref},dataType:'json',success:function(data){if(data.price_response.success){if(novaposhta_dprice_elem.data('is_free')==1){novaposhta_dprice_elem.text('бесплатно')}else{novaposhta_dprice_elem.text(data.price_response.price_formated);$('input[name="delivery_price"]').val(data.price_response.price)}
if(data.price_response.payments_tpl){$('#fn_delivery_payment_'+data.price_response.delivery_id).html(data.price_response.payments_tpl).show();$('input[name="payment_method_id"]#payment_'+data.price_response.delivery_id+'_'+payment_method_id).trigger('click')}}
if(data.term_response.success){$('input[name="delivery_term"]').val(data.term_response.term);$('span.term_novaposhta span').text(data.term_response.term);$('span.term_novaposhta').show()}else{$('span.term_novaposhta').hide()}
if(data.warehouses_response.success){$('.labelwarehouses_novaposhta').show();$('select.warehouses_novaposhta').html(data.warehouses_response.warehouses).attr('disabled',!1).show();$('select.warehouses_novaposhta').select2(configParamsObj)}else{$('select.warehouses_novaposhta').html('').attr('disabled',!0).hide();$('.labelwarehouses_novaposhta').hide()}}})}}
function set_correct_info(){if($(this).closest('.delivery_wrap').find("#delivery_novaposhta").length>0){$("#delivery_novaposhta").show();$('input[name="delivery_price"]').attr('disabled',!1);$('input[name="delivery_term"]').attr('disabled',!1);$('input[name="delivery_city_id"]').attr('disabled',!1);$('input[name="delivery_warehouse_id"]').attr('disabled',!1)}else{$("#delivery_novaposhta").hide();$('input[name="delivery_price"]').attr('disabled',!0);$('input[name="delivery_term"]').attr('disabled',!0);$('input[name="delivery_city_id"]').attr('disabled',!0);$('input[name="delivery_warehouse_id"]').attr('disabled',!0)}}
function set_warehouse(){if($(this).val()!=''){$('input[name="address"]').siblings('.form_placeholder').addClass('active');var city_name=$('select.city_novaposhta').children(':selected').val(),warehouse_name=$(this).val(),delivery_address=city_name+', '+warehouse_name;$('input[name="address"]').val(delivery_address);$('input[name="delivery_warehouse_id"]').val($(this).children(':selected').data('warehouse_ref'))}}
function city_not_found(){if($('.city_novaposhta').children('option').length>1){$('.city_novaposhta').select2({placeholder:'Вашего города нет в списке'})}}