<?php /* Smarty version Smarty-3.1.19, created on 2017-07-12 08:20:08
         compiled from "D:\wamp64\www\ps\themes\leo_tshirt\modules\blockviewed\blockviewed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26590596613f87e83b2-00344582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f4b886af59c962202b82b4dae3029ec9ca91223' => 
    array (
      0 => 'D:\\wamp64\\www\\ps\\themes\\leo_tshirt\\modules\\blockviewed\\blockviewed.tpl',
      1 => 1468838118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26590596613f87e83b2-00344582',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'productsViewedObj' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_596613f88006a1_73636068',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596613f88006a1_73636068')) {function content_596613f88006a1_73636068($_smarty_tpl) {?>

<!-- Block Viewed products -->
<div id="viewed-products_block_left" class="block block-info">
	<h4 class="title_block"><?php echo smartyTranslate(array('s'=>'Viewed products','mod'=>'blockviewed'),$_smarty_tpl);?>
</h4>
	<div class="block_content">
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./sub/product/sidebar-obj.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['productsViewedObj']->value,'mod'=>'blockspecials'), 0);?>
 
	</div>
</div>
<?php }} ?>
