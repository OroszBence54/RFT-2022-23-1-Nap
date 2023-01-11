<?php

require('config.php');
require('Route.php');
require_once ('libs/News.php');

session_start();

if(isset($_POST["export"])){
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=Hírek.csv');
    $output = fopen("php://output", "w");
    fputcsv($output, array('Azonosító', 'Cím', 'Típus', 'Leírás', 'Kép', 'Létrehozva'));
    $query = "SELECT * from news";
    $result = mysqli_query($GLOBALS['connection'], $query);
    while($row = mysqli_fetch_assoc($result))
    {
        fputcsv($output, $row);
    }
    fclose($output);
}

if(isset($_POST["csv-import"])){

    $filename=$_FILES["csv-file"]["tmp_name"];
    if($_FILES["csv-file"]["size"] > 0)
    {
        $file = fopen($filename, "r");
        $count = 0;
        while (($item = fgetcsv($file, 10000, ",")) !== FALSE)
        {
            $data = [];
            $data['title'] = $item[0];
            $data['type'] = $item[1];
            $data['description'] = $item[2];
            $data['image'] = $item[3];
            $data['created_at'] = $item[4];

            News::createNews($data);
            $count++;
        }

        $_SESSION['flash_msg'] = [
            'type' => 'success',
            'msg' => $count." termék sikeresen feltöltve.",
        ];
        fclose($file);
        header("Location: ".Route::getRoute('/news'));
        exit;
    }
}