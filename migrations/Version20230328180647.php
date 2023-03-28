<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230328180647 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rating ADD CONSTRAINT FK_D889262283FAB710 FOREIGN KEY (idvehicule) REFERENCES vehicule (idVehicule)');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1D840939FA FOREIGN KEY (idreservation) REFERENCES reservation (idreservation)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rating DROP FOREIGN KEY FK_D889262283FAB710');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1D840939FA');
    }
}
