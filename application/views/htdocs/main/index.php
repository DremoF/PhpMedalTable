<?php

require_once 'D:\OpenServer\domains\PhpFrameworkMaster\application\core\space.php';

$heder = 'Главный зачёт';
$smarty->assign('heder', $heder);
$smarty->assign('getMedalCount', $medalsList);
$smarty->display('index.tpl');