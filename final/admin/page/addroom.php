<?php
session_start();
include './auth.php';
$re = mysqli_query($dbConnect,"SELECT * from staff where S_name = '".$_SESSION['username']."'  AND Password = '".$_SESSION['password']."' " );

if(mysqli_num_rows($re) > 0)
{

}
else
{
session_destroy();
header('location:index.htm');
}



$rate ="";
$desc ="";
$occupancy ="";
$imgpath ="";
$room_name ="";
$imageFileType = pathinfo($imgpath,PATHINFO_EXTENSION);
$uploadDir = "../img/";
$imagename= $_FILES['img']['name'];
$imgpath = $uploadDir.$imagename.$imageFileType;
$uploadDirForSql = "img/";
$imgpathForSQL = $uploadDirForSql.$imagename.$imageFileType;

//check image dimension



//end of check image dimension/
$room_ID = $_POST['room_id'];
	$room_name = $_POST['room_name'];
	$room_size= $_POST['room_size'];

	if(isset($_POST['rate'])){
	$rate =$_POST['rate'];}
	if(isset($_POST['desc'])){
	$desc =$_POST['desc'];}
	if(isset($_POST['price'])){
	$price =$_POST['price'];}
	if(isset($_POST['occupancy'])){
	$occupancy =$_POST['occupancy'];}
	$sql = "INSERT INTO rooms (room_id,  occupancy,room_size, room_name, description,price, rate, img) VALUES ($room_ID,  '".$occupancy."', '".$room_size."',  '".$room_name."', '".$desc."', '".$price."','".$rate."', '".$imgpathForSQL."')";
	$result = mysqli_query($dbConnect,$sql);

	move_uploaded_file($_FILES["img"]["tmp_name"], $imgpath);

	header('Refresh: 3;url=room.php');

echo "<!DOCTYPE html>\n";
echo "<html lang=\"en\"><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n";
echo "\n";
echo "    <!-- Bootstrap core CSS -->\n";
echo "    <link href=\"../css/bootstrap.min.css\" rel=\"stylesheet\">\n";
echo "    <!-- Custom styles for this template -->\n";
echo "    <link href=\"../css/dashboard.css\" rel=\"stylesheet\">\n";
echo "	<link href=\"../css/style.css\" rel=\"stylesheet\">\n";
echo "	<link rel=\"stylesheet\" href=\"../css/fontello.css\">\n";
echo "    <link rel=\"stylesheet\" href=\"../css/animation.css\"><!--[if IE 7]><link rel=\"stylesheet\" href=\"../css/fontello-ie7.css\"><![endif]-->\n";
echo "    \n";
echo "<body>\n";
echo "<div class=\"container\">\n";
echo "	<div class=\"row\">\n";
echo "		<div class=\"col-xs-3\">\n";
echo "		</div>\n";
echo "		<div class=\"col-xs-6 \">\n";
echo "		<h4> Success. Please wait few seconds for redirection...<i class=\"icon-spin4 animate-spin\" style=\"font-size:28px;\"></i></h4>\n";
echo "		\n";
echo "		</div>\n";
echo "		<div class=\"col-xs-3\">\n";
echo "		</div>\n";
echo "	</div>\n";
echo "</div>\n";
echo "\n";
echo "\n";
echo "</body></html>";
?>
