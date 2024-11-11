-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Jul 19, 2024 at 11:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adoption_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_adm` int(11) NOT NULL,
  `nom_adm` varchar(100) NOT NULL,
  `prenom_adm` varchar(100) NOT NULL,
  `email_adm` varchar(255) NOT NULL,
  `pass_adm` varchar(100) DEFAULT NULL,
  `role_adm` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_adm`, `nom_adm`, `prenom_adm`, `email_adm`, `pass_adm`, `role_adm`) VALUES
(1, 'Helpa', 'Helpa', 'helpaassociation@gmail.com', 'projet2024', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `adopteur`
--

CREATE TABLE `adopteur` (
  `id_ad` int(11) NOT NULL,
  `nom_ad` varchar(100) NOT NULL,
  `prenom_ad` varchar(100) NOT NULL,
  `date_nai_ad` date NOT NULL,
  `cin_ad` varchar(10) NOT NULL,
  `num_tele_ad` varchar(50) NOT NULL,
  `email_ad` varchar(255) NOT NULL,
  `pass_ad` varchar(100) NOT NULL,
  `addr_ad` varchar(255) NOT NULL,
  `etat_soc_ad` varchar(50) NOT NULL,
  `pro_ad` varchar(100) NOT NULL,
  `q1_ad` varchar(255) NOT NULL,
  `q2_ad` varchar(255) NOT NULL,
  `q3_ad` varchar(255) NOT NULL,
  `q4_ad` varchar(255) NOT NULL,
  `q5_ad` varchar(255) NOT NULL,
  `q6_ad` varchar(255) NOT NULL,
  `q7_ad` varchar(255) NOT NULL,
  `q8_ad` varchar(255) NOT NULL,
  `id_rdv` int(11) NOT NULL,
  `id_asso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adopteur`
--

INSERT INTO `adopteur` (`id_ad`, `nom_ad`, `prenom_ad`, `date_nai_ad`, `cin_ad`, `num_tele_ad`, `email_ad`, `pass_ad`, `addr_ad`, `etat_soc_ad`, `pro_ad`, `q1_ad`, `q2_ad`, `q3_ad`, `q4_ad`, `q5_ad`, `q6_ad`, `q7_ad`, `q8_ad`, `id_rdv`, `id_asso`) VALUES
(15, 'Nedjaoui', 'Ihssane', '2003-10-12', 'HH83850', '0688062914', 'ihssanenedjaoui5@gmail.com', 'Ihssane123456789', '105 RUE FEE QU JERIFATE SAFI', 'single', 'Student', 'i want to have a pet in my house', 'no it s the first time', 'no i don\'t have', 'yes i do', 'with me in my room', 'approximatively 5hours', 'oui ', 'i really want to adopt this cat', 92, 1),
(16, 'Filali', 'Ali', '2003-10-23', 'HH12345', '0656721839', 'KhAssakhi@gmail.com', 'Khadiha123456789', '105 RUE FEE QU JERIFATE SAFI', 'single', 'House wife', 'i want to have a pet in my house', 'no ', 'no  i don\'t have any animals in my house', 'yes i do', 'in the kitchen', 'un max de 5heures', 'yes I promess ', 'no i don\'t want to add something', 83, 1),
(17, 'Khalid', 'Yazid ', '2024-05-23', 'HH87698', '0688062914', 'Yazidkhalid@gmail.com', 'Khalid123456789', '105 RUE FEE QU JERIFATE SAFI', 'Célibataire', 'étudiant', 'je veux avoir un animal chez moi ', 'non jamais', 'non ', 'oui je le possède', 'dans sa propre chambre ', 'un max de 5heures', 'oui je le promets', 'non je ne possède pas aucune limitation physique', 74, 1),
(18, 'Mahfoudi', 'Salima', '2024-05-23', 'HH43234', '0689452311', 'Salimamahfoudi@gmail.com', 'Salima123456789', '105 RUE FEE QU JERIFATE SAFI', 'Célibataire', 'Student', 'je veux avoir un animal chez moi ', 'non jamais', 'non je ne l\'ai pas', 'oui je le possède', 'dans la cuisine ', 'un max de 5heures', 'oui je le promets', 'non je ne possède pas aucune limitation physique', 84, 1),
(19, 'NYANTUDRE', 'Alban', '2002-07-05', '1478965', '0658741268', 'alban@gmail.com', '123456789', '105 RUE FEE QU JERIFATE SAFI', 'single', 'Student', 'i want to have a pet in my house', 'no it s the first time', 'no je vis toute seule à la maison', 'oui je le possède', 'with me in my room', 'approximatively 5hours', 'yes I promess ', 'non je ne possède pas aucune limitation physique', 87, 1),
(21, 'qasimi', 'mohamed', '2003-09-15', 'jk202020', '0689885591', 'melqasemy2003@gmail.com', '2003', '105 RUE FEE QU tikiwin agadir', 'single', 'Student', 'i want to have a pet in my house', 'no it s the first time', 'no', 'no', 'dans sa propre chambre ', 'approximatively 8hours', 'yes I promess ', 'i\'m the question eight', 90, 1),
(22, 'belaabdouli', 'meriame', '2003-03-05', 'n467697', '0639502387', 'meriamebelaabdouli2003@gmail.com', 'meriame', '105 RUE FEE QU JERIFATE SAFI', 'married', 'engineer', 'i want to have a pet in my house', 'no it s the first time', 'no  i don\'t have any animals in my house', 'yes i do', 'with me in my room', 'approximatively 5hours', 'yes I promess ', 'i\'m the question eight', 91, 1);

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `id_an` int(11) NOT NULL,
  `code_an` varchar(100) NOT NULL,
  `ps_nom_an` varchar(100) NOT NULL,
  `sex_an` varchar(50) NOT NULL,
  `genre_an` varchar(50) NOT NULL,
  `size_an` varchar(100) NOT NULL,
  `age_an` varchar(100) NOT NULL,
  `date_arr_an` date NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `etat_an` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`id_an`, `code_an`, `ps_nom_an`, `sex_an`, `genre_an`, `size_an`, `age_an`, `date_arr_an`, `img_path`, `etat_an`) VALUES
(1, '0000', 'Rocky', 'male', 'dog', '30kg ', '10', '2024-03-10', 'animals/0000.jpg', 'not adopted'),
(2, '0001', 'Max', 'male', 'dog', '28kg', '8', '2024-03-11', 'animals/0001.jpg', 'not adopted'),
(3, '0002', 'Snow', 'male', 'cat', '3kg ', '1', '2024-03-13', 'animals/0002.jpg', 'not adopted'),
(4, '0003', 'Mario', 'male', 'dog', '30kg ', '4', '2024-03-15', 'animals/0003.jpg', 'not adopted'),
(5, '0004', 'Bella', 'male', 'cat', '3.5kg', '2', '2024-03-19', 'animals/0004.jpg', 'not adopted'),
(6, '0005', 'Katty', 'female', 'cat', '5kg', '2', '2024-03-19', 'animals/0005.jpg', 'not adopted'),
(7, '0006', 'Doggy', 'male', 'dog', '28kg ', '8', '2024-03-20', 'animals/0006.jpg', 'not adopted'),
(8, '0007', 'Lilly', 'female', 'cat', '3kg ', '1', '2024-03-20', 'animals/0007.jpg', 'not adopted'),
(9, '0008', 'Youki', 'male', 'dog', '3kg ', '1', '2024-03-30', 'animals/0008.png', 'not adopted'),
(11, '0009', 'Katty', 'female', 'cat', '4kg', '2', '2024-04-30', 'animals/0009.jpg', 'not adopted'),
(13, '0010', 'Leo', 'male', 'dog', '35kg ', '5', '2024-05-21', 'animals/0010.jpg', 'not adopted'),
(14, '0011', 'Murphy', 'male', 'dog', '35kg ', '5', '2024-05-22', 'animals/0011.jpg', 'not adopted'),
(15, '0013', 'Wolf', 'male', 'dog', '28kg ', '3', '2024-05-23', 'animals/0013.jpg', 'not adopted'),
(16, '0014', 'Shuggy', 'male', 'dog', '30kg ', '4', '2024-05-21', 'animals/0014.jpg', 'not adopted'),
(17, '0015', 'Lucy', 'female', 'cat', '28kg ', '1', '2024-05-21', 'animals/0015.jpg', 'not adopted'),
(18, '0016', 'Daisy', 'female', 'cat', '4kg', '2', '2024-05-21', 'animals/0016.jpg', 'not adopted'),
(19, '0017', 'Ruby', 'female', 'cat', '6kg', '4', '2024-05-21', 'animals/0017.jpg', 'not adopted'),
(20, '0018', 'Willow', 'female', 'cat', '5kg', '3', '2024-05-22', 'animals/0018.jpg', 'not adopted'),
(21, '0020', 'Leo', 'male', 'dog', '30kg ', '4', '2024-05-23', 'animals/0020.jpg', 'not adopted');

-- --------------------------------------------------------

--
-- Table structure for table `association`
--

CREATE TABLE `association` (
  `id_asso` int(11) NOT NULL,
  `addr_asso` varchar(100) NOT NULL,
  `nom_asso` varchar(20) NOT NULL,
  `num_tele_asso` varchar(10) NOT NULL,
  `email_asso` varchar(100) NOT NULL,
  `mission_asso` varchar(255) NOT NULL,
  `site_asso` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `association`
--

INSERT INTO `association` (`id_asso`, `addr_asso`, `nom_asso`, `num_tele_asso`, `email_asso`, `mission_asso`, `site_asso`) VALUES
(1, 'Route Sidi Bouzid BP 63 Rue Sidi M\'Barek, Safi 46000', 'Helpa', '05246-6915', 'Helpa@gmail.com', 'find a  home to a furry friend in need', 'http://localhost/mini_projet/Home.html');

-- --------------------------------------------------------

--
-- Table structure for table `demander`
--

CREATE TABLE `demander` (
  `id_ad` int(11) NOT NULL,
  `id_an` int(11) NOT NULL,
  `etat_d_a` varchar(50) NOT NULL,
  `id_dm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `demander`
--

INSERT INTO `demander` (`id_ad`, `id_an`, `etat_d_a`, `id_dm`) VALUES
(15, 13, 'accepted', 22),
(16, 20, 'refused', 23),
(17, 21, 'pinned', 24),
(16, 20, 'pinned', 25),
(18, 19, 'pinned', 26),
(15, 17, 'accepted', 27),
(19, 9, 'accepted', 28),
(21, 6, 'accepted', 29),
(22, 16, 'accepted', 30),
(15, 4, 'accepted', 31);

-- --------------------------------------------------------

--
-- Table structure for table `donateur`
--

CREATE TABLE `donateur` (
  `id_don` bigint(20) NOT NULL,
  `nom_don` varchar(100) NOT NULL,
  `prenom_don` varchar(100) NOT NULL,
  `email_don` varchar(255) NOT NULL,
  `devise` varchar(20) NOT NULL,
  `nom_don_c` varchar(255) NOT NULL,
  `credit_c_n` varchar(255) NOT NULL,
  `exp_m` varchar(20) NOT NULL,
  `exp_y` varchar(10) NOT NULL,
  `code_v_c` varchar(10) NOT NULL,
  `freq` varchar(20) NOT NULL,
  `montant` varchar(100) DEFAULT NULL,
  `id_asso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donateur`
--

INSERT INTO `donateur` (`id_don`, `nom_don`, `prenom_don`, `email_don`, `devise`, `nom_don_c`, `credit_c_n`, `exp_m`, `exp_y`, `code_v_c`, `freq`, `montant`, `id_asso`) VALUES
(1, 'Ihssane', 'Nedjoaui', 'ihssane@gmail.com', 'USD', 'kkk', 'dkkkkd', 'ddd', 'ddd', '8765', 'OneTime', '20', 1),
(2, 'Ines', 'Nedjoaui', 'Ihssane5@gmail.com', 'MAD', 'IhssaneNedjaoui', '3456789876', '12', '25', '8765', 'OneTime', '100', 1),
(3, 'Ihssane', 'Nedjoaui', 'Ihssanenedjaoui5@gmail.com', 'MAD', 'IhssaneNedjaoui', '3456789876', '12', '25', '8765', 'OneTime', '100', 1),
(4, 'Ikrame', 'Nedjaoui', 'Ikrame5@gmail.com', 'MAD', 'Ikrame nedjaoui', '3456789876', '12', '25', '8765', 'OneTime', '100', 1),
(5, 'Ikrame', 'Nedjaoui', 'Ikrame5@gmail.com', 'MAD', 'Ikrame nedjaoui', '3456789876', '12', '25', '8765', 'OneTime', '100', 1),
(6, 'Meriame', 'Nedjaoui', 'Meriamenedjaoui@gmail.com', 'MAD', 'IhssaneNedjaoui', '3456789876', '12', '25', '8765', 'OneTime', '100', 1),
(7, 'Ikrame', 'Nedjaoui', 'Ihssanenedjaoui5@gmail.com', 'MAD', 'IhssaneNedjaoui', '3456789876', '12', '25', '8765', 'Monthly', '100', 1),
(8, 'Asmaa', 'Ajgagal', 'asma@gmail.com', 'MAD', 'asmaa', '3456789876', '12', '25', '123', 'OneTime', '100', 1),
(9, 'Ihssane', 'Nedjaoui', 'Ihssanenedjaoui5@gmail.com', 'MAD', 'IhssaneNedjaoui', '8766555Z', '12', '25', '654', 'OneTime', '100', 1),
(10, 'Ihssane', 'Nedjaoui', 'Ihssanenedjaoui5@gmail.com', 'MAD', 'IhssaneNedjaoui', '654332', '12', '25', '8765', 'OneTime', '100', 1),
(11, 'Ihssane', 'Nedjaoui', 'Ihssanenedjaoui5@gmail.com', 'MAD', 'IhssaneNedjaoui', '654332', '12', '25', '8765', 'OneTime', '100', 1),
(12, 'zakia', 'outlioua', 'zakia@gmail.com', 'USD', 'ZAKIA', '1234434', '02', '2033', '123', 'OneTime', '5000000', 1),
(13, 'Ihssane', 'Nedjoaui', 'Ihssanenedjaoui5@gmail.com', 'MAD', 'IhssaneNedjaoui', '3456789876', '12', '25', '654', 'OneTime', '100', 1),
(14, 'Ihssane', 'Nedjaoui', 'Ihssanenedjaoui5@gmail.com', 'MAD', 'IhssaneNedjaoui', '3456789876', '12', '25', '654', 'OneTime', '100', 1),
(15, 'Ihssane', 'Nedjaoui', 'Ihssanenedjaoui5@gmail.com', 'MAD', 'IhssaneNedjaoui', '3456789876', '12', '25', '654', 'OneTime', '100', 1),
(16, 'Mohammed', 'Quassemy', 'mohammed@gmail.com', 'USD', 'IhssaneNedjaoui', '3456789876', '12', '25', '123', 'OneTime', '100', 1);

-- --------------------------------------------------------

--
-- Table structure for table `membre`
--

CREATE TABLE `membre` (
  `id_m` int(11) NOT NULL,
  `nom_m` varchar(100) NOT NULL,
  `prenom_m` varchar(100) NOT NULL,
  `date_nai_m` date NOT NULL,
  `cin_m` varchar(50) NOT NULL,
  `num_tele_m` varchar(50) NOT NULL,
  `email_m` varchar(255) NOT NULL,
  `pass_m` varchar(100) NOT NULL,
  `addr_m` varchar(255) NOT NULL,
  `etat_soc_m` varchar(50) NOT NULL,
  `pro_m` varchar(100) NOT NULL,
  `q1_m` varchar(255) NOT NULL,
  `q2_m` varchar(255) NOT NULL,
  `q3_m` varchar(255) NOT NULL,
  `q4_m` varchar(255) NOT NULL,
  `q5_m` varchar(255) NOT NULL,
  `q6_m` varchar(255) NOT NULL,
  `q7_m` varchar(255) NOT NULL,
  `q8_m` varchar(255) NOT NULL,
  `etat_d_m` varchar(50) NOT NULL,
  `id_rdv` int(11) NOT NULL,
  `id_asso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `membre`
--

INSERT INTO `membre` (`id_m`, `nom_m`, `prenom_m`, `date_nai_m`, `cin_m`, `num_tele_m`, `email_m`, `pass_m`, `addr_m`, `etat_soc_m`, `pro_m`, `q1_m`, `q2_m`, `q3_m`, `q4_m`, `q5_m`, `q6_m`, `q7_m`, `q8_m`, `etat_d_m`, `id_rdv`, `id_asso`) VALUES
(10, 'Nedjaoui', 'Ihssane', '2003-10-12', 'HH83850', '0688062914', 'ihssanenedjaoui5@gmail.com', 'Ihssane123456789', '105 RUE FEE QU JERIFATE SAFI', 'single', 'Student', 'I love animals and i want to contribute in their help and well being', 'I want to give a hand and support the association work', 'working with teams and taking care of animals', 'no', '5 hours per week', 'as  part of a team', 'yes', 'yes i just want to be a part of the team', 'accepted', 70, 1),
(11, 'zagrahi', 'nouhaila', '2003-10-23', 'HH12345', '0656726894', 'nouhailazagrahi@gmail.com', 'Nouhaila123456789', '105 RUE FEE QU JERIFATE SAFI', 'Célibataire', 'étudiante', 'j\'aime les animaux t je veux contribuer à leur bien être', 'je veux appartenir à une communité qui supporte les animaux', 'le travail en équipe, une ésprit de discipline', 'non je n\'ai aucune limitation à prendre en considération', '5 heures par semaine', 'en équipe', 'oui le l\'accèpte', 'non', 'refused', 72, 1),
(12, 'Radi', 'oumaima', '2003-10-23', 'HH67589', '0688062914', 'Hossna@gmail.com', 'Hassna123456789', '105 RUE FEE QU JERIFATE SAFI', 'Marié(e)', 'comptable', 'j\'aime les animaux t je veux contribuer à leur bien être', 'je veux appartenir à une communité qui supporte les animaux', 'le travail en équipe, une ésprit de discipline', 'non je n\'ai aucune limitation à prendre en considération', '5 heures par semaine', 'en équipe', 'oui le l\'accèpte', 'non', 'accepted', 75, 1),
(13, 'Abuyaala', 'Yassine', '2024-05-23', 'HH67588', '0656726894', 'Yassina@gamil.com', 'Yassine123456789', '105 RUE FEE QU JERIFATE SAFI', 'single', 'Student', 'I love animals and i want to contribute in their help and well being', 'I want to give a hand and support the association work', 'working with teams and taking care of animals', 'no', '5 hours per week', 'as  part of a team', 'yes', 'no', 'pinned', 81, 1),
(14, 'Radi', 'Ali', '2024-05-23', 'HH98765', '0688062914', 'ihssanenedjaoui5@gmail.com', 'Ali123456789', '105 RUE FEE QU JERIFATE SAFI', 'single', 'Student', 'I love animals and i want to contribute in their help and well being', 'I want to give a hand and support the association work', 'working with teams and taking care of animals', 'no', '5 hours per week', 'as  part of a team', 'yes', 'no', 'pinned', 82, 1),
(15, 'Essalek', 'Kawtar ', '2024-05-23', 'HH142789', '0688062914', 'kawtar@gmail.com', 'Kawtar123456789', '105 RUE FEE QU JERIFATE SAFI', 'Célibataire', 'étudiante', 'j\'aime les animaux t je veux contribuer à leur bien être', 'je veux appartenir à une communité qui supporte les animaux', 'le travail en équipe, une ésprit de discipline', 'non je n\'ai aucune limitation à prendre en considération', '5 heures par semaine', 'en équipe', 'oui le l\'accèpte', 'non', 'pinned', 85, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rendez_vous`
--

CREATE TABLE `rendez_vous` (
  `id_rdv` int(11) NOT NULL,
  `date_rdv` date NOT NULL,
  `heure_rdv` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rendez_vous`
--

INSERT INTO `rendez_vous` (`id_rdv`, `date_rdv`, `heure_rdv`) VALUES
(8, '2024-03-22', '09:00:00'),
(9, '2024-04-17', '09:30:00'),
(10, '2024-04-04', '11:00:00'),
(16, '2024-04-03', '09:30:00'),
(17, '2024-04-05', '09:00:00'),
(18, '2024-04-04', '09:00:00'),
(21, '2024-05-09', '09:00:00'),
(22, '2024-05-07', '09:30:00'),
(23, '2024-05-07', '09:00:00'),
(24, '2024-05-07', '10:00:00'),
(25, '2024-05-07', '10:30:00'),
(26, '2024-05-07', '11:00:00'),
(27, '2024-05-07', '11:30:00'),
(28, '2024-05-07', '12:00:00'),
(29, '2024-05-31', '17:00:00'),
(30, '2024-05-17', '10:00:00'),
(31, '2024-05-09', '09:30:00'),
(32, '2024-05-09', '17:00:00'),
(33, '2024-05-10', '17:30:00'),
(46, '2024-05-27', '09:00:00'),
(49, '2024-05-25', '17:30:00'),
(50, '2024-05-25', '17:30:00'),
(51, '2024-05-25', '17:30:00'),
(52, '2024-05-25', '10:00:00'),
(53, '2024-05-25', '10:30:00'),
(54, '2024-05-25', '10:30:00'),
(55, '2024-05-25', '10:30:00'),
(56, '2024-05-25', '11:00:00'),
(57, '2024-05-25', '17:00:00'),
(58, '2024-05-25', '17:00:00'),
(59, '2024-05-25', '11:30:00'),
(60, '2024-05-24', '09:00:00'),
(61, '2024-05-23', '14:30:00'),
(62, '2024-05-23', '14:00:00'),
(63, '2024-05-23', '16:00:00'),
(64, '2024-05-25', '12:00:00'),
(69, '2024-05-23', '17:00:00'),
(70, '2024-05-23', '15:00:00'),
(71, '2024-05-30', '09:00:00'),
(72, '2024-05-31', '09:00:00'),
(73, '2024-05-31', '14:30:00'),
(74, '2024-06-01', '09:00:00'),
(75, '2024-06-02', '17:30:00'),
(76, '2024-05-23', '09:00:00'),
(77, '2024-05-23', '11:00:00'),
(78, '2024-05-23', '09:30:00'),
(79, '2024-05-23', '17:30:00'),
(80, '2024-05-23', '16:30:00'),
(81, '2024-05-26', '17:00:00'),
(82, '2024-05-30', '09:30:00'),
(83, '2024-05-30', '17:30:00'),
(84, '2024-06-06', '17:30:00'),
(85, '2024-06-04', '09:00:00'),
(86, '2024-05-24', '15:30:00'),
(87, '2024-05-24', '13:00:00'),
(88, '2024-05-24', '14:00:00'),
(89, '2024-05-24', '15:00:00'),
(90, '2024-05-25', '14:00:00'),
(91, '2024-05-25', '12:30:00'),
(92, '2024-07-19', '09:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indexes for table `adopteur`
--
ALTER TABLE `adopteur`
  ADD PRIMARY KEY (`id_ad`),
  ADD KEY `foreign_key4` (`id_rdv`),
  ADD KEY `foreign_key5` (`id_asso`);

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id_an`);

--
-- Indexes for table `association`
--
ALTER TABLE `association`
  ADD PRIMARY KEY (`id_asso`);

--
-- Indexes for table `demander`
--
ALTER TABLE `demander`
  ADD PRIMARY KEY (`id_dm`),
  ADD KEY `foreign_key6` (`id_ad`),
  ADD KEY `foreign_key7` (`id_an`);

--
-- Indexes for table `donateur`
--
ALTER TABLE `donateur`
  ADD PRIMARY KEY (`id_don`),
  ADD KEY `foreign_key1` (`id_asso`);

--
-- Indexes for table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id_m`),
  ADD KEY `foreign_key2` (`id_rdv`),
  ADD KEY `foreign_key3` (`id_asso`);

--
-- Indexes for table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  ADD PRIMARY KEY (`id_rdv`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adopteur`
--
ALTER TABLE `adopteur`
  MODIFY `id_ad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `animal`
--
ALTER TABLE `animal`
  MODIFY `id_an` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `association`
--
ALTER TABLE `association`
  MODIFY `id_asso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `demander`
--
ALTER TABLE `demander`
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `donateur`
--
ALTER TABLE `donateur`
  MODIFY `id_don` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `membre`
--
ALTER TABLE `membre`
  MODIFY `id_m` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  MODIFY `id_rdv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adopteur`
--
ALTER TABLE `adopteur`
  ADD CONSTRAINT `foreign_key4` FOREIGN KEY (`id_rdv`) REFERENCES `rendez_vous` (`id_rdv`),
  ADD CONSTRAINT `foreign_key5` FOREIGN KEY (`id_asso`) REFERENCES `association` (`id_asso`);

--
-- Constraints for table `demander`
--
ALTER TABLE `demander`
  ADD CONSTRAINT `foreign_key6` FOREIGN KEY (`id_ad`) REFERENCES `adopteur` (`id_ad`),
  ADD CONSTRAINT `foreign_key7` FOREIGN KEY (`id_an`) REFERENCES `animal` (`id_an`);

--
-- Constraints for table `donateur`
--
ALTER TABLE `donateur`
  ADD CONSTRAINT `foreign_key1` FOREIGN KEY (`id_asso`) REFERENCES `association` (`id_asso`);

--
-- Constraints for table `membre`
--
ALTER TABLE `membre`
  ADD CONSTRAINT `foreign_key2` FOREIGN KEY (`id_rdv`) REFERENCES `rendez_vous` (`id_rdv`),
  ADD CONSTRAINT `foreign_key3` FOREIGN KEY (`id_asso`) REFERENCES `association` (`id_asso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
