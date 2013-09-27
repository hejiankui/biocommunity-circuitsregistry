<SCRIPT language=javascript>
function CheckPost(){
	/*if (myform.user.value=="")
	{
		alert("ÇëÌîĞ´ÓÃ»§Ãû");
		myform.user.focus();
		return false;
	}*/
	if (myform.title.value=="enter title here")
	{
		alert("please enter your title");
		myform.title.focus();
		return false;
	}
	if (myform.title.value.length<5)
	{
		alert("your title is less than 5 chars");
		myform.title.focus();
		return false;
	}
	if (myform.content.value=="Enter your comments here...")
	{
		alert("Just say something please");
		myform.content.focus();
		return false;
	}

}
</SCRIPT>
<?php
/*
 * Created on 2013-8-29
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 mysql_query("set names 'utf8'"); 
 ?>

 <form action="" method="post" name="myform" onsubmit="return CheckPost();">
  <div>
  <br>
  <input type="text" name="title" id="title" value="enter title here" class="topsinput"  onfocus='if(this.value=="enter title here"){this.value="";}; this.className="topsinput2";' onblur='if(this.value==""){this.value="enter title here";};this.className="topsinput";' />
  </div>
  <div>
   <textarea name="content" cols="60" rows="9" id="yc" onfocus="if(value =='Enter your comments here...'){value ='';this.style.color='#000';} this.style.borderColor='#ffc040'" onblur="this.style.borderColor='#ccc'; if (value ==''){value='Enter your comments here...';this.style.color='#bbb'}">Enter your comments here...</textarea></br>
  </div>

  <input type="submit" id="submit" name="submit" value="submit" class="bu" />

</form>
<?php
if(@$_POST['submit']){
	/*if($_SESSION[username]==""){
		echo "please login before commenting";
	}*/
	


 	$sql="insert into comments(id,username,title,content,ecoNum,commenttime) " .
 			"values ('','nizhuangdian','$_POST[title]','$_POST[content]','Eco900_00',now())";

 	mysql_query($sql);
 	echo "<script language=\"javascript\">alert('Thanks for your comment');history.go(0)</script>";

 }
?>
