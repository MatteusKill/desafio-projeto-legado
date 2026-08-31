<?php
    include VIEW . "/Includes/header.php";
    include VIEW . "/Includes/navbar.php";
?>

<div class="p-5 center">
    <h1> Usuários Cadastrados </h1>
</div>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
   <?php
    // print_r($model);
        foreach($model->rows as $usuario):
            echo ' <tr>
                        <th scope="row"> '.$usuario->id.'  </th>
                        <td> '.$usuario->nome.'  </td>
                        <td>  '.$usuario->email.'  </td>
                        <td> 
                            <a class="btn btn-dark" href="/usuarios/cadastro?id='.$usuario->id.'"> <i class="bi bi-pencil-square"></i>  </a>
                            <a class="btn btn-danger" href="/usuario/exclusao?id='.$usuario->id.'"> <i class="bi bi-trash-fill"></i> </a>
                        </td>
                    </tr>';
        endforeach;
   ?>
  </tbody>
</table>

<?php
   include VIEW . "/Includes/footer.php";
?>