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
    <link rel='stylesheet' href='<?php echo '/static/css/lgd.css?v=' . $_G['version']['css'] . '' ?>'>
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
      <div class='tab segment'>
        <div id='overview' class='container'>
          <div id='searchfield' class='ui fluid icon input'>
            <div class='ui top right pointing dropdown icon button'>
              <i class='icon search'>
              </i>
              <div class='menu'>
                <a onclick='<?php echo 'searchby("name");' ?>' class='icon item'>
                  <i class='search icon'>
                  </i>
                  Search "
                  <strong class='searchtext'>
                  </strong>
                  " by name
                </a>
                <a onclick='<?php echo 'searchby("description");' ?>' class='icon item'>
                  <i class='search icon'>
                  </i>
                  Search "
                  <strong class='searchtext'>
                  </strong>
                  " by description
                </a>
                <a onclick='<?php echo 'searchby("tag");' ?>' class='icon item'>
                  <i class='search icon'>
                  </i>
                  Search "
                  <strong class='searchtext'>
                  </strong>
                  " by application
                </a>
              </div>
            </div>
            <input id='searchbox' type='text' placeholder='Search...' value='<?php echo $q ?>'>
          </div>
          <?php if($search_method) { ?>
            <script type='text/javascript'>
               var search_method = "<?php echo htmlspecialchars($search_method) ?>";
            </script>
          <?php } ?>
          <div class='inverted pull-right'>
            <a href='<?php echo '/circuit/get/sbol/' . $circuit['id'] . '' ?>' class='ui purple large labeled button'>
              <i class='cloud download icon'>
              </i>
              Export to SBOL
            </a>
          </div>
          <div class='introduction'>
            <h1 class='ui dividing header'>
              <?php echo htmlspecialchars($circuit['id']) ?>
            </h1>
            <p class='lead'>
              <?php echo htmlspecialchars($circuit['name']) ?>
            </p>
          </div>
          <div class='four item tabular ui menu'>
            <a data-tab='information' class='active item'>
              Information
            </a>
            <a data-tab='lgd' class='item'>
              LGD
            </a>
            <a data-tab='feedback' class='item'>
              Feedback
            </a>
            <a data-tab='comment' class='item'>
              Comment
            </a>
          </div>
        </div>
      </div>
    </div>
    <div id='<?php echo (($_G['basescript'] == 'circuit') ? CURMODULE : '') ?>' class='main container <?php echo is_array($_G['basescript']) ? implode(" ", $_G['basescript']) : $_G['basescript'] ?>'>
      <?php if($circuit) { ?>
        <div data-tab='information' class='ui tab active'>
          <div class='peek'>
            <div class='ui vertical pointing secondary menu'>
              <a class='active item'>
                Basic information
              </a>
              <a class='item'>
                Circuit construct
              </a>
              <a class='item'>
                Reference
              </a>
            </div>
          </div>
          <div class='span9'>
            <h2 class='ui dividing header'>
              Basic information
            </h2>
            <div class='example'>
              <h3 class='ui header'>
                Author
              </h3>
              <?php if($circuit['author']) { ?>
                <p>
                  <?php echo htmlspecialchars($circuit['author']) ?>
                </p>
              <?php } if($circuit['user']) { ?>
                <a href='<?php echo '/user/' . $circuit['user']['uid'] . '' ?>' target='_blank' class='ui image label'>
                  <?php if($circuit['user']['avatar_url']) { ?>
                    <img src='<?php echo $circuit['user']['avatar_url'] ?>'>
                  <?php } else { ?>
                    <img src='/static/img/user/def-avatar.png'>
                  <?php } ?>
                  <?php echo htmlspecialchars($circuit['user']['username']) ?>
                  <div class='detail'>
                    Uploaded
                  </div>
                </a>
              <?php } ?>
            </div>
            <div class='example'>
              <h3 class='ui header'>
                Rating
              </h3>
              <div data-rating='<?php echo is_array($circuit['rating']) ? json_encode($circuit['rating']) : $circuit['rating'] ?>' class='ui star rating'>
                <i class='icon'>
                </i>
                <i class='icon'>
                </i>
                <i class='icon'>
                </i>
                <i class='icon'>
                </i>
                <i class='icon'>
                </i>
              </div>
            </div>
            <div class='example'>
              <h3 class='ui header'>
                Classification
              </h3>
              <?php if($circuit['classification']) { ?>
                <div class='ui small steps'>
                  <?php foreach(array_reverse($circuit['classification']) as $value) { ?>
                    <a href='<?php echo '/term/classification/' . $value['classification_id'] ?>' target='_blank' class='ui step next'>
                      <?php echo htmlspecialchars($value['name']) ?>
                    </a>
                  <?php } ?>
                </div>
              <?php } else { ?>
                <p>
                  ---
                </p>
              <?php } ?>
            </div>
            <!--section(id='basic')-->
            <div class='example'>
              <h3 class='ui header'>
                Tags
              </h3>
              <?php foreach ($circuit['tags'] as $tag) { ?>
                <div class='ui icon label'>
                  <i class='icon tag'>
                  </i>
                  <a href='<?php echo '/term/tag/' . $tag['term_id'] ?>' target='_blank'>
                    <?php echo htmlspecialchars($tag['name']) ?>
                  </a>
                </div>
              <?php } ?>
            </div>
            <div class='example'>
              <h3 class='ui header'>
                Chassis and plasmids
              </h3>
              <?php if($circuit['chassis']) { ?>
                <p>
                  Chassis
                </p>
                <div class='ui label'>
                  <a href='<?php echo '/term/chassis/' . $circuit['chassis']['term_id'] ?>' target='_blank'>
                    <?php echo htmlspecialchars($circuit['chassis']['name']) ?>
                  </a>
                </div>
              <?php } if($circuit['plasmids']) { ?>
                <p>
                  Plasmids
                </p>
                <?php foreach ($circuit['plasmids'] as $plasmid) { ?>
                  <div class='ui label'>
                    <a href='<?php echo '/term/plasmid/' . $plasmid['term_id'] ?>' target='_blank'>
                      <?php echo htmlspecialchars($plasmid['name']) ?>
                    </a>
                  </div>
                <?php } ?>
              <?php } ?>
            </div>
            <div class='example'>
              <h3 class='ui header'>
                Description
              </h3>
              <p>
                <?php echo $circuit['description'] ?>
              </p>
            </div>
            <h2 class='ui dividing header'>
              Circuit construct
            </h2>
            <!--section(id='circuitconstruct')-->
            <div class='example'>
              <h3 class='ui header'>
                Coding frame
              </h3>
              <table class='ui sortable table segment'>
                <thead>
                  <tr>
                    <th>
                      id
                    </th>
                    <th>
                      Input
                    </th>
                    <th>
                      Output
                    </th>
                    <th>
                      Transcription state
                    </th>
                    <th>
                      Length
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($circuit['codingframe'] as $cf) { ?>
                    <tr>
                      <td>
                        <?php echo htmlspecialchars($cf['codingframe_id']) ?>
                      </td>
                      <?php if($cf['input']) { ?>
                        <td>
                          <?php echo htmlspecialchars($cf['input']) ?>
                        </td>
                      <?php } else { ?>
                        <td>
                          ---
                        </td>
                      <?php } if($cf['output']) { ?>
                        <td>
                          <?php echo htmlspecialchars($cf['output']) ?>
                        </td>
                      <?php } else { ?>
                        <td>
                          ---
                        </td>
                      <?php } ?>
                      <td>
                        <?php echo htmlspecialchars($cf['state']) ?>
                      </td>
                      <?php if($cf['length']) { ?>
                        <td>
                          <?php echo htmlspecialchars($cf['length']) ?>
                        </td>
                      <?php } else { ?>
                        <td>
                          ---
                        </td>
                      <?php } ?>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
              <h3 class='ui header'>
                Parts
              </h3>
              <div id='parts-form' class='ui form loading'>
                <table class='ui sortable table segment'>
                  <thead>
                    <tr>
                      <th>
                        id
                      </th>
                      <th>
                        Type
                      </th>
                      <th>
                        Description
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($circuit['parts'] as $part) { ?>
                      <tr>
                        <td>
                          <a href='<?php echo '/term/part/' . $part['name'] . '' ?>' target='_blank'>
                            <?php echo htmlspecialchars($part['name']) ?>
                          </a>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class='example'>
              <h3 class='ui header'>
                Input
              </h3>
              <p>
                <?php echo htmlspecialchars($circuit['input']) ?>
              </p>
            </div>
            <div class='example'>
              <h3 class='ui header'>
                Output
              </h3>
              <p>
                <?php echo htmlspecialchars($circuit['output']) ?>
              </p>
            </div>
            <div class='example'>
              <h3 class='ui header'>
                Result
              </h3>
              <p>
                <?php echo $circuit['result'] ?>
              </p>
            </div>
            <h2 class='ui dividing header'>
              Reference
            </h2>
            <section id='reference'>
              <p>
                <?php echo htmlspecialchars($circuit['reference']) ?>
              </p>
            </section>
          </div>
        </div>
        <div data-tab='lgd' class='ui tab'>
          <!--Logical genetic designer-->
          <div class='lgd-container'>
            <div style='display:none;' class='lgd-info'>
              <table class='ui table segment'>
                <thead>
                  <tr>
                    <th>
                      Name
                    </th>
                    <th>
                      Description
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td id='name'>
                    </td>
                    <td id='desc'>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class='lgd-content'>
              <div class='lgd-render'>
                <canvas id='canvas' width='800px' height='600px'>
                </canvas>
                <img id='1' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='2' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='3' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='4' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='5' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='6' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='7' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='8' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='9' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='10' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='11' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='12' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='13' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='14' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='15' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='16' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='17' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='18' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='19' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='20' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='21' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='22' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='23' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='24' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='25' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='26' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='27' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='28' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='29' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='30' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='31' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='32' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='33' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='34' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='35' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='36' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='37' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='38' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='39' style='top: 440px;' onMouseOver='info_show(this,1);' onMouseOut='info_hide();'>
                <img id='a1' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a2' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a3' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a4' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a5' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a6' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a7' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a8' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a9' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a10' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a11' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a12' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a13' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a14' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a15' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a16' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a17' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a18' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a19' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a20' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a21' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a22' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a23' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a24' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a25' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a26' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a27' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a28' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a29' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a30' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a31' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a32' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a33' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a34' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a35' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a36' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a37' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a38' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
                <img id='a39' style='top: 440px;' onMouseOver='info_show(this,0);' onMouseOut='info_hide();'>
              </div>
            </div>
          </div>
        </div>
        <div data-tab='feedback' class='ui tab'>
          <div class='feedback'>
            <div class='ui piled blue segment'>
              <div class='ui header'>
                <i class='icon inverted circular blue comment'>
                </i>
                Feedback
              </div>
              <div class='ui comments'>
                <div class='comment'>
                  <a class='avatar'>
                    <img src='/images/demo/avatar.jpg'>
                  </a>
                  <div class='content'>
                    <a class='author'>
                      Dog Doggington
                    </a>
                    <div class='metadata'>
                      <span class='date'>
                        2 days ago
                      </span>
                    </div>
                    <div class='text'>
                      I think this is a great idea and i am voting on it
                    </div>
                    <div class='actions'>
                      <a class='reply'>
                        Reply
                      </a>
                      <a class='delete'>
                        Delete
                      </a>
                    </div>
                  </div>
                </div>
                <form action='/circuit/feedback' method='POST' class='ui reply form'>
                  <div class='field'>
                    <textarea>
                    </textarea>
                  </div>
                  <button type='submit' class='ui fluid blue labeled submit icon button'>
                    <i class='icon edit'>
                    </i>
                    Add Feedback
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div data-tab='comment' class='ui tab'>
          <div id='disqus_thread'>
          </div>
          <script type='text/javascript'>
             /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
             var disqus_shortname = 'circuitplus'; // required: replace example with your forum shortname
             var disqus_identifier = '/circuit/<?php echo htmlspecialchars($circuit['id']) ?>/';
             
             /* * * DON'T EDIT BELOW THIS LINE * * */
             (function() {
                 var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                 dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                 (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
             })();
          </script>
          <noscript>
            Please enable JavaScript to view the 
            <a href='http://disqus.com/?ref_noscript' target='_blank'>
              comments powered by Disqus.
            </a>
          </noscript>
          <a href='http://disqus.com' class='dsq-brlink'>
            comments powered by 
            <span class='logo-disqus'>
              Disqus
            </span>
          </a>
        </div>
      <?php } else { ?>
        <div data-tab='information' class='ui tab active'>
          Circuit Not found
        </div>
      <?php } ?>
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
    <script src='<?php echo '/static/js/jquery.tablesort.min.js?v=' . $_G['version']['js'] . '' ?>'>
    </script>
    <script src='<?php echo '/static/js/waypoints.js?v=' . $_G['version']['js'] . '' ?>'>
    </script>
    <script src='<?php echo '/static/js/waypoints-ready.js?v=' . $_G['version']['js'] . '' ?>'>
    </script>
    <script src='<?php echo '/static/js/table.js?v=' . $_G['version']['js'] . '' ?>'>
    </script>
    <script src='<?php echo '/static/js/circuit-show.js?v=' . $_G['version']['js'] . '' ?>'>
    </script>
    <script src='<?php echo '/static/js/lgd.js?v=' . $_G['version']['js'] . '' ?>'>
    </script>
    <script src='<?php echo '/static/js/searchbox.js?v=' . $_G['version']['js'] . '' ?>'>
    </script>
    <script type='text/javascript'>
       var circuit_lgd = <?php echo $circuit['lgd'] ?>;
       $(document).ready(function () {
         if (circuit_lgd) {
           init_lgd(circuit_lgd);
         }
       });
       
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
