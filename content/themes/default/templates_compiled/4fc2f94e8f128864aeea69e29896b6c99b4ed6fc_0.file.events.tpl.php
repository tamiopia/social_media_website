<?php
/* Smarty version 4.5.1, created on 2024-10-24 15:48:56
  from 'C:\laragon\www\Script\content\themes\default\templates\events.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_671a6c6832b7d8_30888998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fc2f94e8f128864aeea69e29896b6c99b4ed6fc' => 
    array (
      0 => 'C:\\laragon\\www\\Script\\content\\themes\\default\\templates\\events.tpl',
      1 => 1711801304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__feeds_event.tpl' => 1,
    'file:_no_data.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_671a6c6832b7d8_30888998 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\Script\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page header -->
<div class="page-header">
  <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/headers/undraw_calendar_re_ki49.svg">
  <div class="circle-2"></div>
  <div class="circle-3"></div>
  <div class="<?php if ($_smarty_tpl->tpl_vars['system']->value['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?>">
    <h2><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Events" ));?>
</h2>
    <p class="text-xlg"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( $_smarty_tpl->tpl_vars['system']->value['system_description_events'] ));?>
</p>
    <div class="row mt20">
      <div class="col-sm-9 col-lg-6 mx-sm-auto">
        <form class="js_search-form" data-filter="events">
          <div class="input-group">
            <input type="text" class="form-control" name="query" placeholder='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Search for events" ));?>
'>
            <button type="submit" class="btn btn-light"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Search" ));?>
</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- page header -->

<!-- page content -->
<div class="<?php if ($_smarty_tpl->tpl_vars['system']->value['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> sg-offcanvas" style="margin-top: -25px;">

  <div class="position-relative">
    <!-- tabs -->
    <div class="content-tabs rounded-sm shadow-sm clearfix">
      <ul>
        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == '' || $_smarty_tpl->tpl_vars['view']->value == "category") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Discover" ));?>
</a>
        </li>
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
          <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "going") {?>class="active" <?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/going"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Going" ));?>
</a>
          </li>
          <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "interested") {?>class="active" <?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/interested"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Interested" ));?>
</a>
          </li>
          <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "invited") {?>class="active" <?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/invited"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Invited" ));?>
</a>
          </li>
          <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "manage") {?>class="active" <?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/manage"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "My Events" ));?>
</a>
          </li>
        <?php }?>
      </ul>
      <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_create_events']) {?>
        <div class="mt10 float-end">
          <button class="btn btn-md btn-primary d-none d-lg-block" data-toggle="modal" data-url="modules/add.php?type=event">
            <i class="fa fa-plus-circle mr5"></i><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Create Event" ));?>

          </button>
          <button class="btn btn-sm btn-icon btn-success d-block d-lg-none" data-toggle="modal" data-url="modules/add.php?type=event">
            <i class="fa fa-plus-circle"></i>
          </button>
        </div>
      <?php }?>
    </div>
    <!-- tabs -->
  </div>

  <div class="row">

    <?php if ($_smarty_tpl->tpl_vars['view']->value == '' || $_smarty_tpl->tpl_vars['view']->value == "category") {?>
      <!-- left panel -->
      <div class="col-md-4 col-lg-3 sg-offcanvas-sidebar">
        <!-- categories -->
        <div class="card">
          <div class="card-body with-nav">
            <ul class="side-nav">
              <?php if ($_smarty_tpl->tpl_vars['view']->value != "category") {?>
                <li class="active">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events">
                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "All" ));?>

                  </a>
                </li>
              <?php } else { ?>
                <li>
                  <?php if ($_smarty_tpl->tpl_vars['current_category']->value['parent']) {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/category/<?php echo $_smarty_tpl->tpl_vars['current_category']->value['parent']['category_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['current_category']->value['parent']['category_url'];?>
">
                      <i class="fas fa-arrow-alt-circle-left mr5"></i><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( $_smarty_tpl->tpl_vars['current_category']->value['parent']['category_name'] ));?>

                    </a>
                  <?php } else { ?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events">
                      <?php if ($_smarty_tpl->tpl_vars['current_category']->value['sub_categories']) {?><i class="fas fa-arrow-alt-circle-left mr5"></i><?php }
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "All" ));?>

                    </a>
                  <?php }?>
                </li>
              <?php }?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "category" && $_smarty_tpl->tpl_vars['current_category']->value['category_id'] == $_smarty_tpl->tpl_vars['category']->value['category_id']) {?>class="active" <?php }?>>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/category/<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['category']->value['category_url'];?>
">
                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['category_name'] ));?>

                    <?php if ($_smarty_tpl->tpl_vars['category']->value['sub_categories']) {?>
                      <span class="float-end"><i class="fas fa-angle-right"></i></span>
                    <?php }?>
                  </a>
                </li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          </div>
        </div>
        <!-- categories -->
      </div>
      <!-- left panel -->
    <?php } else { ?>
      <!-- side panel -->
      <div class="col-12 d-block d-md-none sg-offcanvas-sidebar">
        <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      </div>
      <!-- side panel -->
    <?php }?>

    <!-- content panel -->
    <div class="<?php if ($_smarty_tpl->tpl_vars['view']->value == '' || $_smarty_tpl->tpl_vars['view']->value == "category") {?>col-md-8 col-lg-9 sg-offcanvas-mainbar<?php } else { ?>col-12 sg-offcanvas-mainbar<?php }?>">
      <!-- content -->
      <div>
        <?php if ($_smarty_tpl->tpl_vars['events']->value) {?>
          <ul class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['events']->value, '_event');
$_smarty_tpl->tpl_vars['_event']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_event']->value) {
$_smarty_tpl->tpl_vars['_event']->do_else = false;
?>
              <?php $_smarty_tpl->_subTemplateRender('file:__feeds_event.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>'box'), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>

          <!-- see-more -->
          <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['events']->value) >= $_smarty_tpl->tpl_vars['system']->value['events_results']) {?>
            <div class="alert alert-post see-more js_see-more" data-get="<?php echo $_smarty_tpl->tpl_vars['get']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['view']->value == "category") {?>data-id="<?php echo $_smarty_tpl->tpl_vars['current_category']->value['category_id'];?>
" <?php }?> <?php if ($_smarty_tpl->tpl_vars['view']->value == "going" || $_smarty_tpl->tpl_vars['view']->value == "interested" || $_smarty_tpl->tpl_vars['view']->value == "invited" || $_smarty_tpl->tpl_vars['view']->value == "manage") {?>data-uid="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_id'];?>
" <?php }?>>
              <span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "See More" ));?>
</span>
              <div class="loader loader_small x-hidden"></div>
            </div>
          <?php }?>
          <!-- see-more -->
        <?php } else { ?>
          <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
      </div>
      <!-- content -->

    </div>
    <!-- content panel -->

  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
