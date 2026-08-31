<?php
include VIEW . "/Includes/header.php";
include VIEW . "/Includes/navbar.php";
?>

<div class="p-5 center">
  <h1> Cadastrar Usuarios </h1>
</div>

<form method="POST" action="/infotech/usuarios/cadastro">
  <div class="mb-3">
    <input type="hidden" name="id" id="id" value="<?= $model->id ?? '' ?>">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" value="<?= $model->nome ?? '' ?>">
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">E-mail</label>
    <input type="email" class="form-control" id="email" name="email" value="<?= $model->email ?? '' ?>">
  </div>4

  <div class="mb-3">
    <label for="senha" class="form-label">Senha</label>
    <input type="senha" class="form-control" id="senha" name="senha" value="<?= $model->senha ?? '' ?>">
  </div>

  <button type="submit" name="salvar" id="salvar" class="btn btn-primary">Salvar</button>
</form>

<?php
include VIEW . "/Includes/footer.php";
?>