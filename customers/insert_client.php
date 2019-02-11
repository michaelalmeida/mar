<?php require_once '../config.php'; ?>
<?php include(HEADER_TEMPLATE); ?>
<div class="container mt-5">
<?php
  $firstname= $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $phone    = $_POST["phone"];
  $cellphone= $_POST["cellphone"];
  $email    = $_POST["email"];
  $adress   = $_POST["adress"];
  $city     = $_POST["city"];
  $state    = $_POST["state"];
  $zip      = $_POST["cep"];

// Create connection
  $conn = new mysqli(DB_HOST, DB_USER, DB_PW, DB_NAME);
// Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO customers (firstname, lastname, phone, cellphone, email, address, city, state, zip)
  VALUES ('$firstname', '$lastname', '$phone', '$cellphone', '$email', '$adress', '$city', '$state', '$zip' )";

  if ($conn->query($sql) === TRUE) {
      echo '<div class="card">
        <div class="card-header">
          Adicionado
        </div>
        <div class="card-body">
          <p class="card-text">O cliente '.$firstname.' foi adicionado com sucesso.</p>
          <a href="../add.php" class="btn btn-primary">Adicionar outro</a>
        </div>
      </div>';
  } else {
      echo '<div class="alert alert-warning" role="alert">
      Error: ' . $sql . '<br>' . $conn->error . '
      </div>';
  }

  $conn->close();

 ?>
</div>
<?php include(FOOTER_TEMPLATE); ?>
