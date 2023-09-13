<?php
// créer un formulaire avec les champs :
// nom, prenom, email, mot de passe
// la validation du formulaire redirige vers action.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form method="post" action="action.php">
            <div>
                <input type="text" name="nom" placeholder="Nom" required>
                <label for="nom"></label>
            </div>
            <br>
            <div>
                <input type="text" name="prenom" placeholder="Prénom" required>
                <label for="prenom"></label>
            </div>
            <br>
            <div>
                <input type="email" name="email" placeholder="Email" required>
                <label for="email"></label>
            </div>
            <br>
            <div>
                <input type="password" name="password" placeholder="password" required>
                <label for="password"></label>
            </div>
            <br>
            <div>
                <input type="submit" value="Submit" name="inscription">
            </div>
        </form>
    </div>
</body>

</html>