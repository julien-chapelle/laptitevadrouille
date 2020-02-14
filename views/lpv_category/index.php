<div class="row d-flex justify-content-end p-3">
    <div class="col p-0">
        <?php
        foreach ($data->query($card_category_query) as $row) {
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
                                <h5 class="card-title"><?= $row['title'] ?></h5>
                                <div class="row pb-3">
                                    <div class="col">
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
                                <a class="btn btn-outline-danger btn-sm" href="http://projet-examen/moreInfo.php?id=<?= $row['id'] ?>">+ d'info</a>
                                <p class="card-text"><small class="text-muted">Ajouté le <?= $row['publication_date'] ?></small></p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        <?php }; ?>
    </div>
</div>