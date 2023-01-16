-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 16, 2023 at 11:44 AM
-- Server version: 10.3.37-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unicee_ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `appllication_status`
--

CREATE TABLE `appllication_status` (
  `id` int(11) NOT NULL,
  `name` varchar(256) DEFAULT NULL,
  `percentage` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appllication_status`
--

INSERT INTO `appllication_status` (`id`, `name`, `percentage`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Application Received', '0', 1, '2023-01-02 05:54:13', '2023-01-02 04:34:07'),
(2, 'Admission Letter', '5', 1, '2023-01-02 08:32:15', '2023-01-02 03:16:45'),
(3, 'Processed to EMGS', '15', 1, '2023-01-02 08:32:31', '2023-01-02 03:16:48'),
(4, 'EMGS Approval Letter', '35', 1, '2023-01-02 08:32:49', '2023-01-02 08:32:49'),
(5, 'Visa Approval Letter ', '70', 1, '2023-01-02 08:33:06', '2023-01-02 02:37:55'),
(6, 'Arrived in Malaysia', '100', 1, '2023-01-04 08:13:49', '2023-01-04 08:13:49');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `Name` varchar(256) DEFAULT NULL,
  `code` varchar(256) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `Name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Afghanistan', 'AF', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(2, 'Åland Islands', 'AX', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(3, 'Albania', 'AL', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(4, 'Algeria', 'DZ', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(5, 'American Samoa', 'AS', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(6, 'Andorra', 'AD', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(7, 'Angola', 'AO', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(8, 'Anguilla', 'AI', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(9, 'Antarctica', 'AQ', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(10, 'Antigua and Barbuda', 'AG', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(11, 'Argentina', 'AR', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(12, 'Armenia', 'AM', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(13, 'Aruba', 'AW', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(14, 'Australia', 'AU', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(15, 'Austria', 'AT', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(16, 'Azerbaijan', 'AZ', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(17, 'Bahamas', 'BS', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(18, 'Bahrain', 'BH', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(19, 'Bangladesh', 'BD', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(20, 'Barbados', 'BB', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(21, 'Belarus', 'BY', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(22, 'Belgium', 'BE', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(23, 'Belize', 'BZ', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(24, 'Benin', 'BJ', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(25, 'Bermuda', 'BM', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(26, 'Bhutan', 'BT', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(27, 'Bolivia, Plurinational State of', 'BO', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(28, 'Bonaire, Sint Eustatius and Saba', 'BQ', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(29, 'Bosnia and Herzegovina', 'BA', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(30, 'Botswana', 'BW', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(31, 'Bouvet Island', 'BV', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(32, 'Brazil', 'BR', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(33, 'British Indian Ocean Territory', 'IO', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(34, 'Brunei Darussalam', 'BN', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(35, 'Bulgaria', 'BG', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(36, 'Burkina Faso', 'BF', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(37, 'Burundi', 'BI', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(38, 'Cambodia', 'KH', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(39, 'Cameroon', 'CM', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(40, 'Canada', 'CA', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(41, 'Cape Verde', 'CV', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(42, 'Cayman Islands', 'KY', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(43, 'Central African Republic', 'CF', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(44, 'Chad', 'TD', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(45, 'Chile', 'CL', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(46, 'China', 'CN', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(47, 'Christmas Island', 'CX', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(48, 'Cocos (Keeling) Islands', 'CC', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(49, 'Colombia', 'CO', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(50, 'Comoros', 'KM', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(51, 'Congo', 'CG', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(52, 'Congo, the Democratic Republic of the', 'CD', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(53, 'Cook Islands', 'CK', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(54, 'Costa Rica', 'CR', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(55, 'Côte d\'Ivoire', 'CI', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(56, 'Croatia', 'HR', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(57, 'Cuba', 'CU', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(58, 'Curaçao', 'CW', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(59, 'Cyprus', 'CY', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(60, 'Czech Republic', 'CZ', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(61, 'Denmark', 'DK', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(62, 'Djibouti', 'DJ', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(63, 'Dominica', 'DM', '2023-01-09 23:25:06', '2023-01-09 23:25:06'),
(64, 'Dominican Republic', 'DO', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(65, 'Ecuador', 'EC', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(66, 'Egypt', 'EG', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(67, 'El Salvador', 'SV', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(68, 'Equatorial Guinea', 'GQ', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(69, 'Eritrea', 'ER', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(70, 'Estonia', 'EE', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(71, 'Ethiopia', 'ET', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(72, 'Falkland Islands (Malvinas)', 'FK', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(73, 'Faroe Islands', 'FO', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(74, 'Fiji', 'FJ', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(75, 'Finland', 'FI', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(76, 'France', 'FR', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(77, 'French Guiana', 'GF', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(78, 'French Polynesia', 'PF', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(79, 'French Southern Territories', 'TF', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(80, 'Gabon', 'GA', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(81, 'Gambia', 'GM', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(82, 'Georgia', 'GE', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(83, 'Germany', 'DE', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(84, 'Ghana', 'GH', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(85, 'Gibraltar', 'GI', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(86, 'Greece', 'GR', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(87, 'Greenland', 'GL', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(88, 'Grenada', 'GD', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(89, 'Guadeloupe', 'GP', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(90, 'Guam', 'GU', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(91, 'Guatemala', 'GT', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(92, 'Guernsey', 'GG', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(93, 'Guinea', 'GN', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(94, 'Guinea-Bissau', 'GW', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(95, 'Guyana', 'GY', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(96, 'Haiti', 'HT', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(97, 'Heard Island and McDonald Mcdonald Islands', 'HM', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(98, 'Holy See (Vatican City State)', 'VA', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(99, 'Honduras', 'HN', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(100, 'Hong Kong', 'HK', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(101, 'Hungary', 'HU', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(102, 'Iceland', 'IS', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(103, 'India', 'IN', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(104, 'Indonesia', 'ID', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(105, 'Iran, Islamic Republic of', 'IR', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(106, 'Iraq', 'IQ', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(107, 'Ireland', 'IE', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(108, 'Isle of Man', 'IM', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(109, 'Israel', 'IL', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(110, 'Italy', 'IT', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(111, 'Jamaica', 'JM', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(112, 'Japan', 'JP', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(113, 'Jersey', 'JE', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(114, 'Jordan', 'JO', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(115, 'Kazakhstan', 'KZ', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(116, 'Kenya', 'KE', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(117, 'Kiribati', 'KI', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(118, 'Korea, Democratic People\'s Republic of', 'KP', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(119, 'Korea, Republic of', 'KR', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(120, 'Kuwait', 'KW', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(121, 'Kyrgyzstan', 'KG', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(122, 'Lao People\'s Democratic Republic', 'LA', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(123, 'Latvia', 'LV', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(124, 'Lebanon', 'LB', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(125, 'Lesotho', 'LS', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(126, 'Liberia', 'LR', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(127, 'Libya', 'LY', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(128, 'Liechtenstein', 'LI', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(129, 'Lithuania', 'LT', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(130, 'Luxembourg', 'LU', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(131, 'Macao', 'MO', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(132, 'Macedonia, the Former Yugoslav Republic of', 'MK', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(133, 'Madagascar', 'MG', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(134, 'Malawi', 'MW', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(135, 'Malaysia', 'MY', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(136, 'Maldives', 'MV', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(137, 'Mali', 'ML', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(138, 'Malta', 'MT', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(139, 'Marshall Islands', 'MH', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(140, 'Martinique', 'MQ', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(141, 'Mauritania', 'MR', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(142, 'Mauritius', 'MU', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(143, 'Mayotte', 'YT', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(144, 'Mexico', 'MX', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(145, 'Micronesia, Federated States of', 'FM', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(146, 'Moldova, Republic of', 'MD', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(147, 'Monaco', 'MC', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(148, 'Mongolia', 'MN', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(149, 'Montenegro', 'ME', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(150, 'Montserrat', 'MS', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(151, 'Morocco', 'MA', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(152, 'Mozambique', 'MZ', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(153, 'Myanmar', 'MM', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(154, 'Namibia', 'NA', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(155, 'Nauru', 'NR', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(156, 'Nepal', 'NP', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(157, 'Netherlands', 'NL', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(158, 'New Caledonia', 'NC', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(159, 'New Zealand', 'NZ', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(160, 'Nicaragua', 'NI', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(161, 'Niger', 'NE', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(162, 'Nigeria', 'NG', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(163, 'Niue', 'NU', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(164, 'Norfolk Island', 'NF', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(165, 'Northern Mariana Islands', 'MP', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(166, 'Norway', 'NO', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(167, 'Oman', 'OM', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(168, 'Pakistan', 'PK', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(169, 'Palau', 'PW', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(170, 'Palestine, State of', 'PS', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(171, 'Panama', 'PA', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(172, 'Papua New Guinea', 'PG', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(173, 'Paraguay', 'PY', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(174, 'Peru', 'PE', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(175, 'Philippines', 'PH', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(176, 'Pitcairn', 'PN', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(177, 'Poland', 'PL', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(178, 'Portugal', 'PT', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(179, 'Puerto Rico', 'PR', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(180, 'Qatar', 'QA', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(181, 'Réunion', 'RE', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(182, 'Romania', 'RO', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(183, 'Russian Federation', 'RU', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(184, 'Rwanda', 'RW', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(185, 'Saint Barthélemy', 'BL', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(186, 'Saint Helena, Ascension and Tristan da Cunha', 'SH', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(187, 'Saint Kitts and Nevis', 'KN', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(188, 'Saint Lucia', 'LC', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(189, 'Saint Martin (French part)', 'MF', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(190, 'Saint Pierre and Miquelon', 'PM', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(191, 'Saint Vincent and the Grenadines', 'VC', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(192, 'Samoa', 'WS', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(193, 'San Marino', 'SM', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(194, 'Sao Tome and Principe', 'ST', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(195, 'Saudi Arabia', 'SA', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(196, 'Senegal', 'SN', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(197, 'Serbia', 'RS', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(198, 'Seychelles', 'SC', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(199, 'Sierra Leone', 'SL', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(200, 'Singapore', 'SG', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(201, 'Sint Maarten (Dutch part)', 'SX', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(202, 'Slovakia', 'SK', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(203, 'Slovenia', 'SI', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(204, 'Solomon Islands', 'SB', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(205, 'Somalia', 'SO', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(206, 'South Africa', 'ZA', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(207, 'South Georgia and the South Sandwich Islands', 'GS', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(208, 'South Sudan', 'SS', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(209, 'Spain', 'ES', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(210, 'Sri Lanka', 'LK', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(211, 'Sudan', 'SD', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(212, 'Suriname', 'SR', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(213, 'Svalbard and Jan Mayen', 'SJ', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(214, 'Swaziland', 'SZ', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(215, 'Sweden', 'SE', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(216, 'Switzerland', 'CH', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(217, 'Syrian Arab Republic', 'SY', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(218, 'Taiwan', 'TW', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(219, 'Tajikistan', 'TJ', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(220, 'Tanzania, United Republic of', 'TZ', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(221, 'Thailand', 'TH', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(222, 'Timor-Leste', 'TL', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(223, 'Togo', 'TG', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(224, 'Tokelau', 'TK', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(225, 'Tonga', 'TO', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(226, 'Trinidad and Tobago', 'TT', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(227, 'Tunisia', 'TN', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(228, 'Turkey', 'TR', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(229, 'Turkmenistan', 'TM', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(230, 'Turks and Caicos Islands', 'TC', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(231, 'Tuvalu', 'TV', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(232, 'Uganda', 'UG', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(233, 'Ukraine', 'UA', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(234, 'United Arab Emirates', 'AE', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(235, 'United Kingdom', 'GB', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(236, 'United States', 'US', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(237, 'United States Minor Outlying Islands', 'UM', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(238, 'Uruguay', 'UY', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(239, 'Uzbekistan', 'UZ', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(240, 'Vanuatu', 'VU', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(241, 'Venezuela, Bolivarian Republic of', 'VE', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(242, 'Viet Nam', 'VN', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(243, 'Virgin Islands, British', 'VG', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(244, 'Virgin Islands, U.S.', 'VI', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(245, 'Wallis and Futuna', 'WF', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(246, 'Western Sahara', 'EH', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(247, 'Yemen', 'YE', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(248, 'Zambia', 'ZM', '2023-01-09 23:25:07', '2023-01-09 23:25:07'),
(249, 'Zimbabwe', 'ZW', '2023-01-09 23:25:07', '2023-01-09 23:25:07');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_04_063522_create_permission_tables', 1),
(6, '2022_10_20_073649_create_students_table', 1),
(7, '2022_10_22_085632_create_student_certificates_table', 1),
(8, '2022_11_26_053956_create_student_registers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 1),
(5, 'App\\Models\\User', 2),
(5, 'App\\Models\\User', 19),
(5, 'App\\Models\\User', 21),
(5, 'App\\Models\\User', 22),
(5, 'App\\Models\\User', 23),
(5, 'App\\Models\\User', 24),
(5, 'App\\Models\\User', 25),
(5, 'App\\Models\\User', 26),
(5, 'App\\Models\\User', 27),
(5, 'App\\Models\\User', 28),
(5, 'App\\Models\\User', 29),
(5, 'App\\Models\\User', 30),
(5, 'App\\Models\\User', 31),
(5, 'App\\Models\\User', 32),
(5, 'App\\Models\\User', 33),
(5, 'App\\Models\\User', 34),
(5, 'App\\Models\\User', 35),
(5, 'App\\Models\\User', 36),
(5, 'App\\Models\\User', 37),
(5, 'App\\Models\\User', 38),
(5, 'App\\Models\\User', 39),
(5, 'App\\Models\\User', 40),
(5, 'App\\Models\\User', 41),
(5, 'App\\Models\\User', 42),
(5, 'App\\Models\\User', 43),
(5, 'App\\Models\\User', 44),
(5, 'App\\Models\\User', 45),
(5, 'App\\Models\\User', 46),
(5, 'App\\Models\\User', 47),
(5, 'App\\Models\\User', 48),
(5, 'App\\Models\\User', 49),
(5, 'App\\Models\\User', 50),
(5, 'App\\Models\\User', 51),
(5, 'App\\Models\\User', 52),
(5, 'App\\Models\\User', 53),
(5, 'App\\Models\\User', 54),
(5, 'App\\Models\\User', 55),
(5, 'App\\Models\\User', 56),
(5, 'App\\Models\\User', 57),
(5, 'App\\Models\\User', 58),
(5, 'App\\Models\\User', 59),
(5, 'App\\Models\\User', 60),
(5, 'App\\Models\\User', 61),
(6, 'App\\Models\\User', 3),
(6, 'App\\Models\\User', 4),
(6, 'App\\Models\\User', 18),
(6, 'App\\Models\\User', 20);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'book', 'web', '2022-12-14 04:10:32', '2022-12-14 04:10:32');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `country` varchar(256) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `contact_person` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `country`, `user_id`, `address`, `contact_person`, `created_at`, `updated_at`) VALUES
(1, 'Afghanistan', 13, 'text', 'test', '2022-12-27 09:50:46', '2022-12-27 05:24:08'),
(2, 'Afghanistan', 2, 'N/A', NULL, '2023-01-03 11:35:06', '2023-01-03 11:35:06'),
(3, 'Afghanistan', 19, 'N/A', NULL, '2023-01-05 10:42:17', '2023-01-05 10:42:17'),
(4, 'Afghanistan', 30, 'N/A', NULL, '2023-01-11 09:15:47', '2023-01-11 09:17:12'),
(5, 'Afghanistan', 29, 'N/A', NULL, '2023-01-11 09:19:36', '2023-01-11 09:19:36'),
(6, 'Afghanistan', 31, 'N/A', NULL, '2023-01-11 09:40:34', '2023-01-11 23:45:56'),
(7, 'Bangladesh', 59, 'N/A', NULL, '2023-01-12 00:18:16', '2023-01-12 00:18:34'),
(8, 'Afghanistan', 21, 'N/A', NULL, '2023-01-16 11:36:11', '2023-01-16 11:36:11');

-- --------------------------------------------------------

--
-- Table structure for table `programme`
--

CREATE TABLE `programme` (
  `programme_id` int(11) NOT NULL,
  `programme_name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `programme`
--

INSERT INTO `programme` (`programme_id`, `programme_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Foundation', 1, '2023-01-14 11:27:44', '2023-01-14 11:27:44'),
(2, 'Diploma', 1, '2023-01-14 11:27:44', '2023-01-14 11:27:44'),
(3, 'Bachelor', 1, '2023-01-14 11:27:44', '2023-01-14 11:27:44'),
(4, 'Masters', 1, '2023-01-14 11:27:44', '2023-01-14 11:27:44'),
(5, 'PhD', 1, '2023-01-14 11:27:44', '2023-01-14 11:27:44'),
(6, 'MBBS', 1, '2023-01-14 11:27:44', '2023-01-14 11:27:44'),
(7, 'Others', 1, '2023-01-14 11:27:44', '2023-01-14 11:27:44'),
(8, 'New Program', 1, '2023-01-14 11:37:40', '2023-01-14 12:29:19');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2022-12-14 04:06:51', '2022-12-14 04:06:51'),
(2, 'Writer', 'web', '2022-12-14 04:06:51', '2023-01-05 10:41:40'),
(3, 'User', 'web', '2022-12-14 04:06:51', '2023-01-05 10:41:30'),
(4, 'Author', 'web', '2022-12-14 04:09:47', '2023-01-05 10:41:21'),
(5, 'student', 'web', '2022-12-14 04:29:24', '2023-01-05 10:40:59'),
(6, 'agency', 'web', '2022-12-31 11:48:10', '2023-01-05 10:40:47'),
(7, 'institute', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `passport_number` varchar(255) NOT NULL,
  `programme` varchar(255) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `passport_copy1` varchar(255) NOT NULL,
  `passport_copy2` varchar(255) NOT NULL,
  `passport_copy3` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_certificates`
--

CREATE TABLE `student_certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `academic_programme` varchar(255) NOT NULL,
  `certificate` varchar(255) NOT NULL,
  `marksheet` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_registers`
--

CREATE TABLE `student_registers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `reference_id` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `passport_number` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `passport_issue_date` varchar(255) DEFAULT NULL,
  `obtain_single_entry_visa` varchar(255) DEFAULT NULL,
  `applicant_email_id` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `applicant_permanent_add` varchar(255) DEFAULT NULL,
  `applicant_postal_code` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `resident_number` varchar(255) DEFAULT NULL,
  `programme` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `applicant_name` varchar(255) DEFAULT NULL,
  `passport_issued_place` varchar(255) DEFAULT NULL,
  `passport_expiry_date` varchar(255) DEFAULT NULL,
  `applicant_mobile_number` varchar(255) DEFAULT NULL,
  `agent_email_id` varchar(255) DEFAULT NULL,
  `marital` varchar(255) DEFAULT NULL,
  `applicant_city` varchar(255) DEFAULT NULL,
  `applicant_state` varchar(255) DEFAULT NULL,
  `mobile_number` varchar(255) DEFAULT NULL,
  `as_above` varchar(255) DEFAULT NULL,
  `correspondence_address` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `country_2` varchar(255) DEFAULT NULL,
  `resident_number_2` varchar(255) DEFAULT NULL,
  `father_tel_no` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `mother_occupation` varchar(255) DEFAULT NULL,
  `guardian_tel_no` varchar(255) DEFAULT NULL,
  `highest_qualification` varchar(255) DEFAULT NULL,
  `year_of_passing` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `mobile_number_2` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `father_occupation` varchar(255) DEFAULT NULL,
  `mother_tel_no` varchar(255) DEFAULT NULL,
  `gurdian_name` varchar(255) DEFAULT NULL,
  `gurdian_occupation` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `applicant_name_2` varchar(255) DEFAULT NULL,
  `study` varchar(255) DEFAULT NULL,
  `passport_number_2` varchar(255) DEFAULT NULL,
  `visa_pass` varchar(255) DEFAULT NULL,
  `app_status` varchar(255) DEFAULT NULL,
  `health_declaration` varchar(255) DEFAULT NULL,
  `health_declaration_file` varchar(255) DEFAULT NULL,
  `passport_scanned` varchar(255) DEFAULT NULL,
  `passport_scanned_file` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo_file` varchar(255) DEFAULT NULL,
  `academic_certificate_1` varchar(255) DEFAULT NULL,
  `academic_certificate_file_1` varchar(255) DEFAULT NULL,
  `academic_certificate_2` varchar(255) DEFAULT NULL,
  `academic_certificate_file_2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_registers`
--

INSERT INTO `student_registers` (`id`, `student_id`, `reference_id`, `nationality`, `passport_number`, `date_of_birth`, `passport_issue_date`, `obtain_single_entry_visa`, `applicant_email_id`, `sex`, `applicant_permanent_add`, `applicant_postal_code`, `country`, `resident_number`, `programme`, `subject`, `applicant_name`, `passport_issued_place`, `passport_expiry_date`, `applicant_mobile_number`, `agent_email_id`, `marital`, `applicant_city`, `applicant_state`, `mobile_number`, `as_above`, `correspondence_address`, `postal_code`, `country_2`, `resident_number_2`, `father_tel_no`, `mother_name`, `mother_occupation`, `guardian_tel_no`, `highest_qualification`, `year_of_passing`, `city`, `state`, `mobile_number_2`, `father_name`, `father_occupation`, `mother_tel_no`, `gurdian_name`, `gurdian_occupation`, `grade`, `applicant_name_2`, `study`, `passport_number_2`, `visa_pass`, `app_status`, `health_declaration`, `health_declaration_file`, `passport_scanned`, `passport_scanned_file`, `photo`, `photo_file`, `academic_certificate_1`, `academic_certificate_file_1`, `academic_certificate_2`, `academic_certificate_file_2`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, 'Bangladesh', '123456', '2022-12-14', '2022-12-08', 'Bangladesh', 'nafiz@gmail.com', 'Male', 'Dhaka', '1215', 'Bangladesh', '0987', '3', '5', 'Nafiz', 'Dhaka', '2022-12-29', '017', 'agent@gmail.com', 'Single', 'Dhaka', 'Dhaka', '01768607919', NULL, 'Dhaka', '1215', 'Bangladesh', '0767657', '543535', 'ksdlksdj cdss', 'Housewife', '435435435', 'Undergraduate', '2022', 'Dhaka', 'Dhaka', '02938', 'dssd sdfdsf', 'Business', '0188384', 'dsadsd', 'dsadsd', '11', NULL, 'No', NULL, 'No', '3', 'Health Declaration Form', '63a2c6f825b7d.jpg', 'Passport/NRIC Scanned [All Pages (zip)]', '63a2c6f82731d.jpg', 'Photo', '63a2c6f827aef.png', 'Academic Certificate 1', '63a2c6f827c28.jpg', 'Academic Certificate 2', '63a2c6f827df7.jpg', '2022-12-21 08:42:32', '2023-01-14 12:22:21'),
(5, 5, 'AG1004', 'Brunei Darussalam', 'FSDF35355', '2011-06-19', '2022-12-19', 'Finland', 'nafiz016@gmail.com', 'Male', 'dhaka', '59010', 'Afghanistan', 'angladesh', '3', '6', 'hasan', 'dhaks', '2022-12-29', NULL, 'nafiz0167@gmail.com', 'Single', 'dhaka', 'bagladesh', '77777773334', NULL, 'dhaka', '2220', 'Brazil', '453425', '225', 'hasu halima', NULL, '34234523454', 'Postgraduate', '2022', 'ঢাকা', 'ঢাকা', '7777777333', 'MUSTAFA ALAMGIR', 'business', '435354', 'cxcx', 'srsffds', '4', '53453', 'No', '5345345', 'Yes', '3', 'Health Declaration Form', '63a02cfdb9a48.jpg', 'Passport/NRIC Scanned [All Pages (zip)]', '63a02cfdba3e3.jpg', 'Photo', '63a02cfdba6fa.jpg', 'Academic Certificate 1', '63a02cfdba99e.jpg', 'Academic Certificate 2', '63a02cfdbaca1.jpg', '2022-12-19 03:21:01', '2023-01-10 10:56:20'),
(6, 27, 'AG10020', 'Albania', 'FSDF35345', '2023-01-07', '2023-01-07', 'Afghanistan', 'nn@gamil.com', 'Female', 'gfshdfj', '5910', 'Anguilla', '63454', '1', '4', 'nazmul', 'dhaka', '2023-01-07', '03843848747', 'uu@gamil.com', 'Single', 'dhaka', 'dhaka', '932832737', NULL, 'dhaka', '6903', 'Antarctica', '46363', '37373737', 'hasina', 'test', '8999239432', 'Ordinary Level (O Level)', '2005', 'dhaka', 'dhaka', '9383873', '93938', 'f@gmail.com', '23784324874', 'haibb', 'business', '5', 'nahis', 'Yes', 'test', 'Yes', NULL, 'Health Declaration Form', '63b95a0245e22.jpeg', 'Passport/NRIC Scanned [All Pages (zip)]', NULL, 'Photo', NULL, 'Academic Certificate 1', NULL, 'Academic Certificate 2', NULL, '2023-01-07 11:39:46', '2023-01-07 11:39:46'),
(7, 31, NULL, 'Bangladesh', 'B00646563', '1996-12-08', '2022-07-26', 'Bangladesh', 'mdsabujrahman745@gmail.com', 'Male', 'PAIK PARA , SUJANAGAR, CHINAKHORA, PABNA', '6600', 'Bangladesh', 'N/A', '3', '7', 'HOSSAIN MD SABUJ', 'DIP/DHAKA', '2032-07-25', '8801772266223', 'mdsabujrahman745@gmail.com', 'Single', 'PABNA', 'RAJSHAHI', 'N/A', 'on', NULL, NULL, 'Afghanistan', NULL, 'N/A', 'N/A', 'N/A', 'N/A', 'Ordinary Level (O Level)', 'N/A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N/A', 'HOSSAIN MD SABUJ', 'No', 'B00646563', 'No', '5', 'Health Declaration Form', '63be83f6c2b0f.pdf', 'Passport/NRIC Scanned [All Pages (zip)]', '63be83f6c6acc.jpg', 'Photo', '63be83f6c7a6d.jpg', 'Academic Certificate 1', '63be83f6c8055.jpg', 'Academic Certificate 2', '63be83f6cbc5a.jpg', '2023-01-11 09:40:06', '2023-01-14 12:28:07'),
(8, 59, 'UEM012023', 'Bangladesh', 'B00245357', '2002-08-01', '2022-09-26', 'Bangladesh', 'anthonyromitgomesuem@gmail.com', 'Male', '337/1, SOUTH KAFRUL, DHAKA', '1206', 'Bangladesh', 'N/A', '8', '5', 'GOMES ROMIT ANTHONY', 'DIP/DHAKA', '2032-09-25', '8801713037686', 'anthonyromitgomesuem@gmail.com', 'Single', 'Dhaka', 'DHAKA', '8801713037686', 'on', NULL, NULL, 'Bangladesh', NULL, 'N/A', 'N/A', 'N/A', 'N/A', 'Advanced Level (A Level)', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4.08', 'GOMES ROMIT ANTHONY', 'No', 'B00245357', 'No', '5', 'Health Declaration Form', '63bf51ae1cd63.pdf', 'Passport/NRIC Scanned [All Pages (zip)]', '63bf51ae206b1.jpg', 'Photo', '63bf51ae24228.jpg', 'Academic Certificate 1', '63bf51ae247fc.jpg', 'Academic Certificate 2', '63bf51ae25097.jpg', '2023-01-12 00:17:50', '2023-01-14 12:25:52');

-- --------------------------------------------------------

--
-- Table structure for table `student_statuses`
--

CREATE TABLE `student_statuses` (
  `id` int(11) NOT NULL,
  `application_id` int(11) DEFAULT NULL,
  `status` varchar(256) DEFAULT NULL,
  `feedback` varchar(256) DEFAULT NULL,
  `status_file` varchar(256) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_statuses`
--

INSERT INTO `student_statuses` (`id`, `application_id`, `status`, `feedback`, `status_file`, `created_at`, `updated_at`) VALUES
(1, 1, '4', 'Congratulations,\n                        Congratulations, your Visa Approval Letter (VAL) has been Approved.', NULL, '2023-01-08 11:20:06', '2023-01-08 11:20:06'),
(2, 1, '1', 'Congratulations,\n                        Congratulations, your Visa Approval Letter (VAL) has been Approved.', NULL, '2023-01-09 04:55:13', '2023-01-09 04:55:13'),
(3, 1, '3', 'Congratulations,\n                        Congratulations, your Visa Approval Letter (VAL) has been Approved.', NULL, '2023-01-09 05:50:59', '2023-01-09 05:50:59'),
(4, 1, '2', 'Congratulations,\n                        Congratulations, your Visa Approval Letter (VAL) has been Approved.', NULL, '2023-01-09 05:53:37', '2023-01-09 05:53:37'),
(5, 5, '1', 'Congratulations,\n                        Congratulations, your Visa Approval Letter (VAL) has been Approved.', NULL, '2023-01-09 06:05:19', '2023-01-09 06:05:19'),
(6, 5, '3', 'Congratulations,\n                        Congratulations, your Visa Approval Letter (VAL) has been Approved.', NULL, '2023-01-09 06:05:26', '2023-01-09 06:05:26'),
(7, 6, '3', 'Congratulations,\n                        Congratulations, your Visa Approval Letter (VAL) has been Approved.', NULL, '2023-01-09 07:17:20', '2023-01-09 07:17:20'),
(8, 6, '5', 'Congratulations,\n                        Congratulations, your Visa Approval Letter (VAL) has been Approved.', NULL, '2023-01-09 07:17:42', '2023-01-09 07:17:42'),
(9, 6, '4', 'Congratulations,\n                        Congratulations, your Visa Approval Letter (VAL) has been Approved.', NULL, '2023-01-09 08:11:42', '2023-01-09 08:11:42'),
(10, 6, '5', 'Congratulations,\n                        Congratulations, your Visa Approval Letter (VAL) has been Approved.', NULL, '2023-01-09 08:11:53', '2023-01-09 08:11:53'),
(17, 5, '3', 'Congratulations,\n                        Congratulations, your Visa Approval Letter (VAL) has been Approved.', NULL, '2023-01-10 10:56:20', '2023-01-10 10:56:20'),
(18, 7, NULL, 'Congratulations,\n                        Congratulations, your Visa Approval Letter (VAL) has been Approved.', NULL, '2023-01-11 09:43:56', '2023-01-11 09:43:56'),
(19, 7, '5', 'Congratulations,\n                        Congratulations, your Visa Approval Letter (VAL) has been Approved.', NULL, '2023-01-11 09:44:06', '2023-01-11 09:44:06'),
(20, 7, '5', 'Congratulations,\n                        Congratulations, your Visa Approval Letter (VAL) has been Approved.', NULL, '2023-01-11 09:44:17', '2023-01-11 09:44:17'),
(21, 1, '2', 'Congratulations,\r\n                        Congratulations, your Visa Approval Letter (VAL) has been Approved.', '63be9fdb60abd.png', '2023-01-11 11:39:07', '2023-01-11 11:39:07'),
(22, 7, NULL, 'Congratulations,\r\n                        Congratulations, your Visa Approval Letter (VAL) has been Approved.', NULL, '2023-01-11 23:35:52', '2023-01-11 23:35:52'),
(23, 7, '4', 'Congratulations,\r\n                        Congratulations, your Visa Approval Letter (VAL) has been Approved.', NULL, '2023-01-11 23:36:06', '2023-01-11 23:36:06'),
(24, 7, '5', 'Congratulations,\r\n                        Congratulations, your Visa Approval Letter (VAL) has been Approved.', NULL, '2023-01-11 23:36:24', '2023-01-11 23:36:24'),
(25, 7, '6', 'Congratulations,\r\n                        Congratulations, your Visa Approval Letter (VAL) has been Approved.', NULL, '2023-01-11 23:36:30', '2023-01-11 23:36:30'),
(26, 7, '5', 'Congratulations,\r\n                        Congratulations, your Visa Approval Letter (VAL) has been Approved.', NULL, '2023-01-11 23:36:41', '2023-01-11 23:36:41'),
(27, 7, '5', 'Congratulations,\r\n                        Congratulations, your Visa Approval Letter (VAL) has been Approved.', '63bf484031db2.pdf', '2023-01-11 23:37:36', '2023-01-11 23:37:36'),
(28, 7, '4', 'Congratulations,\r\n                        Congratulations, your Visa Approval Letter (VAL) has been Approved.', '63bf48a68fd5a.pdf', '2023-01-11 23:39:18', '2023-01-11 23:39:18'),
(29, 7, '5', 'Congratulations,\r\n                        Congratulations, your Visa Approval Letter (VAL) has been Approved.', '63bf48e9d79f8.pdf', '2023-01-11 23:40:25', '2023-01-11 23:40:25'),
(30, 8, '2', 'Congratulations,\r\n                        Congratulations, your Visa Approval Letter (VAL) has been Approved.', '63bf532464bef.pdf', '2023-01-12 00:24:04', '2023-01-12 00:24:04'),
(31, 8, '4', 'Congratulations,\r\n                        Congratulations, your Visa Approval Letter (VAL) has been Approved.', '63bf544c7e278.pdf', '2023-01-12 00:29:00', '2023-01-12 00:29:00'),
(32, 8, '5', 'Congratulations,\r\n                        Congratulations, your Visa Approval Letter (VAL) has been Approved.', '63bf546577bde.pdf', '2023-01-12 00:29:25', '2023-01-12 00:29:25'),
(33, 1, '3', 'Congratulations,\r\n                        Congratulations, your Visa Approval Letter (VAL) has been Approved.', NULL, '2023-01-14 12:22:21', '2023-01-14 12:22:21');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `programme_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`, `programme_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Economics', 2, 1, '2023-01-15 11:28:25', '2023-01-15 11:28:25'),
(2, 'Political Science', 2, 1, '2023-01-15 11:28:25', '2023-01-15 11:28:25'),
(3, 'Geography and Environment', 3, 1, '2023-01-15 11:28:25', '2023-01-15 11:28:25'),
(4, 'Social Work', 1, 1, '2023-01-15 11:28:25', '2023-01-15 11:28:25'),
(5, 'Physics', 3, 1, '2023-01-15 11:28:25', '2023-01-15 11:28:25'),
(6, 'Physics', 3, 1, '2023-01-15 11:28:25', '2023-01-15 11:28:25'),
(7, 'Management', 4, 1, '2023-01-15 11:28:25', '2023-01-15 11:28:25'),
(8, 'Finance & Banking4', 4, 1, '2023-01-15 11:28:25', '2023-01-15 11:28:25'),
(9, 'Microbiology', 5, 1, '2023-01-15 11:28:25', '2023-01-15 11:28:25'),
(10, 'Data Science', 5, 1, '2023-01-15 11:28:25', '2023-01-15 11:28:25'),
(11, 'Orthopedic', 6, 1, '2023-01-15 11:28:25', '2023-01-15 11:28:25'),
(12, 'Neurology', 6, 1, '2023-01-15 11:28:25', '2023-01-15 11:28:25'),
(13, 'Gynecology', 6, 1, '2023-01-15 11:28:25', '2023-01-15 11:28:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `student_name` varchar(255) DEFAULT NULL,
  `agency_name` varchar(255) DEFAULT NULL,
  `institute_name` varchar(256) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `generated_id` varchar(256) DEFAULT NULL,
  `pro_image` varchar(256) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `reference` int(11) DEFAULT NULL,
  `mobile_number` varchar(16) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `student_name`, `agency_name`, `institute_name`, `email`, `generated_id`, `pro_image`, `status`, `reference`, `mobile_number`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL, NULL, 'admin@admin.com', NULL, NULL, 1, NULL, NULL, '2022-12-14 04:06:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'S7lpVEb8mIYaffpOX0L9z08WefnBnppcEzLPiFZ5FO9xFtCzDTif9sWNLZuS', '2022-12-14 04:06:51', '2022-12-14 04:06:51'),
(2, 'student', 'nafiz', NULL, NULL, 'nafiz@gmail.com', NULL, '63b412eac64d6.jpg', 1, NULL, '1963577004', NULL, '$2y$10$IMeGQcmkboN03joIGGJ4aeTJb.L9E9RzDBgZcgziMnHaJa9U.2VZa', NULL, '2022-12-14 04:12:40', '2023-01-03 11:35:06'),
(3, 'agency', NULL, 'merge creation', NULL, 'amin12@gmail.com', 'AG10003', NULL, 1, NULL, '1220998844', NULL, '$2y$10$thgWU96T5K/xwxtGtL6skOHbNDtHEhd1NrrUh2/g9B0IXcDxo4.Se', NULL, '2022-12-27 11:48:31', '2022-12-27 11:48:31'),
(4, 'agency', NULL, 'amin mohammad', NULL, 'amin@gmail.com', 'AG1004', NULL, 1, NULL, '1220998844', NULL, '$2y$10$ckngMpSE6oEkwAqXDlcbjeJOvURllv3lArBdezy9PK20gg473/V22', NULL, '2022-12-26 02:28:48', '2022-12-28 00:15:19'),
(5, 'student', 'anis', NULL, NULL, 'anis@gmail.com', 'ST1005', NULL, 1, NULL, '197537383', NULL, '$2y$10$kkovhsgPgjRmhlmAGFQ6VOFiMT62LrcELoB7UciP/gHCevt4nsUP6', NULL, '2022-12-26 02:44:00', '2022-12-26 02:44:00'),
(12, 'student', 'ashfaq', NULL, NULL, 'asfaq@gmail.com', 'ST10012', NULL, 1, NULL, '1220998844', NULL, '$2y$10$bLbSN1NSIcu2pY0NdGMCoen1D7bZ2WBE8Xk8h9NIGbVmg.dENf58.', NULL, '2022-12-26 03:09:26', '2022-12-26 03:09:26'),
(13, 'agency', NULL, 'amr desh on', NULL, 'amrdesh@gmail.com', 'AG10013', '63aad859767ec.png', 1, NULL, '198765476', NULL, '$2y$10$sP7K8M1kbWAEj2alNI5qru4VCk0lp57ijfJxWGoaPzuu0Vt7wHjBK', NULL, '2022-12-26 04:36:25', '2022-12-28 00:15:16'),
(14, 'agency', NULL, 'Merge Creation', NULL, 'info@mergecreation.com', 'AG10014', NULL, 1, NULL, '1768607919', NULL, '$2y$10$Pv3M7Zk1mHxIfMUNc3./6eqNwBWfcAJtuk6ZLaHhTaXHe69Lcbg0W', NULL, '2023-01-03 10:32:10', '2023-01-03 10:36:09'),
(15, 'student', 'nafizhosain', NULL, NULL, 'nafiz07@gmail.com', 'ST10015', NULL, 1, NULL, '1097563003', NULL, '$2y$10$wCCm36PjHdl9A3VsyAmQHeQVxMtAVhr.NqEB3uGwzu8o0KWi1JzJu', NULL, '2023-01-03 10:35:31', '2023-01-03 10:35:31'),
(16, 'student', 'N.Islam', NULL, NULL, 'info@nislam.com', 'ST10016', NULL, 1, NULL, '19', NULL, '$2y$10$zMwiODNu1ZVd1fO415p2rOIXNrOs5dsRDXGM25nbOEanEk/yN3vbO', NULL, '2023-01-03 10:41:56', '2023-01-03 10:41:56'),
(17, 'student', 'SAGOR PATHAN', NULL, NULL, 'uniceeducation@gmail.com', 'ST10017', NULL, 1, NULL, '1125518636', NULL, '$2y$10$OoBLg5rYurdWrq9ueZoNDecoW5i5fWvOfsex72.kcKasWX5yad7ca', NULL, '2023-01-03 11:32:23', '2023-01-03 11:32:23'),
(18, 'agency', NULL, 'HOSHEN MD SHOPON', NULL, 'shopon@gmail.com', 'AG10018', NULL, 1, NULL, '1125518636', NULL, '$2y$10$GqLQQueZe.do7Yjw.9/xieakqYNXbqVQMGFtMwzlSBJREXA0YyhdG', 'qNltPpRWuiMUs3zgNka7iDjlRtGOcdSKGzYMBzLXOBLZQywU2FaJmMRlcxUb', '2023-01-03 11:36:45', '2023-01-05 10:36:35'),
(19, 'student', 'Aminur', NULL, NULL, 'aminur@gmail.com', 'ST10019', NULL, 1, NULL, '928272827', NULL, '$2y$10$0NPSGGO9r8lJQjxDsSDi/OBrbVX5K0fsaM.Abtr0Bk75l9ycDv9re', NULL, '2023-01-03 11:38:14', '2023-01-05 10:42:17'),
(20, 'agency', NULL, 'ever green', NULL, 'ev@gmail.com', 'AG10020', NULL, 1, NULL, '922828', NULL, '$2y$10$kkovhsgPgjRmhlmAGFQ6VOFiMT62LrcELoB7UciP/gHCevt4nsUP6', NULL, '2023-01-05 04:44:45', '2023-01-05 10:36:37'),
(21, 'student', 'hamidul hasan', NULL, NULL, 'hamidul@gmail.com', 'ST10021', '63c536ababe52.png', 1, NULL, '8348383372222', NULL, '$2y$10$yqXTifFMrvmm3DoGlGvU6ewuMT0cjyl90TWogxU2hOwaoITjDjcPe', NULL, '2023-01-05 11:42:52', '2023-01-16 11:36:11'),
(22, 'student', 'Mohmmad Abdul Mannan', NULL, NULL, 'abmannan2@gmail.com', 'ST10022', NULL, 1, NULL, '01644694149', NULL, '$2y$10$EeXw3kcEv.6n0vm4KJ5lqursBAu01OD0nEYmf4qeEb8jyr7uEJ7yS', NULL, '2023-01-06 13:24:57', '2023-01-06 13:24:57'),
(23, 'student', 'DAS SULOV KUMAR', NULL, NULL, 'dassulov670@gmail.com', 'ST10023', NULL, 1, NULL, '8801873706874', NULL, '$2y$10$b9S7sr3XeLsNdEjNAxqcbOSmknMB105R7GMv/V/oI53uT1GuX7kRC', 'lmUTCxGrKwHTtVSPV0rM8VQ09n0zWaiw0uf8txhLPSf6sSPbrK3wgdsnNATl', '2023-01-06 16:33:14', '2023-01-06 16:33:14'),
(24, 'student', 'N', NULL, NULL, 'in@bd.com', 'ST10024', NULL, 1, NULL, '122', NULL, '$2y$10$C3.DMQyf1WzYtylY1Pz3gOVtZjaVMyDM3aXDCZJnIdKl5bwb7.dpO', NULL, '2023-01-06 16:54:07', '2023-01-06 16:54:07'),
(25, 'student', 'hasin', NULL, NULL, 'hasin@gmail.com', 'ST10025', NULL, 1, NULL, '123455679', NULL, '$2y$10$nxgvZUc.8fvjmr3v1r8H/O.p4dPeYiLXqriZkzM9WgoNIKfuR3cJC', NULL, '2023-01-07 05:30:24', '2023-01-07 05:30:24'),
(27, 'student', 'hasib', NULL, NULL, 'hasib@gmail.com', 'ST10027', NULL, 1, NULL, '132134435464', NULL, '$2y$10$H.LnAQDVtaWy1Mi579PizeNVmBiGkeRI3/4GFTxuuviEJ5iE/uJeK', NULL, '2023-01-07 11:12:06', '2023-01-07 11:12:06'),
(28, 'student', 'Ayesha Akter', NULL, NULL, 'ayeshaakterluc@gmail.com', 'ST10028', NULL, 1, NULL, '01711377066', NULL, '$2y$10$O66V5BCEG6KMa4BLUStGS.0JED6y4K0DGdzK2ZuUaDjia7A7y8YvO', NULL, '2023-01-09 02:46:52', '2023-01-09 02:46:52'),
(29, 'student', 'MD SABUJ HOSSAIN', NULL, NULL, 'sabujhossainbd@gmail.com', 'ST10029', '63be7f28d0ed2.jpg', 1, NULL, '8801125518636', NULL, '$2y$10$6DWq37PJyDbfANMMkwDc4eUokMYkdoPinHHngpVLx8382Pqgqa9ya', 'dBlnKTMCuhDE7R64kj3usP90eZclmpS5BtnjNL0I50OoBnReNdyykbcZxV3n', '2023-01-11 03:05:54', '2023-01-11 09:19:36'),
(30, 'student', 'NURUL ISLAM', NULL, NULL, 'nurulislamuem@gmail.com', 'ST10030', '63be7e921ec49.jpg', 1, NULL, '01996399080', NULL, '$2y$10$8IYV1BVZ5oDkMJWlAKB//.4uZ4C5njtR5bGSwvmTKg9EKXpFU6ysa', 'p2RX55oGjWuk4Op8214MtxoXlTG9SCqfmhogJb1Vcpz4dQykx1375ckrQIQi', '2023-01-11 09:06:56', '2023-01-11 09:17:06'),
(31, 'student', 'MD SABUJ HOSSAIN', NULL, NULL, 'mdsabujrahman745@gmail.com', 'ST10031', '63bf4a34946c3.jpg', 1, NULL, '8801772266223', NULL, '$2y$10$A/E/SlnTu.ag/VYxXl.Nr.gjpCWLz8F.RzqzH17B4PRQmYBstSGSK', NULL, '2023-01-11 09:27:43', '2023-01-11 23:45:56'),
(32, 'student', 'BEGUM TASLIMA', NULL, NULL, 'begumtaslimauem@gmail.com', 'ST10032', NULL, 1, NULL, '01910968681', NULL, '$2y$10$CBlNytqpprHH85szgAP8IOZEyopjDref2fV7Ule7NIT.JJrmTFOeC', NULL, '2023-01-11 09:28:36', '2023-01-11 09:28:36'),
(33, 'student', 'MIYA MD SOHAG', NULL, NULL, 'miyamdsohaguem@gmail.com', 'ST10033', NULL, 1, NULL, '01996399080', NULL, '$2y$10$o0yFt1mwOihpAS6a9dcrzeq.KLfCZL6PvIcVLYQ52Hc6Mw6K10J9G', 'i4KRQbjd3uAY5raM9RxlbwDR0M0jTZnIEzAbPv9q16lHzqEd8u9QRvUA1acv', '2023-01-11 09:34:43', '2023-01-11 09:34:43'),
(34, 'student', 'SAGOR PATHAN', NULL, NULL, 'sagorpathanuem@gmail.com', 'ST10034', NULL, 1, NULL, '01996399080', NULL, '$2y$10$OeIyXm.eT7jeCzoIxDmVMu3PLF6XEOvMn052myGc/rtYlAF/l0/0G', '6IYPZmEiUZJkTS1IpOwrPKvGNNLxXXkDTHB80Uh1QSGLGkLVEZfQhf4nf5Q1', '2023-01-11 10:03:44', '2023-01-11 10:03:44'),
(35, 'student', 'HOSHEN MD SHOPON', NULL, NULL, 'hoshenmdshoponuem@gmail.com', 'ST10035', NULL, 1, NULL, '01996399080', NULL, '$2y$10$uZ//tzOoHgSBDnbd/ODrneXggNk1hEx1jABaSv.J4I6LXc/Mo90k6', 'h4hLcKQQG9bmjEZ3IC0A1E7EwryOkKRNVuD2hWooYu5yJaY4d4aXQ8vbk07p', '2023-01-11 10:09:57', '2023-01-11 10:09:57'),
(36, 'student', 'HOSSAIN MD MAHFUJ', NULL, NULL, 'hossainmdmahfujuem@gmail.com', 'ST10036', NULL, 1, NULL, '01996399080', NULL, '$2y$10$ODwFXLp/0Tsucka78IaHheh/jG0VwtXxREeMUOqOBOsjGHemroD2G', 'CkyEebwama8qmILJHwAiW9ojZOzFLPkfBZtsAloPHCmhEMLlvuXrQ27yNAua', '2023-01-11 10:15:00', '2023-01-11 10:15:00'),
(37, 'student', 'ZAHANGIR MAIN UDDIN', NULL, NULL, 'zahangirmainuddinuem@gmail.com', 'ST10037', NULL, 1, NULL, '01996399080', NULL, '$2y$10$the5.G.XCcDMWqZYIzy3kukQFeFTVdyXOSl6q9b2HuzujIefiDCAO', 'TwSt9xBH3rEHkc9gtIetpBfoYKhKxrPhG9opCuUQZw2G0ijgMGxJZPht6n5e', '2023-01-11 10:17:23', '2023-01-11 10:17:23'),
(38, 'student', 'HAQUE FARZANA', NULL, NULL, 'haquefarzanauem@gmail.com', 'ST10038', NULL, 1, NULL, '01996399080', NULL, '$2y$10$MdeXztOsj34pWlyGBfJFJuNJQpiAieW7FvRp9qgKF15Vu.VbI9rB6', 'nHwh1792AdIKni8Dta7edqWnzQTLKXrNX2hr1gj1imUQpp1iyqtSMZe9cOYf', '2023-01-11 10:41:39', '2023-01-11 10:41:39'),
(39, 'student', 'RAFI ARAFAT', NULL, NULL, 'rafiarafatuem@gmail.com', 'ST10039', NULL, 1, NULL, '01996399080', NULL, '$2y$10$8EtjIJK9HiI9npHawNd/KODHH22irDVPqPMwgptBpGYm1O7zO6cJq', '3CJYABurehbLuJbOAqjJwnpubUak4ZD1WQgTpRGJFjxNAASkG0xEKC2R7iho', '2023-01-11 10:43:21', '2023-01-11 10:43:21'),
(40, 'student', 'MOHAMMAD AINUR RAHMAN', NULL, NULL, 'mohammadainurrahmanuem@gmail.com', 'ST10040', NULL, 1, NULL, '01996399080', NULL, '$2y$10$66keAeiQENhzzXiyqNju5OkRBsEWry9w0vVyhLdjqQZ4KBmifsu5K', '6E1hjfESZWDGvdCiY1wnPB2zOM2uP9ukkAvOjk9VaaWjdBbWtSBg8o2mZniW', '2023-01-11 10:45:04', '2023-01-11 10:45:05'),
(41, 'student', 'BABU MD RASEL', NULL, NULL, 'babumdraseluem@gmail.com', 'ST10041', NULL, 1, NULL, '01996399080', NULL, '$2y$10$0gjQR3OV9zT8Ov4BOHGuuOwh5Ti9J4hS6D0OzAWLR61SlCKi8C9cG', 'Hx9EQ6Yc3mhdzHdL4LhOncftfImbGfKVkXUl8FhLT83lvsRB0kR6i8dqu4nY', '2023-01-11 10:49:02', '2023-01-11 10:49:02'),
(42, 'student', 'HOSSEN MD IQBAL', NULL, NULL, 'hossenmdiqbaluem@gmail.com', 'ST10042', NULL, 1, NULL, '01996399080', NULL, '$2y$10$2eOk3mU4AiZHbh0CDXtSDOjt8vu911o03mlqtlkN6AjCPAb1s7uRu', 'fnU0g83QVpGInVqnPgjbcSXkvjVbNgBnP3o3kBPuibWb8lU3cBdEhnOw7cnR', '2023-01-11 10:51:17', '2023-01-11 10:51:17'),
(43, 'student', 'RAHMAN MD HABIBUR', NULL, NULL, 'rahmanmdhabiburuem@gmail.com', 'ST10043', NULL, 1, NULL, '01910968681', NULL, '$2y$10$V9MWgX6zIZsDv2YYUZjh1.48WaWu5tFs8R313De2t03liE.TIm66.', 'jsF3aUmgOXrhXIDY1SliFIIPNGldNcP8iqVr9v1gG0VJrl70RW3bRCm3Ip9K', '2023-01-11 10:51:38', '2023-01-11 10:51:38'),
(44, 'student', 'YASHA ANAM AFROZ', NULL, NULL, 'yashaanamafrozuem@gmail.com', 'ST10044', NULL, 1, NULL, '01996399080', NULL, '$2y$10$KwvLzNHTv31M5MYl5/MFi.aZ.10pw.0zqi2Q3rmvolvvgNvzBtAPe', 'NPBkwYWPi5Y13uCyGkqsnoOnuqqYXiaM9JR3GsH8BzjqKXBKmYeboskap2zO', '2023-01-11 10:53:30', '2023-01-11 10:53:30'),
(45, 'student', 'ISLAM MD NAYEM', NULL, NULL, 'islammdnayemuem@gmail.com', 'ST10045', NULL, 1, NULL, '01996399080', NULL, '$2y$10$AP5S/v5aYJMUrW02MUAGguTYc4jRluqjMdKdlVf9MDTOuEbDn.dV6', 'JmREpSsF1Euop8ZrvNKyt5Sb8SNIIEpir01cQWia2NhNTrCIAbDO5F29t0Oj', '2023-01-11 10:56:30', '2023-01-11 10:56:30'),
(46, 'student', 'HOSSAIN MD RASEL', NULL, NULL, 'hossainmdraseluem@gmail.com', 'ST10046', NULL, 1, NULL, '01996399080', NULL, '$2y$10$dHNG9LD4flXKNf2lvnYZTulyMDzYSecl9HlXWnanEgMvpteP8VBry', 'IQVqmgDbkalwQWL15eVNFMncFwBtaGQyXpcMJVj07CqFJeBG5wnCuriKBU6O', '2023-01-11 10:58:22', '2023-01-11 10:58:22'),
(47, 'student', 'MIA UZZAL', NULL, NULL, 'miauzzaluem@gmail.com', 'ST10047', NULL, 1, NULL, '01996399080', NULL, '$2y$10$eoi1k9x9Wr4orXr6tD4YO.xE524cifV87QnNjEo7uILHoyTmTHg5q', 'mkrbPgap6luNvk8cHdNZt5rCJZj1CvpUJClnp6kIjwq1yoghB6wmeYMdo7DV', '2023-01-11 11:00:17', '2023-01-11 11:00:17'),
(48, 'student', 'SAZID PATHAN', NULL, NULL, 'sazidpathanuem@gmail.com', 'ST10048', NULL, 1, NULL, '01996399080', NULL, '$2y$10$dPNVd0mhiDdCyzdnr.gHKuTuYCvMdhhdfhFZVznXansISn.VTNE7m', 'IEeayHk4EA7DXOWZcB5f9sO5IlUssvvxCXFBqxSesE76jmk5qM9z2PifPlcF', '2023-01-11 11:01:47', '2023-01-11 11:01:47'),
(49, 'student', 'MOMO FARIA KHAN', NULL, NULL, 'momofariakhan@gmail.com', 'ST10049', NULL, 1, NULL, '01996399080', NULL, '$2y$10$1.aOqn1S4/f1U977Av08A.Cc3IANDRXbgLh5o7LYcLbUNZeJLg2ZW', 'msGUOLpMUK6nhQ36UPnvirDB58Mr7aNiNtRUW9gg9BOLQubFwIRCWIQw5c94', '2023-01-11 11:04:25', '2023-01-11 11:04:25'),
(50, 'student', 'ETI JANNATUL FERDOUSI', NULL, NULL, 'etijannatulferdousiuem@gmail.com', 'ST10050', NULL, 1, NULL, '01996399080', NULL, '$2y$10$8sLWKs/F4K4uxiHVWHgyEOaPDvrL2cj5xhabkGpa85A1KUTFQWylK', 'pe4iPE5U2gjCAccEYvXee2I2lPeHkzGqi0kCe8MXvk9EEOVoZwAaGWXumb0R', '2023-01-11 11:08:31', '2023-01-11 11:08:31'),
(51, 'student', 'ZANNAT NASIMA BEGUM', NULL, NULL, 'zannatnasimabegu@gmail.com', 'ST10051', NULL, 1, NULL, '01996399080', NULL, '$2y$10$X81D4/yBIYGnaZERz8RgMuyirgGEiNsxexSxyZs.0tuwXiufFr1Ya', 'HgPHbj5kmWTCKyhwyfxPgconrYOvFmDUmPtmjgoLpLeapoNmwwVAi2V7SlNw', '2023-01-11 11:10:53', '2023-01-11 11:10:53'),
(52, 'student', 'RAHMAN MST SURAYA', NULL, NULL, 'rahmanmstsurayauem@gmail.com', 'ST10052', NULL, 1, NULL, '01996399080', NULL, '$2y$10$eXS/WQle1Mq5hDyjqmiimOZl9kCfLp7l8HdQXaRFpSfyDtiDCwtU6', 'jTQ9wI5BFm9PnNJ5hqn51vwbUjuhS0VIVRP2Rb9jCPYEIdyrMvsLYc11SEJ7', '2023-01-11 11:12:46', '2023-01-11 11:12:46'),
(53, 'student', 'JUBAYER', NULL, NULL, 'jubayeruem@gmail.com', 'ST10053', NULL, 1, NULL, '01996399080', NULL, '$2y$10$sFWZRCXdm3U0cHTS2VBV4OxUhcUFlqnmyep6ae7wGsPv5mZ6QDUiC', '0kCe5YvctpiY1BYnJ5cmjGBx2WJFtYWn7aDzoxNQRjXbjJlp5URKrafgjYUp', '2023-01-11 11:14:53', '2023-01-11 11:14:53'),
(54, 'student', 'HOSSAIN MD SHOHAGH', NULL, NULL, 'hossainmdshohaghuem@gmail.com', 'ST10054', NULL, 1, NULL, '01996399080', NULL, '$2y$10$m3hAeJLQm2R4jcKmD7vykOE9vd.YFfqESv3dkBQpLxLFmCU2l2FBS', 'cAueGTcl3rgwrWmAMA1RZuJSDnCMDNTWLgoXLhPO3cy6JhtdOBxfmFq3Vgrd', '2023-01-11 11:18:56', '2023-01-11 11:18:56'),
(55, 'student', 'RUMIA KHATUN', NULL, NULL, 'rumiakhatunuem@gmail.com', 'ST10055', NULL, 1, NULL, '01996399080', NULL, '$2y$10$nFSJQFmTYOPLEKJ1F/din.M96L6RPZ23PanV0N.wjVo15i6bSzfRm', 'Oajz7tVqZxgoCnYilGiGFrQMUkvP7WDTjcWQXss5lVBW8XmluxEOHV1Q4J9b', '2023-01-11 11:22:58', '2023-01-11 11:22:58'),
(56, 'student', 'NUR MOHAMMAD', NULL, NULL, 'nurmohammaduem@gmail.com', 'ST10056', NULL, 1, NULL, '01996399080', NULL, '$2y$10$ptEayxbsZ4j7kSTC5fR.uOsoK4p6SiJTjhfVRG5dSxO649jLHAisG', 'EFuYKwgTkpjSc5f1ly49H1y4UiWE1B7OBuonZ35Q5hDCGWaN8tBmo3eSie4M', '2023-01-11 11:25:17', '2023-01-11 11:25:17'),
(57, 'student', 'SUMON', NULL, NULL, 'sumonuem@gmail.com', 'ST10057', NULL, 1, NULL, '01996399080', NULL, '$2y$10$M2sEF/hdSF0cHedlSv6ppu8Goh3im/caa/ft16baNecWE4rDU7gqS', 'HHCtowDV1C3iOR1NnUVAnift3vY3DNiRcNjd1zKblxoSTuvp3gUhth8c490s', '2023-01-11 11:35:21', '2023-01-11 11:35:21'),
(58, 'student', 'MD SABUJ HOSSAIN', NULL, NULL, 'mdsabujhossainuem@gmail.com', 'ST10058', NULL, 1, NULL, '01996399080', NULL, '$2y$10$7jNgCQ.ySi/YvYPDDHmbFe1UynXR60reJr4xsSH/sWSBL0sVnA8OO', 'UXotZtEOUaf3C5oj4735FlLZinPRWtepemQoQ7x4u8M8wsMH76gx090BFwTM', '2023-01-11 11:37:03', '2023-01-11 11:37:03'),
(59, 'student', 'ROMIT ANTHONY GOMES', NULL, NULL, 'romitanthonygomesuem@gmail.com', 'ST10059', '63bf51daf2cfa.jpg', 1, NULL, '01996399080', NULL, '$2y$10$UTBAzD2AJbGDmOPXjyyZGuCBDC.QhrNYOGsQhlnNrvA1gpWKt2/IS', 'VIjb80CrPOThx9uCB3JVwgC5sJx6u5K5UBKx3ENdr6IPnzfJH04BjUbc5JZn', '2023-01-11 11:39:55', '2023-01-12 00:18:34'),
(60, 'student', 'MIYA MD SOHAG', NULL, NULL, 'miyamdgohaguem@gmail.com', 'ST10060', NULL, 1, NULL, '01996399080', NULL, '$2y$10$TEGSyMGFPtISGG1YvJDJpudJJIcILIPW1K1Rp4wcL6aSPbkzzf5JS', 'AU5D7sj3Xo5hoQGxb7jyxiJcJ3wvARgiI6cWChsRe9yTJEthLgEGybVfsTSQ', '2023-01-14 04:33:29', '2023-01-14 04:33:29'),
(61, 'student', 'RAJIB SUTRADHAR', NULL, NULL, 'rajibsutradharuem@gmail.com', 'ST10061', NULL, 1, NULL, '01996399080', NULL, '$2y$10$v344o.ErLtX3hkjT.Hfsse9JIWpt/2b5m.gV0sKL2JgS9Cg0E2XrK', 'ZJou9tXkPQCNZdPbIXcMYCk4QVao8UuLClpf1k6tv4mzNWIUWfsLzIYi3iNe', '2023-01-14 05:01:33', '2023-01-14 05:01:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appllication_status`
--
ALTER TABLE `appllication_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programme`
--
ALTER TABLE `programme`
  ADD PRIMARY KEY (`programme_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_passport_number_unique` (`passport_number`);

--
-- Indexes for table `student_certificates`
--
ALTER TABLE `student_certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_registers`
--
ALTER TABLE `student_registers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_registers_student_id_unique` (`student_id`),
  ADD UNIQUE KEY `student_registers_passport_number_unique` (`passport_number`);

--
-- Indexes for table `student_statuses`
--
ALTER TABLE `student_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appllication_status`
--
ALTER TABLE `appllication_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `programme`
--
ALTER TABLE `programme`
  MODIFY `programme_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_certificates`
--
ALTER TABLE `student_certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_registers`
--
ALTER TABLE `student_registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student_statuses`
--
ALTER TABLE `student_statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
