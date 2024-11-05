<?php
/* Smarty version 4.5.1, created on 2024-10-31 09:08:53
  from 'C:\laragon\www\Script\content\themes\default\templates\wallet_balance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_67234925631f03_70696978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8dcca55a9eaa3a98409062644a8b4f63468a8b51' => 
    array (
      0 => 'C:\\laragon\\www\\Script\\content\\themes\\default\\templates\\wallet_balance.tpl',
      1 => 1730365462,
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
function content_67234925631f03_70696978 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <li><a href="pushpin_settings.php"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Pushpin Settings" ));?>
</a></li>
                    <li class="active"><a href="#"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Wallet Balance" ));?>
</a></li>
                    <li><a href="pushpin_sent.php"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Push Pin Sent" ));?>
</a></li>
                </ul>
            </div>
            <!-- tabs -->

            <!-- Wallet Balance content -->
            <div class="card mt-4">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Wallet Balance" ));?>
</h5>
                </div>
                <div class="card-body">
                    <p><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Current Balance:" ));?>
</p>
                    <h3 class="font-weight-bold text-success">
                        <?php if ((isset($_smarty_tpl->tpl_vars['wallet_balance']->value)) && $_smarty_tpl->tpl_vars['wallet_balance']->value > 0) {?>
                            $<?php echo $_smarty_tpl->tpl_vars['wallet_balance']->value;?>

                        <?php } else { ?>
                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "No balance available" ));?>

                        <?php }?>
                    </h3>
                    <button class="btn btn-primary mt-3"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Add Funds" ));?>
</button>
                </div>
            </div>
            <!-- Wallet Balance content -->

        </div>
        <!-- content panel -->

    </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
