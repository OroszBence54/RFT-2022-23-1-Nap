<?php
require_once('libs/FormValidator.php');
$val = new FormValidator();
$error = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $val->name('email')->value($_POST['email'])->pattern('email')->required();
    $val->name('password')->value($_POST['password'])->required();

    if ($val->isSuccess()) {
        $sql = "SELECT * FROM users WHERE email = ?";
        if($stmt = mysqli_prepare($GLOBALS['connection'], $sql)){

            mysqli_stmt_bind_param($stmt, "s", $param_email);
            $param_email = $_POST['email'];

            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){
                    mysqli_stmt_bind_result($stmt,$id,$first_name,$last_name,$email,$hashed_password,$role_id,$created_at);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($_POST['password'], $hashed_password)){

                            if(!isset($_SESSION))
                            {
                                session_start();
                            }
                            $_SESSION["logged_in"] = true;
                            $_SESSION["user_data"]["id"] = $id;
                            $_SESSION["user_data"]["first_name"] = $first_name;
                            $_SESSION["user_data"]["last_name"] = $last_name;
                            $_SESSION["user_data"]["role_id"] = $role_id;
                            $_SESSION["user_data"]["hashed_password"] = $hashed_password;
                            $_SESSION["user_data"]["created_at"] = $created_at;
                            $_SESSION["user_data"]["email"] = $email;

                            header("location:".Route::getRoute('/'));
                        } else{
                            //Helytelen jelszó
                            $error = "Hibás felhasználónév vagy jelszó.";
                        }
                    }
                } else{
                    //Nem található rekord
                    $error = "Hibás felhasználónév vagy jelszó.";
                }
            } else{
                $error = "Hoppá! Valami hiba történt. Próbáld meg újra.";
            }
            mysqli_stmt_close($stmt);
        }
        mysqli_close($GLOBALS['connection']);

    } else {
         $error = "Hibás felhasználónév vagy jelszó.";
    }
}

?>

<div class="container py-4">
    <h1 class="mb-4 fw-bold">Bejelentkezés</h1>
    <p>Kérlek töltsd ki a mezőket.</p>
    <div class="row">
        <div class="col-12 col-md-8 col-lg-4">
            <form action="<?php  echo Route::getRoute('/login') ?>" method="post">
                <div class="py-3">
                    <div class="mb-3">
                        <label for="login-email" class="form-label">E-mail cím:</label>
                        <input type="email" class="form-control <?php if(!empty($error)) echo 'is-invalid'?>" name="email" id="login-email" aria-describedby="login-email-help" required>
                        <?php if(empty($error)) {?>
                            <div id="login-email-help" class="form-text">
                                <small>Soha nem osztjuk meg az e-mail címedet másokkal.</small>
                            </div>
                        <?php } else {?>
                            <div id="login-email-help" class="invalid-feedback">
                                <small><?php echo $error ?></small>
                            </div>
                        <?php }?>
                    </div>
                    <div class="mb-3">
                        <label for="login-password" class="form-label">Jelszó:</label>
                        <input type="password" id="login-password" name="password" class="form-control">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" id="login-remember" class="form-check-input">
                        <label class="form-check-label" for="login-remember">Jegyezz meg</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-3">Bejelentkezés</button>
                <p class="text-muted">
                    <small>Még nincs fiókod? <a href="<?php echo Route::getRoute('/register') ?>">Regisztrálj most</a>.</small>
                </p>
            </form>
        </div>
    </div>
</div>