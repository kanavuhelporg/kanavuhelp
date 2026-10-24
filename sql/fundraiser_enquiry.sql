-- Table structure for table `fundraiser_enquiry`
CREATE TABLE IF NOT EXISTS `fundraiser_enquiry` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `fullname` VARCHAR(150) NOT NULL,
  `email` VARCHAR(150) NOT NULL,
  `phone` VARCHAR(20) NOT NULL,
  `cause_category` VARCHAR(100) NOT NULL,
  `beneficiary_relation` VARCHAR(50) DEFAULT NULL,
  `beneficiary_name` VARCHAR(150) DEFAULT NULL,
  `beneficiary_age` INT DEFAULT NULL,
  `location` VARCHAR(150) DEFAULT NULL,
  `target_amount` DECIMAL(12,2) DEFAULT NULL,
  `urgency_level` VARCHAR(50) DEFAULT NULL,
  `cause_title` VARCHAR(255) DEFAULT NULL,
  `cause_description` TEXT NOT NULL,
  `status` ENUM('pending', 'approved', 'rejected') DEFAULT 'pending',
  `admin_remarks` TEXT DEFAULT NULL,
  `approved_at` DATETIME DEFAULT NULL,
  `approved_by` INT DEFAULT NULL,
  `approval_token` VARCHAR(100) DEFAULT NULL COMMENT 'Secure token sent to cause creator on approval',
  `token_used` TINYINT(1) DEFAULT 0 COMMENT '1 = token link already clicked by creator',
  `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- For existing tables, run these ALTER statements:
-- ALTER TABLE `fundraiser_enquiry` ADD COLUMN `approval_token` VARCHAR(100) DEFAULT NULL;
-- ALTER TABLE `fundraiser_enquiry` ADD COLUMN `token_used` TINYINT(1) DEFAULT 0;
