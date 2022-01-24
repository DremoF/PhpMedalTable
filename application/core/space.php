<?php
namespace application\core;
use Smarty;

$smarty = new Smarty;
$smarty->template_dir = $_SERVER['DOCUMENT_ROOT'].'/application/views/templates';
$smarty->compile_dir = $_SERVER['DOCUMENT_ROOT'].'/application/views/templates_c';
