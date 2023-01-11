<?php

require_once ('libs/News.php');

$current_page = 1;
$items_per_page = 5;
$type = 3;

if (isset ($_GET['page']) ) {
    $current_page = $_GET['page'];
}

$items = News::getNewsWithPaginate($items_per_page,$current_page,$type);
$getTypeName = "Oktatás";

?>

<div class="container py-2">
    <?php if(!empty($_SESSION['flash_msg'])):?>
    <div class="alert alert-<?php echo $_SESSION['flash_msg']['type']?>">
        <?php echo $_SESSION['flash_msg']['msg']?>
        <?php unset($_SESSION['flash_msg'])?>
    </div>
    <?php endif;?>
    <div class="d-flex flex-nowrap justify-content-between align-items-center py-4">
        <h1 class="fw-bold">Oktatás</h1>
        <?php if(User::isLogged() && User::can('Hírek szerkesztése')):?>
        <div class="actions">
            <a class="btn btn-success btn-sm" href="<?php echo Route::getRoute('/news/create')?>">Új hír létrehozása</a>
            <form class="form-horizontal d-inline-block" action="<?php echo BASE_URL.'/CsvFunctions.php'?>" method="post" name="upload_excel"
                  enctype="multipart/form-data">
                <div class="form-group">
                    <div class="col-md-4 col-md-offset-4">
                        <input type="submit" name="export" class="btn btn-primary btn-sm" value="Exportálás"/>
                    </div>
                </div>
            </form>
            <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#import-csv">
                Importálás
            </button>
        </div>
        <?php endif; ?>
    </div>
    <div class="product-content">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <?php if(!empty($items)): ?>
                        <?php foreach ($items as $item): ?>
                            <div class="col-12">
                                <div class="product-item border-bottom py-2 d-flex flex-row justify-content-between">
                                    <div class="item-description d-flex flex-row flex-nowrap">
                                        <div class="rounded me-2"
                                            style="background: url(<?php echo './public/images/news/'.$item['image']?>);                         
                                                    background-size: cover;
                                                    min-width: 60px!important;
                                                    height: 60px;"
                                        ></div>
                                        <div class="">
                                            <p class="fw-semibold mb-0"><?php echo $item['title']?></p>
                                            <p class="text-muted news-description"><?php echo $item['description']?></p>
                                            <a class="btn btn-primary btn-sm" href="<?php echo Route::getRoute('/news/'.$item['id'].'/show')?>">Tovább olvasok</a>
                                            <?php if(User::isLogged() && User::can('Hírek szerkesztése')):?>
                                                <a class="btn btn-warning btn-sm" href="<?php echo Route::getRoute('/news/'.$item['id'].'/update')?>">módosítás</a>
                                            <?php endif;?>
                                        </div>
                                    </div>                     
                                </div>
                            </div>
                        <?php endforeach;
                    else: ?>
                        <div>Nem található hír.</div>
                    <?php endif;?>
                </div>
                <div class="tab-content mt-3" id="myTabContent">
                    <div class="tab-pane show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <nav aria-label="Lapozás">
                            <ul class="pagination pagination-sm">
                                <?php
                                $param['type'] = ($type != -1) ? '&type='.$type : '';
                                ?>
                                <li class="page-item <?php if($current_page == 1) echo 'disabled'?>">
                                    <a class="page-link text-secondary" href="<?php echo Route::getRoute('/news').'?page='.($current_page-1).$param['type']?>">Előző</a>
                                </li>
                                <?php for($page = 1; $page <= News::paginateNumberOfPage($items_per_page,$type); $page++): ?>
                                    <?php
                                    $param['page'] = 'page='.$page;
                                    ?>
                                    <li class="page-item <?php if($page == $current_page) echo 'active'?>">
                                        <a class="page-link <?php echo ($page == $current_page) ? 'bg-secondary text-white' : 'text-secondary' ?>" href="<?php echo Route::getRoute('/news').'?'.$param['page'].$param['type']?>"><?php echo $page ?></a>
                                    </li>
                                <?php endfor; ?>
                                <li class="page-item <?php if($current_page >= News::paginateNumberOfPage($items_per_page,$type)) echo 'disabled'?>">
                                    <a class="page-link text-secondary" href="<?php echo Route::getRoute('/news').'?page='.($current_page+1).$param['type']?>" tabindex="-1" aria-disabled="true">Következő</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<?php if(User::isLogged() && User::me()['role_id'] == 2):?>
<div class="modal fade" id="import-csv" tabindex="-1" aria-labelledby="import-csv_label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" action="<?php echo BASE_URL.'/CsvFunctions.php'?>" method="post" name="upload_excel" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="import-csv_label">Termékek importálása</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Bezárás"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">CSV fájl kiválasztása:</label>
                        <input class="form-control form-control-sm" name="csv-file" id="csv-file" type="file">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Mégsem</button>
                    <button type="submit" id="submit" name="csv-import" class="btn btn-primary button-loading" data-loading-text="Betöltés...">Importálás</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endif;?>

