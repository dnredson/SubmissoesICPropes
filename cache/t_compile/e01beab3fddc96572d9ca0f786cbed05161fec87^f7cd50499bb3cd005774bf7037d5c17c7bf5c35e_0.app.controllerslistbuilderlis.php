<?php
/* Smarty version 3.1.39, created on 2022-06-13 14:22:20
  from 'app:controllerslistbuilderlis' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62a7481c63f9f6_69810151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7cd50499bb3cd005774bf7037d5c17c7bf5c35e' => 
    array (
      0 => 'app:controllerslistbuilderlis',
      1 => 1650987488,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/grid/gridCellContents.tpl' => 1,
    'app:form/textInput.tpl' => 1,
  ),
),false)) {
function content_62a7481c63f9f6_69810151 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['id']->value) {?>
	<?php $_smarty_tpl->_assignInScope('cellId', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( "cell-",$_smarty_tpl->tpl_vars['id']->value )));
} else { ?>
	<?php $_smarty_tpl->_assignInScope('cellId', '');
}?>
<span <?php if ($_smarty_tpl->tpl_vars['cellId']->value) {?>id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cellId']->value ));?>
" <?php }?>class="pkp_linkActions gridCellContainer">
	<div class="gridCellDisplay">
		<?php if ($_smarty_tpl->tpl_vars['column']->value->getFlag('sourceType') === (defined('LISTBUILDER_SOURCE_TYPE_SELECT') ? constant('LISTBUILDER_SOURCE_TYPE_SELECT') : null)) {?>
						<input type="hidden" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['labelKey']->value ));?>
" />
		<?php }?>

				<?php $_smarty_tpl->_subTemplateRender("app:controllers/grid/gridCellContents.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>

	<div class="gridCellEdit">
		<?php if ($_smarty_tpl->tpl_vars['column']->value->getFlag('sourceType') === (defined('LISTBUILDER_SOURCE_TYPE_TEXT') ? constant('LISTBUILDER_SOURCE_TYPE_TEXT') : null)) {?>
			<?php if ($_smarty_tpl->tpl_vars['column']->value->hasFlag('multilingual')) {?>
				<?php $_smarty_tpl->_assignInScope('FBV_id', "newRowId");?>
				<?php $_smarty_tpl->_assignInScope('FBV_uniqId', uniqid(''));?>
				<?php $_smarty_tpl->_assignInScope('FBV_name', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( "newRowId[",$_smarty_tpl->tpl_vars['column']->value->getId() )) )),"]" )));?>
				<?php $_smarty_tpl->_subTemplateRender("app:form/textInput.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('formLocale'=>$_smarty_tpl->tpl_vars['primaryLocale']->value,'FBV_id'=>$_smarty_tpl->tpl_vars['FBV_id']->value,'FBV_name'=>$_smarty_tpl->tpl_vars['FBV_name']->value,'FBV_value'=>$_smarty_tpl->tpl_vars['label']->value,'FBV_tabIndex'=>$_smarty_tpl->tpl_vars['column']->value->getFlag('tabIndex'),'FBV_multilingual'=>true,'formLocales'=>$_smarty_tpl->tpl_vars['formLocales']->value), 0, false);
?>

			<?php } else { ?>				<input type="text" name="newRowId[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['column']->value->getId() ));?>
]" class="textField" <?php if ($_smarty_tpl->tpl_vars['column']->value->getFlag('tabIndex')) {?>tabindex="<?php echo $_smarty_tpl->tpl_vars['column']->value->getFlag('tabIndex');?>
"<?php }?> value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['label']->value ));?>
" />
			<?php }?>
		<?php } elseif ($_smarty_tpl->tpl_vars['column']->value->getFlag('sourceType') == (defined('LISTBUILDER_SOURCE_TYPE_SELECT') ? constant('LISTBUILDER_SOURCE_TYPE_SELECT') : null)) {?>
			<select name="newRowId[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['column']->value->getId() ));?>
]" class="selectMenu">
								<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['labelKey']->value ));?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.loading"),$_smarty_tpl ) );?>
</option>
			</select>
		<?php }?>
	</div>
</span>
<?php }
}
