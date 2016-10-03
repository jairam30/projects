<?php
include_once'/helper.php';
$var;

$con=mysqli_connect("localhost","root","","caterers");
if(!$con)
{
	die("Connection failed: " . mysqli_connect_error());
}

 $catname=$_POST["name"];
 $catlistname=$_POST["listname"];

$sql=$obj->query("SELECT * FROM tbl_menu");
if(is_array($sql))
{
	foreach($sql as $data)
	{
		if($data['menu_name']==$catlistname)
		{
			$var=$data['menu_id'];
		}
	}
 $var;
}

$sql2="insert into tbl_category(cat_name,menu_id) values('$catname', '$var')";
echo '<script type = "text/javascript"></script>';
if (mysqli_query($con, $sql2)) {
     echo '<script language="javascript">';
        //echo 'alert("Successfully Registered"); location.href="additem.php"';
        echo '</script>';
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
}
header('location: cat_index.php');
?>


