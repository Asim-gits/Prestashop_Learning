<?php /* Smarty version Smarty-3.1.19, created on 2017-07-12 08:42:11
         compiled from "D:\wamp64\www\ps\modules\appagebuilder\views\templates\hook\ApBlockOwlCarouselItem.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1819659661923df2620-41464283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8d78221ae0ce95197f7af7aa721f351fabf6c25' => 
    array (
      0 => 'D:\\wamp64\\www\\ps\\modules\\appagebuilder\\views\\templates\\hook\\ApBlockOwlCarouselItem.tpl',
      1 => 1499863010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1819659661923df2620-41464283',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formAtts' => 0,
    'carouselName' => 0,
    'Num' => 0,
    'sliders' => 0,
    'slider' => 0,
    'comparator_max_item' => 0,
    'compared_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_596619242f01b1_76934099',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596619242f01b1_76934099')) {function content_596619242f01b1_76934099($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApBlockOwlCarouselItem -->
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])&&$_smarty_tpl->tpl_vars['formAtts']->value['title']) {?>
	<h4 class="title_block"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h4>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['description'])&&$_smarty_tpl->tpl_vars['formAtts']->value['description']) {?>
	<p><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['description'];?>
</p>
<?php }?>
<div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carouselName']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="owl-carousel owl-theme">
	<?php $_smarty_tpl->tpl_vars['Num'] = new Smarty_variable(array_chunk($_smarty_tpl->tpl_vars['formAtts']->value['slides'],$_smarty_tpl->tpl_vars['formAtts']->value['itempercolumn']), null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['sliders'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sliders']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Num']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sliders']->key => $_smarty_tpl->tpl_vars['sliders']->value) {
$_smarty_tpl->tpl_vars['sliders']->_loop = true;
?> 
	<div class="item">
		<?php  $_smarty_tpl->tpl_vars['slider'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slider']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sliders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slider']->key => $_smarty_tpl->tpl_vars['slider']->value) {
$_smarty_tpl->tpl_vars['slider']->_loop = true;
?>
			<div class="block-carousel-container">
				<div class="left-block">
					<div class="block-carousel-image-container image">
						<div class="ap-more-info" data-id="<?php echo intval($_smarty_tpl->tpl_vars['slider']->value['id']);?>
"></div>
						<?php if ($_smarty_tpl->tpl_vars['slider']->value['link']) {?>
						<a title="<?php echo smartyTranslate(array('s'=>'%s','sprintf'=>array($_smarty_tpl->tpl_vars['slider']->value['title']),'mod'=>'appagebuilder'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['is_open']) {?>target="_blank"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['slider']->value['link'];?>
">
						<?php }?>
						
						<?php if (isset($_smarty_tpl->tpl_vars['slider']->value['image'])&&!empty($_smarty_tpl->tpl_vars['slider']->value['image'])) {?>
							<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['slider']->value['image'];?>
" alt="<?php if (isset($_smarty_tpl->tpl_vars['slider']->value['title'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"/>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['slider']->value['title'])&&!empty($_smarty_tpl->tpl_vars['slider']->value['title'])) {?>
							<div class="title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</div>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['slider']->value['descript'])&&!empty($_smarty_tpl->tpl_vars['slider']->value['descript'])) {?>
							<div class="descript"><?php echo rtrim($_smarty_tpl->tpl_vars['slider']->value['descript']);?>
</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['slider']->value['link']) {?>
						</a>
						<?php }?>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
	<?php } ?>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'min_item')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'min_item'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Please select at least one product','mod'=>'appagebuilder','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'min_item'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'max_item')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'max_item'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'You cannot add more than %d product(s) to the product comparison','mod'=>'appagebuilder','sprintf'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value,'js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'max_item'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('comparator_max_item'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('comparedProductsIds'=>$_smarty_tpl->tpl_vars['compared_products']->value),$_smarty_tpl);?>

<script type="text/javascript">
$(document).ready(function() {
	$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carouselName']->value, ENT_QUOTES, 'UTF-8', true);?>
').owlCarousel({
            items : <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['items']) {?><?php echo intval($_smarty_tpl->tpl_vars['formAtts']->value['items']);?>
<?php } else { ?>false<?php }?>,
            <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['itemsdesktop']) {?>itemsDesktop : [1199,<?php echo intval($_smarty_tpl->tpl_vars['formAtts']->value['itemsdesktop']);?>
],<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['itemsdesktopsmall']) {?>itemsDesktopSmall : [979,<?php echo intval($_smarty_tpl->tpl_vars['formAtts']->value['itemsdesktopsmall']);?>
],<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['itemstablet']) {?>itemsTablet : [768,<?php echo intval($_smarty_tpl->tpl_vars['formAtts']->value['itemstablet']);?>
],<?php }?>

            <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['itemsmobile']) {?>itemsMobile : [479,<?php echo intval($_smarty_tpl->tpl_vars['formAtts']->value['itemsmobile']);?>
],<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['itemscustom']) {?>itemsCustom : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['itemscustom'], ENT_QUOTES, 'UTF-8', true);?>
,<?php }?>
            singleItem : false,         // true : show only 1 item
            itemsScaleUp : false,
            slideSpeed : <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slidespeed']) {?><?php echo intval($_smarty_tpl->tpl_vars['formAtts']->value['slidespeed']);?>
<?php } else { ?>200<?php }?>,  //  change speed when drag and drop a item
            paginationSpeed : <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['paginationspeed']) {?><?php echo intval($_smarty_tpl->tpl_vars['formAtts']->value['paginationspeed']);?>
<?php } else { ?>800<?php }?>, // change speed when go next page

            autoPlay : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['autoplay'], ENT_QUOTES, 'UTF-8', true);?>
,   // time to show each item
            stopOnHover : <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['stoponhover']) {?>true<?php } else { ?>false<?php }?>,
            navigation : <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['navigation']) {?>true<?php } else { ?>false<?php }?>,
            navigationText : ["&lsaquo;", "&rsaquo;"],

            scrollPerPage : <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['scrollperpage']) {?>true<?php } else { ?>false<?php }?>,
            
            pagination : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['pagination'], ENT_QUOTES, 'UTF-8', true);?>
, // show bullist
            paginationNumbers : <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['paginationnumbers']) {?>true<?php } else { ?>false<?php }?>, // show number
            
            responsive : <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['responsive']) {?>true<?php } else { ?>false<?php }?>,
            //responsiveRefreshRate : 200,
            //responsiveBaseWidth : window,
            
            //baseClass : "owl-carousel",
            //theme : "owl-theme",
            
            lazyLoad : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['lazyload'], ENT_QUOTES, 'UTF-8', true);?>
,
            lazyFollow : <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['lazyfollow']) {?>true<?php } else { ?>false<?php }?>,  // true : go to page 7th and load all images page 1...7. false : go to page 7th and load only images of page 7th
            lazyEffect : "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['lazyeffect'], ENT_QUOTES, 'UTF-8', true);?>
",
            
            autoHeight : <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['autoheight']) {?>true<?php } else { ?>false<?php }?>,

            //jsonPath : false,
            //jsonSuccess : false,

            //dragBeforeAnimFinish
            mouseDrag : <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['mousedrag']) {?>true<?php } else { ?>false<?php }?>,
            touchDrag : <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['touchdrag']) {?>true<?php } else { ?>false<?php }?>,
            
            addClassActive : true,
            <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['rtl']) {?>direction:'rtl',<?php }?>
            //transitionStyle : "owl_transitionStyle",
            
            //beforeUpdate : false,
            //afterUpdate : false,
            //beforeInit : false,
            //afterInit : false,
            //beforeMove : false,
            afterMove : SetOwlCarouselFirstLast,
            //afterAction : false,
            //startDragging : false,
            //afterLazyLoad: false
    

        });
});

function SetOwlCarouselFirstLast(el){
	el.find(".owl-item").removeClass("first");
	el.find(".owl-item.active").first().addClass("first");

	el.find(".owl-item").removeClass("last");
	el.find(".owl-item.active").last().addClass("last");
}
</script><?php }} ?>
