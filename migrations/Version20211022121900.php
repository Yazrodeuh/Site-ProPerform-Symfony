<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211022121900 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, uersname VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649DFE3B410 (uersname), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE moduledescription CHANGE grandTitreModuleDesc grandTitreModuleDesc VARCHAR(150) NOT NULL, CHANGE nomModuleDesc nomModuleDesc VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE rubriqueformation CHANGE idRubrique idRubrique INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE utilisateur CHANGE idUtilisateur idUtilisateur VARCHAR(70) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE moduleDescription CHANGE nomModuleDesc nomModuleDesc VARCHAR(150) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, CHANGE grandTitreModuleDesc grandTitreModuleDesc VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`');
        $this->addSql('ALTER TABLE rubriqueformation CHANGE idRubrique idRubrique INT NOT NULL');
        $this->addSql('ALTER TABLE utilisateur CHANGE idUtilisateur idUtilisateur VARCHAR(70) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`');
    }
}
