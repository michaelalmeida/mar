<?php require_once 'config.php'; ?>
<?php include(HEADER_TEMPLATE); ?>
<div class="container mt-5">
  <form action="customers
  /insert_client.php" method="post">
    <div class="form-group">
      <label for="firstname">Primeiro nome</label>
      <input name="firstname" class="form-control form-control-lg" id="firstname" type="text" placeholder="Maria" required>
    </div>
    <div class="form-group">
      <label for="lastname">Sobrenome</label>
      <input name="lastname" class="form-control form-control-lg" id="lastname" type="text" placeholder="Dos Santos">
    </div>
    <div class="form-group">
      <label for="email">Email address</label>
      <input name="email"  type="email" class="form-control" id="email" placeholder="name@example.com">
    </div>
    <div class="form-group">
      <label for="phone">Telefone fixo</label>
      <input name="phone"  type="phone" class="form-control" id="phone" placeholder="(19) 1234-5678">
    </div>
    <div class="form-group">
      <label for="cellphone">Celular</label>
      <input name="cellphone"  type="text" class="form-control" id="cellphone" placeholder="(19) 1234-5678">
    </div>
    <div class="form-group">
      <label for="adress">Endereço</label>
      <input name="adress"  type="text" class="form-control" id="adress" placeholder="Avenida Aquidabã, 163" required>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="city">Cidade</label>
        <input name="city" type="text" class="form-control" id="city" required>
      </div>
      <div class="form-group col-md-4">
        <label for="state">Estado</label>
        <select name="state" id="state" class="form-control">
          <option selected>SP</option>
          <option>PR</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="cep">CEP</label>
        <input name="cep"  type="text" class="form-control" id="cep">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>
</div>
<?php include(FOOTER_TEMPLATE); ?>
