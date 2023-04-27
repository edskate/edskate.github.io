<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text php Com saudação.</title>
    <style>
    body {
        background-color: #004000;
    }

    p {
        color: #ffff00;
        text-shadow: -1px 2px 3px #000;
        font-size: 30px;
        margin: 50px;
    }

    h1 {
        color: #00ffff;
        text-shadow: -1px 2px 3px #000;
        margin: 30px;
    }
    </style>
</head>

<body>
    <h1>Esté é um Programa Php.</h1>
    <?php
$nome =  "edy";
echo "<p>Eu me chamo $nome!</p>";
echo "<p>Como você está ! $nome ?</p>";
$nome = "Bem";
echo "<p>Bem obrigado. </p>";
$nome = "Como você esta hoje?";
echo "<p>E Você,  $nome</p>";
echo "<p>Bem obrigado.</p>"
?>
</body>

</html>