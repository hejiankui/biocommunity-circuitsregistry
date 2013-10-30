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
      <div id='overview' class='segment'>
        <div class='container'>
          <div class='introduction'>
            <h1 class='ui dividing header'>
              <?php echo htmlspecialchars($title) ?>
            </h1>
          </div>
        </div>
      </div>
    </div>
    <div id='<?php echo (($_G['basescript'] == 'circuit') ? CURMODULE : '') ?>' class='main container <?php echo is_array($_G['basescript']) ? implode(" ", $_G['basescript']) : $_G['basescript'] ?>'>
      <div class='ui attached message'>
        <div class='ui breadcrumb'>
          <a href='/' class='section'>
            <i class='icon home'>
            </i>
            Home
          </a>
          <div class='divider'>
            /
          </div>
          <div class='active section'>
            Error
          </div>
        </div>
      </div>
      <div class='ui form attached fluid segment'>
        <div class='annotation'>
          <div class='ui instructive segment'>
            <h2 class='text-error'>
              {
              <br>
                "err": {
              <br>
                  "code": 404,
              <br>
                  "msg": "Not Found"
              <br>
                }
              <br>
              }
            </h2>
          </div>
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
