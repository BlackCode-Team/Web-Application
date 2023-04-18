<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230417231935 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE amende DROP FOREIGN KEY amende_ibfk_1');
        $this->addSql('ALTER TABLE amende DROP FOREIGN KEY amende_ibfk_1');
        $this->addSql('ALTER TABLE amende CHANGE idreservation idreservation INT DEFAULT NULL, CHANGE monatnt montant INT NOT NULL');
        $this->addSql('ALTER TABLE amende ADD CONSTRAINT FK_613014CF840939FA FOREIGN KEY (idreservation) REFERENCES reservation (idreservation)');
        $this->addSql('DROP INDEX amende_ibfk_1 ON amende');
        $this->addSql('CREATE INDEX IDX_613014CF840939FA ON amende (idreservation)');
        $this->addSql('ALTER TABLE amende ADD CONSTRAINT amende_ibfk_1 FOREIGN KEY (idreservation) REFERENCES reservation (idreservation) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE amende DROP FOREIGN KEY FK_613014CF840939FA');
        $this->addSql('ALTER TABLE amende DROP FOREIGN KEY FK_613014CF840939FA');
        $this->addSql('ALTER TABLE amende CHANGE idreservation idreservation INT NOT NULL, CHANGE montant monatnt INT NOT NULL');
        $this->addSql('ALTER TABLE amende ADD CONSTRAINT amende_ibfk_1 FOREIGN KEY (idreservation) REFERENCES reservation (idreservation) ON DELETE CASCADE');
        $this->addSql('DROP INDEX idx_613014cf840939fa ON amende');
        $this->addSql('CREATE INDEX amende_ibfk_1 ON amende (idreservation)');
        $this->addSql('ALTER TABLE amende ADD CONSTRAINT FK_613014CF840939FA FOREIGN KEY (idreservation) REFERENCES reservation (idreservation)');
    }
}
