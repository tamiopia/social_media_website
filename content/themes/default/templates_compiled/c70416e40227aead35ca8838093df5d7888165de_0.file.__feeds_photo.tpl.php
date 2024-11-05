<?php
/* Smarty version 4.5.1, created on 2024-10-24 07:44:16
  from 'C:\laragon\www\Script\content\themes\default\templates\__feeds_photo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6719fad0ee4946_20288888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c70416e40227aead35ca8838093df5d7888165de' => 
    array (
      0 => 'C:\\laragon\\www\\Script\\content\\themes\\default\\templates\\__feeds_photo.tpl',
      1 => 1692379509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6719fad0ee4946_20288888 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="<?php if ($_smarty_tpl->tpl_vars['_small']->value) {?>col-4<?php } else { ?>col-6 col-md-4 col-lg-2<?php }?> <?php if ($_smarty_tpl->tpl_vars['photo']->value['blur']) {?>x-blured<?php }?>">
  <a class="pg_photo <?php if (!$_smarty_tpl->tpl_vars['_small']->value) {?>large<?php }?> js_lightbox" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/photos/<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value['source'];?>
" data-context="<?php echo $_smarty_tpl->tpl_vars['_context']->value;?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value['source'];?>
);">
    <?php if (!$_smarty_tpl->tpl_vars['_small']->value && ($_smarty_tpl->tpl_vars['_manage']->value || $_smarty_tpl->tpl_vars['photo']->value['manage'])) {?>
      <!-- delete -->
      <div class="pg_photo-delete-btn">
        <button type="button" class="btn-close js_delete-photo" data-id="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
" data-bs-toggle="tooltip" title='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Delete" ));?>
'></button>
      </div>
      <!-- delete -->
      <?php if ($_smarty_tpl->tpl_vars['_can_pin']->value) {?>
        <!-- pin -->
        <div class="pg_photo-pin-btn <?php if ($_smarty_tpl->tpl_vars['photo']->value['pinned']) {?>js_unpin-photo pinned<?php } else { ?>js_pin-photo<?php }?>" data-id="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
" data-bs-toggle="tooltip" title='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Pin" ));?>
'>
          <i class="fa-solid fa-paperclip"></i>
        </div>
        <!-- pin -->
      <?php }?>
    <?php }?>
  </a>
</div><?php }
}
