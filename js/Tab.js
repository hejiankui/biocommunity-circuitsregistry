<<<<<<< HEAD
function send(s) {
	if((!s.children)&&(!s._children)){
		if(s.name!="nothing") {
			xmlHttp=GetXmlHttpObject();
			var url="mr.php";
			url=url+"?no="+s.name;
			url=url+"&sid="+Math.random();
			xmlHttp.onreadystatechange=stateChanged;
			xmlHttp.open("GET",url,true);
			xmlHttp.send(null);
		}
		else {
			$('#sorry').modal();
		}
	}
}	

function stateChanged() { 
	if (xmlHttp.readyState==4) {
		$('#myModal').modal();
		var cont = new Array();
		cont = xmlHttp.responseText.split("$");
		var des = cont[0].split("|");
		var equi = cont[1].split("|");
		var mat = cont[3].split("|");
		var proce = cont[2].split("|");
		var ref = cont[4].split("|");
		
		var Ecoid=des[0];
		var pro=des[1];
		var evidence=des[2];
		var author=des[3];
		var year=des[4];
		var contributor=des[5];
		var Email=des[6];
		var proimg=des[7];
		var description=des[8];
		var cctimg=des[9];
		
		$("#Ecoid").html(Ecoid);
		$("#pro").html(pro);
		$("#author").html(author);
		$("#year").html(year);
		$("#evidence").html("");
		for(var k=3;k>=evidence;k--) {
			$("#evidence").append("<i class='icon-star'></i>");
		}
		$("#contri").html("Submitted by "+contributor+"<"+Email+">");

		if(proimg!=0) {
			$("#pro_img").css("display","block");
			$("#pro_img").attr("src",proimg);
		}
		else {
			$("#pro_img").css("display","none");
		}

		$("#des").html(description);

		var write = "";
		if(equi!=0&&mat!=0&&proce!=0) {
			write = "<h4>Equipment</h4><ol>";
			for(var j=0;j<equi.length;j++) {
				write+=("<li>"+equi[j]+"</li>");
			}
			write+="</ol><h4>Material</h4><ol>";
			for(var j=0;j<mat.length;j++) {
				write+=("<li>"+mat[j]+"</li>");
			}
			write+="</ol><h4>Procedure</h4><ol>";
			for(var j=0;j<proce.length;j++) {
				write+=("<li>"+proce[j]+"</li>");
			}
			write+="</ol>";
		}
		else {
			write+="There is no protocol.";
		}
		$("#exp").html(write);
		
		if(cctimg!=0) { 
			$("#cir_img").css("display","block");
			$("#cir_img").attr("src", cctimg);
		}
		else {
			$("#cir_img").css("display","none");
		}
		
		if(ref!=0) {
			write = "<ul>";
			for(var j=0;j<ref.length;j++) {
				write+=("<li>"+ref[j]+"</li>");
			}
			write+="</ul>"
		}
		else {
			write = "There is no reference."
		}
		$("#ref").html(write);
		
		$("#link_lgd").attr("href","lgd.php?name="+Ecoid);
	}
}

=======
// JavaScript Document
function send(s) {
	//if((!s.children)&&(!s._children)){
		xmlHttp=GetXmlHttpObject();
		var url="mr.php";
		var name=s.name;
		url=url+"?no="+name;
		url=url+"&sid="+Math.random();
		xmlHttp.onreadystatechange=stateChanged;
		xmlHttp.open("GET",url,true);
		xmlHttp.send(null);
//	}
}	

function stateChanged() { 
	if (xmlHttp.readyState==4) { 
		showDiv('MyDiv','fade'); 
		var cont = new Array(); //定义一数组
		cont = xmlHttp.responseText.split("$"); //字符分割
		var inf = cont[0].split("|");
		var equi = cont[1].split("|");
		var solu = cont[3].split("|");
		var proce = cont[2].split("|")
		
		document.getElementById("mname").innerHTML=inf[0];
		document.getElementById("mno").innerHTML=inf[1];
		document.getElementById("mcat").innerHTML=inf[2];
		//document.getElementById("msrc").setAttribute("href", inf[3]);
		document.getElementById("mdes").innerHTML=inf[4];
		document.getElementById("circuit_img").setAttribute("src",inf[5]);
		document.getElementById("link_lgd").setAttribute("href","lgd.php?name="+inf[1]);

		var write = "<ol>";
		for(var j=0;j<equi.length;j++) {
			write+=("<li>"+equi[j]+"</li>");
		}
		write+="</ol>";
		document.getElementById("equipment").innerHTML=write;
		
		write = "<ol>";
		for(var j=0;j<solu.length;j++) {
			write+=("<li>"+solu[j]+"</li>");
		}
		write+="</ol>";
		document.getElementById("solution").innerHTML=write;
		
		write = "<ol>";
		for(var j=0;j<proce.length;j++) {
			write+=("<li>"+proce[j]+"</li>");
		}
		write+="</ol>";
		document.getElementById("procedure").innerHTML=write;
	}
}


>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1
function GetXmlHttpObject() {
	var xmlHttp=null;
	try {
    // Firefox, Opera 8.0+, Safari
		xmlHttp=new XMLHttpRequest();
    }
	catch (e) {
    // Internet Explorer
		try {
			xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch (e) {
			xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
    }
	return xmlHttp;
<<<<<<< HEAD
=======
}

//弹出隐藏层
function showDiv(show_div,bg_div) {
	document.getElementById(show_div).style.display='block';
	document.getElementById(bg_div).style.display='block' ;
};
//关闭弹出层
function closeDiv(show_div,bg_div) {
	document.getElementById(show_div).style.display='none';
	document.getElementById(bg_div).style.display='none';
};
function tab(t) {
	document.getElementById("mr_Information").style.display="none";
	document.getElementById("mr_Protocol").style.display="none";
	document.getElementById("mr_Comment").style.display="none";
	document.getElementById("mr_Circuit").style.display="none";
	document.getElementById("mr_"+t.innerHTML).style.display="block";
>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1
}