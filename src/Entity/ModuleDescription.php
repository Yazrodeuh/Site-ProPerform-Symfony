<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Moduledescription
 *
 * @ORM\Table(name="moduleDescription")
 * @ORM\Entity
 */
class ModuleDescription
{
    /**
     * @var int
     *
     * @ORM\Column(name="idModuleDesc", type="integer", nullable=false, unique=true, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private int $idModuleDesc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="categorieModuleDesc", type="string", length=50, nullable=true)
     */
    private ?string $categorieModuleDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="nomModuleDesc", type="string", length=50, nullable=false)
     */
    private string $nomModuleDesc;


    /**
     * @var string|null
     *
     * @ORM\Column(name="aliasModuleDesc", type="string", length=5, nullable=true)
     */
    private ?string $aliasModuleDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="dureeModuleDesc", type="string", length=30, nullable=false)
     */
    private string $dureeModuleDesc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pourQuiModuleDesc", type="text", length=65535, nullable=true)
     */
    private ?string $pourQuiModuleDesc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="objectifsModuleDesc", type="text", length=65535, nullable=true)
     */
    private ?string $objectifsModuleDesc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="orgaPedagoModuleDesc", type="text", length=65535, nullable=true)
     */
    private ?string $orgaPedagoModuleDesc;

    /**
     * @var float
     *
     * @ORM\Column(name="prixModuleDesc", type="float", precision=10, scale=0, nullable=false)
     */
    private float $prixModuleDesc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lieuModuleDesc", type="text", length=65535, nullable=true)
     */
    private ?string $lieuModuleDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="lienModuleDesc", type="string", length=150, nullable=false)
     */
    private string $lienModuleDesc;


    /**
     * @var int
     *
     * @ORM\Column(name="idRubriqueFormation", type="integer", nullable=false)
     */
    private int $idRubriqueFormation;

    /**
     * @return int
     */
    public function getIdModuleDesc(): int
    {
        return $this->idModuleDesc;
    }

    /**
     * @param int $idModuleDesc
     */
    public function setIdModuleDesc(int $idModuleDesc): void
    {
        $this->idModuleDesc = $idModuleDesc;
    }

    /**
     * @return string|null
     */
    public function getCategorieModuleDesc(): ?string
    {
        return $this->categorieModuleDesc;
    }

    /**
     * @param string|null $petitTitreModuleDesc
     */
    public function setCategorieModuleDesc(?string $petitTitreModuleDesc): void
    {
        $this->categorieModuleDesc = $petitTitreModuleDesc;
    }

    /**
     * @return string
     */
    public function getLienModuleDesc(): string
    {
        return $this->lienModuleDesc;
    }

    /**
     * @param string $lienModuleDesc
     */
    public function setLienModuleDesc(string $lienModuleDesc): void
    {
        $this->lienModuleDesc = $lienModuleDesc;
    }

    /**
     * @return string
     */
    public function getNomModuleDesc(): string
    {
        return $this->nomModuleDesc;
    }

    /**
     * @param string $nomModuleDesc
     */
    public function setNomModuleDesc(string $nomModuleDesc): void
    {
        $this->nomModuleDesc = $nomModuleDesc;
    }

    /**
     * @return string|null
     */
    public function getAliasModuleDesc(): ?string
    {
        return $this->aliasModuleDesc;
    }

    /**
     * @param string|null $aliasModuleDesc
     */
    public function setAliasModuleDesc(?string $aliasModuleDesc): void
    {
        $this->aliasModuleDesc = $aliasModuleDesc;
    }

    /**
     * @return string
     */
    public function getDureeModuleDesc(): string
    {
        return $this->dureeModuleDesc;
    }

    /**
     * @param string $dureeModuleDesc
     */
    public function setDureeModuleDesc(string $dureeModuleDesc): void
    {
        $this->dureeModuleDesc = $dureeModuleDesc;
    }

    /**
     * @return string|null
     */
    public function getPourQuiModuleDesc(): ?string
    {
        return $this->pourQuiModuleDesc;
    }

    /**
     * @param string|null $pourQuiModuleDesc
     */
    public function setPourQuiModuleDesc(?string $pourQuiModuleDesc): void
    {
        $this->pourQuiModuleDesc = $pourQuiModuleDesc;
    }

    /**
     * @return string|null
     */
    public function getObjectifsModuleDesc(): ?string
    {
        return $this->objectifsModuleDesc;
    }

    /**
     * @param string|null $objectifsModuleDesc
     */
    public function setObjectifsModuleDesc(?string $objectifsModuleDesc): void
    {
        $this->objectifsModuleDesc = $objectifsModuleDesc;
    }

    /**
     * @return string|null
     */
    public function getOrgaPedagoModuleDesc(): ?string
    {
        return $this->orgaPedagoModuleDesc;
    }

    /**
     * @param string|null $orgaPedagoModuleDesc
     */
    public function setOrgaPedagoModuleDesc(?string $orgaPedagoModuleDesc): void
    {
        $this->orgaPedagoModuleDesc = $orgaPedagoModuleDesc;
    }

    /**
     * @return float
     */
    public function getPrixModuleDesc(): float
    {
        return $this->prixModuleDesc;
    }

    /**
     * @param float $prixModuleDesc
     */
    public function setPrixModuleDesc(float $prixModuleDesc): void
    {
        $this->prixModuleDesc = $prixModuleDesc;
    }

    /**
     * @return string|null
     */
    public function getLieuModuleDesc(): ?string
    {
        return $this->lieuModuleDesc;
    }

    /**
     * @param string|null $lieuModuleDesc
     */
    public function setLieuModuleDesc(?string $lieuModuleDesc): void
    {
        $this->lieuModuleDesc = $lieuModuleDesc;
    }

    /**
     * @return int
     */
    public function getIdRubriqueFormation(): int
    {
        return $this->idRubriqueFormation;
    }

    /**
     * @param int $idRubriqueFormation
     */
    public function setIdRubriqueFormation(int $idRubriqueFormation): void
    {
        $this->idRubriqueFormation = $idRubriqueFormation;
    }



}
