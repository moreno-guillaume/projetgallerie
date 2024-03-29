



<div class="container-fluid">
    <?php
    switch ($nav) {
        case "voirExpo":
            $exposition = reset($data);
            break;
        case "voirOeuvre":
            $oeuvre = reset($data);
            break;
    }; ?>

    <h2 class="text-center pt-5 pb-5 titre">
        <?php

        switch ($nav) {
            case "voirExpo":
                echo $exposition->getLibelle();
                break;
            case "voirOeuvre":
                echo $oeuvre->getLibelle();
                break;
        } ?>
    </h2>

</div>

<div class='row'>

    <div class='col-1'></div>

    <div class="col-lg-5 col-sm-10 p-5 form">

        <h3 class='text-center titre pt-2 pb-5'>Infos</h3>

        <form id="1" action="" method="post" class="mb-2 p-3 form grid-3 d-flex justify-content-between bg-light">
            <?php
            switch ($nav) {
                case "voirExpo":
                    echo "<label for='titre' class='my-auto'>titre de l'expo : </label>";
                    echo "<p class='text-uppercase my-auto'>" . $exposition->getLibelle() . "</p>";
                    // echo "<button type='button' class='btn sm-btn border'>Modifier</button>";
                    break;
                case "voirOeuvre":
                    echo "<label for='titre' class='my-auto'>titre de l'oeuvre : </label>";
                    echo "<p class='text-uppercase my-auto'>" . $oeuvre->getLibelle() . "</p>";
                    // echo "<button type='button' class='btn sm-btn border'>Modifier</button>";
                    break;
            }
            echo "<button type='button' onclick='showTextForm(this)' class='btn sm-btn border'>Modifier</button>";
            ?>
        </form>

        <form id="2" action="" method="" class="mb-2 p-3 form grid-3 d-flex justify-content-between bg-light">
            <?php
            switch ($nav) {
                case "voirExpo":
                    echo "<label for='date-debut' class='my-auto'>Date de début : </label>";
                    echo "<p class='my-auto'>" . $exposition->getDateDebut() . "</p>";
                    echo "<button type='button' class='btn sm-btn border' onclick='showDateForm(this)'>Modifier</button>";
                    break;
                case "voirOeuvre":
                    echo "<label for='date-creation' class='my-auto'>Date de création : </label>";
                    echo "<p class='my-auto'>" . $oeuvre->getAnneeCreation() . "</p>";
                    echo "<button type='button' class='btn sm-btn border' onclick='showDateForm(this)'>Modifier</button>";
                    break;
            }
            ?>
        </form>

        <form id="3" action="" method="" class="mb-2 p-3 form grid-3 d-flex justify-content-between bg-light">
            <?php
            switch ($nav) {
                case "voirExpo":
                    echo "<label for='date-fin' class='my-auto'>Date de fin : </label>";
                    echo "<p class='my-auto'>" . $exposition->getDateFin() . "</p>";
                    echo "<button type='button' class='btn sm-btn border' onclick='showDateForm(this)'>Modifier</button>";
                    break;
                case "voirOeuvre":
                    echo "<label for='type-oeuvre' class='my-auto'>Type d'oeuvre : </label>";
                    echo "<p class='my-auto'>" . $oeuvre->getType() . "</p>";
                    echo "<button type='button' class='btn sm-btn border' onclick='showDateForm(this)'>Modifier</button>";
                    break;
            }
            ?>

        </form>

        <form id='4' action="" method="" class="mb-2 p-3 form grid-3 d-flex justify-content-between bg-light">
            <?php
            switch ($nav) {
                case "voirExpo":
                    echo "<label for='statut' class='my-auto'>Statut : </label>";
                    echo "<p class='my-auto'>" . $exposition->getStatut() . "</p>";
                    echo "<button type='button' class='btn sm-btn border'>Modifier</button>";
                    break;
                case "voirOeuvre":
                    echo "<label for='statut' class='my-auto'>Statut : </label>";
                    echo "<p class='my-auto'>" . $oeuvre->getStatut() . "</p>";
                    echo "<button type='button' class='btn sm-btn border'>Modifier</button>";
                    break;
            } ?>
        </form>


        <form class="mb-2 p-3 form grid-3 d-flex justify-content-between bg-light" action="">
            <?php
            switch ($nav) {
                case "voirExpo":
                    echo "<form action='' method='' class='mb-2 p-3 form grid-3 d-flex justify-content-between bg-light'>";
                    echo "<label for='theme' class='my-auto'>Thème : </label>";
                    echo "<p class='my-auto'>" . $exposition->getTheme() . "</p>";
                    echo "<button type='button' class='btn sm-btn border'>Modifier</button>";
                    echo "</form>";
                    break;
            } ?>
        </form>
    </div>


    <div class="col-sm-1"></div>

    <div class="col-lg-4 col-sm-10 form p-5">
        <h3 class='text-center titre pt-2 pb-5'>image</h3>
        <div class="img-container bg-info">
            <form action="">
                <?php
                switch ($nav) {
                    case "voirExpo":
                        if ($exposition->getImage() === "") {
                            echo "<img src ='assets/img/expos/front/noimage.jpg'>";
                        } else {
                            echo "<img src=" . $exposition->getImage() . ">";
                        }
                        break;
                } ?>
        </div>
        <button type='button' class='btn sm-btn border bg-light mt-5 float-end' onclick="showFileForm(this)">Modifier</button>
        </form>
    </div>

    <div class="col-1"></div>

</div>



<div class='row'>

    <div class='col-1'></div>

    <div class="col-lg-5 mt-5 mb-5 col-sm-10 p-5 form">

        <h3 class='text-center titre pt-2 pb-5'>Description
        </h3>

        <form action="">
            <?php
            switch ($nav) {
                case "voirExpo":
                    echo "<textarea class='description p-4'>" . $exposition->getDescription() . "</textarea>";
                    echo "<div class='d-flex justify-content-between'>";
                    echo "<button type='button' class='btn sm-btn border mt-5 bg-light'>Enregistrer les modifications</button>";
                    echo "</div>";
                    break;
                case "voirOeuvre":
                    echo "<textarea class='description p-4'>" . $oeuvre->getDescription() . "</textarea>";
                    echo "<button type='button' class='btn sm-btn border float-end mt-5 bg-light'>Enregistrer les modifications</button>";
                    break;
            } ?>
        </form>

        <div class="dropdown">

            <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                traduire ce document
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <button class="dropdown-item" type="button" value="Anglais" onclick="showTraduction('en')">Anglais</button>
                <button class="dropdown-item" type="button" value="Espagnol" onclick="showTraduction('es')">Espagnol</button>
                <button class="dropdown-item" type="button" value="Allemand" onclick="showTraduction('all')">Allemand</button>
            </div>
        </div>

    </div>

    <div class="col-1"></div>

    <div id="traduction-container" class="col-lg-4 mt-5 mb-5 col-sm-10 p-5 form hidden">

        <h3 class='text-center titre pt-2 pb-5'><span>Traduction</span></h3>
        <form id='formulaire-traduction' action="" method="post">

            <div>
                <p>AJAX TESTER</p>
                <p>
                    <?php
                    if (isset($_POST['language'])) {
                        $language = $_POST['language'];
                        echo  $language;
                    } else {
                        echo "Nope";
                    }
                    ?>
                </p>
            </div>

            <textarea id="translation" class='description p-4'>
    <?php



    switch ($nav) {
        case "voirExpo":

            switch ($language) {


                case "all":
                    echo $exposition->getLangueAllemand();
                    break;

                case "es":
                    echo $exposition->getLangueEspagnol();
                    break;

                case "en":
                    echo $exposition->getLangueAnglais();
            }

            break;


        case "voirOeuvre":
            echo $oeuvre->getDescription();
            break;
    } ?>

    </textarea>
            <button type='submit' class='btn sm-btn border bg-light mt-5 float-end' name="traduction" id="envoyer-traduction">Enregistrer la traduction</button>
        </form>
    </div>



    <?php if ($nav === 'voirExpo') : ?>

</div>
<div class='row'>
    <div class="col-lg-1"></div>

    <div class="col-lg-5 p-5 form position-relative">
        <h3 class='text-center titre pt-2 pb-5'>Plan</h3>

        <div class="img-container position-relative ">
            <form action="" method="post">
                <button class='bouton-fullscreen position-absolute'>FULLSCRREN BTN</button>
                <?php echo "<img src=" . $exposition->getPlan() . ">" ?>;
        </div>
        <button type='submit' name="changer-plan" class='btn sm-btn border bg-light mt-5 float-end'>Modifier</button>
        </form>
    </div>

    <div class='col-1'></div>

    <div class="col-lg-4 p-5 form">
        <h3 class='text-center titre pt-2 pb-5'>Oeuvres</h3>

        <div class="img-container">
            <form action="" method="post">
                <?php echo "<img src=" . $exposition->getPlan() . ">" ?>;
        </div>
        <button type='submit' name="changer-plan" class='btn sm-btn border bg-light mt-5 float-end'>Modifier</button>
        </form>
    </div>


</div>
</div>

<?php endif; ?>