
var coding_num = 0;
var each_coding = new Array();
var each_length = new Array();
var cf=new Array();
var cf_des=new Array();
var cf_name=new Array();
var substance_name=new Array();
var substance_id=new Array();
var substance_des=new Array();
var substance_property=new Array();
var source_1=new Array();
var target_1=new Array();
var source_2=new Array();
var target_2=new Array();
var source_3=new Array();
var target_3=new Array();
var target_3_type=new Array()
var expression=new Array();
var substance_property=new Array();
var relatype1=new Array();/*第三步*/
var relatype_1=new Array();
var initial=1;
var a=0;
var b=0;
var c=0;
var d=0;
var e=0;

function getOffset(id) {
  console.log(id);
  var obj = document.getElementById(id);
  var strLeft = obj.style.left;
  var strTop = obj.style.top;
  //remove px
  strLeft = strLeft.substr(0, strLeft.length - 2);
  strTop = strTop.substr(0, strTop.length - 2);
  return {
    offsetLeft: Number(strLeft),
    offsetTop: Number(strTop),
  };
}

function addImage(id, src, left, top) {
  var strStyle = '';
  var iscf = false;
  if (left) {
    strStyle += 'left:' + left + 'px;';
  }
  if (top) {
    strStyle += 'top:' + top + 'px;';
  }
  if (String(id).substr(0, 1) == 'a') {
    iscf = true;
  }
  //$('.lgd-render').append('<img id="' + id + '" src="' + src + '" style="' + strStyle + '" onMouseOver="info_show(this,' + iscf + ');" onMouseOut="info_hide();" />');
  var obj = document.getElementById(id);
  obj.src = src;
  obj.style.left = left + 'px';
  if (top) {
    obj.style.top = top + 'px';
  }
}

function init_lgd_var(circuit_lgd) {
  coding_num = circuit_lgd.codingframe.length;
  for (var e=0;e<coding_num;e++) {
    each_coding[e]=circuit_lgd.codingframe[e].biobrick.length;
  }
  
  for (var f=0;f<coding_num;f++) {
    for(var e=0;e<circuit_lgd.codingframe[f].biobrick.length;e++) {
      cf[d]=circuit_lgd.codingframe[f].biobrick[e].dnaproperty.id-3;  /*具体哪个不清楚*/
      cf_des[d]=circuit_lgd.codingframe[f].biobrick[e].function;
      cf_name[d]=circuit_lgd.codingframe[f].biobrick[e].name;
      d++;
    }
  }

  for (var e=0;e<circuit_lgd.substance.length;e++) {
    substance_name[e]=circuit_lgd.substance[e].name;
    substance_id[e]=circuit_lgd.substance[e].id;
  }

  f = substance_id[0];
  for(var e=0;e<substance_id.length;e++) {
    substance_id[e]=substance_id[e]-f+1;
  }

  each_length[0]=0;
  for (var e=1;e<coding_num;e++) {
    each_length[e]=each_length[e-1]+each_coding[e-1];
  }
  
  for (var e=0; e<circuit_lgd.regulation.length;e++) {
    if (circuit_lgd.regulation[e].type==0) {
      source_2[a]=circuit_lgd.regulation[e].source.id-f+1;
      target_2[a]=circuit_lgd.regulation[e].target.id-f+1;
      relatype_1[a]=circuit_lgd.regulation[e].relation.id;
      expression[a]=circuit_lgd.regulation[e].expression.id-f+1;    
      a++;
    } else if (circuit_lgd.regulation[e].type==1) {
      source_3[b]=circuit_lgd.regulation[e].source.id-f+1;
      target_3[b]=circuit_lgd.regulation[e].target.order+each_length[circuit_lgd.regulation[e].target.codingframe_id-1];
      relatype1[b]=circuit_lgd.regulation[e].relation.id-3;
      if(circuit_lgd.regulation[e].target.type=="biobrick") {
        target_3_type[b]=1;
      } else {
        target_3_type[b]=0;
      }
      b++;
    } else if (circuit_lgd.regulation[e].type==2) {
      source_1[c]=circuit_lgd.regulation[e].source.order+each_length[circuit_lgd.regulation[e].source.codingframe_id-1];
      target_1[c]=circuit_lgd.regulation[e].expression.id-f+1;
      c++;
    }
  }
  for (var e=0;e<target_3.length;e++) {
    if (target_3_type[e]==0) {
      target_3=target_3-f+1;
    }
  }
}

function property() {
  for (var g=0;g<substance_id.length;g++) {
    substance_property[g]=0;
  }
  for (var e=0;e<source_3.length;e++) {
    for (var f=0;f<target_1.length;f++) {
      if (source_3[e]==target_1[f]) {
        substance_property[source_3[e]-1]=1;
      }
      if (source_3[e]==expression[f]) {
        substance_property[source_3[e]-1]=1;
      }
    }
  }
  
  for (var e=0;e<source_2.length;e++) {
    for (var f=0;f<target_1.length;f++) {
      if (source_2[e]==target_1[f]) {
        substance_property[source_2[e]-1]=1;
      }
      if (source_2[e]==expression[f]) {
        substance_property[source_2[e]-1]=1;
      }
    }
  }
}
  
function calbig() {
  var width=(cf.length+2*coding_num)*40;
  if (width>800) {
    var obj=document.getElementById('canvas');
    obj.width=width;
  }
  if (source_2.length < 1) {
    for (var e=0; e<cf.length; e++){
      var obj=document.getElementById(e+1);
      obj.style.top = 340 + 'px';
    }
  }
}

function draw() {
  var ctx=document.getElementById('canvas').getContext('2d');
  ctx.strokeStyle="#666";
  ctx.lineWidth=4;
  for (var e=0;e<cf.length;e++) {
    var obj=getOffset(e+1);
    var x=obj.offsetLeft;
    var y=obj.offsetTop;

    ctx.fillStyle="black";
    ctx.font='10px Arial';
    ctx.fillText(cf_name[e],x,y+60);
    ctx.fill();
  }
}
  
function drawimg(getype, id, left) {
  var ab = '';
  switch (getype) {
    case 1:
      ab="/static/img/lgd/promoter.png";
      break;
    case 2:
      ab="/static/img/lgd/RBS.png";
      break;
    case 3:
      ab="/static/img/lgd/protein coding.png";
      break;
    case 4:
      ab="/static/img/lgd/terminater.png";
      break;
  }

/*
  var obj = document.getElementById(id);
  var strleft = (left*40) + "px";

  obj.src = ab;
  obj.style.left = strleft;
*/
  addImage(id, ab, left*40);
}

function readcircuit() {
  var a=0
  var c=0;       
  for (var b=0;b<cf.length;b++) {
    if (c == each_coding[a]) {
      initial=initial+2;
      a++;
      c=0;
    }  
    drawimg(cf[b], b+1, initial);
    initial=initial+1;
    c++;
  }
}
     
function firststep(id1,id2,h,name){
  var ctx=document.getElementById('canvas').getContext('2d');
  var obj1=getOffset(id1);
  var x1=obj1.offsetLeft;
  var y1=obj1.offsetTop;
  ctx.strokeStyle="#666"
  ctx.lineWidth=2
  ctx.beginPath();
  ctx.moveTo(x1+20,y1);
  ctx.lineTo(x1+20,y1-35-h);
  ctx.stroke();

  ctx.fillStyle="black";
  ctx.beginPath();
  ctx.moveTo(x1+20,y1-37-h);
  ctx.lineTo(x1+10,y1-27-h);
  ctx.moveTo(x1+20,y1-37-h);
  ctx.lineTo(x1+30,y1-27-h);
  ctx.lineTo(x1+10,y1-27-h);
  ctx.fill();
  ctx.font='10px Georgia';
  ctx.fillText(name,x1+35,y1-h-45);
  ctx.fill();
  id2="a"+id2;
/*
  var obj2=document.getElementById(id2);
  obj2.src="/static/img/lgd/protein.png";
  obj2.style.left=x1+10;
  obj2.style.top=y1-60-h;
*/
  addImage(id2, '/static/img/lgd/protein.png', x1+10, y1-60-h);
}

function drawrela_1(){
  var h=0;
  for (var e=0;e<source_1.length;e++) {
    firststep(source_1[e],target_1[e],h,substance_name[target_1[e]-1]);
    h=h+20;
  }
}

function secondstep_1(id3,id4,id5,name1){
  var ctx=document.getElementById('canvas').getContext('2d');
  id3="a"+id3;
  id4="a"+id4;
  id5="a"+id5;
  var obj1=getOffset(id3);
  var obj2=getOffset(id4);
  var x3=obj1.offsetLeft;
  var y3=obj1.offsetTop;
  var x4=obj2.offsetLeft;
  var y4=obj2.offsetTop;
  var x5=(x3+x4)/2;
  var y5;
  if (y3 > y4) {
    y5=y4-10;
  } else {
    y5=y3-10;
  }
  ctx.strokeStyle="#666"
  ctx.lineWidth=2
  ctx.beginPath();
  ctx.moveTo(x3+10,y3-3);
  ctx.lineTo(x5,y5);
  ctx.lineTo(x4+10,y4-3);
  ctx.stroke();
  ctx.beginPath();
  ctx.fillStyle="black"
  ctx.font='10px Georgia';
  ctx.fillText(name1,x5+13,y5-10);
  ctx.fill();
/*
  var obj3=document.getElementById(id5);
  obj3.src="/static/img/lgd/protein.png";
  obj3.style.left=x5-10;
  obj3.style.top=y5-25;
*/
  addImage(id5, '/static/img/lgd/protein.png', (x5-10), (y5-25));
}

function secondstep_2(id9,id10) {
  
  var name_length=substance_name[id10-1].length;
  var name_length_1=substance_name[id9-1].length;
  var ctx=document.getElementById('canvas').getContext('2d');
  substance_property_id=id9-1;
  id9="a"+id9;
  id10="a"+id10;
  var obj1=getOffset(id9);
  var obj2=getOffset(id10);
  var x9=obj1.offsetLeft;
  var y9=obj1.offsetTop;
  var x10=obj2.offsetLeft;
  var y10=obj2.offsetTop;

  if (substance_property[substance_property_id]==1) {
    if (y9>y10) {
      if (x9<x10) {
        ctx.strokeStyle="#666";
        ctx.lineWidth=2;
        ctx.beginPath();
        ctx.moveTo(x9+10,y9-10);
        ctx.lineTo(x9+10,y10+25);
        ctx.lineTo(x10-10,y10+25);
        ctx.moveTo(x10-10,y10+12);
        ctx.lineTo(x10-10,y10+33);
        ctx.stroke();    
      } else {
        ctx.strokeStyle="#666";
        ctx.lineWidth=2;
        ctx.beginPath();
        ctx.moveTo(x9+20,y9-10);
        ctx.lineTo(x9+20,y10+20);
        ctx.lineTo(x10+15*name_length,y10+20);
        ctx.moveTo(x10+15*name_length,y10);
        ctx.lineTo(x10+15*name_length,y10+40);
        ctx.stroke();
      }
    } else {
      if (x9<x10) {
        ctx.strokeStyle="#666";
        ctx.lineWidth=2;
        ctx.beginPath();
        ctx.moveTo(x9+40+name_length_1*15,y9+20);
        ctx.lineTo(x10+20,y9+20);
        ctx.lineTo(x10+20,y10-10);
        ctx.moveTo(x10,y10-10);
        ctx.lineTo(x10+40,y10-10);
        ctx.stroke();
      } else {
        ctx.strokeStyle="#666";
        ctx.lineWidth=2;
        ctx.beginPath();
        ctx.moveTo(x9-10 ,y9+20);
        ctx.lineTo(x10+20,y9+20);
        ctx.lineTo(x10+20,y10-10);
        ctx.moveTo(x10,y10-10);
        ctx.lineTo(x10+40,y10-10);
        ctx.stroke();
      }
    }
  } else {  
/*
     var obj=document.getElementById(id9);
     obj.src="/static/img/lgd/people.png";
     obj.style.left=x10-140;
     obj.style.top=y10-30;
*/
    addImage(id9, '/static/img/lgd/people.png', (x10-140), (y10-30));

    ctx.strokeStyle="#666";
    ctx.lineWidth=2;
    ctx.beginPath();
    ctx.moveTo(x10-110,y10);
    ctx.lineTo(x10-70,y10);
    ctx.lineTo(x10-70,y10+10);
    ctx.lineTo(x10-10,y10+10);
    ctx.moveTo(x10-10,y10);
    ctx.lineTo(x10-10,y10+20);
    ctx.stroke();
    ctx.beginPath();
    ctx.font='10px Georgia';
    ctx.fillText(substance_name[substance_property_id],x10-120,y10-15);
    ctx.fill();
  }
}
  
function drawrela_2() {
  for (var e=0;e<source_2.length;e++) {
    if (relatype_1[e]==1) {
      secondstep_1(source_2[e],target_2[e],expression[e],substance_name[expression[e]-1]);
    } else {
      secondstep_2(source_2[e],target_2[e]);
    }
  }
}
  
function thirdstep(id6,id7,property,relatype1,type){
  var ctx = document.getElementById('canvas').getContext('2d');
  if (property==0) {  
    if (type==0) {
      id7="a"+id7;
    }
    var obj2=getOffset(id7);
    var x6=obj2.offsetLeft;
    var y6=obj2.offsetTop;
    ctx.beginPath();
    ctx.fillStyle="black";
    ctx.font='10px Georgia';
    ctx.fillText(substance_name[parseInt(id6)-1],x6+20,y6-100);
    ctx.fill();
  
    id6="a"+id6;
/*
    var obj1=document.getElementById(id6);
    obj1.src="/static/img/lgd/people.png"
    obj1.style.left=x6-5;
    obj1.style.top=y6-120;
*/
    addImage(id6, '/static/img/lgd/people.png', (x6-5), (y6-120));

    ctx.strokeStyle="#666";
    ctx.lineWidth=2;
    ctx.beginPath();            
    ctx.moveTo(x6+20,y6-15);
    ctx.lineTo(x6+20,y6-80);
    ctx.lineTo(x6+120,y6-80);
    ctx.stroke();
    if(relatype1==0){
      ctx.beginPath();
      ctx.moveTo(x6+20,y6-10);
      ctx.lineTo(x6+20,y6-20);
      ctx.lineTo(x6+25,y6-20);
      ctx.moveTo(x6+20,y6-10);
      ctx.lineTo(x6+25,y6-20);
      ctx.fill()
    } else {
      ctx.beginPath();
      ctx.moveTo(x6+25,y6-15);
      ctx.lineTo(x6+55,y6-15);
    }
    ctx.stroke();
  } else {
    var name_length=substance_name[id6-1].length;
    
    id6="a"+id6;
    if(type==0){
      id7="a"+id7;
    }
    var obj3=getOffset(id6);
    var obj4=getOffset(id7);
    var x7=obj3.offsetLeft;
    var y7=obj3.offsetTop;  
    var x8=obj4.offsetLeft;
    var y8=obj4.offsetTop;
    if (x7<x8) {
      ctx.strokeStyle="#666";
      ctx.lineWidth=2;
      ctx.beginPath();
      ctx.moveTo(x7+15+5*name_length+40,y7+10);
      ctx.lineTo(x8+20,y7+10);
      ctx.lineTo(x8+20,y8-7);
      ctx.stroke();
      if (relatype1==1) {
         ctx.beginPath();
         ctx.moveTo(x8+10,y8-7);
         ctx.lineTo(x8+30,y8-7);
         ctx.stroke();
      } else {
         ctx.beginPath();
         ctx.moveTo(x8+20,y8-7);
         ctx.lineTo(x8+10,y8-15);
         ctx.lineTo(x8+30,y8-15);
         ctx.moveTo(x8+20,y8-7);
         ctx.lineTo(x8+30,y8-15);       
         ctx.fill();
      }
    } else {
      ctx.strokeStyle="#666";
      ctx.lineWidth=2;
      ctx.beginPath();
      ctx.moveTo(x7-5,y7+13);
      ctx.lineTo(x8+20,y7+13);
      ctx.lineTo(x8+20,y8-10);
      ctx.stroke();
      if(relatype1==1){
        ctx.beginPath();
        ctx.moveTo(x8+15,y8-7);
        ctx.lineTo(x8+30,y8-7);
        ctx.stroke();
      } else {
        ctx.beginPath();
        ctx.moveTo(x8+20,y8-7);
        ctx.lineTo(x8+10,y8-15);
        ctx.lineTo(x8+30,y8-15);
        ctx.moveTo(x8+20,y8-7);
        ctx.lineTo(x8+30,y8-15);        
        ctx.fill();
      }
    }
  }
}
  
function drawrela_3() {
  for(var e=0; e<source_3.length; e++){
    thirdstep(source_3[e],target_3[e],substance_property[source_3[e]-1],relatype1[e],target_3_type[e])
  }
}

function drawrelationship() {
  drawrela_1();
  drawrela_2();
  drawrela_3();
}

function info_show(obj, iscf) {

  var x = obj.offsetLeft;
  var y = obj.offsetTop;

  var obj2 = $('.lgd-info');

  obj2.css('left', (x+20) + 'px');
  obj2.css('top', (y+50) + 'px');

  if (iscf) {
    obj2.find('#name').html(cf_name[obj.id-1]);
    obj2.find('#desc').html(cf_des[obj.id-1]);
  } else {
    var sub_id = obj.id.substr(1);
    obj2.find('#name').html(substance_name[sub_id-1]);
    obj2.find('#desc').html(substance_des[sub_id-1]);
  }

  obj2.show();
}

function info_hide() {
  $('.lgd-info').hide();
}

function init_lgd(circuit_lgd) {
  init_lgd_var(circuit_lgd);
  property();
  calbig();
  readcircuit();
  drawrelationship();
}
