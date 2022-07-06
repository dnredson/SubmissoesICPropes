<?php
/* Smarty version 3.1.39, created on 2022-06-27 18:39:21
  from 'app:formautocompleteInput.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62b9f9591383b3_63292000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d6c280c8e417ad35181e20621e6feb9d6099963' => 
    array (
      0 => 'app:formautocompleteInput.tpl',
      1 => 1650987488,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b9f9591383b3_63292000 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	$(function() {
		$('#<?php echo $_smarty_tpl->tpl_vars['FBV_id']->value;?>
_container').pkpHandler('$.pkp.controllers.AutocompleteHandler',
			{
				<?php if ($_smarty_tpl->tpl_vars['FBV_disableSync']->value) {?>disableSync: true,<?php }?>
				sourceUrl: <?php echo json_encode($_smarty_tpl->tpl_vars['FBV_autocompleteUrl']->value);?>
,
			});
	});
<?php echo '</script'; ?>
>

<div id="<?php echo $_smarty_tpl->tpl_vars['FBV_id']->value;?>
_container" <?php if ($_smarty_tpl->tpl_vars['FBV_layoutInfo']->value) {
echo $_smarty_tpl->tpl_vars['FBV_layoutInfo']->value;
}?>>
	<?php echo $_smarty_tpl->tpl_vars['FBV_textInput']->value;?>

	<div class="hidden">
		<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['FBV_id']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['FBV_id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FBV_autocompleteValue']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['FBV_autocompleteValue']->value;?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['FBV_validation']->value) {?>class="<?php echo $_smarty_tpl->tpl_vars['FBV_validation']->value;?>
"<?php }?> />
	</div>
</div>
<?php }
}
