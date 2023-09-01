<?php
//1. Conecta no banco de dados (ip, usuario, senha, nome do banco)
require_once("verificaautenticacao.php");
require_once("conexao.php");

if(isset($_POST['salvar'])){
    //2. Recebe os dados para inserir no BD
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    

//3. Prepara o SQL 
$sql= "update usuario
set nome= '$nome',
email = '$email'
where id = $id";

//4. Executa SQL no BD
mysqli_query($conexao,$sql);

//5. Mostra uma mensagem ao usuário
$mensagem = "Alterado com sucesso &#x2713;";
}

// 6. Busca usuário selecionado pelo "usuarioListar.php"
$sql = "select * from usuario where id = " . $_GET['id'];
$resultado = mysqli_query($conexao, $sql);
$linha = mysqli_fetch_array($resultado);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de usuário</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-L17ogD0JxLZO5I+y+4JtH6u5z9wz2IZl4u2oPm/24K+q4VRoEx09kj4ivzs2l2IznoW84g7BrvUiT5I0o2/6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> 


</head>
<body>
<?php require_once("menu.php");?>

<div class="container"> 


<h1>Alteração de Usuário</h1>

    <form method="post">
      <input type="hidden" name="id" value="<?= $linha['id']?>"> 

    <div class="mb-3">
    <label for="nome" class="form-label"> Nome </label>
    <input type="text" class="form-control" id="nome" name="nome"  
    value= "<?= $linha['nome']?>">
 </div>

  <div class="mb-3">
    <label for="email" class="form-label"> Email </label>
    <input type="email" class="form-control" id="email" name="email"
    value= "<?= $linha['email']?>">
  </div>
  
  <button style="background-color:#9AC791" name ="salvar" type="submit" class="btn btn-warning">&#x2713; Salvar</button>
  <button style="background-color:#9AC791" name ="voltar" type="reset" class="btn btn-warning">&#8634; Voltar</button>

</form>

<?php if (isset($mensagem)) { ?>
  <div class="alert alert-success" role="alert">
  <?= $mensagem;?>
  </div>
<?php } ?>


</body>
</html>

