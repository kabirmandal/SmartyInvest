<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-04 11:51:31
  from 'C:\xampp\htdocs\SmartyInvest\tmpl\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e106e33e887f2_10260197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fafbe5e6637f409e844d58ace7e89a3160bee39d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SmartyInvest\\tmpl\\index.tpl',
      1 => 1578135088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e106e33e887f2_10260197 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="/index.php" method="POST">
	<input type="number" step="0.001" name="DepositAmount" max="2.00" min="0.001"> <br>
	<input type="submit" name="Submit">
</form>

<?php }
}
