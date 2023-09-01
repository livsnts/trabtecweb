<?php
//Se foi clicado no botão enviar
if(isset($_POST['enviar'])) {
    $diretorio = "uploads/";
    $arquivoDestino = $diretorio . $_FILES['arquivo']['name'];

    //Envia o arquivo para o $arquivoDestino
    if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $arquivoDestino)) {
        echo "Arquivo enviado com sucesso.";
    } else{
        echo "ERRO: Arquivo não enviado.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
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
      <h1>Upload de arquivo</h1>
      <form name="form" method="post" enctype="multipart/form-data">
        Arquivo: <input type="file" name="arquivo" id="arquivo">
        <br><br><br> 
        <input style="background-color:#9AC791" name ="enviar" type="submit" value="Enviar">
    </form>

</body>
</html>