<?php

require_once 'D:\OpenServer\domains\PhpFrameworkMaster\application\core\space.php';

$heder = 'Добавить вид спорта';
$smarty->assign('heder',$heder);
$smarty->assign('currentSport',$sportsList);
$smarty->display('AddSport.tpl');