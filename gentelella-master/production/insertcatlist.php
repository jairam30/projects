<?php
include_once'/helper.php';
$var;

$con=mysqli_connect("localhost","root","","caterers");
if(!$con)
{
	die("Connection failed: " . mysqli_connect_error());
}

 $cat_list_name=$_POST["name"];
 $cat_is=$_POST["cat_is"];

//$sql=$obj->query("SELECT * FROM tbl_category_list");
if($cat_is == 'veg')
{
	$var=1;
}
else
{
	$var=0;
}
	
	
$sql2="insert into tbl_category_list(cat_list_name,cat_is_veg) values('$cat_list_name', '$var')";
echo '<script type = "text/javascript"></script>';
if (mysqli_query($con, $sql2)) {
     echo '<script language="javascript">';
        //echo 'alert("Successfully Registered"); location.href="additem.php"';
        echo '</script>';
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
}
header('location: cat_list_index.php');
?>


