<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210308093500 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE entre ADD eleve_id INT NOT NULL');
        $this->addSql('ALTER TABLE entre ADD CONSTRAINT FK_3F20C13FA6CC7B2 FOREIGN KEY (eleve_id) REFERENCES eleve (id)');
        $this->addSql('CREATE INDEX IDX_3F20C13FA6CC7B2 ON entre (eleve_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE entre DROP FOREIGN KEY FK_3F20C13FA6CC7B2');
        $this->addSql('DROP INDEX IDX_3F20C13FA6CC7B2 ON entre');
        $this->addSql('ALTER TABLE entre DROP eleve_id');
    }
}
