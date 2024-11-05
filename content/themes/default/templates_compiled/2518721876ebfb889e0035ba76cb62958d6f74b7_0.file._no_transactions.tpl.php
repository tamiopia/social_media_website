<?php
/* Smarty version 4.5.1, created on 2024-10-31 09:14:42
  from 'C:\laragon\www\Script\content\themes\default\templates\_no_transactions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_67234a822d7a54_82994116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2518721876ebfb889e0035ba76cb62958d6f74b7' => 
    array (
      0 => 'C:\\laragon\\www\\Script\\content\\themes\\default\\templates\\_no_transactions.tpl',
      1 => 1685400829,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
),false)) {
function content_67234a822d7a54_82994116 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- no transaction -->
<div class="text-center text-muted">
  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"transaction",'class'=>"mb20",'width'=>"56px",'height'=>"56px"), 0, false);
?>
  <div class="text-md">
    <span class="no-data"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Looks like you don't have any transaction yet" ));?>
</span>
  </div>
</div>
<!-- no transaction --><?php }
}
