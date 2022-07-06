<?php
/* Smarty version 3.1.39, created on 2022-06-13 14:24:10
  from 'app:managerreviewFormspreview' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62a7488ae574e7_93895231',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e069d1ea92c25f1612d5a54d7d76b931db8af6f' => 
    array (
      0 => 'app:managerreviewFormspreview',
      1 => 1650987488,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:reviewer/review/reviewFormResponse.tpl' => 1,
  ),
),false)) {
function content_62a7488ae574e7_93895231 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	$(function() {
		// Attach the form handler.
		$('#previewReviewForm').pkpHandler(
			'$.pkp.controllers.form.AjaxFormHandler',
			{
				trackFormChanges: false
			}
		);
	});
<?php echo '</script'; ?>
>

<form class="pkp_form" id="previewReviewForm" method="post" action="#">
	<h3><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['title']->value ));?>
</h3>
	<p><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</p>

	<?php $_smarty_tpl->_subTemplateRender("app:reviewer/review/reviewFormResponse.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</form>
<?php }
}
