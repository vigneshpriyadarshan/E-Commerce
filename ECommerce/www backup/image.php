<!DOCTYPE html>
<html>
<body>
<?php
$conn=new mysqli("localhost","root","forgotten","image_db");
if($conn->connect_error)
{
die("Connection failed :404 page error found" .$conn->connect_error);
}

?>

<input type="image" name="viki" src="F:\Images\hollywood.jpg" width="50">

</body>
</html