<?php /* Smarty version Smarty-3.1.19, created on 2017-07-12 08:51:21
         compiled from "D:\wamp64\www\ps\modules\leoblog\views\templates\front\default\_social.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1470259661b499693f1-66722679%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5336cd7e344ecf301a7505802f0920b7b2c349b' => 
    array (
      0 => 'D:\\wamp64\\www\\ps\\modules\\leoblog\\views\\templates\\front\\default\\_social.tpl',
      1 => 1499862947,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1470259661b499693f1-66722679',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59661b499aee82_42224975',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59661b499aee82_42224975')) {function content_59661b499aee82_42224975($_smarty_tpl) {?>

		<div class="social-wrap">
			<div class="social-heading"> <b><?php echo smartyTranslate(array('s'=>'Like This','mod'=>'leoblog'),$_smarty_tpl);?>
</b> </div>
			<?php if ($_smarty_tpl->tpl_vars['config']->value->get('social_code','')) {?>
				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value->get('social_code',''), ENT_QUOTES, 'UTF-8', true);?>

			<?php } else { ?>
			<!-- Twitter Button -->
			<div class="itemTwitterButton">
				<a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal" >
					<?php echo smartyTranslate(array('s'=>'Twitter','mod'=>'leoblog'),$_smarty_tpl);?>

				</a>
				<script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
			</div>

			 
			<!-- Facebook Button -->
			<div class="itemFacebookButton">
				<div id="fb-root"></div>
				<script type="text/javascript">
					(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));
				</script>
				<div class="fb-like" data-send="false" data-width="200" data-show-faces="true"></div>
			</div>

			 
			 	<!-- Google +1 Button -->
			<div class="itemGooglePlusOneButton">
				<g:plusone annotation="inline" width="120"></g:plusone>
				<script type="text/javascript">
				  (function() {
				  	window.___gcfg = { lang: 'en' }; // Define button default language here
				    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
				    po.src = 'https://apis.google.com/js/plusone.js';
				    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
				  })();
				</script>
			</div>
			<?php }?>
		</div>	 




<?php }} ?>
