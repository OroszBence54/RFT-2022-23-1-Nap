<?php
require_once ('libs/News.php');
require_once('libs/FormValidator.php');

$param_id = is_numeric($params['id']) ? $params['id'] : 0;

$val = new FormValidator();
$errors = [];
$news = News::getNews($param_id);
$type = News::getType($news['type']);

if(empty($news)){
    header("location:".Route::getRoute('/'));
    exit;
}

?>
<div class="container py-4">
    <h1 class="mb-4 fw-bold"><?php echo $news['title'] ?></h1>
    <p>
        <b><?php echo $type['name']?> | <?php $date=date_create($news['created_at']);
                echo date_format($date,"Y.m.d - H:i:s"); ?></b>
    </p>
    <hr>
    <p><?php echo $news['description'] ?></p>
    <img class="w-50" src="<?php echo BASE_URL.'/public/images/news/'.$news['image']?>"></img>
</div>
