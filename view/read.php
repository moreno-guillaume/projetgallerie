<div class="container-fluid">

    <div class="row">
        <div class="col-1"></div>

        <div class='col-10'>
            <h3 class="text-center mt-5"><?php echo $titre; ?></h3>

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
                                    <th>Supprimer l'oeuvre</th>";
                                break;
                        }; ?>
                    </tr>
                </thead>
                <tbody>
                        <?php if($nav=="listeExpos"){

                            foreach ($data as $exposition) : ?>
                            <tr>
                                <td><?php echo $exposition->getLibelle(); ?></td>
                                <td><?php echo $exposition->getStatut(); ?></td>
                                <td><?php echo $exposition->getTheme(); ?></td>
                                <td><a href="voir-collab.php?id=<?php echo $exposition->getId(); ?>">Voir / modifier</a></td>
                                <td><a href="#">Supprimer</a></td>
                            </tr>
                        <?php endforeach; };?>
        </div>
    </div>
</div>