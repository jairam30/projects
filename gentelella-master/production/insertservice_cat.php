<?php
include_once'/helper.php';
$var;

$con=mysqli_connect("localhost","root","","caterers");
if(!$con)
{
	die("Connection failed: " . mysqli_connect_error());
}

 $service_name=$_POST["name"];

$sql2="insert into services(name) values('$service_name')";
echo '<script type = "text/javascript"></script>';
if (mysqli_query($con, $sql2)) {
     echo '<script language="javascript">';
        //echo 'alert("Successfully Registered"); location.href="additem.php"';
        echo '</script>';
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
}
header('location: service.php');
?>


