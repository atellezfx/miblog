DROP DATABASE IF EXISTS `miblog`;
CREATE DATABASE IF NOT EXISTS `miblog`;
USE `miblog`;

CREATE TABLE IF NOT EXISTS `usuario` (
    `username` varchar(20) NOT NULL,
    `password` varchar(255) NOT NULL,
    `nombre` varchar(255) NOT NULL,
    `apellidos` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `rol`varchar(100) NOT NULL DEFAULT 'usuario',
    PRIMARY KEY (`username`),
    KEY `idx_usuario_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `articulo` (
    `id` INT AUTO_INCREMENT,
    `titulo` VARCHAR(200) NOT NULL,
    `extracto` VARCHAR(200),
    `fecha` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `modificado` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `texto` TEXT,
    `thumb` VARCHAR(50),
    `autor` VARCHAR(20),
    PRIMARY KEY (`id`),
    CONSTRAINT `fk_articulo_autor` FOREIGN KEY (`autor`)
	    REFERENCES `usuario`(`username`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

delimiter //
CREATE TRIGGER `articulo_actualizado` BEFORE UPDATE ON `articulo`
	for each row begin
		set NEW.modificado=current_timestamp;
	END; //
delimiter ;

INSERT INTO `usuario`(`username`,`password`,`nombre`,`apellidos`, `email`, `rol`) VALUES
    ('admin', md5('12345'), 'Administrador','','administrador@correo.com','admin'),
    ('demo', md5('12345'), 'Demo','','demo@correo.com','usuario');


INSERT INTO `articulo`(`titulo`, `extracto`, `texto`, `thumb`,`autor`) VALUES 
('Tulum', 'Tulum o Tuluum fue una ciudad amurallada de la cultura maya ubicada en el Estado de Quintana Roo, en el sureste de México, en la costa del mar Caribe.', 'La ciudad recibía en la antigüedad el nombre maya de Zamá (que significa en maya amanecer) y el actual, Tulum (que significa en maya muralla), que parece haber sido utilizado para referirse a la ciudad cuando ya se encontraba en ruinas. Por los numerosos registros en murales y otros trabajos encontrados en los edificios de la ciudad, se tiene considerado que Tulum fue un importante centro de culto para el llamado "dios descendente".

Aunque se han encontrado inscripciones que datan de 564, la mayor parte de los edificios que se aprecian hoy en día fueron construidos en el periodo posclásico de la civilización maya, entre los años 1200 y 1450. La ciudad todavía era habitada en los primeros años de la colonia española pero a finales del siglo XVI ya no quedaban residentes.

En la cultura maya, se le daba una importancia a la planeación de la ciudad según la cosmología, y es así que la construcción de la ciudad de Tulum se basó en el concepto de las “cuatro esquinas”1​ que hace referencia a los puntos cardinales y que a su vez surge de el antiguo patrón cósmico de cinco puntos. La ciudad como cuadrilátero, representaba un mundo ordenado, racional, hecho para dioses y hombres por igual. En cada esquina o entrada se instalaron balames protectores o guardianes del pueblo.','tulum.jpg','admin'),
('Chichén Itzá','Es uno de los principales sitios arqueológicos de la península de Yucatán, en México, ubicado en el municipio de Tinum, en el estado de Yucatán.','Chichén Itzá fue fundada hacia el año 525 d.C., durante «la primera bajada o bajada pequeña del oriente» que refieren las crónicas, por los chanes de Bacalar (que después se llamaron itzá y más tarde aun cocomes).8​

Habiendo establecido los chanes la capital de su gobierno en Chichén Itzá en la época señalada, provenientes de Bacalar, continuaron su trayecto de oriente a poniente en la península de Yucatán, al cabo del cual fundarían también otras ciudades importantes como Ek Balam, Izamal, Motul, THó, la actual Mérida de Yucatán y Champotón.8​

Ya hacia el final del período clásico tardío, en el siglo IX, Chichén se convirtió en uno de los más importantes centros políticos de las tierras del Mayab. Para el principio del posclásico (desde el año 900 hasta el 1500), la ciudad se había consolidado como principal centro de poder en la península yucateca.','chichen.jpg','admin'),
('Kabáh','Kabáh, es un yacimiento arqueológico maya, ubicado en el municipio de Santa Elena, en el estado de Yucatán, México, al sureste de Uxmal.','La ciudad de Kabáh, es ya citada en el Chilam Balam de Chumayel y su nombre viene a significar el señor de la mano fuerte y poderosa. Se cree que este nombre está asociado con la representación que hay a su entrada, en donde una escultura representa a un hombre, que sostiene con su mano una serpiente. Teoberto Maler la llamó Kabahaucan.

Ocupa una extensión de 1,2 km²;, con una longitud, de norte a sur, de 1 km y 1,2 km de este a Oeste. Esta área es lo que ha sido estudiado de este complejo arqueológico. Se estima que los montículos que hay alrededor de las mismas, son construcciones que todavía no han sido "descubiertas". La inexistencia de fuentes de agua obligaba a la utilización de chultunes, para la recogida del agua de la lluvia.

La ciudad se conforma alrededor de un eje, que va de norte a sur y sus edificios están comunicados mediante calzadas, o sacbés. Una de estas calzadas, de mayor tamaño, es la que sale por el arco de triunfo y llega a Uxmal, que está a unos 37 km al Noroeste. Las edificaciones se agrupan en sendos conjuntos de edificios, situados uno al este y otro al oeste del eje principal norte sur.','kabah.jpg','admin'),
('Uxmal','En la actualidad es uno de los más importantes yacimientos arqueológicos de la cultura maya, junto con los de Chichén Itzá y Tikal.','Las referencias más antiguas son las recogidas en los Chilam Balam de Chumayel (escritos en maya con caracteres latinos donde se relata la historia de los mayas). Con esta base, y con las interpretaciones de las inscripciones de los anillos de la cancha del juego de pelota, se estima que Uxmal fue fundada en el siglo VII, durante la primera ocupación, en el periodo clásico. También está registrada en Chilam Balam la segunda ocupación ocurrida en el siglo X realizada por emigrantes procedentes del Altiplano Central de etnia tutul xiúes. De este periodo hay huella en las edificaciones. Los anales en lengua maya fechan la llegada de los xiues a Uxmal entre el año 987 y el 1007. Este grupo introdujo las componente nahuas y con ellas el culto a Tláloc y Quetzalcóatl. El dios de la lluvia Chaac esta presente desde antes de la venida de los nahuas y por la gran dependencia de la lluvia que tenían los habitantes de toda la zona Puuc.

A pesar de que la arquitectura de estilo Puuc es la predominante en la zona, también se han encontrado vestigios de otros estilos reunidos en el mismo lugar. El estilo chenes se refleja en las fachadas de los edificios, así como en representaciones de la serpiente emplumada de estilo tolteca y en rastros hallados en otras esculturas con características mexicas y olmecas, manifestándose rasgos teotihuacanos en algunos de los mascarones que representan al dios Chaac.','uxmal.jpg','admin'),
('Palenque','Es uno de los sitios más impresionantes de esta cultura. En comparación con otras ciudades mayas, se la considera de tamaño mediano.','Se cree que los mayas fundaron Lakam Ha durante el período Formativo (2500 a. C.-300), alrededor del 100 a. C., como una aldea predominantemente agricultora, y favorecida por los numerosos manantiales y corrientes de agua de la región.

La población creció durante el período Clásico Temprano (200-600), hasta ser una ciudad, llegando a ser la capital de la región de B’akaal (‘hueso’), comprendido en la zona de Chiapas y Tabasco, en el período Clásico Tardío (600-900). La más antigua de las estructuras que han sido descubiertas fue construida alrededor del año 600.

B’akaal fue un centro importante de la civilización maya entre los siglos V y IX, durante los cuales alternó épocas de gloria y de catástrofe, de alianzas y guerras. En más de una ocasión hizo alianzas con Tikal, la otra gran ciudad maya de la época; en especial para contener la expansión del belicoso Calakmul, también llamado "Reino de la Serpiente". Calakmul resultó victorioso en dos ocasiones, en 599 y 611.','palenque.png','admin');