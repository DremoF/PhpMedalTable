<?php

require_once 'D:\OpenServer\domains\PhpFrameworkMaster\application\core\space.php';

$heder = 'Медаль';
$smarty->assign('heder',$heder);
$smarty->assign('currentContry',$countrys);
$smarty->assign('currentSport',$sports);
$smarty->assign('currentAthlete',$athletes);
$smarty->assign('currentMedalType',$typeMedals);
$smarty->assign('currentMedalStats',$medals);
$smarty->display('AddMedal.tpl');