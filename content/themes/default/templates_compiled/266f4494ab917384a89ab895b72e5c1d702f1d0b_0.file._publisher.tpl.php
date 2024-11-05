<?php
/* Smarty version 4.5.1, created on 2024-11-05 13:23:19
  from 'C:\laragon\www\Script\content\themes\default\templates\_publisher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_672a1c47ef6c59_29343158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '266f4494ab917384a89ab895b72e5c1d702f1d0b' => 
    array (
      0 => 'C:\\laragon\\www\\Script\\content\\themes\\default\\templates\\_publisher.tpl',
      1 => 1730812992,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 34,
    'file:__categories.recursive_options.tpl' => 1,
  ),
),false)) {
function content_672a1c47ef6c59_29343158 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['user']->value->_data['can_publish_posts']) {?>
  <?php if ($_smarty_tpl->tpl_vars['system']->value['verification_for_posts'] && !$_smarty_tpl->tpl_vars['user']->value->_data['user_verified']) {?>
    <div class="alert alert-danger">
      <div class="icon">
        <i class="fa fa-exclamation-circle fa-2x"></i>
      </div>
      <div class="text">
        <strong><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Account Verification Required" ));?>
</strong><br>
        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "To publish posts your account must be verified" ));?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/verification"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Verify Now" ));?>
</a>
      </div>
    </div>
  <?php } else { ?>
    <div class="publisher-overlay"></div>

    <div class="x-form publisher" data-handle="<?php echo $_smarty_tpl->tpl_vars['_handle']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['_id']->value) {?>data-id="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
" <?php }?>>

      <!-- publisher loader -->
      <div class="publisher-loader">
        <div class="loader loader_small"></div>
      </div>
      <!-- publisher loader -->

      <!-- publisher-message -->
      <div class="publisher-message">
        <?php if ($_smarty_tpl->tpl_vars['_handle']->value == "page" || $_smarty_tpl->tpl_vars['_post_as_page']->value) {?>
          <img class="publisher-avatar" src="<?php echo $_smarty_tpl->tpl_vars['_avatar']->value;?>
">
        <?php } else { ?>
          <img class="publisher-avatar" src="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_picture'];?>
">
        <?php }?>
        <div class="colored-text-wrapper">
          <textarea dir="auto" class="js_autosize js_mention js_publisher-scraper" data-init-placeholder='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "What is on your mind? #Hashtag.. @Mention.. Link.." ));?>
' placeholder='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "What is on your mind? #Hashtag.. @Mention.. Link.." ));?>
'><?php if ($_smarty_tpl->tpl_vars['page']->value == "share" && $_smarty_tpl->tpl_vars['url']->value) {
echo $_smarty_tpl->tpl_vars['url']->value;
}?></textarea>
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
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon",'width'=>"16px",'height'=>"16px"), 0, false);
?>
          <input type="text" placeholder='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Album title" ));?>
'>
        </div>
        <!-- post album -->

        <!-- post feelings -->
        <div class="publisher-meta" data-meta="feelings">
          <div id="feelings-menu-toggle" data-init-text='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "What are you doing?" ));?>
'><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "What are you doing?" ));?>
</div>
          <div id="feelings-data" style="display: none">
            <input type="text" class="no-icon" placeholder='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "What are you doing?" ));?>
'>
            <span></span>
          </div>
          <div id="feelings-menu" class="dropdown-menu dropdown-widget">
            <div class="dropdown-widget-body ptb5">
              <div class="js_scroller">
                <ul class="feelings-list">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feelings']->value, 'feeling');
$_smarty_tpl->tpl_vars['feeling']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feeling']->value) {
$_smarty_tpl->tpl_vars['feeling']->do_else = false;
?>
                    <li class="feeling-item js_feelings-add" data-action="<?php echo $_smarty_tpl->tpl_vars['feeling']->value['action'];?>
" data-placeholder="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( $_smarty_tpl->tpl_vars['feeling']->value['placeholder'] ));?>
">
                      <div class="icon">
                        <i class="twa twa-3x twa-<?php echo $_smarty_tpl->tpl_vars['feeling']->value['icon'];?>
"></i>
                      </div>
                      <div class="data">
                        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( $_smarty_tpl->tpl_vars['feeling']->value['text'] ));?>

                      </div>
                    </li>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
              </div>
            </div>
          </div>
          <div id="feelings-types" class="dropdown-menu dropdown-widget">
            <div class="dropdown-widget-body ptb5">
              <div class="js_scroller">
                <ul class="feelings-list">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feelings_types']->value, 'type');
$_smarty_tpl->tpl_vars['type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->do_else = false;
?>
                    <li class="feeling-item js_feelings-type" data-type="<?php echo $_smarty_tpl->tpl_vars['type']->value['action'];?>
" data-icon="<?php echo $_smarty_tpl->tpl_vars['type']->value['icon'];?>
">
                      <div class="icon">
                        <i class="twa twa-3x twa-<?php echo $_smarty_tpl->tpl_vars['type']->value['icon'];?>
"></i>
                      </div>
                      <div class="data">
                        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( $_smarty_tpl->tpl_vars['type']->value['text'] ));?>

                      </div>
                    </li>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- post feelings -->

        <!-- post location -->
        <div class="publisher-meta" data-meta="location">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"map",'class'=>"main-icon",'width'=>"16px",'height'=>"16px"), 0, true);
?>
          <input class="js_geocomplete" type="text" placeholder='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Where are you?" ));?>
'>
        </div>
        <!-- post location -->

        <!-- post colored -->
        <div class="publisher-meta" data-meta="colored">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['colored_patterns']->value, 'pattern');
$_smarty_tpl->tpl_vars['pattern']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pattern']->value) {
$_smarty_tpl->tpl_vars['pattern']->do_else = false;
?>
            <div class="colored-pattern-item js_publisher-pattern" data-id="<?php echo $_smarty_tpl->tpl_vars['pattern']->value['pattern_id'];?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['pattern']->value['type'];?>
" data-background-image="<?php echo $_smarty_tpl->tpl_vars['pattern']->value['background_image'];?>
" data-background-color-1="<?php echo $_smarty_tpl->tpl_vars['pattern']->value['background_color_1'];?>
" data-background-color-2="<?php echo $_smarty_tpl->tpl_vars['pattern']->value['background_color_2'];?>
" data-text-color="<?php echo $_smarty_tpl->tpl_vars['pattern']->value['text_color'];?>
" <?php if ($_smarty_tpl->tpl_vars['pattern']->value['type'] == "color") {?> style="background-image: linear-gradient(45deg, <?php echo $_smarty_tpl->tpl_vars['pattern']->value['background_color_1'];?>
, <?php echo $_smarty_tpl->tpl_vars['pattern']->value['background_color_2'];?>
);" <?php } else { ?> style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['pattern']->value['background_image'];?>
)" <?php }?>>
            </div>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <!-- post colored -->

        <!-- post voice notes -->
        <div class="publisher-meta" data-meta="voice_notes">
          <div class="voice-recording-wrapper" data-handle="publisher">
            <!-- processing message -->
            <div class="x-hidden js_voice-processing-message">
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"upload",'class'=>"main-icon static mr5",'width'=>"16px",'height'=>"16px"), 0, true);
?>
              <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Processing" ));?>
<span class="loading-dots"></span>
            </div>
            <!-- processing message -->

            <!-- success message -->
            <div class="x-hidden js_voice-success-message">
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checkmark",'class'=>"main-icon static mr5",'width'=>"16px",'height'=>"16px"), 0, true);
?>
              <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Voice note recorded successfully" ));?>

              <div class="float-end">
                <button type="button" class="btn-close js_voice-remove"></button>
              </div>
            </div>
            <!-- success message -->

            <!-- start recording -->
            <div class="btn-voice-start js_voice-start">
              <i class="fas fa-microphone mr5"></i><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Record" ));?>

            </div>
            <!-- start recording -->

            <!-- stop recording -->
            <div class="btn-voice-stop js_voice-stop" style="display: none">
              <i class="far fa-stop-circle mr5"></i><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Recording" ));?>
 <span class="js_voice-timer">00:00</span>
            </div>
            <!-- stop recording -->
          </div>
        </div>
        <!-- post voice notes -->

        <!-- post gif -->
        <div class="publisher-meta" data-meta="gif">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"gif",'class'=>"main-icon",'width'=>"16px",'height'=>"16px"), 0, true);
?>
          <input class="js_publisher-gif-search" type="text" placeholder='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Search GIFs" ));?>
'>
        </div>
        <!-- post gif -->

        <!-- post poll -->
        <div class="publisher-meta" data-meta="poll">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"plus",'class'=>"main-icon",'width'=>"16px",'height'=>"16px"), 0, true);
?>
          <input type="text" placeholder='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Add an option" ));?>
...'>
        </div>
        <div class="publisher-meta" data-meta="poll">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"plus",'class'=>"main-icon",'width'=>"16px",'height'=>"16px"), 0, true);
?>
          <input type="text" placeholder='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Add an option" ));?>
...'>
        </div>
        <!-- post poll -->

        <!-- post video -->
        <div class="publisher-meta" data-meta="video">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checkmark",'class'=>"main-icon static mr5",'width'=>"16px",'height'=>"16px"), 0, true);
?>
          <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Video uploaded successfully" ));?>

          <div class="float-end">
            <button type="button" class="btn-close js_publisher-attachment-file-remover" data-type="video"></button>
          </div>
        </div>
        <div class="publisher-meta" data-meta="video">
          <select class="form-select" name="video_category" id="video_category">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['videos_categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
              <?php $_smarty_tpl->_subTemplateRender('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </select>
        </div>
        <div class="publisher-custom-thumbnail">
          <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Custom Video Thumbnail" ));?>

          <div class="x-image">
            <button type="button" class="btn-close x-hidden js_x-image-remover" title='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Remove" ));?>
'></button>
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
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checkmark",'class'=>"main-icon static mr5",'width'=>"16px",'height'=>"16px"), 0, true);
?>
          <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Audio uploaded successfully" ));?>

          <div class="float-end">
            <button type="button" class="btn-close js_publisher-attachment-file-remover" data-type="audio"></button>
          </div>
        </div>
        <!-- post audio -->

        <!-- post file -->
        <div class="publisher-meta" data-meta="file">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checkmark",'class'=>"main-icon static mr5",'width'=>"16px",'height'=>"16px"), 0, true);
?>
          <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "File uploaded successfully" ));?>

          <div class="float-end">
            <button type="button" class="btn-close js_publisher-attachment-file-remover" data-type="file"></button>
          </div>
        </div>
        <!-- post file -->

        <!-- publisher-tools-tabs -->
        <div class="publisher-tools-tabs">
          <ul class="row">
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_go_live']) {?>
              <li class="col-md-6">
                <a class="publisher-tools-tab link js_publisher-tab" data-tab="live" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/live<?php if ($_smarty_tpl->tpl_vars['_handle']->value == "page") {?>?page_id=<?php echo $_smarty_tpl->tpl_vars['_id']->value;
}
if ($_smarty_tpl->tpl_vars['_handle']->value == "group") {?>?group_id=<?php echo $_smarty_tpl->tpl_vars['_id']->value;
}
if ($_smarty_tpl->tpl_vars['_handle']->value == "event") {?>?event_id=<?php echo $_smarty_tpl->tpl_vars['_id']->value;
}?>">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"live",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Go Live" ));?>

                  <div class="spinner-grow text-danger ml5" style="width: 10px; height: 10px;">
                  </div>
                </a>
              </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['photos_enabled']) {?>
              <li class="col-md-6">
                <div class="publisher-tools-tab attach js_publisher-tab" data-tab="photos">
                  <span class="js_x-uploader" data-handle="publisher" data-multiple="true">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"camera",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  </span>
                  <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Upload Photos" ));?>

                </div>
              </li>
              <li class="col-md-6">
                <div class="publisher-tools-tab js_publisher-tab" data-tab="album">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Create Album" ));?>

                </div>
              </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_add_activity_posts']) {?>
              <li class="col-md-6">
                <div class="publisher-tools-tab js_publisher-feelings">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"smile",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Feelings/Activity" ));?>

                </div>
              </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_add_geolocation_posts']) {?>
              <li class="col-md-6">
                <div class="publisher-tools-tab js_publisher-tab" data-tab="location">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"map",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Check In" ));?>

                </div>
              </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_add_colored_posts']) {?>
              <li class="col-md-6">
                <div class="publisher-tools-tab js_publisher-tab" data-tab="colored">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"posts_colored",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Colored Posts" ));?>

                </div>
              </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['voice_notes_posts_enabled']) {?>
              <li class="col-md-6">
                <div class="publisher-tools-tab js_publisher-tab" data-tab="voice_notes">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"voice_notes",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Voice Notes" ));?>

                </div>
              </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_add_gif_posts']) {?>
              <li class="col-md-6">
                <div class="publisher-tools-tab js_publisher-tab" data-tab="gif">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"gif",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "GIF" ));?>

                </div>
              </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_write_articles'] && in_array($_smarty_tpl->tpl_vars['_handle']->value,array('me','page','group','event'))) {?>
              <li class="col-md-6">
                <a class="publisher-tools-tab link js_publisher-tab" data-tab="article" href='<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/new<?php if ($_smarty_tpl->tpl_vars['_handle']->value == "page") {?>?page=<?php echo $_smarty_tpl->tpl_vars['_id']->value;
}
if ($_smarty_tpl->tpl_vars['_handle']->value == "group") {?>?group=<?php echo $_smarty_tpl->tpl_vars['_id']->value;
}
if ($_smarty_tpl->tpl_vars['_handle']->value == "event") {?>?event=<?php echo $_smarty_tpl->tpl_vars['_id']->value;
}?>'>
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"articles",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Write Article" ));?>

                </a>
              </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_sell_products'] && $_smarty_tpl->tpl_vars['_handle']->value == "me") {?>
              <li class="col-md-6">
                <div class="publisher-tools-tab link js_publisher-tab" data-tab="product" data-toggle="modal" data-url="posts/product.php?do=create">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"products",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Sell Something" ));?>

                </div>
              </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_raise_funding'] && $_smarty_tpl->tpl_vars['_handle']->value == "me") {?>
              <li class="col-md-6">
                <div class="publisher-tools-tab link js_publisher-tab" data-tab="funding" data-toggle="modal" data-url="posts/funding.php?do=create">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"funding",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Raise Funding" ));?>

                </div>
              </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_create_offers'] && in_array($_smarty_tpl->tpl_vars['_handle']->value,array('me','page','group','event'))) {?>
              <li class="col-md-6">
                <div class="publisher-tools-tab link js_publisher-tab" data-tab="offer" data-toggle="modal" data-url="posts/offer.php?do=create<?php if ($_smarty_tpl->tpl_vars['_handle']->value == "page") {?>&page=<?php echo $_smarty_tpl->tpl_vars['_id']->value;
}
if ($_smarty_tpl->tpl_vars['_handle']->value == "group") {?>&group=<?php echo $_smarty_tpl->tpl_vars['_id']->value;
}
if ($_smarty_tpl->tpl_vars['_handle']->value == "event") {?>&event=<?php echo $_smarty_tpl->tpl_vars['_id']->value;
}?>">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"offers",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Create Offer" ));?>

                </div>
              </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_create_jobs'] && in_array($_smarty_tpl->tpl_vars['_handle']->value,array('me','page','group','event'))) {?>
              <li class="col-md-6">
                <div class="publisher-tools-tab link js_publisher-tab" data-tab="job" data-toggle="modal" data-url="posts/job.php?do=create<?php if ($_smarty_tpl->tpl_vars['_handle']->value == "page") {?>&page=<?php echo $_smarty_tpl->tpl_vars['_id']->value;
}
if ($_smarty_tpl->tpl_vars['_handle']->value == "group") {?>&group=<?php echo $_smarty_tpl->tpl_vars['_id']->value;
}
if ($_smarty_tpl->tpl_vars['_handle']->value == "event") {?>&event=<?php echo $_smarty_tpl->tpl_vars['_id']->value;
}?>">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"jobs",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Create Job" ));?>

                </div>
              </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_add_polls_posts']) {?>
              <li class="col-md-6">
                <div class="publisher-tools-tab js_publisher-tab" data-tab="poll">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"polls",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Create Poll" ));?>

                </div>
              </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_upload_videos']) {?>
              <li class="col-md-6">
                <div class="publisher-tools-tab attach js_publisher-tab" data-tab="video">
                  <span class="js_x-uploader" data-handle="publisher" data-type="video">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"videos",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  </span>
                  <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Upload Video" ));?>

                </div>
              </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_upload_audios']) {?>
              <li class="col-md-6">
                <div class="publisher-tools-tab attach js_publisher-tab" data-tab="audio">
                  <span class="js_x-uploader" data-handle="publisher" data-type="audio">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"audios",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  </span>
                  <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Upload Audio" ));?>

                </div>
              </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_upload_files']) {?>
              <li class="col-md-6">
                <div class="publisher-tools-tab attach js_publisher-tab" data-tab="file">
                  <span class="js_x-uploader" data-handle="publisher" data-type="file">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"files",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  </span>
                  <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Upload File" ));?>

                </div>
              </li>
            <?php }?>
          </ul>
        </div>
        <!-- publisher-tools-tabs -->

        <!-- publisher-footer -->
        <div class="publisher-footer">
          <?php if ($_smarty_tpl->tpl_vars['system']->value['adult_mode'] || ($_smarty_tpl->tpl_vars['_handle']->value == "me" && $_smarty_tpl->tpl_vars['user']->value->_data['can_add_anonymous_posts']) || ($_smarty_tpl->tpl_vars['_handle']->value != "page" && $_smarty_tpl->tpl_vars['user']->value->_data['can_receive_tip']) || (in_array($_smarty_tpl->tpl_vars['_handle']->value,array('me','page','group')) && $_smarty_tpl->tpl_vars['_node_can_monetize_content']->value && $_smarty_tpl->tpl_vars['_node_monetization_enabled']->value && $_smarty_tpl->tpl_vars['_node_monetization_plans']->value > 0) || (in_array($_smarty_tpl->tpl_vars['_handle']->value,array('me','page','group','event')) && $_smarty_tpl->tpl_vars['user']->value->_data['can_monetize_content'] && $_smarty_tpl->tpl_vars['user']->value->_data['user_monetization_enabled'])) {?>
            <!-- publisher-options -->
            <div class="publisher-footer-options">

              <!-- anonymous post -->
              <?php if ($_smarty_tpl->tpl_vars['_handle']->value == "me" && $_smarty_tpl->tpl_vars['user']->value->_data['can_add_anonymous_posts']) {?>
                <div class="form-table-row mb10">
                  <div class="avatar">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"spy",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  </div>
                  <div>
                    <div class="form-label mb0"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Anonymous Post" ));?>
</div>
                    <div class="form-text d-none d-sm-block mt0"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Share your post as anonymous post" ));?>
</div>
                  </div>
                  <div class="text-end">
                    <label class="switch" for="is_anonymous">
                      <input type="checkbox" name="is_anonymous" id="is_anonymous" class="js_publisher-anonymous-toggle">
                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>
              <?php }?>
              <!-- anonymous post -->

              <!-- adult content -->
              <?php if ($_smarty_tpl->tpl_vars['system']->value['adult_mode']) {?>
                <div class="form-table-row mb10">
                  <div class="avatar">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"adult",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  </div>
                  <div>
                    <div class="form-label mb0"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Adult Content" ));?>
</div>
                    <div class="form-text d-none d-sm-block mt0"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Share your post as adult content" ));?>
</div>
                  </div>
                  <div class="text-end">
                    <label class="switch" for="for_adult">
                      <input type="checkbox" name="for_adult" id="for_adult" class="js_publisher-adult-toggle">
                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>
              <?php }?>
              <!-- adult content -->

              <!-- enable tips -->
              <?php if ($_smarty_tpl->tpl_vars['_handle']->value != "page" && $_smarty_tpl->tpl_vars['user']->value->_data['can_receive_tip']) {?>
                <div class="form-table-row mb10">
                  <div class="avatar">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"tips",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  </div>
                  <div>
                    <div class="form-label mb0"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Enable Tips" ));?>
</div>
                    <div class="form-text d-none d-sm-block mt0"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Allow people to send you tips" ));?>
</div>
                  </div>
                  <div class="text-end">
                    <label class="switch" for="tips_enabled">
                      <input type="checkbox" name="tips_enabled" id="tips_enabled" class="js_publisher-tips-toggle">
                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>
              <?php }?>
              <!-- enable tips -->

              <!-- only for subscribers -->
              <?php if (in_array($_smarty_tpl->tpl_vars['_handle']->value,array('me','page','group')) && $_smarty_tpl->tpl_vars['_node_can_monetize_content']->value && $_smarty_tpl->tpl_vars['_node_monetization_enabled']->value && $_smarty_tpl->tpl_vars['_node_monetization_plans']->value > 0) {?>
                <div class="form-table-row mb10" id="subscribers-toggle-wrapper">
                  <div class="avatar">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"groups",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  </div>
                  <div>
                    <div class="form-label mb0"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Subscribers Only" ));?>
</div>
                    <div class="form-text d-none d-sm-block mt0"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Share this post to" ));?>
 <?php if ($_smarty_tpl->tpl_vars['_handle']->value != "me") {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( $_smarty_tpl->tpl_vars['_handle']->value ));?>
 <?php }
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "subscribers only" ));?>
</div>
                  </div>
                  <div class="text-end">
                    <label class="switch" for="subscribers_only">
                      <input type="checkbox" name="subscribers_only" id="subscribers_only" class="js_publisher-subscribers-toggle">
                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>
              <?php }?>
              <!-- only for subscribers -->

              <!-- paid post -->
              <?php if (in_array($_smarty_tpl->tpl_vars['_handle']->value,array('me','page','group','event')) && $_smarty_tpl->tpl_vars['user']->value->_data['can_monetize_content'] && $_smarty_tpl->tpl_vars['user']->value->_data['user_monetization_enabled']) {?>
                <div class="form-table-row mb10" id="paid-toggle-wrapper">
                  <div class="avatar">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"monetization",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  </div>
                  <div>
                    <div class="form-label mb0"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Paid Post" ));?>
</div>
                    <div class="form-text d-none d-sm-block mt0"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Set a price to your post" ));?>
</div>
                  </div>
                  <div class="text-end">
                    <label class="switch" for="paid_post">
                      <input type="checkbox" name="paid_post" id="paid_post" class="js_publisher-paid-toggle">
                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>
                <div class="form-group x-hidden" id="paid-price-wrapper">
                  <input type="text" class="form-control" name="paid_post_price" placeholder="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Price" ));?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency'];?>
)">
                </div>
                <div class="form-group x-hidden" id="paid-text-wrapper">
                  <textarea class="form-control" name="paid_post_text" rows="3" placeholder="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Paid Post Description" ));?>
"></textarea>
                </div>
              <?php }?>
              <!-- paid post -->
                  <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_create_jobs'] && in_array($_smarty_tpl->tpl_vars['_handle']->value,array('me','page','group','event'))) {?>
  <li class="col-md-6">
    <div class="publisher-tools-tab link js_publisher-tab" data-tab="job" data-toggle="modal" data-url="posts/job.php?do=create<?php if ($_smarty_tpl->tpl_vars['_handle']->value == "page") {?>&page=<?php echo $_smarty_tpl->tpl_vars['_id']->value;
}
if ($_smarty_tpl->tpl_vars['_handle']->value == "group") {?>&group=<?php echo $_smarty_tpl->tpl_vars['_id']->value;
}
if ($_smarty_tpl->tpl_vars['_handle']->value == "event") {?>&event=<?php echo $_smarty_tpl->tpl_vars['_id']->value;
}?>">
      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"jobs",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
      <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Create Job" ));?>

    </div>
  </li>
<?php }?>

<!-- Add Push Pin Option -->
<div class="form-table-row mb10">
    <div class="avatar">
        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pushpin",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
    </div>
    <div>
        <div class="form-label mb0"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Add Push Pin" ));?>
</div>
        <div class="form-text d-none d-sm-block mt0"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Share this post as a push pin" ));?>
</div>
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
        <textarea class="form-control" name="push_pin_message" rows="3" placeholder="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Enter your message for the push pin" ));?>
"></textarea>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="search_user" id="search_user" placeholder="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Search for users..." ));?>
">
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
  <?php if ($_smarty_tpl->tpl_vars['system']->value['adult_mode'] || ($_smarty_tpl->tpl_vars['_handle']->value == "me" && $_smarty_tpl->tpl_vars['user']->value->_data['can_add_anonymous_posts']) || ($_smarty_tpl->tpl_vars['_handle']->value != "page" && $_smarty_tpl->tpl_vars['user']->value->_data['can_receive_tip']) || (in_array($_smarty_tpl->tpl_vars['_handle']->value,array('me','page','group')) && $_smarty_tpl->tpl_vars['_node_can_monetize_content']->value && $_smarty_tpl->tpl_vars['_node_monetization_enabled']->value && $_smarty_tpl->tpl_vars['_node_monetization_plans']->value > 0) || (in_array($_smarty_tpl->tpl_vars['_handle']->value,array('me','page','group','event')) && $_smarty_tpl->tpl_vars['user']->value->_data['can_monetize_content'] && $_smarty_tpl->tpl_vars['user']->value->_data['user_monetization_enabled'])) {?>
    <!-- publisher-options -->
    <div class="publisher-footer-options">
      <!-- Your existing options here -->
    </div>
  <?php }?>
  <!-- publisher-options -->
  
  
</div>
<!-- publisher-footer -->

<?php echo '<script'; ?>
>
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
        profilePhoto.src = user.user_picture ? `<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
` + user.profile_photo : user.profile_photo;

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




<?php echo '</script'; ?>
>



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
          <?php }?>
          <!-- publisher-options -->

          <!-- publisher-buttons -->
          <div class="publisher-footer-buttons">
            <?php if ($_smarty_tpl->tpl_vars['_privacy']->value) {?>
              <?php if ($_smarty_tpl->tpl_vars['system']->value['newsfeed_source'] == "default") {?>
                <!-- privacy -->
                <?php if ($_smarty_tpl->tpl_vars['system']->value['default_privacy'] == "me") {?>
                  <div class="btn-group js_publisher-privacy" data-value="me">
                    <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" data-display="static">
                      <i class="btn-group-icon fa fa-lock mr10"></i><span class="btn-group-text"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Only Me" ));?>
</span>
                    </button>
                    <div class="dropdown-menu">
                      <div class="dropdown-item pointer" data-value="public">
                        <i class="fa fa-globe mr5"></i><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Public" ));?>

                      </div>
                      <div class="dropdown-item pointer" data-value="friends">
                        <i class="fa fa-users mr5"></i><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Friends" ));?>

                      </div>
                      <?php if ($_smarty_tpl->tpl_vars['_handle']->value == 'me') {?>
                        <div class="dropdown-item pointer" data-value="me">
                          <i class="fa fa-lock mr5"></i><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Only Me" ));?>

                        </div>
                      <?php }?>
                    </div>
                  </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['system']->value['default_privacy'] == "friends") {?>
                  <div class="btn-group js_publisher-privacy" data-value="friends">
                    <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" data-display="static">
                      <i class="btn-group-icon fa fa-users mr10"></i><span class="btn-group-text"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Friends" ));?>
</span>
                    </button>
                    <div class="dropdown-menu">
                      <div class="dropdown-item pointer" data-value="public">
                        <i class="fa fa-globe mr5"></i><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Public" ));?>

                      </div>
                      <div class="dropdown-item pointer" data-value="friends">
                        <i class="fa fa-users mr5"></i><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Friends" ));?>

                      </div>
                      <?php if ($_smarty_tpl->tpl_vars['_handle']->value == 'me') {?>
                        <div class="dropdown-item pointer" data-value="me">
                          <i class="fa fa-lock mr5"></i><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Only Me" ));?>

                        </div>
                      <?php }?>
                    </div>
                  </div>
                <?php } else { ?>
                  <div class="btn-group js_publisher-privacy" data-value="public">
                    <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" data-display="static">
                      <i class="btn-group-icon fa fa-globe mr10"></i><span class="btn-group-text"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Public" ));?>
</span>
                    </button>
                    <div class="dropdown-menu">
                      <div class="dropdown-item pointer" data-value="public">
                        <i class="fa fa-globe mr5"></i><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Public" ));?>

                      </div>
                      <div class="dropdown-item pointer" data-value="friends">
                        <i class="fa fa-users mr5"></i><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Friends" ));?>

                      </div>
                      <?php if ($_smarty_tpl->tpl_vars['_handle']->value == 'me') {?>
                        <div class="dropdown-item pointer" data-value="me">
                          <i class="fa fa-lock mr5"></i><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Only Me" ));?>

                        </div>
                      <?php }?>
                    </div>
                  </div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['_handle']->value == "me" && $_smarty_tpl->tpl_vars['system']->value['anonymous_mode']) {?>
                  <button disabled="disabled" type="button" class="btn btn-light x-hidden js_publisher-privacy-public">
                    <i class="btn-group-icon fa fa-globe mr10"></i><span class="btn-group-text"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Public" ));?>
</span>
                  </button>
                <?php }?>
                <!-- privacy -->
              <?php }?>
            <?php }?>
            
            <div class="d-grid">
              <?php if ($_smarty_tpl->tpl_vars['_post_as_page']->value) {?>
                <input type="hidden" name="post_as_page" value="<?php echo $_smarty_tpl->tpl_vars['_page_id']->value;?>
">
              <?php }?>
              <button type="button" class="btn btn-primary ml5 js_publisher-btn js_publisher"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "Post" ));?>
</button>
            </div>
            <!-- publisher-buttons -->
            
          </div>
        </div>
        <!-- publisher-footer -->
      </div>
      <!-- publisher-slider -->
    



    </div>
  <?php }?>
  
<?php }?>

<?php }
}
