<?php



include('header.php');
include('datacon.php');


$errorpass="";
if(isset($_POST['submit'])){

  $email=$_POST['email'];
  $pass=$_POST['password'];
  $requet="SELECT * FROM freelancers WHERE email='$email' AND passwords='$pass'";
  //die($requet);
  $result=mysqli_query($conn,$requet);
  if($result->num_rows > 0){
    $row=mysqli_fetch_assoc($result);
    $_SESSION['client']=$row;
    header("Location:landPage.php");
  }else{
      $errorpass=' <span class="error">password is worng</span>';
    
  }
}

?>

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
<hr id="hrnav">
<section class="container " id="cartcontner">
<?php echo $errorpass ?>
    <h3 class="d-flex justify-content-center">Connectez-vous à Flance</h3>
    <div class="row d-flex justify-content-center" id="radios2">
        <div class="col">
          <input type="radio" id="client" name="fav_language" value="HTML">
          <label for="clientRadio">Client</label>
        </div>

        <div class="col">
          <input type="radio" id="freelancer" name="fav_language" value="CSS">
          <label for="freelancerRadio">Freelance</label>
        </div>
    </div>
      </div>
    
    
    <form action=""  >
      <div class="d-flex justify-content-center">
          <input class="form-control forms" type="eamil" name="email" placeholder="Email" aria-label="default input example">
      </div>
      <div class="d-flex justify-content-center">
          <input class="form-control forms" type="password" name="password" placeholder="Mot de passe" aria-label="default input example">
      </div>
      
      <button type="button" id="crees" class="btn btn-outline d-flex justify-content-center unekbtn">Connectez-vous</button>
      <h6 class="d-flex justify-content-center" id="ouline">OU</h6>
      <button  type="button" id="applic" class="btn btn-outline d-flex justify-content-center brand-icons"><i class="fa-brands fa-apple"></i> Créer un compte</button>
    <button type="button" id="googlic" class="btn btn-outline  brand-icons"><i class="fa-brands fa-google d-flex justify-content-start"></i> Créer un compte</button>
   
    </form>
    <p id="lastlnk2">Vous n'avez pas de compte Flance ?<a href="#">&nbsp; Connectez-vous</a> </p>
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