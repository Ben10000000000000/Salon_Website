-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2024 at 06:57 AM
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
-- Database: `style_sanctuary`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mob` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `status`, `created_at`, `name`, `email`, `mob`, `password`) VALUES
(3, 'Active', '2024-07-25 12:31:51', 'Abhinav', 'abhinav@gmail.com', '8544720895', 'e807f1fcf82d132f9bb018ca6738a19f');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_table`
--

CREATE TABLE `appointment_table` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile number` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `select_service` varchar(255) NOT NULL,
  `select_time` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment_table`
--

INSERT INTO `appointment_table` (`id`, `status`, `created_at`, `name`, `email`, `mobile number`, `date`, `select_service`, `select_time`, `message`) VALUES
(2, 'Decline', '2024-07-18 08:15:33', 'Raman', 'raman@gmail.com', '987654321', ' 2024-07-17', ' Haircutting ', '8am to 10am', 'fghknjknl'),
(3, 'Accept', '2024-07-19 08:05:45', 'abhinav', 'abhinavbhardawj0819@gmail.com', '8544720895', ' 2024-07-19', ' Haircutting ', '10am to 12pm', 'gvhkcl;l;skDgchsdjkkaiukdysjksjhcgvdsjop'),
(4, 'Decline', '2024-07-25 17:11:42', 'prince', 'princerajput0843@gmail.com', '9015424867', ' 2024-07-25', ' Haircutting ', '8am to 10am', ''),
(5, 'Pending', '2024-07-27 03:58:10', 'abhinav', 'princerajput0843@gmail.com', '', ' ', ' CLASSIC WET SHAVING: ', '', ''),
(6, 'Pending', '2024-07-27 04:02:15', '', '', '', ' ', ' FADE HAIRCUT: ', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `status`, `created_at`, `name`, `image`, `description`) VALUES
(11, 'Active', '2024-07-22 18:36:01', 'HAIRCUTTING:', '1377314978360_F_145456840_FR304Elzr4TMOy3uJnlKGkPhFdQNPRrU (1).jpg ', 'A tailored cut to suit your style and preference .'),
(12, 'Active', '2024-07-22 18:39:10', 'SHAVING:', '1479265595men-shaving.jpg ', 'A close, comfortable shave using hot towels and soothing creams.'),
(13, 'Active', '2024-07-22 18:42:14', 'BEARD GROOMING:', '1632514596beard-blog.jpg ', 'Neatening and shaping of your beard to maintain a tidy apperance.'),
(14, 'Active', '2024-07-22 18:45:59', ' HAIR COLOURING:', '1558101228close-up-view-hairdresser-colouring-hair-man-salon-men-mask-lying-chair-229969181.webp ', 'Professional coloring services to enchance your natural color or try a new look.'),
(15, 'Active', '2024-07-22 18:47:42', 'FACIAL:', '131940454963f36cfa161d8e766d0214c2_90e2f0b3-af8a-4f63-8772-eb5a61bed9ff.png ', 'A rejuvenating treatmennt to cleanse,tone,and moisturize your skin.'),
(16, 'Active', '2024-07-22 18:49:28', 'WAXING:', '1494459934images.jpeg ', 'Hair removal service for eyebrows,ears, and nose.'),
(17, 'Active', '2024-07-22 18:58:22', 'HAIR TREATMENT:', '2101020684MSCS-Men-31.webp ', 'Hair treatment service include scalp massage,hair washing with conditiong and specialized treatment aimed to improve your hair health.'),
(18, 'Active', '2024-07-22 19:03:15', 'MANICURE:', '20852509914bfd94ef-bd4.jpg ', 'Nail shaping ,trimming,and gromming  for a polished look.'),
(22, 'Active', '2024-07-22 19:11:23', '  PEDICURE:', '1809916678istockphoto-173367972-612x612.jpg ', ' Foot care service including nail care ,exfoliation,and moisturizing.');

-- --------------------------------------------------------

--
-- Table structure for table `contact_table`
--

CREATE TABLE `contact_table` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `Message` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `MOB` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_table`
--

INSERT INTO `contact_table` (`id`, `status`, `created_at`, `Message`, `Name`, `Email`, `MOB`) VALUES
(2, 'Active', '2024-07-23 07:37:15', 'dbsfshfb', 'dfbfsf', ' raman@gmail.com', '123456'),
(4, 'Active', '2024-07-25 17:26:52', 'hshgwsqtfd dtfqdvekdtuw', ' rudra', ' abhinavbhardawj0819@gmail.com', '1234567890'),
(7, 'Active', '2024-07-27 03:02:40', '', '', ' ', '');

-- --------------------------------------------------------

--
-- Table structure for table `register_table`
--

CREATE TABLE `register_table` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mob` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_table`
--

INSERT INTO `register_table` (`id`, `status`, `created_at`, `name`, `email`, `mob`, `password`) VALUES
(8, 'Active', '2024-07-25 10:26:23', 'abhinav', 'raman@gmail.com', '1234567890', 'e807f1fcf82d132f9bb018ca6738a19f'),
(9, 'Active', '2024-07-25 10:28:50', 'abhinav', 'keryfhjewg@gmail.com', '1234567890', 'e807f1fcf82d132f9bb018ca6738a19f'),
(10, 'Active', '2024-07-25 10:34:13', ' rudra', 'abhinavbhardawj0819@gmail.com', '1234567890', '6fb42da0e32e07b61c9f0251fe627a9c'),
(11, 'Active', '2024-07-25 11:21:04', 'abhinav', 'abhay@gmail.com', '1234567890', '6fb42da0e32e07b61c9f0251fe627a9c'),
(12, 'Active', '2024-07-25 11:38:21', 'abhinav', 'abhi@gmail.com', '1234567890', '6fb42da0e32e07b61c9f0251fe627a9c'),
(13, 'Active', '2024-07-25 15:08:41', 'abhinav', 'yt@gmail.com', '1234567890', 'e807f1fcf82d132f9bb018ca6738a19f'),
(14, 'Active', '2024-07-25 16:37:37', ' rudra', 'xy@gmail.com', '1234567890', 'e807f1fcf82d132f9bb018ca6738a19f'),
(15, 'Active', '2024-07-25 16:39:04', 'abhinav', 'po@gmail.com', '1234567890', 'e807f1fcf82d132f9bb018ca6738a19f'),
(16, 'Active', '2024-07-25 16:50:49', 'abhinav', 'qw@gmail.com', '1234567890', 'e807f1fcf82d132f9bb018ca6738a19f'),
(17, 'Active', '2024-07-25 17:00:08', 'prince', 'princerajput0843@gmail.com', '9015424867', 'aaa42296669b958c3cee6c0475c8093e'),
(18, 'Active', '2024-07-26 07:56:35', 'abhinav', 'rt@gmail.com', '1234567890', 'e807f1fcf82d132f9bb018ca6738a19f');

-- --------------------------------------------------------

--
-- Table structure for table `service_table`
--

CREATE TABLE `service_table` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `service_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_table`
--

INSERT INTO `service_table` (`id`, `status`, `created_at`, `service_name`, `image`, `description`, `category_name`) VALUES
(11, 'Active', '2024-07-26 16:56:35', 'FADE HAIRCUT:', '217582239ivy-league-haircut-with-fade.jpg', 'Gradually tapered haircut from short at the sides and back to longer on top, available in high, mid, and low variations.', 'HAIRCUTTING:'),
(12, 'Active', '2024-07-26 16:59:10', 'BASIC HAIRCUT:', '248790805f6a9cff61e65a034fce9b54420cc6ff5.jpg', 'Standard trim and shape haircut suitable for maintaining a clean, professional look.\r\n', 'HAIRCUTTING:'),
(13, 'Active', '2024-07-26 16:59:59', 'UNDERCUT:', '350276811Blog_Post_Undercut.webp', 'Style where the top hair is left longer while the sides and back are cut very short or shaved.', 'HAIRCUTTING:'),
(14, 'Active', '2024-07-26 17:01:16', 'BUZZ CUT:', '427206040best-buzz-cuts-for-men.jpg', 'Very short, uniform haircut achieved with electric clippers, offering a low-maintenance style.', 'HAIRCUTTING:'),
(15, 'Active', '2024-07-26 17:01:54', 'SCISSOR CUT:', '1134269023eb4000b2862c00cd83ad0f6d552be8ba.jpg', 'Haircut primarily done with scissors for a more textured and natural look.', 'HAIRCUTTING:'),
(16, 'Active', '2024-07-26 17:02:31', 'CREW CUT:', '984273660tp-crew-cut-500x333.webp', 'Short haircut with the hair on top cut to a uniform length, usually about an inch or less.', 'HAIRCUTTING:'),
(17, 'Active', '2024-07-26 17:10:33', 'HOT TOWEL SHAVING', '1904175134istockphoto-869786672-612x612.jpg', 'Traditional straight razor shave with a hot towel treatment to soften the beard and relax the skin for a smoother shave.', 'SHAVING:'),
(18, 'Active', '2024-07-26 17:11:43', 'CLASSIC WET SHAVING:', '31724122171dXF25IL4L._AC_UF350,350_QL80_.jpg', 'Shaving service using a straight razor or safety razor with shaving cream or foam for a close, comfortable shave.', 'SHAVING:'),
(19, 'Active', '2024-07-26 17:13:03', 'RAZOR SHAVING', '779615063straight-razor-cut-mans-beard-barbershop-barber-man-making-hairstyle-handsome-man_255847-1445.avif', 'Quick and convenient shave using a modern razor, ensuring a clean and efficient grooming experience.', 'SHAVING:'),
(20, 'Active', '2024-07-26 17:22:34', 'Growth Stimulation Treatments: ', '1841032231oil-beard-growth-hipster-male-260nw-2402780879.webp', '1.Beard Growth Serums: Application of specialized serums to promote beard growth.\r\n2.Microneedling Therapy: Use of microneedling to stimulate hair follicles and enhance beard growth.\r\n3.LED Light Therapy: Utilizing low-level light therapy to stimulate hai', 'BEARD GROOMING:'),
(21, 'Active', '2024-07-26 17:24:19', 'Beard Care and Maintenance:', '454527832about_us_3.png', '1.Hydration and Conditioning: Use of premium beard oils, balms, and conditioners to nourish and hydrate the beard.\r\n2.Exfoliation Treatments: Gentle exfoliation to remove dead skin cells and promote healthier skin and beard growth.\r\n3.Beard Detox Treatmen', 'BEARD GROOMING:'),
(22, 'Active', '2024-07-26 17:26:32', 'Personalized Growth Consultations:', '760405948salon-4-mens-styling.webp', '1.Nutritional and Supplement Guidance: Expert advice on vitamins and supplements that support beard growth.\r\n2.Lifestyle and Grooming Tips: Personalized recommendations for daily routines and habits to optimize beard growth.\r\n3.Tailored Beard Care Plans: ', 'BEARD GROOMING:'),
(23, 'Active', '2024-07-26 17:32:04', 'Classic Hair Color:', '21182738145bb99d539ae5e36f6d62f402af20db24.jpg', '1.Single Process Color: Applying a single shade to the entire head for a uniform color change.\r\n2.Root Touch-Up: Coloring the roots to match the rest of the hair and cover gray or regrowth.\r\n3.All-Over Color: Full head coloring to achieve a new hair color', ' HAIR COLOURING:'),
(24, 'Active', '2024-07-26 17:32:23', 'Highlighting Techniques: ', '57686479sddefault.jpg', '1.Foil Highlights: Lightening specific sections of hair with foils for a natural, sun-kissed look.\r\n2.Balayage: Hand-painted highlights for a more gradual, natural transition from dark to light.\r\n3.Lowlights: Adding darker shades to create depth and contr', ' HAIR COLOURING:'),
(25, 'Active', '2024-07-26 17:34:55', 'Creative and Fashion Colors:', '19884135404caba3a155fc1f9b5b5276675193f584.jpg', '1.Ombre and Sombre: Gradient coloring techniques where the hair transitions from dark to light or vice versa.\r\n2.Fashion Shades: Bold, non-traditional colors like blue, green, or purple for a statement look.\r\n3.Color Melting: Blending multiple colors seam', ' HAIR COLOURING:'),
(26, 'Active', '2024-07-26 17:41:01', 'Deep Cleansing Facials:', '160933873173.png', '1.Classic Deep Cleanse: Thorough cleansing, exfoliation, and extraction to remove impurities and unclog pores.\r\n2.Detox Facial: Purifying treatment using masks and serums to draw out toxins and refresh the skin.\r\n3.Acne Treatment Facial: Specialized facia', 'FACIAL:'),
(27, 'Active', '2024-07-26 17:41:49', 'Hydrating and Rejuvenating Facials:', '280182822barber-applies-black-moisturizing-mask-260nw-2471616771.webp', '1.Moisture Boost Facial: Hydrating treatment using rich moisturizers and serums to replenish and soothe the skin.\r\n2.Anti-Aging Facial: Targeted treatment to reduce signs of aging with ingredients like retinol and peptides.\r\n3.Vitamin C Facial: Brightenin', 'FACIAL:'),
(28, 'Active', '2024-07-26 17:42:24', 'Exfoliating and Resurfacing Facials:', '2014409541Facial-for-men-in-Dubai-Abu-Dhabi-RAK-1-1847-Executive-Grooming-For-Men-1.jpg', '1.Chemical Peel Facial: Exfoliating treatment using chemical solutions to remove dead skin cells and improve texture.\r\n2.Microdermabrasion Facial: Gentle exfoliation with fine crystals to smooth the skin and reduce signs of aging.\r\n3.Enzyme Facial: Using ', 'FACIAL:'),
(29, 'Active', '2024-07-26 17:45:46', 'Body Waxing:', '1830368005images (1).jpeg', '1.Back Waxing: Removing hair from the back for a smooth and clean appearance.\r\n2.Chest Waxing: Waxing the chest area to achieve a hair-free, well-groomed look.\r\n3.Abdominal Waxing: Targeting the stomach area to eliminate unwanted hair.', 'WAXING:'),
(30, 'Active', '2024-07-26 17:51:59', 'Facial Waxing:', '1923198251images.jpeg', '1.Eyebrow Waxing: Shaping and grooming the eyebrows for a clean, defined look.\r\n2.Mustache Waxing: Removing unwanted hair from the upper lip for a neat appearance.\r\n3.Full Face Waxing: Comprehensive facial waxing including the cheeks, chin, and neck.\r\n', 'WAXING:'),
(31, 'Active', '2024-07-26 17:53:20', 'Intimate Waxing:', '88558961istockphoto-1262600694-612x612.jpg', '1.Bikini Line Waxing: Trimming and waxing the bikini area for a tidy look.\r\n2.Brazilian Waxing: Removing all or most hair from the pubic area for a completely smooth finish.\r\n3.Manzilian Waxing: Comprehensive waxing of the male genital area for a clean, h', 'WAXING:'),
(32, 'Active', '2024-07-26 17:59:31', ' Hydrating and Moisturizing Treatments:', '655888953main-qimg-56b4172d36b835f8947e1de34cd2fd8f.jpeg', '1.Deep Conditioning: Intensive treatment to nourish and hydrate the hair, improving softness and shine.\r\n2.Hair Mask Treatment: Application of a rich, hydrating mask to repair and restore moisture to dry or damaged hair.\r\n3.Oil Treatments: Use of natural ', 'HAIR TREATMENT:'),
(33, 'Active', '2024-07-26 18:00:11', 'Repair and Strengthening Treatments:', '1465305549trichologist-examining-scalp-patient-260nw-2174050795.webp', '1.Keratin Treatment: Smoothing and strengthening treatment that reduces frizz and adds shine, often used to straighten hair.\r\n2.Protein Treatment: Restorative treatment to rebuild and strengthen hair fibers, ideal for damaged or over-processed hair.\r\n3.Bo', 'HAIR TREATMENT:'),
(34, 'Active', '2024-07-26 18:00:54', 'Scalp Treatments', '1727889847hair-scalp-treatment-by-carboxytherapy-260nw-1876108036.webp', '1.Scalp Exfoliation: Removal of dead skin cells and buildup from the scalp to promote a healthier environment for hair growth.\r\n2.Anti-Dandruff Treatment: Specialized treatment to address dandruff and scalp irritation, often including medicated shampoos o', 'HAIR TREATMENT:'),
(35, 'Active', '2024-07-26 18:24:57', 'Classic Pedicure:', '1307805495istockphoto-173367972-612x612.jpg', 'Basic Foot Care: Includes nail trimming, shaping, cuticle care, and a foot soak with exfoliation and moisturizing.', '  PEDICURE:'),
(36, 'Active', '2024-07-26 18:25:48', 'Sports Pedicure:', '1574826343professional-mens-pedicure-salon-young-260nw-2073060488.webp', 'Intensive Foot Treatment: Designed for active individuals, featuring extra exfoliation, deep hydration, and muscle relaxation.', '  PEDICURE:'),
(37, 'Active', '2024-07-26 18:26:27', 'Luxury Pedicure:', '299839216Spas and salons for men in Mumbai.webp', 'Premium Foot Care: A deluxe service that includes a foot mask, hot stone massage, and paraffin treatment for ultimate relaxation and hydration.', '  PEDICURE:'),
(38, 'Active', '2024-07-26 18:27:25', 'Classic Manicure:', '4965097034bfd94ef-bd4.jpg', 'Standard Hand Care: Nail trimming, shaping, cuticle care, and hand massage with moisturizing.', 'MANICURE:'),
(39, 'Active', '2024-07-26 18:31:18', 'Luxury Manicure:', '486197585man-nail-salon-receiving-manicure-260nw-424903021.webp', 'Enhanced Treatment: Features a hand exfoliation, mask, extended massage, and paraffin treatment for deep hydration and relaxation.', 'MANICURE:'),
(40, 'Active', '2024-07-26 18:32:49', 'Grooming Manicure:', '2024750334mens-health-190408-cremo-mark-bustos-shot-03-0631-1555530219.avif', 'Focused Grooming: Includes nail care, cuticle treatment, and a detailed hand massage, often tailored for professional or neat appearances.\r\n', 'MANICURE:');

-- --------------------------------------------------------

--
-- Table structure for table `team_member`
--

CREATE TABLE `team_member` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) NOT NULL,
  `image` longtext NOT NULL,
  `mobile number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `joining date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team_member`
--

INSERT INTO `team_member` (`id`, `status`, `created_at`, `name`, `image`, `mobile number`, `address`, `email`, `profession`, `joining date`) VALUES
(14, 'Active', '2024-07-22 12:10:35', ' rudra', '105300906481fe7af6a1e7213df963ed1bd87e72bc.jpg', '57656565454565', 'gfdcrertfchth6rrtyh', 'abhinavbhardawj0819@gmail.com', 'hairstylest', '2024-07-22'),
(16, 'Active', '2024-07-22 12:13:59', ' rudra', '589168975full-beard-1.jpg', '456788878776', 'hddfjhfvvavjahvfu', 'raman@gmail.com', 'hairstylest', '2024-07-22'),
(18, 'Active', '2024-07-22 15:25:34', ' abhinav', '719031497about_us_3.png', '8544720895', 'hddfjhfvvavjahvfu', 'keryfhjewg@gmail.com', 'hairstylest', '2024-07-22'),
(19, 'Active', '2024-07-22 15:26:08', ' hugjetwglybw', '1563196772close-up-view-hairdresser-colouring-hair-man-salon-men-mask-lying-chair-229969181.webp', '57657565654565', 'hddfjhfvvavjahvfu', 'keryfhjewg@gmail.com', 'hairstylest', '2024-07-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_table`
--
ALTER TABLE `appointment_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_table`
--
ALTER TABLE `contact_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_table`
--
ALTER TABLE `register_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_table`
--
ALTER TABLE `service_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_member`
--
ALTER TABLE `team_member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appointment_table`
--
ALTER TABLE `appointment_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `contact_table`
--
ALTER TABLE `contact_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `register_table`
--
ALTER TABLE `register_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `service_table`
--
ALTER TABLE `service_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `team_member`
--
ALTER TABLE `team_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
