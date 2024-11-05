<?php
/* Smarty version 4.5.1, created on 2024-10-19 19:45:17
  from 'C:\laragon\www\Script\content\themes\default\templates\emails\activation_email.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_67140c4d5c0655_91826065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95693645ed711658f2c23057ede727d8779dd41b' => 
    array (
      0 => 'C:\\laragon\\www\\Script\\content\\themes\\default\\templates\\emails\\activation_email.txt',
      1 => 1693733137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67140c4d5c0655_91826065 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Hi" ));?>
 <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
,

<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "To complete the activation process, please follow this link" ));?>
:
<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/activation/<?php echo $_smarty_tpl->tpl_vars['email_verification_code']->value;?>


<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Activiation Code" ));?>
: <?php echo $_smarty_tpl->tpl_vars['email_verification_code']->value;?>


<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Welcome to" ));?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( $_smarty_tpl->tpl_vars['system']->value['system_title'] ));?>


<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( $_smarty_tpl->tpl_vars['system']->value['system_title'] ));?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Team" ));
}
}
