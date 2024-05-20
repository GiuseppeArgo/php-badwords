<?php 
$user_word = $_GET["user_word"];
$user_text = $_GET["user_text"];
$censored_word = "***";
$censored_text = str_replace($user_word, $censored_word, $user_text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>Il testo da censurare è:</h2>
        <p><?php echo $user_text; ?></p>
        <h2>Il testo da censurare è lungo <?php echo strlen($user_text); ?> caratteri compresi gli spazi.</h2>
    </div>

    <div>
        <h2>La parola da censurare è "<?php echo $user_word; ?>"</h2>
        <p>Il testo censurato è <?php echo $censored_text; ?></p>
        <h2>Il testo censurato è lungo <?php echo strlen($censored_text); ?> caratteri compresi gli spazi.</h2>
    </div>
</body>
</html>