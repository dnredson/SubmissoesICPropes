<?php
/* Smarty version 3.1.39, created on 2022-06-20 13:59:01
  from 'app:workflowreviewHistory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62b07d25831bc9_35712445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32af29625ec85d17cc59d3d223504abac9c11055' => 
    array (
      0 => 'app:workflowreviewHistory.tpl',
      1 => 1650987488,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b07d25831bc9_35712445 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="pkp_review_history">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dates']->value, 'date', false, 'localeKey');
$_smarty_tpl->tpl_vars['date']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['localeKey']->value => $_smarty_tpl->tpl_vars['date']->value) {
$_smarty_tpl->tpl_vars['date']->do_else = false;
?>
		<?php if ($_smarty_tpl->tpl_vars['date']->value) {?>
		<div>
			<strong><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['date']->value,$_smarty_tpl->tpl_vars['datetimeFormatShort']->value);?>
</strong>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['localeKey']->value),$_smarty_tpl ) );?>

		</div>
		<?php }?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
