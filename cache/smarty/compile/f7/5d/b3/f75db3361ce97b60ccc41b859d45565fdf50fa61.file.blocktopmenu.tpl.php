<?php /* Smarty version Smarty-3.1.19, created on 2017-07-12 08:19:45
         compiled from "D:\wamp64\www\ps\themes\leo_tshirt\modules\blocktopmenu\blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30696596613e1c95fa4-96268086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f75db3361ce97b60ccc41b859d45565fdf50fa61' => 
    array (
      0 => 'D:\\wamp64\\www\\ps\\themes\\leo_tshirt\\modules\\blocktopmenu\\blocktopmenu.tpl',
      1 => 1468838118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30696596613e1c95fa4-96268086',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_596613e1cf6222_87366298',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596613e1cf6222_87366298')) {function content_596613e1cf6222_87366298($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!='') {?>
	<!-- Menu -->
	<div id="block_top_menu" class="sf-contener clearfix">
		<div class="cat-title"><i class="fa fa-navicon"></i></div>
		<ul class="sf-menu clearfix menu-content">
			<?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>
			
		</ul>
		<?php if ($_smarty_tpl->tpl_vars['MENU_SEARCH']->value) {?>
			<div class="sf-search noBack">
				<form id="searchbox" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="get">
					<p>
						<input type="hidden" name="controller" value="search" />
						<input type="hidden" value="position" name="orderby"/>
						<input type="hidden" value="desc" name="orderway"/>
							<input type="text" name="search_query" value="<?php if (isset($_GET['search_query'])) {?><?php echo htmlspecialchars($_GET['search_query'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
					</p>
					<span>
						<button class="btn btn-outline-inverse" name="submit_search" type="submit">
							<span class="button-search fa fa-search"></span>
						</button>
					</span>
				</form>
			</div>
		<?php }?>
	</div>	
	<!--/ Menu -->
<?php }?><?php }} ?>
