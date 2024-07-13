-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 15 mai 2024 à 11:06
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `website`
--

-- --------------------------------------------------------

--
-- Structure de la table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `meta_titre` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `image_article` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `blogs`
--

INSERT INTO `blogs` (`id`, `titre`, `description`, `meta_titre`, `meta_description`, `tags`, `image_article`, `slug`, `created_at`, `updated_at`) VALUES
(3, 'article 1', '<p>ezfzefzfzef zefzfeezf</p>', 'meta article', 'dzgedezrtze zzerze ezrezr', 'tag 1,tag2,tag3', 'upload/blog/1798944322563265.png', 'article-1', '2024-05-13 11:29:57', '2024-05-13 11:29:57'),
(4, 'Avocat opposition jugement police Bruxelles', '<p>Bruxelles pourrait &ecirc;tre la premi&egrave;re ville &agrave; mettre en place une &laquo;police par procuration&raquo; controvers&eacute;e, une initiative qui verrait les policiers remplac&eacute;s par des agents &agrave; distance.</p>\r\n<p>En novembre de l&rsquo;ann&eacute;e derni&egrave;re, en r&eacute;action &agrave; la menace terroriste persistante, le maire de Bruxelles tenait &agrave; installer des forces de police dans tous les quartiers de la ville. L&rsquo;id&eacute;e n&rsquo;est pas nouvelle mais elle a &eacute;t&eacute; repouss&eacute;e pendant des ann&eacute;es pour des raisons politiques.</p>\r\n<p>Aujourd&rsquo;hui, cela pourrait changer en raison des prochaines &eacute;lections : Bruxelles est d&eacute;sormais une grande ville, avec des communaut&eacute;s de plus en plus diversifi&eacute;es et des taux de ch&ocirc;mage &eacute;lev&eacute;s qui alimentent la criminalit&eacute;. Le pays tout entier est &eacute;galement sous la menace d&rsquo;attaques terroristes.</p>\r\n<p>Cette initiative pr&eacute;voit de donner le pouvoir aux conseillers municipaux de choisir qui parmi eux deviendra commissaire de police par procuration &ndash; et d&rsquo;effectuer des t&acirc;ches de police sans &ecirc;tre physiquement pr&eacute;sent dans le quartier concern&eacute;</p>\r\n<p><a href=\"https://www.rechtbanken-tribunaux.be/fr/tribunal-de-police-de-bruxelles\">La police est cens&eacute;e utiliser son jugement pour pr&eacute;venir la violence et le crim</a>e. Cependant, certains policiers ont fait un usage excessif de la force contre des manifestants pacifiques. De plus, certains agents peuvent falsifier des rapports pour se faire bien voir. Cela peut conduire &agrave; des punitions injustifi&eacute;es ou &agrave; une promotion, alors qu&rsquo;elles devraient &ecirc;tre punies. Il s&rsquo;agit d&rsquo;un probl&egrave;me grave, et les gens ont le droit de remettre en question les actions de la police lorsqu&rsquo;elles se produisent. La situation est particuli&egrave;rement mauvaise &agrave; Bruxelles, qui a une histoire d&rsquo;oppression polici&egrave;re et d&rsquo;&eacute;meutes.</p>\r\n<p>Voici quelques r&eacute;flexions &agrave; ce sujet qui devraient aider dans cet effort.<br />L&rsquo;une des plus grandes &eacute;meutes polici&egrave;res s&rsquo;est produite &agrave; Bruxelles en 1985. La situation a culmin&eacute; lorsque des manifestants ont jet&eacute; des pierres sur des voitures de police. Certains des v&eacute;hicules ont ensuite percut&eacute; une foule de manifestants, blessant plusieurs personnes. Cet incident a attir&eacute; l&rsquo;attention du pays car il a &eacute;t&eacute; d&eacute;crit comme un soul&egrave;vement violent contre des manifestants pacifiques. Cependant, les facteurs sous-jacents de ces troubles &eacute;taient propres &agrave; Bruxelles; d&rsquo;autres villes n&rsquo;ont pas connu une telle violence de la part de civils pacifiques.<br />L&rsquo;oppression polici&egrave;re s&rsquo;est poursuivie &agrave; Bruxelles longtemps apr&egrave;s l&rsquo;&eacute;meute.</p>\r\n<p>En fait, un tribunal belge a conclu que la police de la ville avait manqu&eacute; de jugement face &agrave; une &eacute;meute. Le tribunal a conclu que certains flics avaient tir&eacute; des balles dans la foule sans discernement, blessant de nombreux autres passants. Malgr&eacute; cela, certaines personnes d&eacute;fendent les actions de la police pendant l&rsquo;&eacute;meute et d&eacute;fendent la fa&ccedil;on dont les flics ont g&eacute;r&eacute; les petites situations lors des manifestations par la suite. Bien qu&rsquo;il soit difficile de conna&icirc;tre la v&eacute;rit&eacute; sans avoir acc&egrave;s aux rapports officiels, d&eacute;fendre la brutalit&eacute; lors d&rsquo;une &eacute;meute semble difficile lorsque des civils sont maltrait&eacute;s de la m&ecirc;me mani&egrave;re par la police en dehors des &eacute;meutes.</p>\r\n<h2>Opposition jugement belgique</h2>\r\n<p>Dans certains cas, les tribunaux peuvent aider lorsque la police est inefficace ou incomp&eacute;tent. Par exemple, un tribunal autrichien a conclu qu&rsquo;un agent avait fait preuve d&rsquo;incomp&eacute;tence et de manque de professionnalisme lors d&rsquo;une proc&eacute;dure d&rsquo;arrestation. L&rsquo;agent a omis d&rsquo;effectuer plusieurs v&eacute;rifications de routine avant de tenter une arrestation&nbsp;; cela a conduit son suspect &agrave; s&rsquo;&eacute;chapper pendant qu&rsquo;il dormait. Bien que cette affaire ait impliqu&eacute; des policiers d&rsquo;un autre pays, elle offre de l&rsquo;espoir pour des situations comme celle d&eacute;crite &agrave; Bruxelles il y a 35 ans. Si les tribunaux commencent &agrave; prendre ce genre de situations au s&eacute;rieux, peut-&ecirc;tre que les choses s&rsquo;am&eacute;lioreront pour tout le monde, &agrave; la fois pour les opprim&eacute;s et les oppresseurs.<br />Beaucoup pensent que l&rsquo;oppression polici&egrave;re se produit assez souvent pour &ecirc;tre consid&eacute;r&eacute;e comme un probl&egrave;me national en Belgique.</p>\r\n<p>Certains incidents ont fait l&rsquo;actualit&eacute; internationale et ont entra&icirc;n&eacute; des changements dans la mani&egrave;re dont les autorit&eacute;s g&egrave;rent les manifestations &ndash; voire les &eacute;meutes &ndash; dans les rues de Bruxelles aujourd&rsquo;hui. Cependant, tout le monde n&rsquo;est pas d&rsquo;accord pour dire que l&rsquo;oppression polici&egrave;re bruxelloise est un probl&egrave;me r&eacute;el qui afflige quotidiennement les citoyens de la ville. M&ecirc;me si c&rsquo;est le cas, les tribunaux peuvent aider si n&eacute;cessaire, ce qui est particuli&egrave;rement important &eacute;tant donn&eacute; la fr&eacute;quence &agrave; laquelle l&rsquo;oppression polici&egrave;re se produit dans le monde.</p>', 'Avocat opposition', 'dfghdfg dghghggh', 'avocat,opposition', 'upload/blog/1798946568473639.jpg', 'avocat-opposition-jugement-police-bruxelles', '2024-05-13 12:05:39', '2024-05-13 12:05:39'),
(5, 'Avocat amende pénale Bruxelles', '<p>Bienvenue &agrave;&nbsp;<a href=\"../contact.html\">Cabinet d&rsquo;avocat Karim Elouahi Bruxelles</a>. Nous sommes sp&eacute;cialis&eacute;s en droit p&eacute;nal et d&eacute;fendons nos clients avec acharnement pour obtenir les meilleurs r&eacute;sultats possibles. Si vous &ecirc;tes confront&eacute; &agrave; une accusation, prenez rendez-vous sans tarder avec Maitre Karim Elouahi Avocat amende p&eacute;nale Bruxelles. Nous nous ferons un plaisir de vous d&eacute;fendre.</p>\r\n<p>Le Cabinet d&rsquo;avocat Karim Elouahi Bruxelles est heureux de vous informer qu&rsquo;il a obtenu une qualification en droit p&eacute;nal. Cela signifie que nous pouvons vous d&eacute;fendre encore mieux et que vous avez encore plus de chances de r&eacute;duire votre peine. Prenez rendez-vous avec un avocat exp&eacute;riment&eacute; et sp&eacute;cialis&eacute; en droit p&eacute;nal &nbsp;!</p>\r\n<h3>Avocats experts de la d&eacute;fense p&eacute;nale &agrave; Bruxelles</h3>\r\n<p>Des avocats sp&eacute;cialistes de la d&eacute;fense p&eacute;nale assistent les personnes accus&eacute;es d&rsquo;infractions p&eacute;nales &agrave; Bruxelles.<br />Ils aident les clients &agrave; obtenir le meilleur r&eacute;sultat possible pour leur cas,<br />ils fournissent donc une expertise, m&egrave;nent des entretiens et parlent au d&eacute;fendeur ainsi que collectent et analysent des preuves.<br />: expert en droit belge, amendes internationales avocat p&eacute;naliste bruxellois</p>\r\n<h4>Quel est le r&ocirc;le d&rsquo;un avocat p&eacute;naliste</h4>\r\n<p>Dans leur r&ocirc;le d&rsquo;avocats p&eacute;nalistes, les avocats belges travaillent pour le compte de leurs clients dans des conditions difficiles. Ils aident les accus&eacute;s &agrave; comprendre le syst&egrave;me judiciaire et &agrave; trouver des moyens de se d&eacute;fendre sans para&icirc;tre sur la d&eacute;fensive. Ils repr&eacute;sentent &eacute;galement leurs clients lors de proc&egrave;s civils et de proc&eacute;dures en droit de la famille. Comme toute industrie, les avocats de la d&eacute;fense p&eacute;nale peuvent &ecirc;tre divis&eacute;s en bons et mauvais selon qui ils repr&eacute;sentent. Cependant, tous les avocats p&eacute;nalistes sont essentiels &agrave; la soci&eacute;t&eacute; en g&eacute;n&eacute;ral et aux individus en particulier.</p>\r\n<p>Avoir un Avocat amende p&eacute;nale Bruxelles &agrave; vos c&ocirc;t&eacute;s peut grandement am&eacute;liorer votre situation juridique, quel que soit l&rsquo;aspect du syst&egrave;me juridique dans lequel vous &ecirc;tes impliqu&eacute;. Les avocats travaillent rapidement et efficacement afin qu&rsquo;ils puissent repr&eacute;senter efficacement leurs clients sans perdre de temps ou de ressources sur cas sans importance. Leur exp&eacute;rience leur permet de g&eacute;rer des situations difficiles tout en s&rsquo;assurant que leurs clients re&ccedil;oivent un r&eacute;sultat d&rsquo;essai de qualit&eacute; digne de leur confiance. Avoir un avocat &agrave; ses c&ocirc;t&eacute;s est un grand atout pour tout citoyen ; faites-vous une faveur et obtenez-en un aujourd&rsquo;hui&nbsp;</p>\r\n<h4>Quelle avocat choisir ?</h4>\r\n<figure class=\"wp-block-image size-large is-resized\"><img class=\"wp-image-88\" src=\"../wp-content/uploads/2022/09/avocat-remplissage-document-1024x683.jpg\" sizes=\"(max-width: 768px) 100vw, 768px\" srcset=\"https://www.avocat-droit-routier.be/blog/wp-content/uploads/2022/09/avocat-remplissage-document-1024x683.jpg 1024w, https://www.avocat-droit-routier.be/blog/wp-content/uploads/2022/09/avocat-remplissage-document-300x200.jpg 300w, https://www.avocat-droit-routier.be/blog/wp-content/uploads/2022/09/avocat-remplissage-document-768x512.jpg 768w, https://www.avocat-droit-routier.be/blog/wp-content/uploads/2022/09/avocat-remplissage-document-930x620.jpg 930w, https://www.avocat-droit-routier.be/blog/wp-content/uploads/2022/09/avocat-remplissage-document.jpg 1380w\" alt=\"avocat-remplissage-document cher Avocat amende p&eacute;nale Bruxelles\" width=\"768\" height=\"512\" loading=\"lazy\" /></figure>\r\n<p><strong><a href=\"https://www.fnuja.com/blog/Comment-choisir-le-bon-avocat-Dix-points-a-prendre-en-compte-lors-du-choix-d-un-avocat_a2.html\">Lors du choix d&rsquo;un avocat</a>,</strong>&nbsp;vous devez tenir compte de l&rsquo;exp&eacute;rience professionnelle de chacun ainsi que de la comp&eacute;titivit&eacute; de son domaine de pratique. Certains domaines de pratique &ndash; tels que<strong>&nbsp;la d&eacute;fense p&eacute;nale</strong>&nbsp;&ndash; sont tr&egrave;s comp&eacute;titifs car de nombreuses personnes diff&eacute;rentes finiront par avoir besoin d&rsquo;une aide juridique &agrave; un moment donn&eacute; de leur vie. D&rsquo;autres domaines moins comp&eacute;titifs comprennent&nbsp;<strong>le droit civil</strong>&nbsp;et la planification successorale; ceux-ci ne sont peut-&ecirc;tre pas aussi populaires parmi les nouveaux clients, mais constituent d&rsquo;excellents choix pour les clients exp&eacute;riment&eacute;s. Chaque type d&rsquo;avocat fonctionne mieux pour des types d&rsquo;affaires sp&eacute;cifiques.</p>\r\n<p>Vous devez faire vos recherches et trouver un&nbsp;<a href=\"../index.html\">avocat qui correspond exactement &agrave; vos besoins</a>&nbsp;! Il peut &ecirc;tre difficile de d&eacute;terminer le type d&rsquo;avocat dont vous avez besoin pour une situation donn&eacute;e, mais certaines g&eacute;n&eacute;ralisations s&rsquo;appliquent &agrave; la plupart des cas. Par exemple, de nombreux avocats ont besoin d&rsquo;un dipl&ocirc;me en droit pour pratiquer le droit; d&rsquo;autres ont une bonne exp&eacute;rience sans aucune formation coll&eacute;giale. Certains types d&rsquo;affaires n&eacute;cessitent une exp&eacute;rience judiciaire tandis que d&rsquo;autres n&eacute;cessitent des n&eacute;gociations avec des repr&eacute;sentants du gouvernement comme des agents fiscaux ou des agents d&rsquo;assurance. Il n&rsquo;y a pas une seule bonne r&eacute;ponse pour d&eacute;cider du type d&rsquo;avocat dont vous avez besoin pour votre cas ; au lieu de cela, la recherche et la pr&eacute;paration vous aideront &agrave; prendre des d&eacute;cisions &eacute;clair&eacute;es&nbsp;</p>', 'dsdt tgretert', 'erer erterter erter', 'hele ,wallah', 'upload/blog/1798946667137680.jpg', 'avocat-amende-penale-bruxelles', '2024-05-13 12:07:13', '2024-05-13 12:07:13'),
(6, 'Avocat jugement par défaut Bruxelles', '<p class=\"has-text-align-left\"><a href=\"https://goo.gl/maps/Da6knrmqhESVugA29\">jugement par d&eacute;faut&nbsp;Bruxelles</a>&nbsp;Ces avocats se portent garant de vous offrir: Une communication claire et ouverte Des conseils juridiques bas&eacute;s sur des ann&eacute;es d&rsquo;exp&eacute;rience dans le domaine juridique en question Une attitude ax&eacute;e sur la recherche de solutions Une implication personnelle dans votre dossier Des r&eacute;mun&eacute;rations transparentes.</p>\r\n<p>Ce cabinet d&rsquo;avocats garantit une communication claire et ouverte avec un conseil juridique bas&eacute; sur des ann&eacute;es d&rsquo;exp&eacute;rience dans le domaine. The Attitude se concentre sur la recherche d&rsquo;une solution &agrave; votre probl&egrave;me et une r&eacute;mun&eacute;ration transparente</p>\r\n<p class=\"has-text-align-left\">La communication est un aspect essentiel de toute pratique juridique. Chaque avocat s&rsquo;en occupe en utilisant le langage pour communiquer efficacement avec toutes les parties impliqu&eacute;es dans une affaire. Par exemple, les avocats utilisent le langage pour communiquer efficacement avec leurs clients. Pour ce faire, ils utilisent un langage formel pour exprimer clairement et ouvertement leurs id&eacute;es &agrave; leurs clients. De plus, les avocats utilisent le langage pour communiquer efficacement avec le tribunal. Pour ce faire, ils utilisent un langage formel pour expliquer clairement et ouvertement leurs id&eacute;es et les raisons de prendre certaines mesures dans les affaires judiciaires aux juges qui supervisent leurs affaires. De plus,<a href=\"https://www.avocats.be/node/19?search=Ma%20tre%20El%20Ouahi%20Karim&amp;barreau=&amp;matter=&amp;help=&amp;LawyerId=196ee98b-3988-4381-910f-ed4a45735528\">&nbsp;les avocats&nbsp;</a>utilisent le langage pour communiquer efficacement avec leurs clients. Ils le font en utilisant un langage informel lorsqu&rsquo;ils parlent avec leurs clients afin que les clients puissent facilement les comprendre.</p>', 'zert eter ert', 'er ttert retertert', 'anisco', 'upload/blog/1798946741877574.png', 'avocat-jugement-par-defaut-bruxelles', '2024-05-13 12:08:24', '2024-05-13 12:08:24');

-- --------------------------------------------------------

--
-- Structure de la table `domaine_interventions`
--

CREATE TABLE `domaine_interventions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `meta_titre` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image_intervention` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `domaine_interventions`
--

INSERT INTO `domaine_interventions` (`id`, `titre`, `description`, `meta_titre`, `meta_description`, `created_at`, `updated_at`, `image_intervention`, `slug`) VALUES
(5, 'jkhgj kgkhg h', '<p>vvjvjhj gfjkgjh hgghjgh</p>', 'chjcghchg hgghgh gfgvf', 'vjvjvhj jhbh', '2024-05-10 07:17:29', '2024-05-10 07:17:29', 'upload/intervention/1798656647482992.jpg', 'jkhgj-kgkhg-h'),
(6, 'zezer ezerezr', '<p>ezrezrerezrezrezr</p>', 'comment ca va', 'ezrezrezrezr', '2024-05-10 07:56:13', '2024-05-11 15:03:10', 'upload/intervention/1798776542788023.png', 'zezer-ezerezr');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `infraction_codes`
--

CREATE TABLE `infraction_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `meta_titre` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `image_infraction` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `infraction_codes`
--

INSERT INTO `infraction_codes` (`id`, `titre`, `description`, `meta_titre`, `meta_description`, `image_infraction`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'infraction 123', '<p>zefzefzefefzef</p>', 'zerfzer zerezr', 'zerzerez zerzerer', 'upload/infraction/1798685064039528.png', 'infraction-123', '2024-05-10 14:49:08', '2024-05-10 15:06:52'),
(2, 'hele hele', '<p>retertre ertertertert</p>', 'rtret erter t', 'retret ertretre ret', 'upload/infraction/1798686211588823.png', 'hele-hele', '2024-05-10 15:07:23', '2024-05-11 14:56:37'),
(3, 'infractionet', '<p>zdf zdf zd fd fdf sd f</p>', 'dfzd zfzeezr', 'ze rzzerzerzer', NULL, 'infractionet', '2024-05-10 15:11:08', '2024-05-10 15:11:08'),
(4, 'tik tak', '<p>sdfgdf dfdf</p>', 'dd zzer', 'zerzer zerzer', 'upload/infraction/1798777211261075.png', 'tik-tak', '2024-05-11 15:04:55', '2024-05-11 15:13:47');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_05_03_165127_create_domaine_interventions_table', 2),
(6, '2024_05_06_115805_image_intervention', 2),
(7, '2024_05_08_112152_add_slug_to_domaine_interventions', 2),
(8, '2024_05_10_160230_create_infraction_codes_table', 3),
(9, '2024_05_13_085639_create_blogs_table', 4);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('wadii.bounenni@gmail.com', '$2y$12$U.O.7np1iQzOcfBwfJkoy.S1TrNcj7ykPKXCNu6/PoAUAFcSQ8.Te', '2024-05-01 09:39:33');

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `profile_image`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'wadii', '202405011915oscar-nord-GwQtWcRZpgA-unsplash.jpg', 'wadii.bounenni@gmail.com', '2024-04-30 08:34:13', '$2y$12$Rlj28dddxwVVf7Qaa4gzQ.zCZ1fHxximrTF90Cvgz3BHEADWOHRJi', 'zwNtqdERIfT5kCix2n4pL4f68rPOLzuhLBKRRrLdcRkNdbyZw8NVbNFRwTlQ', '2024-04-29 10:05:56', '2024-05-02 15:49:59'),
(2, 'qsssqdf', NULL, 'sdffdds@dsfsdds.com', NULL, '$2y$12$vHez/WXsTU4hgFY1CCKR4egjkYXwcU3YXg39UhmIuEYl8oJeBDn8y', NULL, '2024-04-29 13:54:41', '2024-04-29 13:54:41'),
(3, 'dsqsdqs sdqsdqd', NULL, 'sqdqsd@sqdsqd.com', NULL, '$2y$12$d5ABGzgfa0kpCQ5AIvLn/OSrVUHGqeOavIOuGPvAMtyoFpTu7xoNW', NULL, '2024-04-29 14:29:23', '2024-04-29 14:29:23'),
(4, 'waddi1', NULL, 'wadii@gmail.com', '2024-04-30 08:32:06', '$2y$12$Jn.hcl5951hX8hQMBr.dJeBtJpJbjaZRvA4Iz1CXou/ULj.t/xJAO', NULL, '2024-04-30 08:26:22', '2024-04-30 08:32:06'),
(5, 'dfgdfgdfg fegfef', NULL, 'fgdfgfgdf@sdgsd.com', '2024-05-01 06:42:07', '$2y$12$/yuPRjW8j6XxybPAlQzkUORnWjm.IOsRljeHCKq14O.WH.LcLXMLi', NULL, '2024-05-01 06:41:30', '2024-05-01 06:42:07'),
(6, 'Doudi65', '202405011906alex-cdNn2RA0ld8-unsplash.jpg', 'doudi11@gmail.com', '2024-05-01 07:56:08', '$2y$12$72tRSojtc6Yb0tPKyAITNeAsxV5bvJGClRdXBOTRHgViH1Hr/1iai', NULL, '2024-05-01 07:55:52', '2024-05-02 15:21:03'),
(7, 'test', '202405011931background.jpg', 'test@gmail.com', '2024-05-01 17:21:55', '$2y$12$f48K21iHRHR85oaLJVJ5x.wwOvi/FtPkT3QOHb7v3I1XkEY7p.zxK', NULL, '2024-05-01 17:21:31', '2024-05-01 17:31:03');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`);

--
-- Index pour la table `domaine_interventions`
--
ALTER TABLE `domaine_interventions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `domaine_interventions_slug_unique` (`slug`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `infraction_codes`
--
ALTER TABLE `infraction_codes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `infraction_codes_slug_unique` (`slug`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `domaine_interventions`
--
ALTER TABLE `domaine_interventions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `infraction_codes`
--
ALTER TABLE `infraction_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
