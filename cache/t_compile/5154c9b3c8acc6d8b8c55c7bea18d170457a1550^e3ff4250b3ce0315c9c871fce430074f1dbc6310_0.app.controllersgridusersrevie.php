<?php
/* Smarty version 3.1.39, created on 2022-07-04 12:19:41
  from 'app:controllersgridusersrevie' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62c2daddea06f4_00658616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3ff4250b3ce0315c9c871fce430074f1dbc6310' => 
    array (
      0 => 'app:controllersgridusersrevie',
      1 => 1656358939,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/grid/users/reviewer/form/noFilesWarning.tpl' => 1,
  ),
),false)) {
function content_62c2daddea06f4_00658616 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#editReviewForm').pkpHandler('$.pkp.controllers.grid.users.reviewer.form.EditReviewFormHandler');
	});
<?php echo '</script'; ?>
>

<form class="pkp_form" id="editReviewForm" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"updateReview"),$_smarty_tpl ) );?>
">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

	<input type="hidden" name="reviewAssignmentId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['reviewAssignmentId']->value ));?>
" />
	<input type="hidden" name="stageId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['stageId']->value ));?>
" />
	<input type="hidden" name="submissionId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['submissionId']->value ));?>
" />
	<input type="hidden" name="reviewRoundId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['reviewRoundId']->value ));?>
" />

	<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"editor.review.importantDates"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormSection(array('title'=>"editor.review.importantDates"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'id'=>"responseDueDate",'name'=>"responseDueDate",'label'=>"submission.task.responseDueDate",'value'=>$_smarty_tpl->tpl_vars['responseDueDate']->value,'inline'=>true,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'class'=>"datepicker"),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'id'=>"reviewDueDate",'name'=>"reviewDueDate",'label'=>"editor.review.reviewDueDate",'value'=>$_smarty_tpl->tpl_vars['reviewDueDate']->value,'inline'=>true,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'class'=>"datepicker"),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormSection(array('title'=>"editor.review.importantDates"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('list'=>true,'title'=>"editor.submissionReview.reviewType"));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array('list'=>true,'title'=>"editor.submissionReview.reviewType"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reviewMethods']->value, 'methodTranslationKey', false, 'methodId');
$_smarty_tpl->tpl_vars['methodTranslationKey']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['methodId']->value => $_smarty_tpl->tpl_vars['methodTranslationKey']->value) {
$_smarty_tpl->tpl_vars['methodTranslationKey']->do_else = false;
?>
			<?php $_smarty_tpl->_assignInScope('elementId', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( "reviewMethod","-" )),$_smarty_tpl->tpl_vars['methodId']->value )));?>
			<?php if ($_smarty_tpl->tpl_vars['reviewMethod']->value == $_smarty_tpl->tpl_vars['methodId']->value) {?>
				<?php $_smarty_tpl->_assignInScope('elementChecked', true);?>
			<?php } else { ?>
				<?php $_smarty_tpl->_assignInScope('elementChecked', false);?>
			<?php }?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"radio",'name'=>"reviewMethod",'id'=>$_smarty_tpl->tpl_vars['elementId']->value,'value'=>$_smarty_tpl->tpl_vars['methodId']->value,'checked'=>$_smarty_tpl->tpl_vars['elementChecked']->value,'label'=>$_smarty_tpl->tpl_vars['methodTranslationKey']->value),$_smarty_tpl ) );?>

		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array('list'=>true,'title'=>"editor.submissionReview.reviewType"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php $_smarty_tpl->_subTemplateRender("app:controllers/grid/users/reviewer/form/noFilesWarning.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"editor.submissionReview.restrictFiles"),$_smarty_tpl ) );?>
</h3>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'limitReviewFilesGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'component'=>"grid.files.review.LimitReviewFilesGridHandler",'op'=>"fetchGrid",'submissionId'=>$_smarty_tpl->tpl_vars['submissionId']->value,'stageId'=>$_smarty_tpl->tpl_vars['stageId']->value,'reviewRoundId'=>$_smarty_tpl->tpl_vars['reviewRoundId']->value,'reviewAssignmentId'=>$_smarty_tpl->tpl_vars['reviewAssignmentId']->value,'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"limitReviewFilesGrid",'url'=>$_smarty_tpl->tpl_vars['limitReviewFilesGridUrl']->value),$_smarty_tpl ) );?>


	<?php if ($_smarty_tpl->tpl_vars['reviewForms']->value) {?>
		<?php if (count($_smarty_tpl->tpl_vars['reviewForms']->value) > 0) {?>
			<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"submission.reviewForm"));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormSection(array('title'=>"submission.reviewForm"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'name'=>"reviewFormId",'id'=>"reviewFormId",'defaultLabel'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( "manager.reviewForms.noneChosen" )),'defaultValue'=>"0",'translate'=>false,'from'=>$_smarty_tpl->tpl_vars['reviewForms']->value,'selected'=>$_smarty_tpl->tpl_vars['reviewFormId']->value),$_smarty_tpl ) );?>

			<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormSection(array('title'=>"submission.reviewForm"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php }?>
	<?php }?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array(),$_smarty_tpl ) );?>

</form>
<?php }
}
