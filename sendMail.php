<?php
$email = htmlspecialchars($_POST['y1']);
$name = htmlspecialchars($_POST['y2']);
$projectName = htmlspecialchars($_POST['b1']);
$author = htmlspecialchars($_POST['b2']);
$year = htmlspecialchars($_POST['b3']);
$description = htmlspecialchars($_POST['b4']);
$references = htmlspecialchars($_POST['b5']);
$equipment = htmlspecialchars($_POST['l1']);
$material = htmlspecialchars($_POST['l2']);
$procedure = htmlspecialchars($_POST['l3']);
$circuitDescription = htmlspecialchars($_POST['g1']);
$partsInformation = htmlspecialchars($_POST['g2']);

$to = $name ."<". $email.">";
$subject = "Thank you for submitting";
$body = "Hi, ".$name."\n\nYour submission ".$projectName." has been received. The information will be checked and put on the site. This will take several days.\nThank you!\n\n3miao";
$headers = "From: submit@3miaocommunity.com";
if (mail($to, $subject, $body, $headers)) {
	$inf = $projectName."|".$author."|".$year."|".$description."|".$references."|".$equipment."|".$material."|".$procedure."|".$circuitDescription."|".$partsInformation;
	if (mail("bid10@163.com", "Submission from ".$to, $inf)) {
		header("Location: submit.html");
		echo "<script type='text/javascript'>";  
		echo "alert('Submitted successfully');window.location.href='submit.html'";  
		echo "</script>";   
	}
	else {
		header("Location: submit.html");
		echo "<script type='text/javascript'>";  
		echo "alert('Submitted failed');window.location.href='submit.html'";  
		echo "</script>"; 
	}
} 
else {
	header("Location: submit.html"); 
	echo "<script type='text/javascript'>";  
	echo "alert('Submitted failed');window.location.href='submit.html'";  
	echo "</script>"; 
}
?>