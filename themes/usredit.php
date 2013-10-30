
<?php
@session_start();
 if(@$_SESSION['username']=="")
 {
   echo "<script>alert('you haven/'t login, login first!');history.back();</script>";
   exit;
 }
?>
 <script language="JavaScript">
 function cmp()
{
	var pwd=document.getElementById("pwd");
	var pwd1=document.getElementById("pwd1");
	var pwv=document.getElementById("pwv");
	if(pwd.value!=pwd1.value)
	{
		pwv.innerHTML="<font color='red'> Entered passwords differ!</font>";
		pwd1.focus();
		}
		else
     {
     	pwv.innerHTML="";
     }
  }
  </script>
<html>
<head>
<title>change information</title>
</head>
<body>
<?php
   	 include ('conn.php');
	 $sql=mysql_query("select * from login where username='".$_GET['username']."'",$link);
	 $info=mysql_fetch_array($sql);

	 ?>
  <form action="updata.php?id=<?php echo $info[id];?>" method="post">

  <table>
    <tr>
      <td></td><td>edit</td><td></td>
    </tr>
    <tr>
      <td>username:</td><td><input type="text" name="user" value="<?php echo $info[username];?>" size="40" maxlength="40"/></td><td></td>
    </tr>
    <tr>
      <td>password:</td><td><input type="password" value="<?php echo $info[userpwd];?>" name="pwd" size="45" maxlength="40"/></td><td></td>
    </tr>
    <tr>
      <td>email£º</td><td><input type="text" name="email" value="<?php echo $info[email];?>" size="40" maxlength="40" onBlur="isemail()" /></td><td></td>
    </tr>
    <tr>
      <td>birthday£º</td><td><input type="text" name="birth" value="<?php echo $info[birthday];?>" id="birth" size="40" maxlength="40" onBlur="isdate()"/></td><td></td>
    </tr>
    <tr>
      <td>phone£º</td><td><input type="text" name="phone"  value="<?php echo $info[phone];?>" id="phone"   size="40" maxlength="40" onBlur="istelephone()"/></td><td></td>
    </tr>
    <tr>
      <td><input type="submit" name="submit" value="submit" /></td><td>
  <input type="reset" name="reset" value="back" onClick="home()"/>
  <script language="JavaScript">
  function home()
  {
  	history.back();
  }
  </script>
  </td><td></td>
    </tr>
  </table>
  </form>
</body>
</html>
