<?php include VIEW . 'layouts/header.php' ?>

<div class="container">
    <div class="row">
        
        <?php foreach ($this->viewData['episodes'] as $episode): ?>

        <div class="col-md-6 mt-2 col-lg-4 d-flex flex-column justify-contern-center">
            <a href="<?= $episode->link ?>" target="_blank" >
                <img src="<?= $episode->img ?>" class="img-fluid col-12">
            </a>
            <div class="row mt-2">
                <div class="col-12">
                    <h5 class="p-2 ml-2"> <?= $episode->title ?></h5>
                    <div class="text-center">
                    <a class="btn btn-warning text-center ml-2 mb-5 " href="<?= $episode->link ?>" target="_blank" > 
                        Listen Now
                    </a>
                    </div>
                </div>
            </div>
        </div>

        <?php endforeach; ?>
    
    </div>
</div>

<?php include VIEW . 'layouts/footer.php' ?>