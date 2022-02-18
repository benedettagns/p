<?php

$testo = 'Ricordate del passato solo ciò che vi fa piacere.';
$nascosta = $_GET['nascosta'];
$testoNascosto = str_replace($nascosta, '***', $testo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p> <?php echo $testo;?> </p>
    <p>Jane Austen</p>
    <p> Conteggio: <?php echo strlen($testo); ?> </p>

    <hr>
    <h1>Testo con censura</h1>
    <p> <?php echo $testoNascosto ?></p>

</body>
</html>