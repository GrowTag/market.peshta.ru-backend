<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
global $USER;
$APPLICATION->SetTitle("ПЕШТА - Личный кабинет")
?>
<?$APPLICATION->IncludeComponent(
    "growtag:sale.personal.order.list",
    "peshta_order",
    array(

    ),
    false
);
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
