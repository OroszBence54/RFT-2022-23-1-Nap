<?php

# Weboldal konfigurációja

# Adatbázis kapcsolat
require('database.php');

# Definiálások
define('PATH', (__DIR__));
define('HTTP_TYPE','http');
define('HTTP_ROOT','localhost');
define('BASE_URL', HTTP_TYPE . "://" . HTTP_ROOT . substr(__DIR__, strlen($_SERVER[ 'DOCUMENT_ROOT' ])));

define('APP_NAME','Hírportál');
define('APP_DESCRIPTION','EKE beadandó. (RFT-2022-23-1-Nap)');
define('APP_VERSION','1.0.0');

?>
