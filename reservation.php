<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <title>Document</title>
    <script>
function verfier(){
    if(document.getElementById("nom").value==""){alert("saisir votre nom");return false;}
    if(document.getElementById("prenom").value==""){alert("saisir votre prenom"); return false;}
    if(document.getElementById("tel").value==""){alert("saisir votre numero de telephone");return false;}
    if(document.getElementById("mot-passe").value==""){alert("saisir un mot de passe");return false;}
    if(document.getElementById("mot-passe2").value==""){alert("saisir un correcte mot de passe");return false;}
    if(document.getElementById("email").value.indexOf("@")==-1 || document.getElementById("email").value==""){alert("sisair un correct email");return false;}
    let taille=document.getElementById("tel").value.length;
    for(let i=0;i<taille;i++){
        if(document.getElementById("tel").value.charAt(i)<"0" ||document.getElementById("tel").value.charAt(i) >"9" || taille !=10)alert("saisir un numero correct")
    }
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

    <form action="reservation.php" method="post">
        <div class="icons">
        <h1>se connecter</h1>
        <div class="sociel-media">
        
        <p><i class="fab fa-google"></i></p>
        <p><i class="fab fa-youtube"></i></p>
        <p><i class="fab fa-facebook-f"></i></p>
        <p><i class="fab fa-twitter"></i></p>
    </div>
    <p class="utilise-mail">réserver votre scéance de photographie</p>
    </div>

<div class="inputs">
      
<input type="text" name="nom" id="nom" placeholder="saisir votre nom">

<input type="text" name="prenom" id="prenom" placeholder="sisair votre prenom">
<input type="text" name="email" id="email" placeholder="email">

<input type="text" name="email" id="email" placeholder="email">
<input type="text" name="tel" id="tel" placeholder="tel">

<input type="date" name="date" id="date" ><br>
<input type="text" name="services" id="services" placeholder="service"><br>
<br>
<input type="text" name="budget" id="budget" placeholder="budget">

</div>

<center>
    <button type="submit" onclick="verfier()">réserver</button>
</center>
<?php 
include('function.php');
   if(isset($_POST['nom'])and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['tel']) and isset($_POST['date']) and isset($_POST['services']) and isset($_POST['budget']) )
   {
     
    connexion();
        $sql="insert into reservation (nom,prenom,email,tel,date,sevices,budget) values ('".$_POST['nom']."','".$_POST['prenom']."','".$_POST['email']."','".$_POST['tel']."','".$_POST['date']."','".$_POST['services']."','".$_POST['budget']."')";
        $bdd->exec($sql);
       
   
    }
   
    
?>

    </form>

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