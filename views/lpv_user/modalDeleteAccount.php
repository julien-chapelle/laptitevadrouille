<div class="modal fade" id="deleteAccountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="user.php" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title h5 text-center" id="exampleModalLabel">Suppression du compte utilisateur</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-header">
                    <div class="col p-1 text-center">
                        <p class="h6 text-danger text-center"><i class="fas fa-exclamation-triangle"></i> Attention !<br />
                            Vous êtes sur le point de supprimer définitivement votre compte.<br />
                            Toutes les données vous concernant seront supprimées !</p>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row d-flex justify-content-center mx-auto">
                        <div class="col p-1 text-center">
                            <p class="h6 text-black text-center">Si vous souhaitez vraiment supprimer votre compte il vous suffit de saisir votre pseudo et mot de passe ci-dessous :</p>
                            <!-- formulaire début-->
                            <form class="p-4" method="POST" action="accountCreate.php">
                                <div class="row text-center m-0 mt-1 justify-content-center">
                                    <div class="col-12">
                                        <label class="font-weight-bold text-dark" for="pseudo"><i class="fas fa-user"></i>
                                            PRENOM OU PSEUDO</label>
                                        <input title="Renseignez le prénom ou le pseudo" placeholder="ex: Jean" type="text" class="form-control text-center" name="pseudoDeleteAccount" id="pseudo" value="<?= count($arrayError) != 0 && isset($_POST['pseudo']) ? $_POST['pseudo'] : '' ?>" />
                                        <p class="error"><?= isset($arrayError['pseudoDeleteAccount']) ? $arrayError['pseudoDeleteAccount'] : '' ?></p>
                                    </div>
                                </div>
                                <div class="row text-center m-0 mt-1 justify-content-center">
                                    <div class="col-12">
                                        <label class="font-weight-bold text-dark" for="password"><i class="fas fa-unlock-alt"></i> MOT
                                            DE PASSE</label>
                                        <input title="Choisissez un mot de passe" type="password" class="form-control text-center" name="passwordDeleteAccount" id="password" />
                                        <p class="error"><?= isset($arrayError['passwordDeleteAccount']) ? $arrayError['passwordDeleteAccount'] : '' ?></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- formulaire fin-->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" value="Upload Image" class="btn btn-outline-danger btn-sm my-1" name="submitDeleteAccount">SUPPRIMER</button>
                    <button type="button" class="btn btn-outline-success btn-sm" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </form>
    </div>
</div>