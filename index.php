<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Agenda da Empresa</h1>
    <img  id="livro" src="livro.png">
    <button type="button">Consultar Agenda</button>
    <p>Nome:Telefone</p>
    <p id="agenda">
        <?php
     include 'consulta.php';


    ?>
    </p>

    <p>Produzido Por:Gustavo Silva De Oliveira</p>
</body>
</html>