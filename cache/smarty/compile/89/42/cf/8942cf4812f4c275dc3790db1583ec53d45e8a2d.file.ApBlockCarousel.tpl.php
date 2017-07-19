<?php /* Smarty version Smarty-3.1.19, created on 2017-07-12 08:42:11
         compiled from "D:\wamp64\www\ps\modules\appagebuilder\views\templates\hook\ApBlockCarousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:343159661923d74450-63457301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8942cf4812f4c275dc3790db1583ec53d45e8a2d' => 
    array (
      0 => 'D:\\wamp64\\www\\ps\\modules\\appagebuilder\\views\\templates\\hook\\ApBlockCarousel.tpl',
      1 => 1499863010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '343159661923d74450-63457301',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'apLiveEdit' => 0,
    'formAtts' => 0,
    'apLiveEditEnd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59661923ddff72_01607950',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59661923ddff72_01607950')) {function content_59661923ddff72_01607950($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApBlockCarousel -->
<div class="block block_carousel exclusive appagebuilder">
	<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>

	<div class="block_content">
		<?php if (!empty($_smarty_tpl->tpl_vars['formAtts']->value['slides'])) {?>
			<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['carousel_type']=='boostrap') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('./ApBlockCarouselItem.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php } else { ?>
				<?php echo $_smarty_tpl->getSubTemplate ('./ApBlockOwlCarouselItem.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php }?>
		<?php } else { ?>
			<p class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No slide at this time.','mod'=>'appagebuilder'),$_smarty_tpl);?>
</p>
		<?php }?>
	</div>
	<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>

</div><?php }} ?>
