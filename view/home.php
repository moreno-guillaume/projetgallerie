
 <?php if (!isset($_SESSION["user"]["IdCollab"])) :?>

     <div class="container-fluid">
         <div class="row mt-3">

             <!-- <div class="col-1"></div> -->
            <div class="col-1"></div>
             <div class="col-4 mt-5 pt-5">

                 <div class="titre">
                     <h3 class="text-center"><?php echo $titre; ?></h3>

                     <?php if ($nav == "resetPassword") : ?>
                         <p class="text-center">Recevez par mail un lien de réinitialisation de votre mot de passe.</p>
                     <?php endif; ?>

                     <p class="bg-warning text-center"><?php 
                     if (isset($_POST['connexion'])){
                     if (isset($err_data['err_email'])) {
                    echo $err_data['err_email']; 
                     }elseif(isset($err_data['err_password'])){                                       
                        echo $err_data['err_password'];}
                     }; ?>                                           
                     </p>                                       
                                                        
                                                        
                 </div>
                 <form class="" action="" method="post" <?php if ($nav == "index") : ?> id="connexion-form" <?php
                                                                                                elseif ($nav == "resetPassword") : ?> id="reset-password-form" <?php endif ?> class="position-relative">

                     <div class=" mt-5 d-flex justify-content-between p-1">
                         <label for="email">Email utilisateur : </label>
                         <input type="text" name="email" id="email" class="text-center rounded border bg-transparent" placeholder="Email utilisateur">
                     </div>

                     <?php if ($nav == "index") : ?>
                         <div class=" mt-3 d-flex p-1 justify-content-between">
                            <label for="password">Mot de passe : </label>
                             <input type="text" name="password" id="password" class="text-center rounded border bg-transparent" placeholder="Mot de passe">
                         </div>
                     <?php endif; ?>

                     <button type="submit" class="bouton-valider text-center btn mt-4" <?php if ($nav == "index") : ?>id="valider-connexion" name="connexion" <?php elseif ($nav == "reset") : ?> id="valider-reset" name="reset-password" <?php endif; ?>>
                     Se connecter</button>


                     <?php if ($nav == "index") : ?>
                         <a href="reset" class="resetPass float-end mt-5"> mot de passe oublié ?</a>
                     <?php elseif ($nav == "reset") : ?>
                         <a href="home" class="resetPass float-end mt-5">Retour à l'écran de connexion</a>

                     <?php endif; ?>
                 </form>
             </div>

             <div class="col-1"></div>


                 <div class="col-4 mt-5 pt-5">

                     
                 </div>

             </div>

         </div>
     </div>

 <?php endif; ?>