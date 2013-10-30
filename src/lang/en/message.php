<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: lang/en/message.php 30384 2013-10-27 0:09 sisi wu $
 */

$lang = array (

  'undefined_action' => 'Undefined Action.',

  'location_login' => '',
  'location_login_succeed_mobile' => 'Welcome back，{username}. Click to enter the pre-login page.',
  'location_login_succeed' => '',
  'login_succeed_inactive_member' => 'Welcome back,{usergroup} {username}. Your account is not active, now send you to the Control Panel.',
  'login_question_empty' => 'Please chose the Security Quesion and fill in the Correct Answer.',
  'login_question_invalid' => 'Sorry, Wrong answer to the Security Question.',
  'login_invalid' => 'Login failed, you can try another {loginperm} times.',
  'login_password_invalid' => 'Sorry, Invalid password.',
  'register_disable' => 'Sorry, new user registration prohibited at current time.',
  'register_disable_activation' => 'Sorry, activation prohibited at current time.',
  'register_email_send_succeed' => 'Thanks for your registration {bbname},.<br />System has sent you an email with a registration link, check your mailbox to get the link which will send you to the next step.<br />If you have not received the registration message yet, please check the mail in Trash, as the registration message might be recognized as spam message because of the email filtering.',
  'not_open_registration_invite' => 'Sorry, we only take the registration with invitation code at current time.',
  'register_rules_agree' => 'Must agree to the terms of service to complete registration.',
  'register_activation_message' => 'Sorry, the user name you entered "{username}" already exists, please login to activate the account.',
  'profile_password_tooshort' => 'Too short for the password length, at least {pwlength} characters.',
  'profile_required_info_invalid' => 'Sorry, you have not completed the required items or you have filled them in wrong format.',
  'register_ctrl' => 'Sorry, your IP adress cannot register in {regctrl} hours.',
  'register_flood_ctrl' => 'Sorry, your IP adress can only register {regfloodctrl} times in 24 hours.',
  'profile_uid_duplicate' => 'Sorry, user\'s ID "{uid}" exists.',
  'register_email_verify' => 'Thanks for your registration {bbname}.<br />System has sent you an verification message, check your mailbox and activate your account.',
  'register_email_verify_location' => '<a href="home.php?mod=spacecp&ac=profile&op=password">Send the verification message again.</a> <a href="home.php?mod=space&do=home">Getting Around</a>',
  'register_manual_verify' => 'Thanks for your registration, as we use manual verification to verify the user, your request is awaiting moderation, please wait.',
  'register_manual_verify_location' => '<a href="home.php?mod=space&do=home">Getting Around</a>',
  'register_succeed' => 'Thanks for your registration {bbname}, now you will login as {usergroup}.',
  'register_succeed_location' => '<a href="home.php?mod=spacecp">Perfect Information Now</a> <a href="home.php?mod=space&do=home">Getting Around</a>',

  'board_closed' => 'Sorry, Site temporarily closed,for more information <a href="mailto:{adminemail}">Contact Administrator</a>.',

  'admin_cpanel_noaccess' => 'Sorry, you donnot have the permission to access the Control Panel. Please re-login and try again.',
  'admin_cpanel_locked' => 'Sorry, Control Panel has been locked as you have tried too many times in entering valid password.<br /><br />Control Panel will be unlocked at  <strong>{unlocktime}</strong>',

  'submit_secqaa_invalid' => 'Sorry, wrong answer to verification question.',
  'post_url_nopermission' => 'Sorry, you donnot have the permission to post URL connecion.',

  'not_in_mobile' => 'The page you\'re viewing doesn\'t have a mobile version, you may view the computer version? ',
  
  'need_activate' => 'Your account need to be activated to next step! ',
  
  'now_building' => 'Constructing…',

  'permission_error' => 'You donnot have the permission to perform the operation. If you have not logged in, please log in first!',
  'comment_add_error' => 'Failed to add the comment!',
  'user_info_error' => 'Invalid User Information!',
  'reset_password_error' => 'Failed to reset the password! Please send another email to reset your password as soon as possible!。',
  'reset_password_success' => 'Successfully reset the password! Please re-login.',
  'change_password_success' => 'Successfully modify the password! Please re-login.',
  
  'password_reset_email_send_succeed' => 'System has sent you a email with a link to reset the password, check your mailbox to get the password-resetting link and it will take you to next step.',

  'email_is_activated' => 'The email address has been activated.',
  'email_is_not_activated' => 'User\'s email address has not been activated.',
  
  'antiactivate_email_send_succeed' => 'System has sent you an email with a link to the address of anti-activation, check your mailbox to get the anti-activation link and it will take you to next step.',
  'antiactivate_invalid' => 'Sorry, anti-activation failed, please re-login to verify the user needs anti-activation.',

  'invalid_image' => 'Invalid image file.',

  'send_msg_succeed' => 'Successfully send the message.',
  'send_msg_error' => 'Failed to send the message.',
  'send_msg_error_nouser' => 'Failed to send the message, user does not exist.',
  'send_msg_error_toolong' => 'Failed to send the message, the message is too long.'
);

?>