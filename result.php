<?php
$userphrase = $_GET["userphrase"];
$wordcensored = $_GET["wordcensored"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>

    <span>La tua frase:</span><h2><?php echo $userphrase; ?></h2>
    <!-- <span>parola da censurare:</span><h2><?php echo $wordcensored; ?></h2> -->

    <?php $censor_result = $str_replace("wordcensored", "***", $wordcensored);?>
    <span>La tua frase con la parola censurata:</span><h2><?php echo $censor_result; ?></h2>
    
    
</body>
</html>