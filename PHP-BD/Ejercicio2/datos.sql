
CREATE DATABASE ej_ciudades;

CREATE TABLE `ciudades` (
  `id` int(11) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `pais` varchar(255) NOT NULL,
  `habitantes` int(11) NOT NULL,
  `superficie` decimal(10,0) NOT NULL,
  `tieneMetro` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin
PARTITION BY KEY (`id`) 


INSERT INTO ciudades VALUES
  (1, 'Ciudad de Mexico', 'Mexico', 9200000, 1485, TRUE),
  (2, 'Buenos Aires', 'Argentina', 2900000, 203, TRUE),
  (3, 'San Nicolas', 'Argentina', 133032, 37.6, FALSE),
  (4, 'Sao Paulo', 'Brasil', 12252023, 1521, TRUE),
  (5, 'Montevideo', 'Uruguay', 1354251, 201, TRUE),
  (6, 'San Pedro', 'Argentina', 59777, 39.5, FALSE),
  (7, 'Santiago de Chile', 'Chile', 5625736, 641, TRUE),
  (8, 'Lima', 'Peru', 9456000, 2672, TRUE); 

