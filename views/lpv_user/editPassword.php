<div class="row m-0 mt-1 p-2">
    <div class="col-lg-1 col-md-1 col-sm-1 col-12 p-0 text-left">
        <a class="btn buttonColor2 px-3 shadow" href="http://laptitevadrouille/index.php?user=detail" title="Retour vers info utilisateur"><i class="fas fa-reply"></i></a>
    </div>
    <div class="col-lg-11 col-md-11 col-sm-11 col-12 text-left">
        <p class="textColor1 h3 mt-3">MODIFICATION MOT DE PASSE</p>
    </div>
</div>
<form class="p-4 card mx-4 mt-2" method="POST" action="" enctype="multipart/form-data">
    <div class="row justify-content-center">
        <div class="col p-1 text-center">
            <p class="h6 text-danger text-center"><i class="fas fa-exclamation-triangle"></i> Attention !<br />
                Après la validation, vous serez automatiquement déconnecté.</p>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <label class="font-weight-bold textColor1" for="currentPassword"><i class="fas fa-unlock-alt"></i> MOT
                DE PASSE ACTUEL</label>
            <input title="Saisissez le mot de passe actuel" type="password" class="form-control text-center borderInput textColor2" name="currentPassword" id="currentPassword" />
            <p class="error"><?= isset($arrayError['currentPassword']) ? $arrayError['currentPassword'] : '' ?></p>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <label class="font-weight-bold textColor1" for="newPassword"><i class="fas fa-unlock-alt"></i> NOUVEAU MOT DE PASSE</label>
            <input title="Saisissez le nouveau mot de passe" type="password" class="form-control text-center borderInput textColor2" name="newPassword" id="newPassword" />
            <p class="error"><?= isset($arrayError['newPassword']) ? $arrayError['newPassword'] : '' ?></p>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <label class="font-weight-bold textColor1" for="confirmNewPassword"><i class="fas fa-unlock-alt"></i> CONFIRMER NOUVEAU MOT DE PASSE</label>
            <input title="Comfirmez le nouveau mot de passe" type="password" class="form-control text-center borderInput textColor2" name="confirmNewPassword" id="confirmNewPassword" />
            <p class="error"><?= isset($arrayError['confirmNewPassword']) ? $arrayError['confirmNewPassword'] : '' ?></p>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-12">
            <button class="btn buttonColor2 py-2 shadow" role="button" type="submit" name="editUserPassword">MODIFIER</button>
            <p class="valid h5 my-3"><?= isset($_POST['editUserPassword']) && empty($arrayError) ? 'Mot de passe modifié avec succès !' : '' ?></p>
            <p class="error"><?= isset($e) ? 'Problème de connection au serveur, veuillez essayer à nouveau ultérieurement.' : "" ?></p>
        </div>
    </div>
</form>