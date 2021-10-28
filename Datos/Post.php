<?php
require('../config.php');
require_once(BASE_DIR. 'DataAccess/AbstractDao.php');
require_once(BASE_DIR. 'Entity/CategoryEntity.php');

$imagen1 = 'assets/img/camisetaTitular.jpg';
$imagen2 = 'assets/img/camisetaSuplente.jpg';
$imagen3 = 'assets/img/camisetaVisitante.jpg';
$imagen4 = 'assets/img/camisetaMujer.png';
$imagen5 = 'assets/img/short.jpg'; 
$imagen6 = 'assets/img/shortVisitante.jpg';



$dummyData[1] = array('id'=>'1', 'name'=>"$imagen1", 'subtitle'=> 'Camiseta Hombre Titular River Plate 2021', 'post' => 'UNA CAMISETA ABSORBENTE CON LOS CLÁSICOS COLORES DEL CLUB PARA LOS HINCHAS MÁS FIELES 
River Plate es una institución del deporte. La banda roja que cruza el pecho de su talentosos jugadores es un distintivo universalmente reconocido en el mundo del fútbol. Esta camiseta adidas se inspira en uno de los uniformes más recordados del River y le agrega un toque moderno. Su tejido suave con tecnología transpirable AEROREADY te ofrece una gran comodidad mientras animás a tu equipo.

Este producto está hecho con Primegreen, una serie de materiales reciclados de alto desempeño.', 'user'=>1, 'category'=>1, 'tag'=>1, 'precio'=>"$11540", 'deleted'=>false ,'createdAt'=>'20120511' );
$dummyData[2] = array('id'=>'2', 'name'=>"$imagen2", 'subtitle'=> 'Camiseta Hombre Suplente River Plate 2021', 'post' => 'UNA CAMISETA QUE REGULA LA HUMEDAD PARA LOS HINCHAS DEL RIVER PLATE
Un kit clásico con un toque moderno. adidas se inspiró en la historia de éxito del River Plate para diseñar esta camiseta de fútbol. Las rayas verticales y el diseño tricolor resaltan el look clásico del equipo en la cancha. El escudo tejido con el lema "El Más Grande" deja muy claro a quién apoyas ante el rival. El tejido transpirable AEROREADY mantiene la piel fresca y seca.

Este producto está hecho con material reciclado como parte de nuestro anhelo de ponerle fin a la contaminación por plástico', 'user'=>1, 'category'=>1, 'tag'=>2, 'precio'=>"$9680", 'deleted'=>false ,'createdAt'=>'20120511');
$dummyData[3] = array('id'=>'3', 'name'=>"$imagen3", 'subtitle'=> 'Camiseta Hombre Alternativa River Plate 2021', 'post' => 'LA MISMA CAMISETA ALTERNATIVA QUE USAN LOS JUGADORES EN EL CAMPO DE JUEGO
De local. De visitante. Unidos. La famosa banda roja de River Plate no podia faltar en la camiseta alternativa oficial de adidas. La misma que visten los jugadores cuando salen a la cancha. Tiene un diseño ligero con tecnología de ventilación HEAT.RDY, mientras luce " El Más Grande" en la espalda para destacar tu pasión por el fútbol.

Este producto está hecho con material reciclado como parte de nuestro compromiso de ponerle fin a la contaminación con plástico.', 'user'=>2, 'category'=>1, 'tag'=>1, 'precio'=>"$7890", 'deleted'=>false ,'createdAt'=>'20120511');
$dummyData[4] = array('id'=>'4', 'name'=>"$imagen4", 'subtitle'=> 'Camiseta Mujer Titular River Plate 2021', 'post' => 'UNA CAMISETA ABSORBENTE EN LOS COLORES DE LOCAL DEL CLUB
River Plate es una institución del deporte. La banda roja en su uniforme local es uno de los detalles más emblemáticos en el mundo del fútbol. Esta camiseta adidas se inspira en uno de los uniformes más recordados de River y le agrega un toque moderno. Su tejido suave con tecnología de absorción AEROREADY te ofrece una gran comodidad mientras animás a tu equipo.

Este producto está hecho con Primegreen, una serie de materiales reciclados de alto rendimiento.', 'user'=>3, 'category'=>2, 'tag'=>3, 'precio'=>"$7569", 'deleted'=>false ,'createdAt'=>'20120511');
$dummyData[5] = array('id'=>'5', 'name'=>"$imagen5", 'subtitle'=> 'Short Titular River Plate 2021', 'post' => 'SHORTS DEL UNIFORME TITULAR QUE ABSORBEN EL SUDOR PARA LOS HINCHAS DEL RIVER PLATE
Estos shorts adidas para jóvenes forman parte del uniforme titular del River Plate, inspirado en los uniformes clásicos del club y diseñados para mantener a todos los hinchas cómodos dentro y fuera del Monumental. El tejido suave y la tecnología transpirable AEROREADY se encarga de mantener la piel seca y el escudo tejido del club le da el toque final.

Este producto está hecho con Primegreen, una serie de materiales reciclados de alto desempeño.', 'user'=>3, 'category'=>3, 'tag'=>3, 'precio'=>"$4530", 'deleted'=>false, 'createdAt'=>'20120511');
$dummyData[6] = array('id'=>'6', 'name'=>"$imagen6", 'subtitle'=> 'Short Alternativo River Plate 2021', 'post' => 'SHORTS QUE ABSORBEN EL SUDOR PARA LOS HINCHAS DEL RIVER PLATE
El regreso de un estilo clásico. Demostrá tu pasión por el River Plate con estos shorts de fútbol adidas. Gracias a la tecnología de absorción de humedad AEROREADY, te envuelven en comodidad para disfrutar del partido. La insignia tejida resalta sobre el tejido suave del diseño para que apoyes a tu equipo con orgullo.

Este producto está hecho con material reciclado como parte de nuestro anhelo de ponerle fin a la contaminación por plástico', 'user'=>3, 'category'=>3, 'tag'=>3, 'precio'=>"$3459", 'deleted'=>false, 'createdAt'=>'20120511');



file_put_contents('post.json', json_encode($dummyData));        


?>
