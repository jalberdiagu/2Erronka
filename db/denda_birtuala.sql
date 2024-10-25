-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2024 a las 08:35:31
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `denda_birtuala`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deskontuak`
--

CREATE TABLE `deskontuak` (
  `id_desk` int(11) NOT NULL,
  `kodea` varchar(25) NOT NULL,
  `portzentaia` decimal(3,2) NOT NULL,
  `id_erab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erabiltzaileak`
--

CREATE TABLE `erabiltzaileak` (
  `id_erab` int(3) NOT NULL,
  `izena` varchar(25) NOT NULL,
  `abizena` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pasahitza` varchar(25) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eskaerak`
--

CREATE TABLE `eskaerak` (
  `id_eska` int(3) NOT NULL,
  `id_erab` int(3) NOT NULL,
  `data` date NOT NULL,
  `egoera` varchar(25) NOT NULL,
  `guztira` decimal(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eskaeren_xehetasunak`
--

CREATE TABLE `eskaeren_xehetasunak` (
  `id_xehe` int(3) NOT NULL,
  `id_eska` int(3) NOT NULL,
  `id_prod` int(3) NOT NULL,
  `kantitatea` int(3) NOT NULL,
  `unitateko_prezioa` decimal(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `liburuak`
--

CREATE TABLE `liburuak` (
  `id_prod` int(11) NOT NULL,
  `izenburua` varchar(50) NOT NULL,
  `idazlea` varchar(50) NOT NULL,
  `generoa` varchar(25) NOT NULL,
  `deskripzioa` varchar(5000) NOT NULL,
  `prezioa` int(11) NOT NULL,
  `isbn` varchar(20) NOT NULL,
  `hizkuntza` varchar(10) NOT NULL,
  `argitaletxea` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL,
  `argazkia` varchar(500) NOT NULL,
  `aktibo` tinyint(1) NOT NULL,
  `deskontuak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `liburuak`
--

INSERT INTO `liburuak` (`id_prod`, `izenburua`, `idazlea`, `generoa`, `deskripzioa`, `prezioa`, `isbn`, `hizkuntza`, `argitaletxea`, `stock`, `argazkia`, `aktibo`, `deskontuak`) VALUES
(33, 'Cien años de soledad', 'Gabriel García Márquez', 'Realismo mágico', 'Una saga familiar que narra la historia de la familia Buendía en el pueblo ficticio de Macondo.', 16, '978-84-204-3855-4', 'Español', 'Editorial Sudamericana', 100, 'https://www.example.com/cien-anos-de-soledad.jpg', 1, 0),
(34, 'El principito', 'Antoine de Saint-Exupéry', 'Literatura infantil', 'Un clásico atemporal sobre la amistad, el amor y la importancia de la imaginación.', 9, '978-84-204-3856-1', 'Español', 'Editorial Salvat', 50, 'https://www.example.com/el-principito.jpg', 1, 0),
(35, '1984', 'George Orwell', 'Distopía', 'Una novela distópica que explora la vigilancia totalitaria y la manipulación del lenguaje.', 13, '978-84-204-3857-8', 'Español', 'Editorial Planeta', 75, 'https://www.example.com/1984.jpg', 1, 0),
(36, 'El hobbit', 'J.R.R. Tolkien', 'Fantasía', 'Un hobbit llamado Bilbo Bolsón se embarca en una aventura épica junto a un grupo de enanos.', 11, '978-84-204-3858-5', 'Español', 'Editorial Minotauro', 120, 'https://www.example.com/el-hobbit.jpg', 1, 0),
(37, 'El señor de los anillos', 'J.R.R. Tolkien', 'Fantasía épica', 'Una trilogía que narra la lucha contra el malvado Sauron y la destrucción del Anillo Único.', 26, '978-84-204-3859-2', 'Español', 'Editorial Minotauro', 150, 'https://www.example.com/el-senor-de-los-anillos.jpg', 1, 0),
(38, 'Orgullo y prejuicio', 'Jane Austen', 'Romance', 'A story of love and society in 19th-century England.', 10, '978-84-204-3860-9', 'Inglés', 'Penguin Classics', 80, 'https://www.example.com/pride-and-prejudice.jpg', 1, 0),
(39, 'El retrato de Dorian Gray', 'Oscar Wilde', 'Terror psicológico', 'A portrait that reflects the soul of a man who seeks eternal youth.', 12, '978-84-204-3861-6', 'Inglés', 'Oxford Worlds Classics', 60, 'https://www.example.com/the-picture-of-dorian-gray.jpg', 1, 0),
(40, 'El gran Gatsby', 'F. Scott Fitzgerald', 'Novelas americanas', 'A story of love, wealth, and tragedy in the 1920s.', 14, '978-84-204-3862-3', 'Inglés', 'Scribner', 90, 'https://www.example.com/the-great-gatsby.jpg', 1, 0),
(41, 'Crimen y castigo', 'Fyodor Dostoevsky', 'Realismo', 'A poor student faces the consequences of a crime.', 15, '978-84-204-3863-0', 'Inglés', 'Penguin Classics', 110, 'https://www.example.com/crime-and-punishment.jpg', 1, 0),
(42, 'La metamorfosis', 'Franz Kafka', 'Realismo mágico', 'A man transforms into an insect and faces loneliness and misunderstanding.', 8, '978-84-204-3864-7', 'Inglés', 'Penguin Classics', 40, 'https://www.example.com/the-metamorphosis.jpg', 1, 0),
(43, 'El extranjero', 'Albert Camus', 'Existencialismo', 'A man is sentenced to death for a crime he does not understand.', 11, '978-84-204-3865-4', 'Inglés', 'Penguin Classics', 70, 'https://www.example.com/the-stranger.jpg', 1, 0),
(44, 'La náusea', 'Jean-Paul Sartre', 'Existencialismo', 'A man confronts the absurd existence and lack of meaning.', 10, '978-84-204-3866-1', 'Inglés', 'Penguin Classics', 50, 'https://www.example.com/nausea.jpg', 1, 0),
(45, 'Rayuela', 'Julio Cortázar', 'Realismo mágico', 'A novel that can be read in different ways, challenging narrative linearity.', 13, '978-84-204-3867-8', 'Español', 'Editorial Siglo XXI', 80, 'https://www.example.com/rayuela.jpg', 1, 0),
(46, 'El nombre de la rosa', 'Umberto Eco', 'Misterio', 'A Franciscan monk investigates a series of murders in a monastery.', 16, '978-84-204-3868-5', 'Español', 'Editorial Planeta', 100, 'https://www.example.com/el-nombre-de-la-rosa.jpg', 1, 0),
(47, 'El código Da Vinci', 'Dan Brown', 'Misterio', 'A novel that blends history, religion, and conspiracies.', 19, '978-84-204-3869-2', 'Español', 'Editorial Planeta', 120, 'https://www.example.com/el-codigo-da-vinci.jpg', 1, 0),
(48, 'Martin Ugalde', 'Martin Ugalde', 'Euskal Literatura', 'Martin Ugalde euskal idazle eta politikaria izan zen. Bere lan ezagunena \"Gure Herria\" da.', 11, '978-84-204-3870-9', 'Euskera', 'Elkar', 50, 'https://www.example.com/martin-ugalde.jpg', 1, 0),
(49, 'Ezer ez dago utzi nuen lekuan', 'Itziar Otaegi', 'Eleberri Grafikoa', 'Gaztetan herritik alde egin zuen mutila aita arrantzalearen hil hurreneko ohe ondora itzuli da, eta horrek oroitzapen olatu bat piztuko du, arrangura eta gaitzespen isilen erresakarekin; Genevan nazioarteko erakunde batean lanpostu irrikatua lortu ondoren, alokairuan hartu duen apartamentuan aurreko maizterrak utzitako arrastoei kateaturik geratuko da beste protagonista bat, jakin-mina obsesio bilakatu arte. Laurogei urteak pasatuta, Mediterraneoan udako etxea saltzera doa Mila, seme-alabei entzungor eginez bera bakarrik, eta era guztietako bizipenak eta sentipenak izango ditu bidaian.', 13, '-965', 'Euskera', 'Elkar', 100, 'URL', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orgatxoa`
--

CREATE TABLE `orgatxoa` (
  `id_orga` int(3) NOT NULL,
  `id_erab` int(3) NOT NULL,
  `id_prod` int(3) NOT NULL,
  `kantitatea` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `deskontuak`
--
ALTER TABLE `deskontuak`
  ADD PRIMARY KEY (`id_desk`);

--
-- Indices de la tabla `erabiltzaileak`
--
ALTER TABLE `erabiltzaileak`
  ADD PRIMARY KEY (`id_erab`);

--
-- Indices de la tabla `eskaerak`
--
ALTER TABLE `eskaerak`
  ADD PRIMARY KEY (`id_eska`);

--
-- Indices de la tabla `eskaeren_xehetasunak`
--
ALTER TABLE `eskaeren_xehetasunak`
  ADD PRIMARY KEY (`id_xehe`);

--
-- Indices de la tabla `liburuak`
--
ALTER TABLE `liburuak`
  ADD PRIMARY KEY (`id_prod`);

--
-- Indices de la tabla `orgatxoa`
--
ALTER TABLE `orgatxoa`
  ADD PRIMARY KEY (`id_orga`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `deskontuak`
--
ALTER TABLE `deskontuak`
  MODIFY `id_desk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `erabiltzaileak`
--
ALTER TABLE `erabiltzaileak`
  MODIFY `id_erab` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eskaerak`
--
ALTER TABLE `eskaerak`
  MODIFY `id_eska` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eskaeren_xehetasunak`
--
ALTER TABLE `eskaeren_xehetasunak`
  MODIFY `id_xehe` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `liburuak`
--
ALTER TABLE `liburuak`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `orgatxoa`
--
ALTER TABLE `orgatxoa`
  MODIFY `id_orga` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
