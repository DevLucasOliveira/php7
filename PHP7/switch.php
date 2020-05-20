<html>

<head>
    <meta charset="utf-8">
    <title>Hello World</title>
</head>

<body>
    <?php

    $parametro = 'abc';

    switch ($parametro) {
        case 1:
            echo 'Entrou no case 1';
            break;
        case 'abc':
            echo 'Entrou no case 2';
            break;
        case false:
            echo 'Entrou no case 3';
            break;
        default:
            echo 'Entrou no default';
            break;
    }


    ?>
</body>

</html>