<?php



include('header.php');
include('datacon.php');

session_start();


    
?>
<?php
$nameErr = $prenomErr = $emailErr = $passwordErr="";
$name = $prenom = $email  = $password="";

if (isset($_POST["submit"])) {
 
  if (empty($_POST["nom"])) {
     $nameErr = "<span>Le nom est requis</span>";
   } else {
     $name = $_POST["name"];
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
       $nameErr = "<span>Seules les lettres et les espaces blancs sont autorisés</span>";
     }
   }



   if (empty($_POST["prenom"])) {
    $prenomErr = "<span> Le prenom est requis</span>";
  } else {
    $name = $_POST["name"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $prenomErr = "<span>Seules les lettres et les espaces blancs sont autorisés</span> ";
    }
  }
  




   if (empty($_POST["email"])) {
    $emailErr = "L'e-mail est requis";
  } else {
    $email = $_POST["email"];
  
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "<span>Format d'email invalide</span> ";
    }
  }
  


      $password=$_POST['password'];
    $number = preg_match('@[0-9]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    if(strlen($password)<= 5 || !$lowercase  || !$number ) {
      $passwordErr=' <span class="error"> Le mot de passe doit comporter au moins 5 caractères et doit contenir au moins un chiffre, une lettre majuscule, une lettre minuscule et un caractère spécial.</span>';
      } else {
        $validpass= '<span class="valid">Your password is strong.</span>';
      }


  } 

?>

<span></span>



 


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<nav id="navbar2" class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img id="logo" src="images/logo.png" alt="logo flance "></a>
    <button id="hamburger" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="d-flex justify-content-end">
    <p id="navspara" class="d-flex justify-content-center">Ici pour embaucher des talents?<a href="singupCln.php">&nbsp; en tant que client</a> </p>
      </div> 
    
  </div>
 
</nav>
<hr id="hrnav">
<section class="container " id="cartcontner">
    <h3 class="d-flex justify-content-center">Inscrivez-vous pour trouver le travail  que vous aimez</h3>
    <button  type="button" id="applic" class="btn btn-outline d-flex justify-content-center brand-icons"><i class="fa-brands fa-apple"></i> Créer un compte</button>
    <button type="button" id="googlic" class="btn btn-outline  brand-icons"><i class="fa-brands fa-google d-flex justify-content-start"></i> Créer un compte</button>
    <h6 class="d-flex justify-content-center" id="ouline">OU</h6>
    <form action="" method="POST">
      <div class="d-flex justify-content-center">

          <input class="form-control forms" type="text" placeholder="Nom" name="nom" aria-label="default input example">
          
      </div>
      <div class="d-flex justify-content-center">
          <input class="form-control forms" type="text" placeholder="Prenom" name="prenom" aria-label="default input example">
      
      </div>
      <div class="d-flex justify-content-center">
          <input class="form-control forms" type="eamil" placeholder="Email" name="email" aria-label="default input example">
          
      </div>
      <div class="d-flex justify-content-center">
          <input class="form-control forms" type="password" placeholder="Mot de passe" name="password" aria-label="default input example">
        
      </div>
      <div class="d-flex justify-content-center">
          <input class="form-control forms" type="password" placeholder="Confirmer le mot de passe" name="passconf" aria-label="default input example">
      </div>



      <div class="container" id="radiosmgn">




      <?php
    $i =0;
    $sql = "SELECT nom FROM categories";
    $query = mysqli_query($conn, $sql);

      while($row = mysqli_fetch_array($query)){

       echo '<div id="checkradio" class="form-check ">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault '.  $i++ .'">
        ' .$row['nom'].'
        </label>
        </div>';
      }
          
          
              ?>




          </div>
      </div>
      <div class="row" id="checkid">
        <div calss="col">
            <input type="checkbox">
        </div>
         <div class="col">
              <P id="condtion">Oui, je comprends et j'accepte <a href="#">les conditions d'utilisation de Fralanc </a> e y compris <a href="">les conditions d'utilisation et la politique de confidentialité.</a> </P>
         </div>
      </div>
     
        <div>
            <input class="form-control" id="crees" type="submit" name="submits" value="Créer un compte" />
        </div>    </form>
    <p id="lastlnk">Vous avez déjà un compte? <a href="login.php">Connexion</a> </p>
</section>
<footer id="smallft">
<hr id="hrfooter" >
    <div class="container">
        <div class="row">
            <div class="col">
                <p>© Flance International Ltd. 2022</p>
            </div>
            <div class="col">
                <p>Conditions d'utilisation</p>
            </div>
            <div class="col">
                <p>Politique de confidentialité</p>
            </div>
        </div>

    </div>
</footer>