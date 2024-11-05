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
                    <li class="active"><a href="#">{__("Pushpin Settings")}</a></li>
                    <li><a href="wallet.php">{__("wallet balance")}</a></li>
                    <li><a href="sent_pushpins.php">{__("Push Pin Sent")}</a></li>
                </ul>
            </div>
            <!-- tabs -->

            <!-- content -->
            <div class="row">
                <!-- left panel -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-transparent">
                            <strong>{__("Pushpin Settings")}</strong>
                        </div>
                        <div class="card-body">
                            {if $success_message}
                                <div class="alert alert-success">{$success_message}</div>
                            {/if}
                            {if $error_message}
                                <div class="alert alert-danger">{$error_message}</div>
                            {/if}
                            <form action="" method="post">
                                <div class="form-group">
                                    <label class="form-label">{__("Max Pushpins Allowed")}</label>
                                    <input type="number" class="form-control" name="max_pushpins" value="{$settings.max_pushpins}" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">{__("Payment Type")}</label>
                                    <select class="form-control" name="payment_type" id="payment_type" required onchange="togglePushpinPrice(this.value)">
                                        <option value="fixed" {if $settings.payment_type == 'fixed'}selected{/if}>{__("Fixed")}</option>
                                        <option value="auction" {if $settings.payment_type == 'auction'}selected{/if}>{__("Auction")}</option>
                                    </select>
                                </div>
                                <div class="form-group" id="pushpin_price_container" style="{if $settings.payment_type == 'fixed'}display:block{else}display:none{/if}">
                                    <label class="form-label">{__("Push Pin Price")}</label>
                                    <input type="number" step="0.01" class="form-control" name="pushpin_price" value="{$settings.pushpin_price}" {if $settings.payment_type == 'auction'}disabled{/if} required>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary" name="submit">{__("Save Settings")}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- left panel -->
            </div>
            <!-- content -->

        </div>
        <!-- content panel -->

    </div>
</div>
<!-- page content -->

{include file='_footer.tpl'}

<script>
function togglePushpinPrice(paymentType) {
    const pushpinPriceContainer = document.getElementById('pushpin_price_container');
    const pushpinPriceInput = pushpinPriceContainer.querySelector('input[name="pushpin_price"]');
    
    if (paymentType === 'fixed') {
        pushpinPriceContainer.style.display = 'block';
        pushpinPriceInput.disabled = false;
    } else {
        pushpinPriceContainer.style.display = 'none';
        pushpinPriceInput.value = ''; // Clear value if auction
        pushpinPriceInput.disabled = true;
    }
}

// Initialize the display on page load based on the current payment type
document.addEventListener("DOMContentLoaded", function() {
    const paymentType = document.getElementById('payment_type').value;
    togglePushpinPrice(paymentType);
});
</script>
