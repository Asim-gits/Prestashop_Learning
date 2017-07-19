<?php /* Smarty version Smarty-3.1.19, created on 2017-07-12 08:42:14
         compiled from "D:\wamp64\www\ps\admin123\themes\default\template\helpers\tree\tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:922059661926bd6cf2-85193750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21b5284b0a0da05cf690750e0b0f446daa4e5c3c' => 
    array (
      0 => 'D:\\wamp64\\www\\ps\\admin123\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1465984874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '922059661926bd6cf2-85193750',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59661926c3e611_18182031',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59661926c3e611_18182031')) {function content_59661926c3e611_18182031($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div><?php }} ?>
