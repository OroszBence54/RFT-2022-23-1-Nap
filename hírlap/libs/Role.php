<?php


class Role
{
    public static function getRolePermission($id){
        $sql = "SELECT
                    p.name
                FROM roles AS r
                INNER JOIN role_permissions AS rp
                ON r.id = rp.role_id
                INNER JOIN permissions AS p  
                ON rp.permission_id = p.id WHERE r.id = ?";

        if($stmt = mysqli_prepare($GLOBALS['connection'], $sql)){
            mysqli_stmt_bind_param($stmt, "i", $id);
            if(mysqli_stmt_execute($stmt)){
                $array['role_id'] = $id;
                $array['permissions'] = [];
                mysqli_stmt_store_result($stmt);
                mysqli_stmt_bind_result($stmt, $permission);

                while (mysqli_stmt_fetch($stmt)) {
                    array_push($array['permissions'],$permission);
                }
                return $array;
            }
            else return null;
        }
        return null;
    }
}