{**
 * templates/submission/submissionMetadataFormTitleFields.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Submission's metadata form title fields. To be included in any form that wants to handle
 * submission metadata.
 *}
{if $formParams.submissionVersion && ($formParams.submissionVersion < $currentSubmissionVersion)}
  {assign var=readOnly value=1}
{else}
	{assign var=readOnly value=0}
{/if}
{fbvElement type="hidden" name="submissionVersion" id="submissionVersion" value=$formParams.submissionVersion}


{**
 * Inserimos aqui os campos customizados organizados em blocos.
*}
{**
 * Nome e sobrenome
*}
<h2>Dados do Aluno</h2>
<div class="pkp_helpers_clear custom_propes_fields">
	
		{fbvFormSection for="title" title="common.nomeAluno" inline="true" size=$fbvStyles.size.SMALL required=true}
		{fbvElement type="text" multilingual=true name="nomeAluno" id="nomeAluno[{$formLocale|escape}]" value=$nomeAluno }
	{/fbvFormSection}
	{fbvFormSection for="title" title="common.RAAluno" inline="true" size=$fbvStyles.size.SMALL required=true}
		{fbvElement type="text" multilingual=true name="RAAluno" id="RAAluno[{$formLocale|escape}]" value=$RAAluno readonly=$readOnly}
	{/fbvFormSection}
	
</div>

<div class="pkp_helpers_clear custom_propes_fields">
	{fbvFormSection for="title" title="common.emailAluno" inline="true" size=$fbvStyles.size.SMALL required=true}
		{fbvElement type="text" multilingual=true name="emailAluno" id="emailAluno[{$formLocale|escape}]" value=$emailAluno readonly=$readOnly}
	{/fbvFormSection}
	{fbvFormSection title="common.modalidadeAluno" inline="true" size=$fbvStyles.size.SMALL required=true}
		{fbvElement type="select" multilingual=true name="modalidadeAluno[{$formLocale|escape}]" id="modalidade[{$formLocale|escape}]" from=$modalidades value=$modalidadeAluno readonly=$readOnly}
		{/fbvFormSection}
		
</div>
<hr>
<h2>Dados do Orientador</h2>
<div class="pkp_helpers_clear">
	{fbvFormSection for="title" title="common.nomeOrientador" inline="true" size=$fbvStyles.size.SMALL required=true}
		{fbvElement type="text" multilingual=true name="nomeOrientador" id="nomeOrientador[{$formLocale|escape}]" value=$nomeOrientador readonly=$readOnly}
	{/fbvFormSection}
	{fbvFormSection for="title" title="common.emailOrientador" inline="true" size=$fbvStyles.size.SMALL required=true}
		{fbvElement type="text" multilingual=true name="emailOrientador" id="emailOrientador[{$formLocale|escape}]" value=$emailOrientador readonly=$readOnly}
	{/fbvFormSection}
</div>



{fbvFormSection title="common.filhoEmIdadePreFundamental" size=$fbvStyles.size.LARGE required=true}
		{fbvElement type="select" multilingual=true name="filhoEmIdadePreFundamental[{$formLocale|escape}]" id="filhoEmIdadePreFundamental[{$formLocale|escape}]" from=$binario value=$filhoEmIdadePreFundamental readonly=$readOnly}
		{/fbvFormSection}
		<br>
{fbvFormSection title="common.bolsistaProdutividade"  size=$fbvStyles.size.LARGE required=true}
		{fbvElement type="select" multilingual=true name="bolsistaProdutividade[{$formLocale|escape}]" id="bolsistaProdutividade[{$formLocale|escape}]" from=$binario value=$bolsistaProdutividade readonly=$readOnly}
		{/fbvFormSection}	
		<br>	
{fbvFormSection title="common.orientacaoDoutoradoConcluida" size=$fbvStyles.size.LARGE required=true}
		{fbvElement type="select" multilingual=true name="orientacaoDoutoradoConcluida[{$formLocale|escape}]" id="orientacaoDoutoradoConcluida[{$formLocale|escape}]" from=$binario value=$orientacaoDoutoradoConcluida[{$formLocale|escape}] readonly=$readOnly}
		{/fbvFormSection}		
		<br>
{fbvFormSection title="common.orientacaoMestradoConcluida"  size=$fbvStyles.size.LARGE required=true}
		{fbvElement type="select" multilingual=true name="orientacaoMestradoConcluida[{$formLocale|escape}]" id="orientacaoMestradoConcluida[{$formLocale|escape}]" from=$binario value=$orientacaoMestradoConcluida readonly=$readOnly}
		{/fbvFormSection}	
		<br>
{fbvFormSection title="common.credenciadoEmPos"  size=$fbvStyles.size.LARGE required=true}
		{fbvElement type="select" multilingual=true name="credenciadoEmPos[{$formLocale|escape}]" id="credenciadoEmPos[{$formLocale|escape}]" from=$binario value=$credenciadoEmPos readonly=$readOnly}
		{/fbvFormSection}	
		<br>
{fbvFormSection title="common.notaCapesProgramaPos"  size=$fbvStyles.size.LARGE required=true}
		{fbvElement type="select" multilingual=true name="notaCapesProgramaPos[{$formLocale|escape}]" id="notaCapesProgramaPos[{$formLocale|escape}]" from=$notaCapes value=$notaCapesProgramaPos readonly=$readOnly}
		{/fbvFormSection}	
		<br>





<div class="pkp_helpers_clear">
	
	{fbvFormSection for="title" title="common.title" inline="true" size=$fbvStyles.size.LARGE required=true}
		{fbvElement type="text" multilingual=true name="title" id="title" value=$title readonly=$readOnly maxlength="255" required=true}
	{/fbvFormSection}
</div>

{fbvFormSection title="common.abstract" for="abstract" required=$abstractsRequired}
	{if $wordCount}
		<p class="pkp_help">{translate key="submission.abstract.wordCount.description" wordCount=$wordCount}
	{/if}
	{fbvElement type="textarea" multilingual=true name="abstract" minlength="200" id="abstract" value=$abstract rich="extended" readonly=$readOnly wordCount=$wordCount}
{/fbvFormSection}

<hr>
<h2>Informações adicionais (somente na submissão de pré-projetos e projetos)</h2>


{fbvFormSection title="common.PGCTA" size=$fbvStyles.size.LARGE required=true}
		{fbvElement type="select" multilingual=true name="PGCTA[{$formLocale|escape}]" id="PGCTA[{$formLocale|escape}]" from=$binario value=$PGCTA readonly=$readOnly}
		{/fbvFormSection}
		<br>

{fbvFormSection for="title" title="common.sisgen" inline="true" size=$fbvStyles.size.MEDIUM required=false }
		{fbvElement type="text" multilingual=true name="sisgen" id="sisgen[{$formLocale|escape}]" value=$sisgen readonly=$readOnly}
	{/fbvFormSection}
	<br>

<br>
<br>
<hr>
<h2>Indexação</h2>
Separe os termos com ponto-e-vírgula (termo1; termo2; termo3).

{fbvFormSection for="title" title="common.areaSubarea" inline="true" size=$fbvStyles.size.LARGE required=false required=true}
		{fbvElement type="text" multilingual=true name="areaSubarea" id="areaSubarea[{$formLocale|escape}]" value=$areaSubarea readonly=$readOnly}
	{/fbvFormSection}

<br><br>
	<br>
{fbvFormSection title="common.eixo" size=$fbvStyles.size.LARGE required=true}
		{fbvElement type="select" multilingual=true name="eixo[{$formLocale|escape}]" id="eixo[{$formLocale|escape}]" from=$eixos value=$eixo readonly=$readOnly}
		{/fbvFormSection}	
<br>
<br>
<hr>
{fbvFormSection for="title" title="common.naoRevisor" inline="true" size=$fbvStyles.size.LARGE }
		{fbvElement type="text" multilingual=true name="naoRevisor" id="naoRevisor[{$formLocale|escape}]" value=$naoRevisor readonly=$readOnly}
	{/fbvFormSection}

<br>
<br>

<br>
<br><br>
<br>

<hr>