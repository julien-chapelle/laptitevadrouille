<div class="row m-0 mt-1 p-2">
    <div class="col-lg-1 col-md-1 col-sm-1 col-12 p-0 text-left">
        <a class="btn buttonColor2 px-3 shadow" href="http://laptitevadrouille/index.php?user=detail" title="Retour vers info utilisateur"><i class="fas fa-reply"></i></a>
    </div>
    <div class="col-lg-11 col-md-11 col-sm-11 col-12 text-left">
        <p class="textColor1 h3 mt-3">CHOIX AVATAR</p>
    </div>
</div>
<div class="row m-0 mt-1 p-2">
    <?php foreach ($avatarList as $value) { ?>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 p-0 text-center">
            <form class="p-0 m-0" method="POST" action="" enctype="multipart/form-data">
                <button class="btn p-0 my-2 mx-0 bg-transparent shadow-none" type="submit" name="choiceAvatar">
                    <img src="assets/img_avatar_choice/<?= $value['avatarName'] ?>" class="previewAvatar img-fluid shadow" alt="<?= 'Avatar_' . $value['avatarName'] ?>" title="<?= 'Image avatar ' . $value['avatarName'] ?>" />
                    <input type="text" name="avatar" value="<?= $value['id'] ?>" hidden />
                </button>
            </form>
        </div>
    <?php } ?>
</div>