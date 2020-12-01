<?php

include VIEW . 'cms/layouts/header.php';
include VIEW . 'cms/layouts/sidebar.php';

?>
<div class="container d-flex justify-content-around ">
    <form class="mt-5 col-md-8" method="post" action="/episode/adminDoEdit" >
        <input type="hidden" name="id" value="<?= $this->viewData->id ?>" />

        <div class="form-group">
            <input value="<?= $this->viewData->title ?>" class="form-control" id="name" name="title" placeholder="Episode Title" required />
        </div>

        <div class="form-group">
            <input value="<?= $this->viewData->img ?>" class="form-control" id="img" name="img" placeholder="Episode Imgae Link" required />
        </div>

        <div class="form-group">
            <input value="<?= $this->viewData->link ?>" class="form-control" id="link" name="link" placeholder="Episode Link" required />
        </div>

        <div class="form-group">
            <textarea row="4" class="form-control" id="iframe" name="iframe" placeholder="Episode Iframe Src" ><?= $this->viewData->iframe ?></textarea>
        </div>

        <button type="submit" class="btn btn-warning mt-3">Edit</button>

    </form>
</div>
<?php

include VIEW . 'cms/layouts/footer.php';
