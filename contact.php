<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>webpage photography</title>
    <link rel="stylesheet" href="contact.css">

    <script>
function verifier(){
    if(document.getElementById("email").value=="") alert("donner email");return false;
    if(document.getElementById("email").value.indexOf("@")==-1) alert(" email incorrect");return false;
    if (document.getElementById("mot-passe").value=="")alert("donner votre mot de passe");return false;

}

    </script>

</head>

<body>
    
 <header>
    
    <div class="logo">
         <img src="logo.png" alt="">
    </div>
    
    <nav>
        <ul>
            <li class="accueil"><a href="monsite.html" >accueil</a></li>
            <li class="accueil"><a href="apropos.html" >à propos </a></li>
            <li class="accueil"><a href="photos.html" > photos</a></li>
            <li class="accueil"><a href="videos.html">videos</a></li>
            <li class="contact"><a href="contact.php">contact</a></li>
        </ul>
    </nav>
 </header>
 
<!--formulair-->
<section>
<form action="contact.php"  method="POST">
    <div class="icons">
    <h1>se connecter</h1>
    <div class="sociel-media">
    
    <p><i class="fab fa-google"></i></p>
    <p><i class="fab fa-youtube"></i></p>
    <p><i class="fab fa-facebook-f"></i></p>
    <p><i class="fab fa-twitter"></i></p>
</div>
<p class="utilise-mail">ou utiliser mon adresse email:</p>
</div>

<div class="inputs">
<input type="text" name="email" id="email" placeholder="sisais email">
<input type="text" name="mot-passe" id="mot-passe" placeholder="Mot de passe">
</div>
<p class="inscription">je n'ai pas de compte.je m'en crée un.</p>
<!--<input type="submit" value="envoyer" onclick="verifier()">-->
<!--<a ><input type="submit"  onclick="verifier()" value="se connecter" ></a>-->
<button input type="submit"  onclick="verifier()">se connecter</button>

</form>
<a href="inscriptin.php"><button class="btn" >cree un compte</button></a>

 
</section>

<?php
try {
    global $bdd;
    $bdd = new PDO('mysql:host=localhost;dbname=utilisateurs;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query("SELECT * FROM utilisateurinfo");
while ($donne = $reponse->fetch()) {
    $email = $donne['email'];
    $mot = $donne['motdepasse'];
    if(isset($_POST['email']) and isset($_POST['mot-pass'])){
    if ($_POST['email'] == $email && $_POST['mot-passe'] == $mot) {
        header("Location: reservation.php");
        exit(); // Important pour arrêter l'exécution après la redirection
    } 
    
}
}
echo "Les informations sont incorrectes";
?>

   <!--footer-->
   <h1 class="fin">contacter nous</h1>
<footer>
    
    <div class="footer-contenue">
        <h3>Nous contacter </h3>
        <p>Pour toutes questions, demande de devis,<br>
             n'hésitez pas à nous écrire.
<br>
            Nous vous répondrons au plus vite!</p>
    </div>


    <div class="footer-contenue">
        <h3>phone</h3>
        <p>06-54-53-89</p>
        <h3>email</h3>
        <p>alabaphotography@gmail.com</p>
        <h3>facbook</h3>
        <p>alaba-photography</p>
    </div>

    
</footer>
</body>


</html>