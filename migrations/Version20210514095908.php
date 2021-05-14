<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210514095908 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Création de la base de données avec entités inscriptions';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE inscriptions (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(255) DEFAULT NULL, lastname VARCHAR(255) DEFAULT NULL, is_ok TINYINT(1) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, phone INT DEFAULT NULL, adress VARCHAR(255) DEFAULT NULL, cp INT DEFAULT NULL, city VARCHAR(255) DEFAULT NULL, department VARCHAR(255) DEFAULT NULL, note LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE inscriptions');
    }
}
