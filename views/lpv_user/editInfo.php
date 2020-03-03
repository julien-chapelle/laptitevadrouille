<?php foreach ($detailEditUser as $row) { ?>
    <form class="p-4" method="POST" action="">
        <div class="row text-center m-0 mt-1 justify-content-center">
            <div class="col-12">
                <label class="font-weight-bold text-dark" for="pseudo"><i class="fas fa-user"></i>
                    NOUVEAU PRENOM OU PSEUDO</label>
                <input title="Renseignez le prénom ou le pseudo" placeholder="ex: Jean" type="text" class="form-control text-center" name="pseudo" id="pseudo" value="<?= !empty($arrayError) && isset($_POST['editUserInfo']) ? $_POST['pseudo'] : $row['pseudo'] ?>" />
                <p class="error"><?= isset($arrayError['pseudo']) ? $arrayError['pseudo'] : '' ?></p>
            </div>
        </div>
        <div class="row text-center m-0 mt-1 justify-content-center">
            <div class="col-12">
                <label class="font-weight-bold text-dark" for="email"><i class="fas fa-at"></i>
                    NOUVEL EMAIL</label>
                <input title="Renseignez l'adresse email" placeholder="ex: JeanDupont@wanadoo.fr" type="email" class="form-control text-center" name="mail" id="email" value="<?= !empty($arrayError) && isset($_POST['editUserInfo']) ? $_POST['mail'] : $row['mail'] ?>" />
                <p class="error"><?= isset($arrayError['mail']) ? $arrayError['mail'] : '' ?></p>
            </div>
        </div>
        <?php if ($_SESSION['id'] == $row['id']) { ?>
            <div class="row text-center m-0 mt-1 justify-content-center">
                <div class="col-12">
                    <label class="font-weight-bold text-dark" for="password"><i class="fas fa-unlock-alt"></i> MOT
                        DE PASSE</label>
                    <input title="Choisissez un mot de passe" type="password" class="form-control text-center" name="password" id="password" />
                    <p class="error"><?= isset($arrayError['password']) ? $arrayError['password'] : '' ?></p>
                </div>
            </div>
        <?php } else { ?>
            <div class="row text-center m-0 mt-1 justify-content-center">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="form-group">
                        <label class="font-weight-bold text-dark" for="changeStatusSelect"><i class="fas fa-crown"></i> CHANGEMENT DE STATUS</label>
                        <select class="form-control text-center" id="changeStatusSelect" name="status">
                            <option>Admin</option>
                            <option>User</option>
                        </select>
                    </div>
                </div>
            </div>
        <?php }; ?>
        <div class="row text-center m-0 mt-1 justify-content-center">
            <div class="col-12">
                <a class="btn btn-outline-success px-3 shadow" href="http://laptitevadrouille/index.php?user=detail" title="Retour vers info utilisateur"><i class="fas fa-reply"></i></a>
                <button class="btn btn-outline-success p-2 shadow" role="button" type="submit" name="editUserInfo">MODIFIER</button>
                <p class="valid h5 my-3"><?= isset($_POST['editUserInfo']) && empty($arrayError) ? 'Infos modifiées avec succès !' : '' ?></p>
                <p class="error"><?= isset($e) ? 'Problème de connection au serveur, veuillez essayer à nouveau ultérieurement.' : "" ?></p>
            </div>
        </div>
    </form>
<?php }; ?>