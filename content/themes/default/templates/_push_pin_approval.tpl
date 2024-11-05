{if $sub_view == "push_pin_approval"}
  <div class="card-header with-icon">
    {include file='__svg_icons.tpl' icon="push_pin" class="main-icon mr15" width="24px" height="24px"}{__("Push Pin Approval")}
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>{__("Post ID")}</th>
            <th>{__("User")}</th>
            <th>{__("Pinner Message")}</th>
            <th>{__("Status")}</th>
            <th>{__("Action")}</th>
          </tr>
        </thead>
        <tbody>
          {foreach from=$push_pin_requests item=request}
            <tr>
              <td>{$request.post_id}</td>
              <td>{$request.user_name}</td>
              <td>{$request.pinner_message}</td>
              <td>
                {if $request.is_pinner_approved}
                  <span class="badge badge-success">{__("Approved")}</span>
                {else}
                  <span class="badge badge-danger">{__("Pending")}</span>
                {/if}
              </td>
              <td>
                {if !$request.is_pinner_approved}
                  <button class="btn btn-success js_approve-push" data-id="{$request.post_id}">{__("Approve")}</button>
                  <button class="btn btn-danger js_reject-push" data-id="{$request.post_id}">{__("Reject")}</button>
                {/if}
              </td>
            </tr>
          {/foreach}
        </tbody>
      </table>
    </div>
  </div>
{/if}
