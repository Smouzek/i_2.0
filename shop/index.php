<?php

require_once('./include/header.php');
require_once('./class/RecordsWork.php');

$store = new RecordsWork;
$categories = $store->selectCategory();

$smarty->assign("categories", $categories);
$smarty->display("index.tpl");