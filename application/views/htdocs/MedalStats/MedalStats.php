<?php
require_once 'D:\OpenServer\domains\PhpFrameworkMaster\application\core\space.php';


foreach($stats as $stats)
{
	$contryName = $stats['countries_name'];
	$medalName = $stats['medal_name'];
}	

$heder = 'Статистика';

$smarty->assign('heder',$heder);
$smarty->assign('medalName',$medalName);
$smarty->assign('contryName',$contryName);
$smarty->assign('getMedalstats',$getMedalstats);
$smarty->assign('message',$message);
$smarty->display('MedalStats.tpl');