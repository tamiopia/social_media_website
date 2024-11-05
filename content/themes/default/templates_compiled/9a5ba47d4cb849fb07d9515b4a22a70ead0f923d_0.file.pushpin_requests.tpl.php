<?php
/* Smarty version 4.5.1, created on 2024-10-31 17:13:14
  from 'C:\laragon\www\Script\content\themes\default\templates\pushpin_requests.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6723baaac0c6a2_44264690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a5ba47d4cb849fb07d9515b4a22a70ead0f923d' => 
    array (
      0 => 'C:\\laragon\\www\\Script\\content\\themes\\default\\templates\\pushpin_requests.tpl',
      1 => 1730394786,
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
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_6723baaac0c6a2_44264690 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <li><a href="wallet.php"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "wallet balance" ));?>
</a></li>
                    <li><a href="sent_pushpins.php"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Push Pin Sent" ));?>
</a></li>
                </ul>
            </div>
            <!-- tabs -->

            <!-- content -->
            <div class="row">
                <!-- left panel -->
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header bg-transparent">
                            <strong><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Pending Push Requests" ));?>
</strong>
                        </div>
                        <div class="card-body">
                            <!-- Check if there are pushpin requests -->
                            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['push_requests']->value) > 0) {?>
                                <ul class="list-group">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['push_requests']->value, '_request');
$_smarty_tpl->tpl_vars['_request']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_request']->value) {
$_smarty_tpl->tpl_vars['_request']->do_else = false;
?>
                                    
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['_request']->value['pusher_username'];?>
" >
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];
echo $_smarty_tpl->tpl_vars['_request']->value['pusher_icon'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_request']->value['pusher_username'];?>
" class="rounded-circle" width="100" height="100">
                                                <div class="ms-3">
                                                    <strong><?php echo $_smarty_tpl->tpl_vars['_request']->value['pusher_name'];?>
</strong>
                                                    <p class="text-muted">@<?php echo $_smarty_tpl->tpl_vars['_request']->value['pusher_username'];?>
</p>
                                                    </a>
                                                    <p class="mb-1"><?php echo $_smarty_tpl->tpl_vars['_request']->value['pusher_message'];?>
</p>
                                                    <a href="#" 
   class="btn btn-info btn-sm view-post-btn" 
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


                                                    <a href="approve_request.php?post_id=<?php echo $_smarty_tpl->tpl_vars['_request']->value['post_id'];?>
" class="btn btn-success btn-sm"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Approve" ));?>
</a>

                                                    <a href="Reject_request.php?post_id=<?php echo $_smarty_tpl->tpl_vars['_request']->value['post_id'];?>
" class="btn btn-danger btn-sm"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Reject" ));?>
</a>
                                                    <a href="report_requests.php?post_id=<?php echo $_smarty_tpl->tpl_vars['_request']->value['post_id'];?>
" class="btn btn-warning btn-sm"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Report" ));?>
</a>
                                                </div>
                                            </div>
                                        </li>
                                        
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                            <?php } else { ?>
                                <!-- Message when there are no pushpin requests -->
                                <p class="text-center text-muted">
                                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "There is no pushpin request." ));?>
 
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
    function fetchPostDetails(postId,pusherName, pusherMessage, pusherIcon,pusherusername,userlink) {
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
                  console.log(data)
                  console.log('pusher name ',pusherName)
                  console.log('pusher name ',pusherIcon)
                document.getElementById('postContent').innerText = data.post.text;
                document.getElementById('postPusherName').innerText = pusherName;
                document.getElementById('postusername').innerText =`@`+ pusherusername;
                
                document.getElementById('postTime').innerText = `sent time :`+data.post.time;
                const userlinker = document.getElementById('userlink');
                userlinker.href = userlink;
                const iconImage = document.getElementById('pusherIcon');
                iconImage.src=pusherIcon
                 
                 
                // Check if there's an image to display
                const postImage = document.getElementById('postImage');
                if (data.post.source) {
                    postImage.src = `../../../../content/uploads/`+data.post.source;
                    
                    postImage.style.display = 'block';
                } else {
                    postImage.style.display = 'none'; // Hide image if not available
                }

                $('#postDetailModal').modal('show');
            } else {
                alert(data.message || 'Error fetching post details.');
            }
        })
        .catch(error => console.error('Error fetching data:', error));
}


    // Add event listeners to the View Post buttons
    
<?php echo '</script'; ?>
>
<!-- Post Details Modal -->
<div class="modal fade" id="postDetailModal" tabindex="-1" role="dialog" aria-labelledby="postDetailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            
            <!-- Modal Header -->
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="postDetailModalLabel">Post Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <div class="d-flex align-items-center mb-3">
                    <div class="mr-3">
                        <img src="" id="pusherIcon" alt="Pusher Icon" class="rounded-circle" style="width: 100px; height: 100px; pading-right:5px;">
                    </div>
                    <a  id="userlink" target="_blank">
                    <div>
                       <strong><p id="postPusherName" class="font-weight-bold mb-0"></p></strong> 
                        <small class="text-muted" id="postusername"></small>
                        </br>
                        
                        <small class="text-muted" id="postTime"></small>
                    </div>
                    </a>
                </div>

                <div class="post-content">
                    <p id="postContent" class="mb-3"></p>
                </div>

                <div class="post-image text-center mb-3">
                    <img id="postImage" style="display:none; max-width:100%; border-radius: 8px;" alt="Post Image">
                </div>
                
            </div>
            
            <!-- Modal Footer with Actions -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Approve</button>
                <button type="button" class="btn btn-danger">Decline</button>
                <button type="button" class="btn btn-warning">Report</button>
            </div>
        </div>
    </div>
</div>

<!-- jQuery and Bootstrap JS (necessary for Bootstrap’s JavaScript plugins) -->
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>



</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
