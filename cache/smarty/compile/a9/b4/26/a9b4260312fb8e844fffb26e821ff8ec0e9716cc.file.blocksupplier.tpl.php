<?php /* Smarty version Smarty-3.1.19, created on 2017-07-12 08:20:08
         compiled from "D:\wamp64\www\ps\themes\leo_tshirt\modules\blocksupplier\blocksupplier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27417596613f8676798-15799327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9b4260312fb8e844fffb26e821ff8ec0e9716cc' => 
    array (
      0 => 'D:\\wamp64\\www\\ps\\themes\\leo_tshirt\\modules\\blocksupplier\\blocksupplier.tpl',
      1 => 1468838118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27417596613f8676798-15799327',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_link_supplier' => 0,
    'link' => 0,
    'suppliers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'supplier' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_596613f87bb535_81464471',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596613f87bb535_81464471')) {function content_596613f87bb535_81464471($_smarty_tpl) {?>

<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<h4 class="title_block">
		<?php if ($_smarty_tpl->tpl_vars['display_link_supplier']->value) {?>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('supplier'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Suppliers','mod'=>'blocksupplier'),$_smarty_tpl);?>
">
		<?php }?>
			<?php echo smartyTranslate(array('s'=>'Suppliers','mod'=>'blocksupplier'),$_smarty_tpl);?>

		<?php if ($_smarty_tpl->tpl_vars['display_link_supplier']->value) {?>
			</a>
		<?php }?>
	</h4>
	<div class="block_content">
		<?php if ($_smarty_tpl->tpl_vars['suppliers']->value) {?>
			<?php if ($_smarty_tpl->tpl_vars['text_list']->value) {?>
			<ul class="list-block list-group bullet">
			<?php  $_smarty_tpl->tpl_vars['supplier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['supplier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['suppliers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['supplier']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['supplier']->iteration=0;
 $_smarty_tpl->tpl_vars['supplier']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['supplier_list']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['supplier']->key => $_smarty_tpl->tpl_vars['supplier']->value) {
$_smarty_tpl->tpl_vars['supplier']->_loop = true;
 $_smarty_tpl->tpl_vars['supplier']->iteration++;
 $_smarty_tpl->tpl_vars['supplier']->index++;
 $_smarty_tpl->tpl_vars['supplier']->first = $_smarty_tpl->tpl_vars['supplier']->index === 0;
 $_smarty_tpl->tpl_vars['supplier']->last = $_smarty_tpl->tpl_vars['supplier']->iteration === $_smarty_tpl->tpl_vars['supplier']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['supplier_list']['first'] = $_smarty_tpl->tpl_vars['supplier']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['supplier_list']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['supplier_list']['last'] = $_smarty_tpl->tpl_vars['supplier']->last;
?>
				<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['supplier_list']['iteration']<=$_smarty_tpl->tpl_vars['text_list_nb']->value) {?>
				<li class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['supplier_list']['last']) {?>last_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['supplier_list']['first']) {?>first_item<?php } else { ?>item<?php }?>">
                <?php if ($_smarty_tpl->tpl_vars['display_link_supplier']->value) {?>
					<a 
					href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getsupplierLink($_smarty_tpl->tpl_vars['supplier']->value['id_supplier'],$_smarty_tpl->tpl_vars['supplier']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" 
					title="<?php echo smartyTranslate(array('s'=>'More about','mod'=>'blocksupplier'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['supplier']->value['name'];?>
">
				<?php }?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                <?php if ($_smarty_tpl->tpl_vars['display_link_supplier']->value) {?>
					</a>
                <?php }?>
				</li>
				<?php }?>
			<?php } ?>
			</ul>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['form_list']->value) {?>
				<form action="<?php echo htmlspecialchars($_SERVER['SCRIPT_NAME'], ENT_QUOTES, 'UTF-8', true);?>
" method="get">
					<div class="form-group">
						<select class="form-control" name="supplier_list">
							<option value="0"><?php echo smartyTranslate(array('s'=>'All suppliers','mod'=>'blocksupplier'),$_smarty_tpl);?>
</option>
						<?php  $_smarty_tpl->tpl_vars['supplier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['supplier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['suppliers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['supplier']->key => $_smarty_tpl->tpl_vars['supplier']->value) {
$_smarty_tpl->tpl_vars['supplier']->_loop = true;
?>
							<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getsupplierLink($_smarty_tpl->tpl_vars['supplier']->value['id_supplier'],$_smarty_tpl->tpl_vars['supplier']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
						<?php } ?>
						</select>
					</div>
				</form>
			<?php }?>
		<?php } else { ?>
			<p><?php echo smartyTranslate(array('s'=>'No supplier','mod'=>'blocksupplier'),$_smarty_tpl);?>
</p>
		<?php }?>
	</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>
