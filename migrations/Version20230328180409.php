<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230328180409 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE affectationbadge (idaffectation INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(idaffectation)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE article (idarticle INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(idarticle)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE badge (idbadge INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(idbadge)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commentaire (idcomment INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(idcomment)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE historique (idhistorique INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(idhistorique)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE itineraire (iditineraire INT AUTO_INCREMENT NOT NULL, pointdepart VARCHAR(255) NOT NULL, pointarrivee VARCHAR(255) NOT NULL, kilometrage DOUBLE PRECISION NOT NULL, dureeestimee INT NOT NULL, nb_usage INT NOT NULL, PRIMARY KEY(iditineraire)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE offre (idoffre INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(idoffre)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE park (idpark INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, nbspot INT NOT NULL, statut VARCHAR(255) NOT NULL, PRIMARY KEY(idpark)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rating (idrating INT AUTO_INCREMENT NOT NULL, idvehicule INT DEFAULT NULL, nbetoile INT NOT NULL, INDEX IDX_D889262283FAB710 (idvehicule), PRIMARY KEY(idrating)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reclamation (idreclamation INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(idreclamation)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reponse (idreponse VARCHAR(255) NOT NULL, PRIMARY KEY(idreponse)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (idreservation INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(idreservation)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (iduser INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(iduser)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vehicule (id_vehicule INT AUTO_INCREMENT NOT NULL, idreservation INT DEFAULT NULL, status VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, modele VARCHAR(255) NOT NULL, prix INT NOT NULL, batterie INT NOT NULL, matricule VARCHAR(255) NOT NULL, puissance INT NOT NULL, image VARCHAR(255) NOT NULL, INDEX IDX_292FFF1D840939FA (idreservation), PRIMARY KEY(id_vehicule)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE rating ADD CONSTRAINT FK_D889262283FAB710 FOREIGN KEY (idvehicule) REFERENCES vehicule (idVehicule)');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1D840939FA FOREIGN KEY (idreservation) REFERENCES reservation (idreservation)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rating DROP FOREIGN KEY FK_D889262283FAB710');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1D840939FA');
        $this->addSql('DROP TABLE affectationbadge');
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE badge');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE historique');
        $this->addSql('DROP TABLE itineraire');
        $this->addSql('DROP TABLE offre');
        $this->addSql('DROP TABLE park');
        $this->addSql('DROP TABLE rating');
        $this->addSql('DROP TABLE reclamation');
        $this->addSql('DROP TABLE reponse');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('DROP TABLE vehicule');
    }
}
