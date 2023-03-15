<?php
    $usuario = $_POST['username'] ?? '';
    $senha = $_POST['password'] ?? '';

    $isLogged = !(empty($usuario) || empty($senha));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
        if ($isLogged) {
            echo "Bem vindo, $usuario!";
        } else {
            include 'form.html';
        }
    ?>
</body>
</html>
