<?php
/* Smarty version 4.5.1, created on 2024-11-02 12:05:37
  from 'C:\laragon\www\Script\content\themes\default\templates\pushpin_settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_67261591411aa2_39910057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38988ac49530b2541853d3a7f4b0fdf266946c5c' => 
    array (
      0 => 'C:\\laragon\\www\\Script\\content\\themes\\default\\templates\\pushpin_settings.tpl',
      1 => 1730549134,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_67261591411aa2_39910057 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <li><a href="pushpin_requests.php"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Pushpin Requests" ));?>
</a></li>
                    <li class="active"><a href="#"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Pushpin Settings" ));?>
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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-transparent">
                            <strong><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Pushpin Settings" ));?>
</strong>
                        </div>
                        <div class="card-body">
                            <?php if ($_smarty_tpl->tpl_vars['success_message']->value) {?>
                                <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['success_message']->value;?>
</div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['error_message']->value) {?>
                                <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
</div>
                            <?php }?>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label class="form-label"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Max Pushpins Allowed" ));?>
</label>
                                    <input type="number" class="form-control" name="max_pushpins" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['max_pushpins'];?>
" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Payment Type" ));?>
</label>
                                    <select class="form-control" name="payment_type" id="payment_type" required onchange="togglePushpinPrice(this.value)">
                                        <option value="fixed" <?php if ($_smarty_tpl->tpl_vars['settings']->value['payment_type'] == 'fixed') {?>selected<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Fixed" ));?>
</option>
                                        <option value="auction" <?php if ($_smarty_tpl->tpl_vars['settings']->value['payment_type'] == 'auction') {?>selected<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Auction" ));?>
</option>
                                    </select>
                                </div>
                                <div class="form-group" id="pushpin_price_container" style="<?php if ($_smarty_tpl->tpl_vars['settings']->value['payment_type'] == 'fixed') {?>display:block<?php } else { ?>display:none<?php }?>">
                                    <label class="form-label"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Push Pin Price" ));?>
</label>
                                    <input type="number" step="0.01" class="form-control" name="pushpin_price" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['pushpin_price'];?>
" <?php if ($_smarty_tpl->tpl_vars['settings']->value['payment_type'] == 'auction') {?>disabled<?php }?> required>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary" name="submit"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Save Settings" ));?>
</button>
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

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
>
<?php }
}
