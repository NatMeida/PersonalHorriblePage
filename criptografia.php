<?php
    $senha = "1234";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criptografia</title>
</head>
<body>
    <h1>Criptografia em PHP</h1>
    <hr>

    <section>
        <h2>Criptografia MD5</h2>

        <article>
            MD5 é um sistema de criptografia raramente usado, que retorna uma sequência aparentemente aleatória de caracteres que pode ser descriptografada com facilidade.
            MD5 não deve ser usado para senhas.
        </article>

        <br>

        <strong>Senha: </strong> <span id="senha"><?= $senha ?></span>

        <br><br>

        <strong>Senha criptografada: </strong> <span id="criptografada"><?= md5($senha) ?></span>
    </section>

    <hr>

    <section>
        <h2>Criptografia SHA1</h2>

        <article>
            SHA1 é um sistema de criptografia mais seguro que o MD5, mas ainda não é recomendado para senhas.
        </article>

        <br>

        <strong>Senha: </strong> <span id="senha"><?= $senha ?></span>

        <br><br>

        <strong>Senha criptografada: </strong> <span id="criptografada"><?= sha1($senha) ?></span>
    </section>

    <hr>

    <section>
        <h2>Criptografia BCRYPT</h2>

        <article>
            BCRYPT é um sistema de criptografia mais seguro que o SHA1, mas ainda não é recomendado para senhas.
        </article>

        <br>

        <strong>Senha: </strong> <span id="senha"><?= $senha ?></span>

        <br><br>

        <strong>Senha criptografada: </strong> <span id="criptografada"><?= password_hash($senha, PASSWORD_BCRYPT) ?></span>
    </section>

    <hr>

    
</body>
</html>
