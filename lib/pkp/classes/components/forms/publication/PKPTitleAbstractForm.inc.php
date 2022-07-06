<?php
/**
 * @file classes/components/form/publication/PKPTitleAbstractForm.inc.php
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2000-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class PKPTitleAbstractForm
 * @ingroup classes_controllers_form
 *
 * @brief A preset form for setting a publication's title and abstract
 */
namespace PKP\components\forms\publication;
use \PKP\components\forms\FormComponent;
use \PKP\components\forms\FieldText;
use \PKP\components\forms\FieldRichTextarea;

define('FORM_TITLE_ABSTRACT', 'titleAbstract');

class PKPTitleAbstractForm extends FormComponent {
	/** @copydoc FormComponent::$id */
	public $id = FORM_TITLE_ABSTRACT;

	/** @copydoc FormComponent::$method */
	public $method = 'PUT';

	/** @var Publication */
	public $publication;

	/**
	 * Constructor
	 *
	 * @param $action string URL to submit the form to
	 * @param $locales array Supported locales
	 * @param $publication Publication The publication to change settings for
	 */
	public function __construct($action, $locales, $publication) {
		$this->action = $action;
		$this->locales = $locales;
		$this->publication = $publication;

		$this->addField(new FieldText('title', [
				'label' => __('common.title'),
				'size' => 'medium',
				'isMultilingual' => true,
				'value' => $publication->getData('title'),
			]))
			
			->addField(new FieldText('abstract', [
				'label' => __('common.abstract'),
				'size' => 'medium',
				'isMultilingual' => true,
				'value' => $publication->getData('abstract'),
			]))
			->addField(new FieldText('nomeAluno', [
				'label' => __('common.nomeAluno'),
				'size' => 'medium',
				'isMultilingual' => true,
				'value' => $publication->getData('nomeAluno'),
			]))
			->addField(new FieldText('RAAluno', [
				'label' => __('common.RAAluno'),
				'size' => 'medium',
				'isMultilingual' => true,
				'value' => $publication->getData('RAAluno'),
			]))
			
			->addField(new FieldText('emailAluno', [
				'label' => __('common.emailAluno'),
				'size' => 'medium',
				'isMultilingual' => true,
				'value' => $publication->getData('emailAluno'),
			]))
			->addField(new FieldText('modalidadeAluno', [
				'label' => __('common.modalidadeAluno'),
				'size' => 'medium',
				'isMultilingual' => true,
				'value' => $publication->getData('modalidadeAluno'),
			]))
			->addField(new FieldText('nomeOrientador', [
				'label' => __('common.nomeOrientador'),
				'size' => 'medium',
				'isMultilingual' => true,
				'value' => $publication->getData('nomeOrientador'),
			]))
			->addField(new FieldText('emailOrientador', [
				'label' => __('common.emailOrientador'),
				'size' => 'medium',
				'isMultilingual' => true,
				'value' => $publication->getData('emailOrientador'),
			]))
			->addField(new FieldText('filhoEmIdadePreFundamental', [
				'label' => __('common.filhoEmIdadePreFundamental'),
				'size' => 'medium',
				'isMultilingual' => true,
				'value' => $publication->getData('filhoEmIdadePreFundamental'),
			]))
			->addField(new FieldText('bolsistaProdutividade', [
				'label' => __('common.bolsistaProdutividade'),
				'size' => 'medium',
				'isMultilingual' => true,
				'value' => $publication->getData('bolsistaProdutividade'),
			]))
			->addField(new FieldText('orientacaoDoutoradoConcluida', [
				'label' => __('common.orientacaoDoutoradoConcluida'),
				'size' => 'medium',
				'isMultilingual' => true,
				'value' => $publication->getData('orientacaoDoutoradoConcluida'),
			]))
			->addField(new FieldText('orientacaoMestradoConcluida', [
				'label' => __('common.orientacaoMestradoConcluida'),
				'size' => 'medium',
				'isMultilingual' => true,
				'value' => $publication->getData('orientacaoMestradoConcluida'),
			]))
			->addField(new FieldText('credenciadoEmPos', [
				'label' => __('common.credenciadoEmPos'),
				'size' => 'medium',
				'isMultilingual' => true,
				'value' => $publication->getData('credenciadoEmPos'),
			]))
			->addField(new FieldText('notaCapesProgramaPos', [
				'label' => __('common.notaCapesProgramaPos'),
				'size' => 'medium',
				'isMultilingual' => true,
				'value' => $publication->getData('notaCapesProgramaPos'),
			]))
			->addField(new FieldText('PGCTA', [
				'label' => __('common.PGCTA'),
				'size' => 'medium',
				'isMultilingual' => true,
				'value' => $publication->getData('PGCTA'),
			]))
			->addField(new FieldText('sisgen', [
				'label' => __('common.sisgen'),
				'size' => 'medium',
				'isMultilingual' => true,
				'value' => $publication->getData('sisgen'),
			]))
			->addField(new FieldText('areaSubarea', [
				'label' => __('common.areaSubarea'),
				'size' => 'medium',
				'isMultilingual' => true,
				'value' => $publication->getData('areaSubarea'),
			]))
			->addField(new FieldText('eixo', [
				'label' => __('common.eixo'),
				'size' => 'medium',
				'isMultilingual' => true,
				'value' => $publication->getData('eixo'),
			]))
			->addField(new FieldText('naoRevisor', [
				'label' => __('common.naoRevisor'),
				'size' => 'medium',
				'isMultilingual' => true,
				'value' => $publication->getData('naoRevisor'),
			]))
			;
			
			
			
	}
}
