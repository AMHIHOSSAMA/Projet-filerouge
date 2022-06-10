<?php



include('header.php');

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<nav id="navbar2" class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img id="logo" src="images/logo.png" alt="logo flance "></a>
    <button id="hamburger" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="d-flex justify-content-end">
    <p id="navspara" class="d-flex justify-content-center">Recherche d'un emploi? <a href="sinupFre.php">&nbsp;en tant que talent</a> </p>

      </div> 
    
  </div>
 
</nav>
<hr id="hrnav">
<section class="container " id="cartcontner">
    <h3 class="d-flex justify-content-center">Inscrivez-vous pour recruter des talents</h3>
    
    <button  type="button" id="applic" class="btn btn-outline d-flex justify-content-center brand-icons"><i class="fa-brands fa-apple"></i> Créer un compte</button>
    <button type="button" id="googlic" class="btn btn-outline  brand-icons"><i class="fa-brands fa-google d-flex justify-content-start"></i> Créer un compte</button>
    <h6 class="d-flex justify-content-center" id="ouline">OU</h6>
    <form action="" >
      <div class="d-flex justify-content-center">

          <input class="form-control forms" type="text" placeholder="Nom" aria-label="default input example">
      </div>
      <div class="d-flex justify-content-center">
          <input class="form-control forms" type="text" placeholder="Prenom"  aria-label="default input example">
      </div>
      <div class="d-flex justify-content-center">
          <input class="form-control forms" type="eamil" placeholder="Email" aria-label="default input example">
      </div>
      <div class="d-flex justify-content-center">
          <input class="form-control forms" type="password" placeholder="Mot de passe" aria-label="default input example">
      </div>
      <div class="d-flex justify-content-center">
          <input class="form-control forms" type="password" placeholder="Confirmer le mot de passe" aria-label="default input example">
      </div>
      <div class="row" id="checkid">
        <div calss="col">
            <input type="checkbox">
        </div>
         <div class="col">
              <P id="condtion">Oui, je comprends et j'accepte <a href="#">les conditions d'utilisation de Fralanc </a> e y compris <a href="">les conditions d'utilisation et la politique de confidentialité.</a> </P>
         </div>
      </div>
      <button type="button" id="crees" class="btn btn-outline d-flex justify-content-center btnhoversss"> Créer un compte</button>
    </form>
    <p id="lastlnk2">Vous avez déjà un compte? <a href="login.php">Connexion</a> </p>
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