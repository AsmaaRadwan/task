<?php
    include_once("config.php");

    $sql = "select * from users";

    $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));

    // var_dump( $result);

    // var_dump(mysqli_fetch_assoc($result));




?>



<html>
<head>
    <title>Homepage</title>
</head>

<body>

    <a href="add.php"> Add new user  </a>

    <table width='80%' border=1>

    <tr>
        <th>ID</th>
        <th>Name</th> 
        <th>Mobile</th> 
        <th>Email</th>
        <th>Delete</th>
        <th>Edit</th>
    </tr>
    <?php
          while($user = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>".$user["id"]."</td>";
            echo "<td>".$user["name"]."</td>";
            echo "<td>".$user["mobile"]."</td>";
            echo "<td>".$user["email"]."</td>";
            echo "<td>". "<a href='delete.php?id=$user[id]'> Delete  </a>"."</td>";
            echo "<td>". "<a href='edit.php?id=$user[id]'> Edit  </a>"."</td>";
            echo "</tr>";
          } 


    ?>
    
       
   
    </table>
</body>
</html>