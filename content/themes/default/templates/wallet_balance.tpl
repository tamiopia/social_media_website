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
                    <li><a href="pushpin_requests.php">{__("Pushpin Requests")}</a></li>
                    <li><a href="pushpin_settings.php">{__("Pushpin Settings")}</a></li>
                    <li class="active"><a href="#">{__("Wallet Balance")}</a></li>
                    <li><a href="pushpin_sent.php">{__("Push Pin Sent")}</a></li>
                </ul>
            </div>
            <!-- tabs -->

            <!-- Wallet Balance content -->
            <div class="card mt-4">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">{__("Wallet Balance")}</h5>
                </div>
                <div class="card-body">
                    <p>{__("Current Balance:")}</p>
                    <h3 class="font-weight-bold text-success">
                        {if isset($wallet_balance) && $wallet_balance > 0}
                            ${$wallet_balance}
                        {else}
                            {__("No balance available")}
                        {/if}
                    </h3>
                    <button class="btn btn-primary mt-3">{__("Add Funds")}</button>
                </div>
            </div>
            <!-- Wallet Balance content -->

        </div>
        <!-- content panel -->

    </div>
</div>
<!-- page content -->

{include file='_footer.tpl'}
