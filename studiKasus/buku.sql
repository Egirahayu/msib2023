-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2023 at 07:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `nama_category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `nama_category`) VALUES
(1, 'One Piece'),
(2, 'Naruto Shippuden'),
(3, 'Jujutsu Kaisen'),
(4, 'Kimetsu No Yaiba'),
(5, 'Record of Ragnarok');

-- --------------------------------------------------------

--
-- Table structure for table `komik`
--

CREATE TABLE `komik` (
  `id` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `nama_komik` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `tahun` year(4) NOT NULL,
  `harga` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `penerbit_id` int(11) NOT NULL,
  `pengarang_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komik`
--

INSERT INTO `komik` (`id`, `img`, `nama_komik`, `deskripsi`, `tahun`, `harga`, `category_id`, `penerbit_id`, `pengarang_id`) VALUES
(1, 'Jujutsu Kaisen Volume 14.jpg', 'Jujutsu Kaisen Vol. 14', 'While the city of Shibuya is severely damaged by the brutal behavior of Sukusho, who has gained temporary freedom, Fushiguro, who was mortally wounded by a surprise attack by a curse master, decides to resort to the last resort. When he realized that Fushiguro had started the &quot;Ceremony of Training&quot;, he was ...!', 2021, 150000, 3, 1, 2),
(2, 'Jujutsu Kaisen Volume 15.jpg', 'Jujutsu Kaisen Vol. 15', 'Mass murder by Sukusho, the death of Kento Nanami ... - And even Kugizaki in the hands of Majin-! Just when the weight of his own sins exceeds the limits of his heart, that man rushes to the crisis of his best friend. What is the end point of the two of Tiger Staff and Majin, who curse each other?', 2021, 150000, 3, 1, 2),
(3, 'Jujutsu Kaisen Volume 16.jpg', 'Jujutsu Kaisen Vol. 16', 'Natsuyu takes Makoto into his hands and tells a part of his plan. As the sorcerers gather at the final stage of the Shibuya Incident, Sousou discovers the identity of the \"mastermind\" who parasitizes Natsuyu\'s corpse! The world will change suddenly in the ruin and chaos caused by the end of the incident.', 2021, 150000, 3, 1, 2),
(4, 'Jujutsu Kaisen Volume 17.jpg', 'Jujutsu Kaisen Vol. 17', 'The scene of the family of the present day remembered by the tiger staff that was defeated by the executioner\'s bones and was on the verge of death? ?? There was the former appearance of Norimichi Kamo. As the situation begins to move toward the pacification of the \"Death Cycle\" in which sorcerers kill each other, Maki goes to the Kakuin family, but ...!', 2021, 150000, 3, 1, 2),
(5, 'Jujutsu Kaisen Volume 18.jpg', 'Jujutsu Kaisen Vol. 18', 'In order to enlist the cooperation of the suspended third-year technical college student Wei Jinji, the \"Death Cycle\" pacification, Tiger Staff participates in a betting game in which the scales are torn and tries to negotiate directly. Fushiguro also infiltrates and heads to the base, but is hindered by the technique of another third-year student who acts with the scales!', 2021, 150000, 3, 1, 2),
(6, 'Jujutsu Kaisen Volume 19.jpg', 'Jujutsu Kaisen Vol. 19', 'In order to add a hole in the Death Cycle, Tiger Staff and Fushiguro set their sights on Hiromi Hisha, a swimmer with 100 points. However, when they enter the first barrier of Tokyo, they scatter. Each of them gets a collaborator and heads to Nichisha, but—!?', 2022, 150000, 3, 1, 2),
(7, 'Jujutsu Kaisen Volume 20.jpg', 'Jujutsu Kaisen Vol. 20', 'Fushiguro and Reggie were on the verge of being crushed to death by each other\'s techniques. Reggie moves to break the antagonism, and the battle to the death comes to an end! On the other hand, in the Sendai Boundary, Otoko breaks the four-way battle of the strongman, and it becomes a fierce battle with a past magician and a special grade spirit!', 2022, 150000, 3, 1, 2),
(8, 'Jujutsu Kaisen Volume 21.jpg', 'Jujutsu Kaisen Vol. 21', 'Scales and Panda go to Tokyo No. 2 Boundary aiming for Deer Shiun, who has a high score, but they are separated when they rush in, and the scales face Charles, a swimmer who wants to be a manga artist! On the other hand, the panda who unexpectedly encountered Lu Shiyun was cornered by an overwhelming difference in strength ...!', 2022, 150000, 3, 1, 2),
(9, 'Jujutsu Kaisen Volume 22.jpg', 'Jujutsu Kaisen Vol. 22', 'A mysterious ghost that suddenly flew to the Sakurajima Boundary! It was a person who turned into a curse after death, a person related to Maki ...! Maki and Noriki are driven by a curse that evolves at a tremendous speed from a fetus to an adult. There are more intruders there—!?', 2023, 150000, 3, 1, 2),
(10, 'Jujutsu Kaisen Volume 23.jpg', 'Jujutsu Kaisen Vol. 23', 'Sukusho reveals that he is the target of the \"angel\", \"Fallen Heaven\". Without grasping the true meaning of the tiger staff, further confusion will come to the death cycle due to the search for a plan in each country ...! - And the search arrives at the Xingxing Palace, where Tengen is hidden.', 2023, 150000, 3, 1, 2),
(11, 'One Piece Volume 98.jpg', 'One Piece Vol. 98', 'As the battle for Onigashima heats up, Kaido\'s daughter Yamato wants to fight with Luffy! On the other hand, Kaido reveals the whole story of the \"New Onigashima Plan\" and terrorizes the world with Mamu! A marine adventure romance around the \"one great hidden treasure\"!', 2021, 150000, 1, 1, 3),
(12, 'One Piece Volume 99.jpg', 'One Piece Vol. 99', 'Luffy, whose friends stop the fierce pursuit of the executives and aims for the rooftop, is finally under Kaido! The fierce battle between the actors gathered on the big stage was about to begin. Onigashima Battle Maximum Heating (Heat Up)! A marine adventure romance around the \"one great hidden treasure\"!', 2021, 150000, 1, 1, 3),
(13, 'One Piece Volume 100.jpg', 'One Piece Vol. 100', 'On the rooftop, where the main characters are gathered, Luffy and his friends challenge Kaido & Mum. Is there a way to win against the strongest alliance? What is the future that awaits you in a head-to-head extreme battle? Super earthquake on Onigashima! A marine adventure romance around the \"one great hidden treasure\"!', 2021, 150000, 1, 1, 3),
(14, 'One Piece Volume 101.jpg', 'One Piece Vol. 101', 'Friends who believe in the resurrection of Luffy, who does not give up on defeating Kaido, and wage a fierce battle with the executives! Meanwhile, on the rooftop of Onigashima, a parent-child confrontation between Yamato and Kaido was about to begin! A marine adventure romance around the \"one great hidden treasure\"!', 2021, 150000, 1, 1, 3),
(15, 'One Piece Volume 102.jpg', 'One Piece Vol. 102', 'Luffy, who has been resurrected, confronts Kaido again! What is the fate of the battle between the two men who greeted Tennozan? On the other hand, the time comes for the comrades who continue to fight fiercely with the executives in various places. Wano Kuni Hen Super Magnificent!! A marine adventure romance around the \"one great hidden treasure\"!', 2022, 150000, 1, 1, 3),
(16, 'One Piece Volume 103.jpg', 'One Piece Vol. 103', 'Around the time Sanji and Zoro defeated the two big signs, the battle between Luffy and Kaido intensified! On the other hand, Kid & Law, who confronts Mum, is engaged in an extreme battle. Can you defeat the two reigning Four Emperors? A marine adventure romance around the \"one great hidden treasure\"!', 2022, 150000, 1, 1, 3),
(17, 'One Piece Volume 104.jpg', 'One Piece Vol. 104', 'It\'s been 20 years since Kaido and Orochi\'s rule... Will you be able to liberate Wano Country, which has been going through a difficult time, and bring back everyone\'s smiles? Everything depends on Luffy\'s fist! Wano Kuni edition, transcendent climax (climax)! A marine adventure romance around the \"One Piece\"!', 2022, 150000, 1, 1, 3),
(18, 'One Piece Volume 105.jpg', 'One Piece Vol. 105', 'Luffy became the new Yonko! With the advent of a new era and the rapidly changing world situation, what kind of adventure awaits the group as they leave Wano Country? A new voyage begins! A marine adventure romance around the \"one great hidden treasure\"!', 2023, 150000, 1, 1, 3),
(19, 'One Piece Volume 106.jpg', 'One Piece Vol. 106', 'The Straw Hat Gang landed on Future Island. There is Dr. Vegapunk\'s laboratory, and Luffy\'s adventurous spirit is heightened by a number of unknown technologies! However, CP0 has come to eliminate Vegapunk! A marine adventure romance around the \"one great hidden treasure\"!', 2023, 150000, 1, 1, 3),
(20, 'One Piece Volume 107.jpg', 'One Piece Vol. 107', 'Vegapunk is targeted for his life by CP0 as a compensation for knowing too much history! He asks Luffy and the others for help and moves to escape the island together, but the main body goes missing. What the hell is going on on the island!? A marine adventure romance around the \"one great hidden treasure\"!', 2023, 150000, 1, 1, 3),
(21, 'Naruto Volume 63.jpg', 'Naruto Shippuden Vol. 63', 'Naruto and the others who grabbed the clue to the masked man\'s capture! When Kakashi discovers that the man\'s skills are the same as Kamui\'s, he is left with a feeling of uneasiness that cannot be wiped away. Meanwhile, Naruto\'s blow, believing in his friends and charging in, finally destroys the mask!', 2012, 150000, 2, 1, 1),
(22, 'Naruto Volume 64.jpg', 'Naruto Shippuden Vol. 64', 'Kakashi is upset that his former companion Obito was a masked man. However, Naruto\'s words make Kakashi stand up again! \"I\'ll never let you kill your friends!!\" Naruto and the others go on the offensive! But finally, the Ten Tails are back ...!', 2013, 150000, 2, 1, 1),
(23, 'Naruto Volume 65.jpg', 'Naruto Shippuden Vol. 65', 'As Naruto\'s battle intensified, Sasuke and the others landed in the village of Konohagakure. In order to find out the whole truth, Sasuke resurrects the successive Hokages with Orochimaru\'s Filthy Earth Tensei! What is the history of the village and shinobi told by the first Hokage, Pillarma...!?', 2013, 150000, 2, 1, 1),
(24, 'Naruto Volume 66.jpg', 'Naruto Shippuden Vol. 66', 'In order to protect his friends from the overwhelming power of Madara and the others, Naruto exerts the power of the Nine-Tails with all his might. However, the destructive power of the Ten Tails, which shakes heaven and earth, gradually hunts down the Shinobi Coalition Army. As the limit of the friends approaches, the strongest reinforcements are finally on the battlefield!', 2013, 150000, 2, 1, 1),
(25, 'Naruto Volume 67.jpg', 'Naruto Shippuden Vol. 67', 'Obito has transformed into the Ten Tails. The power of the tailed beast destroys the barrier and shows overwhelming power! In the midst of their inferiority, Naruto and Sasuke try to take advantage of the Hokage\'s Filthy Tensei abilities to get a clue to the counterattack!', 2013, 150000, 2, 1, 1),
(26, 'Naruto Volume 68.jpg', 'Naruto Shippuden Vol. 68', 'Naruto\'s thoughts held back the hearts of the shinobi who were about to break under Obito\'s power! On the battlefield, the entire army with the Five Shadows will gather their forces and confront the Divine Tree! On the other hand, Naruto and Sasuke superimpose their two powers to stop Obito from reading the Infinite Moon!', 2014, 150000, 2, 1, 1),
(27, 'Naruto Volume 69.jpg', 'Naruto Shippuden Vol. 69', 'Madara, who regained her body with the art of reincarnation! Naruto confronts the Tailed Beasts, but Madara retrieves the Reincarnation Eye from Shirazetsu. The Tailed Beast was captured by the Gaido Demon Statue that was brought back to him, and the Nine Beasts were taken from Naruto\'s body!', 2014, 150000, 2, 1, 1),
(28, 'Naruto Volume 70.jpg', 'Naruto Shippuden Vol. 70', 'In order to counter Madara, who has absorbed all the tailed beasts and gained the power of the Six Paths, Guy opens the last \"Death Gate\" of the Hachimon Ryoko camp! Will the blow that pierces your own nindo lead to Madara? Around that time, the dying Naruto met the Rokudo Sennin in his own spirit world!', 2014, 150000, 2, 1, 1),
(29, 'Naruto Volume 71.jpg', 'Naruto Shippuden Vol. 71', 'The Infinite Moon Chant was activated, and people were trapped in a dream world. Kaguya, who was resurrected by Black Zetsu, begins to move to unite his chakras! Naruto and Sasuke confront each other to seal Kaguya with the power entrusted to them by the Rokudou Sennin!', 2014, 150000, 2, 1, 1),
(30, 'Naruto Volume 72.jpg', 'Naruto Shippuden Vol. 72', 'He succeeds in sealing Kaguya, and as everything goes to its end, Sasuke rebels! Naruto and Sasuke oppose each other in order to pass their feelings that are incompatible with each other. The curtain of the all-out battle between the two heroes is now cut and dropped!', 2015, 150000, 2, 1, 1),
(31, 'KNY Volume 14.jpg', 'Kimetsu No Yaiba Vol. 14', 'Except for the main body of the demon Hantengu, which was divided by emotion, merges and attacks Tanjiro! It is said that the Hantengu will taunt the \"weak ones\", and Tanjiro, who is struggling, is outraged! On the other hand, Tokitoru of the Kasumi Pillar regains his memories of the past and confronts the Gyokuba. Then there is a change in Tokitoru?', 2019, 150000, 4, 1, 5),
(32, 'KNY Volume 15.jpg', 'Kimetsu No Yaiba Vol. 15', 'Tanjiro finally hunts down the main body of the demon Hantengu. However, as dawn approaches, there is a crisis in the body of the demon Nezuko! Tanjiro is worried about Nezuko\'s safety and hesitates to go and defeat the Hantengu. Will Tanjiro be able to defeat the Hantengu? And what is the safety of Nezuko?', 2019, 150000, 4, 1, 5),
(33, 'KNY Volume 16.jpg', 'Kimetsu No Yaiba Vol. 16', 'Tanjiro went to the rock pillar and screaming island in the pillar practice. After the rigorous training of being struck by a waterfall, carrying a log, and moving a rock, will Tanjiro be able to get the approval of Screaming Island? Behind the scenes, Misery tries to find out the whereabouts of Nezuko and the maternity house.', 2019, 150000, 4, 1, 5),
(34, 'KNY Volume 17.jpg', 'Kimetsu No Yaiba Vol. 17', 'The Demon Slayer Squad rushed into the Infinite Castle to avenge the misery. Shinobu, who has a fierce battle with Doma and Doma of the upper strings, is forced to struggle against Doma, who is ineffective with poison. Will you be able to avenge your sister\'s death...!? On the other hand, a demon stands in front of Zenitsu-!?', 2019, 150000, 4, 1, 5),
(35, 'KNY Volume 18.jpg', 'Kimetsu No Yaiba Vol. 18', 'Tanjiro and Tomioka confront the Upper String\'s San, Usagiza. The two of them are on the defensive against their overwhelming power, but in the midst of a fierce battle, Tanjiro reaches the state of the \"transparent world\" taught by his father! Will Tanjiro\'s sword really reach the Monkey Pit...!?', 2019, 150000, 4, 1, 5),
(36, 'KNY Volume 19.jpg', 'Kimetsu No Yaiba Vol. 19', 'The battle between Kanawu and Inosuke vs. Kamizuru no Ni and Doma is taken to the extreme! The two tremble with anger in the face of the demon who killed their relatives, but they struggle against it under the pressure of a number of powerful blood demon techniques. Will they be able to overturn their inaccessible inferiority and avenge themselves ...!', 2020, 150000, 4, 1, 5),
(37, 'KNY Volume 20.jpg', 'Kimetsu No Yaiba Vol. 20', 'The Rock Pillar Screaming Island and the Wind Pillar Immortal River that engage the Upper String\'s Ichi. In the midst of an increasingly intense battle, the two pillars appear bruises and fight in tandem, but they continue to be overwhelmed by their incredible strength. And Genya recovers by taking in a part of the upper string. Where will the fierce battle go?', 2020, 150000, 4, 1, 5),
(38, 'KNY Volume 21.jpg', 'Kimetsu No Yaiba Vol. 21', 'The fierce battle with Ichi of the upper string, finally the time of the finale! After a deadly battle, the Demon Slayer Squad won a painful victory, but the price was too great ... Furthermore, in the depths of the Infinite Castle, the progenitor of the demons, Oni Mai Tsuji Misery, begins to move...! At that time, Tanjiro was—!?', 2020, 150000, 4, 1, 5),
(39, 'KNY Volume 22.jpg', 'Kimetsu No Yaiba Vol. 22', 'With more than an hour left until dawn, the onslaught of misery intensifies. The demon slayer squadron bites all the remaining pillars, but can you reach the blade? And Tanjiro, who fell to a miserable blow ... Each of them will do their best, and the battle will go to the limit...!', 2020, 150000, 4, 1, 5),
(40, 'KNY Volume 23.jpg', 'Kimetsu No Yaiba Vol. 23', 'The battle between the demon progenitor, Oni Mai Tsuji Misery, and Tanjiro and the others is in its final phase...! The four kinds of drugs that Tamase administers to him weaken his misery and hunt him down. What is the fate of Tanjiro, Nezuko, and the Demon Slayer Squad? The long-standing struggle with demons is finally coming to an end!', 2020, 150000, 4, 1, 5),
(41, 'Record Of Ragnarok Volume 1.jpg', 'Record of Ragnarok Vol. 1', 'The Valkyrie, Brunhilde, has convinced the Gods to give Humanity a chance at redemption through combat in the Valhalla Arena. Seeking a quick end to the proceedings, the Gods present their first fighter – Thor, the Norse God of Thunder. Facing him is a warrior said to be the strongest in the history of mankind: the legendary general, Lü Bu!', 2018, 150000, 5, 2, 4),
(42, 'Record Of Ragnarok Volume 2.jpg', 'Record of Ragnarok Vol. 2', 'The initial expectation of an easy first win for the Gods in the Valhalla Arena has been shattered as the Human hero, Lü Bu (with some help from Brunhilde on the sly), proves to be a match for the mighty Thor. But can he stand up to Thor\'s most powerful attack? With the tournament going into the second round, a surprise fighter for the Gods decides to step into the ring. And his Human opponent? None other than the first man himself—Adam!', 2018, 150000, 5, 2, 4),
(43, 'Record Of Ragnarok Volume 3.jpg', 'Record of Ragnarok Vol. 3', 'With Humanity already down by one loss, the second round of the Ragnarok tournament is an unbelievable contest between Zeus, the father of all the Greek Gods, and Adam, the very first Human being! Up against the mighty Zeus, Adam may not look like much, but he has a few tricks hidden behind his fig leaf! Can he possibly take down the boss of Mount Olympus? And when the second round comes to its dramatic end, the roaring crowd is already looking forward to the next matchup Poseidon, versus Kojiro Sasaki!', 2019, 150000, 5, 2, 4),
(44, 'Record Of Ragnarok Volume 4.jpg', 'Record of Ragnarok Vol. 4', 'In the battle to decide the fate of Humanity, the Gods are up by two wins. Poseidon, the Greek God of the Seas, enters the arena looking to extend the lead even further. To the crowd\'s astonishment, the Human challenger Brunhilde sends to the field is Kojiro Sasaki. Can a fighter known for having never once won a single match also be Humanity\'s greatest swordsman? Or is there more to Kojiro Sasaki\'s reputation as history\'s biggest loser than anyone can imagine?', 2019, 150000, 5, 2, 4),
(45, 'Record Of Ragnarok Volume 5.jpg', 'Record of Ragnarok Vol. 5', 'Humanity needs to get a win on the board as Round Three really gets going. Brunhilde\'s dark horse, Kojiro Sasaki crosses blades with Poseidon in what is sure to be a legendary contest, and all of Humanity\'s hopes now lie on the edge of Kojiro\'s blade. Whether Kojiro wins or loses, Ragnarok will continue! Then in Round Four, the Gods decide to send in one of their best, the noble and honorable Heracles. But if the Gods have chosen their greatest hero to fight for them, Brunhilde has selected Humanity\'s worst villain to enter the arena...', 2019, 150000, 5, 2, 4),
(46, 'Record Of Ragnarok Volume 6.jpg', 'Record of Ragnarok Vol. 6', 'The dark and foggy alleys of London have become the arena for the next round of Ragnarok as the personification of Human malice, Jack the Ripper, faces off with Heracles. But Heracles was once a mortal – how was he elevated to Godhood, and why does he now fight for the Gods against Humanity? No-one can guess what the outcome of this match will be and some are even questioning who they\'re rooting for to win. With the survival of Humanity at stake, will Brunhilde\'s decision to send in Jack the Ripper backfire?', 2020, 150000, 5, 2, 4),
(47, 'Record Of Ragnarok Volume 7.jpg', 'Record of Ragnarok Vol. 7', 'Humanity\'s most notorious murderer, Jack the Ripper, has proven to be an unexpectedly clever and difficult opponent for the heroic Heracles. Their battle through the dark streets of 19th-century London takes more than a few surprising turns, until Jack actually manages to sever Heracles\' arm! The watching crowd is stunned and outraged—how can this be? Heracles realizes he really needs to pull out all the stops to win, but Brunhilde\'s twisted champion has more tricks up his sleeve...', 2020, 150000, 5, 2, 4),
(48, 'Record Of Ragnarok Volume 8.jpg', 'Record of Ragnarok Vol. 8', 'Round Four of Ragnarok has ended in a shocking win for Humanity, with Jack the Ripper standing victorious over the mighty but fallen Heracles. With the score now tied, the Gods are absolutely determined not to let Humanity get ahead. Raring to go since the start, Shiva, the Destroyer, finally gets his chance to enter the Valhalla Arena. With an opportunity to take the lead, Brunhilde calls upon the unbridled strength of the greatest (and horniest) sumo wrestler in history, Raiden Tameemon!', 2020, 150000, 5, 2, 4),
(49, 'Record Of Ragnarok Volume 9.jpg', 'Record of Ragnarok Vol. 9', 'In the Valhalla Arena, Raiden Tameemon stands ready to fight for Humanity after unleashing his superhuman muscles. Representing the Gods, Shiva the Destroyer is confident of his eventual victory. As the two are squaring off, Loki seeking the secret of Völundr, the power the Valkyries use to merge with the Human heroes\' weapons. What he finds is an insolent Buddha, who might know something about it. But getting answers may require an unsanctioned brawl between a rowdy group of Gods and some Human heroes!', 2020, 150000, 5, 2, 4),
(50, 'Record of Ragnarok Volume 10.jpg', 'Record of Ragnarok Vol. 10', 'Raiden Tameemon, the greatest sumo wrestler in history, faces Shiva, the God of Destruction! During his life, Raiden always had to pull his punches for fear of doing too much damage, so strong were his incredible muscles. Now in Round Five, he can finally unleash everything he has. He\'ll need to go all out to beat Shiva, who stands at the top of the Hindu Pantheon. It\'s an incredible matchup between two fighters whose only goal is to find an opponent worth giving everything they have!', 2021, 150000, 5, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE `penerbit` (
  `id` int(11) NOT NULL,
  `nama_penerbit` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`id`, `nama_penerbit`, `alamat`) VALUES
(1, 'Shueisha', 'Chiyoda, Tokyo'),
(2, 'Tokuma Shoten', 'Shinagawa, Tokyo');

-- --------------------------------------------------------

--
-- Table structure for table `pengarang`
--

CREATE TABLE `pengarang` (
  `id` int(11) NOT NULL,
  `nama_pengarang` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengarang`
--

INSERT INTO `pengarang` (`id`, `nama_pengarang`, `tgl_lahir`, `alamat`) VALUES
(1, 'Masashi Kishimoto', '1974-11-08', 'Okayama, Japan'),
(2, 'Gege Akutami', '1992-02-26', 'Iwate, Japan'),
(3, 'Eiichiro Oda', '1975-01-01', 'Kumamoto, Japan'),
(4, 'Shinya Umemura', '1967-04-10', 'Japan'),
(5, 'Koyoharu Gotouge', '1989-05-05', 'Fukuoka, Japan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(260) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$TCdlE0HZ2mnHa.jW1R5FKOkB.SVEqIK7cIF8zT5oIxvs3.WrIQuX6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komik`
--
ALTER TABLE `komik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FOREIGN` (`category_id`,`penerbit_id`,`pengarang_id`) USING BTREE,
  ADD KEY `pengarang_id` (`pengarang_id`),
  ADD KEY `penerbit_id` (`penerbit_id`);

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengarang`
--
ALTER TABLE `pengarang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `komik`
--
ALTER TABLE `komik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `penerbit`
--
ALTER TABLE `penerbit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengarang`
--
ALTER TABLE `pengarang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komik`
--
ALTER TABLE `komik`
  ADD CONSTRAINT `komik_ibfk_1` FOREIGN KEY (`pengarang_id`) REFERENCES `pengarang` (`id`),
  ADD CONSTRAINT `komik_ibfk_2` FOREIGN KEY (`penerbit_id`) REFERENCES `penerbit` (`id`),
  ADD CONSTRAINT `komik_ibfk_3` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
