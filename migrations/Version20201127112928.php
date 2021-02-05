<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201127112928 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users ADD cv_id INT NOT NULL');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E9CFE419E2 FOREIGN KEY (cv_id) REFERENCES cv (id)');
        $this->addSql('CREATE INDEX IDX_1483A5E9CFE419E2 ON users (cv_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E9CFE419E2');
        $this->addSql('DROP INDEX IDX_1483A5E9CFE419E2 ON users');
        $this->addSql('ALTER TABLE users DROP cv_id');
    }
}
