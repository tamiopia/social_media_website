<?php
/* Smarty version 4.5.1, created on 2024-10-19 17:30:00
  from 'C:\laragon\www\Script\content\themes\default\templates\_footer.links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6713ec98d7f8e6_81481574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '396594878c4cb71093ea4e93e0118d76ada6ce0f' => 
    array (
      0 => 'C:\\laragon\\www\\Script\\content\\themes\\default\\templates\\_footer.links.tpl',
      1 => 1685451999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6713ec98d7f8e6_81481574 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- footer links -->
<div class="<?php if ($_smarty_tpl->tpl_vars['system']->value['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?>">
  <div class="row footer <?php if ($_smarty_tpl->tpl_vars['page']->value == 'index' && !$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>border-top-0<?php }?>">
    <div class="col-sm-6 dropdown">
      <span class="mr5">&copy; <?php echo date('Y');?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( $_smarty_tpl->tpl_vars['system']->value['system_title'] ));?>
</span>
      <!-- language -->
      <a href="#" class="language-dropdown" data-bs-toggle="dropdown">
        <img width="16" height="16" class="mr10" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['language']['flag'];?>
">
        <span><?php echo $_smarty_tpl->tpl_vars['system']->value['language']['title'];?>
</span>
      </a>
      <div class="dropdown-menu">
        <div class="js_scroller">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['system']->value['languages'], 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
            <a class="dropdown-item" href="?lang=<?php echo $_smarty_tpl->tpl_vars['language']->value['code'];?>
">
              <img width="16" height="16" class="mr10" src="<?php echo $_smarty_tpl->tpl_vars['language']->value['flag'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>

            </a>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      </div>
      <!-- language -->
    </div>

    <div class="col-sm-6 links">
      <?php if ($_smarty_tpl->tpl_vars['static_pages']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['static_pages']->value, 'static_page');
$_smarty_tpl->tpl_vars['static_page']->index = -1;
$_smarty_tpl->tpl_vars['static_page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['static_page']->value) {
$_smarty_tpl->tpl_vars['static_page']->do_else = false;
$_smarty_tpl->tpl_vars['static_page']->index++;
$_smarty_tpl->tpl_vars['static_page']->first = !$_smarty_tpl->tpl_vars['static_page']->index;
$__foreach_static_page_5_saved = $_smarty_tpl->tpl_vars['static_page'];
?>
          <a <?php if (!$_smarty_tpl->tpl_vars['static_page']->first) {?>class="pl10" <?php }?> href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/static/<?php echo $_smarty_tpl->tpl_vars['static_page']->value['page_url'];?>
">
            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( $_smarty_tpl->tpl_vars['static_page']->value['page_title'] ));?>

          </a>
        <?php
$_smarty_tpl->tpl_vars['static_page'] = $__foreach_static_page_5_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['system']->value['contact_enabled']) {?>
        <a class="pl10" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/contacts">
          <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Contact Us" ));?>

        </a>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['system']->value['directory_enabled']) {?>
        <a class="pl10" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory">
          <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Directory" ));?>

        </a>
      <?php }?>
    </div>
  </div>
</div>
<!-- footer links --><?php }
}
