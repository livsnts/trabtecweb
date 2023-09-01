<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-L17ogD0JxLZO5I+y+4JtH6u5z9wz2IZl4u2oPm/24K+q4VRoEx09kj4ivzs2l2IznoW84g7BrvUiT5I0o2/6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> <!--muda a fonte-->

</head>
<body style="background-color:#9AC791">
<?php require_once("menu.php");?>
<div class="container">
    <h2 class="mt-3">
        <?php
        session_start();
        $nome= $_SESSION['nome'];
        ?>
        Seja bem vindo(a), <?= $nome ?>.
    </h2>
</div>

</body>
</html>