<?php

# Adatbázis kapcsolat létrehozása

# Definiálások
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'hirlap');

# Csatlakozás az adatbázishoz
$GLOBALS['connection'] = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

# Kapcsolat ellenőrzése
if($GLOBALS['connection'] === false){
    die("HIBA: Nem sikerült kapcsolódni az adatbázishoz. " . mysqli_connect_error());
}
?>


