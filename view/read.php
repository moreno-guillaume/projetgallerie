<div class="container-fluid">

    <div class="row">
        <div class="col-1"></div>

        <div class='col-10'>
            <h2 class="text-center mt-5 pt-5 pb-5 titre"><?php echo $titre; ?></h2>

            <table id="matable" class="">
                <thead class="">
                    <tr>

                        <?php
                        switch ($nav) {
                            case "listeExpos":
                                echo "<th>Nom de l'exposition</th>
                                    <th>Statut</th>
                                    <th>Thème</th>
                                    <th>Voir / Modifier</th>
                                    <th>Supprimer l'expo</th>";
                                break;

                            case "listeOeuvres":
                                echo "<th>Nom de l'oeuvre</th>
                                        <th>Année de création</th>
                                        <th>Type d'oeuvre</th>
                                        <th>Présente dans l'exposition : </th>
                                        <th>Statut dans l'exposition : </th>
                                        <th>Voir / Modifier</th>
                                        <th>Supprimer l'oeuvre</th>";
                                break;
                        }; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($nav == "listeExpos") {

                        foreach ($data as $exposition) : ?>
                            <tr>
                                <td><?php echo $exposition->getLibelle(); ?></td>
                                <td><?php echo $exposition->getStatut(); ?></td>
                                <td><?php echo $exposition->getTheme(); ?></td>
                                <td><a href="voirExpo?id=<?php echo $exposition->getId(); ?>">Voir / modifier</a></td>
                                <td><a href="#">Supprimer</a></td>
                            </tr>
                    <?php endforeach;
                    }elseif($nav=="listeOeuvres"){

                        foreach ($data as $oeuvre) : ?>
                            <tr>
                                <td><?php echo $oeuvre->getLibelle(); ?></td>
                                <td class="text-center"><?php echo $oeuvre->getAnneeCreation(); ?></td>
                                <td class="text-center"><?php echo $oeuvre->getType(); ?></td>
                                <td class="text-center"><?php echo $oeuvre->getExpo(); ?></td>
                                <td class="text-center"><?php echo $oeuvre->getStatut(); ?></td>
                                <td><a href="voirOeuvre?id=<?php echo $oeuvre->getId(); ?>">Voir / modifier</a></td>
                                <td><a href="#">Supprimer</a></td>
                            </tr>
                    <?php endforeach;
                    }; ?>




        </div>
    </div>
</div>