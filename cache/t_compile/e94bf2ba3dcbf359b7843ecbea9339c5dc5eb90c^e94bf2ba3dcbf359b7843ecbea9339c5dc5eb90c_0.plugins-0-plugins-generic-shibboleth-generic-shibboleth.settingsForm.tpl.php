<?php
/* Smarty version 3.1.39, created on 2022-06-14 11:52:18
  from 'plugins-0-plugins-generic-shibboleth-generic-shibboleth:settingsForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62a87672bdac12_39909914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e94bf2ba3dcbf359b7843ecbea9339c5dc5eb90c' => 
    array (
      0 => 'plugins-0-plugins-generic-shibboleth-generic-shibboleth:settingsForm.tpl',
      1 => 1653607065,
      2 => 'plugins-0-plugins-generic-shibboleth-generic-shibboleth',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotification.tpl' => 1,
  ),
),false)) {
function content_62a87672bdac12_39909914 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	$(function() {
		// Attach the form handler.
		$('#shibSettingsForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
<?php echo '</script'; ?>
>

<form class="pkp_form" id="shibSettingsForm" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'op'=>"manage",'category'=>"generic",'plugin'=>$_smarty_tpl->tpl_vars['pluginName']->value,'verb'=>"settings",'save'=>true),$_smarty_tpl ) );?>
">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

	<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"shibSettingsFormNotification"), 0, false);
?>

	<div id="description"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.shibboleth.manager.settings.description"),$_smarty_tpl ) );?>
</div>

	<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"shibbolethSettingsFormArea"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"shibbolethSettingsFormArea"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('id'=>"shibbolethWayfUrlSetting",'type'=>"text",'name'=>"shibbolethWayfUrl",'value'=>$_smarty_tpl->tpl_vars['shibbolethWayfUrl']->value,'label'=>"plugins.generic.shibboleth.manager.settings.shibbolethWayfUrl",'required'=>"true"),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('id'=>"shibbolethHeaderUinSetting",'type'=>"text",'name'=>"shibbolethHeaderUin",'value'=>$_smarty_tpl->tpl_vars['shibbolethHeaderUin']->value,'label'=>"plugins.generic.shibboleth.manager.settings.shibbolethHeaderUin",'required'=>"true"),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('id'=>"shibbolethHeaderFirstNameSetting",'type'=>"text",'name'=>"shibbolethHeaderFirstName",'value'=>$_smarty_tpl->tpl_vars['shibbolethHeaderFirstName']->value,'label'=>"plugins.generic.shibboleth.manager.settings.shibbolethHeaderFirstName",'required'=>"true"),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('id'=>"shibbolethHeaderLastNameSetting",'type'=>"text",'name'=>"shibbolethHeaderLastName",'value'=>$_smarty_tpl->tpl_vars['shibbolethHeaderLastName']->value,'label'=>"plugins.generic.shibboleth.manager.settings.shibbolethHeaderLastName"),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('id'=>"shibbolethHeaderInitialsSetting",'type'=>"text",'name'=>"shibbolethHeaderInitials",'value'=>$_smarty_tpl->tpl_vars['shibbolethHeaderInitials']->value,'label'=>"plugins.generic.shibboleth.manager.settings.shibbolethHeaderInitials"),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('id'=>"shibbolethHeaderEmailSetting",'type'=>"text",'name'=>"shibbolethHeaderEmail",'value'=>$_smarty_tpl->tpl_vars['shibbolethHeaderEmail']->value,'label'=>"plugins.generic.shibboleth.manager.settings.shibbolethHeaderEmail",'required'=>"true"),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('id'=>"shibbolethHeaderPhoneSetting",'type'=>"text",'name'=>"shibbolethHeaderPhone",'value'=>$_smarty_tpl->tpl_vars['shibbolethHeaderPhone']->value,'label'=>"plugins.generic.shibboleth.manager.settings.shibbolethHeaderPhone"),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('id'=>"shibbolethHeaderMailingSetting",'type'=>"text",'name'=>"shibbolethHeaderMailing",'value'=>$_smarty_tpl->tpl_vars['shibbolethHeaderMailing']->value,'label'=>"plugins.generic.shibboleth.manager.settings.shibbolethHeaderMailing"),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('id'=>"shibbolethAdminUinsSetting",'type'=>"text",'name'=>"shibbolethAdminUins",'value'=>$_smarty_tpl->tpl_vars['shibbolethAdminUins']->value,'label'=>"plugins.generic.shibboleth.manager.settings.shibbolethAdminUins"),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"shibbolethSettingsFormArea"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('title'=>"plugins.generic.shibboleth.manager.settings.shibbolethOptional"));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormArea(array('title'=>"plugins.generic.shibboleth.manager.settings.shibbolethOptional"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"shibbolethOptionalSetting",'list'=>true,'description'=>"plugins.generic.shibboleth.manager.settings.shibbolethOptionalDescription"));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormSection(array('for'=>"shibbolethOptionalSetting",'list'=>true,'description'=>"plugins.generic.shibboleth.manager.settings.shibbolethOptionalDescription"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('id'=>"shibbolethOptional",'type'=>"checkbox",'value'=>"1",'checked'=>$_smarty_tpl->tpl_vars['shibbolethOptional']->value,'label'=>"plugins.generic.shibboleth.manager.settings.shibbolethOptionalLabel"),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormSection(array('for'=>"shibbolethOptionalSetting",'list'=>true,'description'=>"plugins.generic.shibboleth.manager.settings.shibbolethOptionalDescription"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('id'=>"shibbolethOptionalTitle",'type'=>"text",'name'=>"shibbolethOptionalTitle",'value'=>$_smarty_tpl->tpl_vars['shibbolethOptionalTitle']->value,'label'=>"plugins.generic.shibboleth.manager.settings.shibbolethOptionalTitle"),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('id'=>"shibbolethOptionalLoginDescription",'type'=>"text",'name'=>"shibbolethOptionalLoginDescription",'value'=>$_smarty_tpl->tpl_vars['shibbolethOptionalLoginDescription']->value,'label'=>"plugins.generic.shibboleth.manager.settings.shibbolethOptionalDescriptionForLogin"),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('id'=>"shibbolethOptionalRegistrationDescription",'type'=>"text",'name'=>"shibbolethOptionalRegistrationDescription",'value'=>$_smarty_tpl->tpl_vars['shibbolethOptionalRegistrationDescription']->value,'label'=>"plugins.generic.shibboleth.manager.settings.shibbolethOptionalDescriptionForRegistration"),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('id'=>"shibbolethOptionalButtonLabel",'type'=>"text",'name'=>"shibbolethOptionalButtonLabel",'value'=>$_smarty_tpl->tpl_vars['shibbolethOptionalButtonLabel']->value,'label'=>"plugins.generic.shibboleth.manager.settings.shibbolethOptionalButtonLabel"),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormArea(array('title'=>"plugins.generic.shibboleth.manager.settings.shibbolethOptional"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array(),$_smarty_tpl ) );?>


	<p><span class="formRequired"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.requiredField"),$_smarty_tpl ) );?>
</span></p>
</form>
<?php }
}
