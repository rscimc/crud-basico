<?php
require('./config.php');
require('./header.php');

$lista = [];
$sql = $pdo->query('SELECT * FROM usuarios');

if($sql->rowCount() != 0){
  $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>

<table class="table table-dark table-striped container">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>

  <?php foreach ($lista as $usuario): ?>
    <tr>
      <th scope="row"><?=$usuario['id'];?></th>
      <td><?=$usuario['nome'];?></td>
      <td><?=$usuario['email'];?></td>
      <td>
        <a href="edit.php?id=<?=$usuario['id'];?>">
          <button type="button" class="btn btn-secondary">Editar</button>
        </a>
        <a href="delete.php?id=<?=$usuario['id'];?>">
          <button type="button" class="btn btn-info">Excluir</button>
        </a>
      </td>
    </tr>
  <?php endforeach; ?>

  </tbody>
  </table>



    </body>
</html>

