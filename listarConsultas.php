<?php

require_once './actions/config.php';
$sql = "SELECT * FROM usuario";
$stmt = $conn->query($sql);
$usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<body class="bg-dark">
    


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<div class="container ">
<h2 class="mb-5 mt-4 text-white">Consultas agendadas</h2>
</div>

 <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
      <th scope="col">Data</th>
      <th scope="col">Hora</th>
      <th scope="col">Opções</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($usuario as $usuarios){ ?>
    <tr>
     <td><?php echo $usuarios['nome']; ?></td>
     <td><?php echo $usuarios['cpf']; ?></td>
     <td><?php echo $usuarios['email']; ?></td>
     <td><?php echo $usuarios['telefone']; ?></td>
      <td><?php echo $usuarios['datas']; ?></td>
      <td><?php echo $usuarios['hora']; ?></td>
      <td>

                <a href="#" class="btn btn-danger btn_excluir">Excluir</a>
              </td>
    </tr>
    <?php } ?>
  </tbody>
</table>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
