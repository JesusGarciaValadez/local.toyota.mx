-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2014 at 01:41 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `correos`
--

INSERT INTO `correos` VALUES(1, 'probando', 'pemex@hotmail.com', '4424986986', '1', '1');
INSERT INTO `correos` VALUES(2, 'gloria', 'pimediana21@hotmail.com', '4654', '1', '1');
INSERT INTO `correos` VALUES(3, 'juan', 'manue@hotmail.com', '4424986986', '1', '1');
INSERT INTO `correos` VALUES(4, 'Gloria Adriana Pimentel', 'pimediana21@hotmail.com', '4424986986', '41', '41');
INSERT INTO `correos` VALUES(5, 'gloria pimentel', 'pimediana21@hotmai.com', '4424986986', '71', '71');

-- --------------------------------------------------------

--
-- Table structure for table `dealers`
--

CREATE TABLE `dealers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dealer_number` varchar(7) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `nombre_com` varchar(200) NOT NULL,
  `telefono` tinytext NOT NULL,
  `cargo` varchar(200) NOT NULL,
  `email` varchar(500) NOT NULL,
  `ciudad` varchar(200) NOT NULL,
  `estado` varchar(200) NOT NULL,
  `codigo_postal` varchar(20) NOT NULL,
  `direccion` varchar(500) NOT NULL,
  `telefono1` varchar(500) NOT NULL,
  `website` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `dealers`
--

INSERT INTO `dealers` VALUES(1, '57001', 'Dalton Toyota Lopez Mateos', 'Beatrice Torres', '(33) 38846060', 'Gerente de Ventas', 'hbtorres@dalton.com.mx', 'Zapopan', 'Jalisco', '45070', 'Av. Lopez Mateos #3780', '01 (33) 3884-6060 y 01 (33) 3884-6061', 'http://www.daltontoyota.com.mx/daltontoyota/lopez/');
INSERT INTO `dealers` VALUES(2, '57002', 'Toyota Monterrey', 'Laura Rosales', '(81) 81336600 ext.-6607', 'Gerente de Ventas', 'lrosales@toyotamonterrey.com.mx', 'San Pedro Garza Garcia', 'NUEVO LEON ', '66269', 'San Pedro Garza Garcia, N.L., Av. Lázaro Cardenas 2272 Ote Col.- Valle Oriente', '(81) 81336600 ext.-6607', 'www.toyotamonterrey.com.mx');
INSERT INTO `dealers` VALUES(3, '57003', 'Toyota Fame Perisur', 'Francisco Goitia', '54 81 19 02', 'Gerente General', 'gerencia@fameperisur.com', 'Ciudad de México', 'Distrito Federal', '01900', 'Adolfo Ruíz Cortines No. 4000 Bis Col. Jardines del Pedregal, Del. Álvaro Obregón, C.P. 01900', '01 (55) 5481-1900 y 01 (55) 5481-1949', 'http://toyotaperisur.com');
INSERT INTO `dealers` VALUES(4, '57004', 'Toyota Universidad', 'Aldeny Torruco', '3000 3326', 'Gerente de Marketing', 'atorruco@toyotauni.com.mx', 'D.F', 'D.F.', '03330', ' Av. Universidad No. 1112, Col. Xoco,', '3000 3326', 'http://www.toyotauni.com.mx/');
INSERT INTO `dealers` VALUES(5, '57005', 'Toyota Interlomas', 'Veronica Sanchez', '91 49 78 00 ext 788', 'Asistente ventas', 'asanchez@toyotainterlomas.com.mx', ' Mexico', ' Edo Mex', '52760 ', ' Blvd Magnocentro 17', '91 49 78 00 ', 'www.Toyotainterlomas.com.mx ');
INSERT INTO `dealers` VALUES(6, '57006', 'Toyota Satélite', 'Linda Bustamanete', '53210558', 'Asistente de Gerente de Ventas', 'molvera@toyotasatelite.mx', 'Naucalpan', 'Estado de México', '54040', 'Blvd. Manuel Avila Camacho 3039, San Andres Atenco, Tlalnepantla', '01 (55) 5321-0550 y 01 (55) 5321-0588 Ext. 586/231', 'http://www.toyotasatelite.com.mx/index.jsp');
INSERT INTO `dealers` VALUES(7, '57007', 'Toyota Angelópolis', 'Leaonardo Wallace', '01 (222) 303 6040', 'Gerente de Ventas', 'leonardo_wallace@toyotaangelopolis.com.mx', 'Puebla', 'Puebla', '72190', 'Vía Atlixcayotl 5502 Zona Comercial Angelópolis', '01 (222) 303-6000 y 01 (222) 303-6053', 'http://www.toyotaangelopolis.com.mx');
INSERT INTO `dealers` VALUES(8, '57008', 'Toyota Chihuahua', 'Ana Silvia Trejo Espinoza ', ' (614)4396901', ' GERENTE DE ATENCION AL CLIENTE', ' atrejo@toyotachihuahua.com', 'CHIHUAHUA', 'CHIHUAHUA', '31238', 'LATERAL PERIFERICO DE LA JUVENTUD 6711', '(614)4396900', 'www.toyotachihuahua.com ');
INSERT INTO `dealers` VALUES(9, '57009', 'Toyota Laguna', 'Karla Gisel Llanas Pérez', '01871-7472700', 'ASISTENTE DE DIRECCIîN COMERCIAL', 'asistvtastt@toyotatorreon.com', 'TORREîN', 'COAHUILA', '27010', 'BLVD. INDEPENDENCIA #2200 OTE COL, ESTRELLA ', '', 'http://www.toyotatorreon.com');
INSERT INTO `dealers` VALUES(10, '57010', 'Toyota del Bajío', 'Carlos Ayala', '(477) 7884800', 'Marketing', 'carlos.ayala@toyotadelbajio.com.mx', 'León', 'Guanajuato', '37180', 'Blvd. J. Alonso de Torres No. 1716, Col. El Moral 1', '01 (477) 788-4800 y 01 (477) 779-7200', 'http://www.toyotadelbajio.com.mx');
INSERT INTO `dealers` VALUES(11, '57011', 'Toyota Guadalajara Acueducto', 'Cecilia Millán', '(33) 36484000', 'Gerente de Ventas', 'karlanava@grupooz.mx', 'Zapopan', 'Jalisco', '45110', 'Av. Acueducto no. 6100 Fracc. Los Frailes', '01 (33) 364-84000 y 01 (33) 364-84012', 'http://www.oztoyotaguadalajara.com');
INSERT INTO `dealers` VALUES(12, '57012', 'Toyota Toluca', 'Nancy Alvarez Delagado', '722 262 3800', 'Coordinadora Mercadotecnia y RC', 'nan_77mx@hotmail.com', 'Metepec', 'Estado de México', '', 'blvd. Toluca Ixtapan No. 126 Col. La Purisima Metepec', '01722 262 3800', 'www.toyotatoluca.com.mx');
INSERT INTO `dealers` VALUES(13, '57013', 'Toyota Santa Fe', 'Gustavo Ramirez', '91 77 73 60', 'Gerente de Ventas', 'gramirez@toyotasantafe.com.mx', 'Ciudad de México', 'Distrito Federal', '05300', 'Juan Salvador Agraz 20;Col.Santa fe', '01 (55) 9177-7360 y 01 (55) 9177-7360', 'http://www.toyotasantafe.com.mx');
INSERT INTO `dealers` VALUES(14, '57014', 'Toyota Mérida', 'Martha Carrillo', '(999) 930 0348', 'Gerente de Ventas', 'm_carrillo@toyotamerida.com.mx', 'Merida', 'Yucatan', '97119', 'Prolongación Paseo Montejo esquina con calle 43, col. Benito Juárez Norte, Mérida, Yucatán', '930.03.30', 'http://www.toyotamerida.com.mx/');
INSERT INTO `dealers` VALUES(15, '57016', 'Toyota Fame Valladolid', 'Cythia Díaz', '(443) 3400100', 'Calidad y Atención a Clientes', 'calidad@famevalladolid.com', 'Morelia', 'Michoacán', '58250', 'Av. Acueducto 3603, Col. Pascual Ortiz de Ayala', '01 (443) 340- 0100 y 01 ( 443) 340- 0100 ext. 228 y 219', 'http://www.famevalladolid.com/');
INSERT INTO `dealers` VALUES(16, '57017', 'Toyota Querétaro', 'José Rodríguez', '(442) 2344200', 'Gerente de Ventas', 'jrodriguez@toyotaqueretaro.com.mx', 'Querétaro', 'Querétaro', '76125', 'Blvd. Bernardo Quintana 628, Col. San Pablo, Qro., Qro.', '01 (442) 234-4200 y 01 (442) 234-4209', 'http://www.toyotaqueretaro.com.mx');
INSERT INTO `dealers` VALUES(17, '57018', 'Toyota Veracruz', 'Alejandro Barrios', '01 22 99 27 33 20', 'Gerente General', 'dvgeneral@diezfenix.com', 'Veracruz', 'Veracruz', '91960', 'Carretera Mexico- Veracruz Km 441 s/n', '01 (229) 927-3320 y 01 (229) 927-3320 Ext 112', 'http://www.diezfenix.com.mx/toyotaveracruz');
INSERT INTO `dealers` VALUES(18, '57019', 'Toyota Aguascalientes', 'Oscar Delgado', '(449) 9221000', 'Gerente de Ventas', 'odelgado@toyotadeaguascalientes.com.mx', 'Aguascalientes', 'Aguascalientes', '20140', 'Blvd. Zacatecas Nte. 850 esq. Blvd. Aguascalientes, Col. Las Hadas, Aguascalientes', '01 (442) 922-1000 y 01 (442) 922-1009', 'http://www.toyotadeaguascalientes.com.mx');
INSERT INTO `dealers` VALUES(19, '57020', 'Dalton Toyota San Luis', 'Gustavo Rivera', '(444) 8264000', 'Gerente de Ventas', 'grivera@dalton.com.mx', 'San Luis Potosí', 'San Luis Potosí', '78216', 'Av. Cordillera de los alpes #570', '01 (444) 826-4000 y 01 (444) 826-4019', 'http://www.daltontoyotaslp.com.mx/');
INSERT INTO `dealers` VALUES(20, '57021', 'Toyota Innova Fleteros', ' Aidee Espinosa', '(81) 81 22 46 00 Ext. 138', 'Coordinadora de mercadotecnia ', ' aidee.espinosa@toyotainnova.com.mx', ' Monterrey', 'NL', ' 64640', ' Pablo A. Gonzalez 408', ' (81) 81 22 46 00  ', ' toyotainnova.com.mx');
INSERT INTO `dealers` VALUES(21, '57022', 'Toyota Vallejo', 'Eric Prado', '(55) 53853000', 'Coordianador CDC', 'eprado@toyotavallejo.com.mx', 'Ciudad de México', 'Distrito Federal', '02630', 'Calzada Vallejo 724A Col. Coltongo', '01 (55) 5385-3000 y 01 (55) 5385-3015 y 01 (55) 5385-3009', 'http://www.toyotavallejo.com.mx');
INSERT INTO `dealers` VALUES(22, '57023', 'Toyota Tabasco', 'Edgar Castro Avalos', '(993) 316 1003', 'Gerente de Ventas', 'ecastroa@grupocruces.com.mx', 'Tabasco', 'Villahermosa', '86035', 'Paseo usumacinta No. 1003, Col. Tabasco 2000', '01 (993) 310-0227 y 01 (993) 316-1003', 'http://www.toyotatabasco.mx');
INSERT INTO `dealers` VALUES(23, '57024', 'Toyota Culiacán', 'Sissy Leal ', '016677616161 ext. 2459', 'Gerente de Atención a Clientes', 'sleal@toyotaculiacan.com.mx', 'Culiacán', 'Sinaloa', '80020', 'Blvd. Pedro Infante 2531 Pte. Desarrollo Urbano 3 Ríos', '01 (667) 761-6161 y 01 (667) 717-0910/ 01 (667) 992-1732', 'http://www.toyotaculiacan.com.mx/');
INSERT INTO `dealers` VALUES(24, '57025', 'Toyota Pachuca', 'Alejandro Montiel', '01 (771) 717 02 70', 'Gerente de Ventas', 'amontiel@toyotapachuca.com.mx', 'Mineral de Hidalgo', 'Hidalgo', '42182', 'Carretera Pachuca-Cd. Sahagun Km. 3.5 Col. Chacon, Mineral de la Reforma', '01 (771) 717-0270 y 01 (771) 717-0275', 'http://www.toyotapachuca.com.mx');
INSERT INTO `dealers` VALUES(25, '57026', 'Toyota Hermosillo', 'Cecilia Cervantes', '01 (662) 2 59 79 10', 'Administrativo de Ventas', 'aventas@toyotahermosillo.com', 'Hermosillo', 'Sonora', '83270', 'Boulevard Francisco Serna S/N Col. El Malecón', '(662) 259 79 00', 'http://www.toyotahermosillo.com');
INSERT INTO `dealers` VALUES(26, '57027', 'Toyota Tampico', 'Eduardo Orta', '01 (833) 230 32 00', 'Gerente de Ventas', 'eorta@toyotatampico.com.mx', 'Tampico', 'Tamaulipas', '89344', 'Avenida Hidalgo No. 6110', '01 (833) 230-3200 y 01 (833) 230-3200', 'http://www.toyotatampico.com.mx');
INSERT INTO `dealers` VALUES(27, '57028', 'Toyota Chiapas', 'Marcos Arjona Tamayo', '(961) 617-7000', 'Gerente general', 'Marcos.arjona@gfarrera.com.mx', 'Tuxtla Gutierrez', 'Chiapas', '29077', 'Blvd. Angel Albino Corzo No. 750 Col. Bienestar Social', '(961) 617-7000', 'www.toyotachiapas.com');
INSERT INTO `dealers` VALUES(28, '57029', 'Toyota Oaxaca', 'Carolina Aguayo Hérnandez', ' (951) 5016400', 'Recepcionista', ' ventas@toyotaoaxaca.com.mx', ' OAXACA   ', ' OAXACA', '71230        ', ' AV. SIMBOLOS PATRIOS #728 COL. ELISEO JIMENEZ RUIZ , SANTA CRUZ XOXOCOTLAN', ' (951) 5016401-09', 'www.toyotaoaxaca.com.mx');
INSERT INTO `dealers` VALUES(29, '57030', 'Toyota Colima', 'Georgina Acerves Carbajal', '01 (312) 316 13 73', 'Coordinadora de Mercadotecnia', 'clienteconsentido@oztoyotacolima.com', 'Colima', 'Colima', '28060', 'Blvd. Carlos de la Madrid 909', '01 (312) 312-3139 y 01 (312) 316-1718', 'http://www.toyotacolima.com');
INSERT INTO `dealers` VALUES(30, '57031', 'Toyota Córdoba', 'Javier Ituarte', '01 (271)  717 13 13', 'Gerente de Ventas', 'jituarte@toyotacordoba.com.mx ', 'Córdoba', 'Veracruz', '94575', 'Prolongación calle 10 # 4320 Col. La Posta', '(271) 717 1317', 'http://www.toyotacordoba.com.mx');
INSERT INTO `dealers` VALUES(31, '57032', 'Toyota Saltillo', ' Clara Irela Lozano Galván', '8444387272', 'Coordinadora de mercadotecnia', 'ci.lozano@toyotasaltillo.com', 'Saltillo', 'Coahuila', '25270', 'Carr. Mty-Saltillo #6651', '', 'www.Toyotasaltillo.com ');
INSERT INTO `dealers` VALUES(32, '57033', 'Toyota Tijuana', 'Luis Ceceña', '6642063188', 'Gerente de Ventas', 'lcecena@toyotatijuana.com.mx', 'Tijuana', 'Baja California', '22010', 'Ave. Rapida Pte 15155 Zona Rio', '01 (664) 231-5133 y 01 (800) 8886-9682', 'http://toyotatijuana.com.mx/');
INSERT INTO `dealers` VALUES(33, '57034', 'Toyota Innova Juarez', 'Evelyn Paola Castañeda Perez', '6562732940', 'Recepcion', 'evelyn.castaneda@toyotainnova.com.mx', 'Juarez', 'CHIHUAHUA', '32617', 'Paseo Triunfo de la republica 5115   Colonia Partido Diaz', '6163333', '');
INSERT INTO `dealers` VALUES(34, '57035', 'Toyota Coatzacoalcos', 'Pablo García', '01 (921) 21 724 10', 'Gerente de Ventas', 'dcgventas@diezfenix.com ', 'Coatzacoalcos', 'Veracruz', '96496', 'Carretera Transismica Km. 4.9 B', '01 (921) 217-2410 y 01 (921) 217-2410', 'http://www.toyotacoatzacoalcos.com.mx');
INSERT INTO `dealers` VALUES(35, '57036', 'Toyota Canún', 'Carlos Olvera', '44.99.82.60.3678', 'Gerente de Ventas', 'c_olvera@toyotacancun.com.mx', 'Cancœn', 'Quintana Roo', '77565', 'Calle Isla Mujeres #1 Sm 312 Mza 34 Lt 1 Esq. Blvd Luis Donaldo Colosio Residencial Islazul.', '', 'www.toyotacancun.com.mx');
INSERT INTO `dealers` VALUES(36, '57037', 'Toyota Guerrero', 'Raymundo Mártinez Argumedo', ' 7442183052', 'Gerente de Ventas', ' r_martinez@toyotaguerrero.com.mx', ' Acapulco, Gro.', ' Guerrero', ' 39890', ' Blvd de las Naciones 52-b Granjas del Marquez', ' 7444351414', '');
INSERT INTO `dealers` VALUES(37, '57038', 'Toyota Coapa', 'Eleazar Fernandez', '5599 0909', 'Gerente de Ventas', 'eleazar_fernandez@toyotacoapa.com.mx ', 'Ciudad de México', 'Distrito Federal', '14300', 'Av. Canal De Miramontes No3279 Col. Residencial Acoxpa Del. Tlalpan', '01 (55) 5599-0909 y 01 (55) 5599-0927', 'http://www.toyotcoapa.com.mx');
INSERT INTO `dealers` VALUES(38, '57039', 'Toyota Cuernavaca', 'Perla Delinek Gómez Salgado', '7771007800', 'Coord. Atencion a clientes y mercadotecnia.', 'pgomez@toyotacuernavaca.com.mx', 'Cuernavaca', 'Morelos', '62330', 'Priv. De la cascada no. 23, Col. Delicias.', '', 'www.toyotacuernavaca.com.mx');
INSERT INTO `dealers` VALUES(39, '57040', 'Toyota Celaya', 'Elizabeth Toledo', '(461) 1598800', 'Marketing', 'etoledo@toyotacelaya.com.mx', 'Celaya', 'Guanajuato', '38130', 'Prol. Blvd. Adolfo López Mateos #1504 Esq. Eje Nororiente, Col. La Laja', '01 (461) 159-8800 y 01 (461) 159-8809', 'http://www.toyotacelaya.com.mx');
INSERT INTO `dealers` VALUES(40, '57041', 'Toyota Innova Reynosa', 'Linda Jazmin Jimenez Peña', '01899 9091900', 'Atención a cliente', 'correo linda.jimenez@toyotainnova.com.mx', 'REYNOSA', 'TAMAULIPAS', '88746', 'CARRETERA REYNOSA - MONTERREY NO. 106 COL FUENTES DEL VALLE ', '01899 9091900', 'www.toyotainnova.com.mx');
INSERT INTO `dealers` VALUES(41, '57042', 'Toyota Durango', ' Abril Jacqueline Molina Ramos', ' 618150-07-00', ' Gte. Ventas', ' amolina@toyotadurango.com', ' Durango', ' Durango', '34234 ', ' Blvd. Francisco Villa #4020 Col. 20 de Noviembre', ' 618158-16-93', '');
INSERT INTO `dealers` VALUES(42, '57043', 'Toyota Campeche', 'Eduardo Fraire', '98.11.27.3000', 'Gerente de Ventas', 'efrairev@grupocruces.com.mx', 'Campeche', 'Campeche', '24010', 'Ricardo Castillo Oliver No. 9, Manzana K, Sector Fundadores del Área AHKIM-PECH', '01 (981) 127-3000 y 01 (981) 811-4685 al 87', 'http://www.toyotacampeche.com');
INSERT INTO `dealers` VALUES(43, '57044', 'Toyota Mazatlán', 'Paulina Brambila Mendoza', '01 (669) 989 22 06', 'Administrativo de Ventas', 'pbrambila@toyotamazatlan.com.mx', 'Mazatlán', 'Sinaloa', '82149', 'Av. Reforma #314 Col. Flamingo', '01 (669) 989-2200 y 01 (669) 989-2202', 'http://www.toyotamazatlan.com.mx');
INSERT INTO `dealers` VALUES(44, '57045', 'Toyota Irapuato', 'Ana Muñoz', '(462) 6359912', 'Gerente de Ventas', 'amunoz@toyotairapuato.com.mx', 'Irapuato', 'Guanajuato', '36640', 'Ave. Manuel Gómez Morin 3000. Colo. Ejido Irapuato', '01 (462) 635-9900 al 09 y 01 (462) 635-9914', 'http://www.toyotairapuato.com.mx');
INSERT INTO `dealers` VALUES(45, '57046', 'Toyota Lomas Verdes', 'Elena Ortiz', '15003500 ext. 123', 'Trainer', 'maortiz@toyotalomasverdes.com.mx', 'Naucalpan', 'Estado de México', '53150', 'Blvd.. Manuel Ávila Camacho 758-A Col. Sta. Cruz Acatlán', '01 (55) 1500-3500 y 01 (55) 1500-3505', 'http://www.toyotalomasverdes.com.mx/');
INSERT INTO `dealers` VALUES(46, '57047', 'Toyota Xalapa', 'Gerardo Cruz', '01 (228) 141 0400', 'Gerente de Ventas', 'gcruz@toyotaxalapa.com.mx ', 'Xalapa', 'Veracruz', '91193', 'K.M. 2.5 Carretera Xalapa-Veracruz S/N Colonia Pastoressa.', '01 (228) 141-0400 y 01 (228) 141-0400 ext. 1045', 'http://www.toyotaxalapa.com.mx/');
INSERT INTO `dealers` VALUES(47, '57048', 'Toyota Poza Rica', 'Manuel Perez', ' 01 (782) 826 11 00', 'Gerente de Ventas', 'mperezg@toyotapozarica.com.mx ', 'Poza Rica', 'Veracruz', '93320', 'Av. Ejército Mexicano # 108', '01 (782) 826-1100 y 01 (782) 826-1100', 'http://www.toyotapozarica.com.mx');
INSERT INTO `dealers` VALUES(48, '57049', 'Toyota Puerto Vallarta', 'Rosario Morgado', '3221821974', 'Administrativo de Ventas', 'rmorgado@toyotapuertovallarta.com.mx', 'Puerto Vallarta', 'Jalisco', '05519', 'Carretera a Tepic Puerto Vallarta 5519 Zona Hotelera Norte', '01 (322) 226-9000 y 01 (322) 226-9000', 'http://www.toyotapuertovallarta.com.mx');
INSERT INTO `dealers` VALUES(49, '57050', 'Toyota Polanco', 'Rolando Navarrete', '2581-1010', 'Asesor ', 'rolando.navarrete@toyotapolanco.com.mx', 'Mexico', 'DF', '11520', 'Lago Alberto 320', '2581-1010', 'www.toyotapolanco.com.mx');
INSERT INTO `dealers` VALUES(50, '57051', 'Toyota Mexicali', 'Patricia Barack', '6861586077', 'Gerente de Ventas', 'paty.barak@autopasion.com.mx', 'Mexicali', 'Baja California', '21254', 'Calz. Cetys 2630, Residencial San Pedro 2', '01 (686) 104-2222 y 01 (686) 104-2205', 'http://www.toyotamexicali.com');
INSERT INTO `dealers` VALUES(51, '57052', 'Toyota Los Cabos', 'Cristian Hernández', '6241069460', 'Gerente de Ventas', 'chernandez@toyotaloscabos.com.mx', 'San Jose del Cabo', 'Baja California Sur', '23400', 'Carrtera Transpeninsular KM 25.8 Fracc Palmilla', '01 (624) 144-6570 y 01 (800) 295-7575', 'http://toyotaloscabos.com.mx/');
INSERT INTO `dealers` VALUES(52, '57053', 'Toyota Cd. Obregón', 'Luis Gutierrez', '6441220770', 'Gerente de Ventas', 'luis.gutierrez@toyotahermosillo.com,', 'Obregón', 'Sonora', '85160', 'Dr. Norman E. Borlaug No. 1410 Col. Campestre', '01 (644) 410-1800 y 01 (644) 410-1800 Ext. 17391', 'http://www.toyotaobregon.com/');
INSERT INTO `dealers` VALUES(53, '57054', 'Toyota Riviera Maya', 'Meydian Melendez Morales', '9848774300', 'Gerente de Ventas', 'Mydian.melendez@gfarrera.com.mx', 'PLAYA DEL CARMEN', 'QUINTANA ROO', '77710', 'CARR. FED CANCUN TULUM Z 1 SM 3 MZA 342 LTE 4 COL TIGRILLOS', '9848774300', 'WWW.TOYOTARIVIERAMAYA.COM.MX');
INSERT INTO `dealers` VALUES(54, '57055', 'Toyota Aeropuerto', 'Rafael Avila Salazar', '5133 7777', 'Gerente de Ventas', 'ravila@toyotaaeropuerto.com.mx', 'MEXICO', 'D.F.', '15700', 'Av. Fuerza Aerea Mexicana 520 F Col. Federal, Venustiano Carranza', '5133 7777 ', 'www.toyotaaeropuerto.com.mx ');
INSERT INTO `dealers` VALUES(55, '57600', 'Toyota Los Mochis', 'Patricia Vega ', '01 (624)  144 65 55', 'Gerente de Mercadotecnia', 'pvega@toyotamochis.com.mx', 'Los Mochis', 'Sinaloa', '81200', 'Blvd. Rosendo G. Castro #451 Pte. Col. Centro', '01 (668) 816-3030 y 01 (668) 816-3038', 'http://www.toyotamochis.com.mx');
INSERT INTO `dealers` VALUES(56, '57601', 'Toyota Lindavista', 'Rocia Lira/ Dolores Hérnandez', '82150000 ', 'Gerente de Ventas', ' RLIRA@TOYOTAMONTERREY.COM.MX /DHERNANDEZ@TOYOTALINDAVISTA.COM.MX ', ' MONTERREY', 'NUEVO LEON ', ' 67130', ' PROLONGACION MADERO 440 OTE COL LIBERTAD. GUADALUPE NUEVO LEON ', ' 82150000', ' WWW.TOYOTALINDAVISTA.COM.MX');
INSERT INTO `dealers` VALUES(57, '57602', 'Toyota Innova Sendero', 'Cecilia Romo', '(81) 81 58 30 00 Ext. 122', 'Mercadotecnia ', ' cecilia.romo@toyotainnova.com.mx', ' Monterrey', 'NL', ' 66428', ' Sendero 500', '(81) 81 58 30 00', ' toyotainnova.com.mx');
INSERT INTO `dealers` VALUES(58, '57603', 'Toyota Nogales', 'Luis Munguia', '662 173 99 15 ', 'Gerente de Ventas', 'luis_munguia@toyotanogales.com', 'Nogales', 'Sonora', '84063', 'Blvd. Luis Donaldo Colosio 2680 Col. Unidad Deportiva', '01 (631) 311-8450 y 01 (631) 311-8450', 'http://www.toyotanogales.com');
INSERT INTO `dealers` VALUES(59, '57604', 'Dalton Toyota Patria', 'Raymundo Cabuto', '(33) 30035000', 'Gerente de Ventas', 'raymundo.cabuto@dalton.com.mx', 'Zapopan', 'Jalisco', '45027', 'Av. Vallarta #5000', '01 (33) 3003-5000 y 01 (33) 3003-5001', 'http://www.daltontoyota.com.mx/daltontoyota/patria/');
INSERT INTO `dealers` VALUES(60, '57605', 'Toyota Guadalajara Country', 'Moises Varela', '(33) 50009000', 'Gerente de Ventas', 'mosiesvarela@oztoyota.com', 'Guadalajara', 'Jalisco', '44610', 'Av. Circunvalación no. 1180 Col. Lomas de Country', '01 (33) 5000-9000 y 01 (33) 5000-9012', 'http://www.oztoyotacountry.com');
INSERT INTO `dealers` VALUES(61, '57606', 'Toyota Salina Cruz', 'Alberto aguilar', '971 7173050', 'Gerencia General', 'apalacio@toyotasalinacruz.com.mx', 'Salina cruz', 'Oaxaca', '70610', 'Carret. Transistmica km. 6.5 Salina cruz, Oax.', '971 7173050', 'www.toyotasalinacruz.com.mx');
INSERT INTO `dealers` VALUES(62, '57607', 'Toyota Los Fuertes', 'Augusto Medina', '(01 222) 223 59 00', 'Gerente de Ventas', 'augusto_medina@toyotalosfuertes.com.mx ', 'Puebla', 'Puebla', '72240', 'Av. diagonal defensores de la republica 782, colonia adolfo lopez mateos', '01 (222) 223-5900 y 01 (222) 235-9559', 'http://www.toyotalosfuertes.com.mx');
INSERT INTO `dealers` VALUES(63, '57608', 'Toyota Coacalco', 'Edgar Díaz', '(55) 58989100', 'Gerente General', 'ediaz@toyotacoacalco.com.mx', 'Ciudad de México', 'Distrito Federal', '55714', 'Vía José López Portillo 306 Col. San Lorenzo Tetlixtac', '(55) 58 98 91 00', 'http://www.toyotacoacalco.com.mx');
INSERT INTO `dealers` VALUES(64, '57609', 'Toyota Zaragoza', ' Miguel Flaquer', ' 47492222', ' Gte de Vtas.', ' mflaquer@toyotazaragoza.com.mx', ' Mexico', ' D.F.', ' 09210', ' Calz. Ignacio Zaragoza 1577 col tepalcates. Iztapalapa', ' 47492222', 'www.toyotazaragoza.com.mx');
INSERT INTO `dealers` VALUES(65, '', 'Toyota Cuatla', 'Perla Delinek Gómez Salgado', '7771007800', 'Coord. Atencion a clientes y mercadotecnia.', 'pgomez@toyotacuernavaca.com.mx', 'Cuautla', 'Morelos', '', '', '', 'www.toyotacuautla.com.mx');
INSERT INTO `dealers` VALUES(66, '', 'Centro de Servicio Mancera', 'Aldeny Torruco', '3000 3326', 'Gerente de Marketing', 'atorruco@toyotauni.com.mx', 'D.F', 'D.F.', '03330', ' Av. Universidad No. 1112, Col. Xoco,', '3000 3326', 'http://www.toyotauni.com.mx/');
INSERT INTO `dealers` VALUES(67, '', 'Toyota Guanajuato', 'Carlos Ayala', '(477) 7884800', 'Marketing', 'carlos.ayala@toyotadelbajio.com.mx', 'León', 'Guanajuato', '37180', 'Blvd. J. Alonso de Torres No. 1716, Col. El Moral 1', '01 (477) 788-4800 y 01 (477) 779-7200', 'http://www.toyotadelbajio.com.mx');
INSERT INTO `dealers` VALUES(68, '', 'Toyota Cuautitlán', 'Martha Patricia Martinez Maldonado ', ' Tel. Of. 58-70-66-90 Tel. Cel. 5529-54-60-18', 'Encargada Mercadotecnia', ' patriciamtz2@gmail.com', ' México', 'Edo. De México', ' 54730', 'Calzada de Guadalupe LT-12, Col. Industrial Cuamatla, Cuautitlán', ' 58.70.66.90', 'http://toyotacuautitlan.com.mx');
INSERT INTO `dealers` VALUES(69, '', 'Toyota Revolución', 'Alberto Cabrera Vázquez', 'OFIC. 86478020  CEL. 5554-169902', 'Gerente de Ventas', 'acabrera@toyotarevolucion.com.mx', 'MEXICO', 'D.F', '3800', 'AV. REVOLUCION N. 406 COL. SAN PEDRO DE LOS PINOS  C.P. 03800 MEXICO D.F', '86478000', 'www.toyotarevolucion.com.mx');
INSERT INTO `dealers` VALUES(70, '', 'Toyota Manzanillo', 'Georgina Acerves Carbajal', '01 (312) 316 13 73', 'Coordinadora de Mercadotecnia', 'clienteconsentido@oztoyotacolima.com', 'Colima', 'Colima', '28060', 'Blvd. Carlos de la Madrid 909', '01 (312) 312-3139 y 01 (312) 316-1718', 'http://www.toyotacolima.com');
