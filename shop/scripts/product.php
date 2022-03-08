<?php

require_once('../include/header.php');
require_once('../class/RecordsWork.php');

$product_id = $_GET['id'] + 0;
$category_id = $_GET['category_id'] + 0;

$store = new RecordsWork;
$product_info = $store->getProductInfo($product_id);

if ($product_info == 404) {
    header("Location: not_found.php");
    exit();
}

$smarty->assign("category_id", $category_id);
$smarty->assign("product_info", $product_info[0]);
$smarty->display("product.tpl");