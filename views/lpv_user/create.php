<!-- formulaire début-->
<form class="p-4" method="POST" action="accountCreate.php">
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-12">
            <label class="font-weight-bold text-dark" for="pseudo"><i class="fas fa-user"></i>
                PRENOM OU PSEUDO</label>
            <input title="Renseignez le prénom ou le pseudo" placeholder="ex: Jean" type="text" class="form-control text-center" name="pseudo" id="pseudo" value="<?= count($arrayError) != 0 && isset($_POST['pseudo']) ? $_POST['pseudo'] : '' ?>" />
            <p class="error"><?= isset($arrayError['pseudo']) ? $arrayError['pseudo'] : '' ?></p>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-12">
            <label class="font-weight-bold text-dark" for="email"><i class="fas fa-at"></i>
                EMAIL</label>
            <input title="Renseignez l'adresse email" placeholder="ex: JeanDupont@wanadoo.fr" type="email" class="form-control text-center" name="mail" id="email" value="<?= count($arrayError) != 0 && isset($_POST['mail']) ? $_POST['mail'] : '' ?>" />
            <p class="error"><?= isset($arrayError['mail']) ? $arrayError['mail'] : '' ?></p>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-12">
            <label class="font-weight-bold text-dark" for="password"><i class="fas fa-unlock-alt"></i> MOT
                DE PASSE</label>
            <input title="Choisissez un mot de passe" type="password" class="form-control text-center" name="password" id="password" />
            <p class="error"><?= isset($arrayError['password']) ? $arrayError['password'] : '' ?></p>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-12">
            <label class="font-weight-bold text-dark" for="confirmPassword"><i class="fas fa-unlock-alt"></i> CONFIRMER MOT DE PASSE</label>
            <input title="Confirmez le mot de passe" type="password" class="form-control text-center" name="passwordConfirm" id="confirmPassword" />
            <p class="error"><?= isset($arrayError['passwordConfirm']) ? $arrayError['passwordConfirm'] : '' ?></p>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-12">
            <button class="btn btn-light btn-sm" role="button" type="submit" name="validate">S'INSCRIRE</button>
            <p class="error"><?= isset($e) ? 'Problème de connection au serveur, veuillez essayer à nouveau ultérieurement.' : "" ?></p>
        </div>
    </div>
</form>
</div>
<!-- formulaire fin-->