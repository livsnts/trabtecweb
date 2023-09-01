<!DOCTYPE html>
<?php
//1. Conecta no banco de dados (IP, usuario, senha, nome do banco)
require_once("verificaautenticacao.php");
require_once("conexao.php");

// Excluir
if(isset($_GET['id'])){ // Verifica se o botão excluir foi clicado
  $sql= "delete from produto where id = " . $_GET['id'];
  mysqli_query($conexao,$sql);
  $mensagem= "Exclusão realizada com sucesso.";
}

//2. Prepara a SQL
$sql = "select * from produto";

//3. Executa a SQL
$resultado = mysqli_query($conexao, $sql);

?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script> 
    <script src="https://kit.fontawesome.com/a70b0e4271.js" crossorigin="anonymous"></script> 
    <title>Listagem de produtos</title>
</head>
<body>

<?php require_once("menu.php");?> 

    <div class="container">

    <?php if (isset($mensagem)) { ?>
      <div class="alert alert-success" role="alert"><?= $mensagem?></div>
    <?php } ?>

    <div class="card mt-3 mb-3">
        <div class="card-body">
            <h1 class="card-title">Listagem de produtos
            <a href="produtoCadastrar.php" class="btn btn-success btn-sm"><i class="fa-solid fa-plus"></i></a>
            </h1>
        </div>
    </div>

    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Unidade de medida</th>
      <th scope="col">Ação</th>
      
    </tr>
  </thead>
  <tbody>
   <?php while($linha = mysqli_fetch_array($resultado)){ ?>
    <tr>
      <th><?=$linha['id']?></th>
      <td><?=$linha['nome']?></td>
      <td><?=$linha['unidadeDeMedida']?></td>

    <td>
    <a href="produtoAlterar.php? id=<?=$linha['id']?>" class="btn btn-success">
    <i class="fa-solid fa-pen-to-square"></i>
    </a>

    <a href="produtoListar.php? id=<?=$linha['id']?>" class="btn btn-danger" onclick="return confirm('Deseja mesmo excluir o cadastro?')">
    <i class="fa-sharp fa-solid fa-trash"></i> </a>
   
  </td>
    </tr>
    <?php } ?>

  </tbody>
    </table>
      </div>

</body>
</html>