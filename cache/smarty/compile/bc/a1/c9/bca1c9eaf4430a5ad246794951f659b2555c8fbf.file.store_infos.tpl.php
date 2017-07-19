<?php /* Smarty version Smarty-3.1.19, created on 2017-07-13 02:33:26
         compiled from "D:\wamp64\www\ps\themes\leo_tshirt\store_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85895967143634c0d2-30995663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bca1c9eaf4430a5ad246794951f659b2555c8fbf' => 
    array (
      0 => 'D:\\wamp64\\www\\ps\\themes\\leo_tshirt\\store_infos.tpl',
      1 => 1468838110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85895967143634c0d2-30995663',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'days_datas' => 0,
    'one_day' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_596714363c0af4_20636574',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596714363c0af4_20636574')) {function content_596714363c0af4_20636574($_smarty_tpl) {?>


	<?php  $_smarty_tpl->tpl_vars['one_day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['days_datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one_day']->key => $_smarty_tpl->tpl_vars['one_day']->value) {
$_smarty_tpl->tpl_vars['one_day']->_loop = true;
?>
	<p>
		<strong class="dark"><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['one_day']->value['day']),$_smarty_tpl);?>
: </strong> &nbsp;<span><?php echo $_smarty_tpl->tpl_vars['one_day']->value['hours'];?>
</span>
	</p>
	<?php } ?>

<?php }} ?>
