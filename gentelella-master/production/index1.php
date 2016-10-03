<?php
	include("helper.php");
    $sql=$obj->query("SELECT * FROM tbl_login");

    echo $username=$_POST['username'];
	echo $password=$_POST['pwd']; 

	$var=false;

	if(is_array($sql))
	{
		foreach($sql as $data)
		{
			if($username==$data['login_email'] && $password==$data['login_password'])
			{
				$var=true;
				header('location: menu.php');
			}
		}
	}

	if($var==false)
	{
		header('location: pages-signin.php');
	}
?>