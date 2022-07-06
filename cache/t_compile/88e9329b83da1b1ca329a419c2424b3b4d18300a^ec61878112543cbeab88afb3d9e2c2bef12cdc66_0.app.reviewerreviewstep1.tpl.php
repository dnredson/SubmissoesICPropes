<?php
/* Smarty version 3.1.39, created on 2022-06-14 16:47:23
  from 'app:reviewerreviewstep1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62a8bb9b8ec7c9_21097482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec61878112543cbeab88afb3d9e2c2bef12cdc66' => 
    array (
      0 => 'app:reviewerreviewstep1.tpl',
      1 => 1650987488,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'core:reviewer/review/step1.tpl' => 1,
  ),
),false)) {
function content_62a8bb9b8ec7c9_21097482 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('descriptionFieldKey', "article.abstract");
$_smarty_tpl->_subTemplateRender("core:reviewer/review/step1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
