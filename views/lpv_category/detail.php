<!-- Details walk view start -->
<div class="row m-0 mt-1 p-2">
    <div class="col-lg-1 col-md-1 col-sm-1 col-12 p-0 text-left">
        <!-- Return button - If admin is connected -> Return on user details / Else -> Return on walk list -->
        <a class="btn buttonColor2 px-3 shadow" href="<?= isset($_SESSION['status']) && $_SESSION['status'] == 'admin' ? 'http://laptitevadrouille/index.php?user=detail' : 'http://laptitevadrouille/index.php?list=walk&amp;page=1' ?>" title="Retour vers liste des sorties"><i class="fas fa-reply"></i></a>
    </div>
    <!-- Title of page - If walk exist -> Display title / Else -> Message walk no exist -->
    <div class="col-lg-11 col-md-11 col-sm-11 col-12 text-left">
        <p class="textColor1 h3 mt-3"><?= !empty($detailWalk) ? 'DETAIL ' . $detailWalk[0]['title'] : 'CETTE SORTIE N\'EXISTE PAS' ?></p>
    </div>
</div>
<!-- Display condition of content start - If walk exist -> Display content / Else Display stop logo -->
<?php if (!empty($detailWalk)) { ?>
    <div class="card-columns px-3 mt-2">
        <!-- Loop for display a detail content of walk start -->
        <?php foreach ($detailWalk as $row) {
            //Continuation condition of loop for only display the walks validated
            if ($row['walkValidate'] != 'Validate') {
                continue;
            };
            //Continuation condition of loop for only display the walks selected
            if ($_GET['moreInfo'] != $row['id']) {
                continue;
            }
        ?>
            <!-- Illustration pics -->
            <img src="assets/img_walk/<?= $row['pics'] ?>" class="img-fluid card" alt="Image illustration <?= strtolower($row['title']) ?>" title="Image illustration <?= strtolower($row['title']) ?>" />
            <!-- Title of walk -->
            <div class="card pt-1">
                <p class="text-center h4 my-auto textColor1"><?= $row['title'] ?></p>
            </div>
            <div class="card">
                <div class="card-body text-center px-2">
                    <!-- Location picto of walk -->
                    <img src="assets/img_picto/<?= $row['locationPicto'] ?>" class="card-img m-1 sizePictoCategory" alt="<?= $row['locationAlt'] ?>" title="<?= $row['locationTitle'] ?>">
                    <!-- Output type picto of walk -->
                    <img src="assets/img_picto/<?= $row['outputTypePicto'] ?>" class="card-img m-1 sizePictoCategory" alt="<?= $row['outputTypeAlt'] ?>" title="<?= $row['outputTypeTitle'] ?>">
                    <!-- Age advise picto of walk -->
                    <img src="assets/img_picto/<?= $row['ageAdvisePicto'] ?>" class="card-img m-1 sizePictoCategory" alt="<?= $row['ageAdviseAlt'] ?>" title="<?= $row['ageAdviseTitle'] ?>">
                    <!-- Practicability picto of walk -->
                    <img src="assets/img_picto/<?= $row['practicabilityPicto'] ?>" class="card-img m-1 sizePictoCategory" alt="<?= $row['practicabilityAlt'] ?>" title="<?= $row['practicabilityTitle'] ?>">
                    <!-- Equipement picto of walk / Condition - If isset logo -> Display / Else nothing -->
                    <?php if (!empty($row['id_LPV_equipmentPicto'])) { ?>
                        <img src="assets/img_picto/<?= $row['equipmentPicto'] ?>" class="card-img m-1 sizePictoCategory" alt="<?= $row['equipmentAlt'] ?>" title="<?= $row['equipmentTitle'] ?>">
                    <?php } else {
                        '';
                    } ?>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <!-- Button collapse description -->
                    <a class="btn buttonColor2 btn-sm btn-block" data-toggle="collapse" href="#collapseDescription" role="button" aria-expanded="false" aria-controls="collapseCookie">
                        DESCRIPTION
                    </a>
                    <!-- Full description -->
                    <div class="collapse text-left mt-3" id="collapseDescription">
                        <p class="textColor2"><?= $row['moreInfoDescription'] ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <!-- Rate title -->
                    <p class="card-title font-weight-bold textColor1">TARIFS :</p>
                    <!-- Rate picto & description -->
                    <p class="textColor2">Tarif moins de 3 ans : <?= $row['rate_0_3'] ?><?= $row['rate_0_3'] == 'GRATUIT' ? "" : "€" ?><br />
                        Tarif de 3 à 11 ans : <?= $row['rate_3_11'] ?><?= $row['rate_3_11'] == 'GRATUIT' ? "" : "€" ?><br />
                        Tarif à partir de 12 ans : <?= $row['rate_12_plus'] ?><?= $row['rate_12_plus'] == 'GRATUIT' ? "" : "€" ?><br />
                        Enfant en situation de Handicap : <?= $row['rate_child_disabled'] ?><?= $row['rate_child_disabled'] == 'GRATUIT' ? "" : "€" ?>
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <!-- Date Hour title -->
                    <p class="card-title font-weight-bold textColor1">HORAIRES :</p>
                    <!-- Date Hour description -->
                    <p class="textColor2"><?= $row['openedHours'] ?></p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <!-- Google map image / Redirect to the site Google map -->
                    <a href="<?= $row['googleMapAddress'] ?>"><img src="assets/img_map/<?= $row['map'] ?>" class="img-fluid" alt="Image carte <?= strtolower($row['title']) ?>" title="Image carte <?= strtolower($row['title']) ?>" /></a>
                    <!-- Button / Redirect to the official site -->
                    <a class="btn buttonColor2 btn-sm btn-block mx-0 mt-4" href="<?= $row['officialSite'] ?>" title="Site officiel <?= strtolower($row['title']) ?>">SITE OFFICIEL</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <!-- Walk payment title -->
                    <p class="card-title font-weight-bold textColor1">MOYENS DE PAIEMENTS ACCEPTES :</p>
                    <!-- Loop for display a payment of walk start -->
                    <?php foreach ($detailWalkPayment as $row) {
                        //Continuation condition of loop for only display the walks selected
                        if ($row['id'] != $_GET['moreInfo']) {
                            continue;
                        } ?>
                        <!-- Payment picto -->
                        <img src="assets/img_picto/<?= $row['paymentPicto'] ?>" class="card-img m-1 sizePictoPayment" alt="<?= $row['paymentAlt'] ?>" title="<?= $row['paymentTitle'] ?>">
                    <?php }; ?>
                    <!-- Loop for display a payment of walk end -->
                </div>
            </div>
        <?php } ?>
        <!-- Loop for display a detail content of walk end -->
    </div>
<?php } else { ?>
    <div class="row m-0 mt-2 mx-4 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <img src="assets/img/stopLogo.png" title="Logo stop" alt="Logo stop" class="img-fluid m-2" />
        </div>
    </div>
<?php }; ?>
<!-- Display condition of content end -->
<!-- Details walk view end -->