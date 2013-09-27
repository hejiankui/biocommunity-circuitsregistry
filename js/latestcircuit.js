// JavaScript Document
var lprojects;
var lnum;
var lcount = 1;
var lnummax;
function getJSON_02(json_02) {
    lprojects = json_02;
	lnum=lprojects.length;
	lcalmax();
	llist();
}


function lcalmax() {
    lnummax = parseInt(lnum / 15);
    if (lnum % 15 !== 0) {
        lnummax = lnummax + 1;
    }
}


function llist() {
    var mediaheading = "media-heading";
    var mediabody = "media-body";
	var imgurl;
	var imgurlid="img";
	var media="media"
    var li = (lcount - 1) * 15;
    var lj = li + 15;
    for (li; li < lj; li++) {
        mediaheading = mediaheading + (li - (lcount - 1) * 15);
		imgurlid=imgurlid+(li - (lcount - 1) * 15);		
        mediabody = mediabody + (li - (lcount - 1) * 15);
		media=media+(li - (lcount - 1) * 15);
		
        if (li < lnum) {
            document.getElementById(mediaheading).innerHTML = lprojects[li].name;
			document.getElementById(mediaheading).name = lprojects[li].bacterianum;		
            document.getElementById(mediabody).innerHTML = lprojects[li].des;
			imgurl="img/latestcircuit/"+lprojects[li].bacterianum+".png";
			document.getElementById(imgurlid).src=imgurl;
			document.getElementById(media).style.display=""
			
			
        } 
		else {
		   
			document.getElementById(media).style.display="none";
			
		
        }
		
        mediaheading = "media-heading";
        mediabody = "media-body";
		imgurlid="img";
		media="media"
		
				
    }
}

function lclicklast() {
    if (lcount > 1) {
        lcount = lcount - 1;
        llist();
        lurl = "img/" + lcount + ".png";
        document.getElementById('lnum').src = lurl;
        document.getElementById('lnum1').src = lurl;
    }
}

function lclicknext() {
	
    if (lcount < lnummax) {
        lcount = lcount + 1;
        llist();		
        lurl = "img/" + lcount + ".png";
        document.getElementById('lnum').src = lurl;
    }
}
function chanlate(obj){
	if(obj.innerHTML=="Latest Project"){
		document.getElementById('regularcircuit').style.display="none";
		document.getElementById('latestcircuit').style.display="";
		obj.innerHTML="ALL Projects";
		
		
		
	}
	else{
		document.getElementById('regularcircuit').style.display="";
		document.getElementById('latestcircuit').style.display="none";
		obj.innerHTML="Latest Project";
	}
}