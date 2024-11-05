<?php

/**
 * ajax -> admin -> delete
 * 
 * @package Sngine
 * @author Zamblek
 */

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();

// check admin|moderator permission
if (!$user->_is_admin) {
  modal("MESSAGE", __("System Message"), __("You don't have the right permission to access this"));
}

// check demo account
if ($user->_data['user_demo']) {
  modal("ERROR", __("Demo Restriction"), __("You can't do this with demo account"));
}

try {

  // check password
  $user->check_password($_POST['password_check']);

  // factory reset
  /* empty tables */
  $tables = [
    "ads_campaigns",
    "ads_system",
    "affiliates_payments",
    "announcements",
    "announcements_users",
    "auto_connect",
    "bank_transfers",
    "blacklist",
    "coinpayments_transactions",
    "conversations",
    "conversations_calls_audio",
    "conversations_calls_video",
    "conversations_messages",
    "conversations_users",
    "custom_fields",
    "custom_fields_values",
    "developers_apps",
    "developers_apps_users",
    "events",
    "events_members",
    "followings",
    "forums",
    "forums_replies",
    "forums_threads",
    "friends",
    "funding_payments",
    "games",
    "games_players",
    "gifts",
    "groups",
    "groups_admins",
    "groups_members",
    "hashtags",
    "hashtags_posts",
    "invitation_codes",
    "log_commissions",
    "log_payments",
    "log_sessions",
    "market_payments",
    "monetization_payments",
    "monetization_plans",
    "movies",
    "movies_payments",
    "notifications",
    "orders",
    "orders_items",
    "packages",
    "packages_payments",
    "pages",
    "pages_admins",
    "pages_invites",
    "pages_likes",
    "points_payments",
    "posts",
    "posts_articles",
    "posts_audios",
    "posts_comments",
    "posts_comments_reactions",
    "posts_files",
    "posts_funding",
    "posts_funding_donors",
    "posts_hidden",
    "posts_jobs",
    "posts_jobs_applications",
    "posts_links",
    "posts_live",
    "posts_live_users",
    "posts_media",
    "posts_offers",
    "posts_paid",
    "posts_photos",
    "posts_photos_albums",
    "posts_photos_reactions",
    "posts_polls",
    "posts_polls_options",
    "posts_polls_options_users",
    "posts_products",
    "posts_reactions",
    "posts_saved",
    "posts_videos",
    "posts_views",
    "reports",
    "reviews",
    "reviews_photos",
    "shopping_cart",
    "sneak_peaks",
    "stories",
    "stories_media",
    "subscribers",
    "users_accounts",
    "users_addresses",
    "users_affiliates",
    "users_blocks",
    "users_gifts",
    "users_groups",
    "users_invitations",
    "users_pokes",
    "users_recurring_payments",
    "users_searches",
    "users_sms",
    "users_top_friends",
    "verification_requests",
    "wallet_payments",
    "wallet_transactions",
    "widgets",
  ];
  foreach ($tables as $table) {
    $db->query(sprintf("TRUNCATE %s", $table)) or _error('SQL_ERROR_THROWEN');
  }
  /* delete all other users */
  $db->query(sprintf("DELETE FROM users WHERE user_id != %s", secure($user->_data['user_id'], "int"))) or _error('SQL_ERROR_THROWEN');
  /* delete all other users sessions */
  $db->query(sprintf("DELETE FROM users_sessions WHERE user_id != %s", secure($user->_data['user_id'], "int"))) or _error('SQL_ERROR_THROWEN');
  /* reset admin account details */
  $db->query(sprintf("UPDATE users SET 
		user_live_requests_counter = '0', 
		user_live_requests_lastid = '0', 
		user_live_messages_counter = '0', 
		user_live_messages_lastid = '0', 
		user_live_notifications_counter = '0', 
		user_live_notifications_lastid = '0', 
		user_picture = NULL, 
		user_picture_id = NULL, 
		user_cover = NULL, 
		user_cover_id = NULL, 
		user_cover_position = NULL, 
		user_album_pictures = NULL, 
		user_album_covers = NULL, 
		user_album_timeline = NULL, 
		user_pinned_post = NULL, 
		user_affiliate_balance = '0', 
		user_funding_balance = '0', 
    user_monetization_balance = '0', 
		user_wallet_balance = '0', 
		user_points = '0' 
		WHERE user_id = %s", secure($user->_data['user_id'], "int"))) or _error('SQL_ERROR_THROWEN');
  /* delete all users groups */
  $db->query("DELETE FROM users_groups") or _error('SQL_ERROR_THROWEN');
  $db->query("ALTER TABLE users_groups AUTO_INCREMENT = 1") or _error('SQL_ERROR_THROWEN');
  /* delete all other permissions_groups */
  $db->query("DELETE FROM permissions_groups WHERE permissions_group_id > 2") or _error('SQL_ERROR_THROWEN');
  $db->query("ALTER TABLE permissions_groups AUTO_INCREMENT = 3") or _error('SQL_ERROR_THROWEN');
  /* reset system options settings */
  update_system_options([
    'system_email' => secure(''),
    'forums_enabled' => secure('0'),
    'movies_enabled' => secure('0'),
    'games_enabled' => secure('0'),
    'location_finder_enabled' => secure('0'),
    'gifts_enabled' => secure('0'),
    'adblock_detector_enabled' => secure('0'),
    'geolocation_enabled' => secure('0'),
    'geolocation_key' => secure(''),
    'gif_enabled' => secure('0'),
    'giphy_key' => secure(''),
    'post_translation_enabled' => secure('0'),
    'yandex_key' => secure(''),
    'invitation_enabled' => secure('0'),
    'social_login_enabled' => secure('0'),
    'facebook_login_enabled' => secure('0'),
    'facebook_appid' => secure(''),
    'facebook_secret' => secure(''),
    'google_login_enabled' => secure('0'),
    'google_appid' => secure(''),
    'google_secret' => secure(''),
    'twitter_login_enabled' => secure('0'),
    'twitter_appid' => secure(''),
    'twitter_secret' => secure(''),
    'linkedin_login_enabled' => secure('0'),
    'linkedin_appid' => secure(''),
    'linkedin_secret' => secure(''),
    'vkontakte_login_enabled' => secure('0'),
    'vkontakte_appid' => secure(''),
    'vkontakte_secret' => secure(''),
    'wordpress_login_enabled' => secure('0'),
    'wordpress_appid' => secure(''),
    'wordpress_secret' => secure(''),
    'sngine_login_enabled' => secure('0'),
    'sngine_appid' => secure(''),
    'sngine_secret' => secure(''),
    'sngine_app_domain' => secure(''),
    'sngine_app_name' => secure(''),
    'sngine_app_icon' => secure(''),
    'genders_disabled' => secure('0'),
    'show_usernames_enabled' => secure('0'),
    'email_smtp_enabled' => secure('0'),
    'email_smtp_authentication' => secure(''),
    'email_smtp_ssl' => secure(''),
    'email_smtp_server' => secure(''),
    'email_smtp_port' => secure(''),
    'email_smtp_username' => secure(''),
    'email_smtp_password' => secure(''),
    'email_smtp_setfrom' => secure(''),
    'sms_limit' => '3',
    'twilio_sid' => secure(''),
    'twilio_token' => secure(''),
    'twilio_phone' => secure(''),
    'bulksms_username' => secure(''),
    'bulksms_password' => secure(''),
    'infobip_username' => secure(''),
    'infobip_password' => secure(''),
    'msg91_authkey' => secure(''),
    'system_phone' => secure(''),
    'profile_notification_enabled' => secure('0'),
    'email_notifications' => secure('0'),
    'email_post_likes' => secure('0'),
    'email_post_comments' => secure('0'),
    'email_post_shares' => secure('0'),
    'email_wall_posts' => secure('0'),
    'email_mentions' => secure('0'),
    'email_profile_visits' => secure('0'),
    'email_friend_requests' => secure('0'),
    'onesignal_notification_enabled' => secure('0'),
    'onesignal_app_id' => secure(''),
    'onesignal_api_key' => secure(''),
    'audio_call_enabled' => secure('0'),
    'video_call_enabled' => secure('0'),
    'twilio_sid' => secure(''),
    'twilio_apisid' => secure(''),
    'twilio_apisecret' => secure(''),
    'live_enabled' => secure('0'),
    'save_live_enabled' => secure('0'),
    'agora_app_id' => secure(''),
    'agora_app_certificate' => secure(''),
    'agora_customer_id' => secure(''),
    'agora_customer_certificate' => secure(''),
    'agora_s3_bucket' => secure(''),
    'agora_s3_region' => secure(''),
    'agora_s3_key' => secure(''),
    'agora_s3_secret' => secure(''),
    'watermark_enabled' => secure('0'),
    'watermark_icon' => secure(''),
    'adult_images_enabled' => secure('0'),
    'adult_images_api_key' => secure(''),
    'ffmpeg_enabled' => secure('0'),
    'ffmpeg_path' => secure(''),
    's3_enabled' => secure('0'),
    'google_cloud_enabled' => secure('0'),
    'digitalocean_enabled' => secure('0'),
    'wasabi_enabled' => secure('0'),
    'backblaze_enabled' => secure('0'),
    'ftp_enabled' => secure('0'),
    's3_bucket' => secure(''),
    's3_region' => secure(''),
    's3_key' => secure(''),
    's3_secret' => secure(''),
    'google_cloud_bucket' => secure(''),
    'google_cloud_file' => secure(''),
    'digitalocean_space_name' => secure(''),
    'digitalocean_space_region' => secure(''),
    'digitalocean_key' => secure(''),
    'digitalocean_secret' => secure(''),
    'wasabi_bucket' => secure(''),
    'wasabi_region' => secure(''),
    'wasabi_key' => secure(''),
    'wasabi_secret' => secure(''),
    'backblaze_bucket' => secure(''),
    'backblaze_region' => secure(''),
    'backblaze_key' => secure(''),
    'backblaze_secret' => secure(''),
    'ftp_hostname' => secure(''),
    'ftp_username' => secure(''),
    'ftp_password' => secure(''),
    'ftp_port' => secure(''),
    'ftp_path' => secure(''),
    'ftp_endpoint' => secure(''),
    'paypal_enabled' =>  '0',
    'paypal_mode' => secure(''),
    'paypal_id' => secure(''),
    'paypal_secret' => secure(''),
    'paypal_webhook' => secure(''),
    'creditcard_enabled' =>  '0',
    'alipay_enabled' =>  '0',
    'stripe_mode' => secure(''),
    'stripe_test_secret' => secure(''),
    'stripe_test_publishable' => secure(''),
    'stripe_live_secret' => secure(''),
    'stripe_live_publishable' => secure(''),
    'stripe_webhook' => secure(''),
    'paystack_enabled' =>  '0',
    'paystack_secret' => secure(''),
    'coinpayments_enabled' =>  '0',
    'coinpayments_merchant_id' => secure(''),
    'coinpayments_ipn_secret' => secure(''),
    '2checkout_enabled' =>  '0',
    '2checkout_mode' => secure(''),
    '2checkout_merchant_code' => secure(''),
    '2checkout_publishable_key' => secure(''),
    '2checkout_private_key' => secure(''),
    'razorpay_enabled' =>  '0',
    'razorpay_key_id' => secure(''),
    'razorpay_key_secret' => secure(''),
    'cashfree_enabled' =>  '0',
    'cashfree_mode' => secure(''),
    'cashfree_client_id' => secure(''),
    'cashfree_client_secret' => secure(''),
    'coinbase_enabled' =>  '0',
    'coinbase_api_key' => secure(''),
    'securionpay_enabled' =>  '0',
    'securionpay_api_key' => secure(''),
    'securionpay_api_secret' => secure(''),
    'moneypoolscash_enabled' =>  '0',
    'moneypoolscash_api_key' => secure(''),
    'moneypoolscash_merchant_email' => secure(''),
    'moneypoolscash_merchant_password' => secure(''),
    'bank_transfers_enabled' => secure('0'),
    'bank_name' => secure(''),
    'bank_account_number' => secure(''),
    'bank_account_name' => secure(''),
    'bank_account_routing' => secure(''),
    'bank_account_country' => secure(''),
    'reCAPTCHA_enabled' => secure('0'),
    'reCAPTCHA_site_key' => secure(''),
    'reCAPTCHA_secret_key' => secure(''),
    'analytics_code' => secure(''),
    'ads_enabled' => secure('0'),
    'wallet_enabled' => secure('0'),
    'wallet_enabled' => secure('0'),
    'packages_enabled' => secure('0'),
    'affiliates_enabled' => secure('0'),
    'affiliates_enabled' => secure('0'),
    'points_enabled' => secure('0'),
    'market_enabled' => secure('0'),
    'funding_enabled' => secure('0'),
    'monetization_enabled' => secure('0'),
    'tips_enabled' => secure('0'),
    'developers_apps_enabled' => secure('0'),
    'developers_share_enabled' => secure('0'),
    'auto_friend' => secure('0'),
    'auto_friend_users' => secure(''),
    'auto_follow' => secure('0'),
    'auto_follow_users' => secure(''),
    'auto_like' => secure('0'),
    'auto_like_pages' => secure(''),
    'auto_join' => secure('0'),
    'auto_join_groups' => secure(''),
    'last_backup_time' => secure(''),
  ]);

  // return & exit
  return_json();
} catch (Exception $e) {
  modal("ERROR", __("Error"), $e->getMessage());
}
