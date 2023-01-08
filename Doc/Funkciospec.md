# Funkcionális specifikáció

## 1. A rendszer céljai és nem céljai
A fejlesztés célja egy független hírportál ahol a legfrissebb belföldi és külföldi hírekkel tájékoztatja az olvasóit.
Magyarországon nagyon sokakat érdekel a sport, az oktatás, a belföldi és külföldi hírek, ezért törekedtünk arra, hogy minden kategóriából a legérdekesebb híreket jelenítsük meg a weboldalon. 
A weboldal célja, hogy a hírek olvasása révén az emberek tájékozottabbak legyenek az őket érdekelt, foglalkoztatott témában.
További célja a honlapnak, hogy könnyen elérhető, és használható legyen bármilyen korosztálynak. A weboldal nem célja, hogy bármilyen politikai állást foglaljon.

## 2. Használati esetek
A rendszer használói a következők: olvasó, adminisztrátor

**A rendszernek a következő funkciókat kell ellátnia:**

- A menük kiválasztásával betöltődik az adott kategóriához kapcsolódó hírek 
- A kapcsolat menüpontban lehetőség van kapcsolatba lépni az oldal tulajdonosával
- Bal felső sarokban található kereső mezővel tudunk híreket keresni 

**Előfeltételek:**

- Ahhoz, hogy a weboldalt használni tudjuk nincs szükség előfeltételre
- Bejelentkezés nélkül is mindenki számára elérhető az oldal tartalma

## 3. Forgatókönyvek

A navigációs sáv minden oldalon megtalálható. Lehetőségünk van ebben a sávban a menüpontok közül választani.

**Az oldal 6 menüpontot tartalmaz és 2 almenünt amelyet a „most” kategórián belül tudunk elérni:**

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

    Azokat az olvasókat, akiket az oktatás foglalkoztat, számukra is található tartalom ebben a menüpontban.
    
- **Sport:**

    Magyarországon nagy szerepet játszik a sport. Gondoltunk azokra az olvasókra is, akiket ez a téma érdekelhet. 
      
