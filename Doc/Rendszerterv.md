# Rendszerterv

***Bevezetés***

A dokumentum Pete Natália, Gulyás Gréta, Kerestély Alexandra és Orosz Bence közös projektje keretein belül létrejött internetes weboldalt specifikálja.

## 1. A rendszer célja
 - A rendszer célja egy olyan független hírportál ahol a legfrissebb belföldi és külföldi hírekkel tájékoztatja az olvasóit
 - Az olvasók tájékozottságának nővelése 

## 2. Projektterv

### 2.1 Projektszerepkörök, felelősségek
szerepkörök:
- Product owner: Tajti Tibor 
- Scrum master: Pete Natália, Orosz Bence

Üzleti szereplők (Stakeholders):
- Megrendelő: Eger város önkormányzata

felelősségek: 
- Scrum master: feladatuk: kommunikáció a csapat tagjaival, az elvégzett és a következő feladatok átbeszélése, akadályok (impediment) feltárása és megoldása.

### 2.2 Projektmunkások és felelősségeik

***Frontend*** (ha készül):
- Pete Natália

A felhasználók által elérhető felület kialakítása, amin keresztűl a backend által biztosított szolgáltatások igénybevételével elérhetőek a rendszerben a felhasználók rendelkezésére álló funkciók.

***Backend*** (ha készül): 
- Orosz Bence 

Feladatuk az adatbázis szerkezetek kialakítása, funkciók létrehozása, a frontend kiszolgálása adatokkal.

***Adatbázis*** (ha készül):
- Gulyás Gréta
- Kerestély Alexandra 
- Pete Natália
- Orosz Bence

***Tesztelés:***
- Gulyás Gréta
- Kerestély Alexandra 

A szoftverekben meglévő hibák felderítése még az üzembe helyezés előtt. 

### 2.3 Mérföldkövek

- A prototipus weboldal bemutatása
- Az elkészült weboldal átadása 

## 3. Üzleti folyamatok modellje

### 3.1 Üzleti szereplők
- Felhasználók (a hírlap olvasói)
- Adminisztrátorok 

### 3.2 Üzleti folyamatok 
- az esetleges hibák kijavítása 
- a kapcsolat menüpontban lehetőség van kapcsolatba lépni az oldal tulajdonosával
-	a menük kiválasztásával betöltődik az adott kategóriához kapcsolódó hírek és ki tudjuk választani a számunkra megfelelőt 
-	korrekciós feladatok
-	a hír portál használatához nincs szükség regisztrációra, de lehetőség van rá 
-	az adminisztrátorok regisztráció után tudnak híreket feltölteni, törölni, szerkeszteni és az oldalt kezelni az elvárásoknak megfelelően
-	adminisztrátort regisztráció útján lehet hozzá adni 

## 4. Követelmények

### 4.1 Funkcionális követelmények  
- Internetes böngészőben való hibátlan működés, böngésző típustól függetlenül
- Az hírek kategóriánkénti tökéletes megjelenítése, szűrése
- Kevés reklám -valamint marketing célú hírdetés megjelenítése
- Politika pártatlanság érvényesülése a cikkekben 

### 4.2 Nem funkcionális követelmények 
- Használhatósági követelmények --> a fejelsztésre kerülő weboldal a felhasználók számára könnyen tanulható és használható, minimális 
informatikai tudással is könnyen kezelhető, ezáltal minden korosztály számára használható. Gyors működés, könnyű átlathatóság. 

### 4.3 Törvényi előírások, szabványok
- Felnőtt tartalmú hírek  megfelelő szűrése

## 5. Funkcionális terv

### 5.1 Rendszerszereplők
A rendszerünk kapcsán két rendszerszereplő csoportot különböztetünk meg.
- Felhasználók (hírportál olvasói)
- Adminisztrátorok. Az adminisztrátorok több jogosultsággal rendelkeznek, mint a hírlap olvasói.

### 5.2 Rendszerhasználati esetek és lefutásaik 
<img width="382" alt="felhaszn-reg" src="https://user-images.githubusercontent.com/121830751/212468160-b83e720c-d348-47b1-9f88-3e3eb6318ee2.png">
<img width="447" alt="profil-modostias" src="https://user-images.githubusercontent.com/121830751/212468120-20277def-4266-4c18-9362-eea7b45adf8a.png">
<img width="382" alt="hir-letrehozasa" src="https://user-images.githubusercontent.com/121830751/212468123-1a7a4a3b-0cd9-499b-8574-fd11eb8e5888.png">
<img width="467" alt="hir-modositasa" src="https://user-images.githubusercontent.com/121830751/212468139-07b680c2-341a-4138-aa14-6209904d7a77.png">
<img width="392" alt="hir-torlese" src="https://user-images.githubusercontent.com/121830751/212468142-62709c8f-cd02-4a25-b744-bd2a6ef41188.png">
<img width="678" alt="hir-bongeszes" src="https://user-images.githubusercontent.com/91139052/212485294-fa651a31-2aca-4932-b228-d054177ec0b3.png">




### 5.3 Menü hierarchiák
- Kezdőoldal
- Hírek kategóriánkénti felsorolása
- Bejelentkezés/ Regisztráció

## 6. Fizikai környezet

### 6.1 Fizikai környezet
Kliens környezete: 
- Eszköz: Asztali számítógép 
- Operációs rendszer: Windows 7 vagy nagyobb - 
- Szükséges applikációk: Chrome, Firefox, Edge, Safari böngésző 
- Konfiguráció: nem specifikus.

Szerver: 
- Eszköz: Kliens Specifikáció: Klienssel ekvivalens 
- Operációs rendszer: Windows 7 vagy nagyobb


### 6.2 Vásárolt szoftver komponensek és külső rendszerek
Nincsenek vásárolt szoftver komponensek és külső rendszerek. 

### 6.3 Hardver és hálózati topológia
- Az alkalmazás web platformra készül.
- Internet böngészőn keresztül érhető el bárki számára a felhasználó felület.
- Szerverhez kapcsolódnak: kliens gépek a helyi hálózaton és az interneten bárki számára elérhető honlap 

## 7. Tervek

### 7.1 Architekturális terv
- A frontend elkészítéséhez HTML-t, CSS-t használunk. 
- A projekt tartalmaz adatbázist, amelyet adatbázis kezelővel hoztunk létre. 
- A felhasználó felület böngészőben megjelenő html oldalak formájában érhető el, ezen keresztül tudják a felhasználók a rendszert használni.

### 7.2 Implementációs terv
- A webes felület főként HTML valamint CSS nyelven fog készülni. Ezeket a technológiákat amennyire csak lehet külön fájlokba írva készítjük, és úgy fogjuk egymáshoz csatolni a jobb átláthatóság, könnyebb változtathatóság, és könnyebb bővítés érdekében.
- Külön fájlokba készülnek a dokumentációk is. 

### 7.3 Telepítési terv 
A webes alkalmazás telepítés nélkül futtatható, bármely webböngészőn keresztül, belső hálózaton.

### 7.4 Karbantartási terv 
A weboldal minimális karbantartást igényel, amely a következőkre bontható:

- Ellenőrizni kell, hogy a jövőben kiadott böngésző frissítésekkel működőképes marad-e.
- A szerver folyamatos karbantartása és megfelelő kezelése.
- A weboldal karbantartása. 

Valamint: 
- Corrective Maintenance: A felhasználók által felfedezett és "user reportban" (kapcsolat fülön) elküldött hibák kijavítása.
- Adaptive Maintenance: A weboldal naprakészen tartása és finomhangolása.
- Perfective Maintenance: A weboldal hosszútávú használata érdekében végzett módosítások, új funkciók, a weboldal teljesítményének és működési megbízhatóságának javítása.

## 8. Architekturális terv

Az Apache http szerveren futó alkalmazás szolgálja ki webes felületen keresztül a rendszer felhasználóit.
A felhasználó felület böngészőben megjelenő html oldalak formájában érhető el, ezen keresztül tudják a felhasználók a rendszert használni.
Az adatok tárolása a MySql adatbázis szerveren történik.

### 8.1 Architekturális tervezési minta

Az alkalmazás elkészítése során modelleket, routeokat használunk.

### 8.2 Az alkalmazás rétegei, fő komponensei, ezek kapcsolatai

A backend a webszereveren fut. Kliens a böngészőből elérhető a felhasználók számára.

### 8.3 Változások kezelése

Minden változás lekezelése szerver oldalon történik, a kliens oldalon nincs szükség új komponensek telepítésére.

## 9. Adatbázisterv  
  
**Felhasználó egyedet** jellemzi:  
- Azonosító, ami elsődleges kulcs,
- Vezetéknév,
- Keresztnév,
- Jelszó,  
- Jogosultság azonosító, ami idegen kulcs,
- Létrehozás dátuma
 
**Hírek egyedet** jellemzi:  
- Azonosító, ami elsődleges kulcs,  
- Cím,  
- Hír típusa, ami idegen kulcs,  
- Szöveg,   
- Borítókép linkje,  
- Létrehozás dátuma  

**Hír típus egyedet** jellemzi:  
- Azonosító, ami elsődleges kulcs,  
- Név

**Jogosultság egyedet** jellemzi:  
- Azonosító, ami elsődleges kulcs,  
- Név

**Engedélyek egyedet** jellemzi:  
- Azonosító, ami elsődleges kulcs,
- Név

**Jogosultság-engedély egyedet** jellemzi:  
- Azonosító, ami elsődleges kulcs,
- Jogosultság azonosító, ami idegen kulcs,
- Engedély azonosító, ami idegen kulcs

### 9.1 Logikai adatmodell 

### Adatbázis séma

![adatbázis-felépítése](https://user-images.githubusercontent.com/121830751/212468787-278b27c8-05a5-459b-bf12-06b5623efdfc.JPG)

### 9.2 Tárolt eljárások 

### 9.3 Fizikai adatmodellt legeneráló SQL szkript   

``` 
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `news_types` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `news_types` (`id`, `name`) VALUES
(1, 'Most - Belföld'),
(2, 'Most - Külföld'),
(3, 'Oktatás'),
(4, 'Sport');

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `permissions` (`id`, `name`) VALUES
(1, 'Felhasználók szerkesztése'),
(2, 'Hírek szerkesztése'),
(3, 'Szerepkörök szerkesztése'),
(4, 'Jogosultságok szerkesztése'),
(6, 'Kategóriák létrehozása');

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Felhasználó'),
(2, 'Adminisztrátor');

CREATE TABLE `role_permissions` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `role_permissions` (`id`, `role_id`, `permission_id`) VALUES
(8, 2, 1),
(9, 2, 2),
(10, 2, 3),
(11, 2, 4),
(13, 2, 6);

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `role_id`, `created_at`) VALUES
(10, 'Gulyás', 'Gréta', 'ggretus07@gmail.com', '$2y$10$AHq92kz3FGjb0Cmf6S9bRuldIuC8A9vD3MxKHTWJvbDGBmkf063Ku', 2, '2023-01-11 13:17:40'),

ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_ibfk_1` (`type`);

ALTER TABLE `news_types`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `role_permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_permissions_ibfk_1` (`role_id`),
  ADD KEY `role_permissions_ibfk_2` (`permission_id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`email`),
  ADD KEY `users_ibfk_1` (`role_id`);

ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

ALTER TABLE `news_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `role_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`type`) REFERENCES `news_types` (`id`);

ALTER TABLE `role_permissions`
  ADD CONSTRAINT `role_permissions_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `role_permissions_ibfk_2` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`);

ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;
```


