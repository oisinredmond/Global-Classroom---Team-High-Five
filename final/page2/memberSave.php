<?php
echo '회원가입';

session_start();


 include_once ("./basic.php");

include './auth.php';

  //  echo "<pre>";
    echo var_dump($_POST);

    $memberId = $_POST['userId'];
    $memberName = $_POST['username'];
    $memberPw = $_POST['password'];
$memberPw2 = $_POST['password_a'];
    $memberPhone=$_POST['userPhone'];
    $memberEmailAddress = $_POST['email'];


    //PHP에서 유효성 재확인

    //아이디 중복검사.
    $sql = "SELECT * FROM users WHERE User_id = '{$memberId}'";
    $res = $dbConnect->query($sql);
    if($res->num_rows >= 1){
        echo 'This ID is already here.';
        exit;
    }

    //비밀번호 일치하는지 확인


    //닉네임, 생일 그리고 이름이 빈값이 아닌지
    if( $memberName == ''){
        echo 'There is no name.';
        exit;
    }

    //이메일 주소가 올바른지
    $checkEmailAddress = filter_var($memberEmailAddress, FILTER_VALIDATE_EMAIL);

    if($checkEmailAddress != true){
        echo "This is not valid Email.";
        exit;
    }

    //이제부터 넣기 시작
    $sql = "INSERT INTO users(u_id,User_id, Password, UName, Email, Phone) VALUES(null,'{$memberId}','{$memberPw}','{$memberName}','{$memberEmailAddress}','{$memberPhone}');";

    if($dbConnect->query($sql)){
      echo "<script>alert(\"Now you are Hilton Hotel's member!\");



      </script>";
echo("<script>location.href='main.html';</script>");
    }
    else {
      echo "<script>alert(\"Try again....\");
      history.back();
      </script>";
    }

?>
