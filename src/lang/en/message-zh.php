<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: lang/message.php 30384 2013-10-24 23:41 tengattack $
 */

$lang = array (

  'undefined_action' => '未定义操作',

  'location_login' => '',
  'location_login_succeed_mobile' => '欢迎您回来，{username}。点击进入登录前页面',
  'location_login_succeed' => '',
  'login_succeed_inactive_member' => '欢迎您回来，{usergroup} {username}。您的帐号处于非激活状态，现在将转入控制面板',
  'login_question_empty' => '请选择安全提问以及填写正确的答案',
  'login_question_invalid' => '抱歉，安全提问答案填写错误',
  'login_invalid' => '登录失败，您还可以尝试 {loginperm} 次',
  'login_password_invalid' => '抱歉，您输入的密码有误',
  'register_disable' => '抱歉，目前站点禁止新用户注册',
  'register_disable_activation' => '抱歉，目前站点禁止激活',
  'register_email_send_succeed' => '感谢您注册 {bbname}，<br />系统给您发送了一封带有注册地址的邮件，快去登录邮箱获取注册链接进行下一步注册吧<br />如果仍未收到注册邮件，可能是因为邮件被过滤，您需要检查一下邮箱中的垃圾箱',
  'not_open_registration_invite' => '抱歉，本站目前暂时不允许用户直接注册，需要有效的邀请码才能注册',
  'register_rules_agree' => '您必须同意服务条款后才能注册',
  'register_activation_message' => '抱歉，您输入的用户名 "{username}" 已存在，请登录站点激活此帐号',
  'profile_password_tooshort' => '密码太短了，至少要{pwlength}个字符',
  'profile_required_info_invalid' => '抱歉，您尚未填写必填项目或必填项目格式不正确',
  'register_ctrl' => '抱歉，您的 IP 地址在 {regctrl} 小时内无法注册',
  'register_flood_ctrl' => '抱歉，IP 地址在 24 小时内只能注册 {regfloodctrl} 次',
  'profile_uid_duplicate' => '抱歉，用户 ID {uid} 已被占用',
  'register_email_verify' => '感谢您注册 {bbname}，<br />系统给您发送了一封激活邮件，快去登录邮箱激活账号吧',
  'register_email_verify_location' => '<a href="home.php?mod=spacecp&ac=profile&op=password">重新接收验证邮件</a> <a href="home.php?mod=space&do=home">先去逛逛</a>',
  'register_manual_verify' => '感谢您的注册，站点开启了人工验证注册用户，请等待审核',
  'register_manual_verify_location' => '<a href="home.php?mod=space&do=home">先去逛逛</a>',
  'register_succeed' => '感谢您注册 {bbname}，现在将以 {usergroup} 身份登录站点',
  'register_succeed_location' => '<a href="home.php?mod=spacecp">现在去完善资料</a> <a href="home.php?mod=space&do=home">先去逛逛</a>',

  'board_closed' => '抱歉，本站点暂时关闭，详情请 <a href="mailto:{adminemail}">联系管理员</a>',

  'admin_cpanel_noaccess' => '抱歉，您没有权限访问管理面板，请重新登录站点，然后重试',
  'admin_cpanel_locked' => '抱歉，由于密码尝试次数过多，管理面板已锁定 <br /><br />管理版面将于 <strong>{unlocktime}</strong> 解除锁定',

  'submit_secqaa_invalid' => '抱歉，验证问答填写错误',
  'post_url_nopermission' => '抱歉，您没有权限发表 URL 连接',

  'not_in_mobile' => '您访问的页面无手机页面，是否进一步访问电脑版？',
  
  'need_activate' => '您的账号需要先激活才能进行下一步操作！',
  
  'now_building' => '建设中……',
  'scene_not_found' => '没有找到该场景！',
  'story_no_scene' => '该故事中没有场景！',
  'permission_error' => '您没有权限执行该操作！如果未登录，请先登录！',
  'comment_add_error' => '添加评论失败！',
  'user_info_error' => '错误的用户信息！',
  'reset_password_error' => '重设用户密码失败！请尝试重新发送一封密码重设邮件，并尽快重设密码。',
  'reset_password_success' => '重设用户密码成功！请重新登录。',
  'change_password_success' => '修改用户密码成功！请重新登录。',
  
  'password_reset_email_send_succeed' => '系统给您发送了一封带有密码重设地址的邮件，快去登录邮箱获取密码重设链接进行下一步操作吧！',

  'email_is_activated' => '该email地址已经被激活。',
  'email_is_not_activated' => '用户email地址未被激活。',
  
  'antiactivate_email_send_succeed' => '系统给您发送了一封带有反激活地址的邮件，快去登录邮箱获取反激活链接进行下一步操作吧',
  'antiactivate_invalid' => '抱歉，反激活失败，请重新登录验证需要反激活的用户',

  'invalid_image' => '错误的图片文件',

  'send_msg_succeed' => '发送消息成功',
  'send_msg_error' => '发送消息失败',
  'send_msg_error_nouser' => '发送消息失败，不存在该用户',
  'send_msg_error_toolong' => '发送消息失败，您输入的消息太长'
);

?>