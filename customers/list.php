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

$customers = null;
$customer = null;
?>

<?php if ($result->num_rows > 0) : ?>
  <?php $customers = $result->fetch_all(MYSQLI_ASSOC) ?>
  <?php foreach ($customers as $customer) : ?>
  <li class='list-group-item'>
    <?php echo $customer['firstname'] . " " . $customer['lastname']; ?>
  </li>
<?php endforeach; ?>
<?php else : ?>
  <p>Nenhum registro encontrado.</p>
<?php endif; ?>


<?php
$conn->close();
?>
