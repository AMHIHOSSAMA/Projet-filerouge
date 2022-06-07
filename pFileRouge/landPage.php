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

  

  <div class="container" id="srvConte">
      <div class="row gx-5">
        <div class="col gutters">
          <div class="row">
            <div class="col ">
              <a href="#"><img class="colIcon" src="images/desiImg.png" alt=""></a> 
            </div>  
            <div class="col ">
              <h4>Design </h4>
            </div>  
          </div>
        </div>


        <div class="col gutters">
        <div class="row">
            <div class="col ">
             <a href="#"><img class="colIcon" src="images/markImg.png" alt=""></a> 
            </div>  
            <div class="col ">
                <h4>Digital Marketing </h4>
            </div>  
          </div>
        </div>
        <div class="col gutters">
           <div class="row">
            <div class="col ">
             <a href=""><img class="colIcon3" src="images/codeImg.png" alt=""></a> 
            </div>  
            <div class="col ">
            <h4>Programmation </h4>
            </div>  
          </div>
        
        </div>
      </div>

      <div class="row gx-5">
        <div class="col gutters">
          <div class="row">
            <div class="col ">
              <a href="#"><img class="colIcon" src="images/logoimg.png" alt=""></a> 
            </div>  
            <div class="col ">
              <h4>Logo Design </h4>
            </div>  
          </div>
        </div>


        <div class="col gutters">
        <div class="row">
            <div class="col ">
             <a href="#"><img class="colIcon" src="images/charte.png" alt=""></a> 
            </div>  
            <div class="col ">
                <h4>Social media marketing </h4>
            </div>  
          </div>
        </div>
        <div class="col gutters">
           <div class="row">
            <div class="col ">
             <a href=""><img class="colIcon" src="images/courdImg.png" alt=""></a> 
            </div>  
            <div class="col ">
            <h4>UX UI Design</h4>
            </div>  
          </div>
        
        </div>
      </div>
  </div>   
      
      



</section>