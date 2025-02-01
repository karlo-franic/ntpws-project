-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Feb 01, 2025 at 08:30 PM
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
-- Database: `ntpws_projekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date_created` datetime DEFAULT current_timestamp(),
  `archive` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `picture`, `text`, `date_created`, `archive`) VALUES
(1, '1940s', '1940s.jpg', 'As had happened 25 years previously, the outbreak of the Second World War brought a halt to the Football League and FA Cup competitions. \r\nBoth tournaments were cancelled early in the 1939/40 season, with West Ham United’s Second Division campaign ended at the start of September, just three games in. Six weeks later, a regional competition began, with the Hammers in League South alongside nine other London and South Coast clubs.\r\nWith uncertainty due to the escalation of hostilities and many players unavailable, the season was split into two parts. The Irons did well in both, finishing second in League A, which ended in February 1940, and League C, which ran until June 1940. A knockout competition was also held, the Football League War Cup, and again Charlie Paynter’s squad showed up positively, defeating Chelsea, Leicester City, Huddersfield Town and Birmingham to set up a semi-final with Fulham. A thrilling 4-3 win saw the Hammers reach the final, where they would face Blackburn Rovers at Wembley Stadium on 8 June 1940.\r\nThere, in front of 42,399 brave supporters, who braved the threat of a Nazi air raid, Sam Small scored the only goal of the game to secure a welcome piece of silverware and boost the morale of east Londoners who had already been targeted by the Luftwaffe. It was an historic moment for the Hammers, who won at what had become the national stadium for the first time and collected their first piece of silverware since lifting the London Challenge Cup a decade before.\r\nThose bombing raids would increase hugely in September of the same year, when the eight-month long Blitz began. As had occurred during the First World War, West Ham players had signed-up to join the war effort. Among those who did so was Scottish goalkeeper Norman Corbett, who had made his first-team debut in a Second Division win over Sheffield United in May 1937 and totalled 42 appearances before the outbreak of the Second World War.', '2025-01-19 22:17:28', 0),
(2, '1950s', '1950s.jpg', 'For West Ham United, the 1950s was the decade when the world-famous ‘Academy of Football’ truly came into being. The process of identifying promising young players and developing them into ‘not only good footballers, but good men’ began under the management of Ted Fenton. A wing-half who played for the Club between 1932 and 1946, Fenton became assistant to Charlie Paynter in 1948 before taking charge himself two years later. Born and raised in Forest Gate, Fenton joined West Ham as a schoolboy before making his first-team debut at 17 in 1932. He went on to make 383 appearances, including War-time matches, scoring 63 goals. Having come through the system himself, Fenton saw the benefit of breeding his own players, \r\nboth on the pitch and financially, and set putting together a team of home-grown youngsters. The 1950s saw the likes of Bobby Moore, Geoff Hurst, Ken Brown, Malcolm Musgrove, Ronnie Boyce and Martin Peters recruited by Fenton and his staff, with many playing a central role to West Ham’s outstanding success during the following decade. The home-produced talent was supplemented by the scouting and signing of able young players from elsewhere, including Irishmen Noel Cantwell, Tommy Moroney and Frank O’Farrell, Scotsmen John Dick and Jimmy Andrews, Kent-born Malcolm Allison, and north Essex-born pair Vic Keeble and John Bond. The players embraced Fenton’s idea that they should spend time together off the pitch, discussing their footballing philosophies, tactics and adopting nutritional diets to improve their level of performance. Fenton also introduced continental ideas taken from, among others, the outstanding Hungary team of the 1950s, revamping training methods and encouraging his players to study coaching method themselves, often during afternoon sessions at Café Cassettari on the nearby Barking Road. These innovative concepts combined to produce a new approach that came to be known as ‘The West Ham Way’.', '2025-01-19 22:30:46', 0),
(3, '1960s', '1960s.jpg', 'If the Academy of Football was born in the 1950s, then the 1960s was the decade during which it came of age. The most-successful period in West Ham United’s history saw the Club win the FA Cup, the European Cup Winners’ Cup and, so say many, the FIFA World Cup. While West Ham never came close to winning the Football League title, the team and its visionary managers, Ted Fenton and then Ron Greenwood, earned rave reviews at home and abroad for their innovative approach to the beautiful game. On their day, West Ham were capable of beating anyone, as was evidenced by the series of eye-catching victories they achieved over England’s top sides. From front to back, back to front, the Hammers were blessed with elegant ball-players who could tear any opponent apart. The majority of those players honed their skills on the green fields of Little Heath and Chadwell Heath, home-grown heroes such as Bobby Moore, Geoff Hurst, Martin Peters, Ronnie Boyce, Ken Brown, John Sissons, Jack Burkett, Eddie Bovington and Brian Dear. When those Academy combined with the likes of goalkeeper Jim Standen and forwards Johnny Byrne and Alan Sealey, the Hammers could play football of a style rarely seen and rarely matched, on these shores, at least. West Ham’s first major trophy arrived in 1964, when Greenwood guided his side through a tricky FA Cup run to a Wembley showdown with Second Division Preston North End. As was the nature of The West Ham Way, it came as no surprise that the final itself was a rollercoaster affair settled 3-2 in the Hammers’ favour by Boyce’s late header.', '2025-01-19 22:33:14', 0),
(12, '1970s', 'image_679e44c1dec24.jpg', 'Two goals from  Alan Taylor (centre) secured the Club\'s second FA Cup triumph in 1975\r\n\r\nHaving broken their major trophy duck in dramatic fashion during the 1960s, West Ham United continued their success in the next decade.\r\n\r\nWhile there was a changing of the guard player-wise, with Martin Peters, Geoff Hurst and finally Bobby Moore all departing during the first half of the 1970s, a new generation of stars did their very best to emulate their illustrious predecessors.\r\n\r\nBilly Bonds, Trevor Brooking, Frank Lampard, Clyde Best, Pat Holland and John McDowell had all made their debuts in the late 1960s, but came of age during the 1970s, while the likes of Tommy Taylor, Billy Jennings, Alan Taylor, Graham Paddon and Bryan ‘Pop’ Robson all played influential roles.\r\n\r\nDespite the undoubted talent in the West Ham squad, the decade did not start particularly well for the Hammers, who diced with relegation from the First Division in both 1969/70 and 1970/71.\r\n\r\nThe signing of Robson helped West Ham enjoy a more productive 1972/73 season, with the Sunderland-born striker bagging 28 league goals as Ron Greenwood’s side matched the Club’s record-high finish of sixth.\r\n\r\nThe following year, 1974, saw two Hammers icons depart the roles that had etched their places in West Ham history – Moore joined Fulham, while Greenwood moved upstairs to take on a new role as general manager, with John Lyall taking over as first-team manager.\r\n\r\nAn emotional occasion was settled 2-0 in the Hammers’ favour by two goals from unheralded 21-year-old centre forward Taylor\r\n\r\nFrank Lampard captained the Hammers in the 1975 Anglo-Italian Cup final defeat by Fiorentina\r\nMoore’s departure after 16 seasons at the heart of the defence naturally left a massive hole, both figuratively and literally.\r\n\r\nFourteen months on, West Ham faced Moore’s Fulham in the 1975 FA Cup final at Wembley. An emotional occasion was settled 2-0 in the Hammers’ favour by two goals from unheralded 21-year-old centre forward Taylor, who had joined the Club from Fourth Division Rochdale for just £40,000.\r\n\r\nWest Ham’s second FA Cup triumph saw the Club compete in the European Cup Winners’ Cup for a second time, and they came within a whisker of emulating their achievement of 1965.\r\n\r\nLyall’s men defeated opponents from Finland and the Soviet Union before defeating Dutch Cup winners Den Haag and West German side Eintracht Frankfurt on aggregate, with the home legs of both ties considered to be all-time classics. The final paired West Ham with Belgian giants Anderlecht, who proved too strong on home turf in Brussels.', '2025-02-01 16:58:57', 0),
(14, 'Test title', 'image_679e73285883f.jpg', 'Neki random tekst', '2025-02-01 20:16:56', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
