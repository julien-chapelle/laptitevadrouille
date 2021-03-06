<div class="row m-0 mt-1 p-2">
    <div class="col-lg-1 col-md-1 col-sm-1 col-12 p-0 text-left">
        <a class="btn buttonColor2 px-3 shadow" href="http://laptitevadrouille/index.php?user=detail" title="Retour vers détails utilisateur"><i class="fas fa-reply"></i></a>
    </div>
    <div class="col-lg-11 col-md-11 col-sm-11 col-12 text-left">
        <p class="textColor1 h3 mt-3"><?= !empty($detailDeleteUser) ? 'SUPPRESSION DU COMPTE' : 'CET UTILISATEUR N\'EXISTE PAS' ?></p>
    </div>
</div>
<?php if (!empty($detailDeleteUser)) { ?>
    <form class="p-4 card mx-4 mt-3" method="POST" action="" enctype="multipart/form-data">
        <div class="row text-center m-0 mt-1 justify-content-center">
            <div class="col-12">
                <p class="h3 text-center textColor1">Suppression du compte utilisateur</p>
            </div>
        </div>
        <div class="row">
            <div class="col p-1 text-center">
                <p class="h6 text-danger text-center"><i class="fas fa-exclamation-triangle"></i> Attention !<br />
                    Vous êtes sur le point de supprimer définitivement votre compte.<br />
                    Toutes les données vous concernant seront supprimées !</p>
            </div>
        </div>
        <div class="row d-flex justify-content-center mx-auto">
            <div class="col p-1 text-center">
                <p class="h6 textColor2 text-center">Si vous souhaitez vraiment supprimer votre compte il vous suffit de saisir votre pseudo et mot de passe ci-dessous :</p>
                <!-- formulaire début-->
                <div class="row text-center m-0 mt-1 justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <label class="font-weight-bold textColor1" for="checkPseudo"><i class="fas fa-user"></i>
                            PRENOM OU PSEUDO</label>
                        <input title="Renseignez le prénom ou le pseudo" placeholder="ex: Jean" type="text" class="form-control text-center borderInput textColor2" name="checkPseudo" id="checkPseudo" value="<?= !empty($arrayError) && isset($_POST['checkPseudo']) ? $_POST['checkPseudo'] : $detailDeleteUser[0]['pseudo'] ?>" />
                        <p class="error"><?= isset($arrayError['checkPseudo']) ? $arrayError['checkPseudo'] : '' ?></p>
                    </div>
                </div>
                <div class="row text-center m-0 mt-1 justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <label class="font-weight-bold textColor1" for="checkPassword"><i class="fas fa-unlock-alt"></i> MOT
                            DE PASSE</label>
                        <input title="Saisissez votre mot de passe" type="password" class="form-control text-center borderInput textColor2" name="checkPassword" id="checkPassword" />
                        <p class="error"><?= isset($arrayError['checkPassword']) ? $arrayError['checkPassword'] : '' ?></p>
                    </div>
                </div>
            </div>
            <!-- formulaire fin-->
        </div>
        <div class="row text-center m-0 mt-1 justify-content-center">
            <div class="col-12">
                <button class="btn buttonColor2 py-2 shadow" role="button" type="submit" name="deleteUser">SUPPRIMER</button>
                <p class="valid h5 my-3"><?= isset($_POST['deleteUser']) && empty($arrayError) ? 'Compte supprimé avec succès !' : '' ?></p>
                <p class="error"><?= isset($e) ? 'Problème de connection au serveur, veuillez essayer à nouveau ultérieurement.' : '' ?></p>
            </div>
        </div>
    </form>
<?php } else { ?>
    <div class="row m-0 mt-2 mx-4 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <img src="assets/img/stopLogo.png" title="Logo stop" alt="Logo stop" class="img-fluid m-2" />
        </div>
    </div>
<?php }; ?>