
var projects;
var project_0;
var num;
var count = 1;
var nummax;
function getJSON(json) {
    projects = json;
	project_0=projects[0]
    num = project_0.length;
    list();
    calmax();
}
function calmax() {
    nummax = parseInt(num / 15);
    if (num % 15 !== 0) {
        nummax = nummax + 1;
    }
}

function change(obj) {
    var text = obj.title;
    document.getElementById('sel').innerHTML = text;
}

function list() {
    var title = "title";
    var des = "des";
    var i = (count - 1) * 15;
    var j = i + 15;
    for (i; i < j; i++) {
        title = title + (i - (count - 1) * 15);
        des = des + (i - (count - 1) * 15);
        if (i < num) {
            document.getElementById(title).innerHTML = project_0[i].name;
			document.getElementById(title).name = project_0[i].bacterianum;
            document.getElementById(des).innerHTML = project_0[i].des;
        } else {
            document.getElementById(title).innerHTML = "";
			document.getElementById(title).name = "";
            document.getElementById(des).innerHTML = "";
        }
        title = "title";
        des = "des";
    }
}

function clicklast() {
    if (count > 1) {
        count = count - 1;
        list();
        url = "img/" + count + ".png";
        document.getElementById('num').src = url;
        document.getElementById('num1').src = url;
    }
}

function clicknext() {
    if (count < nummax) {
        count = count + 1;
        list();
        url = "img/" + count + ".png";
        document.getElementById('num').src = url;
        document.getElementById('num1').src = url;
    }
}
function changeorder(obj){
	var order=parseInt(obj.name);
	project_0=projects[order];
	count=1;
	list();
	url = "img/" + count + ".png";
    document.getElementById('num').src = url;
    document.getElementById('num1').src = url;
	
}