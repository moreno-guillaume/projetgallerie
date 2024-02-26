<?php if (isset($_SESSION["user"]["IdCollab"])) : ?>
        <nav>
                <ul>
                        <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Expositions
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <a href="#" class="dropdown-item" type="button">Liste des Expos</a>
                                        <a href="#" class="dropdown-item" type="button">Creer une nouvelle Expo</a>
                                </div>
                        </div>
                        <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Oeuvres
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <a href="#" class="dropdown-item" type="button">Liste des oeuvres</a>
                                        <a href="#" class="dropdown-item" type="button">Enregistrer une nouvelle oeuvre</a>
                                </div>
                        </div>

                        <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Artistes
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <a href="#" class="dropdown-item" type="button">Liste des artistes</a>
                                        <a href="#" class="dropdown-item" type="button">Enregistrer un nouvel artiste</a>
                                </div>
                        </div>

                        <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Traductions
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <a href="#" class="dropdown-item" type="button">Liste des traductions</a>
                                        <a href="#" class="dropdown-item" type="button">Enregistrer un nouvel artiste</a>
                                </div>
                        </div>

                        
                        <?php if((isset($_SESSION["user"]["IdPoste"])&&($_SESSION["user"]["IdPoste"]=1))):?>
                        <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Collaborateurs
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <a href="#" class="dropdown-item" type="button">Liste des collaborateurs</a>
                                        <a href="#" class="dropdown-item" type="button">Enregistrer un nouveau collaborateur</a>
                                </div>
                        </div>
                        <?php endif ;?>

                        <li class="dropdown"><a href="#" class="dropdown">Calendrier</a></li>
                        
                </ul>

                <ul id="second-list">
                        <li><a href="#">Parametres</a></li>
                        <li><a href="deconnexion.php">Deconnexion</a></li>
                </ul>
        </nav>
<?php endif; ?>