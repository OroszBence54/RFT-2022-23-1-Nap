<?php

# Roles: 1 = Felhasználó | 2 = Adminisztrátor
require_once ('Role.php');

class User
{
    public static $table = "users";

    public static function me(){
        if(self::isLogged()){
            return $_SESSION['user_data'];
        }
        return null;
    }

    public static function isLogged(){
        if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true){
            return true;
        }
        return false;
    }

    public static function can($permission){
        $user_role = self::me()['role_id'];
        foreach (Role::getRolePermission($user_role)['permissions'] as $item){
            if($permission == $item)
                return true;
        }
        return false;
    }

    public static function create($first_name,$last_name,$email,$role,$password){

        $sql = "INSERT INTO users (first_name, last_name, email, role_id, password) VALUES (?,?,?,?,?)";
        if ($stmt2 = mysqli_prepare($GLOBALS['connection'], $sql)) {
            mysqli_stmt_bind_param($stmt2, "sssis", $param_first_name, $param_last_name, $param_email, $param_role, $param_password);

            $param_first_name = $first_name;
            $param_last_name = $last_name;
            $param_email = $email;
            $param_role = $role;
            $param_password = password_hash($password, PASSWORD_DEFAULT);

            if (mysqli_stmt_execute($stmt2)) {
                header("location: " . Route::getRoute('/login'));
            } else {
                echo "Hoppá. Valami hiba történt. Kérlek próbáld újra.";
            }
            mysqli_stmt_close($stmt2);
        }
    }

    public static function getUser($id){
        $sql = "SELECT * FROM ".User::$table." WHERE id = ?";

        if($stmt = mysqli_prepare($GLOBALS['connection'], $sql)){
            mysqli_stmt_bind_param($stmt, "i", $id);
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){

                    mysqli_stmt_bind_result($stmt, $param_id,$param_first_name, $param_last_name, $param_email, $param_password, $param_role,$param_created_at);
                    if(mysqli_stmt_fetch($stmt)){
                        return [
                            'id' => $param_id,
                            'first_name' => $param_first_name,
                            'last_name' => $param_last_name,
                            'email' => $param_email,
                            'role_id' => $param_role,
                            'hashed_password' => $param_password,
                            'created_at' => $param_created_at
                        ];
                    }
                }
            }
        }
        return null;
    }
    public static function updateUser($input){
        $sql = "UPDATE users SET first_name = ?, last_name = ?, email = ?, password = ?, role_id = ? WHERE id = ?";
        if ($stmt2 = mysqli_prepare($GLOBALS['connection'], $sql)) {
            mysqli_stmt_bind_param($stmt2, "ssssii", $param_first_name, $param_last_name, $param_email, $param_password, $param_role_id, $param_id);

            $param_first_name = $input['first_name'];
            $param_last_name = $input['last_name'];
            $param_email = $input['email'];
            $param_role_id = $input['role_id'];
            $param_id = $input['id'];

            if ($input['password'] != $input['confirm_password']) {
                return null;
            }
                               
            if ($input['password'] != User::getUser($input['id'])['hashed_password']) {
                $param_password = password_hash($input['password'], PASSWORD_DEFAULT);
            }
            else{
                $param_password = $input['password'];
            }
            
            if (mysqli_stmt_execute($stmt2)) {
                $_SESSION['flash_msg'] = [
                    'type' => 'success',
                    'msg' => "A felhasználó sikeresen módosítva lett.",
                ];
            } else {
                $_SESSION['flash_msg'] = [
                    'type' => 'danger',
                    'msg' => "Hoppá. Valami probléma lett a módosítás során. Kérlek próbáld újra.",
                ];
            }
        }
    }
    public static function deleteUser($id){
        $sql = "DELETE FROM users WHERE id = ?";

        if($stmt = mysqli_prepare($GLOBALS['connection'], $sql)) {
            mysqli_stmt_bind_param($stmt, "i", $id);
            if (mysqli_stmt_execute($stmt)) {
                return true;
            }
            else{
                return null;
            }
        }
    }
}