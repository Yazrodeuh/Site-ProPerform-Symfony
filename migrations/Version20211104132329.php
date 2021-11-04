<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211104132329 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE actualite (idActualite INT AUTO_INCREMENT NOT NULL, idRubriqueFormation INT NOT NULL, titreActualite VARCHAR(100) NOT NULL, descriptionActualite TEXT NOT NULL, texteActualite TEXT NOT NULL, imageActualite TEXT NOT NULL, dateActualite DATE NOT NULL, PRIMARY KEY(idActualite)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE inscrit (idInscrit INT AUTO_INCREMENT NOT NULL, prenomInscrit VARCHAR(100) NOT NULL, nomInscrit VARCHAR(100) NOT NULL, mailInscrit VARCHAR(100) NOT NULL, telInscrit VARCHAR(10) NOT NULL, nomFormation VARCHAR(150) NOT NULL, dateTotInscrit DATE NOT NULL, dateTardInscrit DATE NOT NULL, PRIMARY KEY(idInscrit)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mailactualite (idMailActu INT AUTO_INCREMENT NOT NULL, mail VARCHAR(100) NOT NULL, PRIMARY KEY(idMailActu)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE module (id_module INT AUTO_INCREMENT NOT NULL, nom_module VARCHAR(150) NOT NULL, alias_module VARCHAR(10) NOT NULL, duree_module VARCHAR(35) NOT NULL, pour_qui_module LONGTEXT DEFAULT NULL, objectif_module LONGTEXT NOT NULL, organisation_pedago_module LONGTEXT DEFAULT NULL, prix_module INT NOT NULL, tarif_info_module LONGTEXT NOT NULL, lieu_module LONGTEXT DEFAULT NULL, lieu_details_module LONGTEXT NOT NULL, nom_lien_module VARCHAR(150) NOT NULL, prerequis_module LONGTEXT NOT NULL, public_module LONGTEXT NOT NULL, delais_module LONGTEXT NOT NULL, objectif_pedago_module LONGTEXT NOT NULL, modalite_module LONGTEXT NOT NULL, programme_module LONGTEXT NOT NULL, valeur_module LONGTEXT NOT NULL, version_module VARCHAR(50) NOT NULL, couleur_module VARCHAR(25) NOT NULL, id_formation INT NOT NULL, UNIQUE INDEX UNIQ_C242628BEA2D00C (alias_module), UNIQUE INDEX UNIQ_C24262869355901 (nom_lien_module), PRIMARY KEY(id_module)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE moduleDescription (idModuleDesc INT AUTO_INCREMENT NOT NULL, categorieModuleDesc VARCHAR(50) DEFAULT NULL, nomModuleDesc VARCHAR(50) NOT NULL, aliasModuleDesc VARCHAR(5) DEFAULT NULL, dureeModuleDesc VARCHAR(30) NOT NULL, pourQuiModuleDesc TEXT DEFAULT NULL, objectifsModuleDesc TEXT DEFAULT NULL, orgaPedagoModuleDesc TEXT DEFAULT NULL, prixModuleDesc DOUBLE PRECISION NOT NULL, lieuModuleDesc TEXT DEFAULT NULL, lienModuleDesc VARCHAR(150) NOT NULL, idRubriqueFormation INT NOT NULL, PRIMARY KEY(idModuleDesc)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE modulecomplet (idModuleComplet INT AUTO_INCREMENT NOT NULL, sectionModuleComplet VARCHAR(200) NOT NULL, nomModuleComplet VARCHAR(200) NOT NULL, prerequisModuleComplet TEXT NOT NULL, publicModuleComplet TEXT NOT NULL, dureeModuleComplet TEXT NOT NULL, delaisModuleComplet TEXT NOT NULL, lieuModuleComplet TEXT NOT NULL, objectifsModuleComplet TEXT NOT NULL, modalitesModuleComplet TEXT NOT NULL, programmeModuleComplet TEXT NOT NULL, tarifsModuleComplet TEXT NOT NULL, valeurModuleComplet TEXT NOT NULL, couleurModuleComplet VARCHAR(50) NOT NULL, PRIMARY KEY(idModuleComplet)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE news_letter (id INT AUTO_INCREMENT NOT NULL, mail VARCHAR(150) NOT NULL, formations_news TINYINT(1) NOT NULL, immo_news TINYINT(1) NOT NULL, debit_boisson_news TINYINT(1) NOT NULL, entreprise_news TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_2AB2D7E5126AC48 (mail), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rubriqueformation (idRubrique INT AUTO_INCREMENT NOT NULL, nomRubrique VARCHAR(30) NOT NULL, PRIMARY KEY(idRubrique)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, uersname VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649DFE3B410 (uersname), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (idUtilisateur VARCHAR(70) NOT NULL, prenomUtilisateur VARCHAR(40) NOT NULL, nomUtilisateur VARCHAR(40) NOT NULL, mdpUtilisateur VARCHAR(100) NOT NULL, admin TINYINT(1) NOT NULL, PRIMARY KEY(idUtilisateur)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE actualite');
        $this->addSql('DROP TABLE inscrit');
        $this->addSql('DROP TABLE mailactualite');
        $this->addSql('DROP TABLE module');
        $this->addSql('DROP TABLE moduleDescription');
        $this->addSql('DROP TABLE modulecomplet');
        $this->addSql('DROP TABLE news_letter');
        $this->addSql('DROP TABLE rubriqueformation');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE utilisateur');
    }
}
