<?php
/* Smarty version 3.1.39, created on 2022-06-20 17:12:04
  from 'app:authorDashboardsubmission' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62b0aa64522421_95828576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db95100dd9523e1e8a907c62f5d36e81b5954718' => 
    array (
      0 => 'app:authorDashboardsubmission',
      1 => 1650987488,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b0aa64522421_95828576 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="pkp_submission_email">
	<h2>
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['submissionEmail']->value->getSubject() ));?>

	</h2>
	<div class="date">
		<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['submissionEmail']->value->getDateSent(),$_smarty_tpl->tpl_vars['datetimeFormatShort']->value);?>

	</div>
	<div class="email_entry">
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['submissionEmail']->value->getBody() ));?>

	</div>
</div>
<?php }
}
