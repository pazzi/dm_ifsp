DROP TABLE IF EXISTS `bolachao`;
CREATE TABLE IF NOT EXISTS `bolachao` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `selo` varchar(100) NOT NULL,
  `ano` year,
  `capa` varchar(80),
  PRIMARY KEY (`id`));


DROP TABLE IF EXISTS `musico`;
CREATE TABLE IF NOT EXISTS `musico` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` int NOT NULL,
  `sexo` int NOT NULL,
  `nascimento` int,
  PRIMARY KEY (`id`)
);

DROP TABLE IF EXISTS `musico_bolachao`;
CREATE TABLE IF NOT EXISTS `musico_bolachao` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_musico` int NOT NULL,
  `id_bolachao` int NOT NULL,
  PRIMARY KEY (`id`)
);


