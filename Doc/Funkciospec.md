# Funkcionális specifikáció

## 1. A rendszer céljai és nem céljai
A fejlesztés célja egy független hírportál ahol a legfrissebb belföldi és külföldi hírekkel tájékoztatja az olvasóit.
Magyarországon nagyon sokakat érdekel a sport, az oktatás, a belföldi és külföldi hírek, ezért törekedtünk arra, hogy minden kategóriából a legérdekesebb híreket jelenítsük meg a weboldalon. 
A weboldal célja, hogy a hírek olvasása révén az emberek tájékozottabbak legyenek az őket érdekelt, foglalkoztatott témában.
További célja a honlapnak, hogy könnyen elérhető, és használható legyen bármilyen korosztálynak. A weboldalnak nem célja, hogy bármilyen politikai állást foglaljon.Projektünk célja még a szórakoztatás, egy átlátható weblapon keresztül. Weboldalunk nem célozza meg a hirdetések használatát.

## 2. Használati esetek
- Weboldal betöltése -> Hírek megtekintése
- Weboldal betöltése -> Hírek szűrése -> Hírek megtekintése

A rendszer használói a következők: olvasó, adminisztrátor

**A rendszernek a következő funkciókat kell ellátnia:**

- A menük kiválasztásával betöltődik az adott kategóriához kapcsolódó hírek 
- A hír címére kattintva érjük el a cikk tartalmát
- A "tovább olvasok" gombra kattintva érjük el a cikk tartalmát
- A regisztráció gomb segítségével tudunk regisztrálni
- Regisztráció után pedig lehetőség van az oldalra bejelentkezni
- Adminisztátorként lehetőségünk van híreket feltölteni, módosítani, törölni
- Bejelentkezés után a megadott névre kattintva meg tudjuk tekinteni a profilunkat, illetve szerkeszteni azt 

**Előfeltételek:**

- Ahhoz, hogy a weboldalt használni tudjuk nincs szükség előfeltételre
- Bejelentkezés nélkül is mindenki számára elérhető az oldal tartalma

## 4. Forgatókönyvek

A navigációs sáv minden oldalon megtalálható. Lehetőségünk van ebben a sávban a menüpontok közül választani.

**Az oldal 6 menüpontot tartalmaz és 2 almenüt amelyet a „most” kategórián belül tudunk elérni:**

- **Kezdőlap:**

    A *Kezdőlap*, statikus oldal jelenik meg minden felhasználó számára legelőször, ezen az oldalon található az oldal használatával kapcsolatos szöveg.
    
- **Most:**

    Ebben a kategóriában a legfrissebb híreket olvashatjuk.
    
    Az adott menüpont kiválasztásával megjelenik **kettő almenü**:
    
     - **Belföld:**
     
        Az oldalon a legfrissebb belföldi híreket találjuk.
        
     - **Külföld:**
     
        Ez a menüpont az aktuális külföldi híreket ismerteti az olvasókkal.
        
- **Oktatás:**

    Az oktatás iránt érdekelt olvasók számára is található tartalom ebben a menüpontban

    
- **Sport:**

    Magyarországon nagy szerepet játszik a sport. Gondoltunk azokra az olvasókra is, akiket ez a téma érdekelhet. 
    
- **Időjárás:**

    Erre a menüpontra kattintva az aktuális heti időjárást láthatjuk. Az előrejelzéseket napokra lebontva tekinthetjük meg, pár szóval összefoglalva.
    
    Az alcím az aktuális napra jellemző időjárást írja le.
    
- **Kapcsolat:**

    A weboldal ezen részén egy űrlap található.  Az "e-mail cím" kitöltése után megadhatjuk észrevételeinket a weboldallal kapcsolatban az üzemeltető felé

    
 
      
