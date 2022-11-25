<?php
$userphrase = $_GET["userphrase"];
$wordcensored = $_GET["wordcensored"];
var_dump($_GET);
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
    <div>
        <h2>La tua frase:</h2>
        <p><?php echo $userphrase; ?></p>

    </div>
    <div>
        <h2>La tua frase con la parola censurata:</h2>
        <p>
            <?php
            $censured_result = $str_replace($wordcensored, "***", $userphrase);
            echo $censured_result;
            ?>
        </p>

    </div>
    
</body>
</html>