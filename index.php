<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <form action="result.php" method="GET">
        <div class="phrase">
            <label for="userphrase">phrase</label>
            <input type="text" id="userphrase" name="userphrase">
        </div>
        <div class="word">
            <label for="wordcensored">word to beep</label>
            <input type="text" id="wordcensored" name="wordcensored">
        </div>
        <br>
        <button type="submit">Invia</button>
    </form>
</body>
</html>