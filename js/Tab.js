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
}