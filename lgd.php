<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Logical genetic designer</title>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="css/_styles.css"/>
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
<<<<<<< HEAD
<script src="js/jquery.min.js" ></script>
<style type="text/css">
.dragme{ position:absolute;}
#forcanvas{float:right; position:absolute; height:86.5%; width:100%; overflow-y:scroll;overflow-x:scroll; background-color:#333; margin-left:auto; margin-right:auto; margin-top:82px;}
#tools{position:fixed;left:30;top:290px;}
#files{position:fixed;left:30;top:180px;}
#open{position:fixed;left:30;top:100px;}
=======
<script src="js/jquery.js" ></script>
<style type="text/css">
.dragme{ position:absolute;}
#forcanvas{float:right; position:absolute; height:100%; width:100%; overflow-y:hidden;overflow-x:scroll; background-color:#333; margin-left:auto; margin-right:auto; margin-top:82px;}

}
>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1
</style>
<style type="text/css">
table.footcollapse{
	width:300px;
}
table.footcollapse th{
	text-align:left;
}
table.footcollapse,table.footcollapse th,table.footcollapse th
{
	border:none;
	border-collapse:collapse;	
}
table.footcollapse tfoot td
{
	border-left-style:solid;
	border-right-style:solid;
	border-width:1px;
	border-color: #FFF #FFF #FFF;
	padding:2px 10px;
}
table.footcollapse tbody{
	background:#888;
}
table.footcollapse tbody td{
	padding:5px 10px;
	border:1px solid #999;
	color:#FFF;
}
table.footcollapse tfoot td img{
	border:none;
	vertical-align:bottom;
	padding-left:10px;
	float:right;
}
</style>

<?php
@$name=$_GET['name'];//获取细菌编号
//$name="Eco500_16";
$con = mysql_connect("localhost","root","hjk20121217");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }//连接数据库
 mysql_select_db("db_bacteria2", $con);
if(@mysql_select_db("db_bacteria2", $con)){
	//print '<p>YES！</p>';
}else{
	print '<p>NO！</p>';
}//连接数据库
$as=1;
<<<<<<< HEAD
=======


>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1
$new= array (); //存储codingframe的属性【数字】
$stimulation = array ();//刺激源字符串【数字】
$target = array ();//靶目标order【数字】
$protein = array ();//生成蛋白的基因ORDER
$relation = array();//关系【字符】，可以改数字
$position = array();//codingframe的位置
$position1 = array ();//codingframe--target;
$position2 = array ();//codingfarme--protein;
$i=0;//排序计数器
$j=0;//目标，关系计数器
$k=0;//刺激源计数器
$l=0;//蛋白质技术器
$m=0;//codingframe计数器
$cnumber=0;//codingframe的数目
$bname = array();//biobrick-name
$bnumber = array();//biobrick-number
$bdescription = array();//biobrick-function
$bacteria = mysql_query("SELECT * FROM ecocct WHERE Ecoid='$name'");
while($b = mysql_fetch_array($bacteria)){
    $circuit = mysql_query("SELECT * FROM cctframe WHERE circuitno='$b[circuitno]'");
    while($c = mysql_fetch_array($circuit))
             {
		      $cnumber++; 
		      $result=mysql_query("SELECT * FROM biobrickinfo WHERE codingframeid='$c[codingframeid]'");
              while($r = mysql_fetch_array($result))
                   {
				          if($i>0)
							  {
				          $position[$i]=$r['codingframeid']%$start + 1;
						      }
							  else
					          {
								  $position[$i]=$r['codingframeid'];
								  $start=$position[$i];
								  $position[$i]=$r['codingframeid']%$start + 1;
							  }
		                  switch($r['DNAproperty'])
<<<<<<< HEAD
			                 {	
=======
			                 {
>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1
			                   case'promoter':
				                  $new[$i]=1;
                                  break;
		                       case'protein coding':
				                  $new[$i]=2;
                                  break;
                               case'RBS coding':
				                  $new[$i]=3;
			                      break;
                               case'terminator coding':
				                  $new[$i]=4;
			                      break;
		                    }
							$bname[$i]=$r['biobrick'];
							$bnumber[$i]=$r['biobrickID'];
							$bdescription[$i]=$r['function'];
			              $i++;
	                }	                    
            } 
}
<<<<<<< HEAD

=======
>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1
$test = implode (",",$new);//将codingrame按顺序依次排列
$test1 = implode (",",$position);//每个biobrick所属的codingframe
$bt1 = implode (",",$bname);//biobrick-name
$bt2 = implode (",",$bnumber);//biobrick-number
$bt3 = implode (",",$bdescription);//biobrick-function

$bacteria1 = mysql_query("SELECT * FROM ecocct WHERE Ecoid='$name'");
while($b1 = mysql_fetch_array($bacteria1)){
	$circuit1 = mysql_query("SELECT * FROM cctframe WHERE circuitno='$b1[circuitno]'");
	while($c1 = mysql_fetch_array($circuit1))
		  {
	    $brickid = mysql_query("SELECT * FROM biobrickinfo WHERE codingframeid='$c1[codingframeid]'");
		while($id =mysql_fetch_array($brickid))
			  {
			$tar=mysql_query("SELECT * FROM relation WHERE target='$id[biobrickID]'");
			//echo "SELECT * FROM relation WHERE target='$id[biobrickID]'";
			while($t=mysql_fetch_array($tar))
<<<<<<< HEAD
				  {
=======
				  {				
>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1
				$target[$j]=$id['order'];//目标
                switch($t['realation'])
					  {
					case '+':
                    $relation[$j]=1;
					break;
					case '-':
                    $relation[$j]=0;
					break;					
					case '*':
                    $relation[$j]=1;
					break;
					  }//关系
				$position1[$j]=$id['codingframeid']%$start + 1;
				$j++;				
				$stimu=mysql_query("SELECT * FROM substance WHERE substanceno='$t[stimulation]' ");
				while($s=mysql_fetch_array($stimu))
					  {
					$stimulation[$k]=$s['substancename'];
					$k++;
				$siu=mysql_query("SELECT * FROM expression WHERE substanceno='$t[stimulation]' and codingframeID='$id[codingframeid]'");
			if($s1=mysql_fetch_array($siu))
				  {
				$protein[$l]=$s1['order'];
				$position2[$l]=$s1['codingframeID']%$start + 1;
				  }
				  else
							  {
								$protein[$l]=0;
                                $position2[$l]=0;
							  }
							$l++;				
					  }//刺激物质
				   }//relation
			    }//biobrickinfo
			}//cctframe
	}//ecoct
	$mubiao = implode (",",$target);//target目标
	$guanxi = implode (",",$relation);//relation
	$ciji = implode(",",$stimulation);//stimulation
	$sz = implode(",",$protein);//内外部及位置
	$test2= implode(",",$position1);//target--codingframe
	$test3= implode(",",$position2);//stimulation--codingframe
	//echo $test3;
//获取靶目标及其关系
//echo $cnumber;
?>
<script>
<<<<<<< HEAD
	var editcodf;
	var app="<?php echo $bt1; ?>";
	var name1= app.split(",");
=======
	var app="<?php echo $bt1; ?>";
	var name1= app.split(",");

>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1
	app="<?php echo $bt2; ?>";
	var number= app.split(",");
	app="<?php echo $bt3; ?>";
	var description= app.split(",");
	var firstmoveid;
	var firstmoveed;
	function information(obj){
	
	var id=obj.id;
	var obj5=document.getElementById('td1');
	firstmoveid=obj.id;
	firstmoveed=obj.offsetLeft;
	obj5.innerHTML="name:"+name1[id-1];
	
	var obj6=document.getElementById('td2');
	obj6.innerHTML="number:"+number[id-1];
	
	var obj7=document.getElementById('td3');
	obj7.innerHTML="description:"+description[id-1];
	
	var aDiv=document.getElementById('infotable');
	aDiv.style.display="";
	document.onmousemove=function(ev)
	{
		var oEvent=ev||event;
		if ((aDiv.clientWidth+oEvent.clientX+60)<screen.width)
		aDiv.style.left=oEvent.clientX+60;
			else aDiv.style.left=screen.width-aDiv.clientWidth-10;
<<<<<<< HEAD
		if ((aDiv.clientHeight+oEvent.clientY+180)<screen.height)
=======
		if ((aDiv.clientHeight+oEvent.clientY+90)<screen.height)
>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1
		aDiv.style.top=oEvent.clientY+30;
			else aDiv.style.top=screen.height-aDiv.clientHeight-200;
	};
}

function upit(obj){
<<<<<<< HEAD
	var cc=1;
	for (cc=1;cc<=24;cc++){
	var obj1=document.getElementById(cc);
	obj1.style.border="";
	}
	obj.style.border="2px solid black";
	obj.style.zIndex=30;
	}
function addparts(tet,kin) {
	var a=0;
	for (a=0;a<=cf.length;a++)
		if (cftype[a]==editcodf) break;
		cf.splice(a,0,kin);
		cftype.splice(a,0,editcodf);
	$('#menu').modal('hide');
	readcircuit();
	drawtest();
	
}
function addcodingframe(){
	cfnum++;
	cf[cf.length]=1;
	cftype[cftype.length]=cfnum;
	readcircuit();
	drawtest();
}
function leave(){
	var aDiv=document.getElementById('infotable');
	aDiv.style.display="none";
	}
function save(){
	<?php
	$fp=fopen("http://www.sustc-genome.org.cn/igem2013/savee/flare.lgd","w");
	fwrite($fp,$test."\r\n");
	fwrite($fp,$test1."\r\n");
	fwrite($fp,"zanwu");
	fclose($fp);
	?>
	

	alert("Save successfully");
}
function open(){
	alert();
}
</script>

<script type="text/javascript">
	 var ak="<?php echo $test; ?>";
	 var cf = new Array();
     cf=ak.split(",");//codingframe 的顺序
	 var huan=cf[1];
	
	 var fk="<?php echo $test1; ?>";
	 var cftype = new Array();
     cftype=fk.split(",");//不同的codingframe
	 
	 var bk="<?php echo $sz; ?>";
=======
	obj.style.zIndex=30;
	}
</script>
<script type="text/javascript">
$(document).ready(function(e) {
    $("#forcanvas").height($("#forcanvas").height()-82);
});
</script>
<script type="text/javascript">
	 var ak="<?php echo $test; ?>";
	 var cf = new Array();
	
     cf=ak.split(",");//codingframe 的顺序
	 var huan=cf[1];
	
	 var layer=cf.length;//codingframe 的长度
	 var bk="<?php echo $sz; ?>";
	 
	 //var reactant =new Array(1,3,5,0,0,1,0);
>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1
	 var reactant = new Array();
	 reactant=bk.split(",");//产生物质的顺序

	 //var reaposition= new Array(1,1,1,0,0,2,0);
	 var mk="<?php echo $test3; ?>";
	 var reaposition = new Array();
	 reaposition=mk.split(",");

	 //var product=new Array(4,6,2,4,6,4,2);
	 var ck="<?php echo $mubiao; ?>";
	 var product = new Array();
     product=ck.split(",");//受刺激的顺序

	// var proposition= new Array(1,1,1,1,1,2,2)
	 var nk="<?php echo $test2; ?>";
	 var proposition = new Array();
     proposition=nk.split(",");

<<<<<<< HEAD
	 var cfnum1="<?php echo $cnumber; ?>";
	 cfnum=parseInt(cfnum1);

	 var cflength=new Array();
	 
	 //var relatype=new Array(0,1,0,1,0,1,0);
	 var dk="<?php echo $guanxi; ?>"; 
=======
	 var cfnum="<?php echo $cnumber; ?>";
	 //var cfnum=2;
	 var cflength=new Array(0,0,0,0,0,0,0,0,0,0);
	 
	 //var relatype=new Array(0,1,0,1,0,1,0);
	 var dk="<?php echo $guanxi; ?>";
>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1
	 var relatype = new Array();
     relatype=dk.split(",");//关系

	 //var condition=new Array('protein1','protein2','protein3','sunlight','presure','protein4','sound');
	var ek="<?php echo $ciji; ?>";
	 var condition = new Array();
     condition=ek.split(",");//条件
<<<<<<< HEAD
	
=======
	 
>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1
	 var countid=new Array();
	 for(e=1;e<=cf.length;e++){countid[e-1]=e}//通过cf给定countid
	 

<<<<<<< HEAD

	 
=======
	// var cftype=new Array(1,1,1,1,1,1,1,1,1,2,2,2,2)
	 var fk="<?php echo $test1; ?>";
	 var cftype = new Array();
     cftype=fk.split(",");//不同的codingframe
	 var can_width=720;
>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1
	 
	 function cal_length(){
		 for(e=1;e<=cfnum;e++){
			 for(f=0;f<=cftype.length;f++){
				 if(cftype[f]==e){
					 cflength[e]=cflength[e]+1;
				 }
<<<<<<< HEAD
			 }
		 }
	 }//算每条codingframe多长


=======
			 }		 
		 }
	 }
	 function corect_array(){
		 var add=cflength[1];
		 for(f=2;f<=cfnum;f++){
		    for(e=0;e<=reactant.length;e++){
			   if(reaposition[e]==f){
				   reactant[e]=parseInt(reactant[e])+parseInt(add)
			   }			   	  
		 }		 
		 add=add+cflength[f]
	   }
	   var add1=cflength[1];	  
	   for(f=2;f<=cfnum;f++){
		    for(e=0;e<=reactant.length;e++){
			   if(proposition[e]==f){	 
				   product[e]=parseInt(product[e])+parseInt(add1);				   
			   }
			   		 }			 
		 add1=add1+cflength[f]
	   }	  
	 }
function canvas(){
		var countstrain=cftype.length;
		var lastnum=2*cftype[countstrain-1];
		can_width=130*(countstrain+lastnum);
		if(countstrain>9){
			can_width=130*(countstrain+lastnum);
			obj=document.getElementById('canvas');
			obj.width=can_width;
		}
	}
>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1
	function drawimg(getype,id,left){
	    if (getype==1)
		ab="img/promoter.png";
		else if (getype==2)
		ab="img/protein coding.png"	;
		else if (getype==3)
		ab="img/RBS.png";
		else if (getype==4)
		ab="img/terminater.png"	;
		var obj=document.getElementById(id);
		obj.src=ab;
		left=left+"px"
		obj.style.left=left;
		}
<<<<<<< HEAD
		
=======
>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1
	 function readcircuit()
	 {		
			var dd=1;
			var img=new Array();
<<<<<<< HEAD
			var left=260;
			var t=0; 
			var cdn=0;
=======
			var left=130;	
			var t=1; 
>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1
		    for (b=0;b<cf.length;b++)
			{
			var obj=document.getElementById(dd);
			obj.style.top=cftype[b]*160;
			obj.style.display="";
<<<<<<< HEAD
			if (cftype[b] != t) {left=260; cdn++;var tr=100+cdn;var obj1=document.getElementById(tr); obj1.style.display=""; obj1.style.zIndex=50;obj1.style.top=cftype[b]*160+15; obj1.style.left=240;}
			drawimg(cf[b],dd,left);
			
=======
			if (cftype[b] != t) left=130;
			drawimg(cf[b],dd,left);
>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1
			t=cftype[b];
			left=left+130;
			dd=dd+1;
			}
<<<<<<< HEAD
			var obj1=document.getElementById('addc');
			obj1.style.top=t*160+100;
	 }
	 
=======
	 }
>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1
function correction(f){
		obj=document.getElementById(f);
		x=obj.offsetLeft;
		x1=x-130*(parseInt(x/130));
		if(x1%130<=65){x=x-x1;}
		else {x=x-x1+130;}
		x0=x;
		y=obj.offsetTop;
		y1=y-parseInt(y/40)*40;
		if(y%40<=20){y=y-y1}
		else {y=y-y1+40}
		y0=y;
		x0=x0+"px";
		y0=y0+"px";
		obj.style.left=x0;
		obj.style.top=y0;
	}
<<<<<<< HEAD
	
=======
>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1
	function correctiontest(obj){
		var pbj;
		var ebj;
		var bi=-1;
<<<<<<< HEAD
		obj.style.zIndex=1;
		for(e=1; e<=cf.length+1;e++){
			correction(e);
		}	//重合式对齐
		for(e=1; e<=24;e++){
=======
		
		obj.style.zIndex=1;
		
		for(e=0; e<=14;e++){
			correction(countid[e]);
		}	//重合式对齐

		for(e=1; e<=countid.length;e++){
>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1
			ebj=document.getElementById(e);
			for(p=1; p<=countid.length;p++){
				pbj=document.getElementById(p);
				if(e!=p) if ((pbj.offsetLeft==ebj.offsetLeft)&&(pbj.offsetTop==ebj.offsetTop)) {bi=pbj.offsetLeft; break;}
		}	
		}	//判断重合位点并平移
<<<<<<< HEAD
		if(bi<firstmoveed){		
			for(e=1; e<=24;e++){
=======
		
		if(bi<firstmoveed){		
			for(e=1; e<=15;e++){
>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1
				ebj=document.getElementById(e);
				if(document.getElementById(firstmoveid).offsetTop==ebj.offsetTop)
				if((ebj.offsetLeft>=bi)&&(ebj.offsetLeft<=firstmoveed)&&(ebj.id!=firstmoveid)&&(bi!=-1)) {var a=ebj.offsetLeft; a=parseInt(a)+130+"px";  ebj.style.left=a;}
				}
				}//向右移
<<<<<<< HEAD
   else if(bi>firstmoveed){
	   		for(e=1; e<=24;e++){
=======
			
   else if(bi>firstmoveed){
	   		for(e=1; e<=15;e++){
>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1
				ebj=document.getElementById(e);
				if(document.getElementById(firstmoveid).offsetTop==ebj.offsetTop)
				if((ebj.offsetLeft>=firstmoveed)&&(ebj.offsetLeft<=bi)&&(ebj.id!=firstmoveid)&&(bi!=-1)) {var a=ebj.offsetLeft; a=parseInt(a)-130+"px";  ebj.style.left=a;}
				}
			    }//向右移
		bi=-1;
	drawtest();
	}
function myfunction(){
	drawtest();
}
</script>

<<<<<<< HEAD

=======
<script src="js/jquery.js" ></script>
>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1

<script type="text/javascript">
var ie=document.all;
var nn6=document.getElementById && !document.all;
var isdrag=false;
var x,y;
var dobj;
<<<<<<< HEAD

=======
function leave(){
	var aDiv=document.getElementById('rightbottom');
	aDiv.style.display="none";
	}
>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1
function movemouse(e)
{
if (isdrag)
{
dobj.style.left = nn6 ? tx + e.clientX - x : tx + event.clientX - x;
//dobj.style.top  = nn6 ? ty + e.clientY - y : ty + event.clientY - y;
 return false;
}
}
function selectmouse(e)
{
var fobj       = nn6 ? e.target : event.srcElement;
  var topelement = nn6 ? "HTML" : "BODY";
  while (fobj.tagName != topelement  &&  fobj.className != "dragme")
  {
    fobj = nn6 ? fobj.parentNode : fobj.parentElement;
  }
  if (fobj.className=="dragme")
  {
    isdrag = true;
    dobj = fobj;
//	dobj.style="border-style: solid;border-width: 6px;";
    tx = parseInt(dobj.style.left+0);
    //ty = parseInt(dobj.style.top+0);
    x = nn6 ? e.clientX : event.clientX;
    //y = nn6 ? e.clientY : event.clientY;
    document.onmousemove=movemouse;
    return false;
  }
}

document.onmousedown=selectmouse;
document.onmouseup=new Function("isdrag=false");
</script>

<script>
function drawnewrela(reactantid,productid,relatype,condition,h){
	var ctx=document.getElementById('canvas').getContext('2d');
	var obj2=document.getElementById(productid);
	var x2=obj2.offsetLeft;
	var y2=obj2.offsetTop;
	if(reactantid==0){
    ctx.strokeStyle="#FFF";
	ctx.lineWidth=1;
	ctx.beginPath();	
	ctx.moveTo(x2,y2-h);
	ctx.lineTo(x2+40,y2-h);
	ctx.lineTo(x2+40,y2-9);
	ctx.stroke();
	ctx.beginPath();
	   if(relatype==0){
	       ctx.moveTo(x2+30,y2-9);
	       ctx.lineTo(x2+50,y2-9);
	       ctx.stroke();}
	   else if(relatype==1){	   
		   ctx.moveTo(x2+40,y2-4);
		   ctx.lineTo(x2+37,y2-24);
		   ctx.lineTo(x2+43,y2-24);
		   ctx.moveTo(x2+40,y2-4);
		   ctx.lineTo(x2+43,y2-24);
		   ctx.fill();
			}
//	var img1=new Image();
//	img1.src="img/proten.png";
//	ctx.drawImage(img1,x2+10,y2-h-10);画图上去
	ctx.fillStyle="white"
	ctx.font='20px Georgia';
	ctx.fillText(condition,x2+10,y2-h-10);
	ctx.fill();
	}
	else{
	var obj1=document.getElementById(reactantid);
	  var x1=obj1.offsetLeft;
	  var y1=obj1.offsetTop;
	  ctx.strokeStyle="#FFF"
	  ctx.lineWidth=1;
	  ctx.beginPath();
	     if(y1<=y2){
	       ctx.moveTo(x1+40,y1);
	       ctx.lineTo(x1+40,y1-h);
	       ctx.lineTo(x2+40,y1-h);
	       ctx.lineTo(x2+40,y2-9);
	       ctx.stroke();
	       ctx.beginPath();
	         if(relatype==0){
	           ctx.moveTo(x2+30,y2-9);
	           ctx.lineTo(x2+50,y2-9);
	           ctx.stroke();}
	         else if(relatype==1){	 
		       ctx.moveTo(x2+40,y2-4);
		       ctx.lineTo(x2+37,y2-24);
		       ctx.lineTo(x2+43,y2-24);
		       ctx.moveTo(x2+40,y2-4);
		       ctx.lineTo(x2+43,y2-24);   
		       ctx.fill();
			}
	      }
	     else{
	         ctx.moveTo(x1+40,y1);
	         ctx.lineTo(x1+40,y2-h);
	         ctx.lineTo(x2+40,y2-h);
	         ctx.lineTo(x2+40,y2-9);
	         ctx.stroke();
	         ctx.beginPath();
	          if(relatype==0){
	             ctx.moveTo(x2+30,y2-9);
	             ctx.lineTo(x2+50,y2-9);
	             ctx.stroke();}
	          else if(relatype==1){
		         ctx.moveTo(x2+40,y2-4);
		         ctx.lineTo(x2+27,y2-24);
		         ctx.lineTo(x2+53,y2-24);
		         ctx.moveTo(x2+40,y2-4);
		         ctx.lineTo(x2+53,y2-24);
		         ctx.stroke();
			  }
	      }
	 ctx.fillStyle="white"
	 ctx.font='20px Georgia';
	 ctx.fillText(condition,x1+5,y1-h-10);
	 ctx.fill();
//	 var img1=new Image();
//	 img1.src="img/proten.png";
//	 ctx.drawImage(img1,x1+5,y1-h-10);画图
}
}

function drawtest(){
	var ctx=document.getElementById('canvas').getContext('2d');	
	var h=30;
	var count=1;
	ctx.clearRect(0,0,10000,1000);	
	ctx.strokeStyle="#FFF"
	ctx.lineWidth=1;
	var op=1;

	for (op=1;op<=cfnum;op++){
		var b=0;
		for(a=0;a<=cf.length;a++){if (cftype[a]==op) b++; }
	ctx.beginPath();	
<<<<<<< HEAD
	ctx.moveTo(140,160*op+30);
	ctx.lineTo(310+130*b,160*op+30);
	ctx.stroke();
	ctx.font="20px Georgia";
	ctx.fillStyle="#FFF";
	ctx.fillText("cod "+op+" start",140,160*op+30);
	
	ctx.fillText("END",260+130*b,160*op+30);
=======
	ctx.moveTo(10,160*op+30);
	ctx.lineTo(180+130*b,160*op+30);
	ctx.stroke();
	ctx.font="20px Georgia";
	ctx.fillStyle="#FFF";
	ctx.fillText("cod "+op+" start",10,160*op+30);
	ctx.fillText("END",130+130*b,160*op+30);
>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1
	}
	
	for(i=1;i<=cf.length;i++){
		var ob=document.getElementById(i);
		ctx.font="10px Georgia";
		ctx.fillStyle="#FFF";
		ctx.fillText(name1[i-1],ob.offsetLeft,ob.offsetTop+50);	
	}//画出parts文字
	for(i=0;i<=reactant.length;i++){
		if(cftype[reactant[i]]>count){
			h=30;
			count=count+1;
		}
		drawnewrela(reactant[i],product[i],relatype[i],condition[i],h)
		h=h+40;	
	}//画出线来
}
	 // JavaScript Document
</script>

<script type="text/javascript">
<<<<<<< HEAD
     $(document).ready(function(){
          $(".dragme").dblclick(function(){
            //$(this).remove();
			$(this).style.display="none";
            var removeid= $(this).attr('id');
			alert(removeid);
=======
function leave(){
	var aDiv=document.getElementById('infotable');
	aDiv.style.display="none";
	}
	
     $(document).ready(function(){
          $(".dragme").dblclick(function(){
            $(this).remove();
            var removeid= $(this).attr('id');
>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1
            for(e=0;e<=reactant.length;e++){
				if(reactant[e]==removeid){
					reactant.splice(e,1);
					condition.splice(e,1);
					relatype.splice(e,1);
					product.splice(e,1);
				}
				else if(product[e]==removeid){
					product.splice(e,1);
					reactant.splice(e,1);
					condition.splice(e,1);
					relatype.splice(e,1);
				}
			}
			for(e=0;e<=countid.length;e++){
				if(countid[e]==removeid){
					countid.splice(e,1);
				}
			}
			cf.splice(removeid-1,1);
  });
});
<<<<<<< HEAD


</script>

		<script>
			$(document).ready(function(){
				$('#myTab a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
				})
			});
		</script>

</head>
<body onLoad=" cal_length();readcircuit();drawtest();tablecollapse()" >
=======
</script>

<script language="javascript">
function tablecollapse()
{
	/* Variables */
	var collapseClass='footcollapse';
	var collapsePic='http://www.webjx.com/upfiles/20070619/20070619214338_arrow_up.gif';
	var expandPic='http://www.webjx.com/upfiles/20070619/20070619214348_arrow_down.gif';
	var initialCollapse=true;

	// loop through all tables
	var t=document.getElementsByTagName('table');
	var checktest= new RegExp("(^|\\s)" + collapseClass + "(\\s|$)");
	for (var i=0;i<t.length;i++)
	{
		// if the table has not the right class, skip it
		if(!checktest.test(t[i].className)){continue;}		
		// make the footer clickable
		t[i].getElementsByTagName('tfoot')[0].onclick=function()
		{
			// loop through all bodies of this table and show or hide 
			// them
			var tb=this.parentNode.getElementsByTagName('tbody');
			for(var i=0;i<tb.length;i++)
			{
				tb[i].style.display=tb[i].style.display=='none'?'':'none';
			}			
			// change the image accordingly
			var li=this.getElementsByTagName('img')[0];
			li.src=li.src.indexOf(collapsePic)==-1?collapsePic:expandPic;	
		}
		// if the bodies should be collapsed initially, do so
		if(initialCollapse)
		{
			var tb=t[i].getElementsByTagName('tbody');
			for(var j=0;j<tb.length;j++)
			{
				tb[j].style.display='none';
			}			
		}
		// add the image surrounded by a dummy link to allow keyboard 
		// access to the last cell in the footer
		var newa=document.createElement('a');
		newa.href='#';
		newa.onclick=function(){return false;}
		var newimg=document.createElement('img');
		newimg.src=initialCollapse?expandPic:collapsePic;
		var tf=t[i].getElementsByTagName('tfoot')[0];
		var lt=tf.getElementsByTagName('td')[tf.getElementsByTagName('td').length-1];
		newa.appendChild(newimg);
		lt.insertBefore(newa,lt.firstChild);
	}		
}
// run tablecollapse when the page loads
</script>

<script>
function navi(obj){
	var newid=obj.id;
	var newobj=new Array();
	obj.width="195";
	obj.height="70";
	var newa=parseInt(newid);
	newa=newa+1;
	for(newa;newa<=103;newa++){
		newobj[newa]=document.getElementById(newa);
		var b=newobj[newa].offsetTop;
		b=b+20+"px"
		newobj[newa].style.top=b;
	}
}
function navi1(obj){
	var newid=obj.id;
	var newobj=new Array();
	obj.width="150";
	obj.height="50";
	var newa=parseInt(newid);
	newa=newa+1;
	for(newa;newa<=102;newa++){
		newobj[newa]=document.getElementById(newa);
		var b=newobj[newa].offsetTop;
		b=b-20+"px"
		newobj[newa].style.top=b;
	}
}

function test(obj){
	        e=obj.id;		
			var E=parseInt(e)+23;
			var obj1=document.getElementById(E);
			var url='img/'+obj.title+'.png';
			obj1.src=url; 
			obj1.style.left="0px";
			obj1.style.top="0px";
}
</script>
<script>
function addcodf(){
	cfnum++;
	}
</script>
</head>
<body onLoad=" cal_length();corect_array();canvas();readcircuit();drawtest();tablecollapse()" >
>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1

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
                <li><a href="#" title="Login">LOGIN</a></li>
                <li class="divider-vertical"></li>
                <li><a href="submit.html" title="Upload">UPLOAD</a></li>
            </ul>
            <form class="navbar-search">
                    <input type="text" class="span2 search-query" placeholder="Search">
            </form>
        </span>
    
        </div>
   </div>
        
		<div id="infotable" style="position:absolute; display:none;z-index:100;">
        	<table class="footcollapse">
        	<thead> <tr> <th background="img/infromation.png"  height="25" width="600"></th></tr></thead>
        	<tbody>
        	<tr><td id="td1" bgcolor="#111">name:</td></tr>
        	<tr><td id="td2" bgcolor="#222">number:</td></tr>
        	<tr><td id="td3" bgcolor="#111">description:</td></tr>
        	</tbody>
        	<tfoot>
        	<tr id="tr1"><td bgcolor="#222"></td>
        	</tr>
        	</tfoot>
        	</table>
        </div>
   
	    <div id="forcanvas">
      		<canvas width="5000" height="4000" id="canvas">not avoluable on your brosower</canvas>  
<<<<<<< HEAD
				
				<div id="open" style="z-index:100" class="btn-group btn-group-vertical">
				<input class="btn" type="file" name="file" id="file" /> 
				<a class="btn" href="#" title="open" onClick="alert()"><i class="icon-print"></i></a>
				</div>
				
				<div id="files" style="z-index:100" class="btn-group btn-group-vertical">
				<a class="btn" href="#" title="ReNew" onClick="location=location"><i class="icon-repeat"></i></a>
				<a class="btn" href="savee/flare.lgd" title="Save in your computer" onClick="save()"><i class="icon-download-alt"></i></a>
				</div>
				
				<div id="tools" style="z-index:100" class="btn-group btn-group-vertical">
				<a class="btn" href="#" title="Cut"><i class="icon-pencil"></i></a>
				<a class="btn" href="#" title="Copy"><i class="icon-folder-close"></i></a>
				<a class="btn" href="#" title="Paste"><i class="icon-edit"></i></a>
				<a class="btn" href="#" title="Delete"><i class="icon-remove"></i></a>
				</div>
		
            
				<img id="1"  src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/>      
				<img id="2"  src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
				<img id="3"  src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
				<img id="4"  src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
				<img id="5"  src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
				<img id="6"  src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
				<img id="7"  src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
				<img id="8"  src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
				<img id="9"  src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
				<img id="10" src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
				<img id="11" src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
				<img id="12" src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
				<img id="13" src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
				<img id="14" src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
				<img id="15" src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
				<img id="16" src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
				<img id="17" src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
				<img id="18" src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
				<img id="19" src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
				<img id="20" src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
				<img id="21" src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
				<img id="22" src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
				<img id="23" src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
				<img id="24" src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
			
	 
				<img id="101" href="#menu" data-toggle="modal" src="img/add.png" style="position:absolute; display:none;" onClick="editcodf=1;"/>
				<img id="102" href="#menu" data-toggle="modal" src="img/add.png" style="position:absolute; display:none;" onClick="editcodf=2;"/>
				<img id="103" href="#menu" data-toggle="modal" src="img/add.png" style="position:absolute; display:none;" onClick="editcodf=3;"/>
				<img id="104" href="#menu" data-toggle="modal" src="img/add.png" style="position:absolute; display:none;" onClick="editcodf=4;"/>
				<img id="105" href="#menu" data-toggle="modal" src="img/add.png" style="position:absolute; display:none;" onClick="editcodf=5;"/>
				<img id="106" href="#menu" data-toggle="modal" src="img/add.png" style="position:absolute; display:none;" onClick="editcodf=6;"/>
				<img id="107" href="#menu" data-toggle="modal" src="img/add.png" style="position:absolute; display:none;" onClick="editcodf=7;"/>
				<button id="addc" class="btn-primary" type="button" style=" left:140px; top:250px; position:absolute;" onClick="addcodingframe()">AddNewCodingframe</button>
				
				
				
			
				
				<div id="menu" class="modal hide fade">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<ul class="nav nav-tabs" id="myTab">
						<li class="active"><a href="#home">Promoter</a></li>
						<li><a href="#profile">RBS</a></li>
						<li><a href="#messages">Coding se</a></li>
						<li><a href="#settings">Termen</a></li>
						</ul>
					</div>
					
					<div class="modal-body">
						<div class="tab-content">
						<div class="tab-pane active" id="home">
						    <table class="table">
							<tr class="success">
							<td><a onClick="addparts(this.text,1)">Lacl(R00010)</a></td>
							</tr>
							<tr class="success">
							<td><a onClick="addparts(this.text,1)">PtetR(R0040)</a></td>
							</tr>
							</table>
						</div>
						<div class="tab-pane" id="profile">...</div>
						<div class="tab-pane" id="messages">...</div>
						<div class="tab-pane" id="settings">...</div>
						</div>
					</div>
					
					<div class="modal-footer">
					<a href="#" class="btn btn-primary">Add it to codingframe</a>
					</div>
					
				</div>
				   
		</div>
=======

            
            <img id="1"  src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/>      
            <img id="2"  src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
            <img id="3"  src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
            <img id="4"  src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
            <img id="5"  src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
            <img id="6"  src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
            <img id="7"  src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
            <img id="8"  src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
            <img id="9"  src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
            <img id="10" src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
            <img id="11" src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
            <img id="12" src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
            <img id="13" src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
            <img id="14" src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
            <img id="15" src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
            <img id="16" src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
            <img id="17" src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
            <img id="18" src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
            <img id="19" src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
            <img id="20" src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
            <img id="21" src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
            <img id="22" src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
            <img id="23" src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
            <img id="24" src="" class="dragme" style="top: 160px; display:none;" onMouseDown="upit(this)" onMouseUp="correctiontest(this)" onMouseMove="myfunction()" onMouseOver="information(this)"onMouseOut="leave()"/> 
     </div>
>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1
  
</body>
</html>

<<<<<<< HEAD

=======
            <?php
			for ($as=1;$as<=30;$as++);
			echo("<img id=\""+$as+" \"src=\"\" class=\"dragme\" style=\"top: 160px\" onMouseDown=\"upit(this)\" onMouseUp=\"correctiontest(this)\" onMouseMove=\"myfunction()\" onMouseOver=\"information(this)\"onMouseOut=\"leave()\"/>");
			?> 
>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1
