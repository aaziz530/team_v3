<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250228153508 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE sponsor_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE sponsor_revenue_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE sponsor (id INT NOT NULL, nom_societe VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, phone_number INT NOT NULL, date_deb DATE NOT NULL, date_fin DATE NOT NULL, duree_affichage TIME(0) WITHOUT TIME ZONE NOT NULL, emplacement VARCHAR(255) NOT NULL, logo VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, statut VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE sponsor_revenue (id INT NOT NULL, sponsor_id INT NOT NULL, revenue_obtenu DOUBLE PRECISION NOT NULL, date_encaissement DATE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_A37F62C712F7FB51 ON sponsor_revenue (sponsor_id)');
        $this->addSql('ALTER TABLE sponsor_revenue ADD CONSTRAINT FK_A37F62C712F7FB51 FOREIGN KEY (sponsor_id) REFERENCES sponsor (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE sponsor_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE sponsor_revenue_id_seq CASCADE');
        $this->addSql('ALTER TABLE sponsor_revenue DROP CONSTRAINT FK_A37F62C712F7FB51');
        $this->addSql('DROP TABLE sponsor');
        $this->addSql('DROP TABLE sponsor_revenue');
    }
}
