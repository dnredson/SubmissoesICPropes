<?php
/**
 * @defgroup submission_form Submission Forms
 */

/**
 * @file classes/submission/form/SubmissionSubmitForm.inc.php
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class SubmissionSubmitForm
 * @ingroup submission_form
 *
 * @brief Base class for author submit forms.
 */

import('lib.pkp.classes.form.Form');

class SubmissionSubmitForm extends Form {
	/** @var Context */
	var $context;

	/** @var int the ID of the submission */
	var $submissionId;

	/** @var Submission current submission */
	var $submission;

	/** @var int the current step */
	var $step;

	/**
	 * Constructor.
	 * @param $submission object
	 * @param $step int
	 */
	function __construct($context, $submission, $step) {
		parent::__construct(
			sprintf('submission/form/step%d.tpl', $step),
			true,
			$submission ? $submission->getLocale() : null,
			$context->getSupportedSubmissionLocaleNames()
		);

		$this->addCheck(new FormValidatorPost($this));
		$this->addCheck(new FormValidatorCSRF($this));
		$this->step = (int) $step;
		$this->submission = $submission;
		$this->submissionId = $submission ? $submission->getId() : null;
		$this->context = $context;
	}

	/**
	 * @copydoc Form::fetch
	 */
	/** Editado por Dener
	*
	*/
	function fetch($request, $template = null, $display = false) {
		$templateMgr = TemplateManager::getManager($request);
		$modalidades = array("bolsista"=>"Bolsista", "Voluntario"=>"Voluntario");
		$binario = array(""=>"","sim"=>"sim", "nao"=>"não");
		$notaCapes = array("0"=>"Não se Aplica", "3"=>"3", "4"=>"4", "5"=>"5", "6"=>"6", "7"=>"7");
		$eixos = array("humanidades"=>"Humanidades", 
		"comunicação"=>"Comunicação e Informação",
		"processos"=>"Processos de Transformação",
		"energia"=>"Energia",
		"simulacao"=>"Simulação e Representação",
		"estrutura"=>"Estrutura da Matéria");
		$eixo = array(
			"humanidades"=>"Humanidades", 
			"comunicação"=>"Comunicação e Informação",
			"processos"=>"Processos de Transformação",
			"energia"=>"Energia",
			"simulacao"=>"Simulação e Representação",
			"estrutura"=>"Estrutura da Matéria");
		$templateMgr->assign('modalidades', $modalidades);
		$templateMgr->assign('binario', $binario);
		$templateMgr->assign('notaCapes', $notaCapes);
		$templateMgr->assign('eixos', $eixos);
		$templateMgr->assign('eixo', $eixo);
		$templateMgr->assign('submissionId', $this->submissionId);
		$templateMgr->assign('submitStep', $this->step);

		if (isset($this->submission)) {
			$submissionProgress = $this->submission->getSubmissionProgress();
		} else {
			$submissionProgress = 1;
		}
		$templateMgr->assign('submissionProgress', $submissionProgress);
		return parent::fetch($request, $template, $display);
	}
}


