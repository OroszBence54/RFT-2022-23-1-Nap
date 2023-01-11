<?php

# Útvonalak beállítása

require('config.php');
require_once('Route.php');

$route = new Route();

# Szimpla útvonalak
$route->add("/", "home.php",'Kezdőlap');
$route->add("/most/belfold", "belfold.php",'Belföld');
$route->add("/most/kulfold", "kulfold.php",'Külföld');
$route->add("/oktatas", "oktatas.php",'Oktatás');
$route->add("/sport", "sport.php",'Sport');
$route->add("/idojaras", "idojaras.php",'Időjárás');
$route->add("/kapcsolat", "kapcsolat.php",'Kapcsolat');

# Resource útvonalak
$route->add("/news", "news/index.php",'Legfrissebb hírek');
$route->add("/news/create", "news/create.php",'Új hír létrehozása');
$route->add("/news/{id}/show", "news/show.php",'Hír megtekintése');
$route->add("/news/{id}/update", "news/update.php",'Hír módosítása');
$route->add("/news/{id}/delete", "news/delete.php",'Hír törlése');

$route->add("/profile/{id}", "profile/index.php",'Profil megtekintése');
$route->add("/profile/{id}/update", "profile/update.php",'Profil szerkesztése');
$route->add("/profile/{id}/delete", "profile/delete.php",'Felhasználó törlése');

# Autentikációs útvonalak
$route->add("/login","auth/login.php",'Bejelentkezés',['guest']);
$route->add("/register","auth/register.php",'Regisztráció',['guest']);
$route->add("/logout","auth/logout.php",'Kijelentkezés');

# Hibakezelő útvonalak
$route->notFound("/errors/404.php","Az oldal nem található.");
$route->add("/404","/errors/404.php",'Az oldal nem található.');
$route->add("/403","/errors/403.php",'Hozzáférés megtadava.');
$route->add("/500","/errors/500.php",'Szerverhiba.');