{if $sub_view == "push_pin_settings"}
  <div class="card-header with-icon">
    {include file='__svg_icons.tpl' icon="push_pin" class="main-icon mr15" width="24px" height="24px"}{__("Push Pin Settings")}
  </div>
  <form class="js_ajax-forms" data-url="users/settings.php?edit=push_pin_settings">
    <div class="card-body">
      
      <div class="form-group">
        <label class="form-label">{__("Number of Free Pushes")}</label>
        <input type="number" class="form-control" name="free_pushes" value="{$user->_data['free_pushes']}" min="0">
      </div>
      
      <div class="form-group">
        <label class="form-label">{__("Price for Paid Push")}</label>
        <input type="number" class="form-control" name="push_price" value="{$user->_data['push_price']}" step="0.01" min="0">
        <div class="form-text">
          {__("Enter the price for each additional push after free pushes are used up. (in your currency)")}
        </div>
      </div>
      
      <!-- success -->
      <div class="alert alert-success mt15 mb0 x-hidden"></div>
      <!-- success -->

      <!-- error -->
      <div class="alert alert-danger mt15 mb0 x-hidden"></div>
      <!-- error -->
      
    </div>
    <div class="card-footer text-end">
      <button type="submit" class="btn btn-primary">{__("Save Push Pin Settings")}</button>
    </div>
  </form>
{/if}
