<?php /* Smarty version Smarty-3.1.19, created on 2017-07-12 09:20:54
         compiled from "D:\wamp64\www\ps\themes\leo_tshirt\modules\blockwishlist\my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2282859662236edb2e5-92551645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d01ae948658c09204c123872f87a195dba34248' => 
    array (
      0 => 'D:\\wamp64\\www\\ps\\themes\\leo_tshirt\\modules\\blockwishlist\\my-account.tpl',
      1 => 1468838118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2282859662236edb2e5-92551645',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_596622370179a2_79005671',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596622370179a2_79005671')) {function content_596622370179a2_79005671($_smarty_tpl) {?>

<!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<i class="fa fa-heart"></i>
		<span><?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
	</a>
</li>
<!-- END : MODULE WishList --><?php }} ?>
