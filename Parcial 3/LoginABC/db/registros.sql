DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `correo` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `clave` varchar(200) NOT NULL,
  UNIQUE KEY `id` (`id`)
);

INSERT INTO `login` (`id`, `correo`, `usuario`, `clave`) VALUES
(1, 'ajcp@gmail.com', 'ajcp', 'tec1234')


CREATE TABLE IF NOT EXISTS `formulario` (
  `idform` int(11) NOT NULL AUTO_INCREMENT,
  `Nombrecomp` varchar(50) NOT NULL,
  `numerotel` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `codigo_postal` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `detalles` varchar(50) NOT NULL,
  
  UNIQUE KEY `idform` (`idform`)
);

INSERT INTO `formulario` (`idform`,`Nombrecomp`,`numerotel`,`direccion`,`ciudad`,`estado`,`codigo_postal`,`correo`,`detalles`) VALUES
(1,'Arturo Cavazos','8971074895','Oaxaca 3742','Nuevo Laredo','Tamaulipas','88260','ajcp@gmail.com','Casa cafe')
