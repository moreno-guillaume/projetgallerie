
<div class="container">
    <div class="row mt-3">

        <div class="col-4"></div>

        <div class="col-4">

            <div class="titre">
                <h3 class="text-center"><?php echo $titre; ?></h3>

                <?php if ($nav == "resetPassword") : ?>
                    <p class="text-center">Recevez par mail un lien de réinitialisation de votre mot de passe.</p>
                <?php endif; ?>

                <p class="bg-warning text-center"><?php if (isset($err_email)) {
                                                        echo $err_email;
                                                    } elseif (isset($err_password)) {
                                                        echo $err_password;
     
     }; ?></p>
            </div>
            <form action="" method="post" 
            <?php if ($nav == "index") :?> id="connexion-form" <?php 
            elseif ($nav == "resetPassword") :?> id="reset-password-form" 
            <?php endif ?> 
            class="position-relative">

                <div class="form mt-5 d-flex flex-column p-1 text-center justify-content-center align-items-center">
                    <input type="text" name="email" id="email" class="text-center rounded border bg-transparent" placeholder="Email utilisateur">
                </div>

                <?php if ($nav == "index") : ?>
                    <div class="form mt-3 d-flex flex-column p-1 justify-content-center align-items-center">
                        <input type="text" name="password" id="password" class="text-center rounded border bg-transparent" placeholder="Mot de passe">
                    </div>
                <?php endif; ?>

                <button type="submit" class="bouton-valider"  <?php if($nav =="index"):?>id="valider-connexion" name="connexion"<?php elseif($nav=="reset"):?> id="valider-reset" name="reset-password"<?php endif ;?>">
                <img src="assets/img/icons/valider.svg" alt="v" width="100%" height="100%">
                </button>
              

                <?php if ($nav == "index") : ?>
                    <a href="reset" class="resetPass float-end mt-5"> mot de passe oublié ?</a>
                <?php elseif ($nav == "reset") : ?>
                    <a href="home" class="resetPass float-end mt-5">Retour à l'écran de connexion</a>
                
                <?php endif; ?>
                </form>
        </div>
    </div>
</div>