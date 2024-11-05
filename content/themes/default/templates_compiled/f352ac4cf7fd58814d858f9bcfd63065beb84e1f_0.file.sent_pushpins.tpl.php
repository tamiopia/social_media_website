<?php
/* Smarty version 4.5.1, created on 2024-10-31 17:42:18
  from 'C:\laragon\www\Script\content\themes\default\templates\sent_pushpins.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6723c17a54d7f5_40495121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f352ac4cf7fd58814d858f9bcfd63065beb84e1f' => 
    array (
      0 => 'C:\\laragon\\www\\Script\\content\\themes\\default\\templates\\sent_pushpins.tpl',
      1 => 1730396534,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:_ads_campaigns.tpl' => 1,
    'file:_ads.tpl' => 1,
    'file:_widget.tpl' => 1,
  ),
),false)) {
function content_6723c17a54d7f5_40495121 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\Script\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page content -->
<div class="<?php if ($_smarty_tpl->tpl_vars['system']->value['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> mt20 sg-offcanvas">
    <div class="row">

        <!-- left panel -->
        <div class="col-md-4 col-lg-3 sg-offcanvas-sidebar js_sticky-sidebar">
            <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <!-- left panel -->

        <!-- content panel -->
        <div class="col-md-8 col-lg-9 sg-offcanvas-mainbar">

            <!-- tabs -->
            <div class="content-tabs rounded-sm shadow-sm clearfix">
                <ul class="custom-tabs">
                    <li class="active"><a href="#"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Pushpin Requests" ));?>
</a></li>
                    <li><a href="Pushpin_Settings.php"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Pushpin Settings" ));?>
</a></li>
                    <li><a href="wallet.php"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Wallet Balance" ));?>
</a></li>
                    <li><a href="#"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Push Pin Sent" ));?>
</a></li>
                </ul>
            </div>
            <!-- tabs -->

            <!-- content -->
            <div class="row">
                <!-- left panel -->
                <div class="col-lg-8">
                    <!-- Approved Requests -->
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <strong><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Approved Push Requests" ));?>
</strong>
                        </div>
                        <div class="card-body">
                            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['approved_requests']->value) > 0) {?>
                                <ul class="list-group">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['approved_requests']->value, '_request');
$_smarty_tpl->tpl_vars['_request']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_request']->value) {
$_smarty_tpl->tpl_vars['_request']->do_else = false;
?>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center">
                                                <div class="ms-3">
                                                    <strong><?php echo $_smarty_tpl->tpl_vars['_request']->value['pusher_name'];?>
</strong>
                                                    <p class="text-muted">@<?php echo $_smarty_tpl->tpl_vars['_request']->value['pusher_username'];?>
</p>
                                                    <p class="mb-1"><?php echo $_smarty_tpl->tpl_vars['_request']->value['pusher_message'];?>
</p>
                                                    <a href="#" class="btn btn-info btn-sm view-post-btn" 
                                                       onclick="fetchPostDetails('<?php echo $_smarty_tpl->tpl_vars['_request']->value['post_id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['_request']->value['pusher_name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['_request']->value['pusher_message'];?>
', '<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];
echo $_smarty_tpl->tpl_vars['_request']->value['pusher_icon'];?>
','<?php echo $_smarty_tpl->tpl_vars['_request']->value['pusher_username'];?>
','<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['_request']->value['pusher_username'];?>
')">
                                                       <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "View Post" ));?>

                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                            <?php } else { ?>
                                <p class="text-center text-muted"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "No approved pushpin requests found." ));?>
</p>
                            <?php }?>
                        </div>
                    </div>

                    <!-- Reported Requests -->
                    <div class="card mt-4">
                        <div class="card-header bg-warning text-dark">
                            <strong><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Reported Push Requests" ));?>
</strong>
                        </div>
                        <div class="card-body">
                            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['reported_requests']->value) > 0) {?>
                                <ul class="list-group">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reported_requests']->value, '_request');
$_smarty_tpl->tpl_vars['_request']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_request']->value) {
$_smarty_tpl->tpl_vars['_request']->do_else = false;
?>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center">
                                                <div class="ms-3">
                                                    <strong><?php echo $_smarty_tpl->tpl_vars['_request']->value['pusher_name'];?>
</strong>
                                                    <p class="text-muted">@<?php echo $_smarty_tpl->tpl_vars['_request']->value['pusher_username'];?>
</p>
                                                    <p class="mb-1"><?php echo $_smarty_tpl->tpl_vars['_request']->value['pusher_message'];?>
</p>
                                                    <a href="#" class="btn btn-info btn-sm view-post-btn" 
                                                       onclick="fetchPostDetails('<?php echo $_smarty_tpl->tpl_vars['_request']->value['post_id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['_request']->value['pusher_name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['_request']->value['pusher_message'];?>
', '<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];
echo $_smarty_tpl->tpl_vars['_request']->value['pusher_icon'];?>
','<?php echo $_smarty_tpl->tpl_vars['_request']->value['pusher_username'];?>
','<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['_request']->value['pusher_username'];?>
')">
                                                       <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "View Post" ));?>

                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                            <?php } else { ?>
                                <p class="text-center text-muted"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "No reported pushpin requests found." ));?>
</p>
                            <?php }?>
                        </div>
                    </div>

                    <!-- Rejected Requests -->
                    <div class="card mt-4">
                        <div class="card-header bg-danger text-white">
                            <strong><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Rejected Pushpin Requests" ));?>
</strong>
                        </div>
                        <div class="card-body">
                            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['rejected_requests']->value) > 0) {?>
                                <ul class="list-group">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rejected_requests']->value, '_request');
$_smarty_tpl->tpl_vars['_request']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_request']->value) {
$_smarty_tpl->tpl_vars['_request']->do_else = false;
?>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center">
                                                <div class="ms-3">
                                                    <strong><?php echo $_smarty_tpl->tpl_vars['_request']->value['pusher_name'];?>
</strong>
                                                    <p class="text-muted">@<?php echo $_smarty_tpl->tpl_vars['_request']->value['pusher_username'];?>
</p>
                                                    <p class="mb-1"><?php echo $_smarty_tpl->tpl_vars['_request']->value['pusher_message'];?>
</p>
                                                    <a href="#" class="btn btn-info btn-sm view-post-btn" 
                                                       onclick="fetchPostDetails('<?php echo $_smarty_tpl->tpl_vars['_request']->value['post_id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['_request']->value['pusher_name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['_request']->value['pusher_message'];?>
', '<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];
echo $_smarty_tpl->tpl_vars['_request']->value['pusher_icon'];?>
','<?php echo $_smarty_tpl->tpl_vars['_request']->value['pusher_username'];?>
','<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['_request']->value['pusher_username'];?>
')">
                                                       <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "View Post" ));?>

                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                            <?php } else { ?>
                                <p class="text-center text-muted"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "No rejected pushpin requests found." ));?>
</p>
                            <?php }?>
                        </div>
                    </div>

                </div>
                <!-- left panel -->

                <!-- right panel -->
                <div class="col-lg-4">
                    <!-- search panel -->
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-search mr10"></i><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Search" ));?>

                        </div>
                        <div class="card-body">
                            <form action="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/push-requests/find" method="post">
                                <div class="form-group">
                                    <label class="form-label"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Keyword" ));?>
</label>
                                    <input type="text" class="form-control" name="query">
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary" name="submit"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Search" ));?>
</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- search panel -->

                    <?php $_smarty_tpl->_subTemplateRender('file:_ads_campaigns.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php $_smarty_tpl->_subTemplateRender('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php $_smarty_tpl->_subTemplateRender('file:_widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
                <!-- right panel -->
            </div>
            <!-- content -->

        </div>
        <!-- content panel -->

    </div>
    
    <?php echo '<script'; ?>
>
    // Function to fetch post details
    function fetchPostDetails(postId, pusherName, pusherMessage, pusherIcon, pusherUsername, userlink) {
        console.log("Post ID:", postId);
        fetch('../../../../fetch_post_details.php?id=' + postId)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok ' + response.statusText);
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    // Populate modal with post details
                    document.getElementById('postContent').innerText = data.post.text;
                    document.getElementById('postPusherName').innerText = pusherName;
                    document.getElementById('postPusherMessage').innerText = pusherMessage;
                    document.getElementById('postPusherIcon').src = pusherIcon;
                    document.getElementById('userLink').href = userlink;
                    // Show modal (add modal code if necessary)
                }
            })
            .catch(error => console.error('Error fetching post details:', error));
    }
    <?php echo '</script'; ?>
>
</div>
<?php }
}
