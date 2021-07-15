<?php 
    include_once("config.php");

    if(isset($_POST['Submit'])){
        $id = $_GET['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $id = $_POST['id'];
        $sql = "update users set name='$name', email='$email', mobile='$mobile' where id=$id";
        $edit = mysqli_query($mysqli, $sql);
        header("Location: index.php");
    }




    $id = $_GET['id'];
    $sql = "select * from users where id = $id";
    $result = mysqli_query($mysqli, $sql);
    $user = mysqli_fetch_assoc($result);
       $name = $user["name"];
       $email = $user["email"];
       $mobile = $user["mobile"];


?>




<html>
<head>
	<title>Add Users</title>
</head>

<body>


	<form action="edit.php"  method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name ?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email ?>"></td>
			</tr>
			<tr>
				<td>Mobile</td>
				<td><input type="text" name="mobile" value="<?php echo $mobile ?>"></td>
			</tr>
            <tr>
				
				<td><input type="text" name="id" hidden value="<?php echo $id ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Edit"></td>
			</tr>
		</table>
	</form>
	

	
</body>
</html>