<?php
/* Smarty version 4.5.1, created on 2024-10-24 15:45:45
  from 'C:\laragon\www\Script\content\themes\default\templates\ajax.chat.conversation.messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_671a6ba93e3ea6_71791612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bec3ecd50aae4bf9a351731352dc79217c7fefb9' => 
    array (
      0 => 'C:\\laragon\\www\\Script\\content\\themes\\default\\templates\\ajax.chat.conversation.messages.tpl',
      1 => 1647975782,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:ajax.chat.messages.tpl' => 1,
  ),
),false)) {
function content_671a6ba93e3ea6_71791612 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['conversation']->value['total_messages'] >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
  <!-- see-more -->
  <div class="alert alert-chat see-more small js_see-more" data-id=<?php echo $_smarty_tpl->tpl_vars['conversation']->value['conversation_id'];?>
 data-get="messages">
    <span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Loading Older Messages" ));?>
</span>
    <div class="loader loader_small x-hidden"></div>
  </div>
  <!-- see-more -->
<?php }?>

<ul>
  <?php $_smarty_tpl->_subTemplateRender('file:ajax.chat.messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('messages'=>$_smarty_tpl->tpl_vars['conversation']->value['messages']), 0, false);
?>
</ul><?php }
}
