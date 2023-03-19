-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.10.2-MariaDB-1:10.10.2+maria~ubu2204 - mariadb.org binary distribution
-- SO del servidor:              debian-linux-gnu
-- HeidiSQL Versión:             12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para database
CREATE DATABASE IF NOT EXISTS `database` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;
USE `database`;

-- Volcando estructura para tabla database.productos
CREATE TABLE IF NOT EXISTS `productos` (
  `id_producto` int(3) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `precio` int(6) DEFAULT NULL,
  `procedencia` int(1) DEFAULT NULL,
  `imagen` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla database.productos: ~11 rows (aproximadamente)
INSERT INTO `productos` (`id_producto`, `nombre`, `descripcion`, `precio`, `procedencia`, `imagen`) VALUES
	(001, 'Pokeball', 'Pokebal simple utilizada para capturar pokemons', 200, 1, 'assets/pokeball.png'),
	(002, 'Superball', 'Pokeball mejorada con un indice de captura superior a la de una pokeball', 600, 1, 'assets/superball.png'),
	(003, 'Ultraball', 'Pokeball mejorada con un indice de captura superior a la de una superball', 1200, 1, 'assets/ultraball.png'),
	(004, 'Sanaball', 'Pokeball que al capturar sana por completo al pokemon capturado', 300, 1, 'assets/sanaball.png'),
	(005, 'Velozball', 'Pokeball que tiene un indice de captura superior si se lanza en el primer turno de combate', 1000, 1, 'assets/velozball.png'),
	(006, 'Ocasoball', 'Pokeball que tiene un indice de captura superior si se utiliza dentro de cuevas o por la noche', 1000, 1, 'assets/ocasoball.png'),
	(007, 'Turnoball', 'Pokeball que tiene un indice de captura superior cada vez que pasa un turno de combate', 1000, 1, 'assets/turnoball.png'),
	(008, 'Pocion', 'Restaura 20 PS (puntos de salud) de la barra de vida de un Pokémon', 300, 1, 'assets/pocion.png'),
	(009, 'Superpocion', 'Restaura 60 PS (puntos de salud) de la barra de vida de un Pokémon', 700, 1, 'assets/superpocion.png'),
	(010, 'Hiperpocion', 'Restaura 120 PS (puntos de salud) de la barra de vida de un Pokémon', 1200, 1, 'assets/hiperpocion.png'),
	(011, 'Revivir', 'Objeto curativo que revive a un Pokémon que esté debilitado y recupera la mitad del total de sus puntos de salud', 2000, 1, 'assets/revivir.png');

-- Volcando estructura para tabla database.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `nombreusuario` varchar(50) DEFAULT NULL,
  `contrasena` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla database.usuario: ~1 rows (aproximadamente)
INSERT INTO `usuario` (`nombreusuario`, `contrasena`) VALUES
	('Admin', 'admin');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
