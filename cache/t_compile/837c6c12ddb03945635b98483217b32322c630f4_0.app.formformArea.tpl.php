<?php
/* Smarty version 3.1.39, created on 2022-05-27 14:31:52
  from 'app:formformArea.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6290e0d85a83a9_34642525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '837c6c12ddb03945635b98483217b32322c630f4' => 
    array (
      0 => 'app:formformArea.tpl',
      1 => 1650987488,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6290e0d85a83a9_34642525 (Smarty_Internal_Template $_smarty_tpl) {
?>
<fieldset <?php if ($_smarty_tpl->tpl_vars['FBV_id']->value) {?> id="<?php echo $_smarty_tpl->tpl_vars['FBV_id']->value;?>
"<?php }
if ($_smarty_tpl->tpl_vars['FBV_class']->value) {?> class="pkp_formArea <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_class']->value ));?>
"<?php }?>>
	<?php if ($_smarty_tpl->tpl_vars['FBV_title']->value) {?>
		<legend><?php if ($_smarty_tpl->tpl_vars['FBV_translate']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['FBV_title']->value),$_smarty_tpl ) );
} else {
echo $_smarty_tpl->tpl_vars['FBV_title']->value;
}?></legend>
	<?php }?>
	<?php echo $_smarty_tpl->tpl_vars['FBV_content']->value;?>

</fieldset>
<?php }
}
