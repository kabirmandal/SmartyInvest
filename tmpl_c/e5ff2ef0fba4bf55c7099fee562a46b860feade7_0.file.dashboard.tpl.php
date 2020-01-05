<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-05 12:27:47
  from 'C:\xampp\htdocs\SmartyInvest\tmpl\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e11c833e29c68_75952053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5ff2ef0fba4bf55c7099fee562a46b860feade7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SmartyInvest\\tmpl\\dashboard.tpl',
      1 => 1578223664,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e11c833e29c68_75952053 (Smarty_Internal_Template $_smarty_tpl) {
?><p>Your BTC Address: <?php ob_start();
echo $_SESSION['User_Withdraw_address'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
 </p>

<div>
    <form action="/?a=dashboard" method="GET">
            <input type="number" name="depositamount" value="0.001"> <br>

            <input type="submit" value="Submit"
    </form>
</div>
<?php }
}
