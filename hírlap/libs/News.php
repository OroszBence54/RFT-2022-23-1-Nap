<?php

class News
{
    public static $table = "news";

    public static function getNews($id){
        $sql = "SELECT * FROM ".News::$table." WHERE id = ? LIMIT 1";

        if($stmt = mysqli_prepare($GLOBALS['connection'], $sql)){
            mysqli_stmt_bind_param($stmt, "i", $id);

            if(mysqli_stmt_execute($stmt)){
                $array = [];
                mysqli_stmt_store_result($stmt);
                mysqli_stmt_bind_result($stmt, $id, $title, $type,$description, $image, $created_at);

                while (mysqli_stmt_fetch($stmt)) {
                    $array['id'] = $id;
                    $array['title'] = $title;
                    $array['type'] = $type;
                    $array['description'] = $description;
                    $array['image'] = $image;
                    $array['created_at'] = $created_at;
                    return $array;
                }
            }
            else return null;
        }
        else return null;
    }
    public static function getNewsWithPaginate($items_per_page,$page,$type){

        if($page > 0 && $page <= News::paginateNumberOfPage($items_per_page,$type)){
            $page_first_result = ($page-1) * $items_per_page;
            if($type == -1){
                $sql = "SELECT * FROM ".News::$table." LIMIT " . $page_first_result . "," . $items_per_page;

            }
            else{
                $sql = "SELECT * FROM ".News::$table." WHERE type=".$type." LIMIT " . $page_first_result . "," . $items_per_page;
            }
            if($stmt = mysqli_prepare($GLOBALS['connection'], $sql)){
                if(mysqli_stmt_execute($stmt)){
                    $array = [];
                    mysqli_stmt_store_result($stmt);
                    mysqli_stmt_bind_result($stmt, $id, $title, $type, $description, $image,$created_at);

                    while (mysqli_stmt_fetch($stmt)) {
                        $data = [];
                        $data['id'] = $id;
                        $data['title'] = $title;
                        $data['description'] = $description;
                        $data['type'] = $type;
                        $data['image'] = $image;
                        $data['created_at'] = $created_at;
                        array_push($array,$data);
                    }
                    return $array;
                }
                else return null;
            }
            else return null;
        }
        else return null;
    }
    public static function paginateNumberOfPage($items_per_page,$type){
        if($type == -1){
            $query = "SELECT * FROM ".News::$table;
        }
        else{
            $query = "SELECT * FROM ".News::$table." WHERE type=".$type;
        }
        $result = mysqli_query($GLOBALS['connection'], $query);
        $number_of_result = mysqli_num_rows($result);
        return ceil ($number_of_result / $items_per_page);
    }

    public static function getTypes(){
        $sql = "SELECT * FROM news_types";

        if($stmt = mysqli_prepare($GLOBALS['connection'], $sql)){
            if(mysqli_stmt_execute($stmt)){
                $array = [];
                mysqli_stmt_store_result($stmt);
                mysqli_stmt_bind_result($stmt, $id, $name);

                while (mysqli_stmt_fetch($stmt)) {
                    $data = [];
                    $data['id'] = $id;
                    $data['name'] = $name;
                    array_push($array,$data);
                }
                return $array;
            }
            else return null;
        }
    }

    public static function getType($id){
        $sql = "SELECT * FROM news_types WHERE id=? LIMIT 1";

        if($stmt = mysqli_prepare($GLOBALS['connection'], $sql)){
            mysqli_stmt_bind_param($stmt, "i", $id);
            if(mysqli_stmt_execute($stmt)){
                $array = [];
                mysqli_stmt_store_result($stmt);
                mysqli_stmt_bind_result($stmt, $id, $name);

                while (mysqli_stmt_fetch($stmt)) {
                    $array['id'] = $id;
                    $array['name'] = $name;
                }
                return $array;
            }
            else return null;
        }
    }

    public static function deleteNews($id){
        $sql = "DELETE FROM news WHERE id = ?";

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

    public static function updateNews($input){
        $sql = "UPDATE news SET title = ?, description = ?, type = ? WHERE id = ?";
        if ($stmt2 = mysqli_prepare($GLOBALS['connection'], $sql)) {
            mysqli_stmt_bind_param($stmt2, "ssii", $param_title, $param_description, $param_type, $param_id);

            $param_title = $input['title'];
            $param_description = $input['description'];
            $param_type = $input['type'];
            $param_id = $input['id'];

            if (mysqli_stmt_execute($stmt2)) {
                $_SESSION['flash_msg'] = [
                    'type' => 'success',
                    'msg' => "A hír sikeresen módosítva lett.",
                ];
            } else {
                $_SESSION['flash_msg'] = [
                    'type' => 'danger',
                    'msg' => "Hoppá. Valami probléma lett a módosítás során. Kérlek próbáld újra.",
                ];
            }
        }
    }
    public static function createNews($input){
        $sql = "INSERT INTO news (title,description,type,image,created_at) VALUES(?,?,?,?,?)";
        if ($stmt2 = mysqli_prepare($GLOBALS['connection'], $sql)) {
            mysqli_stmt_bind_param($stmt2, "sssss", $param_title, $param_description, $param_type, $param_image, $param_created_at);

            $param_title = $input['title'];
            $param_description = $input['description'];
            $param_type = $input['type'];
            $param_image = $input['image'];
            $param_created_at = isset($input['created_at']) ? $input['created_at'] : date('Y.m.d H:i:s');

            if (mysqli_stmt_execute($stmt2)) {
                $_SESSION['flash_msg'] = [
                    'type' => 'success',
                    'msg' => "A hír sikeresen létrehozva.",
                ];
            } else {
                $_SESSION['flash_msg'] = [
                    'type' => 'danger',
                    'msg' => "Hoppá. Valami probléma lett a létrehozás során. Kérlek próbáld újra.",
                ];
            }
        }
    }
}