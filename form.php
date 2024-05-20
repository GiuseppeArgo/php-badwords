<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="GET">
        <h2>Scrivi una parola da censurare</h2>
        <input type="text" name="user_word">
        <h2>Scrivi un testo</h2>
        <textarea name="user_text" rows="4"></textarea>
        <button type="submit">Invia</button>
    </form>
</body>
</html>