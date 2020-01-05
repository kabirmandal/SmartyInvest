<?php
session_start();
define('SMARTY_DIR' , './inc/');
require_once(SMARTY_DIR . 'Smarty.class.php');

$smarty = new Smarty();

$smarty->setTemplateDir('./tmpl/');
$smarty->setCompileDir('./tmpl_c/');


$smarty->assign('name','Ned');

//** un-comment the following line to show the debug console
//$smarty->debugging = true;

if(isset($_GET['a'])){
	if($_GET['a']=='home'){
		$smarty->display('index.tpl');
	}elseif($_GET['a']=='dashboard'){
		$smarty->display('dashboard.tpl');
	}

}else{
	$smarty->display('index.tpl');
}

// Control form Post of index page  
if (isset($_POST['User_Withdraw_address'])){
	 $_SESSION['User_Withdraw_address'] = $_POST['User_Withdraw_address'];
	// $smarty->assign('UWA', $_SESSION['User_Withdraw_address']);
	header('Location: /?a=dashboard');
	//$smarty->display('dashboard.tpl');
}

?>
