-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 09, 2014 at 02:36 PM
-- Server version: 5.5.9
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `corolla`
--

-- --------------------------------------------------------

--
-- Table structure for table `correos`
--

CREATE TABLE `correos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `estado` varchar(200) NOT NULL,
  `sucursal` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `correos`
--


-- --------------------------------------------------------

--
-- Table structure for table `dealers`
--

CREATE TABLE `dealers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dealer_number` varchar(7) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `codigo_postal` varchar(6) NOT NULL,
  `direccion` tinytext NOT NULL,
  `telefono` tinytext NOT NULL,
  `website` varchar(255) NOT NULL,
  `location` varchar(200) NOT NULL,
  `kits` int(10) unsigned NOT NULL,
  `applications` int(10) unsigned NOT NULL DEFAULT '0',
  `applications_confirmed` int(10) unsigned NOT NULL DEFAULT '0',
  `applications_registered` int(10) unsigned NOT NULL DEFAULT '0',
  `applications_canceled` int(10) unsigned NOT NULL DEFAULT '0',
  `email` varchar(250) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=68 ;

--
-- Dumping data for table `dealers`
--

INSERT INTO `dealers` VALUES(1, '57001', 'Dalton Toyota Lopez Mateos', 'Zapopan', 'Jalisco', '45070', 'Av. Lopez Mateos #3780', '01 (33) 3884-6060 y 01 (33) 3884-6061', 'http://www.daltontoyota.com.mx/daltontoyota/lopez/', '����', 25, 0, 3, 13, 2, 'pimediana21@hotmail.com', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(2, '57002', 'Toyota Monterrey', 'Monterrey', 'Nuevo León', '66269', 'Av. Lázaro Cárdenas 2272 Ote. Col. Valle Oriente', '01 (81) 8133-6600 y 01 (81) 8150-6608', 'http://www.toyotamonterrey.com.mx', '\0\0\0\0\0\0\0Ñç£¸¤9@Ï×,YÀ', 36, 0, 16, 8, 2, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(3, '57003', 'Toyota Fame Perisur', 'Ciudad de México', 'Distrito Federal', '01900', 'Adolfo Ruíz Cortines No. 4000 Bis Col. Jardines del Pedregal, Del. Álvaro Obregón, C.P. 01900', '01 (55) 5481-1900 y 01 (55) 5481-1949', 'http://toyotaperisur.com', '\0\0\0\0\0\0\0ßýñ^µN3@T¬\Z¹ÍXÀ', 20, 0, 9, 3, 3, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(4, '57004', 'Toyota Universidad', 'Ciudad de México', 'Distrito Federal', '03330', 'Av. Universidad 1112, Col. Xoco', '01 (55) 3000-3300 y 01 (55) 3000-3353', 'http://www.toyotauni.com.mx/', '\0\0\0\0\0\0\0µÀ)]3@\nMKÊÊXÀ', 45, 0, 7, 12, 4, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(5, '57005', 'Toyota Interlomas', 'Huixquilucan', 'Estado de México', '52760', 'Blvd. Magnocentro No.17 Col. Urbano San Fernando la Herradura Municio de Huixquilucan Edo de Mex.', '01 (55) 9149-7800 y 01 (55) 1085-5727', 'http://www.toyotainterlomas.com.mx', '\0\0\0\0\0\0\0¶×Þg3@ý×¹iÑXÀ', 18, 0, 0, 0, 2, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(6, '57006', 'Toyota Satélite', 'Naucalpan', 'Estado de México', '54040', 'Blvd. Manuel Avila Camacho 3039, San Andres Atenco, Tlalnepantla', '01 (55) 5321-0550 y 01 (55) 5321-0588 Ext. 586/231', 'http://www.toyotasatelite.com.mx/index.jsp', '\0\0\0\0\0\0\0ß¢¥3@!§ÍXÀ', 34, 0, 3, 5, 2, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(7, '57007', 'Toyota Angelópolis', 'Puebla', 'Puebla', '72190', 'Vía Atlixcayotl 5502 Zona Comercial Angelópolis', '01 (222) 303-6000 y 01 (222) 303-6053', 'http://www.toyotaangelopolis.com.mx', '\0\0\0\0\0\0\0²æÞt3@j5XÀ', 16, 0, 4, 4, 1, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(8, '57008', 'Toyota Chihuahua', 'Chihuahua', 'Chihuahua', '31238', 'Lateral Periférico de la Juventud #6711 Residencial Cumbres', '01 (614) 439-6900 y 01 (614) 439-6930', 'http://www.toyotachihuahua.com', '\0\0\0\0\0\0\0q¬Ûh <@HPüsZÀ', 12, 0, 3, 0, 0, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(9, '57009', 'Toyota Laguna', 'Torreón', 'Coahuila', '27000', 'Blvd. Independencia 2200 Oriente, Col. Estrella', '01 (871) 747-0700 y 01 (871) 747-2724', 'http://www.toyotatorreon.com.mx', '\0\0\0\0\0\0\0¼viÃa9@Ó¥I*ÛYÀ', 15, 0, 0, 2, 0, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(10, '57010', 'Toyota del Bajío', 'León', 'Guanajuato', '37180', 'Blvd. J. Alonso de Torres No. 1716, Col. El Moral 1', '01 (477) 788-4800 y 01 (477) 779-7200', 'http://www.toyotadelbajio.com.mx', '\0\0\0\0\0\0\0¿Ù®Ð''5@Ô($ÕkYÀ', 10, 0, 0, 4, 2, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(11, '57011', 'Toyota Guadalajara Acueducto', 'Zapopan', 'Jalisco', '45110', 'Av. Acueducto no. 6100 Fracc. Los Frailes', '01 (33) 364-84000 y 01 (33) 364-84012', 'http://www.oztoyotaguadalajara.com', '\0\0\0\0\0\0\0·(³A&¹4@ÁnØ¶ÚYÀ', 19, 0, 4, 3, 2, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(12, '57012', 'Toyota Toluca', 'Metepec', 'Estado de México', '52148', 'Blvd-Toluca Ixtapan 126 nte Col. La purisima', '01 (722) 262-3800 y 01 (722) 262-3810 ext 131/144', 'http://www.toyotatoluca.com.mx', '\0\0\0\0\0\0\0óªÎjA3@ò!¨çXÀ', 13, 0, 4, 5, 5, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(13, '57013', 'Toyota Santa Fe', 'Ciudad de México', 'Distrito Federal', '05300', 'Juan Salvador Agraz 20;Col.Santa fe', '01 (55) 9177-7360 y 01 (55) 9177-7360', 'http://www.toyotasantafe.com.mx', '\0\0\0\0\0\0\0\\Âõ(\\3@NzßøÚÑXÀ', 14, 0, 1, 5, 2, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(14, '57014', 'Toyota Mérida', 'Merida', 'Yucatán', '97119', 'Calle 43 (Prolongación Paseo de Montejo) No. 330 x 52 y 54 Col. Benito Juárez Norte', '01 (999) 930-0330 y 01 (999) 930-0348', 'http://www.toyotamerida.com.mx', '\0\0\0\0\0\0\0ÚæÆô5@ÁþëÜ´gVÀ', 29, 0, 4, 1, 0, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(15, '57016', 'Toyota Fame Valladolid', 'Morelia', 'Michoacán', '58250', 'Av. Acueducto 3603, Col. Pascual Ortiz de Ayala', '01 (443) 340- 0100 y 01 ( 443) 340- 0100 ext. 228 y 219', 'http://www.famevalladolid.com/', '\0\0\0\0\0\0\0Ì	Úäð±3@ûZ\Z¡IYÀ', 9, 0, 0, 6, 3, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(16, '57017', 'Toyota Querétaro', 'Querétaro', 'Querétaro', '76125', 'Blvd. Bernardo Quintana 628, Col. San Pablo, Qro., Qro.', '01 (442) 234-4200 y 01 (442) 234-4209', 'http://www.toyotaqueretaro.com.mx', '\0\0\0\0\0\0\0³	0,4@.Yá&\ZYÀ', 15, 0, 0, 2, 0, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(17, '57018', 'Toyota Veracruz', 'Veracruz', 'Veracruz', '91960', 'Carretera Mexico- Veracruz Km 441 s/n', '01 (229) 927-3320 y 01 (229) 927-3320 Ext 112', 'http://www.diezfenix.com.mx/toyotaveracruz', '\0\0\0\0\0\0\0HN&n$3@uq\r	XÀ', 9, 0, 0, 2, 0, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(18, '57019', 'Toyota Aguascalientes', 'Aguascalientes', 'Aguascalientes', '20140', 'Blvd. Zacatecas Nte. 850 esq. Blvd. Aguascalientes, Col. Las Hadas, Aguascalientes', '01 (442) 922-1000 y 01 (442) 922-1009', 'http://www.toyotadeaguascalientes.com.mx', '\0\0\0\0\0\0\0¢A\nBê5@åÑ°¨YÀ', 10, 0, 1, 3, 2, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(19, '57020', 'Dalton Toyota San Luis', 'San Luis Potosí', 'San Luis Potosí', '78216', 'Av. Cordillera de los alpes #570', '01 (444) 826-4000 y 01 (444) 826-4019', 'http://www.daltontoyotaslp.com.mx/', '\0\0\0\0\0\0\0sIÕ"6@ô¦"ÆAYÀ', 19, 0, 0, 5, 0, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(20, '57021', 'Toyota Innova Fleteros', 'Monterrey', 'Nuevo León', '64640', 'Pablo A. Gonzales 408', '01 (818 ) 122-4600 y EXT. 234 ó 236', 'http://www.toyotainnova.com.mx/', '\0\0\0\0\0\0\0¸å#)é­9@<2TÅYÀ', 45, 0, 16, 0, 7, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(21, '57022', 'Toyota Vallejo', 'Ciudad de México', 'Distrito Federal', '02630', 'Calzada Vallejo 724A Col. Coltongo', '01 (55) 5385-3000 y 01 (55) 5385-3015 y 01 (55) 5385-3009', 'http://www.toyotavallejo.com.mx', '\0\0\0\0\0\0\0Ø·ð{3@Ùî@ÉXÀ', 26, 0, 1, 7, 2, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(22, '57023', 'Toyota Tabasco', 'Tabasco', 'Villahermosa', '86035', 'Paseo usumacinta No. 1003, Col. Tabasco 2000', '01 (993) 310-0227 y 01 (993) 316-1003', 'http://www.toyotatabasco.mx', '\0\0\0\0\0\0\0ë0XÚ3@aßN"Â¡VÀ', 13, 0, 0, 0, 0, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(23, '57024', 'Toyota Culiacán', 'Culiacán', 'Sinaloa', '80020', 'Blvd. Pedro Infante 2531 Pte. Desarrollo Urbano 3 Ríos', '01 (667) 761-6161 y 01 (667) 717-0910/ 01 (667) 992-1732', 'http://www.toyotaculiacan.com.mx/', '\0\0\0\0\0\0\0r¥Í8@ËhäóÚZÀ', 42, 0, 32, 10, 11, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(24, '57025', 'Toyota Pachuca', 'Mineral de Hidalgo', 'Hidalgo', '42182', 'Carretera Pachuca-Cd. Sahagun Km. 3.5 Col. Chacon, Mineral de la Reforma', '01 (771) 717-0270 y 01 (771) 717-0275', 'http://www.toyotapachuca.com.mx', '\0\0\0\0\0\0\0.ÿ!ýö4@]mÅþ²¯XÀ', 11, 0, 0, 2, 0, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(25, '57026', 'Toyota Hermosillo', 'Hermosillo', 'Sonora', '83270', 'Boulevard Francisco Serna S/N Col. El Malecón', '(662) 259 79 00', 'http://www.toyotahermosillo.com', '\0\0\0\0\0\0\0ç½Þ=@õñÐw·½[À', 20, 0, 1, 3, 0, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(26, '57027', 'Toyota Tampico', 'Tampico', 'Tamaulipas', '89344', 'Avenida Hidalgo No. 6110', '01 (833) 230-3200 y 01 (833) 230-3200', 'http://www.toyotatampico.com.mx', '\0\0\0\0\0\0\0òëØ`I6@ÛjÖßwXÀ', 17, 0, 0, 5, 3, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(27, '57028', 'Toyota Chiapas', 'Tuxtla Gutierrez', 'Chiapas', '29077', 'Blvd. Ángel Albino Corzo No. 750 Col. Bienestar Social', '01 (961) 617-7000 y 01 (961) 617-7000 EXT 232', 'http://www.toyotachiapas.com', '\0\0\0\0\0\0\0\0gÐÐ¿0@}Ð³YõEWÀ', 6, 0, 2, 0, 1, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(28, '57029', 'Toyota Oaxaca', 'Santa Cruz Xoxocotlán', 'Oaxaca', '71230', 'Av. Simbolos Patrios 728.Col. Eliseo Jimenez Ruiz , Sta. Cruz Xoxocotlán Oaxaca.', '01 (951) 501-6400 al 09 y 01 (951) 501-6400 al 09 ext. 135', 'http://www.toyotaoaxaca.com.mx', '\0\0\0\0\0\0\0¨©ek}	1@_"Àé-XÀ', 5, 0, 3, 0, 0, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(29, '57030', 'Toyota Colima', 'Colima', 'Colima', '28060', 'Blvd. Carlos de la Madrid 909', '01 (312) 312-3139 y 01 (312) 316-1718', 'http://www.toyotacolima.com', '\0\0\0\0\0\0\0`?Ä73@)D/îYÀ', 20, 0, 4, 2, 4, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(30, '57031', 'Toyota Córdoba', 'Córdoba', 'Veracruz', '94575', 'Prolongación calle 10 # 4320 Col. La Posta', '(271) 717 1317', 'http://www.toyotacordoba.com.mx', '\0\0\0\0\0\0\0ù+dâ2@©''ôú<XÀ', 6, 0, 0, 1, 0, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(31, '57032', 'Toyota Saltillo', 'Saltillo', 'Coahuila', '25270', 'Carretera Monterrey Saltillo 6651. Carretera Zincamex. Saltillo, Cohuila, México', '01 (884) 438-7272 y 01 (884) 438-7280', 'http://www.toyotasaltillo.com', '\0\0\0\0\0\0\098< ñz9@jÑýY>YÀ', 13, 0, 0, 0, 1, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(32, '57033', 'Toyota Tijuana', 'Tijuana', 'Baja California', '22010', 'Ave. Rapida Pte 15155 Zona Rio', '01 (664) 231-5133 y 01 (800) 8886-9682', 'http://toyotatijuana.com.mx/', '\0\0\0\0\0\0\0ÓJ!K@@@.Sà\r=]À', 13, 0, 0, 5, 0, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(33, '57034', 'Toyota Innova Juarez', 'Cd. Juarez', 'Chihuahua', '32320', 'Paseo Triunfo De La República # 5115', '01 (656) 616-3333 y 01 (656) 173-0910', 'http://www.toyotainnovajuarez.com.mx/', '\0\0\0\0\0\0\0;Áþë¼?@JëÿZÀ', 14, 0, 1, 2, 1, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(34, '57035', 'Toyota Coatzacoalcos', 'Coatzacoalcos', 'Veracruz', '96496', 'Carretera Transismica Km. 4.9 B', '01 (921) 217-2410 y 01 (921) 217-2410', 'http://www.toyotacoatzacoalcos.com.mx', '\0\0\0\0\0\0\0\rRð2@ÖþÎöèwXÀ', 12, 0, 0, 0, 0, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(35, '57036', 'Toyota Cancún', 'Cancún', 'Quintana Roo', '77565', 'Calle Isla Mujeres # 1 Mza. 34 x BLVD. Luis Donaldo Colosio Lt. 1 Smza. 312 Residencial Islazul', '01 (998) 193-0000 y 01 (998) 193-0003', 'http://www.toyotacancun.com.mx', '\0\0\0\0\0\0\0ÆÞ/Ú3@2p@8XÀ', 6, 0, 0, 0, 0, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(36, '57037', 'Toyota Guerrero', 'Acapulco', 'Guerrero', '39890', 'Blvd. de las Naciones 52-B Col .Granjas del Marques', '01 (744) 435-1414 y 01 (744) 435 1401', 'http://www.toyotaguerreo.com.mx', '\0\0\0\0\0\0\0{2ÿèÈ0@	7UòXÀ', 5, 0, 0, 0, 0, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(37, '57038', 'Toyota Coapa', 'Ciudad de México', 'Distrito Federal', '14300', 'Av. Canal De Miramontes No3279 Col. Residencial Acoxpa Del. Tlalpan', '01 (55) 5599-0909 y 01 (55) 5599-0927', 'http://www.toyotcoapa.com.mx', '\0\0\0\0\0\0\0²q¬K3@± ÈXÀ', 26, 0, 0, 6, 0, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(38, '57039', 'Toyota Cuernavaca', 'Cuernavaca', 'Morelos', '62330', 'Priv. De la Cascada No. 23, Col. Delicias', '01 (777) 100-7800 y 01 (777) 100-7832', 'http://www.toyotacuernavaca.com.mx', '\0\0\0\0\0\0\0T\\ï2@28J^ÌXÀ', 15, 0, 3, 0, 1, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(39, '57040', 'Toyota Celaya', 'Celaya', 'Guanajuato', '38130', 'Prol. Blvd. Adolfo López Mateos #1504 Esq. Eje Nororiente, Col. La Laja', '01 (461) 159-8800 y 01 (461) 159-8809', 'http://www.toyotacelaya.com.mx', '\0\0\0\0\0\0\0ÿkÑ4@2ãm¥×1YÀ', 8, 0, 2, 0, 0, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(40, '57041', 'Toyota Innova Reynosa', 'Reynosa', 'Tamaulipas', '88746', 'Carretera Reynosa - Monterrey No. 106 Col. Fuentes del Valle', '01 (899) 909-1900 y 01 (899) 909-1905', 'http://www.toyotainnovareynosa.com.mx', '\0\0\0\0\0\0\0Eb\Z¾:@Y|^XÀ', 9, 0, 0, 2, 1, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(41, '57042', 'Toyota Durango', 'Durango', 'Durango', '34234', 'Blvd. Francisco Villa 4020 Col. 20 de Noviembre', '01 (618) 150-0700 y 01 (618) 150-0707', 'http://www.toyotadurango.com.mx', '\0\0\0\0\0\0\0§ÊÛ\r8@CYøúZ''ZÀ', 13, 0, 6, 2, 1, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(42, '57043', 'Toyota Campeche', 'Campeche', 'Campeche', '24010', 'Ricardo Castillo Oliver No. 9, Manzana K, Sector Fundadores del Área AHKIM-PECH', '01 (981) 127-3000 y 01 (981) 811-4685 al 87', 'http://www.toyotacampeche.com', '\0\0\0\0\0\0\0^H0þ1@â?Ý@<WÀ', 11, 0, 2, 5, 2, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(43, '57044', 'Toyota Mazatlán', 'Mazatlán', 'Sinaloa', '82149', 'Av. Reforma #314 Col. Flamingo', '01 (669) 989-2200 y 01 (669) 989-2202', 'http://www.toyotamazatlan.com.mx', '\0\0\0\0\0\0\0tÑñ(=7@AF@#ZÀ', 10, 0, 3, 3, 0, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(44, '57045', 'Toyota Irapuato', 'Irapuato', 'Guanajuato', '36640', 'Ave. Manuel Gómez Morin 3000. Colo. Ejido Irapuato', '01 (462) 635-9900 al 09 y 01 (462) 635-9914', 'http://www.toyotairapuato.com.mx', '\0\0\0\0\0\0\0ÓÚ4¶×®4@Ðw.XYÀ', 8, 0, 0, 2, 0, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(45, '57046', 'Toyota Lomas Verdes', 'Naucalpan', 'Estado de México', '53150', 'Blvd.. Manuel Ávila Camacho 758-A Col. Sta. Cruz Acatlán', '01 (55) 1500-3500 y 01 (55) 1500-3505', 'http://www.toyotalomasverdes.com.mx/', '\0\0\0\0\0\0\0(`;±{3@}WÿÎXÀ', 25, 0, 6, 1, 0, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(46, '57047', 'Toyota Xalapa', 'Xalapa', 'Veracruz', '91193', 'K.M. 2.5 Carretera Xalapa-Veracruz S/N Colonia Pastoressa.', '01 (228) 141-0400 y 01 (228) 141-0400 ext. 1045', 'http://www.toyotaxalapa.com.mx/', '\0\0\0\0\0\0\0ÆÞ/Ú3@2p@8XÀ', 8, 0, 3, 4, 1, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(47, '57048', 'Toyota Poza Rica', 'Poza Rica', 'Veracruz', '93320', 'Av. Ejército Mexicano # 108', '01 (782) 826-1100 y 01 (782) 826-1100', 'http://www.toyotapozarica.com.mx', '\0\0\0\0\0\0\0fv4@»bFx{]XÀ', 8, 0, 0, 3, 0, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(48, '57049', 'Toyota Puerto Vallarta', 'Puerto Vallarta', 'Jalisco', '05519', 'Carretera a Tepic Puerto Vallarta 5519 Zona Hotelera Norte', '01 (322) 226-9000 y 01 (322) 226-9000', 'http://www.toyotapuertovallarta.com.mx', '\0\0\0\0\0\0\081$''·4@wgí¶QZÀ', 6, 0, 0, 3, 0, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(49, '57050', 'Toyota Polanco', 'Ciudad de México', 'Distrito Federal', '11520', 'Calle Lago Alberto N° 320 Col. Granada, Del. Miguel Hidalgo', '01 (55) 2581-1010 y 01 (55) 2581-1023 y 01 (55) 2581-1024', 'http://www.toyotapolanco.com.mx', '\0\0\0\0\0\0\0Â(´p3@ðÐïËXÀ', 20, 0, 2, 3, 18, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(50, '57051', 'Toyota Mexicali', 'Mexicali', 'Baja California', '21254', 'Calz. Cetys 2630, Residencial San Pedro 2', '01 (686) 104-2222 y 01 (686) 104-2205', 'http://www.toyotamexicali.com', '\0\0\0\0\0\0\0Üð»éS@@Á~þ{Ù\\À', 15, 0, 5, 4, 0, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(51, '57052', 'Toyota Los Cabos', 'San Jose del Cabo', 'Baja California Sur', '23400', 'Carrtera Transpeninsular KM 25.8 Fracc Palmilla', '01 (624) 144-6570 y 01 (800) 295-7575', 'http://toyotaloscabos.com.mx/', '\0\0\0\0\0\0\0´«ò7@sePmpn[À', 4, 0, 0, 4, 0, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(52, '57053', 'Toyota Cd. Obregón', 'Obregón', 'Sonora', '85160', 'Dr. Norman E. Borlaug No. 1410 Col. Campestre', '01 (644) 410-1800 y 01 (644) 410-1800 Ext. 17391', 'http://www.toyotaobregon.com/', '\0\0\0\0\0\0\0m9âªz;@øÁùÔ±{[À', 10, 0, 2, 0, 1, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(53, '57054', 'Toyota Riviera Maya', 'Playa del Carmen', 'Quintana Roo', '77710', 'Carretera Federal Cancún Tulum Zona 1 Super Manzana 3 Manzana 342 Lote 4 Col. Tigrillos', '01 (984) 877-4300 y 01 (984) 877-4300 EXT 4 Ó EXT. 233', 'http://www.toyotarivieramaya.com.mx', '\0\0\0\0\0\0\0>ê¯WX4@ñKý¼©ÆUÀ', 6, 0, 0, 1, 0, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(54, '57055', 'Toyota Aeropuerto', 'Ciudad de México', 'Distrito Federal', '15700', 'Av. Fuerza Aérea Mexicana 520-F, Col. Federal Delegación V. Carranza C.P. 15700', '01 (55) 5133-7777 y 01 (55) 5133-7782', 'http://www.toyotaaeropuerto.com.mx/', '\0\0\0\0\0\0\0(º.üàl3@§å®ÅXÀ', 20, 0, 1, 4, 1, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(55, '57600', 'Toyota Los Mochis', 'Los Mochis', 'Sinaloa', '81200', 'Blvd. Rosendo G. Castro #451 Pte. Col. Centro', '01 (668) 816-3030 y 01 (668) 816-3038', 'http://www.toyotamochis.com.mx', '\0\0\0\0\0\0\0$É9@µþÐÌ?[À', 9, 0, 1, 2, 0, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(56, '57601', 'Toyota Lindavista', 'Guadalupe', 'Nuevo León', '67130', 'Prol. Madero 440 Ote. Col. Libertad', '01 (81) 8215-0000 y 01 (81) 8215-0008', 'http://www.toyotalindavista.com.mx', '\0\0\0\0\0\0\0´W±9@±ÀWtëYÀ', 16, 0, 5, 7, 3, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(57, '57602', 'Toyota Innova Sendero', 'San Nicolas de los Garza', 'Nuevo León', '66428', 'Sendero 500', '01 (818) 158-3000 y EXT. 145 ó 146', 'http://www.toyotainnova.com.mx/', '\0\0\0\0\0\0\0Y¢³Ì"Ä9@Q÷HmYÀ', 19, 0, 2, 0, 1, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(58, '57603', 'Toyota Nogales', 'Nogales', 'Sonora', '84063', 'Blvd. Luis Donaldo Colosio 2680 Col. Unidad Deportiva', '01 (631) 311-8450 y 01 (631) 311-8450', 'http://www.toyotanogales.com', '\0\0\0\0\0\0\0ÜgÒJ?@ÒP£¼[À', 6, 0, 1, 1, 0, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(59, '57604', 'Dalton Toyota Patria', 'Zapopan', 'Jalisco', '45027', 'Av. Vallarta #5000', '01 (33) 3003-5000 y 01 (33) 3003-5001', 'http://www.daltontoyota.com.mx/daltontoyota/patria/', '\0\0\0\0\0\0\0?ÆÜ­4@kMG\0ÛYÀ', 34, 0, 0, 22, 5, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(60, '57605', 'Toyota Guadalajara Country', 'Guadalajara', 'Jalisco', '44610', 'Av. Circunvalación no. 1180 Col. Lomas de Country', '01 (33) 5000-9000 y 01 (33) 5000-9012', 'http://www.oztoyotacountry.com', '\0\0\0\0\0\0\0¨ß­Ù²4@vÆ÷Å¥×YÀ', 22, 0, 0, 7, 3, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(61, '57606', 'Toyota Salina Cruz', 'Sta. Cruz Xoxocotlán', 'Oaxaca', '70610', 'Carretera Transismica Km. 6.5 Col. Aviación, Salina Cruz oaxaca', '01 (971) 717-3050 al 58 y 01 (971) 717-3058 ò ext. 111', 'http://www.toyotasalinacruz.com.mx', '\0\0\0\0\0\0\0v©ú:0@Þ©{ÍWÀ', 3, 0, 0, 1, 0, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(62, '57607', 'Toyota Los Fuertes', 'Puebla', 'Puebla', '72240', 'Av. diagonal defensores de la republica 782, colonia adolfo lopez mateos', '01 (222) 223-5900 y 01 (222) 235-9559', 'http://www.toyotalosfuertes.com.mx', '\0\0\0\0\0\0\0»3@ÀtZ·XÀ', 6, 0, 0, 0, 1, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(63, '57608', 'Toyota Coacalco', 'Ciudad de México', 'Distrito Federal', '55714', 'Vía José López Portillo 306 Col. San Lorenzo Tetlixtac', '(55) 58 98 91 00', 'http://www.toyotacoacalco.com.mx', '\0\0\0\0\0\0\0¼#cµù3@Tn¢æÄXÀ', 12, 0, 0, 0, 0, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(64, '57609', 'Toyota Zaragoza', 'Ciudad de México', 'Distrito Federal', '09210', 'Calzada Ignacio Zaragoza No. 1577. Col. Tepalcates. Del. Iztapalapa.', '01 (55) 4749-2222 y 01 (55) 4749-2282', 'http://www.toyotazaragoza.com.mx', '\0\0\0\0\0\0\0ÌB;§Yd3@$d Ï.ÃXÀ', 9, 0, 0, 1, 1, '', '2013-08-10 20:04:05', '2013-08-10 20:04:05');
INSERT INTO `dealers` VALUES(65, '', 'Toyota Cuatla', 'Cuatla', 'Morelos', '62757', 'Camino Real Tetelcingo-Calderon No. 23, Col. Tierra Larga', '01 (734) 114-0801 y 01 (734) 114-0801', 'http://www.toyotacuautla.com.mx', '\0\0\0\0\0\0\029µ3LÍ2@AÕèÕ¼XÀ', 0, 0, 0, 0, 0, '', '2013-08-18 19:16:49', '2013-08-18 19:16:49');
INSERT INTO `dealers` VALUES(66, '', 'Centro de Servicio Mancera', 'Ciudad de México', 'Distrito Federal', '03100', 'Gabriel Mancera 1331, Col. Del Valle', '01 (55) 3000-3333 y 01 (55) 3000-3353', 'http://www.toyotauni.com.mx', '\0\0\0\0\0\0\0óã/-ê_3@¹0E¹ÊXÀ', 0, 0, 0, 0, 0, '', '2013-08-18 19:20:49', '2013-08-18 19:20:49');
INSERT INTO `dealers` VALUES(67, '', 'Toyota Guanajuato', 'Guanajuato', 'Guanajuato', '36250', 'Blvd. Euquerio Guerrero No. 34., Col. Burócrata', '01 (473) 733-4004 y 01 (473) 733-4004', 'http://www.toyotagto.com', '\0\0\0\0\0\0\0+Úç6ý4@[aú^CRYÀ', 0, 0, 0, 0, 0, '', '2013-08-18 19:23:58', '2013-08-18 19:23:58');
