<?php
include("cabecalho.php");
session_start(); session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
    <link rel="stylesheet" href="tl1.css">
</head>
<body>
    <div id="parte1">
        <h1> Caixa Aberto  </h1>
    </div>
    <div id="parte2">
        <div id="logo">
            <img src="data:image/png;base64,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" alt="">
        </div>

        <div id="parte2_2">
            <div id="codigoBarras">
                <h1 class="unico">codigo de barra</h1>
            </div>

            <div id="valorUnitario">
                <h1 class="unico">Valor Unitario</h1>
            </div>

            <div id="valorTotal">
                <h1 class="unico">Valor Total</h1>
            </div>
        </div>
        
        <div id="listaProdutos">
            <h1 class="unico2">Lista de Produtos</h1>
        </div>
    </div>
    <div id="parte3">
        <div id="codigo">
            <h1 class="unico">Codigo</h1>
        </div>

        <div id="funcionario">
            <h1 class="unico">Operador(a) de Caixa</h1>
        </div>

        <div id="subtotal">
            <h1 class="unico">Subtotal</h1>
        </div>
    </div>
    <a href="vizualizarProdutos.php">Visualizar os Produtos disponivel</a>
    <div>
        <a href="tela_cadastroProduto.php">cadastrar produtos</a>
    </div>

</body>

</html>