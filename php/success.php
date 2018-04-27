<?php

# 테스트 서버

$pp_hostname = "www.sandbox.paypal.com";

$auth_token = "AbEz2jyoK129.TFHWrNNI3IEaUeQAObVtneXgRYw7ExLz7vgtwvhrqou";



# 상용 서버

// $pp_hostname = "www.paypal.com";

// $auth_token = "Yxbn0IuUwYjrXPUZL4M.....................LaUcVpk4cgcSsy3yiC";



$req = 'cmd=_notify-synch';

$tx_token = $_REQUEST['tx'];

$req .= "&tx=$tx_token&at=$auth_token";



# 수신한 tx 값과 token 값을 paypal 서버로 전송

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://$pp_hostname/cgi-bin/webscr");

curl_setopt($ch, CURLOPT_POST, 1);

curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);

curl_setopt($ch, CURLOPT_POSTFIELDS, $req);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);

curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);

curl_setopt($ch, CURLOPT_HTTPHEADER, array("Host: $pp_hostname"));

$res = curl_exec($ch);

curl_close($ch);



# 최종 결과값 분석

if(!$res){

//HTTP ERROR

echo "Paypal 서버 연동 오류가 발생했습니다.";

exit;

}else{

 // 결과값을 로그로 기록해 보기

	$date_time = date("Y-m-d H:i:s");

	$fp = fopen("./tmp/pp_log.txt", "a");

	fwrite($fp, "\n[".$date_time."]==========================================\n");



	$lines = explode("\n", $res);

	$keyarray = array();

	if (strcmp ($lines[0], "SUCCESS") == 0) {

   // 결제가 성공한 경우

		for ($i=1; $i<count($lines);$i++){

			list($key,$val) = explode("=", $lines[$i]);

			$keyarray[urldecode($key)] = urldecode($val);

			fwrite($fp, urldecode($key).":".urldecode($val)."\n");

		}

		$firstname = $keyarray['first_name'];

		$lastname = $keyarray['last_name'];

		$itemnumber = $keyarray['item_number'];

		$itemname = $keyarray['item_name'];

		$amount = $keyarray['payment_gross'];



		echo ("<p><h3>결제가 잘 처리되었습니다!</h3></p>");

		echo ("<b>상세 내용</b><br>\n");

		echo ("<li>이름: $firstname $lastname</li>\n");

		echo ("<li>주문번호: $itemnumber</li>\n");

		echo ("<li>상품명: $itemname</li>\n");

		echo ("<li>금액: $amount</li>\n");



	} else if (strcmp ($lines[0], "FAIL") == 0) {

    // 결제가 실패한 경우

		echo ("<p><h3>결제오류가 발생했습니다!</h3></p>");

	}

	fclose($fp);

}

?>
