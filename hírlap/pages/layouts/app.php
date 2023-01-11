<?php
    require PATH . '/libs/User.php';
    
    $links = [
        [
            'link' => '/',
            'type' => 'simple', 
            'name' => 'Kezdőlap'
        ],
        [
            'link' => '/most',
            'type' => 'submenu',
            'name' => 'Most',
            'items' => [
                [
                    'link' => '/most/belfold',
                    'name' => 'Belföld'
                ],
                [
                    'link' => '/most/kulfold',
                    'name' => 'Külföld'
                ],
            ]
        ],
        [
            'link' => '/oktatas',
            'type' => 'simple', 
            'name' => 'Oktatás'
        ],
        [
            'link' => '/sport',
            'type' => 'simple', 
            'name' => 'Sport'
        ],
        [
            'link' => '/idojaras',
            'type' => 'simple', 
            'name' => 'időjárás'
        ],
        [
            'link' => '/kapcsolat',
            'type' => 'simple', 
            'name' => 'Kapcsolat'
        ],
    ];

    if(!isset($_SESSION))
    {
        session_start();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?> | Hírportál</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo BASE_URL.'/public/css/app.css'?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        body {
            font-family: 'Titillium Web';
        }
        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-expand-lg bg-white border-bottom shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="<?php echo BASE_URL?>">
                <?php echo APP_NAME ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="main-nav navbar-nav me-auto mb-2 mb-lg-0">
                    <?php foreach ($links as $item): ?>
                        <?php if($item['type'] == 'simple'):?>
                            <li class="nav-item">
                                <a class="nav-link <?php ob_start(); echo (Route::currentRoute() == Route::getRoute($item['link'])) ? 'active' : ''?>" href="<?php echo Route::getRoute($item['link'])?>"><?php echo $item['name']?></a>
                            </li>
                        <?php else:?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo $item['name']?>
                                </a>
                                <ul class="dropdown-menu">
                                    <?php foreach($item['items'] as $sublink):?>
                                        <li><a class="dropdown-item" href="<?php echo Route::getRoute($sublink['link'])?>"><?php echo $sublink['name']?></a></li>
                                    <?php endforeach;?>
                                </ul>
                            </li>
                        <?php endif;?>
                    <?php endforeach;?>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <?php if(User::isLogged()): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo User::me()['first_name'] .' '. User::me()['last_name']?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo Route::getRoute('/profile/'.User::me()['id']) ?>">Profil megtekintése</a></li>
                                <li><a class="dropdown-item" href="<?php echo Route::getRoute('/logout') ?>">Kijelentkezés</a></li>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo Route::getRoute('/login') ?>">Bejelentkezés</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo Route::getRoute('/register') ?>">Regisztráció</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <main class="bg-light">
        <?php include($childView); ?>
    </main>
    <footer class="py-4">
        <div class="container">
            <p class="text-center m-0">
                <small class="text-white fw-semibold">Hírportál @ <?php echo date("Y"); ?>. Weboldalt készítette: Gulyás Gréta, Pete Natália, Kerestély Alexandra, Orosz Bence</small>
            </p>
        </div>
    </footer>

    <!-- JavaScripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>