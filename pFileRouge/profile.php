<?php


include('header.php');
include('datacon.php');
include('navbar.php');

if (isset($_SESSION['freelancer'])) {
    $idFreelancer = $_SESSION['freelancer']['idFreelancer'];
    $data = mysqli_fetch_assoc(
        mysqli_query($conn, "select * from freelancers WHERE  idFreelancer = $idFreelancer")
    );


    ?>
    
    <?php
}
?>


<section id="ProflFrst">
    <div class="container " id="prfCont1">
        <div  class="row d-flex justify-content-center">
            <div class="col-4 " id="prfstRow">
                        <div class="d-flex justify-content-center">
                        <img class="d-flex justify-content-center" id="prleImge"  src="<?php echo $data['image']; ?>" alt="">
                            
                        </div>
                    
                    <h2 id="imgDiv" class="d-flex justify-content-center"><?php echo  $data['nom'] . " " . $data['prenom']; ?></h2>
                    <div class="d-flex justify-content-center">
                         <button id="btnEdite1" type="button" class="btn btn d-flex justify-content-center"><i class="fa-solid fa-pen-to-square"></i></button>
                    </div>
                    <hr>
                    <div class="row sousRow">
                        <div class="col">
                           <span class="">Date de naissance</span> 
                        </div>
                        <div class="col d-flex justify-content-end">
                        <span> <?php echo $data['date']; ?></span>
                        </div>
                    </div>
                    <div class="row sousRow">
                        <div class="col">
                        <span>Téléphone</span>  
                        </div>
                        <div class="col d-flex justify-content-end">
                        <span><?php echo $data['telnumber']; ?></span> 
                        </div>
                    </div>
                    <div class="row sousRow">
                        <div class="col">
                        <span> Email</span> 
                        </div>
                        <div class="col d-flex justify-content-end">
                        <span><?php echo $data['email']; ?></span>
                        </div>
                    </div>
            </div>
            <div class="col">
                    <div id="addProRow" class="row d-flex justify-content-end classPre">
                            <div class="col-8">
                                <p id="prepYou">Préparez vos projets pour réussir avec des pigistes experts et des outils avancés.</p>
                            </div>
                            <div class="col">
                            <button id="offerBut" type="button"  class="btn btn-3"><i class="fa-solid fa-plus"> </i>Ajouter un Projet</button>
                            </div>
                    </div>
                    <div id="addProRow" class="row">
                        <div class="row">
                               <div class="col-9">
                                <span> Description</span> 
                               </div>
                               <div  class="col editeBtn">
                                   <button id="btnEdite1" type="button" class="btn btn"><i class="fa-solid fa-pen-to-square "></i></button>
                               </div>
                        </div>
                        <div class="row ">
                               <p><?php echo $data['desription']; ?></p>
                        </div>
                           
                    </div>
                    <div id="addProRow" class="row">
                        <span id="compSpan" >Ajouter votre compétences</span>
                    <div class="row row-cols-4" id="compRow1">
                        
                            <?php
                    $i =0;
                    $sql = "SELECT nomCompetence FROM competences";
                    $query = mysqli_query($conn, $sql);

                    while($row = mysqli_fetch_array($query)){

                    echo '
                    <div class="form-check col" id="compCheck">
                            <input class="form-check-input" type="checkbox" name="flexCheckDefault" id="flexCheckDefault '.  $i++ .'">
                            <label class="form-check-label" for="flexCheckDefault">
                            ' .$row['nomCompetence'].'
                            </label>
                            </div> ';
                    }
                           
            ?>
                    </div>
                    <div class="container d-flex justify-content-end">
                    <button type="button" id="btnlogin" class="btn btn-outline compBtnAdd"><a id="uplnk" href="selection.php">Ajouter</a></button>
                    </div>
                   
                    </div>
            </div>

        </div>
        <div>
        <div id="rowleftCom" class="row ">
            <div class="col-4 " id="prscnRow">
                hello
            </div>
        </div>

    </div>
</section>