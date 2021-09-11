-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2021 at 04:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(5) NOT NULL,
  `cat_id` int(2) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `photo` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `createtime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `cat_id`, `title`, `content`, `photo`, `name`, `status`, `createtime`) VALUES
(19, 22, 'Samsung Galaxy Z Fold 3 review: The best foldable ', '               <p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 1.5; font-size: 16px; vertical-align: baseline; color: rgb(51, 51, 51);\"><span style=\"font-family: Arial;\">The Samsung Galaxy Z Fold 3 is determined to win over foldable phone skeptics. Worried about the device’s durability? The display is up to 80% tougher, and the whole phone is water resistant. Want to do more with a massive 7.6-inch screen? There’s S Pen support, plus an under-display camera to make for a more immersive display.&nbsp;</span></p><div id=\"ad-unit-1\" class=\"ad-unit\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-size: 16px; vertical-align: baseline; color: rgb(51, 51, 51);\"></div><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 1.5; font-size: 16px; vertical-align: baseline; color: rgb(51, 51, 51);\"><span style=\"font-family: Arial;\">Think foldable phones cost too much? Well, we can’t help you much there. This sequel is still pricey at $1,799, but at least it’s $200 cheaper than its predecessor at launch</span></p>               \r\n                          ', '20210906082813.jpg', 'MD.Mofasser Hossain', 1, '2021-09-06 06:28:13'),
(20, 22, 'iPhone 12 Pro Max review', '               <p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 1.5; font-size: 16px; vertical-align: baseline; color: rgb(51, 51, 51);\"><span style=\"font-family: Arial;\">The iPhone 12 Pro max is decked out in premium-looking, more muted colors though, and we\'re fans of the shiny metal rim around the edge (despite the fact that it\'s a real fingerprint magnet). It gives the big phone a modern and industrial look.<br></span></p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 1.5; font-size: 16px; vertical-align: baseline; color: rgb(51, 51, 51);\"><span style=\"font-family: Arial;\">While the iPhone 12 Pro Max is actually only a very small amount bigger than last year\'s&nbsp;<a href=\"https://www.techradar.com/reviews/iphone-11-pro-max-review\" data-component-tracked=\"1\" class=\"hawk-link-parsed\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; color: rgb(47, 110, 145);\">11 Pro Max</a>, the bezels around the OLED display have been shrunk to allow Apple to increase the screen size to 6.7 inches – and it\'s a compelling reason to pick up the new larger iPhone.</span></p><div id=\"ad-unit-2\" class=\"ad-unit\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-size: 16px; vertical-align: baseline; color: rgb(51, 51, 51);\"></div><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 1.5; font-size: 16px; vertical-align: baseline; color: rgb(51, 51, 51);\"><span style=\"font-family: Arial;\">Images are clearer and more visible on the larger display, you can see more of a web page or image in daily use – and as a movie-watching machine it\'s the best iPhone ever. It\'s one of the best displays on the market, able to render both colorful scenes and more subtle tones with ease.</span></p>               \r\n                          ', '20210906084021.jpg', 'MD.Mofasser Hossain', 1, '2021-09-06 06:40:21'),
(21, 22, 'The second most expensive car of 2021', '                              <p style=\"box-sizing: inherit; margin: auto; padding-bottom: 30px; width: 650px;\"><span style=\"font-family: Arial;\">In 2019, Bugatti made a brilliant branding decision when rolling out their latest supercar. Instead of a flashy introduction and name geared to thrill, the French manufacturer opted for a restrained, minimalistic, and instantly iconic title&nbsp;<span style=\"box-sizing: inherit;\"><span style=\"box-sizing: inherit;\">La Voiture Noire.</span>&nbsp;</span><span style=\"box-sizing: inherit;\">The Black Car</span>.&nbsp;</span></p><p style=\"box-sizing: inherit; margin: auto; padding-bottom: 30px; width: 650px;\"><span style=\"font-family: Arial;\">No other description necessary.&nbsp;</span></p><p style=\"box-sizing: inherit; margin: auto; padding-bottom: 30px; width: 650px;\"><span style=\"font-family: Arial;\">Although, going into details doesn’t interrupt the awe of this gorgeous vehicle with a sky-high price: It’s got a carbon-fibre shell that’s sculpted by hand, a quad-turbo W16 8.10L engine that produces 1500 horsepower, and an acceleration of 0-100kph (0-60mph) in 2.4 seconds.&nbsp;</span></p>               \r\n                                       ', '20210906090637.jpg', 'MD.Mofasser Hossain', 1, '2021-09-06 07:06:37'),
(22, 23, 'St. Martin-pride of Bangladesh', '                              <p><span style=\"font-family: Arial;\">St. Martin is generally known as “Narikel Zinzira” in Bengali, means \'Coconut Island’ and this is the only coral reef island in Bangladesh. It is a small island in the north eastern part of the Bay of Bengal, created the southernmost part of our country. It is about 8 km west of the northwest coast of Myanmar, at the mouth of the Naf River. It is only 8 sq. Kilometre in size. Experts separate this island into three parts. Northern part is called Narikel Jinjira. It is 2. 134 km long and 1, 402 m wide. The southern part is called Dakkhin Para by the local and its length and width are successively 1929 m and 1890 m. The middle part which known as Maddhapara locally. The length and width respectively 1524m and 518m.The island is very much ingenious with vast biological variety such as existing fauna and flora Coral, Mollusk, Fish, Amphibian, Turtle, Snail, Bird and Mammals. Besides above coconut tree is the important cash crop.</span></p><p><span style=\"font-family: Arial;\"><br style=\"margin: 0px; padding: 0px;\"></span><span style=\"font-family: Arial;\">General people and livelihood:<br></span><span style=\"font-family: Arial;\">Here are about 5500 inhabitants and they live primarily from fishing. Rice and coconut, most general crops of here. The collection of Algae is very common in this island. After collecting them from water, local people dry them and finally export to Myanmar. Between October and April, the fishermen from neighbouring areas fetch their caught fishes to the island\'s transitory wholesale market. As the centre and the south are mainly farmland and makeshift huts, most of the strenuous things are around the far north of the island. The farmland and makeshift huts are mainly found in the centre of this island.<br></span><span style=\"font-family: Arial;\">Beauty of St. Martin:<br></span><span style=\"font-family: Arial;\">St. Martin is one of the most beautiful visiting places of Bangladesh. It has fresh blue water with corals, beautiful sandy beaches, a lot of coconut trees, and huge natural beauties.<br></span><span style=\"font-family: Arial;\">Sunrise and sunset are two most striking things you can enjoy. You can catch the pleasure from the freshness of the air and the purity of the young sun. Rise early in the morning, take a walk in the sandy beaches, take a deep breath in the fresh air of morning and then enjoy the beauty of the early rising sun. Seems like removing the veil from it, the sun welcome you with warmth. It will be really enjoyable for everyone.</span></p>             ', '20210906093707.jpg', 'MD.Mofasser Hossain', 1, '2021-09-06 07:37:07'),
(23, 23, 'Sajek Valley: A unique tourist spot', '<p style=\"margin-right: 0px !important; margin-bottom: 15px !important; margin-left: 0px !important;\"><span style=\"font-family: Arial;\">Surrounded by the hills of Mizoram on the east and Tripura on the north, Sajek Valley that once witnessed insurgencies now showcases Bangladesh\'s cultural diversity engaging people of different ethnicities in developing tourism in the area for their economic benefit and social uplifting.</span></p><p style=\"margin-right: 0px !important; margin-bottom: 15px !important; margin-left: 0px !important;\"><span style=\"font-family: Arial;\">The river Sajek demarcates the boundary between Bangladesh and India while the area named after it is the biggest union of the country and falls under Baghaichori upazila in Rangamati hill district.</span></p><p style=\"margin-right: 0px !important; margin-bottom: 15px !important; margin-left: 0px !important;\"><span style=\"font-family: Arial;\">Located 95 km north of Rangamati, Sajek is only 67 km north-east of the headquarters of Khagrachhari hill district. Driving through the high peaks and falls of the road one can reach from Khagrachhari to Sajek Valley in about two to three hours. Bangladesh Army provides security escort service in the route from Baghathar to Sajek each day morning and evening.Sajek Valley comprises Ruilui Para, Hamari Para, and Konglak Para, where the Konglak Hill is the one of the main tourist attractions. The last village on the Bangladesh side is located on the Konglak Hill, which is predominantly inhabited by the Lusai people. Apart from the Lusais, Tripura, Pangkhoa, and Chakma people also live there.</span></p><p style=\"margin-right: 0px !important; margin-bottom: 15px !important; margin-left: 0px !important;\"><span style=\"font-family: Arial;\">People started visiting Sajek in 2014, soon after the road network connected the valley with the rest of the country. The Bangladesh Army took about 10 years to complete the road that passed through steep terrains and valleys of the Kasalong range of mountains.</span></p>               \r\n             ', '20210906095424.jpg', 'MD.Mofasser Hossain', 1, '2021-09-06 07:54:24'),
(24, 24, 'Organic Dried Tart Cherries', '<p><span style=\"font-family: Arial;\">Dried tart cherries are incredibly delicious and can enrich the flavor of many dishes, both sour and sweet. They are packed with nutrients and make a fantastic healthy snack. Buy Organic Dried Cherries from Food To Live in bulk to have plenty of tasty berries on hand at any time. Enjoy the delicious taste and numerous health benefits offered by this incredible food.Our dried tart cherries are not only tasty but also very good for your health. Their many advantages include:</span><ul class=\"article-list-last\" style=\"box-sizing: content-box; outline: none; padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style: none;\"><li style=\"box-sizing: content-box; outline: none; padding: 0px 0px 0px 24px; margin: 0px 0px 16px; line-height: 1.4;\"><span style=\"font-family: Arial;\">Boosting your general well-being due to potent antioxidants</span></li></ul><ul class=\"article-list-last\" style=\"box-sizing: content-box; outline: none; padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style: none;\"><li style=\"box-sizing: content-box; outline: none; padding: 0px 0px 0px 24px; margin: 0px 0px 16px; line-height: 1.4;\"><span style=\"font-family: Arial;\">Support and promotion of heart health due to flavonoids</span></li></ul><ul class=\"article-list-last\" style=\"box-sizing: content-box; outline: none; padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style: none;\"><li style=\"box-sizing: content-box; outline: none; padding: 0px 0px 0px 24px; margin: 0px 0px 16px; line-height: 1.4;\"><span style=\"font-family: Arial;\">Healthy sleep support provided by the combination of tryptophan and melatonin contained in dried tart cherries</span></li></ul><ul class=\"article-list-last\" style=\"box-sizing: content-box; outline: none; padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style: none;\"><li style=\"box-sizing: content-box; outline: none; padding: 0px 0px 0px 24px; margin: 0px 0px 16px; line-height: 1.4;\"><span style=\"font-family: Arial;\">Pain relief that comes from the unique mix of chemicals, including amygdalin (essential phenolic acid).The lovers of Organic Dried Cherries are in luck as this is a somewhat low-calorie snack as far as dried fruits go. An ounce of the berries gives you around 98 calories and 0 fats. However, they provide you with an infusion of valuable nutrients, such as Vitamin C, B vitamins, Manganese, Potassium, Magnesium. Dried cherries also contain small amounts of iron and calcium, making them a useful addition to a vegan diet. Like all dried fruits, they are very rich in dietary fiber. Because they give you calories without fats and even contain a bit of easily absorbable proteins, they can be included in an athlete or bodybuilder’s meal plan.</span></li></ul></p>', '20210906101343.jpg', 'MD.Mofasser Hossain', 1, '2021-09-06 08:13:43'),
(25, 24, 'Organic Broccoli Seeds Health Benefits', '<p style=\"box-sizing: content-box; outline: none; padding: 0px; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; line-height: 1.5; font-stretch: normal;\"><span style=\"font-family: Arial;\">All sprouts have to offer is good for your health, so you won’t go wrong by adding them to your diet. However, organic broccoli seeds will provide you with sprouts that are truly incredible. The most important benefits they offer are:</span></p><p><ul class=\"article-list-last\" style=\"box-sizing: content-box; outline: none; padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style: none;\"><li style=\"box-sizing: content-box; outline: none; padding: 0px 0px 0px 24px; margin: 0px 0px 16px; line-height: 1.4;\"><span style=\"font-family: Arial;\">All cruciferous vegetables contain glucoraphanin. However, you’ll need to consume large amounts of mature plants to achieve the same effect as a handful of broccoli sprouts can provide. Eating so many of these veggies is dangerous for people who suffer from hypothyroidism and iodine deficiency. Sprouts, on the other hand, don’t trigger these adverse side effects.</span></li></ul><ul class=\"article-list-last\" style=\"box-sizing: content-box; outline: none; padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style: none;\"><li style=\"box-sizing: content-box; outline: none; padding: 0px 0px 0px 24px; margin: 0px 0px 16px; line-height: 1.4;\"><span style=\"font-family: Arial;\">Organic broccoli seeds contain phytoestrogens. Therefore, they are very beneficial to women who often suffer from hormonal imbalances. If you need to increase your level of estrogen, include broccoli seeds in your diet.</span></li></ul><ul class=\"article-list-last\" style=\"box-sizing: content-box; outline: none; padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style: none;\"><li style=\"box-sizing: content-box; outline: none; padding: 0px 0px 0px 24px; margin: 0px 0px 16px; line-height: 1.4;\"><span style=\"font-family: Arial;\">The sprouts contain sulforaphane. This ingredient possesses strong anti-bacterial properties that help with infections and inflammation. This effect is created because sulforaphane can inhibit Helicobacter pylori, a bacterium usually responsible for digestive disorders.</span></li></ul><ul class=\"article-list-last\" style=\"box-sizing: content-box; outline: none; padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style: none;\"><li style=\"box-sizing: content-box; outline: none; padding: 0px 0px 0px 24px; margin: 0px 0px 16px; line-height: 1.4;\"><span style=\"font-family: Arial;\">Autism is a disorder that affects the way your brain processes information. Patients suffering from this condition usually develop severe gastrointestinal diseases. It is the reason that led some scientists to believe that autism triggered by the body’s response to toxic overload. Therefore, organic broccoli seeds can help relieve the symptoms of the disorder by fighting toxins in the gastrointestinal tract.</span></li></ul></p>               \r\n             ', '20210906101932.jpg', 'MD.Mofasser Hossain', 1, '2021-09-06 08:19:32'),
(26, 25, 'Pangolin', '               <p><span style=\"font-family: Arial;\"><br style=\"outline: 0px; overflow: inherit; line-height: 23.8px;\"></span><span style=\"font-family: Arial;\">The most trafficked animal in the world, the pangolin is largely hunted for its meat and scales. There are eight different species of pangolin across two continents (Asia and Africa), and they vary from vulnerable to critically endangered. All eight species are protected under international and national laws, according to&nbsp;<a href=\"http://www.worldwildlife.org/species/pangolin\" style=\"border: 0px; outline-style: initial; outline-width: 0px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; margin: 0px; padding: 0px; -webkit-tap-highlight-color: transparent; transition: color 0.15s ease-in-out 0s, opacity 0.15s ease-in-out 0s; overflow: inherit; line-height: 23.8px;\">WWF</a>.</span></p><span style=\"font-family: Arial;\"><br style=\"outline: 0px; overflow: inherit; line-height: 23.8px;\">Pangolins are also known as scaly anteaters thanks to their diet and their body of scales, which they use for protection when threatened.</span>               \r\n                          ', '20210906102832.jpg', 'MD.Mofasser Hossain', 1, '2021-09-06 08:27:01'),
(29, 25, 'Mandarin Duck', '                              <p>Recently, the mysterious appearance of a mandarin duck alongside the native mallards in ponds across Central Park has captivated New York City, with large groups lining up&nbsp;to catch a glimpse (and snap a photo) of the brightly colored bird. It\'s&nbsp;unclear&nbsp;where he came from—though he has a&nbsp;band&nbsp;on his leg, he doesn\'t belong to any zoos in the area, which has led some to speculate that he was a pet who either escaped or was dumped by his owner in the park—but one thing&nbsp; is clear. This&nbsp; duck is taking the internet by storm.</p>                          ', '20210906111045.jpg', 'Imran', 1, '2021-09-06 09:10:45');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `createtime` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `status`, `createtime`, `updatetime`) VALUES
(22, ' Tech News', 1, '2021-09-06 06:09:45', '2021-09-06 06:09:45'),
(23, ' Tourist Spot', 1, '2021-09-06 06:11:09', '2021-09-06 06:11:09'),
(24, ' Bio Food', 1, '2021-09-06 06:11:21', '2021-09-06 06:11:21'),
(25, ' Wild Animals', 1, '2021-09-06 06:12:24', '2021-09-06 06:12:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `photo` varchar(255) NOT NULL,
  `createtime` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `status`, `photo`, `createtime`, `updatetime`) VALUES
(1, 'Admin', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 0, '', '2021-08-21 21:06:44', '2021-08-31 16:17:22'),
(3, 'Imran', 'imran', 'e10adc3949ba59abbe56e057f20f883e', 1, '20210831091223.jpg', '2021-08-31 07:12:23', '2021-08-31 07:12:23'),
(5, 'Arif Hossain', 'arif', 'cae104b6e30715b633f86a80b3b7c35e', 0, '20210831071120.jpg', '2021-08-31 15:37:59', '2021-08-31 17:12:24'),
(6, 'MD.Mofasser Hossain', 'mofasser', '05077c0a1aafed6e9c6b46d2b71dd3bb', 1, '20210906081421.jpg', '2021-09-06 06:14:21', '2021-09-06 06:14:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_name` (`category_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
