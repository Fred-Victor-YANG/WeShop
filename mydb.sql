-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 20 oct. 2020 à 11:45
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mydb`
--

-- --------------------------------------------------------

--
-- Structure de la table `adminlist`
--

CREATE TABLE `adminlist` (
  `id` int(6) UNSIGNED NOT NULL,
  `account` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `isOnline` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `adminlist`
--

INSERT INTO `adminlist` (`id`, `account`, `password`, `name`, `status`, `loginTime`, `isOnline`) VALUES
(2, 'Keze', '666666', '飞天猫', 1, '2020-09-24 15:19:43', 0),
(3, 'Zheyu', '666666', '大白杨', 1, '2020-10-06 15:17:58', 0),
(4, 'Xiaoyi', '666666', '纯月', 1, '2020-09-24 15:15:13', 0),
(5, 'Yunrui', '666666', '云瑞', 1, '2020-09-30 08:34:28', 0),
(6, 'jingai', '666666', '景爱', 1, '2020-09-30 08:34:34', 0),
(7, 'Siyu', '666666', '斯宇', 1, '2020-09-23 22:15:13', 0),
(42, 'superAdmin', '666666', '王哥', 1, '2020-10-12 12:42:54', 1),
(43, '123', '123', '123', 1, '2020-10-14 10:16:38', 1);

-- --------------------------------------------------------

--
-- Structure de la table `clientlist`
--

CREATE TABLE `clientlist` (
  `Id` int(11) NOT NULL,
  `societe` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `societeCn` varchar(80) CHARACTER SET utf8 DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `address` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `descriptionCn` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imageUrl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `regTime` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `clientlist`
--

INSERT INTO `clientlist` (`Id`, `societe`, `societeCn`, `status`, `address`, `description`, `descriptionCn`, `imageUrl`, `regTime`) VALUES
(1, 'Les Trois Royaumes', '诸葛江湖', 1, '14 Rue des Gayettes, Troyes123', 'Un logiciel efficace et sécurisé, simple à utiliser, grâce à ce logiciel, nous avons gagné plus de temps à fidéliser nos nombreux clients pour augmenter nos chiffres d’affaires. Le service client est également très bon. Je le recommande vivement!123', '软件非常好用而且安全，功能全面实用。多亏了这个软件，帮助我们轻松地留住客人，提高了我们的营业额。我们推荐大家使用。', 'https://i.loli.net/2020/10/08/W9rpoIK3PxF6zRw.png', '2020-10-09 14:21:48'),
(2, 'T’xuan', '糖轩', 1, '56 rue la Fayette 75009 Paris', 'Nous avons travaillé avec ce logiciel depuis le début. Nombreuses fonctions sont disponibles avec une interface propre. Les services après-vente sont impeccables. les personnels sont très aimables et toujours à notre disposition en cas de problème.', '我们从一开始就使用Weshop的软件。软件的功能非常多，使用也方便。Weshop售后服务也很周到，客服非常耐心，遇到问题总能帮我们第一时间解决。', 'https://i.loli.net/2020/10/08/f9aGZCiycHrteQY.jpg', '2020-10-09 14:22:09'),
(3, 'IYO EURL MOGADOR', 'IYO Mogador', 1, '19 rue de Mogador 75009 Paris', 'Logiciel avec utilisation flexible. L’accès aux chiffres d’affaires journaliers est facile. Les données sont présentées de façon ordonnée et claire, ce qui facilite la compréhension et la gestion de nos comptes. Abordable et vaut la peine d’être acheté.', '一个非常实用的软件，界面清晰简洁。查看数据简单方便，我们可以看到每日和每月营业额，方便比较业务的进展情况。价格实惠，值得购买。', 'https://i.loli.net/2020/10/08/7W2wpHmTnV5Qolk.jpg', '2020-10-09 14:22:37'),
(7, 'Les Pâtes Vivantes', '活着的面条', 1, '46 Rue du Faubourg Montmartre, 75009 Paris', 'Ce logiciel nous a permis de gagner beaucoup de temps lors de la prise des commandes. Avec ce logiciel, nous n’avons plus besoin d’écrire les commandes en plusieurs fois ni de faire des aller-retour vers la cuisine. C’est vraiment très pratique!', '软件在点单方面帮我们节省了很多时间。我们不需要手写订单，也不需要往厨房来回跑了。使用了一段时间下来，确实感觉非常实用。', 'https://i.loli.net/2020/10/08/GuweLI3xV6gPFY8.png', '2020-10-09 14:22:55'),
(39, 'Saveurs de Sichuan123', '川江号子', 1, '54 Rue du Faurbourg Montmartre, 75009 Paris', 'La caisse développé par la société WEHSOP est vraiment très pratique car elle me permet de suivre mes statistiques de vente en temps réel. En tant que commerçants nous sommes écoutés, nos remarques sont prises en compte. Nous sommes très heureux avec notre choix.', 'Weshop公司的收银机帮助了我们不少。随时随地都能查看账单，一目了然。经过简单的培训，使用起来就简单多了。我们对设备和软件都非常的满意。', 'https://i.loli.net/2020/10/08/CSwKkENfBDmqMzd.jpg', '2020-10-09 14:23:15'),
(44, 'Panasia123', 'Panasia', 1, '40 Boulevard Haussmann, 75008 Paris', 'Simple d’utilisation car intuitive, la solution de logiciel de caisse enregistreuse proposée par WEHSOP, me correspond parfaitement. Elle m’a offert un gain de temps considérable, que ce soit dans ma comptabilité, dans ma gestion des stocks.', 'Weshop给我们提供的收银系统非常适合我们，使用起来很方便。尤其在会计和库存管理方面，节省了我们很多时间。', 'https://i.loli.net/2020/10/08/IrVjf8Jq6taUT5e.png', '2020-10-09 14:23:32'),
(45, 'Dicoeur123', '晓春', 1, '45 Rue du Faubourg Montmartre, 75009 Paris', 'Les fonctionnalités de cette solution de caisse enregistreuse m’ont permis de la facilité de mon travail, interconnecté avec ma caisse enregistreuse, et la gestion de fidélité de mes clients et ils permettent de me consacrer plus pleinement à mon métier.', '这套收银系统的功能很实用，减轻了我们的工作量。顾客管理系统帮助我们轻松查看和管理客户信息，让我们用的方便又放心。', 'https://i.loli.net/2020/10/08/gGUyKaelRuoBXAb.png', '2020-10-09 14:23:47'),
(47, 'Sa Jiao', '撒椒女王', 1, '229 Rue du Faubourg Saint Martin 75010 Paris', 'Nos serveurs passent beaucoup moins de temps à s’occuper de faire les commandes sur place, livraison ou emporté, et cette caisse est facile à surveiller mes chiffres d’affaire, l’interface peut être compris sans problème.', '用了Weshop的设备后，在订单方面，无论是堂食、外卖还是打包都让我们变得更加高效了。使用起来非常容易上手，操作简单，还可以随时核对账单。', 'https://i.loli.net/2020/10/08/xSYozBylKWhDX5i.jpg', '2020-10-09 14:24:05'),
(48, '1', '2', 1, '3', '5', '', 'https://i.loli.net/2020/09/24/CQ1ThYE4Gzyt5NR.jpg', '2020-10-09 14:18:23');

-- --------------------------------------------------------

--
-- Structure de la table `devis`
--

CREATE TABLE `devis` (
  `id` int(6) UNSIGNED NOT NULL,
  `prinProduits` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `autreProduits` varchar(90) CHARACTER SET utf8 DEFAULT NULL,
  `societe` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `codePostale` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `addresse` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `messages` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `statut` tinyint(1) DEFAULT NULL,
  `remarkInfo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reg_date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `devis`
--

INSERT INTO `devis` (`id`, `prinProduits`, `autreProduits`, `societe`, `email`, `telephone`, `codePostale`, `addresse`, `messages`, `statut`, `remarkInfo`, `reg_date`) VALUES
(11, 'Caisse et logiciel', 'Smartphone, Imprimante, ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '', '10000', '14 Rue des Gayettes, Troyes', '你好啊', 0, '已通话，Devis要求用邮箱发送test', '2020-09-30'),
(15, 'Caisse et logiciel', 'Smartphone, Imprimante, ', '12345', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '你好', 0, 'Devis在文件夹，尚未发送', '2020-09-30'),
(18, 'Caisse et logiciel', 'Smartphone, Imprimante, Tiroir, Balance, ', 'Université de technologie', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '123123123', 0, '下周四来店里', '2020-09-30'),
(19, 'Caisse et logiciel', 'Smartphone, Imprimante, Tiroir, Balance, Scanneur, ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '123123', 1, '老客户，第二家店', '2020-09-30'),
(20, 'Caisse et logiciel', 'Smartphone Imprimante Tiroir Balance Scanneur ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '123123', 1, '正在考虑，下周打电话回访', '2020-09-30'),
(25, 'Tablette et logiciel', 'Smartphone  Imprimante  Tiroir  ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '123123', 1, NULL, '2020-09-24'),
(31, 'Tablette et logiciel', 'Smartphone  Imprimante  Tiroir  Balance  ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '123123', 1, NULL, '2020-09-30'),
(46, 'Caisse et logiciel', 'Smartphone  Imprimante  Tiroir  ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-25'),
(47, 'Caisse et logiciel', 'Smartphone  ', '123', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', 'hide test', 0, NULL, '2020-09-27'),
(48, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', 'show test', 0, NULL, '2020-09-27'),
(49, 'Caisse et logiciel', 'Smartphone  ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-27'),
(50, 'Caisse et logiciel', 'Smartphone  ', '1234', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-27'),
(51, 'Caisse et logiciel', 'Smartphone  Imprimante  ', '1234', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-27'),
(52, 'Caisse et logiciel', 'Smartphone  Imprimante  Tiroir  Balance  Scanneur  Ecran de client  Conseillez-moi  ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-27'),
(53, 'Caisse et logiciel', 'Smartphone  Imprimante  Tiroir  Balance  Scanneur  Ecran de client  Conseillez-moi  ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-27'),
(54, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-27'),
(55, 'Caisse et logiciel', 'Smartphone  Imprimante  Tiroir  ', '1234', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-27'),
(56, 'Caisse et logiciel', 'Smartphone  Imprimante  Tiroir  ', '1234', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, '你好', '2020-09-27'),
(57, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-27'),
(58, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-27'),
(59, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-27'),
(60, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-27'),
(61, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-27'),
(62, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-27'),
(63, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-27'),
(64, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-27'),
(65, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-27'),
(66, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-27'),
(67, 'Caisse et logiciel', 'Smartphone  Imprimante  Tiroir  Balance  ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-28'),
(68, 'Caisse et logiciel', 'Smartphone  Imprimante  Tiroir  ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-28'),
(69, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-28'),
(70, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-28'),
(71, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-28'),
(72, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-28'),
(73, 'Caisse et logiciel', 'Imprimante  Tiroir  ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-28'),
(74, 'Caisse et logiciel', 'Imprimante  Tiroir  ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-28'),
(75, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-28'),
(76, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-28'),
(77, 'Caisse et logiciel', 'Smartphone  Imprimante  Tiroir  Balance  Scanneur  Ecran de client  Conseillez-moi  ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-28'),
(78, 'Tablette et logiciel', 'Smartphone  Imprimante  Conseillez-moi  ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-28'),
(79, 'Caisse et logiciel', 'Smartphone  Imprimante  Tiroir  Balance  Scanneur  Ecran de client  Conseillez-moi  ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-28'),
(80, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-28'),
(81, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'Université de technologie de Troyes', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-28'),
(82, 'Caisse et logiciel', 'Smartphone  Imprimante  Tiroir  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-28'),
(83, 'Caisse et logiciel', 'Scanneur  Ecran de client  Conseillez-moi  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '123', 0, NULL, '2020-09-28'),
(84, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-28'),
(85, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-28'),
(86, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-28'),
(87, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-28'),
(88, 'Caisse et logiciel', 'Smartphone  Imprimante  Tiroir  Ecran de client  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-28'),
(89, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-28'),
(90, 'Caisse et logiciel', 'Smartphone  Imprimante  Tiroir  Balance  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '123', 0, NULL, '2020-09-28'),
(91, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-28'),
(92, 'Caisse et logiciel', 'Smartphone  Imprimante  Tiroir  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '333', 0, NULL, '2020-09-28'),
(93, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-28'),
(94, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-28'),
(98, 'Caisse et logiciel', 'Smartphone  Imprimante  Balance  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '321', 0, NULL, '2020-09-28'),
(99, 'Caisse et logiciel', 'Smartphone  Imprimante  Tiroir  Balance  Scanneur  Ecran de client  Conseillez-moi  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '123', 0, '已处理', '2020-09-28'),
(100, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 1, '刷新测试', '2020-09-28'),
(101, 'Caisse et logiciel', 'Smartphone  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 1, NULL, '2020-09-28'),
(102, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-28'),
(104, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', 'test', 0, NULL, '2020-09-28'),
(106, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '222', 1, NULL, '2020-09-28'),
(107, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-28'),
(108, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '123', 1, NULL, '2020-09-29'),
(109, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-30'),
(111, 'Caisse et logiciel', 'Smartphone  Imprimante  Tiroir  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '1970-01-01'),
(112, 'Tablette et logiciel', 'Smartphone  Imprimante  Balance  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-30'),
(113, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '尽快联系我', 0, NULL, '2020-09-30'),
(114, 'Caisse et logiciel', 'Smartphone  Imprimante  Tiroir  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '123', 0, NULL, '2020-09-30'),
(115, 'Caisse et logiciel', 'Smartphone  Imprimante  Tiroir  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '123', 0, NULL, '2020-09-30'),
(116, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-30'),
(117, 'Caisse et logiciel', 'Smartphone  Imprimante  ', '', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-30'),
(118, 'Caisse et logiciel', '', '', '', '', '', '', '', 0, NULL, '2020-09-30'),
(119, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-30'),
(120, 'Caisse et logiciel', 'Smartphone  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-30'),
(121, 'Caisse et logiciel', '', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-09-30'),
(122, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-10-01'),
(123, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-10-02'),
(124, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-10-02'),
(125, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-10-02'),
(126, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '123', 0, NULL, '2020-10-02'),
(127, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-10-02'),
(128, 'Caisse et logiciel', 'Smartphone  Scanneur  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-10-02'),
(129, 'Caisse et logiciel', 'Smartphone  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-10-02'),
(130, 'Caisse et logiciel', 'Smartphone  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-10-02'),
(131, 'Caisse et logiciel', 'Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-10-02'),
(132, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-10-02'),
(133, 'Caisse et logiciel', 'Balance  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-10-02'),
(134, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-10-02'),
(135, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 1, NULL, '2020-10-02'),
(136, 'Caisse et logiciel', 'Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 1, NULL, '2020-10-02'),
(137, 'Caisse et logiciel', 'Tiroir  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-10-02'),
(138, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-10-02'),
(139, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-10-02'),
(140, 'Caisse et logiciel', '', ' test', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-10-02'),
(142, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '123', 0, NULL, '2020-10-02'),
(143, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-10-02'),
(144, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-10-02'),
(147, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 1, NULL, '2020-10-02'),
(148, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 1, NULL, '2020-10-03'),
(149, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 1, NULL, '2020-10-03'),
(151, 'Caisse et logiciel', 'Smartphone  Imprimante  Tiroir  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '123', 1, NULL, '2020-10-03'),
(152, 'Tablette et logiciel', 'Smartphone  Imprimante  Tiroir  Balance  Scanneur  Ecran de client  Conseillez-moi  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '请尽快联系', 1, '第二家店<br>周四来店里', '2020-10-03'),
(153, '1', '1', '1', '1', '1', '1', '1', '1', 1, NULL, '2020-09-20'),
(154, '1', '1', '1', '1', '1', '1', '1', '1', 1, NULL, '2020-09-20'),
(156, 'Caisse et logiciel', '', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 1, NULL, '2020-10-05'),
(157, 'Caisse et logiciel', 'Smartphone  Imprimante  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-10-05'),
(158, 'Caisse et logiciel', 'Smartphone,  Imprimante,  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 1, NULL, '2020-10-05'),
(159, 'Caisse et logiciel', 'Smartphone,  Imprimante,  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 1, NULL, '2020-10-05'),
(160, 'Caisse et logiciel', 'Smartphone,  Imprimante,  ', ' test', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 1, NULL, '2020-10-05'),
(161, 'Caisse et logiciel', 'Imprimante,  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 1, '收到', '2020-10-05'),
(162, 'Caisse et logiciel', 'Smartphone,  Imprimante,  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', 'test', 1, '备注测试', '2020-10-05'),
(163, 'Caisse et logiciel', 'Smartphone,  Imprimante,  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '', 0, NULL, '2020-10-06'),
(164, 'Caisse et logiciel', 'Smartphone,  Imprimante,  ', 'test', 'test1@test.cn', 'test', 'test', 'test', 'test', 0, NULL, '2020-10-08'),
(165, 'Caisse et logiciel', 'Smartphone,  Imprimante,  ', 'UTT', 'keze.wei@utt.fr', '0766665876', '10000', '14 Rue des Gayettes, Troyes', '123', 0, NULL, '2020-10-09');

-- --------------------------------------------------------

--
-- Structure de la table `msg`
--

CREATE TABLE `msg` (
  `Id` int(11) NOT NULL,
  `socketID` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `msg` varchar(255) CHARACTER SET utf8 DEFAULT '',
  `time` timestamp NULL DEFAULT current_timestamp(),
  `others` varchar(255) CHARACTER SET utf8 DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `msg`
--

INSERT INTO `msg` (`Id`, `socketID`, `ip`, `msg`, `time`, `others`) VALUES
(24, 'u5f884227161a3', '192.168.1.100', '2222', '2020-10-15 12:36:02', 'msg online'),
(25, 'u5f88421d5c00b', '192.168.1.100', '5555', '2020-10-15 12:36:09', 'reply'),
(26, 'u5f884227161a3', '192.168.1.100', '666', '2020-10-15 12:36:13', 'msg online'),
(27, 'u5f8aaec675015', '192.168.1.100', '测试现在可以用了吗、', '2020-10-17 08:44:02', 'msg online'),
(28, 'u5f8aaec675015', '192.168.1.100', '您好现在应该可以了', '2020-10-17 08:44:10', 'reply'),
(29, 'u5f8aaec675015', '192.168.1.100', '为什么聊天记录没有重载？', '2020-10-17 08:44:30', 'msg online'),
(30, 'u5f8aaec675015', '192.168.1.100', '好像是ip问题，我帮您检查一下', '2020-10-17 08:44:41', 'reply'),
(31, 'u5f8ab44b9e40d', '192.168.1.100', '测试网页多开', '2020-10-17 09:07:30', 'msg online'),
(32, 'u5f8ab44b9e40d', '192.168.1.100', '我是第二个网页、', '2020-10-17 09:07:33', 'msg online'),
(33, 'u5f8ab3b100af6', '192.168.1.100', '你是第二个网页？', '2020-10-17 09:08:05', 'reply'),
(34, 'u5f8ab44b9e40d', '192.168.1.100', '你好', '2020-10-17 09:08:13', 'msg online'),
(35, 'u5f8ab545957fa', '192.168.1.100', '你好我是网页二', '2020-10-17 09:11:42', 'msg online'),
(36, 'u5f8ab545957fa', '192.168.1.100', '你好我看到了', '2020-10-17 09:11:52', 'reply'),
(37, 'u5f8ab545957fa', '192.168.1.100', '你好', '2020-10-17 09:43:50', 'msg online'),
(38, 'u5f8abcd59547e', '192.168.1.100', '你是网页二吗、', '2020-10-17 09:44:03', 'reply'),
(39, 'u5f8ab5401219f', '192.168.1.100', '你是网页2吗', '2020-10-17 09:44:16', 'reply'),
(40, 'u5f8ab545957fa', '192.168.1.100', '?', '2020-10-17 09:44:21', 'msg online'),
(41, 'u5f8abd53dc7e8', '192.168.1.100', 'woshi wnagyeyi ', '2020-10-17 09:46:03', 'msg online'),
(42, 'u5f8abd7305ceb', '192.168.1.100', '你是网页1？', '2020-10-17 09:46:38', 'reply'),
(43, 'u5f8abd9b8b7b0', '192.168.1.100', '2222', '2020-10-17 09:47:15', 'msg online'),
(44, 'u5f8abd9b8b7b0', '192.168.1.100', '222...', '2020-10-17 09:47:26', 'reply'),
(45, 'u5f8abd7305ceb', '192.168.1.100', '11111', '2020-10-17 09:49:07', 'msg online'),
(46, 'u5f8abd7305ceb', '192.168.1.100', '1', '2020-10-17 09:49:08', 'msg online'),
(47, 'u5f8abd7305ceb', '192.168.1.100', '1', '2020-10-17 09:49:08', 'msg online'),
(48, 'u5f8abd7305ceb', '192.168.1.100', '1', '2020-10-17 09:49:08', 'msg online'),
(49, 'u5f8abd7305ceb', '192.168.1.100', '11', '2020-10-17 09:49:09', 'msg online'),
(50, 'u5f8abd9b8b7b0', '192.168.1.100', '22222', '2020-10-17 09:49:13', 'msg online'),
(51, 'u5f8abe8c8c37c', '192.168.1.100', '我是网页2222', '2020-10-17 09:51:14', 'msg online'),
(52, 'u5f8abe8872598', '192.168.1.100', '网页111在这', '2020-10-17 09:51:21', 'msg online'),
(53, 'u5f8abe8872598', '192.168.1.100', '你好网页1', '2020-10-17 09:51:30', 'reply'),
(54, 'u5f8abe8c8c37c', '192.168.1.100', '你好网页2', '2020-10-17 09:51:37', 'reply'),
(55, 'u5f8abff84ae80', '192.168.1.100', '你好我是网页1', '2020-10-17 09:57:32', 'msg online'),
(56, 'u5f8abffdf15ff', '192.168.1.100', '你好我是网页2', '2020-10-17 09:57:40', 'msg online'),
(57, 'u5f8abff84ae80', '192.168.1.100', '年号111', '2020-10-17 09:57:46', 'reply'),
(58, 'u5f8abffdf15ff', '192.168.1.100', '你好222', '2020-10-17 09:57:50', 'reply'),
(59, 'u5f8abff84ae80', '192.168.1.100', '？', '2020-10-17 09:58:06', 'reply'),
(60, 'u5f8abff84ae80', '192.168.1.100', '还能回复对吧', '2020-10-17 09:59:56', 'reply'),
(61, 'u5f8abff84ae80', '192.168.1.100', '111', '2020-10-17 10:00:02', 'msg online'),
(62, 'u5f8abffdf15ff', '192.168.1.100', '222', '2020-10-17 10:00:05', 'msg online'),
(63, 'u5f8abffdf15ff', '192.168.1.100', '你好222', '2020-10-17 10:00:11', 'reply'),
(64, 'u5f8abff84ae80', '192.168.1.100', '你好', '2020-10-17 10:02:13', 'reply'),
(65, 'u5f8abff84ae80', '192.168.1.100', '111', '2020-10-17 10:02:17', 'msg online'),
(66, 'u5f8abffdf15ff', '192.168.1.100', '222', '2020-10-17 10:02:20', 'msg online'),
(67, 'u5f8abffdf15ff', '192.168.1.100', '222收到', '2020-10-17 10:02:27', 'reply'),
(68, 'u5f8abff84ae80', '192.168.1.100', '1', '2020-10-17 10:03:13', 'reply'),
(69, 'u5f8abff84ae80', '192.168.1.100', '1', '2020-10-17 10:03:13', 'reply'),
(70, 'u5f8abff84ae80', '192.168.1.100', '1', '2020-10-17 10:03:14', 'reply'),
(71, 'u5f8abff84ae80', '192.168.1.100', '11', '2020-10-17 10:03:14', 'reply'),
(72, 'u5f8abffdf15ff', '192.168.1.100', '2', '2020-10-17 10:03:18', 'reply'),
(73, 'u5f8abffdf15ff', '192.168.1.100', '222', '2020-10-17 10:03:19', 'reply'),
(74, 'u5f8abff84ae80', '192.168.1.100', '11', '2020-10-17 10:07:29', 'msg online'),
(75, 'u5f8abffdf15ff', '192.168.1.100', '22', '2020-10-17 10:07:32', 'msg online'),
(76, 'u5f8abff84ae80', '192.168.1.100', '11', '2020-10-17 10:07:38', 'reply'),
(77, 'u5f8abff84ae80', '192.168.1.100', '1好', '2020-10-17 10:09:27', 'reply'),
(78, 'u5f8abff84ae80', '192.168.1.100', '111', '2020-10-17 10:10:02', 'reply'),
(79, 'u5f8abffdf15ff', '192.168.1.100', '2122', '2020-10-17 10:10:06', 'reply'),
(80, 'u5f8abff84ae80', '192.168.1.100', '1212121', '2020-10-17 10:13:48', 'reply'),
(81, 'u5f8abffdf15ff', '192.168.1.100', '4545454', '2020-10-17 10:13:52', 'reply'),
(82, 'u5f8abff84ae80', '192.168.1.100', '11', '2020-10-17 10:13:58', 'msg online'),
(83, 'u5f8ac469f1044', '192.168.1.100', '12', '2020-10-17 10:16:29', 'reply'),
(84, 'u5f8ac46d39f13', '192.168.1.100', '4545', '2020-10-17 10:16:34', 'reply'),
(85, 'u5f8ac469f1044', '192.168.1.100', '1', '2020-10-17 10:18:48', 'reply'),
(86, 'u5f8ac469f1044', '192.168.1.100', '2', '2020-10-17 10:18:51', 'reply'),
(87, 'u5f8ac469f1044', '192.168.1.100', '3', '2020-10-17 10:18:51', 'reply'),
(88, 'u5f8ac46d39f13', '192.168.1.100', '4', '2020-10-17 10:18:54', 'reply'),
(89, 'u5f8ac46d39f13', '192.168.1.100', '5', '2020-10-17 10:18:54', 'reply'),
(90, 'u5f8ac46d39f13', '192.168.1.100', '6', '2020-10-17 10:18:55', 'reply'),
(91, 'u5f8ac469f1044', '192.168.1.100', '1', '2020-10-17 10:19:39', 'reply'),
(92, 'u5f8ac469f1044', '192.168.1.100', '2', '2020-10-17 10:19:40', 'reply'),
(93, 'u5f8ac469f1044', '192.168.1.100', '3', '2020-10-17 10:19:40', 'reply'),
(94, 'u5f8ac46d39f13', '192.168.1.100', '4', '2020-10-17 10:19:43', 'reply'),
(95, 'u5f8ac46d39f13', '192.168.1.100', '5', '2020-10-17 10:19:43', 'reply'),
(96, 'u5f8ac46d39f13', '192.168.1.100', '6', '2020-10-17 10:19:44', 'reply'),
(97, 'u5f8ac46d39f13', '192.168.1.100', '。', '2020-10-17 10:21:29', 'reply'),
(98, 'u5f8ac469f1044', '192.168.1.100', '？', '2020-10-17 10:21:37', 'reply'),
(99, 'u5f8ac5e4e6c3c', '192.168.1.100', '你好', '2020-10-17 10:22:40', 'msg online'),
(100, 'u5f8ac68314bf8', '192.168.1.100', '111', '2020-10-17 10:25:36', 'msg online'),
(101, 'u5f8ac68314bf8', '192.168.1.100', '你是bf8', '2020-10-17 10:25:47', 'reply'),
(102, 'u5f8ac696a4f94', '192.168.1.100', '另一个是f94', '2020-10-17 10:26:00', 'reply'),
(103, 'u5f8ac95853a0f', '192.168.1.100', '我是手机', '2020-10-17 10:37:45', 'msg online'),
(104, 'u5f8ac960efcbd', '192.168.1.100', '你好', '2020-10-17 10:37:56', 'reply'),
(105, 'u5f8ac93850346', '192.168.1.100', '你好', '2020-10-17 10:38:03', 'reply'),
(106, 'u5f8ac9f4e4287', '192.168.1.100', '手机来了', '2020-10-17 10:39:59', 'msg online'),
(107, 'u5f8ac9f4e4287', '192.168.1.100', '手机你好', '2020-10-17 10:40:09', 'reply'),
(108, 'u5f8ac9ef767ab', '192.168.1.100', '我是电脑', '2020-10-17 10:40:21', 'msg online'),
(109, 'u5f8ac9ef767ab', '192.168.1.100', '电脑你好、', '2020-10-17 10:40:28', 'reply'),
(110, 'u5f8acaa9379a4', '192.168.1.100', '手机你好', '2020-10-17 10:43:00', 'reply'),
(111, 'u5f8acaa526e36', '192.168.1.100', '电脑你好', '2020-10-17 10:43:17', 'reply'),
(112, 'u5f8acaa526e36', '192.168.1.100', '你好', '2020-10-17 10:43:27', 'msg online'),
(113, 'u5f8acaa526e36', '192.168.1.100', '电脑开始刷新吧', '2020-10-17 10:43:37', 'reply'),
(114, 'u5f8acae12616e', '192.168.1.100', '我是电脑，我刷新了', '2020-10-17 10:43:57', 'msg online'),
(115, 'u5f8acaa9379a4', '192.168.1.100', '我是手机还能通信嘛', '2020-10-17 10:44:47', 'msg online'),
(116, 'u5f8acaa9379a4', '192.168.1.100', '？', '2020-10-17 10:48:03', 'msg online'),
(117, 'u5f8ae636abfc4', '192.168.1.100', '你是第一个客户第一个网页', '2020-10-17 12:40:33', 'reply'),
(118, 'u5f8ae636abfc4', '192.168.1.100', '电脑 网页1 收到', '2020-10-17 12:40:48', 'msg online'),
(119, 'u5f8ae636abfc4', '192.168.1.100', '电脑1 网页1 准备刷新', '2020-10-17 12:40:58', 'msg online'),
(120, 'u5f8ae65e8a7ab', '192.168.1.100', '电脑1 网页1 刷新完毕', '2020-10-17 12:41:27', 'msg online'),
(121, 'u5f8ae65e8a7ab', '192.168.1.100', '收到电脑1 网页1消息', '2020-10-17 12:41:40', 'reply'),
(122, 'u5f8ae6926c8b5', '192.168.1.100', '我是电脑1 网页2', '2020-10-17 12:42:02', 'msg online'),
(123, 'u5f8ae6926c8b5', '192.168.1.100', '你好电脑1 网页2', '2020-10-17 12:42:11', 'reply'),
(124, 'u5f8ae65e8a7ab', '192.168.1.100', '电脑1 网页1 你还能收到消息吗', '2020-10-17 12:42:21', 'reply'),
(125, 'u5f8ae65e8a7ab', '192.168.1.100', '电脑1 网页1 收到', '2020-10-17 12:42:31', 'msg online'),
(126, 'u5f8ae65e8a7ab', '192.168.1.100', '电脑1 网页1 准备再次刷新页面', '2020-10-17 12:43:04', 'msg online'),
(127, 'u5f8ae6e125eef', '192.168.1.100', '电脑1 网页1 第二次刷新完毕', '2020-10-17 12:43:36', 'msg online'),
(128, 'u5f8ae6e125eef', '192.168.1.100', '你好电脑1 网页1 你的id正常刷新了', '2020-10-17 12:44:01', 'reply'),
(129, 'u5f8ae6926c8b5', '192.168.1.100', '我是电脑1 网页2 还能收到我的消息吗', '2020-10-17 12:44:22', 'msg online'),
(130, 'u5f8ae6926c8b5', '192.168.1.100', '收到电脑1 网页2的消息', '2020-10-17 12:44:36', 'reply'),
(131, 'u5f8ae6926c8b5', '192.168.1.100', '电脑1 网页2 准备刷新', '2020-10-17 12:44:47', 'msg online'),
(132, 'u5f8ae74240ba0', '192.168.1.100', '我是电脑1 网页2 我刷新完毕哦', '2020-10-17 12:45:13', 'msg online'),
(133, 'u5f8ae74240ba0', '192.168.1.100', '收到网页2 的刷新消息', '2020-10-17 12:45:26', 'reply'),
(134, 'u5f8ae7727ae05', '192.168.1.100', '你好网页3，尝试主动给你发消息', '2020-10-17 12:45:55', 'reply'),
(135, 'u5f8ae7727ae05', '192.168.1.100', '你好后台，我是网页3', '2020-10-17 12:46:09', 'msg online'),
(136, 'u5f8ae80485642', '192.168.1.100', '我是网页1，我准备关闭了', '2020-10-17 12:50:18', 'msg online'),
(137, 'u5f8ae7727ae05', '192.168.1.100', '我是网页3', '2020-10-17 12:51:06', 'msg online'),
(138, 'u5f8ae80485642', '192.168.1.100', '你好网页1 ，收到你的关闭请求', '2020-10-17 12:51:36', 'reply'),
(139, 'u5f8ae74240ba0', '192.168.1.100', '我是新的网页2', '2020-10-17 12:51:47', 'msg online'),
(140, 'u5f8ae7727ae05', '192.168.1.100', '我是网页3，你能看到我吗', '2020-10-17 12:52:22', 'msg online'),
(141, 'u5f8ae90d32d3b', '192.168.1.100', '我是333', '2020-10-17 12:52:38', 'msg online'),
(142, 'u5f8ae74240ba0', '192.168.1.100', '我是222', '2020-10-17 12:52:46', 'msg online'),
(143, 'u5f8ae6e125eef', '192.168.1.100', '你是谁', '2020-10-17 12:53:14', 'reply'),
(144, 'u5f8ae90d32d3b', '192.168.1.100', '3333', '2020-10-17 12:53:24', 'msg online'),
(145, 'u5f8ae9de1bac0', '192.168.1.100', '？？？', '2020-10-17 12:56:27', 'msg online'),
(146, 'u5f8aee186e766', '192.168.1.100', '我是客户', '2020-10-17 13:14:24', 'msg online');

-- --------------------------------------------------------

--
-- Structure de la table `productlist`
--

CREATE TABLE `productlist` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `titleCn` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `description` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `descriptionCn` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imageUrl` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `productlist`
--

INSERT INTO `productlist` (`id`, `title`, `titleCn`, `status`, `description`, `descriptionCn`, `imageUrl`, `reg_date`) VALUES
(2, 'Tablette', '平板收银机', 1, '· Sans ventilation, non bruyant et basse consommation <br><br>· Données 100% sécuritaire, 100% conservées <br><br>· Durable Ultralégère <br><br>· Prix très abordable <br><br>· Garantie jusqu’à illimité(selon le forfait)', '· 耐用，轻巧，低能耗<br><br>· 数据安全，防丢失<br><br>· 价格实惠<br><br>· 可永久保修(根据套餐)', 'https://i.loli.net/2020/10/05/NnbZKPMUHfCBv3a.png', '2020-10-09 13:35:31'),
(3, 'Caisse traditionnelle', '台式收银机', 1, '· Un écran et un PC réunis dans un seul appareil <br><br>· Adapté aux différentes activités commerciales<br><br>· Non bruyant et basse consommation <br><br>· Très bon rapport Qualité/Prix 1 ans de garantie', '· 适用于多种类型商铺<br><br>· 一体式电脑设计<br><br>· 无噪音，低能耗<br><br>· 一年保修期', 'https://i.loli.net/2020/10/05/CVkFLzscKGXT2l3.png', '2020-10-09 13:36:42'),
(4, 'Télécommande portable', '点单手机', 1, '· Connecté aux caisses enregistreuses<br><br>·  Économiser le temps de commande<br><br>· Prix très attractif 1 ans de garantie', '· 与收银机实时连接<br><br>· 节约点单时间<br><br>· 价格实惠<br><br>· 一年保修期', 'https://i.loli.net/2020/10/05/ImNOP9ETYUByk2L.png', '2020-10-09 13:38:41'),
(39, 'title', '标题', 1, 'Description', '描述', 'https://i.loli.net/2020/09/24/CQ1ThYE4Gzyt5NR.jpg', '2020-10-09 13:28:16'),
(40, '123', '321', 1, '234', '432', 'https://i.loli.net/2020/10/08/xSYozBylKWhDX5i.jpg', '2020-10-09 13:39:12');

-- --------------------------------------------------------

--
-- Structure de la table `wechatlist`
--

CREATE TABLE `wechatlist` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `titleCn` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descriptionCn` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `imageUrl` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `reg_time` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `wechatlist`
--

INSERT INTO `wechatlist` (`id`, `title`, `titleCn`, `status`, `description`, `descriptionCn`, `url`, `imageUrl`, `reg_time`) VALUES
(1, '推文修改,这里标题可以长一点，最好分两行..', NULL, 1, '这里是描述。这里是描述。这里是描述。.', NULL, 'http://www.baidu.com/', 'https://i.loli.net/2020/09/24/CQ1ThYE4Gzyt5NR.jpg', '2020-10-09'),
(2, '推文xg', NULL, 0, '这是一篇有关caisse系统操作介绍的推送', NULL, 'http://www.baidu.com/', 'https://i.loli.net/2020/09/24/MiEobleX9jtzGCF.jpg', '2020-09-24'),
(4, '推文', NULL, 0, '这里是描述。这里是描述。这里是描述。', NULL, 'http://www.baidu.com/', 'https://i.loli.net/2020/09/24/9a8GqrMBQWuVKI1.jpg', '2020-09-24'),
(27, '新增推送测试', NULL, 1, '新增推送测试', NULL, 'https://i.loli.net/2020/09/24/CQ1ThYE4Gzyt5NR.jpg', 'https://i.loli.net/2020/09/24/CQ1ThYE4Gzyt5NR.jpg', '2020-09-28'),
(28, 'date测试', NULL, 1, 'date测试', NULL, 'date测试', 'https://i.loli.net/2020/10/08/W9rpoIK3PxF6zRw.png', '2020-10-07'),
(32, 'enctype=\"multipart/form-data\"', NULL, 1, 'enctype=\"multipart/form-data\"', NULL, 'https://i.loli.net/2020/09/24/CQ1ThYE4Gzyt5NR.jpg', 'images/TX.jpg', '2020-10-02');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adminlist`
--
ALTER TABLE `adminlist`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `clientlist`
--
ALTER TABLE `clientlist`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `devis`
--
ALTER TABLE `devis`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `productlist`
--
ALTER TABLE `productlist`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `wechatlist`
--
ALTER TABLE `wechatlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adminlist`
--
ALTER TABLE `adminlist`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT pour la table `clientlist`
--
ALTER TABLE `clientlist`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `devis`
--
ALTER TABLE `devis`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT pour la table `msg`
--
ALTER TABLE `msg`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT pour la table `productlist`
--
ALTER TABLE `productlist`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `wechatlist`
--
ALTER TABLE `wechatlist`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
