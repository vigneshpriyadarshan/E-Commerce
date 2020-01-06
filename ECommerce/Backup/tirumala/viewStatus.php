<?php
$servername = "localhost";
$username = "root";
$password = "forgotten";
$dbname = "image_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `image_table` WHERE source='C:\wamp\www\1455445162_tmp_pendrive-at-flipkart-2 (1).jpg';";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //echo "id: " . $row["id"]. "Description: " . $row["description"]. "<br>";
		echo "<img name=\"card\" src=\"".$row["source"]."\" alt=\"vicky\" />";
		
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
<button onclick="document.write('<?php echo "2"; ?>');">Click me</button>