<?php
$servername = "localhost";
$username = "root";
$password = "forgotten";
$dbname = "image_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: 404 page error vicky " . mysqli_connect_error());
}





$sql = "SELECT * FROM `image_table`;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      //  echo "id: " . $row["id"]. "Description: " . $row["description"]. "<br>";
		echo "<src=\"".$row["source"]."\" />";
		 // img name=\"myDog\" 

		 //alt=\"dog\"
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
<button onclick="document.write('<?php echo "2"; ?>');">Click me</button>