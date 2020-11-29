<?php

include VIEW . 'cms/layouts/header.php';
include VIEW . 'cms/layouts/sidebar.php';

?>
<div class="table-responsive">
    <a href="/episode/adminAdd" class="btn btn-success m-5">Add episode</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($this->viewData['episodes'] as $episode) : ?>
                <tr>
                    <td><?= $episode->id ?></td>
                    <td><?= $episode->title ?></td>
                    <td><img height="70px" src="<?= $episode->img ?>" /></td>
                    <td>
                        <a href="/episode/adminEdit/<?= $episode->id ?>" class="btn btn-warning">Edit</a>
                        <a href="/episode/adminDelete/<?= $episode->id ?>" class="btn btn-danger">Delete</a> </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php

include VIEW . 'cms/layouts/footer.php';
