<div class="row m-0 mt-1 p-2">
    <div class="col-lg-1 col-md-1 col-sm-1 col-12 p-0 text-left">
        <a class="btn buttonColor2 px-3 shadow" href="http://laptitevadrouille/" title="Retour vers accueil"><i class="fas fa-reply"></i></a>
    </div>
    <div class="col-lg-11 col-md-11 col-sm-11 col-12 text-left">
        <p class="textColor1 h3 mt-3">INSCRIPTION</p>
    </div>
</div>
<form class="p-4 card mx-4 mt-2" method="POST" action="" id="createUserForm" enctype="multipart/form-data">
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <label class="font-weight-bold textColor1" for="pseudo"><i class="fas fa-user"></i>
                PRENOM OU PSEUDO</label>
            <input title="Renseignez le prénom ou le pseudo" placeholder="ex: Jean" type="text" class="form-control text-center borderInput textColor2" name="pseudo" id="pseudo" value="<?= !empty($arrayError) && isset($_POST["g-recaptcha-response"]) ? $_POST['pseudo'] : '' ?>" />
            <p class="error"><?= isset($arrayError['pseudo']) ? $arrayError['pseudo'] : '' ?></p>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <label class="font-weight-bold textColor1" for="email"><i class="fas fa-at"></i>
                EMAIL</label>
            <input title="Renseignez l'adresse email" placeholder="ex: JeanDupont@wanadoo.fr" type="email" class="form-control text-center borderInput textColor2" name="mail" id="email" value="<?= !empty($arrayError) && isset($_POST["g-recaptcha-response"]) ? $_POST['mail'] : '' ?>" />
            <p class="error"><?= isset($arrayError['mail']) ? $arrayError['mail'] : '' ?></p>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <label class="font-weight-bold textColor1" for="password"><i class="fas fa-unlock-alt"></i> MOT
                DE PASSE</label>
            <input title="Choisissez un mot de passe" type="password" class="form-control text-center borderInput textColor2" name="password" id="password" />
            <p class="error"><?= isset($arrayError['password']) ? $arrayError['password'] : '' ?></p>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <label class="font-weight-bold textColor1" for="confirmPassword"><i class="fas fa-unlock-alt"></i> CONFIRMER MOT DE PASSE</label>
            <input title="Confirmez le mot de passe" type="password" class="form-control text-center borderInput textColor2" name="passwordConfirm" id="confirmPassword" />
            <p class="error"><?= isset($arrayError['passwordConfirm']) ? $arrayError['passwordConfirm'] : '' ?></p>
        </div>
    </div>
    <!-- ACCORD AGREEMENT -->
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" value="clientApprouve" name="clientApprouve" id="agreementClient">
                <label class="custom-control-label" for="agreementClient">
                    <small class="textColor1">
                        En créant un compte, vous acceptez les conditions d'utilisation. Pour plus d'informations sur les pratiques de confidentialité de La P'tite Vadrouille, consultez la déclaration de confidentialité de La P'tite Vadrouille. Nous vous enverrons occasionnellement des e-mails liés au compte.
                    </small>
                </label>
                <p class="error"><?= isset($arrayError['clientApprouve']) ? $arrayError['clientApprouve'] : '' ?></p>
            </div>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <input class="btn buttonColor2 py-2 shadow g-recaptcha" type="submit" data-sitekey="6LcJ9t4UAAAAAMDb7U3SsZ5-zT4BASoX1jOwZiPo" data-callback="onSubmit" value="S'INSCRIRE" />
            <p class="error"><?= isset($arrayError['reCaptcha']) ? $arrayError['reCaptcha'] : '' ?></p>
            <p class="valid"><?= isset($arrayValid['reCaptcha']) ? $arrayValid['reCaptcha'] : '' ?></p>
            <p class="valid h5"><?= isset($_POST['g-recaptcha-response']) && empty($arrayError) ? 'Compte créé avec succès !' : '' ?></p>
            <p class="error h5"><?= isset($arrayError['verifyIfUserMailExist']) ? $arrayError['verifyIfUserMailExist'] : '' ?></p>
            <p class="error"><?= isset($e) ? 'Problème de connection au serveur, veuillez essayer à nouveau ultérieurement.' : '' ?></p>
        </div>
    </div>
</form>