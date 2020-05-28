-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.11-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for employees_db
CREATE DATABASE IF NOT EXISTS `employees_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `employees_db`;

-- Dumping structure for table employees_db.contacts_employees
CREATE TABLE IF NOT EXISTS `contacts_employees` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL DEFAULT '',
  `number` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table employees_db.contacts_employees: ~5 rows (approximately)
/*!40000 ALTER TABLE `contacts_employees` DISABLE KEYS */;
INSERT INTO `contacts_employees` (`id`, `type`, `number`) VALUES
	(1, 'work', '111-1111-111'),
	(2, 'home', '222-2222-222'),
	(3, 'work', '333-3333-333'),
	(4, 'work', '444-4444-444'),
	(5, 'work', '555-5555-555');
/*!40000 ALTER TABLE `contacts_employees` ENABLE KEYS */;

-- Dumping structure for table employees_db.employees
CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL DEFAULT '0',
  `lastname` varchar(50) NOT NULL DEFAULT '0',
  `position` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table employees_db.employees: ~5 rows (approximately)
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` (`id`, `firstname`, `lastname`, `position`) VALUES
	(1, 'David', 'Smith', 'Architect'),
	(2, 'Marc', 'Spears', 'Engineer'),
	(3, 'John', 'Doe', 'Manager'),
	(4, 'Bob', 'Robinson', 'Manager'),
	(5, 'Danny', 'White', 'Transporter');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;

-- Dumping structure for table employees_db.salary
CREATE TABLE IF NOT EXISTS `salary` (
  `employee_id` int(11) NOT NULL,
  `neto` int(11) NOT NULL DEFAULT 0,
  `bruto` int(11) NOT NULL DEFAULT 0,
  `bonus` int(11) NOT NULL DEFAULT 0,
  `sum` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table employees_db.salary: ~5 rows (approximately)
/*!40000 ALTER TABLE `salary` DISABLE KEYS */;
INSERT INTO `salary` (`employee_id`, `neto`, `bruto`, `bonus`, `sum`) VALUES
	(1, 40000, 47200, 2000, 49200),
	(2, 40000, 47200, 2000, 49200),
	(3, 30000, 35400, 1600, 37000),
	(4, 30000, 35400, 1600, 37000),
	(5, 25000, 4500, 500, 30000);
/*!40000 ALTER TABLE `salary` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
