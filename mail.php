<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
    <?php
        $retour = mail('pauline.aelion@edu.devinci;fr', 'Envoi depuis la page Contact', 'test');
        if ($retour) {
            echo '<p>Votre message a bien été envoyé.</p>';
        }
    ?>
</body>
</html>
