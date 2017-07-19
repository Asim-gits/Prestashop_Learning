<?php /* Smarty version Smarty-3.1.19, created on 2017-07-12 08:42:14
         compiled from "D:\wamp64\www\ps\modules\appagebuilder\views\templates\hook\ApFullSlider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18675596619266c1299-27860943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d75aa585218ca7c31f60d46f96d05c57567d5da' => 
    array (
      0 => 'D:\\wamp64\\www\\ps\\modules\\appagebuilder\\views\\templates\\hook\\ApFullSlider.tpl',
      1 => 1499863010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18675596619266c1299-27860943',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formAtts' => 0,
    'apLiveEdit' => 0,
    'slides_count' => 0,
    'count' => 0,
    'slide' => 0,
    'apLiveEditEnd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_596619269b5f13_04474061',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596619269b5f13_04474061')) {function content_596619269b5f13_04474061($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApFullSlider -->
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])&&$_smarty_tpl->tpl_vars['formAtts']->value['title']) {?>
	<h4 class="title_block"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h4>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slides']) {?>
<?php $_smarty_tpl->tpl_vars['slides_count'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['formAtts']->value['slides']), null, 0);?> 
<div data-ride="carousel" class="carousel slide full-slider block" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['form_id'], ENT_QUOTES, 'UTF-8', true);?>
"
	 style="width:<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['width']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['width'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>100%<?php }?>;
	 height:<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['height']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['height'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>400px<?php }?>;">
	<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>

	<ol class="carousel-indicators <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['display_indicators'])&&$_smarty_tpl->tpl_vars['formAtts']->value['display_indicators']==0)||$_smarty_tpl->tpl_vars['slides_count']->value<=1) {?>hide<?php }?>">
		<?php $_smarty_tpl->tpl_vars["count"] = new Smarty_variable("0", null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formAtts']->value['slides']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
		<li <?php if ($_smarty_tpl->tpl_vars['count']->value==0) {?>class="active"<?php }?> data-slide-to="<?php echo intval($_smarty_tpl->tpl_vars['count']->value);?>
" data-target="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['form_id'], ENT_QUOTES, 'UTF-8', true);?>
"></li>
		<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
		<?php } ?>
	</ol>
	<div role="listbox" class="carousel-inner">
		<?php $_smarty_tpl->tpl_vars["count"] = new Smarty_variable("0", null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formAtts']->value['slides']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
		<div class="item <?php if ($_smarty_tpl->tpl_vars['count']->value==0) {?>active<?php }?>">
			<?php if ($_smarty_tpl->tpl_vars['slide']->value['img']) {?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['slide']->value['img'];?>
"/>
			<?php }?>
			<div class="content-slider"><?php echo $_smarty_tpl->tpl_vars['slide']->value['descript'];?>
</div>
			<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['display_title'])&&$_smarty_tpl->tpl_vars['formAtts']->value['display_title'])||!isset($_smarty_tpl->tpl_vars['formAtts']->value['display_title'])) {?>
			<div class="carousel-caption">
				<?php if ($_smarty_tpl->tpl_vars['slide']->value['link']) {?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['slide']->value['link'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['is_open'])&&$_smarty_tpl->tpl_vars['formAtts']->value['is_open']) {?>target="_blank"<?php }?>>
				<?php }?>
				<h3><?php echo $_smarty_tpl->tpl_vars['slide']->value['title'];?>
</h3>
				<?php if ($_smarty_tpl->tpl_vars['slide']->value['link']) {?>
				</a>
				<?php }?>
			</div>
			<?php }?>
		</div>
		<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
		<?php } ?>
	</div>
	<a data-slide="prev" role="button" href="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['form_id'], ENT_QUOTES, 'UTF-8', true);?>
" class="left carousel-control">
		<span aria-hidden="true" class="glyphicon glyphicon-chevron-left">‹</span>
		<span class="sr-only">Previous</span>
	</a>
	<a data-slide="next" role="button" href="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['form_id'], ENT_QUOTES, 'UTF-8', true);?>
" class="right carousel-control">
		<span aria-hidden="true" class="glyphicon glyphicon-chevron-right">›</span>
		<span class="sr-only">Next</span>
	</a>
	<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>

</div>
<?php }?>
<script type="text/javascript">
	$(function() {
		$("#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['form_id'], ENT_QUOTES, 'UTF-8', true);?>
").carousel({
			interval: <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['interval']) {?><?php echo intval($_smarty_tpl->tpl_vars['formAtts']->value['interval']);?>
<?php }?>
		});
	});
</script><?php }} ?>
