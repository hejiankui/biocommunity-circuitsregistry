<?php

/**
 *      [BioMiao] (C)2009-2013 BioMiao Committee.
 *      SUSTC-ShenZhen-B
 *
 *      $Id: inc/mail.php 2013-06-14 10:47:00 Zhuoteng Peng $
 */

if(!defined('IN_BIOMIAO')) {
	exit('Access Denied');
}

//$_G['setting']['mail']['mailsend'] = 4;
setglobal('setting/mail/mailsend', 4);

//下面定义一个发送邮件的函数,已经测试通过。   
//$sendto_email：邮件发送地址   
//$subject：邮件主题   
//$body:邮件正文内容   
//$sendto_name邮件接受方的姓名，发送方起的名字。一般可省。  
function stmp_mail($sendto_email, $subject = null, $body = null, $sendto_name = null) { 

    //vendor ( "PHPMailer.class#phpmailer" ); //导入函数包的类class.phpmailer.php  
    require_once(BM_ROOT.'src/inc/mail/class.phpmailer.php');

    $mail = new PHPMailer (); //新建一个邮件发送类对象
	//$mail->SMTPDebug = 1;
    $mail->IsSMTP (); // send via SMTP  
    $mail->Port = 465; //发送端口  
	$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
    //hwsmtp.exmail.qq.com
    $mail->Host       = "smtp.exmail.qq.com";      // sets GMAIL as the SMTP server
    $mail->SMTPAuth = true; // turn on SMTP authentication 邮件服务器验证开   
    $mail->Username = "noreply@circuitplus.org"; // SMTP服务器上此邮箱的用户名，有的只需要@前面的部分，有的需要全名。请替换为正确的邮箱用户名   
    $mail->Password = "RqUi5UcZkXSmiVwU"; // SMTP服务器上该邮箱的密码，请替换为正确的密码   
    $mail->From = $mail->Username; // SMTP服务器上发送此邮件的邮箱，请替换为正确的邮箱，$mail->Username 的值是对应的。                  
    $mail->FromName = "Circuit+"; // 真实发件人的姓名等信息，这里根据需要填写   
    $mail->CharSet = "utf-8"; // 这里指定字符集！   
    //$mail->Encoding = "base64"; 
    $mail->AddAddress ( $sendto_email, $sendto_name ); // 收件人邮箱和姓名   
    //$mail->AddReplyTo('yourgmail@gmail.com',"管理员");//这一项根据需要而设   
    //$mail->WordWrap = 50; // set word wrap   
    //$mail->AddAttachment("/var/tmp/file.tar.gz"); // 附件处理   
    //$mail->AddAttachment("/tmp/image.jpg", "new.jpg");   
    $mail->IsHTML ( true ); // send as HTML 
    $mail->Subject = $subject; // 邮件主题  
    // 邮件内容 
    $mail->Body = $body;
	
    if (! $mail->Send ()) { 
        //邮件发送失败 
		//exit( "Mailer Error: " . $mail->ErrorInfo);
        return false; 
    } else { 
        //邮件发送成功 
        return true; 
    } 

} 
//function end

?>