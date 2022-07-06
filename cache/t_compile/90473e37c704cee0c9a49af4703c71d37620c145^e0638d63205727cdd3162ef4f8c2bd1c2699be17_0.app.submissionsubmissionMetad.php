<?php
/* Smarty version 3.1.39, created on 2022-05-27 14:55:06
  from 'app:submissionsubmissionMetad' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6290e64ae4ba66_40224563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0638d63205727cdd3162ef4f8c2bd1c2699be17' => 
    array (
      0 => 'app:submissionsubmissionMetad',
      1 => 1653573267,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6290e64ae4ba66_40224563 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['formParams']->value['submissionVersion'] && ($_smarty_tpl->tpl_vars['formParams']->value['submissionVersion'] < $_smarty_tpl->tpl_vars['currentSubmissionVersion']->value)) {?>
  <?php $_smarty_tpl->_assignInScope('readOnly', 1);
} else { ?>
	<?php $_smarty_tpl->_assignInScope('readOnly', 0);
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"hidden",'name'=>"submissionVersion",'id'=>"submissionVersion",'value'=>$_smarty_tpl->tpl_vars['formParams']->value['submissionVersion']),$_smarty_tpl ) );?>



<h2>Dados do Aluno</h2>
<div class="pkp_helpers_clear custom_propes_fields">
	
		<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"title",'title'=>"common.nomeAluno",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'required'=>true));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormSection(array('for'=>"title",'title'=>"common.nomeAluno",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'required'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formLocale']->value ));
$_prefixVariable1=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'multilingual'=>true,'name'=>"nomeAluno",'id'=>"nomeAluno[".$_prefixVariable1."]",'value'=>$_smarty_tpl->tpl_vars['nomeAluno']->value),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormSection(array('for'=>"title",'title'=>"common.nomeAluno",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'required'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"title",'title'=>"common.RAAluno",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'required'=>true));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array('for'=>"title",'title'=>"common.RAAluno",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'required'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formLocale']->value ));
$_prefixVariable2=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'multilingual'=>true,'name'=>"RAAluno",'id'=>"RAAluno[".$_prefixVariable2."]",'value'=>$_smarty_tpl->tpl_vars['RAAluno']->value,'readonly'=>$_smarty_tpl->tpl_vars['readOnly']->value),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array('for'=>"title",'title'=>"common.RAAluno",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'required'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	
</div>

<div class="pkp_helpers_clear custom_propes_fields">
	<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"title",'title'=>"common.emailAluno",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'required'=>true));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormSection(array('for'=>"title",'title'=>"common.emailAluno",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'required'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formLocale']->value ));
$_prefixVariable3=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'multilingual'=>true,'name'=>"emailAluno",'id'=>"emailAluno[".$_prefixVariable3."]",'value'=>$_smarty_tpl->tpl_vars['emailAluno']->value,'readonly'=>$_smarty_tpl->tpl_vars['readOnly']->value),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormSection(array('for'=>"title",'title'=>"common.emailAluno",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'required'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"common.modalidadeAluno",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'required'=>true));
$_block_repeat=true;
echo $_block_plugin4->smartyFBVFormSection(array('title'=>"common.modalidadeAluno",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'required'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formLocale']->value ));
$_prefixVariable4=ob_get_clean();
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formLocale']->value ));
$_prefixVariable5=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'multilingual'=>true,'name'=>"modalidadeAluno[".$_prefixVariable4."]",'id'=>"modalidade[".$_prefixVariable5."]",'from'=>$_smarty_tpl->tpl_vars['modalidades']->value,'value'=>$_smarty_tpl->tpl_vars['modalidadeAluno']->value,'readonly'=>$_smarty_tpl->tpl_vars['readOnly']->value),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin4->smartyFBVFormSection(array('title'=>"common.modalidadeAluno",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'required'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		
</div>
<hr>
<h2>Dados do Orientador</h2>
<div class="pkp_helpers_clear">
	<?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"title",'title'=>"common.nomeOrientador",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'required'=>true));
$_block_repeat=true;
echo $_block_plugin5->smartyFBVFormSection(array('for'=>"title",'title'=>"common.nomeOrientador",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'required'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formLocale']->value ));
$_prefixVariable6=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'multilingual'=>true,'name'=>"nomeOrientador",'id'=>"nomeOrientador[".$_prefixVariable6."]",'value'=>$_smarty_tpl->tpl_vars['nomeOrientador']->value,'readonly'=>$_smarty_tpl->tpl_vars['readOnly']->value),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin5->smartyFBVFormSection(array('for'=>"title",'title'=>"common.nomeOrientador",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'required'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"title",'title'=>"common.emailOrientador",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'required'=>true));
$_block_repeat=true;
echo $_block_plugin6->smartyFBVFormSection(array('for'=>"title",'title'=>"common.emailOrientador",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'required'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formLocale']->value ));
$_prefixVariable7=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'multilingual'=>true,'name'=>"emailOrientador",'id'=>"emailOrientador[".$_prefixVariable7."]",'value'=>$_smarty_tpl->tpl_vars['emailOrientador']->value,'readonly'=>$_smarty_tpl->tpl_vars['readOnly']->value),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin6->smartyFBVFormSection(array('for'=>"title",'title'=>"common.emailOrientador",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'required'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>



<?php $_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"common.filhoEmIdadePreFundamental",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'required'=>true));
$_block_repeat=true;
echo $_block_plugin7->smartyFBVFormSection(array('title'=>"common.filhoEmIdadePreFundamental",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'required'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formLocale']->value ));
$_prefixVariable8=ob_get_clean();
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formLocale']->value ));
$_prefixVariable9=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'multilingual'=>true,'name'=>"filhoEmIdadePreFundamental[".$_prefixVariable8."]",'id'=>"filhoEmIdadePreFundamental[".$_prefixVariable9."]",'from'=>$_smarty_tpl->tpl_vars['binario']->value,'value'=>$_smarty_tpl->tpl_vars['filhoEmIdadePreFundamental']->value,'readonly'=>$_smarty_tpl->tpl_vars['readOnly']->value),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin7->smartyFBVFormSection(array('title'=>"common.filhoEmIdadePreFundamental",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'required'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<br>
<?php $_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"common.bolsistaProdutividade",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'required'=>true));
$_block_repeat=true;
echo $_block_plugin8->smartyFBVFormSection(array('title'=>"common.bolsistaProdutividade",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'required'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formLocale']->value ));
$_prefixVariable10=ob_get_clean();
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formLocale']->value ));
$_prefixVariable11=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'multilingual'=>true,'name'=>"bolsistaProdutividade[".$_prefixVariable10."]",'id'=>"bolsistaProdutividade[".$_prefixVariable11."]",'from'=>$_smarty_tpl->tpl_vars['binario']->value,'value'=>$_smarty_tpl->tpl_vars['bolsistaProdutividade']->value,'readonly'=>$_smarty_tpl->tpl_vars['readOnly']->value),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin8->smartyFBVFormSection(array('title'=>"common.bolsistaProdutividade",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'required'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>	
		<br>	
<?php $_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"common.orientacaoDoutoradoConcluida",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'required'=>true));
$_block_repeat=true;
echo $_block_plugin9->smartyFBVFormSection(array('title'=>"common.orientacaoDoutoradoConcluida",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'required'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formLocale']->value ));
$_prefixVariable12=ob_get_clean();
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formLocale']->value ));
$_prefixVariable13=ob_get_clean();
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formLocale']->value ));
$_prefixVariable14 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'multilingual'=>true,'name'=>"orientacaoDoutoradoConcluida[".$_prefixVariable12."]",'id'=>"orientacaoDoutoradoConcluida[".$_prefixVariable13."]",'from'=>$_smarty_tpl->tpl_vars['binario']->value,'value'=>$_smarty_tpl->tpl_vars['orientacaoDoutoradoConcluida']->value[$_prefixVariable14],'readonly'=>$_smarty_tpl->tpl_vars['readOnly']->value),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin9->smartyFBVFormSection(array('title'=>"common.orientacaoDoutoradoConcluida",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'required'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>		
		<br>
<?php $_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin10, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"common.orientacaoMestradoConcluida",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'required'=>true));
$_block_repeat=true;
echo $_block_plugin10->smartyFBVFormSection(array('title'=>"common.orientacaoMestradoConcluida",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'required'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formLocale']->value ));
$_prefixVariable15=ob_get_clean();
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formLocale']->value ));
$_prefixVariable16=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'multilingual'=>true,'name'=>"orientacaoMestradoConcluida[".$_prefixVariable15."]",'id'=>"orientacaoMestradoConcluida[".$_prefixVariable16."]",'from'=>$_smarty_tpl->tpl_vars['binario']->value,'value'=>$_smarty_tpl->tpl_vars['orientacaoMestradoConcluida']->value,'readonly'=>$_smarty_tpl->tpl_vars['readOnly']->value),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin10->smartyFBVFormSection(array('title'=>"common.orientacaoMestradoConcluida",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'required'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>	
		<br>
<?php $_block_plugin11 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin11, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"common.credenciadoEmPos",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'required'=>true));
$_block_repeat=true;
echo $_block_plugin11->smartyFBVFormSection(array('title'=>"common.credenciadoEmPos",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'required'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formLocale']->value ));
$_prefixVariable17=ob_get_clean();
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formLocale']->value ));
$_prefixVariable18=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'multilingual'=>true,'name'=>"credenciadoEmPos[".$_prefixVariable17."]",'id'=>"credenciadoEmPos[".$_prefixVariable18."]",'from'=>$_smarty_tpl->tpl_vars['binario']->value,'value'=>$_smarty_tpl->tpl_vars['credenciadoEmPos']->value,'readonly'=>$_smarty_tpl->tpl_vars['readOnly']->value),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin11->smartyFBVFormSection(array('title'=>"common.credenciadoEmPos",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'required'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>	
		<br>
<?php $_block_plugin12 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin12, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"common.notaCapesProgramaPos",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'required'=>true));
$_block_repeat=true;
echo $_block_plugin12->smartyFBVFormSection(array('title'=>"common.notaCapesProgramaPos",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'required'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formLocale']->value ));
$_prefixVariable19=ob_get_clean();
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formLocale']->value ));
$_prefixVariable20=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'multilingual'=>true,'name'=>"notaCapesProgramaPos[".$_prefixVariable19."]",'id'=>"notaCapesProgramaPos[".$_prefixVariable20."]",'from'=>$_smarty_tpl->tpl_vars['notaCapes']->value,'value'=>$_smarty_tpl->tpl_vars['notaCapesProgramaPos']->value,'readonly'=>$_smarty_tpl->tpl_vars['readOnly']->value),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin12->smartyFBVFormSection(array('title'=>"common.notaCapesProgramaPos",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'required'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>	
		<br>





<div class="pkp_helpers_clear">
	
	<?php $_block_plugin13 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin13, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"title",'title'=>"common.title",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'required'=>true));
$_block_repeat=true;
echo $_block_plugin13->smartyFBVFormSection(array('for'=>"title",'title'=>"common.title",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'required'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'multilingual'=>true,'name'=>"title",'id'=>"title",'value'=>$_smarty_tpl->tpl_vars['title']->value,'readonly'=>$_smarty_tpl->tpl_vars['readOnly']->value,'maxlength'=>"255",'required'=>true),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin13->smartyFBVFormSection(array('for'=>"title",'title'=>"common.title",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'required'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<?php $_block_plugin14 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin14, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"common.abstract",'for'=>"abstract",'required'=>$_smarty_tpl->tpl_vars['abstractsRequired']->value));
$_block_repeat=true;
echo $_block_plugin14->smartyFBVFormSection(array('title'=>"common.abstract",'for'=>"abstract",'required'=>$_smarty_tpl->tpl_vars['abstractsRequired']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<?php if ($_smarty_tpl->tpl_vars['wordCount']->value) {?>
		<p class="pkp_help"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.abstract.wordCount.description",'wordCount'=>$_smarty_tpl->tpl_vars['wordCount']->value),$_smarty_tpl ) );?>

	<?php }?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"textarea",'multilingual'=>true,'name'=>"abstract",'minlength'=>"200",'id'=>"abstract",'value'=>$_smarty_tpl->tpl_vars['abstract']->value,'rich'=>"extended",'readonly'=>$_smarty_tpl->tpl_vars['readOnly']->value,'wordCount'=>$_smarty_tpl->tpl_vars['wordCount']->value),$_smarty_tpl ) );?>

<?php $_block_repeat=false;
echo $_block_plugin14->smartyFBVFormSection(array('title'=>"common.abstract",'for'=>"abstract",'required'=>$_smarty_tpl->tpl_vars['abstractsRequired']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<hr>
<h2>Informações adicionais (somente na submissão de pré-projetos e projetos)</h2>


<?php $_block_plugin15 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin15, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"common.PGCTA",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'required'=>true));
$_block_repeat=true;
echo $_block_plugin15->smartyFBVFormSection(array('title'=>"common.PGCTA",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'required'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formLocale']->value ));
$_prefixVariable21=ob_get_clean();
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formLocale']->value ));
$_prefixVariable22=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'multilingual'=>true,'name'=>"PGCTA[".$_prefixVariable21."]",'id'=>"PGCTA[".$_prefixVariable22."]",'from'=>$_smarty_tpl->tpl_vars['binario']->value,'value'=>$_smarty_tpl->tpl_vars['PGCTA']->value,'readonly'=>$_smarty_tpl->tpl_vars['readOnly']->value),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin15->smartyFBVFormSection(array('title'=>"common.PGCTA",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'required'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<br>

<?php $_block_plugin16 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin16, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"title",'title'=>"common.sisgen",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'required'=>false));
$_block_repeat=true;
echo $_block_plugin16->smartyFBVFormSection(array('for'=>"title",'title'=>"common.sisgen",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'required'=>false), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formLocale']->value ));
$_prefixVariable23=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'multilingual'=>true,'name'=>"sisgen",'id'=>"sisgen[".$_prefixVariable23."]",'value'=>$_smarty_tpl->tpl_vars['sisgen']->value,'readonly'=>$_smarty_tpl->tpl_vars['readOnly']->value),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin16->smartyFBVFormSection(array('for'=>"title",'title'=>"common.sisgen",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'required'=>false), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<br>

<br>
<br>
<hr>
<h2>Indexação</h2>
Separe os termos com ponto-e-vírgula (termo1; termo2; termo3).

<?php $_block_plugin17 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin17, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"title",'title'=>"common.areaSubarea",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'required'=>true));
$_block_repeat=true;
echo $_block_plugin17->smartyFBVFormSection(array('for'=>"title",'title'=>"common.areaSubarea",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'required'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formLocale']->value ));
$_prefixVariable24=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'multilingual'=>true,'name'=>"areaSubarea",'id'=>"areaSubarea[".$_prefixVariable24."]",'value'=>$_smarty_tpl->tpl_vars['areaSubarea']->value,'readonly'=>$_smarty_tpl->tpl_vars['readOnly']->value),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin17->smartyFBVFormSection(array('for'=>"title",'title'=>"common.areaSubarea",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'required'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<br><br>
	<br>
<?php $_block_plugin18 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin18, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"common.eixo",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'required'=>true));
$_block_repeat=true;
echo $_block_plugin18->smartyFBVFormSection(array('title'=>"common.eixo",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'required'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formLocale']->value ));
$_prefixVariable25=ob_get_clean();
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formLocale']->value ));
$_prefixVariable26=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'multilingual'=>true,'name'=>"eixo[".$_prefixVariable25."]",'id'=>"eixo[".$_prefixVariable26."]",'from'=>$_smarty_tpl->tpl_vars['eixos']->value,'value'=>$_smarty_tpl->tpl_vars['eixo']->value,'readonly'=>$_smarty_tpl->tpl_vars['readOnly']->value),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin18->smartyFBVFormSection(array('title'=>"common.eixo",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'required'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>	
<br>
<br>
<hr>
<?php $_block_plugin19 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin19, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"title",'title'=>"common.naoRevisor",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE']));
$_block_repeat=true;
echo $_block_plugin19->smartyFBVFormSection(array('for'=>"title",'title'=>"common.naoRevisor",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formLocale']->value ));
$_prefixVariable27=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'multilingual'=>true,'name'=>"naoRevisor",'id'=>"naoRevisor[".$_prefixVariable27."]",'value'=>$_smarty_tpl->tpl_vars['naoRevisor']->value,'readonly'=>$_smarty_tpl->tpl_vars['readOnly']->value),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin19->smartyFBVFormSection(array('for'=>"title",'title'=>"common.naoRevisor",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<br>
<br>

<br>
<br><br>
<br>

<hr><?php }
}
