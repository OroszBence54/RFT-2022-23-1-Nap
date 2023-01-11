<?php
require_once ('libs/News.php');
require_once('libs/FormValidator.php');

$param_id = is_numeric($params['id']) ? $params['id'] : 0;

$val = new FormValidator();
$errors = [];

if (!(User::isLogged() && User::can('Hírek szerkesztése'))) {
    header('location: '.Route::getRoute('/news'));
    exit;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $input = [
        'title' => trim($_POST['title']),
        'description' => trim($_POST['description']),
        'type' => trim($_POST['type']),
        'id' => $param_id
    ];

    $val->name('title')->value($input['title'])->required();
    $val->name('description')->value($input['description'])->required();

    if ($val->isSuccess()) {
        News::updateNews($input);
    }
    if (count((array)$val->getErrors()) > 0)
        $errors = array_merge($errors, $val->getErrors());
}

$news = News::getNews($param_id);

if(empty($news)){
    header("location:".Route::getRoute('/'));
    exit;
}

?>
<div class="container py-4">
    <h1 class="mb-4 fw-bold">Hír szerkesztése</h1>
    <form method="post" action="<?php echo Route::getRoute('/news/'.$param_id.'/update')?>" >
        <div class="row">
            <div class="col-12 col-md-8 col-lg-4">
                <?php if(!empty($_SESSION['flash_msg'])):?>
                    <div class="alert alert-<?php echo $_SESSION['flash_msg']['type']?>">
                        <?php echo $_SESSION['flash_msg']['msg']?>
                        <?php unset($_SESSION['flash_msg'])?>
                    </div>
                <?php endif;?>
                <?php if(count((array)$errors) > 0) {?>
                    <div class="alert alert-danger">
                        <?php foreach($errors as $error) {?>
                            <li><?php echo $error ?></li>
                        <?php }?>
                    </div>
                <?php } ?>
                <div class="mb-3">
                    <label for="title" class="form-label">Cím:</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?php echo $news['title']?>">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Leírás:</label>
                    <textarea class="form-control" rows="10" cols="50" id="description" name="description" required><?php echo $news['description']?></textarea>
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Kategória:</label>
                    <select class="form-select" id="type" name="type">
                        <?php foreach (News::getTypes() as $type):?>
                            <?php if($type['id'] == $news['type']):?>
                                <option selected value="<?php echo $type['id']?>"><?php echo $type['name']?></option>
                            <?php else:?>
                                <option value="<?php echo $type['id']?>"><?php echo $type['name']?></option>
                            <?php endif;?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success me-2">Mentés</button>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirm-delete">
            Törlés
        </button>
    </form>
</div>

<div class="modal fade" id="confirm-delete" tabindex="-1" aria-labelledby="confirm-delete_label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirm-delete_label">Termék törlése</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Biztosan törölni szeretnéd a következő terméket: <?php echo $news['title']?> ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Mégsem</button>
                <a href="<?php echo Route::getRoute('/news/'.$news['id'].'/delete')?>" class="btn btn-danger">Törlés</a>
            </div>
        </div>
    </div>
</div>