{include file='_head.tpl'}
{include file='_header.tpl'}

<!-- page content -->
<div class="{if $system['fluid_design']}container-fluid{else}container{/if} mt20 sg-offcanvas">
    <div class="row">

        <!-- left panel -->
        <div class="col-md-4 col-lg-3 sg-offcanvas-sidebar js_sticky-sidebar">
            {include file='_sidebar.tpl'}
        </div>
        <!-- left panel -->

        <!-- content panel -->
        <div class="col-md-8 col-lg-9 sg-offcanvas-mainbar">

            <!-- tabs -->
            <div class="content-tabs rounded-sm shadow-sm clearfix">
                <ul class="custom-tabs">
                    <li class="active"><a href="#">{__("Pushpin Requests")}</a></li>
                    <li><a href="Pushpin_Settings.php">{__("Pushpin Settings")}</a></li>
                    <li><a href="wallet.php">{__("wallet balance")}</a></li>
                    <li><a href="sent_pushpins.php">{__("Push Pin Sent")}</a></li>
                </ul>
            </div>
            <!-- tabs -->

            <!-- content -->
            <div class="row">
                <!-- left panel -->
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header bg-transparent">
                            <strong>{__("Pending Push Requests")}</strong>
                        </div>
                        <div class="card-body">
                            <!-- Check if there are pushpin requests -->
                            {if $push_requests|@count > 0}
                                <ul class="list-group">
                                    {foreach $push_requests as $_request}
                                    
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center">
                                            <a href="{$system['system_url']}/{$_request['pusher_username']}" >
                                                <img src="{$system['system_url']}{$_request.pusher_icon}" alt="{$_request.pusher_username}" class="rounded-circle" width="100" height="100">
                                                <div class="ms-3">
                                                    <strong>{$_request.pusher_name}</strong>
                                                    <p class="text-muted">@{$_request.pusher_username}</p>
                                                    </a>
                                                    <p class="mb-1">{$_request.pusher_message}</p>
                                                    <a href="#" 
   class="btn btn-info btn-sm view-post-btn" 
   onclick="fetchPostDetails('{$_request.post_id}', '{$_request.pusher_name}', '{$_request.pusher_message}', '{$system['system_url']}{$_request.pusher_icon}','{$_request['pusher_username']}','{$system['system_url']}/{$_request['pusher_username']}')">
   {__("View Post")}
</a>


                                                    <a href="approve_request.php?post_id={$_request.post_id}" class="btn btn-success btn-sm">{__("Approve")}</a>

                                                    <a href="Reject_request.php?post_id={$_request.post_id}" class="btn btn-danger btn-sm">{__("Reject")}</a>
                                                    <a href="report_requests.php?post_id={$_request.post_id}" class="btn btn-warning btn-sm">{__("Report")}</a>
                                                </div>
                                            </div>
                                        </li>
                                        
                                    {/foreach}
                                </ul>
                            {else}
                                <!-- Message when there are no pushpin requests -->
                                <p class="text-center text-muted">
                                    {__("There is no pushpin request.")} 
                                </p>
                            {/if}
                        </div>
                    </div>
                </div>
                <!-- left panel -->

                <!-- right panel -->
                <div class="col-lg-4">
                    <!-- search panel -->
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-search mr10"></i>{__("Search")}
                        </div>
                        <div class="card-body">
                            <form action="{$system['system_url']}/push-requests/find" method="post">
                                <div class="form-group">
                                    <label class="form-label">{__("Keyword")}</label>
                                    <input type="text" class="form-control" name="query">
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary" name="submit">{__("Search")}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- search panel -->

                    {include file='_ads_campaigns.tpl'}
                    {include file='_ads.tpl'}
                    {include file='_widget.tpl'}
                </div>
                <!-- right panel -->
            </div>
            <!-- content -->

        </div>
        <!-- content panel -->

    </div>
    <script>
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
    
</script>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>



</div>
<!-- page content -->

{include file='_footer.tpl'}
