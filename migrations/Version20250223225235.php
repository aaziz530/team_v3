<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250223225235 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE task (id INT NOT NULL, nom VARCHAR(255) NOT NULL, description TEXT NOT NULL, duree INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE training_session (id INT NOT NULL, date DATE NOT NULL, time TIME(0) WITHOUT TIME ZONE NOT NULL, tasks JSON DEFAULT NULL, joueurs JSON DEFAULT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP TABLE task');
        $this->addSql('DROP TABLE training_session');
    }
}
