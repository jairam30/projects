<?php
include_once'/helper.php';
$var;

$con=mysqli_connect("localhost","root","","caterers");
if(!$con)
{
	die("Connection failed: " . mysqli_connect_error());
}

 echo $itemname=$_POST["name"];
 echo $listname=$_POST["listname"];
 echo $urlid1 = $_POST['id'];
 if($listname == 'Veg')
 {
 	$var = 1;
 }
 else
 {
 	$var = 0;
 }

$sql2="UPDATE tbl_category_list SET cat_list_name='$itemname', cat_is_veg='$var' where cat_list_id='$urlid1'";

echo '<script type = "text/javascript"></script>';
if (mysqli_query($con, $sql2)) {
    echo 'alert ("New record created successfully")';
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
}
header('Location: cat_list_index.php');
?>