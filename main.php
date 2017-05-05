<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

<?php
	$con = new mysqli("173.194.255.100", "bara", "Admin!@#", "ptu");
	$con->set_charset("utf8");        

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql = "SELECT name FROM students";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"]. "</br>";
    }
} else {
    echo "0 results";
}
$con->close();
?>