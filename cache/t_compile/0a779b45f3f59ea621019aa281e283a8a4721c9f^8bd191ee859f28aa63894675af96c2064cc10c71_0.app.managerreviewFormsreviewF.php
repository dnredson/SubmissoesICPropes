<?php
/* Smarty version 3.1.39, created on 2022-06-13 14:20:52
  from 'app:managerreviewFormsreviewF' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62a747c4c5eb91_10060961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bd191ee859f28aa63894675af96c2064cc10c71' => 
    array (
      0 => 'app:managerreviewFormsreviewF',
      1 => 1650987488,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotification.tpl' => 1,
  ),
),false)) {
function content_62a747c4c5eb91_10060961 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	$(function() {
		// Attach the form handler.
		$('#reviewFormElementForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
<!--
function togglePossibleResponses(newValue, multipleResponsesElementTypesString) {
	if (multipleResponsesElementTypesString.indexOf(';'+newValue+';') != -1) {
		document.getElementById('reviewFormElementForm').addResponse.disabled=false;
	} else {
		if (document.getElementById('reviewFormElementForm').addResponse.disabled == false) {
			alert(<?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.reviewFormElement.changeType"),$_smarty_tpl ) ));?>
);
		}
		document.getElementById('reviewFormElementForm').addResponse.disabled=true;
	}
}
// -->
<?php echo '</script'; ?>
>

<form class="pkp_form" id="reviewFormElementForm" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'component'=>"grid.settings.reviewForms.ReviewFormElementsGridHandler",'op'=>"updateReviewFormElement",'anchor'=>"possibleResponses"),$_smarty_tpl ) );?>
">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('id'=>"reviewFormId",'type'=>"hidden",'name'=>"reviewFormId",'value'=>$_smarty_tpl->tpl_vars['reviewFormId']->value),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('id'=>"reviewFormElementId",'type'=>"hidden",'name'=>"reviewFormElementId",'value'=>$_smarty_tpl->tpl_vars['reviewFormElementId']->value),$_smarty_tpl ) );?>


	<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"reviewFormElementsNotification"), 0, false);
?>

	<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"reviewFormElementForm"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"reviewFormElementForm"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

		<!-- question -->
		<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"manager.reviewFormElements.question",'required'=>true,'for'=>"question"));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array('title'=>"manager.reviewFormElements.question",'required'=>true,'for'=>"question"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"textarea",'id'=>"question",'value'=>$_smarty_tpl->tpl_vars['question']->value,'multilingual'=>true,'rich'=>true),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array('title'=>"manager.reviewFormElements.question",'required'=>true,'for'=>"question"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<!-- description -->
		<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"manager.reviewFormElements.description",'for'=>"description"));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormSection(array('title'=>"manager.reviewFormElements.description",'for'=>"description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"textarea",'id'=>"description",'value'=>$_smarty_tpl->tpl_vars['description']->value,'multilingual'=>true,'rich'=>true),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormSection(array('title'=>"manager.reviewFormElements.description",'for'=>"description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<!-- required checkbox -->
		<?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"required",'list'=>true));
$_block_repeat=true;
echo $_block_plugin4->smartyFBVFormSection(array('for'=>"required",'list'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php if ($_smarty_tpl->tpl_vars['required']->value) {?>
				<?php $_smarty_tpl->_assignInScope('checked', true);?>
			<?php } else { ?>
				<?php $_smarty_tpl->_assignInScope('checked', false);?>
			<?php }?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"required",'label'=>"manager.reviewFormElements.required",'checked'=>$_smarty_tpl->tpl_vars['checked']->value,'inline'=>"true"),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin4->smartyFBVFormSection(array('for'=>"required",'list'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<!-- included in message to author checkbox -->
		<?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"included",'list'=>true));
$_block_repeat=true;
echo $_block_plugin5->smartyFBVFormSection(array('for'=>"included",'list'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php if ($_smarty_tpl->tpl_vars['included']->value) {?>
				<?php $_smarty_tpl->_assignInScope('checked', true);?>
			<?php } else { ?>
				<?php $_smarty_tpl->_assignInScope('checked', false);?>
			<?php }?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"included",'label'=>"manager.reviewFormElements.included",'checked'=>$_smarty_tpl->tpl_vars['checked']->value,'inline'=>"true"),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin5->smartyFBVFormSection(array('for'=>"included",'list'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<!-- element type drop-down -->
		<?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"elementType",'list'=>true));
$_block_repeat=true;
echo $_block_plugin6->smartyFBVFormSection(array('for'=>"elementType",'list'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<!-- when user makes a selection (onchange), warn them if necessary. -->
			<!-- also display/hide options list builder if appropriate. -->
			<!-- look to see how this is done elsewhere under the new JS framework -->
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'label'=>"manager.reviewFormElements.elementType",'id'=>"elementType",'defaultLabel'=>'','from'=>$_smarty_tpl->tpl_vars['reviewFormElementTypeOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['elementType']->value,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'required'=>true),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin6->smartyFBVFormSection(array('for'=>"elementType",'list'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<!-- Options listbuilder. Activated for some element types. -->
		<div id="elementOptions" class="full left">
			<div id="elementOptionsContainer" class="full left">
				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'elementOptionsUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'component'=>"listbuilder.settings.reviewForms.ReviewFormElementResponseItemListbuilderHandler",'op'=>"fetch",'reviewFormId'=>$_smarty_tpl->tpl_vars['reviewFormId']->value,'reviewFormElementId'=>$_smarty_tpl->tpl_vars['reviewFormElementId']->value,'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"elementOptionsListbuilderContainer",'url'=>$_smarty_tpl->tpl_vars['elementOptionsUrl']->value),$_smarty_tpl ) );?>

			</div>
		</div>
		<!-- required field text -->
		<p><span class="formRequired"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.requiredField"),$_smarty_tpl ) );?>
</span></p>

		<!-- submit button -->
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('id'=>"reviewFormElementFormSubmit",'submitText'=>"common.save"),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"reviewFormElementForm"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</form>
<?php }
}
