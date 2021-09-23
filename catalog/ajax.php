<?require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");?>

<?
if (CModule::IncludeModule("catalog") && CModule::IncludeModule("sale")) {

    // ADD TO CART
    if ($_POST['add'] == 'Y' && $_POST['id']) {
        $propArr = array();
        $count = ($_POST['count']) ? $_POST['count'] : 1;

        Add2BasketByProductID(
            $_POST['id'],
            $count,
            $propArr
        );
    }

    // UPDATE QUANTITY
    if ($_POST['update'] == 'Y' && $_POST['id'] && $_POST['count']) {
        $arFields = array(
            "QUANTITY" => $_POST['count'],
        );
        CSaleBasket::Update($_POST['id'], $arFields);
    }

    // DELETE PRODUCT
    if ($_POST['delete'] == 'Y' && $_POST['id']) {
        CSaleBasket::Delete($_POST['id']);
    }

}
?>