<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php 
$text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi dolorum vel eum cum ratione pariatur molestiae eaque, voluptates corporis. Expedita aliquid reiciendis ullam aliquam dicta nemo deserunt. Placeat, voluptas accusantium.";
$censorship = $_GET["censorship"];
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
    <h1>Uncensored text</h1>
    <p><?php echo $text ?></p> 
    <p>The text has <strong><?php echo strlen($text) ?></strong> characters.</p> 

    <form>
        <label for="censorship">
            <input type="text" name="censorship" id="censorship">
            <button type="submit">Submit</button>
        </label>
    </form>
    <p>Word to censor: <strong><?php echo $censorship ?></strong></p>
    <h2>Censored Text</h2>
    <p><?php echo str_replace($censorship, '***', $text) ?></p>
</body>
</html>