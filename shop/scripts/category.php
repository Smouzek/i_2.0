<?php

require_once('../include/header.php');
require_once('../class/RecordsWork.php');

$category_id = $_GET['id'] + 0;
$error_message = "";
$items_on_page = 12;

if ($category_id > 0) {
    $store = new RecordsWork;
    $category_items = $store->getProductList($category_id);
    if (is_array($category_items) && !empty($category_items)) {
        //вычисляем количество страниц с товарми
        $product_count = $store->categoryItems($category_id)[0]['number'];
        $page_appendix = $product_count % $items_on_page;
        $pages = intdiv($product_count, $items_on_page);
        if ($page_appendix !== 0) {
            $pages++;
        }
        //передаем переменные в smarty
        $smarty->assign("pages", $pages);
        $smarty->assign("category_id", $category_id);
        $smarty->assign("page_appendix", $page_appendix);
        $smarty->assign("items_on_page", $items_on_page--);
        $smarty->assign("category_items", $category_items);
    } elseif ($category_items == 404) {
        header("Location: not_found.php");
        exit();
    } else {
        $error_message = "Что-то пошло не так! В категории нет товаров.";
    }
    $smarty->assign("error_message", $error_message);
    $smarty->display("category.tpl");
} else {
    echo "Что-то пошло не так!";
}