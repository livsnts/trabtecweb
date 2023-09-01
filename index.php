<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> 

</head>
<body>
<?php require_once("menu.php");?>
      <div class="container">
      <?php if (isset($_GET['mensagem'])) { ?>
  <div class="alert alert-danger mt-3" role="alert">
  <?= $_GET['mensagem'];   ?> 
  </div>
<?php } ?>

      <h2 style="text-align: center">Login</h2> 
  
  <form action="autenticacao.php" method="post">
    <div class="mb-3">
    <label for="email">Endereço de email</label>
    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Seu email">
  </div>
  <div class="form-group">
    <label for="senha">Senha</label>
    <input name="senha" type="password" class="form-control" id="senha" placeholder="Senha">
  </div>
  <div class="form-group form-check">
    
  </div>
  <center>
  <button style="background-color:#9AC791" name ="entrar" type="submit" class="btn btn-success">&#x2713; Entrar</button></center>
</form>
</div></div>

</body>
</html>