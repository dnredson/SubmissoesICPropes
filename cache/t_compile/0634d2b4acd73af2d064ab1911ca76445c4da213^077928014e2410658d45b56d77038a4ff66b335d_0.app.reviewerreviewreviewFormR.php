<?php
/* Smarty version 3.1.39, created on 2022-06-20 15:03:23
  from 'app:reviewerreviewreviewFormR' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62b08c3b772414_38941186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '077928014e2410658d45b56d77038a4ff66b335d' => 
    array (
      0 => 'app:reviewerreviewreviewFormR',
      1 => 1650987488,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b08c3b772414_38941186 (Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['iterate'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['iterate'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyIterate'))) {
throw new SmartyException('block tag \'iterate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('iterate', array('from'=>'reviewFormElements','item'=>'reviewFormElement'));
$_block_repeat=true;
echo $_block_plugin1->smartyIterate(array('from'=>'reviewFormElements','item'=>'reviewFormElement'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<?php $_smarty_tpl->_assignInScope('elementId', $_smarty_tpl->tpl_vars['reviewFormElement']->value->getId());?>
	<?php $_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['reviewFormResponses']->value[$_smarty_tpl->tpl_vars['elementId']->value]);?>

	<?php if (in_array($_smarty_tpl->tpl_vars['reviewFormElement']->value->getElementType(),array(REVIEW_FORM_ELEMENT_TYPE_CHECKBOXES,REVIEW_FORM_ELEMENT_TYPE_RADIO_BUTTONS))) {?>
		<?php $_smarty_tpl->_assignInScope('list', true);?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('list', false);?>
	<?php }?>

	<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('translate'=>false,'title'=>$_smarty_tpl->tpl_vars['reviewFormElement']->value->getLocalizedQuestion(),'list'=>$_smarty_tpl->tpl_vars['list']->value,'required'=>$_smarty_tpl->tpl_vars['reviewFormElement']->value->getRequired()));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array('translate'=>false,'title'=>$_smarty_tpl->tpl_vars['reviewFormElement']->value->getLocalizedQuestion(),'list'=>$_smarty_tpl->tpl_vars['list']->value,'required'=>$_smarty_tpl->tpl_vars['reviewFormElement']->value->getRequired()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php $_smarty_tpl->_assignInScope('description', $_smarty_tpl->tpl_vars['reviewFormElement']->value->getLocalizedDescription());?>
		<?php if ($_smarty_tpl->tpl_vars['description']->value) {?><div class="description"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</div><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['reviewFormElement']->value->getElementType() == REVIEW_FORM_ELEMENT_TYPE_SMALL_TEXT_FIELD) {?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('name'=>"reviewFormResponses[".((string)$_smarty_tpl->tpl_vars['elementId']->value)."]",'type'=>"text",'translate'=>false,'id'=>"reviewFormResponses-".((string)$_smarty_tpl->tpl_vars['elementId']->value),'value'=>$_smarty_tpl->tpl_vars['value']->value,'inline'=>true,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'readonly'=>$_smarty_tpl->tpl_vars['disabled']->value),$_smarty_tpl ) );?>

		<?php } elseif ($_smarty_tpl->tpl_vars['reviewFormElement']->value->getElementType() == REVIEW_FORM_ELEMENT_TYPE_TEXT_FIELD) {?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('name'=>"reviewFormResponses[".((string)$_smarty_tpl->tpl_vars['elementId']->value)."]",'type'=>"text",'translate'=>false,'id'=>"reviewFormResponses-".((string)$_smarty_tpl->tpl_vars['elementId']->value),'value'=>$_smarty_tpl->tpl_vars['value']->value,'readonly'=>$_smarty_tpl->tpl_vars['disabled']->value),$_smarty_tpl ) );?>

		<?php } elseif ($_smarty_tpl->tpl_vars['reviewFormElement']->value->getElementType() == REVIEW_FORM_ELEMENT_TYPE_TEXTAREA) {?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('name'=>"reviewFormResponses[".((string)$_smarty_tpl->tpl_vars['elementId']->value)."]",'type'=>"textarea",'id'=>"reviewFormResponses-".((string)$_smarty_tpl->tpl_vars['elementId']->value),'value'=>$_smarty_tpl->tpl_vars['value']->value,'readonly'=>$_smarty_tpl->tpl_vars['disabled']->value,'rows'=>4,'cols'=>40),$_smarty_tpl ) );?>

		<?php } elseif ($_smarty_tpl->tpl_vars['reviewFormElement']->value->getElementType() == REVIEW_FORM_ELEMENT_TYPE_CHECKBOXES) {?>
			<?php $_smarty_tpl->_assignInScope('possibleResponses', $_smarty_tpl->tpl_vars['reviewFormElement']->value->getLocalizedPossibleResponses());?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['possibleResponses']->value, 'responseItem', false, 'responseId', 'responses', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['responseItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['responseId']->value => $_smarty_tpl->tpl_vars['responseItem']->value) {
$_smarty_tpl->tpl_vars['responseItem']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_responses']->value['index']++;
?>
				<?php $_smarty_tpl->_assignInScope('index', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_responses']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_responses']->value['index'] : null));?>
				<?php if (!empty($_smarty_tpl->tpl_vars['reviewFormResponses']->value[$_smarty_tpl->tpl_vars['elementId']->value]) && in_array($_smarty_tpl->tpl_vars['index']->value,$_smarty_tpl->tpl_vars['reviewFormResponses']->value[$_smarty_tpl->tpl_vars['elementId']->value])) {?>
					<?php $_smarty_tpl->_assignInScope('checked', true);?>
				<?php } else { ?>
					<?php $_smarty_tpl->_assignInScope('checked', false);?>
				<?php }?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'disabled'=>$_smarty_tpl->tpl_vars['disabled']->value,'name'=>"reviewFormResponses[".((string)$_smarty_tpl->tpl_vars['elementId']->value)."][]",'id'=>"reviewFormResponses-".((string)$_smarty_tpl->tpl_vars['elementId']->value)."-".((string)$_smarty_tpl->tpl_vars['index']->value),'value'=>$_smarty_tpl->tpl_vars['index']->value,'checked'=>$_smarty_tpl->tpl_vars['checked']->value,'label'=>$_smarty_tpl->tpl_vars['responseItem']->value,'translate'=>false),$_smarty_tpl ) );?>

			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php } elseif ($_smarty_tpl->tpl_vars['reviewFormElement']->value->getElementType() == REVIEW_FORM_ELEMENT_TYPE_RADIO_BUTTONS) {?>
			<?php $_smarty_tpl->_assignInScope('possibleResponses', $_smarty_tpl->tpl_vars['reviewFormElement']->value->getLocalizedPossibleResponses());?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['possibleResponses']->value, 'responseItem', false, 'responseId', 'responses', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['responseItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['responseId']->value => $_smarty_tpl->tpl_vars['responseItem']->value) {
$_smarty_tpl->tpl_vars['responseItem']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_responses']->value['index']++;
?>
				<?php $_smarty_tpl->_assignInScope('index', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_responses']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_responses']->value['index'] : null));?>
				<?php if ((isset($_smarty_tpl->tpl_vars['reviewFormResponses']->value[$_smarty_tpl->tpl_vars['elementId']->value])) && $_smarty_tpl->tpl_vars['index']->value == $_smarty_tpl->tpl_vars['reviewFormResponses']->value[$_smarty_tpl->tpl_vars['elementId']->value]) {?>
					<?php $_smarty_tpl->_assignInScope('checked', true);?>
				<?php } else { ?>
					<?php $_smarty_tpl->_assignInScope('checked', false);?>
				<?php }?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"radio",'disabled'=>$_smarty_tpl->tpl_vars['disabled']->value,'name'=>"reviewFormResponses[".((string)$_smarty_tpl->tpl_vars['elementId']->value)."]",'id'=>"reviewFormResponses-".((string)$_smarty_tpl->tpl_vars['elementId']->value)."-".((string)$_smarty_tpl->tpl_vars['index']->value),'value'=>$_smarty_tpl->tpl_vars['index']->value,'checked'=>$_smarty_tpl->tpl_vars['checked']->value,'label'=>$_smarty_tpl->tpl_vars['responseItem']->value,'translate'=>false),$_smarty_tpl ) );?>

			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php } elseif ($_smarty_tpl->tpl_vars['reviewFormElement']->value->getElementType() == REVIEW_FORM_ELEMENT_TYPE_DROP_DOWN_BOX) {?>
			<?php $_smarty_tpl->_assignInScope('possibleResponses', $_smarty_tpl->tpl_vars['reviewFormElement']->value->getLocalizedPossibleResponses());?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'subLabelTranslate'=>false,'translate'=>false,'name'=>"reviewFormResponses[".((string)$_smarty_tpl->tpl_vars['elementId']->value)."]",'id'=>"reviewFormResponses-".((string)$_smarty_tpl->tpl_vars['elementId']->value),'disabled'=>$_smarty_tpl->tpl_vars['disabled']->value,'defaultLabel'=>'','defaultValue'=>'','from'=>$_smarty_tpl->tpl_vars['possibleResponses']->value,'selected'=>$_smarty_tpl->tpl_vars['reviewFormResponses']->value[$_smarty_tpl->tpl_vars['elementId']->value],'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM']),$_smarty_tpl ) );?>

		<?php }?>
	<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array('translate'=>false,'title'=>$_smarty_tpl->tpl_vars['reviewFormElement']->value->getLocalizedQuestion(),'list'=>$_smarty_tpl->tpl_vars['list']->value,'required'=>$_smarty_tpl->tpl_vars['reviewFormElement']->value->getRequired()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo $_block_plugin1->smartyIterate(array('from'=>'reviewFormElements','item'=>'reviewFormElement'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
