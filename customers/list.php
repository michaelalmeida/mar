<?php require_once 'config.php'; ?>
<?php
// Create connection
  $conn = new mysqli(DB_HOST, DB_USER, DB_PW, DB_NAME);
// Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

// query
$sql = "SELECT id, firstname, lastname FROM customers";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<li class='list-group-item'>";
        echo $row["firstname"] . " " . $row["lastname"];
        echo "</li>";
    }
} else {
    echo "No results";
}

$conn->close();
?>
