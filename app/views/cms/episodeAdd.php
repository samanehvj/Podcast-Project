<?php

include VIEW . 'cms/layouts/header.php';
include VIEW . 'cms/layouts/sidebar.php';

?>
<div class="container d-flex justify-content-around ">
    <form class="mt-5 col-md-8" method="post" action="/episode/adminDoAdd" >
        

        <div class="form-group">
            <input  class="form-control" id="title" name="title" placeholder="Episode Title" required />
        </div>

        <div class="form-group">
            <input  class="form-control" id="img" name="img" placeholder="Episode Imgae Link" required />
        </div>


        <div class="form-group">
            <input  class="form-control" id="link" name="link" placeholder="Episode Link" required />
        </div>

        <div class="form-group">
            <textarea row="4" class="form-control" id="iframe" name="iframe" placeholder="Episode Iframe Src"  ></textarea>
        </div>



        <button type="submit" class="btn btn-success mt-3">Save</button>

    </form>
</div>
<?php

include VIEW . 'cms/layouts/footer.php';
