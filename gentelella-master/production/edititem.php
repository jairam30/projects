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
$sql=$obj->query("SELECT * FROM tbl_category_list");
if(is_array($sql))
{
	foreach($sql as $data)
	{
		if($data['cat_list_name']==$listname)
		{
			$var=$data['cat_list_id'];
		}
	}
 $var;
}

$sql2="UPDATE tbl_item SET item_name='$itemname', cat_list_id='$var' where item_id='$urlid1'";

echo '<script type = "text/javascript"></script>';
if (mysqli_query($con, $sql2)) {
    echo 'alert ("New record created successfully")';
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
}
header('Location: index.php');
?>