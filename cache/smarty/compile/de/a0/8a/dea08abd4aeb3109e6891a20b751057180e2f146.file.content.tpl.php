<?php /* Smarty version Smarty-3.1.19, created on 2017-07-12 08:16:37
         compiled from "D:\wamp64\www\ps\admin123\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2793459661325cf6482-89267924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dea08abd4aeb3109e6891a20b751057180e2f146' => 
    array (
      0 => 'D:\\wamp64\\www\\ps\\admin123\\themes\\default\\template\\content.tpl',
      1 => 1465984874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2793459661325cf6482-89267924',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59661325d15044_77927382',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59661325d15044_77927382')) {function content_59661325d15044_77927382($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
