<?php /* Smarty version Smarty-3.1.19, created on 2017-07-12 08:50:59
         compiled from "D:\wamp64\www\ps\modules\leoblog\views\templates\front\default\_listing_blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3270759661b3339d2e8-18149713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '314a90635b5f7910afde4b77a12694ead9d607db' => 
    array (
      0 => 'D:\\wamp64\\www\\ps\\modules\\leoblog\\views\\templates\\front\\default\\_listing_blog.tpl',
      1 => 1499862947,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3270759661b3339d2e8-18149713',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'blog' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59661b33688b69_03302667',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59661b33688b69_03302667')) {function content_59661b33688b69_03302667($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\wamp64\\www\\ps\\tools\\smarty\\plugins\\modifier.date_format.php';
?>

<article class="blog-item">
	<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_title','1')) {?>
	<h4 class="title"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a></h4>
	<?php }?>
	<div class="blog-meta">
		<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_author','1')&&!empty($_smarty_tpl->tpl_vars['blog']->value['author'])) {?>
		<span class="blog-author">
			<span class="fa fa-user"> <?php echo smartyTranslate(array('s'=>'Posted By','mod'=>'leoblog'),$_smarty_tpl);?>
:</span> 
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['author_link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['author'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['author'], ENT_QUOTES, 'UTF-8', true);?>
</a> 
		</span>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_category','1')) {?>
		<span class="blog-cat"> 
			<span class="fa fa-list"> <?php echo smartyTranslate(array('s'=>'In','mod'=>'leoblog'),$_smarty_tpl);?>
:</span> 
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['category_link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['category_title'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['category_title'], ENT_QUOTES, 'UTF-8', true);?>
</a>
		</span>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_created','1')) {?>
		<span class="blog-created">
			<span class="fa fa-calendar"> <?php echo smartyTranslate(array('s'=>'On','mod'=>'leoblog'),$_smarty_tpl);?>
: </span> 
			<time class="date" datetime="<?php echo htmlspecialchars(smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%Y"), ENT_QUOTES, 'UTF-8', true);?>
">
				<?php echo smartyTranslate(array('s'=>htmlspecialchars(smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%A"), ENT_QUOTES, 'UTF-8', true),'mod'=>'leoblog'),$_smarty_tpl);?>
,	<!-- day of week -->
				<?php echo smartyTranslate(array('s'=>htmlspecialchars(smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%B"), ENT_QUOTES, 'UTF-8', true),'mod'=>'leoblog'),$_smarty_tpl);?>
		<!-- month-->
				<?php echo smartyTranslate(array('s'=>htmlspecialchars(smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%e"), ENT_QUOTES, 'UTF-8', true),'mod'=>'leoblog'),$_smarty_tpl);?>
,	<!-- day of month -->
				<?php echo smartyTranslate(array('s'=>htmlspecialchars(smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%Y"), ENT_QUOTES, 'UTF-8', true),'mod'=>'leoblog'),$_smarty_tpl);?>
		<!-- year -->
			</time>
		</span>
		<?php }?>
		
		<?php if (isset($_smarty_tpl->tpl_vars['blog']->value['comment_count'])&&$_smarty_tpl->tpl_vars['config']->value->get('listing_show_counter','1')) {?>	
		<span class="blog-ctncomment">
			<span class="fa fa-comments-o"> <?php echo smartyTranslate(array('s'=>'Comment','mod'=>'leoblog'),$_smarty_tpl);?>
:</span> 
			<?php echo intval($_smarty_tpl->tpl_vars['blog']->value['comment_count']);?>

		</span>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_hit','1')) {?>	
		<span class="blog-hit">
			<span class="fa fa-heart"> <?php echo smartyTranslate(array('s'=>'Hit','mod'=>'leoblog'),$_smarty_tpl);?>
:</span> 
			<?php echo intval($_smarty_tpl->tpl_vars['blog']->value['hits']);?>

		</span>
		<?php }?>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['blog']->value['image']&&$_smarty_tpl->tpl_vars['config']->value->get('listing_show_image',1)) {?>
	<div class="blog-image">
		<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['preview_url'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" alt="" class="img-responsive" />
	</div>
	<?php }?>

	<div class="blog-shortinfo">
		<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_description','1')) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['blog']->value['description']),160,'...');?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_readmore',1)) {?>
		<p>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" class="more btn btn-default"><?php echo smartyTranslate(array('s'=>'Read more','mod'=>'leoblog'),$_smarty_tpl);?>
</a>
		</p>
		<?php }?>
	</div>
</article>
	
<!---
	Translation Day of Week - NOT REMOVE
	<?php echo smartyTranslate(array('s'=>'Sunday','mod'=>'leoblog'),$_smarty_tpl);?>

	<?php echo smartyTranslate(array('s'=>'Monday','mod'=>'leoblog'),$_smarty_tpl);?>

	<?php echo smartyTranslate(array('s'=>'Tuesday','mod'=>'leoblog'),$_smarty_tpl);?>

	<?php echo smartyTranslate(array('s'=>'Wednesday','mod'=>'leoblog'),$_smarty_tpl);?>

	<?php echo smartyTranslate(array('s'=>'Thursday','mod'=>'leoblog'),$_smarty_tpl);?>

	<?php echo smartyTranslate(array('s'=>'Friday','mod'=>'leoblog'),$_smarty_tpl);?>

	<?php echo smartyTranslate(array('s'=>'Saturday','mod'=>'leoblog'),$_smarty_tpl);?>

-->
<!---
	Translation Month - NOT REMOVE
		<?php echo smartyTranslate(array('s'=>'January','mod'=>'leoblog'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'February','mod'=>'leoblog'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'March','mod'=>'leoblog'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'April','mod'=>'leoblog'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'May','mod'=>'leoblog'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'June','mod'=>'leoblog'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'July','mod'=>'leoblog'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'August','mod'=>'leoblog'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'September','mod'=>'leoblog'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'October','mod'=>'leoblog'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'November','mod'=>'leoblog'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'December','mod'=>'leoblog'),$_smarty_tpl);?>

--><?php }} ?>
