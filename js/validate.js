function checkEmpty(){
	if(!(/\w/).test($("#"+this.id).val())) {
		$("#"+this.id+"s").html("empty");
		$("#"+this.id).attr("validated", "0");
		$("#"+this.id+"d").removeClass("control-group success")
			.addClass("control-group error");
<<<<<<< HEAD
		if($("[validated='1']").length!=7) {
=======
		if($("[validated='1']").length!=9) {
>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1
			$("#subb").addClass("disabled")
				.attr("disabled","disabled");
		}
	}
	else {
		$("#"+this.id+"s").html("OK");
		$("#"+this.id).attr("validated", "1");
		$("#"+this.id+"d").removeClass("control-group error")
			.addClass("control-group success");
<<<<<<< HEAD
		if($("[validated='1']").length==7) {
=======
		if($("[validated='1']").length==9) {
>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1
			$("#subb").removeClass("disabled")
				.removeAttr("disabled");
		}
	}
}
function checkEmail() {
	var email = $("#"+this.id).val();
<<<<<<< HEAD
	if(!(/^[\w\.-_\+]+@[\w-]+(\.\w{2,3})+$/.test(email))) {
=======
	if(!(/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/.test(email))) {
>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1
		$("#"+this.id+"s").html("invalidate Email address");
		$("#"+this.id).attr("validated", "0");
		$("#"+this.id+"d").removeClass("control-group success")
			.addClass("control-group error");
<<<<<<< HEAD
		if($("[validated='1']").length!=7) {
=======
		if($("[validated='1']").length!=9) {
>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1
			$("#subb").addClass("disabled")
				.attr("disabled","disabled");
		}
	}
	else {
		$("#"+this.id+"s").html("OK");
		$("#"+this.id).attr("validated", "1");
		$("#"+this.id+"d").removeClass("control-group error")
			.addClass("control-group success");
<<<<<<< HEAD
		if($("[validated='1']").length==7) {
=======
		if($("[validated='1']").length==9) {
>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1
			$("#subb").removeClass("disabled")
				.removeAttr("disabled");
		}
	}
}
function checkYear() {
	var myDate = new Date();
	var year = $("#"+this.id).val();
	if(myDate.getFullYear()>=year && 1900<=year) {
		$("#"+this.id+"s").html("OK");
		$("#"+this.id).attr("validated", "1");
		$("#"+this.id+"d").removeClass("control-group error")
			.addClass("control-group success");
<<<<<<< HEAD
		if($("[validated='1']").length==7) {
=======
		if($("[validated='1']").length==9) {
>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1
			$("#subb").removeClass("disabled")
				.removeAttr("disabled");
		}
	}
	else {
		$("#b3s").html("Invalidate Email addres!");
		$("#"+this.id+"s").html("must be year in 4 numbers");
		$("#"+this.id).attr("validated", "0");
		$("#"+this.id+"d").removeClass("control-group success")
			.addClass("control-group error");
		$("#"+this.id).attr("validated", "0");
<<<<<<< HEAD
		if($("[validated='1']").length!=7) {
=======
		if($("[validated='1']").length!=9) {
>>>>>>> 61b08c2148451701f30e29d3bf3bb66fb75ec7c1
			$("#subb").addClass("disabled")
				.attr("disabled","disabled");
		}
	}
}
$(document).ready(function(){
	$(".validate").blur(checkEmpty);
	$("#y1").blur(checkEmail);
	$("#subb").click(function() {alert('Thank you for submitting!');});
	$("#b3").blur(checkYear);
});