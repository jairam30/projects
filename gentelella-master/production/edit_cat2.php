<?php
include_once'/helper.php';
$var;

$con=mysqli_connect("localhost","root","","caterers");
if(!$con)
{
	die("Connection failed: " . mysqli_connect_error());
}

 echo $catname=$_POST["name"];
 echo $menuname=$_POST["listname"];
 echo $urlid1 = $_POST['id'];
$sql=$obj->query("SELECT * FROM tbl_menu");
// $sql=$obj->query("SELECT tbl_category.cat_id, tbl_category.cat_name, tbl_menu.menu_name
					// FROM tbl_category
					// INNER JOIN tbl_menu
					// ON tbl_category.menu_id=tbl_menu.menu_id");
if(is_array($sql))
{
	foreach($sql as $data)
	{
		if($data['menu_name']==$menuname)
		{
			$var=$data['menu_id'];
		}
	}
 $var;
}

$sql2="UPDATE tbl_category SET cat_name='$catname', menu_id='$var' where cat_id='$urlid1'";

echo '<script type = "text/javascript"></script>';
if (mysqli_query($con, $sql2)) {
    echo 'alert ("New record created successfully")';
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
}
header('Location: cat_index.php');
?>