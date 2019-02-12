<?php require_once 'config.php'; ?>
<?php include(HEADER_TEMPLATE); ?>
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

$customers = null;
$customer = null;
?>
<div class="container mt-5">
  <?php if ($result->num_rows > 0) : ?>
  <div class="accordion" id="accordionExample">
      <?php $customers = $result->fetch_all(MYSQLI_ASSOC) ?>
      <?php foreach ($customers as $customer) : ?>

        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#<?php echo "id_" . $customer['id']; ?>" aria-expanded="true" aria-controls="<?php echo "id_" . $customer['id']; ?>">
                <?php echo $customer['firstname'] . " " . $customer['lastname']; ?>
              </button>
            </h2>
          </div>

          <div id="<?php echo "id_" . $customer['id']; ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class='fas fa-phone mr-1'></i><?php echo $customer['phone'] ?></li>
                <li class="list-group-item"><i class='fas fa-phone mr-1'></i><?php echo $customer['cellphone'] ?></li>
                <li class="list-group-item"><i class='fas fa-envelope mr-1'></i><?php echo $customer['email'] ?></li>
                <li class="list-group-item"><i class='fas fa-map-marker-alt mr-1'></i> <?php echo $customer['address'] . " " . $customer['city']. " " . $customer['state']; ?></li>
              </ul>
            </div>
          </div>
        </div>

    <?php endforeach; ?>
  </div>
    <?php else : ?>
      <p>Nenhum registro encontrado.</p>
    <?php endif; ?>

<?php
  $conn->close();
?>
  </div>
<?php include(FOOTER_TEMPLATE); ?>
