<?php 
header('Content-Type: application/json');

$dealers = '[{"id":1,"dealer_number":57001,"nombre":"Dalton Toyota Lopez Mateos","ciudad":"Zapopan","estado":"Jalisco","codigo_postal":45070,"direccion":"Av. Lopez Mateos #3780","telefono":"01 (33) 3884-6060 y 01 (33) 3884-6061","website":"http:\/\/www.daltontoyota.com.mx\/daltontoyota\/lopez\/","latitud":20.640827,"longitud":-103.409822},{"id":2,"dealer_number":57002,"nombre":"Toyota Monterrey","ciudad":"Monterrey","estado":"Nuevo Le\u00f3n","codigo_postal":66269,"direccion":"Av. L\u00e1zaro C\u00e1rdenas 2272 Ote. Col. Valle Oriente","telefono":"01 (81) 8133-6600 y 01 (81) 8150-6608","website":"http:\/\/www.toyotamonterrey.com.mx","latitud":25.643441,"longitud":-100.321142},{"id":3,"dealer_number":57003,"nombre":"Toyota Fame Perisur","ciudad":"Ciudad de M\u00e9xico","estado":"Distrito Federal","codigo_postal":1900,"direccion":"Adolfo Ru\u00edz Cortines No. 4000 Bis Col. Jardines del Pedregal, Del. \u00c1lvaro Obreg\u00f3n, C.P. 01900","telefono":"01 (55) 5481-1900 y 01 (55) 5481-1949","website":"http:\/\/toyotaperisur.com","latitud":19.307455,"longitud":-99.214448},{"id":4,"dealer_number":57004,"nombre":"Toyota Universidad","ciudad":"Ciudad de M\u00e9xico","estado":"Distrito Federal","codigo_postal":3330,"direccion":"Av. Universidad 1112, Col. Xoco","telefono":"01 (55) 3000-3300 y 01 (55) 3000-3353","website":"http:\/\/www.toyotauni.com.mx\/","latitud":19.363908,"longitud":-99.168597},{"id":5,"dealer_number":57005,"nombre":"Toyota Interlomas","ciudad":"Huixquilucan","estado":"Estado de M\u00e9xico","codigo_postal":52760,"direccion":"Blvd. Magnocentro No.17 Col. Urbano San Fernando la Herradura Municio de Huixquilucan Edo de Mex.","telefono":"01 (55) 9149-7800 y 01 (55) 1085-5727","website":"http:\/\/www.toyotainterlomas.com.mx","latitud":19.402769,"longitud":-99.272078},{"id":6,"dealer_number":57006,"nombre":"Toyota Sat\u00e9lite","ciudad":"Naucalpan","estado":"Estado de M\u00e9xico","codigo_postal":54040,"direccion":"Blvd. Manuel Avila Camacho 3039, San Andres Atenco, Tlalnepantla","telefono":"01 (55) 5321-0550 y 01 (55) 5321-0588 Ext. 586\/231","website":"http:\/\/www.toyotasatelite.com.mx\/index.jsp","latitud":19.541589,"longitud":-99.213354},{"id":7,"dealer_number":57007,"nombre":"Toyota Angel\u00f3polis","ciudad":"Puebla","estado":"Puebla","codigo_postal":72190,"direccion":"V\u00eda Atlixcayotl 5502 Zona Comercial Angel\u00f3polis","telefono":"01 (222) 303-6000 y 01 (222) 303-6053","website":"http:\/\/www.toyotaangelopolis.com.mx","latitud":19.025220805476,"longitud":-98.2376417},{"id":8,"dealer_number":57008,"nombre":"Toyota Chihuahua","ciudad":"Chihuahua","estado":"Chihuahua","codigo_postal":31238,"direccion":"Lateral Perif\u00e9rico de la Juventud #6711 Residencial Cumbres","telefono":"01 (614) 439-6900 y 01 (614) 439-6930","website":"http:\/\/www.toyotachihuahua.com","latitud":28.6266,"longitud":-106.1164},{"id":9,"dealer_number":57009,"nombre":"Toyota Laguna","ciudad":"Torre\u00f3n","estado":"Coahuila","codigo_postal":27000,"direccion":"Blvd. Independencia 2200 Oriente, Col. Estrella","telefono":"01 (871) 747-0700 y 01 (871) 747-2724","website":"http:\/\/www.toyotatorreon.com.mx","latitud":25.567898,"longitud":-103.424456},{"id":10,"dealer_number":57010,"nombre":"Toyota del Baj\u00edo","ciudad":"Le\u00f3n","estado":"Guanajuato","codigo_postal":37180,"direccion":"Blvd. J. Alonso de Torres No. 1716, Col. El Moral 1","telefono":"01 (477) 788-4800 y 01 (477) 779-7200","website":"http:\/\/www.toyotadelbajio.com.mx","latitud":21.155528,"longitud":-101.684912},{"id":11,"dealer_number":57011,"nombre":"Toyota Guadalajara Acueducto","ciudad":"Zapopan","estado":"Jalisco","codigo_postal":45110,"direccion":"Av. Acueducto no. 6100 Fracc. Los Frailes","telefono":"01 (33) 364-84000 y 01 (33) 364-84012","website":"http:\/\/www.oztoyotaguadalajara.com","latitud":20.72324,"longitud":-103.41741},{"id":12,"dealer_number":57012,"nombre":"Toyota Toluca","ciudad":"Metepec","estado":"Estado de M\u00e9xico","codigo_postal":52148,"direccion":"Blvd-Toluca Ixtapan 126 nte Col. La purisima","telefono":"01 (722) 262-3800 y 01 (722) 262-3810 ext 131\/144","website":"http:\/\/www.toyotatoluca.com.mx","latitud":19.255881,"longitud":-99.619637},{"id":13,"dealer_number":57013,"nombre":"Toyota Santa Fe","ciudad":"Ciudad de M\u00e9xico","estado":"Distrito Federal","codigo_postal":5300,"direccion":"Juan Salvador Agraz 20;Col.Santa fe","telefono":"01 (55) 9177-7360 y 01 (55) 9177-7360","website":"http:\/\/www.toyotasantafe.com.mx","latitud":19.36,"longitud":-99.27899},{"id":14,"dealer_number":57014,"nombre":"Toyota M\u00e9rida","ciudad":"Merida","estado":"Yucat\u00e1n","codigo_postal":97119,"direccion":"Calle 43 (Prolongaci\u00f3n Paseo de Montejo) No. 330 x 52 y 54 Col. Benito Ju\u00e1rez Norte","telefono":"01 (999) 930-0330 y 01 (999) 930-0348","website":"http:\/\/www.toyotamerida.com.mx","latitud":21.02156,"longitud":-89.620414},{"id":15,"dealer_number":57016,"nombre":"Toyota Fame Valladolid","ciudad":"Morelia","estado":"Michoac\u00e1n","codigo_postal":58250,"direccion":"Av. Acueducto 3603, Col. Pascual Ortiz de Ayala","telefono":"01 (443) 340- 0100 y 01 ( 443) 340- 0100 ext. 228 y 219","website":"http:\/\/www.famevalladolid.com\/","latitud":19.695082,"longitud":-101.150458},{"id":16,"dealer_number":57017,"nombre":"Toyota Quer\u00e9taro","ciudad":"Quer\u00e9taro","estado":"Quer\u00e9taro","codigo_postal":76125,"direccion":"Blvd. Bernardo Quintana 628, Col. San Pablo, Qro., Qro.","telefono":"01 (442) 234-4200 y 01 (442) 234-4209","website":"http:\/\/www.toyotaqueretaro.com.mx","latitud":20.619128,"longitud":-100.408623},{"id":17,"dealer_number":57018,"nombre":"Toyota Veracruz","ciudad":"Veracruz","estado":"Veracruz","codigo_postal":91960,"direccion":"Carretera Mexico- Veracruz Km 441 s\/n","telefono":"01 (229) 927-3320 y 01 (229) 927-3320 Ext 112","website":"http:\/\/www.diezfenix.com.mx\/toyotaveracruz","latitud":19.140952,"longitud":-96.141425},{"id":18,"dealer_number":57019,"nombre":"Toyota Aguascalientes","ciudad":"Aguascalientes","estado":"Aguascalientes","codigo_postal":20140,"direccion":"Blvd. Zacatecas Nte. 850 esq. Blvd. Aguascalientes, Col. Las Hadas, Aguascalientes","telefono":"01 (442) 922-1000 y 01 (442) 922-1009","website":"http:\/\/www.toyotadeaguascalientes.com.mx","latitud":21.915079,"longitud":-102.291546},{"id":19,"dealer_number":57020,"nombre":"Dalton Toyota San Luis","ciudad":"San Luis Potos\u00ed","estado":"San Luis Potos\u00ed","codigo_postal":78216,"direccion":"Av. Cordillera de los alpes #570","telefono":"01 (444) 826-4000 y 01 (444) 826-4019","website":"http:\/\/www.daltontoyotaslp.com.mx\/","latitud":22.136067,"longitud":-101.027715},{"id":20,"dealer_number":57021,"nombre":"Toyota Innova Fleteros","ciudad":"Monterrey","estado":"Nuevo Le\u00f3n","codigo_postal":64640,"direccion":"Pablo A. Gonzales 408","telefono":"01 (818 ) 122-4600 y EXT. 234 \u00f3 236","website":"http:\/\/www.toyotainnova.com.mx\/","latitud":25.679339,"longitud":-100.355794},{"id":21,"dealer_number":57022,"nombre":"Toyota Vallejo","ciudad":"Ciudad de M\u00e9xico","estado":"Distrito Federal","codigo_postal":2630,"direccion":"Calzada Vallejo 724A Col. Coltongo","telefono":"01 (55) 5385-3000 y 01 (55) 5385-3015 y 01 (55) 5385-3009","website":"http:\/\/www.toyotavallejo.com.mx","latitud":19.484139,"longitud":-99.150223},{"id":22,"dealer_number":57023,"nombre":"Toyota Tabasco","ciudad":"Tabasco","estado":"Villahermosa","codigo_postal":86035,"direccion":"Paseo usumacinta No. 1003, Col. Tabasco 2000","telefono":"01 (993) 310-0227 y 01 (993) 316-1003","website":"http:\/\/www.toyotatabasco.mx","latitud":19.852906,"longitud":-90.527474},{"id":23,"dealer_number":57024,"nombre":"Toyota Culiac\u00e1n","ciudad":"Culiac\u00e1n","estado":"Sinaloa","codigo_postal":80020,"direccion":"Blvd. Pedro Infante 2531 Pte. Desarrollo Urbano 3 R\u00edos","telefono":"01 (667) 761-6161 y 01 (667) 717-0910\/ 01 (667) 992-1732","website":"http:\/\/www.toyotaculiacan.com.mx\/","latitud":24.800867,"longitud":-107.414731},{"id":24,"dealer_number":57025,"nombre":"Toyota Pachuca","ciudad":"Mineral de Hidalgo","estado":"Hidalgo","codigo_postal":42182,"direccion":"Carretera Pachuca-Cd. Sahagun Km. 3.5 Col. Chacon, Mineral de la Reforma","telefono":"01 (771) 717-0270 y 01 (771) 717-0275","website":"http:\/\/www.toyotapachuca.com.mx","latitud":20.0858,"longitud":-98.7453},{"id":25,"dealer_number":57026,"nombre":"Toyota Hermosillo","ciudad":"Hermosillo","estado":"Sonora","codigo_postal":83270,"direccion":"Boulevard Francisco Serna S\/N Col. El Malec\u00f3n","telefono":"(662) 259 79 00","website":"http:\/\/www.toyotahermosillo.com","latitud":29.069805,"longitud":-110.964323},{"id":26,"dealer_number":57027,"nombre":"Toyota Tampico","ciudad":"Tampico","estado":"Tamaulipas","codigo_postal":89344,"direccion":"Avenida Hidalgo No. 6110","telefono":"01 (833) 230-3200 y 01 (833) 230-3200","website":"http:\/\/www.toyotatampico.com.mx","latitud":22.286634,"longitud":-97.872992},{"id":27,"dealer_number":57028,"nombre":"Toyota Chiapas","ciudad":"Tuxtla Gutierrez","estado":"Chiapas","codigo_postal":29077,"direccion":"Blvd. \u00c1ngel Albino Corzo No. 750 Col. Bienestar Social","telefono":"01 (961) 617-7000 y 01 (961) 617-7000 EXT 232","website":"http:\/\/www.toyotachiapas.com","latitud":16.74928,"longitud":-93.0931},{"id":28,"dealer_number":57029,"nombre":"Toyota Oaxaca","ciudad":"Santa Cruz Xoxocotl\u00e1n","estado":"Oaxaca","codigo_postal":71230,"direccion":"Av. Simbolos Patrios 728.Col. Eliseo Jimenez Ruiz , Sta. Cruz Xoxocotl\u00e1n Oaxaca.","telefono":"01 (951) 501-6400 al 09 y 01 (951) 501-6400 al 09 ext. 135","website":"http:\/\/www.toyotaoaxaca.com.mx","latitud":17.03707,"longitud":-96.717392},{"id":29,"dealer_number":57030,"nombre":"Toyota Colima","ciudad":"Colima","estado":"Colima","codigo_postal":28060,"direccion":"Blvd. Carlos de la Madrid 909","telefono":"01 (312) 312-3139 y 01 (312) 316-1718","website":"http:\/\/www.toyotacolima.com","latitud":19.215012,"longitud":-103.721635},{"id":30,"dealer_number":57031,"nombre":"Toyota C\u00f3rdoba","ciudad":"C\u00f3rdoba","estado":"Veracruz","codigo_postal":94575,"direccion":"Prolongaci\u00f3n calle 10 # 4320 Col. La Posta","telefono":"(271) 717 1317","website":"http:\/\/www.toyotacordoba.com.mx","latitud":18.884341,"longitud":-96.952817},{"id":31,"dealer_number":57032,"nombre":"Toyota Saltillo","ciudad":"Saltillo","estado":"Coahuila","codigo_postal":25270,"direccion":"Carretera Monterrey Saltillo 6651. Carretera Zincamex. Saltillo, Cohuila, M\u00e9xico","telefono":"01 (884) 438-7272 y 01 (884) 438-7280","website":"http:\/\/www.toyotasaltillo.com","latitud":25.480249418928,"longitud":-100.97424264354},{"id":32,"dealer_number":57033,"nombre":"Toyota Tijuana","ciudad":"Tijuana","estado":"Baja California","codigo_postal":22010,"direccion":"Ave. Rapida Pte 15155 Zona Rio","telefono":"01 (664) 231-5133 y 01 (800) 8886-9682","website":"http:\/\/toyotatijuana.com.mx\/","latitud":32.502306,"longitud":-116.953972},{"id":33,"dealer_number":57034,"nombre":"Toyota Innova Juarez","ciudad":"Cd. Juarez","estado":"Chihuahua","codigo_postal":32320,"direccion":"Paseo Triunfo De La Rep\u00fablica # 5115","telefono":"01 (656) 616-3333 y 01 (656) 173-0910","website":"http:\/\/www.toyotainnovajuarez.com.mx\/","latitud":31.737976,"longitud":-106.43927},{"id":34,"dealer_number":57035,"nombre":"Toyota Coatzacoalcos","ciudad":"Coatzacoalcos","estado":"Veracruz","codigo_postal":96496,"direccion":"Carretera Transismica Km. 4.9 B","telefono":"01 (921) 217-2410 y 01 (921) 217-2410","website":"http:\/\/www.toyotacoatzacoalcos.com.mx","latitud":18.117507,"longitud":-97.873594},{"id":35,"dealer_number":57036,"nombre":"Toyota Canc\u00fan","ciudad":"Canc\u00fan","estado":"Quintana Roo","codigo_postal":77565,"direccion":"Calle Isla Mujeres # 1 Mza. 34 x BLVD. Luis Donaldo Colosio Lt. 1 Smza. 312 Residencial Islazul","telefono":"01 (998) 193-0000 y 01 (998) 193-0003","website":"http:\/\/www.toyotacancun.com.mx","latitud":19.515048,"longitud":-96.878933},{"id":36,"dealer_number":57037,"nombre":"Toyota Guerrero","ciudad":"Acapulco","estado":"Guerrero","codigo_postal":39890,"direccion":"Blvd. de las Naciones 52-B Col .Granjas del Marques","telefono":"01 (744) 435-1414 y 01 (744) 435 1401","website":"http:\/\/www.toyotaguerreo.com.mx","latitud":16.783629,"longitud":-99.789449},{"id":37,"dealer_number":57038,"nombre":"Toyota Coapa","ciudad":"Ciudad de M\u00e9xico","estado":"Distrito Federal","codigo_postal":14300,"direccion":"Av. Canal De Miramontes No3279 Col. Residencial Acoxpa Del. Tlalpan","telefono":"01 (55) 5599-0909 y 01 (55) 5599-0927","website":"http:\/\/www.toyotcoapa.com.mx","latitud":19.2956,"longitud":-99.125435},{"id":38,"dealer_number":57039,"nombre":"Toyota Cuernavaca","ciudad":"Cuernavaca","estado":"Morelos","codigo_postal":62330,"direccion":"Priv. De la Cascada No. 23, Col. Delicias","telefono":"01 (777) 100-7800 y 01 (777) 100-7832","website":"http:\/\/www.toyotacuernavaca.com.mx","latitud":18.935006,"longitud":-99.197105},{"id":39,"dealer_number":57040,"nombre":"Toyota Celaya","ciudad":"Celaya","estado":"Guanajuato","codigo_postal":38130,"direccion":"Prol. Blvd. Adolfo L\u00f3pez Mateos #1504 Esq. Eje Nororiente, Col. La Laja","telefono":"01 (461) 159-8800 y 01 (461) 159-8809","website":"http:\/\/www.toyotacelaya.com.mx","latitud":20.515668,"longitud":-100.778787},{"id":40,"dealer_number":57041,"nombre":"Toyota Innova Reynosa","ciudad":"Reynosa","estado":"Tamaulipas","codigo_postal":88746,"direccion":"Carretera Reynosa - Monterrey No. 106 Col. Fuentes del Valle","telefono":"01 (899) 909-1900 y 01 (899) 909-1905","website":"http:\/\/www.toyotainnovareynosa.com.mx","latitud":26.069307,"longitud":-98.333892},{"id":41,"dealer_number":57042,"nombre":"Toyota Durango","ciudad":"Durango","estado":"Durango","codigo_postal":34234,"direccion":"Blvd. Francisco Villa 4020 Col. 20 de Noviembre","telefono":"01 (618) 150-0700 y 01 (618) 150-0707","website":"http:\/\/www.toyotadurango.com.mx","latitud":24.054135,"longitud":-104.614928},{"id":42,"dealer_number":57043,"nombre":"Toyota Campeche","ciudad":"Campeche","estado":"Campeche","codigo_postal":24010,"direccion":"Ricardo Castillo Oliver No. 9, Manzana K, Sector Fundadores del \u00c1rea AHKIM-PECH","telefono":"01 (981) 127-3000 y 01 (981) 811-4685 al 87","website":"http:\/\/www.toyotacampeche.com","latitud":17.992928,"longitud":-92.945389},{"id":43,"dealer_number":57044,"nombre":"Toyota Mazatl\u00e1n","ciudad":"Mazatl\u00e1n","estado":"Sinaloa","codigo_postal":82149,"direccion":"Av. Reforma #314 Col. Flamingo","telefono":"01 (669) 989-2200 y 01 (669) 989-2202","website":"http:\/\/www.toyotamazatlan.com.mx","latitud":23.238906,"longitud":-106.439668},{"id":44,"dealer_number":57045,"nombre":"Toyota Irapuato","ciudad":"Irapuato","estado":"Guanajuato","codigo_postal":36640,"direccion":"Ave. Manuel G\u00f3mez Morin 3000. Colo. Ejido Irapuato","telefono":"01 (462) 635-9900 al 09 y 01 (462) 635-9914","website":"http:\/\/www.toyotairapuato.com.mx","latitud":20.682979,"longitud":-101.377836},{"id":45,"dealer_number":57046,"nombre":"Toyota Lomas Verdes","ciudad":"Naucalpan","estado":"Estado de M\u00e9xico","codigo_postal":53150,"direccion":"Blvd.. Manuel \u00c1vila Camacho 758-A Col. Sta. Cruz Acatl\u00e1n","telefono":"01 (55) 1500-3500 y 01 (55) 1500-3505","website":"http:\/\/www.toyotalomasverdes.com.mx\/","latitud":19.483171,"longitud":-99.234315},{"id":46,"dealer_number":57047,"nombre":"Toyota Xalapa","ciudad":"Xalapa","estado":"Veracruz","codigo_postal":91193,"direccion":"K.M. 2.5 Carretera Xalapa-Veracruz S\/N Colonia Pastoressa.","telefono":"01 (228) 141-0400 y 01 (228) 141-0400 ext. 1045","website":"http:\/\/www.toyotaxalapa.com.mx\/","latitud":19.515048,"longitud":-96.878933},{"id":47,"dealer_number":57048,"nombre":"Toyota Poza Rica","ciudad":"Poza Rica","estado":"Veracruz","codigo_postal":93320,"direccion":"Av. Ej\u00e9rcito Mexicano # 108","telefono":"01 (782) 826-1100 y 01 (782) 826-1100","website":"http:\/\/www.toyotapozarica.com.mx","latitud":20.548942,"longitud":-97.460661},{"id":48,"dealer_number":57049,"nombre":"Toyota Puerto Vallarta","ciudad":"Puerto Vallarta","estado":"Jalisco","codigo_postal":5519,"direccion":"Carretera a Tepic Puerto Vallarta 5519 Zona Hotelera Norte","telefono":"01 (322) 226-9000 y 01 (322) 226-9000","website":"http:\/\/www.toyotapuertovallarta.com.mx","latitud":20.715136,"longitud":-105.27679},{"id":49,"dealer_number":57050,"nombre":"Toyota Polanco","ciudad":"Ciudad de M\u00e9xico","estado":"Distrito Federal","codigo_postal":11520,"direccion":"Calle Lago Alberto N\u00b0 320 Col. Granada, Del. Miguel Hidalgo","telefono":"01 (55) 2581-1010 y 01 (55) 2581-1023 y 01 (55) 2581-1024","website":"http:\/\/www.toyotapolanco.com.mx","latitud":19.440249,"longitud":-99.186512},{"id":50,"dealer_number":57051,"nombre":"Toyota Mexicali","ciudad":"Mexicali","estado":"Baja California","codigo_postal":21254,"direccion":"Calz. Cetys 2630, Residencial San Pedro 2","telefono":"01 (686) 104-2222 y 01 (686) 104-2205","website":"http:\/\/www.toyotamexicali.com","latitud":32.653043,"longitud":-115.398193},{"id":51,"dealer_number":57052,"nombre":"Toyota Los Cabos","ciudad":"San Jose del Cabo","estado":"Baja California Sur","codigo_postal":23400,"direccion":"Carrtera Transpeninsular KM 25.8 Fracc Palmilla","telefono":"01 (624) 144-6570 y 01 (800) 295-7575","website":"http:\/\/toyotaloscabos.com.mx\/","latitud":23.01007,"longitud":-109.725612},{"id":52,"dealer_number":57053,"nombre":"Toyota Cd. Obreg\u00f3n","ciudad":"Obreg\u00f3n","estado":"Sonora","codigo_postal":85160,"direccion":"Dr. Norman E. Borlaug No. 1410 Col. Campestre","telefono":"01 (644) 410-1800 y 01 (644) 410-1800 Ext. 17391","website":"http:\/\/www.toyotaobregon.com\/","latitud":27.47917,"longitud":-109.932729},{"id":53,"dealer_number":57054,"nombre":"Toyota Riviera Maya","ciudad":"Playa del Carmen","estado":"Quintana Roo","codigo_postal":77710,"direccion":"Carretera Federal Canc\u00fan Tulum Zona 1 Super Manzana 3 Manzana 342 Lote 4 Col. Tigrillos","telefono":"01 (984) 877-4300 y 01 (984) 877-4300 EXT 4 \u00d3 EXT. 233","website":"http:\/\/www.toyotarivieramaya.com.mx","latitud":20.610723,"longitud":-87.10411},{"id":54,"dealer_number":57055,"nombre":"Toyota Aeropuerto","ciudad":"Ciudad de M\u00e9xico","estado":"Distrito Federal","codigo_postal":15700,"direccion":"Av. Fuerza A\u00e9rea Mexicana 520-F, Col. Federal Delegaci\u00f3n V. Carranza C.P. 15700","telefono":"01 (55) 5133-7777 y 01 (55) 5133-7782","website":"http:\/\/www.toyotaaeropuerto.com.mx\/","latitud":19.425308,"longitud":-99.088747},{"id":55,"dealer_number":57600,"nombre":"Toyota Los Mochis","ciudad":"Los Mochis","estado":"Sinaloa","codigo_postal":81200,"direccion":"Blvd. Rosendo G. Castro #451 Pte. Col. Centro","telefono":"01 (668) 816-3030 y 01 (668) 816-3038","website":"http:\/\/www.toyotamochis.com.mx","latitud":25.787469,"longitud":-108.996876},{"id":56,"dealer_number":57601,"nombre":"Toyota Lindavista","ciudad":"Guadalupe","estado":"Nuevo Le\u00f3n","codigo_postal":67130,"direccion":"Prol. Madero 440 Ote. Col. Libertad","telefono":"01 (81) 8215-0000 y 01 (81) 8215-0008","website":"http:\/\/www.toyotalindavista.com.mx","latitud":25.691637,"longitud":-100.248746},{"id":57,"dealer_number":57602,"nombre":"Toyota Innova Sendero","ciudad":"San Nicolas de los Garza","estado":"Nuevo Le\u00f3n","codigo_postal":66428,"direccion":"Sendero 500","telefono":"01 (818) 158-3000 y EXT. 145 \u00f3 146","website":"http:\/\/www.toyotainnova.com.mx\/","latitud":25.766156,"longitud":-100.303545},{"id":58,"dealer_number":57603,"nombre":"Toyota Nogales","ciudad":"Nogales","estado":"Sonora","codigo_postal":84063,"direccion":"Blvd. Luis Donaldo Colosio 2680 Col. Unidad Deportiva","telefono":"01 (631) 311-8450 y 01 (631) 311-8450","website":"http:\/\/www.toyotanogales.com","latitud":31.292276,"longitud":-110.946328},{"id":59,"dealer_number":57604,"nombre":"Dalton Toyota Patria","ciudad":"Zapopan","estado":"Jalisco","codigo_postal":45027,"direccion":"Av. Vallarta #5000","telefono":"01 (33) 3003-5000 y 01 (33) 3003-5001","website":"http:\/\/www.daltontoyota.com.mx\/daltontoyota\/patria\/","latitud":20.67915,"longitud":-103.421892},{"id":60,"dealer_number":57605,"nombre":"Toyota Guadalajara Country","ciudad":"Guadalajara","estado":"Jalisco","codigo_postal":44610,"direccion":"Av. Circunvalaci\u00f3n no. 1180 Col. Lomas de Country","telefono":"01 (33) 5000-9000 y 01 (33) 5000-9012","website":"http:\/\/www.oztoyotacountry.com","latitud":20.698634,"longitud":-103.369493},{"id":61,"dealer_number":57606,"nombre":"Toyota Salina Cruz","ciudad":"Sta. Cruz Xoxocotl\u00e1n","estado":"Oaxaca","codigo_postal":70610,"direccion":"Carretera Transismica Km. 6.5 Col. Aviaci\u00f3n, Salina Cruz oaxaca","telefono":"01 (971) 717-3050 al 58 y 01 (971) 717-3058 \u00f2 ext. 111","website":"http:\/\/www.toyotasalinacruz.com.mx","latitud":16.228912,"longitud":-95.210663},{"id":62,"dealer_number":57607,"nombre":"Toyota Los Fuertes","ciudad":"Puebla","estado":"Puebla","codigo_postal":72240,"direccion":"Av. diagonal defensores de la republica 782, colonia adolfo lopez mateos","telefono":"01 (222) 223-5900 y 01 (222) 235-9559","website":"http:\/\/www.toyotalosfuertes.com.mx","latitud":19.064744,"longitud":-98.183066},{"id":63,"dealer_number":57608,"nombre":"Toyota Coacalco","ciudad":"Ciudad de M\u00e9xico","estado":"Distrito Federal","codigo_postal":55714,"direccion":"V\u00eda Jos\u00e9 L\u00f3pez Portillo 306 Col. San Lorenzo Tetlixtac","telefono":"(55) 58 98 91 00","website":"http:\/\/www.toyotacoacalco.com.mx","latitud":19.624904,"longitud":-99.076574},{"id":64,"dealer_number":57609,"nombre":"Toyota Zaragoza","ciudad":"Ciudad de M\u00e9xico","estado":"Distrito Federal","codigo_postal":9210,"direccion":"Calzada Ignacio Zaragoza No. 1577. Col. Tepalcates. Del. Iztapalapa.","telefono":"01 (55) 4749-2222 y 01 (55) 4749-2282","website":"http:\/\/www.toyotazaragoza.com.mx","latitud":19.391993,"longitud":-99.049732},{"id":65,"dealer_number":"","nombre":"Toyota Cuatla","ciudad":"Cuatla","estado":"Morelos","codigo_postal":62757,"direccion":"Camino Real Tetelcingo-Calderon No. 23, Col. Tierra Larga","telefono":"01 (734) 114-0801 y 01 (734) 114-0801","website":"http:\/\/www.toyotacuautla.com.mx","latitud":18.801944,"longitud":-98.950556},{"id":66,"dealer_number":"","nombre":"Centro de Servicio Mancera","ciudad":"Ciudad de M\u00e9xico","estado":"Distrito Federal","codigo_postal":3100,"direccion":"Gabriel Mancera 1331, Col. Del Valle","telefono":"01 (55) 3000-3333 y 01 (55) 3000-3353","website":"http:\/\/www.toyotauni.com.mx","latitud":19.374667,"longitud":-99.167558},{"id":67,"dealer_number":"","nombre":"Toyota Guanajuato","ciudad":"Guanajuato","estado":"Guanajuato","codigo_postal":36250,"direccion":"Blvd. Euquerio Guerrero No. 34., Col. Bur\u00f3crata","telefono":"01 (473) 733-4004 y 01 (473) 733-4004","website":"http:\/\/www.toyotagto.com","latitud":20.989119,"longitud":-101.285362}]';

$array = json_decode($dealers);
$cp = $_GET['cp'];
print_r($array);die();
die();
?>
