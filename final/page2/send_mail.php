<HTML> 
 <HEAD> 
  <TITLE> 네이버 SMTP이용하여 메일보내기 </TITLE> 
 </HEAD> 

 <BODY leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" oncontextmenu="return false"> 
  <link rel="stylesheet" href="../css/global.css" type="text/css">     
        
<?php

$to_id="받을 사람(이메일 받을 사람 주소)";
$from_id="보낼 사람(네이버 이메일주소)";
$pass="네이버 이메일 계정 비밀번호";
$title="메일 제목";
$article="메일 내용";

require_once("class.phpmailer.php");

$smtp="smtp.naver.com";	
$mail=new PHPMailer(true);	
$mail->IsSMTP();

try{		
$mail->Host=$smtp;		
$mail->SMTPAuth=true;		
$mail->Port=465;		
$mail->SMTPSecure="ssl";		
$mail->Username=$from_id;		
$mail->Password=$pass;	
$mail->CharSet = "UTF-8";	
$mail->SetFrom($from_id);		
$mail->AddAddress($to_id);		
$mail->Subject=$title;		
$mail->MsgHTML($article);		
$mail->Send();	
	
}	catch (phpmailerException $e){		
echo $e->errorMessage();	
}	catch (Exception $e){		
echo $e->getMessage();	
}

echo "메일이 발송되었습니다";
?>
 </BODY> 
</HTML> 
