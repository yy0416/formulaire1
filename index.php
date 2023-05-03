<!DOCTYPE html>
<html lang="en">
<?php
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // nettoyage et validation des données soumises via le formulaire 
    if (!isset($_POST['name']) || trim($_POST['name']) === '')
        $errors[] = "Le nom est obligatoire";
    if (!isset($_POST['lastname']) || trim($_POST['lastname']) === '')
        $errors[] = "Le prénom est obligatoire";
    if (!isset($_POST['sujet']) || !is_array($_POST['sujet']) || count($_POST['sujet']) === 0)
        $errors[] = "Sujet est obligatoire";
    if (!isset($_POST['e-mail']) || trim($_POST['e-mail']) === '')
        $errors[] = "e-mail est obligatoire";
    if (!filter_var($_POST['e-mail'], FILTER_VALIDATE_EMAIL))
        $errors[] = "Le format de l'email est invalide.";
    if (!isset($_POST['phoneNumber']) || trim($_POST['phoneNumber']) === '')
        $errors[] = "phoneNumber est obligatoire";
    if (!isset($_POST['message']) || trim($_POST['message']) === '')
        $errors[] = "message est obligatoire";
    if (empty($errors)) {
        // traitement du formulaire
        // puis redirection
        header('/');
    }
}

?>

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
                <option value='sujet3'>sujet3</option>
                <option value='sujet4'>sujet4</option>
                <option value='sujet5'>sujet5</option>
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