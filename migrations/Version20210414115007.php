<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210414115007 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE agents (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, picture VARCHAR(255) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE annonce_details (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, annonce_id BIGINT UNSIGNED DEFAULT NULL, name VARCHAR(255) NOT NULL, value VARCHAR(255) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, INDEX annonce_details_annonce_id_foreign (annonce_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE annonce_photos (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, annonce_id BIGINT UNSIGNED DEFAULT NULL, photo VARCHAR(255) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, INDEX annonce_photos_annonce_id_foreign (annonce_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE annonces (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, agent_id BIGINT UNSIGNED DEFAULT NULL, immo_type VARCHAR(191) NOT NULL COMMENT \'\'\'Appartement\'\',\'\'Maison\'\',\'\'Villa\'\',\'\'Terain\'\',\'\'Studio\'\',\'\'Duplexe\'\'\', sale_type VARCHAR(191) NOT NULL COMMENT \'\'\'Vente\'\',\'\'Location\'\',\'\'Hypothech\'\'\', title VARCHAR(255) NOT NULL, description TEXT NOT NULL, price DOUBLE PRECISION NOT NULL, video VARCHAR(255) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, INDEX annonces_agent_id_foreign (agent_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE password_resets (email VARCHAR(255) NOT NULL, token VARCHAR(255) NOT NULL, created_at DATETIME DEFAULT NULL, INDEX password_resets_email_index (email), PRIMARY KEY(email)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, email_verified_at DATETIME DEFAULT NULL, password VARCHAR(255) NOT NULL, remember_token VARCHAR(100) DEFAULT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, UNIQUE INDEX users_email_unique (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE website_infos (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, logo VARCHAR(255) NOT NULL, address VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, map JSON NOT NULL, facebook_url VARCHAR(255) NOT NULL, instagram_url VARCHAR(255) NOT NULL, linkedin_url VARCHAR(255) NOT NULL, analytics_tag VARCHAR(255) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE annonce_details ADD CONSTRAINT FK_884991EA8805AB2F FOREIGN KEY (annonce_id) REFERENCES annonces (id)');
        $this->addSql('ALTER TABLE annonce_photos ADD CONSTRAINT FK_68D1E3C78805AB2F FOREIGN KEY (annonce_id) REFERENCES annonces (id)');
        $this->addSql('ALTER TABLE annonces ADD CONSTRAINT FK_CB988C6F3414710B FOREIGN KEY (agent_id) REFERENCES agents (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE annonces DROP FOREIGN KEY FK_CB988C6F3414710B');
        $this->addSql('ALTER TABLE annonce_details DROP FOREIGN KEY FK_884991EA8805AB2F');
        $this->addSql('ALTER TABLE annonce_photos DROP FOREIGN KEY FK_68D1E3C78805AB2F');
        $this->addSql('DROP TABLE agents');
        $this->addSql('DROP TABLE annonce_details');
        $this->addSql('DROP TABLE annonce_photos');
        $this->addSql('DROP TABLE annonces');
        $this->addSql('DROP TABLE password_resets');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE website_infos');
    }
}
