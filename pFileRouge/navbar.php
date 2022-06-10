<?php
 include('header.php');

 ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<nav id="navbar2" class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img id="logo" src="images/logo.png" alt="logo flance "></a>
    <button id="hamburger" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active nav-item" aria-current="page" href="homePage.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active nav-item" href="allProjects.php">Projets</a>
        </li>
        
        <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Services</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item lilink" href="marketingPage.php">Digital Marketing</a></li>
        <li><a class="dropdown-item lilink" href="designPage.php">Design</a></li>
        <!-- <li><hr class="dropdown-divider"></li> -->
        <li><a class="dropdown-item lilink" href="programPage.php">Programmation</a></li>
      </ul>
    </li>
    
        <li class="nav-item">
        <a class="nav-link active nav-item" aria-current="page" href="#">À propos</a>
        </li>
      </ul>
    
      <form class="d-flex" id="srchForm">
            <input class="form-control me-2"  type="search" placeholder="" aria-label="Search">
            <button class="btn btn-outline" type="submit"> <i class="fas fa-search"></i></button>
     </form>
     <a href="#" id="LNKImg"><img id="prfImg" src="https://demo2.joomshaper.com/2019/folium/images/2019/11/01/dev-portrait-2x.png" alt=""></a>
    </div>
  </div>
</nav>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>