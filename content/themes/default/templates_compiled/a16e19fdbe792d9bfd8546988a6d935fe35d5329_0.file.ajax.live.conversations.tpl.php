<?php
/* Smarty version 4.5.1, created on 2024-10-24 15:45:33
  from 'C:\laragon\www\Script\content\themes\default\templates\ajax.live.conversations.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_671a6b9d46e303_90443517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a16e19fdbe792d9bfd8546988a6d935fe35d5329' => 
    array (
      0 => 'C:\\laragon\\www\\Script\\content\\themes\\default\\templates\\ajax.live.conversations.tpl',
      1 => 1647975803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_conversation.tpl' => 1,
  ),
),false)) {
function content_671a6b9d46e303_90443517 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['conversations']->value, 'conversation');
$_smarty_tpl->tpl_vars['conversation']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['conversation']->value) {
$_smarty_tpl->tpl_vars['conversation']->do_else = false;
?>
  <?php $_smarty_tpl->_subTemplateRender('file:__feeds_conversation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
