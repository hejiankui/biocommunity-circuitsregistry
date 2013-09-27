<?php
/*
 * Created on 2013-8-29
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 include("conn.php");
 @$EcoNum=Eco900_00;
?>

<table width=550 border="0" align="left" cellpadding="5" cellspacing="1" bgcolor="#add3ef">
<?
   $sql="select * from comments where ecoNum='$EcoNum' order by commenttime desc";
   $query=mysql_query($sql);
   while($row=mysql_fetch_array($query)){
?>
  <tr bgcolor="#eff3ff">
  <td>title£º&nbsp<?=@$row[title]?>   (from&nbsp<?=@$row[username]?> <?=@$row[commenttime]?> £©</td>
  </tr>
  <tr bgColor="#ffffff">
  <td>content£º<?
      echo htmtocode(@$row[content])
      ?>
   </td>
  </tr>
<?
   }
?>
</table>



