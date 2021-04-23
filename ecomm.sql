-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 11:00 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `addproduct`
--

CREATE TABLE `addproduct` (
  `id` int(255) NOT NULL,
  `p_name` text NOT NULL,
  `p_img1` varchar(255) NOT NULL,
  `p_img2` varchar(255) NOT NULL,
  `p_img3` varchar(255) NOT NULL,
  `p_img4` varchar(255) NOT NULL,
  `cat` varchar(255) NOT NULL,
  `p_mrp` varchar(255) NOT NULL,
  `p_price` varchar(255) NOT NULL,
  `d_charge` varchar(255) NOT NULL,
  `p_qunty` varchar(255) NOT NULL,
  `p_height` varchar(255) NOT NULL,
  `p_width` varchar(255) NOT NULL,
  `p_weight` varchar(255) NOT NULL,
  `p_brand` varchar(255) NOT NULL,
  `p_des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addproduct`
--

INSERT INTO `addproduct` (`id`, `p_name`, `p_img1`, `p_img2`, `p_img3`, `p_img4`, `cat`, `p_mrp`, `p_price`, `d_charge`, `p_qunty`, `p_height`, `p_width`, `p_weight`, `p_brand`, `p_des`) VALUES
(15, 'Croma 5 Cup (0.6L) 600 - Watt Coffee Maker with Anti Drip Function & Detachable Coffee Filter Comes with Borosilicate Glass Carafe Jar', '31pgvD6f6hL.jpg', '81fTIR+kPBL._SL1500_.jpg', '61UEO7JhD3L._SL1000_.jpg', '', 'Electronics ', '1809', '1499', '60', '60', '21.3 x 15.1 x 27.6 Centimeters', '21.3 x 15.1 x 27.6 Centimeters', ' 957 g', 'Croma ', 'Excellent for Large Groups - The 5 cup capacity makes it perfect for large family gatherings\r\nAnti Drip Function - The anti- drip/ drip stop allows you to pour a cup of coffee before the full brewing cycle is finished.\r\nHot brew right in your kitchen - Enjoy a cup of hot brewed coffee whenever you like at the ease of your own kitchen\r\nSafe and easy to use - Croma CRAK0029 coffee maker comes with high temperature glass heat resistant carafe with water level indicator\r\nWarranty - 24 Months from the date of purchase'),
(16, 'OnePlus 80 cm (32 inches) Y Series HD Ready LED Smart Android TV 32Y1 (Black)', '81qtALn+GpL._SL1500_.jpg', '719Wx1mh0CL._SL1500_.jpg', '61SiMoWnZyL._SL1500_.jpg', '71-Hue6YxFL._SL1500_.jpg', 'Electronics ', '19999', '18900', '60', '65', ' 71.3 x 6.5 x 42 cm', ' 71.3 x 6.5 x 42 cm', '3.5 Kg', 'OnePlus ', 'Resolution: HD Ready (1366x768) | Refresh Rate: 60 hertz\r\nConnectivity: 2 HDMI ports to connect set top box, Blu Ray players, gaming console | 2 USB ports to connect hard drives and other USB devices\r\nSound : 20 Watts Output | Dolby Audio\r\nSmart TV Features: Android TV 9.0 | OnePlus Connect | Google Assistant | Play Store | Chromecast | Shared Album | Supported Apps : Netflix, YouTube, Prime video | Content Calendar | OxygenPlay\r\nDisplay : LED Panel | Noise Reduction | Colour Space Mapping |Dynamic Contrast | Anti-Aliasing | DCI-P3 93% colour gamut | Gamma Engine\r\nDesign: Bezel-less | Screen/Body Ratio = 91.4%\r\nWarranty Information: 1 year comprehensive warranty and additional 1 year on panel provided by the manufacturer from date of purchase'),
(17, 'Philips PowerPro FC9352/01 Compact Bagless Vacuum Cleaner (Blue)', '41xQDop2T5L.jpg', '41hVp93ikmL.jpg', '41aIZAK+ciL.jpg', '', 'Electronics ', '9995', '7299', '60', '55', '28.1 x 41 x 24.7 Centimeters', '28.1 x 41 x 24.7 Centimeters', '4 kg 500 g', 'Philips ', 'Powercyclone 5 technology separates dust from air, Action radius: 9 m, Cord length: 6m\r\n1900W motor for strong suction power, Sound power level: 82 dB, Airflow (max): 37 l/s, Dimensions of product (LxWxH): 410 x 281 x 247mm\r\nSuction power (max):370W ,Input power (IEC): 1600W , Vacuum (max) :33kPa. Weight of product: 4.5 kg\r\nTurbo Brush removes 25 percent more hairs and dust , Multiclean nozzle for thorough floor cleaning\r\nAdvanced dust container design for hygienic emptying\r\nActivelock couplings easily adjust to every task\r\nSoft brush integrated into handle, always ready to use'),
(18, 'Samsung 6.5 kg Fully-Automatic Top Loading Washing Machine', '51QmQjHQASL._SL1500_.jpg', '71bJ8Zn8zFL._SL1500_.jpg', '71nz2h5uIdL._SL1200_.jpg', '71tlart4XFL._SL1500_.jpg', 'Electronics ', '16800', '16599', '0', '15', '56.8 x 54 x 90.6 Centimeters', '56.8 x 54 x 90.6 Centimeters', '29 kg 500 g', 'Samsung ', 'Fully-automatic top load washing machine: Affordable with great wash quality, Easy to use\r\nCapacity 6.5 Kg: Suitable for families with 3 to 4 members\r\nProduct Warranty: 2 years comprehensive warranty on product and 2 years on motor\r\nRPM 680 : Higher spin speeds helps in faster drying\r\n6 Wash Programs : Normal, Quick wash, Delicates, Soak + Normal, Energy Saving, Eco Tub Clean\r\nSpecial Features - Stylish design, Intuitive LED control panel, Centre Jet Technology for powerful washing, Monsoon mode for Indian specific use, Air turbo, Auto restart, Water level selector, Child lock safety, Power Filtration with magic lint filter, Tempered glass window, Diamond Drum for gentle fabric care\r\nIn the box componenets : Washing Machine, Hose Drain, Hose Inlet, Warranty Card, User Manual, Shutter (Rat Mesh), Clip Ring, Screw Fitting'),
(19, 'Bajaj ATX 4 750-Watt Pop-up Toaster (White)', '61B3cxLcvcL._SL1500_ (1).jpg', '71e9wGVGlSL._SL1500_.jpg', '81o2rTkF46L._SL1500_.jpg', '91MDmS1ZnQL._SL1500_.jpg', 'Electronics ', '1470', '1299', '0', '20', '29 x 18.5 x 16.5 Centimeters', '29 x 18.5 x 16.5 Centimeters', '1 kg 600 g', 'Bajaj ', 'The Bajaj ATX4 2 Slice Pop up Toaster is a compact toaster with a stainless steel outer body and an electronic auto pop up feature. The unique cool touch feature on the body and sides of this Bajaj toaster is designed to insulate the heat within the toasting chamber, thereby rendering greater efficiency and added safety. The Bajaj auto pop up toaster has a variable browning control, where the slices are toasted the way you want it to be. You have an option of mid cycle cancel function that allows you to stop in between the toasting process. The removable crumb tray in the Morphy Richards toaster makes for quick cleaning and easy maintenance. This pop up toaster also has a hinged crumb tray which is sturdy and allows easy cleaning. The ATX4 toaster consists of a cord winder below the appliance that you can use to wrap the cord around the body of toaster.'),
(20, 'TIMESOON Portable Electric USB Juice Maker Juicer Bottle Blender Grinder Mixer,4 Blades Rechargeable Bottle with (Multi color)', '512R2B6P7yL.jpg', '51iZYgO5PjL.jpg', '41lyx6Mw5IL.jpg', '', 'Electronics ', '699', '599', '60', '55', '6 x 4 x 4 Centimeters', '6 x 4 x 4 Centimeters', '100 g', 'TIMESOON ', 'Generic Portable & Compact, Convenient to Charge USB Juicer Blender : Innovative juicer cup, 2 in 1 design, a water bottle and also a juicer, Light weight is easy to Carry to School, Office, Parks, Gym, Yoga, Zumba, Aerobics Sports Coaching classes Camping anywhere you want to and it also convenient for charge by power bank, laptop, computer, car or other usb devices. It has 4-blade 304 stainless steel blade on the bottom of bottle, so that you can make a cup of fresh and delicious juice by yourself. Perfect for travelling, business trip or other outdoor activities use. Product instructions: Please allow the motor to cool for some time between product uses Burning smell during first few usage is normal due to varnish coating on motor and will stop after few usage cycles. Please Read Instructions given before operation Easy and Safe Cleaning - It has have smart safety protection device, magnetic sensing switch ultra safe to use and clean, the juicer cup\'s Food Grade PP body and ABS bottom can be separated, you can easy to clean it . Multi-function - Natural tasty juice, milkshake, smoothie and other baby food protein shake, How to Use: 1) Firstly Cut fruits(Only Citrus/ Juicy and please remove hard shell/skin of Fruits/Vegetables) into small approx. 1.5*1.5 cm and Open cap of juicer bottle and fill bottle about 60% with cut pcs. Now just add water or milk or honey About 20% So fill total 80% of the Cup capacity as per your necessity. double press the switch to start, single press to stop, it will auto stir and mix, DIY juice. Turn on juicer bottle and let\'s start blend fruit. Allow 1 min to blend to get juice. Now its ready, Just serve it in wine glass and enjoy. Product Detail: Color : Multi (random color will be shipped) Capacity : 380 ml Battery Capacity : 2000 mAh Lithium battery Motor Model : DC 3.6V Charging Time : About 3 Hours Full Charge Working Current:10-12 Amp. Using times : 10-12 times Idle Protection : Turn Off in 5-7 sec'),
(21, 'Plain Voile Cotton 5 Meter Fabric Solid Voile Fabric Cloth Material Fabric (White)', '41Tw3rnx2tL._AC_SY450_.jpg', '', '', '', 'Textile', '1400', '390', '20', '65', '44 Inches (1.1 Meters), Fabric : Light Weight, Quality : 92 x 88 ( best quality)', '44 Inches (1.1 Meters), Fabric : Light Weight, Quality : 92 x 88 ( best quality)', '240 g', 'Plain Voile ', 'Item - 5 Meter High Quality Sheer Cotton Voile Fabric\r\nWidth - 44\" Inch , Pattern - Solid/Plain , Wash Care - Hand Washable\r\nFabric - 100% Cotton , Colors - Natural Vegetable Dye , Cotton Thread count : 60 x 60 ,\r\nFabric Width : 44 Inches (1.1 Meters), Fabric : Light Weight, Quality : 92 x 88 ( best quality)\r\nSanganeri Jaipur Print Fabric For Garment'),
(22, 'Encasa Homes Fabric by The Metre - Mercerised Dyed Cotton Canvas 100 x 140 cm Width, White', '91wHnOmU+nL._AC_SL1500_.jpg', '81ttnhRD-VL._AC_SL1500_.jpg', '816+-TEA54L._AC_SL1500_.jpg', '812gxJG82IL._AC_SL1500_.jpg', 'Textile', '600', '398', '20', '60', '35 x 24 x 1 cm; 280 Grams', '35 x 24 x 1 cm; 280 Grams', '280 g', 'Encasa Homes', 'OFFER: Minimum 1 metre multiples. Order of 1 metre will get you 100cm x 145cm piece. Order of 3 metres will get you 300cm x 145cm piece. Buy 1 mt, 2 mts, 3 mts etc any length as required. Fabric will be cut to your ordered length like in retail shop and couriered to you. Boutiques, Designers, Architects can buy through the business section.\r\nVIBRANT COLOURS: High quality cotton fabric is Mercerized and Dyed with high quality dyes to ensure vibrant colours and very good colour solidity. Can be used for Home Decor, Dress Material, etc.\r\nFABRIC: Half Panama Canvas weave 100% Cotton Fabric, 145 cms width, perfect weight for home decor articles like Bed Covers, Curtains, Cushion Covers, Table Cloth, Chair upholstery, Sofa cover, etc. Can also be used for making dresses, shirts, etc.\r\nPERFORMANCE: Strong woven fabric to last longer time, soft finished to give good handle & drape.\r\nWASHING INSTRUCTIONS: Very good colour fastness and controlled shrinkage allows hand or machine wash. Wash dark colours separately.'),
(23, 'Krishnajaiprifabric Floral Printed Cotton Cloth Materiel Natural Fabric Running Jaipuri Hand Block Printed Men & Women Dress Material Natural 44\' Inches Width Pink Fabric 3 Meter', '91F-nKwE9lL._AC_SL1500_.jpg', '81IiTBGF98L._AC_SL1500_.jpg', '91r9LON-ZfL._AC_SL1500_.jpg', '', 'Textile', '999', '460', '10', '65', 'N/A', 'N/A', 'N/A', 'Krishnajaiprifabric', 'N/A'),
(24, 'Chalostore Cotton Printed unstitched blouse, Kurthi, long frock fabric material for women (80 cms, 1 meter, 2 meters, 2.5 meters, 3 meters)', '918GJLlFtPL._AC_UL1500_.jpg', '81S+QJq20rL._AC_UL1500_.jpg', '91lz0V5cjmL._AC_UL1500_.jpg', '91lz0V5cjmL._AC_UL1500_.jpg', 'Textile', '699', '499', '60', '60', ' 25 x 19 x 4 cm; 210 Grams', ' 25 x 19 x 4 cm; 210 Grams', '210 g', 'Chalostore', 'Pack contains 3 unstitched Blouse pieces\r\nBest quality of cotton fabric with the length of 80 cms, 1 meters, 2 meters, 2.5 meters & 3 meters. Blouse width-44 inches\r\nPerfect to give return gift for Birthdays, festivals or any other occasions, Perfect for Personal use\r\nColour of the actual product may little vary from the image due to screen resolution'),
(25, 'Voltas 1.5 Ton 3 Star Inverter Split AC (183V_CZR, White)', '21y8OS8l2nL._AC_.jpg', '', '', '', 'Electronics ', '33699', '53699', '0', '20', '21.3 x 15.1 x 27.6 Centimeters', '21.3 x 15.1 x 27.6 Centimeters', '44 kg 100 g', 'Voltas', 'Compact in terms of design, it also comes with a multitude of features\r\nThis makes a smart pick for everyone\r\nComes with proper packaging\r\n100% COPPER ECO-FRIENDLY REFRIGERANT HIGH AMBIENT COOLING MULTI-STAGE FILTRATION');

-- --------------------------------------------------------

--
-- Table structure for table `a_hit`
--

CREATE TABLE `a_hit` (
  `id` int(255) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_phone` varchar(255) NOT NULL,
  `u_add` varchar(255) NOT NULL,
  `u_city` varchar(255) NOT NULL,
  `u_pin` varchar(255) NOT NULL,
  `u_state` varchar(255) NOT NULL,
  `u_id` varchar(255) NOT NULL,
  `p_price` varchar(255) NOT NULL,
  `p_qty` varchar(255) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `diliver_ch` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `a_hit`
--

INSERT INTO `a_hit` (`id`, `u_name`, `u_email`, `u_phone`, `u_add`, `u_city`, `u_pin`, `u_state`, `u_id`, `p_price`, `p_qty`, `p_id`, `price`, `diliver_ch`, `total`, `date`, `order_id`, `action`, `payment`) VALUES
(1, 'Piyush Himmatro Babhulakar', 'piyushbabhulakar12@gmail.com', '+917517090229', 'Laxami Naryan Nagar Bhuswal', 'Jalgaon', '425201', 'Mahārāshtra', '1', '7299', '1', '17', '26199', 'Free Delivery', '26199', '04-17-21', '607b2ae00501b', 'Confirm', 'Done'),
(3, 'Piyush Himmatro Babhulakar', 'piyushbabhulakar12@gmail.com', '+917517090229', 'Laxami Naryan Nagar Bhuswal', 'Jalgaon', '425201', 'Mahārāshtra', '1', '18900', '1', '16', '26199', 'Free Delivery', '26199', '04-17-21', '607b2ae00501b', 'Confirm', 'Done'),
(4, 'Piyush Himmatro Babhulakar', 'piyushbabhulakar12@gmail.com', '+917517090229', 'Laxami Naryan Nagar Bhuswal', 'Jalgaon', '425201', 'Mahārāshtra', '1', '1499', '1', '15', '1499', 'Free Delivery', '1499', '04-20-21', '607f0c0d6b49d', 'Confirm', 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `a_regi`
--

CREATE TABLE `a_regi` (
  `id` int(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `cpass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `a_regi`
--

INSERT INTO `a_regi` (`id`, `f_name`, `l_name`, `email`, `phone`, `pass`, `cpass`) VALUES
(1, 'Admin', 'Admin', 'admin@gmail.com', '7517090229', '202cb962ac59075b964b07152d234b70', 'd9b1d7db4cd6e70935368a1efb10e377');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `p_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `user_id`, `qty`, `p_price`) VALUES
(32, '15', '1', '1', '1499');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `u_name`, `email`, `des`) VALUES
(1, 'Piyush Himmatro Babhulakar', 'piyushbabhulakar12@gmail.com', 'Product Nor Deliver');

-- --------------------------------------------------------

--
-- Table structure for table `regi`
--

CREATE TABLE `regi` (
  `id` int(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `cpass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regi`
--

INSERT INTO `regi` (`id`, `f_name`, `l_name`, `email`, `phone`, `pass`, `cpass`) VALUES
(1, 'Piyush', 'Babhulakar', 'piyushbabhulakar12@gmail.com', '7517090229', '202cb962ac59075b964b07152d234b70', 'd9b1d7db4cd6e70935368a1efb10e377'),
(2, 'Vishal', 'Patil', 'vishalpatil@gmail.com', '1212121212', '202cb962ac59075b964b07152d234b70', 'd9b1d7db4cd6e70935368a1efb10e377');

-- --------------------------------------------------------

--
-- Table structure for table `u_order`
--

CREATE TABLE `u_order` (
  `id` int(255) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_phone` varchar(255) NOT NULL,
  `u_add` varchar(255) NOT NULL,
  `u_city` varchar(255) NOT NULL,
  `u_pin` varchar(255) NOT NULL,
  `u_state` varchar(255) NOT NULL,
  `u_id` varchar(255) NOT NULL,
  `p_price` varchar(255) NOT NULL,
  `p_qty` varchar(255) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `diliver_ch` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `u_order`
--

INSERT INTO `u_order` (`id`, `u_name`, `u_email`, `u_phone`, `u_add`, `u_city`, `u_pin`, `u_state`, `u_id`, `p_price`, `p_qty`, `p_id`, `price`, `diliver_ch`, `total`, `date`, `order_id`, `action`, `payment`) VALUES
(11, 'Piyush Himmatro Babhulakar', 'piyushbabhulakar12@gmail.com', '+917517090229', 'Laxami Naryan Nagar Bhuswal', 'Jalgaon', '425201', 'Mahārāshtra', '1', '7299', '1', '17', '26199', 'Free Delivery', '26199', '04-17-21', '607b2ae00501b', 'Confirm', 'Done'),
(12, 'Piyush Himmatro Babhulakar', 'piyushbabhulakar12@gmail.com', '+917517090229', 'Laxami Naryan Nagar Bhuswal', 'Jalgaon', '425201', 'Mahārāshtra', '1', '18900', '1', '16', '26199', 'Free Delivery', '26199', '04-17-21', '607b2ae00501b', 'Confirm', 'Done'),
(13, 'Piyush Himmatro Babhulakar', 'piyushbabhulakar12@gmail.com', '+917517090229', 'Laxami Naryan Nagar Bhuswal', 'Jalgaon', '425201', 'Mahārāshtra', '1', '1499', '1', '15', '1499', 'Free Delivery', '1499', '04-18-21', '607c610103938', 'Pending', 'Done'),
(14, 'Piyush Himmatro Babhulakar', 'piyushbabhulakar12@gmail.com', '+917517090229', 'Laxami Naryan Nagar Bhuswal', 'Jalgaon', '425201', 'Mahārāshtra', '1', '1499', '1', '15', '1499', 'Free Delivery', '1499', '04-20-21', '607ecce92aad4', 'Pending', 'Done'),
(15, 'Piyush Himmatro Babhulakar', 'piyushbabhulakar12@gmail.com', '+917517090229', 'Laxami Naryan Nagar Bhuswal', 'Jalgaon', '425201', 'Mahārāshtra', '1', '1499', '1', '15', '1499', 'Free Delivery', '1499', '04-20-21', '607f0c0d6b49d', 'Confirm', 'Done');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addproduct`
--
ALTER TABLE `addproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a_hit`
--
ALTER TABLE `a_hit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a_regi`
--
ALTER TABLE `a_regi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regi`
--
ALTER TABLE `regi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `u_order`
--
ALTER TABLE `u_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addproduct`
--
ALTER TABLE `addproduct`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `a_hit`
--
ALTER TABLE `a_hit`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `a_regi`
--
ALTER TABLE `a_regi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `regi`
--
ALTER TABLE `regi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `u_order`
--
ALTER TABLE `u_order`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
