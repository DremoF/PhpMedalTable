<?php

require_once 'D:\OpenServer\domains\PhpFrameworkMaster\application\core\space.php';

if (empty($medalsList)) {
	$message = 'Нет данных о медалях';
	$contryName = '';
	$medalName = '';
}else {
	$message = '';
	foreach ($medalsList as $val) {
	$contryName = $val['countries_name'];
	$medalName = $val['medal_name'];
	}
}

$heder = 'Статистика';
$smarty->assign('heder',$heder);
$smarty->assign('medalName',$medalName);
$smarty->assign('contryName',$contryName);
$smarty->assign('getMedalstats',$medalsList);
$smarty->assign('message',$message);
$smarty->display('MedalStats.tpl');