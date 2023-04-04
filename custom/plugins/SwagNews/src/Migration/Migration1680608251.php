<?php declare(strict_types=1);

namespace SwagNews\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1680608251 extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1680608251;
    }

    public function update(Connection $connection): void
    {
        $connection->executeStatement('CREATE TABLE `swag_news` (
    `id` BINARY(16) NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `city` VARCHAR(255) NOT NULL,
    `active` TINYINT(1) NULL DEFAULT 0,
    `country_id` BINARY(16) NULL,
    `country_state_id` BINARY(16) NULL,
    `image_id` BINARY(16) NULL,
    `product_id` BINARY(16) NULL,
    `product_version_id` BINARY(16) NULL,
    `created_at` DATETIME(3) NOT NULL,
    `updated_at` DATETIME(3) NULL,
    PRIMARY KEY (`id`),
    KEY `fk.swag_news.country_id` (`country_id`),
    KEY `fk.swag_news.country_state_id` (`country_state_id`),
    KEY `fk.swag_news.image_id` (`image_id`),
    KEY `fk.swag_news.product_id` (`product_id`,`product_version_id`),
    CONSTRAINT `fk.swag_news.country_id` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
    CONSTRAINT `fk.swag_news.country_state_id` FOREIGN KEY (`country_state_id`) REFERENCES `country_state` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
    CONSTRAINT `fk.swag_news.image_id` FOREIGN KEY (`image_id`) REFERENCES `media` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
    CONSTRAINT `fk.swag_news.product_id` FOREIGN KEY (`product_id`,`product_version_id`) REFERENCES `product` (`id`,`version_id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;');
    }

    public function updateDestructive(Connection $connection): void
    {
        // implement update destructive
    }
}
