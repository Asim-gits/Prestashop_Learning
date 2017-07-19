<?php /* Smarty version Smarty-3.1.19, created on 2017-07-12 08:19:49
         compiled from "D:\wamp64\www\ps\themes\leo_tshirt\layout\default\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21199596613e59931f9-22981957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8560b8e632b55f5caf3351e3ccab11b2e6eda5c8' => 
    array (
      0 => 'D:\\wamp64\\www\\ps\\themes\\leo_tshirt\\layout\\default\\footer.tpl',
      1 => 1468838114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21199596613e59931f9-22981957',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_CONTENTBOTTOM' => 0,
    'page_name' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_596613e59dc8b8_40049904',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596613e59dc8b8_40049904')) {function content_596613e59dc8b8_40049904($_smarty_tpl) {?>		<?php if ($_smarty_tpl->tpl_vars['HOOK_CONTENTBOTTOM']->value&&in_array($_smarty_tpl->tpl_vars['page_name']->value,array('index'))) {?>
			<div id="contentbottom" class="no-border clearfix block">
				<?php echo $_smarty_tpl->tpl_vars['HOOK_CONTENTBOTTOM']->value;?>

			</div>
		<?php }?>
</section>
<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
<!-- Right -->
<section id="right_column" class="column sidebar col-md-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
">
		<?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

</section>
<?php }?>

<?php }} ?>
