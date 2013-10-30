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
              About
            </h1>
            <p class='lead'>
              Some information about us
            </p>
          </div>
        </div>
      </div>
    </div>
    <div id='<?php echo (($_G['basescript'] == 'circuit') ? CURMODULE : '') ?>' class='main container <?php echo is_array($_G['basescript']) ? implode(" ", $_G['basescript']) : $_G['basescript'] ?>'>
      <div class='peek'>
        <div class='ui vertical pointing secondary menu'>
          <a class='active item'>
            Site
          </a>
          <a class='item'>
            About us
          </a>
          <a class='item'>
            Contact
          </a>
        </div>
      </div>
      <div class='span9'>
        <h2 class='ui dividing header'>
          Site
        </h2>
        <section id='aboutsite'>
          <h3>
            Name
          </h3>
          <h4>
            Circuit+
          </h4>
          <h4>
            BioMiao
          </h4>
          <p>
            From our mascot, cute cats.
          </p>
          <h3>
            Property
          </h3>
          <p>
            A website for all students, biologists and everyone.
          </p>
          <h3>
            Funciton
          </h3>
          <p>
            Now, we have 
            <strong>
              User
            </strong>
            , 
            <strong>
              Circuit
            </strong>
            and so on.
          </p>
        </section>
        <h2 class='ui dividing header'>
          About us
        </h2>
        <section id='aboutus'>
          <h3>
            Developer
          </h3>
          <p>
            SUSTC-ShenZhen-B develops the main frame using
            <a href='http://php.net/' target='_blank'>
              <code>
                php
              </code>
            </a>
            . Please check
            <a href='/page/thanks'>
              Thanks
            </a>
             to learn about the detailed information.
          </p>
          <h3>
            Maintainer
          </h3>
          <p>
            SUSTC-ShenZhen-B
          </p>
          <h3>
            Donator
          </h3>
          <p>
            None
          </p>
          <h3>
            Operator
          </h3>
          <p>
            None
          </p>
        </section>
        <h2 class='ui dividing header'>
          Contact
        </h2>
        <section id='contact'>
          <h3>
            Mail
          </h3>
          <p>
            <a href='mailto:admin@circuitplus.org'>
              admin@circuitplus.org
            </a>
             (Not available now)
          </p>
          <h3>
            Address
          </h3>
          <p>
            South University of Science and Technology of China,
            <br>
            1088 Tangchang Rd., Nanshan District, Shenzhen,
            <br>
            Guangdong, P.R.China 518055
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
