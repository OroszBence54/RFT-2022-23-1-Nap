<?php
require_once ('libs/News.php');
require_once('libs/FormValidator.php');

$param_id = is_numeric($params['id']) ? $params['id'] : 0;

$val = new FormValidator();
$errors = [];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $input = [
        'id' => trim($params['id']),
        'first_name' => trim($_POST['first_name']),
        'last_name' => trim($_POST['last_name']),
        'email' => trim($_POST['email']),
        'password' => trim($_POST['password']),
        'confirm_password' => trim($_POST['confirm_password']),
        'role_id' => trim($_POST['role_id'])
    ];

    $val->name('first_name')->value($input['first_name'])->pattern('alpha')->required();
    $val->name('last_name')->value($input['last_name'])->pattern('alpha')->required();
    $val->name('email')->value($input['email'])->pattern('email')->required();
    $val->name('password')->value($input['password'])->required();
    $val->name('confirm_password')->value($input['confirm_password'])->required();

    if ($val->isSuccess()) {
        User::updateUser($input);
    }
    if (count((array)$val->getErrors()) > 0)
        $errors = array_merge($errors, $val->getErrors());
}

$user = User::getUser($param_id);

if(empty($user)){
    header("location:".Route::getRoute('/'));
    exit;
}

if(($user['id'] != User::me()['id'])){
    if(User::me()['role_id'] != 2){
        header("location:".Route::getRoute('/'));
        exit;
    }
}

?>
<div class="container py-4">
    <h1 class="mb-4 fw-bold"><?php echo $user['first_name'].' '.$user['last_name']?> profiljának szerkesztése</h1>
    <form method="post" action="<?php echo Route::getRoute('/profile/'.$param_id.'/update')?>" >
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
                <div class="py-3">
                    <div class="mb-3">
                        <label for="update-first_name" class="form-label">Vezetéknév:</label>
                        <input type="text" id="update-first_name" name="first_name" value="<?php echo $user['first_name']?>" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="register-last_name" class="form-label">Keresztnév:</label>
                        <input type="text" id="update-last_name" name="last_name" value="<?php echo $user['last_name']?>"class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="update-email" class="form-label">E-mail cím:</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $user['email']?>" id="register-email" required>
                    </div>
                    <div class="mb-3">
                        <label for="role_id" class="form-label">Szerepkör:</label>
                        <select class="form-select" id="role_id" name="role_id">
                            <option <?php echo ($user['role_id'] == 1) ? 'selected' : ''?> value="1">Felhasználó</option>
                            <option <?php echo ($user['role_id'] == 2) ? 'selected' : ''?> value="2">Adminisztrátor</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="update-password" class="form-label">Jelszó:</label>
                        <input type="password" id="update-password" name="password" value="<?php echo $user['hashed_password']?>" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="update-password_confirm" class="form-label">Jelszó megerősítése:</label>
                        <input type="password" id="update-password_confirm" name="confirm_password" value="<?php echo $user['hashed_password']?>" class="form-control" required>
                    </div>
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
                <h5 class="modal-title" id="confirm-delete_label">Felhasználó törlése</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Biztosan törölni szeretnéd a következő felhaszáló: <?php echo $user['first_name'].' '.$user['last_name']?> ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Mégsem</button>
                <a href="<?php echo Route::getRoute('/profile/'.$user['id'].'/delete')?>" class="btn btn-danger">Törlés</a>
            </div>
        </div>
    </div>
</div>