<?php



include('header.php');

?>
<!-- First section -->
<!-- 01 -->
<section id="fstSection">

<nav id="navbar" class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img id="logo" src="images/logo.png" alt="logo flance "></a>
    <button id="hamburger" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active nav-item" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active nav-item" href="#">Projets</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active nav-item" aria-current="page" href="#">Services</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active nav-item" aria-current="page" href="#">À propos</a>
        </li>
      </ul>
      <form class="d-flex">
      <button type="button" id="btn1" class="btn btn-outline">Login</button>
      <button type="button" id="btn2" class="btn">Sign up</button>
      </form>
    </div>
  </div>
</nav>

<!-- the main of landing page -->
<!-- 001 -->


<div class="container">
  <div class="row">
    <div id="" class="col">
      <h1 id="bigtitl" class="content">Engagez les meilleurs freelances pour n'importe quel travail, en ligne.</h1>
      <P id="paragr1" class="content">Une section de grands Freelancers sont prêts à travailler pour vous, faites votre travail dans une variété de catégories</P>
      <div class="row">
        <div class="col">
        <button type="button" id="btn3" class="btn">Rejoignez-nous</button>
        </div>
        <div class="col">
        <img id="flower" src="images/flower.png" alt="">
        </div>
      </div>
    </div>
    <div class="col">
      <img id="heroimage" src="images/imagecouver.png" alt="">
    </div>
  </div>
</div>

<div>
  <h3 id="approuv">Approuvé par</h3>
</div>
<div class="container">
  <div id="logosimg" class="row row-cols-5">
    <div class="col imgLogo"><img src="images/ocp.png" alt=""></div>
    <div id="img22" class="col imgLogo"><img src="images/ofppt.png" alt=""></div>
    <div id="img23" class="col imgLogo"><img src="images/solicode.png" alt=""></div>
    <div class="col imgLogo"><img src="images/techno.png" alt=""></div>
    <div id="fm6" class="col imgLogo"><img src="images/fm6.png" alt=""></div>
  </div>
</div>
</section>

<section>
  <link id="linkes" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <h2 class="workcopy" id="worktitle">Comment travaillons-nous</h2>
  <h3 class="workcopy"  id="worktitle2">Nous offrons une solution aux besoins de votre entreprise</h3>
  <div id="solutions" class="container">
    <div  class="row row-cols-3">
      <div class="col">
        <div class="row">
            <div  class="col divImg">
              <img class="imgIcon" src="images/workca.png" alt="">
            </div>
            <div class="col">
              <h2 class="chifres">100+</h2>
              <h3 class="lttres">TRAVAIL</h3>
            </div>
        </div>
      </div>
      <div class="col">
        <div class="row">
            <div class="col" class="divImg">
                <img class="imgIcon" src="images/peapl.png" alt="">
            </div>
            <div class="col">
              <h2 class="chifres">400+</h2>
              <h3 class="lttres">CLIENTS HEUREUX</h3>
            </div>
        </div>
      </div>
      <div class="col">
        <div class="row">
            <div class="col" class="divImg">
            <img class="imgIcon" src="images/supprt.png" alt="">
            </div>
            <div class="col">
              <h2 class="chifres">1K+</h2>
              <h3 class="lttres">TALENT</h3>
            </div>
        </div>
      </div>
      
      <div  class="col"></div>
      <div  class="col"></div>
    </div>
</div>

</section>
<section>
<div id="offerCont" class="container">
  <div class="row">
    <h4 id="offarTit"  class="text-left">Les services que nous offrons</h4>
    </div>
  <div class="row">
    <div class="col">
      <p id="offerPa">Trouvez des services qui correspondent parfaitement aux besoins de votre entreprise</p>
    </div>
    <div class="col d-flex flex-row-reverse">
    <button id="offerBut" type="button"  class="btn btn-3">Toute catégorie</button>
    </div>
  </div>
  </div>

  

  <div class="container px-4" id="srvConte">
      <div class="row gx-5">
        <div id="cols1" class="col gutters">
              <a href="#"><img class="colIcon" src="images/desiImg.png" alt=""> <span>Design</span>  </a> 

        </div>
        <div id="cols2" class="col gutters">
              <a href="#"><img class="colIcon" src="images/markImg.png" alt=""> <span>Digital Marketing </span>  </a> 

        </div>
        <div id="cols3" class="col gutters">
              <a href="#"><img class="colIcon3" src="images/codeImg.png" alt=""> <span>Programmation</span>  </a> 

        </div>
  
      </div>
      <div class="row gx-5">
        <div id="cols4" class="col gutters">
              <a href="#"><img class="colIcon" src="images/logoimg.png" alt=""><span>Logo Design </span>  </a> 

        </div>
        <div id="cols5" class="col gutters">
              <a href="#"><img class="colIcon" src="images/charte.png" alt=""> <span>Social media</span>  </a> 

        </div>
        <div id="cols6" class="col gutters">
              <a href="#"><img class="colIcon" src="images/courdImg.png" alt=""><span>UX/UI Design</span>  </a> 

        </div>
  
      </div>
    
  </div>   
</div>     

</section>

<section id="sectiwhy">
<div class="container" >
    <div class="row g-0">
      <div id="carte1" class="col-sm-6 col-md-8">
          <h3>Pourquoi les entreprises se tournent vers FLANCE</h3>
          <div class="row parts">
            <div class="col-1">
                 <i  class="fa-solid fa-star icnstr"></i>
            </div>
            <div  class="col-5 floats">
                 <h4>Preuve de qualité</h4>
                 <p>Vérifiez les échantillons de travail de n'importe quel pro, les avis des clients et la vérification d'identité.</p>
            </div>
          </div>
          <div class="row parts">
            <div class="col-1">
                <i class="fa-solid fa-hand-holding-heart icnstr"></i>
            </div>
            <div class="col-5 floats">
                 <h4>Enchères rapides</h4>
                 <p>Recevez rapidement des devis sans engagement de nos talentueux freelances. 80% des projets reçoivent une offre dans les 60 secondes.</p>
            </div>
          </div>
          <div class="row parts">
            <div class="col-1">
                 <i id="lsticon" class="fa-solid fa-lock icnstr"></i>
            </div>
            <div class="col-5 floats">
                 <h4>Sûr et sécurisé</h4>
                 <p>Concentrez-vous sur votre travail en sachant que nous aidons à protéger vos données et votre vie privée. Nous sommes là avec une assistance 24h/24 et 7j/7 si vous en avez besoin</p>
            </div>
          </div>
      </div>
      <div id="sndcart" class="col-6 col-md-4">
        <h3>FLANCE</h3>
        <h3>Où les pigistes se connectent avec le client</h3>
        <div class="row">
            <div class="col-1">
                
            </div>
            <div class="col-5">
                 <h4>100+</h4>
                 <h5>Creative freelancers</h5>
            </div>
          </div>
          <div class="row">
            <div class="col-1">
                 <i class="fa-regular fa-dollar-sign"></i>
            </div>
            <div class="col-5">
                 <h4>200+</h4>
                 <h5>Offer</h5>
            </div>
          </div>
          <div class="row">
            <div class="col-1">
                <i class="fa-light fa-user-group"></i>
            </div>
            <div class="col-5">
                 <h4>150+</h4>
                 <h5>Clients</h5>
            </div>
          </div>
        
      </div>
    </div>
    </div>
</section>