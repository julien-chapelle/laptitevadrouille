<form class="p-4" method="POST" action="">
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-12">
            <p class="h5 text-center">Suppression du compte utilisateur</p>
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
            <p class="h6 text-black text-center">Si vous souhaitez vraiment supprimer votre compte il vous suffit de saisir votre pseudo et mot de passe ci-dessous :</p>
            <!-- formulaire début-->
            <div class="row text-center m-0 mt-1 justify-content-center">
                <div class="col-12">
                    <label class="font-weight-bold text-dark" for="checkPseudo"><i class="fas fa-user"></i>
                        PRENOM OU PSEUDO</label>
                    <input title="Renseignez le prénom ou le pseudo" placeholder="ex: Jean" type="text" class="form-control text-center" name="checkPseudo" id="checkPseudo" value="<?= !empty($arrayError) && isset($_POST['checkPseudo']) ? $_POST['checkPseudo'] : $detailUser[0]['pseudo'] ?>" />
                    <p class="error"><?= isset($arrayError['checkPseudo']) ? $arrayError['checkPseudo'] : '' ?></p>
                </div>
            </div>
            <div class="row text-center m-0 mt-1 justify-content-center">
                <div class="col-12">
                    <label class="font-weight-bold text-dark" for="checkPassword"><i class="fas fa-unlock-alt"></i> MOT
                        DE PASSE</label>
                    <input title="Saisissez votre mot de passe" type="password" class="form-control text-center" name="checkPassword" id="checkPassword" />
                    <p class="error"><?= isset($arrayError['checkPassword']) ? $arrayError['checkPassword'] : '' ?></p>
                </div>
            </div>
        </div>
        <!-- formulaire fin-->
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-12">
            <a class="btn btn-outline-success px-3 shadow" href="http://laptitevadrouille/index.php?user=detail" title="Retour vers info utilisateur"><i class="fas fa-reply"></i></a>
            <button class="btn btn-outline-success p-2 shadow" role="button" type="submit" name="deleteUser">SUPPRIMER</button>
            <p class="valid h5 my-3"><?= isset($_POST['deleteUser']) && empty($arrayError) ? 'Compte supprimé avec succès !' : '' ?></p>
            <p class="error"><?= isset($e) ? 'Problème de connection au serveur, veuillez essayer à nouveau ultérieurement.' : '' ?></p>
        </div>
    </div>
</form>