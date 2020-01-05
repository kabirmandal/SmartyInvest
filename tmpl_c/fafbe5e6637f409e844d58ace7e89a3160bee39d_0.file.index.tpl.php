<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-05 11:30:54
  from 'C:\xampp\htdocs\SmartyInvest\tmpl\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e11badeef9bf6_13354185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fafbe5e6637f409e844d58ace7e89a3160bee39d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SmartyInvest\\tmpl\\index.tpl',
      1 => 1578220252,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e11badeef9bf6_13354185 (Smarty_Internal_Template $_smarty_tpl) {
?><div>Add Your Bitcoin Address</div>
<form action="/index.php" method="POST">
	<input type="text"  name="User_Withdraw_address"> <br>
	<input type="submit" name="Submit">
</form>

<?php }
}
