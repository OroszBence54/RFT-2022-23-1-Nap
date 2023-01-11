<?php

require_once ('libs/News.php');
$delete_news = News::deleteNews($params['id']);

if (!(User::isLogged() && User::can('Hírek szerkesztése'))) {
    header('location: '.Route::getRoute('/news'));
    exit;
}

if($delete_news)
    $_SESSION['flash_msg'] = [
        'type' => 'success',
        'msg' => "A hír sikeresen törölve lett.",
    ];
else
    $_SESSION['flash_msg'] = [
        'type' => 'danger',
        'msg' => "Hiba a hír törlése során. Kérlek próbáld újra.",
    ];

header("location:".Route::getRoute('/news'));
exit;
