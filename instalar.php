<?php require_once 'config.php'; ?>

<?php include(HEADER_TEMPLATE) ?>

<div class="container">
  <h1>Installing Mar 0.1</h1>
  <?php
  // conecting
  $conn = new mysqli(DB_HOST, DB_USER, DB_PW, DB_NAME);

  // check the conection
  if($conn->connect_error) {
    echo '<div class="alert alert-danger" role="alert">
            There is a problem with the conection:' . $conn->connect_error . '
          </div>';
  }

  // sql to create table
  $table_admin = "CREATE TABLE admin (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  user VARCHAR(30) NOT NULL DEFAULT 'admin',
  password VARCHAR(30) NOT NULL DEFAULT 'admin'
  )";

  $table_customers = "CREATE TABLE customers (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30),
  phone VARCHAR(50),
  cellphone VARCHAR(50),
  email VARCHAR(50),
  address VARCHAR(100) NOT NULL,
  city VARCHAR(50) NOT NULL,
  state VARCHAR(50),
  zip VARCHAR(9),
  visit DATETIME,
  reg_date TIMESTAMP,
  UNIQUE (phone)
  )";

  // creating the database
  if(($conn->query($table_admin) === TRUE) && ($conn->query($table_customers) == TRUE) ) {
    echo '<div class="alert alert-primary" role="alert">
            Table admin and customers are created successfully
          </div>';
  } else {
      echo '<div class="alert alert-warning" role="alert">
      Error creating table: ' . $conn->error . '
      </div>';
  }

  $conn->close();

  ?>
</div>
