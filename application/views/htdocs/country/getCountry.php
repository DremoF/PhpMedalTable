<?php

require_once 'D:\OpenServer\domains\PhpFrameworkMaster\application\core\space.php';

$heder = 'Добавить страну';
$smarty->assign('heder', $heder);
$smarty->assign('currentContry', $countrysList);
$smarty->display('AddCountry.tpl');