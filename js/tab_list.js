function send(s) {
	xmlHttp=GetXmlHttpObject();
	var url="mr.php";
	url=url+"?no="+s.name;
	url=url+"&sid="+Math.random();
	xmlHttp.onreadystatechange=stateChanged;
	xmlHttp.open("GET",url,true);
	xmlHttp.send(null);
        
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
        fetch();
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