<?php
include_once'/helper.php';
$var;

$con=mysqli_connect("localhost","root","","caterers");
if(!$con)
{
	die("Connection failed: " . mysqli_connect_error());
}

 $serv_list_name=$_POST["name"];
 $service_name=$_POST["listname"];
 $desc=$_POST["desc"];

$sql=$obj->query("SELECT * FROM services");
if(is_array($sql))
{
	foreach($sql as $data)
	{
		if($data['name']==$service_name)
		{
			$var=$data['id'];
		}
	}
 $var;
}

$sql2="insert into services_list(service_name,description,id) values('$serv_list_name','$desc', '$var')";
echo '<script type = "text/javascript"></script>';
if (mysqli_query($con, $sql2)) {
     echo '<script language="javascript">';
        //echo 'alert("Successfully Registered"); location.href="additem.php"';
        echo '</script>';
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
}
header('location: service_list.php');
?>


