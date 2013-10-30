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
        <div id='overview' class='container'>
          <div class='introduction'>
            <h1 class='ui dividing header'>
              Thanks
            </h1>
            <p class='lead'>
              <div class='ui two vertical grid'>
                <div class='row'>
                  <div class='column'>
                    What has come into being in him was life, and the life was the light of all people. The light shines in the darkness, and the darkness did not overcome it.
                  </div>
                </div>
                <div class='row right aligned'>
                  <div class='column'>
                    --"John 1-4,5"
                  </div>
                </div>
              </div>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div id='<?php echo (($_G['basescript'] == 'circuit') ? CURMODULE : '') ?>' class='main container <?php echo is_array($_G['basescript']) ? implode(" ", $_G['basescript']) : $_G['basescript'] ?>'>
      <div class='peek'>
        <div class='ui vertical pointing secondary menu'>
          <a class='active item'>
            Opensource
          </a>
          <a class='item'>
            Developer
          </a>
          <a class='item'>
            Contributor
          </a>
          <a class='item'>
            Others
          </a>
        </div>
      </div>
      <div class='span9'>
        <h2 class='ui dividing header'>
          Opensource
        </h2>
        <section id='opensource' class='example'>
          <h3>
            php
          </h3>
          <p>
            Server-side HTML embedded scripting language.
            <br>
            Home page: 
            <a href='http://php.net/' target='_blank'>
              http://php.net/
            </a>
          </p>
          <h3>
            MySQL
          </h3>
          <p>
            The world's most popular open source database.
            <br>
            Home page: 
            <a href='http://www.mysql.com/' target='_blank'>
              http://www.mysql.com/
            </a>
          </p>
          <h3>
            jQuery
          </h3>
          <p>
            The Write Less, Do More, JavaScript Library.
            <br>
            Home page: 
            <a href='http://jquery.com/' target='_blank'>
              http://jquery.com/
            </a>
          </p>
          <h3>
            More
          </h3>
          <p>
            Due to the endless enumeration of opensource to be thanked, we sincerely apologize.
          </p>
        </section>
        <h2 class='ui dividing header'>
          Developer
        </h2>
        <section id='developer' class='example'>
          <h3>
            SUSTC-Shenzhen-B
          </h3>
          <p>
            Zhuoteng Peng
          </p>
        </section>
        <h2 class='ui dividing header'>
          Contributor
        </h2>
        <section id='contributor' class='example'>
          <h3>
            Organization or institute
          </h3>
          <p>
            South University of Science and Technology of China
          </p>
          <h3>
            Personal
          </h3>
          <p>
            Not available now
          </p>
        </section>
        <h2 class='ui dividing header'>
          Others
        </h2>
        <section id='others' class='example'>
          <p>
            South University of Science and Technology of China
          </p>
          <p>
            iGEM
          </p>
          <p>
            Distinguished and respected you
          </p>
        </section>
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
    <script src='<?php $__=isset($version->js) ? $version->js : ((!is_object($version))?($version['js']):'');echo '/static/js/waypoints.js?v=' . $__ . '' ?>'>
    </script>
    <script src='<?php $__=isset($version->js) ? $version->js : ((!is_object($version))?($version['js']):'');echo '/static/js/waypoints-ready.js?v=' . $__ . '' ?>'>
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
