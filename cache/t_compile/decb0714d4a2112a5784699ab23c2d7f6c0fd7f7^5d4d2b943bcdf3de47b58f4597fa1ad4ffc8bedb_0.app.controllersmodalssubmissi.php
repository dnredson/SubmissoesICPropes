<?php
/* Smarty version 3.1.39, created on 2022-06-14 16:56:25
  from 'app:controllersmodalssubmissi' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62a8bdb9d13eb1_82501937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d4d2b943bcdf3de47b58f4597fa1ad4ffc8bedb' => 
    array (
      0 => 'app:controllersmodalssubmissi',
      1 => 1650987488,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a8bdb9d13eb1_82501937 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="viewSubmissionMetadata" class="">
	<h3><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['publication']->value->getLocalizedFullTitle() ));?>
</h3>
	<?php if ($_smarty_tpl->tpl_vars['authors']->value) {?><h4><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['authors']->value ));?>
</h4><?php }?>
	<div class="abstract">
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['publication']->value->getLocalizedData('abstract') ));?>

	</div>
	<?php if ($_smarty_tpl->tpl_vars['additionalMetadata']->value) {?>
		<table class="pkpTable">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['additionalMetadata']->value, 'metadata');
$_smarty_tpl->tpl_vars['metadata']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['metadata']->value) {
$_smarty_tpl->tpl_vars['metadata']->do_else = false;
?>
			<tr>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['metadata']->value, 'metadataItem');
$_smarty_tpl->tpl_vars['metadataItem']->iteration = 0;
$_smarty_tpl->tpl_vars['metadataItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['metadataItem']->value) {
$_smarty_tpl->tpl_vars['metadataItem']->do_else = false;
$_smarty_tpl->tpl_vars['metadataItem']->iteration++;
$__foreach_metadataItem_1_saved = $_smarty_tpl->tpl_vars['metadataItem'];
?>
					<?php if ($_smarty_tpl->tpl_vars['metadataItem']->iteration%2 != 0) {?>
						<th scope="row"><?php echo $_smarty_tpl->tpl_vars['metadataItem']->value;?>
</th>
					<?php } else { ?>
						<td><?php echo $_smarty_tpl->tpl_vars['metadataItem']->value;?>
</td>
					<?php }?>
				<?php
$_smarty_tpl->tpl_vars['metadataItem'] = $__foreach_metadataItem_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tr>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
	<?php }?>
</div>
<?php }
}
