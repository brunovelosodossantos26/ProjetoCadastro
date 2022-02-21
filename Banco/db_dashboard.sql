-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 21-Fev-2022 às 03:20
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_dashboard`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fone` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=113 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id_user`, `nome`, `cpf`, `endereco`, `cep`, `cidade`, `estado`, `email`, `fone`) VALUES
(2, 'Zilma ConceiÃ§ao Monteiro Veloso', '400.232.302-15', 'Tv', '68400-000', 'Cameta', 'Para', 'zilma@gmai.com', '(91) 9 9999-9999'),
(3, 'Wylie Mitchell', '1.750819091', '515-4085 Vel Avenue', '150365', 'Alta', 'Corse', 'pellentesque@hotmail.ca', '(168) 353-7466'),
(4, 'Nero Bailey', '1.800048888', 'P.O. Box 257, 8322 Metus. Rd.', 'T7Y 1M7', 'Ibagué', 'North Chungcheong', 'faucibus.morbi@aol.ca', '(257) 119-0467'),
(5, 'Rae Curry', '1.851408387', '9327 Suspendisse Avenue', '81456', 'Istanbul', 'South Island', 'vitae.posuere@icloud.edu', '(174) 106-2332'),
(6, 'Travis Avery', '2.071525726', '119-4129 Facilisis Rd.', '174345', 'Palembang', 'Atlántico', 'nascetur.ridiculus@icloud.couk', '(631) 364-4687'),
(7, 'Naomi Sykes', '2.120950893', '588-6957 In St.', '1155', 'Çarşamba', 'Niger', 'sed.libero@yahoo.couk', '(682) 182-6428'),
(8, 'Salvador Conner', '2.494400314', '3474 Egestas. Av.', '42477', 'Bellevue', 'Paraíba', 'nulla.dignissim@icloud.net', '(454) 986-1313'),
(9, 'Ivy Lawson', '1.915373785', 'Ap #680-3822 Eget Street', '7710', 'Desamparados', 'Centre', 'pede.cras@protonmail.net', '(110) 227-1309'),
(10, 'Davis Sweeney', '1.857798438', '839-488 Quisque Ave', '12501', 'Hammerfest', 'Borno', 'duis.mi@icloud.org', '(267) 857-7156'),
(11, 'Robert Talley', '1.853324269', '411-6412 At St.', '35478', 'Tyumen', 'Västra Götalands län', 'egestas.ligula@outlook.net', '(719) 577-4738'),
(12, 'Graiden Pickett', '1.950028742', '673-997 Faucibus Av.', '16476', 'Bathurst', 'Lincolnshire', 'felis@protonmail.couk', '(268) 291-9578'),
(13, 'Wylie Mitchell', '1.750819091', '515-4085 Vel Avenue', '150365', 'Alta', 'Corse', 'pellentesque@hotmail.ca', '(168) 353-7466'),
(14, 'Nero Bailey', '1.800048888', 'P.O. Box 257, 8322 Metus. Rd.', 'T7Y 1M7', 'Ibagué', 'North Chungcheong', 'faucibus.morbi@aol.ca', '(257) 119-0467'),
(15, 'Rae Curry', '1.851408387', '9327 Suspendisse Avenue', '81456', 'Istanbul', 'South Island', 'vitae.posuere@icloud.edu', '(174) 106-2332'),
(16, 'Travis Avery', '2.071525726', '119-4129 Facilisis Rd.', '174345', 'Palembang', 'Atlántico', 'nascetur.ridiculus@icloud.couk', '(631) 364-4687'),
(17, 'Naomi Sykes', '2.120950893', '588-6957 In St.', '1155', 'Çarşamba', 'Niger', 'sed.libero@yahoo.couk', '(682) 182-6428'),
(18, 'Salvador Conner', '2.494400314', '3474 Egestas. Av.', '42477', 'Bellevue', 'Paraíba', 'nulla.dignissim@icloud.net', '(454) 986-1313'),
(19, 'Ivy Lawson', '1.915373785', 'Ap #680-3822 Eget Street', '7710', 'Desamparados', 'Centre', 'pede.cras@protonmail.net', '(110) 227-1309'),
(20, 'Davis Sweeney', '1.857798438', '839-488 Quisque Ave', '12501', 'Hammerfest', 'Borno', 'duis.mi@icloud.org', '(267) 857-7156'),
(21, 'Robert Talley', '1.853324269', '411-6412 At St.', '35478', 'Tyumen', 'Västra Götalands län', 'egestas.ligula@outlook.net', '(719) 577-4738'),
(22, 'Graiden Pickett', '1.950028742', '673-997 Faucibus Av.', '16476', 'Bathurst', 'Lincolnshire', 'felis@protonmail.couk', '(268) 291-9578'),
(23, 'Mia Sweet', '2.021884464', '433-8702 Ipsum St.', '59232', 'Frankfort', 'İzmir', 'et.ultrices.posuere@yahoo.com', '(967) 266-8994'),
(24, 'Eve Odom', '1.962892656', 'Ap #867-9651 Ipsum. Avenue', '12661', 'Pleiku', 'Cartago', 'augue.eu.tellus@yahoo.edu', '(986) 567-9771'),
(25, 'Kamal Carroll', '2.036153549', 'Ap #438-2779 Suscipit St.', '29615', 'Veere', 'Gilgit Baltistan', 'est@hotmail.com', '(752) 117-0630'),
(26, 'Charity Pratt', '1.586136633', '164-3304 Sed Road', '28-671', 'Burnie', 'Vlaams-Brabant', 'mi.pede.nonummy@yahoo.edu', '(536) 259-3453'),
(30, 'Jessica Clay', '1.919909907', 'Ap #731-8455 Eget Avenue', '11308', 'San José de Alajuela', 'Madrid', 'in@yahoo.com', '(475) 751-8640'),
(31, 'Lynn Stevenson', '1.742817810', '3916 Consectetuer Rd.', '192545', 'Puerto Asís', 'West Sulawesi', 'ultricies.sem@yahoo.ca', '(622) 785-0408'),
(32, 'Jorden Lancaster', '2.022280797', 'Ap #970-4201 Ut, Rd.', 'II6 5VI', 'Facatativá', 'Riau Islands', 'dolor@aol.ca', '(343) 846-3800'),
(34, 'Curran Bright', '1.968721007', '600-3386 Magna. St.', '58754', 'Dornbirn', 'Nordland', 'cras@outlook.org', '(443) 229-2935'),
(35, 'Nehru Mccoy', '1.971151988', '998-3894 Ut, St.', '3971765', 'Casperia', 'Maharastra', 'non@icloud.com', '(688) 557-7298'),
(36, 'Shaeleigh Mccullough', '1.973952099', 'Ap #707-157 Adipiscing. Road', '7816', 'Jeongeup', 'Zhōngnán', 'mauris.sagittis@icloud.net', '(513) 624-0378'),
(37, 'Darryl Miranda', '2.018478926', '1630 Nec, Rd.', '14614', 'Sogamoso', 'Jönköpings län', 'mattis@outlook.net', '(568) 477-2107'),
(38, 'Colt Collier', '2.049382493', 'Ap #294-7723 Nam Rd.', 'T8N 5V9', 'Biała Podlaska', 'Tambov Oblast', 'neque@yahoo.org', '(576) 488-0838'),
(39, 'Zorita Sullivan', '2.032968627', '5155 Augue Rd.', 'CL4K 2CO', 'Melsele', 'Tula Oblast', 'faucibus.lectus@outlook.couk', '(808) 540-7916'),
(40, 'Melvin Butler', '2.120116250', '347-5784 Facilisi. Road', '187296', 'Châlons-en-Champagne', 'Melilla', 'semper@outlook.org', '(612) 377-5847'),
(41, 'Jillian Schwartz', '2.086008314', 'P.O. Box 361, 8168 Eu, Ave', '8881 CO', 'Panjgur', 'Wiltshire', 'placerat.augue@google.net', '(411) 616-8366'),
(42, 'Jordan Eaton', '1.791838851', 'Ap #994-555 Porttitor St.', '38815', 'Levin', 'Abruzzo', 'elit@outlook.net', '(614) 277-5324'),
(43, 'Dawn Mcclure', '1.571998747', '220-7419 Rutrum, Rd.', '4463', 'Desamparados', 'Khyber Pakhtoonkhwa', 'scelerisque.neque.sed@hotmail.org', '(278) 163-2631'),
(44, 'Kitra Aguirre', '2.084986556', '4274 Dolor. Rd.', '816613', 'Oslo', 'Bryansk Oblast', 'luctus.curabitur.egestas@aol.couk', '(336) 543-2973'),
(45, 'Elaine Gilmore', '1.630385245', 'P.O. Box 347, 549 Phasellus Av.', '947793', 'Merzig', 'Małopolskie', 'aptent@hotmail.org', '(420) 277-3677'),
(46, 'Jennifer Mitchell', '2.131405876', 'Ap #111-1531 Diam Road', '73597', 'Bischofshofen', 'Maule', 'proin.ultrices@google.ca', '(313) 458-3973'),
(48, 'Zeph Barnes', '2.218295665', 'Ap #636-4557 Neque Ave', '84735', 'North Waziristan', 'Abruzzo', 'eu.dolor@google.ca', '(251) 763-2480'),
(49, 'Macey Herman', '2.260478780', '7829 Pellentesque Rd.', 'R2P 2V1', 'Serang', 'Australian Capital Territory', 'justo.praesent.luctus@protonmail.com', '(782) 575-8489'),
(50, 'Petra Nolan', '2.072062914', 'Ap #498-7936 Quis Ave', '65311-261', 'Heredia', 'Tabasco', 'placerat.augue@protonmail.ca', '(563) 263-3171'),
(51, 'Yuri Mccullough', '2.178721525', '346-5864 Ut, Rd.', '35852-18374', 'Mercedes', 'Loreto', 'odio.aliquam@yahoo.com', '(310) 254-1208'),
(52, 'Roanna Wheeler', '2.223482270', 'Ap #767-6173 Nec St.', 'FR8F 8WS', 'Evere', 'Kayseri', 'eu.placerat.eget@outlook.com', '(474) 178-4945'),
(53, 'Kristen Fernandez', '2.101992920', 'Ap #279-9365 Orci, St.', '1323', 'Ludvika', 'Carinthia', 'cras.convallis.convallis@outlook.ca', '(410) 164-2516'),
(54, 'Neve Bright', '1.984390766', '3935 Neque. Av.', '616811', 'Naushahro Firoze', 'Bình Dương', 'integer@outlook.ca', '(314) 625-3877'),
(55, 'Tate Mcleod', '1.997619572', '788-3945 Adipiscing Av.', 'NK2 5WN', 'Killa Abdullah', 'Jönköpings län', 'aliquam.gravida@yahoo.couk', '(171) 548-6023'),
(56, 'Yardley Trevino', '1.523320764', 'Ap #354-4443 Mauris Av.', 'Y2H 5B5', 'Palmerston', 'Valle d\'Aosta', 'luctus.aliquet.odio@aol.com', '(185) 669-7826'),
(57, 'Chaim Irwin', '2.590293318', 'Ap #166-9939 Egestas Rd.', '698527', 'Nghĩa Lộ', 'Colorado', 'tincidunt.donec.vitae@aol.edu', '(926) 562-3202'),
(59, 'Josiah Cameron', '1.884896406', 'Ap #161-5712 Ut St.', '54298', 'Quảng Ngãi', 'Chhattisgarh', 'malesuada.vel@outlook.net', '(698) 486-9221'),
(60, 'Justin Spears', '2.170303147', '605-9604 Velit St.', '435916', 'Wolfurt', 'Saint Petersburg City', 'dapibus.gravida.aliquam@aol.com', '(680) 966-6747'),
(61, 'Elliott Santana', '1.901858372', 'P.O. Box 633, 1419 Eu Rd.', '9424', 'Ellon', 'Rogaland', 'consectetuer.ipsum@aol.org', '(574) 546-0578'),
(62, 'Robert Pacheco', '2.085676368', '5105 Lacus. Avenue', '558523', 'Galway', 'Basilicata', 'non@outlook.couk', '(426) 821-2364'),
(63, 'David Peck', '1.744105795', '418-4898 Nibh. Street', '242224', 'Fauvillers', 'South Jeolla', 'sit@yahoo.org', '(845) 245-6444'),
(64, 'Ezekiel Armstrong', '2.176648229', 'P.O. Box 248, 9072 Bibendum. Av.', '21802', 'Koppervik', 'South Island', 'arcu.sed@icloud.couk', '(536) 374-8366'),
(65, 'Mollie Chang', '1.706473306', '4749 Interdum. Ave', '50102', 'Mohmand Agency', 'Ogun', 'nec@icloud.net', '(657) 742-7333'),
(66, 'Curran Jacobs', '1.851969315', '444-8390 Pede Av.', '28271', 'Missoula', 'Västra Götalands län', 'sem@outlook.edu', '(547) 733-2347'),
(67, 'JoÃ£o  ', '666.565.655-65', '536-7786 Primis Av.          ', '98000', 'Sachs Harbour', 'Borno', 'nunc@google.ca          ', '(91) 9 9999-9999'),
(68, 'Linda Good', '1.958994420', 'Ap #375-6998 Integer St.', '606825', 'Tarnów', 'North Island', 'ullamcorper@aol.org', '(534) 843-7067'),
(69, 'Vernon Shepherd', '2.478422640', '636-6097 In Av.', '8455', 'Worcester', 'Drenthe', 'nibh.dolor@aol.net', '(755) 793-8670'),
(70, 'Iris Walker', '1.610560289', 'P.O. Box 294, 772 Nascetur Road', '95-154', 'Okigwe', 'Jammu and Kashmir', 'nec.tellus@yahoo.net', '(614) 815-5328'),
(71, 'Rowan Nguyen', '1.971329985', 'P.O. Box 177, 1720 Nunc St.', '3126', 'Ribeirão Preto', 'Małopolskie', 'cursus@yahoo.ca', '(346) 536-3492'),
(72, 'Merrill Mckee', '2.084601053', '6866 Quisque Street', '08485', 'Gore', 'Illinois', 'ullamcorper.duis@aol.ca', '(216) 236-7972'),
(73, 'Erin Jordan', '2.236842809', '741-5787 Quisque Rd.', '21278', 'Istanbul', 'Victoria', 'eu.tellus.eu@aol.net', '(578) 323-7764'),
(74, 'Emi Hahn', '1.865315887', '5481 Consectetuer Street', '83221', 'Medio Atrato', 'Lubuskie', 'morbi@aol.ca', '(446) 431-6782'),
(76, 'Jakeem Compton', '2.218866583', 'Ap #815-1888 Elit, Road', '01143', 'Pınarbaşı', 'Morelos', 'nostra.per.inceptos@google.edu', '(333) 261-8747'),
(77, 'Ruby Bates', '1.483942742', 'Ap #595-765 Sollicitudin Av.', '853611', 'Chimbote', 'Schleswig-Holstein', 'sem.vitae@protonmail.com', '(370) 816-1345'),
(78, 'Deborah Edwards', '2.403050308', 'P.O. Box 173, 8875 Vel St.', '26701', 'Tocopilla', 'Sląskie', 'magnis.dis@icloud.ca', '(474) 467-5390'),
(79, 'Galvin Mosley', '1.697563245', 'Ap #630-9018 Fames St.', '65710-576', 'Winnipeg', 'Munster', 'eu.arcu.morbi@aol.org', '(288) 272-1653'),
(80, 'Carson Jenkins', '2.021773995', 'P.O. Box 269, 1514 Dictum St.', '17665-13507', 'Barranco Minas', 'Pomorskie', 'morbi.tristique.senectus@icloud.ca', '(378) 398-1685'),
(81, 'Pamela Duke', '1.658074992', '9874 Integer St.', '5636', 'Đông Hà', 'Smolensk Oblast', 'nulla.aliquet@protonmail.com', '(693) 249-6907'),
(82, 'Maris O\'Neill', '1.607739736', 'Ap #386-8187 Tristique Road', '386664', 'New Galloway', 'Jharkhand', 'erat.eget@outlook.ca', '(583) 425-6265'),
(83, 'Timothy Acosta', '1.750526292', '6994 Molestie Road', '645752', 'Victor Harbor', 'Kerala', 'lectus.pede.ultrices@yahoo.edu', '(901) 471-5716'),
(84, 'Jescie Singleton', '2.284920779', '4193 Mauris St.', '8386', 'Sagamu', 'FATA', 'blandit.congue.in@google.ca', '(375) 882-0984'),
(85, 'Peter Henderson', '2.096086000', 'P.O. Box 920, 164 Dolor. Street', '1566', 'Montleban', 'Puntarenas', 'faucibus.leo@outlook.ca', '(696) 217-3435'),
(86, 'Timothy Knapp', '1.744625997', '399-3762 Risus. St.', '217616', 'Kirov', 'Alberta', 'laoreet.ipsum@aol.org', '(304) 225-2110'),
(87, 'Orson Brown', '1.816787080', '248-7488 Et St.', '67296-636', 'Iseyin', 'Rheinland-Pfalz', 'vivamus.rhoncus.donec@outlook.couk', '(571) 734-7485'),
(88, 'Darrel Berry', '2.085892160', '8666 Enim Av.', '146385', 'Lelystad', 'Bali', 'ac@google.com', '(538) 744-2417'),
(89, 'Linus Vincent', '1.819967294', '176-6192 At, St.', '24598', 'Parla', 'Lambayeque', 'donec.at@outlook.edu', '(302) 717-9467'),
(90, 'Warren Kelly', '1.976766841', '670-3850 Mus. St.', '99735', 'Chandigarh', 'Nebraska', 'dui.fusce@outlook.org', '(998) 476-8749'),
(91, 'Janna Beach', '2.059253209', '900-7597 Aenean Ave', '45336', 'Siheung', 'Zeeland', 'nullam.nisl@yahoo.org', '(168) 585-6743'),
(92, 'Chava Lewis', '1.716016695', 'Ap #242-9890 Eget St.', '27985', 'Nothomb', 'Australian Capital Territory', 'eu.metus.in@hotmail.org', '(610) 878-2584'),
(93, 'Colt Douglas', '2.333147308', '944-1161 Amet Road', '86388', 'Tobermory', 'Luxemburg', 'sem.elit.pharetra@protonmail.org', '(155) 842-8231'),
(94, 'McKenzie Leach', '2.006484946', '285-6671 Cras Street', '701727', 'Lampernisse', 'Małopolskie', 'vivamus.nibh@google.net', '(617) 676-7084'),
(95, 'Ezra O\'brien', '1.726607848', 'Ap #801-8585 Urna. Rd.', '43669', 'Llanquihue', 'Kemerovo Oblast', 'lorem@aol.couk', '(271) 586-9157'),
(96, 'Rashad Carey', '2.146638959', 'Ap #506-4426 Id, Street', '7692 CY', 'Gimhae', 'Surrey', 'lorem@hotmail.com', '(430) 593-3443'),
(97, 'Kerry Allison', '1.829197541', 'Ap #595-5947 Augue Av.', '20625', 'Kilsyth', 'Connacht', 'malesuada.fames.ac@outlook.org', '(458) 847-5585'),
(98, 'Erich Holman', '2.280097953', '874-9491 Aliquam Ave', '9824 ML', 'Dublin', 'Boyacá', 'ac.mattis.velit@hotmail.org', '(982) 682-1027'),
(99, 'Roberto', '2.188313320', 'Ap #738-4593 Aenean Rd.    ', '51427', 'Istanbul', 'V?nh Phï¿½c', 'justo.eu@aol.com    ', '(244) 838-5542    '),
(100, 'Shelly Jenkins', '2.135535531', '496-4611 Quisque St.', '14364', 'Jilin', 'Biobío', 'nam@aol.org', '(997) 778-4972'),
(102, 'Cherokee Charles', '2.217791537', 'Ap #806-9109 In Road', '439283', 'Coevorden', 'Cauca', 'phasellus@aol.couk', '(261) 815-6073'),
(103, 'Gannon Leon', '2.140339566', '975-9873 In Road', '844345', 'Cañas', 'Coahuila', 'nunc@protonmail.ca', '(588) 772-8881'),
(104, 'Emerald Carlson', '2.255915745', '449-5254 Eget Av.', 'P3K 3B6', 'Vernon', 'Haryana', 'semper@yahoo.ca', '(819) 576-6056'),
(105, 'Leilani Ruiz', '1.981983645', 'P.O. Box 940, 9517 Fringilla Road', '68836-13533', 'Erie', 'Emilia-Romagna', 'suspendisse.non@icloud.com', '(212) 313-4411'),
(106, 'Gisela Willis', '2.240839501', '980-5961 Eu Av.', '65152-570', 'Cuernavaca', 'łódzkie', 'neque.morbi.quis@google.edu', '(560) 721-8303'),
(107, 'Glenna Mills', '1.986172939', '917-5732 At, St.', '36820-14812', 'Itabuna', 'North Island', 'neque.tellus.imperdiet@icloud.org', '(847) 222-9188'),
(108, 'Oprah Clements', '1.679734783', '212-6786 Metus Avenue', '843426', 'Notodden', 'Campania', 'velit@aol.edu', '(330) 737-9581'),
(109, 'Jerome Vincent', '2.328975375', 'Ap #116-5792 Lorem Road', '8943', 'Bhagalpur', 'Carinthia', 'dictum.magna.ut@icloud.org', '(568) 652-7822'),
(110, 'Sarah Mcbride', '2.160329312', '155-6347 Eu St.', '981590', 'Cádiz', 'Niedersachsen', 'dolor.nonummy@yahoo.net', '(656) 798-2119'),
(111, 'Irene Mcdonald', '2.373425150', 'Ap #443-7082 Rutrum. St.', '203855', 'Unnao', 'Tasmania', 'sit.amet.luctus@aol.net', '(321) 557-8912'),
(112, 'Keaton Ruiz', '1.679204069', 'Ap #350-3321 Luctus Road', '23211-38911', 'Huissen', 'Amazonas', 'sed.sem@outlook.ca', '(295) 943-6434');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
