<div class="container-fluid">
    <?php $exposition = reset($data); ?>
    <h2 class="text-center pt-5 pb-5 titre"><?php echo $exposition->getLibelle(); ?></h2>

</div>
<div class='row'>
    <div class='col-1'></div>

    <div class="col-lg-5 col-sm-10 p-5  form">

    <h3 class='text-center titre pt-2 pb-5'>Infos</h3>

        <form action="" method="" class="mb-2 p-3 form grid-3 d-flex justify-content-between bg-light">
            <label for="Nom" class="my-auto">Nom : </label>
            <p class="text-uppercase my-auto"><?php echo $exposition->getLibelle(); ?></p>
            <button type="button" class='btn sm-btn border'>Modifier</button>
        </form>

        <form action="" method="" class="mb-2 p-3 form grid-3 d-flex justify-content-between bg-light">
            <label for="date-debut" class="my-auto">Date de début : </label>
            <p class="my-auto"><?php echo $exposition->getDateDebut(); ?></p>
            <button type="button" class='btn sm-btn border'>Modifier</button>
        </form>

        <form action="" method="" class="mb-2 p-3 form grid-3 d-flex justify-content-between bg-light">
            <label for="Email" class="my-auto">Date de fin : </label>
            <p class="my-auto"><?php echo $exposition->getDateFin(); ?></p>
            <button type="button" class='btn sm-btn border'>Modifier</button>
        </form>

        <form action="" method="" class="mb-2 p-3 form grid-3 d-flex justify-content-between bg-light">
            <label for="Nom" class="my-auto">Statut : </label>
            <p class="my-auto"><?php echo $exposition->getStatut(); ?></p>
            <button type="button" class='btn sm-btn border'>Modifier</button>
        </form>

        <form action="" method="" class="mb-2 p-3 form grid-3 d-flex justify-content-between bg-light">
            <label for="Nom" class="my-auto">Thème : </label>
            <p class="my-auto"><?php echo $exposition->getTheme(); ?></p>
            <button type="button" class='btn sm-btn border'>Modifier</button>
        </form>
    </div>

    <div class="col-sm-1"></div>

    <div class="col-lg-4 col-sm-10 form p-5">

    

        <h3 class='text-center titre pt-2 pb-5'>Description</h3>

        <form action="">
            <textarea class="description p-4"><?php echo $exposition->getDescription(); ?></textarea>
            <button type="button" class='btn sm-btn border float-end mt-5 bg-light'>Enregistrer les modifications</button>
        </form>
    </div>

</div>
</div>