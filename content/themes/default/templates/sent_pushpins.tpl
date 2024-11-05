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
                    <li><a href="wallet.php">{__("Wallet Balance")}</a></li>
                    <li><a href="#">{__("Push Pin Sent")}</a></li>
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
                            <strong>{__("Approved Push Requests")}</strong>
                        </div>
                        <div class="card-body">
                            {if $approved_requests|@count > 0}
                                <ul class="list-group">
                                    {foreach $approved_requests as $_request}
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center">
                                                <div class="ms-3">
                                                    <strong>{$_request.pusher_name}</strong>
                                                    <p class="text-muted">@{$_request.pusher_username}</p>
                                                    <p class="mb-1">{$_request.pusher_message}</p>
                                                    <a href="#" class="btn btn-info btn-sm view-post-btn" 
                                                       onclick="fetchPostDetails('{$_request.post_id}', '{$_request.pusher_name}', '{$_request.pusher_message}', '{$system['system_url']}{$_request.pusher_icon}','{$_request['pusher_username']}','{$system['system_url']}/{$_request['pusher_username']}')">
                                                       {__("View Post")}
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    {/foreach}
                                </ul>
                            {else}
                                <p class="text-center text-muted">{__("No approved pushpin requests found.")}</p>
                            {/if}
                        </div>
                    </div>

                    <!-- Reported Requests -->
                    <div class="card mt-4">
                        <div class="card-header bg-warning text-dark">
                            <strong>{__("Reported Push Requests")}</strong>
                        </div>
                        <div class="card-body">
                            {if $reported_requests|@count > 0}
                                <ul class="list-group">
                                    {foreach $reported_requests as $_request}
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center">
                                                <div class="ms-3">
                                                    <strong>{$_request.pusher_name}</strong>
                                                    <p class="text-muted">@{$_request.pusher_username}</p>
                                                    <p class="mb-1">{$_request.pusher_message}</p>
                                                    <a href="#" class="btn btn-info btn-sm view-post-btn" 
                                                       onclick="fetchPostDetails('{$_request.post_id}', '{$_request.pusher_name}', '{$_request.pusher_message}', '{$system['system_url']}{$_request.pusher_icon}','{$_request['pusher_username']}','{$system['system_url']}/{$_request['pusher_username']}')">
                                                       {__("View Post")}
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    {/foreach}
                                </ul>
                            {else}
                                <p class="text-center text-muted">{__("No reported pushpin requests found.")}</p>
                            {/if}
                        </div>
                    </div>

                    <!-- Rejected Requests -->
                    <div class="card mt-4">
                        <div class="card-header bg-danger text-white">
                            <strong>{__("Rejected Pushpin Requests")}</strong>
                        </div>
                        <div class="card-body">
                            {if $rejected_requests|@count > 0}
                                <ul class="list-group">
                                    {foreach $rejected_requests as $_request}
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center">
                                                <div class="ms-3">
                                                    <strong>{$_request.pusher_name}</strong>
                                                    <p class="text-muted">@{$_request.pusher_username}</p>
                                                    <p class="mb-1">{$_request.pusher_message}</p>
                                                    <a href="#" class="btn btn-info btn-sm view-post-btn" 
                                                       onclick="fetchPostDetails('{$_request.post_id}', '{$_request.pusher_name}', '{$_request.pusher_message}', '{$system['system_url']}{$_request.pusher_icon}','{$_request['pusher_username']}','{$system['system_url']}/{$_request['pusher_username']}')">
                                                       {__("View Post")}
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    {/foreach}
                                </ul>
                            {else}
                                <p class="text-center text-muted">{__("No rejected pushpin requests found.")}</p>
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
    </script>
</div>
