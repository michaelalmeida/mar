<?php require_once 'config.php'; ?>
<?php include(HEADER_TEMPLATE); ?>
<div class="container mt-5">
  <div class="row">
    <div class="col-sm">
      <h3>Ultimos clientes adicionados</h3>
      <ul class="list-group">
        <?php include(LIST_LASTEST) ?>
      </ul>
    </div>
    <div class="col-sm">

    </div>
  </div>
</div>
<?php include(FOOTER_TEMPLATE); ?>
</html>
