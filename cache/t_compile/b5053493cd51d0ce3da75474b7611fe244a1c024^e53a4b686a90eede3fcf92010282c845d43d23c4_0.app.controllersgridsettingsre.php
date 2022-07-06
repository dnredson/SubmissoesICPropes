<?php
/* Smarty version 3.1.39, created on 2022-06-13 14:19:59
  from 'app:controllersgridsettingsre' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62a7478faf13c7_19722210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e53a4b686a90eede3fcf92010282c845d43d23c4' => 
    array (
      0 => 'app:controllersgridsettingsre',
      1 => 1650987488,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a7478faf13c7_19722210 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#editReviewFormTabs').pkpHandler(
				'$.pkp.controllers.TabHandler',
				{
					<?php if (!$_smarty_tpl->tpl_vars['canEdit']->value) {?>disabled: [0, 1],<?php }?>
					selected: <?php if ($_smarty_tpl->tpl_vars['preview']->value) {?>2<?php } else { ?>0<?php }?>
				}
		);
	});
<?php echo '</script'; ?>
>
<div id="editReviewFormTabs" class="pkp_controllers_tab">
	<ul>
		<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'op'=>"reviewFormBasics",'reviewFormId'=>$_smarty_tpl->tpl_vars['reviewFormId']->value),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.reviewForms.edit"),$_smarty_tpl ) );?>
</a></li>
		<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'op'=>"reviewFormElements",'reviewFormId'=>$_smarty_tpl->tpl_vars['reviewFormId']->value),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.reviewFormElements"),$_smarty_tpl ) );?>
</a></li>
		<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'op'=>"reviewFormPreview",'reviewFormId'=>$_smarty_tpl->tpl_vars['reviewFormId']->value),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.reviewForms.preview"),$_smarty_tpl ) );?>
</a></li>
	</ul>
</div>
<?php }
}
