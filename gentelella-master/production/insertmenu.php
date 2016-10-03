<?php
			include_once'/helper.php';
			$con=mysqli_connect("localhost","root","","caterers");
			if(!$con)
			{
				die("Connection failed: " . mysqli_connect_error());
			}

			 echo $menuname=$_POST["name"];
			 echo $numofpeople=$_POST["numofpeople"];

			$sql2="insert into tbl_menu(menu_name,people_num) values('$menuname','$numofpeople')";
			//echo '<script type = "text/javascript"></script>';
			
			if (mysqli_query($con, $sql2)) {
				echo "New record created successfully";
			} else {
				echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
			}
				
			header('location: menu.php');
			?>
		
			 