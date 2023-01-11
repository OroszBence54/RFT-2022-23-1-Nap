<?php

$param_id = is_numeric($params['id']) ? $params['id'] : 0;
$user = User::getUser($param_id);

if(empty(User::me())){
    header("location:".Route::getRoute('/'));
    exit;
}

?>

<section class="profile py-3 bg-light">
    <div class="container">
        <div class="row">
            <?php if(!empty($user)) :?>
                <div class="col-md-6">
                    <h1 class="fw-bold mt-3">
                        <?php echo $user['first_name'].' '.$user['last_name'].' profilja'?>
                    </h1>
                    <?php if($user['id'] == User::me()['id']): ?>
                        <a class="btn btn-warning btn-sm" href="<?php echo Route::getRoute('/profile/'.$param_id.'/update') ?>">Profil szerkesztése</a>
                    <?php endif;?>
                    <h5 class="fw-bold mt-2">
                        <?php if($user['role_id'] == 1):
                            echo 'Felhasználó';
                        else:
                            echo 'Adminisztátor';
                        endif;
                        ?>
                    </h5>
                    <p class="mb-1">E-mail cím: <?php echo $user['email']?></p>
                    <p>Létrehozva: <?php echo $user['created_at']?></p>
                </a>
            <?php else:?>
                <h6 class="fw-bold">Hiba: felhasználó nem található!</h6>
            <?php endif;?>
        </div>
    </div>
</section>