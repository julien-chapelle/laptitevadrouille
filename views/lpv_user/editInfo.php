<div class="row m-0 mt-1 p-2">
    <div class="col-lg-1 col-md-1 col-sm-1 col-12 p-0 text-left">
        <a class="btn buttonColor2 px-3 shadow" href="http://laptitevadrouille/index.php?user=detail" title="Retour vers info utilisateur"><i class="fas fa-reply"></i></a>
    </div>
    <div class="col-lg-11 col-md-11 col-sm-11 col-12 text-left">
        <p class="textColor1 h3 mt-3"><?= !empty($detailEditUser) ? 'MODIFICATION INFORMATIONS' : 'CET UTILISATEUR N\'EXISTE PAS' ?></p>
    </div>
</div>
<?php if (!empty($detailEditUser)) { ?>
    <?php foreach ($detailEditUser as $row) { ?>
        <form class="p-4 card mx-4 mt-2" method="POST" action="" enctype="multipart/form-data">
            <div class="row text-center m-0 mt-1 justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <label class="font-weight-bold textColor1" for="pseudo"><i class="fas fa-user"></i>
                        NOUVEAU PRENOM OU PSEUDO</label>
                    <input title="Renseignez le prénom ou le pseudo" placeholder="ex: Jean" type="text" class="form-control text-center borderInput textColor2" name="pseudo" id="pseudo" value="<?= !empty($arrayError) && isset($_POST['editUserInfo']) ? $_POST['pseudo'] : $row['pseudo'] ?>" />
                    <p class="error"><?= isset($arrayError['pseudo']) ? $arrayError['pseudo'] : '' ?></p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <label class="font-weight-bold textColor1" for="email"><i class="fas fa-at"></i>
                        NOUVEL EMAIL</label>
                    <input title="Renseignez l'adresse email" placeholder="ex: JeanDupont@wanadoo.fr" type="email" class="form-control text-center borderInput textColor2" name="mail" id="email" value="<?= !empty($arrayError) && isset($_POST['editUserInfo']) ? $_POST['mail'] : $row['mail'] ?>" />
                    <p class="error"><?= isset($arrayError['mail']) ? $arrayError['mail'] : '' ?></p>
                </div>
            </div>
            <?php if ($_SESSION['status'] == 'admin' && $detailEditUser[0]['id'] != $_SESSION['id']) { ?>
                <div class="row text-center m-0 mt-1 justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label class="font-weight-bold textColor1" for="changeStatusSelect"><i class="fas fa-crown"></i> CHANGEMENT DE STATUS</label>
                            <select class="form-control text-center borderInput textColor2" id="changeStatusSelect" name="status">
                                <option <?= $row['status'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                                <option <?= $row['status'] == 'user' ? 'selected' : '' ?>>User</option>
                            </select>
                        </div>
                    </div>
                </div>
            <?php }; ?>
            <div class="row text-center m-0 mt-1 justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <label class="font-weight-bold textColor1" for="password"><i class="fas fa-unlock-alt"></i> MOT
                        DE PASSE</label>
                    <input title="Choisissez un mot de passe" type="password" class="form-control text-center borderInput textColor2" name="password" id="password" />
                    <p class="error"><?= isset($arrayError['password']) ? $arrayError['password'] : '' ?></p>
                </div>
            </div>
            <div class="row text-center m-0 mt-1 justify-content-center">
                <div class="col-12">
                    <button class="btn buttonColor2 py-2 shadow" role="button" type="submit" name="editUserInfo">MODIFIER</button>
                    <p class="valid h5 my-3"><?= isset($_POST['editUserInfo']) && empty($arrayError) ? 'Infos modifiées avec succès !' : '' ?></p>
                    <p class="error"><?= isset($e) ? 'Problème de connection au serveur, veuillez essayer à nouveau ultérieurement.' : "" ?></p>
                </div>
            </div>
        </form>
    <?php };
} else { ?>
    <div class="row m-0 mt-2 mx-4 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <img src="assets/img/stopLogo.png" title="Logo stop" alt="Logo stop" class="img-fluid m-2" />
        </div>
    </div>
<?php }; ?>