<?php

require_once 'D:\OpenServer\domains\PhpFrameworkMaster\application\core\space.php';

$heder = 'Добавить атлета';
$smarty->assign('heder', $title);
$smarty->assign('currentAthlete', $athletesList);
$smarty->display('AddAthlete.tpl');