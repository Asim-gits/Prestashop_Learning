<?php /* Smarty version Smarty-3.1.19, created on 2017-07-12 08:51:21
         compiled from "D:\wamp64\www\ps\modules\leoblog\views\templates\front\default\blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1866559661b494d6fd5-14343695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76335987ee0147f8160f36b83a8340358513ab6e' => 
    array (
      0 => 'D:\\wamp64\\www\\ps\\modules\\leoblog\\views\\templates\\front\\default\\blog.tpl',
      1 => 1499862947,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1866559661b494d6fd5-14343695',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'is_active' => 0,
    'blog' => 0,
    'config' => 0,
    'blog_count_comment' => 0,
    'module_tpl' => 0,
    'tags' => 0,
    'tag' => 0,
    'samecats' => 0,
    'tagrelated' => 0,
    'cblog' => 0,
    'productrelated' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59661b49940999_60182099',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59661b49940999_60182099')) {function content_59661b49940999_60182099($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\wamp64\\www\\ps\\tools\\smarty\\plugins\\modifier.date_format.php';
?>

<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
		<div id="blogpage">
			<div class="blog-detail">
				<div class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'Sorry, We are updating data, please come back later!!!!','mod'=>'leoblog'),$_smarty_tpl);?>
</div>
			</div>
		</div>
	<?php } else { ?>	
	<div id="blogpage">
		<article class="blog-detail">
			<?php if ($_smarty_tpl->tpl_vars['is_active']->value) {?>
			<h1 class="blog-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->meta_title, ENT_QUOTES, 'UTF-8', true);?>
</h1>
			<div class="blog-meta">
				<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_show_author','1')) {?>
				<span class="blog-author">
					<span class="fa fa-user"> <?php echo smartyTranslate(array('s'=>'Posted By','mod'=>'leoblog'),$_smarty_tpl);?>
: </span>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->author_link, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->author, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->author, ENT_QUOTES, 'UTF-8', true);?>
</a>
				</span>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_show_category','1')) {?>
				<span class="blog-cat"> 
					<span class="fa fa-list"> <?php echo smartyTranslate(array('s'=>'In','mod'=>'leoblog'),$_smarty_tpl);?>
: </span> 
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->category_link, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->category_title, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->category_title, ENT_QUOTES, 'UTF-8', true);?>
</a>
				</span>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_show_created','1')) {?>
				<span class="blog-created">
					<span class="fa fa-calendar"> <?php echo smartyTranslate(array('s'=>'On','mod'=>'leoblog'),$_smarty_tpl);?>
: </span> 
					<time class="date" datetime="<?php echo htmlspecialchars(smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value->date_add),"%Y"), ENT_QUOTES, 'UTF-8', true);?>
">
						<?php echo smartyTranslate(array('s'=>htmlspecialchars(smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value->date_add),"%A"), ENT_QUOTES, 'UTF-8', true),'mod'=>'leoblog'),$_smarty_tpl);?>
,	<!-- day of week -->
						<?php echo smartyTranslate(array('s'=>htmlspecialchars(smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value->date_add),"%B"), ENT_QUOTES, 'UTF-8', true),'mod'=>'leoblog'),$_smarty_tpl);?>
		<!-- month-->
						<?php echo smartyTranslate(array('s'=>htmlspecialchars(smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value->date_add),"%e"), ENT_QUOTES, 'UTF-8', true),'mod'=>'leoblog'),$_smarty_tpl);?>
,	<!-- day of month -->
						<?php echo smartyTranslate(array('s'=>htmlspecialchars(smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value->date_add),"%Y"), ENT_QUOTES, 'UTF-8', true),'mod'=>'leoblog'),$_smarty_tpl);?>
		<!-- year -->
					</time>
				</span>
				<?php }?>
				
				<?php if (isset($_smarty_tpl->tpl_vars['blog_count_comment']->value)&&$_smarty_tpl->tpl_vars['config']->value->get('item_show_counter','1')) {?>
				<span class="blog-ctncomment">
					<span class="fa fa-comments-o"> <?php echo smartyTranslate(array('s'=>'Comment','mod'=>'leoblog'),$_smarty_tpl);?>
:</span> 
					<?php echo intval($_smarty_tpl->tpl_vars['blog_count_comment']->value);?>

				</span>
				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['blog']->value->hits)&&$_smarty_tpl->tpl_vars['config']->value->get('item_show_hit','1')) {?>
				<span class="blog-hit">
					<span class="fa fa-heart"> <?php echo smartyTranslate(array('s'=>'Hit','mod'=>'leoblog'),$_smarty_tpl);?>
:</span>
					<?php echo intval($_smarty_tpl->tpl_vars['blog']->value->hits);?>

				</span>
				<?php }?>
			</div>

			<?php if ($_smarty_tpl->tpl_vars['blog']->value->preview_url&&$_smarty_tpl->tpl_vars['config']->value->get('item_show_image','1')) {?>
				<div class="blog-image">
					<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->preview_url, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->meta_title, ENT_QUOTES, 'UTF-8', true);?>
" class="img-responsive" />
				</div>
			<?php }?>

			<div class="blog-description">
				<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_show_description',1)) {?>
					<?php echo $_smarty_tpl->tpl_vars['blog']->value->description;?>

				<?php }?>
				<?php echo $_smarty_tpl->tpl_vars['blog']->value->content;?>

			</div>
			
			

			<?php if (trim($_smarty_tpl->tpl_vars['blog']->value->video_code)) {?>
			<div class="blog-video-code">
				<div class="inner ">
					<?php echo $_smarty_tpl->tpl_vars['blog']->value->video_code;?>

				</div>
			</div>
			<?php }?>

			<div class="social-share">
				 <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['module_tpl']->value)."_social.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div>
			<?php if ($_smarty_tpl->tpl_vars['tags']->value) {?>
			<div class="blog-tags">
				<span><?php echo smartyTranslate(array('s'=>'Tags:','mod'=>'leoblog'),$_smarty_tpl);?>
</span>
			 
				<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
					 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8', true);?>
"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8', true);?>
</span></a>
				<?php } ?>
				 
			</div>
			<?php }?>

			<?php if (!empty($_smarty_tpl->tpl_vars['samecats']->value)||!empty($_smarty_tpl->tpl_vars['tagrelated']->value)) {?>
			<div class="extra-blogs row">
			<?php if (!empty($_smarty_tpl->tpl_vars['samecats']->value)) {?>
				<div class="col-lg-6 col-md-6 col-xs-12">
					<h4><?php echo smartyTranslate(array('s'=>'In Same Category','mod'=>'leoblog'),$_smarty_tpl);?>
</h4>
					<ul>
					<?php  $_smarty_tpl->tpl_vars['cblog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cblog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['samecats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cblog']->key => $_smarty_tpl->tpl_vars['cblog']->value) {
$_smarty_tpl->tpl_vars['cblog']->_loop = true;
?>
						<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cblog']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cblog']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
					<?php } ?>
					</ul>
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12">
					<h4><?php echo smartyTranslate(array('s'=>'Related by Tags','mod'=>'leoblog'),$_smarty_tpl);?>
</h4>
					<ul>
					<?php  $_smarty_tpl->tpl_vars['cblog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cblog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tagrelated']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cblog']->key => $_smarty_tpl->tpl_vars['cblog']->value) {
$_smarty_tpl->tpl_vars['cblog']->_loop = true;
?>
						<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cblog']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cblog']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
					<?php } ?>
					</ul>
				</div>
			<?php }?>
			</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['productrelated']->value) {?>

			<?php }?>
			<div class="blog-comment-block">
			<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_comment_engine','local')=='facebook') {?>
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['module_tpl']->value)."_facebook_comment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php } elseif ($_smarty_tpl->tpl_vars['config']->value->get('item_comment_engine','local')=='diquis') {?>
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['module_tpl']->value)."_diquis_comment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			
			<?php } else { ?>
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['module_tpl']->value)."_local_comment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php }?>
			</div>	
			<?php } else { ?>
			<div class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'Sorry, This blog is not avariable. May be this was unpublished or deleted.','mod'=>'leoblog'),$_smarty_tpl);?>
</div>
			<?php }?>

		</article>
	</div>
 	<?php }?>

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
