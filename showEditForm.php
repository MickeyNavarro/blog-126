<?php
session_start();
require_once 'connector_blog.php';
require_once 'topMenu.php';
 
$id = $_GET['id'];

if ($conn)
{
    $sql = "SELECT * FROM `users` WHERE `id` = '$id' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if ($result)
    {
        while ($row = mysqli_fetch_assoc($result))
        {
            $name = $row['name'];
            $phone = $row['phone'];
            $user = $row ['username'];
            $pass = $row['password'];
            $role = $row['role'];
        }
    }
    else 
    {
        echo "There was an error" . mysqli_error($conn);
    }
}
else 
{
    echo "ERROR: " . mysqli_connect_error();
}
?>
<div class="home">
<h2>Edit a Blog User</h2>
<p>Fill out all of the fields and submit</p>
<form action="processEditUser.php">
<input type = "hidden" name = "id" value ="<?php echo $id; ?>"></input>
Full Name:<input type="text" name="name" value= "<?php echo $name; ?>"><br>
Phone Number:<input type="text" name="phone" value= "<?php echo $phone; ?>"><br>
Username:<input type="text" name="user" value= "<?php echo $user; ?>"><br>
Password:<input type="text" name="pass" value= "<?php echo $pass; ?>"><br>
Role:<input type="text" name="role" value= "<?php echo $role; ?>"><br>
    <button type="submit">Submit changes</button>
</form>
</div>