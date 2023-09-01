<?php
//1. conectar no banco de dados (ip, usuario, senha, nome do banco)
require_once("verificaautenticacao.php");
require_once("conexao.php");

if(isset($_POST['salvar'])){
    //2. Receber os dados para inserir no BD
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $tel = $_POST['tel'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $obs = $_POST['obs'];

    //3. preparar sql para inserir
$sql= "insert into cliente (nome, cpfcnpj, telefone, endereco, cidade, estado, observacao)
values ('$nome', '$cpf', '$tel', '$endereco','$cidade', '$estado', '$obs')";

//4. executar sql no bd
mysqli_query($conexao, $sql);

//5.mostrar uma mensagem ao usuário
$mensagem= "Registro inserido com sucesso!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de cliente</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-L17ogD0JxLZO5I+y+4JtH6u5z9wz2IZl4u2oPm/24K+q4VRoEx09kj4ivzs2l2IznoW84g7BrvUiT5I0o2/6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
<?php require_once("menu.php");?>

<div class="container"> 

<h1>Cadastro de Cliente</h1>

    <form method="post">
    <div class="mb-3">
    <label for="nome" class="form-label"> Nome </label>  
    <input type="text" class="form-control" id="nome" name="nome">   
  </div>
  <div class="mb-3">
    <label for="cpf" class="form-label"> CPF ou CNPJ </label>  
    <input type="text" class="form-control" id="cpf" name="cpf">   
  </div>
  <div class="mb-3">
    <label for="tel" class="form-label" >Telefone </label>
    <input type="text" class="form-control" id="tel" name="tel">
  </div>
  <div class="mb-3">
    <label for="endereco" class="form-label"> Endereço </label>  
    <input type="text" class="form-control" id="endereco" name="endereco">   
  </div>
  <div class="mb-3">
    <label for="cidade" class="form-label"> Cidade </label>  
    <input type="text" class="form-control" id="cidade" name="cidade">   
  </div>
  <div class="mb-3">
    <label for="estado" class="form-label"> Estado </label>  
    <input type="text" class="form-control" id="estado" name="estado">   
  </div>
  <div class="mb-3">
    <label for="obs" class="form-label"> Observação </label>  
    <input type="textarea" class="form-control" id="obs" name="obs">   
  </div>

  <button style="background-color:#9AC791" name ="salvar" type="submit" class="btn btn-success">&#x2713; Salvar</button>
  <button style="background-color:#9AC791" name ="voltar" type="reset" class="btn btn-success">&#8634; Voltar</button>
  <br><br>
</form>

<?php if (isset($mensagem)) { ?>
  <div class="alert alert-success" role="alert">
  <?= $mensagem;   ?> 
  </div>
<?php } ?>

</body>
</html>