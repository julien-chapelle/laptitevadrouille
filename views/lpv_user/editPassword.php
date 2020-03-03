<form class="p-4" method="POST" action="">
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-12">
            <label class="font-weight-bold text-dark" for="currentPassword"><i class="fas fa-unlock-alt"></i> MOT
                DE PASSE ACTUEL</label>
            <input title="Saisissez le mot de passe actuel" type="password" class="form-control text-center borderInput" name="currentPassword" id="currentPassword" />
            <p class="error"><?= isset($arrayError['currentPassword']) ? $arrayError['currentPassword'] : '' ?></p>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-12">
            <label class="font-weight-bold text-dark" for="newPassword"><i class="fas fa-unlock-alt"></i> NOUVEAU MOT DE PASSE</label>
            <input title="Saisissez le nouveau mot de passe" type="password" class="form-control text-center borderInput" name="newPassword" id="newPassword" />
            <p class="error"><?= isset($arrayError['newPassword']) ? $arrayError['newPassword'] : '' ?></p>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-12">
        <a class="btn buttonColor2 py-2 shadow" href="http://laptitevadrouille/index.php?user=detail" title="Retour vers info utilisateur"><i class="fas fa-reply py-1"></i></a>
            <button class="btn buttonColor2 py-2 shadow" role="button" type="submit" name="editUserPassword">MODIFIER</button>
            <p class="valid h5 my-3"><?= isset($_POST['editUserPassword']) && empty($arrayError) ? 'Mot de passe modifié avec succès !' : '' ?></p>
            <p class="error"><?= isset($e) ? 'Problème de connection au serveur, veuillez essayer à nouveau ultérieurement.' : "" ?></p>
        </div>
    </div>
</form>