<div class="row text-center justify-content-center m-5">
    <div class="col my-auto text-center">
        <form method="GET" action="">
            <a class="btn btn-outline-danger shadow" href="http://laptitevadrouille/index.php?list=walk&amp;page=1" title="Retour liste des patient">Retour liste des sorties</a>
        </form>
    </div>
</div>
<div class="row d-flex justify-content-end p-3 m-0">
    <div class="col p-0">
        <?php
        if (!empty($searchWalk)) {
            foreach ($searchWalk as $row) {
                if ($row['walkValidate'] != 'Validate') {
                    continue;
                };
        ?>
                <div class="card mb-3">
                    <form method="GET" action="walkIdea.php">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="assets/img_walk/<?= $row['pics'] ?>" class="card-img m-1" alt="<?= 'image illustration ' . $row['title'] ?>" title="<?= 'image illustration ' . strtolower($row['title']) ?>">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-title h5"><?= $row['title'] ?></p>
                                    <div class="row pb-3">
                                        <div class="col px-2">
                                            <img src="assets/img_picto/<?= $row['locationPicto'] ?>" class="card-img m-1 sizePictoCategory" alt="<?= $row['locationAlt'] ?>" title="<?= $row['locationTitle'] ?>">
                                            <img src="assets/img_picto/<?= $row['outputTypePicto'] ?>" class="card-img m-1 sizePictoCategory" alt="<?= $row['outputTypeAlt'] ?>" title="<?= $row['outputTypeTitle'] ?>">
                                            <img src="assets/img_picto/<?= $row['ageAdvisePicto'] ?>" class="card-img m-1 sizePictoCategory" alt="<?= $row['ageAdviseAlt'] ?>" title="<?= $row['ageAdviseTitle'] ?>">
                                            <img src="assets/img_picto/<?= $row['practicabilityPicto'] ?>" class="card-img m-1 sizePictoCategory" alt="<?= $row['practicabilityAlt'] ?>" title="<?= $row['practicabilityTitle'] ?>">
                                            <img src="assets/img_picto/<?= $row['equipmentPicto'] ?>" class="card-img m-1 sizePictoCategory" alt="<?= $row['equipmentAlt'] ?>" title="<?= $row['equipmentTitle'] ?>">
                                        </div>
                                    </div>
                                    <p class="card-text"><?= $row['description'] ?></p>
                                    <p>Tarif moins de 3 ans : <?= $row['rate_0_3'] ?><?= $row['rate_0_3'] == 'GRATUIT' ? "" : "€" ?><br />
                                        Tarif de 3 à 11 ans : <?= $row['rate_3_11'] ?><?= $row['rate_3_11'] == 'GRATUIT' ? "" : "€" ?><br />
                                        Tarif à partir de 12 ans : <?= $row['rate_12_plus'] ?><?= $row['rate_12_plus'] == 'GRATUIT' ? "" : "€" ?><br />
                                        Enfant en situation de Handicap : <?= $row['rate_child_disabled'] ?><?= $row['rate_child_disabled'] == 'GRATUIT' ? "" : "€" ?>
                                    </p>
                                    <a class="btn btn-outline-danger btn-sm" href="http://laptitevadrouille/index.php?walk=detail&amp;moreInfo=<?= $row['id'] ?>">+ d'info</a>
                                    <p class="card-text"><small class="text-muted">Ajouté le <?= $row['publication_date'] ?></small></p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            <?php };
        } else { ?>
            <div class="row text-center justify-content-around m-0">
                <div class="col-md-12">
                    <p class="card-text text-danger h5">Aucun résultat trouvé</p>
                </div>
            </div>
        <?php }; ?>
    </div>
</div>
<div class="row text-center justify-content-center m-0">
    <div class="col-5 text-right">
        <?php if ($page > 1) { ?>
            <a class="btn btn-outline-danger mx-2" href="http://laptitevadrouille/index.php?search=title&page=<?= 1 ?>"><i class="fas fa-angle-double-left"></i></a>
            <a class="btn btn-outline-danger mx-2" href="http://laptitevadrouille/index.php?search=title&page=<?= $page - 1 ?>"><i class="fas fa-angle-left"></i></a>
        <?php } else {
            '';
        } ?>
    </div>
    <div class="col-2">
        <p class="text-danger mx-2 h4 mt-2"><?= $page . '/' . $pageCount ?></p>
    </div>
    <div class="col-5 text-left">
        <?php if ($page < $pageCount) { ?>
            <a class="btn btn-outline-danger mx-2" href="http://laptitevadrouille/index.php?search=title&page=<?= $page + 1 ?>"><i class="fas fa-angle-right"></i></a>
            <a class="btn btn-outline-danger mx-2" href="http://laptitevadrouille/index.php?search=title&page=<?= $pageCount ?>"><i class="fas fa-angle-double-right"></i></a>
        <?php } else {
            '';
        } ?>
    </div>
</div>