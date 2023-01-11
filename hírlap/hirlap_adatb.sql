-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 11, 2023 at 02:20 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hirlap`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `type`, `description`, `image`, `created_at`) VALUES
(76, 'A magyarok kétharmada rezsicsökkentett árat fizet az áramért', 1, 'A magyar lakosság kétharmada a kormány által nyáron meghatározott átlagfogyasztás alatti mennyiségű villamos energiát használ, így rezsicsökkentett árat fizet érte – derült ki az MVM legfrissebb felméréséből.\r\nMint ismeretes, július 13-án a kormány bejelentette, hogy hozzányúl a rezsicsökkentés 2013 óta fennálló rendszeréhez. Egy hét pontból álló rendelkezéscsomagot fogadtak el, amely augusztusban lépett életbe. A legfontosabb intézkedés, hogy aki a lakossági átlag felett fogyaszt, azt arra kérték, hogy mérsékelje fogyasztását, vagy fizesse meg a piaci árat.\r\n\r\nA kormány által meghatározott lakossági átlag a villamos energia esetében 210 kilowattóra havonta, azaz éves szinten 2523 kWh, ekkora fogyasztásra vonatkozik a 36 forintos egységár, efölött a kormány által meghúzott piaci árat kell fizetni. A gáznál 1729 köbméteres éves fogyasztásig, vagyis 144 köbméter/hó fogyasztásig marad szintén a kedvezményes tarifa: 102 forint köbméterenként, efölött a kabinet által meghatározott piaci ár érvényes.\r\n\r\nPéntek délelőtt a decemberben létrejött Energiaügyi Minisztérium közölte: májusig nem változik a gáz és az áram ára.\r\n\r\nA Központi Statisztikai Hivatal (KSH) 2021-es adatai szerint 5,2 millió lakossági áramfogyasztó összesen 12,29 milliárd kilowattóra áramot használt, ami havi szinten átlagosan 197 kWh, azaz a kormány által meghúzott vonal alatt van. Ugyanez érvényes a gázra is: a KSH 3,3 millió lakossági gázfogyasztónál összesen 3,9 milliárd köbméter fogyasztást rögzített, ami havi átlagban 98,4 köbméter – ez szintén a kormány által kijelölt lakossági átlag alatti érték.\r\n\r\nAz MVM megvizsgálta, hogyan alakultak a magyar rezsiszámlák a rezsicsökkentés augusztusi módosítása óta.\r\n\r\nA november végéig kibocsátott számlák elemzése alapján földgázszolgáltatás esetében a kibocsátott 8,2 millió számla 78 százaléka, villamosenergia-szolgáltatás esetében a 13,5 millió számla 67 százaléka a kormány által meghatározott lakossági átlag alatti felhasználást mutatott, azaz nem tartalmazott piaci áron elszámolt energiát.', 'Rezsi.jpg', '2023-01-11 13:31:42'),
(77, 'Így védhetjük meg kutyáinkat a szilveszteri petárdázástól', 1, 'Az óévbúcsúztatókor használt pirotechnikai eszközök durva hang- és fényhatásai a házi kedvencek számára akár sokkos pánikot is okozhatnak, ám egy kis odafigyeléssel megelőzhető, hogy a szilveszteri petárdázás miatt elmeneküljenek, eltévedjenek a háziállataink – erre hívja fel a figyelmet Seres Zoltán, az Orpheus Állatvédő Egyesület munkatársa.\r\n\r\nAz egyesület pénteki közleményében az áll: a petárdától megijedt macskák éles marásokat okozhatnak a gazdiknak, a kutyák kerítésen átugorva vagy a pórázt a gazda kezéből kitépve próbálnak a robbanásoktól elmenekülni.\r\n\r\nHázi kedvenceket a petárdázás helyszíneire semmiképpen ne vigyük ki, előzzük meg a bajt. A riadtan menekülő állatok néhány óra alatt 5–10 kilométert, akár több településnyi távolságot is képesek megtenni, előfordul, hogy az elmenekült kedvencek soha többé nem kerülnek elő.\r\n\r\nAz Orpheus a következő praktikus tanácsokat ajánlja a háziállat-tulajdonosoknak:\r\n\r\nKutyáinkra, macskáinkra érdemes a gazda elérhetőségét tartalmazó bilétás nyakörvet kötni, hogy a megtaláló könnyen elérhesse a tulajdonost.\r\nA baj megelőzése érdekében december 30. és január 2. között a kijelölt sétáltató helyeken is fokozott óvatossággal (pórázon) sétáltassuk kutyánkat.\r\nOtthon biztosítsunk kedvencünknek a közvetlen utcai hangoktól elszigetelt helyet (belső szobát vagy udvarrészt, garázst, jó kerítéses udvart). A sötétítő függönyt húzzuk el, a redőnyt eresszük le. Félősebb kedvencek számára állatorvos által ajánlott nyugtató szerről is gondoskodhatunk a petárdázások idejére.\r\nHa megtörtént a baj, érdemes a www.orpheus.hu oldalon a közelben működő állatvédő szervezetekről informálódni, hogy a házi kedvenc minél hamarabb és lehetőleg épségben előkerüljön.', 'petarda-kutya.jpg', '2023-01-11 13:33:02'),
(78, 'Nem minden 30 év alatti anya kap szja-mentességet', 1, '2023. január 1-jétől nem kell személyi jövedelemadót fizetniük azoknak a 30 év alatti nőknek, akik gyermeket vállalnak, jelentette be Hornung Ágnes családokért felelős államtitkár még szerdán.\r\n\r\nBár ezt sokan úgy értelmezték, mintha minden 30 évnél fiatalabb édesanya részesülhetne a kedvezményben a jövő évtől – ehhez a több tízezer érintettről szóló kormányzati kommunikáció is hozzájárult –, a bejelentésben a „vállalnak” szón van a hangsúly.\r\n\r\nA Magyar Közlönyben megjelent kormányrendelet 5. paragrafusa szerint ugyanis\r\n\r\n\"a rendelet szerinti kedvezmény abban az esetben illeti meg a fiatal anyát, ha magzatára, vér szerinti vagy örökbe fogadott gyermekére tekintettel a családi kedvezményre való jogosultsága 2022. december 31-ét követően nyílik meg.\"\r\nA 24.hu lapja megkereste a Kulturális és Innovációs Minisztériumot azzal kapcsolatban, hogy a rendeletben szereplő „családi kedvezményre való jogosultság” mit takar. Azt a választ kapták, hogy a családi kedvezményen a gyermekek után járó, korábban megigényelt családi adó- és járulékkedvezményt kell érteni.\r\n\r\nKözölték, az az anya, akinek gyermeke 2023. január 1-jén születik, jogosult a 30 év alatti anyák kedvezményére (adómentességére).\r\n\r\nTöbb olvasónk számára ezt követően sem volt egyértelmű, a 2023. január 1-jén születő anya miért jogosult a 30 év alatti anyák kedvezményére, hiszen ők 2022-ben az adóelőlegnél már igénybe vehették a családi kedvezményt a várandóság ténye alapján.\r\n\r\nA minisztérium újbóli megkeresésre ezt is pontosította. Úgy fogalmaztak, az idén várandós és jövőre szülő nők is jogosulttá válnak 2023-tól a 30 év alatti nők szja-mentességére: a jogosultságot nem befolyásolja, hogy adóelőlegben vagy majd csak később, az szja-bevallásban veszik igénybe a családi kedvezményt, mert nem a kedvezmény igénybevétele (érvényesítése), hanem az arra való jogosultság ténye jogosít az szja-mentességre.\r\n\r\nEnnek értelmében viszont aki 30 év alatti, de 2022. december 31-én vagy azt megelőzően született gyermeke, elesik az szja-mentességtől. Ugyanakkor ha újabb gyermeke születik 30 éves koráig, akkor élhet a kedvezménnyel.\r\nSzintén a Magyar Közlönyben jelent meg, hogy ha a 30. életévét be nem töltött hitelfelvevő nőnek a felsőoktatási tanulmányai alatt vagy azok sikeres befejezését követő két éven belül gyermeke születik, vagy gyermeket fogad örökbe, a fennálló diákhitel-tartozása száz százalékának megfelelő összegű vissza nem térítendő gyermektámogatásban részesül.\r\n\r\nA kitétel itt az, hogy a gyermektámogatási kérelmet a gyermek születését vagy örökbefogadott gyermek esetén az örökbefogadást engedélyező határozat véglegessé válását követő 60 napon belül benyújtja. Így például hiába született valakinek 2022 októberében, a diploma megszerzését követő két éven belül gyermeke, ezt a kedvezményt sem tudja érvényesíteni, a rendelet ugyanis 2023. január 1-jén lép életbe.\r\n\r\nHornung Ágnes korábban arról beszélt, mint minden más családtámogatásnál, a 30 év alatti anyák szja-mentességével is kettős a céljuk: amellett, hogy a gyermekvállalást ösztönzik, azt is szeretnék, hogy több pénz maradjon a gyermekes családoknál. De ezáltal csak azoknál a gyermekes családoknál marad több pénz, ahol 2022. december 31. után születik a gyermek.', 'szja.jpg', '2023-01-11 13:33:47'),
(81, 'Ez vár arra, aki Kínából Európába utazik', 2, 'Indokolatlan a Kínából az Európai Unióba (EU) beutazó állampolgárok kötelező koronavírus-tesztelésének bevezetése a Kínában regisztrált növekvő esetszámok ellenére is – közölte csütörtökön az Európai Betegségmegelőzési és Járványvédelmi Központ (ECDC).\r\nAz elmúlt napokban az Egyesült Államok és több más ország, köztük Európában elsőként Olaszország is kötelező koronavírus-tesztelést vezetett be a Kínából érkező utasok esetében. Ennek ellenére az EU egészségügyi hatósága szerint uniós szinten nem szükséges hasonló lépés bevezetése.\r\n\r\nKína-szerte túlterheltek a kórházak a koronavírusos fertőzések számának robbanásszerű növekedése miatt, miután Peking feloldotta a szigorú kijárási korlátozásokat, amelyek addig alacsony szinten tartották a koronavírus-fertőzések számát, de jelentősen lefékezték a gazdaság működését, és széles körű tiltakozási hullámot váltottak ki a kínai nagyvárosokban.\r\n\r\nAz ECDC szerint a kínai esetszámok növekedése jelenleg nem befolyásolja az Európai Unió járványügyi helyzetét, „tekintettel az EU és az Európai Gazdasági Térség (EEA) népességének magas átoltottsági arányára, valamint a Kínában korábban és mostanában kialakult koronavírus-variánsokra”. Ennek megfelelően az ECDC „indokolatlannak tartja a Kínából érkező utasokkal szemben kötelezően alkalmazandó tesztelési és utazási előírásokat”.\r\n\r\nAz ECDC hozzátette: a lehetséges behurcolt fertőzések száma „meglehetősen alacsony” az EU-ban mért napi esetszámokhoz képest, és az európai egészségügyi intézmények „jelenleg meg tudnak birkózni” a járvánnyal – adta hírül az MTI.', 'kina-eu.webp', '2023-01-11 13:38:24'),
(86, 'Átmenetileg bezárják a beázott gödöllői gimnáziumot: a tanulókat a város négy intézményében helyezik el', 3, 'Továbbra is tarthatatlan állapotok uralkodnak a gödöllői Török Ignác Gimnáziumban. A tankerület nem engedélyezi az online oktatást a diákok számára, akiket a város négy intézményében helyeznek el.\r\nAhogy arról a Blikk beszámolt, felújítási munkálatokat végeznek az ország 13. legjobb gimnáziumában tanítási időben. Ennek során megbontották az azbesztet is tartalmazó tetőszerkezeteket miközben a diákok az épületben voltak.\r\n\r\nMivel tető nem volt az épületen, a hétfői hatalmas esőzések során teljesen beázott az intézmény, beleértve az elektromos rendszert is, ami miatt különösen balesetveszélyessé vált.\r\n\r\nA diákok besokalltak, és kivonultak az intézmény elé tüntetni, ezzel is kifejezve, hogy nem akarnak ilyen körülmények között beülni az iskolapadba.\r\n\r\nFábián Bertalan, az iskola új igazgatója szerette volna, ha a körülményekre való tekintettel átállhatnak az online oktatásra, ám a tankerület alkalmasnak találta az épületet a tanításra.\r\n\r\nMost pedig arról tájékoztattak, hogy a diákokat a város négy létesítményében – a MATE egyetemen, a művelődési házban, a Petőfi Sándor Általános Iskolában és a Református Líceumban helyezik el, amig nem rendeződik a helyzet.\r\n\r\nA szülői közösség petíciót az online oktatás érdekében – írja a HVG.', 'ures-osztalyterem-tanterem.jpg', '2023-01-11 13:42:29'),
(89, 'Gyász: elhunyt Pelé, minden idők egyik legjobb labdarúgója', 4, 'Életének 83. évében elhunyt minden idők egyik legjobb labdarúgója, a háromszoros világbajnok Edson Arantes do Nascimento, Pelé.\r\nPelénél 2021 szeptemberében diagnosztizáltak először tumort (a vastagbelében), azonnal megoperálták, majd hetekig az intenzív osztályon kezelték, ahonnan hamarosan, októberben hazaengedték, miután javult az állapota. December közepén ismét az Albert Einstein-klinikára szállították, ahol kemoterápiás kezelést kapott – a hónap végén ismét hazamehetett.\r\n\r\nA Katarban zajló labdarúgó-világbajnokság ideje alatt, december 3-án jött az aggasztó hír, mely szerint a legenda szervezete nem reagál a kemoterápiás ellátásra, ezért a folytatásban a rák ellen már nem kezelik, életkörülményeit javító kezeléseket kap palliatív eljárás keretében.\r\n\r\nCsaládja cáfolta, hogy haldoklik,Ő maga is cáfolta a sajtóhíreket, a hivatalos Instagram-oldalán azt üzente, erősnek érzi magát, és reménykedve vesz részt a szokásos kezelésein.\r\n\r\nA karácsonyi időszakot mindazonáltal – a család és az orvosok közös megegyezésével – már nem tölthette otthon. Szerettei mindvégig vele voltak a kórteremben, és a hírek ekkor arról szóltak, hogy elbúcsúztak tőle.\r\n\r\nPelé szervezete végül december 29-én adta fel a harcot, korábbi klubja, a Santos közölte, hogy életének 83. évében elhunyt – ügynöke, Joe Fraga megerősítette a hírt.', 'Pelé.jpg', '2023-01-11 13:47:07'),
(90, 'Orbán Balázs a kirúgott pedagógusokról: Aki nem megy be a munkahelyre, el kell bocsátani', 3, 'Szakaszgyőzelmet arattunk, de bizonyosan várhatóak még további küzdelmek az Európai Unióval, mondta Orbán Balázs az Indexnek adott interjújában.\r\nA miniszterelnök politikai igazgatója elmondta, mndenki megadealről, vagyis nagy csomagról beszél, de ők erről sosem így gondolkodtak.\r\n\r\n\"Mindezeket különálló ügyeknek tekintettük, amelyekről külön-külön kellett megállapodni. Az kétségtelen, hogy a cseh uniós elnökség úgy időzített, hogy minden az év utolsó tanácsülésén vagy annak környékén formalizálódjon. A globális minimumadóval az volt a problémánk, hogy egy nehéz európai gazdasági helyzetben újabb munkahelygyilkos adóemelést jelentene, pont azokban a termelő szektorokban, amelyek a leginkább hozzájárulnak a gazdasági növekedéshez\"\r\n- magyarázta.\r\nAz ukránoknak hitelből nyújtott támogatással kapcsolatban arról beszélt, azt gondolják, hogy Európában nincs és nem is lesz soha úgynevezett Hamilton-pillanat, amelynek révén egykor pénzügyileg létrejött az Amerikai Egyesült Államok. Nem lehet közösen eladósodni, mert az végső soron a nemzeti szuverenitás feladásával járna, ugyanis a közös adósságot csak akkor lehet menedzselni, ha közös a költségvetési politika is.\r\n\r\n„És mi nem akarunk közös költségvetési politikát. Azt akarjuk, hogy Magyarországon a magyar emberek döntsenek arról, hogy mekkora legyen az adó, és hogy azt mire költsék el” -jelentette ki.\r\n\r\nA nemzeti konzultációról azt mondta, a szankciókat meghatározott időre fogadják el, nem hosszabbítják meg őket automatikusan. Most már nyolc-tíz hónapja vannak érvényben, ezért ideje beszélni arról Brüsszelben, hogy melyek az értelmes szankciók, és melyek esetében nyilvánvaló talán már mások számára is, hogy csak lábon lőjük magunkat velük.\r\n\r\n\"Mi bátorítjuk az erről való beszélgetést, és ehhez jelent majd kiváló mandátumot a nemzeti konzultáció keretében született, több mint egymillió magyar állampolgár álláspontját tükröző vélemény\"\r\n- fogalmazott\r\nKérdésre válaszolva közölte, továbbra is töretlen a bizalom Matolcsy György irányába, hisz nagyon fontosak a jegybankelnök meglátásai. A kormány azon dolgozik, hogy Magyarország az évtized nyertese legyen, és ennek érdekében követnek egy adott stratégiai irányt.\r\n\r\n\"A kritikák élét és intenzitását tekintve vannak kétségeink, de ezt betudjuk annak, hogy az emberek megélhetését megnehezítő infláció és a hitelezést ellehetetlenítő magas kamatok miatt nagy rajta a nyomás. Mi úgy látjuk, hogy ahhoz, hogy a jegybankelnök ezen két problémája megoldódjon, nem óvatoskodó, hanem aktív jegybanki munkára van szükség, ehhez pedig a kormány mindent támogatást megad\"\r\n- sorolta\r\nHa tanár lenne, örülne, hogy az oktatás ügye a Belügyminisztériumhoz tartozik, mert a nagy és sikeres rendszerátalakító és rendszer-megerősítő programok az elmúlt évtizedben a legtöbbször ehhez a tárcához kötődtek. A kormány is azt gondolja, hogy béreket kell emelni, olyan gyorsan, amennyire csak lehet.\r\n\r\nÚgy gondolja, hogy a tanárok, a diákok és a szülők számára elsősorban az a fontos, hogy milyen a magyar oktatás. Az arról való beszélgetést nem lehet megspórolni, mert az kapituláció lenne – nem a kormánynak, hanem az országnak. Együttműködésre van szükség ebben a helyzetben, és ha a béremeléshez szükséges források megjönnek, akkor lehet majd egy komoly átalakítást elindítani, mondta.\r\n\r\nA tanárok elbocsátásáról azt mondta, szomorú eset, de ilyen helyzetben nem lehet másképpen eljárni. Magyarországon mindenki szabadon elmondhatja a véleményét, szabadon sztrájkolhat, de ettől függetlenül a munkahelyre be kell menni, és a munkát el kell végezni.\r\n\r\n\"A törvények értelmében pedig azt, aki nem megy be a munkahelyre, el kell bocsátani, nem lehet mérlegelni. Szerintem ez a napnál is világosabb. Ezért remélem, hogy minél kevesebb ilyen esetre kerül sor a jövőben\"\r\n-mondta', 'OrbanBalazsped.jpg', '2023-01-11 14:01:37'),
(91, 'Mérő László tesztelte a tanárokat, túlélési receptet kínál nekik', 3, 'A matematikus, pszichológus elmagyarázza, miért lettek a nemzet napszámosai, szerinte egy év pályaelhagyás után visszakozna a hatalom.\r\nMérő László a hvg360-nak írt cikkében felidézi, hogy nyáron tartott egy előadást a matektanárok vándorgyűlésén. Feltette nekik a kérdést, hogy ha képességeik alapján tollaslabdában lehetnének világ- és olimpiai bajnokok, vagy teniszben a tizedik legjobbak, több mint kétszer annyi pénzért, melyiket választanák. Elárulja, ő 20 évesen a tollaslabdára szavazott volna, ma inkább a teniszre. Nem azért, mert anyagiassá vált, csak megtanulta becsülni a pénzt.\r\n\r\nA professzor szerint egy-egy csoport jellegzetességeiről, a világhoz való viszonyáról nagyon sokat elmond, milyen arányban szavaznak. Korábban a kérdést feltette pszichológushallgatóknak. Nagyjából 50-50 százalék választotta a teniszt, illetve a tollaslabdát, a mérnök- és közgazdászhallgatóknál a tenisznek, a Testnevelési Egyetemen a tollaslabdának volt nagyjából kétharmados többsége. A vállalkozóknál nagyjából 50-50 százalékos arány jött ki.\r\n\r\n\"A kétszáz tanár közül több mint százhatvan szavazott a tollaslabdára.\"\r\nAddigra már több mint kétezer embert szavaztatott meg, sehol sem volt ennyire egyoldalú a megoszlás, ezért rögtön jelezte, talán ezért tanítanak még mindig, annak dacára, ahogy a tanárokkal, iskolákkal bánik a hatalom. Mérő László szerint\r\n\r\n\"a hatalom egészen pofátlanul visszaél azzal, hogy a nemzet napszámosai olyanok, amilyenek,\"\r\núgy is kezeli őket, ahogy a napszámosokat mindig is szokás volt. Ő semmi esélyt nem lát arra, hogy ezzel a kormányzattal tisztességes alkut lehessen kötni, a tüntetések, sztrájkok, polgári engedetlenségek számára nagyon rokonszenvesek, de a hatalom cinizmusa végül győzni fog.\r\n\r\n\"Ha én egy negyvenes éveimben járó tanár lennék, húsz év tanári tapasztalattal, és imádnék tanítani, ez lenne életem értelme, akkor most, látva az állam hozzáállását, nem tehetnék mást, mint hogy otthagyom a pályát. Magamban azt remélném, hogy csak egy évre, de annyira muszáj lenne. Más esélyt nem látnék arra, hogy valaha is normális körülmények között végezhessem a hivatásomat. Hiába választom szívem szerint a tollaslabdát, most egy évre elmennék teniszezőnek. (…) Ha ezt tízezren megtennénk, akkor az állam egy év múlva elkeseredetten próbálna valódi lehetőségekkel és elfogadható fizetésekkel visszacsábítani minket a pályára, mert addigra kiderülne, hogy nélkülünk nagyon nem megy a dolog.\"\r\nSzerinte amíg a lelkesedés, hivatástudat valamennyire így is elműködteti az iskolákat, addig nem lesz érdemi változás, az egy év pályaelhagyás megoldás lehet a mostani helyzetre.', 'MeroLaszlo.jpg', '2023-01-11 14:02:40'),
(92, 'A Dunaújvárosi Egyetemen is digitális oktatás jön a rezsiárak miatt', 3, 'A Dunaújvárosi Egyetem vezetése a szenátus támogatásával az oktatás digitális formában történő szervezése mellett döntött, mivel az emelkedő rezsiárak mellett nem tudnák finanszírozni az épület fűtését.\r\nKözel tízszeresére emelkedett az épület távfűtési költsége, a digitális oktatás következtében pedig az egyes távhővel fűtött épületek használatát a fűtési időszakban mellőzni tudják.\r\n\r\nKözleményükben leírták, hogy a koronavírus időszaka alatt volt lehetőségük fejleszteni az online tananyagot, ami miatt remélik, hogy nem lesz gond a távoktatás során.\r\n\r\n„2022-es évet írunk, a jelen időszak a mindent átformáló digitalizáció korszaka is egyben. A rugalmas működési megoldásokat a DUE mindig is előnyben részesítette, ily módon az egyetem ügyviteli működését is örömmel támogatja az online alkalmazások használatával\" -jelentette ki a Dunaújvárosi Egyetem.', 'dunaujvarosiegyetemfutese.jfif', '2023-01-11 14:03:51'),
(93, '„Egy buli sem ér annyit, hogy nélküled kezdődjön az új év”', 1, 'Idén Budapesten december 29-ig 41 ember halt meg közlekedési balesetben. A rendőrség felhívta a lakosság figyelmét, hogy egy buli sem ér annyit, hogy eggyel kevesebb személlyel induljon az új év.\r\nIdén december 29-ig 41 halálos áldozata volt a fővárosban történt közlekedési baleseteknek – közölte a Budapesti Rendőr-főkapitányság (BRFK) pénteken.\r\n\r\n\"Egy buli sem ér annyit, hogy nélküled kezdődjön az új év\" című közleményében a rendőrség a tragikus kimenetelű balesetek adataival hívta fel az óévbúcsúztatóra készülő budapestiek, illetve a fővárosban szórakozók figyelmét arra, hogy „kellő figyelemmel közlekedjenek” szilveszteréjszaka.\r\n\r\nAzt kérik, hogy aki alkoholt ivott, ne üljön volán mögé, helyette hívjon taxit, vagy vegyen igénybe sofőrszolgálatot.\r\n\r\nA BRFK egy balesetmegelőzési kisfilmet is készített, a videóval a gyorshajtás veszélyére hívják fel a figyelmet.', 'Ittasvezetés.jpg', '2023-01-11 14:05:17'),
(94, 'Darts-vb: Price magabiztosan nyert, Clayton nagy meccsen verte Rockot', 4, 'A Profi Dartsjátékosok Szövetsége (PDC) Londonban zajló világbajnoksága 12. napjának első mérkőzésén eldőlt, hogy a világranglista ötödik helyén álló Luke Humphries is ott lesz a legjobb 16 között, miután egy fordulatos meccsen legyőzte a holland Vincent van der Voortot. A világelső Gerwyn Price magabiztos játékkal elsőként jutott be a nyolc közé, a 17. helyen José de Sousa csak egy szettet nyert a walesi ellen, míg Jonny Clayton döntőszettben győzte le a fiatal Josh Rockot.\r\n\r\nA nyitó szett elején úgy Luke Humphries, mint Vincent van der Voort hozta a saját játékát, majd az 5. helyen kiemelt angol brékelte holland ellenfelét, majd a negyedik legben már nem hibázott és behúzta az első szettet.\r\n\r\nA második felvonás gyakorlatilag ugyanolyan forgatókönyv szerint zajlott, mint az első. Mindkét fél nyert egy-egy leget, majd Humphries magasabb fokozatra kapcsolt és állva hagyta ellenfelét.\r\n\r\nA harmadik szettben egy tizenegy nyilassal indított Van der Voort, majd Humphries pontatlan kiszállózását kihasználva a második leget is behúzta, de az angol felállt a padlóról és kiegyenlített.\r\n\r\nA negyedik szettet Humphries kezdte jobban, de ezután ismét a holland percei következtek. Van der Voort ha némi szerencsével is, de zsinórban három leget nyert meg, így összesítésben kiegyenlített.\r\n\r\nAz ötödik játékrészt pontatlan kiszállózás jellemezte – akadt 16, illetve 20 nyilas kiszálló is –, ezzel együtt van der Voort két ízben is vezetett – angol ellenfele azonban mind a két alkalomal kiegyenlített. A döntő legben végül Humphries volt a magabiztosabb és egy szettre volt a továbbjutástól.\r\n\r\nLehet, hogy a tét helyezett ekkora súlyt az ötödik helyen kiemelt angol dartsos vállára, aki hatodik szettben kétszer – 1:0-ra és 2:1-re is vezetett – de van der Voort ezúttal is felállt, és a döntő legben döntő szettre mentette a mérkőzést, mindezt zsinórban két 13 nyilassal.\r\n\r\nA hetedik szettben a 47 éves „holland romboló” nem tudta hozni az előző menetekben látott játékát – pontatlan dobásait Humphries nyert legekkel büntette és 3:0-ra behúzta szettet, így 4:3-ra a meccset is. Az angolnak nem volt jó napja – van der Voort nagyobb arányban értékesítette a kiszállóit a kisebb pontátlag ellenére is –, de kihasználta ellenfele megingásait és bejutott a legjobb 16 közé, ahol a Dave Chisnallt búcsúztató Stephen Bunting lesz az ellenfele.\r\n\r\nAz esti program második meccsén a világelső Gerwyn Price találkozott a portugál José de Sousával. Jobban kezdte a meccset a walesi, a harmadik legben már brékelt is, majd 3:1 után mehetett az első szünetre.\r\n\r\nA második szettben De Sousa azonnal elvette Price kezdését, aki a negyedik legben ezt visszavette és hozta a sajátját, így megduplázta előnyét a második szünet előtt.\r\n\r\nAz ötödik szettet De Sousa kezdte, és 2:2-ig hozta a kezdéseit, azonban a mindent eldöntő legben szektort is rontott. Price ezt kihasználta, két 140-es körrel 100-ra lerakta magát, majd a második meccsnyilát kihasználva bejutott a negyeddöntőbe.', 'GerwynPrice.jpg', '2023-01-11 14:07:03'),
(95, 'Tenisz: Thiem szabadkártyát kapott az Australian Openre', 4, 'Szabadkártyát kapott a januári ausztrál nyílt teniszbajnokságra Dominic Thiem, a viadal korábbi döntőse.\r\nA 29 éves osztrák játékos, aki sérülése miatt tavaly nem lehetett ott Melbourne-ben, a 2020-as fináléban ötszettes csatában maradt alul Novak Djokoviccsal szemben, majd abban az évben megnyerte a US Opent.\r\n\r\nA világranglista korábbi harmadik helyezettje hosszú ideig súlyos csuklósérüléssel küzdött, de idén visszatért, s jelenleg már a 102. az ATP rangsorában azok után, hogy júniusban a legjobb 350 közé sem fért be.\r\n\r\nAz év első Grand Slam-tornáját, az Australian Opent január 16. és 29. között rendezik Melbourne-ben.', 'Dominicthiem.jpg', '2023-01-11 14:07:31'),
(96, 'Őrizetbe vették Andrew Tate-et Romániában', 2, 'Embercsempészet, nemi erőszak és szervezett bűnözői csoportok létrehozásának vádjával őrizetbe vették Andrew Tate amerikai–brit influenszert.\r\nA románi hatóságok megerősítették Andrew Tate őrizetbe vételének hírét. Az egykori kick-box-bajnokot a bátyjával és két másik gyanúsítottal együtt fogta el a rendőrség. A helyi szervezett bűnözés-elleni csoport szerint a gyanúsítottak 24 óráig lesznek fogva tartva. A szervezet razziát tartott a bukaresti ingatlanokban – írja a The Guardian.\r\n\r\nA Tate fivérek nem kívántak nyilatkozni, de az ügyvédjük megerősítette, hogy mindkettejüket őrizetbe vették. Andrew Tate szóvivője azt mondta, hogy az üggyel kapcsolatban nem tud részleteket közölni. Andrew és Tristan Tate azonban mindenben a román hatóságok rendelkezésére fog állni – tette hozzá a szóvivő.\r\n\r\nA vád szerint a négy gyanúsított szervezett bűnözői csoportot hozott létre azzal a céllal, hogy nőket toborozzon, akiket aztán pornográf tartalmak készítésére kényszerítettek volna, amelyeket eladnak az interneten – közölték a helyi ügyészek.\r\n\r\nAndrew Tate egyébként az internet egyik legmegosztóbb figurájának számít, gyakran borzolja a kedélyeket szexista, rasszista vagy adott esetben nőgyűlölő megjegyzéseivel. Az influenszer még 2017-ben kapott egy ötéves tiltás a Twittertől, mert a platform megelégelte nőgyűlölő megjegyzéseit. Tate Elon Musk hatalomátvétele után azonban visszatérhetett az oldalra.\r\n\r\nA férfit augusztus közepén kitiltották a Facebookról és az Instagramról is a Meta szabályzatának megsértése miatt. Néhány nappal ezelőtt pedig Greta Thunberg környezetvédelmi aktivistával keveredett konfliktusba, miután eldicsekedett szuperautó-gyűjteményének károsanyag-kibocsátásával.\r\n\r\nHa önt vagy ismerősét erőszak éri a kapcsolatában, vagy ha valakiről úgy véli, emberkereskedelem áldozata lett, hívja az Országos Kríziskezelő és Információs Telefonszolgálatot a belföldről ingyenes, 06 (80) 20-55-20-as számon.\r\n\r\nA NANE Egyesület bántalmazott nőknek és gyermekeknek szóló segélyvonala szerda kivételével minden hétköznap 18 és 22 óra között ingyenesen hívható a 06 (80) 505-101-es telefonszámon.', 'AndrewTate.jpg', '2023-01-11 14:11:00'),
(97, 'Több Aldiban is káosz tört ki egy youtuberek által reklámozott termék miatt', 2, 'Több egyesült királyságbeli Aldiban is őrült jelenetek játszódtak le azután, hogy megérkezett a polcokra egy youtuberek által reklámozott termék.\r\nA Logan Paul és KSI által reklámozott termék – a Prime – egy sportital, amely több ízben kapható, és természetesen antioxidánsokat tartalmaz. A terméket a Prime Hydration készítette és forgalmazza – amelynek alapítója Logan Paul és JJ Olantunji, más néven KSI. A párost összesen közel negyvenmillió ember követi YouTube-on – írja a Sky News.\r\n\r\nAz italt először októberben kezdték el forgalmazni az Asda üzleteiben: ekkor maximum három palackot vásárolhattak az érdeklődők.\r\n\r\nAz Aldi egy csütörtöki Twitter-bejegyzésében azt írta, hogy egy akció keretein belül mindössze 1,99 fontért adja az italokat, ám arra is felhívták a figyelmet, hogy a készlet korlátozott, és nem tudják azonnal pótolni.\r\n\r\nA bejegyzésre több száz válasz érkezett, a legtöbben azt akarták megtudni, hogy mikor lesz az akció pontosan.\r\n\r\nAz említett napon aztán hamar nagy tumultus és lökdösődés alakult ki a vásárlók között: mindenki meg akarta kaparintani az italt. Az Aldi szóvivője később úgy nyilatkozott, hogy sajnálják, ha egyes vásárlóknak már nem jutott a termékből, a kereslet azonban rendkívül nagy volt.\r\n\r\nA mennyiséget vásárlónként egy palackra korlátoztuk, hogy lehetőleg mindenkinek jusson – tette hozzá a szóvivő. Az eBayen több száz fontért árulják az ital palackját.', 'AldiPrime.jfif', '2023-01-11 14:11:25'),
(98, '33 évet kell börtönben ülnie Mianmar korábbi Nobel-békedíjas vezetőjének, Aung Szan Szú Csínak', 2, 'A mianmari bíróság bűnösnek találta korrupció vádjában a korábbi kormányfőt,Aung Szan Szú Csít, és újabb 7 évvel megnövelte börtönbüntetését. Így a Nobel-békedíjas politikus valószínűleg élete végéig rács mögött lesz.*\r\nA katonai junta 2021-ben ragadta magához a hatalmat a délkelet-ázsiai országban. A katonaság első dolga a világszerte ismert polgárjogi harcos, Aung Szan Szú Csí letartóztatása volt. Azóta számtalanszor elítélték olyan mondva csinált indokokkal, mint a covid-szabályok megsértése, illegális rádiófelszerelés birtoklása, vagy hatalommal való visszaélés. Ezúttal azért fogták perbe, amiért egy állami helikoptert használt beiktatása előtt. Összesen 19 vádpont miatt 33 év börtönbüntetést kapott.\r\n\r\nA politikailag manipulált döntést elítélte a nemzetközi közösség és többen is Aung Szan Szú Csí szabadon engedését és demokratikus választások kiírását követelték.', 'AungSanSuKyi.jpeg', '2023-01-11 14:11:52');

-- --------------------------------------------------------

--
-- Table structure for table `news_types`
--

CREATE TABLE `news_types` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_types`
--

INSERT INTO `news_types` (`id`, `name`) VALUES
(1, 'Most - Belföld'),
(2, 'Most - Külföld'),
(3, 'Oktatás'),
(4, 'Sport');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`) VALUES
(1, 'Felhasználók szerkesztése'),
(2, 'Hírek szerkesztése'),
(3, 'Szerepkörök szerkesztése'),
(4, 'Jogosultságok szerkesztése'),
(6, 'Kategóriák létrehozása');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Felhasználó'),
(2, 'Adminisztrátor');

-- --------------------------------------------------------

--
-- Table structure for table `role_permissions`
--

CREATE TABLE `role_permissions` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role_permissions`
--

INSERT INTO `role_permissions` (`id`, `role_id`, `permission_id`) VALUES
(8, 2, 1),
(9, 2, 2),
(10, 2, 3),
(11, 2, 4),
(13, 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `role_id`, `created_at`) VALUES
(10, 'Gulyás', 'Gréta', 'ggretus07@gmail.com', '$2y$10$AHq92kz3FGjb0Cmf6S9bRuldIuC8A9vD3MxKHTWJvbDGBmkf063Ku', 2, '2023-01-11 13:17:40'),
(11, 'Pete', 'Natália', 'pete.natalia277@gmail.com', '$2y$10$Mfcv2C4g07i9.W7MdlhHYe4cjsXx6Tp6Fn5PUOSdegkjZrGNGAHPe', 2, '2023-01-11 13:21:13'),
(12, 'Kerestély', 'Alexandra', 'akerestely@gmail.com', '$2y$10$WDNI6LuN3RRChCxNED4xluXar2VwSJqVQKQZPuKhsyaLvxhB/KPGK', 2, '2023-01-11 13:21:57'),
(13, 'Orosz', 'Bence', 'bence.orosz02@gmail.com', '$2y$10$43A252ssp1AxyG0ye6vPyet5gmeV8l08.canP./C6jOWNwbOmEPlO', 2, '2023-01-11 13:23:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_ibfk_1` (`type`);

--
-- Indexes for table `news_types`
--
ALTER TABLE `news_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_permissions_ibfk_1` (`role_id`),
  ADD KEY `role_permissions_ibfk_2` (`permission_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`email`),
  ADD KEY `users_ibfk_1` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `news_types`
--
ALTER TABLE `news_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role_permissions`
--
ALTER TABLE `role_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`type`) REFERENCES `news_types` (`id`);

--
-- Constraints for table `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD CONSTRAINT `role_permissions_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `role_permissions_ibfk_2` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
