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
    <meta name='keywords' content='CircuitPlus,BioMiao,SUSTC'>
    <meta name='description' content='CircuitPlus'>
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
                <?php if($_G['member']['avatar_url']) { ?>
                  <img src='<?php echo $_G['member']['avatar_url'] ?>'>
                <?php } else { ?>
                  <img src='/static/img/user/def-avatar.png'>
                <?php } ?>
              </div>
              <?php echo htmlspecialchars($_G['username']) ?>
              <i class='icon dropdown'>
              </i>
              <div class='menu'>
                <a href='/user' class='icon item'>
                  <i class='user icon'>
                  </i>
                  Profile
                </a>
                <a href='/user/settings' class='icon item'>
                  <i class='settings icon'>
                  </i>
                  Settings
                </a>
                <div class='item divider'>
                </div>
                <a href='<?php echo '/user/logout?formhash=' . $_G['formhash'] . '' ?>' class='icon item'>
                  <i class='sign out icon'>
                  </i>
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
        <div href='/circuit' class='ui dropdown link item <?php echo is_array(($_G['basescript'] == 'circuit' ? 'active' : '')) ? implode(" ", ($_G['basescript'] == 'circuit' ? 'active' : '')) : ($_G['basescript'] == 'circuit' ? 'active' : '') ?>'>
          Circuit
          <i class='icon dropdown'>
          </i>
          <div class='menu'>
            <a href='/circuit' class='icon item'>
              <i class='list layout icon'>
              </i>
              List
            </a>
            <a href='/circuit/mindmap' class='icon item'>
              <i class='circle blank icon'>
              </i>
              Mindmap
            </a>
          </div>
        </div>
        <a href='/page/apis' class='desktop item <?php echo is_array((($_G['basescript'] == 'page' && CURMODULE == 'apis') ? 'active' : '')) ? implode(" ", (($_G['basescript'] == 'page' && CURMODULE == 'apis') ? 'active' : '')) : (($_G['basescript'] == 'page' && CURMODULE == 'apis') ? 'active' : '') ?>'>
          APIs
        </a>
        <a href='/page/tutorial' class='desktop item <?php echo is_array((($_G['basescript'] == 'page' && CURMODULE == 'tutorial') ? 'active' : '')) ? implode(" ", (($_G['basescript'] == 'page' && CURMODULE == 'tutorial') ? 'active' : '')) : (($_G['basescript'] == 'page' && CURMODULE == 'tutorial') ? 'active' : '') ?>'>
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
                  <?php if($user['avatar_url']) { ?>
                    <img src='<?php echo $user['avatar_url'] ?>'>
                  <?php } else { ?>
                    <img src='/static/img/user/def-avatar.png'>
                  <?php } ?>
                </div>
                <div class='user-text'>
                  <div class='user-text-block'>
                    <div class='user-name'>
                      <?php echo htmlspecialchars($user['username']) ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class='user-nav-tabs'>
          <div class='ui secondary pointing menu'>
            <a href='/user' class='item <?php echo is_array((($_G['basescript'] == 'user' && CURMODULE == 'index') ? 'active' : '')) ? implode(" ", (($_G['basescript'] == 'user' && CURMODULE == 'index') ? 'active' : '')) : (($_G['basescript'] == 'user' && CURMODULE == 'index') ? 'active' : '') ?>'>
              <i class='user icon'>
              </i>
              Profile
            </a>
            <?php if($_G['uid'] == $user['uid']) { ?>
              <a href='/user/settings' class='item <?php echo is_array((($_G['basescript'] == 'user' && CURMODULE == 'settings') ? 'active' : '')) ? implode(" ", (($_G['basescript'] == 'user' && CURMODULE == 'settings') ? 'active' : '')) : (($_G['basescript'] == 'user' && CURMODULE == 'settings') ? 'active' : '') ?>'>
                <i class='settings icon'>
                </i>
                Settings
              </a>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <div id='<?php echo (($_G['basescript'] == 'circuit') ? CURMODULE : '') ?>' class='main container <?php echo is_array($_G['basescript']) ? implode(" ", $_G['basescript']) : $_G['basescript'] ?>'>
      <div class='user-form'>
        <form id='user_settings_form' enctype='multipart/form-data' method='POST' action='/user/settings/submit' class='ui form raised segment'>
          <div style='display:none'>
            <input type='hidden' name='formhash' value='<?php echo $_G['formhash'] ?>'>
          </div>
          <div id='error_image_tips' style='display:none' class='ui error message'>
            <i type='button' onclick='$(this).parent().hide();' class='close icon'>
            </i>
            <div class='header'>
              Oops
            </div>
            <p>
              Unsupported image format
            </p>
          </div>
          <?php if($err['avatar_file']) { ?>
            <div class='ui error message'>
              <i type='button' onclick='$(this).parent().remove();' class='close icon'>
              </i>
              <div class='header'>
                Error
              </div>
              <p>
                user.input_error.avatar_file
              </p>
            </div>
          <?php } if($err['msg']) { ?>
            <div class='ui error message'>
              <i type='button' onclick='$(this).parent().remove();' class='close icon'>
              </i>
              <div class='header'>
                Error
              </div>
              <p>
                <?php echo htmlspecialchars($err['msg']) ?>
              </p>
            </div>
          <?php } if($err['success']) { ?>
            <div class='ui error message'>
              <i type='button' onclick='$(this).parent().remove();' class='close icon'>
              </i>
              <div class='header'>
                Success
              </div>
              <p>
                user.input_tips.change_success
              </p>
            </div>
          <?php } ?>
          <div class='ui teal ribbon label'>
            Avatar
          </div>
          <div id='user-avatar-controls' class='example field'>
            <div class='controls'>
              <div class='uploader-avatar clearfix'>
                <div class='user-avatar size73'>
                  <?php if($user['avatar_url']) { ?>
                    <img id='avatar_preview' src='<?php echo $user['avatar_url'] ?>' class='avatar'>
                  <?php } else { ?>
                    <img id='avatar_preview' src='/static/img/user/def-avatar.png' class='avatar'>
                  <?php } ?>
                </div>
                <div class='uploader-tools'>
                  <div class='photo-selector'>
                    <input id='user_avatar_file' type='file' name='avatar_file' class='file-input'>
                    <button id='user_avatar' type='button' class='ui teal button uploader-button'>
                      Change Avatar
                    </button>
                    <span id='user_avatar_file_path' class='file-path'>
                    </span>
                    <p>
                      Change your avatar.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class='ui ribbon label'>
            Username
          </div>
          <div class='example field <?php echo is_array(($err['username'] ? 'error' : '')) ? implode(" ", ($err['username'] ? 'error' : '')) : ($err['username'] ? 'error' : '') ?>'>
            <div class='ui left labeled icon input'>
              <input id='user_username' maxlength='20' type='text' name='user[username]' value='<?php echo $user['username'] ?>' disabled='disabled'>
              <i class='user icon'>
              </i>
              <?php if($err['username']) { ?>
                <div class='ui red pointing above ui label'>
                  user.input_error.username
                </div>
              <?php } ?>
              <p>
                You can't change your username.
              </p>
            </div>
          </div>
          <div class='ui ribbon label'>
            Email
          </div>
          <div class='example field <?php echo is_array(($err['email'] ? 'error' : '')) ? implode(" ", ($err['email'] ? 'error' : '')) : ($err['email'] ? 'error' : '') ?>'>
            <div class='ui left labeled icon input'>
              <input id='user_email' maxlength='20' type='text' name='user[email]' value='<?php echo $user['email'] ?>' disabled='disabled'>
              <i class='mail icon'>
              </i>
              <?php if($err['email']) { ?>
                <div class='ui red pointing above ui label'>
                  user.input_error.email
                </div>
              <?php } ?>
              <p>
                You can't change your email.
              </p>
            </div>
          </div>
          <div class='ui ribbon label'>
            Realname
          </div>
          <div class='example field'>
            <div class='ui left labeled icon input'>
              <input id='user_realname' maxlength='20' type='text' name='user[realname]' value='<?php echo $user['profile']['realname'] ?>'>
              <i class='user icon'>
              </i>
              <p>
                We won't tell others your realname without your permit.
              </p>
            </div>
          </div>
          <div class='ui ribbon label'>
            Phonenumber
          </div>
          <div class='example field <?php echo is_array(($err['telephone'] ? 'error' : '')) ? implode(" ", ($err['telephone'] ? 'error' : '')) : ($err['telephone'] ? 'error' : '') ?>'>
            <div class='ui left labeled icon input'>
              <input id='user_phonenumber' maxlength='20' type='text' name='user[phonenumber]' value='<?php echo $user['profile']['telephone'] ?>'>
              <i class='mobile icon'>
              </i>
              <?php if($err['phonenumber']) { ?>
                <div class='ui red pointing above ui label'>
                  user.input_error.phonenumber
                </div>
              <?php } ?>
            </div>
          </div>
          <div class='ui ribbon label'>
            Bio
          </div>
          <div class='example field'>
            <textarea id='user_bio' name='user[bio]' class='input-xlarge'>
              <?php echo htmlspecialchars($user['profile']['bio']) ?>
            </textarea>
          </div>
          <div class='ui red ribbon label'>
            Password
          </div>
          <div class='example field'>
            <div class='field <?php echo is_array(($err['new_password'] ? 'error' : '')) ? implode(" ", ($err['new_password'] ? 'error' : '')) : ($err['new_password'] ? 'error' : '') ?>'>
              <label>
                New Password
              </label>
              <div class='ui left labeled icon input'>
                <input id='user_new_password' maxlength='36' type='password' name='user[new_password]' autocomplete='off' value=''>
                <i class='lock icon'>
                </i>
                <?php if($err['new_password']) { ?>
                  <div class='ui red pointing above ui label'>
                    user.input_error.new_password
                  </div>
                <?php } ?>
              </div>
            </div>
            <div class='field'>
              <label>
                Repeat New Password
              </label>
              <div class='ui left labeled icon input'>
                <input id='user_new_password_again' maxlength='36' type='password' name='user[new_password_again]' autocomplete='off' value=''>
                <i class='lock icon'>
                </i>
              </div>
            </div>
            <div class='field <?php echo is_array(($err['password'] ? 'error' : '')) ? implode(" ", ($err['password'] ? 'error' : '')) : ($err['password'] ? 'error' : '') ?>'>
              <label>
                Current Password
              </label>
              <div class='ui left labeled icon input'>
                <input id='user_password' maxlength='36' type='password' name='user[password]' autocomplete='off' value=''>
                <i class='lock icon'>
                </i>
                <?php if($err['password']) { ?>
                  <div class='ui red pointing above ui label'>
                    user.input_error.password
                  </div>
                <?php } ?>
                <p>
                  You need to type your current password only if you want to change password.
                </p>
              </div>
            </div>
          </div>
          <div class='form-actions'>
            <button id='settings_save' type='submit' disabled='disabled' class='ui blue disabled submit button'>
              Save
            </button>
          </div>
        </form>
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
    <script src='<?php echo '/static/js/user-settings.js?v=' . $_G['version']['js'] . '' ?>'>
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
