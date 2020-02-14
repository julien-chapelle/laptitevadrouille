<div class="modal fade right" id="signIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-full-height modal-right" role="document">
        <div class="modal-content bgBody text-black">
            <div class="modal-header border-dark bgHeader text-center text-dark">
                <p class="modal-title w-100 font-weight-bold pl-3 h4"><?= isset($_SESSION) && count($_SESSION) != 0 ? 'Connecté' : 'Connexion' ?></p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php if (isset($_SESSION) && count($_SESSION) != 0) { ?>
                <form method="POST" action="user.php">
                    <div class="modal-body mx-3">
                        <div class="mb-5 text-center">
                            <p class="font-weight-bold text-center"><?= 'Bonjour ' . $_SESSION['pseudo'] . ' !' ?></p>
                            <img src="<?= file_exists($nameAvatarPics) && $value != '..' ? $nameAvatarPics : $avatarPicsDefault ?>" class="previewAvatar" />
                        </div>
                        <div class="col-12 text-center p-0">
                            <a href="user.php" type="button" class="btn btn-outline-success btn-sm btn-block m-0">Info profil</a>
                        </div>
                        <div class="col-12 text-center p-0">
                            <button class="btn btn-outline-danger btn-sm btn-block m-0 mt-2" type="submit" name="logoutModal">DECONNECTION</button>
                        </div>
                    </div>
                </form>
            <?php  } else { ?>
                <form method="POST" action="">
                    <div class="modal-body mx-3">
                        <div class="mb-5">
                            <label for="userMail"><i class="fas fa-user prefix colorIcon ml-1"></i></label>
                            <input type="email" id="userMail" class="form-control validate" placeholder="Adresse email *" name="userMailConnexion" value="<?= count($arrayError) != 0 && isset($_POST['userMailConnexion']) || isset($userNoExistError) ? $_POST['userMailConnexion'] : '' ?>" />
                            <p class="error"><?= isset($arrayError['userMailConnexion']) ? $arrayError['userMailConnexion'] : '' ?></p>
                        </div>
                        <div class="mb-4">
                            <label for="password"><i class="fas fa-lock prefix colorIcon ml-1"></i></label>
                            <input type="password" id="password" class="form-control validate" placeholder="Mot de passe *" name="passwordConnexion" />
                            <p class="error"><?= isset($arrayError['passwordConnexion']) ? $arrayError['passwordConnexion'] : '' ?></p>
                        </div>
                        <div class="col-12 text-center p-0">
                            <button type="submit" class="btn btn-outline-success btn-sm btn-block m-0" name="userConnection">Connexion</button>
                            <p class="error pt-2"><?= isset($_POST['userConnection']) && !empty($_POST['userMailConnexion']) && !empty($_POST['passwordConnexion']) ? $userNoExistError : '' ?></p>
                        </div>
                    </div>
                </form>
                <div class="modal-footer d-flex justify-content-center borderFooter border-top border-dark">
                    <div class="row mx-auto">
                        <label class="col-12 text-center">Vous n'avez pas de compte ?</label>
                        <div class="col-12 text-center">
                            <a href="http://laptitevadrouille/index.php?user=add"><button type="button" class="btn btn-outline-secondary btn-sm btn-block m-0">Inscrivez-Vous</button></a>
                        </div>
                    </div>
                </div>
            <?php }; ?>
        </div>
    </div>
</div>