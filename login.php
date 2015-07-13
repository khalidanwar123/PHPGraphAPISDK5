<?php
session_start();
define('FACEBOOK_SDK_V4_SRC_DIR', __DIR__ . '/facebook-sdk-v5/');
require_once FACEBOOK_SDK_V4_SRC_DIR . 'autoload.php';
$fb = new Facebook\Facebook([
  'app_id' => 'your_facebook_app_id',
  'app_secret' => 'your_facebook_app_secret',
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email','user_posts']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://localhost/fb-callback.php', $permissions);

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';