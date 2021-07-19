<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modulecomplet
 *
 * @ORM\Table(name="modulecomplet")
 * @ORM\Entity
 */
class Modulecomplet
{
    /**
     * @var int
     *
     * @ORM\Column(name="idModuleComplet", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private int $idmodulecomplet;

    /**
     * @var string
     *
     * @ORM\Column(name="sectionModuleComplet", type="string", length=200, nullable=false)
     */
    private string $sectionmodulecomplet;

    /**
     * @var string
     *
     * @ORM\Column(name="nomModuleComplet", type="string", length=200, nullable=false)
     */
    private string $nommodulecomplet;

    /**
     * @var string
     *
     * @ORM\Column(name="prerequisModuleComplet", type="text", length=65535, nullable=false)
     */
    private string $prerequismodulecomplet;

    /**
     * @var string
     *
     * @ORM\Column(name="publicModuleComplet", type="text", length=65535, nullable=false)
     */
    private string $publicmodulecomplet;

    /**
     * @var string
     *
     * @ORM\Column(name="dureeModuleComplet", type="text", length=65535, nullable=false)
     */
    private string $dureemodulecomplet;

    /**
     * @var string
     *
     * @ORM\Column(name="delaisModuleComplet", type="text", length=65535, nullable=false)
     */
    private string $delaismodulecomplet;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuModuleComplet", type="text", length=65535, nullable=false)
     */
    private string $lieumodulecomplet;

    /**
     * @var string
     *
     * @ORM\Column(name="objectifsModuleComplet", type="text", length=65535, nullable=false)
     */
    private string $objectifsmodulecomplet;

    /**
     * @var string
     *
     * @ORM\Column(name="modalitesModuleComplet", type="text", length=65535, nullable=false)
     */
    private string $modalitesmodulecomplet;

    /**
     * @var string
     *
     * @ORM\Column(name="programmeModuleComplet", type="text", length=65535, nullable=false)
     */
    private string $programmemodulecomplet;

    /**
     * @var string
     *
     * @ORM\Column(name="tarifsModuleComplet", type="text", length=65535, nullable=false)
     */
    private string $tarifsmodulecomplet;

    /**
     * @var string
     *
     * @ORM\Column(name="valeurModuleComplet", type="text", length=65535, nullable=false)
     */
    private string $valeurmodulecomplet;

    /**
     * @var string
     *
     * @ORM\Column(name="couleurModuleComplet", type="string", length=50, nullable=false)
     */
    private string $couleurmodulecomplet;

    /**
     * @return int
     */
    public function getIdmodulecomplet(): int
    {
        return $this->idmodulecomplet;
    }

    /**
     * @param int $idmodulecomplet
     */
    public function setIdmodulecomplet(int $idmodulecomplet): void
    {
        $this->idmodulecomplet = $idmodulecomplet;
    }

    /**
     * @return string
     */
    public function getSectionmodulecomplet(): string
    {
        return $this->sectionmodulecomplet;
    }

    /**
     * @param string $sectionmodulecomplet
     */
    public function setSectionmodulecomplet(string $sectionmodulecomplet): void
    {
        $this->sectionmodulecomplet = $sectionmodulecomplet;
    }

    /**
     * @return string
     */
    public function getNommodulecomplet(): string
    {
        return $this->nommodulecomplet;
    }

    /**
     * @param string $nommodulecomplet
     */
    public function setNommodulecomplet(string $nommodulecomplet): void
    {
        $this->nommodulecomplet = $nommodulecomplet;
    }

    /**
     * @return string
     */
    public function getPrerequismodulecomplet(): string
    {
        return $this->prerequismodulecomplet;
    }

    /**
     * @param string $prerequismodulecomplet
     */
    public function setPrerequismodulecomplet(string $prerequismodulecomplet): void
    {
        $this->prerequismodulecomplet = $prerequismodulecomplet;
    }

    /**
     * @return string
     */
    public function getPublicmodulecomplet(): string
    {
        return $this->publicmodulecomplet;
    }

    /**
     * @param string $publicmodulecomplet
     */
    public function setPublicmodulecomplet(string $publicmodulecomplet): void
    {
        $this->publicmodulecomplet = $publicmodulecomplet;
    }

    /**
     * @return string
     */
    public function getDureemodulecomplet(): string
    {
        return $this->dureemodulecomplet;
    }

    /**
     * @param string $dureemodulecomplet
     */
    public function setDureemodulecomplet(string $dureemodulecomplet): void
    {
        $this->dureemodulecomplet = $dureemodulecomplet;
    }

    /**
     * @return string
     */
    public function getDelaismodulecomplet(): string
    {
        return $this->delaismodulecomplet;
    }

    /**
     * @param string $delaismodulecomplet
     */
    public function setDelaismodulecomplet(string $delaismodulecomplet): void
    {
        $this->delaismodulecomplet = $delaismodulecomplet;
    }

    /**
     * @return string
     */
    public function getLieumodulecomplet(): string
    {
        return $this->lieumodulecomplet;
    }

    /**
     * @param string $lieumodulecomplet
     */
    public function setLieumodulecomplet(string $lieumodulecomplet): void
    {
        $this->lieumodulecomplet = $lieumodulecomplet;
    }

    /**
     * @return string
     */
    public function getObjectifsmodulecomplet(): string
    {
        return $this->objectifsmodulecomplet;
    }

    /**
     * @param string $objectifsmodulecomplet
     */
    public function setObjectifsmodulecomplet(string $objectifsmodulecomplet): void
    {
        $this->objectifsmodulecomplet = $objectifsmodulecomplet;
    }

    /**
     * @return string
     */
    public function getModalitesmodulecomplet(): string
    {
        return $this->modalitesmodulecomplet;
    }

    /**
     * @param string $modalitesmodulecomplet
     */
    public function setModalitesmodulecomplet(string $modalitesmodulecomplet): void
    {
        $this->modalitesmodulecomplet = $modalitesmodulecomplet;
    }

    /**
     * @return string
     */
    public function getProgrammemodulecomplet(): string
    {
        return $this->programmemodulecomplet;
    }

    /**
     * @param string $programmemodulecomplet
     */
    public function setProgrammemodulecomplet(string $programmemodulecomplet): void
    {
        $this->programmemodulecomplet = $programmemodulecomplet;
    }

    /**
     * @return string
     */
    public function getTarifsmodulecomplet(): string
    {
        return $this->tarifsmodulecomplet;
    }

    /**
     * @param string $tarifsmodulecomplet
     */
    public function setTarifsmodulecomplet(string $tarifsmodulecomplet): void
    {
        $this->tarifsmodulecomplet = $tarifsmodulecomplet;
    }

    /**
     * @return string
     */
    public function getValeurmodulecomplet(): string
    {
        return $this->valeurmodulecomplet;
    }

    /**
     * @param string $valeurmodulecomplet
     */
    public function setValeurmodulecomplet(string $valeurmodulecomplet): void
    {
        $this->valeurmodulecomplet = $valeurmodulecomplet;
    }

    /**
     * @return string
     */
    public function getCouleurmodulecomplet(): string
    {
        return $this->couleurmodulecomplet;
    }

    /**
     * @param string $couleurmodulecomplet
     */
    public function setCouleurmodulecomplet(string $couleurmodulecomplet): void
    {
        $this->couleurmodulecomplet = $couleurmodulecomplet;
    }




}
