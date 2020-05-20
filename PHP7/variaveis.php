<html>
    <head>
        <meta charset="utf-8">
        <title>Hello World</title>
    </head>
    <body>
        <?php 

            //string
            $nome = 'Lucas de Oliveira Silva';

            //int
            $idade = 19;

            //float
            $peso = 65.3;

            //boolean
            $fumante = true; //(true = 1) e (false = )

            //... lógica .../
            $idade = '21' ; 

        ?>

        <h1>Ficha cadastral</h1>
        <br>
        <p>Nome: <?= $nome ?></p>
        <p>Idade: <?= $idade?></p>
        <p>Peso: <?= $peso?></p>
        <p>Fumante: <?= $fumante?></p>
    </body>
</html>