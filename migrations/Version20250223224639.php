<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250223224639 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE task_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE training_session_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE task (id INT NOT NULL, nom VARCHAR(255) NOT NULL, description TEXT NOT NULL, duree INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE training_session (id INT NOT NULL, date DATE NOT NULL, time TIME(0) WITHOUT TIME ZONE NOT NULL, tasks JSON NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE training_session_joueur (training_session_id INT NOT NULL, joueur_id INT NOT NULL, PRIMARY KEY(training_session_id, joueur_id))');
        $this->addSql('CREATE INDEX IDX_156CA921DB8156B9 ON training_session_joueur (training_session_id)');
        $this->addSql('CREATE INDEX IDX_156CA921A9E2D76C ON training_session_joueur (joueur_id)');
        $this->addSql('ALTER TABLE training_session_joueur ADD CONSTRAINT FK_156CA921DB8156B9 FOREIGN KEY (training_session_id) REFERENCES training_session (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE training_session_joueur ADD CONSTRAINT FK_156CA921A9E2D76C FOREIGN KEY (joueur_id) REFERENCES joueur (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE task_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE training_session_id_seq CASCADE');
        $this->addSql('ALTER TABLE training_session_joueur DROP CONSTRAINT FK_156CA921DB8156B9');
        $this->addSql('ALTER TABLE training_session_joueur DROP CONSTRAINT FK_156CA921A9E2D76C');
        $this->addSql('DROP TABLE task');
        $this->addSql('DROP TABLE training_session');
        $this->addSql('DROP TABLE training_session_joueur');
    }
}
