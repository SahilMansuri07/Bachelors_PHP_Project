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
(1, 'Sofas'),
(2, 'Chairs'),
(3, 'Beds '),
(4, 'Tables'),
(5, 'Storage '),
(6, 'Desks');

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
(1, 'Godrej Interio', 'Godrej Interio is a leading Indian furniture brand offering a wide range of home and office furniture solutions. Known for its innovative designs and commitment to sustainability, it has a significant presence across India.'),
(2, 'Durian', 'Durian is a renowned Indian furniture manufacturer established in 1981. It offers premium home and office furniture, known for its quality craftsmanship and stylish designs.'),
(3, 'Pepperfry', 'Pepperfry is a leading Indian online marketplace for furniture and home décor, offering a wide range of products through its online platform and physical studios across India.'),
(4, 'Nilkamal', 'Nilkamal is the world’s largest manufacturer of moulded plastic furniture and a leading furniture brand in India, known for its durable and affordable products.'),
(5, 'Urban Ladder', 'Urban Ladder is an Indian online furniture retailer offering a curated collection of stylish and contemporary furniture for modern homes.'),
(6, 'Evok', 'Evok is a premium home furniture brand in India, offering a wide range of contemporary furniture and home décor products through its retail stores and online platform.'),
(7, 'IKEA India', 'IKEA India is part of the global IKEA Group, offering affordable and stylish ready-to-assemble furniture and home accessories through its large-format stores and online platform.'),
(8, 'Damro', 'Damro is one of the largest furniture manufacturers in South Asia, offering a wide range of home and office furniture known for its quality and affordability.'),
(9, 'Zuari Furniture', 'Zuari Furniture is an Indian furniture brand offering a wide range of home furniture products, known for its functional designs and value for money.'),
(10, 'Fabindia', 'Fabindia is an Indian retail company offering a range of handcrafted furniture and home décor products, promoting traditional Indian craftsmanship.'),
(11, 'Hulsta', 'Hulsta is a premium German furniture brand with a presence in India, offering high-quality, modern furniture designs for contemporary homes.'),
(12, '@Home by Nilkamal', '@Home is a retail brand by Nilkamal offering a wide range of stylish and affordable home furniture and décor products through its stores across India.'),
(13, 'Wipro Furniture', 'Wipro Furniture is a division of Wipro Enterprises, offering innovative and ergonomic office furniture solutions for modern workplaces.'),
(14, 'Usha Lexus Furniture', 'Usha Lexus Furniture is an Indian brand offering a range of home and office furniture products, known for its quality and design.'),
(15, 'Artisan Furniture', 'Artisan Furniture is an Indian brand specializing in handcrafted wooden furniture, combining traditional craftsmanship with modern designs.');

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
(26, 'LuxeCraft Oak Dining Table', 15499, 'oak-dining-table.jpg', 'Elegant oak wood dining table with a polished finish, comfortably seats 6 people. Durable and timeless design for family gatherings.', '10 units', 1, 1),
(27, 'CasaComfort King Size Bed', 20999, 'king-size-bed.jpg', 'Spacious king size bed with engineered wood frame and premium foam cushioning. Comes with a headboard and storage drawer.', '8 units', 2, 3),
(28, 'UrbanArt Recliner Chair', 8999, 'recliner-chair.jpg', 'Modern recliner chair with leatherette fabric, perfect for relaxing in your living room or study. Reclines up to 135° for comfort.', '12 units', 5, 4),
(29, 'HomeStyle Coffee Table', 4499, 'coffee-table.jpg', 'Stylish wooden coffee table with tempered glass top. Adds charm to your living room decor while offering practical storage.', '20 units', 1, 6),
(30, 'ComfortNest Study Desk', 6999, 'study-desk.jpg', 'Compact and ergonomic study table with shelves and cable management features. Ideal for students and work-from-home professionals.', '15 units', 6, 7),
(31, 'ElegantWardrobe 3-Door Closet', 12999, 'wardrobe.jpg', 'Spacious 3-door wardrobe made from high-quality plywood. Includes hanging space, shelves, and a locking drawer.', '5 units', 3, 8),
(32, 'RoyalRest Sofa Set (3+2)', 25999, 'sofa-set.jpg', 'Plush 5-seater sofa set with solid wooden frame and premium cushioning. Perfect for living room luxury and comfort.', '6 sets', 5, 9),
(33, 'WoodCraft TV Cabinet', 5799, 'tv-cabinet.jpg', 'Minimalistic TV cabinet with walnut finish and storage drawers. Supports TVs up to 55 inches.', '9 units', 4, 10),
(34, 'DreamSpace Bunk Bed', 13999, 'bunk-bed.jpg', 'Durable metal-frame bunk bed with safety railings and ladder. Space-saving design perfect for kids’ rooms.', '7 units', 2, 11),
(35, 'ZenWork Ergonomic Chair', 4999, 'ergonomic-chair.jpg', 'High-back ergonomic office chair with lumbar support, mesh backrest, and 360° swivel base. Ideal for long work hours.', '18 units', 6, 12),
(2, 'Himalaya Classic Wooden Coffee Table', 18499, 'table coffe.png', 'Elegant coffee table crafted from solid wood with a natural finish. Designed to bring charm and functionality to any living room setup.', '25 Units', 1, 1),
(3, 'Himalaya Oak Dining Chair Set of 2', 20000, 'ashwagandha-chair.jpg', 'Durable and stylish oak wood dining chairs with a sleek design. Perfect for adding sophistication to your dining area.', '10 Sets', 1, 1),
(4, 'Cipla Modern Bookshelf with Drawers', 7099, 'cipla-bookshelf.jpg', 'Contemporary wooden bookshelf with built-in drawers for additional storage. Great for living rooms and home offices.', '18 Units', 2, 2),
(7, 'Mankind Recliner Sofa - Single Seater', 16000, 'mankind-recliner.jpg', 'Comfortable recliner upholstered in premium fabric. Provides excellent back and leg support for relaxing evenings.', '12 Units', 2, 4),
(8, 'Dabur King Size Bed Frame - Teak Wood', 62000, 'dabur-bed.jpg', 'Solid teak wood king size bed with minimalistic headboard design. Sturdy construction and a natural finish.', '5 Units', 2, 5),
(9, 'Sun Pharma TV Entertainment Unit', 22500, 'sun-tv-unit.jpg', 'Modern media unit with ample storage and sleek design. Designed for 50- to 65-inch TVs with space for consoles.', '6 Units', 3, 7),
(11, 'Intas Work-from-Home Office Desk', 11500, 'intas-desk.jpg', 'Compact wooden office desk with drawers and cable management features. Ideal for remote working professionals.', '14 Units', 2, 8),
(12, 'SBL Classic Wooden Shoe Rack', 10000, 'sbl-shoerack.jpg', 'Spacious shoe rack with multi-tiered storage. Crafted from engineered wood for durability and a modern look.', '10 Units', 4, 9),
(13, 'Allergan Minimalist Wall Shelf - Set of 3', 1370, 'allergan-wall-shelf.jpg', 'Set of 3 floating wall shelves for decor and storage. Ideal for compact spaces like kitchens or study rooms.', '20 Sets', 4, 10),
(14, 'Dabur L-shaped Fabric Sofa - 5 Seater', 42000, 'dabur-lsofa.jpg', 'Luxurious L-shaped sofa with soft fabric and high-density foam cushions. A statement piece for any living room.', '3 Units', 1, 6);

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
