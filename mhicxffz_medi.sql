-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 28, 2024 at 03:37 PM
-- Server version: 10.6.17-MariaDB-cll-lve
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mhicxffz_medi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `usr_id` varchar(111) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `img`, `first_name`, `last_name`, `phone`, `username`, `email`, `password`, `role`, `status`, `usr_id`) VALUES
(1, 'TEN4vdaz19qR1716130985.jpg', 'Admin', 'Name', '+92330000000000', 'admin', 'info@locumhealth.co.uk', '1122', 'Superadmin', 'Active', 'admin30ed55b8');

-- --------------------------------------------------------

--
-- Table structure for table `applications_list`
--

CREATE TABLE `applications_list` (
  `id` int(11) NOT NULL,
  `name` varchar(222) DEFAULT NULL,
  `email` varchar(222) DEFAULT NULL,
  `Message` varchar(555) DEFAULT NULL,
  `cv_file` varchar(111) DEFAULT NULL,
  `job_id` varchar(111) DEFAULT NULL,
  `shufl_id` varchar(111) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applications_list`
--

INSERT INTO `applications_list` (`id`, `name`, `email`, `Message`, `cv_file`, `job_id`, `shufl_id`, `date`) VALUES
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cvs`
--

CREATE TABLE `cvs` (
  `id` int(11) NOT NULL,
  `name` varchar(222) DEFAULT NULL,
  `email` varchar(222) DEFAULT NULL,
  `phone` varchar(222) DEFAULT NULL,
  `cv_file` varchar(222) DEFAULT NULL,
  `message` varchar(222) DEFAULT NULL,
  `vacancies_type` varchar(222) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cvs`
--

INSERT INTO `cvs` (`id`, `name`, `email`, `phone`, `cv_file`, `message`, `vacancies_type`, `date`) VALUES
(4, 'Muhammad usman', 'support@webhostingsol.com', '03135361670', 'ESuycswptVNA1716577082.jpg', 'dddddddddddd', NULL, NULL),
(5, 'Muhammad usman', 'support@webhostingsol.com', '03135361670', 'kpvF9LV70RNr1716578337.jpg', 'job application', '4', NULL),
(6, 'test name', 'locumh@gmail.com', '078491651', 'z10y9QjVlak41716798956.pptx', 'regdrfg', '2', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs_list`
--

CREATE TABLE `jobs_list` (
  `id` int(11) NOT NULL,
  `title` varchar(111) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `Location` varchar(111) DEFAULT NULL,
  `Salary` varchar(111) DEFAULT NULL,
  `job_details` longtext DEFAULT NULL,
  `shufl_id` varchar(111) DEFAULT NULL,
  `category` varchar(111) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs_list`
--

INSERT INTO `jobs_list` (`id`, `title`, `date`, `Location`, `Salary`, `job_details`, `shufl_id`, `category`) VALUES
(2, 'Locum GP – Maternity Cover', '2024-05-19', 'Newcastle upon Tyne, UK', '£750 per day - £780 per day', '<p>A amazing opportunity has arisen for a dedicated locum GP to join a lovely practice in Newcastle to cover 4-5 sessions of maternity&nbsp;leave on a fixed contract from August 2024.&nbsp;</p><p>They are a multicultural practice serving around 9,000 patients.&nbsp;</p><p><strong>About the practice:</strong></p><ul><li>2 operations manager&nbsp;</li><li>10 admin staff&nbsp;</li><li>8 GP’s&nbsp;</li><li>3 GP Partners&nbsp;</li><li>4 nurses&nbsp;</li><li>3 practice business managers&nbsp;</li><li>2 social prescriber</li></ul><p><strong>About the role:</strong></p><ul><li>Process medical reports and referrals</li><li>Face-to-face, telephone and online consultations&nbsp;</li><li>Maintain administrative records</li><li>Prescribe prescriptions&nbsp;</li><li>Referring patients to urgent care/secondary care&nbsp;</li><li>Carry out screening and testing&nbsp;</li><li>Conduct home visits</li></ul><p><strong>Essential:</strong></p><ul><li>On the Performers List&nbsp;</li><li>Full registration with the GMC&nbsp;</li><li>Experience working in primary care&nbsp;</li><li>Qualified General practitioner&nbsp;</li><li>Clear DBS</li></ul>', 'gq2rbcvmhs0juf95we73n8y14ipdzx6otkla', '23'),
(3, 'Locum GP – Maternity Cover', '2024-05-19', 'Newcastle upon Tyne, UK', '£750 per day - £780 per day', '<p>A amazing opportunity has arisen for a dedicated locum GP to join a lovely practice in Newcastle to cover 4-5 sessions of maternity&nbsp;leave on a fixed contract from August 2024.&nbsp;</p><p>They are a multicultural practice serving around 9,000 patients.&nbsp;</p><p><strong>About the practice:</strong></p><ul><li>2 operations manager&nbsp;</li><li>10 admin staff&nbsp;</li><li>8 GP’s&nbsp;</li><li>3 GP Partners&nbsp;</li><li>4 nurses&nbsp;</li><li>3 practice business managers&nbsp;</li><li>2 social prescriber</li></ul><p><strong>About the role:</strong></p><ul><li>Process medical reports and referrals</li><li>Face-to-face, telephone and online consultations&nbsp;</li><li>Maintain administrative records</li><li>Prescribe prescriptions&nbsp;</li><li>Referring patients to urgent care/secondary care&nbsp;</li><li>Carry out screening and testing&nbsp;</li><li>Conduct home visits</li></ul><p><strong>Essential:</strong></p><ul><li>On the Performers List&nbsp;</li><li>Full registration with the GMC&nbsp;</li><li>Experience working in primary care&nbsp;</li><li>Qualified General practitioner&nbsp;</li><li>Clear DBS</li></ul>', 'gq2rbcvmhs0juf95we73n8y14ipdzx6otkla', '23'),
(4, 'Locum Dental Hygienist   required ASAP', '2024-05-23', 'Newcastle upon Tyne, UK', 'Up to £17 ph', '<p>Locum Health are excited to be working on behalf of an award-winning Dental Practice in the&nbsp; &nbsp;Barnstaple . The practice specialises in General Dentistry, Cosmetic Dentistry, Implant Dentistry&nbsp; and Facial Aesthetics, and are looking for an experienced and friendly Dental Hygienist&nbsp; to join&nbsp; their established and well-accomplished team!<br>The practice takes a personalised approach and are dedicated to the patient journey, finding&nbsp; out exactly what they need to make them smile! The practice is equipped with the latest<br>dental technology and uses the highest quality materials and techniques! If you want to join&nbsp; rapidly expanding practice that has an outstanding reputation, then this is the role for you!</p><p><strong>Criteria:</strong><br>• Previous dental experience<br>• Valid GDC registration<br>• Effective communication skills<br>•Strong interpersonal skills<br>• Team player, with strong relationship building skills<br>• Excellent clinical skills<br>•Ability to ensure CQC requirements are met</p><p><strong>Benefits:</strong></p><p>• Fantastic rate of pay, including an employee bonus scheme<br>•Well established team and excellent staff support<br>• GDC, DBS and Indemnity costs covered<br>• Modern surgeries and software<br>• Contributory pension scheme</p>', '50k7c3vnpfm9rtux16ljgwyq8iez24dbsoah', '31'),
(5, 'Locum GP – Maternity Cover', '2024-05-19', 'Newcastle upon Tyne, UK', '£750 per day - £780 per day', '<p>A amazing opportunity has arisen for a dedicated locum GP to join a lovely practice in Newcastle to cover 4-5 sessions of maternity&nbsp;leave on a fixed contract from August 2024.&nbsp;</p><p>They are a multicultural practice serving around 9,000 patients.&nbsp;</p><p><strong>About the practice:</strong></p><ul><li>2 operations manager&nbsp;</li><li>10 admin staff&nbsp;</li><li>8 GP’s&nbsp;</li><li>3 GP Partners&nbsp;</li><li>4 nurses&nbsp;</li><li>3 practice business managers&nbsp;</li><li>2 social prescriber</li></ul><p><strong>About the role:</strong></p><ul><li>Process medical reports and referrals</li><li>Face-to-face, telephone and online consultations&nbsp;</li><li>Maintain administrative records</li><li>Prescribe prescriptions&nbsp;</li><li>Referring patients to urgent care/secondary care&nbsp;</li><li>Carry out screening and testing&nbsp;</li><li>Conduct home visits</li></ul><p><strong>Essential:</strong></p><ul><li>On the Performers List&nbsp;</li><li>Full registration with the GMC&nbsp;</li><li>Experience working in primary care&nbsp;</li><li>Qualified General practitioner&nbsp;</li><li>Clear DBS</li></ul>', 'gq2rbcvmhs0juf95we73n8y14ipdzx6otkla', '23'),
(6, 'Locum GP – Maternity Cover', '2024-05-19', 'Newcastle upon Tyne, UK', '£750 per day - £780 per day', '<p>A amazing opportunity has arisen for a dedicated locum GP to join a lovely practice in Newcastle to cover 4-5 sessions of maternity&nbsp;leave on a fixed contract from August 2024.&nbsp;</p><p>They are a multicultural practice serving around 9,000 patients.&nbsp;</p><p><strong>About the practice:</strong></p><ul><li>2 operations manager&nbsp;</li><li>10 admin staff&nbsp;</li><li>8 GP’s&nbsp;</li><li>3 GP Partners&nbsp;</li><li>4 nurses&nbsp;</li><li>3 practice business managers&nbsp;</li><li>2 social prescriber</li></ul><p><strong>About the role:</strong></p><ul><li>Process medical reports and referrals</li><li>Face-to-face, telephone and online consultations&nbsp;</li><li>Maintain administrative records</li><li>Prescribe prescriptions&nbsp;</li><li>Referring patients to urgent care/secondary care&nbsp;</li><li>Carry out screening and testing&nbsp;</li><li>Conduct home visits</li></ul><p><strong>Essential:</strong></p><ul><li>On the Performers List&nbsp;</li><li>Full registration with the GMC&nbsp;</li><li>Experience working in primary care&nbsp;</li><li>Qualified General practitioner&nbsp;</li><li>Clear DBS</li></ul>', 'gq2rbcvmhs0juf95we73n8y14ipdzx6otkla', '23'),
(7, 'Locum Dental Hygienist   required ASAP', '2024-05-23', 'Newcastle upon Tyne, UK', 'Up to £17 ph', '<p>Locum Health are excited to be working on behalf of an award-winning Dental Practice in the&nbsp; &nbsp;Barnstaple . The practice specialises in General Dentistry, Cosmetic Dentistry, Implant Dentistry&nbsp; and Facial Aesthetics, and are looking for an experienced and friendly Dental Hygienist&nbsp; to join&nbsp; their established and well-accomplished team!<br>The practice takes a personalised approach and are dedicated to the patient journey, finding&nbsp; out exactly what they need to make them smile! The practice is equipped with the latest<br>dental technology and uses the highest quality materials and techniques! If you want to join&nbsp; rapidly expanding practice that has an outstanding reputation, then this is the role for you!</p><p><strong>Criteria:</strong><br>• Previous dental experience<br>• Valid GDC registration<br>• Effective communication skills<br>•Strong interpersonal skills<br>• Team player, with strong relationship building skills<br>• Excellent clinical skills<br>•Ability to ensure CQC requirements are met</p><p><strong>Benefits:</strong></p><p>• Fantastic rate of pay, including an employee bonus scheme<br>•Well established team and excellent staff support<br>• GDC, DBS and Indemnity costs covered<br>• Modern surgeries and software<br>• Contributory pension scheme</p>', '50k7c3vnpfm9rtux16ljgwyq8iez24dbsoah', '31'),
(8, 'Locum GP – Maternity Cover', '2024-05-19', 'Newcastle upon Tyne, UK', '£750 per day - £780 per day', '<p>A amazing opportunity has arisen for a dedicated locum GP to join a lovely practice in Newcastle to cover 4-5 sessions of maternity&nbsp;leave on a fixed contract from August 2024.&nbsp;</p><p>They are a multicultural practice serving around 9,000 patients.&nbsp;</p><p><strong>About the practice:</strong></p><ul><li>2 operations manager&nbsp;</li><li>10 admin staff&nbsp;</li><li>8 GP’s&nbsp;</li><li>3 GP Partners&nbsp;</li><li>4 nurses&nbsp;</li><li>3 practice business managers&nbsp;</li><li>2 social prescriber</li></ul><p><strong>About the role:</strong></p><ul><li>Process medical reports and referrals</li><li>Face-to-face, telephone and online consultations&nbsp;</li><li>Maintain administrative records</li><li>Prescribe prescriptions&nbsp;</li><li>Referring patients to urgent care/secondary care&nbsp;</li><li>Carry out screening and testing&nbsp;</li><li>Conduct home visits</li></ul><p><strong>Essential:</strong></p><ul><li>On the Performers List&nbsp;</li><li>Full registration with the GMC&nbsp;</li><li>Experience working in primary care&nbsp;</li><li>Qualified General practitioner&nbsp;</li><li>Clear DBS</li></ul>', 'gq2rbcvmhs0juf95we73n8y14ipdzx6otkla', '23'),
(9, 'Locum GP – Maternity Cover', '2024-05-19', 'Newcastle upon Tyne, UK', '£750 per day - £780 per day', '<p>A amazing opportunity has arisen for a dedicated locum GP to join a lovely practice in Newcastle to cover 4-5 sessions of maternity&nbsp;leave on a fixed contract from August 2024.&nbsp;</p><p>They are a multicultural practice serving around 9,000 patients.&nbsp;</p><p><strong>About the practice:</strong></p><ul><li>2 operations manager&nbsp;</li><li>10 admin staff&nbsp;</li><li>8 GP’s&nbsp;</li><li>3 GP Partners&nbsp;</li><li>4 nurses&nbsp;</li><li>3 practice business managers&nbsp;</li><li>2 social prescriber</li></ul><p><strong>About the role:</strong></p><ul><li>Process medical reports and referrals</li><li>Face-to-face, telephone and online consultations&nbsp;</li><li>Maintain administrative records</li><li>Prescribe prescriptions&nbsp;</li><li>Referring patients to urgent care/secondary care&nbsp;</li><li>Carry out screening and testing&nbsp;</li><li>Conduct home visits</li></ul><p><strong>Essential:</strong></p><ul><li>On the Performers List&nbsp;</li><li>Full registration with the GMC&nbsp;</li><li>Experience working in primary care&nbsp;</li><li>Qualified General practitioner&nbsp;</li><li>Clear DBS</li></ul>', 'gq2rbcvmhs0juf95we73n8y14ipdzx6otkla', '23'),
(10, 'Locum Dental Hygienist   required ASAP', '2024-05-23', 'Newcastle upon Tyne, UK', 'Up to £17 ph', '<p>Locum Health are excited to be working on behalf of an award-winning Dental Practice in the&nbsp; &nbsp;Barnstaple . The practice specialises in General Dentistry, Cosmetic Dentistry, Implant Dentistry&nbsp; and Facial Aesthetics, and are looking for an experienced and friendly Dental Hygienist&nbsp; to join&nbsp; their established and well-accomplished team!<br>The practice takes a personalised approach and are dedicated to the patient journey, finding&nbsp; out exactly what they need to make them smile! The practice is equipped with the latest<br>dental technology and uses the highest quality materials and techniques! If you want to join&nbsp; rapidly expanding practice that has an outstanding reputation, then this is the role for you!</p><p><strong>Criteria:</strong><br>• Previous dental experience<br>• Valid GDC registration<br>• Effective communication skills<br>•Strong interpersonal skills<br>• Team player, with strong relationship building skills<br>• Excellent clinical skills<br>•Ability to ensure CQC requirements are met</p><p><strong>Benefits:</strong></p><p>• Fantastic rate of pay, including an employee bonus scheme<br>•Well established team and excellent staff support<br>• GDC, DBS and Indemnity costs covered<br>• Modern surgeries and software<br>• Contributory pension scheme</p>', '50k7c3vnpfm9rtux16ljgwyq8iez24dbsoah', '31'),
(11, 'Locum GP – Maternity Cover', '2024-05-19', 'Newcastle upon Tyne, UK', '£750 per day - £780 per day', '<p>A amazing opportunity has arisen for a dedicated locum GP to join a lovely practice in Newcastle to cover 4-5 sessions of maternity&nbsp;leave on a fixed contract from August 2024.&nbsp;</p><p>They are a multicultural practice serving around 9,000 patients.&nbsp;</p><p><strong>About the practice:</strong></p><ul><li>2 operations manager&nbsp;</li><li>10 admin staff&nbsp;</li><li>8 GP’s&nbsp;</li><li>3 GP Partners&nbsp;</li><li>4 nurses&nbsp;</li><li>3 practice business managers&nbsp;</li><li>2 social prescriber</li></ul><p><strong>About the role:</strong></p><ul><li>Process medical reports and referrals</li><li>Face-to-face, telephone and online consultations&nbsp;</li><li>Maintain administrative records</li><li>Prescribe prescriptions&nbsp;</li><li>Referring patients to urgent care/secondary care&nbsp;</li><li>Carry out screening and testing&nbsp;</li><li>Conduct home visits</li></ul><p><strong>Essential:</strong></p><ul><li>On the Performers List&nbsp;</li><li>Full registration with the GMC&nbsp;</li><li>Experience working in primary care&nbsp;</li><li>Qualified General practitioner&nbsp;</li><li>Clear DBS</li></ul>', 'gq2rbcvmhs0juf95we73n8y14ipdzx6otkla', '23'),
(12, 'Locum GP – Maternity Cover', '2024-05-19', 'Newcastle upon Tyne, UK', '£750 per day - £780 per day', '<p>A amazing opportunity has arisen for a dedicated locum GP to join a lovely practice in Newcastle to cover 4-5 sessions of maternity&nbsp;leave on a fixed contract from August 2024.&nbsp;</p><p>They are a multicultural practice serving around 9,000 patients.&nbsp;</p><p><strong>About the practice:</strong></p><ul><li>2 operations manager&nbsp;</li><li>10 admin staff&nbsp;</li><li>8 GP’s&nbsp;</li><li>3 GP Partners&nbsp;</li><li>4 nurses&nbsp;</li><li>3 practice business managers&nbsp;</li><li>2 social prescriber</li></ul><p><strong>About the role:</strong></p><ul><li>Process medical reports and referrals</li><li>Face-to-face, telephone and online consultations&nbsp;</li><li>Maintain administrative records</li><li>Prescribe prescriptions&nbsp;</li><li>Referring patients to urgent care/secondary care&nbsp;</li><li>Carry out screening and testing&nbsp;</li><li>Conduct home visits</li></ul><p><strong>Essential:</strong></p><ul><li>On the Performers List&nbsp;</li><li>Full registration with the GMC&nbsp;</li><li>Experience working in primary care&nbsp;</li><li>Qualified General practitioner&nbsp;</li><li>Clear DBS</li></ul>', 'gq2rbcvmhs0juf95we73n8y14ipdzx6otkla', '23'),
(13, 'Locum Dental Hygienist   required ASAP', '2024-05-23', 'Newcastle upon Tyne, UK', 'Up to £17 ph', '<p>Locum Health are excited to be working on behalf of an award-winning Dental Practice in the&nbsp; &nbsp;Barnstaple . The practice specialises in General Dentistry, Cosmetic Dentistry, Implant Dentistry&nbsp; and Facial Aesthetics, and are looking for an experienced and friendly Dental Hygienist&nbsp; to join&nbsp; their established and well-accomplished team!<br>The practice takes a personalised approach and are dedicated to the patient journey, finding&nbsp; out exactly what they need to make them smile! The practice is equipped with the latest<br>dental technology and uses the highest quality materials and techniques! If you want to join&nbsp; rapidly expanding practice that has an outstanding reputation, then this is the role for you!</p><p><strong>Criteria:</strong><br>• Previous dental experience<br>• Valid GDC registration<br>• Effective communication skills<br>•Strong interpersonal skills<br>• Team player, with strong relationship building skills<br>• Excellent clinical skills<br>•Ability to ensure CQC requirements are met</p><p><strong>Benefits:</strong></p><p>• Fantastic rate of pay, including an employee bonus scheme<br>•Well established team and excellent staff support<br>• GDC, DBS and Indemnity costs covered<br>• Modern surgeries and software<br>• Contributory pension scheme</p>', '50k7c3vnpfm9rtux16ljgwyq8iez24dbsoah', '31');

-- --------------------------------------------------------

--
-- Table structure for table `miscellaneous`
--

CREATE TABLE `miscellaneous` (
  `id` int(11) NOT NULL,
  `title` varchar(222) DEFAULT NULL,
  `type` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `miscellaneous`
--

INSERT INTO `miscellaneous` (`id`, `title`, `type`) VALUES
(23, 'Advanced Clinical Practitioner', 'Categories'),
(24, 'Advanced Nurse Practitioner', 'Categories'),
(25, 'Dental Hygienist', 'Categories'),
(26, 'Dental Nurse', 'Categories'),
(27, 'Emergency Care Practitioner', 'Categories'),
(28, 'General Practitioner', 'Categories'),
(29, 'Health Care Assistant', 'Categories'),
(30, 'Medical Receptionist', 'Categories'),
(31, 'Paramedic', 'Categories'),
(32, 'Phlebotomist', 'Categories'),
(33, 'Physician Associate', 'Categories'),
(34, 'Practice Manager', 'Categories'),
(35, 'Practice Nurse', 'Categories'),
(36, 'Temporary Staffing', 'Categories');

-- --------------------------------------------------------

--
-- Table structure for table `pages_content`
--

CREATE TABLE `pages_content` (
  `id` int(11) NOT NULL,
  `title` varchar(333) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `attachment` varchar(111) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `type` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pages_content`
--

INSERT INTO `pages_content` (`id`, `title`, `date`, `attachment`, `description`, `type`) VALUES
(2, 'About us', '2022-03-20', '5HfnoVxqWUtT1647801169.jpg', '<p><strong>Useful Information</strong></p><p>Geography and Population</p><p>Cyprus is situated in the Eastern Mediterranean Sea, at the hub of three continents where the trade routes intersect. It is the third largest island in the Mediterranean Sea after Sicily and the Sardinia. The total area of the island covers 9,251 square kms. The area of the Turkish Republic of Northern Cyprus (TRNC) is 3,242 square kms. The nearest neighboring country to Cyprus is Turkey which lies at a distance of 65 kms to the north. Cyprus is located 100 kms west of Syria and 420 kms north of Egypt. Midyear de-jure population estimate of the Turkish Republic of Northern Cyprus in 2011 is 286,257. The capital Lefkoşa is the largest city of the TRNC. The other major towns are Gazimağusa and Girne which are located on the coast. Güzelyurt and Lefke are two towns which are famous with the large citrus orchards. The official language is Turkish but English is widely spoken and understood in official and commercial circles. The religion is Islam, with Muslims making up 99% of the population.</p><p>Cost of Living</p><p>Compared with most countries in Western Europe, the cost of living in Northern Cyprus is low.</p><p>Airports</p><p>Flights to North Cyprus arrive at Ercan Airport, 12 km east of Nicosia. Geçitkale Airport, to the east, is sometimes used as an alternative. Addition to these airports, due to the closeness Larnaka Airport could be used.</p><p>Communications</p><p>The international dialing code is 00 90. Internet access can be at internet cafes in the cities, towns and some resorts.</p><p>Driving</p><p>Traffic keeps to the left, a relic of British rule.</p><p>Climate</p><p>Turkish Republic of Northern Cyprus has a typical Mediterranean climate with about 300 days of sunshine per year. It enjoys dry, warm summers and mild winters. The bulk of the rain falls during the period from November to March. The coldest month is January having minimum and maximum mean temperatures of 6ºC and 16ºC respectively. In the hottest month August the corresponding minimum and maximum mean temperatures are 21ºC and 35ºC.</p><p>Language</p><p>Mother tongue of the Turkish Cypriots is Turkish. English is widely understood.</p><p>Money and Banking</p><p>The official currency in the TRNC is Turkish Lira (¨). Real persons and corporate bodies are free to keep and save foreign currency, to use foreign currency as a means of foreign exchange and to express in foreign currency figures appearing on payment orders and contracts. The official rates of exchange are fixed daily by the Central Bank and announced. Banks, foreign exchange bureaux and the Central Bank are free to fix different rates of exchange for the purchase and sale of foreign currency. There is a developed banking system in the TRNC. In addition to the Central Bank and the Development Bank there are 21 onshore commercial banks and 8 International Banking Unit (IBU) exist. Banks are free to keep foreign currency, act as intermediary in import and export transactions, accept foreign currency savings, engage in purchase and sale of foreign currency, deal in bonds required to be paid in foreign currency, give foreign currency loans, engage actively in money and foreign currency markets and in compliance with international banking usage, to deal in every kind of foreign currency transactions.</p><p>Political System</p><p>There is a multi party of democracy in the TRNC where human rights, political pluralism and private property are safeguarded. The head of the state is the President of the Republic who is elected by universal suffrage for a period of five years. Legislative power is exercised by the Assembly of the Republic which consists of fifty deputies. The country is managed by a Council of Ministers led by the Prime Minister who is appointed by the President. Elections are held freely every five years, based on universal suffrage.</p>', NULL),
(3, 'MİSYON ŞEFİNİN MESAJI', '2022-03-28', 'zCDBfniW8vxh1647802102.png', '<p>Saygıdeğer vatandaşlarım, kardeş ülke Pakistan vatandaşları ve değerli ziyaretçiler,</p><p>Kardeş ülke Pakistan İslam Cumhuriyeti’nde 1987 yılından bu yana varlığını sürdüren KKTC İslamabad Temsilciliği’nde Ağustos 2021 tarihi itibarıyla Misyon Şefi olarak göreve başlamaktan büyük bir mutluluk ve onur duymaktayım.</p><p>Buradaki görev sürem zarfında, Kuzey Kıbrıs Türk Cumhuriyeti ve Pakistan İslam Cumhuriyeti arasındaki geçmişten bu güne dek süren iyi ilişkileri, kardeşlik ve dostluk bağını daha da ileriye taşımak öncelikli hedefimdir.</p><p>Tarihi ve kültürel bağlarımızın bulunduğu kardeş ülke Pakistan ile siyasi ve ekonomik anlamda karşılıklı çıkarlarımızı gözeterek adımlar atma ve başta turizm ve eğitim olmak üzere ülkemizin önde gelen sektörlerinde iki ülke arasındaki işbirliğini artırma yönündeki gayretlerin sürdürülmesi önem arz etmektedir. Bunun bilinciyle, KKTC İslamabad Temsilciliği olarak gerek Pakistan resmi makamları, gerekse Pakistan’da bulunan kurum, kuruluş ve ticari çevreler nezdindeki girişimlerimizin devam ettirilmesi önceliğimiz olacaktır. Öte yandan, ülkemizi her alanda temsil etmek ve tanıtımını yapmak için mevcut tüm imkanların seferber edileceğini de belirtmek isterim.</p><p>Temsilciliğimiz, vatandaşlarımızın, ülkemizle bağ kurmuş Pakistan ve diğer ülke vatandaşlarının olası soruları ve sorunlarına çözüm bulmak için her türlü gayreti göstermeye ve hizmetlerini en etkin bir şekilde sürdürmeye devam edecektir.</p><p>Hepinizi saygı ve sevgiyle selamlıyor, şahsım ve mesai arkadaşlarım adına en iyi dileklerimi sunuyorum.</p><h4><strong>Dilşad Şenol</strong><br>Misyon Şefi</h4><h4><strong>CHIEF OF MISSION’S MESSAGE</strong></h4><p>Distinguished TRNC Citizens, Citizens of Brotherly Pakistan and Dear Guests,</p><p>I have the utmost honour and pleasure to take Office as the Chief of Mission in the Office of the TRNC Representative in the brotherly Islamic Republic of Pakistan, which has been continuing its mission since 1987.</p><p>During my tenure here, my primary goal is to further promote the long-standing good relations, brotherhood and friendship bond between the Turkish Republic of Northern Cyprus and the Islamic Republic of Pakistan.</p><p>It is of capital importance to keep up our efforts in taking steps in the political and economic areas of mutual interest and in promoting the cooperation between our states on our leading sectors such as tourism and education. Keeping this in mind, we will further deepen contact with the Pakistani governmental bodies, local institutions and organisations as well as commercial circles. I would also like to express my sincere commitment to representing and promoting the Turkish Republic of Northern Cyprus in all spheres mobilizing all the means available.</p><p>As the Office of the Representative of the TRNC in Islamabad, we will spare no effort to solve the problems faced by our citizens as well as citizens of Islamic Republic of Pakistan and other countries who have already established a bond with our country</p><p>On behalf of my colleagues and on my own behalf, I would like to extend warm greetings and wish you all the best.</p><h4><strong>Dilşad Şenol</strong><br>Chief of Mission</h4>', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `max_appointment` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `max_appointment`) VALUES
(1, 35);

-- --------------------------------------------------------

--
-- Table structure for table `submited_Vacancy`
--

CREATE TABLE `submited_Vacancy` (
  `id` int(11) NOT NULL,
  `name` varchar(222) DEFAULT NULL,
  `email` varchar(222) DEFAULT NULL,
  `phone_no` varchar(111) DEFAULT NULL,
  `location` varchar(333) DEFAULT NULL,
  `description` varchar(555) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `submited_Vacancy`
--

INSERT INTO `submited_Vacancy` (`id`, `name`, `email`, `phone_no`, `location`, `description`, `date`) VALUES
(2, 'Muhammad usman', 'support@webhostingsol.com', '03135361670', 'Islamabad', 'job description will come here', '2024-05-28');

-- --------------------------------------------------------

--
-- Table structure for table `tb_posts`
--

CREATE TABLE `tb_posts` (
  `id` int(11) NOT NULL,
  `title` varchar(222) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `pic` varchar(222) DEFAULT NULL,
  `desciption` longtext DEFAULT NULL,
  `type` varchar(222) DEFAULT NULL,
  `posted_by` varchar(222) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_posts`
--

INSERT INTO `tb_posts` (`id`, `title`, `date`, `pic`, `desciption`, `type`, `posted_by`) VALUES
(12, 'TRUST & TRANSPARENCY', NULL, 'oJWk1lEADazI1716544954.webp', '<p>We are the leading Specialist Recruitment Agency for locum Nurses in Primary Care. The success of the business comes from trust, transparency and the excellent service we offer to our clients, always delivering on our promises .</p><p><br>&nbsp;</p>', 'Posts', 'admin'),
(13, 'SOLE SUPPLIER', NULL, 'Ho3JdLsxEiAm1716544983.webp', '<p>We have developed strong relationships with GP surgeries and as a result, most clients selected us to be their sole supplier to get locum clinicians. We get regular work in your area so you can pick and choose what days you want to commit to in order to fit your lifestyle.</p><p><br>&nbsp;</p>', 'Posts', 'admin'),
(14, 'COMPETITIVE RATE', NULL, 'ht2EzKIdW9Yi1716545006.webp', '<p>We are the leading Specialist Recruitment Agency for locum Nurses in Primary Care. The success of the business comes from trust, transparency and the excellent service we offer to our clients, always delivering on our promises .</p>', 'Posts', 'admin'),
(15, 'WEEKLY PAY', NULL, 'R8SQLsgl5ewJ1716545031.webp', '<p>We pay all our Nurses on a weekly basis. Getting paid on a weekly basis is definitely satisfying and fulfilling as you don’t have to wait for a month before you see funds.</p>', 'Posts', 'admin'),
(16, 'REGISTER TODAY', NULL, '0hlcJkWygUrM1716545052.webp', '<p>The registration process is simple. We want to make this journey as smooth and effortless as possible from when you register to the day you start work. In order to achieve this, a dedicated Consultant will be in touch with you to talk you through the process when you register.</p>', 'Posts', 'admin'),
(17, 'REFER A FRIEND', NULL, '07atnZvp46dC1716545071.webp', '<p>We pay a referral fee of £250 for every successful clinicians who accepts and commits to locum shifts through Locum Health. You will receive £250 once the locum has worked 7 full days.</p>', 'Posts', 'admin'),
(18, 'Compliance', NULL, 'zQ3rauT5hoHg1716548776.webp', '<p>We focus on both <strong>continuity</strong> and <strong>quality</strong>, always attaining to the highest levels of quality control and compliance, ensuring every staff member is checked rigorously, to the very highest of standards before they attend.</p>', 'clients', 'admin'),
(19, 'Nationwide Coverage', NULL, 'c5qBCJpu2xFh1716548803.webp', '<p>We cover the whole of UK and some locations abroad. No matter how remote you are, Locum Health will do our very best to help.</p>', 'clients', 'admin'),
(20, 'What we offer.', NULL, 'YD72OPnfCxik1716548833.webp', '<p>We can offer you <strong>Advanced Practitioners, Community Nurses, Practice Nurses, Independent Prescribers, HCA’s, Physio’s</strong> and non clinical staff, anywhere in the UK for shifts or permanent posts. As well as, <strong>GP’s and Physician Associates, for permanent posts.</strong></p>', 'clients', 'admin'),
(21, 'Test name', NULL, 'pfq87wGAxBZ91716571619.jpg', '<p>test testimonials. test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.</p>', 'Testimonials', 'admin'),
(22, 'Test name', NULL, 'pfq87wGAxBZ91716571619.jpg', '<p>test testimonials. test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.</p>', 'Testimonials', 'admin'),
(23, 'Test name', NULL, 'pfq87wGAxBZ91716571619.jpg', '<p>test testimonials. test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.</p>', 'Testimonials', 'admin'),
(24, 'Test name', NULL, 'pfq87wGAxBZ91716571619.jpg', '<p>test testimonials. test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.test testimonials.</p>', 'Testimonials', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users_list`
--

CREATE TABLE `users_list` (
  `id` int(11) NOT NULL,
  `name` varchar(111) DEFAULT NULL,
  `number` varchar(111) DEFAULT NULL,
  `whatsapp` varchar(111) DEFAULT NULL,
  `email` varchar(111) DEFAULT NULL,
  `img` varchar(111) DEFAULT NULL,
  `Password` varchar(111) DEFAULT NULL,
  `Address` varchar(333) DEFAULT NULL,
  `City` varchar(111) DEFAULT NULL,
  `Country` varchar(111) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `status` varchar(111) DEFAULT NULL,
  `shufl_id` varchar(111) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_list`
--

INSERT INTO `users_list` (`id`, `name`, `number`, `whatsapp`, `email`, `img`, `Password`, `Address`, `City`, `Country`, `dob`, `joining_date`, `status`, `shufl_id`) VALUES
(3, 'Muhammad usman', NULL, '03345513026', 'musmanu231@gmail.com', 'dummy.png', '8a773e6e', '0ffice #06 ponch house Sadar rawalpindi', 'rawalpindi', 'Pakistan', '2024-03-31', '2024-03-20', 'Active', 'vFmhjsVe7P4TZdyrgYpO3J1710962007'),
(4, NULL, NULL, NULL, 'musmanu231@gmail.com', 'dummy.png', '8a773e6e', NULL, NULL, NULL, NULL, '2024-04-03', 'Pending', '0TLKWoNE4ZBSplGwc16vCd1712130992'),
(5, 'ASAD ULLAH', NULL, '+923127825522', 'info.haq2002@gmail.com', 'dummy.png', 'd2fc0dae', NULL, NULL, NULL, NULL, '2024-05-16', 'Pending', 'Vgi2BArkM7qKcW58eGmFfL1715854320'),
(6, 'Amir Hussain', NULL, '923333000314', 'aamir.husain2611@gmail.com', 'dummy.png', 'e3b986f3', NULL, NULL, NULL, NULL, '2024-05-17', 'Pending', 'snHjawyRVrDCek09GQKdtT1715943550');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applications_list`
--
ALTER TABLE `applications_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cvs`
--
ALTER TABLE `cvs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs_list`
--
ALTER TABLE `jobs_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `miscellaneous`
--
ALTER TABLE `miscellaneous`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages_content`
--
ALTER TABLE `pages_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submited_Vacancy`
--
ALTER TABLE `submited_Vacancy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_posts`
--
ALTER TABLE `tb_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_list`
--
ALTER TABLE `users_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `applications_list`
--
ALTER TABLE `applications_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cvs`
--
ALTER TABLE `cvs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jobs_list`
--
ALTER TABLE `jobs_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `miscellaneous`
--
ALTER TABLE `miscellaneous`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `pages_content`
--
ALTER TABLE `pages_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `submited_Vacancy`
--
ALTER TABLE `submited_Vacancy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_posts`
--
ALTER TABLE `tb_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users_list`
--
ALTER TABLE `users_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
