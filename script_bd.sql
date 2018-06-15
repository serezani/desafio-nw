-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 16-Jun-2018 às 01:31
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nw`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `GUERREIRO`
--

CREATE TABLE `GUERREIRO` (
  `ID_GUERREIRO` int(10) UNSIGNED NOT NULL COMMENT 'ID do guerreiro',
  `NM_GUERREIRO` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nome do guerreiro',
  `ID_TP_GUERREIRO` int(10) UNSIGNED NOT NULL COMMENT 'ID do tipo de guerreiro',
  `DE_ESP_GUERREIRO` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Especialidades dos guerreiro',
  `QT_VIDA` int(4) UNSIGNED NOT NULL COMMENT 'Quantidade de vida do guerreiro',
  `QT_DEFESA` int(3) UNSIGNED NOT NULL COMMENT 'Quantidade de defesa do guerreiro',
  `QT_DANO` int(3) UNSIGNED NOT NULL COMMENT 'Quantidade de dano do guerreiro',
  `QT_VEL_ATAQUE` decimal(2,1) NOT NULL COMMENT 'Quantidade de velocidade de ataque do guerreiro',
  `QT_VEL_MOVIMENTO` int(3) NOT NULL COMMENT 'Quantidade de velocidade de movimento do guerreiro',
  `ID_USU_INCLUSAO` int(10) UNSIGNED NOT NULL COMMENT 'ID do usuário que incluiu o registro',
  `HR_INCLUSAO` datetime NOT NULL COMMENT 'Data/hora da inclusão',
  `ID_USU_ALTERACAO` int(10) UNSIGNED NOT NULL COMMENT 'ID do usuário que alterou o registro',
  `HR_ALTERACAO` datetime NOT NULL COMMENT 'Data/hora da alteração'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Tabela de cadastro de guerreiros';

--
-- Extraindo dados da tabela `GUERREIRO`
--

INSERT INTO `GUERREIRO` (`ID_GUERREIRO`, `NM_GUERREIRO`, `ID_TP_GUERREIRO`, `DE_ESP_GUERREIRO`, `QT_VIDA`, `QT_DEFESA`, `QT_DANO`, `QT_VEL_ATAQUE`, `QT_VEL_MOVIMENTO`, `ID_USU_INCLUSAO`, `HR_INCLUSAO`, `ID_USU_ALTERACAO`, `HR_ALTERACAO`) VALUES
(2, 'steven', 1, 'Magia Branca', 2900, 340, 200, '1.3', 320, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(3, 'mona', 2, 'Cura, Magia Branca', 3100, 180, 200, '1.3', 330, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(4, 'morgan', 6, 'Tanker', 6000, 130, 360, '1.1', 300, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(5, 'rank', 1, 'Invocação', 2500, 300, 220, '1.2', 330, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(6, 'braian', 3, 'Ataque a distância', 2400, 330, 190, '1.8', 330, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(7, 'lariel', 4, 'Matador de Chefes, Antitanque', 3800, 280, 250, '1.5', 365, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(8, 'maycon', 4, 'Matador de Chefes', 3400, 290, 260, '1.4', 365, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(9, 'rock', 6, 'Tanker', 5600, 160, 400, '1.0', 300, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(10, 'rakan', 5, 'Antitanque', 3000, 400, 350, '1.5', 325, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(11, 'gruntar', 4, 'Ataque em area', 3700, 190, 240, '1.4', 345, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(13, 'teste de guerreiro', 3, 'Magia Branca', 2900, 250, 300, '1.3', 330, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `GUERREIRO_V_FILE`
--

CREATE TABLE `GUERREIRO_V_FILE` (
  `ID_GUERREIRO` int(10) UNSIGNED NOT NULL COMMENT 'ID do guerreiro',
  `ID_FILE` int(10) UNSIGNED NOT NULL COMMENT 'ID do arquivo',
  `DE_FILE` varchar(500) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Caminho completo + nome do arquivo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='TABELA DE GUERREIRO X ARQUIVOS';

-- --------------------------------------------------------

--
-- Estrutura da tabela `TIPO_GUERREIRO`
--

CREATE TABLE `TIPO_GUERREIRO` (
  `ID_TP_GUERREIRO` int(10) UNSIGNED NOT NULL COMMENT 'ID do tipo de guerreiro',
  `NM_TP_GUERREIRO` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nome do tipo de guerreiro',
  `DE_TP_GUERREIRO` varchar(500) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Descrição do tipo de guerreiro',
  `FG_STATUS` varchar(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Flag para controlar o status do tipo de guerreiro (A=Ativo,I=Inativo)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Tabela de Tipos de Guerreiros';

--
-- Extraindo dados da tabela `TIPO_GUERREIRO`
--

INSERT INTO `TIPO_GUERREIRO` (`ID_TP_GUERREIRO`, `NM_TP_GUERREIRO`, `DE_TP_GUERREIRO`, `FG_STATUS`) VALUES
(1, 'Mago', 'Magos são pesquisadores das artes arcanas da Idade Média. Magos costumam utilizar seu conhecimento em batalha no lugar das armas convencionais. Mas não são restringidos na utilização dos mesmos. Os Magos são fisicamente fracos', 'A'),
(2, 'Sacerdote', 'Sacerdotes são os mestres da cura e preservação, da restauração de seus aliados feridos, protegendo-os em batalha, e até mesmo ressuscitar os seus camaradas caídos. Enquanto eles têm uma variedade de magias de proteção e reforço para os seus aliados, os padres também podem causar terrível vingança sobre seus inimigos, usando os poderes da sombra ou da luz sagrada para destruí-los. Eles são uma classe diversificada e poderosa, altamente desejável em qualquer grupo, capaz de cumprir várias funções', 'A'),
(3, 'Arqueiro', 'Os arqueiros são exímios atiradores no uso do arco, e estão muito além das capacidades de um guerreiro especialista. Sua afinidade e dedicação a um único tipo de arma, torna possível que realizem verdadeiras proezas quando disparam suas flechas.\n\nE contrariando as expectativas, arqueiros detestam serem rotulados de meros guerreiros especialistas em arco, pois consideram a sua classe uma classe distinta e com habilidades muito superior as habilidades de um guerreiro no uso do arco.', 'A'),
(4, 'Cavaleiro', 'O cavaleiro é uma classe muito parecida com os guerreiros, porém, o cavaleiro tem uma habilidade de montaria ainda maior, muitas vezes cavaleiros fazem parte de um bom exército.\nCavaleiros preferem usar como montaria um bom cavalo, porém pode ser usado vários outros, como lobos, grifos, hipogrifos, e até mesmo, quando o cavaleiro é muito forte, em dragões o que aumenta o seu poder de fogo (embora este último seja raro).', 'A'),
(5, 'Espadachim', 'Um espadachim é um guerreiro dedicado que luta em defesa do seu orgulho e pela sua honra. Um Lâmina Arcana é um espadachim que decidiu estudar os mistérios da magia e a aplica durante as lutas.', 'A'),
(6, 'Lutador', 'Lutadores são combatentes especialistas no combate desarmado, que desenvolvem técnicas apuradas para transformarem seus corpos em verdadeiras máquinas de guerra. Ao contrário dos monges, que se dedicam a uma vida ascética e ao desenvolvimento de sua força interior, um lutador treina suas técnicas à exaustão e se coloca repetidas vezes à prova dentro do campo de batalha, assim como um \'guerreiro.', 'A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `USUARIO`
--

CREATE TABLE `USUARIO` (
  `ID_USUARIO` int(10) UNSIGNED NOT NULL COMMENT 'ID do usuário',
  `NM_USUARIO` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nome do usuário',
  `DE_EMAIL` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'E-mail do usuário',
  `DE_SENHA` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Senha do usuário'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Tabela de uauários do sistema';

--
-- Extraindo dados da tabela `USUARIO`
--

INSERT INTO `USUARIO` (`ID_USUARIO`, `NM_USUARIO`, `DE_EMAIL`, `DE_SENHA`) VALUES
(1, 'Alexandre Serezani', 'serezani@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `GUERREIRO`
--
ALTER TABLE `GUERREIRO`
  ADD PRIMARY KEY (`ID_GUERREIRO`);

--
-- Indexes for table `GUERREIRO_V_FILE`
--
ALTER TABLE `GUERREIRO_V_FILE`
  ADD PRIMARY KEY (`ID_FILE`,`ID_GUERREIRO`);

--
-- Indexes for table `TIPO_GUERREIRO`
--
ALTER TABLE `TIPO_GUERREIRO`
  ADD PRIMARY KEY (`ID_TP_GUERREIRO`);

--
-- Indexes for table `USUARIO`
--
ALTER TABLE `USUARIO`
  ADD PRIMARY KEY (`ID_USUARIO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `GUERREIRO`
--
ALTER TABLE `GUERREIRO`
  MODIFY `ID_GUERREIRO` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID do guerreiro', AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `TIPO_GUERREIRO`
--
ALTER TABLE `TIPO_GUERREIRO`
  MODIFY `ID_TP_GUERREIRO` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID do tipo de guerreiro', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `USUARIO`
--
ALTER TABLE `USUARIO`
  MODIFY `ID_USUARIO` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID do usuário', AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
