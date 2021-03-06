<div class="row m-0 mt-1 p-2">
    <div class="col-lg-1 col-md-1 col-sm-1 col-12 p-0 text-left">
        <a class="btn buttonColor2 px-3 shadow" href="http://laptitevadrouille/index.php?list=walk&amp;page=1" title="Retour vers liste des sorties"><i class="fas fa-reply"></i></a>
    </div>
    <div class="col-lg-11 col-md-11 col-sm-11 col-12 text-left">
        <p class="textColor1 h3 mt-3">RESULTATS DE RECHERCHE</p>
    </div>
</div>
<div class="row d-flex justify-content-end p-3 m-0">
    <div class="col p-0">
        <?php
        if (isset($_GET['search']) && isset($_GET['page']) && !empty($searchWalk)) {
            foreach ($searchWalk as $row) { ?>
                <div class="card mb-3">
                    <form method="GET" action="" class="mb-0">
                        <div class="row no-gutters">
                            <div class="col-md-4 p-2">
                                <img src="assets/img_walk/<?= $row['pics'] ?>" class="card-img" alt="<?= 'image illustration ' . $row['title'] ?>" title="<?= 'image illustration ' . strtolower($row['title']) ?>">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-title h5 textColor1"><?= $row['title'] ?></p>
                                    <div class="row pb-3">
                                        <div class="col px-2">
                                            <img src="assets/img_picto/<?= $row['locationPicto'] ?>" class="card-img m-1 sizePictoCategory" alt="<?= $row['locationAlt'] ?>" title="<?= $row['locationTitle'] ?>">
                                            <img src="assets/img_picto/<?= $row['outputTypePicto'] ?>" class="card-img m-1 sizePictoCategory" alt="<?= $row['outputTypeAlt'] ?>" title="<?= $row['outputTypeTitle'] ?>">
                                            <img src="assets/img_picto/<?= $row['ageAdvisePicto'] ?>" class="card-img m-1 sizePictoCategory" alt="<?= $row['ageAdviseAlt'] ?>" title="<?= $row['ageAdviseTitle'] ?>">
                                            <img src="assets/img_picto/<?= $row['practicabilityPicto'] ?>" class="card-img m-1 sizePictoCategory" alt="<?= $row['practicabilityAlt'] ?>" title="<?= $row['practicabilityTitle'] ?>">
                                            <?php if (!empty($row['id_LPV_equipmentPicto'])) { ?>
                                                <img src="assets/img_picto/<?= $row['equipmentPicto'] ?>" class="card-img m-1 sizePictoCategory" alt="<?= $row['equipmentAlt'] ?>" title="<?= $row['equipmentTitle'] ?>">
                                            <?php } else {
                                                '';
                                            } ?>
                                        </div>
                                    </div>
                                    <p class="textColor2"><small><?= $row['description'] ?></small></p>
                                    <p class="textColor2">Tarif moins de 3 ans : <?= $row['rate_0_3'] ?><?= $row['rate_0_3'] == 'GRATUIT' ? "" : "€" ?><br />
                                        Tarif de 3 à 11 ans : <?= $row['rate_3_11'] ?><?= $row['rate_3_11'] == 'GRATUIT' ? "" : "€" ?><br />
                                        Tarif à partir de 12 ans : <?= $row['rate_12_plus'] ?><?= $row['rate_12_plus'] == 'GRATUIT' ? "" : "€" ?><br />
                                        Enfant en situation de Handicap : <?= $row['rate_child_disabled'] ?><?= $row['rate_child_disabled'] == 'GRATUIT' ? "" : "€" ?>
                                    </p>
                                    <a class="btn buttonColor2 btn-sm" href="http://laptitevadrouille/index.php?walk=detail&amp;moreInfo=<?= $row['id'] ?>">+ d'info</a>
                                    <p class="card-text"><small class="textColor2"><?= 'Créé le ' . utf8_encode(strftime('%d %B %Y', strtotime($row['publication_date']))) ?></small></p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            <?php };
        } else { ?>
            <div class="row text-center justify-content-around m-0">
                <div class="col-md-12">
                    <p class="card-text textColor1 h3">Aucun résultat trouvé</p>
                </div>
            </div>
        <?php }; ?>
    </div>
</div>
<div class="row text-center justify-content-center m-0">
    <div class="col-lg-5 col-md-2 col-sm-2 col-3 text-right px-0">
        <?php if ($page > 1) { ?>
            <a class="btn buttonColor2 btn-sm mx-2 px-2" title="début" href="http://laptitevadrouille/index.php?search=<?= $_GET['search'] ?>&amp;page=<?= 1 ?>"><i class="fas fa-angle-double-left"></i></a>
            <a class="btn buttonColor2 btn-sm mx-2 px-2" title="précédent" href="http://laptitevadrouille/index.php?search=<?= $_GET['search'] ?>&amp;page=<?= $page - 1 ?>"><i class="fas fa-angle-left"></i></a>
        <?php } else {
            '';
        } ?>
    </div>
    <div class="col-lg-1 col-md-2 col-sm-2 col-2 px-0">
        <p class="textColor2 mx-2 h5 mt-2"><?= $page . '/' . $pageCount ?></p>
    </div>
    <div class="col-lg-5 col-md-2 col-sm-2 col-3 text-left px-0">
        <?php if ($page < $pageCount) { ?>
            <a class="btn buttonColor2 btn-sm mx-2 px-2" title="suivant" href="http://laptitevadrouille/index.php?search=<?= $_GET['search'] ?>&amp;page=<?= $page + 1 ?>"><i class="fas fa-angle-right"></i></a>
            <a class="btn buttonColor2 btn-sm mx-2 px-2" title="fin" href="http://laptitevadrouille/index.php?search=<?= $_GET['search'] ?>&amp;page=<?= $pageCount ?>"><i class="fas fa-angle-double-right"></i></a>
        <?php } else {
            '';
        } ?>
    </div>
</div>