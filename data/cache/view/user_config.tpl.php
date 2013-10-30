<!DOCTYPE html>

<html>
  <head>
    <meta charset='utf-8'>
    <?php if($navtitle) { ?>
      <title>
        <?php echo htmlspecialchars($navtitle) ?> - <?php echo htmlspecialchars($_G['setting']['sitename']) ?>
      </title>
    <?php } else { ?>
      <title>
        <?php echo htmlspecialchars($_G['setting']['sitename']) ?>
      </title>
    <?php } ?>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='keywords' content='BioMiao,SUSTC'>
    <meta name='description' content='BioMiao'>
    <link rel='shortcut icon' href='/favicon.ico'>
    <link rel='stylesheet' href='<?php echo '/static/css/all.min.css?v=' . $_G['version']['css'] . '' ?>'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700' type='text/css'>
    
    <!--[if lt IE 9]>
    <script src='/static/js/html5shiv.js'>
    </script>
    <![endif]-->
  </head>
  <body id='example'>
    <div class='ui fixed transparent inverted main menu'>
      <div class='container'>
        <a href='#' class='brand'>
          <?php echo htmlspecialchars($_G['setting']['sitename']) ?>
        </a>
        <div class='right menu'>
          <?php if($_G['uid']) { ?>
            <div href='/user' class='ui dropdown link item <?php echo is_array(($_G['basescript'] == 'user' ? 'active' : '')) ? implode(" ", ($_G['basescript'] == 'user' ? 'active' : '')) : ($_G['basescript'] == 'user' ? 'active' : '') ?>'>
              <div class='user-avatar small img-rounded'>
                <img src='/static/img/user/def-avatar.png'>
              </div>
              <?php echo htmlspecialchars($_G['username']) ?>
              <i class='icon dropdown'>
              </i>
              <div class='menu'>
                <a href='/user' class='item'>
                  Profile
                </a>
                <a href='/user/activity' class='item'>
                  Activity
                </a>
                <div class='item divider'>
                </div>
                <a href='/user/settings' class='item'>
                  Settings
                </a>
                <div class='item divider'>
                </div>
                <a href='<?php echo '/user/logout?formhash=' . $_G['formhash'] . '' ?>' class='item'>
                  Logout
                </a>
              </div>
            </div>
          <?php } else { ?>
            <a href='<?php echo '/user/signin?t=' . $_G['timestamp'] . '' ?>' class='item icon <?php echo is_array(($_G['basescript'] == 'user' ? 'active' : '')) ? implode(" ", ($_G['basescript'] == 'user' ? 'active' : '')) : ($_G['basescript'] == 'user' ? 'active' : '') ?>'>
              <i class='icon user'>
              </i>
              Sign in
            </a>
          <?php } ?>
        </div>
        <a href='/' class='item icon <?php echo is_array(($_G['basescript'] == 'index' ? 'active' : '')) ? implode(" ", ($_G['basescript'] == 'index' ? 'active' : '')) : ($_G['basescript'] == 'index' ? 'active' : '') ?>'>
          <i class='icon home'>
          </i>
          Home
        </a>
        <a href='/circuit' class='item <?php echo is_array(($_G['basescript'] == 'circuit' ? 'active' : '')) ? implode(" ", ($_G['basescript'] == 'circuit' ? 'active' : '')) : ($_G['basescript'] == 'circuit' ? 'active' : '') ?>'>
          Circuit
        </a>
        <a href='/page/apis' class='item <?php echo is_array((($_G['basescript'] == 'page' && CURMODULE == 'apis') ? 'active' : '')) ? implode(" ", (($_G['basescript'] == 'page' && CURMODULE == 'apis') ? 'active' : '')) : (($_G['basescript'] == 'page' && CURMODULE == 'apis') ? 'active' : '') ?>'>
          APIs
        </a>
        <a href='/page/tutorial' class='item <?php echo is_array((($_G['basescript'] == 'page' && CURMODULE == 'tutorial') ? 'active' : '')) ? implode(" ", (($_G['basescript'] == 'page' && CURMODULE == 'tutorial') ? 'active' : '')) : (($_G['basescript'] == 'page' && CURMODULE == 'tutorial') ? 'active' : '') ?>'>
          Tutorial
        </a>
      </div>
    </div>
    <div class='header'>
      <div class='user-header segment'>
        <div class='user-cover'>
          <div class='user-info-shadow'>
          </div>
          <div class='user-info'>
            <div class='user-info-bar'>
              <div class='user-info-block'>
                <div class='user-avatar img-rounded'>
                  <?php if($_G['member']['avatar_url']) { ?>
                    <img src='<?php echo $_G['member']['avatar_url'] ?>'>
                  <?php } else { ?>
                    <img src='/static/img/user/def-avatar.png'>
                  <?php } ?>
                </div>
                <div class='user-text'>
                  <div class='user-text-block'>
                    <div class='user-name'>
                      <?php echo htmlspecialchars($_G['member']['username']) ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class='user-nav-tabs'>
          <div class='ui secondary pointing menu'>
            <a href='/user' class='active item'>
              <i class='user icon'>
              </i>
              Profile
            </a>
            <a href='/user/settings' class='item'>
              <i class='settings icon'>
              </i>
              Settings
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class='main container <?php echo is_array($_G['basescript']) ? implode(" ", $_G['basescript']) : $_G['basescript'] ?>'>
      <div class='user-form'>
        <div class='header'>
          <ul class='breadcrumb'>
            <li>
              <i class='icon-home'>
              </i>
               
              <a href='/'>
                <?php 
                $__=isset($lang->title) ? $lang->title : ((!is_object($lang))?($lang['title']):'');
                $__=isset($__->index) ? $__->index : ((!is_object($__))?($__['index']):'');
                echo htmlspecialchars($__)
                 ?>
              </a>
              <span class='divider'>
                /
              </span>
            </li>
            <li>
              <a href='/user'>
                <?php 
                $__=isset($lang->title) ? $lang->title : ((!is_object($lang))?($lang['title']):'');
                $__=isset($__->user) ? $__->user : ((!is_object($__))?($__['user']):'');
                $__=isset($__->index) ? $__->index : ((!is_object($__))?($__['index']):'');
                echo htmlspecialchars($__)
                 ?>
              </a>
              <span class='divider'>
                /
              </span>
            </li>
            <li class='active'>
              <?php 
              $__=isset($lang->user) ? $lang->user : ((!is_object($lang))?($lang['user']):'');
              $__=isset($__->config) ? $__->config : ((!is_object($__))?($__['config']):'');
              echo htmlspecialchars($__)
               ?>
            </li>
          </ul>
        </div>
        <div class='inner'>
          <form id='user_config_form' enctype='multipart/form-data' method='POST' action='/user/config' class='form-horizontal'>
            <div style='display:none'>
              <input type='hidden' name='csrf' value='<?php $__=isset($user->csrf) ? $user->csrf : ((!is_object($user))?($user['csrf']):'');echo $__ ?>'>
            </div>
            <div id='error_image_tips' style='display:none' class='alert alert-block'>
              <button type='button' onclick='$(this).parent().hide();' class='close'>
                &times;
              </button>
              <h4>
                <?php 
                $__=isset($lang->info) ? $lang->info : ((!is_object($lang))?($lang['info']):'');
                $__=isset($__->oops) ? $__->oops : ((!is_object($__))?($__['oops']):'');
                echo htmlspecialchars($__)
                 ?>
              </h4>
              <?php 
              $__=isset($lang->user) ? $lang->user : ((!is_object($lang))?($lang['user']):'');
              $__=isset($__->input_error) ? $__->input_error : ((!is_object($__))?($__['input_error']):'');
              $__=isset($__->image_ext) ? $__->image_ext : ((!is_object($__))?($__['image_ext']):'');
              echo htmlspecialchars($__)
               ?>
            </div>
            <?php 
            $__=isset($err->avatar_file) ? $err->avatar_file : ((!is_object($err))?($err['avatar_file']):'');
            if($__) {
             ?>
              <div class='alert alert-block alert-error'>
                <button type='button' data-dismiss='alert' class='close'>
                  &times;
                </button>
                <h4>
                  <?php 
                  $__=isset($lang->info) ? $lang->info : ((!is_object($lang))?($lang['info']):'');
                  $__=isset($__->error) ? $__->error : ((!is_object($__))?($__['error']):'');
                  echo htmlspecialchars($__)
                   ?>
                </h4>
                <?php 
                $__=isset($lang->user) ? $lang->user : ((!is_object($lang))?($lang['user']):'');
                $__=isset($__->input_error) ? $__->input_error : ((!is_object($__))?($__['input_error']):'');
                $__=isset($__->avatar_file) ? $__->avatar_file : ((!is_object($__))?($__['avatar_file']):'');
                echo htmlspecialchars($__)
                 ?>
              </div>
            <?php 
            $__=isset($err->front_cover_file) ? $err->front_cover_file : ((!is_object($err))?($err['front_cover_file']):'');
            } if($__) {
             ?>
              <div class='alert alert-block alert-error'>
                <button type='button' data-dismiss='alert' class='close'>
                  &times;
                </button>
                <h4>
                  <?php 
                  $__=isset($lang->info) ? $lang->info : ((!is_object($lang))?($lang['info']):'');
                  $__=isset($__->error) ? $__->error : ((!is_object($__))?($__['error']):'');
                  echo htmlspecialchars($__)
                   ?>
                </h4>
                <?php 
                $__=isset($lang->user) ? $lang->user : ((!is_object($lang))?($lang['user']):'');
                $__=isset($__->input_error) ? $__->input_error : ((!is_object($__))?($__['input_error']):'');
                $__=isset($__->front_cover_file) ? $__->front_cover_file : ((!is_object($__))?($__['front_cover_file']):'');
                echo htmlspecialchars($__)
                 ?>
              </div>
            <?php 
            $__=isset($err->msg) ? $err->msg : ((!is_object($err))?($err['msg']):'');
            } if($__) {
             ?>
              <div class='alert alert-block alert-error'>
                <button type='button' data-dismiss='alert' class='close'>
                  &times;
                </button>
                <h4>
                  <?php 
                  $__=isset($lang->info) ? $lang->info : ((!is_object($lang))?($lang['info']):'');
                  $__=isset($__->error) ? $__->error : ((!is_object($__))?($__['error']):'');
                  echo htmlspecialchars($__)
                   ?>
                </h4>
                <?php 
                $__=isset($err->msg) ? $err->msg : ((!is_object($err))?($err['msg']):'');
                echo htmlspecialchars($__)
                 ?>
              </div>
            <?php 
            $__=isset($err->success) ? $err->success : ((!is_object($err))?($err['success']):'');
            } if($__) {
             ?>
              <div class='alert alert-block alert-success'>
                <button type='button' data-dismiss='alert' class='close'>
                  &times;
                </button>
                <h4>
                  <?php 
                  $__=isset($lang->info) ? $lang->info : ((!is_object($lang))?($lang['info']):'');
                  $__=isset($__->success) ? $__->success : ((!is_object($__))?($__['success']):'');
                  echo htmlspecialchars($__)
                   ?>
                </h4>
                <?php 
                $__=isset($lang->user) ? $lang->user : ((!is_object($lang))?($lang['user']):'');
                $__=isset($__->input_tips) ? $__->input_tips : ((!is_object($__))?($__['input_tips']):'');
                $__=isset($__->change_success) ? $__->change_success : ((!is_object($__))?($__['change_success']):'');
                echo htmlspecialchars($__)
                 ?>
              </div>
            <?php } ?>
            <fieldset id='user-avatar-controls' class='control-group'>
              <label for='user_avatar_file' class='control-label'>
                <?php 
                $__=isset($lang->user) ? $lang->user : ((!is_object($lang))?($lang['user']):'');
                $__=isset($__->avatar) ? $__->avatar : ((!is_object($__))?($__['avatar']):'');
                echo htmlspecialchars($__)
                 ?>
              </label>
              <div class='controls'>
                <div class='uploader-avatar clearfix'>
                  <div class='user-avatar size73'>
                    <?php 
                    $__=isset($user->avatar_resource_id > 0) ? $user->avatar_resource_id > 0 : ((!is_object($user))?($user['avatar_resource_id > 0']):'');
                    if($__) {
                     ?>
                      <img id='avatar_preview' src='<?php $__=isset($resurl[user->avatar_resource_id) ? $resurl[user->avatar_resource_id : ((!is_object($resurl[user))?($resurl[user['avatar_resource_id']):'');echo $__] ?>' class='avatar'>
                    <?php } else { ?>
                      <img id='avatar_preview' src='/static/img/user/def-avatar.png' class='avatar'>
                    <?php } ?>
                  </div>
                  <div class='uploader-tools'>
                    <div class='photo-selector'>
                      <input id='user_avatar_file' type='file' name='user[avatar_file]' class='file-input'>
                      <button id='user_avatar' type='button' class='btn uploader-button'>
                        <?php 
                        $__=isset($lang->user) ? $lang->user : ((!is_object($lang))?($lang['user']):'');
                        $__=isset($__->change_avatar) ? $__->change_avatar : ((!is_object($__))?($__['change_avatar']):'');
                        echo htmlspecialchars($__)
                         ?>
                      </button>
                      <span id='user_avatar_file_path' class='file-path'>
                      </span>
                      <p>
                        <?php 
                        $__=isset($lang->user) ? $lang->user : ((!is_object($lang))?($lang['user']):'');
                        $__=isset($__->input_tips) ? $__->input_tips : ((!is_object($__))?($__['input_tips']):'');
                        $__=isset($__->change_avatar) ? $__->change_avatar : ((!is_object($__))?($__['change_avatar']):'');
                        echo htmlspecialchars($__)
                         ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </fieldset>
            <fieldset id='user-front-cover-controls' class='control-group'>
              <label for='user_front_cover_file' class='control-label'>
                <?php 
                $__=isset($lang->user) ? $lang->user : ((!is_object($lang))?($lang['user']):'');
                $__=isset($__->front_cover) ? $__->front_cover : ((!is_object($__))?($__['front_cover']):'');
                echo htmlspecialchars($__)
                 ?>
              </label>
              <div class='controls'>
                <div class='uploader-image clearfix'>
                  <?php 
                  $__=isset($user->front_cover_resource_id > 0) ? $user->front_cover_resource_id > 0 : ((!is_object($user))?($user['front_cover_resource_id > 0']):'');
                  if($__) {
                   ?>
                    <img id='front_cover_preview' src='<?php $__=isset($resurl[user->front_cover_resource_id) ? $resurl[user->front_cover_resource_id : ((!is_object($resurl[user))?($resurl[user['front_cover_resource_id']):'');echo $__] ?>' class='front-cover size73'>
                  <?php } else { ?>
                    <img id='front_cover_preview' src='/static/img/user/def-front-cover.jpg' class='front-cover size73'>
                  <?php } ?>
                  <div class='uploader-tools'>
                    <div class='photo-selector'>
                      <input id='user_front_cover_file' type='file' name='user[front_cover_file]' class='file-input'>
                      <button id='user_front_cover' type='button' class='btn uploader-button'>
                        <?php 
                        $__=isset($lang->user) ? $lang->user : ((!is_object($lang))?($lang['user']):'');
                        $__=isset($__->change_front_cover) ? $__->change_front_cover : ((!is_object($__))?($__['change_front_cover']):'');
                        echo htmlspecialchars($__)
                         ?>
                      </button>
                      <span id='user_front_cover_file_path' class='file-path'>
                      </span>
                      <p>
                        <?php 
                        $__=isset($lang->user) ? $lang->user : ((!is_object($lang))?($lang['user']):'');
                        $__=isset($__->input_tips) ? $__->input_tips : ((!is_object($__))?($__['input_tips']):'');
                        $__=isset($__->change_front_cover) ? $__->change_front_cover : ((!is_object($__))?($__['change_front_cover']):'');
                        echo htmlspecialchars($__)
                         ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </fieldset>
            <hr>
            <?php $clsname  = 'control-group'; ?>
            <?php 
            $__=isset($err->username) ? $err->username : ((!is_object($err))?($err['username']):'');
            if($__) {
             ?>
              <?php $clsname + = ' error'; ?>
            <?php } ?>
            <fieldset class='<?php echo is_array($clsname) ? implode(" ", $clsname) : $clsname ?>'>
              <label for='user_username' class='control-label'>
                <?php 
                $__=isset($lang->user) ? $lang->user : ((!is_object($lang))?($lang['user']):'');
                $__=isset($__->username) ? $__->username : ((!is_object($__))?($__['username']):'');
                echo htmlspecialchars($__)
                 ?>
              </label>
              <div class='controls'>
                <input id='user_username' maxlength='20' type='text' name='user[username]' value='<?php $__=isset($user->username) ? $user->username : ((!is_object($user))?($user['username']):'');echo $__ ?>'>
                <?php 
                $__=isset($err->username) ? $err->username : ((!is_object($err))?($err['username']):'');
                if($__) {
                 ?>
                  <span class='help-inline'>
                    <?php 
                    $__=isset($lang->user) ? $lang->user : ((!is_object($lang))?($lang['user']):'');
                    $__=isset($__->input_error) ? $__->input_error : ((!is_object($__))?($__['input_error']):'');
                    $__=isset($__->username) ? $__->username : ((!is_object($__))?($__['username']):'');
                    echo htmlspecialchars($__)
                     ?>
                  </span>
                <?php } ?>
                <p>
                  <?php 
                  $__=isset($lang->user) ? $lang->user : ((!is_object($lang))?($lang['user']):'');
                  $__=isset($__->input_tips) ? $__->input_tips : ((!is_object($__))?($__['input_tips']):'');
                  $__=isset($__->username) ? $__->username : ((!is_object($__))?($__['username']):'');
                  echo htmlspecialchars($__)
                   ?>
                </p>
              </div>
            </fieldset>
            <?php 
            $__=isset($!user->inpage) ? $!user->inpage : ((!is_object($!user))?($!user['inpage']):'');
            if($__) {
             ?>
              <fieldset class='control-group'>
                <label for='user_realname' class='control-label'>
                  <?php 
                  $__=isset($lang->user) ? $lang->user : ((!is_object($lang))?($lang['user']):'');
                  $__=isset($__->realname) ? $__->realname : ((!is_object($__))?($__['realname']):'');
                  echo htmlspecialchars($__)
                   ?>
                </label>
                <div class='controls'>
                  <input id='user_realname' maxlength='20' type='text' name='user[realname]' value='<?php $__=isset($user->realname) ? $user->realname : ((!is_object($user))?($user['realname']):'');echo $__ ?>' disabled='disabled'>
                  <p>
                    <?php 
                    $__=isset($lang->user) ? $lang->user : ((!is_object($lang))?($lang['user']):'');
                    $__=isset($__->input_tips) ? $__->input_tips : ((!is_object($__))?($__['input_tips']):'');
                    $__=isset($__->realname) ? $__->realname : ((!is_object($__))?($__['realname']):'');
                    echo htmlspecialchars($__)
                     ?>
                  </p>
                </div>
              </fieldset>
              <fieldset class='control-group'>
                <label for='user_studentid' class='control-label'>
                  <?php 
                  $__=isset($lang->user) ? $lang->user : ((!is_object($lang))?($lang['user']):'');
                  $__=isset($__->studentid) ? $__->studentid : ((!is_object($__))?($__['studentid']):'');
                  echo htmlspecialchars($__)
                   ?>
                </label>
                <div class='controls'>
                  <input id='user_studentid' maxlength='20' type='text' name='user[studentid]' value='<?php $__=isset($user->studentid) ? $user->studentid : ((!is_object($user))?($user['studentid']):'');echo $__ ?>' disabled='disabled'>
                  <p>
                    <?php 
                    $__=isset($lang->user) ? $lang->user : ((!is_object($lang))?($lang['user']):'');
                    $__=isset($__->input_tips) ? $__->input_tips : ((!is_object($__))?($__['input_tips']):'');
                    $__=isset($__->studentid) ? $__->studentid : ((!is_object($__))?($__['studentid']):'');
                    echo htmlspecialchars($__)
                     ?>
                  </p>
                </div>
              </fieldset>
            <?php } ?>
            <?php $clsname  = 'control-group'; ?>
            <?php 
            $__=isset($err->phonenumber) ? $err->phonenumber : ((!is_object($err))?($err['phonenumber']):'');
            if($__) {
             ?>
              <?php $clsname + = ' error'; ?>
            <?php } ?>
            <fieldset class='<?php echo is_array($clsname) ? implode(" ", $clsname) : $clsname ?>'>
              <label for='user_phonenumber' class='control-label'>
                <?php 
                $__=isset($lang->user) ? $lang->user : ((!is_object($lang))?($lang['user']):'');
                $__=isset($__->phonenumber) ? $__->phonenumber : ((!is_object($__))?($__['phonenumber']):'');
                echo htmlspecialchars($__)
                 ?>
              </label>
              <div class='controls'>
                <input id='user_phonenumber' maxlength='20' type='text' name='user[phonenumber]' value='<?php $__=isset($user->phonenumber) ? $user->phonenumber : ((!is_object($user))?($user['phonenumber']):'');echo $__ ?>'>
                <?php 
                $__=isset($err->phonenumber) ? $err->phonenumber : ((!is_object($err))?($err['phonenumber']):'');
                if($__) {
                 ?>
                  <span class='help-inline'>
                    <?php 
                    $__=isset($lang->user) ? $lang->user : ((!is_object($lang))?($lang['user']):'');
                    $__=isset($__->input_error) ? $__->input_error : ((!is_object($__))?($__['input_error']):'');
                    $__=isset($__->phonenumber) ? $__->phonenumber : ((!is_object($__))?($__['phonenumber']):'');
                    echo htmlspecialchars($__)
                     ?>
                  </span>
                <?php } ?>
              </div>
            </fieldset>
            <fieldset class='control-group'>
              <label for='user_bio' class='control-label'>
                <?php 
                $__=isset($lang->user) ? $lang->user : ((!is_object($lang))?($lang['user']):'');
                $__=isset($__->bio) ? $__->bio : ((!is_object($__))?($__['bio']):'');
                echo htmlspecialchars($__)
                 ?>
              </label>
              <div class='controls'>
                <textarea id='user_bio' name='user[bio]' class='input-xlarge'>
                  <?php 
                  $__=isset($user->bio) ? $user->bio : ((!is_object($user))?($user['bio']):'');
                  echo htmlspecialchars($__)
                   ?>
                </textarea>
                <p>
                  <?php 
                  $__=isset($lang->user) ? $lang->user : ((!is_object($lang))?($lang['user']):'');
                  $__=isset($__->input_tips) ? $__->input_tips : ((!is_object($__))?($__['input_tips']):'');
                  $__=isset($__->bio) ? $__->bio : ((!is_object($__))?($__['bio']):'');
                  echo htmlspecialchars($__)
                   ?>
                </p>
              </div>
            </fieldset>
            <?php 
            $__=isset($!user->inpage) ? $!user->inpage : ((!is_object($!user))?($!user['inpage']):'');
            if($__) {
             ?>
              <hr>
              <?php $clsname  = 'control-group'; ?>
              <?php 
              $__=isset($err->email) ? $err->email : ((!is_object($err))?($err['email']):'');
              if($__) {
               ?>
                <?php $clsname + = ' error'; ?>
              <?php } ?>
              <fieldset class='<?php echo is_array($clsname) ? implode(" ", $clsname) : $clsname ?>'>
                <label for='user_email' class='control-label'>
                  <?php 
                  $__=isset($lang->user) ? $lang->user : ((!is_object($lang))?($lang['user']):'');
                  $__=isset($__->email) ? $__->email : ((!is_object($__))?($__['email']):'');
                  echo htmlspecialchars($__)
                   ?>
                </label>
                <div class='controls'>
                  <input id='user_email' type='text' name='user[email]' autocomplete='off' value='<?php $__=isset($user->email) ? $user->email : ((!is_object($user))?($user['email']):'');echo $__ ?>'>
                  <?php 
                  $__=isset($err->email) ? $err->email : ((!is_object($err))?($err['email']):'');
                  if($__) {
                   ?>
                    <span class='help-inline'>
                      <?php 
                      $__=isset($lang->user) ? $lang->user : ((!is_object($lang))?($lang['user']):'');
                      $__=isset($__->input_error) ? $__->input_error : ((!is_object($__))?($__['input_error']):'');
                      $__=isset($__->email) ? $__->email : ((!is_object($__))?($__['email']):'');
                      echo htmlspecialchars($__)
                       ?>
                    </span>
                  <?php } ?>
                </div>
              </fieldset>
              <?php $clsname  = 'control-group'; ?>
              <?php 
              $__=isset($err->new_password) ? $err->new_password : ((!is_object($err))?($err['new_password']):'');
              if($__) {
               ?>
                <?php $clsname + = ' error'; ?>
              <?php } ?>
              <fieldset class='<?php echo is_array($clsname) ? implode(" ", $clsname) : $clsname ?>'>
                <label for='user_new_password' class='control-label'>
                  <?php 
                  $__=isset($lang->user) ? $lang->user : ((!is_object($lang))?($lang['user']):'');
                  $__=isset($__->new_password) ? $__->new_password : ((!is_object($__))?($__['new_password']):'');
                  echo htmlspecialchars($__)
                   ?>
                </label>
                <div class='controls'>
                  <input id='user_new_password' maxlength='36' type='password' name='user[new_password]' autocomplete='off' value=''>
                  <?php 
                  $__=isset($err->new_password) ? $err->new_password : ((!is_object($err))?($err['new_password']):'');
                  if($__) {
                   ?>
                    <span class='help-inline'>
                      <?php 
                      $__=isset($lang->user) ? $lang->user : ((!is_object($lang))?($lang['user']):'');
                      $__=isset($__->input_error) ? $__->input_error : ((!is_object($__))?($__['input_error']):'');
                      $__=isset($__->new_password) ? $__->new_password : ((!is_object($__))?($__['new_password']):'');
                      echo htmlspecialchars($__)
                       ?>
                    </span>
                  <?php } ?>
                </div>
              </fieldset>
              <fieldset class='control-group'>
                <label for='user_new_password_again' class='control-label'>
                  <?php 
                  $__=isset($lang->user) ? $lang->user : ((!is_object($lang))?($lang['user']):'');
                  $__=isset($__->new_password_again) ? $__->new_password_again : ((!is_object($__))?($__['new_password_again']):'');
                  echo htmlspecialchars($__)
                   ?>
                </label>
                <div class='controls'>
                  <input id='user_new_password_again' maxlength='36' type='password' name='user[new_password_again]' autocomplete='off' value=''>
                </div>
              </fieldset>
              <?php $clsname  = 'control-group'; ?>
              <?php 
              $__=isset($err->password) ? $err->password : ((!is_object($err))?($err['password']):'');
              if($__) {
               ?>
                <?php $clsname + = ' error'; ?>
              <?php } ?>
              <fieldset class='<?php echo is_array($clsname) ? implode(" ", $clsname) : $clsname ?>'>
                <label for='user_password' class='control-label'>
                  <?php 
                  $__=isset($lang->user) ? $lang->user : ((!is_object($lang))?($lang['user']):'');
                  $__=isset($__->ori_password) ? $__->ori_password : ((!is_object($__))?($__['ori_password']):'');
                  echo htmlspecialchars($__)
                   ?>
                </label>
                <div class='controls'>
                  <input id='user_password' maxlength='36' type='password' name='user[password]' autocomplete='off' value=''>
                  <?php 
                  $__=isset($err->password) ? $err->password : ((!is_object($err))?($err['password']):'');
                  if($__) {
                   ?>
                    <span class='help-inline'>
                      <?php 
                      $__=isset($lang->user) ? $lang->user : ((!is_object($lang))?($lang['user']):'');
                      $__=isset($__->input_error) ? $__->input_error : ((!is_object($__))?($__['input_error']):'');
                      $__=isset($__->password) ? $__->password : ((!is_object($__))?($__['password']):'');
                      echo htmlspecialchars($__)
                       ?>
                    </span>
                  <?php } ?>
                  <p>
                    <?php 
                    $__=isset($lang->user) ? $lang->user : ((!is_object($lang))?($lang['user']):'');
                    $__=isset($__->input_tips) ? $__->input_tips : ((!is_object($__))?($__['input_tips']):'');
                    $__=isset($__->ori_password) ? $__->ori_password : ((!is_object($__))?($__['ori_password']):'');
                    echo htmlspecialchars($__)
                     ?>
                  </p>
                </div>
              </fieldset>
            <?php } ?>
            <hr>
            <div class='form-actions'>
              <button id='config_save' type='submit' disabled='disabled' class='btn btn-primary'>
                <?php 
                $__=isset($lang->info) ? $lang->info : ((!is_object($lang))?($lang['info']):'');
                $__=isset($__->save) ? $__->save : ((!is_object($__))?($__['save']):'');
                echo htmlspecialchars($__)
                 ?>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    <div class='footer'>
      <div class='ui divider'>
      </div>
      <div class='ui divided horizontal footer link list'>
        <div class='item'>
          &copy; SUSTC-ShenZhen-B
        </div>
        <a href='/page/privacypolicy' class='item'>
          PrivacyPolicy
        </a>
        <a href='/page/about' class='item'>
          About
        </a>
        <a href='/page/thanks' class='item'>
          Thanks
        </a>
      </div>
    </div>
    <script src='<?php echo '/static/js/all.min.js?v=' . $_G['version']['js'] . '' ?>'>
    </script>
    
    <script type='text/javascript'>
       $(document).ready(function () {
         $menuDropdown = $('.ui.main.menu .dropdown');
         $menuDropdown.dropdown({
             on         : 'hover',
             action     : 'none'
         })
         ;
       });
       
       (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
       (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
       m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
       })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
       
       ga('create', 'UA-33507165-2', 'circuitplus.org');
       ga('send', 'pageview');
       
    </script>
  </body>
</html>
