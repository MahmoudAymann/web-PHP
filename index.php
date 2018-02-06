
<?php
    include_once 'config.php';
 ?>
	

<!DOCTYPE HTML>
<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>

<title>Add</title>
</head>
<body>

<?php

  if(isset($_POST['qq']))
{
    $sql = "INSERT INTO user (name, pass, phone)
    VALUES ('".$_POST["q1"]."','".$_POST["q2"]."','".$_POST["q3"]."')";

    $result = mysqli_query($conn,$sql);
}
?>


<form method="POST" action="index.php">
<label>First Name</label>
<input type="text" name="q1" />
<br />
<label>Last Name</label>
<input type="text" name="q2" />
<br />
<label>Department</label>
<input type="text" name="q3" />
<br />
<br />
<button type="submit" name="qq">save</button>
</form>



</body>
</html>
