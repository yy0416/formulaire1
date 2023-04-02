<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>

<body>
    <form action="/thanks.php" method="post">
        <p class='row'>
            <label for='name'>NOM</label>
            <input type='text' name='name' id='name'>
        </p>
        <p class='row'>
            <label for='lastname'>Prénom</label>
            <input type='text' name='lastname' id='lastname'>
        <p class='row'>
            <label for='e-mail'>E-mail</label>
            <input type='text' name='e-mail' id='e-mail'>
        <p class='row'>
            <label for='phoneNumber'>téléphone</label>
            <input type='text' name='phoneNumber' id='phoneNumber'>

        </p>
        <p class='row'>
            <label for='sujet'>sujet</label>
            <select name='sujet' id='language' multiple size='4'>
                <option value='sujet1'>sujet1</option>
                <option value='sujet2'>sujet2</option>
                <option value='sujet2'>sujet2</option>
            </select>
        <p class='row'>
            <label for='message'>message</label>
            <input type='textarea' name='message' id='message'>
        </p>
        <p>
            <button type='submit'>Envoyer</button>
        </p>

    </form>
</body>