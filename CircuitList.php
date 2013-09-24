<!DOCTYPE html>

<html>
<head>
    <title>3Miao community</title>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type=
    "text/css">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet" type=
    "text/css">
    <link href="css/checkbox.css" rel="stylesheet" type=
    "text/css">
    <link href='http://fonts.googleapis.com/css?family=Istok+Web:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Stoke' rel='stylesheet' type='text/css'>
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/CircuitList.js" type="text/jscript"></script>
    <script src="js/latestcircuit.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <script async="true" src=
    "http://sustc-genome.org.cn/igem2013/test_01.php?callback=getJSON" type=
    "text/javascript"></script>
    <script async="true" src=
    "http://sustc-genome.org.cn/igem2013/test_02.php?callback=getJSON_02" type=
    "text/javascript"></script>
	<script type="text/javascript" src="js/tab_list.js" charset="utf-8"></script>
    <style type="text/css">
	body{ 
		background:url(img/Grunge1.png) no-repeat center center fixed;
		-webkit-background-size:cover;
		-moz-background-size:cover;
		-o-background-size:cover;
		background-size:cover; 
    }
    #collapseOne{
		background-color:#c8bfe7;
	}
    #accordion-heading{
		background-color:#eef;
	}
    .textimg{
		margin-left:100px;
	}
    #forCLText{ width:300px; height:80px; border-radius:10px;text-align:center; margin-top:10px; margin-bottom:40px; }
    #CLText{  margin-top:7px;}
    #middle{ background-color:#eef;}
    #big{ background-color:#eef;}
    #sort{font-family: 'Istok Web', sans-serif; color:#710069; font-size:17px}
    .pagenum{ margin-left:10px; margin-right:10px; }
    .title { font-family: 'Stoke', serif;  font-size: 24px;    color: #00F;    cursor: pointer;}
    #table{margin-left:10px;}
    #table u{ display:block; margin-top:12px; margin-bottom:12px;}
	#latestcircuit u{ font-family: 'Stoke', serif;  font-size: 20px;    color: #067;    cursor: pointer;}
    p {font-family: 'Oxygen', sans-serif;text-indent: 20px; color:black; font-size:15px}
	#latestcircuit{}
	.well{ margin-left:50px; margin-right:50px;}
	.media-objet { height:64px; width:64px;}
	#latestcircuit{ min-height:85%}
    </style>
	<script>
		$(document).ready(function(){
			$('#myTab a').click(function (e) {
				e.preventDefault();
				$(this).tab('show');
			})
		});
	</script>
</head> 

<body >
    <div class="navbar navbar-fixed-top navbar-inverse">
        
        <div class="navbar-inner">
        <span id="navi">
            
            <ul class="nav" style="vertical-align:middle">
                <li><img src="img/logo.png" title="logo" style="padding-left:30px;margin-top:10px"></li>
                <li class="divider-vertical"></li>
                <li><a href="index.html" title="Home">HOME</a></li>
                <li class="divider-vertical"></li>
                <li><a href="about.html" title="Tutorial">TUTORIAL</a></li>
                <li class="divider-vertical"></li>
                <li><a href="submit.html" title="Submit">SUBMIT</a></li>
                <li class="divider-vertical"></li>
                <li><a href="#" title="About">ABOUT</a></li>
            </ul>
            <form class="navbar-search">
                    <input type="text" class="span2 search-query" placeholder="Search">
            </form>
        </span>
    
        </div>
    </div>

    <div class="container" style="padding:82px">
		<!-- Modal -->
			<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
					<ul class="nav nav-tabs" id="myTab">
						<li class="active"><a href="#description">Description</a></li>
						<li><a href="#protocol">Protocol</a></li>
						<li><a href="#circuit">Circuit</a></li>
						<li><a href="#reference">Reference</a></li>
						<li><a href="#comment">Comment</a></li>
					</ul>
					<div><span data-toggle="tooltip" title="Project No" style="font-weight: bold" id="Ecoid"></span> in project <span data-toggle="tooltip" title="Project name" style="font-weight: bold" id="pro"></span></div>
					<div>By <span data-toggle="tooltip" title="Author(s)" style="font-weight: bold" id="author"></span>(<span data-toggle="tooltip" title="Year" style="font-weight: bold" id="year"></span>)</div>
					<div>Evidence level: <span data-toggle="tooltip" title="1 star: reported to be functional in peer-reviewed journals&#13;2 stars: reported by one iGEM team and independently successfully reproduced by another iGEM team&#13;3 stars: reported by one iGEM team" id="evidence"></span></div>
				</div>
				<div class="modal-body">
					<div class="tab-content">
						<div class="tab-pane active" id="description">
							<img id="pro_img" src="" style="width: 400px; height: 300px;" />
							<div id="des"></div>
						</div>
						<div class="tab-pane" id="protocol">
							<div id="exp"></div>
						</div>
						<div class="tab-pane" id="circuit">
							<img id="cir_img" src="" style="width: 400px; height: 300px;">
							<div style="margin-top:15px"><a href="#" id="link_lgd"><button class="btn btn-large btn-block btn-primary" type="button" id="link_lgd">View and edit in LGD.</button></a></div>
						</div>
						<div class="tab-pane" id="reference">
							<div id="ref"></div>
						</div>
						<div class="tab-pane" id="comment">Under construction.</div>
					</div>
				</div>
				<div class="modal-footer">
					<span id="contri"></span>
				</div>
			</div>
        <div class="container" id="big">            
                <div class="accordion-group">
                    <div class="accordion-heading" id="accordion-heading"><a class="accordion-toggle text-right" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        <i class=" icon-chevron-down"></i>
                        </a>
                    </div>
                    <div id="collapseOne" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <a href="mindroad.php">
                                <img id="mindroadtext" class="textimg" src=
                                "img/MindRoadtext.png" style="background:rgb(181,230,29)">
                            </a> 
                           
                            <a href="#" role="button" data-toggle="modal">
                                <img id="circuitlisttext" class="textimg" src="img/CircuitListtext.png" style="background:rgb(0,162,232)">
                            </a>
                            <img id="ttectext"  class="textimg"src="img/TTECtext.png" style="background:rgb(63,72,204)">
                        </div>
                    </div>             
            </div>
            <div class="container" id="middle">
             <div class="span3" style="margin-left:0px;"><div id="forCLText"><img id="CLText" src="img/CLText.png"></div></div>
             <div class="span9">
                <div class="span2 offset5"  style="text-align:right; margin-top:15px" id="sort">SORT</div> 
                <div id="menu1" class="span1" style=" margin-top:15px">
                    <ul>
                        <li>
                            <a href="#" id="sel">Random</a>

                            <ul>
                                
                                <li>
                                    <a href="#" id="1" name="1" onclick=
                                    "change(this);changeorder(this)" title=
                                    "alphabetical">alphabetical</a>
                                </li>

                                <li>
                                    <a href="#" id="0" name="0" onclick=
                                    "change(this);changeorder(this)" title=
                                    "Random">Random</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="span3 offset6 " style="margin-top:15px;"><button class="btn btn-success" type="button" onClick="chanlate(this)" style="margin-left:27px; margin-left:93px;">Latest Project</button></div>
           </div>
           </div>
       <div class="container" id="regularcircuit">
        <div id="table" >
            <table cellspacing="10px" width="1150px" >
                <tr class="crtitle" bgcolor="#00CCCC" >
                    <td class="des"><u  class="title" id="title0" name="" onClick="send(this)">hah</u><p class="des" id="des0">sdkfjlsdkjf</p></td>             
                </tr>
                <tr class="crtitle"bgcolor="#cdb">
                    <td class="des"><u class="title" onClick="send(this)" id="title1"  name=""></u><p class="des" id="des1"></p></td>             
                </tr>
             
                <tr class="crtitle"  bgcolor="#00CCCC" >
                    <td class="des"><u class="title" onClick="send(this)" id="title2"  name=""></u><p class="des" id="des2"></p></td>             
                </tr>
               
                <tr class="crtitle" bgcolor="#cdb">
                    <td class="des"><u class="title" onClick="send(this)" id="title3"  name=""></u><p class="des" id="des3"></p></td>             
                </tr>
               
                <tr class="crtitle"  bgcolor="#00CCCC" >
                    <td class="des"><u class="title" onClick="send(this)" id="title4"  name=""></u><p class="des" id="des4"></p></td>            
                </tr>
               
                <tr class="crtitle" bgcolor="#cdb" >
                    <td class="des"><u class="title" onClick="send(this)" id="title5"  name=""></u><p class="des" id="des5"></p></td>             
                </tr>
               
                <tr class="crtitle"  bgcolor="#00CCCC">
                    <td class="des"><u class="title" onClick="send(this)" id="title6"  name=""></u><p class="des" id="des6"></p></td>            
                </tr>
               
                <tr class="crtitle" bgcolor="#cdb" >
                    <td class="des"><u class="title" onClick="send(this)" id="title7"  name=""></u><p class="des" id="des7"></p></td>             
                </tr>
               
                <tr class="crtitle"  bgcolor="#00CCCC">
                    <td class="des"><u class="title" onClick="send(this)" id="title8" name=""></u><p class="des" id="des8"></p></td>            
                </tr>
                <tr class="crtitle"  bgcolor="#cdb">
                    <td class="des" ><u class="title" onClick="send(this)" id="title9" name=""></u><p class="des" id="des9"></p></td>            
                </tr>
               
                <tr class="crtitle"  bgcolor="#00CCCC">
                    <td class="des"><u class="title" onClick="send(this)" id="title10" name=""></u><p class="des" id="des10"></p></td>             
                </tr>
               
                <tr class="crtitle"  bgcolor="#cdb">
                    <td class="des"><u class="title" onClick="send(this)" id="title11" name=""></u><p class="des" id="des11"></p></td>            
                </tr>
               
                <tr class="crtitle"  bgcolor="#00CCCC">
                    <td class="des"><u class="title" onClick="send(this)" id="title12" name=""></u><p class="des" id="des12"></p></td>             
                </tr>
               
                <tr class="crtitle"  bgcolor="#cdb">
                    <td class="des"><u class="title" onClick="send(this)" id="title13" name=""></u><p class="des" id="des13"></p></td>            
                </tr>
                <tr class="crtitle "  bgcolor="#00CCCC">
                    <td class="des"><u class="title" onClick="send(this)" id="title14" name=""></u><p class="des" id="des14"></p></td>            
                </tr>   
            </table>
           </div> 
              <div class="container" style="text-align:center">
                <a href="#accordion-heading"><button id="last" class="btn btn-small btn-primary" onclick=
                "clicklast()">Last Page</button></a>
                 <img id="num" class="pagenum" src="img/1.png"> 
                <a href="#accordion-heading"><button id="next" class="btn  btn-small btn-primary"  onclick=
                "clicknext()">Next Page</button></a>
              </div>
         </div>
         <div class="container" id="latestcircuit" style="display:none">
            <div class="well" id="media0"  style="display:none">
              <div class="media"  >
                 <a class="pull-left" href="#">
                    <img class="media-objet" id="img0" src="" style="">
                 </a>
                 <div class="media-body" >
                 <u class="media-heading" id="media-heading0" name="" onClick="send(this)" ></u>
                 <p id="media-body0"></p>
                 </div>
              </div>
            </div>
            
            <div class="well" style="display:none" id="media1">
              <div class="media" >
                 <a class="pull-left" href="#">
                    <img class="media-objet" id="img1" src="">
                 </a>
                 <div class="media-body">
                 <u class="media-heading" id="media-heading1" name="" onClick="send(this)"></u>
                 <p id="media-body1"></p>
                 </div>
              </div>
             </div>
              
             <div class="well" style="display:none" id="media2">
              <div class="media" >
                 <a class="pull-left" href="#">
                    <img class="media-objet" id="img2" src="">
                 </a>
                 <div class="media-body">
                 <u class="media-heading" id="media-heading2" name="" onClick="send(this) "></u>
                 <p id="media-body2"></p>
                 </div>
              </div>
             </div> 
             
             <div class="well" style="display:none" id="media3">
              <div class="media" >
                 <a class="pull-left" href="#">
                    <img class="media-objet" id="img3" src="">
                 </a>
                 <div class="media-body">
                 <u class="media-heading" id="media-heading3" name="" onClick="send(this)"></u>
                 <p id="media-body3"></p>
                 </div>
              </div>
             </div>
             
             <div class="well" style=" display:none" id="media4"> 
              <div class="media" >
                 <a class="pull-left" href="#">
                    <img class="media-objet" id="img4" src="">
                 </a>
                 <div class="media-body">
                 <u class="media-heading" id="media-heading4" name="" onClick="send(this)"></u>
                 <p id="media-body4"></p>
                 </div>
              </div>
             </div>
             
             <div class="well" style="display:none" id="media5"> 
              <div class="media" >
                 <a class="pull-left" href="#">
                    <img class="media-objet" id="img5" src="">
                 </a>
                 <div class="media-body">
                 <u class="media-heading" id="media-heading5" name="" onClick="send(this)"></u>
                 <p id="media-body5"></p>
                 </div>
              </div>
             </div>
             
             <div class="well" style="display:none" id="media6"> 
              <div class="media" >
                 <a class="pull-left" href="#">
                    <img class="media-objet" id="img6" src="">
                 </a>
                 <div class="media-body">
                 <u class="media-heading" id="media-heading6" name="" onClick="send(this)"></u>
                 <p id="media-body6"></p>
                 </div>
              </div>
             </div>
             
             <div class="well" style="display:none" id="media7"> 
              <div class="media" >
                 <a class="pull-left" href="#">
                    <img class="media-objet" id="img7" src="">
                 </a>
                 <div class="media-body">
                 <u class="media-heading" id="media-heading7" name="" onClick="send(this)"></u>
                 <p id="media-body7"></p>
                 </div>
              </div>
             </div>
             
             <div class="well" style="display:none" id="media8"> 
              <div class="media" >
                 <a class="pull-left" href="#">
                    <img class="media-objet" id="img8" src="">
                 </a>
                 <div class="media-body">
                 <u class="media-heading" id="media-heading8" name="" onClick="send(this)"></u>
                 <p id="media-body8"></p>
                 </div>
              </div>
             </div> 
             
             <div class="well" style="display:none" id="media9"> 
              <div class="media" >
                 <a class="pull-left" href="#">
                    <img class="media-objet"id="img9" src="">
                 </a>
                 <div class="media-body">
                 <u class="media-heading" id="media-heading9" name="" onClick="send(this)"></u>
                 <p id="media-body9"></p>
                 </div>
              </div>
             </div>
              
             <div class="well" style="display:none" id="media10"> 
              <div class="media" >
                 <a class="pull-left" href="#">
                    <img class="media-objet" id="img10" src="">
                 </a>
                 <div class="media-body">
                 <u class="media-heading" id="media-heading10" name="" onClick="send(this)"></u>
                 <p id="media-body10"></p>
                 </div>
              </div>
             </div>
             
             <div class="well" style="display:none" id="media11"> 
              <div class="media" >
                 <a class="pull-left" href="#">
                    <img class="media-objet" id="img11" src="">
                 </a>
                 <div class="media-body">
                 <u class="media-heading" id="media-heading11" name="" onClick="send(this)"></u>
                 <p id="media-body11"></p>
                 </div>
              </div>
            </div>
            
            <div class="well" style="display:none" id="media12">  
              <div class="media" >
                 <a class="pull-left" href="#">
                    <img class="media-objet" id="img12" src="">
                 </a>
                 <div class="media-body">
                 <u class="media-heading" id="media-heading12" name="" onClick="send(this)"></u>
                 <p id="media-body12"></p>
                 </div>
              </div>
            </div>
              
            <div class="well" style="display:none" id="media13">  
              <div class="media" >
                 <a class="pull-left" href="#">
                    <img class="media-objet" id="img13" src="">
                 </a>
                 <div class="media-body">
                 <u class="media-heading" id="media-heading13" name="" onClick="send(this)"></u>
                 <p id="media-body13"></p>
                 </div>
              </div>
            </div>
             
            <div class="well" style="display:none" id="media14">  
              <div class="media" >
                 <a class="pull-left" href="#">
                    <img class="media-objet" id="img14" src="">
                 </a>
                 <div class="media-body">
                 <u class="media-heading" id="media-heading14" name="" onClick="send(this)"></u>
                 <p id="media-body14"></p>
                 </div>
              </div>
            </div>
                           
              <div class="container" style="text-align:center">
                <a href="#accordion-heading"><button  class="btn btn-small btn-primary" onclick=
                "lclicklast()">Last Page</button></a>
                 <img id="lnum"  src="img/1.png"> 
                <a href="#accordion-heading"><button  class="btn  btn-small btn-primary"  onclick=
                "lclicknext()">Next Page</button></a>
              </div>
             
         </div>
        </div>
    </div>
</body>
</html>