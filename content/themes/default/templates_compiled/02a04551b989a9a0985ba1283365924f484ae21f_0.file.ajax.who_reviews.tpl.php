<?php
/* Smarty version 4.5.1, created on 2024-11-02 07:45:28
  from 'C:\laragon\www\Script\content\themes\default\templates\ajax.who_reviews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6725d898cde989_00376580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02a04551b989a9a0985ba1283365924f484ae21f' => 
    array (
      0 => 'C:\\laragon\\www\\Script\\content\\themes\\default\\templates\\ajax.who_reviews.tpl',
      1 => 1730499392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_review.tpl' => 1,
  ),
),false)) {
function content_6725d898cde989_00376580 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
  <h6 class="modal-title"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Post Reviews" ));?>
</h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
  <?php if ($_smarty_tpl->tpl_vars['post']->value['reviews_count'] > 0) {?>
    <ul class="row">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value['reviews'], '_review');
$_smarty_tpl->tpl_vars['_review']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_review']->value) {
$_smarty_tpl->tpl_vars['_review']->do_else = false;
?>
        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_review.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_darker'=>true,'_wide'=>true), 0, true);
?>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <?php if ($_smarty_tpl->tpl_vars['post']->value['reviews_count'] >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
      <!-- see-more -->
      <div class="alert alert-post see-more mt0 mb20 js_see-more" data-get="reviews" data-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" data-type="post">
        <span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "See More" ));?>
</span>
        <div class="loader loader_small x-hidden"></div>
      </div>
      <!-- see-more -->
    <?php }?>
  <?php } else { ?>
    <p class="text-center text-muted mt10">
      <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "this post" ));?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "doesn't have reviews" ));?>

    </p>
  <?php }?>
</div><?php }
}
