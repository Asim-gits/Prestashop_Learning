<?php /* Smarty version Smarty-3.1.19, created on 2017-07-12 08:19:47
         compiled from "D:\wamp64\www\ps\themes\leo_tshirt\modules\leomanagewidgets\views\widgets\displayfooter\widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12027596613e364ea87-23471020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f729f98bd63b7806a27b5d86499721b736f5b9d' => 
    array (
      0 => 'D:\\wamp64\\www\\ps\\themes\\leo_tshirt\\modules\\leomanagewidgets\\views\\widgets\\displayfooter\\widget_html.tpl',
      1 => 1468838120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12027596613e364ea87-23471020',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'html' => 0,
    'widget_heading' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_596613e3682893_97791877',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596613e3682893_97791877')) {function content_596613e3682893_97791877($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html block footer-block block nopadding">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content toggle-footer">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
