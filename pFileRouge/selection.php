<?php



include('header.php');

?>


<nav id="navbar2" class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img id="logo" src="images/logo.png" alt="logo flance "></a>
    <button id="hamburger" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="d-flex justify-content-end">
      <button type="button" id="btnlogin" class="btn btn-outline">Login</button>
      </div> 
    
  </div>
</nav>
<hr id="lines">


<section class="container " id="cartcontner">
    <h3 class="d-flex justify-content-center">Inscrivez-vous en tant que  client ou freelancer</h3>
<div class="row">
  <div class="col-sm-6 " >
    <div class="frscrt">
      <div class="card-body cartbor">
      <input type="radio" id="rad1" name="fav_language" value="HTML">
      <div class="d-flex justify-content-center"><img  src="images/facehap.png" alt=""></div>
      
        <p class="card-text d-flex justify-content-center">Je suis un client, je recrute pour un projet</p>
    
      </div>
    </div>
  </div>
  <div class="col-sm-6 ">
    <div class="frscrt">
      <div class="card-body cartbor">
      <input type="radio" id="radio2" name="fav_language" value="CSS">
      <div class="d-flex justify-content-center"> <img src="images/cnthap.png" alt=""></div>
     
        <p class="card-text d-flex justify-content-center">Je suis indépendant, à la recherche d'un emploi</p>
        
      </div>
    </div>
  </div>
</div>
<button type="button" id="btncompt" class="btn btn-outline d-flex justify-content-center">Créer un compte</button>
<p id="selpara" class="d-flex justify-content-center">Vous avez déjà un compte? <a href="#">Login</a> </p>
</section>

<footer id="smallft">
<hr>
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