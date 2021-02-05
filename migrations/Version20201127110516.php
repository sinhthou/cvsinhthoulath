<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201127110516 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cv (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, photo VARCHAR(255) NOT NULL, datenaissance DATE NOT NULL, adresse VARCHAR(255) NOT NULL, codepostal VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, pays VARCHAR(255) NOT NULL, mail VARCHAR(255) NOT NULL, portable VARCHAR(255) NOT NULL, fixe VARCHAR(255) NOT NULL, titre VARCHAR(255) NOT NULL, emploi VARCHAR(255) NOT NULL, presentation LONGTEXT NOT NULL, apropos LONGTEXT NOT NULL, competence VARCHAR(255) NOT NULL, categorie VARCHAR(255) NOT NULL, anneeform INT NOT NULL, lieuform VARCHAR(255) NOT NULL, nomformation VARCHAR(255) NOT NULL, debutexp VARCHAR(255) NOT NULL, finexp VARCHAR(255) NOT NULL, lieuexp VARCHAR(255) NOT NULL, nommetier VARCHAR(255) NOT NULL, descriptionmetier VARCHAR(255) NOT NULL, hobbie VARCHAR(255) NOT NULL, descriptionhobbie LONGTEXT NOT NULL, mediahobbie VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, motdepasse VARCHAR(255) NOT NULL, autorite INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE cv');
        $this->addSql('DROP TABLE users');
    }
}
