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
-	a hír portál használatához nincs szükség regisztrációra 

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
- Hírlap olvasói --> hírek olvasása 
- Adminisztrátorok --> Hírek felvitele, módosítása, törlése. Hírek mindenszíntű karbantartása, hogy az oldal olvasói a legjobb minőségű híreket tudják igénybe venni naprakészségük fejlesztéséhez. 

### 5.3 Menü hierarchiák

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
- A felhasználó felület böngészőben megjelenő html oldalak formájában érhető el, ezen keresztül tudják a felhasználók a rendszert használni.

### 7.2 Implementációs terv
A webes felület főként HTML valamint CSS nyelven fog készülni. Ezeket a technológiákat amennyire csak lehet külön fájlokba írva készítjük, és úgy fogjuk egymáshoz csatolni a jobb átláthatóság, könnyebb változtathatóság, és könnyebb bővítés érdekében.

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
