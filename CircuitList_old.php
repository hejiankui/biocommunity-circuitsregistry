<!DOCTYPE html>

<html>
<head>
    <title>3Miao community</title>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type=
    "text/css">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet" type=
    "text/css">
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/CircuitList.js" type="text/jscript"></script>
    <script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <script async="true" src=
    "http://sustc-genome.org.cn/igem2013/test_01.php?callback=getJSON" type=
    "text/javascript"></script>
</head> 

<body>
    <div class="navbar navbar-fixed-top navbar-inverse">
        
        <div class="navbar-inner">
        <span id="navi">
            
            <ul class="nav" style="vertical-align:middle">
                <li><img src="img/logo.png" title="logo" style="padding-left:30px;margin-top:10px"></li>
                <li class="divider-vertical"></li>
                <li><a href="index.html" title="Home">HOME</a></li>
                <li class="divider-vertical"></li>
                <li><a href="about.html" title="About">ABOUT</a></li>
                <li class="divider-vertical"></li>
                <li><a href="#" title="Login">Login</a></li>
                <li class="divider-vertical"></li>
                <li><a href="submit.html" title="Upload">Upload</a></li>
            </ul>
            <form class="navbar-search">
                    <input type="text" class="span2 search-query" placeholder="Search">
            </form>
        </span>
    
        </div>
    </div>

    <div class="container" style="padding:82px">
        <div class="container">

            <div class="accordion" id="panel1">
                <div class="accordion-group">
                    <div class="accordion-heading"><a class="accordion-toggle text-right" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                        <i class=" icon-chevron-down"></i>
                        </a>
                    </div>
                    <div id="collapseOne" class="accordion-body collapse in">
                        <div class="accordion-inner" style="text-align:center">
                            <a href="index.php">
                                <img id="mindroadtext" src=
                                "img/MindRoadtext.png" style="background:rgb(181,230,29)">
                            </a> 
                            <a href="lgd.php?name=Eco000_58">
                                <img id="lgdtext" src=
                            "img/LGDtext.png" style="background:rgb(34,177,76)">
                            </a>
                            <a href="#myModal" role="button" data-toggle="modal">
                                <img id="circuitlisttext" src="img/CircuitListtext.png" style="background:rgb(0,162,232)">
                            </a>
                            <img id="ttectext" src="img/TTECtext.png" style="background:rgb(63,72,204)">
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="container">
                <div id="CLText"><img src="img/CLText.png"></div><img id="num1"
                src="img/1.png">

                <div class="menu1">
                    <ul>
                        <li>
                            <a href="#" id="sel">Random</a>

                            <ul>
                                <li>
                                    <a href="#" id="1" name="1" onclick=
                                    "change(this);changeorder(this)" title=
                                    "Time">Time</a>
                                </li>

                                <li>
                                    <a href="#" id="2" name="2" onclick=
                                    "change(this);changeorder(this)" title=
                                    "Completeness">alphabetical</a>
                                </li>

                                <li>
                                    <a href="#" id="3" name="3" onclick=
                                    "change(this);changeorder(this)" title=
                                    "Level">Level</a>
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

                <div id="table">
                    <table cellspacing="10px" width="1150px">
                        <tr class="crtitle" style="background-color: #00CCCC">
                            <td class="des">
                                <span class="title" id="title0" onclick=
                                "send(this)" style=
                                "text-decoration: underline">haha</span>

                                <p class="des" id="des0">sdkfjlsdkjf</p>
                            </td>
                        </tr>

                        <tr class="crtitle" style="background-color: #cdb">
                            <td class="des">
                                <span class="title" id="title1" onclick=
                                "send(this)" style=
                                "text-decoration: underline"></span>

                                <p class="des" id="des1"></p>
                            </td>
                        </tr>

                        <tr class="crtitle" style="background-color: #00CCCC">
                            <td class="des">
                                <span class="title" id="title2" onclick=""
                                style="text-decoration: underline"></span>

                                <p class="des" id="des2"></p>
                            </td>
                        </tr>

                        <tr class="crtitle" style="background-color: #cdb">
                            <td class="des">
                                <span class="title" id="title3" onclick=""
                                style="text-decoration: underline"></span>

                                <p class="des" id="des3"></p>
                            </td>
                        </tr>

                        <tr class="crtitle" style="background-color: #00CCCC">
                            <td class="des">
                                <span class="title" id="title4" onclick=""
                                style="text-decoration: underline"></span>

                                <p class="des" id="des4"></p>
                            </td>
                        </tr>

                        <tr class="crtitle" style="background-color: #cdb">
                            <td class="des">
                                <span class="title" id="title5" onclick=""
                                style="text-decoration: underline"></span>

                                <p class="des" id="des5"></p>
                            </td>
                        </tr>

                        <tr class="crtitle" style="background-color: #00CCCC">
                            <td class="des">
                                <span class="title" id="title6" onclick=""
                                style="text-decoration: underline"></span>

                                <p class="des" id="des6"></p>
                            </td>
                        </tr>

                        <tr class="crtitle" style="background-color: #cdb">
                            <td class="des">
                                <span class="title" id="title7" onclick=""
                                style="text-decoration: underline"></span>

                                <p class="des" id="des7"></p>
                            </td>
                        </tr>

                        <tr class="crtitle" style="background-color: #00CCCC">
                            <td class="des">
                                <span class="title" id="title8" onclick=""
                                style="text-decoration: underline"></span>

                                <p class="des" id="des8"></p>
                            </td>
                        </tr>

                        <tr class="crtitle" style="background-color: #cdb">
                            <td class="des">
                                <span class="title" id="title9" onclick=""
                                style="text-decoration: underline"></span>

                                <p class="des" id="des9"></p>
                            </td>
                        </tr>

                        <tr class="crtitle" style="background-color: #00CCCC">
                            <td class="des">
                                <span class="title" id="title10" onclick=""
                                style="text-decoration: underline"></span>

                                <p class="des" id="des10"></p>
                            </td>
                        </tr>

                        <tr class="crtitle" style="background-color: #cdb">
                            <td class="des">
                                <span class="title" id="title11" onclick=""
                                style="text-decoration: underline"></span>

                                <p class="des" id="des11"></p>
                            </td>
                        </tr>

                        <tr class="crtitle" style="background-color: #00CCCC">
                            <td class="des">
                                <span class="title" id="title12" onclick=""
                                style="text-decoration: underline"></span>

                                <p class="des" id="des12"></p>
                            </td>
                        </tr>

                        <tr class="crtitle" style="background-color: #cdb">
                            <td class="des">
                                <span class="title" id="title13" onclick=""
                                style="text-decoration: underline"></span>

                                <p class="des" id="des13"></p>
                            </td>
                        </tr>

                        <tr class="crtitle" style="background-color: #00CCCC">
                            <td class="des">
                                <span class="title" id="title14" onclick=""
                                style="text-decoration: underline"></span>

                                <p class="des" id="des14"></p>
                            </td>
                        </tr>
                    </table>
                </div><a href="#CLText"><button id="last" onclick=
                "clicklast()">Last Page</button></a> <img id="num" src=
                "img/1.png"> <a href="#CLText"><button id="next" onclick=
                "clicknext()">Next Page</button></a>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <span class="tab" onclick="tab(this);">Information</span>
            <span class="tab" onclick="tab(this);">Protocol</span> <span class=
            "tab" onclick="tab(this);">Comment</span> <span class="tab"
            onclick="tab(this);">Circuit</span> <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
        <div class="modal-body">
        <div id="mr_Information" >
            <div>
                <h2>Project Name</h2><span id="mname"></span>
            </div>

            <div>
                <h2>Project ID</h2><span id="mno"></span>
            </div>

            <div>
                <h2>Evidence Level</h2>3 star <span id="mcat"></span>
            </div>

            <div>
                <h2>Description</h2><img src="" style=
                "width: 400px; height: 300px;"> <span id="mdes"></span>
            </div>

            <div>
                <h2>Reference</h2><span>[1] Cell(2009)137, 1272-1281</span>
            </div>
        </div>

        <div id="mr_Protocol">
            <div>
                <h2>Equipment</h2>

                <div id="equipment"></div>
            </div>

            <div>
                <h2>Solution</h2>

                <div style="margin-left: 2em">
                    <div id="solution"></div>
                </div>
            </div>

            <div>
                <h2>Procedure</h2>

                <div style="margin-left: 2em">
                    <div id="procedure"></div>
                </div>
            </div>

            <div>
                <h2>Reference</h2><span>[1] Cell(2009)137, 1272-1281</span>
            </div>
        </div>

        <div id="mr_Comment">
            Comments show here
        </div>
        </div>
        <div id="mr_Circuit" class="modal-footer">
            <img id="circuit_img" src="" style="width: 400px; height: 300px;">
            <a href="" id="link_lgd">View and edit in LGD.</a>
        </div>
    </div>
</body>
</html>