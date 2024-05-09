-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for shuvo_e_shopper
CREATE DATABASE IF NOT EXISTS `shuvo_e_shopper` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `shuvo_e_shopper`;

-- Dumping structure for table shuvo_e_shopper.add_product
CREATE TABLE IF NOT EXISTS `add_product` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `cata_id` int DEFAULT NULL,
  `manu_id` int DEFAULT NULL,
  `stock_quantity` int DEFAULT NULL,
  `product_sku` int DEFAULT NULL,
  `product_price` float(11,2) DEFAULT NULL,
  `product_picture` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `product_short_description` text COLLATE utf8mb3_unicode_ci,
  `product_long_description` longtext COLLATE utf8mb3_unicode_ci,
  `publication_status` int DEFAULT NULL,
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Dumping data for table shuvo_e_shopper.add_product: ~1 rows (approximately)
INSERT INTO `add_product` (`product_id`, `product_name`, `cata_id`, `manu_id`, `stock_quantity`, `product_sku`, `product_price`, `product_picture`, `product_short_description`, `product_long_description`, `publication_status`) VALUES
	(1, 'Chiffon Cake - Star Line Food Products', 1, 3, 100, 1, 5.00, '../asset/image/product_image/starline-chiffon-cake.jpg', '.', '.', 1);

-- Dumping structure for table shuvo_e_shopper.admin_info
CREATE TABLE IF NOT EXISTS `admin_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Dumping data for table shuvo_e_shopper.admin_info: ~1 rows (approximately)
INSERT INTO `admin_info` (`id`, `admin_name`, `email`, `password`) VALUES
	(1, 'admin', 'admin@gmail.com', '123456');

-- Dumping structure for table shuvo_e_shopper.category_info
CREATE TABLE IF NOT EXISTS `category_info` (
  `cata_id` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `category_description` text COLLATE utf8mb3_unicode_ci,
  `publication_status` int DEFAULT NULL,
  KEY `cata_id` (`cata_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Dumping data for table shuvo_e_shopper.category_info: ~0 rows (approximately)
INSERT INTO `category_info` (`cata_id`, `category_name`, `category_description`, `publication_status`) VALUES
	(1, 'Dry Food', 'N/A', 1),
	(2, 'Cool Drinks', '.', 1),
	(3, 'Stationary', '.', 1),
	(4, 'Grocery', '.', 1);

-- Dumping structure for table shuvo_e_shopper.customer_info
CREATE TABLE IF NOT EXISTS `customer_info` (
  `customer_id` int NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `password` varchar(15) COLLATE utf8mb3_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb3_unicode_ci,
  `district` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`customer_id`) USING BTREE,
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Dumping data for table shuvo_e_shopper.customer_info: ~0 rows (approximately)
INSERT INTO `customer_info` (`customer_id`, `customer_name`, `phone`, `email`, `password`, `address`, `district`) VALUES
	(1, '01738923828', '01738923828', NULL, '01738923828', NULL, NULL);

-- Dumping structure for table shuvo_e_shopper.manufacture_info
CREATE TABLE IF NOT EXISTS `manufacture_info` (
  `manu_id` int NOT NULL AUTO_INCREMENT,
  `manufacture_name` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `manufacture_description` text COLLATE utf8mb3_unicode_ci,
  `publication_status` int DEFAULT NULL,
  KEY `manu_id` (`manu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Dumping data for table shuvo_e_shopper.manufacture_info: ~0 rows (approximately)
INSERT INTO `manufacture_info` (`manu_id`, `manufacture_name`, `manufacture_description`, `publication_status`) VALUES
	(1, 'Default', '.', 1),
	(2, 'Pran', '.', 1),
	(3, 'Star Line', '.', 1);

-- Dumping structure for table shuvo_e_shopper.order_details
CREATE TABLE IF NOT EXISTS `order_details` (
  `order_details_id` int NOT NULL AUTO_INCREMENT,
  `order_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `product_name` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `product_price` float(11,2) DEFAULT NULL,
  `product_quantity` int DEFAULT NULL,
  `product_image` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`order_details_id`),
  KEY `order_details_id` (`order_details_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Dumping data for table shuvo_e_shopper.order_details: ~0 rows (approximately)
INSERT INTO `order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `product_image`) VALUES
	(1, 1, 1, 'Chiffon Cake - Star Line Food Products', 5.00, 5, '../asset/image/product_image/starline-chiffon-cake.jpg'),
	(2, 3, 1, 'Chiffon Cake - Star Line Food Products', 5.00, 1, '../asset/image/product_image/starline-chiffon-cake.jpg'),
	(3, 4, 1, 'Chiffon Cake - Star Line Food Products', 5.00, 5, '../asset/image/product_image/starline-chiffon-cake.jpg');

-- Dumping structure for table shuvo_e_shopper.order_info
CREATE TABLE IF NOT EXISTS `order_info` (
  `order_id` int NOT NULL AUTO_INCREMENT,
  `customer_id` int DEFAULT NULL,
  `shipping_id` int DEFAULT NULL,
  `total_order` float(11,2) DEFAULT NULL,
  `order_status` varbinary(50) DEFAULT 'Pending',
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`),
  KEY `order_id` (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Dumping data for table shuvo_e_shopper.order_info: ~2 rows (approximately)
INSERT INTO `order_info` (`order_id`, `customer_id`, `shipping_id`, `total_order`, `order_status`, `order_date`) VALUES
	(3, 1, NULL, 5.00, _binary 0x50656e64696e67, '2024-05-09 15:58:19'),
	(4, 1, NULL, 25.00, _binary 0x50656e64696e67, '2024-05-09 16:07:54');

-- Dumping structure for table shuvo_e_shopper.payment_info
CREATE TABLE IF NOT EXISTS `payment_info` (
  `payment_id` int NOT NULL AUTO_INCREMENT,
  `order_id` int DEFAULT NULL,
  `payment_type` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `payment_status` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT 'Pending',
  `payment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `payment_id` (`payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Dumping data for table shuvo_e_shopper.payment_info: ~0 rows (approximately)
INSERT INTO `payment_info` (`payment_id`, `order_id`, `payment_type`, `transaction_id`, `payment_status`, `payment_date`) VALUES
	(1, 1, 'cash', NULL, 'Pending', '2024-05-09 15:49:22'),
	(2, 3, 'bKash', 'S254B65', 'Pending', '2024-05-09 15:57:10'),
	(3, 4, 'cash', NULL, 'Pending', '2024-05-09 16:07:54');

-- Dumping structure for table shuvo_e_shopper.sale_info
CREATE TABLE IF NOT EXISTS `sale_info` (
  `sale_id` int NOT NULL AUTO_INCREMENT,
  `order_id` int DEFAULT NULL,
  `customer_name` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `total_order` float(11,2) DEFAULT NULL,
  `sale_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `sale_id` (`sale_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Dumping data for table shuvo_e_shopper.sale_info: ~0 rows (approximately)

-- Dumping structure for table shuvo_e_shopper.save_comnt
CREATE TABLE IF NOT EXISTS `save_comnt` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb3_unicode_ci,
  `pdt_id` int DEFAULT NULL,
  `pdt_name` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Dumping data for table shuvo_e_shopper.save_comnt: ~0 rows (approximately)

-- Dumping structure for table shuvo_e_shopper.shipping_info
CREATE TABLE IF NOT EXISTS `shipping_info` (
  `shipping_id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `phone` int DEFAULT NULL,
  `address` text COLLATE utf8mb3_unicode_ci,
  `district` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  KEY `shipping_id` (`shipping_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Dumping data for table shuvo_e_shopper.shipping_info: ~0 rows (approximately)

-- Dumping structure for table shuvo_e_shopper.temp_cart
CREATE TABLE IF NOT EXISTS `temp_cart` (
  `temp_cart_id` int NOT NULL AUTO_INCREMENT,
  `session_id` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `product_name` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `product_price` float(11,2) DEFAULT NULL,
  `product_picture` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `product_quantity` int DEFAULT NULL,
  KEY `temp_cart_id` (`temp_cart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Dumping data for table shuvo_e_shopper.temp_cart: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
