-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2024 at 07:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `themeforest`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `Admin_id` int(11) NOT NULL,
  `Admin_name` varchar(30) NOT NULL,
  `Admin_email` varchar(50) NOT NULL,
  `Admin_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`Admin_id`, `Admin_name`, `Admin_email`, `Admin_password`) VALUES
(1, 'sahil', 'sahilmansuri881@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart1`
--

CREATE TABLE `tbl_cart1` (
  `cart_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `prod_qty` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(1, 'Syrup'),
(2, 'Tablets'),
(3, 'Gel '),
(4, 'Drops'),
(5, 'Spray '),
(6, 'Skin Care'),
(7, 'cream');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE `tbl_company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_company`
--

INSERT INTO `tbl_company` (`company_id`, `company_name`, `company_details`) VALUES
(1, 'Himalaya Wellness', 'Himalaya Wellness Company (formerly Himalaya Drug Company) is an Indian multinational personal care and pharmaceutical company based in Bangalore.'),
(2, 'Cipla ', 'Cipla, as an organisation has been built brick-by-brick on the foundation of care. Caring For Life has always been and continues to remain, our guiding purpose. Driven by the same purpose, we have extended our presence to 80+ countries providing over 1,500 products across various therapeutic categories in 50+ dosage forms. To make healthcare more affordable globally, we are deepening our presence in the key markets of India, South Africa, the U.S. among other economies of the emerging world.'),
(4, 'Estrellas Life Sciences ', 'Established in 2011, we \"Estrellas Life Sciences Pvt. Ltd.\" an ISO 9001:2015 are manufacturer, exporter and service provider of a quality-approved range of Infections and Infestations Medicines , Gastro Intestinal Tract and Respiratory Tract Allergy etc. '),
(5, 'Mankind', 'Mankind Pharma Limited is a Non-govt company, incorporated on 03 Jul, 1991. It\'s a public unlisted company and is classified as\'company limited by shares\'. '),
(6, 'Dabur ', 'Dabur Ltd is an Indian multinational consumer goods company, founded by S. K. Burman and headquartered in Ghaziabad.'),
(7, 'Sun Pharma', '(Sun Pharma) is the fourth largest specialty generic pharmaceutical company in the world with global revenues of US$ 5.4 billion.'),
(8, 'Intas Pharmaceuticals.', 'ntas Pharmaceuticals Limited is an Indian multinational pharmaceutical company headquartered in Ahmedabad.[2] It is a producer of generic therapeutic drugs and engaged in contract clinical research and manufacturing.[3] '),
(9, 'SBL', 'SBL Private Limited is a Non-govt company, incorporated on 31 Aug, 1979. It\'s a private unlisted company and is classified as\'company limited by shares\'.'),
(10, 'allergan', 'Allergan plc is an American, Irish-domiciled pharmaceutical company that acquires, develops, manufactures and markets brand name drugs and medical devices in the areas of medical aesthetics, eye care, central nervous system, and gastroenterology.'),
(11, 'Reckitt Benckiser Healthcare.', 'RECKITT BENCKISER HEALTHCARE INDIA PRIVATE LIMITED is a Private incorporated on 27-11-1980. It is classified as a Non-govt company and is registered at RoC-Delhi. Their state of registration is Haryana. Its authorized share capital is 350000000.00 and its paid-up capital is 90909160.00.'),
(12, 'Abbott ', 'Since 1910, Abbott has been dedicated to helping people in India live healthier lives through a diverse range of science-based nutritional products, diagnostic tools, branded generic pharmaceuticals, and diabetes and vascular devices.'),
(13, 'Bakson Drugs AND Pharmaceuticals.', 'Bakson Drugs AND Pharmaceuticals Private Limited is a Non-govt company, incorporated on 17 May, 1989. It\'s a private unlisted company and is classified as\'company limited by shares\'. Company\'s authorized capital stands at Rs 75.0 lakhs and has 93.818665% paid-up capital which is Rs 70.36 lakhs.'),
(14, 'Mamaearth.', 'Mamaearth is an Indian personal care brand that specializes in natural and toxin-free products for babies, moms, and the entire family. ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback_date` date NOT NULL,
  `feedback_details` text NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `feedback_date`, `feedback_details`, `user_id`) VALUES
(1, '2024-04-23', 'aa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orderdetails`
--

CREATE TABLE `tbl_orderdetails` (
  `details_id` int(11) NOT NULL,
  `order_id` int(5) NOT NULL,
  `prod_price` int(5) NOT NULL,
  `prod_qty` varchar(50) NOT NULL,
  `prod_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_orderdetails`
--

INSERT INTO `tbl_orderdetails` (`details_id`, `order_id`, `prod_price`, `prod_qty`, `prod_id`) VALUES
(1, 1, 184, '1', 2),
(2, 1, 200, '1', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ordermaster`
--

CREATE TABLE `tbl_ordermaster` (
  `order_id` int(11) NOT NULL,
  `order_date` varchar(20) NOT NULL,
  `user_id` int(5) NOT NULL,
  `order_status` varchar(30) NOT NULL,
  `shipping_name` varchar(50) NOT NULL,
  `shipping_mobile` bigint(20) NOT NULL,
  `shipping_address` varchar(350) NOT NULL,
  `payment_mode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_ordermaster`
--

INSERT INTO `tbl_ordermaster` (`order_id`, `order_date`, `user_id`, `order_status`, `shipping_name`, `shipping_mobile`, `shipping_address`, `payment_mode`) VALUES
(1, '23-04-24', 1, 'confirmed1', 'Akash', 8000147888, 'C2 403 Ratnaruchi Vatika App', 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_amount` int(50) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `payment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `prod_price` int(30) NOT NULL,
  `prod_photo` varchar(100) NOT NULL,
  `prod_detail` text NOT NULL,
  `prod_stock` varchar(20) NOT NULL,
  `category_id` int(5) NOT NULL,
  `company_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`prod_id`, `prod_name`, `prod_price`, `prod_photo`, `prod_detail`, `prod_stock`, `category_id`, `company_id`) VALUES
(2, 'Himalaya Liv.52 DS Tablets 60', 184, 'himalaya-liv52-tablets-100s-2-1671740901.jpg', 'The natural ingredients in Liv.52 DS exhibit potent hepatoprotective properties against chemically-induced hepatotoxicity. It restores the functional efficiency of the liver by protecting the hepatic parenchyma and promoting hepatocellular regeneration. The antiperoxidative activity of Liv.52 DS prevents the loss of functional integrity of the cell membrane, maintains cytochrome P-450 (a large and diverse group of enzymes, which catalyze the oxidation of organic substances), hastens the recovery period and ensures early restoration of hepatic functions in infective hepatitis.', '60 tablets', 1, 1),
(3, 'Herbs Ashvagandha Tablet ', 200, 'ashwagandha.jpg', 'Himalaya Pure Herb Ashvagandha Tablet acts as a rejuvenating tonic. It is known for its immunomodulatory and inflammation-reducing properties, which help to fight against infections.', '5 Bottles', 1, 1),
(4, 'Acivir 200 DT Tablet', 70, 'ACIVIC.jpg', 'Acivir 200 DT Tablet is an antiviral medicine. It helps in treating viral infections like herpes labialis, herpes simplex, shingles, genital herpes infection, and chickenpox. It prevents the multiplication of virus in human cells and therefore helps in clearing the infection.\r\n', '10 Stips', 2, 2),
(7, 'Paracetamol ', 60, 'paracitamol.jpg', 'Paracetamol (Panadol, Calpol, Alvedon) is an analgesic and antipyretic drug that is used to temporarily relieve mild-to-moderate pain and fever.', '20 stips', 2, 4),
(8, 'Nurokind', 62, 'nurokind.jpeg', 'Nurokind Tablet is a dietary supplement used to reduce the risk of and manage vitamin B12 deficiency, which is a condition that can cause anaemia and nerve damage.', '10 Strips', 2, 5),
(9, 'Volini Pain Relief', 225, 'volini.jpg', 'Volini Pain Relief Get quick relief from body pain with the Volini spray. The spray can offer quick relief from pain in the muscles and joints. It can work wonders on sprains. Volini may work on the muscles and bones by effectively penetrating and acting upon the problematic area. ', '5 Tube', 3, 7),
(11, 'Stozic 50 ', 115, 'Stozic 50.jpg', 'tozic 50 Tablet is used in the treatment of pain in the legs due to insufficient blood flow (intermittent claudication). It also helps in reducing cramping, numbness, or weakness in the legs that occurs on walking in such patients.', '10 Strips', 2, 8),
(12, 'SBL Mercurius Solubilis Dilution 30 CH', 100, 'SBL Mercurius.jpg', 'SBL Mercurius Solubilis Dilution known as mercurius hydrargyrum, or commonly called Quicksilver, this remedy is made from the powder of precipitated mercury, which makes this medicine safe as well as a great therapeutic drug.', '5 bottles', 4, 9),
(13, 'Refresh Tears Eye Drop', 137, 'eyes drop.jpg', 'Refresh Tears Eye Drop is an eye lubricant or artificial tears used to relieve dry eyes. This can happen because not enough tears are made to keep the eye lubricated. It helps to soothe the irritation and burning seen in dry eyes by maintaining proper lubrication of the eyes.', '5 Bottles', 4, 10),
(14, 'Dabur Honitus', 200, 'dabar honitus.jpeg', 'Dabur Honitus Herbal Cough Remedy provides effective relief from cough. It is an ayurvedic remedy enriched with tulsi, mulethi, banapsha and other potent ingredients. It is clinically proven and provides fast relief against acute cough and throat irritation', '6 Bottles.', 1, 6),
(15, 'Dabur Broncorid ', 198, 'daabr brocorid.jpeg', 'Dabur Broncorid Syrup is an Ayurvedic formulation that can help support respiratory health. It has anti-inflammatory and anti-allergic properties. It is formulated using potent Ayurvedic herbs, which have expectorant properties.', '7 Bottles', 1, 6),
(17, 'Himalaya Healthcare Rumalaya Active Spray', 132, 'himalya spray.jpeg', 'Pain balm free with Rumalaya active spray', '10 Bottle of 50 gm ', 5, 1),
(18, 'Himalaya Scavon Vet Topical Wound Healer ', 150, 'himalya active scavon vet spray.jpeg', 'Himalaya Scavon Vet Topical Wound Healer Antimicrobial Spray offers broad-spectrum antimicrobial and antibacterial properties to promote effective wound healing in pets. The spray facilitates rapid collagenization and epithelialization of tissues, ensuring a swift and thorough recovery process. With its anti-infective features, it acts as a preventive measure against infections and complications in wounds, cuts, and abrasions. The targeted and convenient spray application makes it easy to administer in localised areas, making it an ideal choice for managing various skin injuries in animals. Overall, Himalaya Scavon Vet provides a reliable solution for pet owners seeking a trusted wound healer for their furry companions.', '20 bottels of 50mg ', 5, 1),
(19, 'Moov Cool Therapy Spray', 85, 'moov cool therepy spray.jpeg', 'Moov cool is a revolutionary new cold therapy spray for body pain relief. Sports injuries, sprains, and strains often need cooling or icing to recover. Moov Cool provides an ice-like cooling sensation without any ice! Simply apply Moov Cool 3-4 times a day on the affected area to cool the pain. Moov Cool is made from natural ingredients and is safe to use.\r\n\r\nProduct highlights\r\nProvides an ice-like cooling sensation\r\nEnriched with soothing elements\r\nFights injuries and sprains\r\nHelps reduce the effects of muscle strains', '10 Bottles', 5, 11),
(20, 'Volini Spray for Sprain, Muscle and Joint Pain', 250, 'volini spray.jpeg', 'Volini Spray is a pain relief spray which provides instant relief from muscle pain, sprain and pain in the joints. Scientifically formulated with the ingredients such as Diclofenac diethylamine, Methyl Salicylate and Menthol, it contains microparticles which provide quick relief from pain by penetrating deeply. Musculoskeletal and joint pain can also be cured by its use.\r\n\r\nProduct highlights\r\nProvides relief in case of muscle pain, sprain, pain in the joints, knee, back, neck and shoulder\r\nHelps in pain caused due to muscle pulls, sprain, strain and sports injuries\r\nMicroparticles allow deeper penetration and provide quick pain relief.', '3 Bottels', 5, 7),
(21, 'Digene Antacid Antigas Syrup | For Acidity, Gas, H', 152, 'diegene.jpg', 'Digene Acidity & Gas Relief Gel can help provide quick relief from acidity and gas and other gas troubles like bloating and belching. The Syrup is formulated with Acidity Neutralising Capacity (ANC) to give quick and effective relief from acidity. It helps minimise the symptoms of acidity such as abdominal pain and stomach discomfort. It works by neutralising stomach acid.', '4 Bottles', 1, 12),
(22, 'Bakson\'s Homeopathy Liv Aid Liver Tonic', 150, 'bakson.jpeg', 'Bakson\'s Liv Aid Liver Tonic acts as a complete liver tonic for sluggish liver or liver malfunctioning. It helps in managing a highly contagious liver infection caused by the hepatitis A virus.\r\n\r\nProduct highlights\r\nHelps manage liver-related disorders\r\nBeneficial for sluggish liver\r\nCan be effective against hepatitis A virus', '7 Bottles', 1, 13),
(23, 'Extralube Eye Gel Ophthalmic Gel', 104, 'extralube.jpg', 'PRODUCT INTRODUCTION\r\nExtralube Eye Gel Ophthalmic Gel is an eye lubricant or artificial tears used to relieve dry eyes. This can happen because not enough tears are made to keep the eye lubricated. It helps to soothe the irritation and burning seen in dry eyes by maintaining proper lubrication of the eyes.\r\n\r\nExtralube Eye Gel Ophthalmic Gel is usually taken when needed. Use the number of drops as advised by your doctor. Wait for at least 5-10 minutes before delivering any other medication in the same eye to avoid dilution. Do not use a bottle if the seal is broken before you open it. Always wash your hands and do not touch the end of the dropper. This could infect your eye. This medicine may require long-term use and can be taken safely for as long as you need it.\r\n\r\nThe most common side effects of using this medicine are blurred or altered vision, and sometimes pain in the eye. Let your doctor know if you experience these symptoms but they are usually temporary. ', '10 tube ', 3, 10),
(24, 'Ubtan Face Wash with Turmeric & Saffron for Tan Re', 259, 'mamaearth.jpg', 'Pamper your skin with the age-old tradition of Ubtan and let your dull, tanned skin rejuvenate, feel fresh & bright. Undo the effects of tan, pollution, dirt, harmful UV rays, and harsh weather conditions with Mamaearth Ubtan Face Wash.\r\n\r\nCrafted to give you glowing skin, Mamaearth Ubtan Face Wash is enriched with the natural goodness of Turmeric and Saffron. Antioxidants in Turmeric protect skin from free radical damage. It’s also traditionally known to fight sun tan and brighten skin tone. Carrot Seed Oil and Saffron clear spots and help in tan removal. Walnut Beads in this Ubtan Face Wash help exfoliate, reduce tan while brightening the skin.', '5 Bottles', 6, 14),
(25, 'Onion Shampoo for Hair Fall Control and Hair Growt', 599, 'mamaearth hair shampoo.jpeg', 'Introducing Mamaearth Onion Shampoo for stronger, smoother and healthier hair. The new formula improves deep cleansing action by providing 22% more foam without any sulfates or toxins. With up to 8 times more detangling action and 4 times more conditioning effect, it’s time to welcome healthier hair with the time-tested goodness of Onion. \r\nProduct Description\r\nProduct Description\r\nProduct Description\r\nProduct Description\r\nProduct Description\r\n\r\nMamaearth Onion Hair Shampoo helps you combat hair fall with its natural goodness. Onion, rich in sulfur, potassium & antioxidants, reduces hair fall & accelerates hair growth. Plant Keratin replenishes and strengthens hair, repairing its natural structure. It makes hair smooth and frizz-free. ', '3 Bottels', 6, 14);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `user_dob` varchar(25) NOT NULL,
  `user_gender` varchar(6) NOT NULL,
  `user_address` varchar(150) NOT NULL,
  `user_mobile` bigint(10) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_dob`, `user_gender`, `user_address`, `user_mobile`, `user_email`, `user_password`) VALUES
(4, 'root', '', '', '111', 8000147888, 'khushal@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `tbl_cart1`
--
ALTER TABLE `tbl_cart1`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_company`
--
ALTER TABLE `tbl_company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tbl_orderdetails`
--
ALTER TABLE `tbl_orderdetails`
  ADD PRIMARY KEY (`details_id`);

--
-- Indexes for table `tbl_ordermaster`
--
ALTER TABLE `tbl_ordermaster`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `Admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_cart1`
--
ALTER TABLE `tbl_cart1`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_company`
--
ALTER TABLE `tbl_company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_orderdetails`
--
ALTER TABLE `tbl_orderdetails`
  MODIFY `details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_ordermaster`
--
ALTER TABLE `tbl_ordermaster`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
