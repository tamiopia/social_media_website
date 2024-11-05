{if $user->_data['can_publish_posts']}
  {if $system['verification_for_posts'] && !$user->_data['user_verified']}
    <div class="alert alert-danger">
      <div class="icon">
        <i class="fa fa-exclamation-circle fa-2x"></i>
      </div>
      <div class="text">
        <strong>{__("Account Verification Required")}</strong><br>
        {__("To publish posts your account must be verified")} <a href="{$system['system_url']}/settings/verification">{__("Verify Now")}</a>
      </div>
    </div>
  {else}
    <div class="publisher-overlay"></div>

    <div class="x-form publisher" data-handle="{$_handle}" {if $_id}data-id="{$_id}" {/if}>

      <!-- publisher loader -->
      <div class="publisher-loader">
        <div class="loader loader_small"></div>
      </div>
      <!-- publisher loader -->

      <!-- publisher-message -->
      <div class="publisher-message">
        {if $_handle == "page" || $_post_as_page}
          <img class="publisher-avatar" src="{$_avatar}">
        {else}
          <img class="publisher-avatar" src="{$user->_data['user_picture']}">
        {/if}
        <div class="colored-text-wrapper">
          <textarea dir="auto" class="js_autosize js_mention js_publisher-scraper" data-init-placeholder='{__("What is on your mind? #Hashtag.. @Mention.. Link..")}' placeholder='{__("What is on your mind? #Hashtag.. @Mention.. Link..")}'>{if $page == "share" && $url}{$url}{/if}</textarea>
        </div>
        <div class="publisher-emojis">
          <div class="position-relative">
            <i class="far fa-smile-wink fa-lg js_emoji-menu-toggle"></i>
          </div>
        </div>
      </div>
      <!-- publisher-message -->

      <!-- publisher-slider -->
      <div class="publisher-slider">

        <!-- publisher scraper -->
        <div class="publisher-scraper"></div>
        <!-- publisher scraper -->

        <!-- post attachments (photos) -->
        <div class="publisher-attachments attachments clearfix x-hidden js_attachments-photos"></div>
        <!-- post attachments -->

        <!-- post attachments (videos) -->
        <div class="publisher-attachments attachments clearfix x-hidden js_attachments-video"></div>
        <!-- post attachments -->

        <!-- post attachments (audios) -->
        <div class="publisher-attachments attachments clearfix x-hidden js_attachments-audio"></div>
        <!-- post attachments -->

        <!-- post attachments (files) -->
        <div class="publisher-attachments attachments clearfix x-hidden js_attachments-file"></div>
        <!-- post attachments -->

        <!-- post album -->
        <div class="publisher-meta" data-meta="album">
          {include file='__svg_icons.tpl' icon="photos" class="main-icon" width="16px" height="16px"}
          <input type="text" placeholder='{__("Album title")}'>
        </div>
        <!-- post album -->

        <!-- post feelings -->
        <div class="publisher-meta" data-meta="feelings">
          <div id="feelings-menu-toggle" data-init-text='{__("What are you doing?")}'>{__("What are you doing?")}</div>
          <div id="feelings-data" style="display: none">
            <input type="text" class="no-icon" placeholder='{__("What are you doing?")}'>
            <span></span>
          </div>
          <div id="feelings-menu" class="dropdown-menu dropdown-widget">
            <div class="dropdown-widget-body ptb5">
              <div class="js_scroller">
                <ul class="feelings-list">
                  {foreach $feelings as $feeling}
                    <li class="feeling-item js_feelings-add" data-action="{$feeling['action']}" data-placeholder="{__($feeling['placeholder'])}">
                      <div class="icon">
                        <i class="twa twa-3x twa-{$feeling['icon']}"></i>
                      </div>
                      <div class="data">
                        {__($feeling['text'])}
                      </div>
                    </li>
                  {/foreach}
                </ul>
              </div>
            </div>
          </div>
          <div id="feelings-types" class="dropdown-menu dropdown-widget">
            <div class="dropdown-widget-body ptb5">
              <div class="js_scroller">
                <ul class="feelings-list">
                  {foreach $feelings_types as $type}
                    <li class="feeling-item js_feelings-type" data-type="{$type['action']}" data-icon="{$type['icon']}">
                      <div class="icon">
                        <i class="twa twa-3x twa-{$type['icon']}"></i>
                      </div>
                      <div class="data">
                        {__($type['text'])}
                      </div>
                    </li>
                  {/foreach}
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- post feelings -->

        <!-- post location -->
        <div class="publisher-meta" data-meta="location">
          {include file='__svg_icons.tpl' icon="map" class="main-icon" width="16px" height="16px"}
          <input class="js_geocomplete" type="text" placeholder='{__("Where are you?")}'>
        </div>
        <!-- post location -->

        <!-- post colored -->
        <div class="publisher-meta" data-meta="colored">
          {foreach $colored_patterns as $pattern}
            <div class="colored-pattern-item js_publisher-pattern" data-id="{$pattern['pattern_id']}" data-type="{$pattern['type']}" data-background-image="{$pattern['background_image']}" data-background-color-1="{$pattern['background_color_1']}" data-background-color-2="{$pattern['background_color_2']}" data-text-color="{$pattern['text_color']}" {if $pattern['type'] == "color"} style="background-image: linear-gradient(45deg, {$pattern['background_color_1']}, {$pattern['background_color_2']});" {else} style="background-image: url({$system['system_uploads']}/{$pattern['background_image']})" {/if}>
            </div>
          {/foreach}
        </div>
        <!-- post colored -->

        <!-- post voice notes -->
        <div class="publisher-meta" data-meta="voice_notes">
          <div class="voice-recording-wrapper" data-handle="publisher">
            <!-- processing message -->
            <div class="x-hidden js_voice-processing-message">
              {include file='__svg_icons.tpl' icon="upload" class="main-icon static mr5" width="16px" height="16px"}
              {__("Processing")}<span class="loading-dots"></span>
            </div>
            <!-- processing message -->

            <!-- success message -->
            <div class="x-hidden js_voice-success-message">
              {include file='__svg_icons.tpl' icon="checkmark" class="main-icon static mr5" width="16px" height="16px"}
              {__("Voice note recorded successfully")}
              <div class="float-end">
                <button type="button" class="btn-close js_voice-remove"></button>
              </div>
            </div>
            <!-- success message -->

            <!-- start recording -->
            <div class="btn-voice-start js_voice-start">
              <i class="fas fa-microphone mr5"></i>{__("Record")}
            </div>
            <!-- start recording -->

            <!-- stop recording -->
            <div class="btn-voice-stop js_voice-stop" style="display: none">
              <i class="far fa-stop-circle mr5"></i>{__("Recording")} <span class="js_voice-timer">00:00</span>
            </div>
            <!-- stop recording -->
          </div>
        </div>
        <!-- post voice notes -->

        <!-- post gif -->
        <div class="publisher-meta" data-meta="gif">
          {include file='__svg_icons.tpl' icon="gif" class="main-icon" width="16px" height="16px"}
          <input class="js_publisher-gif-search" type="text" placeholder='{__("Search GIFs")}'>
        </div>
        <!-- post gif -->

        <!-- post poll -->
        <div class="publisher-meta" data-meta="poll">
          {include file='__svg_icons.tpl' icon="plus" class="main-icon" width="16px" height="16px"}
          <input type="text" placeholder='{__("Add an option")}...'>
        </div>
        <div class="publisher-meta" data-meta="poll">
          {include file='__svg_icons.tpl' icon="plus" class="main-icon" width="16px" height="16px"}
          <input type="text" placeholder='{__("Add an option")}...'>
        </div>
        <!-- post poll -->

        <!-- post video -->
        <div class="publisher-meta" data-meta="video">
          {include file='__svg_icons.tpl' icon="checkmark" class="main-icon static mr5" width="16px" height="16px"}
          {__("Video uploaded successfully")}
          <div class="float-end">
            <button type="button" class="btn-close js_publisher-attachment-file-remover" data-type="video"></button>
          </div>
        </div>
        <div class="publisher-meta" data-meta="video">
          <select class="form-select" name="video_category" id="video_category">
            {foreach $videos_categories as $category}
              {include file='__categories.recursive_options.tpl'}
            {/foreach}
          </select>
        </div>
        <div class="publisher-custom-thumbnail">
          {__("Custom Video Thumbnail")}
          <div class="x-image">
            <button type="button" class="btn-close x-hidden js_x-image-remover" title='{__("Remove")}'></button>
            <div class="x-image-loader">
              <div class="progress x-progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
            <input type="hidden" class="js_x-image-input" name="video_thumbnail" value="">
          </div>
        </div>
        <!-- post video -->

        <!-- post audio -->
        <div class="publisher-meta" data-meta="audio">
          {include file='__svg_icons.tpl' icon="checkmark" class="main-icon static mr5" width="16px" height="16px"}
          {__("Audio uploaded successfully")}
          <div class="float-end">
            <button type="button" class="btn-close js_publisher-attachment-file-remover" data-type="audio"></button>
          </div>
        </div>
        <!-- post audio -->

        <!-- post file -->
        <div class="publisher-meta" data-meta="file">
          {include file='__svg_icons.tpl' icon="checkmark" class="main-icon static mr5" width="16px" height="16px"}
          {__("File uploaded successfully")}
          <div class="float-end">
            <button type="button" class="btn-close js_publisher-attachment-file-remover" data-type="file"></button>
          </div>
        </div>
        <!-- post file -->

        <!-- publisher-tools-tabs -->
        <div class="publisher-tools-tabs">
          <ul class="row">
            {if $user->_data['can_go_live']}
              <li class="col-md-6">
                <a class="publisher-tools-tab link js_publisher-tab" data-tab="live" href="{$system['system_url']}/live{if $_handle == "page"}?page_id={$_id}{/if}{if $_handle == "group"}?group_id={$_id}{/if}{if $_handle == "event"}?event_id={$_id}{/if}">
                  {include file='__svg_icons.tpl' icon="live" class="main-icon mr5" width="24px" height="24px"}
                  {__("Go Live")}
                  <div class="spinner-grow text-danger ml5" style="width: 10px; height: 10px;">
                  </div>
                </a>
              </li>
            {/if}
            {if $system['photos_enabled']}
              <li class="col-md-6">
                <div class="publisher-tools-tab attach js_publisher-tab" data-tab="photos">
                  <span class="js_x-uploader" data-handle="publisher" data-multiple="true">
                    {include file='__svg_icons.tpl' icon="camera" class="main-icon mr5" width="24px" height="24px"}
                  </span>
                  {__("Upload Photos")}
                </div>
              </li>
              <li class="col-md-6">
                <div class="publisher-tools-tab js_publisher-tab" data-tab="album">
                  {include file='__svg_icons.tpl' icon="photos" class="main-icon mr5" width="24px" height="24px"}
                  {__("Create Album")}
                </div>
              </li>
            {/if}
            {if $user->_data['can_add_activity_posts']}
              <li class="col-md-6">
                <div class="publisher-tools-tab js_publisher-feelings">
                  {include file='__svg_icons.tpl' icon="smile" class="main-icon mr5" width="24px" height="24px"}
                  {__("Feelings/Activity")}
                </div>
              </li>
            {/if}
            {if $user->_data['can_add_geolocation_posts']}
              <li class="col-md-6">
                <div class="publisher-tools-tab js_publisher-tab" data-tab="location">
                  {include file='__svg_icons.tpl' icon="map" class="main-icon mr5" width="24px" height="24px"}
                  {__("Check In")}
                </div>
              </li>
            {/if}
            {if $user->_data['can_add_colored_posts']}
              <li class="col-md-6">
                <div class="publisher-tools-tab js_publisher-tab" data-tab="colored">
                  {include file='__svg_icons.tpl' icon="posts_colored" class="main-icon mr5" width="24px" height="24px"}
                  {__("Colored Posts")}
                </div>
              </li>
            {/if}
            {if $system['voice_notes_posts_enabled']}
              <li class="col-md-6">
                <div class="publisher-tools-tab js_publisher-tab" data-tab="voice_notes">
                  {include file='__svg_icons.tpl' icon="voice_notes" class="main-icon mr5" width="24px" height="24px"}
                  {__("Voice Notes")}
                </div>
              </li>
            {/if}
            {if $user->_data['can_add_gif_posts']}
              <li class="col-md-6">
                <div class="publisher-tools-tab js_publisher-tab" data-tab="gif">
                  {include file='__svg_icons.tpl' icon="gif" class="main-icon mr5" width="24px" height="24px"}
                  {__("GIF")}
                </div>
              </li>
            {/if}
            {if $user->_data['can_write_articles'] && in_array($_handle, ['me', 'page', 'group','event'])}
              <li class="col-md-6">
                <a class="publisher-tools-tab link js_publisher-tab" data-tab="article" href='{$system['system_url']}/blogs/new{if $_handle == "page"}?page={$_id}{/if}{if $_handle == "group"}?group={$_id}{/if}{if $_handle == "event"}?event={$_id}{/if}'>
                  {include file='__svg_icons.tpl' icon="articles" class="main-icon mr5" width="24px" height="24px"}
                  {__("Write Article")}
                </a>
              </li>
            {/if}
            {if $user->_data['can_sell_products'] && $_handle == "me"}
              <li class="col-md-6">
                <div class="publisher-tools-tab link js_publisher-tab" data-tab="product" data-toggle="modal" data-url="posts/product.php?do=create">
                  {include file='__svg_icons.tpl' icon="products" class="main-icon mr5" width="24px" height="24px"}
                  {__("Sell Something")}
                </div>
              </li>
            {/if}
            {if $user->_data['can_raise_funding'] && $_handle == "me"}
              <li class="col-md-6">
                <div class="publisher-tools-tab link js_publisher-tab" data-tab="funding" data-toggle="modal" data-url="posts/funding.php?do=create">
                  {include file='__svg_icons.tpl' icon="funding" class="main-icon mr5" width="24px" height="24px"}
                  {__("Raise Funding")}
                </div>
              </li>
            {/if}
            {if $user->_data['can_create_offers'] && in_array($_handle, ['me', 'page', 'group','event'])}
              <li class="col-md-6">
                <div class="publisher-tools-tab link js_publisher-tab" data-tab="offer" data-toggle="modal" data-url="posts/offer.php?do=create{if $_handle == "page"}&page={$_id}{/if}{if $_handle == "group"}&group={$_id}{/if}{if $_handle == "event"}&event={$_id}{/if}">
                  {include file='__svg_icons.tpl' icon="offers" class="main-icon mr5" width="24px" height="24px"}
                  {__("Create Offer")}
                </div>
              </li>
            {/if}
            {if $user->_data['can_create_jobs'] && in_array($_handle, ['me', 'page', 'group','event'])}
              <li class="col-md-6">
                <div class="publisher-tools-tab link js_publisher-tab" data-tab="job" data-toggle="modal" data-url="posts/job.php?do=create{if $_handle == "page"}&page={$_id}{/if}{if $_handle == "group"}&group={$_id}{/if}{if $_handle == "event"}&event={$_id}{/if}">
                  {include file='__svg_icons.tpl' icon="jobs" class="main-icon mr5" width="24px" height="24px"}
                  {__("Create Job")}
                </div>
              </li>
            {/if}
            {if $user->_data['can_add_polls_posts']}
              <li class="col-md-6">
                <div class="publisher-tools-tab js_publisher-tab" data-tab="poll">
                  {include file='__svg_icons.tpl' icon="polls" class="main-icon mr5" width="24px" height="24px"}
                  {__("Create Poll")}
                </div>
              </li>
            {/if}
            {if $user->_data['can_upload_videos']}
              <li class="col-md-6">
                <div class="publisher-tools-tab attach js_publisher-tab" data-tab="video">
                  <span class="js_x-uploader" data-handle="publisher" data-type="video">
                    {include file='__svg_icons.tpl' icon="videos" class="main-icon mr5" width="24px" height="24px"}
                  </span>
                  {__("Upload Video")}
                </div>
              </li>
            {/if}
            {if $user->_data['can_upload_audios']}
              <li class="col-md-6">
                <div class="publisher-tools-tab attach js_publisher-tab" data-tab="audio">
                  <span class="js_x-uploader" data-handle="publisher" data-type="audio">
                    {include file='__svg_icons.tpl' icon="audios" class="main-icon mr5" width="24px" height="24px"}
                  </span>
                  {__("Upload Audio")}
                </div>
              </li>
            {/if}
            {if $user->_data['can_upload_files']}
              <li class="col-md-6">
                <div class="publisher-tools-tab attach js_publisher-tab" data-tab="file">
                  <span class="js_x-uploader" data-handle="publisher" data-type="file">
                    {include file='__svg_icons.tpl' icon="files" class="main-icon mr5" width="24px" height="24px"}
                  </span>
                  {__("Upload File")}
                </div>
              </li>
            {/if}
          </ul>
        </div>
        <!-- publisher-tools-tabs -->

        <!-- publisher-footer -->
        <div class="publisher-footer">
          {if $system['adult_mode'] || ($_handle == "me" && $user->_data['can_add_anonymous_posts']) || ($_handle != "page" && $user->_data['can_receive_tip']) || (in_array($_handle, ['me', 'page', 'group']) && $_node_can_monetize_content && $_node_monetization_enabled && $_node_monetization_plans > 0) || (in_array($_handle, ['me', 'page', 'group','event']) && $user->_data['can_monetize_content'] && $user->_data['user_monetization_enabled']) }
            <!-- publisher-options -->
            <div class="publisher-footer-options">

              <!-- anonymous post -->
              {if $_handle == "me" && $user->_data['can_add_anonymous_posts']}
                <div class="form-table-row mb10">
                  <div class="avatar">
                    {include file='__svg_icons.tpl' icon="spy" class="main-icon" width="24px" height="24px"}
                  </div>
                  <div>
                    <div class="form-label mb0">{__("Anonymous Post")}</div>
                    <div class="form-text d-none d-sm-block mt0">{__("Share your post as anonymous post")}</div>
                  </div>
                  <div class="text-end">
                    <label class="switch" for="is_anonymous">
                      <input type="checkbox" name="is_anonymous" id="is_anonymous" class="js_publisher-anonymous-toggle">
                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>
              {/if}
              <!-- anonymous post -->

              <!-- adult content -->
              {if $system['adult_mode']}
                <div class="form-table-row mb10">
                  <div class="avatar">
                    {include file='__svg_icons.tpl' icon="adult" class="main-icon" width="24px" height="24px"}
                  </div>
                  <div>
                    <div class="form-label mb0">{__("Adult Content")}</div>
                    <div class="form-text d-none d-sm-block mt0">{__("Share your post as adult content")}</div>
                  </div>
                  <div class="text-end">
                    <label class="switch" for="for_adult">
                      <input type="checkbox" name="for_adult" id="for_adult" class="js_publisher-adult-toggle">
                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>
              {/if}
              <!-- adult content -->

              <!-- enable tips -->
              {if $_handle != "page" && $user->_data['can_receive_tip']}
                <div class="form-table-row mb10">
                  <div class="avatar">
                    {include file='__svg_icons.tpl' icon="tips" class="main-icon" width="24px" height="24px"}
                  </div>
                  <div>
                    <div class="form-label mb0">{__("Enable Tips")}</div>
                    <div class="form-text d-none d-sm-block mt0">{__("Allow people to send you tips")}</div>
                  </div>
                  <div class="text-end">
                    <label class="switch" for="tips_enabled">
                      <input type="checkbox" name="tips_enabled" id="tips_enabled" class="js_publisher-tips-toggle">
                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>
              {/if}
              <!-- enable tips -->

              <!-- only for subscribers -->
              {if in_array($_handle, ['me', 'page', 'group']) && $_node_can_monetize_content && $_node_monetization_enabled && $_node_monetization_plans > 0 }
                <div class="form-table-row mb10" id="subscribers-toggle-wrapper">
                  <div class="avatar">
                    {include file='__svg_icons.tpl' icon="groups" class="main-icon" width="24px" height="24px"}
                  </div>
                  <div>
                    <div class="form-label mb0">{__("Subscribers Only")}</div>
                    <div class="form-text d-none d-sm-block mt0">{__("Share this post to")} {if $_handle != "me"}{__($_handle)} {/if}{__("subscribers only")}</div>
                  </div>
                  <div class="text-end">
                    <label class="switch" for="subscribers_only">
                      <input type="checkbox" name="subscribers_only" id="subscribers_only" class="js_publisher-subscribers-toggle">
                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>
              {/if}
              <!-- only for subscribers -->

              <!-- paid post -->
              {if in_array($_handle, ['me', 'page', 'group','event']) && $user->_data['can_monetize_content'] && $user->_data['user_monetization_enabled']}
                <div class="form-table-row mb10" id="paid-toggle-wrapper">
                  <div class="avatar">
                    {include file='__svg_icons.tpl' icon="monetization" class="main-icon" width="24px" height="24px"}
                  </div>
                  <div>
                    <div class="form-label mb0">{__("Paid Post")}</div>
                    <div class="form-text d-none d-sm-block mt0">{__("Set a price to your post")}</div>
                  </div>
                  <div class="text-end">
                    <label class="switch" for="paid_post">
                      <input type="checkbox" name="paid_post" id="paid_post" class="js_publisher-paid-toggle">
                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>
                <div class="form-group x-hidden" id="paid-price-wrapper">
                  <input type="text" class="form-control" name="paid_post_price" placeholder="{__("Price")} ({$system['system_currency']})">
                </div>
                <div class="form-group x-hidden" id="paid-text-wrapper">
                  <textarea class="form-control" name="paid_post_text" rows="3" placeholder="{__("Paid Post Description")}"></textarea>
                </div>
              {/if}
              <!-- paid post -->
                  {if $user->_data['can_create_jobs'] && in_array($_handle, ['me', 'page', 'group', 'event'])}
  <li class="col-md-6">
    <div class="publisher-tools-tab link js_publisher-tab" data-tab="job" data-toggle="modal" data-url="posts/job.php?do=create{if $_handle == "page"}&page={$_id}{/if}{if $_handle == "group"}&group={$_id}{/if}{if $_handle == "event"}&event={$_id}{/if}">
      {include file='__svg_icons.tpl' icon="jobs" class="main-icon mr5" width="24px" height="24px"}
      {__("Create Job")}
    </div>
  </li>
{/if}

<!-- Add Push Pin Option -->
<div class="form-table-row mb10">
    <div class="avatar">
        {include file='__svg_icons.tpl' icon="pushpin" class="main-icon" width="24px" height="24px"}
    </div>
    <div>
        <div class="form-label mb0">{__("Add Push Pin")}</div>
        <div class="form-text d-none d-sm-block mt0">{__("Share this post as a push pin")}</div>
    </div>
    <div class="text-end">
        <label class="switch" for="push_pin">
            <input type="radio" name="push_pin" id="push_pin" class="js_push_pin_toggle" value="1" onclick="togglePushPinSection(this.checked)">
            <span class="slider round"></span>
        </label>
    </div>
</div>

<div class="push-pin-section x-hidden">
    <div class="form-group">
        <textarea class="form-control" name="push_pin_message" rows="3" placeholder="{__("Enter your message for the push pin")}"></textarea>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="search_user" id="search_user" placeholder="{__("Search for users...")}">
       <div id="search_results"></div>
<div id="pagination_controls">
    <button id="prev_page" onclick="changePage(-1)">Previous</button>
    <span id="current_page">1</span>
    <button id="next_page" onclick="changePage(1)">Next</button>
</div>
    </div>
</div>


<!-- publisher-footer -->
<div class="publisher-footer">
  {if $system['adult_mode'] || ($_handle == "me" && $user->_data['can_add_anonymous_posts']) || ($_handle != "page" && $user->_data['can_receive_tip']) || (in_array($_handle, ['me', 'page', 'group']) && $_node_can_monetize_content && $_node_monetization_enabled && $_node_monetization_plans > 0) || (in_array($_handle, ['me', 'page', 'group', 'event']) && $user->_data['can_monetize_content'] && $user->_data['user_monetization_enabled'])}
    <!-- publisher-options -->
    <div class="publisher-footer-options">
      <!-- Your existing options here -->
    </div>
  {/if}
  <!-- publisher-options -->
  
  
</div>
<!-- publisher-footer -->

<script>
  function togglePushPinSection(isChecked) {
    const pushPinSection = document.querySelector('.push-pin-section');
    const searchResultsDiv = document.getElementById('search_results');

    if (isChecked) {
        pushPinSection.classList.remove('x-hidden');
        
        // Fetch data from the server when the section is shown
        console.log('i am feaching data')
        fetchFollowingsData();
    } else {
        pushPinSection.classList.add('x-hidden');
        searchResultsDiv.innerHTML = ''; // Clear results when hidden
    }
}

function fetchFollowingsData() {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'user_lister.php', true); // Make sure to replace with the correct endpoint
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                try {
                    const response = JSON.parse(xhr.responseText);
                    console.log(response)
                    displayResults(response);
                } catch (e) {
                    console.error('Parsing error:', e);
                }
            } else {
                console.error('Error fetching data:', xhr.statusText);
            }
        }
    };
    xhr.send();
}




function displayResults(response) {
    const searchResultsDiv = document.getElementById('search_results');
    searchResultsDiv.innerHTML = ''; // Clear previous results

    // Check if response contains data and if data is an array
    if (!response || !response.followings || !Array.isArray(response.followings)) {
        searchResultsDiv.innerHTML = '<div class="no-results">No users found</div>';
        return;
    }
    
    // Create table-like container
    const table = document.createElement('div');
    table.className = 'results-table';

    // Create header row
    const headerRow = document.createElement('div');
    headerRow.className = 'result-row header-row'; // Adding a class for styling
    const headers = [' ', 'Name', '', 'Type', 'Price', 'Available pushpins'];

    headers.forEach(headerText => {
        const headerCell = document.createElement('div');
        headerCell.className = 'result-cell header-cell'; // Adding a class for styling
        headerCell.textContent = headerText; // Set the text content to header
        headerRow.appendChild(headerCell); // Append header cell to header row
    });

    table.appendChild(headerRow);

    // Loop through the users in the response and display each one
    response.followings.forEach(user => {
        const row = document.createElement('div');
        row.className = 'result-row';

        // Profile photo cell with a fallback to a default image
        const photoCell = document.createElement('div');
        photoCell.className = 'result-cell photo-cell';
        const profilePhoto = document.createElement('img');
        profilePhoto.className = 'profile-photo';
        profilePhoto.src = user.user_picture ? `{$system['system_url']}` + user.profile_photo : user.profile_photo;

        photoCell.appendChild(profilePhoto);

        // Name cell
        const nameCell = document.createElement('div');
        nameCell.className = 'result-cell';
        nameCell.textContent = user.user_firstname + ' ' + user.user_lastname;

        // Username cell
        const userNameCell = document.createElement('div');
        userNameCell.className = 'result-cell';
        userNameCell.textContent = "@" + user.user_name;

        // Type cell
        const typeCell = document.createElement('div');
        typeCell.className = 'result-cell';
        typeCell.textContent = user.free_pushes > 0 ? "Free" : "Paid"; // Set type based on free_pushes

        // Pricing cell
        const pricingCell = document.createElement('div');
        pricingCell.className = 'result-cell';
        pricingCell.textContent = user.free_pushes > 0 ? '' : (user.payment_type === 'auction' ? "Auction" : (user.push_price === "0.00" ? "Free" : user.push_price));

        // Availability Cell
        const availabilityCell = document.createElement('div');
        availabilityCell.className = 'result-cell availability-cell';
        const availabilityIndicator = document.createElement('span');
        availabilityIndicator.className = 'availability-indicator'; // Class for the circle

        // Logic to determine availability and display message
        if (user.free_pushes > 0) {
            availabilityIndicator.style.backgroundColor = 'white'; // White for available
            availabilityIndicator.textContent = user.free_pushes; // Show the number of free push pins
        } else {
            availabilityIndicator.style.backgroundColor = 'white'; // Set color for not available
            availabilityIndicator.textContent = 'Not Available'; // Indicate not available
        }

        availabilityCell.appendChild(availabilityIndicator);

        // Append cells to the row
        row.appendChild(photoCell);
        row.appendChild(nameCell);
        row.appendChild(userNameCell);
        row.appendChild(typeCell);
        row.appendChild(pricingCell);
        row.appendChild(availabilityCell); // Added availability cell

        // Append row to the table
        table.appendChild(row);

        // Click event to select user
        row.onclick = function () {
            selectUser(user.user_firstname + ' ' + user.user_lastname, user.following_id); // Pass full name and ID
        };
    });

    // Add the table to the search results div
    searchResultsDiv.appendChild(table);

    // Pagination (assuming we have response.page and response.totalPages)
    const paginationDiv = document.createElement('div');
    paginationDiv.className = 'pagination';

    for (let i = 1; i <= response.total; i++) {
        const pageLink = document.createElement('span');
        pageLink.className = 'page-link';
        pageLink.textContent = i;
        if (i === response.page) pageLink.classList.add('active');
        
        pageLink.onclick = function () {
            loadPage(i); // Function to load a specific page
        };
        paginationDiv.appendChild(pageLink);
    }

    searchResultsDiv.appendChild(paginationDiv);
}

document.getElementById('search_user').addEventListener('input', function() {
    const query = this.value;

    // Create a new XMLHttpRequest
    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'includes/ajax/posts/user_search.php?q=' + encodeURIComponent(query), true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                try {
                    const response = JSON.parse(xhr.responseText);
                    console.log(response); // For debugging
                    displayResults(response);
                } catch (e) {
                    console.error('Parsing error:', e);
                }
            }
        }
    };
    xhr.send();
}); 


function selectUser(fullName, userId) {
    const searchInput = document.getElementById('search_user');
    searchInput.value = fullName; // Populate the input with the full name
    $('#search_user').data('selected-user-id', userId); // Store the selected user's ID

    // Clear the search results without affecting the modal itself
    const searchResultsDiv = document.getElementById('search_results');
       // Close the modal
    $('#search-modal').modal('hide');

    // Use native JavaScript to hide the result item
    resultItem.style.display = 'none'; 
}




</script>



<style>
.availability-indicator {
    width: 15px; /* Diameter of the circle */
    height: 12px; /* Diameter of the circle */
    border-radius: 3%; /* Make it circular */
    margin-right: 5px; /* Space between indicator and text */
}
.results-table {
    display: flex;
    flex-direction: column;
    border-collapse: collapse; /* Ensures borders don't double */
}

.result-row {
    display: flex;
    justify-content: space-between;
    padding: 10px;
    border-bottom: 1px solid #ccc; /* Add a bottom border for separation */
}

.header-row {
    font-weight: bold;
    background-color: #f0f0f0; /* Light gray background for headers */
}

.header-cell {
    flex: 1; /* Allow headers to take equal space */
}

.result-cell {
    flex: 1; /* Allow cells to take equal space */
}

.profile-photo {
    width: 40px; /* Adjust size as needed */
    height: 40px; /* Adjust size as needed */
    border-radius: 50%; /* Make the profile photo round */
}

.availability-cell {
    display: flex;
    align-items: center; /* Center the indicator vertically */
}

.availability-indicator {
    width: 10px;
    height: 10px;
    border-radius: 50%; /* Make it a circle */
    margin-right: 5px; /* Spacing between circle and text */
}

/* Results Table Style */
.photo-cell {
    width: 60px; /* Adjust as needed */
}
.profile-photo {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    object-fit: cover;
}

.results-table {
    display: table;
    width: 100%;
    margin-top: 20px;
}
.result-row {
    display: table-row;
    cursor: pointer;
    padding: 10px;
    background-color: #f9f9f9;
    transition: background-color 0.3s;
}
.result-row:hover {
    background-color: #333fff;
}
.result-cell {
    display: table-cell;
    padding: 10px;
    vertical-align: middle;
}

/* Pagination Style */
.pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}
.page-link {
    padding: 8px 12px;
    margin: 0 5px;
    cursor: pointer;
    color: #007bff;
    transition: background-color 0.3s, color 0.3s;
}
.page-link:hover {
    background-color: #e0e0e0;
}
.page-link.active {
    color: white;
    background-color: #007bff;
    font-weight: bold;
}

 .result-info {
  font-size: 12px;        /* Smaller font size */
  color: #ffffff;         /* Change the color to your preference */
  font-weight: normal;    /* Normal font weight */
  margin-top: 5px;        /* Space above the paragraph */
  margin-bottom: 0; 
  left:0;
  pading-top:10px;  
      /* No margin below to keep it compact */
}

  .user-card {
  background-color: #f8f9fa;
  border: 1px solid #e0e0e0;
  border-radius: 4px;
  padding: 10px 15px;
  margin-bottom: 10px;
  display: flex;
  align-items: center;
  cursor: pointer;
  transition: background-color 0.3s ease;
}
  .search-results {
    border: 1px solid #ccc;
    max-height: 200px;
    overflow-y: 25%;
    display: none; /* Initially hidden */
  }
  .search-result-item {
    padding: 10px;
    cursor: pointer;
  }
  .search-result-item:hover {
    background-color: #f0f0f0;
  }
  .no-results {
    padding: 10px;
    color: #999;
  }
</style>

            </div>
          {/if}
          <!-- publisher-options -->

          <!-- publisher-buttons -->
          <div class="publisher-footer-buttons">
            {if $_privacy}
              {if $system['newsfeed_source'] == "default"}
                <!-- privacy -->
                {if $system['default_privacy'] == "me"}
                  <div class="btn-group js_publisher-privacy" data-value="me">
                    <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" data-display="static">
                      <i class="btn-group-icon fa fa-lock mr10"></i><span class="btn-group-text">{__("Only Me")}</span>
                    </button>
                    <div class="dropdown-menu">
                      <div class="dropdown-item pointer" data-value="public">
                        <i class="fa fa-globe mr5"></i>{__("Public")}
                      </div>
                      <div class="dropdown-item pointer" data-value="friends">
                        <i class="fa fa-users mr5"></i>{__("Friends")}
                      </div>
                      {if $_handle == 'me'}
                        <div class="dropdown-item pointer" data-value="me">
                          <i class="fa fa-lock mr5"></i>{__("Only Me")}
                        </div>
                      {/if}
                    </div>
                  </div>
                {elseif $system['default_privacy'] == "friends"}
                  <div class="btn-group js_publisher-privacy" data-value="friends">
                    <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" data-display="static">
                      <i class="btn-group-icon fa fa-users mr10"></i><span class="btn-group-text">{__("Friends")}</span>
                    </button>
                    <div class="dropdown-menu">
                      <div class="dropdown-item pointer" data-value="public">
                        <i class="fa fa-globe mr5"></i>{__("Public")}
                      </div>
                      <div class="dropdown-item pointer" data-value="friends">
                        <i class="fa fa-users mr5"></i>{__("Friends")}
                      </div>
                      {if $_handle == 'me'}
                        <div class="dropdown-item pointer" data-value="me">
                          <i class="fa fa-lock mr5"></i>{__("Only Me")}
                        </div>
                      {/if}
                    </div>
                  </div>
                {else}
                  <div class="btn-group js_publisher-privacy" data-value="public">
                    <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" data-display="static">
                      <i class="btn-group-icon fa fa-globe mr10"></i><span class="btn-group-text">{__("Public")}</span>
                    </button>
                    <div class="dropdown-menu">
                      <div class="dropdown-item pointer" data-value="public">
                        <i class="fa fa-globe mr5"></i>{__("Public")}
                      </div>
                      <div class="dropdown-item pointer" data-value="friends">
                        <i class="fa fa-users mr5"></i>{__("Friends")}
                      </div>
                      {if $_handle == 'me'}
                        <div class="dropdown-item pointer" data-value="me">
                          <i class="fa fa-lock mr5"></i>{__("Only Me")}
                        </div>
                      {/if}
                    </div>
                  </div>
                {/if}

                {if $_handle == "me" && $system['anonymous_mode']}
                  <button disabled="disabled" type="button" class="btn btn-light x-hidden js_publisher-privacy-public">
                    <i class="btn-group-icon fa fa-globe mr10"></i><span class="btn-group-text">{__("Public")}</span>
                  </button>
                {/if}
                <!-- privacy -->
              {/if}
            {/if}
            
            <div class="d-grid">
              {if $_post_as_page}
                <input type="hidden" name="post_as_page" value="{$_page_id}">
              {/if}
              <button type="button" class="btn btn-primary ml5 js_publisher-btn js_publisher">{__("Post")}</button>
            </div>
            <!-- publisher-buttons -->
            
          </div>
        </div>
        <!-- publisher-footer -->
      </div>
      <!-- publisher-slider -->
    



    </div>
  {/if}
  
{/if}

