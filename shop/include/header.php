<?php

require_once('./libs/Smarty/Smarty.class.php');
$smarty = new Smarty;
$smarty->template_dir = './templates';
$smarty->compile_dir = './templates_c';
$smarty->force_compile = true;

$smarty->display('header.tpl');
