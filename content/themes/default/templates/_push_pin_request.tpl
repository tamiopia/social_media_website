{if $sub_view == "push_pin_request"}
  <div class="card-header with-icon">
    {include file='__svg_icons.tpl' icon="push_pin" class="main-icon mr15" width="24px" height="24px"}{__("Push Pin Requests")}
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>{__("Request ID")}</th>
            <th>{__("Post ID")}</th>
            <th>{__("User")}</th>
            <th>{__("Pinner Message")}</th>
            <th>{__("Status")}</th>
            <th>{__("Request Date")}</th>
          </tr>
        </thead>
        <tbody>
          {foreach from=$push_pin_requests item=request}
            <tr>
              <td>{$request.request_id}</td>
              <td>{$request.post_id}</td>
              <td>{$request.user_name}</td>
              <td>{$request.pinner_message}</td>
              <td>
                {if $request.is_pinner_approved}
                  <span class="badge badge-success">{__("Approved")}</span>
                {else}
                  <span class="badge badge-warning">{__("Pending")}</span>
                {/if}
              </td>
              <td>{$request.request_date|date_format:"%Y-%m-%d %H:%M"}</td>
            </tr>
          {/foreach}
        </tbody>
      </table>
    </div>
  </div>
{/if}
