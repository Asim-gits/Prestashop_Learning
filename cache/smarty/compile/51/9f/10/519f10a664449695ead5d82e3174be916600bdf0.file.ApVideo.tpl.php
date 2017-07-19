<?php /* Smarty version Smarty-3.1.19, created on 2017-07-12 08:42:14
         compiled from "D:\wamp64\www\ps\modules\appagebuilder\views\templates\hook\ApVideo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95955966192628b6d7-51010441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '519f10a664449695ead5d82e3174be916600bdf0' => 
    array (
      0 => 'D:\\wamp64\\www\\ps\\modules\\appagebuilder\\views\\templates\\hook\\ApVideo.tpl',
      1 => 1499863010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95955966192628b6d7-51010441',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formAtts' => 0,
    'apLiveEdit' => 0,
    'apLiveEditEnd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_596619263239a6_50313315',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596619263239a6_50313315')) {function content_596619263239a6_50313315($_smarty_tpl) {?>
 <!-- @file modules\appagebuilder\views\templates\hook\ApVideo -->
 <div id="video-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['form_id'], ENT_QUOTES, 'UTF-8', true);?>
" class="video" style="clear:both;">
	<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>

	<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])&&!empty($_smarty_tpl->tpl_vars['formAtts']->value['title'])) {?>
	<h4 class="title_block">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['title'], ENT_QUOTES, 'UTF-8', true);?>

	</h4>
	<?php }?>
	<div style="text-align:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['align'], ENT_QUOTES, 'UTF-8', true);?>
">
		<?php echo isset($_smarty_tpl->tpl_vars['formAtts']->value['content_html']) ? $_smarty_tpl->tpl_vars['formAtts']->value['content_html'] : '';?>

	</div>
	<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>

</div><?php }} ?>
