<?php
include_once'/helper.php';
$var;

$con=mysqli_connect("localhost","root","","caterers");
if(!$con)
{
	die("Connection failed: " . mysqli_connect_error());
}

 $itemname=$_POST["name"];
 $listname=$_POST["listname"];

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

$sql2="insert into tbl_item(item_name,cat_list_id) values('$itemname', '$var')";
echo '<script type = "text/javascript"></script>';
if (mysqli_query($con, $sql2)) {
     echo '<script language="javascript">';
        //echo 'alert("Successfully Registered"); location.href="additem.php"';
        echo '</script>';
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
}
header('location: index.php');
?>


