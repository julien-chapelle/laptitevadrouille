<form class="p-4" method="POST" action="" id="createUserForm" enctype="multipart/form-data">
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <label class="font-weight-bold text-dark" for="pseudo"><i class="fas fa-user"></i>
                PRENOM OU PSEUDO</label>
            <input title="Renseignez le prénom ou le pseudo" placeholder="ex: Jean" type="text" class="form-control text-center borderInput" name="pseudo" id="pseudo" value="<?= !empty($arrayError) && isset($_POST['addUser']) ? $_POST['pseudo'] : '' ?>" />
            <p class="error"><?= isset($arrayError['pseudo']) ? $arrayError['pseudo'] : '' ?></p>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <label class="font-weight-bold text-dark" for="email"><i class="fas fa-at"></i>
                EMAIL</label>
            <input title="Renseignez l'adresse email" placeholder="ex: JeanDupont@wanadoo.fr" type="email" class="form-control text-center borderInput" name="mail" id="email" value="<?= !empty($arrayError) && isset($_POST['addUser']) ? $_POST['mail'] : '' ?>" />
            <p class="error"><?= isset($arrayError['mail']) ? $arrayError['mail'] : '' ?></p>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <label class="font-weight-bold text-dark" for="password"><i class="fas fa-unlock-alt"></i> MOT
                DE PASSE</label>
            <input title="Choisissez un mot de passe" type="password" class="form-control text-center borderInput" name="password" id="password" />
            <p class="error"><?= isset($arrayError['password']) ? $arrayError['password'] : '' ?></p>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <label class="font-weight-bold text-dark" for="confirmPassword"><i class="fas fa-unlock-alt"></i> CONFIRMER MOT DE PASSE</label>
            <input title="Confirmez le mot de passe" type="password" class="form-control text-center borderInput" name="passwordConfirm" id="confirmPassword" />
            <p class="error"><?= isset($arrayError['passwordConfirm']) ? $arrayError['passwordConfirm'] : '' ?></p>
        </div>
    </div>
    <!-- ACCORD AGREEMENT -->
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" value="clientApprouve" name="clientApprouve" id="agreementClient">
                <label class="custom-control-label" for="agreementClient">
                    <small>
                        En créant un compte, vous acceptez les conditions d'utilisation. Pour plus d'informations sur les pratiques de confidentialité de La P'tite Vadrouille, consultez la déclaration de confidentialité de La P'tite Vadrouille. Nous vous enverrons occasionnellement des e-mails liés au compte.
                    </small>
                </label>
                <p class="error"><?= isset($arrayError['clientApprouve']) ? $arrayError['clientApprouve'] : '' ?></p>
            </div>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12t">
            <a class="btn buttonColor2 py-2 shadow" href="http://laptitevadrouille/" title="Retour vers accueil"><i class="fas fa-reply py-1"></i></a>
            <button class="btn buttonColor2 py-2 shadow g-recaptcha" type="submit" name="addUser" data-sitekey="6Lel5d4UAAAAABPLDDUn5xgfmbgs0lTEqbBKQTgD" data-callback="onSubmit">S'INSCRIRE</button>
            <p class="valid h5"><?= isset($_POST['addUser']) && empty($arrayError) ? 'Compte créé avec succès !' : '' ?></p>
            <p class="error"><?= isset($e) ? 'Problème de connection au serveur, veuillez essayer à nouveau ultérieurement.' : '' ?></p>
        </div>
    </div>
</form>