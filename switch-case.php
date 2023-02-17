<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibição condicional com switch-case</title>
</head>
<body>
    <?php
        $op = 2;

        switch ($op) {
            case 1:
                echo 'Cadastro';
                break;
            case 2:
                echo 'Relatórios';
                break;
            default:
                echo 'Opção inválida!';
                break;
        } // statement: ações diferentes

        echo "<br><br>";

        echo match ($op) {
            1 => "Cadastro",
            2 => "Relatórios",
            3 => "Opção inválida!",
        } // expression: apenas uma ação com valores diferentes

        // expressions são mais difíceis de trabalhar em primeiro momento, mas costumam ser mais concisos.
    ?>    
</body>
</html>
