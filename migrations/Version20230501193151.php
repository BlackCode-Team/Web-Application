<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230501193151 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE maintenance ADD objet VARCHAR(255) NOT NULL, ADD datefin DATETIME NOT NULL, CHANGE idvehicule idvehicule INT DEFAULT NULL, CHANGE date datedebut DATETIME NOT NULL');
        $this->addSql('ALTER TABLE maintenance ADD CONSTRAINT FK_2F84F8E983FAB710 FOREIGN KEY (idvehicule) REFERENCES vehicule (idvehicule)');
        $this->addSql('DROP INDEX idvehicule ON maintenance');
        $this->addSql('CREATE INDEX IDX_2F84F8E983FAB710 ON maintenance (idvehicule)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE maintenance DROP FOREIGN KEY FK_2F84F8E983FAB710');
        $this->addSql('ALTER TABLE maintenance DROP FOREIGN KEY FK_2F84F8E983FAB710');
        $this->addSql('ALTER TABLE maintenance ADD date DATETIME NOT NULL, DROP objet, DROP datedebut, DROP datefin, CHANGE idvehicule idvehicule INT NOT NULL');
        $this->addSql('DROP INDEX idx_2f84f8e983fab710 ON maintenance');
        $this->addSql('CREATE INDEX idvehicule ON maintenance (idvehicule)');
        $this->addSql('ALTER TABLE maintenance ADD CONSTRAINT FK_2F84F8E983FAB710 FOREIGN KEY (idvehicule) REFERENCES vehicule (idvehicule)');
    }
}
