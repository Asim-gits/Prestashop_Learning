<?php /* Smarty version Smarty-3.1.19, created on 2017-07-12 09:19:16
         compiled from "D:\wamp64\www\ps\themes\leo_tshirt\modules\productcomments\\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11156596621d41daa37-34936329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8adc82655095b8a9a11b12a75b03aaa603d6bbe1' => 
    array (
      0 => 'D:\\wamp64\\www\\ps\\themes\\leo_tshirt\\modules\\productcomments\\\\tab.tpl',
      1 => 1468838122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11156596621d41daa37-34936329',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USE_PTABS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_596621d41ff354_83179038',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596621d41ff354_83179038')) {function content_596621d41ff354_83179038($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['USE_PTABS']->value)&&$_smarty_tpl->tpl_vars['USE_PTABS']->value) {?>
    <li><a id="link_idTab5" href="#idTab5" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Reviews','mod'=>'productcomments'),$_smarty_tpl);?>
</a></li>
<?php } else { ?>
    <h3 id="#idTab5" class="idTabHrefShort page-subheading"><?php echo smartyTranslate(array('s'=>'Reviews','mod'=>'productcomments'),$_smarty_tpl);?>
</h3>
<?php }?><?php }} ?>
