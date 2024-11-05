<?php
/* Smarty version 4.5.1, created on 2024-10-31 09:18:04
  from 'C:\laragon\www\Script\content\themes\default\templates\ajax.autocomplete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_67234b4c0753e7_35075887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61103168f5e8dc8169d16f9dc6937ef796853635' => 
    array (
      0 => 'C:\\laragon\\www\\Script\\content\\themes\\default\\templates\\ajax.autocomplete.tpl',
      1 => 1707838292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67234b4c0753e7_35075887 (Smarty_Internal_Template $_smarty_tpl) {
?><ul>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
    <li>
      <div class="data-container clickable small <?php if ($_smarty_tpl->tpl_vars['type']->value == 'tags') {?>js_tag-add<?php } else { ?>js_autocomplete-add<?php }?>" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
" data-name="<?php if ($_smarty_tpl->tpl_vars['system']->value['show_usernames_enabled']) {
echo $_smarty_tpl->tpl_vars['_user']->value['user_name'];
} else {
echo $_smarty_tpl->tpl_vars['_user']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_lastname'];
}?>" <?php if ($_smarty_tpl->tpl_vars['_user']->value['chat_price']) {?>data-chat-price="<?php echo $_smarty_tpl->tpl_vars['_user']->value['chat_price'];?>
" <?php }?> <?php if ($_smarty_tpl->tpl_vars['_user']->value['call_price']) {?>data-call-price="<?php echo $_smarty_tpl->tpl_vars['_user']->value['call_price'];?>
" <?php }?>>
        <div class="data-avatar">
          <img class="data-avatar" src="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_picture'];?>
" alt="">
        </div>
        <div class="data-content">
          <div><strong><?php if ($_smarty_tpl->tpl_vars['system']->value['show_usernames_enabled']) {
echo $_smarty_tpl->tpl_vars['_user']->value['user_name'];
} else {
echo $_smarty_tpl->tpl_vars['_user']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_lastname'];
}?></strong></div>
        </div>
      </div>
    </li>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
