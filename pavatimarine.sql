-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2013 at 09:53 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pavatimarine`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutcontent`
--

CREATE TABLE IF NOT EXISTS `aboutcontent` (
  `aboutcontentid` int(11) NOT NULL AUTO_INCREMENT,
  `abouttabid` int(11) NOT NULL,
  `aboutcontent` text NOT NULL,
  PRIMARY KEY (`aboutcontentid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `aboutcontent`
--

INSERT INTO `aboutcontent` (`aboutcontentid`, `abouttabid`, `aboutcontent`) VALUES
(1, 1, '<img src=''../imgs/about/about-header-image-main-page-fabrication.jpg'' /><h3>building better drift boats since 2003</h3>\n<p>We are located in Southern Oregon, about five miles from Medford. Mountain views surround our headquarters, with the Rogue River running only minutes away. We build the highest quality drift boats in the world. \n<br><br>\nChuck Gros, Pavati Marine founder, spent a lot of time fishing on the Rogue River with his family and friends as a boy. Over time his weekend fishing hobby became a passion, but was hindered by cheap and clunky drift boats. This led him to design his own drift boat - suited for a serious, experienced fisherman. Our drift boats are not for novices, they are not for inexperienced fishermen. Pavati drift boats are for fishing pros, people who understand how great of an impact a quality boat has on a fishing trip.\n<br><br>\nOn the same day that Chuck was born his family was also starting an aluminum fabrication shop, which quickly became one of the most trusted manufacturers in the trucking industry, Highway Products, Inc. This strong heritage of quality manufacturing and production would ultimately give Chuck the tools he needed to start Pavati Marine. He grew up in the business, working his way up from emptying trash cans and sweeping floors for his allowance, to becoming Company Manager.\n<br><br>\nThat was not enough for Chuck. He wanted to have his own business, so he began putting together his many years of ideas and plans to build the highest-quality drift boat ever made.\n<br><br>\nAlthough Chuck may have picked one of the toughest times in history to start a business, his new ideas and patents have already given Pavati Marine a distinct reputation in a very competitive boat industry. North West Sportsman magazine has already said. "Where does he come up with this stuff? We''re going to keep an eye on this guy."</p><img src=''../imgs/highway-products-inc-logo.jpg'' />'),
(2, 2, '<h3>Adjustable Boat Seats & Accessories</h3>\n<br><h4>US Patent Number 8.387.940</h4>\n\n<img style=''margin-right:2%; width:48%'' src=''../imgs/patents/pavatimarine-boat-patent-8387940B2-adjustable-seats.png'' />\n<img style=''margin-left:2%; width:48%'' src=''../imgs/patents/pavatimarine-boat-patent-8387940B2-adjustable-seats-side.png'' />\n\n<p>The Quick-Lock Floor System &trade; is the easiest most customizable seat system available in ANY boat today-PERIOD. In a matter of seconds, with no tools required, you can completely rearrange a Pavati to adjust for weight and/or different fishing styles. Move seats side to side or front to back to adjust weight for optimal balance and rowing comfort. Add or remove seats to lighten the load or add an additional fisherman. Put a seat in the back and offset it to run a kicker motor. And it''s not just the seats... Reposition your foot rest exactly where you want it, add heater systems, Tackle boxes, Rod holders and other accessories that all work with the same simple system. </p>\n\n<h3>Boats with Doors</h3>\n<br><h4>US Patent Number D610.959</h4>\n\n<img style=''margin-right:2%; width:48%'' src=''../imgs/patents/pavatimarine-boat-patent-D610959S-boat-doors.png'' />\n<img style=''margin-let:2%; width:48%'' src=''../imgs/patents/pavatimarine-boat-patent-D610959S-boat-doors-side.png'' />\n\n<p>Getting in and out of drift boats, a hazard? If you''ve been in a drift boat before, you already know this answer. It''s cold and wet, you''re wearing chest waders and stove up a little from sitting for a while. Bang! You hook up to a big steelhead and need to get out to land it! Right Now! When you finally get your poor old leg over the side, you slip on a mossy rock and, well you know the rest. With a PAVATI, you simply open the door and step out. Fly fisherman get in and out of their drift boats pretty often to sneak up on that wily rainbow. A door allows you to turn and put your feet out first, testing the water depth and the solidity of your footing before you make that giant leap for mankind.\nIf you fly fish, you already know what we''re talking about.\n<br><br>\nGrampa was getting to the point where he couldn''t get in the boat anymore. "Why don''t they put doors in these boats?" he said.\nWhen Chuck decided to build drift boats, this was one of the first things he designed. "I want everyone, young, old, or disabled to enjoy the fun and adventure of riding in a drift boat." says Chuck.\nEver get your foot caught trying to sling it over the side of a drift boat? Getting in or out can be embarrassing. Put a pair of chest waders on and it turns into a major feat. Add some moss on the river bottom and you have a potential disaster.\nDo the doors leak? No. We use a marine grade weather seal around the doors. Plus, we install the doors above the water line. Only during choppy water conditions would water get high enough to come in the door. Most of us would have the door closed at that time. They don''t leak. They''re also a great spot to revive and/or release fish, wash your hand, or even relieve yourself.</p>\n\n<h3>Boat Hull & Bow</h3>\n<br><h4>US Patent Number D642.108</h4>\n\n<p><img style=''text-align:left; width:100%'' src=''../imgs/patents/pavatimarine-boat-patent-D642108S-boat-hull-and-bow.png'' /></p>\n\n<h3>Anchor Retainers</h3>\n<br><h4>US Patent Number D685.313</h4>\n\n<p><img style=''margin-right:3%; text-align:left; width:32%'' src=''../imgs/patents/pavatimarine-boat-patent-D685313S-anchor-nest.png'' />This anchor setup has an anchor nest with a lock to keep the anchor from jumping out during travel, a spot for your drain plugs, a block and tackle setup for easy pulling, and the anchor release mechanism.</p>\n\n<h3>Hull Handle Aperture</h3>\n<br><h4>US Patent Number D685.314</h4>\n\n<p><img style=''margin-right:3%; text-align:right; width:32%'' src=''../imgs/patents/pavatimarine-boat-patent-D685314S-hull-handle.png'' />Pavati has added handy grab handles to the sides of the hull. Just below the gunnel rail near the oar locks, we have programmed in computer cut holes. These make it easy to pick the boat up or portage around logs/skinny spots in the river.</p>\n\n\n<h3>Boat Doors</h3>\n<br><h4>US Patent Number 8.146.526</h4>\n\n<img style=''margin-right:2%; width:48%'' src=''../imgs/patents/pavatimarine-boat-patent-8146526B2-boat-door.png'' />\n<img style=''margin-left:2%; width:48%'' src=''../imgs/patents/pavatimarine-boat-patent-8146526B2-boat-door-closed.png'' />'),
(3, 3, '<img src=''../imgs/about/about-header-image-drifter-doors.jpg'' />\n<h3>Drifter Doors &trade;</h3>\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sit amet justo dui. Vivamus eu quam scelerisque, tristique est sed, bibendum enim. Integer nunc erat, mollis at dictum at, lobortis at velit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin condimentum id dui pulvinar ullamcorper. Vestibulum fermentum porta nunc eu tempor. Ut eget augue leo. Donec aliquam luctus sagittis.<br><br>\nCras iaculis molestie orci at malesuada. Praesent massa dui, gravida sed luctus id, aliquam vel enim. Aliquam ut dictum elit. Donec lacinia hendrerit vulputate. In nec tempus justo. Sed a velit pharetra, fermentum massa ac, mollis urna. Aliquam convallis justo arcu. Sed posuere sapien eu nunc consequat pulvinar. Fusce sapien enim, laoreet non laoreet sed, interdum volutpat velit. Nulla facilisi. Aliquam bibendum elit velit, hendrerit venenatis nulla accumsan ac. Suspendisse ornare pharetra urna, a rhoncus nunc ullamcorper in. In ac ultricies nisl.</p>'),
(4, 4, '<h3>what our customers have to say</h3>\n<p>\n\n<b>Joe, California</b><br>\nThanks to Ken for meeting us in Grenada and showing us a Pavati Drift Boat as he was going to Santa Rosa. What a fantastic drift boat. I will be up to see your business and view the models on hand.\n<br><br>\n\n<b>Thomas, Alabama</b><br>\nThe new features of your drift boat caught my eye, and I could not wait to get to your Website. The boating industry needs new innovations to push new designs and the idea of doors  is simply genius. The older fishermen will appreciate the fact that entry and exit is a lot easier now.\n<br><br>\n\n<b>Jay, Idaho</b><br>\nI`ve seen your add in Salmon Trout Steelheader several times but haven''t seen too many of your boats on the rivers in Idaho that I fish. However I think your boat designs are top notch. I also think the local boat manufactorers and dealers in Idaho Falls should take notice.\n<br><br>\n\n<b>Brad, Oregon</b><br>\nA friend just got his Pavati and I''m impressed. After my knee replacement and soon to be hip replacement surgery (at 50) those doors are looking really good.\n<br><br>\n\n<b>Dave, Pennsylvania</b><br>\nYour boats are the best I have ever seen. I am going up to Pulaski NY in 2 weeks. I see where you have a used driftboat listed for sale at Fat Nancy''s shop. I don''t know if it''s still available but I will be stopping there for supplies and will be looking for it. Great web page too.\n<br><br>\n\n<b>Keith, Tennessee</b><br>\nI would love to help you all spread the word down South. I mean...for real the Warrior has the best Features I have ever seen. So keep up the ground breaking work and I can''t wait until I get a chance to row one of these babies.\n<br><br>\n\n<b>Cody, Utah</b><br>\nI''ve been looking into getting a good drift boat, I''ve looked at Hyde and few others but the ideas you guys have come up with are the best I''ve seen. Thank you for your inovative ideas.\n<br><br>\n\n<b>Don, California</b><br>\nI see your ads in STS every edition and now some lucky guy is running a Pavati with an OB jet on the Feather River in Northern California. Looks awesome on the water. I''ll be watching your progress with jet boats, as I will be purchasing soon.\n<br><br>\n\n<b>James, Washington</b><br>\nYour boats have real good smooth lines and very navigable through the rivers and oceans. Looks like me and my lab fishing on the river banks in the back of Salmon Trout Steelheader Magazine.\n<br><br>\n\n<b>Jeremy, Alaska</b><br>\nStarting to look at driftboats... I''m interested to know the starting prices on your different packages, love the doors, pizza oven, and a rowers seat with a back rest! Keep the ideas coming!\n<br><br>\n\n<b>Rich, Idaho</b><br>\nLove your creations. All class and great design!\n<br><br>\n\n<b>William, Pennsylvania</b><br>\nGreat crafts and designs. I am a fan... would love to own one... one day should the deal and opportunity present itself.\n<br><br>\n\n<b>Tom, California</b><br>\nYour boats have beautiful lines and innovative features. My future Pavati driftboat awaits.\n<br><br>\n\n<b>Denny, Washington</b><br>\nVery Impressive ; just want to make the right choice on a drift boat the first time, so many choices &  options.\n<br><br>\n\n<b>Geoff, Oregon</b><br>\nI am currently working on getting my wife to see the need for a different boat, the doors on your drift boats are so far the biggest selling point for her.\n<br><br>\n\n<b>Alex, Idaho</b><br>\nBoats look awesome, love the creativity and forward thinking.\n<br><br>\n\n</p>'),
(5, 5, '<h3>pavati marine outbound links</h3>\n<p>\n\n<a target=''new'' href=''http://www.highwayproducts.com''>Highway Products Inc.</a><br>Truck bodies, tool boxes, and other trucking accessories.<br><br>\n\n<a target=''new'' href=''http://www.lamiglas.com''>Lamiglas</a><br>Fish with confidence.<br><br>\n\n<a target=''new'' href=''http://www.cataractoars.com''>Cataract Oars</a><br>Wherever there is water...<br><br>\n\n<a target=''new'' href=''http://www.efishusa.com''>eFish USA</a><br>Sell, buy, shop for fly fishing gear, boats, accessories, and more.<br><br>\n\n<a target=''new'' href=''http://www.steelheadstalkers.com''>Steelhead Stalkers</a><br>Everything you need to know to become a better Steelhead, Salmon and Trout angler...<br><br>\n\n<a target=''new'' href=''http://www.sportsmanswarehouse.com''>Sportsman''s Warehouse</a><br>America''s Premier Hunting, Fishing & Camping Outfitter.<br><br>\n\n<a target=''new'' href=''http://www.oarright.com''>Oar Right</a><br>Fits between a drift boat''s oarlock horns and keeps the oar blade in a vertical position.<br><br>\n\n<a target=''new'' href=''http://www.paddlesandoars.com''>Sawyer Paddles & Oars</a><br>A well designed, well priced, high quality paddle that was incredibly durable.<br><br>\n\n<a target=''new'' href=''http://www.amatobooks.com/mm5/merchant.mvc?Screen=PROD&Store_Code=AmatobooksCom&Product_Code=TV3&Category_Code=MAGAZINE_SUBSF''>Fly Fishing & Tying Journal</a><br>Hundreds of color photographs showing you the most productive flies, leaders, knots & casting.<br><br>\n\n<a target=''new'' href=''http://www.fishwithjd.com''>Fish With JD</a><br>An online magazine designed to provide anglers of all persuasions, style and skill levels.<br><br>\n\n<a target=''new'' href=''http://www.bigskyfishing.com''>Big Sky Fishing</a><br>Your online source for Montana fishing information.<br><br>\n\n<a target=''new'' href=''http://www.ifish.com''>iFish</a><br>Oregon Fishing forum, discussion boards, salty dogs, guides, charters, both river and deep sea fishing.<br><br>\n\n<a target=''new'' href=''http://www.hcamagazine.com''>High Country Angler</a><br>The premier FREE fly fishing magazine for the Rocky Mountain Region.<br><br>\n\n<a target=''new'' href=''http://www.hobofishing.com''>Steelhead on the Fly</a><br>Aaron Shook is an expert Steelhead fisherman. He spends spring and summer in Yakutat Alaska guiding for the Yakutat Lodge and winter and fall in the Pacific Northwest (Oregon).\n\n</p>');

-- --------------------------------------------------------

--
-- Table structure for table `abouttabs`
--

CREATE TABLE IF NOT EXISTS `abouttabs` (
  `abouttabid` int(11) NOT NULL AUTO_INCREMENT,
  `orderid` int(11) NOT NULL,
  `abouttab` varchar(60) NOT NULL,
  `abouttaburl` varchar(32) NOT NULL,
  PRIMARY KEY (`abouttabid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `abouttabs`
--

INSERT INTO `abouttabs` (`abouttabid`, `orderid`, `abouttab`, `abouttaburl`) VALUES
(1, 1, 'about pavati marine', ''),
(2, 3, 'Patents', 'patents'),
(4, 4, 'Testimonials', 'testimonials'),
(5, 5, 'Boating Partners', 'boating-partners');

-- --------------------------------------------------------

--
-- Table structure for table `banlist`
--

CREATE TABLE IF NOT EXISTS `banlist` (
  `banned` int(11) NOT NULL AUTO_INCREMENT,
  `ipAddress` varchar(32) NOT NULL,
  PRIMARY KEY (`banned`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `blogcategories`
--

CREATE TABLE IF NOT EXISTS `blogcategories` (
  `blogcatid` int(11) NOT NULL AUTO_INCREMENT,
  `orderid` int(11) NOT NULL,
  `blogcatname` varchar(60) NOT NULL,
  `blogcattags` text NOT NULL,
  `blogcaturl` text NOT NULL,
  PRIMARY KEY (`blogcatid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `blogcategories`
--

INSERT INTO `blogcategories` (`blogcatid`, `orderid`, `blogcatname`, `blogcattags`, `blogcaturl`) VALUES
(4, 2, 'reviews & testimonials', 'pavati,marine,drift,boats,reviews,testimonials', 'reviews-testimonials'),
(5, 1, 'general information', 'pavati,marine,boats,drift,general,discussion,blog,forum,board,information,info', 'general-information');

-- --------------------------------------------------------

--
-- Table structure for table `blogcomments`
--

CREATE TABLE IF NOT EXISTS `blogcomments` (
  `commentid` int(11) NOT NULL AUTO_INCREMENT,
  `blogpostid` int(11) NOT NULL,
  `comment` text NOT NULL,
  `author` text NOT NULL,
  `email` text NOT NULL,
  `ipAddress` varchar(32) NOT NULL,
  `dateposted` text NOT NULL,
  `edited` int(11) NOT NULL DEFAULT '0',
  `approved` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`commentid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `blogposts`
--

CREATE TABLE IF NOT EXISTS `blogposts` (
  `blogpostid` int(11) NOT NULL AUTO_INCREMENT,
  `blogcatid` int(11) NOT NULL,
  `blogpostnumber` varchar(100) NOT NULL,
  `blogpostimg` text NOT NULL,
  `blogpostname` varchar(120) NOT NULL,
  `blogpostcontent` text NOT NULL,
  `blogpostdate` varchar(32) NOT NULL,
  `month` varchar(3) NOT NULL,
  `day` int(11) NOT NULL,
  `blogpostauthor` varchar(32) NOT NULL,
  `blogpostedited` int(11) NOT NULL DEFAULT '0',
  `blogpostlocked` int(11) NOT NULL DEFAULT '0',
  `blogposttags` text NOT NULL,
  PRIMARY KEY (`blogpostid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `blogposts`
--

INSERT INTO `blogposts` (`blogpostid`, `blogcatid`, `blogpostnumber`, `blogpostimg`, `blogpostname`, `blogpostcontent`, `blogpostdate`, `month`, `day`, `blogpostauthor`, `blogpostedited`, `blogpostlocked`, `blogposttags`) VALUES
(1, 5, 'why-pavati', '', 'Why Pavati?', 'Pavati boats are the lightest, strongest, and most advanced drift boats on the water. Filled with features that just &quot;make sense&quot;, you will find that these boats are in a league of their own - we like to say that they''re light on the water, but not on features. \r\n&lt;br&gt;&lt;br&gt;\r\nThere are currently nine active drift boat patents in existence today; we own all of them. This indicates our commitment to innovate and push the envelope, but it also shows the uniqueness of a Pavati drift boat. Our patented Drifter Doors &trade; allow you to get in and out of your boat with ease. The Quick-Lock Floor System &trade; enables you to put your seats and accessories anywhere you want them, any time. The Radius Transom &trade; improves the navigability and speed of the boat. \r\n&lt;br&gt;&lt;br&gt;\r\nThese are only a few of the features that cause a Pavati drift boat stand apart from all other drift boats. We are more than the leaders of drift boat technology... we''re the inventors. Take a moment to browse our boat models and features. \r\n&lt;br&gt;&lt;br&gt;\r\n&lt;b&gt;Have an idea for a feature but don''t see it on our website?&lt;/b&gt;&lt;br&gt;\r\nOur pro team and fully staffed engineering team work together every day, to create custom features and designs for our customers. With our full aluminum fabrication shop, we can build anything you want into your boat. Just give us a call.', 'September 05, 2013', 'Sep', 5, 'Alex', 1, 1, ''),
(2, 4, 'warrior-review', 'pavati-marine-blog-header-post-fish-with-jd-review.jpg', 'Warrior review', 'Back in October of 2007, &lt;a target=''new'' href=''http://www.fishwithjd.com/''&gt;Fish With JD&lt;/a&gt; wrote an extensive and highly informative blog article on one of our 17 x 60 Warrior drift boats. He reviews everything from our removable floors, to the dimpled bottom of the boat.&lt;br&gt;&lt;br&gt;\r\nYou can read the full article &lt;a target=''new'' href=''http://www.fishwithjd.com/2010/11/07/pavati-17x60-warrior-drift-boat-reviewed/''&gt;here&lt;/a&gt;.', 'August 31, 2013', 'Aug', 31, 'Fish with JD', 1, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `boatcustomcontent`
--

CREATE TABLE IF NOT EXISTS `boatcustomcontent` (
  `customcontentid` int(11) NOT NULL AUTO_INCREMENT,
  `customtabid` int(11) NOT NULL,
  `customcontent` text NOT NULL,
  PRIMARY KEY (`customcontentid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `boatcustomcontent`
--

INSERT INTO `boatcustomcontent` (`customcontentid`, `customtabid`, `customcontent`) VALUES
(1, 1, '<img class=''image-left-half'' src=''../imgs/boats/custom/seats.jpg'' />\n<img class=''image-right-half'' src=''../imgs/boats/custom/seats.jpg'' />\n<p>This is a sore subject with Chuck... Literally. He could never understand why the rower had to sit on uncomfortable ropes or straps all day or a hard plastic tractor seat, while the passengers got nice comfortable high backed padded seats. But this seemed to be the industry standard -- sore backs and sore butts. We set out to design the first row seat that was made for long days and lots of them. An oversized, overstuffed seat pad was a must. Then we designed a flexible, removable seat back that gives you the back support you need without intruding on those big strokes in tight situations. Now the rower''s seat is the best spot in the boat- and it''s about time.</p>'),
(2, 2, '<img style=''float:left; width:100%;'' src=''../imgs/boats/custom/powder-coating-colors.jpg'' />'),
(3, 3, '<p>\n<img src=''../imgs/boats/custom/dimpled_bottom.png'' />\n\n<b>Powder Coated Bottom</b><br>\nPowdercoating is a super tough coating that comes standard on all PAVATI boat models. It slides off of rocks very well, but you will want to re-apply after a couple of seasons to keep it slippery. Compare it to a ''Gluv-it'' or a Fiberglass gel coat.\n\nPowder coating is a type of coating that is applied as a free-flowing, dry powder. The main difference between a conventional liquid paint and a powder coating is that the powder coating does not require a solvent to keep the binder and filler parts in a liquid suspension form.\n\nThe coating is typically applied electrostatically and is then cured under heat to allow it to flow and form a "skin". The powder may be a thermoplastic or a thermoset polymer. It is usually used to create a hard finish that is tougher than conventional paint.</p>\n\n<p><img src=''../imgs/boats/custom/dimplebottom.gif'' />\n\n<b>Advanced Kevlar Bottom</b><br>\nBare aluminum bottoms grab rocks, don''t slide very well, and are notorious for being noisy. We have solved all of the above. After doing some research on new materials available we stumbled upon a Kevlar coated polymer. Its original intention was for the inside of dump truck beds in rock quarries. It''s so hard you can''t get it off unless you use a grinder.\n\nPolice departments are even using it on the inside of their squad car doors for bullet protection. PAVATI is the first to use it on the bottoms of drift boats but we expect it to be an industry standard very soon. It slides over rocks and takes a beating, then asks for more. An added bonus is it deadens sound by up to 80%. PAVATI has put an end to the days of noisy aluminum drift boats.</p>\n\n<p><img src=''../imgs/boats/custom/uhmw.png'' />\n\n<b>Vaccuum Sealed UHMW Bottom</b><br>It has extremely long chains, with molecular weight numbering in the millions, usually between 2 and 6 million. The longer chain serves to transfer load more effectively to the polymer backbone by strengthening intermolecular interactions. This results in a very tough material, with the highest impact strength of any thermoplastic presently made. It is highly resistant to corrosive chemicals, with exception of oxidizing acids. It also has extremely low moisture absorption, has a very low coefficient of friction, is self-lubricating, and is highly resistant to abrasion (15 times more resistant to abrasion than carbon steel). Its coefficient of friction is significantly lower than that of nylon and acetal, and is comparable to that of Teflon, but UHMWPE has better abrasion resistance than Teflon\n\nThe UHMW bottom is hard to beat. It doesn''t get any slicker than this stuff - and it''s tough as nails. It''s guaranteed for life and won''t come off like a fiberglass gel coat. It''s also super lightweight- adding less than 10 lbs on a 16ft boat. If you are running in a lot of shallow rivers and plan on hitting lots of rocks this option is highly recommended.\n</p>\n'),
(4, 4, '<p>More information coming soon.</p>'),
(5, 5, '<p>More information coming soon.</p>'),
(6, 6, '<p>More information coming soon.</p>'),
(7, 7, '<p>More information coming soon.</p>'),
(8, 8, '<p>More information coming soon.</p>'),
(9, 9, '<p>More information coming soon.</p>'),
(10, 10, '<p>More information coming soon.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `boatcustomtabs`
--

CREATE TABLE IF NOT EXISTS `boatcustomtabs` (
  `customtabid` int(11) NOT NULL AUTO_INCREMENT,
  `customtab` text NOT NULL,
  `boats` varchar(32) NOT NULL,
  PRIMARY KEY (`customtabid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `boatcustomtabs`
--

INSERT INTO `boatcustomtabs` (`customtabid`, `customtab`, `boats`) VALUES
(1, 'Custom Pavati Seats', '1,2,3'),
(2, 'Custom Colors', '1,2,3,4,5'),
(3, 'Slick & Tough Bottom Options', '1,2,3'),
(4, 'Motors', '4,5'),
(5, 'Custom Element Seats', '4,5'),
(6, 'Guide Seat with Pedestal', '4,5'),
(7, 'Aluminum Trailer with Spare Tire', '4,5'),
(8, 'Galvanized Trailer', '4,5'),
(9, 'Diamond Plate Sides', '4,5'),
(10, 'Wash Down Pump', '4,5');

-- --------------------------------------------------------

--
-- Table structure for table `boatdesign`
--

CREATE TABLE IF NOT EXISTS `boatdesign` (
  `designid` int(11) NOT NULL AUTO_INCREMENT,
  `boatid` varchar(32) NOT NULL,
  `orderid` int(11) NOT NULL,
  `columncontent` text NOT NULL,
  PRIMARY KEY (`designid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `boatdesign`
--

INSERT INTO `boatdesign` (`designid`, `boatid`, `orderid`, `columncontent`) VALUES
(1, '1', 1, '<div class=''sixteen columns tab-content''><p>There is a list of luxuries and features that will make you proud to have your own Guardian, but it’s so extensive that the pure genius of the boat’s design is sometimes forgotten. The body is crafted with the highest quality of marine-grade aluminum, perfectly welded extrusion-free seams, to make the strongest drift boat on the water even stronger. With the Guardian’s seamless body there’s not so much as a rivet or extruded lip to slow you down from doing what you came to do: catch fish. Combine this with the Ultra-Flow Transom and you will be practically hovering across the surface of the water, darting over eddies and getting where you want to be.</p></div>'),
(2, '1,2,3', 2, '<div class=''sixteen columns tab-content clear-content''>\n<div class=''eight columns content-info''>\n<h3>drifter doors &trade;</h3>\n<p class=''content-seperator''>This is one of the defining characteristics of a Pavati drift boat. We know timing is the most important part of landing a big catch, and when you hook up to a giant steelhead, you need to be able to get in the water at a moment’s notice. Once you’ve hurdled the gunwale, you land on a slippery rock, lose your footing, and recover only to realize that the fish is gone. Time to figure out how to get back in the boat!\n<br><br>\nThis has happened to every fisherman at some point, but not with Pavati Drifter Doors. Invented and patented by Pavati founder Chuck Gros, these multifunctional doors are designed for the sole purpose of making your life simpler. Every Pavati drift boat comes standard with one, but can be equipped with as many as four.\n<br><br>\nSome of the other benefits Drifter Doors offer are simpler boarding, easy water entry and exit, and painless water level access.</p></div>\n<img class=''seven columns'' src=''../imgs/boats/design/pavati-marine-boat-design-drifter-doors.jpg'' />\n</div>\n\n'),
(5, '1,2,3', 3, '<div class=''sixteen columns tab-content''>\n<div class=''eight columns content-info''><h3>ultra-flow radius transom &trade;</h3>\n<p class=''content-seperator''>This computer designed rounded transom creates lift - not drag. The old "tombstone" flat transoms require the drift boat to have much more rocker in the rear of the boat. If they didn''t, the transom would basically be a sail grabbing water and making it almost impossible to row.\n<br><br>\nOur engineers found that the Ultra-Flow transom does the opposite (creates lift) - which allow us to lay the transom back down a little. This generates more room in the back of the boat for a fisherman and/or coolers and gear. \n<br><br>\nAnother benefit is that the boat rides higher -- also reducing drag and enabling the boat to run shallower water. Also note the one-piece bottom and transom. This technology eliminates the seam that other aluminum drift boats have, this reducing drag even more and cutting down on weight.</p></div>\n<img class=''seven columns'' src=''../imgs/boats/design/pavati-marine-boat-design-ultra-flow-transom.jpg'' />\n\n</div>'),
(7, '1,2,3', 5, '<div class=''sixteen columns tab-content clear-content''><h3>advanced floor technology</h3></div>\n\n<div class=''sixteen columns tab-content clear-content''>\n<img class=''seven columns'' style=''margin-bottom:40px; margin-top:0;'' src=''../imgs/boats/design/pavati-marine-boat-design-first-true-level-floors.jpg'' />\n<div class=''eight columns content-info''>\n<h2>true level</h2>\n<p class=''content-seperator''>Do you enjoy stumbling and tripping over the uneven floors in a typical drift boat? Perhaps you enjoy watching your near-catch get away as you struggle to keep from falling into the water? Of course not! That’s why we invented level floors for our boats. Yes, this boat has a truly level floor, with no rises or drops to trip you at the perfectly imperfect time.<br><br>\nThis simple but exclusively Pavati feature is just another of saying that we understand you.</p></div>\n</div>\n\n<div class=''sixteen columns tab-content clear-content''>\n<img class=''seven columns'' style=''margin-bottom:40px; margin-top:0;'' src=''../imgs/boats/design/pavati-marine-boat-design-quick-lock-seat-system.jpg'' />\n<div class=''eight columns content-info''>\n<h2>Quick-Lock Floor System &trade;</h2>\n<p class=''content-seperator''>Everyone changes, and every serious fisherman needs a boat that will change with him. That’s why we invented the Quick-Lock Floor System &trade;, a system that allows you to add, move, replace, and upgrade everything in the boat; from seats to rod holders and leaders.<br><br>\nThis is the easiest and most customizable seat system available in any boat today, without exception. In a matter of seconds, with no tools required, you can completely rearrange your boat to adjust for weight, gear and different fishing styles. Add or remove seats to lighten the load or add an additional fisherman. Reposition your foot rest exactly where you want it. Add heater systems, tackle boxes, rod holders and other accessories that all work with the same simple system.</p></div>\n</div>\n\n<div class=''sixteen columns tab-content clear-content''>\n<img class=''seven columns'' style=''margin-bottom:40px; margin-top:0;'' src=''../imgs/boats/design/pavati-marine-boat-design-patented-removable-floors.jpg'' />\n<div class=''eight columns content-info''>\n<h2>Patented Removable Floors</h2>\n<p class=''content-seperator''>The smell of 8-month old fish blood and spoiled bait gathering in the bottom of your boat probably isn''t your favorite smell. It''s not ours either, which is why we build all of our Pavati drift boats with removable floors. Now you can reach every part of your boat, all the way down to the hull in seconds!<br><br>\nThe floor is made up of several large panels, each firmly secured with premium 3M Military Grade Velcro that won''t collect debris or lose its stickiness.</p></div>\n</div>'),
(8, '1,2,3', 4, '<div class=''sixteen columns tab-content clear-content''><div class=''eight columns content-info''>\n<h3>motor-ready transom</h3><p class=''content-seperator''>All Pavati drifters come with a motor-ready transom ready for a maximum 10HP gas or electric motor. \nUnique to our transom is the inset "motor lock". Never again do you have to worry about your motor falling off on that bumpy washboard dirt road. Another Pavati first.</p></div>\n<img class=''seven columns'' src=''../imgs/boats/design/pavati-marine-boat-design-motor-ready-transom.jpg'' /></div>'),
(19, '2', 1, '<div class=''sixteen columns tab-content''><p>The legacy blah blah blah</p></div>'),
(20, '4,5', 1, '<div class=''sixteen columns tab-content clear-content''><div class=''ten columns content-info''>\n<h3>Rock Kisser &trade;</h3><p class=''content-seperator''>Reinforced Keel Guard - Want to bank your boat on a gravel bar? No worries with the Destroyer''s ultra tough Keel Guard. We use Super Thick Material welded on with 4 full length welds.</p>\n<h3>Advanced Delta Pads</h3>\n<p>Delta Pads help you get on step faster, give you a faster planing surface, and allow for good water flow to the jet pump. This is standard on all Pavati power boats.</p>\n<h3>Stepped Hull</h3>\n<p>Pavati''s engineers looked to not only aluminum fishing boats, but fiberglass racing boats for this one of a kind design. Although we are the first to introduce the stepped hull into the aluminum fishing boat world, it is proven technology that is currently being used on just about every fiberglass racing hull out there. The stepped hull not only gets you up on step faster, but breaks the surface tension for faster top end speeds.</p><h3>Reverse Chine</h3>\n<p>Provide stability and lift when motoring as well as stability when fishing. The boat doesn''t rock back and forth when your passengers walk around in the boat providing better performance and more comfortable fishing.</p>\n<h3>Dual Reaction Chine</h3>\n<p>This is a big one. When you turn your boat you want it to turn fast, not "slide". Pavati''s proprietary Dual reaction chine reacts so fast you need to hang on to your seat. When you say turn, this boat turns!</p>\n<h3>Negative Turned Bow Chine</h3>\n<p>The Destroyer has a specially designed bow chine that throws water down and away from the boat keeping you and your gear drier. This feature is nice when going through big waves.</p><h3>True Level Lifting Stakes</h3>\n<p>Most watercraft on the market today have lifting stakes. The result is a perfectly balanced level riding boat that gets up on-step real quick.</p><h3>Progressive V-Hull</h3>\n<p>This design offers a good ride in rough water as the pointed bow slices forward and the "V" shaped bottom softens the up & down movement of the boat.</p></div></div>');

-- --------------------------------------------------------

--
-- Table structure for table `boatfeatures`
--

CREATE TABLE IF NOT EXISTS `boatfeatures` (
  `featureid` int(11) NOT NULL AUTO_INCREMENT,
  `featurename` text NOT NULL,
  `featuredesc` text NOT NULL,
  `featureimg` text NOT NULL,
  `featureboats` varchar(32) NOT NULL,
  PRIMARY KEY (`featureid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `boatfeatures`
--

INSERT INTO `boatfeatures` (`featureid`, `featurename`, `featuredesc`, `featureimg`, `featureboats`) VALUES
(3, 'wave cutter bow &trade;', 'The Wave Cutter bow is the Warriors trademark feature. It offers not only form, but function. Designed primarily for the guys who will be running lots of white water and technical rapids. The Patented wave cutter bow, borrows it''s technology from larger sea going vessels. While going through stacked rollers traditional drift boats with there blunt front ends are pushed side-to-side by the waves. The rower is forced to use his oars to keep him going in a straight direction.\n<br><br>\nThe "Wave cutter" does exactly what the name says- it cuts those waves like a hot knife through butter. This allows the rower to concentrate on the next rock or fast encroaching river bend. It does all of this while keeping the boat drier by pushing the water away from the boat -- instead of over the side. \n<br><br>\nAlthough most of the time the "Wave Cutter" is 10-12" out of the water doing nothing but looking cool, the benefits in white water are unmatched.', '../imgs/boats/features/feature-wave-cutter-bow.jpg', '1'),
(6, 'storage', 'The side trays offer more than just added strength in this boat; they provide much needed storage space as well. This is a great place for life jackets, a break down oar, fire extinguisher, extra layers of clothes, or whatever else you want to have out of the way but right at your fingertips.', '../imgs/boats/features/feature-side-trays.jpg', '1,3'),
(7, 'Patented Locking Anchor Nest &trade;', 'This anchor setup has an anchor nest with a lock to keep the anchor from jumping out during travel, a spot for your drain plugs, a block and tackle setup for easy pulling, and the anchor release mechanism.', '../imgs/boats/features/feature-anchor-nest.jpg', '1,2,3,4,5'),
(9, 'ultimate rowers seat', 'This is a sore subject with Chuck... Literally. He could never understand why the rower had to sit on uncomfortable ropes or straps all day or a hard plastic tractor seat, while the passengers got nice comfortable high backed padded seats. But this seemed to be the industry standard -- sore backs and sore butts. We set out to design the first row seat that was made for long days and lots of them. An oversized, overstuffed seat pad was a must. Then we designed a flexible, removable seat back that gives you the back support you need without intruding on those big strokes in tight situations. Now the rower''s seat is the best spot in the boat- and it''s about time.', '../imgs/boats/features/feature-rower-seat.jpg', '1,2,3'),
(11, '12 position oar lock', 'When you get your new Pavati drifter you want everything to be perfect. Having the oar locks in the right place is essential. Eight different positions ensures that you will get the most leverage you can for those times when you need all the horsepower you can muster. If you want to fish 1-1-1 (three in a row), for the popular side drifting technique, you may want to move your row seat forward to balance the boat. This means you will need to move the oar locks too. No matter how you want to set your boat up, fly fishing, bait fishing, or pulling plugs, our simple clip locks allow you to move the oarlocks to the optimum position in seconds. \n<br><br>\nOn top of that we offer you "Kenny Helfrich''s" stainless steel - super strong - oar locks. Kenny, a third generation Eugene Oregon area guide, developed these oar locks to not only be super strong but to stop your oar from climbing up the side of the oar lock with each stroke as most do. If you''ve rowed a boat much you''ve probably noticed the thump, thump, after each stroke. That noise is the oar dropping back to the bottom of the oarlock. Also, in a real tough situation, these oar locks are designed to flex enough to allow your oars to pop out of these oar locks. Kenny says, "These are the last pair of oar locks you will ever own." -- That''s good enough for us.', '../imgs/boats/features/feature-oarlock.jpg', '1,2,3'),
(12, 'Patented Grab Handles', 'Pavati has added handy grab handles to the sides of the hull. Just below the gunnel rail near the oar locks, we have programmed in computer cut holes. These make it easy to pick the boat up or portage around logs/skinny spots in the river.', '../imgs/boats/features/feature-handles.jpg', '1,2,3'),
(14, 'stainless steel cupholders', 'Our infamous cup holders have been a topic for teasing since we introduced them. "Why do you need 10 cup holders in a drift boat", they say? Our customers say something a little different. They want more! Lures, sun tan lotion, scissors, pliers, bait scent, and even a drink or two. A place for everything. They''re cheap and you''ll love''em.', '../imgs/boats/features/feature-cup-holders.jpg', '1,2,3'),
(15, 'honeycomb floor ribs', 'Our patent pending Honeycomb Floor Ribs - lightweight & strong - like airplane wings.', '../imgs/boats/features/feature-honeycomb-floor.jpg', '1,2,3'),
(16, 'the "truth" scale', 'How many times have you wanted to know how long your fish was to see if it was legal to keep? Or just to brag about? In the past you had to drag out a tape measure, if you could find it, or just guess. Not only was this inconvenient but a lot of fish died because we didn''t get them back in the water in time. PAVATI continues to set the pace with scales on both sides of your drift boat as standard equipment. The computer numerical controlled (CNC) designed, "THE TRUTH", tape measures make measuring fish and leaders a one man job. Measure your fish in seconds and let it go. Up to 60 inches. PAVATI drift boats not only catch fish, they save them too! Not a sticker, it''s engraved right in the aluminum. Great for measuring leaders too.', '../imgs/boats/features/feature-truth-scale.jpg', '1,2,3'),
(17, 'bull-nose design', 'Pavati''s Bull-Nose design bow cuts water and acts like a ramp if you hit rocks.', '../imgs/boats/features/feature-bull-nose.jpg', '3'),
(18, 'pizza oven compartment', 'This storage space is directly above the heater and doubles as an oven for cooking and warming foods plus the warming up of other items such as bait towels or rocks to warm up and put in your pockets on those ice cold fishing nights. It also acts as a heat shield protecting the deck preventing it from getting too hot when running the heater full blast.', '../imgs/boats/features/feature-pizza-oven.jpg', '3'),
(20, 'Diamond Plate Floors', 'More information coming soon.', '../imgs/img-coming-soon.jpg', '4,5'),
(21, 'Quick-Lock Floor System &trade;', 'Everyone changes, and every serious fisherman needs a boat that will change with him. That''s why we invented the Quick-Lock Floor System &trade;, a system that allows you to add, move, replace, and upgrade everything in the boat; from seats to rod holders and leaders.\r\n<br><br>\r\nThis is the easiest and most customizable seat system available in any boat today, without exception. In a matter of seconds, with no tools required, you can completely rearrange your boat to adjust for weight, gear and different fishing styles. Add or remove seats to lighten the load or add an additional fisherman. Reposition your foot rest exactly where you want it. Add heater systems, tackle boxes, rod holders and other accessories that all work with the same simple system.', '../imgs/boats/design/pavati-marine-boat-design-quick-lock-seat-system.jpg', '1,2,3,4,5'),
(22, 'Side Rod Racks', 'More information coming soon.', '../imgs/img-coming-soon.jpg', '4,5'),
(23, 'Side Storage Compartments', 'More information coming soon.', '../imgs/img-coming-soon.jpg', '4,5'),
(24, 'Rip N'' Clean Removable Floors', 'More information coming soon.', '../imgs/img-coming-soon.jpg', '4,5'),
(25, 'Bow Storage Compartment', 'More information coming soon.', '../imgs/img-coming-soon.jpg', '4,5'),
(26, 'Installed Bilge Pump', 'More information coming soon.', '../imgs/img-coming-soon.jpg', '4,5'),
(27, 'Navigational Lights', 'More information coming soon.', '../imgs/img-coming-soon.jpg', '4,5'),
(28, 'In-Floor Poly Fuel Tank', 'More information coming soon.', '../imgs/img-coming-soon.jpg', '4,5'),
(29, 'Anchor Release', 'More information coming soon.', '../imgs/img-coming-soon.jpg', '4,5'),
(30, 'Aft Drain With Plug', 'More information coming soon.', '../imgs/img-coming-soon.jpg', '4,5'),
(31, 'Large Side Trays with Cup Holders', 'More information coming soon.', '../imgs/img-coming-soon.jpg', '4,5'),
(32, 'Dimple Die &trade; Technology', 'More information coming soon.', '../imgs/img-coming-soon.jpg', '4,5');

-- --------------------------------------------------------

--
-- Table structure for table `boatmodels`
--

CREATE TABLE IF NOT EXISTS `boatmodels` (
  `boatid` int(11) NOT NULL AUTO_INCREMENT,
  `boatname` varchar(60) NOT NULL,
  `boatdesc` text NOT NULL,
  `designslogan` text NOT NULL,
  `featureslogan` text NOT NULL,
  `addonslogan` text NOT NULL,
  `galleryslogan` text NOT NULL,
  PRIMARY KEY (`boatid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `boatmodels`
--

INSERT INTO `boatmodels` (`boatid`, `boatname`, `boatdesc`, `designslogan`, `featureslogan`, `addonslogan`, `galleryslogan`) VALUES
(1, 'warrior', 'With it''s patented Wavecutter&trade; bow and higher sides, the Warrior is the most comfortable and user friendly drift boat in the world.', 'designed by fishermen, for fishermen', 'our patented features make the warrior as unique as it is sexy', 'additional features available', ''),
(2, 'legacy', 'Fly casting stands, rod tubes, snag-free line deck, standard doors for easy in-and-out access with waders, and a super slick bottom for low water conditions.', 'flyfishing boats done right', '', '', ''),
(3, 'guardian', 'The lightest most feature packed drifter on the market today. It''s no wonder it''s one of our most popular models.', 'a different kind of fishing', '', 'make your guardian one of a kind', 'the pavati guardian in action'),
(4, 'destroyer', 'The Destroyer has a specially designed bow chine that throws water down and away from the boat keeping you and your gear drier.', '', '', '', ''),
(5, 'wildcat', 'The Pavati Wildcat comes with the same patent pending Quick-Lock Seat System &trade; that our drift boats are being praised for.', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `boatoverview`
--

CREATE TABLE IF NOT EXISTS `boatoverview` (
  `overviewid` int(11) NOT NULL AUTO_INCREMENT,
  `boatid` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `columnwidth` varchar(32) NOT NULL,
  `columncontent` text NOT NULL,
  `contenttype` varchar(32) NOT NULL,
  PRIMARY KEY (`overviewid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `boatoverview`
--

INSERT INTO `boatoverview` (`overviewid`, `boatid`, `orderid`, `columnwidth`, `columncontent`, `contenttype`) VALUES
(1, 3, 1, 'sixteen', 'When we created the Guardian, we could have simply designed the most comfortable drift boat ever made - and we did. But we didn’t stop there. We also created and patented the most advanced drift boat technology, to create a perfect balance of quality and agility in every craft. The result is - if we may be so bold as to boast - the first drift boat ever to make the journey as enjoyable as the fishing.', 'text'),
(2, 1, 1, 'sixteen', 'The Pavati Warrior marks a revolution in fishing drift boats. Pavati presents the best rowing, most comfortable, user friendly, most reliable drifter in the world. The innovative designs and manufacturing process have raised the standard in drift boat fishing. Driven by a passion for simplicity and strength, Pavati engineers have advanced the cutting edge. The superbly balanced Warrior embodies a new way of looking at drift boat design. The innovations like the revolutionary patented Drifter Doors &trade;, Quick-Lock Floor System &trade;, Wave-Cutter Bow &trade;, and the only True Level Floors, give you the simplest and most ergonomic boat available. Combine that with the AR-620 dimpled bottom, Hard Chine technology, Ultra-Flow Transom, kevlar bonded bottom, and state of the art computer designed hull, this boat is a fish killing machine. No wonder they call it the Warrior.', 'text'),
(3, 2, 1, 'sixteen', 'When you''re fly fishing it''s nice to have some level standing room. Plus, it''s very important to the Captain of the ship that the boat be level front to rear and side to side. Drift boats in particular, perform the best in this situation. Move all three seats, foot rest, and the rod holder to accommodate the type of fishing you''re doing. Fly fish in the morning, use the 3-in-a-row setup then take the family for a ride in the afternoon using three seats in the front. Bait fish the next morning using two seats in the front.', 'text'),
(4, 4, 1, 'eight', '<iframe style="position:relative; float:left; margin:6px 0 20px 0; z-index:0;" src="http://www.youtube.com/embed/ltDE2eoRenE?rel=0&amp;wmode=opaque" allowfullscreen="true" frameborder="0" height="286" width="100%"></iframe>', 'video'),
(5, 5, 1, 'sixteen', 'The Pavati Wildcat comes with the same patented Quick-Lock Floor System &trade; that our drift boats are being praised for. You can put seven seats in the Wildcat. Six passengers and a seat for the driver. Only need two seats today? They pop out is seconds. Re-adjust them towards the center of the boat so your passenger seat can turn a full 360 for side drifting. There are literally hundreds of combinations that will fit the way you fish.', 'text'),
(6, 4, 2, 'eight', 'The revolutionary hull of the Destroyer is where this boat leaves the competition in the dust. Many features such as a reverse chine, dual reaction chine, and true level lifting stakes make this baby float like a cloud.', 'text');

-- --------------------------------------------------------

--
-- Table structure for table `boatsforsale`
--

CREATE TABLE IF NOT EXISTS `boatsforsale` (
  `forsaleid` int(11) NOT NULL AUTO_INCREMENT,
  `forsaleboat` varchar(32) NOT NULL,
  `forsaletitle` varchar(64) NOT NULL,
  `forsalecontent` text NOT NULL,
  `forsaletype` varchar(32) NOT NULL,
  PRIMARY KEY (`forsaleid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `boatsforsale`
--

INSERT INTO `boatsforsale` (`forsaleid`, `forsaleboat`, `forsaletitle`, `forsalecontent`, `forsaletype`) VALUES
(1, 'Legacy', 'New 2012 Pavati Legacy Demo', '<img src=''../imgs/boats/for-sale/med_blue_demo_1.jpg'' /><br><br>\n<img src=''../imgs/boats/for-sale/med_blue_demo_2.jpg'' /><br><br>\n<img src=''../imgs/boats/for-sale/med_blue_demo_3.jpg'' /><br><br>\n<ul>\n<li>2 Seat Boxes with Lockable Dry Storage</li>\n<li>360'' Swiveling Bentley Seats, Front and Rear Padded Fly Fishing Stands, Built in Rod Tubes</li>\n<li>12 position Oar Lock Blocks, 6 Cup Holders, Full Side Tray Supports w/ Storage</li>\n<li>Stainless Helfrich SS Oar Locks, 2 Aft Drain Holes w/ Plugs, Jeweled Gunnel Rail, 3 Bow Eyes </li>\n<li>Stern Rope Hook, Bow Kicker Plate, Ultra Flow Rounded Transom, No-Extruded Chine </li>\n<li>Heavy Braided 5/8" Bow Line, Quick-Lock Seat System, Rounded Bow, Adjustable Foot Brace</li>\n<li>Diamond Plate Floors, The Only True Full Level Floors & Fully Removable for Cleaning</li>\n<li>AR-620(TM) Dimpled Bottom, 2 Cataract Oars, 2 Magnum Blades, 2 Patented Drifter Doors</li>\n<li>Box Row Seat w/ Overstuffed Custom Upholstered 5" Pad, Pyramid Anchor Nest w/Plug Holder </li>\n<li>30# Anchor W/40'' Rope, In-floor Anchor System, Custom paint inside and out with Clear Coat</li>\n<li>All Military T6 6061 Aircraft Grade Aluminum, Motor Ready Transom with Pavati Motor Lock</li>\n<li>Line Deck w/ Drain Holes, and the only True Lifetime Warranty</li>\n</ul>', 'new'),
(2, 'Guardian', '2012 Pavati Guardian 16 x 61', '<img src=''../imgs/boats/for-sale/16x61guardian5302.jpg'' /><br><br>\n<img src=''../imgs/boats/for-sale/16x61guardian5301.jpg'' /><br><br>\n<ul>\n<li>Powder coated inside grey outside white and floors and boxes grey</li>\n<li>Extra large side storage compartments</li>\n<li>Radius transom/motor ready w/ cut out for short shaft</li>\n<li>Dimpled bottom</li>\n<li>The truth scales </li>\n<li>Padded row seat with removable back rest and locking dry storage</li>\n<li>Custom Bentley seats x 3 </li>\n<li>Front Starboard side door, front port side</li>\n<li>Fully removable Diamond plate full level floor with quick lock system</li>\n<li>Top cover</li>\n<li>Accessory box with rod rack and plano tackle storage</li>\n<li>Rod holder floor box with leader roller</li>\n<li>In-floor anchor kit 35lb anchor with locking anchor nest </li>\n<li>Vacuumed sealed UHMW bottom kit</li>\n<li>Custom aluminum trailer with ratchet straps</li>\n</ul>', 'used');

-- --------------------------------------------------------

--
-- Table structure for table `boatspecs`
--

CREATE TABLE IF NOT EXISTS `boatspecs` (
  `specid` int(11) NOT NULL AUTO_INCREMENT,
  `boatid` int(11) NOT NULL,
  `model` varchar(32) NOT NULL,
  `centerlength` varchar(32) NOT NULL,
  `bottomwidth` varchar(32) NOT NULL,
  `beam` varchar(32) NOT NULL,
  `oarlockheight` varchar(32) NOT NULL,
  `aluminumgrade` varchar(32) NOT NULL,
  `bottomthick` varchar(32) NOT NULL,
  `sidethick` varchar(32) NOT NULL,
  `hullweight` varchar(32) NOT NULL,
  `motor` varchar(32) NOT NULL,
  `price` varchar(32) NOT NULL,
  PRIMARY KEY (`specid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `boatspecs`
--

INSERT INTO `boatspecs` (`specid`, `boatid`, `model`, `centerlength`, `bottomwidth`, `beam`, `oarlockheight`, `aluminumgrade`, `bottomthick`, `sidethick`, `hullweight`, `motor`, `price`) VALUES
(1, 1, '17 X 61', '17 Ft.', '61 In.', '90 In.', '25 In.', '6061 T6', '0.125 In.', '0.100 In.', '190 Lbs.', '10 HP', '9,400'),
(2, 1, '16 x 61', '16 Ft.', '61 In.', '90 In.', '25 In.', '6061 T6', '0.125 In.', '0.100 In.', '180 Lbs.', '10 HP', '9,200'),
(3, 1, '16 x 55', '16 Ft.', '55 In.', '85 In.', '25 In.', '6061 T6', '0.125 In.', '0.100 In.', '180 Lbs.', '10 HP', '9,000'),
(4, 2, '17 x 61', '17 Ft.', '61 In.', '90 In.', '25 In.', '6061 T6', '0.125 In.', '0.100 In.', '190 Lbs.', '10 HP', '10,200'),
(5, 2, '16 x 61', '16 Ft.', '61 In.', '90 In.', '25 In.', '6061 T6', '0.125 In.', '0.100 In.', '180 Lbs.', '10 HP', '10,000'),
(6, 2, '16 x 55', '16 Ft.', '55 In.', '85 In.', '25 In.', '6061 T6', '0.125 In.', '0.100 In.', '180 Lbs.', '10 HP', '9,800'),
(7, 3, '17 x 61', '17 Ft.', '61 In.', '90 In.', '25 In.', '6061 T6', '0.125 In.', '0.100 In.', '190 Lbs.', '10 HP', '8,900'),
(8, 3, '16 x 61', '16 Ft.', '61 In.', '90 In.', '25 In.', '6061 T6', '0.125 In.', '0.100 In.', '180 Lbs.', '10 HP', '8,700'),
(9, 3, '16 x 55', '16 Ft.', '55 In.', '85 In.', '25 In.', '6061 T6', '0.125 In.', '0.100 In.', '172 Lbs.', '10 HP', '8,500'),
(10, 4, '20 x 84', '20 Ft.', '84 In.', '102 In.', '25 In.', '6061 T6', '0.125 In.', '0.100 In.', '1050 Lbs.', 'Up To 250 HP', '17,495'),
(11, 4, '22 x 84', '22 Ft.', '84 In.', '102 In.', '25 In.', '6061 T6', '0.125 In.', '0.100 In.', '1300 Lbs.', 'Up To 250 HP', '18,795'),
(12, 4, '26 x 84', '26 Ft.', '84 In.', '102 In.', '25 In.', '6061 T6', '0.125 In.', '0.100 In.', '1600 Lbs.', 'Up To 250 HP', '21,395'),
(13, 5, '20 x 84', '20 Ft.', '84 In.', '102 In.', '25 In.', '6061 T6', '0.125 In.', '0.100 In.', '1050 Lbs.', 'Up To 250 HP', '17,495'),
(14, 5, '22 x 84', '22 Ft.', '84 In.', '102 In.', '25 In.', '6061 T6', '0.125 In.', '0.100 In.', '1300 Lbs.', 'Up To 250 HP', '18,795'),
(15, 5, '26 x 84', '26 Ft.', '84 In.', '102 In.', '25 In.', '6061 T6', '0.125 In.', '0.100 In.', '1600 Lbs.', 'Up To 250 HP', '21,395');

-- --------------------------------------------------------

--
-- Table structure for table `formcontact`
--

CREATE TABLE IF NOT EXISTS `formcontact` (
  `contactid` int(11) NOT NULL AUTO_INCREMENT,
  `contactname` text NOT NULL,
  `contactphone` text NOT NULL,
  `contactemail` text NOT NULL,
  `contactmessage` text NOT NULL,
  `ipAddress` varchar(32) NOT NULL,
  PRIMARY KEY (`contactid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `formtestrow`
--

CREATE TABLE IF NOT EXISTS `formtestrow` (
  `testrowid` int(11) NOT NULL AUTO_INCREMENT,
  `testrowname` text NOT NULL,
  `testrowphone` text NOT NULL,
  `testrowemail` text NOT NULL,
  `testrowmessage` text NOT NULL,
  `ipAddress` int(11) NOT NULL,
  PRIMARY KEY (`testrowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gallerycategories`
--

CREATE TABLE IF NOT EXISTS `gallerycategories` (
  `gallerycatid` int(11) NOT NULL AUTO_INCREMENT,
  `gallerycatname` varchar(32) NOT NULL,
  PRIMARY KEY (`gallerycatid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `gallerycategories`
--

INSERT INTO `gallerycategories` (`gallerycatid`, `gallerycatname`) VALUES
(0, 'all'),
(1, 'warrior'),
(2, 'legacy'),
(3, 'guardian'),
(4, 'destroyer'),
(5, 'wildcat');

-- --------------------------------------------------------

--
-- Table structure for table `galleryimages`
--

CREATE TABLE IF NOT EXISTS `galleryimages` (
  `galleryimgid` int(11) NOT NULL AUTO_INCREMENT,
  `galleryimgcats` varchar(32) NOT NULL,
  `galleryimg` text NOT NULL,
  PRIMARY KEY (`galleryimgid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `galleryimages`
--

INSERT INTO `galleryimages` (`galleryimgid`, `galleryimgcats`, `galleryimg`) VALUES
(2, '3', 'pavati-marine-gallery-image-black-trim-guardian-drifter-doors-fishing.jpg'),
(3, '3', 'pavati-marine-gallery-image-black-gold-guradian.jpg'),
(4, '3', 'pavati-marine-gallery-image-grey-linex-elite-guardian.jpg'),
(5, '3', 'pavati-marine-gallery-image-chris-deyoung-guardian-custom-paintjob-1.jpg'),
(6, '3', 'pavati-marine-gallery-image-chris-deyoung-guardian-custom-paintjob-2.jpg'),
(7, '3', 'pavati-marine-gallery-image-black-blue-guardian.jpg'),
(8, '3', 'pavati-marine-gallery-image-diamond-plate-black-guardian.jpg'),
(10, '1', 'pavati-marine-gallery-image-diamond-plate-black-warrior.jpg'),
(11, '1', 'pavati-marine-gallery-image-diamond-plate-black-warrior-fishing.jpg'),
(12, '1', 'pavati-marine-gallery-image-purple-gray-diamond-plate-warrior.jpg'),
(13, '1', 'pavati-marine-gallery-image-black-linex-elite-warrior-dog.jpg'),
(14, '1', 'pavati-marine-gallery-image-red-warrior-river-drift.jpg'),
(15, '1', 'pavati-marine-gallery-image-black-drifter-red-stripe-warrior.jpg'),
(16, '1', 'pavati-marine-gallery-image-black-drifter-red-stripe-warrior-closeup.jpg'),
(17, '1', 'pavati-marine-gallery-image-green-warrior-bridge-river.jpg'),
(18, '1', 'pavati-marine-gallery-image-group-fishing-green-warrior.jpg'),
(20, '1', 'pavati-marine-gallery-image-gold-black-warrior.jpg'),
(21, '4', 'pavati-marine-gallery-image-black-destroyer-group-ride.jpg'),
(22, '4', 'pavati-marine-gallery-image-black-destroyer-snowing.jpg'),
(23, '4', 'pavati-marine-gallery-image-white-destroyer-towed.jpg'),
(24, '2', 'pavati-marine-gallery-image-wood-legacy-flyfishing.jpg'),
(25, '2', 'pavati-marine-gallery-image-wood-legacy-fish.jpg'),
(26, '2', 'pavati-marine-gallery-image-green-legacy.jpg'),
(27, '5', 'pavati-marine-gallery-image-green-wildcat-chuck-fishing.jpg'),
(28, '5', 'pavati-marine-gallery-image-green-wildcat-lake.jpg'),
(31, '0', 'pavati-marine-gallery-image-double-fisting-fish.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `homecontent`
--

CREATE TABLE IF NOT EXISTS `homecontent` (
  `homecontentid` int(11) NOT NULL AUTO_INCREMENT,
  `homecontenttitle` varchar(60) NOT NULL,
  `homecontentimg` text NOT NULL,
  `homecontenturl` text NOT NULL,
  PRIMARY KEY (`homecontentid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `homecontent`
--

INSERT INTO `homecontent` (`homecontentid`, `homecontenttitle`, `homecontentimg`, `homecontenturl`) VALUES
(1, 'photo gallery', 'imgs/home/pavatimarine-home-image-content-1.jpg', 'gallery'),
(2, 'request a test row', 'imgs/home/pavatimarine-home-image-content-2.jpg', 'test-row'),
(3, 'why pavati?', 'imgs/home/pavatimarine-home-image-content-3.jpg', 'blog/why-pavati');

-- --------------------------------------------------------

--
-- Table structure for table `homeoverview`
--

CREATE TABLE IF NOT EXISTS `homeoverview` (
  `overviewid` int(11) NOT NULL,
  `homeoverview` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homeoverview`
--

INSERT INTO `homeoverview` (`overviewid`, `homeoverview`) VALUES
(1, 'We know your passion for fishing, because it''s the same passion that drives us to work every day. And your family may think youâ€™re crazy, but we know why you wake up before dawn to get on the river. We know why, because we do it too. Some people may not understand what makes a fisherman tick, but we do, because weâ€™re fishermen. Thatâ€™s why, when it comes to boats, we design and build our own â€“ because other boat makers donâ€™t get it. Maybe thatâ€™s what makes Pavati the most trusted and coveted drift boat on the water.');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `newsid` int(11) NOT NULL AUTO_INCREMENT,
  `newstitle` varchar(60) NOT NULL,
  `newsbody` text NOT NULL,
  `newsauthor` varchar(32) NOT NULL,
  `newsmonth` varchar(3) NOT NULL,
  `newsday` int(11) NOT NULL,
  PRIMARY KEY (`newsid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE IF NOT EXISTS `publishers` (
  `publisherid` int(11) NOT NULL AUTO_INCREMENT,
  `publishername` varchar(60) NOT NULL,
  `publisherlogo` text NOT NULL,
  PRIMARY KEY (`publisherid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `redirects`
--

CREATE TABLE IF NOT EXISTS `redirects` (
  `old_route` text NOT NULL,
  `new_route` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `redirects`
--

INSERT INTO `redirects` (`old_route`, `new_route`) VALUES
('/accessories/', '/proshop/'),
('/apparel/', '/proshop/'),
('/boat_models/', '/boats/'),
('/boat-models/', '/boats/'),
('/boat_models/drift-boats/', '/boats/'),
('/boat_models/power-boats/', '/boats/'),
('/boat_models/drift-boats/warrior/', '/boats/warrior'),
('/boat_models/drift-boats/legacy/', '/boats/legacy'),
('/boat_models/drift-boats/guardian/', '/boats/guardian'),
('/boat_models/power-boats/destroyer/', '/boats/destroyer'),
('/boat_models/drift-boats/wildcat/', '/boats/wildcat'),
('/about_us/', '/about/'),
('/about-us/', '/about/'),
('/contact_us/', '/contact/'),
('/contact-us/', '/contact/'),
('/for_sale/', '/for-sale/'),
('/for_sale/new/', '/for-sale/new'),
('/for_sale/used/', '/for-sale/used');

-- --------------------------------------------------------

--
-- Table structure for table `rowrequests`
--

CREATE TABLE IF NOT EXISTS `rowrequests` (
  `rowrequestid` int(11) NOT NULL AUTO_INCREMENT,
  `rowrequestname` text NOT NULL,
  `rowrequestemail` text NOT NULL,
  `rowrequestmessage` text NOT NULL,
  `approved` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rowrequestid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE IF NOT EXISTS `slides` (
  `slideid` int(11) NOT NULL AUTO_INCREMENT,
  `slidetype` varchar(32) NOT NULL,
  `slidemeta` text NOT NULL,
  `slideimg` text NOT NULL,
  PRIMARY KEY (`slideid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`slideid`, `slidetype`, `slidemeta`, `slideimg`) VALUES
(1, 'home', '', 'imgs/slides/pavatimarine-home-slide-1.jpg'),
(2, 'home', '', 'imgs/slides/pavatimarine-home-slide-2.jpg'),
(3, 'warrior', '', 'imgs/slides/boats/pavatimarine-boat-slide-warrior-1.jpg'),
(4, 'warrior', '', 'imgs/slides/boats/pavatimarine-boat-slide-warrior-2.jpg'),
(5, 'warrior', '', 'imgs/slides/boats/pavatimarine-boat-slide-warrior-3.jpg'),
(6, 'legacy', '', 'imgs/slides/boats/pavatimarine-boat-slide-legacy-1.jpg'),
(7, 'guardian', '', 'imgs/slides/boats/pavatimarine-boat-slide-guardian-1.jpg'),
(8, 'legacy', '', 'imgs/slides/boats/pavatimarine-boat-slide-legacy-2.jpg'),
(9, 'legacy', '', 'imgs/slides/boats/pavatimarine-boat-slide-legacy-3.jpg'),
(10, 'guardian', '', 'imgs/slides/boats/pavatimarine-boat-slide-guardian-2.jpg'),
(11, 'guardian', '', 'imgs/slides/boats/pavatimarine-boat-slide-guardian-3.jpg'),
(12, 'destroyer', '', 'imgs/slides/boats/pavatimarine-boat-slide-destroyer-1.jpg'),
(13, 'destroyer', '', 'imgs/slides/boats/pavatimarine-boat-slide-destroyer-2.jpg'),
(14, 'wildcat', '', 'imgs/slides/boats/pavatimarine-boat-slide-wildcat-1.jpg'),
(15, 'home', '', 'imgs/slides/pavatimarine-home-slide-3.jpg'),
(28, 'warrior', '', 'imgs/slides/boats/before-after.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(160) NOT NULL,
  `avatar` varchar(14) NOT NULL,
  `rank` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `email`, `username`, `password`, `avatar`, `rank`) VALUES
(1, 'inman.sebastian@gmail.com', 'sebastianinman', '76671c687192f196212e9879b98d90bc', '', 1),
(2, 'sebastian@pavati.com', 'pavati', '8dffcdd13fa11168f3964318483bdf09', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
