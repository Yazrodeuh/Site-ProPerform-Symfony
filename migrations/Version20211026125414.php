<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211026125414 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE moduleDescription (idModuleDesc INT AUTO_INCREMENT NOT NULL, categorieModuleDesc VARCHAR(50) DEFAULT NULL, nomModuleDesc VARCHAR(50) NOT NULL, aliasModuleDesc VARCHAR(5) DEFAULT NULL, dureeModuleDesc VARCHAR(30) NOT NULL, pourQuiModuleDesc TEXT DEFAULT NULL, objectifsModuleDesc TEXT DEFAULT NULL, orgaPedagoModuleDesc TEXT DEFAULT NULL, prixModuleDesc DOUBLE PRECISION NOT NULL, lieuModuleDesc TEXT DEFAULT NULL, lienModuleDesc VARCHAR(150) NOT NULL, idRubriqueFormation INT NOT NULL, PRIMARY KEY(idModuleDesc)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE utilisateur CHANGE idUtilisateur idUtilisateur VARCHAR(70) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE moduleDescription');
        $this->addSql('ALTER TABLE utilisateur CHANGE idUtilisateur idUtilisateur VARCHAR(70) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`');
    }
}
