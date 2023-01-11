<?php

require_once('libs/FormValidator.php');

$val = new FormValidator();
$errors = [];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $input = [
        'first_name' => trim($_POST['first_name']),
        'last_name' => trim($_POST['last_name']),
        'email' => trim($_POST['email']),
        'password' => trim($_POST['password']),
        'confirm_password' => trim($_POST['confirm_password'])
    ];

    $val->name('first_name')->value($input['first_name'])->pattern('alpha')->required();
    $val->name('last_name')->value($input['last_name'])->pattern('alpha')->required();
    $val->name('email')->value($input['email'])->pattern('email')->required();
    $val->name('password')->value($input['password'])->required();
    $val->name('confirm_password')->value($input['confirm_password'])->required();

    if ($val->isSuccess()) {
        $sql = "SELECT id FROM users WHERE email = ?";

        if ($stmt = mysqli_prepare($GLOBALS['connection'], $sql)) {

            mysqli_stmt_bind_param($stmt, "s", $param_email);
            $param_email = $input["email"];

            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    array_push($errors, "A megadott e-mail címen már regisztrált valaki.");
                } else {
                    if ($input['password'] != $input['confirm_password']) {
                        array_push($errors, "A megadott jelszavak nem egyeznek.");
                    } else {
                        User::create($input['first_name'],$input['last_name'],$input['email'],1,$input['password']);
                    }
                }

            } else {
                $errors = ["Hoppá! Valami hiba történt. kérlek próbáld újra."];
                exit;
            }
            mysqli_stmt_close($stmt);
        }
    }
    if (count((array)$val->getErrors()) > 0)
        $errors = array_merge($errors, $val->getErrors());

    mysqli_close($GLOBALS['connection']);
}
?>

<div class="container py-4">
    <h1 class="mb-4 fw-bold">Regisztráció</h1>
    <p>Kérlek töltsd ki a mezőket.</p>

    <div class="row">
        <div class="col-12 col-md-8 col-lg-4">
            <?php if(count((array)$errors) > 0) {?>
                <div class="alert alert-danger">
                    <?php foreach($errors as $error) {?>
                        <li><?php echo $error ?></li>
                    <?php }?>
                </div>
            <?php } ?>
            <form action="<?php echo Route::getRoute('/register') ?>" method="post">
                <div class="py-3">
                    <div class="mb-3">
                        <label for="register-first_name" class="form-label">Vezetéknév:</label>
                        <input type="text" id="register-first_name" name="first_name" value="<?php if(!empty($input)) echo $input['first_name']?>" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="register-last_name" class="form-label">Keresztnév:</label>
                        <input type="text" id="register-last_name" name="last_name" value="<?php if(!empty($input)) echo $input['last_name']?>"class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="register-email" class="form-label">E-mail cím:</label>
                        <input type="email" class="form-control" name="email" value="<?php if(!empty($input)) echo $input['email']?>" id="register-email" required>
                    </div>
                    <div class="mb-3">
                        <label for="register-password" class="form-label">Jelszó:</label>
                        <input type="password" id="register-password" name="password" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="register-password_confirm" class="form-label">Jelszó megerősítése:</label>
                        <input type="password" id="register-password_confirm" name="confirm_password" class="form-control" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mb-3" onclick="return validate();">Regisztráció</button>
                <p class="text-muted">
                    <small>Létrehoztál már egy fiókot? <a href="<?php echo Route::getRoute('/login') ?>">Jelentkezz be</a>.</small>
                </p>
            </form>
        </div>
    </div>
</div>