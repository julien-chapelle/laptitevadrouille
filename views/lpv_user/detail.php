<?php foreach ($detailUser as $row) { ?>
    <div class="card-columns mx-auto mt-3 p-3">
        <div class="card text-center">
            <form action="" method="POST">
                <div class="row d-flex justify-content-center mx-auto mt-3">
                    <div class="col p-1">
                        <div class="card-body p-2">
                            <div class="m-2">
                                <img src="assets/<?= $AvatarUser[0]['avatar'] != null ? 'img_depot/' . $AvatarUser[0]['avatar'] : 'img/userTestLogo.png' ?>" class="previewAvatar" />
                            </div>
                            <button class="btn btn-outline-success btn-sm" type="button" data-toggle="modal" data-target="#avatarChoiceModal">Choisir avatar</button>
                            <form method="POST" action="user.php">
                                <button class="btn btn-outline-success btn-sm" type="submit" name="removeAvatarPics">Supprimer avatar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-10">
                        <p class="card-title font-weight-bold">MES INFORMATIONS :</p>
                    </div>
                    <div class="col-2 mt-1 text-right">
                        <a class="butonEdit text-success" href="http://laptitevadrouille/index.php?user=editInfo" title="Modifier les informations"><i class="far fa-edit"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>STATUS : <?= $row['status'] ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>PSEUDO : <?= isset($row['pseudo']) ? $row['pseudo'] : '' ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>EMAIL : <?= isset($row['mail']) ? $row['mail'] : '' ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a class="btn btn-outline-danger btn-sm btn-block" href="http://laptitevadrouille/index.php?user=editPassword" title="Modifier le mot de passe">MODIFIER MON MOT DE PASSE</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <p class="card-title font-weight-bold">VOS FAVORIS :</p>
                <p class="card-text">BlaBla</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <form method="POST" action="">
                    <button class="btn btn-outline-danger btn-sm btn-block" type="submit" name="proposalOutSubmit">PROPOSER UNE SORTIE</button>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <form method="POST" action="">
                            <button class="btn btn-outline-danger btn-sm" type="submit" name="logout">DECONNECTION</button>
                        </form>
                    </div>
                    <div class="col">
                        <a class="btn btn-outline-danger btn-sm btn-block" href="http://laptitevadrouille/index.php?user=delete" title="suppression compte utilisateur">SUPPRIMER LE COMPTE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>