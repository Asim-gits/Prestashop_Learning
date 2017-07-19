<?php /* Smarty version Smarty-3.1.19, created on 2017-07-12 08:42:13
         compiled from "D:\wamp64\www\ps\modules\appagebuilder\views\templates\hook\manufacturers_owl_carousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2279459661925cf5e60-31924788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76192cf6a9d10127d4ddbb566a2299a04cb63c64' => 
    array (
      0 => 'D:\\wamp64\\www\\ps\\modules\\appagebuilder\\views\\templates\\hook\\manufacturers_owl_carousel.tpl',
      1 => 1499863010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2279459661925cf5e60-31924788',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'carouselName' => 0,
    'formAtts' => 0,
    'manuselect' => 0,
    'Num' => 0,
    'manu' => 0,
    'link' => 0,
    'img_manu_dir' => 0,
    'image_type' => 0,
    'comparator_max_item' => 0,
    'compared_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_596619261de9f3_49306414',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596619261de9f3_49306414')) {function content_596619261de9f3_49306414($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\manufacturers_owl_carousel -->
<div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carouselName']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="owl-carousel owl-theme">
	<?php if (array_key_exists('value_by_manufacture',$_smarty_tpl->tpl_vars['formAtts']->value)&&$_smarty_tpl->tpl_vars['formAtts']->value['value_by_manufacture']=='1') {?>
		<?php $_smarty_tpl->tpl_vars['Num'] = new Smarty_variable(array_chunk($_smarty_tpl->tpl_vars['manuselect']->value,$_smarty_tpl->tpl_vars['formAtts']->value['itempercolumn']), null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['Num'] = new Smarty_variable(array_chunk($_smarty_tpl->tpl_vars['manuselect']->value,$_smarty_tpl->tpl_vars['formAtts']->value['itempercolumn']), null, 0);?>
	<?php }?>

	<?php  $_smarty_tpl->tpl_vars['manuselect'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manuselect']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Num']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['manuselect']->key => $_smarty_tpl->tpl_vars['manuselect']->value) {
$_smarty_tpl->tpl_vars['manuselect']->_loop = true;
?> 
	<div class="item">
		<?php  $_smarty_tpl->tpl_vars['manu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['manuselect']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['manu']->key => $_smarty_tpl->tpl_vars['manu']->value) {
$_smarty_tpl->tpl_vars['manu']->_loop = true;
?>
			<div class="manufacturer-container manufacturer-block" itemscope itemtype="https://schema.org/Brand">
				<div class="left-block">
					<div class="manufacturer-image-container image">
						<a title="<?php echo smartyTranslate(array('s'=>'%s','sprintf'=>array($_smarty_tpl->tpl_vars['manu']->value['name']),'mod'=>'appagebuilder'),$_smarty_tpl);?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manu']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manu']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url">
								<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['img_manu_dir']->value;?>
<?php echo intval($_smarty_tpl->tpl_vars['manu']->value['id_manufacturer']);?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_type']->value, ENT_QUOTES, 'UTF-8', true);?>
.jpg" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manu']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="image" />
						</a>
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
            //afterMove : false,
            afterAction : SetOwlCarouselFirstLast,
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
