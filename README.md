
<h1 align="center">Szoftverfejlesztési módszertanok</h1>
<h4 align="center">Webáruház</h1>



## Tartalom



1. **Tartalom**

2. **Követelmények**

    1. Funkcionális követelmények

    2. Jogi követelmények

3. **Fejlesztői dokumentáció**

    1. Feladat 

    2. Környezet 

    3. Tervezés 

    4. Megvalósítás menete 

    5. Tesztelés

    6. Fejlesztési lehetőségek

    7. Verzió kezelés

4. **Szerzők** 


<h2 align="center">Követelmények</h1>

#### Funkcionális követelmények:



| Kötelezően teljesítendő követelmények  | A tesztelés módszere |
| ------------- | ------------- |
| 1.	Termék, szolgáltatás információk  | A funkcionális követelményben meghatározott feltételek meglétének ellenőrzése legalább 10 cikk vagy valamennyi termék (11 termék alatti portfoliónál) esetében. Az áruház feltöltöttségének ellenőrzése, oly módon, hogy a cég alap, eladásra szánt áru- és szolgáltatás készlete megtalálható a webáruház felületén megrendelhető tételként.  |
| Célja a termékek/szolgáltatások ismertségének növelése, a kereslet fokozása. |
| A cég termék/ szolgáltatás portfóliójának részletes ismertetése legalább az alábbi információk megadásával:  |
| •	a termék/szolgáltatás megnevezése;   |
| •	a termék/szolgáltatás lényegi leírása, bemutatása  |
| •	a  termék  vagy  a  termékhez  szorosan  köthető  kép  megjelenítése  |
| •	a termék/szolgáltatás kategóriája a cég által használt csoportosítás szerint;  |
| •	a termék/szolgáltatás műszaki paraméterei, vagy fel-használási feltételei  |
| •	a termék/szolgáltatás ára/díjazása, kedvezmények;   |


| Kötelezően teljesítendő követelmények  | A tesztelés módszere |
| ------------- | ------------- |
| 2.	Kosárfunkció és regisztráció  | Egy vásárlási folyamat bemutatása, ahol a kosárba bepakolásra kerül legalább 15 darab és 10 különböző termék, vagy ha ennyi kínált termék nincs, akkor az összes megvásárolható árucikk. Egy legalább 5 elemű, egyenként 3-3 darabot tartalmazó (azaz összesen 15 db termék, vagy ha ennyi kínált termék nincs, akkor az összes megvásárolható árucikk) bevásárlókosárból egy, azaz egy darab termék eltávolítása. Egy tetszőleges bevásárló kosár (vagy kívánság lista) tartalmának a létrehozása, eltárolása, ami után a felhasználó kijelentkezik a rendszerből, majd visszajelentkezés után a bevásárló kosár (vagy kívánság lista) tartalmának az ellenőrzése.
Kívánság lista használata esetén annak ellenőrzése, hogy annak elemei, egyenként és összesen is átrakhatóak legyenek a bevásárló kosárba.  |
| Célja a rendszer alap tulajdonságának a biztosítása  |
| A rendszer tegye lehetővé bevásárló kosár használatát. |
| A kosár legyen alkalmas több cikk tárolására, és adjon lehetőséget cikkek egyenként történő eltávolítására a kosárból, illetve tegye lehetővé a kosár tartalmának eltárolását a vásárlás későbbi befejezésének a lehetőségére. Ez utóbbi funkció kiváltható egy kívánság listával. Ebben az esetben a rendszernek alkalmasnak kell lennie arra, hogy a kívánság lista elemeit egy gombnyomással át lehessen pakolni a kosárba. |


| Kötelezően teljesítendő követelmények  | A tesztelés módszere |
| ------------- | ------------- |
| 3.	Szállítási mód változatok kezelése | Legalább két szállítási mód igénylési lehetőségének a bemutatása.  |
| Célja a nagyobb ügyfél elégedettség elérése |
| A modulnak lehetőséget kell nyújtania arra, hogy a szállítási adatok és paraméterek programváltozás nélkül, paraméterek segítségével változtathatóak legyenek.  |
| Legalább  a  következő  szállítási  módok  közül  kettőnek  kell  rendelkezésre állniuk:  |
| •	postai utánvét  |
| •	futár  |
| •	személyes átvétel  |
| •	csomagküldőszolgálat  |
| •	internetes letöltés  |
| A rendszernek képesnek kell lennie automatikusan az egyes szállítási mód változatok esetlegesen eltérő költségének kezelésére is. |


| Kötelezően teljesítendő követelmények  | A tesztelés módszere |
| ------------- | ------------- |
| 4.	Fizetési mód változatok kezelése | Legalább két fizetési mód igénylési lehetőségének a bemutatása.  |
| Célja a nagyobb ügyfél elégedettség elérése |
|A modulnak lehetőséget kell nyújtania arra, hogy a fizetési adatok és paraméterek program változás nélkül, paraméterek segítségével változtathatóak legyenek.  |
|Legalább a következő fizetési módok közül kettőnek kell rendelkezésre állniuk:  |
| •	fizetés utánvétellel  |
| •	fizetés előre utalással  |
| •	fizetés futárnak (helyben)  |
| •	online fizetés   |
| A  rendszernek  képesnek  kell  lennie automatikusan  az  egyes  fizetési  változatok  esetlegesen  eltérő feldolgozási  költségének kezelésére is. |


| Kötelezően teljesítendő követelmények  | A tesztelés módszere |
| ------------- | ------------- |
| 5.	Automatikus rendelés követés | Egy próbarendelés feladása és az automatikus értesítés meglétének ellenőrzése.  |
|Célja a vásárlói elégedettség, bizalom fokozása |
| A rendszernek lehetőséget kell biztosítania, hogy a vásárló automatikusan értesüljön rendelése állapotáról. |
|Legalább a következő állapotok megkülönböztetésére alkalmasnak kell lennie a rendszernek:  |
| •	a rendelést fogadták  |
| •	a rendelés kiszállítás alatt  |


| Kötelezően teljesítendő követelmények  | A tesztelés módszere |
| ------------- | ------------- |
| 6.	Adatkapcsolati interfész | Amennyiben az interfész nem azonnali készletváltozás követést tesz lehetővé,  az adatszinkronizációs folyamat megtekintése, azaz a webáruház és a készletvezető rendszer adat szinkronba hozása. Amennyiben a webáruház a cég készletvezetéséből nyeri az adatokat, az azonos készletszintek leellenőrzése legalább 10 cikknél vagy valamennyi termék (11 termék alatti portfoliónál) esetében. |
|Célja, hogy a készlet és webáruház közti készletmozgások elektronikus úton kerüljenek átvezetésre. |
| Biztonsági és a KKV üzemviteli szempontok nem teszik minden esetben lehetővé az azonnali adatcserét a webáruház és a készletgazdálkodás között. Ennek ellenére a webáruháznak rendelkeznie  kell  egy  olyan  interfész felülettel, amely legalább esetileg, de automatikusan képes a  készletmozgások  átvezetésére a két rendszer között. |


| Kötelezően teljesítendő követelmények  | A tesztelés módszere |
| ------------- | ------------- |
| 7.	Gyakran ismételt kérdések (GYIK/FAQ) | A webáruházban legalább 7 kérdés és a hozzájuk tartozó válasz található. |
|Célja, hogy az ügyfél – az ügyfélszolgálati  tapasztalatok alapján  –  gyakran  felmerülő  kérdéseire  könnyen  választ  találjon,  növelve  a  webáruház információ  tartalmát,  gyorsítva  a problémamegoldást. |
| Gyakran ismételt kérdések megjelenítése a webáruház felületén, kérdés-válasz formában |


| Kötelezően teljesítendő követelmények  | A tesztelés módszere |
| ------------- | ------------- |
| 8.	Internetes ügyfélszolgálat (Help desk) | Egy minta reklamációs folyamat megtekintése. |
|Célja, az ügyfél elégedettség fokozása, az ügyfél interakciók könnyebbé tétele. |
| A  rendszer  biztosítson  felületet  az  ügyfél  panaszainak,  reklamációinak  feladására  és  annak nyomon  követésére  az  alábbi státuszok, státuszváltások visszaküldésével: |
|•	a panasz befogadása;  |
|•	a válasz várható időpontja;  |
|•	a panasz elbírálásának eredménye |


| Kötelezően teljesítendő követelmények  | A tesztelés módszere |
| ------------- | ------------- |
| 9.	Tartalom menedzsment | Az ellenőrzés során a cég egy munkatársa programozó igénybevétele nélkül és a programkód módosítás nélkül tartalmi változást idéz elő a weblap szövegében. |
| Célja  a  weblap  karbantarthatóságának  egyszerűsítése,  karbantartási költségeinek csökkentése. |
| A  rendszer  tegye  lehetővé  az  adminisztrátornak  (cég egy  munkatársa)  a  tartalmi  elemek  külső  segítség  nélküli  szerkeszthetőségét,  a  hiányzó  adatok  felvitelét, azaz  biztosítson lehetőséget tartalomszerkesztésre a programkód módosítása nélkül. |


| Kötelezően teljesítendő követelmények  | A tesztelés módszere |
| ------------- | ------------- |
| 10.	Eredményesség mérése | A megfelelő statisztikák rendelkezésre állasa és exportálása az ellenőrzést megelőző 3 hónapból, minimum az alábbi adattartalommal:  |
|Célja  a  látogatottsági  statisztikák  mérése  az  esetleges  érdeklődők  célközönség,  potenciális  ügyfelek  jobb  beazonosíthatóságának eléréséhez. | •	látogatások ideje, |
|Háttérstatisztikák  gyűjtése  és  szolgáltatása,  amelyek  minimálisan a következő információkat tartalmazzák:  | •	látogatások hossza, |
| •	látogatások ideje,  |•	érkezés helye,  |
| •	látogatások hossza,  |•	távozás helye. |
| •	érkezés helye,  |
| •	távozás helye.  |


| Kötelezően teljesítendő követelmények  | A tesztelés módszere |
| ------------- | ------------- |
| 11.	Többnyelvűség | Az ellenőrzés időpontjában a magyar nyelven kívül angolul és legalább még egy idegen nyelven elérhető a pályázó internetes értékesítési felülete. A bővíthetőséget legalább egy kifejezés új nyelven történő megadásával kell bizonyítani, a következő módon: A felhasználó, a programozó közreműködése nélkül legalább egy kifejezést megváltoztat a portálon szótárfájlban/háttér nyelvi adatokban, amely azonnali módosulást okoz a portál felületén is. |
|Célja  az  esetleges  külföldi  célközönség megtalálásának  elősegítése, egyszerűen karbantartható, fejleszthető módon. |
| A  portálnak  lehetőséget  kell  nyújtania  egy  egyszerű,  gyors  nyelvbővítésre  oly  módon,  hogy  az  ne  újra programozással jöjjön létre, hanem lehetőséget adjon csak az adott kifejezések  (szavak, mondatok, bekezdések,  vezérlő  felületek)  új  nyelven  történő  megadására.  A  portálnak  legalább  2+1 nyelv kezelését lehetővé kell tennie, az új nyelvek hozzáadását a felhasználóknak a programozók közreműködése nélkül meg kell tudnia oldani. |
|*Tipikusan ilyen megoldás a szótárfájl használata.* |


| Kötelezően teljesítendő követelmények  | A tesztelés módszere |
| ------------- | ------------- |
| 12.	Cég alapadatok szerepeltetése a webáruház felületén | Az ellenőrzés időpontjában a webáruház felületén elérhetőek legalább a követelményben meghatározott adatok és azok a cégközlöny és a cég által biztosított dokumentumok, információk alapján aktuálisak. |
|Célja a bizalom növelése és a törvényi előírások betartása. |
|Legalább   az   alábbi   információknak   szerepelniük   kell   a  webáruház felületén: |
|•	cégadatok (cégnév, székhely, adószám, regisztrációs  szám); |
|•	a cég elérhetőségének adatai (cím, telefonszám) |
|•	ügyfélszolgálati  elérhetőség:  kapcsolattartási  email-cím |


#### Jogi követelmények:

Az elsődleges feltétel a számlaképesség és tevékenységi kör felvétele. Habár engedélyt nem igényel egy webshop elindítása, de számlaképességhez szükséges egy vállalkozási forma megléte.

Miután megalapítottuk a vállalkozásunkat, a következő lépés, hogy jegyeztessük be a „4791 – Csomagküldő, internetes kiskereskedelem" tevékenységi kört, melyben a könyvelőnk fog tudni segíteni.  Továbbá a webshopot indító köteles a kereskedelmi tevékenységét bejelenteni a székhelye szerinti jegyzőnél.

A webshopok tájékoztatási követelményei tekintetében az egyik legfontosabb a fogyasztó és a vállalkozás közötti szerződések részletes szabályairól szóló 45/2014. (II. 26.) Korm. rendelet, melynek 11. §-a meghatározza, hogy a webáruház felületén miről vagyunk kötelesek előzetesen, tehát a szerződés megkötését megelőzően tájékoztatnunk a fogyasztót.
A webshopnak az alábbiakról kell tájékoztatást adnia:

  -  a szerződés szerinti termék lényeges tulajdonságairól,
  -  a vállalkozás nevéről;
  -  a vállalkozás székhelyének postai címéről, és – ha azzal rendelkezik – a telefonszámáról, a telefaxszámáról és az elektronikus levelezési címéről, továbbá annak a vállalkozásnak a nevéről és postai címéről, akinek a nevében eljár;
  -  a vállalkozás üzleti tevékenysége helyének postai címéről, és annak a vállalkozásnak a postai címéről, akinek a nevében eljár, akihez a fogyasztó a panaszait címezheti, ha e cím a c) pont szerint megadott címtől eltér;
  -  a szerződés szerinti termékért vagy szolgáltatásért járó ellenszolgáltatás adóval megnövelt teljes összegéről vagy – ha a termék vagy szolgáltatás jellegéből adódóan az ellenértéket nem lehet előre ésszerűen kiszámítani – annak számítási módjáról, valamint az ezen felül felmerülő valamennyi költségről (így különösen a fuvardíjról vagy a postaköltségről), vagy ha e költségeket nem lehet ésszerűen előre kiszámítani, annak a ténynek a feltüntetéséről, hogy további költségek merülhetnek fel;
  -  a teljesítés feltételeiről, így különösen a fizetésről, a fuvarozásról és a teljesítési határidőről, valamint a vállalkozás panaszkezelési módjáról;
  -  az elállási jog gyakorlásának határidejéről és egyéb feltételeiről, valamint a nyilatkozat-mintáról;
  -  arról, hogy a 14 napos elállási jog gyakorlása esetén a termék visszaküldésének költségét a fogyasztónak kell viselnie, ha a vállalkozás nem vállalta e költség viselését, és – a távollévők között kötött szerződés esetében – a termék postai küldeményként nem küldhető vissza;
  -  arról, hogy mikor nem gyakorolhatja a fogyasztó az elállási jogát,
    m) a kellékszavatosságra és a termékszavatosságra vonatkozó jogszabályi kötelezettségről;
    n) az értékesítés utáni ügyfélszolgálati és egyéb szolgáltatások, valamint a jótállás fennállásáról és annak feltételeiről;
  -  arról, hogy rendelkezésre áll-e a fogyasztókkal szembeni tisztességtelen kereskedelmi gyakorlat tilalmáról szóló törvény szerinti magatartási kódex, illetve a magatartási kódexről történő másolatkérés módjáról;
  -  a digitális adattartalom működéséről, valamint az alkalmazandó műszaki védelmi intézkedésről;
  -  a digitális adattartalom hardverrel és szoftverrel való együttműködési képességéről a vállalkozástól ésszerűen elvárható ismereteknek megfelelően;
  -  a jogszabályi előírás vagy a vállalkozás döntése alapján a vállalkozásra nézve kötelező peren kívüli panaszkezelési mód és vitarendezési mechanizmus igénybevételének lehetőségéről, valamint az ehhez való hozzáférés módjáról;
  -  a békéltető testülethez fordulás lehetőségéről, a vállalkozás székhelye szerint illetékes békéltető testület nevéről és székhelyének postai címéről.

A szolgáltató webshop tulajdonos az igénybe vevő megrendelésének elküldését megelőzően köteles egyértelműen tájékoztatni az igénybe vevőt:
  -  azokról a technikai lépésekről, amelyeket a szerződés elektronikus úton való megkötéséhez meg kell tenni;
  -  arról, hogy a megkötendő szerződés írásba foglalt szerződésnek minősül-e, a szolgáltató iktatja-e a szerződést, illetve, hogy az iktatott szerződés utóbb hozzáférhető lesz-e;
  -  az adatbeviteli hibáknak a szerződéses nyilatkozat elküldését megelőzően történő azonosításához és kijavításához biztosított eszközökről;
  -  a szerződéskötés lehetséges nyelveiről;
  -  arról a – szolgáltatási tevékenységére vonatkozó – magatartási kódexről, amelynek az adott szolgáltatás tekintetében aláveti magát, amennyiben van ilyen; továbbá arról, hogy ez a magatartási kódex elektronikus úton hol hozzáférhető.

A webshopban történő értékesítés során személyes adatokat kezelünk, tehát adatkezelővé válunk. Az adatkezelőnek pedig minden adatkezelési körülményről átlátható tájékoztatást kell adnia megfelelve a GDPR szabályainak.
Az adatkezelési tájékoztatónak tartalmaznia kell az alábbiakat:

 -   A weboldalt üzemeltetőt és elérhetőségeit,
 -   Az adatvédelmi tisztviselő elérhetőségeit (ha van),
 -   A személyes adatok tervezett kezelésének célját,
 -   Az adatkezelés jogalapját,
 -   A weboldalt üzemeltető vagy harmadik fél jogos érdekeit,
 -   A személyes adatok címzettjeit (ha van),
 -   Adott esetben annak tényét, hogy a weboldal harmadik országba vagy nemzetközi szervezet részére kívánja továbbítani a személyes adatokat,
 -   Az érintettek jogait, jogorvoslati lehetőségeit,
 -   A személyes adatok tárolásának időtartamát,
 -   A felügyeleti hatósághoz címzett panasz benyújtásának jogát,
 -   A tájékoztatóban rögzíteni szükséges, hogy az adatkezelés jogszabályon vagy szerződéses kötelezettségen alapul, avagy szerződés kötésének előfeltétele-e, valamint hogy az érintett köteles-e a személyes adatokat megadni, továbbá hogy milyen lehetséges következményekkel járhat, ha az adatkezelő nem adja meg az adatokat,


<h2 align="center">Fejlesztői dokumentáció</h1>


#### Feladat:

Egy webáruházat tervezünk, amelyen termékeket fogunk eladni. A rendszer üzemeltetője szabadon tölthet fel termékeket egy webadminon keresztül amely a vásárlók számára bejelentkezés után előrhetővé válik. Tervünk egy olyan webshop megvalósítása amely mind a funkcionális, mind a jogi követelményeknek megfelelően üzemeltethető és a teljesség hiánya nélkül kielégíti a vásárlókat, üzemeltetőket. A fejlesztési folyamatok során törekszünk a „clean code" elvek integrálására valamint a minnél gyorsabb és egyszerűbb megvalósítására.

#### Környezet:

Linux/Windows 10, Php Laravel keretrendszer, bootstrap, javascript, scss, html

#### Tervezés:

A projektünket a Trello nevű alkalmazással terveztük, ami átláthatóságot, egyszerűséget biztosít és a csapatban dolgozást lényegesen megkönnyebbíti.

#### Megvalósítás menete:

A tervezési folyamatokat követően a fejlesztést verziókezelő segítségével megkezdjük.
 A fejlesztési folyamatokat több ágra osztjuk a fejlesztők között majd az egyes ágak elkészültével mergeljük azokat.
 A fejlesztés előrehaladtával folyamatos moduláris teszteket futtatunk, mely elősegíti az esetleges hibák felfedezését.

#### Tesztelés:

Fehérdobozos (white-box) vagy strukturális teszt, amikor a forráskód alapján készülnek a tesztesetek. Webshopunk fejlesztése folyamán ezt a tesztelési módszert fogjuk követni. A tesztelést strukturális módon végezzük mivel már meglévő kódokat, forráskódokat tesztelünk.

![](md-images/pic1.png)

A strukturális teszt esetén értelmezhető a (struktúra) lefedettség. A lefedettség azt mutatja meg, hogy a struktúra hány százalékát tudjuk tesztelni a meglévő tesztesetekkel. Általában ezeket a struktúrákat teszteljük:

• kódsorok,

• elágazások,

• metódusok,

• osztályok,

• funkciók,

• modulok.

A forráskódok tesztelése közben a projekt folyamatos haladásával egyidejűleg rendszerteszteket is végzünk. A rendszerteszt a már kész szoftverterméket teszteli, hogy megfelel-e:

• a követelmény specifikációnak,

• a funkcionális specifikációnak,

• a rendszertervnek.

A tesztek után meg kell vizsgálni, hogy sikeresen teljesítettük-e a kilépési feltételt. Ehhez a tesztesetben leírt elvárt eredményt hasonlítjuk össze a teszt naplóban lévő valós eredménnyel a kilépési feltétel alapján. Amennyiben releváns eredményeket kapunk a tesztelési folyamatok végén a tesztelést lezárhatjuk és a későbbi tapasztalatok, a program valós futása közben, adhatnak még további eredményeket.

#### Fejlesztési lehetőségek:

Az üzleti teendők automatizálása kulcsfontosságú a hatékony ügyvitel szempontjából. Az egyik ilyen tennivaló a számlázás, ami még akkor is időigényes, ha online számlázunk, amennyiben ezt emberi beavatkozással, kézzel csináljuk. Ennek kiküszöbölésére nyújt kézenfekvő megoldást a [Számla Agent API](https://docs.szamlazz.hu/#introduction) azáltal, hogy direkt hozzáférést biztosít az adatokhoz külső szoftvereknek, például webshopmotoroknak vagy digitális ügyviteli rendszereknek. Ehhez felhasználható a szamlazz.hu api-a.
 Online fizetés, bankkártyás fizetés létrehozása.
 Legvégső fejlesztési lehetőség a webshop kiadása éles szerveren való üzemeltetése.

#### Fejlesztés menete:

**Backend:**

- Adatbázis: Az adatbázis létrehozása elsődleges, hiszen a felhasználó adatait tárolni kell, hogy a megfelelő felhasználó név és jelszó párossal be tudjon jelentkezni a felhasználó a saját profiljába
- Route védés
- Regisztráció: A vásárláshoz szükség van egy profilra, ennek előzetese egy regisztrálás, ami után a vásárlás már megvalósítható, ezeknek az adatait az adatbázisban tároljuk.
- Bejelentkezés: Későbbi vásárlás esetén a fiók már elérhető meggyorsítja a vásárlást.
- Jelszó vissza állítás: Elfelejtett jelszó esetén szükség van a jelszó visszaállítás lehetőségére, ezáltal nincs szükség fejlesztői beavatkozásra a jelszó helyreállításához
- Profil: Profilból elérhető a regisztrált email cím, és az előző vásárlások

**Frontend:**

- Kezdőlap: Kezdőlapon a termékekkel lehet találkozni, aktuális akciók, ajánlatok
- Regisztráció: A vásárláshoz szükség van egy profilra, ennek előzetese egy regisztrálás, ami után a vásárlás már megvalósítható, ezeknek az adatait az adatbázisban tároljuk.
- Bejelentkezés: Későbbi vásárlás esetén a fiók már elérhető meggyorsítja a vásárlást.
- Tartalom: A termékek grafikai elkészítése után, láthatóak a webshopban, majd megvásárolhatóak.
- Kosár: A kosárból tudjuk a vásárlásunkat megerősíteni, fizetés után a kosár tartalma kiürül.
- Kapcsolatfelvétel: Esetleges hiba esetén szükség van egy elérhetőségre amin akár gyorsan (mobiltelefon) akár csak közvetetten (email) el tudják érni a webshop ügyfélszolgálatát

#### Fogalom szótár:

- A back-end (néha backend vagy back end formában is írják) a programoknak, weboldalaknak a hátsó, a felhasználó elől rejtett, a tényleges számításokat végző része. Feladata a front end (a felhasználóval kapcsolatban lévő rész) felől érkező adatok feldolgozása, és az eredményeknek a front end felé történő visszajuttatása.
Weboldal esetén a back-end fejlesztő foglalkozik például a PHP kódok és az adatbázis kezelésével.
- A front-end (néha frontend vagy front end formában is írják) a programoknak, weboldalaknak az a része, amelyik a felhasználóval közvetlenül kapcsolatban van. Feladata az adatok megjelenése, befogadása a felhasználó (vagy ritkábban egy másik rendszer) felől.
Weboldal esetén a front-end fejlesztő foglalkozik például a HTML, a CSS vagy egyes JavaScript kódokkal.
- A Route egy szállítási biztosító társaság, amely az elveszett, ellopott vagy szállítás közben megsérült csomagokra fedezetet nyújt. A Route biztosítja, hogy az ügyfelek azt kapják, amiért fizettek, és lehetővé teszi az egyszerű újrarendelést egyetlen kattintással. Az irányelvek pontosan leírják, hogy mely elveszett, ellopott és sérült tárgyakra vonatkozik az útvonal.
- A Laravel egy nyílt forráskódú PHP alapú keretrendszer, melyet elsősorban webes alkalmazások, esetenként weboldalak készítésére is használhatunk.
 A Laravel előnye, hogy viszonylag gyorsan lehet a segítségével komplexebb feladatokat is megoldani. Ugyan a rendszer előkészítése kicsit körülményesebb, mint például egy WordPress esetében, a fejlesztési idő rendkívül le tud rövidülni a segítségével. (Persze ha egyedi igényekről beszélünk, nem pedig egy bővítmény beállításáról)
- A tiszta kód egy olyan fejlesztő számára is olvasható, továbbfejleszthető, aki nem az eredeti szerző. Vannak hozzá egység- és elfogadási tesztek. Értelmes nevei vannak. Egy dolog elvégzéséhez egy módot biztosít több helyett. Minimális függőségei vannak, melyek világosan meghatározottak. Tiszta és minimális API-t biztosít. A kód literate kell hogy legyen, mivel a nyelvtől függően nem minden szükséges információ fejezhető ki világosan pusztán a kódban.
- A Bootstrap egy nyílt forráskódú, ingyenes kliens oldali keretrendszer. A Twitter Inc. belső fejlesztésű rendszereként indult, 2011-ben nyilvánosan is elérhetővé tették. A jelenlegi 4-es verzió 2015-ben jelent meg. A Bootstrap számos előre elkészített felhasználói felület "darabkát" tartalmaz, úgymint navigációs menük, táblázatok, gombok, űrlapok, satöbbi ezek az úgynevezett komponensek. A komponensek jellemzően egy HTML kódrészletből, és a hozzá tartozó CSS stílus formázásból álnak, de egyes komponenseknek lehet javaScript része is.
- A fehérdobozos teszt (más néven tiszta dobozos teszt, üvegdobozteszt, átlátszódobozteszt és strukturális teszt) egy olyan szoftveres tesztelési módszer, amely az alkalmazás belső struktúráit vagy működését teszteli, szemben annak funkcionalitásával (azaz a feketedobozos teszteléssel). A fehérdobozos tesztelés során a rendszer belső perspektíváját, valamint a programozási készségeket használják a tesztesetek megtervezéséhez. A tesztelő az inputokat választja a kódon keresztüli útvonalak vizsgálatához, és meghatározza a várható kimeneteket. Ez hasonló az áramkör csomópontjainak tesztelésével, például az áramkörön belüli teszteléssel (ICT). A fehérdobozos tesztelés a szoftver tesztelési folyamat egység, integráció és rendszer szintjén alkalmazható. Bár a hagyományos tesztelők hajlamosak voltak úgy gondolni, hogy a fehérdobozos tesztelés egység szinten történik, manapság gyakrabban használják az integrációra és a rendszer tesztelésére. Tesztelheti az egységen belüli útvonalakat, az egységek közötti útvonalakat az integráció során és az alrendszerek között a rendszerszintű teszt során. Noha a teszttervezésnek ez a módszere sok hibát vagy problémát fedezhet fel, lehetséges, hogy elmulasztja a specifikáció nem teljesített részeit vagy a hiányzó 

#### Verziókezelés:

A verziókezelői tevékenységek végrehajtására a Git nyílt forráskódú, elosztott verziókezelő szoftvert használjuk



<h2 align="center">Szerzők</h1>

* **Merk Dóra**
* **Novák Dániel**
* **Tomasovszki Adrián**

<h2 align="center">Hivatkozások</h1>

[Funkcionális követelmények](https://adoc.pub/9-sz-melleklet-internetes-ertekesites-vallalati-webaruhaz-fu.html)
[Jogi követelmények](https://virtualjog.hu/2021/10/20/webaruhaz-nyitas-jogi-feltetelei-2021/?gclid=CjwKCAjwpqCZBhAbEiwAa7pXeVTLqYSP5Izf_UPryjHhIZLIvIGHQINDvv0ycI_mIz5JXXc4hUTrsBoC-z8QAvD_BwE&fbclid=IwAR0-Ei8PPY1FuGdK5cqRTTIJG1iOx5u3Wdgjcoh5dcP0L8D_p__qwu3x6e0)
<h2 align="center">Verziók</h1>

* **Laravel** (v9.31.0)
* **Php** (v8.0.11)
* **Docker** (v20.10.7)
* **Npm** (v7.24.1)
* **NodeJS** (v16.17.1)
