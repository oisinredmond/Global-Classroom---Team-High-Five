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
header("location: index.htm");
}

$room_id = $_GET['room_id'];
include './auth.php';
$sql = "DELETE FROM rooms WHERE room_id=".$room_id."";
$result = mysqli_query($dbConnect,$sql);

header('Refresh: 2; url=room.php');
echo "<!DOCTYPE html>\n";
echo "<html lang=\"en\"><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n";
echo "\n";
echo "    <!-- Bootstrap core CSS -->\n";
echo "    <link href=\"../css/bootstrap.min.css\" rel=\"stylesheet\">\n";
echo "    <!-- Custom styles for this template -->\n";
echo "    <link href=\"../css/dashboard.css\" rel=\"stylesheet\">\n";
echo "	<link href=\"../css/style.css\" rel=\"stylesheet\">\n";
echo "	<link rel=\"stylesheet\" href=\"c../ss/fontello.css\">\n";
echo "    <link rel=\"stylesheet\" href=\"../css/animation.css\"><!--[if IE 7]><link rel=\"stylesheet\" href=\"../css/fontello-ie7.css\"><![endif]-->\n";
echo "    \n";
echo "<body>\n";
echo "<div class=\"container\">\n";
echo "	<div class=\"row\">\n";
echo "		<div class=\"col-xs-3\">\n";
echo "		</div>\n";
echo "		<div class=\"col-xs-6 \">\n";
echo "		<h4> Delete Success. Please wait few seconds for redirection...<i class=\"icon-spin4 animate-spin\" style=\"font-size:28px;\"></i></h4>\n";
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
