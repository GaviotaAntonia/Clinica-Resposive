-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-08-2019 a las 20:22:22
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectovidayamor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colonia`
--

CREATE TABLE `colonia` (
  `id_colonia` int(11) NOT NULL,
  `colonia` varchar(50) DEFAULT NULL,
  `codigopostal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `colonia`
--

INSERT INTO `colonia` (`id_colonia`, `colonia`, `codigopostal`) VALUES
(1, 'Coacalco', 0),
(2, 'Aguascalientes', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidopat` varchar(50) DEFAULT NULL,
  `apellidomat` varchar(50) DEFAULT NULL,
  `parentesco` varchar(50) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `numerocasa` int(11) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `contrasenna` varchar(50) DEFAULT NULL,
  `curp` varchar(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `nombre`, `apellidopat`, `apellidomat`, `parentesco`, `telefono`, `numerocasa`, `correo`, `contrasenna`, `curp`) VALUES
(1, 'sa', 'se', 'se', 'se', 2, 3, 'sas', 'sed', 'HEPG970930MDFRRV09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE `documento` (
  `id_documento` int(11) NOT NULL,
  `curp` varchar(18) DEFAULT NULL,
  `archivo` mediumblob,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `documento`
--

INSERT INTO `documento` (`id_documento`, `curp`, `archivo`, `Status`) VALUES
(1, 'HEPG970930MDFRRV09', 0x2d2d207068704d7941646d696e2053514c2044756d700a2d2d2076657273696f6e20342e382e350a2d2d2068747470733a2f2f7777772e7068706d7961646d696e2e6e65742f0a2d2d0a2d2d205365727669646f723a203132372e302e302e310a2d2d205469656d706f2064652067656e6572616369c3b36e3a2033302d30372d323031392061206c61732031393a35323a30310a2d2d205665727369c3b36e2064656c207365727669646f723a2031302e312e33382d4d6172696144420a2d2d205665727369c3b36e206465205048503a20372e332e340a0a5345542053514c5f4d4f4445203d20224e4f5f4155544f5f56414c55455f4f4e5f5a45524f223b0a534554204155544f434f4d4d4954203d20303b0a5354415254205452414e53414354494f4e3b0a5345542074696d655f7a6f6e65203d20222b30303a3030223b0a0a0a2f2a2134303130312053455420404f4c445f4348415241435445525f5345545f434c49454e543d40404348415241435445525f5345545f434c49454e54202a2f3b0a2f2a2134303130312053455420404f4c445f4348415241435445525f5345545f524553554c54533d40404348415241435445525f5345545f524553554c5453202a2f3b0a2f2a2134303130312053455420404f4c445f434f4c4c4154494f4e5f434f4e4e454354494f4e3d4040434f4c4c4154494f4e5f434f4e4e454354494f4e202a2f3b0a2f2a21343031303120534554204e414d455320757466386d6234202a2f3b0a0a2d2d0a2d2d2042617365206465206461746f733a206070726f796563746f7669646179616d6f72600a2d2d0a0a2d2d202d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d0a0a2d2d0a2d2d2045737472756374757261206465207461626c612070617261206c61207461626c612060636f6e746163746f600a2d2d0a0a435245415445205441424c452060636f6e746163746f6020280a20206069645f636f6e746163746f6020696e7428313129204e4f54204e554c4c2c0a2020606e6f6d627265602076617263686172283530292044454641554c54204e554c4c2c0a2020606170656c6c69646f706174602076617263686172283530292044454641554c54204e554c4c2c0a2020606170656c6c69646f6d6174602076617263686172283530292044454641554c54204e554c4c2c0a202060706172656e746573636f602076617263686172283530292044454641554c54204e554c4c2c0a20206074656c65666f6e6f6020696e74283131292044454641554c54204e554c4c2c0a2020606e756d65726f636173616020696e74283131292044454641554c54204e554c4c2c0a202060636f7272656f602076617263686172283530292044454641554c54204e554c4c2c0a202060636f6e74726173656e6e61602076617263686172283530292044454641554c54204e554c4c0a2920454e47494e453d496e6e6f44422044454641554c5420434841525345543d6c6174696e313b0a0a2d2d0a2d2d20566f6c6361646f206465206461746f732070617261206c61207461626c612060636f6e746163746f600a2d2d0a0a494e5345525420494e544f2060636f6e746163746f6020286069645f636f6e746163746f602c20606e6f6d627265602c20606170656c6c69646f706174602c20606170656c6c69646f6d6174602c2060706172656e746573636f602c206074656c65666f6e6f602c20606e756d65726f63617361602c2060636f7272656f602c2060636f6e74726173656e6e6160292056414c5545530a28312c20276665726e616e646f272c202776616c6c656a6f272c202773616c6173272c202768696a6f272c2035363837353434332c2034352c202761686540686f746d61696c2e636f6d272c202773617327293b0a0a2d2d0a2d2d20c38d6e64696365732070617261207461626c617320766f6c63616461730a2d2d0a0a2d2d0a2d2d20496e6469636573206465206c61207461626c612060636f6e746163746f600a2d2d0a414c544552205441424c452060636f6e746163746f600a2020414444205052494d415259204b455920286069645f636f6e746163746f60293b0a0a2d2d0a2d2d204155544f5f494e4352454d454e54206465206c6173207461626c617320766f6c63616461730a2d2d0a0a2d2d0a2d2d204155544f5f494e4352454d454e54206465206c61207461626c612060636f6e746163746f600a2d2d0a414c544552205441424c452060636f6e746163746f600a20204d4f44494659206069645f636f6e746163746f6020696e7428313129204e4f54204e554c4c204155544f5f494e4352454d454e542c204155544f5f494e4352454d454e543d323b0a434f4d4d49543b0a0a2f2a21343031303120534554204348415241435445525f5345545f434c49454e543d404f4c445f4348415241435445525f5345545f434c49454e54202a2f3b0a2f2a21343031303120534554204348415241435445525f5345545f524553554c54533d404f4c445f4348415241435445525f5345545f524553554c5453202a2f3b0a2f2a2134303130312053455420434f4c4c4154494f4e5f434f4e4e454354494f4e3d404f4c445f434f4c4c4154494f4e5f434f4e4e454354494f4e202a2f3b0a, 're'),
(2, 'ROPY940908MMCDRN03', 0x2d2d207068704d7941646d696e2053514c2044756d700a2d2d2076657273696f6e20342e382e350a2d2d2068747470733a2f2f7777772e7068706d7961646d696e2e6e65742f0a2d2d0a2d2d205365727669646f723a203132372e302e302e310a2d2d205469656d706f2064652067656e6572616369c3b36e3a2032342d30372d323031392061206c61732031363a33313a34360a2d2d205665727369c3b36e2064656c207365727669646f723a2031302e312e33382d4d6172696144420a2d2d205665727369c3b36e206465205048503a20372e332e340a0a5345542053514c5f4d4f4445203d20224e4f5f4155544f5f56414c55455f4f4e5f5a45524f223b0a534554204155544f434f4d4d4954203d20303b0a5354415254205452414e53414354494f4e3b0a5345542074696d655f7a6f6e65203d20222b30303a3030223b0a0a0a2f2a2134303130312053455420404f4c445f4348415241435445525f5345545f434c49454e543d40404348415241435445525f5345545f434c49454e54202a2f3b0a2f2a2134303130312053455420404f4c445f4348415241435445525f5345545f524553554c54533d40404348415241435445525f5345545f524553554c5453202a2f3b0a2f2a2134303130312053455420404f4c445f434f4c4c4154494f4e5f434f4e4e454354494f4e3d4040434f4c4c4154494f4e5f434f4e4e454354494f4e202a2f3b0a2f2a21343031303120534554204e414d455320757466386d6234202a2f3b0a0a2d2d0a2d2d2042617365206465206461746f733a20607665726f7375600a2d2d0a0a2d2d202d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d0a0a2d2d0a2d2d2045737472756374757261206465207461626c612070617261206c61207461626c61206073757065727573756172696f600a2d2d0a0a435245415445205441424c45206073757065727573756172696f6020280a20206069645f73757065727573756172696f6020696e7428313129204e4f54204e554c4c2c0a2020607573756172696f602076617263686172283530292044454641554c54204e554c4c2c0a2020606e6f6d627265602076617263686172283530292044454641554c54204e554c4c2c0a202060617065706174602076617263686172283530292044454641554c54204e554c4c2c0a2020606170656d6174602076617263686172283530292044454641554c54204e554c4c2c0a202060636f7272656f602076617263686172283530292044454641554c54204e554c4c2c0a202060636f6e74726173656e6e61602076617263686172283530292044454641554c54204e554c4c2c0a20206069645f7469706f7573756172696f6020696e74283131292044454641554c54204e554c4c0a2920454e47494e453d496e6e6f44422044454641554c5420434841525345543d6c6174696e313b0a0a2d2d202d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d0a0a2d2d0a2d2d2045737472756374757261206465207461626c612070617261206c61207461626c6120607469706f7573756172696f600a2d2d0a0a435245415445205441424c4520607469706f7573756172696f6020280a20206069645f7469706f7573756172696f6020696e7428313129204e4f54204e554c4c2c0a2020607469706f7573756172696f602076617263686172283530292044454641554c54204e554c4c0a2920454e47494e453d496e6e6f44422044454641554c5420434841525345543d6c6174696e313b0a0a2d2d202d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d0a0a2d2d0a2d2d2045737472756374757261206465207461626c612070617261206c61207461626c6120607573756172696f600a2d2d0a0a435245415445205441424c4520607573756172696f6020280a20206069645f7573756172696f6020696e7428313129204e4f54204e554c4c2c0a2020607573756172696f602076617263686172283530292044454641554c54204e554c4c2c0a2020606e6f6d627265602076617263686172283530292044454641554c54204e554c4c2c0a202060617065706174602076617263686172283530292044454641554c54204e554c4c2c0a2020606170656d6174602076617263686172283530292044454641554c54204e554c4c2c0a202060636f7272656f602076617263686172283530292044454641554c54204e554c4c2c0a202060636f6e74726173656e6e61602076617263686172283530292044454641554c54204e554c4c0a2920454e47494e453d496e6e6f44422044454641554c5420434841525345543d6c6174696e313b0a0a2d2d0a2d2d20c38d6e64696365732070617261207461626c617320766f6c63616461730a2d2d0a0a2d2d0a2d2d20496e6469636573206465206c61207461626c61206073757065727573756172696f600a2d2d0a414c544552205441424c45206073757065727573756172696f600a2020414444205052494d415259204b455920286069645f73757065727573756172696f60292c0a2020414444204b4559206069645f7469706f7573756172696f6020286069645f7469706f7573756172696f60293b0a0a2d2d0a2d2d20496e6469636573206465206c61207461626c6120607469706f7573756172696f600a2d2d0a414c544552205441424c4520607469706f7573756172696f600a2020414444205052494d415259204b455920286069645f7469706f7573756172696f60293b0a0a2d2d0a2d2d20496e6469636573206465206c61207461626c6120607573756172696f600a2d2d0a414c544552205441424c4520607573756172696f600a2020414444205052494d415259204b455920286069645f7573756172696f60293b0a0a2d2d0a2d2d204155544f5f494e4352454d454e54206465206c6173207461626c617320766f6c63616461730a2d2d0a0a2d2d0a2d2d204155544f5f494e4352454d454e54206465206c61207461626c61206073757065727573756172696f600a2d2d0a414c544552205441424c45206073757065727573756172696f600a20204d4f44494659206069645f73757065727573756172696f6020696e7428313129204e4f54204e554c4c204155544f5f494e4352454d454e543b0a0a2d2d0a2d2d204155544f5f494e4352454d454e54206465206c61207461626c6120607469706f7573756172696f600a2d2d0a414c544552205441424c4520607469706f7573756172696f600a20204d4f44494659206069645f7469706f7573756172696f6020696e7428313129204e4f54204e554c4c204155544f5f494e4352454d454e543b0a0a2d2d0a2d2d204155544f5f494e4352454d454e54206465206c61207461626c6120607573756172696f600a2d2d0a414c544552205441424c4520607573756172696f600a20204d4f44494659206069645f7573756172696f6020696e7428313129204e4f54204e554c4c204155544f5f494e4352454d454e543b0a0a2d2d0a2d2d205265737472696363696f6e65732070617261207461626c617320766f6c63616461730a2d2d0a0a2d2d0a2d2d2046696c74726f732070617261206c61207461626c61206073757065727573756172696f600a2d2d0a414c544552205441424c45206073757065727573756172696f600a202041444420434f4e53545241494e54206073757065727573756172696f5f6962666b5f316020464f524549474e204b455920286069645f7469706f7573756172696f6029205245464552454e43455320607469706f7573756172696f6020286069645f7469706f7573756172696f60293b0a434f4d4d49543b0a0a2f2a21343031303120534554204348415241435445525f5345545f434c49454e543d404f4c445f4348415241435445525f5345545f434c49454e54202a2f3b0a2f2a21343031303120534554204348415241435445525f5345545f524553554c54533d404f4c445f4348415241435445525f5345545f524553554c5453202a2f3b0a2f2a2134303130312053455420434f4c4c4154494f4e5f434f4e4e454354494f4e3d404f4c445f434f4c4c4154494f4e5f434f4e4e454354494f4e202a2f3b0a, 'compelto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `id_colonia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `estado`, `id_colonia`) VALUES
(10, 'México', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `id_evento` int(11) NOT NULL,
  `nombre_evento` varchar(50) DEFAULT NULL,
  `fecha_inicio` varchar(50) DEFAULT NULL,
  `horainis` int(11) DEFAULT NULL,
  `minutos` int(11) DEFAULT NULL,
  `amopms` varchar(10) DEFAULT NULL,
  `fecha_fin` varchar(50) DEFAULT NULL,
  `horaini` int(11) DEFAULT NULL,
  `minuto` int(11) DEFAULT NULL,
  `amopm` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarioact`
--

CREATE TABLE `horarioact` (
  `id_horario` int(11) NOT NULL,
  `curp` varchar(50) DEFAULT NULL,
  `actividad` varchar(50) DEFAULT NULL,
  `dias` varchar(50) DEFAULT NULL,
  `horario` varchar(50) DEFAULT NULL,
  `encargado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `curp` varchar(18) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidopat` varchar(50) DEFAULT NULL,
  `apellidomat` varchar(50) DEFAULT NULL,
  `fechanacimiento` varchar(50) DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL,
  `id_colonia` int(11) DEFAULT NULL,
  `calle` varchar(50) DEFAULT NULL,
  `referenciadecalle` varchar(50) NOT NULL,
  `edad` int(11) DEFAULT NULL,
  `tipodesangre` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`curp`, `nombre`, `apellidopat`, `apellidomat`, `fechanacimiento`, `id_estado`, `id_colonia`, `calle`, `referenciadecalle`, `edad`, `tipodesangre`) VALUES
('HEPG970930MDFRRV09', 'Gavi', 'Herrera', 'Prieto', '30/09/2019', 10, 1, 'juana', 'bomberos', 21, 'a+'),
('ROPY940908MMCDRN03', 'Yanet Natividad', 'Rodriguez', 'Perez', '08/09/94', 10, 1, 'Fresnos', 'Polleria en la esquina', 25, 'O+');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preuba`
--

CREATE TABLE `preuba` (
  `id` int(11) NOT NULL,
  `nombre` int(11) NOT NULL,
  `curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `superusuario`
--

CREATE TABLE `superusuario` (
  `id_superusuario` int(11) NOT NULL,
  `usuariosuper` varchar(50) DEFAULT NULL,
  `nombresuper` varchar(50) DEFAULT NULL,
  `apepatsuper` varchar(50) DEFAULT NULL,
  `apematsuper` varchar(50) DEFAULT NULL,
  `contrasenna` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `id_tipousuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `superusuario`
--

INSERT INTO `superusuario` (`id_superusuario`, `usuariosuper`, `nombresuper`, `apepatsuper`, `apematsuper`, `contrasenna`, `correo`, `id_tipousuario`) VALUES
(1, 'gaby', 'sasa', 'sa', 'sa', 'sa', 'sa', 1),
(2, 'natiyanet', 'Yanet Natividad', 'Rodriguez', 'Perez', 'lanaty', 'lanatty@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `id_tipousuario` int(11) NOT NULL,
  `tipousuario` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`id_tipousuario`, `tipousuario`) VALUES
(1, 'Administrador'),
(2, 'Director'),
(3, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `traslado`
--

CREATE TABLE `traslado` (
  `id_traslado` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `domicilio` varchar(50) DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL,
  `nombre_paciente` varchar(50) DEFAULT NULL,
  `edad` int(11) NOT NULL,
  `trasladotipo` varchar(50) DEFAULT NULL,
  `numerotelefono` int(11) DEFAULT NULL,
  `pago` varchar(11) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `traslado`
--

INSERT INTO `traslado` (`id_traslado`, `nombre`, `domicilio`, `id_estado`, `nombre_paciente`, `edad`, `trasladotipo`, `numerotelefono`, `pago`, `correo`) VALUES
(1, 'Blanca Nieves', 'mg as here', 10, 'Francisco Mickey', 20, 'forzoso', 58479621, 'Realizado', 'gastqw@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidopat` varchar(50) DEFAULT NULL,
  `apellidomat` varchar(50) DEFAULT NULL,
  `contrasenna` varchar(50) DEFAULT NULL,
  `recontra` varchar(50) NOT NULL,
  `correo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `nombre`, `apellidopat`, `apellidomat`, `contrasenna`, `recontra`, `correo`) VALUES
(19, 'gaviota', 'gaviota', 'herrera', 'prieto', 'sa', 'sa', 'atoivag1997@gmail.com'),
(25, 'gavi', 'gaviota antonia', 'herrera ', 'prieto', 'sa12345', 'sa12345', 'atoivag1997@gmail.com'),
(26, 'gavi', 'gaviota antonia', 'herrera ', 'prieto', 'sa', 'sa', 'atoivag1997@gmail.com'),
(27, 'gavi', 'gaviota antonia', 'herrera ', 'prieto', 'sa', 'sa', 'atoivag1997@gmail.com'),
(28, 'gavi', 'gaviota antonia', 'herrera ', 'prieto', 'sa', 'sa', 'atoivag1997@gmail.com'),
(29, 'gavi', 'gaviota antonia', 'herrera ', 'prieto', 'se', 'se', 'atoivag1997@gmail.com'),
(30, 'sa', 'gaby', 'gaby', 'gaby', '123', '123', 'GAS@hotmail.com'),
(31, 'sa', 'gaby', 'gaby', 'gaby', '123', '123', 'GAS@hotmail.com'),
(32, 'sa', 'gaby', 'gaby', 'gaby', '123', '123', 'GAS@hotmail.com'),
(33, '', 's', 'ds', 'sds', 'sa', 'sa', 'hgh@hotmail.oc'),
(34, '', 's', 'ds', 'sds', 'sa', 'sa', 'hgh@hotmail.oc'),
(35, 'sw', 'w', 'w', 'w', 'sa', 'sa', 'w@hotmail.com'),
(36, '', '', '', '', 'sa', 'sa', 'q@hotmail.com'),
(37, '', '', '', '', 'sa', 'sa', 'q@hotmail.com'),
(38, 's', 'e', '', '', '', '', 'q@hotmail.com'),
(39, 's', 'e', '', '', '', '', 'q@hotmail.com'),
(40, 's', 'e', '', '', '', '', 'q@hotmail.com'),
(41, 's', 'e', '', '', '', '', 'q@hotmail.com'),
(42, 'gaby', 'herrera', 'fsdf', 'sdasd', 'sasasa12', 'sasasa12', 'sasasa@hotmail.com'),
(43, 'juana', 'juana', 'hernandez', 'salir', 'sase', 'sase', 'sasasa@hotmail.com'),
(44, 'juana', 'juanas', 'hernandez', 'salirs', 'sase', 'sase', 'sasasa@hotmail.com'),
(45, 'juana', 'juanasxxx', 'hernandez', 'salirs', 'sase', 'sase', 'sasasa@hotmail.com'),
(46, '', '', '', '', '', '', ''),
(47, 'Naty', 'Naty', 'rodriguez', 'perez', 'fabyapache1870', 'fabyapache1870', 'ropy187@outlook.com'),
(48, 'antonia', 'gAVI', 'SA', 'SA', 'sed', 'sed', 'atoivag1997@gmail.com'),
(49, '', 'de', 'de', 'de', '', '', ''),
(50, 'antonia', 'gAVI', 'SA', 'SA', 'sed', 'sed', 'atoivag1997@gmail.com'),
(51, 'antonia', 'gAVI', 'SA', 'SA', 'sed', 'sed', 'atoivag1997@gmail.com'),
(52, '', 'de', 'de', 'de', '', '', ''),
(53, '', 'de', 'de', 'de', '', '', ''),
(54, '', 'de', 'de', 'de', '', '', ''),
(55, '', 'de', 'de', 'de', '', '', ''),
(56, '', 'de', 'de', 'de', '', '', ''),
(57, '', 'de', 'de', 'de', '', '', ''),
(58, '', 'de', 'de', 'de', '', '', ''),
(59, '', 'de', 'de', 'de', '', '', ''),
(60, 'frances', 'jhoselyn concepcion', 'frances', 'garcia', '123456', '123456', 'CJHOSELYNCFRANCES@GMAIL.COM');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `colonia`
--
ALTER TABLE `colonia`
  ADD PRIMARY KEY (`id_colonia`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`),
  ADD KEY `curp` (`curp`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`id_documento`),
  ADD KEY `curp` (`curp`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`),
  ADD KEY `id_colonia` (`id_colonia`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id_evento`);

--
-- Indices de la tabla `horarioact`
--
ALTER TABLE `horarioact`
  ADD PRIMARY KEY (`id_horario`),
  ADD KEY `curp` (`curp`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`curp`),
  ADD KEY `id_estado` (`id_estado`),
  ADD KEY `id_colonia` (`id_colonia`);

--
-- Indices de la tabla `superusuario`
--
ALTER TABLE `superusuario`
  ADD PRIMARY KEY (`id_superusuario`),
  ADD KEY `id_tipousuario` (`id_tipousuario`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`id_tipousuario`);

--
-- Indices de la tabla `traslado`
--
ALTER TABLE `traslado`
  ADD PRIMARY KEY (`id_traslado`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `colonia`
--
ALTER TABLE `colonia`
  MODIFY `id_colonia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `documento`
--
ALTER TABLE `documento`
  MODIFY `id_documento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `horarioact`
--
ALTER TABLE `horarioact`
  MODIFY `id_horario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `superusuario`
--
ALTER TABLE `superusuario`
  MODIFY `id_superusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `id_tipousuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `traslado`
--
ALTER TABLE `traslado`
  MODIFY `id_traslado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `contacto_ibfk_1` FOREIGN KEY (`curp`) REFERENCES `paciente` (`curp`);

--
-- Filtros para la tabla `documento`
--
ALTER TABLE `documento`
  ADD CONSTRAINT `documento_ibfk_1` FOREIGN KEY (`curp`) REFERENCES `paciente` (`curp`);

--
-- Filtros para la tabla `estado`
--
ALTER TABLE `estado`
  ADD CONSTRAINT `estado_ibfk_1` FOREIGN KEY (`id_colonia`) REFERENCES `colonia` (`id_colonia`);

--
-- Filtros para la tabla `horarioact`
--
ALTER TABLE `horarioact`
  ADD CONSTRAINT `horarioact_ibfk_1` FOREIGN KEY (`curp`) REFERENCES `paciente` (`curp`);

--
-- Filtros para la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `paciente_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`),
  ADD CONSTRAINT `paciente_ibfk_2` FOREIGN KEY (`id_colonia`) REFERENCES `colonia` (`id_colonia`);

--
-- Filtros para la tabla `superusuario`
--
ALTER TABLE `superusuario`
  ADD CONSTRAINT `superusuario_ibfk_1` FOREIGN KEY (`id_tipousuario`) REFERENCES `tipousuario` (`id_tipousuario`);

--
-- Filtros para la tabla `traslado`
--
ALTER TABLE `traslado`
  ADD CONSTRAINT `traslado_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
