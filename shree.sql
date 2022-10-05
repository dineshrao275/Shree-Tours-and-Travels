-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2021 at 08:18 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shree`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_driver`
--

CREATE TABLE `add_driver` (
  `id` int(11) NOT NULL,
  `drivername` varchar(20) NOT NULL,
  `experience` varchar(10) NOT NULL,
  `license` varchar(15) NOT NULL,
  `vehicleno` varchar(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_driver`
--

INSERT INTO `add_driver` (`id`, `drivername`, `experience`, `license`, `vehicleno`, `address`, `photo`, `contactno`, `username`, `password`) VALUES
(2, 'Ramprasad Bismil', '3 years', 'TQ1234455666623', 'RJ06BN4565', 'singoli , MP ', '000.JPG', '7867563432', 'ramb', '123'),
(3, 'kailash choudhary', '5yrs', 'ytsf23417353289', 'RJ12BN4563', 'choti basti,mumbai', 'Tulips.jpg', '7865434561', 'kailash', '123');

-- --------------------------------------------------------

--
-- Table structure for table `add_places`
--

CREATE TABLE `add_places` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `photos` varchar(200) NOT NULL,
  `about` varchar(2000) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1000
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_places`
--

INSERT INTO `add_places` (`id`, `name`, `photos`, `about`, `state`, `city`, `status`) VALUES
(55, 'sajjangarh', 'Koala.jpg', 'wild life sacntury', '29', 'Udaipur', 0),
(56, 'kaziranga park', '1.jpg', 'national park', '20', 'Guna', 1000),
(57, 'gardens of ujjain', 'Tulips.jpg', 'gardens', '20', 'Ujjai', 1000),
(58, 'under water ', 'Jellyfish.jpg', 'harmless aquatic animals', '11', 'North Goa', 1000),
(59, 'chitrakoot', 'Desert.jpg', 'where lord ram stay for 12 years', '35', 'Allahabad', 1000),
(60, 'kullu manali', 'Hydrangeas.jpg', 'afdgjh', '14', 'Kullu', 1000),
(61, 'lakecity mall', '102 copy.jpg', 'it is famous for shopping', '29', 'Udaipur', 1000),
(62, 'citypalace', 'c1.jpg', 'very beautiful', '29', 'Udaipur', 1000),
(63, 'jumri talai', '4.jpg', 'a very famous place as hell', '15', 'Kargil', 1000),
(64, 'JUHU BEACH', 'Lighthouse.jpg', 'PEACE AND CALM PLACE FOR PICNIC', '21', 'Mumbai City', 0),
(65, 'satra', '001.JPG', 'chatra pati sahu maharaj palace', '11', 'South Goa', 1000),
(67, 'thar desert ', 'imageJaisalmer.jpg', 'a very famous place as hell', '29', 'Jaisalmer', 1000),
(69, 'goa beach', 'GOA.jpg', 'Lying on the western coast, Goa is Indias smallest state and unlike any other, known for its endless beaches, stellar nightlife, eclectic seafood, world-heritage listed architecture. Spread across just 3,702 km, Goa lies in the Konkan region. It is a far cry from the hippie haven or a beach getaway, and one of the only few destinations that is open 24x7.', '11', 'North Goa', 1000),
(75, 'Tinkitam ', 'mountain-1149897_1280_20190306185520.jpg', 'Incredibly alluring, pleasantly boisterous and wreathed in clouds - Gangtok, the capital of Sikkim, is one of the most popular hill stations in India. Lying at the height of 1650 m above sea level, the town during its bright sunny days offers spectacular views of Mt. Kanchenjunga. Gangtok is a base for adventure enthusiasts comprising of trekkers and campers to the Himalayan mountain ranges. During the months of March to Mid-May, blooming of wild Rhododendrons transform the surrounding regions in vast fields of colourful carpets.', '30', 'North Sikkim', 1000),
(76, 'UDAIPUR', 'UDAIPUR.jpg', 'Udaipur, also known as the City of Lakes, is the crown jewel of the state of Rajasthan. It is surrounded by the beautiful Aravalli Hills in all directions, making this city as lovely as it is. This Venice of the East has an abundance of natural beauty, mesmerising temples and breathtaking architecture which makes it a must-visit destination in India.  A boat ride through the serene waters of Lake Pichola will be enough to prove to you why Udaipur is the pride of Rajasthan.\r\n\r\nLocated in a valley and surrounded by four lakes, Udaipur has natural offerings with a grandeur multiplied by human effort, to make it one of the most enchanting and memorable tourist destinations. It justifies all names ever offered to its charm from Jewel of Mewar to Venice of the East. And though the entire citys architecture is flattering, the Lake Palace hotel is something that offers the city a visual definition. The revered Nathdwara temple is about 60 km from Udaipur.', '29', 'Udaipur', 1000),
(77, 'mcleodganj', 'MCLEODGANJ_20190306132759.jpg', 'Mcleodganj is a hill station near Dharamshala, popular among trekkers. Located in Kangra district, Mcleodganjs culture is a beautiful blend of Tibetan with some British influence.\r\n\r\nAlso known as Little Lhasa and famous around the world for being home to the Tibetan spiritual leader Dalai Lama, Mcleod Ganj is a beautiful town situated near upper Dharamsala. Nestled amidst majestic hills and lush greenery, this town is culturally blessed by a prominent Tibetan influence owing to the major settlement of Tibetans here. Mcleodganj has one of the most mesmerising landscapes in the entire state of Himachal Pradesh and attracts a lot of tourists throughout the year. The towns of Dharamsala, Mcleodganj, Bhagsu Nag and Kangra are situated very close to each other and tourists must cover all these destinations while travelling here. Few of the most eminent and religiously significant monasteries in India are located here, including the Namgyal Monastery and Tsuglagkhang, where the spiritual leader Dalai Lama resides. Tourists must also visit the scenic Dal Lake and Triund, which are apt for quiet picnics.', '14', 'Kangra', 1000),
(78, 'manali', 'MANALI.jpg', 'One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year. \r\n\r\nWith the Covid-19 pandemic going on, Manali has evolved to be a place loved by young people looking for longer stays for workation. With ambient cafes, good wifi availability, small eateries and convenient shops, Old Manali is among the favorite neighbourhood for such people. There are many homestays and hostels offering dorm beds for cheap for longer durations. \r\n\r\nManali has many trekking options around it, making it a great base for exploring this side of Himalayas. River Beas provides great rafting options in the nearby town of Kullu. Adjoining Parvati river, lies the Parvati Valley with  Kasol, Manikaran, Tosh and small villages attracting travellers for longer stays. Atal Tunnel now allows travellers to reach Sissu within a few hours making Spiti way more accessible. \r\n\r\nIt snows the most in the months of January & February followed by December and March. If you are very lucky, you might find some snow in April. ', '14', 'Kullu', 1000),
(79, 'darjeeling', 'DARJEELING.jpg', 'Jaw-dropping locales, mesmerising sunrises, the untouched beauty of the hills, the old-world charm of the past, and the welcoming smiles of the local people all add up to make Darjeeling one of the most beautiful hill stations in Eastern part of India. Spread over a steep mountain ridge, nestled amidst acres of lush green tea plantations, Darjeeling stands at the height of 2,050 meters above sea level, thus boasting of cool climes all year round. This scenic hill station is the perfect getaway for a romantic honeymoon and is just around 700 kilometres away from Kolkata.\r\n\r\nA respite from the hot and humid summers of India, Darjeeling is a popular tourist destination in North-East India. Providing a heady mixture of splendid tea gardens on rolling mountain slopes, meandering toy train rides through the picturesque city, and delectable traditional Tibetan cuisine, Darjeeling works wonders to cater to the gorgeous panorama of the Himalayas.\r\n\r\nThere is a reason the city is known as the Queen of the Himalayas. The lush green slopes dotted with women plucking tea leaves is a sight as mesmerising as no other. There are over 86 tea estates in Darjeeling that are responsible for producing the worldwide famous Darjeeling Tea. Have a cup of locally brewed chai at the tea estate, or get down amidst the plantations to pluck a few tea leaves yourself, you are free to take your pick!', '36', 'Darjeeling', 1000),
(80, 'munnar', 'Munnar_hillstation_kerala_20190207123437jpg', 'Munnar is a popular hill station of Kerala perched at an altitude of 1600 metres in the Western Ghats. Famous for its tea estates, various shades of green, blankets of mist forming natural-view points, Munnar is aptly known as the Kashmir of South India.\r\n\r\nMunnar is a popular destination for a honeymoon with an abundance of resorts and cottages. Situated on the banks of three rivers- Madupetti, Nallathanni and Periavaru.\r\n\r\nMunnar is divided into Old Munnar, where the tourist information office is, and Munnar, where the bus station and most guest houses are located. The Eravikulam National Park, Salim Ali Bird Sanctuary and tea plantations are its major attractions.', '18', 'Idukki', 1000),
(81, 'coorg', 'COORG.jpg', 'Located amidst imposing mountains in Karnataka with a perpetually misty landscape, Coorg is a popular coffee producing hill station. It is popular for its beautiful green hills and the streams cutting right through them. It also stands as a popular destination because of its culture and people. The Kodavas, a local clan specializing in martial arts, are especially notable for their keen hospitality.\r\n\r\nCoorg, officially known as Kodagu, is the most affluent hill station in Karnataka. It is well known for its breathtakingly exotic scenery and lush greenery. Forest covered hills, spice and coffee plantations only add to the landscape. Madikeri is the regions centre point with all transportation for getting around starting from here. On a visit to Coorg, cover the beautiful towns like Virajpet, Kushalnagar, Gonikoppal, Pollibetta, and Somwarpet, and experience the beautiful concept of homestays to make your experience more memorable! ', '17', 'Kodagu', 1000),
(82, 'delhi', 'Qutub_Minar_932_20190731143921.jpg', 'The capital of India, Delhi is a cosmopolitan city with a historic old Delhi and the modern New Delhi. From historical monuments to crowded shopping malls, from an extensive network of the modern metro system to Delhi University campus, Dilli has multiple personalities and is considered to be the city with a heart.\r\n\r\nThe narrow, winding lanes and bylanes of old Delhi are a testament to the former Mughal rule. Old Delhi houses one of the countrys oldest and busiest market – Chandni Chowk.\r\n\r\nTake time to explore historical monuments such as the Red Fort, Jama Masjid, Humayuns Tomb and Purana Qila if you want to explore the Mughal History. Delhi has famous temples scattered all across the city, a few noteworthy ones being the Akshardham Temple, the Lotus Temple (also known as the Bahai Temple), and the ISKON Temple.\r\n\r\nCentral Delhi is the concentration of the countrys political power, and the must-visit places here include the Rashtrapati Bhawan on Raisina Hill, the Rajpath, and the India Gate. The best place to visit this area is in the evening, as all the buildings are lit up, and you can see the Amar Jawan Jyoti at India Gate shining brightly.\r\n', '10', 'Central Delhi', 1000),
(83, 'taj mahal', 'attr_1448_20190212100722jpg', 'One of the seven wonders of the world, Taj Mahal is located on the banks of River Yamuna in Agra. It was built by the Mughal Emperor Shah Jahan as a memorial for his third wife, Mumtaz Mahal. It also houses the tomb of Shah Jahan himself. Constructed entirely out of white marble in the 17th century, Taj Mahal is one of the most beautiful monuments in the world. Every year visitors numbering more than the entire population of Agra pass through the magnificent gates to catch a glimpse of this breathtaking monument.\r\n\r\nA UNESCO World Heritage Site, the Taj Mahal stands for the Crown of Palaces in the Persian language. The tomb is laid out in a rectangular shape and can be approached through a massive gateway which has an arch and alcoves on either side of it. There are water channels and fountains in the entrance which makes the monument even more spectacular. The reflection of this majestic spectacle in the Yamuna is almost poetic in its perfection.\r\n\r\nCovering an area of approximately 42 Acres, the construction of the Taj Mahal began in 1631 and it took 17 years before it was completed in 1648, It was constructed using white marble obtained from Makrana in Rajasthan', '35', 'Agra', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `add_vehicle`
--

CREATE TABLE `add_vehicle` (
  `id` int(11) NOT NULL,
  `transportname` varchar(40) NOT NULL,
  `vehiclename` varchar(40) NOT NULL,
  `vehicleno` varchar(40) NOT NULL,
  `insuranceno` varchar(30) NOT NULL,
  `vehiclemodel` varchar(50) NOT NULL,
  `vehicleregistration` varchar(50) NOT NULL,
  `vseat` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  `rent` varchar(30) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `vehicletype` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `status` int(11) DEFAULT 50
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_vehicle`
--

INSERT INTO `add_vehicle` (`id`, `transportname`, `vehiclename`, `vehicleno`, `insuranceno`, `vehiclemodel`, `vehicleregistration`, `vseat`, `image`, `rent`, `state`, `city`, `contact`, `vehicletype`, `address`, `status`) VALUES
(15, 'vidhyarthi', 'hyundai', 'RJ12BN4563', '985RUD94D83', 'H3H453', 'JD4J2J3J', '4', 'sedan.jpg', '500', '21', 'Mumbai City', '8789876786', 'car', 'hemendrapura, mumbai', 50),
(17, 'jai ambey', 'swift dezire', 'RJ06BN4565', '985RUD94D83', '1234', 'YT67534E5RD5', '4', 'download.jpeg', '500', '14', 'Kullu', '9876543210', 'car', 'shantikunj ,meeranagar ', 50);

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'admin', '12345678'),
(2, 'dinesh', 'dineshrao');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `transportname` varchar(30) NOT NULL,
  `vehicletype` varchar(10) NOT NULL,
  `vehicleno` varchar(10) NOT NULL,
  `vehiclerent` varchar(15) NOT NULL,
  `pickupdate` date NOT NULL,
  `pickupplace` varchar(60) NOT NULL,
  `bookername` varchar(50) NOT NULL,
  `bookercontact` varchar(11) NOT NULL,
  `bookeraddress` varchar(60) NOT NULL,
  `drivername` varchar(50) NOT NULL,
  `drivercontact` varchar(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `cancel` varchar(5) NOT NULL,
  `invoiceno` varchar(10) NOT NULL,
  `pickuptime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `transportname`, `vehicletype`, `vehicleno`, `vehiclerent`, `pickupdate`, `pickupplace`, `bookername`, `bookercontact`, `bookeraddress`, `drivername`, `drivercontact`, `status`, `cancel`, `invoiceno`, `pickuptime`) VALUES
(26, 'jai ambey', 'car', 'RJ06BN4565', '500', '2021-07-22', 'vivekanand memorial,goyal colony', ' Dinesh   Rao', '8290667489', 'jhanwer ka rajpura', 'ramnivas choudhary', '7865434561', 5, 'no', 'ea520f', '00:00:00'),
(27, 'jai ambey', 'car', 'RJ06BN4565', '500', '2021-07-23', 'MALAD , puirana thana, mumbai', ' prasann   lasod', '7470988648', 'Ahinsapath, singoli m.p.', 'ramnivas choudhary', '7865434561', 5, 'no', '456444', '00:00:00'),
(28, 'jai ambey', 'car', 'RJ06BN4565', '500', '2021-07-30', 'baazi , puirana thana', ' anita   rao', '08290667489', 'jhanwer ka rajpura', 'ramnivas choudhary', '7865434561', 5, 'no', '6384f5', '00:00:00'),
(29, 'jai ambey', 'car', 'RJ06BN4565', '500', '2021-07-28', 'baazi , puirana thana', ' anita   rao', '08290667489', 'jhanwer ka rajpura', 'ramnivas choudhary', '7865434561', 5, 'no', 'e83452', '00:00:00'),
(30, 'jai ambey', 'car', 'RJ06BN4565', '500', '2021-07-09', 'railway station, manali', ' prasann   lasod', '7470988648', 'Ahinsapath, singoli m.p.', 'ramnivas choudhary', '7865434561', 2, 'no', '6443d6', '00:00:00'),
(31, 'jai ambey', 'car', 'RJ06BN4565', '500', '2021-07-21', 'raiway station,ranapratapnagar', ' prasann   lasod', '7470988648', 'Ahinsapath, singoli m.p.', 'ramnivas choudhary', '7689764567', 5, 'no', '1dfcd0', '00:00:00'),
(32, 'jai ambey', 'car', 'RJ06BN4565', '500', '2021-08-19', 'kulhad chouraha,ramnagar', ' udayram   rao', '8435191951', 'pahuna,rajasthan', 'Ramprasad Bismil', '7867563432', 5, 'no', '50307c', '00:00:00'),
(33, 'jai ambey', 'car', 'RJ06BN4565', '500', '2021-08-04', 'panirucbvjhgy', ' udayram   rao', '8435191951', 'pahuna,rajasthan', 'Ramprasad Bismil', '7867563432', 5, 'no', 'cd7510', '11:15:00'),
(34, 'vidhyarthi', 'car', 'RJ12BN4563', '500', '2021-08-18', 'MALAD , puirana thana, mumbai', ' udayram   rao', '8435191951', 'pahuna,rajasthan', 'kailash choudhary', '7865434561', 5, 'no', 'd5fcbc', '12:19:00'),
(35, 'jai ambey', 'car', 'RJ06BN4565', '500', '2021-08-20', 'panirucbvjhgy', ' anita   rao', '08290667489', 'jhanwer ka rajpura', 'Ramprasad Bismil', '7867563432', 5, 'no', 'e26de8', '16:33:00'),
(36, 'jai ambey', 'car', 'RJ06BN4565', '500', '2021-08-18', 'MALAD , puirana thana, mumbai', ' udayram   rao', '8435191951', 'pahuna,rajasthan', 'Ramprasad Bismil', '7867563432', 5, 'no', '4e843c', '09:09:00');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `CityCode` int(11) NOT NULL,
  `StCode` int(11) DEFAULT NULL,
  `CityName` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`CityCode`, `StCode`, `CityName`) VALUES
(1, 1, 'North and Middle Andama'),
(2, 1, 'South Andama'),
(3, 1, 'Nicobar'),
(4, 2, 'Anantapur'),
(5, 2, 'Chittoor'),
(6, 2, 'East Godavari'),
(7, 2, 'Guntur'),
(8, 2, 'Krishna'),
(9, 2, 'Kurnool'),
(10, 2, 'Prakasam'),
(11, 2, 'Srikakulam'),
(12, 2, 'Sri Potti Sri Ramulu Nellore'),
(13, 2, 'Vishakhapatnam'),
(14, 2, 'Vizianagaram'),
(15, 2, 'West Godavari'),
(16, 2, 'Cudappah'),
(17, 3, 'Anjaw'),
(18, 3, 'Changlang'),
(19, 3, 'East Siang'),
(20, 3, 'East Kameng'),
(21, 3, 'Kurung Kumey'),
(22, 3, 'Lohit'),
(23, 3, 'Lower Dibang Valley'),
(24, 3, 'Lower Subansiri'),
(25, 3, 'Papum Pare'),
(26, 3, 'Tawang'),
(27, 3, 'Tirap'),
(28, 3, 'Dibang Valley'),
(29, 3, 'Upper Siang'),
(30, 3, 'Upper Subansiri'),
(31, 3, 'West Kameng'),
(32, 3, 'West Siang'),
(33, 4, 'Baksa'),
(34, 4, 'Barpeta'),
(35, 4, 'Bongaigao'),
(36, 4, 'Cachar'),
(37, 4, 'Chirang'),
(38, 4, 'Darrang'),
(39, 4, 'Dhemaji'),
(40, 4, 'Dima Hasao'),
(41, 4, 'Dhubri'),
(42, 4, 'Dibrugarh'),
(43, 4, 'Goalpara'),
(44, 4, 'Golaghat'),
(45, 4, 'Hailakandi'),
(46, 4, 'Jorhat'),
(47, 4, 'Kamrup'),
(48, 4, 'Kamrup Metropolita'),
(49, 4, 'Karbi Anglong'),
(50, 4, 'Karimganj'),
(51, 4, 'Kokrajhar'),
(52, 4, 'Lakhimpur'),
(53, 4, 'Morigao'),
(54, 4, 'Nagao'),
(55, 4, 'Nalbari'),
(56, 4, 'Sivasagar'),
(57, 4, 'Sonitpur'),
(58, 4, 'Tinsukia'),
(59, 4, 'Udalguri'),
(60, 5, 'Araria'),
(61, 5, 'Arwal'),
(62, 5, 'Aurangabad'),
(63, 5, 'Banka'),
(64, 5, 'Begusarai'),
(65, 5, 'Bhagalpur'),
(66, 5, 'Bhojpur'),
(67, 5, 'Buxar'),
(68, 5, 'Darbhanga'),
(69, 5, 'East Champara'),
(70, 5, 'Gaya'),
(71, 5, 'Gopalganj'),
(72, 5, 'Jamui'),
(73, 5, 'Jehanabad'),
(74, 5, 'Kaimur'),
(75, 5, 'Katihar'),
(76, 5, 'Khagaria'),
(77, 5, 'Kishanganj'),
(78, 5, 'Lakhisarai'),
(79, 5, 'Madhepura'),
(80, 5, 'Madhubani'),
(81, 5, 'Munger'),
(82, 5, 'Muzaffarpur'),
(83, 5, 'Nalanda'),
(84, 5, 'Nawada'),
(85, 5, 'Patna'),
(86, 5, 'Purnia'),
(87, 5, 'Rohtas'),
(88, 5, 'Saharsa'),
(89, 5, 'Samastipur'),
(90, 5, 'Sara'),
(91, 5, 'Sheikhpura'),
(92, 5, 'Sheohar'),
(93, 5, 'Sitamarhi'),
(94, 5, 'Siwa'),
(95, 5, 'Supaul'),
(96, 5, 'Vaishali'),
(97, 5, 'West Champara'),
(98, 6, 'Chandigarh'),
(99, 7, 'Bastar'),
(100, 7, 'Bijapur'),
(101, 7, 'Bilaspur'),
(102, 7, 'Dantewada'),
(103, 7, 'Dhamtari'),
(104, 7, 'Durg'),
(105, 7, 'Jashpur'),
(106, 7, 'Janjgir-Champa'),
(107, 7, 'Korba'),
(108, 7, 'Koriya'),
(109, 7, 'Kanker'),
(110, 7, 'Kabirdham (formerly Kawardha);'),
(111, 7, 'Mahasamund'),
(112, 7, 'Narayanpur'),
(113, 7, 'Raigarh'),
(114, 7, 'Rajnandgao'),
(115, 7, 'Raipur'),
(116, 7, 'Surajpur'),
(117, 8, 'Dadra and Nagar Haveli'),
(118, 9, 'Dama'),
(119, 9, 'Diu'),
(120, 10, 'Central Delhi'),
(121, 10, 'East Delhi'),
(122, 10, 'New Delhi'),
(123, 10, 'North Delhi'),
(124, 10, 'North East Delhi'),
(125, 10, 'North West Delhi'),
(126, 10, 'South Delhi'),
(127, 10, 'South West Delhi'),
(128, 10, 'West Delhi'),
(129, 11, 'North Goa'),
(130, 11, 'South Goa'),
(131, 12, 'Ahmedabad'),
(132, 12, 'Amreli'),
(133, 12, 'Anand'),
(134, 12, 'Aravalli'),
(135, 12, 'Banaskantha'),
(136, 12, 'Bharuch'),
(137, 12, 'Bhavnagar'),
(138, 12, 'Dahod'),
(139, 12, 'Dang'),
(140, 12, 'Gandhinagar'),
(141, 12, 'Jamnagar'),
(142, 12, 'Junagadh'),
(143, 12, 'Kutch'),
(144, 12, 'Kheda'),
(145, 12, 'Mehsana'),
(146, 12, 'Narmada'),
(147, 12, 'Navsari'),
(148, 12, 'Pata'),
(149, 12, 'Panchmahal'),
(150, 12, 'Porbandar'),
(151, 12, 'Rajkot'),
(152, 12, 'Sabarkantha'),
(153, 12, 'Surendranagar'),
(154, 12, 'Surat'),
(155, 12, 'Tapi'),
(156, 12, 'Vadodara'),
(157, 12, 'Valsad'),
(158, 13, 'Ambala'),
(159, 13, 'Bhiwani'),
(160, 13, 'Faridabad'),
(161, 13, 'Fatehabad'),
(162, 13, 'Gurgao'),
(163, 13, 'Hissar'),
(164, 13, 'Jhajjar'),
(165, 13, 'Jind'),
(166, 13, 'Karnal'),
(167, 13, 'Kaithal'),
(168, 13, 'Kurukshetra'),
(169, 13, 'Mahendragarh'),
(170, 13, 'Mewat'),
(171, 13, 'Palwal'),
(172, 13, 'Panchkula'),
(173, 13, 'Panipat'),
(174, 13, 'Rewari'),
(175, 13, 'Rohtak'),
(176, 13, 'Sirsa'),
(177, 13, 'Sonipat'),
(178, 13, 'Yamuna Nagar'),
(179, 14, 'Bilaspur'),
(180, 14, 'Chamba'),
(181, 14, 'Hamirpur'),
(182, 14, 'Kangra'),
(183, 14, 'Kinnaur'),
(184, 14, 'Kullu'),
(185, 14, 'Lahaul and Spiti'),
(186, 14, 'Mandi'),
(187, 14, 'Shimla'),
(188, 14, 'Sirmaur'),
(189, 14, 'Sola'),
(190, 14, 'Una'),
(191, 15, 'Anantnag'),
(192, 15, 'Badgam'),
(193, 15, 'Bandipora'),
(194, 15, 'Baramulla'),
(195, 15, 'Doda'),
(196, 15, 'Ganderbal'),
(197, 15, 'Jammu'),
(198, 15, 'Kargil'),
(199, 15, 'Kathua'),
(200, 15, 'Kishtwar'),
(202, 15, 'Kupwara'),
(203, 15, 'Kulgam'),
(204, 15, 'Leh'),
(205, 15, 'Poonch'),
(206, 15, 'Pulwama'),
(207, 15, 'Rajouri'),
(208, 15, 'Ramba'),
(209, 15, 'Reasi'),
(210, 15, 'Samba'),
(211, 15, 'Shopia'),
(212, 15, 'Srinagar'),
(213, 15, 'Udhampur'),
(214, 16, 'Bokaro'),
(215, 16, 'Chatra'),
(216, 16, 'Deoghar'),
(217, 16, 'Dhanbad'),
(218, 16, 'Dumka'),
(219, 16, 'East Singhbhum'),
(220, 16, 'Garhwa'),
(221, 16, 'Giridih'),
(222, 16, 'Godda'),
(223, 16, 'Gumla'),
(224, 16, 'Hazaribag'),
(225, 16, 'Jamtara'),
(226, 16, 'Khunti'),
(227, 16, 'Koderma'),
(228, 16, 'Latehar'),
(229, 16, 'Lohardaga'),
(230, 16, 'Pakur'),
(231, 16, 'Palamu'),
(232, 16, 'Ramgarh'),
(233, 16, 'Ranchi'),
(234, 16, 'Sahibganj'),
(235, 16, 'Seraikela Kharsawa'),
(236, 16, 'Simdega'),
(237, 16, 'West Singhbhum'),
(238, 17, 'Bagalkot'),
(239, 17, 'Bangalore Rural'),
(240, 17, 'Bangalore Urba'),
(241, 17, 'Belgaum'),
(242, 17, 'Bellary'),
(243, 17, 'Bidar'),
(244, 17, 'Bijapur'),
(245, 17, 'Chamarajnagar'),
(246, 17, 'Chikkamagaluru'),
(247, 17, 'Chikkaballapur'),
(248, 17, 'Chitradurga'),
(249, 17, 'Davanagere'),
(250, 17, 'Dharwad'),
(251, 17, 'Dakshina Kannada'),
(252, 17, 'Gadag'),
(253, 17, 'Gulbarga'),
(254, 17, 'Hassa'),
(255, 17, 'Haveri'),
(256, 17, 'Kodagu'),
(257, 17, 'Kolar'),
(258, 17, 'Koppal'),
(259, 17, 'Mandya'),
(260, 17, 'Mysore'),
(261, 17, 'Raichur'),
(262, 17, 'Shimoga'),
(263, 17, 'Tumkur'),
(264, 17, 'Udupi'),
(265, 17, 'Uttara Kannada'),
(266, 17, 'Ramanagara'),
(267, 17, 'Yadgir'),
(268, 18, 'Alappuzha'),
(269, 18, 'Ernakulam'),
(270, 18, 'Idukki'),
(271, 18, 'Kannur'),
(272, 18, 'Kasaragod'),
(273, 18, 'Kollam'),
(274, 18, 'Kottayam'),
(275, 18, 'Kozhikode'),
(276, 18, 'Malappuram'),
(277, 18, 'Palakkad'),
(278, 18, 'Pathanamthitta'),
(279, 18, 'Thrissur'),
(280, 18, 'Thiruvananthapuram'),
(281, 18, 'Wayanad'),
(282, 19, 'Lakshadweep'),
(283, 20, 'Agar'),
(284, 20, 'Alirajpur'),
(285, 20, 'Anuppur'),
(286, 20, 'Ashok Nagar'),
(287, 20, 'Balaghat'),
(288, 20, 'Barwani'),
(289, 20, 'Betul'),
(290, 20, 'Bhind'),
(291, 20, 'Bhopal'),
(292, 20, 'Burhanpur'),
(293, 20, 'Chhatarpur'),
(294, 20, 'Chhindwara'),
(295, 20, 'Damoh'),
(296, 20, 'Datia'),
(297, 20, 'Dewas'),
(298, 20, 'Dhar'),
(299, 20, 'Dindori'),
(300, 20, 'Guna'),
(301, 20, 'Gwalior'),
(302, 20, 'Harda'),
(303, 20, 'Hoshangabad'),
(304, 20, 'Indore'),
(305, 20, 'Jabalpur'),
(306, 20, 'Jhabua'),
(307, 20, 'Katni'),
(308, 20, 'Khandwa (East Nimar);'),
(309, 20, 'Khargone (West Nimar);'),
(310, 20, 'Mandla'),
(311, 20, 'Mandsaur'),
(312, 20, 'Morena'),
(313, 20, 'Narsinghpur'),
(314, 20, 'Neemuch'),
(315, 20, 'Panna'),
(316, 20, 'Raise'),
(317, 20, 'Rajgarh'),
(318, 20, 'Ratlam'),
(319, 20, 'Rewa'),
(320, 20, 'Sagar'),
(321, 20, 'Satna'),
(322, 20, 'Sehore'),
(323, 20, 'Seoni'),
(324, 20, 'Shahdol'),
(325, 20, 'Shajapur'),
(326, 20, 'Sheopur'),
(327, 20, 'Shivpuri'),
(328, 20, 'Sidhi'),
(329, 20, 'Singrauli'),
(330, 20, 'Tikamgarh'),
(331, 20, 'Ujjai'),
(332, 20, 'Umaria'),
(333, 20, 'Vidisha'),
(334, 21, 'Ahmednagar'),
(335, 21, 'Akola'),
(336, 21, 'Amravati'),
(337, 21, 'Aurangabad'),
(338, 21, 'Beed'),
(339, 21, 'Bhandara'),
(340, 21, 'Buldhana'),
(341, 21, 'Chandrapur'),
(342, 21, 'Dhule'),
(343, 21, 'Gadchiroli'),
(344, 21, 'Gondia'),
(345, 21, 'Hingoli'),
(346, 21, 'Jalgao'),
(347, 21, 'Jalna'),
(348, 21, 'Kolhapur'),
(349, 21, 'Latur'),
(350, 21, 'Mumbai City'),
(351, 21, 'Mumbai suburba'),
(352, 21, 'Nanded'),
(353, 21, 'Nandurbar'),
(354, 21, 'Nagpur'),
(355, 21, 'Nashik'),
(356, 21, 'Osmanabad'),
(357, 21, 'Parbhani'),
(358, 21, 'Pune'),
(359, 21, 'Raigad'),
(360, 21, 'Ratnagiri'),
(361, 21, 'Sangli'),
(362, 21, 'Satara'),
(363, 21, 'Sindhudurg'),
(364, 21, 'Solapur'),
(365, 21, 'Thane'),
(366, 21, 'Wardha'),
(367, 21, 'Washim'),
(368, 21, 'Yavatmal'),
(369, 22, 'Bishnupur'),
(370, 22, 'Churachandpur'),
(371, 22, 'Chandel'),
(372, 22, 'Imphal East'),
(373, 22, 'Senapati'),
(374, 22, 'Tamenglong'),
(375, 22, 'Thoubal'),
(376, 22, 'Ukhrul'),
(377, 22, 'Imphal West'),
(378, 23, 'East Garo Hills'),
(379, 23, 'East Khasi Hills'),
(380, 23, 'Jaintia Hills'),
(381, 23, 'Ri Bhoi'),
(382, 23, 'South Garo Hills'),
(383, 23, 'West Garo Hills'),
(384, 23, 'West Khasi Hills'),
(385, 24, 'Aizawl'),
(386, 24, 'Champhai'),
(387, 24, 'Kolasib'),
(388, 24, 'Lawngtlai'),
(389, 24, 'Lunglei'),
(390, 24, 'Mamit'),
(391, 24, 'Saiha'),
(392, 24, 'Serchhip'),
(393, 25, 'Dimapur'),
(394, 25, 'Kiphire'),
(395, 25, 'Kohima'),
(396, 25, 'Longleng'),
(397, 25, 'Mokokchung'),
(398, 25, 'Mo'),
(399, 25, 'Pere'),
(400, 25, 'Phek'),
(401, 25, 'Tuensang'),
(402, 25, 'Wokha'),
(403, 25, 'Zunheboto'),
(404, 26, 'Angul'),
(405, 26, 'Boudh (Bauda);'),
(406, 26, 'Bhadrak'),
(407, 26, 'Balangir'),
(408, 26, 'Bargarh (Baragarh);'),
(409, 26, 'Balasore'),
(410, 26, 'Cuttack'),
(411, 26, 'Debagarh (Deogarh);'),
(412, 26, 'Dhenkanal'),
(413, 26, 'Ganjam'),
(414, 26, 'Gajapati'),
(415, 26, 'Jharsuguda'),
(416, 26, 'Jajpur'),
(417, 26, 'Jagatsinghpur'),
(418, 26, 'Khordha'),
(419, 26, 'Kendujhar (Keonjhar);'),
(420, 26, 'Kalahandi'),
(421, 26, 'Kandhamal'),
(422, 26, 'Koraput'),
(423, 26, 'Kendrapara'),
(424, 26, 'Malkangiri'),
(425, 26, 'Mayurbhanj'),
(426, 26, 'Nabarangpur'),
(427, 26, 'Nuapada'),
(428, 26, 'Nayagarh'),
(429, 26, 'Puri'),
(430, 26, 'Rayagada'),
(431, 26, 'Sambalpur'),
(432, 26, 'Subarnapur (Sonepur);'),
(433, 26, 'Sundergarh'),
(434, 27, 'Karaikal'),
(435, 27, 'Mahe'),
(436, 27, 'Pondicherry'),
(437, 27, 'Yanam'),
(438, 28, 'Amritsar'),
(439, 28, 'Barnala'),
(440, 28, 'Bathinda'),
(441, 28, 'Firozpur'),
(442, 28, 'Faridkot'),
(443, 28, 'Fatehgarh Sahib'),
(444, 28, 'Fazilka'),
(445, 28, 'Gurdaspur'),
(446, 28, 'Hoshiarpur'),
(447, 28, 'Jalandhar'),
(448, 28, 'Kapurthala'),
(449, 28, 'Ludhiana'),
(450, 28, 'Mansa'),
(451, 28, 'Moga'),
(452, 28, 'Sri Muktsar Sahib'),
(453, 28, 'Pathankot'),
(454, 28, 'Patiala'),
(455, 28, 'Rupnagar'),
(456, 28, 'Ajitgarh (Mohali);'),
(457, 28, 'Sangrur'),
(458, 28, 'Shahid Bhagat Singh Nagar'),
(459, 28, 'Tarn Tara'),
(460, 29, 'Ajmer'),
(461, 29, 'Alwar'),
(462, 29, 'Bikaner'),
(463, 29, 'Barmer'),
(464, 29, 'Banswara'),
(465, 29, 'Bharatpur'),
(466, 29, 'Bara'),
(467, 29, 'Bundi'),
(468, 29, 'Bhilwara'),
(469, 29, 'Churu'),
(470, 29, 'Chittorgarh'),
(471, 29, 'Dausa'),
(472, 29, 'Dholpur'),
(473, 29, 'Dungapur'),
(474, 29, 'Ganganagar'),
(475, 29, 'Hanumangarh'),
(476, 29, 'Jhunjhunu'),
(477, 29, 'Jalore'),
(478, 29, 'Jodhpur'),
(479, 29, 'Jaipur'),
(480, 29, 'Jaisalmer'),
(481, 29, 'Jhalawar'),
(482, 29, 'Karauli'),
(483, 29, 'Kota'),
(484, 29, 'Nagaur'),
(485, 29, 'Pali'),
(486, 29, 'Pratapgarh'),
(487, 29, 'Rajsamand'),
(488, 29, 'Sikar'),
(489, 29, 'Sawai Madhopur'),
(490, 29, 'Sirohi'),
(491, 29, 'Tonk'),
(492, 29, 'Udaipur'),
(493, 30, 'East Sikkim'),
(494, 30, 'North Sikkim'),
(495, 30, 'South Sikkim'),
(496, 30, 'West Sikkim'),
(497, 31, 'Ariyalur'),
(498, 31, 'Chennai'),
(499, 31, 'Coimbatore'),
(500, 31, 'Cuddalore'),
(501, 31, 'Dharmapuri'),
(502, 31, 'Dindigul'),
(503, 31, 'Erode'),
(504, 31, 'Kanchipuram'),
(505, 31, 'Kanyakumari'),
(506, 31, 'Karur'),
(507, 31, 'Krishnagiri'),
(508, 31, 'Madurai'),
(509, 31, 'Nagapattinam'),
(510, 31, 'Nilgiris'),
(511, 31, 'Namakkal'),
(512, 31, 'Perambalur'),
(513, 31, 'Pudukkottai'),
(514, 31, 'Ramanathapuram'),
(515, 31, 'Salem'),
(516, 31, 'Sivaganga'),
(517, 31, 'Tirupur'),
(518, 31, 'Tiruchirappalli'),
(519, 31, 'Theni'),
(520, 31, 'Tirunelveli'),
(521, 31, 'Thanjavur'),
(522, 31, 'Thoothukudi'),
(523, 31, 'Tiruvallur'),
(524, 31, 'Tiruvarur'),
(525, 31, 'Tiruvannamalai'),
(526, 31, 'Vellore'),
(527, 31, 'Viluppuram'),
(528, 31, 'Virudhunagar'),
(529, 32, 'Adilabad'),
(530, 32, 'Hyderabad'),
(531, 32, 'Karimnagar'),
(532, 32, 'Khammam'),
(533, 32, 'Mahbubnagar'),
(534, 32, 'Medak'),
(535, 32, 'Nalgonda'),
(536, 32, 'Nizamabad'),
(537, 32, 'Ranga Reddy'),
(538, 32, 'Warangal'),
(539, 33, 'Dhalai'),
(540, 33, 'North Tripura'),
(541, 33, 'South Tripura'),
(542, 33, 'Khowai'),
(543, 33, 'West Tripura'),
(544, 35, 'Agra'),
(545, 35, 'Aligarh'),
(546, 35, 'Allahabad'),
(547, 35, 'Ambedkar Nagar'),
(548, 35, 'Auraiya'),
(549, 35, 'Azamgarh'),
(550, 35, 'Bagpat'),
(551, 35, 'Bahraich'),
(552, 35, 'Ballia'),
(553, 35, 'Balrampur'),
(554, 35, 'Banda'),
(555, 35, 'Barabanki'),
(556, 35, 'Bareilly'),
(557, 35, 'Basti'),
(558, 35, 'Bijnor'),
(559, 35, 'Budau'),
(560, 35, 'Bulandshahr'),
(561, 35, 'Chandauli'),
(562, 35, 'Amethi (Chhatrapati Shahuji Maharaj Nagar)'),
(563, 35, 'Chitrakoot'),
(564, 35, 'Deoria'),
(565, 35, 'Etah'),
(566, 35, 'Etawah'),
(567, 35, 'Faizabad'),
(568, 35, 'Farrukhabad'),
(569, 35, 'Fatehpur'),
(570, 35, 'Firozabad'),
(571, 35, 'Gautam Buddh Nagar'),
(572, 35, 'Ghaziabad'),
(573, 35, 'Ghazipur'),
(574, 35, 'Gonda'),
(575, 35, 'Gorakhpur'),
(576, 35, 'Hamirpur'),
(577, 35, 'Hardoi'),
(578, 35, 'Hathras (Mahamaya Nagar);'),
(579, 35, 'Jalau'),
(580, 35, 'Jaunpur'),
(581, 35, 'Jhansi'),
(582, 35, 'Jyotiba Phule Nagar'),
(583, 35, 'Kannauj'),
(584, 35, 'Kanpur Dehat (Ramabai Nagar);'),
(585, 35, 'Kanpur Nagar'),
(586, 35, 'Kanshi Ram Nagar'),
(587, 35, 'Kaushambi'),
(588, 35, 'Kushinagar'),
(589, 35, 'Lakhimpur Kheri'),
(590, 35, 'Lalitpur'),
(591, 35, 'Lucknow'),
(592, 35, 'Maharajganj'),
(593, 35, 'Mahoba'),
(594, 35, 'Mainpuri'),
(595, 35, 'Mathura'),
(596, 35, 'Mau'),
(597, 35, 'Meerut'),
(598, 35, 'Mirzapur'),
(599, 35, 'Moradabad'),
(600, 35, 'Muzaffarnagar'),
(601, 35, 'Panchsheel Nagar (Hapur);'),
(602, 35, 'Pilibhit'),
(603, 35, 'Pratapgarh'),
(604, 35, 'Raebareli'),
(605, 35, 'Rampur'),
(606, 35, 'Saharanpur'),
(607, 35, 'Sambhal(Bheem Nagar);'),
(608, 35, 'Sant Kabir Nagar'),
(609, 35, 'Sant Ravidas Nagar'),
(610, 35, 'Shahjahanpur'),
(611, 35, 'Shamli'),
(612, 35, 'Shravasti'),
(613, 35, 'Siddharthnagar'),
(614, 35, 'Sitapur'),
(615, 35, 'Sonbhadra'),
(616, 35, 'Sultanpur'),
(617, 35, 'Unnao'),
(618, 35, 'Varanasi'),
(619, 34, 'Almora'),
(620, 34, 'Bageshwar'),
(621, 34, 'Chamoli'),
(622, 34, 'Champawat'),
(623, 34, 'Dehradu'),
(624, 34, 'Haridwar'),
(625, 34, 'Nainital'),
(626, 34, 'Pauri Garhwal'),
(627, 34, 'Pithoragarh'),
(628, 34, 'Rudraprayag'),
(629, 34, 'Tehri Garhwal'),
(630, 34, 'Udham Singh Nagar'),
(631, 34, 'Uttarkashi'),
(632, 36, 'Bankura'),
(633, 36, 'Bardhama'),
(634, 36, 'Birbhum'),
(635, 36, 'Cooch Behar'),
(636, 36, 'Dakshin Dinajpur'),
(637, 36, 'Darjeeling'),
(638, 36, 'Hooghly'),
(639, 36, 'Howrah'),
(640, 36, 'Jalpaiguri'),
(641, 36, 'Kolkata'),
(642, 36, 'Maldah'),
(643, 36, 'Murshidabad'),
(644, 36, 'Nadia'),
(645, 36, 'North 24 Parganas'),
(646, 36, 'Paschim Medinipur'),
(647, 36, 'Purba Medinipur'),
(648, 36, 'Purulia'),
(649, 36, 'South 24 Parganas'),
(650, 36, 'Uttar Dinajpur');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `query` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 100
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `fullname`, `email`, `query`, `status`) VALUES
(10, 'Dinesh rao', 'dhanraj.rao275@gmail.com', 'you should add more option.\r\n', 101),
(11, 'Dinesh rao', 'dhanraj.rao275@gmail.com', 'hello', 101),
(12, 'Dinesh rao', 'dhanraj.rao275@gmail.com', 'hello', 101),
(13, 'Dinesh rao', 'dhanraj.rao275@gmail.com', 'helo', 101);

-- --------------------------------------------------------

--
-- Table structure for table `registrationuser`
--

CREATE TABLE `registrationuser` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `iddetails` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrationuser`
--

INSERT INTO `registrationuser` (`id`, `firstname`, `lastname`, `photo`, `email`, `phone`, `idproof`, `iddetails`, `username`, `password`, `location`) VALUES
(6, 'vansh', 'duggar', '009.JPG', 'vanshduggar12@gmail.com', '9876543210', 'Aadhar card', '98763456765387656', 'vansh', 'vanshduggar', 'udaipur raj.'),
(7, 'udayram', 'rao', '000.JPG', 'udayramrao375@gmal.com', '8435191951', 'Aadhar card', '2147483647', 'udayram', '12345678', 'pahuna,rajasthan'),
(8, 'Dinesh', 'Rao', 'view.jpg', 'dhakerpushp@gmail.com', '8290667489', 'Aadhar card', '868681649580', 'dinesh', '12345678', 'jhanwer ka rajpura'),
(9, 'prasann', 'lasod', 'Screenshot_2021-02-17-08-45-06-350_com.whatsapp.jpg', 'prasannlasod0009@gmail.com', '7470988648', 'Aadhar card', '765798761234', 'prasann', 'prasannlasod', 'Ahinsapath, singoli m.p.'),
(10, 'anita', 'rao', 'kyaw-tun-k6BHLfw_jUg-unsplash.jpg', 'dhanraj.rao275@gmail.com', '08290667489', 'Aadhar card', '123456789012', 'anu', '12345678', 'jhanwer ka rajpura');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `StCode` int(11) NOT NULL,
  `StateName` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`StCode`, `StateName`) VALUES
(1, 'Andaman and Nicobar Island (UT)'),
(2, 'Andhra Pradesh'),
(3, 'Arunachal Pradesh'),
(4, 'Assam'),
(5, 'Bihar'),
(6, 'Chandigarh (UT)'),
(7, 'Chhattisgarh'),
(8, 'Dadra and Nagar Haveli (UT)'),
(9, 'Daman and Diu (UT)'),
(10, 'Delhi (NCT)'),
(11, 'Goa'),
(12, 'Gujarat'),
(13, 'Haryana'),
(14, 'Himachal Pradesh'),
(15, 'Jammu and Kashmir'),
(16, 'Jharkhand'),
(17, 'Karnataka'),
(18, 'Kerala'),
(19, 'Lakshadweep (UT)'),
(20, 'Madhya Pradesh'),
(21, 'Maharashtra'),
(22, 'Manipur'),
(23, 'Meghalaya'),
(24, 'Mizoram'),
(25, 'Nagaland'),
(26, 'Odisha'),
(27, 'Puducherry (UT)'),
(28, 'Punjab'),
(29, 'Rajasthan'),
(30, 'Sikkim'),
(31, 'Tamil Nadu'),
(32, 'Telangana'),
(33, 'Tripura'),
(34, 'Uttarakhand'),
(35, 'Uttar Pradesh'),
(36, 'West Bengal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_driver`
--
ALTER TABLE `add_driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_places`
--
ALTER TABLE `add_places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_vehicle`
--
ALTER TABLE `add_vehicle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`CityCode`),
  ADD KEY `StCode` (`StCode`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrationuser`
--
ALTER TABLE `registrationuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`StCode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_driver`
--
ALTER TABLE `add_driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `add_places`
--
ALTER TABLE `add_places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `add_vehicle`
--
ALTER TABLE `add_vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `CityCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=651;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `registrationuser`
--
ALTER TABLE `registrationuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `StCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
