<?php
/* Smarty version 4.5.1, created on 2024-11-05 13:26:38
  from 'C:\laragon\www\Script\content\themes\default\templates\_header.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_672a1d0e75f713_41655152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af81eb296d2f6b7463298c7124357c735e9831fc' => 
    array (
      0 => 'C:\\laragon\\www\\Script\\content\\themes\\default\\templates\\_header.post.tpl',
      1 => 1730813194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
),false)) {
function content_672a1d0e75f713_41655152 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="dropdown js_live-requests">
  <a href="#" class="js_open_publisher" >
    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pushpin",'class'=>"header-icon",'width'=>"24px",'height'=>"24px"), 0, false);
?>
  </a>
</li>

<!-- Publisher Section (initially hidden) -->

<!-- Include jQuery -->
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
  $(document).ready(function() {
    // On clicking the pushpin icon
  
  });
<?php echo '</script'; ?>
>
<?php }
}
