<div class="card-columns mx-auto mt-3 p-3">
    <div class="card text-center">
        <form action="user.php" method="post">
            <div class="row d-flex justify-content-center mx-auto mt-3">
                <div class="col p-1">
                    <div class="card-body p-2">
                        <div class="m-2">
                            <img src="<?= file_exists($nameAvatarPics) && $value != '..' ? $nameAvatarPics : $avatarPicsDefault ?>" class="previewAvatar" />
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
            <p class="card-title font-weight-bold">MES INFORMATIONS :</p>
            <div class="row">
                <div class="col">
                    <p>STATUS : <?= $statusFind ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>PSEUDO : <?= isset($_SESSION['pseudo']) ? $_SESSION['pseudo'] : '' ?></p>
                </div>
                <div class="col butonEdit">
                    <a data-toggle="modal" data-target="#editPseudoModal" title="Modifier le pseudo"><i class="far fa-edit"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>EMAIL : <?= isset($_SESSION['mail']) ? $_SESSION['mail'] : '' ?></p>
                </div>
                <div class="col butonEdit">
                    <a data-toggle="modal" data-target="#editMailModal" title="Modifier le mail"><i class="far fa-edit"></i></a>
                </div>
            </div>

            <button class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#editPasswordModal" title="Modifier le mot de passe">MODIFIER MON MOT DE PASSE</button>
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
            <form method="POST" action="walkCreate.php">
                <button class="btn btn-outline-danger btn-sm btn-block" type="submit" name="proposalOutSubmit">PROPOSER UNE SORTIE</button>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <form method="POST" action="user.php">
                        <button class="btn btn-outline-danger btn-sm" type="submit" name="logout">DECONNECTION</button>
                    </form>
                </div>
                <div class="col">
                    <button class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#deleteAccountModal">SUPPRIMER LE COMPTE</button>
                </div>
            </div>
        </div>
    </div>