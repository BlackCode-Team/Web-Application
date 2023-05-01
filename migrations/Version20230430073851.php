<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230430073851 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE itineraire CHANGE nb_usage nb_usage INT NOT NULL');
        $this->addSql('ALTER TABLE maintenance CHANGE idvehicule idvehicule INT DEFAULT NULL');
        $this->addSql('ALTER TABLE maintenance RENAME INDEX idvehicule TO IDX_2F84F8E983FAB710');
        $this->addSql('ALTER TABLE offre DROP FOREIGN KEY offre_ibfk_1');
        $this->addSql('ALTER TABLE offre CHANGE nom nom VARCHAR(255) DEFAULT NULL, CHANGE tauxderemise tauxderemise VARCHAR(255) NOT NULL, CHANGE description description VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE offre ADD CONSTRAINT FK_AF86866F28F52404 FOREIGN KEY (idbadge) REFERENCES badge (idbadge)');
        $this->addSql('ALTER TABLE offre RENAME INDEX idbadge TO IDX_AF86866F28F52404');
        $this->addSql('ALTER TABLE rating RENAME INDEX idx_dfec3f3983fab710 TO IDX_D889262283FAB710');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY reclamation_ibfk_1');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY reclamation_ibfk_2');
        $this->addSql('ALTER TABLE reclamation CHANGE contenu contenu VARCHAR(255) NOT NULL, CHANGE statut statut VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE6064045E5C27E9 FOREIGN KEY (iduser) REFERENCES utilisateur (iduser)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE60640483FAB710 FOREIGN KEY (idvehicule) REFERENCES vehicule (idvehicule)');
        $this->addSql('ALTER TABLE reclamation RENAME INDEX iduser TO IDX_CE6064045E5C27E9');
        $this->addSql('ALTER TABLE reclamation RENAME INDEX idvehicule TO IDX_CE60640483FAB710');
        $this->addSql('ALTER TABLE reponse CHANGE idreclamation idreclamation INT DEFAULT NULL, CHANGE description description VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE reponse RENAME INDEX idreclamation TO IDX_5FB6DEC78A114AB');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY reservation_ibfk_1');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY reservation_ibfk_2');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY reservation_ibfk_3');
        $this->addSql('ALTER TABLE reservation CHANGE prixreservation prixreservation INT NOT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849555E5C27E9 FOREIGN KEY (iduser) REFERENCES utilisateur (iduser)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495583FAB710 FOREIGN KEY (idvehicule) REFERENCES vehicule (idvehicule)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495585D5872B FOREIGN KEY (iditineraire) REFERENCES itineraire (iditineraire)');
        $this->addSql('ALTER TABLE reservation RENAME INDEX iduser TO IDX_42C849555E5C27E9');
        $this->addSql('ALTER TABLE reservation RENAME INDEX idvehicule TO IDX_42C8495583FAB710');
        $this->addSql('ALTER TABLE reservation RENAME INDEX iditineraire TO IDX_42C8495585D5872B');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY utilisateur_ibfk_1');
        $this->addSql('DROP INDEX idaffectation ON utilisateur');
        $this->addSql('ALTER TABLE utilisateur DROP idaffectation, CHANGE cin cin VARCHAR(8) NOT NULL, CHANGE permis permis VARCHAR(9) NOT NULL, CHANGE nbpoint nbpoint INT NOT NULL');
        $this->addSql('DROP INDEX matricule ON vehicule');
        $this->addSql('ALTER TABLE vehicule CHANGE status status VARCHAR(255) NOT NULL, CHANGE modele modele VARCHAR(255) NOT NULL, CHANGE batterie batterie INT NOT NULL, CHANGE matricule matricule VARCHAR(255) NOT NULL, CHANGE puissance puissance INT NOT NULL, CHANGE image image VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE vehicule RENAME INDEX idpark TO IDX_292FFF1D17C88C93');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE itineraire CHANGE nb_usage nb_usage INT DEFAULT NULL');
        $this->addSql('ALTER TABLE vehicule CHANGE status status VARCHAR(255) DEFAULT \'disponible\', CHANGE modele modele VARCHAR(255) DEFAULT NULL, CHANGE batterie batterie INT DEFAULT NULL, CHANGE matricule matricule VARCHAR(255) DEFAULT NULL, CHANGE puissance puissance INT DEFAULT NULL, CHANGE image image VARCHAR(255) DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX matricule ON vehicule (matricule)');
        $this->addSql('ALTER TABLE vehicule RENAME INDEX idx_292fff1d17c88c93 TO idpark');
        $this->addSql('ALTER TABLE rating RENAME INDEX idx_d889262283fab710 TO IDX_DFEC3F3983FAB710');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE6064045E5C27E9');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE60640483FAB710');
        $this->addSql('ALTER TABLE reclamation CHANGE contenu contenu TEXT NOT NULL, CHANGE statut statut VARCHAR(255) DEFAULT \'non traitée\'');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT reclamation_ibfk_1 FOREIGN KEY (iduser) REFERENCES utilisateur (iduser) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT reclamation_ibfk_2 FOREIGN KEY (idvehicule) REFERENCES vehicule (idvehicule) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reclamation RENAME INDEX idx_ce6064045e5c27e9 TO iduser');
        $this->addSql('ALTER TABLE reclamation RENAME INDEX idx_ce60640483fab710 TO idvehicule');
        $this->addSql('ALTER TABLE offre DROP FOREIGN KEY FK_AF86866F28F52404');
        $this->addSql('ALTER TABLE offre CHANGE nom nom VARCHAR(255) NOT NULL, CHANGE tauxderemise tauxderemise INT NOT NULL, CHANGE description description VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE offre ADD CONSTRAINT offre_ibfk_1 FOREIGN KEY (idbadge) REFERENCES badge (idbadge) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE offre RENAME INDEX idx_af86866f28f52404 TO idbadge');
        $this->addSql('ALTER TABLE maintenance CHANGE idvehicule idvehicule INT NOT NULL');
        $this->addSql('ALTER TABLE maintenance RENAME INDEX idx_2f84f8e983fab710 TO idvehicule');
        $this->addSql('ALTER TABLE reponse CHANGE idreclamation idreclamation INT NOT NULL, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE reponse RENAME INDEX idx_5fb6dec78a114ab TO idreclamation');
        $this->addSql('ALTER TABLE utilisateur ADD idaffectation INT DEFAULT NULL, CHANGE cin cin VARCHAR(255) DEFAULT NULL, CHANGE permis permis VARCHAR(255) DEFAULT NULL, CHANGE nbpoint nbpoint INT DEFAULT NULL');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT utilisateur_ibfk_1 FOREIGN KEY (idaffectation) REFERENCES affectationbadge (idaffectation) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('CREATE INDEX idaffectation ON utilisateur (idaffectation)');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C849555E5C27E9');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C8495583FAB710');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C8495585D5872B');
        $this->addSql('ALTER TABLE reservation CHANGE prixreservation prixreservation INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT reservation_ibfk_1 FOREIGN KEY (iduser) REFERENCES utilisateur (iduser) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT reservation_ibfk_2 FOREIGN KEY (idvehicule) REFERENCES vehicule (idvehicule) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT reservation_ibfk_3 FOREIGN KEY (iditineraire) REFERENCES itineraire (iditineraire) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation RENAME INDEX idx_42c849555e5c27e9 TO iduser');
        $this->addSql('ALTER TABLE reservation RENAME INDEX idx_42c8495583fab710 TO idvehicule');
        $this->addSql('ALTER TABLE reservation RENAME INDEX idx_42c8495585d5872b TO iditineraire');
    }
}
