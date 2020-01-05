<?php
define('SMARTY_DIR' , './inc/');
require_once(SMARTY_DIR . 'Smarty.class.php');

$smarty = new Smarty();

$smarty->setTemplateDir('./tmpl/');
$smarty->setCompileDir('./tmpl_c/');


$smarty->assign('name','Ned');

//** un-comment the following line to show the debug console
//$smarty->debugging = true;
$da = $_POST['DepositAmount'];
$smarty->assign('DepositAmount', $da);


$smarty->display('index.tpl');


if (isset($_GET['a'])) {
	echo $_GET['a'];
}


?>
