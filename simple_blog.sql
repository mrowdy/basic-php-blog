-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 15, 2013 at 05:07 PM
-- Server version: 5.5.31-0+wheezy1
-- PHP Version: 5.4.4-14+deb7u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simple_blog`
--
CREATE DATABASE IF NOT EXISTS `simple_blog` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `simple_blog`;

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `teaser` text NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_created` int(11) NOT NULL,
  `date_modified` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `slug`, `title`, `teaser`, `content`, `image`, `category_id`, `user_id`, `date_created`, `date_modified`, `status`) VALUES
(1, '', 'A fresh summer breeze in Austria', 'Today, Austria is a semi-presidential, parliamentary representative democracy comprising nine federal states. The capital and largest city, with a population exceeding 1.7 million, is Vienna.', 'The origins of modern-day Austria date back to the time of the Habsburg dynasty when the vast majority of the country was a part of the Holy Roman Empire. From the time of the Reformation, many Northern German princes, resenting the authority of the Emperor, used Protestantism as a flag of rebellion. The Thirty Years War, the influence of the Kingdom of Sweden, and the rise of the Kingdom of Prussia, as well as the Napoleonic invasions, all weakened the power of the Emperor in the North of Germany, but in the South, and in non-German areas of the Empire, the Emperor and Catholicism maintained control. During the 17th and 18th centuries, Austria became one of the great powers of Europe and, in response to the coronation of Napoleon as the Emperor of the French, the Austrian Empire was officially proclaimed in 1804. Following Napoleon''s defeat, Prussia emerged as Austria''s chief competitor for rule of a larger Germany. Austria''s defeat by Prussia at the Battle of KÃ¶niggrÃ¤tz, during the Austro-Prussian War of 1866 cleared the way for Prussia to assert control over the rest of Germany.', 'travel1.png', 1, 1, 1383075503, 1383949415, 1),
(2, '', 'Greetings from Sweden!', 'Sweden is divided into twenty-one counties. They are Stockholm, Uppsala, SÃ¶dermanland, Ã–stergÃ¶tland, JÃ¶nkÃ¶ping, Kronoberg, Kalmar, Gotland, Blekinge, SkÃ¥ne, Halland, VÃ¤stra GÃ¶taland.', 'Sweden''s capital city is Stockholm. Sweden is a constitutional monarchy because it has a king, Carl XVI Gustaf. Sweden is a parliamentary state meaning that the government is elected by the parliament which is appointed by the people. The country is democratically ruled by a government headed by an elected prime minister, who currently is Fredrik Reinfeldt. Sweden has an official majority language, Swedish (svenska). Sweden has five official minority languages, Finnish, Yiddish, Sami,  MeÃ¤nkieli and Romani. Sweden became a member of the European Union in 1995. It is not a member of the European Monetary Union and it has not begun to use the euro as currency. This is because the people have voted against this. The currency remains the Swedish krona (Swedish crown).', 'travel2.png', 1, 2, 1383076730, 1383950303, 1),
(3, '', 'Lovely ship tour in Greece', 'The names for the nation of Greece and the Greek people differ from the names used in other languages and cultures.  Although the Greeks call the country Hellas or Ellada.', 'Following the assassination of Phillip II, his son Alexander III ("The Great") assumed the leadership of the League of Corinth and launched an invasion of the Persian Empire with the combined forces of all Greek states in 334 BC.  Following Greek victories in the battles of Granicus, Issus and Gaugamela, the Greeks marched on Susa and Persepolis, the ceremonial capital of Persia, in 330 BC.  The Empire created by Alexander the Great stretched from Greece in the west and Pakistan in the east, and Egypt in the south.\r\nBefore his sudden death in 323 BC, Alexander was also planning an invasion of Arabia.  His death marked the collapse of the vast empire, which was split into several kingdoms, the most famous of which were the Seleucid Empire and Ptolemaic Egypt.  Other states founded by Greeks include the Greco-Bactrian Kingdom and the Greco-Indian Kingdom in India.  Although the political unity of Alexander''s empire could not be maintained, it brought about the dominance of Hellenistic civilization and the Greek language in the territories conquered by Alexander for at least two centuries, and, in the case of parts the Eastern Mediterranean, considerably longer.', 'travel3.png', 1, 2, 1383238389, 1383472265, 1),
(4, '', 'We are living in America!', 'The state of Alaska is the northwestern part of North America and the state of Hawaii is an archipelago in the mid-Pacific. The country also has five populated and nine unpopulated territories in the Pacific and the Caribbean.', 'In the early days of colonization many settlers were subject to shortages of food, disease and attacks from native Indians. Indians were also often at war with neighboring tribes and would often enslave their defeated enemy, a practice that was also soon used by various colonists who captured Indians in battle. During the various colonial wars, many colonists were also captured by Indians as slaves and taken north to Canada and sold to the French. At the same time however many natives and settlers got along and came to depend on each other, especially settlers during the winter months. Natives also came to depend on settlers for guns, ammunition, powder and other modern devices. Because many tribes were frequently at war with one another it became imperative to establish and secure good relationships with at least one group of colonists. As colonists began to spread out into the interior their contact with native Indians increased, sometimes resulting in good relations, oftentimes resulting in conflict. In the process "Native American influenced colonist, and colonist influenced Native American".', 'travel4.png', 1, 2, 1383238394, 1383238394, 1),
(5, '', 'Hot sun in Florida', 'Much of Florida is a peninsula between the Gulf of Mexico, the Atlantic Ocean, and the Straits of Florida. Its geography is notable for a coastline, omnipresent water and the threat of hurricanes.', 'Since the first European contact was made in 1513 by Spanish explorer Juan Ponce de LeÃ³n â€“ who named it La Florida upon landing there during the Easter season, Pascua Florida â€“ Florida was a challenge for the European colonial powers before it gained statehood in the United States in 1845. It was a principal location of the Seminole Wars against the Indians, and racial segregation after the American Civil War. Today, it is distinguished by its large Hispanic community, and high population growth, as well as its increasing environmental concerns. Its economy relies mainly on tourism, agriculture, and transportation, which developed in the late 19th century. Florida is also known for its amusement parks, the production of oranges, and the Kennedy Space Center.\r\nFlorida culture is a reflection of influences and multiple inheritance; Native American, European American, Hispanic and African American heritages can be found in the architecture and cuisine. Florida has attracted many writers such as Marjorie Kinnan Rawlings, Ernest Hemingway and Tennessee Williams, and continues to attract celebrities and athletes. It is internationally known for golf, tennis, auto racing, and water sports.', 'travel5.png', 1, 2, 1383238611, 1383950198, 1),
(6, '', 'The streets of New York', 'New York is a state in the Northeastern region of the United States. New York is the 27th-most extensive, the third-most populous, and the seventh-most densely populated of the 50 United States.', 'New York was inhabited by various tribes of Algonquian and Iroquoian speaking Native Americans at the time Dutch settlers moved into the region in the early 17th century. In 1609, the region was first claimed by Henry Hudson for the Dutch. Fort Nassau was built near the site of the present-day capital of Albany in 1614. The Dutch soon also settled New Amsterdam and parts of the Hudson River Valley, establishing the colony of New Netherland. The British took over the colony by annexation in 1664.\r\nThe borders of the British colony, the Province of New York, were roughly similar to those of the present-day state. About one third of all the battles of the Revolutionary War took place in New York. The state constitution was enacted in 1777. New York became the 11th state to ratify the United States Constitution, on July 26, 1788. Henry Hudson''s 1609 voyage marked the beginning of European involvement with the area. Sailing for the Dutch East India Company and looking for a passage to Asia, he entered the Upper New York Bay on September 11 of that year.', 'travel6.png', 1, 1, 1383238633, 1383238633, 1),
(7, '', 'Delicious pizza with basil and mushrooms', 'Pizza is a type of food that was created in Italy. It is usually made by putting "toppings" (such as cheese, sausage, pepperoni, vegetables, tomatoes, spices and herbs) over a piece of bread covered with sauce; most often tomato, but sometimes butter-based sauces are used.', 'In the 20th century, pizza has become an international food and the toppings may be quite different in accordance with local tastes. These pizzas consist of the same basic design but include many choice of ingredients, such as anchovies, egg, pineapple, banana, coconut, sauerkraut, eggplant, kimchi, lamb, couscous, chicken, fish, and shellfish, meats prepared in styles such as Moroccan lamb, shawarma or chicken tikka masala, and non-traditional spices such as curry and Thai sweet chili. Pizzas can also be made without meat for vegetarians, and without cheese for vegans. Neapolitan pizza (pizza Napoletana). Authentic Neapolitan pizzas are made with local ingredients like San Marzano tomatoes, which grow on the volcanic plains to the south of Mount Vesuvius and Mozzarella di Bufala Campana, made with the milk from water buffalo raised in the marshlands of Campania and Lazio in a semi-wild state (this mozzarella is protected by its own European law). The genuine Neapolitan pizza dough consists of Italian flour, natural Neapolitan yeast or brewer''s yeast, salt and water.', 'food_pizza.png', 2, 1, 1383857488, 1383857488, 1),
(8, '', 'Tender steak in red wine sauce', 'Main courses and side dishes can be enhanced greatly when paired with a sauce to complement natural flavors and maintain moisture.', 'Busy cooks may not have time to fuss with complicated, time consuming recipes, so a simple yet tasty easy-to-make sauce is essential. Learning how to make red wine sauce can benefit any cook because it is easy to make and has a rich, zesty flavor that enhances many dishes. Often thought of as a sauce for red meat, red wine sauce also goes well with fish, poultry, pork and even vegetables. Once you know how to make red wine sauce with easy steps and a basic recipe, you can use it for countless dishes and vary the ingredients to make your very own variation of this versatile sauce.', 'food_steak.png', 2, 2, 1383857488, 1383857488, 0),
(9, '', 'California rolls with caviar', 'The California roll is a maki-zushi, a kind of sushi roll, usually made inside-out, containing cucumber, crab meat or imitation crab, and avocado. In some countries it is made with mango or banana instead of avocado.', 'In the 1960s, Los Angeles, California became the entry point for sushi chefs from Japan seeking to make their fortune in the United States. The Tokyo Kaikan restaurant then featured one of the first sushi bars in Los Angeles. Ichiro Mashita, a sushi chef at the Kaikan, began substituting avocado for toro (fatty tuna), and after further experimentation, the California roll was born. (The date is often given as the early 1970s in other sources.) Mashita realized the oily texture of avocado was a perfect substitute for toro. Traditionally sushi rolls are wrapped with nori on the outside. But Mashita also eventually made the roll "inside-out", i.e. uramaki, because Americans did not like seeing and chewing the nori on the outside of the roll.\r\nAfter becoming a favorite in Southern California it eventually became popular all across the United States by the 1980s. The roll contributed to sushi''s growing popularity in the United States by easing diners into more exotic sushi options. Sushi chefs have since devised many kinds of rolls, beyond simple variations of the California roll. Many sushi restaurants in North America now feature a menu of such rolls.\r\nAnother Japanese chef, Hidekazu Tojo based in Vancouver, British Columbia, claims to have invented what is known today as the California Roll in the 1970s.', 'food_sushi.png', 2, 2, 1383942058, 1383942058, 1),
(10, '', 'Creamy chocolate soufflÃ© with berries', 'Due to soufflÃ©s'' tendency to collapse quickly upon removal from the oven, they are frequently depicted in cartoons and children''s programs as a source of humor. ', 'Often the gag involves a loud noise or poke causing the soufflÃ© to collapse like a popped balloon, evoking the dejection of the character being served the anticipated dessert. The base provides the flavor and the whites provide the "lift". Foods commonly used for the base in a soufflÃ© include cheese, jam, fruits, berries, chocolate, banana and lemon (the last three are used for desserts, often with a large amount of sugar). When it comes out of the oven, a soufflÃ© should be puffed up and fluffy, and it will generally fall after 5 or 10 minutes (as risen dough does).\r\nSoufflÃ©s can be made in containers of all shapes and sizes but it is traditional to make soufflÃ© in ramekins. These containers vary greatly in size, but are typically glazed white, flat-bottomed, round porcelain containers with unglazed bottoms and fluted exterior borders.\r\nThere are a number of variations on the soufflÃ© theme. One is an ice cream soufflÃ©, which combines a soufflÃ© with ice cream and either a fruit or a hot sauce.\r\nAnother kind of dish entirely is soufflÃ© potatoes, which are puffed-up sautÃ©ed potato slices, traditionally served with a chateaubriand steak.', 'food_schoko.png', 2, 1, 1383942243, 1383950064, 1),
(11, '', 'Hot ''n'' spicy vegetable pho', 'Pho is a Vietnamese noodle soup consisting of broth, linguine-shaped rice noodles, a few herbs, and meat.', 'The broth for beef pho is generally made by simmering beef bones, oxtails, flank steak, charred onion, charred ginger and spices. For a more intense flavor, the bones may still have beef on them. Chicken bones also work and produce a similar broth. Seasonings can include Saigon cinnamon or other kinds of cinnamon as alternatives (may use usually in stick form, sometimes in powder form in Pho restaurant franchises overseas), star anise, roasted ginger, roasted onion, black cardamom, coriander seed, fennel seed, and clove. The broth takes several hours to make. For chicken pho, only the meat and bones of the chicken are used in place of beef and beef bone. The remaining spices remain the same, but the charred ginger can be omitted, since its function in beef pho is to subdue the quite strong smell of beef.\r\nThe spices, often wrapped in cheesecloth or soaking bag to prevent them from floating all over the pot, usually contain: clove, star anise, coriander seed, fennel, cinnamon, black cardamom, ginger and onion.\r\nCareful cooks often roast ginger and onion over an open fire for about a minute before adding them to the stock, to bring out their full flavor. They also skim off all the impurities that float to the top while cooking; this is the key to a clear broth. Fish sauce is added toward the end.', 'food_soup.png', 2, 1, 1383942401, 1383950117, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `date_created` int(11) NOT NULL,
  `date_modified` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `date_created`, `date_modified`, `status`) VALUES
(1, 'Travel', 'travel', 1383842114, 1383949523, 1),
(2, 'Food', 'food', 1383842114, 1383842114, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` int(11) NOT NULL,
  `date_modified` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `date_created`, `date_modified`, `status`) VALUES
(1, 'markus', '16d7a4fca7442dda3ad93c9a726597e4', 1383842718, 1383842718, 1),
(2, 'raph', '098f6bcd4621d373cade4e832627b4f6', 0, 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
