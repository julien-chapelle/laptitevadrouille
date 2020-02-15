<form class="p-4" method="POST" action="">
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-12">
            <label class="font-weight-bold text-dark" for="password"><i class="fas fa-unlock-alt"></i> MOT
                DE PASSE ACTUEL</label>
            <input title="Choisissez un mot de passe" type="password" class="form-control text-center" name="password" id="password" />
            <p class="error"><?= isset($arrayError['password']) ? $arrayError['password'] : '' ?></p>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-12">
            <label class="font-weight-bold text-dark" for="confirmPassword"><i class="fas fa-unlock-alt"></i> NOUVEAU MOT DE PASSE</label>
            <input title="Confirmez le mot de passe" type="password" class="form-control text-center" name="passwordConfirm" id="confirmPassword" />
            <p class="error"><?= isset($arrayError['passwordConfirm']) ? $arrayError['passwordConfirm'] : '' ?></p>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-12">
            <button class="btn btn-light btn-sm" role="button" type="submit" name="editUserPassword">MODIFIER</button>
            <p class="valid shadow h5"><?= isset($_POST['editUserInfo']) && empty($arrayError) ? 'Mot de passe modifié avec succès !' : '' ?></p>
            <p class="error"><?= isset($e) ? 'Problème de connection au serveur, veuillez essayer à nouveau ultérieurement.' : "" ?></p>
        </div>
    </div>
</form>