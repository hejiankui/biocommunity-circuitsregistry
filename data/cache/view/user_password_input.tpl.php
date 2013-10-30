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
      <div class='segment'>
        <div class='container'>
          <div class='inverted pull-right'>
            <a href='/user/signin' class='ui blue large labeled button'>
              Sign in
            </a>
          </div>
          <div class='introduction'>
            <h1 class='ui dividing header'>
              Password Reset
            </h1>
            <p class='lead'>
              Get back to Circuit+
            </p>
          </div>
        </div>
      </div>
    </div>
    <div id='<?php echo (($_G['basescript'] == 'circuit') ? CURMODULE : '') ?>' class='main container <?php echo is_array($_G['basescript']) ? implode(" ", $_G['basescript']) : $_G['basescript'] ?>'>
      <div class='reset-board'>
        <form id='reset_form' autocomplete='on' action='/user/password/reset' method='POST' class='ui form segment'>
          <div class='field'>
            <a href='<?php echo '/user/' . $user['uid'] . '' ?>' target='_blank' class='ui image label'>
              <?php if($user['avatar_url']) { ?>
                <img src='<?php echo $user['avatar_url'] ?>'>
              <?php } else { ?>
                <img src='/static/img/user/def-avatar.png'>
              <?php } ?>
              <?php echo htmlspecialchars($user['username']) ?>
            </a>
          </div>
          <div style='display:none'>
            <input type='hidden' name='formhash' value='<?php echo $_G['formhash'] ?>'>
            <input type='hidden' name='hash' value='<?php echo $user['hash'] ?>'>
            <input type='hidden' name='uid' value='<?php echo $user['uid'] ?>'>
            <?php if($redirect_url) { ?>
              <input type='hidden' name='redirect_url' value='<?php echo $redirect_url ?>'>
            <?php } ?>
          </div>
          <div id='password' class='field <?php echo is_array(($err['password'] ? 'error' : '')) ? implode(" ", ($err['password'] ? 'error' : '')) : ($err['password'] ? 'error' : '') ?>'>
            <label>
              Password
            </label>
            <div class='ui left labeled icon input'>
              <input type='password' id='reset-password1' name='user[password1]' tabindex='2'>
              <i class='icon lock'>
              </i>
              <div class='ui corner label'>
                <i class='icon asterisk'>
                </i>
              </div>
            </div>
          </div>
          <div id='password' class='field <?php echo is_array(($err['password'] ? 'error' : '')) ? implode(" ", ($err['password'] ? 'error' : '')) : ($err['password'] ? 'error' : '') ?>'>
            <label>
              Repeat Password
            </label>
            <div class='ui left labeled icon input'>
              <input type='password' id='reset-password2' name='user[password2]' tabindex='2'>
              <i class='icon lock'>
              </i>
              <div class='ui corner label'>
                <i class='icon asterisk'>
                </i>
              </div>
            </div>
            <?php if($err['password']) { ?>
              <div class='ui red pointing above ui label'>
                <?php 
                $__=isset($err->msg) ? $err->msg : ((!is_object($err))?($err['msg']):'');
                echo htmlspecialchars($__)
                 ?>
              </div>
            <?php } ?>
          </div>
          <div id='btnsubmit' tabindex='3' onclick='check_reset();' class='ui blue submit button btn btn-primary'>
            Reset
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
    <script type='text/javascript'>
       function check_reset() {
         var form = $('#reset_form');
         var checkPass = true;
         
         var fieldPassword = form.find('.field#password');
         var inputPassword = fieldPassword.find('input');
         
         if (inputPassword.length != 2
           || !$(inputPassword[0]).val() || !$(inputPassword[1]).val()
           || $(inputPassword[0]).val() != $(inputPassword[1]).val()) {
           fieldPassword.addClass('error');
           checkPass = false;
         } else {
           fieldPassword.removeClass('error');
         }
         
         if (checkPass) {
           form.submit();
         }
       }
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
