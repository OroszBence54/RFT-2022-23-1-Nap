<?php

require_once ('libs/User.php');
$delete_user = User::deleteUser($params['id']);

if($delete_user){
    $_SESSION['flash_msg'] = [
        'type' => 'success',
        'msg' => "A felhasználó sikeresen törölve lett.",
    ];
    if($params['id'] == User::me()['id']){
        if(!isset($_SESSION)) {session_start();}
        $_SESSION = array();
        session_destroy();   
    }
}
else
    $_SESSION['flash_msg'] = [
        'type' => 'danger',
        'msg' => "Hiba a felhasználó törlése során. Kérlek próbáld újra.",
    ];

header("location:".Route::getRoute('/'));
exit;
