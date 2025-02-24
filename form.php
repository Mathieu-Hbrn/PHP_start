<?php
// Démarrage de la session $_SESSION
session_start();
//Vérification de la soumission du formulaire
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //Récupération des données du formulaire
    //$name = $_POST['name'];
    //var_dump($name);
    //$name = isset($_POST['name']);
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';

    // Vérification que le champ n'est pas vide
    if ($name !== ''){
        //Stockage du message dans la session
        $_SESSION['message'] = "Merci $name !";


        header("Location: form.php");
        exit();
    }else {
        $_SESSION['message'] = "Veuillez indiquer votre nom !";
    }
    $mail = isset($_POST['mail']) ? trim($_POST['mail']) : '';

    // Vérification que le champ n'est pas vide
    if ($mail !== ''){


        header("Location: form.php");
        exit();
    }else {
        $_SESSION['message'] = "Veuillez indiquer votre adresse e-mail !";
    }
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    // Vérification que le champ n'est pas vide
    if ($message !== ''){


        header("Location: form.php");
        exit();
    }else {
        $_SESSION['message'] = "Veuillez remplir ce champ !";
    }

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
// Affichage du message stocké en session
if (isset($_SESSION['message'])){
    echo "<p>" . htmlspecialchars($_SESSION['message']) . "</p>";
    //Supprimer le message stocké en session
    unset($_SESSION['message']);
}
?>

<form action="form.php" method="post">
    <label for="name">Nom :<br></label>
    <input type="text" id="name" name="name" required>
    <label for ="mail"><br> E-mail<br></label>
    <input type="email" id="mail" name="mail" required>
    <label for="message"><br>Votre message<br></label>
    <input type="text" id="message" name="message"><br>
    <button type="submit">Envoyer</button>
</form>

</body>
</html>
