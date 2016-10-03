<?php
include_once'/helper.php';
$var;

$con=mysqli_connect("localhost","root","","caterers");
if(!$con)
{
	die("Connection failed: " . mysqli_connect_error());
}

 echo $service_name=$_POST["name"];
 echo $service_cat_name=$_POST["listname"];
 echo $urlid1 = $_POST['id'];
 echo $desc = $_POST['desc'];
 
$sql=$obj->query("SELECT * FROM services");
if(is_array($sql))
{
	foreach($sql as $data)
	{
		if($data['name']==$service_cat_name)
		{
			$var=$data['id'];
		}
	}
 $var;
}

$sql2="UPDATE services_list SET service_name='$service_name', description='$desc', id='$var' where service_id='$urlid1'";

echo '<script type = "text/javascript"></script>';
if (mysqli_query($con, $sql2)) {
    echo 'alert ("New record created successfully")';
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
}
header('Location: service_list.php');
?>