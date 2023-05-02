<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230502135900 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE maintenance CHANGE idvehicule idvehicule INT DEFAULT NULL');
        $this->addSql('ALTER TABLE maintenance ADD CONSTRAINT FK_2F84F8E983FAB710 FOREIGN KEY (idvehicule) REFERENCES vehicule (idvehicule)');
        $this->addSql('DROP INDEX idvehicule ON maintenance');
        $this->addSql('CREATE INDEX IDX_2F84F8E983FAB710 ON maintenance (idvehicule)');
        $this->addSql('ALTER TABLE reservation CHANGE prixreservation prixreservation INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE maintenance DROP FOREIGN KEY FK_2F84F8E983FAB710');
        $this->addSql('ALTER TABLE maintenance DROP FOREIGN KEY FK_2F84F8E983FAB710');
        $this->addSql('ALTER TABLE maintenance CHANGE idvehicule idvehicule INT NOT NULL');
        $this->addSql('DROP INDEX idx_2f84f8e983fab710 ON maintenance');
        $this->addSql('CREATE INDEX idvehicule ON maintenance (idvehicule)');
        $this->addSql('ALTER TABLE maintenance ADD CONSTRAINT FK_2F84F8E983FAB710 FOREIGN KEY (idvehicule) REFERENCES vehicule (idvehicule)');
        $this->addSql('ALTER TABLE reservation CHANGE prixreservation prixreservation INT DEFAULT NULL');
    }
}
