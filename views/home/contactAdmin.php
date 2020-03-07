<div class="row justify-content-around m-0">
    <div class="col-lg-5 col-md-10 col-sm-10 col-10 text-center borderRadius border-0 shadow card pt-4 mx-3 mt-4">
        <a href="https://www.google.com/maps/place/40+Rue+Eug%C3%A8ne+Boudin,+76290+Montivilliers/@49.5463243,0.1694886,17z/data=!3m1!4b1!4m5!3m4!1s0x47e0254a4f77ad85:0x12614fe99629a794!8m2!3d49.5463243!4d0.1716773"><img src="assets/img_map/contactMap.png" class="img-fluid" /></a>
        <p class="font-weight-bold textColor1 my-2">ADRESSE : </p>
        <p class="font-weight-bold textColor2 mb-2">40 Rue Eugène Boudin</p>
        <p class="font-weight-bold textColor2 mb-2">76290 - MONTIVILLIER</p>
    </div>
    <!-- Map fin-->
    <!-- formulaire début-->
    <div class="col-lg-5 col-md-10 col-sm-10 col-10 text-center p-0 mx-3 mt-4">
        <form class="p-4 border-0 borderRadius shadow card" method="POST" action="" enctype="multipart/form-data">
            <div class="row text-center m-0 mt-1 justify-content-center">
                <div class="col">
                    <p class="font-weight-bold textColor1 h5 my-4">Pour nous contacter, veuillez remplir ce formulaire :</p>
                </div>
            </div>
            <div class="row text-center m-0 mt-1 justify-content-center">
                <div class="col">
                    <label class="font-weight-bold textColor2" for="pseudo"><i class="fas fa-user"></i>
                        PRENOM OU PSEUDO</label>
                    <input title="Renseignez le prénom ou pseudo" placeholder="ex: Jean" type="text" class="form-control text-center borderInput" name="pseudo" id="pseudo" value="<?= count($arrayError) != 0 && isset($_POST['pseudo']) ? $_POST['pseudo'] : '' ?>" />
                    <p class="error"><?= isset($arrayError['pseudo']) ? $arrayError['pseudo'] : '' ?></p>
                </div>
            </div>
            <div class="row text-center m-0 mt-1 justify-content-center">
                <div class="col">
                    <label class="font-weight-bold textColor2" for="email"><i class="fas fa-at"></i>
                        EMAIL</label>
                    <input title="Renseignez l'adresse email" placeholder="ex: JeanDupont@wanadoo.fr" type="email" class="form-control text-center borderInput" name="mail" id="email" value="<?= count($arrayError) != 0 && isset($_POST['mail']) ? $_POST['mail'] : '' ?>" />
                    <p class="error"><?= isset($arrayError['mail']) ? $arrayError['mail'] : '' ?></p>
                </div>
            </div>
            <div class="row text-center m-0 mt-1 justify-content-center">
                <div class="col">
                    <label class="font-weight-bold textColor2" for="userMessage"><i class="fas fa-envelope-open-text"></i> VOTRE MESSAGE</label>
                    <textarea title="Envoyez-nous un message" type="text" class="form-control text-center borderInput" name="userMessage" id="userMessage" placeholder="Votre message..." spellcheck="true"><?= count($arrayError) != 0 && isset($_POST['userMessage']) ? $_POST['userMessage'] : '' ?></textarea>
                    <p class="error"><?= isset($arrayError['userMessage']) ? $arrayError['userMessage'] : '' ?></p>
                </div>
            </div>
            <div class="row text-center m-0 mt-1 justify-content-center">
                <div class="col">
                    <button class="btn buttonColor2 py-2" role="button" type="submit" name="send">ENVOYER</button>
                    <p class="valid h5"><?= count($arrayError) == 0 && isset($_POST['send']) ? '<i class="fas fa-check"></i> Votre message a bien été envoyé.' : '' ?></p>
                </div>
            </div>
        </form>
    </div>
</div>