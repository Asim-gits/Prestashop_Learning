<?php /* Smarty version Smarty-3.1.19, created on 2017-07-13 03:28:54
         compiled from "D:\wamp64\www\ps\admin123\themes\default\template\controllers\localization\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8795596721364cdde5-04951658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c01f277014b0201633fd751c1a47c2d5c1b2577b' => 
    array (
      0 => 'D:\\wamp64\\www\\ps\\admin123\\themes\\default\\template\\controllers\\localization\\content.tpl',
      1 => 1465984874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8795596721364cdde5-04951658',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'localization_form' => 0,
    'localization_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_596721365b9327_48000089',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596721365b9327_48000089')) {function content_596721365b9327_48000089($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['localization_form']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_form']->value;?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['localization_options']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_options']->value;?>
<?php }?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert('Before changing the default currency, we strongly recommend that you enable maintenance mode because any change on default currency requires manual adjustment of the price of each product');
		});
	});
</script><?php }} ?>
