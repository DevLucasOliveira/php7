<html>

<head>
    <meta charset="utf-8">
    <title>Atividade1</title>
</head>

<body>

    <?php
    $idade = 19;
    $peso = 55.3;

    if (($idade >= 16 && $idade <= 69) && $peso >= 50) {
        echo 'Atende aos requisitos';
    } else {
        echo 'Não atende aos requisitos';
    }

    ?>

</body>

</html>