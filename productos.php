<?php
// Desactivar errores visibles para evitar que se mezclen con la respuesta JSON
ini_set('display_errors', 0);
error_reporting(0);

// Encabezado JSON
header("Content-Type: application/json; charset=utf-8");
echo json_encode($data);

// Limpieza del búfer de salida
if (ob_get_length()) {
    ob_end_clean();
}

// Datos de productos
$productos = [
    'ALAMBRES' => [
        ['codigo' => '1052', 'descripcion' => 'Tee conectora 1.22 armstrong', 'unidad' => 'pz', 'precio' => 39.5,'imagen' => 'imagen/c.png'],
        ['codigo' => '1364 5', 'descripcion' => 'Alambre galv cal.14', 'unidad' => 'pz', 'precio' => 64.4,'imagen' => 'imagen/Alambre galv.cal.12.jpg'],
        ['codigo' => '1365', 'descripcion' => 'Alambre galv cal.18', 'unidad' => 'pz', 'precio' => 67.0,'imagen' => 'imagen/Alambre galv cal.18.jpg'],
        ['codigo' => '1366 5', 'descripcion' => 'Alambre galv cal 16', 'unidad' => 'PZ', 'precio' => 62.0,'imagen' => 'imagen/Alambre galv cal 16.jpg'],
        ['codigo' => '363', 'descripcion' => 'Angulo perimetral 3.60m Donn', 'unidad' => 'pz', 'precio' => 70.0,'imagen' => 'imagen/Angulo perimetral.jpg'],
        ['codigo' => '364', 'descripcion' => 'tee conectora 0.61 ckm', 'unidad' => 'pz', 'precio' => 0.0,'imagen' => 'imagen/tee conectora 0.61.jpg'],
        ['codigo' => '384', 'descripcion' => 'Glassliner plafon 61*61', 'unidad' => 'pz', 'precio' => 145.0,'imagen' => 'imagen/Glassliner plafon.jpg'],
        ['codigo' => '626', 'descripcion' => 'Tee secundaria 61 AMF CHICAGO METALIC', 'unidad' => 'pz', 'precio' => 19.0,'imagen' => 'imagen/Tee secundaria 61 AMF CHICAGO METALIC.jpg'],
        ['codigo' => '627', 'descripcion' => 'Tee secundaria 1.22 AMF CHICAGO METALIC', 'unidad' => 'pz', 'precio' => 38.0,'imagen' => 'imagen/c.png'],
        ['codigo' => '856CKM', 'descripcion' => 'TEE 1.22 CKM', 'unidad' => 'pz', 'precio' => 28.0,'imagen' => 'imagen/TEE 1.22 CKM.jpg'],
    ],
    'CEMIX' => [
       
        ['codigo' => 'C30025', 'descripcion' => 'ADEBLOK PLUS FINO 40KG', 'unidad' => 'pz', 'precio' => 254.7,'imagen' => 'imagen/ADEBLOK PLUS FINO 40KG.jpg'],
        ['codigo' => 'C30042', 'descripcion' => 'BASECOAT GRIS 20KG', 'unidad' => 'pz', 'precio' => 216.5,'imagen' => 'imagen/BASECOAT GRIS 20KG.jpg'],
        ['codigo' => 'C30059', 'descripcion' => 'ADEBLOK CONSTRUCTOR 40 KG', 'unidad' => 'pz', 'precio' => 180.8,'imagen' => 'imagen/ADEBLOK CONSTRUCTOR 40 KG.jpg'],
        ['codigo' => 'C30061', 'descripcion' => 'CEMIX AMU 20 KG', 'unidad' => 'pz', 'precio' => 281.6,'imagen' => 'imagen/CEMIX AMU 20 KG.jpg'],
        ['codigo' => 'C30065', 'descripcion' => 'BOQUILLEX PLUS ADOBE 10KG', 'unidad' => 'pz', 'precio' => 113.1,'imagen' => 'imagen/BOQUILLEX PLUS ADOBE 10KG.jpg'],
        ['codigo' => 'C30066', 'descripcion' => 'Boquillex Plus c/a Almendra 10kg', 'unidad' => 'pz', 'precio' => 116.0,'imagen' => 'imagen/Boquillex Plus Almendra 10kg.jpg'],
        ['codigo' => 'C30077', 'descripcion' => 'Boquillex Plus Gris Perla c/a 10 KG', 'unidad' => 'pz', 'precio' => 116.0,'imagen' => 'imagen/Boquillex Plus Gris Perla.jpg'],
        ['codigo' => 'C30159', 'descripcion' => 'PEGAPISO Y MARMOL BLANCO 20KG', 'unidad' => 'pz', 'precio' => 108.4,'imagen' => 'imagen/PEGAPISO Y MARMOL BLANCO 20KG.jpg'],
        ['codigo' => 'C30160', 'descripcion' => 'PEGAPISOY MARMOL GRIS 20KG', 'unidad' => 'pz', 'precio' => 102.,'imagen' => 'imagen/PEGAPISOY MARMOL GRIS 20KG.jpg'],
        ['codigo' => 'C30165', 'descripcion' => 'PEGAZULEJO GRIS 20K', 'unidad' => 'pz', 'precio' => 76.0,'imagen' => 'imagen/pegazulejo.jpg'],
        ['codigo' => 'C30166', 'descripcion' => 'Pega porcelanico gris 20k', 'unidad' => 'pz', 'precio' => 119.7,'imagen' => 'imagen/Pega porcelanico gris 20k.jpg'],
        ['codigo' => 'C30167', 'descripcion' => 'Pegazulejo bco 20 kg', 'unidad' => 'pz', 'precio' => 93.0,'imagen' => 'imagen/Pegazulejo bco 20 kg.jpg'],
        ['codigo' => 'C30182', 'descripcion' => 'BOND-ULTRA SELLADOR BCO 19 LT CUB', 'unidad' => 'pz', 'precio' => 1088.83,'imagen' => 'imagen/BUltra.1.jpg'],
        ['codigo' => 'C30617', 'descripcion' => 'TEXTURA 100R 40KG', 'unidad' => 'pz', 'precio' => 206.3,'imagen' => 'imagen/TEXTURA 100R 40KG.jpg'],
        ['codigo' => 'C30627', 'descripcion' => 'ADEBLOK PLUS AP 40KG', 'unidad' => 'pz', 'precio' => 195.1,'imagen' => 'imagen/ADEBLOK PLUS AP 40KG.jpg'],
        ['codigo' => 'C30847', 'descripcion' => 'ADHESIVO UNIVERSAL 20k', 'unidad' => 'pz', 'precio' => 136.7,'imagen' => 'imagen/ADHESIVO UNIVERSAL 20k.jpg'],
        ['codigo' => 'C30986', 'descripcion' => 'Boquillex Univ Adobe S/A 5 KG', 'unidad' => 'pz', 'precio' => 139.4,'imagen' => 'imagen/Boquillex Univ Adobe  5 KG.jpg'],
        ['codigo' => 'C30990', 'descripcion' => 'BOQ. UNIV SIN ARENA NIEBLA 5KG', 'unidad' => 'pz', 'precio' => 132.0,'imagen' => 'imagen/BOQ. UNIV SIN ARENA NIEBLA 5KG.jpg'],
        ['codigo' => 'C31027', 'descripcion' => 'Impercool fibratado blanco 19lt 5años', 'unidad' => 'pz', 'precio' => 0.0,'imagen' => 'imagen/Impercool fibratado blanco 19lt 5años.jpg'],
        ['codigo' => 'C31033', 'descripcion' => 'Impercool fibratado terraco 19lt 5 años', 'unidad' => 'pz', 'precio' => 0.0,'imagen' => 'imagen/Impercool fibratado terraco 19lt 5 años.jpg'],
        ['codigo' => 'C32305', 'descripcion' => 'ADHESIVO FORMATOS GRANDES 20K', 'unidad' => 'pz', 'precio' => 202.4,'imagen' => 'imagen/ADHESIVO FORMATOS GRANDES 20K.jpg'],
        ['codigo' => 'C32352', 'descripcion' => 'APLANADO CEMIX 40KG', 'unidad' => 'pz', 'precio' => 218.3,'imagen' => 'imagen/APLANADO CEMIX 40KG.jpg'],
        ['codigo' => 'C32685', 'descripcion' => 'PASTA FINA PLUS 20KG', 'unidad' => 'pz', 'precio' => 179.4,'imagen' => 'imagen/PASTA FINA PLUS 20KG.jpg'],
        ['codigo' => 'C32861', 'descripcion' => 'AUTONIVELANTE GRIS SACO 20KG', 'unidad' => 'pz', 'precio' => 480.0,'imagen' => 'imagen/AUTONIVELANTE GRIS SACO 20KG.jpg'],
        ['codigo' => 'C34779', 'descripcion' => 'MORTERO NIVELADOR 25KG', 'unidad' => 'pz', 'precio' => 125.4,'imagen' => 'imagen/MORTERO NIVELADOR 25KG.jpg'],
        ['codigo' => 'C34780', 'descripcion' => 'DECON-CRETO 20KG', 'unidad' => 'pz', 'precio' => 380.8,'imagen' => 'imagen/DECON-CRETO 20KG.jpg'],
        ['codigo' => 'C34818', 'descripcion' => 'Chuku-mix 20 kg', 'unidad' => 'pz', 'precio' => 455.0,'imagen' => 'imagen/Chuku-mix 20 kg.jpg'],
        ['codigo' => 'C34918', 'descripcion' => 'ADEBLOK PLUS FINO GD 25 KG', 'unidad' => 'pz', 'precio' => 167.7,'imagen' => 'imagen/ADEBLOK PLUS FINO GD 25 KG.jpg'],
        ['codigo' => 'C34936', 'descripcion' => 'APLANADO CEMIX GD 25 KG', 'unidad' => 'pz', 'precio' => 143.4,'imagen' => 'imagen/APLANADO CEMIX GD 25 KG.jpg'],
        ['codigo' => 'C34937', 'descripcion' => 'ADEBLOK CONSTRUCTOR GD 25 KG', 'unidad' => 'pz', 'precio' => 119.0,'imagen' => 'imagen/ADEBLOK CONSTRUCTOR GD 25 KG.jpg'],
        ['codigo' => 'C34939', 'descripcion' => 'ADEBLOK PLUS AP GD 25 KG', 'unidad' => 'pz', 'precio' => 129.3,'imagen' => 'imagen/ADEBLOK PLUS AP GD 25 KG.jpg'],
    ],
    'ESTUCO' => [
      
        ['codigo' => '1002', 'descripcion' => 'Estuco unicapa Bexel 40kg', 'unidad' => 'pz', 'precio' => 248.0,'imagen' => 'imagen/Estuco unicapa Bexel 40kg.jpg'],
        ['codigo' => '1004', 'descripcion' => 'Pegapiso y marmol gris Perdura 20kg', 'unidad' => 'pz', 'precio' => 109.1,'imagen' => 'imagen/Pegapiso y marmol gris Perdura 20kg.jpg'],
        ['codigo' => '1006', 'descripcion' => 'Yeso Bco 1kg', 'unidad' => 'pz', 'precio' => 6.0,'imagen' => 'imagen/YESO X KILO.png'],
        ['codigo' => '1007', 'descripcion' => 'Pegapiso y marmol Bco Perdura 20kg', 'unidad' => 'pz', 'precio' => 124.9,'imagen' => 'imagen/Pegapiso y marmol Bco Perdura 20kg.jpg'],
        ['codigo' => '1012', 'descripcion' => 'Cemento blanco 50kg CEMEX', 'unidad' => 'pz', 'precio' => 465.5,'imagen' => 'imagen/Cemento blanco 50kg CEMEX.jpg'],
        ['codigo' => '1013', 'descripcion' => 'Cemento gris 50kg Cemex', 'unidad' => 'pz', 'precio' => 255.9,'imagen' => 'imagen/Cemento gris 50kg Cemex.jpg'],
        ['codigo' => '1028', 'descripcion' => 'Yeso unibasico Saco 40 Kg', 'unidad' => 'pz', 'precio' => 167.0,'imagen' => 'imagen/Yeso unibasico Saco 40 Kg.jpg'],
        ['codigo' => '1036', 'descripcion' => 'Stucolor bco mediterraneo c/a 20k', 'unidad' => 'pz', 'precio' => 135.0,'imagen' => 'imagen/Stucolor bco mediterraneo  20k.jpg'],
   //     ['codigo' => '1038', 'descripcion' => 'ADHESIVO BLANCO 20 KG', 'unidad' => 'pz', 'precio' => 0.0,'imagen' => 'imagen/LOGO SGD .png'],
        ['codigo' => '1039', 'descripcion' => 'Estucon Perdura de 20KG', 'unidad' => 'pz', 'precio' => 93.5,'imagen' => 'imagen/Estucon Perdura de 20KG.jpg'],
        ['codigo' => '1048', 'descripcion' => 'ESTUCOBRA PERDURA DE 20KG', 'unidad' => 'pz', 'precio' => 102.7,'imagen' => 'imagen/ESTUCOBRA PERDURA DE 20KG.jpg'],
        ['codigo' => '1101', 'descripcion' => 'Kit aplicacion chukum', 'unidad' => 'pz', 'precio' => 2183.0,'imagen' => 'imagen/LOGO SGD .png'],
     //   ['codigo' => '1108', 'descripcion' => 'ADIKUM GALON 4LT', 'unidad' => 'pz', 'precio' => 0.0,'imagen' => 'imagen/LOGO SGD .png'],
        ['codigo' => '16770 5', 'descripcion' => 'Color p/cemento rojo duracolor 800gr', 'unidad' => 'pz', 'precio' => 75.8,'imagen' => 'imagen/Color cemento rojo duracolor 800gr.jpg'],
        ['codigo' => '16787', 'descripcion' => 'Junteador s/arena color blanco perdura', 'unidad' => 'pz', 'precio' => 172.3,'imagen' => 'imagen/Color cemento cafe duracolor 800gr.jpg'],
        ['codigo' => '16789', 'descripcion' => 'Junteador agave 5k perdura', 'unidad' => 'pz', 'precio' => 172.3,'imagen' => 'imagen/Junteador agave 5k perdura.jpg'],
        ['codigo' => '16795', 'descripcion' => 'Junteador s/arena color negro 5k perdura', 'unidad' => 'pz', 'precio' => 172.3,'imagen' => 'imagen/Junteador agave 5k perdura.jpg'],
        ['codigo' => '16796', 'descripcion' => 'Junteador s/arena color plata 5k perdura', 'unidad' => 'pz', 'precio' => 172.3,'imagen' => 'imagen/Junteador agave 5k perdura.jpg'],
        ['codigo' => '16798 5', 'descripcion' => 'Junteador c/a chocolate 10kh perdura', 'unidad' => 'pz', 'precio' => 120.2,'imagen' => 'imagen/Junteador agave 5k perdura.jpg'],
        ['codigo' => '999', 'descripcion' => 'UNICAPA BEXEL SACO 20 KG', 'unidad' => 'pz', 'precio' => 129.6,'imagen' => 'imagen/Junteador agave 5k perdura.jpg'],
    ],
    'FIJACION' => [
  
        ['codigo' => '700', 'descripcion' => 'Reten GB350A', 'unidad' => 'pz', 'precio' => 140.7,'imagen' => 'imagen/350A.png'],
        ['codigo' => '732', 'descripcion' => 'ZANCOS 24"-40" GRAMBEL', 'unidad' => 'pz', 'precio' => 4480,'imagen' => 'imagen/ZANCOS 24.40.png'],
        ['codigo' => '733', 'descripcion' => 'Herramienta Para Resina Epoxica GB', 'unidad' => 'pz', 'precio' => 797.0,'imagen' => 'imagen/LOGO SGD .png'],
        ['codigo' => '735', 'descripcion' => 'Herramienta de fijacion directa gb-350A', 'unidad' => 'pz', 'precio' => 3292,'imagen' => 'imagen/LOGO SGD .png'],
        ['codigo' => '739', 'descripcion' => 'Impulsor amarillo c27 SFS', 'unidad' => 'pz', 'precio' => 4.0,'imagen' => 'imagen/LOGO SGD .png'],
        ['codigo' => '740', 'descripcion' => 'Clavo para concreto 1" PD.27 GB', 'unidad' => 'pz', 'precio' => 1.2,'imagen' => 'imagen/LOGO SGD .png'],
        ['codigo' => '741', 'descripcion' => 'Clavo para concreto 1" 1/4  GB PD32', 'unidad' => 'pz', 'precio' => 1.0,'imagen' => 'imagen/CLAVO PARA CONCRETO.png'],
        ['codigo' => '742', 'descripcion' => 'Clavo p/acero 5/8" pdn-16 gb', 'unidad' => 'pz', 'precio' => 1.3,'imagen' => 'imagen/CLAVO PARA ACERO.png'],
        ['codigo' => '743', 'descripcion' => 'Clavo p/concreto 1 1/4" c/rondana pdr32', 'unidad' => 'pz', 'precio' => 1.9,'imagen' => 'imagen/CLAVO CON RONDANA.png'],
        ['codigo' => '744', 'descripcion' => 'Angulo con clavo 1" GB', 'unidad' => 'pz', 'precio' => 2.6,'imagen' => 'imagen/ANGULOCON CLAVO.png'],
        ['codigo' => '745', 'descripcion' => 'Angulo con clavo 1" 1/4 GB', 'unidad' => 'pz', 'precio' => 2.6,'imagen' => 'imagen/ANGULOCON CLAVO.png'],
        ['codigo' => '746', 'descripcion' => 'Angulo con clavo 1" 1/4 BLT', 'unidad' => 'pz', 'precio' => 2.1,'imagen' => 'imagen/ANGULOCON CLAVO.png'],
        ['codigo' => '747', 'descripcion' => 'Impulsor individual amarillo c22', 'unidad' => 'pz', 'precio' => 2.6,'imagen' => 'imagen/LOGO SGD .png'],
        ['codigo' => '748', 'descripcion' => 'Impulsor amarillo c27', 'unidad' => 'pz', 'precio' => 2.6,'imagen' => 'imagen/LOGO SGD .png'],
        ['codigo' => '749', 'descripcion' => 'Impulsor tira rojo c. 27', 'unidad' => 'pz', 'precio' => 2.6,'imagen' => 'imagen/IMPULSOR TIRA ROJO C27.png'],
        ['codigo' => '750', 'descripcion' => 'Perno roscado p/concreto 1 3/4 js-2025', 'unidad' => 'pz', 'precio' => 1.6,'imagen' => 'imagen/PERNO ROSCADO.png'],
        ['codigo' => '751', 'descripcion' => 'Perno roscado para concreto th-2027', 'unidad' => 'pz', 'precio' => 1.6,'imagen' => 'imagen/PERNO ROSCADO.png'],
        ['codigo' => '752', 'descripcion' => 'PERNO ROSCADO ACERO  1"', 'unidad' => 'pz', 'precio' => 1.35,'imagen' => 'imagen/LOGO SGD .png'],
        ['codigo' => '755', 'descripcion' => 'CLAVO 5/8" PARA ACERO SFC', 'unidad' => 'pz', 'precio' => 1.0,'imagen' => 'imagen/LOGO SGD .png'],
        ['codigo' => '760', 'descripcion' => 'CARTUCHO  DE RESINA EPOXICA', 'unidad' => 'pz', 'precio' => 480.7,'imagen' => 'imagen/RESINA EPOXICA.png'],
        ['codigo' => '761', 'descripcion' => 'Angulo con clavo 1" BLT', 'unidad' => 'pz', 'precio' => 1.9,'imagen' => 'imagen/ANGULOCON CLAVO.png'],
        ['codigo' => '764', 'descripcion' => 'TAQUETE EXP 5/16X2 1/2 BOLT', 'unidad' => 'pz', 'precio' => 6.2,'imagen' => 'imagen/TAQUETE EXPANSIVO.png'],
        ['codigo' => '771', 'descripcion' => 'Taquete nylon GB', 'unidad' => 'pz', 'precio' => 1.9,'imagen' => 'imagen/TAQUETE DE NYLON.png'],
        ['codigo' => '785', 'descripcion' => 'Taquete mariposa 3x3/16 SFS', 'unidad' => 'pz', 'precio' => 4.0,'imagen' => 'imagen/TAQUETE MARIPOSA.png'],
        ['codigo' => '786', 'descripcion' => 'Taquete mariposa 3x1/4 SFS', 'unidad' => 'pz', 'precio' => 6.0,'imagen' => 'imagen/TAQUETE MARIPOSA.png'],
        ['codigo' => '788', 'descripcion' => 'Anillo de piston gb350a', 'unidad' => 'pz', 'precio' => 20.2,'imagen' => 'imagen/ANILLO DE PISTON.png'],
        ['codigo' => '789', 'descripcion' => 'Piston con anillo gb350a', 'unidad' => 'pz', 'precio' => 540.0,'imagen' => 'imagen/PISTON CON ANILLO 350A.png'],
        ['codigo' => '790', 'descripcion' => 'Taquete mariposa 4x1/4 SFS', 'unidad' => 'pz', 'precio' => 6.0,'imagen' => 'imagen/LOGO SGD .png'],
        ['codigo' => '791', 'descripcion' => 'Perno roscado p/concreto 1 1/2" js-2037', 'unidad' => 'pz', 'precio' => 1.4,'imagen' => 'imagen/LOGO SGD .png'],
        ['codigo' => '796', 'descripcion' => 'Guia del Piston gb350a', 'unidad' => 'pz', 'precio' => 771.5,'imagen' => 'imagen/GUIA DE PISTON.png'],
        ['codigo' => '827647', 'descripcion' => 'TAQUETE MADERA 1/4 B/100P´ZS', 'unidad' => 'pz', 'precio' => 31.9,'imagen' => 'imagen/TAQUETE MADERA.png'],
        ['codigo' => '936', 'descripcion' => 'CLIP DE FIJACION (ANGULO C/CLAVO)', 'unidad' => 'pz', 'precio' => 3.3,'imagen' => 'imagen/CLIP DE FIJACION ANGULO CON CLAVO.png'],
    ],
    'MAYAS' => [
   
        ['codigo' => '133240', 'descripcion' => 'PERFATRIM ESQUINERO FLEXIBLE HD 30 ML', 'unidad' => 'pz', 'precio' => 205.9,'imagen' => 'imagen/PERFATRIM.png'],
        ['codigo' => '226', 'descripcion' => 'Cinta fibra de vidrio 1x50ml de 60', 'unidad' => 'pz', 'precio' => 767.5,'imagen' => 'imagen/LOGO SGD .png'],
        ['codigo' => '227', 'descripcion' => 'Cinta fibra de vidrio .97x45mts 152gr', 'unidad' => 'pz', 'precio' => 895.4,'imagen' => 'imagen/LOGO SGD .png'],
        ['codigo' => '851', 'descripcion' => 'Cinta fibra de vidrio 4x45ml 60g', 'unidad' => 'pz', 'precio' => 77.4,'imagen' => 'imagen/LOGO SGD .png'],
        ['codigo' => 'G133240', 'descripcion' => 'PERFATRIM ESQUINERO FLEXIBLE HD 30ML-GDL', 'unidad' => 'pz', 'precio' => 205.9,'imagen' => 'imagen/PERFATRIM.png'],
        ['codigo' => 'G226', 'descripcion' => 'Cinta fibra de vidrio 1x50ml de 60-GDL', 'unidad' => 'pz', 'precio' => 767.5,'imagen' => 'imagen/LOGO SGD .png'],
        ['codigo' => 'G227', 'descripcion' => 'Cinta fibra de vidrio.97x45mts 152gr-GDL', 'unidad' => 'pz', 'precio' => 895.4,'imagen' => 'imagen/LOGO SGD .png'],
        ['codigo' => 'G851', 'descripcion' => 'Cinta fibra de vidrio 4x45ml 60g-GDL', 'unidad' => 'pz', 'precio' => 77.4,'imagen' => 'imagen/LOGO SGD .png'],
    ],
    'PERFILES PLASTICO' => [
      
        ['codigo' => '281', 'descripcion' => 'Reborde J perfatrim. DE PAPEL', 'unidad' => 'pz', 'precio' => 90.9,'imagen' => 'imagen/Reborde J perfatrim. DE PAPEL.jpg'],
        ['codigo' => '282', 'descripcion' => 'Reborde Z 1/2" 202', 'unidad' => 'pz', 'precio' => 95.9,'imagen' => 'imagen/Reborde  202.jpg'],
        ['codigo' => '283', 'descripcion' => 'Esquinero plastico para arcos', 'unidad' => 'pz', 'precio' => 57.0,'imagen' => 'imagen/Esquinero plastico para arcos.jpg'],
        ['codigo' => '286', 'descripcion' => 'Perfatrim recto exterior de 2.44mts', 'unidad' => 'pz', 'precio' => 123.4,'imagen' => 'imagen/Perfatrim recto exterior de 2.44mts.jpg'],
        ['codigo' => '489', 'descripcion' => 'ENTRECALLE 1"X3.05', 'unidad' => 'pz', 'precio' => 238.4,'imagen' => 'imagen/ENTRECALLE.jpg'],
        ['codigo' => '677', 'descripcion' => 'EntrecalleU plast1/2"12.7x12.7mmx3.05 SG', 'unidad' => 'pz', 'precio' => 167.0,'imagen' => 'imagen/ENTRECALLE U 1.2.png'],
        ['codigo' => 'CB125', 'descripcion' => 'Esquinero interior plastico', 'unidad' => 'pz', 'precio' => 94.8,'imagen' => 'imagen/Esquinero interior plastico.jpg'],
        ['codigo' => 'CJV16E', 'descripcion' => 'Junta V 3 a 4 mm x 3.05 ml', 'unidad' => 'pz', 'precio' => 169.2,'imagen' => 'imagen/Junta V 3 a 4 mm  ml.jpg'],
        ['codigo' => 'CTR50-50', 'descripcion' => 'DILATADOR 1/2 TABLERO INT', 'unidad' => 'pz', 'precio' => 123.3,'imagen' => 'imagen/DILATADOR  TABLERO INT.jpg'],
        ['codigo' => 'D677', 'descripcion' => 'EntrecalleUplast1/2"12.7x12.7mm3.05-DGO', 'unidad' => 'pz', 'precio' => 167.0,'imagen' => 'imagen/LOGO SGD .png'],
        ['codigo' => 'G677', 'descripcion' => 'EntrecalleUplast1/2"12.7x12.7mmx3.05-GDL', 'unidad' => 'pz', 'precio' => 167.0,'imagen' => 'imagen/LOGO SGD .png'],
        ['codigo' => 'MJB50E', 'descripcion' => 'Reborde J 1/2 plastico JDA VINIL CORP', 'unidad' => 'pz', 'precio' => 70.2,'imagen' => 'imagen/LOGO SGD .png'],
        ['codigo' => 'SDR50-50', 'descripcion' => 'GOTERO TABLERO EXT/INT', 'unidad' => 'pz', 'precio' => 375.8,'imagen' => 'imagen/GOTERO INT.EXT.png'],
    ],
    'SAINT GOBAINT' => [
      
        ['codigo' => '600', 'descripcion' => 'Plaka de Yeso Ligera 1.22x2.44 SG', 'unidad' => 'pz', 'precio' => 157.0,'imagen' => 'imagen/Plaka de Yeso Ligera.jpg'],
        ['codigo' => '606', 'descripcion' => 'Plaka de Yeso Rf 1.22X2.44 SG', 'unidad' => 'pz', 'precio' => 205.0,'imagen' => 'imagen/Plaka de Yeso Rf.jpg'],
        ['codigo' => '607', 'descripcion' => 'PLaka de Yeso Antimoho 12.7 1.22 x 2.44', 'unidad' => 'pz', 'precio' => 178.8,'imagen' => 'imagen/PLaka de Yeso Antimoho.jpg'],
        ['codigo' => '608', 'descripcion' => 'X-terium 12.7mm 1.22x2.44 SG', 'unidad' => 'pz', 'precio' => 590.0,'imagen' => 'imagen/X-terium.jpg'],
        ['codigo' => '609', 'descripcion' => 'Aquaroc Max 12.7mm 1.22x2.44 SG', 'unidad' => 'pz', 'precio' => 616.4,'imagen' => 'imagen/Aquaroc Max.jpg'],
        ['codigo' => '610', 'descripcion' => 'PLAKA FINISH 25KG', 'unidad' => 'pz', 'precio' => 141.6,'imagen' => 'imagen/PLAKA FINISH 25KG.jpg'],
        ['codigo' => '620', 'descripcion' => 'Cinta de Papel para Juntas 50mm 76.2m SG', 'unidad' => 'pz', 'precio' => 57.9,'imagen' => 'imagen/Cinta de Papel para Juntas.jpg'],
        ['codigo' => '621', 'descripcion' => 'Plafon Reticular Baroque 0.61x0.61 SG', 'unidad' => 'pz', 'precio' => 95.7,'imagen' => 'imagen/Plafon Reticular Baroque.jpg'],
        ['codigo' => '622', 'descripcion' => 'PLAFON DE LANA MINERAL FISURADO', 'unidad' => 'pz', 'precio' => 100.3,'imagen' => 'imagen/PLAFON DE LANA MINERAL FISURADO.jpg'],
        ['codigo' => '628', 'descripcion' => 'Tee principal 3.66 SG', 'unidad' => 'pz', 'precio' => 137.9,'imagen' => 'imagen/Tee principal 3.66 SG.jpg'],
        ['codigo' => '629', 'descripcion' => 'Angulo perimetral 3.05 c26 SG', 'unidad' => 'pz', 'precio' => 75.9,'imagen' => 'imagen/Angulo perimetral.jpg'],
        ['codigo' => '630', 'descripcion' => 'Rd+Mix clasico 7.5Kg SG', 'unidad' => 'pz', 'precio' => 125.0,'imagen' => 'imagen/RdMix clasico 7.5Kg SG.jpg'],
        ['codigo' => '631', 'descripcion' => 'Tee secundaria 0.61 SG', 'unidad' => 'pz', 'precio' => 25.9,'imagen' => 'imagen/Tee secundaria 0.61 SG.jpg'],
        ['codigo' => '632', 'descripcion' => 'Rd+Mix clasico 28Kg SG', 'unidad' => 'pz', 'precio' => 405.2,'imagen' => 'imagen/Tee secundaria 1.22 SG.jpg'],
        ['codigo' => '633', 'descripcion' => 'Rd+Mix clasico caja 22 kg', 'unidad' => 'pz', 'precio' => 271.5,'imagen' => 'imagen/PLAFON RETICULAR ACQUA.jpg'],
        ['codigo' => '635', 'descripcion' => 'Tee secundaria 1.22 SG', 'unidad' => 'pz', 'precio' => 48.1,'imagen' => 'imagen/Tee secundaria 1.22 SG.jpg'],
        ['codigo' => '660', 'descripcion' => 'PLAFON RETICULAR ACQUA 24 61X61', 'unidad' => 'pz', 'precio' => 72.2,'imagen' => 'imagen/PLAFON RETICULAR ACQUA.jpg'],
        ['codigo' => '661', 'descripcion' => 'POSTE METALICO 9.20.x3.05 C26', 'unidad' => 'pz', 'precio' => 85.6,'imagen' => 'imagen/POSTE METALICO 9.20.x3.05 C26.jpg'],
        ['codigo' => '665', 'descripcion' => 'Reborde J metalico 30 1x3.05', 'unidad' => 'pz', 'precio' => 32.0,'imagen' => 'imagen/Reborde J metalico 30.jpg'],
        ['codigo' => '666', 'descripcion' => 'angulo de amarre cal.20 1x1x3.05 SG', 'unidad' => 'pz', 'precio' => 57.4,'imagen' => 'imagen/angulo de amarre cal.20.jpg'],
        ['codigo' => '675', 'descripcion' => 'R-8 2-5" x .61cm x 15.24mts', 'unidad' => 'pz', 'precio' => 551.7,'imagen' => 'imagen/LOGO SGD .png'],
        ['codigo' => '685', 'descripcion' => 'Basecoat Bunker Saco 20KG', 'unidad' => 'pz', 'precio' => 366.8,'imagen' => 'imagen/Basecoat Bunker Saco 20KG.jpg'],
        ['codigo' => '691', 'descripcion' => 'R-11  3.5" 0.61 X 15.24ML SG', 'unidad' => 'pz', 'precio' => 694.9,'imagen' => 'imagen/LOGO SGD .png'],
        ['codigo' => '695', 'descripcion' => 'ESPUMA EXPANSIVA BEIGE 750ML', 'unidad' => 'pz', 'precio' => 152.1,'imagen' => 'imagen/ESPUMA EXPANSIVA BEIGE 750ML.jpg'],
        ['codigo' => '697', 'descripcion' => 'SELLADOR POLIURETANO PUFIX TEKBOND BCO', 'unidad' => 'pz', 'precio' => 73.5,'imagen' => 'imagen/SELLADOR POLIURETANO PUFIX TEKBOND BCO.jpg'],
    ],
    'TORTNILLERIA' => [
       
        ['codigo' => '800', 'descripcion' => 'Tornillo 6x1" std', 'unidad' => 'pz', 'precio' => 0.2,'imagen' => 'imagen/Tornillo std.jpg'],
        ['codigo' => '801', 'descripcion' => 'Tornillo 6x1 5/8 st Pro-Plus', 'unidad' => 'pz', 'precio' => 0.2,'imagen' => 'imagen/Tornillo6158stProPlus.jpg'],
        ['codigo' => '802', 'descripcion' => 'Tornillo 6x1 DR XP Pro-Plus', 'unidad' => 'pz', 'precio' => 0.2,'imagen' => 'imagen/TornilloDR XPProPlus.jpg'],
        ['codigo' => '803', 'descripcion' => 'Tornillo 6x1 5/8 DR XP Pro-Plus', 'unidad' => 'pz', 'precio' => 0.3,'imagen' => 'imagen/TornilloDR XPProPlus.jpg'],
        ['codigo' => '804', 'descripcion' => 'Tornillo 8x1/2 ST XP Pro-Plus', 'unidad' => 'pz', 'precio' => 0.2,'imagen' => 'imagen/Tornillo8x1STXPProPlus.jpg'],
        ['codigo' => '805', 'descripcion' => 'Tornillo 8x1/2 DR XP Pro-Plus', 'unidad' => 'pz', 'precio' => 0.2,'imagen' => 'imagen/Tornillo 8DR XP ProPlus.jpg'],
        ['codigo' => '806', 'descripcion' => 'Tornillo Durock 8x1 1/4 pro-plus nib6', 'unidad' => 'pz', 'precio' => 0.4,'imagen' => 'imagen/TORNILLO DROCK.png'],
        ['codigo' => '810', 'descripcion' => 'Tornillo 7x7/16 St', 'unidad' => 'pz', 'precio' => 0.2,'imagen' => 'imagen/TornilloSt.jpg'],
        ['codigo' => '811', 'descripcion' => 'Tornillo 7x7/16 dr xp', 'unidad' => 'pz', 'precio' => 0.1,'imagen' => 'imagen/Tornillodr xp.jpg'],
        ['codigo' => '812', 'descripcion' => 'CHAROLA DE PLASTICO 12"', 'unidad' => 'pz', 'precio' => 146.3,'imagen' => 'imagen/CHAROLA DE PLASTICO 12.jpg'],
        ['codigo' => '814', 'descripcion' => 'Tornillo P/cempanel  8x1 1/4" drnib4', 'unidad' => 'pz', 'precio' => 0.4,'imagen' => 'imagen/TORNILLO CEMPANEL.png'],
        ['codigo' => '817', 'descripcion' => 'Porta Charola', 'unidad' => 'pz', 'precio' => 267.5,'imagen' => 'imagen/PORTA CHAROLA.png'],
        ['codigo' => '818', 'descripcion' => 'TORNILLO 6X1 1/8 DR', 'unidad' => 'pz', 'precio' => 0.0,'imagen' => 'imagen/TORNILLO 6.jpg'],
        ['codigo' => '820', 'descripcion' => 'Lijador plastico p/mango advance gp', 'unidad' => 'pz', 'precio' => 282.0,'imagen' => 'imagen/LIJADOR PLASTICO PARA MANGO.png'],
        ['codigo' => '821', 'descripcion' => 'Lijador con mango largo 4"', 'unidad' => 'pz', 'precio' => 562.0,'imagen' => 'imagen/LIJADOR CON MANGO LARGO.png'],
        ['codigo' => '822', 'descripcion' => '6X2 ST PRO-PLUS', 'unidad' => 'pz', 'precio' => 0.4,'imagen' => 'imagen/LOGO SGD .png'],
        ['codigo' => '823', 'descripcion' => 'Tornillo 8x3 ST Pro-Plus (S3)', 'unidad' => 'pz', 'precio' => 0.5,'imagen' => 'imagen/Tornillo 83 ST ProPlus (S3).jpg'],
        ['codigo' => '824', 'descripcion' => 'Lijador METALICO de mano mango de madera', 'unidad' => 'pz', 'precio' => 350.0,'imagen' => 'imagen/LIJADOR MANO MANGO DE MADERA.png'],
        ['codigo' => '825', 'descripcion' => 'Punta Phillips N 2x1', 'unidad' => 'pz', 'precio' => 3.5,'imagen' => 'imagen/Punta Phillips N.jpg'],
        ['codigo' => '826', 'descripcion' => 'Punta Phillips 2x2', 'unidad' => 'pz', 'precio' => 6.5,'imagen' => 'imagen/Punta Phillips 2.jpg'],
        ['codigo' => '827', 'descripcion' => 'Punta Phillips con tope 2x1', 'unidad' => 'pz', 'precio' => 15.2,'imagen' => 'imagen/Punta Phillips con tope.jpg'],
        ['codigo' => '828', 'descripcion' => 'Punta Phillips con tope 2x2', 'unidad' => 'pz', 'precio' => 17.0,'imagen' => 'imagen/Punta Phillips con tope.jpg'],
        ['codigo' => '864', 'descripcion' => 'TORNILLO CABEZA CRUZ PF 1"', 'unidad' => 'pz', 'precio' => 0.0,'imagen' => 'imagen/TORNILLO CABEZA CRUZ PF.jpg'],
        ['codigo' => '867', 'descripcion' => 'CHAROLA DE ACERO INOX HELI-ARC 12"', 'unidad' => 'pz', 'precio' => 339.4,'imagen' => 'imagen/CHAROLA DE ACERO INOX HELI.jpg'],
        ['codigo' => '875', 'descripcion' => 'Tornillo 8x3/4 cabeza extraplana', 'unidad' => 'pz', 'precio' => 0.3,'imagen' => 'imagen/Tornillo  cabeza extraplana.jpg'],
        ['codigo' => '879', 'descripcion' => 'Lijador mano mango de plastico', 'unidad' => 'pz', 'precio' => 210.2,'imagen' => 'imagen/LIJADOR MANO MANGO DE PLASTICO.png'],
        ['codigo' => '880', 'descripcion' => 'Porta Cinta', 'unidad' => 'pz', 'precio' => 281.3,'imagen' => 'imagen/PORTA CINTA.png'],
        ['codigo' => 'G800', 'descripcion' => 'Tornillo 6x1" std-GDL', 'unidad' => 'pz', 'precio' => 0.2,'imagen' => 'imagen/Tornillo  std-GDL.jpg'],
        ['codigo' => 'G801', 'descripcion' => 'Tornillo 6x1 5/8 st Pro-Plus-GDL', 'unidad' => 'pz', 'precio' => 0.2,'imagen' => 'imagen/TornilloDL.jpg'],
        ['codigo' => 'G803', 'descripcion' => 'Tornillo 6x1 5/8 DR XP Pro-Plus-GDL', 'unidad' => 'pz', 'precio' => 0.3,'imagen' => 'imagen/LOGO SGD .png'],
        ['codigo' => 'G804', 'descripcion' => 'Tornillo 8x1/2 ST XP Pro-Plus-GDL', 'unidad' => 'pz', 'precio' => 0.2,'imagen' => 'imagen/LOGO SGD .png'],
        ['codigo' => 'G805', 'descripcion' => 'Tornillo 8x1/2 DR XP Pro-Plus-GDL', 'unidad' => 'pz', 'precio' => 0.2,'imagen' => 'imagen/LOGO SGD .png'],
        ['codigo' => 'G806', 'descripcion' => 'Tornillo Durock 8x1 1/4pro-plus nib6-GDL', 'unidad' => 'pz', 'precio' => 0.4,'imagen' => 'imagen/TORNILLO DROCK.png'],
        ['codigo' => 'G812', 'descripcion' => 'CHAROLA DE PLASTICO 12"-GDL', 'unidad' => 'pz', 'precio' => 140.1,'imagen' => 'imagen/LOGO SGD .png'],
        ['codigo' => 'G821', 'descripcion' => 'Lijador con mango largo 4"-GDL', 'unidad' => 'pz', 'precio' => 562.1,'imagen' => 'imagen/LIJADOR CON MANGO LARGO.png'],
        ['codigo' => 'G824', 'descripcion' => 'Lijador METALICO de mano mango-GDL', 'unidad' => 'pz', 'precio' => 353.9,'imagen' => 'imagen/LIJADOR METALICO PARA MANGO.png'],
        ['codigo' => 'G825', 'descripcion' => 'Punta Phillips N 2x1-GDL', 'unidad' => 'pz', 'precio' => 3.3,'imagen' => 'imagen/LOGO SGD .png'],
        ['codigo' => 'G826', 'descripcion' => 'Punta Phillips 2x2-GDL', 'unidad' => 'pz', 'precio' => 6.4,'imagen' => 'imagen/LOGO SGD .png'],
        ['codigo' => 'G827', 'descripcion' => 'Punta Phillips con tope 2x1-GDL', 'unidad' => 'pz', 'precio' => 14.6,'imagen' => 'imagen/LOGO SGD .png'],
        ['codigo' => 'G828', 'descripcion' => 'Punta Phillips con tope 2x2-GDL', 'unidad' => 'pz', 'precio' => 16.3,'imagen' => 'imagen/LOGO SGD .png'],
        ['codigo' => 'G867', 'descripcion' => 'CHAROLA DE ACERO INOX HELI-GDL', 'unidad' => 'pz', 'precio' => 325.1,'imagen' => 'imagen/LOGO SGD .png'],
        ['codigo' => 'G880', 'descripcion' => 'Porta Cinta-GDL', 'unidad' => 'pz', 'precio' => 280.0,'imagen' => 'imagen/LOGO SGD .png'],
        
        
        
        
    ],
    
];

// Enviar JSON sin caracteres escapados
echo json_encode($productos, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
exit;
?>
