<?php
/* Smarty version 4.5.1, created on 2024-10-19 19:42:54
  from 'C:\laragon\www\Script\content\themes\default\templates\__reaction_emojis.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_67140bbe86fcf1_62117799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e36f4b015f4ff833a1d498a9c711317a11312702' => 
    array (
      0 => 'C:\\laragon\\www\\Script\\content\\themes\\default\\templates\\__reaction_emojis.tpl',
      1 => 1667424619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67140bbe86fcf1_62117799 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- reaction -->
<div class="emoji">
  <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['reactions']->value[$_smarty_tpl->tpl_vars['_reaction']->value]['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['reactions']->value[$_smarty_tpl->tpl_vars['_reaction']->value]['title'];?>
" />
</div>
<!-- reaction --><?php }
}
