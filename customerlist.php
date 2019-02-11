<?php require_once 'config.php'; ?>
<?php include(HEADER_TEMPLATE); ?>
<div class="container mt-5">
  <div class="accordion" id="accordionExample">
    <?php
    // Create connection
      $conn = new mysqli(DB_HOST, DB_USER, DB_PW, DB_NAME);
    // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

    // query
    $sql = "SELECT id, firstname, lastname, phone, cellphone, email, address, city, state, zip FROM customers";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<div class="card">';
            echo '<div class="card-header" id="headingOne">';
            echo '<h2 class="mb-0">';
            echo '<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#id_'.$row["id"].'" aria-expanded="true" aria-controls="id_'.$row["id"].'">';
            echo $row["firstname"] . " " . $row["lastname"];
            echo '</button>';
            echo '</h2>';
            echo '</div>';
            echo '<div id="id_'.$row["id"].'" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">';
            echo '<div class="card-body">';
            echo  "<i class='fas fa-phone mr-1'></i>" .$row["phone"];
            echo  "</br><i class='fas fa-phone mr-1'></i>" .$row["cellphone"];
            echo  "</br><i class='fas fa-envelope mr-1'></i>" .$row["email"];
            echo  "</br><i class='fas fa-map-marker-alt mr-1'></i>" .$row["address"]. " - " . $row["city"]. ", " . $row["state"];
            echo '</div></div></div>';
        }
    } else {
        echo "No results";
    }

    $conn->close();
    ?>
  </div>
<?php include(FOOTER_TEMPLATE); ?>
