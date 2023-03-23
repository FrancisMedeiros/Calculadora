<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./CSS/calculadora.css" rel="stylesheet">
    <link rel="icon" href="./CSS/calc.png" type="image/png">
    <title>CALCULADORA</title>

</head>

<body>

<h1>CALCULADORA</h1>
    
<div id="form">
    <form action="calculadora.php" method="POST">
    
    <p>
        <label>N° 1</label>
        <input type="number" name="num1" default="0">
    </p>

    <p>
        <label>N° 2</label>
        <input type="number" name="num2"  default="0">
    </p>

    <p>
        <select name="opcao">
        <div id="opt">
            <option value="1">(+) ADIÇÃO</option>
            <option value="2">(-) SUBTRAÇÃO</option>
            <option value="3">(*) MULTIPLICAÇÃO</option>
            <option value="4">(/) DIVISÃO</option>
        </div>
        </select>
    </p>

    <p>
        <button type="submit" name="button">CALCULAR!</button>
    </p>

    <div id="result">
        <?php
            include "func_calculadora.php";

            if (!empty($_POST)) {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $opcao = $_POST["opcao"];

                calculadora($num1, $num2, $opcao);
            };
        ?>
    </div>

    </form>
</div>

</body>

</html>