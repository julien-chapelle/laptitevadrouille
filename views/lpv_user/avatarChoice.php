<div class="row m-0 mt-1 p-2 d-flex justify-content-center">
    <?php foreach ($avatarList as $value) { ?>
        <div class="col-2 p-0 text-center">
            <form class="p-0 m-0" method="POST" action="">
                <button class="btn p-0 my-2 mx-0 bg-transparent shadow-none" type="submit" name="choiceAvatar">
                    <img src="assets/img_avatar_choice/<?= $value['avatarName'] ?>" class="card-img-top previewAvatar img-fluid shadow" alt="<?= 'Avatar_' . $value['avatarName'] ?>" title="<?= 'Image avatar ' . $value['avatarName'] ?>" />
                    <input type="text" name="avatar" value="<?= $value['id'] ?>" hidden />
                </button>
            </form>
        </div>
    <?php } ?>
</div>