<!-- Delete walk view start -->
<div class="row m-0 mt-1 p-2">
    <div class="col-lg-1 col-md-1 col-sm-1 col-12 p-0 text-left">
        <!-- Return button - Return on user details -->
        <a class="btn buttonColor2 px-3 shadow" href="http://laptitevadrouille/index.php?user=detail" title="Retour vers info utilisateur"><i class="fas fa-reply"></i></a>
    </div>
    <!-- Title of page - If walk exist -> Display title / Else -> Message walk no exist -->
    <div class="col-lg-11 col-md-11 col-sm-11 col-12 text-left">
        <p class="textColor1 h3 mt-3"><?= !empty($deleteWalkDetail) ? 'SUPPRESSION SORTIE' : 'CETTE SORTIE N\'EXISTE PAS' ?></p>
    </div>
</div>
<!-- Display condition of content start - If walk exist -> Display content / Else Display stop logo -->
<?php if (!empty($deleteWalkDetail)) { ?>
    <!-- Form of delete start -->
    <form class="p-4 card mx-4 mt-2" method="POST" action="" enctype="multipart/form-data">
        <div class="row text-center m-0 mt-1 justify-content-center">
            <div class="col-12">
                <!-- Title of walk -->
                <p class="h3 text-center textColor1">Suppression de la sortie : <?= $deleteWalkDetail[0]['title'] ?></p>
                <!-- Status of walk -->
                <p class="h5 text-center textColor2">Status de visibilité : <?= ($deleteWalkDetail[0]['walkValidate']) == 'Validate' ? 'Validée' : 'Non validée' ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col p-1 text-center">
                <!-- Warning message -->
                <p class="h6 text-danger text-center"><i class="fas fa-exclamation-triangle"></i> Attention !<br />
                    Vous êtes sur le point de supprimer définitivement une sortie.<br />
                    Toutes les données la concernant seront supprimées !</p>
            </div>
        </div>
        <div class="row d-flex justify-content-center mx-auto">
            <div class="col p-1 text-center">
                <!-- Explanation message -->
                <p class="h6 textColor2 text-center">Si vous souhaitez vraiment supprimer cette sortie il vous suffit de saisir votre mot de passe administrateur ci-dessous :</p>
                <div class="row text-center m-0 mt-1 justify-content-center">
                    <div class="col-12">
                        <!-- Title admin pseudo -->
                        <p class="font-weight-bold textColor1"><i class="fas fa-user"></i>
                            PRENOM OU PSEUDO ADMINISTRATEUR</p>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4">
                        <!-- Admin pseudo -->
                        <p class="border border-white rounded textColor2"><?= $_SESSION['pseudo'] ?></p>
                    </div>
                </div>
                <div class="row text-center m-0 mt-1 justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <!-- Label password -->
                        <label class="font-weight-bold textColor1" for="checkPassword"><i class="fas fa-unlock-alt"></i> MOT
                            DE PASSE</label>
                        <!-- Input password -->
                        <input title="Saisissez votre mot de passe" type="password" class="form-control text-center borderInput" name="checkPassword" id="checkPassword" />
                        <!-- Error message if wrong password -->
                        <p class="error"><?= isset($arrayError['checkPassword']) ? $arrayError['checkPassword'] : '' ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center m-0 mt-1 justify-content-center">
            <div class="col-12">
                <!-- Return button on user details -->
                <a class="btn buttonColor2 py-2 shadow" href="http://laptitevadrouille/index.php?user=detail" title="Retour vers info utilisateur"><i class="fas fa-reply py-1"></i></a>
                <!-- Button of validate for delete a walk -->
                <button class="btn buttonColor2 py-2 shadow" role="button" type="submit" name="deleteWalk">SUPPRIMER</button>
                <!-- Validated message if delete success -->
                <p class="valid h5 my-3"><?= isset($_POST['deleteWalk']) && empty($arrayError) ? 'Sortie supprimée avec succès !' : '' ?></p>
                <!-- Error message if d'ont connected of server -->
                <p class="error"><?= isset($e) ? 'Problème de connection au serveur, veuillez essayer à nouveau ultérieurement.' : '' ?></p>
            </div>
        </div>
    </form>
    <!-- Form of delete end -->
<?php } else { ?>
    <div class="row m-0 mt-2 mx-4 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <img src="assets/img/stopLogo.png" title="Logo stop" alt="Logo stop" class="img-fluid m-2" />
        </div>
    </div>
<?php }; ?>
<!-- Display condition of content end -->
<!-- Delete walk view end -->