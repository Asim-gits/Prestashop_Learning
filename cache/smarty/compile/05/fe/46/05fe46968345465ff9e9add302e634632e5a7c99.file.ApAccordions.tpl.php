<?php /* Smarty version Smarty-3.1.19, created on 2017-07-12 08:42:12
         compiled from "D:\wamp64\www\ps\modules\appagebuilder\views\templates\hook\ApAccordions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:640359661924764a69-64643217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05fe46968345465ff9e9add302e634632e5a7c99' => 
    array (
      0 => 'D:\\wamp64\\www\\ps\\modules\\appagebuilder\\views\\templates\\hook\\ApAccordions.tpl',
      1 => 1499863010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '640359661924764a69-64643217',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isSubTab' => 0,
    'apLiveEdit' => 0,
    'formAtts' => 0,
    'apContent' => 0,
    'apLiveEditEnd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59661924963fb9_19113510',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59661924963fb9_19113510')) {function content_59661924963fb9_19113510($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApAccordions -->
<?php if (!isset($_smarty_tpl->tpl_vars['isSubTab']->value)) {?>
<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>

<div<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['id'])) {?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> class="ap-accordion panel-group<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['class'])) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['class'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])&&$_smarty_tpl->tpl_vars['formAtts']->value['title']) {?>
    <h4 class="title_block"><?php echo htmlspecialchars(rtrim($_smarty_tpl->tpl_vars['formAtts']->value['title']), ENT_QUOTES, 'UTF-8', true);?>
</h4>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>

</div>
<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>

<script type="text/javascript">
    $(document).ready(function() {
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['active_type'])) {?>
            <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['active_type']=='hideall') {?>
				$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
 .panel-heading .panel-title > a').addClass('collapsed');
				//collapsed
            <?php } elseif ($_smarty_tpl->tpl_vars['formAtts']->value['active_type']=='set') {?>
				$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
 .panel-heading .panel-title > a').addClass('collapsed');
				$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
 .panel-heading .panel-title > a:eq(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['active_accordion'], ENT_QUOTES, 'UTF-8', true);?>
)').removeClass('collapsed');
				
                $('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
 .panel-collapse:eq(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['active_accordion'], ENT_QUOTES, 'UTF-8', true);?>
)').collapse('show');
				$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
 .panel-heading .panel-title > a').on('click', function(e) {
					e.stopPropagation();
					e.preventDefault();
					var div_id = $(this).attr('href');
					var data_parent = $(this).data('parent');
					if(!$(this).hasClass('collapsed'))
					{
						$(this).toggleClass('collapsed');
						$(div_id ).collapse("toggle");
					}
					else
					{
						$(data_parent+' .panel-title a').not('.collapsed').toggleClass('collapsed');
						$(data_parent+' .panel-collapse').not('.collapse').collapse("toggle");					
						$(this).toggleClass('collapsed');
						$(div_id ).collapse("toggle");
					}					
				});
            <?php } else { ?>
                $('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
 .panel-collapse').collapse('show');
				
				$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
 .panel-heading .panel-title > a').on('click', function(e) {
					e.stopPropagation();
					e.preventDefault();
					// show, hidden content
					var div_id = $(this).attr('href');
					$(div_id ).collapse("toggle");
					// chage icon
					$(this).toggleClass( 'collapsed');
				});
            <?php }?>
        <?php }?>
    });
</script>
<?php } else { ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['parent_id'], ENT_QUOTES, 'UTF-8', true);?>
" aria-controls="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" aria-expanded="true"
                       href="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                </h4>
            </div>
            <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" class="panel-collapse collapse" role="tabpanel">
                <div class="panel-body">
                    <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>

                </div>
            </div>
        </div> 
<?php }?><?php }} ?>
