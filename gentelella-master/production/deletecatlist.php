

<?php
include_once'/helper.php';
$var;

$con=mysqli_connect("localhost","root","","caterers");
if(!$con)
{
	die("Connection failed: " . mysqli_connect_error());
}
 echo $urlid1 = $_GET['catlistid'];


$sql2="DELETE FROM tbl_category_list where cat_list_id='$urlid1'";

echo '<script type = "text/javascript"></script>';
if (mysqli_query($con, $sql2)) {
    echo 'alert ("record deleted successfully")';
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
}
header('Location: cat_list_index.php'); 
?>

