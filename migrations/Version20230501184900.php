<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230501184900 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE maintenance (idmaintenance INT AUTO_INCREMENT NOT NULL, idvehicule INT DEFAULT NULL, objet VARCHAR(255) NOT NULL, datedebut DATETIME NOT NULL, datefin DATETIME NOT NULL, INDEX IDX_2F84F8E983FAB710 (idvehicule), PRIMARY KEY(idmaintenance)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE maintenance ADD CONSTRAINT FK_2F84F8E983FAB710 FOREIGN KEY (idvehicule) REFERENCES vehicule (idvehicule)');
        $this->addSql('ALTER TABLE amende DROP FOREIGN KEY amende_ibfk_1');
        $this->addSql('ALTER TABLE amende DROP FOREIGN KEY amende_ibfk_1');
        $this->addSql('ALTER TABLE amende CHANGE idreservation idreservation INT DEFAULT NULL');
        $this->addSql('ALTER TABLE amende ADD CONSTRAINT FK_613014CF840939FA FOREIGN KEY (idreservation) REFERENCES reservation (idreservation)');
        $this->addSql('DROP INDEX amende_ibfk_1 ON amende');
        $this->addSql('CREATE INDEX IDX_613014CF840939FA ON amende (idreservation)');
        $this->addSql('ALTER TABLE amende ADD CONSTRAINT amende_ibfk_1 FOREIGN KEY (idreservation) REFERENCES reservation (idreservation) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE historique DROP FOREIGN KEY FK_EDBFD5EC840939FA');
        $this->addSql('ALTER TABLE historique ADD CONSTRAINT FK_EDBFD5EC840939FA FOREIGN KEY (idreservation) REFERENCES reservation (idreservation)');
        $this->addSql('ALTER TABLE reservation CHANGE prixreservation prixreservation INT NOT NULL');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY utilisateur_ibfk_1');
        $this->addSql('DROP INDEX idaffectation ON utilisateur');
        $this->addSql('ALTER TABLE utilisateur ADD roles VARCHAR(255) NOT NULL, ADD reset_token VARCHAR(255) NOT NULL, ADD auth_code VARCHAR(255) NOT NULL, DROP idaffectation');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY vehicule_ibfk_1');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY vehicule_ibfk_1');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1D17C88C93 FOREIGN KEY (idpark) REFERENCES park (idpark)');
        $this->addSql('DROP INDEX idpark ON vehicule');
        $this->addSql('CREATE INDEX IDX_292FFF1D17C88C93 ON vehicule (idpark)');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT vehicule_ibfk_1 FOREIGN KEY (idpark) REFERENCES park (idpark) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE maintenance DROP FOREIGN KEY FK_2F84F8E983FAB710');
        $this->addSql('DROP TABLE maintenance');
        $this->addSql('ALTER TABLE amende DROP FOREIGN KEY FK_613014CF840939FA');
        $this->addSql('ALTER TABLE amende DROP FOREIGN KEY FK_613014CF840939FA');
        $this->addSql('ALTER TABLE amende CHANGE idreservation idreservation INT NOT NULL');
        $this->addSql('ALTER TABLE amende ADD CONSTRAINT amende_ibfk_1 FOREIGN KEY (idreservation) REFERENCES reservation (idreservation) ON DELETE CASCADE');
        $this->addSql('DROP INDEX idx_613014cf840939fa ON amende');
        $this->addSql('CREATE INDEX amende_ibfk_1 ON amende (idreservation)');
        $this->addSql('ALTER TABLE amende ADD CONSTRAINT FK_613014CF840939FA FOREIGN KEY (idreservation) REFERENCES reservation (idreservation)');
        $this->addSql('ALTER TABLE historique DROP FOREIGN KEY FK_EDBFD5EC840939FA');
        $this->addSql('ALTER TABLE historique ADD CONSTRAINT FK_EDBFD5EC840939FA FOREIGN KEY (idreservation) REFERENCES reservation (idreservation) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation CHANGE prixreservation prixreservation INT DEFAULT NULL');
        $this->addSql('ALTER TABLE utilisateur ADD idaffectation INT DEFAULT NULL, DROP roles, DROP reset_token, DROP auth_code');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT utilisateur_ibfk_1 FOREIGN KEY (idaffectation) REFERENCES affectationbadge (idaffectation) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX idaffectation ON utilisateur (idaffectation)');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1D17C88C93');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1D17C88C93');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT vehicule_ibfk_1 FOREIGN KEY (idpark) REFERENCES park (idpark) ON DELETE CASCADE');
        $this->addSql('DROP INDEX idx_292fff1d17c88c93 ON vehicule');
        $this->addSql('CREATE INDEX idpark ON vehicule (idpark)');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1D17C88C93 FOREIGN KEY (idpark) REFERENCES park (idpark)');
    }
}
