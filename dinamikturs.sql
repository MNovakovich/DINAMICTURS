-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 01, 2017 at 08:47 
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dinamikturs`
--

-- --------------------------------------------------------

--
-- Table structure for table `aranzman`
--

CREATE TABLE `aranzman` (
  `id` int(11) NOT NULL,
  `vrsta` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aranzman`
--

INSERT INTO `aranzman` (`id`, `vrsta`) VALUES
(6, 'ekskurzije'),
(7, 'evropski_gradovi'),
(5, 'hot_destinacije'),
(3, 'jesen'),
(8, 'krstarenja'),
(2, 'ljeto'),
(1, 'proljece'),
(4, 'zima');

-- --------------------------------------------------------

--
-- Table structure for table `drzaveLjeto`
--

CREATE TABLE `drzaveLjeto` (
  `id` int(11) NOT NULL,
  `naziv` varchar(45) NOT NULL,
  `slika` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `drzaveLjeto`
--

INSERT INTO `drzaveLjeto` (`id`, `naziv`, `slika`) VALUES
(1, 'GRČKA', 'images/maleNajava/grcka.jpg'),
(2, 'ŠPA-ITA FRA', 'images/uploads/FRANCUSKA.jpg'),
(3, 'CRNA GORA', 'images/maleNajava/crnagora.jpg'),
(4, 'ITALIJA', 'images/uploads/ITALIJA.jpg'),
(5, 'HRVATSKA', 'images/uploads/HRVATSKA.jpg');

-- --------------------------------------------------------

--
-- Stand-in structure for view `glavniPregled`
-- (See below for the actual view)
--
CREATE TABLE `glavniPregled` (
`id` int(11)
,`hotel_naziv` varchar(256)
,`foto` varchar(256)
,`tekst_naslovna` varchar(1024)
,`datum_azuriranja` datetime
,`first_minut` tinyint(1)
,`last_minut` tinyint(1)
,`ponuda_id` int(11)
,`naslov` varchar(255)
,`godina` year(4)
,`aranzman_id` int(11)
,`aranzman` varchar(50)
,`drzava_id` int(11)
,`drzavaLjeto` varchar(45)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `hotDestinacije`
-- (See below for the actual view)
--
CREATE TABLE `hotDestinacije` (
`naslov` varchar(255)
,`slika` varchar(256)
,`tekst` text
,`godina` year(4)
);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `hotel_naziv` varchar(256) NOT NULL,
  `hitCena` int(11) NOT NULL,
  `tekst_naslovna` varchar(1024) NOT NULL,
  `informacije` longtext NOT NULL,
  `plan_putovanja` longtext NOT NULL,
  `cenovnik_info` longtext NOT NULL,
  `cenovnikPDF` varchar(256) NOT NULL,
  `last_minut` tinyint(1) NOT NULL,
  `first_minut` tinyint(1) NOT NULL,
  `deaktivirano` tinyint(1) NOT NULL,
  `datum_objavljivanja` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `datum_azuriranja` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ponuda_id` int(11) NOT NULL,
  `foto_1` varchar(256) NOT NULL,
  `foto_2` varchar(256) DEFAULT NULL,
  `foto_3` varchar(256) DEFAULT NULL,
  `foto_4` varchar(256) DEFAULT NULL,
  `foto_5` varchar(256) DEFAULT NULL,
  `foto_6` varchar(256) DEFAULT NULL,
  `foto_7` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `hotel_naziv`, `hitCena`, `tekst_naslovna`, `informacije`, `plan_putovanja`, `cenovnik_info`, `cenovnikPDF`, `last_minut`, `first_minut`, `deaktivirano`, `datum_objavljivanja`, `datum_azuriranja`, `ponuda_id`, `foto_1`, `foto_2`, `foto_3`, `foto_4`, `foto_5`, `foto_6`, `foto_7`) VALUES
(1, 'EKSKLUZIVNA - DINAMIK VILA', 542, 'Turistička agencija \"Dinamik turs\" vam predstavlja NEŠTO NOVO U PONUDI-DINAMIK VILA\r\nCijena vec od 2.054KM\r\n ---za 7 nocenja ---\r\nSmještajni kapacitet vile: 8 odraslih + 2 djece', 'Objekt Paradise Villas Istria Croatia nalazi se u mjestu Svetvinčenat, na 10 km od dvorca Morosini-Grimani. U okviru objekta smješteno je besplatno privatno parkiralište.\r\n\r\nSve su jedinice klimatizirane i imaju terasu, blagovaonicu i prostor za sjedenje s TV-om ravnog ekrana sa satelitskim programima. Sve jedinice uključuju kuhinju s perilicom posuđa i pećnicom. Na raspolaganju su mikrovalna pećnica i aparat za pripremu kave. Sve jedinice sadrže vlastitu kupaonicu s kadom. Na raspolaganju je posteljina.\r\nObjekt Paradise Villas Istria Croatia također uključuje vanjski bazen. Zračna luka Pula udaljena je 12 km od objekta Paradise Villas Istria Croatia.<br><br> \r\n\r\nVila je sagrađena po najvišim standardima i bogato opremljena.\r\n❇4 spavaće sobe ❇dnevni boravak\r\n❇bazen i velnes\r\n❇dvorište\r\n❇terasa za sunčanje\r\n❇klima-uređaj\r\n❇grijanje\r\n❇sobe za nepušače\r\n❇TV\r\n❇sef za prijenosno računalo\r\n❇satelitski programi\r\n❇aparat za pripremu kafe/čaja\r\n....i još mnoge pogodnosti...\r\nRezervišete već danas,odmarajte sa stilom.\r\n\r\n\r\n', 'Parkiralište\r\nBesplatno! Besplatno privatno parkiralište dostupno je u okviru objekta i nije potrebna rezervacija.<br>\r\n\r\nInternet\r\nBesplatno! Bežični pristup internetu dostupan je u smještajnim jedinicama i ne naplaćuje se.<br><br>\r\n\r\nKućni ljubimci<br>\r\nBesplatno! Na zahtjev je dozvoljen boravak kućnih ljubimaca i ne naplaćuje se.<br><br>\r\n\r\nKuhinja<br>\r\n•	dječja stolica<br>\r\n•	kuhinjski stol<br>\r\n•	aparat za kavu<br>\r\n•	sredstva za čišćenje<br>\r\n•	pećnica<br>\r\n•	kuhalo za vodu<br>\r\n•	perilica rublja<br>\r\n•	perilica posuđa<br>\r\n•	mikrovalna pećnica<br>\r\n•	hladnjak<br>\r\n<br><br>\r\nKupaonica<br>\r\n•	ručnici<br>\r\n•	bide<br>\r\n•	ručnici/ posteljina uz nadoplatu<br>\r\n•	besplatan toaletni pribor<br>\r\n•	sušilo za kosu<br>\r\n•	tuš kabina<br>\r\n•	toaletni papir<br>\r\n•	dodatna kupaonica<br>\r\n•	dodatni WC<br>\r\n<br><br>\r\nSadržaji sobe<br>\r\n•	glačalo<br>\r\n•	klima-uređaj<br>\r\n•	sušilo za rublje<br>\r\n•	stalak za odjeću<br>\r\n•	antialergijska soba<br>\r\n•	drveni/ parketni pod<br>\r\n•	glačalo i stol za glačanje<br>\r\n•	sef<br>\r\n<br><br>\r\nDnevni boravak<br>\r\n•	blagovaonica<br>\r\n•	kamin<br>\r\n•	prostor za sjedenje<br>\r\n•	radni stol<br>\r\n<br><br>\r\nMediji i tehnologija<br>\r\n•	TV ravnog ekrana<br>\r\n•	kabelski programi<br>\r\n•	satelitski programi<br>\r\n•	TV<br>\r\n•	sef za prijenosno računalo<br>\r\n<br><br>\r\nDvorište<br>\r\n•	vanjska blagovaonica<br>\r\n•	vanjski namještaj<br>\r\n•	terasa<br>\r\n•	roštilj<br>\r\n•	privatni bazen<br>\r\n•	oprema za roštilj<br>\r\n•	balkon<br>\r\n•	dvorište<br>\r\n<br><br>\r\nDostupnost<br>\r\n•	gornji katovi dostupni isključivo stepenicama<br>\r\n•	čitava jedinica nalazi se u prizemlju<br>\r\n<br><br>\r\nBazen i wellness<br>\r\n•	vanjski bazen<br>\r\n<br><br>\r\nHrana i piće<br>\r\n•	aparat za pripremu kave/čaja<br>\r\n<br><br>\r\nAktivnosti<br>\r\n•	teniski teren<br>\r\n<br><br>\r\nDvorište i pogled<br>\r\n•	pogled na bazen<br>\r\n•	pogled na vrt<br>\r\n•	pogled na more<br>\r\n•	pogled<br>\r\n<br><br>\r\nRazno<br>\r\n•	sobe za nepušače<br>\r\n<br>\r\n\r\n', 'Specijalna ponuda  Smještajni kapacitet vile: 8 odraslih + 2 djece.<br>  Cijena vec od <h2>2.054KM</h2><br>', '', 1, 0, 0, '2017-07-08 18:48:37', '2017-07-08 18:48:37', 16, 'images/uploads/dinamikVilaAir.jpg', 'images/uploads/dinamikVila1.jpg', 'images/uploads/dinamikVila2.jpg', 'images/uploads/dinamikVila3.jpg', 'images/uploads/dinamikVila4.jpg', 'images/uploads/dinamikVila5.jpg', 'images/uploads/dinamikVila.jpg'),
(2, 'Kstrarenje Mediteranom', 555, '10 dana, BUS + BROD\r\nTermini: 22.04.-01.05.2017. i 16.05.-25.05.2017.', '1. DAN – BiH – HRVATSKA – SLOVENIJA - ITALIJA\r\nPolazak u podnevnim satima iz BiH. Vožnja luksuznim autobusima na relaciji Sarajevo–Ljubljana–Venecija–Verona–Azurna obala.\r\n\r\n2. DAN - NICA – MONAKO – MONTE KARLO\r\nU prijepodnevnim satima dolazak na Azurnu obalu. Obilazak Nice: Englesko šetalište (Promenade des Anglais), hotel Negresko (Negresco)... Cjelodnevni boravak u Nici. U večernjim satima polazak prema Kneževini Monako. Razgledanje bajkovitog grada: Palata Grimaldijevih, Katedrala, Okeanografski muzej, staza Formule 1. Posjeta magičnom gradu kocke i obilazak čuvenog Casina uz šetnju prelijepim parkovima Monte Karla. Poslije obilaska male mondenske države slijedi noćna vožnja i nastavak putovanja preko Francuske.\r\n\r\n3. DAN - LLORET DE MAR\r\nU jutarnjim satima dolazak u najpoznatiji turistički centar na Costa Bravi - Lloret de Mar (65 km od Barselone). Smještaj u hotel sa 3* do 14.00h (4 puna pansiona – sva tri obroka na bazi švedskog stola). Popodne predviđeno za odmor i kupanje. Večera. Svake večeri fakultativni odlazak u diskoteku. Noćenje.\r\n\r\n4 – 6. DAN - LLORET DE MAR – BARSELONA\r\nPun pansion. Odlazak na neke od najinteresantnijih fakultativnih izleta: FLAMENCO LA SIESTA, BARCELONA PANORAMICA, COSTA BRAVA, BARCELONA BY NIGHT, PORT AVENTURA, NOU CAMP, DALIJEV MUZEJ, AQUARIUM, DISCOTHEQUE TROPICS... Pored toga, imati ćete priliku da provedete najuzbudljivije trenutke u temperamentnom noćnom životu Lloreta i Barselone.\r\n\r\n7. DAN – LJORET DE MAR – FIGUERES – BARSELONA– KRSTARENJE MEDITERANOM\r\nDoručak (u zavisnosti od izbranog smještaja). Prijepodnevni fakultativni polazak u Figueres i obilazak muzeja Salvadora  Dalija. Popodne polazak za Barselonu. Po dolasku u centar grada slobodno vrijeme za obilazak nekog od brojnih muzeja, šoping i individualne aktivnosti. U zakazano vrijeme polazak prema luci, ukrcavanje na brod i smještaj u kabine. Isplovljavanje iz luke Barselona u 20.00h... Slobodno vrijeme za korištenje jedne od mnogobrojnih pogodnosti koju pruža ovaj “ploveći hotel”... muzika uživo, plesni show, disco club, casino, piano bar, bazen, fitness, jacuzzi, free shop... Dogovoreni odlazak u diskoteku na brodu. Noćenje u moderno opremljenim brodskim kabinama (kupatilo, tuš/ WC...).\r\n\r\n8. DAN - KRSTARENJE MEDITERANOM – CHIVITAVECIJA – RIM\r\nJutarnji animatorski program na brodu i zabavljanje uz niz zanimljivih sadržaja (kupanje na bazenima, bioskop, casino...) do popodnevnih sati, kada je očekivano uplovljavanje u luku Ćivitavekija (oko 19h). Nakon iskrcavanja, polazak prema Rimu sa obilaskom: Coloseo, Foro Imperiali, Piazza Venezia, Fontana di Trevi i Piazza di Spagna. Nakon boravka u Rimu, slijedi nastavak putovanja preko Italije... Noćna vožnja...\r\n\r\n9. DAN – VENECIJA\r\nU jutarnjim satima dolazak u luku Punta Sabbioni. Fakultativna vožnja brodom do Venecije (Trg Sv. Marka). Razgledanje grada: Duždeva palata, Libreria, Bazilika Svetog Marka, zvonik Kampanile, Torre del Orologio, zgrade Procuratie, most Rialto, most Uzdaha, crkva Santa Maria della Salute... Boravak u Veneciji u trajanju od 9h. Nakon obilaska i slobodnog vremena, povratak do luke i polazak za BiH...\r\n\r\n10. DAN - BiH\r\nDolazak u mjesto polaska u popodnevnim satima.', '', '<h3>HIPER FIRST MINUTE POPUST OD 100KM</h3><br>\r\n\r\nZA UPLATE AVANSA OD MIN 50KM NAJKASNIJE DO 20. DECEMBRA 2016.<br>\r\n\r\nHIPER FIRST MINUTE CIJENA ARANŽMANA<br>\r\n\r\n(za uplate avansa od 50 KM i prijave do 20. Decembra 2016.)<br>\r\nAPARTMANI U SPANIJI 3* Lloret de Mar  -  395 KM <br>\r\nHOTELI U SPANIJI 3* Lloret de Mar (PUNI PANSION) - 499 KM<br>\r\n\r\nREGULARNA CIJENA ARANŽMANA<br>\r\n\r\n(za uplate avansa od 50 KM i prijave nakon 20. Decembra 2016.)<br>\r\nAPARTMANI U SPANIJI 3* Lloret de Mar  -  495 KM <br>\r\nHOTELI U SPANIJI 3* Lloret de Mar (PUNI PANISON) - 599 KM<br>\r\n\r\n***\r\nEXTRA FIRST MINUTE BONUS<br>\r\nZa prvih 50 prijava u svakom terminu SOL&BUENA Vam poklanja besplatan <br>›UPGRADE‹ sa unutrašnje kabine na JUNIOR SUITE!!!<br>\r\n\r\n \r\n\r\nCIJENA UKLJUČUJE:<br>\r\n\r\nKompletnu organizaciju uz pratioca putovanja.<br>\r\nPosjeta gradovima planiranim prema programu putovanja.<br>\r\n4 puna pansiona (sva 3 obroka - švedski sto), (hotel 3*, centar grada, <br>\r\nbazen, sobe 1/3 i 1/4) u Ljoret de Maru, ili 4 noćenja u moderno i komforno opremljenim apartmanima (4,6 i 8 kreveta ) u Lloret de Maru.<br>\r\n1 noćenje u 1/3 i 1/4 moderno opremljenim unutrašnjim brodskim kabinama (kupatilo, tuš/ WC...) na brodu flote GRIMALDI LINES na relaciji Barselona - Rim (luka Civitavecchia).<br>\r\nPrevoz modernim turističkim autobusima (KLIMA, WC, TV, VIDEO) na navedenim relacijama.<br>\r\nCIJENA NE UKLJUČUJE:<br>\r\n\r\nPutničko zdravstveno osiguranje<br>\r\nDoplatu za 1/2 sobu u Španiji u iznosu od 40KM.<br>\r\nDoplatu za 1/1 sobu u Španiji u iznosu od 120KM.<br>\r\nDoplatu za 1/2 kabinu na brodu u iznosu od 70KM.<br>\r\nDoplatu za 1/1 kabinu na brodu u iznosu od 120KM.<br>\r\nObaveznu gradsku taksu za regiju Katalonije (od 01.11.2012) – u hotelima sa 1*, 2* i 3* – 0.50 € po noćenju / po osobi, a za boravak u hotelima sa 4* – 1 € po noćenju / po osobi - plaća se na recepciji hotela, turisticku taxu za boravak na brodu 4* u iznosu od 3€ po noćenju / po osobi!<br>\r\nFakultativne izlete, vožnju brodom od luke Punta Sabbioni do Venecije i nazad, kao  i ulaznice planirane po programu.\r\n', '', 0, 1, 0, '2017-07-08 18:30:14', '2017-07-08 18:30:14', 11, 'images/uploads/krstareneMediteran.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'VILA ANGELIKI – Lasi', 350, '', '', '', '', '', 0, 0, 0, '2017-07-08 18:49:05', '2017-07-08 18:49:05', 16, 'images/dinamikvila.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'HELENA STUDIOS-APARMENTS / NIDRI', 540, 'Smještaj se nalazi na 200m od mora i 800m od plaže, a 450m od centra Nidrija. U blizini smještaja se mogu naći taverne, restorani i supermarketi.', 'Smještaj se nalazi na 200m od mora i 800m od plaže, a 450m od centra Nidrija. U blizini smještaja se mogu naći taverne, restorani i supermarketi. U sklopu kompleksa nalazi se i parking. Studiji i apartmani imaju kupatilo, balkon, mini kuhinju, klimu (uz doplatu) i TV. Svaki apartman ima 2 spavaće sobe (bračni ležaj i 2 odvojena ležaja) i odvojenu kuhinju.', 'LEFKADA - NIDRI 2017\r\n\r\nLefkada je ostrvo jonskog arhipelaga, nalazi se južno od Krfa i sjeveroistočno od Kefalonije, a sa kontinentalnim dijelom Grčke povezana je pokretnim mostom. Lefkadu sa razlogom zovu ostrvom boja (bijela boja stijena, šljunka i pijeska po kojima je ostrvo i dobilo ime (lefko-bijelo), nijanse plave boje mora koje se mogu uporediti samo sa morima dalekih, egzotičnih destinacija; zelenilo borova, čempresa, maslina i šarenilo cvijeća… Pored veličanstvenih i nesvakidašnjih prirodnih lepota, ostrvo obiluje i kulturnim i zabavnim sadržajima. Brojni beach-barovi, klubovi, tradicionalni restorani i izleti garantuju vrhunski provod. Upustimo se u avanturu!!!\r\n\r\n1. DAN (BIH)\r\n\r\nPolazak iz BiH u jutarnjim satima.Vožnja preko Makedonije i Grčke sa usputnim zadržavanjima radi pauze i odmora.\r\n\r\n2 – 10. DAN (LEFKADA – NIDRI)\r\n\r\nPoslije noćne vožnje, slijedi dolazak na Lefkadu. Biser Jonskog mora pružiće Vam savršenu kombinaciju odmora i zabave. Ono što Lefkadu činu jedinstvenom u odnosu na mnoga Grčka ostrva jeste sačuvana autentičnost i diskretnost. Zahvaljujući tome, prirodne ljepote ovog ostrva ostaviće Vas bez daha i učiniti da ovo bude jedno nezaboravno ljetovanje!!! Naravno, i dobar provod je nešto nezaobilazno na našim putovanjima. Zahvaljujući mnogim koktel, beach, boat, tematskim i karaoke zabavama, doživjet ćete vrhunac zabave tokom našeg boravka na ostrvu!\r\n\r\n11. DAN (GRČKA – MAKEDONIJA – BIH)\r\n\r\nPoslije napuštanja soba i slobodnog vremena za šoping, krećemo nazad ka Beogradu. Noćna vožnja preko Grčke i Makedonije prema Srbiji.\r\n\r\n12. DAN (BIH)\r\n\r\nDolazak u BiH u popodnevnim satima.', 'HIPER FIRST MINUTE -100KM / za prijave do 31.05.\r\n(Za prijave do 31.05. odobrava se popust od -100 KM na cijene navedene u tabeli)\r\n\r\nCIJENA UKLJUČUJE:\r\n\r\nKompletnu organizaciju uz pratioca putovanja.\r\n9 noćenja u izabranom smeštaju na Lefkadi u Nidriju.\r\nPrevoz modernim turističkim autobusima (KLIMA, WC, TV, VIDEO) na navedenim relacijama.\r\nCIJENA NE UKLJUČUJE:\r\n\r\nFakultativne izlete.\r\nPutničko i zdravstveno osiguranje 2 KM po danu.\r\nDoplata za posebno sjedište u autobusu 40,00 KM (sjedišta iza suvozača, sjedišta za stolom, sjedišta iza 2. vrata).\r\nNAPOMENA:\r\n\r\nSvaki putnik mora imati uplaćeno putničko zdravstveno osiguranje (vlastito ili uplaćeno putem agencije) bez obzira da li podliježe procesu viziranja BH pasoša ili ne.\r\nZa sve aranžmane važe Opšti uslovi putovanja SOL AZURA i BUENA VISTE od 01.04.2008. a koji su usklađeni sa UTABIH standardima.', '', 0, 1, 0, '2017-07-09 01:35:16', '2017-07-09 01:35:16', 4, '', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'GRAN CASINO ROYAL 3***', 333, 'AZURNA OBALA / ŠPANIJA / ITALIJA\r\nCIJENA OD:979,00KM\r\n(14 DANA - 9 NOĆENJA)\r\n', '<h3>Kosta Brava</h3> je jedna od najfascinantnijih i najpopularnijih turističkih regija<br> Španije i upravo tu su smještene najljepše pješčane plaže. Najznačajnije i najpopularnije ljetovalište regije je Ljoret de Mar, mesto sa 30.000 stanovnika.<br> Sa 200.000 turista, ljeti postane živahan gradić, sa brojnim koktel barovima i <br>klubovima. Divne pješčane plaže ukupne dužine 7 km, čista voda Sredozemnog mora, barovi na plaži, raznoliki specijaliteti od plodova mora, kao i blizina Barselone, opravdava nadimak Ljoreta – turistički biser Kosta Brave i Katalonije. ', '  \r\n<h3>1. DAN  (srijeda) – BIH</><br>\r\nPolazak iz BiH u dogovoreno vrijeme. Vožnja luksuznim autobusima na relaciji Sarajevo – Ljubljana – Venecija – Verona – Azurna obala. <br><br>\r\n\r\n<h3>2. DAN (četvrtak) – KAN – NICA</h3><br>\r\nU popodnevnim satima dolazak na Azurnu obalu. Smještaj u hotel u jednom od poznatih gradova ove predivne rivijere (Nica, Kan ili bliža okolina). Slobodno vrijeme za kupanje, odmor ili individualni obilazak grada. Noćenje.\r\n\r\n<h3>3. DAN  (petak) – AZURNA OBALA – MONAKO/MONTE KALRLO</h3><br>\r\nU jutarnjim satima odjava iz hotela. Slobodno vrijeme do 15h. U popodnevnim satima slijedi obilazak najpoznatijih mondenskih gradova na Azurnoj obali... Nica: Englesko šetalište (Promenade des Anglais), hotel Negresco... Kraća vožnja do Kana, šetnja po mondenskom šetalištu „La Croissette“, razgledanje filmske palate ... U večernjim satima polazak prema Kneževini Monako. Razgledanje bajkovitog grada: Palata Grimaldijevih, Katedrala, Okeanografski muzej, staza Formule 1. Posjeta magičnom gradu kocke i obilazak čuvenog „Casina“ uz šetnju prelijepim parkovima Monte Karla. Poslije obilaska male mondenske države slijedi noćna vožnja i nastavak putovanja preko Francuske.<br><br>\r\n\r\n<h3>4. DAN  (subota) – </h3><br>\r\nU jutarnjim satima dolazak u najpoznatiji turistički centar na Kosta Bravi - Ljoret de Mar (65 km od Barselone). Smještaj u hotel sa 3* ili 4* do 14.00h (na bazi 7 polupansiona – na bazi švedskog stola). Popodne predviđeno za odmor i kupanje. Večera. Noćenje.<br>  \r\n\r\n<h3>5 – 10. DAN  (nedjelja – petak) – LJORET DE MAR – BARSELONA</h3><br>\r\nPolupansion. Vaš boravak u Španiji učiniće nezaboravnim odlazak na neke od najinteresantnijih fakultativnih izleta: FLAMENCO LA SIESTA, BARCELONA PANORAMICA, COSTA BRAVA, BARCELONA BY NIGHT, PORT AVENTURA, NOU CAMP, DALIJEV MUZEJ, AQUARIUM, DISKOTEKA TROPICS... Pored toga, imaćete priliku da provedete najuzbudljivije trenutke u temperamentnom „noćnom životu” Ljoreta i Barselone.<br>\r\n\r\n\r\nOsim predviđenih izleta, vrijeme na ljetovanju možete iskoristiti uživajući u kupanju, odmaranju i sunčanju na prelijepim pjeskovitim plažama Kosta Brave. Provjerite zašto su plaže Ljoret de Mara vlasnice „Plave zastave“ koja se dodjeljuje plažama na osnovu kvaliteta vode, kvaliteta peska, sigurnosti za plivače i ispunjenošću pratećim sadržajima>.<br><br>\r\n\r\n<h3>11. DAN  (subota) – LJORET DE MAR – FRANCUSKA</h3><br>\r\nDoručak. Poslije doručka, check-out iz hotela i slobodno vrijeme. Polazak iz Ljoreta u kasnim popodnevnim satima. Noćna vožnja kroz Francusku sa usputnim pauzama za odmor grupe.\r\n\r\n12. DAN  (nedelja) – MILANO – ITALIJA\r\nU jutarnjim satima dolazak u Milano. Po dolasku razgledanje grada: Galerija Vitorio Emanuele, Duomo, Opera Skala... Slobodno vrijeme za individualni obilazak grada. Smeštaj u hotelu sa 3* ili 4* u Milanu ili bližoj okolini. Noćenje. \r\n\r\n13. DAN  (ponedjeljak) – VENECIJA – SLOVENIJA\r\nDoručak. Polazak prema Veneciji. Dolazak u luku Punta Sabioni, fakultativna vožnja brodićem venecijanskom lagunom. Po dolasku u Veneciju, razgledanje grada: Duždeva palata, most Uzdaha,  Bazilika Svetog Marka, zvonik Kampanile, Prokuracie, most Rialto, Santa Maria... Slobodno vrijeme za šetnju i individualni obilazak grada. Nakon obilaska povratak do luke i polazak za BiH. Noćna vožnja preko Slovenije i Hrvatske.\r\n\r\n14. DAN  (utorak) – BIH\r\nDolazak u mjesto polaska u jutarnjim satima.\r\n', '<h3>CIJENA UKLJUČUJE:</h3><br>\r\n•	Kompletnu organizaciju uz pratioca putovanja.\r\n•	Prevoz modernim turističkim autobusima  (KLIMA, WC, TV, VIDEO) na navedenim relacijama. \r\n•	Obilaske gradova prema programu putovanja.\r\n•	1 noćenje u Kanu, Nici ili okolini (hotel 2* ili 3* ili 4*, sobe 1/2 i 1/2+1).\r\n•	7 noćenja u odabranom hotelu i na bazi odabrane usluge – (obroci su na bazi švedskog stola) u Ljoret de Maru, prema važećem cjenovniku.\r\n•	1 noćenje sa doručkom (kontinentalni) u Milanu ili bližoj okolini (hotel 3* ili 4*, sobe 1/2 i 1/2+1)<br>\r\n\r\n\r\n<h3>CIJENA NE UKLJUČUJE:</h3><br>\r\n•	Putničko i zdravstveno osiguranje 2 KM po danu.\r\n•	Fakultativne izlete, vožnju brodićem do Venecije 25 € (povratna karta) i ulaznice planirane po programu.\r\n•	Doplatu za 1/1 (jednokrevetnu) sobu.\r\n•	Obavezne gradske komunalne takse koje se plaćaju na recepciji hotela:\r\n•	Obaveznu gradsku taksu za regiju Katalonije (od 01.11.2012) – u hotelima sa 1*, 2* i 3* – 0.50 € po noćenju/po osobi, a za boravak u hotelima sa 4* – 1 € po noćenju/po osobi - plaća se na recepciji hotela.\r\n•	Obaveznu gradsku  taksu za Milano i okolinu (od 15.09.2012)– u hotelima sa 2* i 3* – 4 € po noćenju / po osobi, a za boravak u hotelima sa 4* i 5* – 5 € po noćenju / po osobi -  plaća se na recepciji hotela. \r\n•	Obaveznu gradsku  taksu za Kan – 2* i 3* 0,80 € po noćenju/po osobi, a za boravak u hotelima sa 4* – 1,3 € po noćenju/po osobi -  plaća se na recepciji hotela.\r\n•	Doplata za posebno sjedište u autobusu 40,00 KM (sjedišta iza suvozača, sjedišta za stolom, sjedišta iza 2. vrata).<br>\r\n\r\n<h3>POPUSTI:</h3><br> \r\n•	Djeca ostvaruju popust samo u pratnji dvije punoplatežne osobe. <br>\r\n\r\n\r\n\r\n<h3>NAPOMENA:</h3><br>\r\n\r\n•	Svaki putnik mora imati uplaćeno putničko zdravstveno osiguranje (vlastito ili uplaćeno putem agencije) bez obzira da li podliježe procesu viziranja BH pasoša ili ne.\r\n\r\n•	Za sve aranžmane važe Opšti uslovi a koji su usklađeni sa UTABIH standardima.<br>\r\n<h3>CIJENA UKLJUČUJE:</h3><br>\r\n•	Kompletnu organizaciju uz pratioca putovanja.\r\n•	Prevoz modernim turističkim autobusima  (KLIMA, WC, TV, VIDEO) na navedenim relacijama. \r\n•	Obilaske gradova prema programu putovanja.\r\n•	1 noćenje u Kanu, Nici ili okolini (hotel 2* ili 3* ili 4*, sobe 1/2 i 1/2+1).\r\n•	7 noćenja u odabranom hotelu i na bazi odabrane usluge – (obroci su na bazi švedskog stola) u Ljoret de Maru, prema važećem cjenovniku.\r\n•	1 noćenje sa doručkom (kontinentalni) u Milanu ili bližoj okolini (hotel 3* ili 4*, sobe 1/2 i 1/2+1).<br>\r\n\r\n\r\nCIJENA NE UKLJUČUJE:<br>\r\n•	Putničko i zdravstveno osiguranje 2 KM po danu.\r\n•	Fakultativne izlete, vožnju brodićem do Venecije 25 € (povratna karta) i ulaznice planirane po programu.\r\n•	Doplatu za 1/1 (jednokrevetnu) sobu.\r\n•	Obavezne gradske komunalne takse koje se plaćaju na recepciji hotela:\r\n•	Obaveznu gradsku taksu za regiju Katalonije (od 01.11.2012) – u hotelima sa 1*, 2* i 3* – 0.50 € po noćenju/po osobi, a za boravak u hotelima sa 4* – 1 € po noćenju/po osobi - plaća se na recepciji hotela.\r\n•	Obaveznu gradsku  taksu za Milano i okolinu (od 15.09.2012)– u hotelima sa 2* i 3* – 4 € po noćenju / po osobi, a za boravak u hotelima sa 4* i 5* – 5 € po noćenju / po osobi -  plaća se na recepciji hotela. \r\n•	Obaveznu gradsku  taksu za Kan – 2* i 3* 0,80 € po noćenju/po osobi, a za boravak u hotelima sa 4* – 1,3 € po noćenju/po osobi -  plaća se na recepciji hotela.\r\n•	Doplata za posebno sjedište u autobusu 40,00 KM (sjedišta iza suvozača, sjedišta za stolom, sjedišta iza 2. vrata).\r\n\r\nPOPUSTI: \r\n•	Djeca ostvaruju popust samo u pratnji dvije punoplatežne osobe. \r\n\r\n\r\n\r\nNAPOMENA:\r\n\r\n•	Svaki putnik mora imati uplaćeno putničko zdravstveno osiguranje (vlastito ili uplaćeno putem agencije) bez obzira da li podliježe procesu viziranja BH pasoša ili ne.\r\n\r\n•	Za sve aranžmane važe Opšti uslovi a koji su usklađeni sa UTABIH standardima.\r\n\r\n<br<br>\r\n<i>\r\n12.07.-25.07.-- (979KM po osobi), prvo dijete (2-12 god)-589KM, drugo dijete (2-12 god) 759KM, 3. ili 4. odrasla osobe u 1/2 sobi-879KM,<br>\r\n19.07.-01.08. --(999KM po osobi), prvo dijete (2-12 god)-589KM, drugo dijete (2-12 god) 779KM, 3. ili 4. odrasla osobe u 1/2 sobi-919KM,<br>\r\n16.08.-29.08. --(959KM po osobi), prvo dijete (2-12 god)- 569KM, drugo dijete (2-12 god) 739KM, 3. ili 4. odrasla osobe u 1/2 sobi-859KM,</i><br>\r\n\r\n', '', 1, 0, 0, '2017-07-09 01:38:52', '2017-07-09 01:38:52', 14, '', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `izdvajamo`
--

CREATE TABLE `izdvajamo` (
  `id` int(11) NOT NULL,
  `foto` varchar(256) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `izdvajamo`
--

INSERT INTO `izdvajamo` (`id`, `foto`, `url`) VALUES
(1, 'images/dinamikvila.jpg', ''),
(4, 'images/mladi.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `ponuda`
--

CREATE TABLE `ponuda` (
  `id` int(11) NOT NULL,
  `naslov` varchar(255) NOT NULL,
  `slika` varchar(256) NOT NULL,
  `tekst` text NOT NULL,
  `video_link` varchar(256) DEFAULT NULL,
  `drzaveLjeto_id` int(11) DEFAULT NULL,
  `aranzman_id` int(11) NOT NULL,
  `godina` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ponuda`
--

INSERT INTO `ponuda` (`id`, `naslov`, `slika`, `tekst`, `video_link`, `drzaveLjeto_id`, `aranzman_id`, `godina`) VALUES
(3, 'ASPROVALTA', 'images/drzave/grcka/ASPROVALTA/nea-vrasna-apartmani-grcka-letovanje-nea-vrasna-grcka-beach-nea-vrasna-greece-3.jpg', '', 'https://www.youtube.com/embed/k9cZbVqsosA', 1, 2, 2017),
(4, 'DIONIS BEACH', 'images/drzave/grcka/DIONISOS BEACH/dionisos_beach1.jpg', '', NULL, 1, 2, 2017),
(5, 'Moskva - zlatni prsten', '', '', NULL, NULL, 7, 2017),
(6, 'HANIOTI', 'images/drzave/grcka/hANIOTI/hanioti-579355.jpg', '', NULL, 1, 2, 2017),
(8, 'JERIOS', 'images/drzave/grcka/JERIOS/jerisos-letovanje-gal06.jpg', '', NULL, 1, 2, 2017),
(9, 'KALITEA', 'images/drzave/grcka/kALITEA/kalitea-full.jpg', '', NULL, 1, 2, 0000),
(10, 'KEFALONIJA', 'images/drzave/grcka/KEFALONIJA/kefalonija-letovanje.jpg', '', NULL, 1, 2, 0000),
(11, 'Krstarenje Mediteranom', 'images/krstarenje.jpg', '', NULL, NULL, 8, 2017),
(12, 'KRF', 'images/drzave/grcka/KRF/krf.jpg', '', 'https://www.youtube.com/watch?v=I3y8RnITnMc', 1, 2, 2017),
(13, 'LEKEFADA', 'images/drzave/grcka/LEKFKADA/4-7.jpg', '', NULL, 1, 2, 2017),
(14, 'AZURNA OBALA', 'images/uploads/FRANCUSKA.jpg', '', '', 2, 6, 2017),
(15, 'NICA', '', '', NULL, NULL, 2, 2017),
(16, 'ISTRA', 'images/uploads/ISTRA.jpg', '', NULL, 5, 2, 2017),
(17, 'LEPTOKARIA', 'images/drzave/grcka/LEPTOKARIA/1453217631-Leptokaria-leto-2016-grcka-aranzmani_(4).jpg', '', NULL, 1, 2, 2017);

-- --------------------------------------------------------

--
-- Stand-in structure for view `pregledHotela`
-- (See below for the actual view)
--
CREATE TABLE `pregledHotela` (
`id` int(11)
,`hotel_naziv` varchar(256)
,`foto` varchar(256)
,`datum_azuriranja` datetime
,`ponuda_id` int(11)
,`naslov` varchar(255)
,`godina` year(4)
,`aranzman_id` int(11)
,`aranzman` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `proba`
-- (See below for the actual view)
--
CREATE TABLE `proba` (
`id` int(11)
,`hotel_naziv` varchar(256)
,`foto` varchar(256)
,`tekst_naslovna` varchar(1024)
,`datum_azuriranja` datetime
,`first_minut` tinyint(1)
,`last_minut` tinyint(1)
,`ponuda_id` int(11)
,`naslov` varchar(255)
,`godina` year(4)
,`aranzman_id` int(11)
,`aranzman` varchar(50)
,`drzava_id` int(11)
,`drzavaLjeto` varchar(45)
);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `slika_slajder` varchar(256) DEFAULT NULL,
  `url` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slika_slajder`, `url`) VALUES
(1, 'images/uploads/o-TRAVEL-facebook.jpg', 'http://localhost/dinamikturs/hotel.php?hotel_id=2'),
(2, 'images/uploads/f.jpg', NULL),
(8, 'images/uploads/2.jpg', NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `test2`
-- (See below for the actual view)
--
CREATE TABLE `test2` (
`id` int(11)
,`hotel_naziv` varchar(256)
,`foto` varchar(256)
,`tekst_naslovna` varchar(1024)
,`datum_azuriranja` datetime
,`first_minut` tinyint(1)
,`last_minut` tinyint(1)
,`ponuda_id` int(11)
,`naslov` varchar(255)
,`godina` year(4)
,`aranzman_id` int(11)
,`aranzman` varchar(50)
,`drzava_id` int(11)
,`drzavaLjeto` varchar(45)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `testtt`
-- (See below for the actual view)
--
CREATE TABLE `testtt` (
`id` int(11)
,`hotel_naziv` varchar(256)
,`foto` varchar(256)
,`tekst_naslovna` varchar(1024)
,`datum_azuriranja` datetime
,`first_minut` tinyint(1)
,`last_minut` tinyint(1)
,`ponuda_id` int(11)
,`naslov` varchar(255)
,`godina` year(4)
,`aranzman_id` int(11)
,`aranzman` varchar(50)
,`drzava_id` int(11)
,`drzavaLjeto` varchar(45)
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `password`) VALUES
(1, 'kuma', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

-- --------------------------------------------------------

--
-- Structure for view `glavniPregled`
--
DROP TABLE IF EXISTS `glavniPregled`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `glavniPregled`  AS  select `hotel`.`id` AS `id`,`hotel`.`hotel_naziv` AS `hotel_naziv`,`hotel`.`foto_1` AS `foto`,`hotel`.`tekst_naslovna` AS `tekst_naslovna`,`hotel`.`datum_azuriranja` AS `datum_azuriranja`,`hotel`.`first_minut` AS `first_minut`,`hotel`.`last_minut` AS `last_minut`,`ponuda`.`id` AS `ponuda_id`,`ponuda`.`naslov` AS `naslov`,`ponuda`.`godina` AS `godina`,`aranzman`.`id` AS `aranzman_id`,`aranzman`.`vrsta` AS `aranzman`,`drzaveLjeto`.`id` AS `drzava_id`,`drzaveLjeto`.`naziv` AS `drzavaLjeto` from (((`aranzman` left join `ponuda` on((`aranzman`.`id` = `ponuda`.`aranzman_id`))) left join `drzaveLjeto` on((`drzaveLjeto`.`id` = `ponuda`.`drzaveLjeto_id`))) left join `hotel` on((`ponuda`.`id` = `hotel`.`ponuda_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `hotDestinacije`
--
DROP TABLE IF EXISTS `hotDestinacije`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `hotDestinacije`  AS  select `ponuda`.`naslov` AS `naslov`,`ponuda`.`slika` AS `slika`,`ponuda`.`tekst` AS `tekst`,`ponuda`.`godina` AS `godina` from `ponuda` where (`ponuda`.`aranzman_id` = 5) ;

-- --------------------------------------------------------

--
-- Structure for view `pregledHotela`
--
DROP TABLE IF EXISTS `pregledHotela`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pregledHotela`  AS  select `hotel`.`id` AS `id`,`hotel`.`hotel_naziv` AS `hotel_naziv`,`hotel`.`foto_1` AS `foto`,`hotel`.`datum_azuriranja` AS `datum_azuriranja`,`ponuda`.`id` AS `ponuda_id`,`ponuda`.`naslov` AS `naslov`,`ponuda`.`godina` AS `godina`,`aranzman`.`id` AS `aranzman_id`,`aranzman`.`vrsta` AS `aranzman` from ((`aranzman` left join `ponuda` on((`aranzman`.`id` = `ponuda`.`aranzman_id`))) left join `hotel` on((`ponuda`.`id` = `hotel`.`ponuda_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `proba`
--
DROP TABLE IF EXISTS `proba`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `proba`  AS  select `hotel`.`id` AS `id`,`hotel`.`hotel_naziv` AS `hotel_naziv`,`hotel`.`foto_1` AS `foto`,`hotel`.`tekst_naslovna` AS `tekst_naslovna`,`hotel`.`datum_azuriranja` AS `datum_azuriranja`,`hotel`.`first_minut` AS `first_minut`,`hotel`.`last_minut` AS `last_minut`,`ponuda`.`id` AS `ponuda_id`,`ponuda`.`naslov` AS `naslov`,`ponuda`.`godina` AS `godina`,`aranzman`.`id` AS `aranzman_id`,`aranzman`.`vrsta` AS `aranzman`,`drzaveLjeto`.`id` AS `drzava_id`,`drzaveLjeto`.`naziv` AS `drzavaLjeto` from (((`aranzman` left join `ponuda` on((`aranzman`.`id` = `ponuda`.`aranzman_id`))) left join `drzaveLjeto` on((`drzaveLjeto`.`id` = `ponuda`.`drzaveLjeto_id`))) left join `hotel` on((`ponuda`.`id` = `hotel`.`ponuda_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `test2`
--
DROP TABLE IF EXISTS `test2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `test2`  AS  select `hotel`.`id` AS `id`,`hotel`.`hotel_naziv` AS `hotel_naziv`,`hotel`.`foto_1` AS `foto`,`hotel`.`tekst_naslovna` AS `tekst_naslovna`,`hotel`.`datum_azuriranja` AS `datum_azuriranja`,`hotel`.`first_minut` AS `first_minut`,`hotel`.`last_minut` AS `last_minut`,`ponuda`.`id` AS `ponuda_id`,`ponuda`.`naslov` AS `naslov`,`ponuda`.`godina` AS `godina`,`aranzman`.`id` AS `aranzman_id`,`aranzman`.`vrsta` AS `aranzman`,`drzaveLjeto`.`id` AS `drzava_id`,`drzaveLjeto`.`naziv` AS `drzavaLjeto` from (((`aranzman` left join `ponuda` on((`aranzman`.`id` = `ponuda`.`aranzman_id`))) left join `drzaveLjeto` on((`drzaveLjeto`.`id` = `ponuda`.`drzaveLjeto_id`))) left join `hotel` on((`ponuda`.`id` = `hotel`.`ponuda_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `testtt`
--
DROP TABLE IF EXISTS `testtt`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `testtt`  AS  select `hotel`.`id` AS `id`,`hotel`.`hotel_naziv` AS `hotel_naziv`,`hotel`.`foto_1` AS `foto`,`hotel`.`tekst_naslovna` AS `tekst_naslovna`,`hotel`.`datum_azuriranja` AS `datum_azuriranja`,`hotel`.`first_minut` AS `first_minut`,`hotel`.`last_minut` AS `last_minut`,`ponuda`.`id` AS `ponuda_id`,`ponuda`.`naslov` AS `naslov`,`ponuda`.`godina` AS `godina`,`aranzman`.`id` AS `aranzman_id`,`aranzman`.`vrsta` AS `aranzman`,`drzaveLjeto`.`id` AS `drzava_id`,`drzaveLjeto`.`naziv` AS `drzavaLjeto` from (((`aranzman` left join `ponuda` on((`aranzman`.`id` = `ponuda`.`aranzman_id`))) left join `drzaveLjeto` on((`drzaveLjeto`.`id` = `ponuda`.`drzaveLjeto_id`))) left join `hotel` on((`ponuda`.`id` = `hotel`.`ponuda_id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aranzman`
--
ALTER TABLE `aranzman`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `vrsta_UNIQUE` (`vrsta`);

--
-- Indexes for table `drzaveLjeto`
--
ALTER TABLE `drzaveLjeto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ponuda_id` (`ponuda_id`);

--
-- Indexes for table `izdvajamo`
--
ALTER TABLE `izdvajamo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ponuda`
--
ALTER TABLE `ponuda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aranzman_id` (`aranzman_id`),
  ADD KEY `ljetovalista_id` (`drzaveLjeto_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aranzman`
--
ALTER TABLE `aranzman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `drzaveLjeto`
--
ALTER TABLE `drzaveLjeto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `izdvajamo`
--
ALTER TABLE `izdvajamo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ponuda`
--
ALTER TABLE `ponuda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `hotel_ibfk_1` FOREIGN KEY (`ponuda_id`) REFERENCES `ponuda` (`id`);

--
-- Constraints for table `ponuda`
--
ALTER TABLE `ponuda`
  ADD CONSTRAINT `ponuda_ibfk_1` FOREIGN KEY (`aranzman_id`) REFERENCES `aranzman` (`id`),
  ADD CONSTRAINT `ponuda_ibfk_2` FOREIGN KEY (`drzaveLJeto_id`) REFERENCES `drzaveLjeto` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
