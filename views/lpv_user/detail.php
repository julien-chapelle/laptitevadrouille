<div class="card-columns mx-auto mt-3 p-3">
    <?php foreach ($detailUser as $row) { ?>
        <div class="card text-center">
            <div class="row d-flex justify-content-center mx-auto mt-3">
                <div class="col p-1">
                    <div class="card-body p-2">
                        <div class="m-2">
                            <img src="assets/<?= $row['id_LPV_avatar'] != null ? 'img_avatar_choice/' . $row['avatarName'] : 'img/userTestLogo.png' ?>" class="previewAvatar" />
                        </div>
                        <a class="btn btn-outline-success btn-sm" href="http://laptitevadrouille/index.php?avatarChoice=user<?= $row['id'] ?>">Choisir avatar</a>
                        <form method="POST" action="">
                            <button class="btn btn-outline-success btn-sm" type="submit" name="removeAvatarPics">Supprimer avatar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-10">
                        <p class="card-title font-weight-bold">MES INFORMATIONS :</p>
                    </div>
                    <div class="col-2 mt-1 text-right">
                        <a class="butonEdit text-success" href="http://laptitevadrouille/index.php?user=editInfo&amp;id=<?= $row['id'] ?>" title="Modifier les informations"><i class="far fa-edit"></i></a>
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
                        <a class="btn btn-outline-danger btn-sm btn-block mx-0" href="http://laptitevadrouille/index.php?user=editPassword&amp;id=<?= $row['id'] ?>" title="Modifier le mot de passe">MODIFIER MON MOT DE PASSE</a>
                    </div>
                </div>
            </div>
        </div>
        <?php if ($row['status'] == 'user') { ?>
            <div class="card">
                <div class="card-body">
                    <p class="card-title font-weight-bold">VOS FAVORIS :</p>
                    <p class="card-text">BlaBla</p>
                </div>
            </div>
        <?php }; ?>
        <div class="card">
            <div class="card-body">
                <a class="btn btn-outline-danger btn-sm btn-block mx-0" href="http://laptitevadrouille/index.php?walk=create">PROPOSER UNE SORTIE</button>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row m-0">
                    <div class="col-6 p-0">
                        <form method="POST" action="" class="mb-0">
                            <button class="btn btn-outline-danger btn-sm mx-0" type="submit" name="logout">DECONNECTION</button>
                        </form>
                    </div>
                    <div class="col-6 p-0">
                        <a class="btn btn-outline-danger btn-sm btn-block mx-0" href="http://laptitevadrouille/index.php?user=delete&amp;id=<?= $row['id'] ?>" title="suppression compte utilisateur">SUPPRIMER LE COMPTE</a>
                    </div>
                </div>
            </div>
        </div>
    <?php };
    if ($row['status'] == 'admin') { ?>
        <div class="card text-center">
            <div class="card-body p-1">
                <p class="card-title font-weight-bold mb-0">SORTIES EN ATTENTE DE VALIDATION :</p>
                <div class="row d-flex justify-content-end px-3 py-1 m-0">
                    <div class="col p-0">
                        <?php
                        foreach ($listWalk as $row) {
                            if ($row['walkValidate'] != null) {
                                continue;
                            };
                        ?>
                            <div class="card mb-3">
                                <form method="GET" action="">
                                    <div class="row no-gutters">
                                        <div class="col">
                                            <div class="card-body p-1">
                                                <p class="card-title mb-1"><?= $row['title'] ?></p>
                                                <div class="row">
                                                    <div class="col px-2">
                                                        <img src="assets/img_picto/<?= $row['locationPicto'] ?>" class="card-img m-1 sizePictoAdmin" alt="<?= $row['locationAlt'] ?>" title="<?= $row['locationTitle'] ?>">
                                                        <img src="assets/img_picto/<?= $row['outputTypePicto'] ?>" class="card-img m-1 sizePictoAdmin" alt="<?= $row['outputTypeAlt'] ?>" title="<?= $row['outputTypeTitle'] ?>">
                                                        <img src="assets/img_picto/<?= $row['ageAdvisePicto'] ?>" class="card-img m-1 sizePictoAdmin" alt="<?= $row['ageAdviseAlt'] ?>" title="<?= $row['ageAdviseTitle'] ?>">
                                                        <img src="assets/img_picto/<?= $row['practicabilityPicto'] ?>" class="card-img m-1 sizePictoAdmin" alt="<?= $row['practicabilityAlt'] ?>" title="<?= $row['practicabilityTitle'] ?>">
                                                        <img src="assets/img_picto/<?= $row['equipmentPicto'] ?>" class="card-img m-1 sizePictoAdmin" alt="<?= $row['equipmentAlt'] ?>" title="<?= $row['equipmentTitle'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row no-gutters justify-content-end">
                                        <div class="col-1 mt-1 text-center">
                                            <a class="butonEdit text-success" href="http://laptitevadrouille/index.php?walk=detail&amp;unvalidateWalk=<?= $row['id'] ?>" title="Plus d'informations"><i class="fas fa-search"></i></a>
                                        </div>
                                        <div class="col-1 mt-1 text-center">
                                            <a class="butonEdit text-success" href="http://laptitevadrouille/index.php?walk=edit&amp;id=<?= $row['id'] ?>" title="Modifier les informations"><i class="far fa-edit"></i></a>
                                        </div>
                                        <div class="col-1 mt-1 text-center">
                                            <a class="butonEdit text-success" href="http://laptitevadrouille/index.php?walk=delete&amp;id=<?= $row['id'] ?>" title="Supprimer la sortie"><i class="far fa-trash-alt"></i></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        <?php }; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="card text-center">
            <div class="card-body p-1">
                <p class="card-title font-weight-bold mb-0">SORTIES VALIDEES :</p>
                <div class="row d-flex justify-content-end px-3 py-1 m-0">
                    <div class="col p-0">
                        <?php
                        foreach ($listWalk as $row) {
                            if ($row['walkValidate'] != 'Validate') {
                                continue;
                            };
                        ?>
                            <div class="card mb-3">
                                <form method="GET" action="">
                                    <div class="row no-gutters">
                                        <div class="col">
                                            <div class="card-body p-1">
                                                <p class="card-title mb-1"><?= $row['title'] ?></p>
                                                <div class="row">
                                                    <div class="col px-2">
                                                        <img src="assets/img_picto/<?= $row['locationPicto'] ?>" class="card-img m-1 sizePictoAdmin" alt="<?= $row['locationAlt'] ?>" title="<?= $row['locationTitle'] ?>">
                                                        <img src="assets/img_picto/<?= $row['outputTypePicto'] ?>" class="card-img m-1 sizePictoAdmin" alt="<?= $row['outputTypeAlt'] ?>" title="<?= $row['outputTypeTitle'] ?>">
                                                        <img src="assets/img_picto/<?= $row['ageAdvisePicto'] ?>" class="card-img m-1 sizePictoAdmin" alt="<?= $row['ageAdviseAlt'] ?>" title="<?= $row['ageAdviseTitle'] ?>">
                                                        <img src="assets/img_picto/<?= $row['practicabilityPicto'] ?>" class="card-img m-1 sizePictoAdmin" alt="<?= $row['practicabilityAlt'] ?>" title="<?= $row['practicabilityTitle'] ?>">
                                                        <img src="assets/img_picto/<?= $row['equipmentPicto'] ?>" class="card-img m-1 sizePictoAdmin" alt="<?= $row['equipmentAlt'] ?>" title="<?= $row['equipmentTitle'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row no-gutters justify-content-end">
                                        <div class="col-1 mt-1 text-center">
                                            <a class="butonEdit text-success" href="http://laptitevadrouille/index.php?walk=detail&amp;moreInfo=<?= $row['id'] ?>" title="Modifier les informations"><i class="fas fa-search"></i></a>
                                        </div>
                                        <div class="col-1 mt-1 text-center">
                                            <a class="butonEdit text-success" href="http://laptitevadrouille/index.php?walk=edit&amp;id=<?= $row['id'] ?>" title="Modifier les informations"><i class="far fa-edit"></i></a>
                                        </div>
                                        <div class="col-1 mt-1 text-center">
                                            <a class="butonEdit text-success" href="http://laptitevadrouille/index.php?walk=delete&amp;id=<?= $row['id'] ?>" title="Modifier les informations"><i class="far fa-trash-alt"></i></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        <?php }; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="card text-center">
            <div class="card-body p-1">
                <p class="card-title font-weight-bold mb-0">LISTE DES UTILISATEURS :</p>
                <div class="row d-flex justify-content-end px-3 py-1 m-0">
                    <div class="col p-0">
                        <?php
                        foreach ($listUser as $row) {
                        ?>
                            <div class="card mb-3">
                                <form method="GET" action="" class="m-0">
                                    <div class="row no-gutters">
                                        <div class="col-3">
                                            <div class="card-body p-0">
                                                <p class="m-0"><?= $row['pseudo'] ?></p>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="card-body p-0">
                                                <p class="m-0"><small><a href="mailto:<?= $row['mail'] ?>"><?= $row['mail'] ?></a></small></p>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="card-body p-0">
                                                <p class="m-0"><?= $row['status'] ?></p>
                                            </div>
                                        </div>
                                        <div class="col-1 mt-1 text-center">
                                            <a class="butonEdit text-success" href="http://laptitevadrouille/index.php?user=editInfo&amp;id=<?= $row['id'] ?>" title="Modifier les informations"><i class="far fa-edit"></i></a>
                                        </div>
                                        <div class="col-1 mt-1 text-center">
                                            <a class="butonEdit text-success" href="http://laptitevadrouille/index.php?user=delete&amp;id=<?= $row['id'] ?>" title="Supprimer l'utilisateur"><i class="far fa-trash-alt"></i></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        <?php }; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="card text-center">
            <div class="card-body p-1">
                <p class="card-title font-weight-bold mb-0">AJOUT AVATAR EN BDD :</p>
                <div class="row d-flex justify-content-end px-3 py-1 m-0">
                    <div class="col p-0">
                        <form method="POST" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="file" class="form-control-file btn btn-outline-success btn-sm" name="fileUpload" id="fileUpload" title="choisissez une image" />
                                <button type="submit" class="btn btn-outline-success btn-sm btn-block" name="addAvatarBdd"><i class="fas fa-cloud-upload-alt"></i> AJOUTER</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="card text-center">
            <div class="card-body p-1">
                <p class="card-title font-weight-bold mb-0">LISTE DES AVATAR DISPONIBLES :</p>
                <div class="row m-0 mt-1 p-2 d-flex justify-content-center">
                    <?php foreach ($avatarList as $value) { ?>
                        <div class="col-2 p-0 text-center">
                            <form class="p-0 m-0" method="POST" action="">
                                <button class="btn p-0 my-2 mx-0 bg-transparent shadow-none" type="submit" name="deleteAvatarOnBdd" title="supprimer l'avatar">
                                    <img src="assets/img_avatar_choice/<?= $value['avatarName'] ?>" class="card-img-top previewAvatarDetailAdmin img-fluid shadow" alt="<?= 'Avatar_' . $value['avatarName'] ?>" />
                                    <input type="text" name="avatar" value="<?= $value['avatarName'] ?>" hidden />
                                </button>
                            </form>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php } ?>
</div>