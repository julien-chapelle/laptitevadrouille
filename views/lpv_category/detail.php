<div class="row m-0 mt-1 p-2">
    <div class="col p-0 text-left">
        <a class="btn btn-outline-success px-3 shadow" href="http://laptitevadrouille/index.php?list=walk&amp;page=1" title="Retour vers liste des sorties"><i class="fas fa-reply"></i></a>
    </div>
</div>
<div class="card-columns px-3 mt-4">
    <?php foreach ($detailWalk as $row) {
        if ($row['walkValidate'] != 'Validate') {
            continue;
        };
        if ($_GET['moreInfo'] != $row['id']) {
            continue;
        }
    ?>
        <img src="assets/img_walk/<?= $row['pics'] ?>" class="img-fluid card" alt="Image illustration <?= strtolower($row['title']) ?>" title="Image illustration <?= strtolower($row['title']) ?>" />
        <div class="card">
            <p class="text-center h4 my-auto"><?= $row['title'] ?></p>
        </div>
        <div class="card">
            <div class="card-body text-center px-2">
                <img src="assets/img_picto/<?= $row['locationPicto'] ?>" class="card-img m-1 sizePictoCategory" alt="<?= $row['locationAlt'] ?>" title="<?= $row['locationTitle'] ?>">
                <img src="assets/img_picto/<?= $row['outputTypePicto'] ?>" class="card-img m-1 sizePictoCategory" alt="<?= $row['outputTypeAlt'] ?>" title="<?= $row['outputTypeTitle'] ?>">
                <img src="assets/img_picto/<?= $row['ageAdvisePicto'] ?>" class="card-img m-1 sizePictoCategory" alt="<?= $row['ageAdviseAlt'] ?>" title="<?= $row['ageAdviseTitle'] ?>">
                <img src="assets/img_picto/<?= $row['practicabilityPicto'] ?>" class="card-img m-1 sizePictoCategory" alt="<?= $row['practicabilityAlt'] ?>" title="<?= $row['practicabilityTitle'] ?>">
                <img src="assets/img_picto/<?= $row['equipmentPicto'] ?>" class="card-img m-1 sizePictoCategory" alt="<?= $row['equipmentAlt'] ?>" title="<?= $row['equipmentTitle'] ?>">
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <a class="btn btn-outline-secondary btn-sm btn-block" data-toggle="collapse" href="#collapseDescription" role="button" aria-expanded="false" aria-controls="collapseCookie">
                    DESCRIPTION
                </a>
                <div class="collapse text-left mt-3" id="collapseDescription">
                    <p><?= $row['moreInfoDescription'] ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <p class="card-title font-weight-bold">TARIFS :</p>
                <p>Tarif moins de 3 ans : <?= $row['rate_0_3'] ?><?= $row['rate_0_3'] == 'GRATUIT' ? "" : "€" ?><br />
                    Tarif de 3 à 11 ans : <?= $row['rate_3_11'] ?><?= $row['rate_3_11'] == 'GRATUIT' ? "" : "€" ?><br />
                    Tarif à partir de 12 ans : <?= $row['rate_12_plus'] ?><?= $row['rate_12_plus'] == 'GRATUIT' ? "" : "€" ?><br />
                    Enfant en situation de Handicap : <?= $row['rate_child_disabled'] ?><?= $row['rate_child_disabled'] == 'GRATUIT' ? "" : "€" ?>
                </p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <p class="card-title font-weight-bold">HORAIRES :</p>
                <p><?= $row['openedHours'] ?></p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <a href="<?= $row['googleMapAddress'] ?>"><img src="assets/img_map/<?= $row['map'] ?>" class="img-fluid" alt="Image carte <?= strtolower($row['title']) ?>" title="Image carte <?= strtolower($row['title']) ?>" /></a>
                <a class="btn btn-outline-secondary btn-sm btn-block mx-0 mt-4" href="<?= $row['officialSite'] ?>" title="Site officiel <?= strtolower($row['title']) ?>">SITE OFFICIEL</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <p class="card-title font-weight-bold">MOYENS DE PAIEMENTS ACCEPTES :</p>
                <?php foreach ($detailWalkPayment as $row) {
                    if ($row['id'] != $_GET['moreInfo']) {
                        continue;
                    } ?>
                    <img src="assets/img_picto/<?= $row['paymentPicto'] ?>" class="card-img m-1 sizePictoPayment" alt="<?= $row['paymentAlt'] ?>" title="<?= $row['paymentTitle'] ?>">
                <?php }; ?>
            </div>
        </div>
    <?php } ?>
</div>