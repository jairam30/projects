<?php
include_once'/helper.php';
$var;

$con=mysqli_connect("localhost","root","","caterers");
if(!$con)
{
	die("Connection failed: " . mysqli_connect_error());
}

 echo $menuname=$_POST["name"];
 echo $noofpeople=$_POST["noofpeople"];
 echo $urlid1 = $_POST['id'];

 $sql2="UPDATE tbl_menu SET menu_name='$menuname', people_num='$noofpeople' where menu_id='$urlid1'";

echo '<script type = "text/javascript"></script>';
if (mysqli_query($con, $sql2)) {
    echo 'alert ("New record created successfully")';
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
}
header('Location: menu.php');
?>