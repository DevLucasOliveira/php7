<html>

<head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php
    $cartao = true;
    $gastou = 550;
    $frete = 50;
    $desconto = true;


    if ($gastou >= 400 && $cartao) {
        $frete = 0;
    } else if ($gastou >= 300 && $cartao) {
        $frete = 10;
    } else if ($gastou >= 100 && $cartao) {
        $frete = 25;
    } else {
        $desconto = false;
    }
    ?>

    <h1>Detalhes do pedido</h1>
    <!-- Operador ternário
        <condição> ? true : false -->
    <p>Possui cartão da loja? <?= $cartao ? 'SIM' : 'NÃO'; ?></p>
    <p>Valor da compra?<?= $gastou; ?></p>
    <p>Recebeu desconto no frete? <?= $desconto ? 'SIM' : 'NÃO'; ?> </p>
    <p>Valor do frete? <?= $frete; ?></p>
</body>

</html>