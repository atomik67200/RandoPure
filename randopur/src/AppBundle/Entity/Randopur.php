<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Randopur
 *
 * @ORM\Table(name="randopur")
 * @ORM\Entity
 */
class Randopur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="code_insee", type="integer", nullable=true)
     */
    private $codeInsee;

    /**
     * @return int
     */
    public function getCodeInsee()
    {
        return $this->codeInsee;
    }

    /**
     * @param int $codeInsee
     */
    public function setCodeInsee($codeInsee)
    {
        $this->codeInsee = $codeInsee;
    }

    /**
     * @return string
     */
    public function getNomCommune()
    {
        return $this->nomCommune;
    }

    /**
     * @param string $nomCommune
     */
    public function setNomCommune($nomCommune)
    {
        $this->nomCommune = $nomCommune;
    }

    /**
     * @return int
     */
    public function getCentroidXEtrs3035()
    {
        return $this->centroidXEtrs3035;
    }

    /**
     * @param int $centroidXEtrs3035
     */
    public function setCentroidXEtrs3035($centroidXEtrs3035)
    {
        $this->centroidXEtrs3035 = $centroidXEtrs3035;
    }

    /**
     * @return int
     */
    public function getCentroidYEtrs3035()
    {
        return $this->centroidYEtrs3035;
    }

    /**
     * @param int $centroidYEtrs3035
     */
    public function setCentroidYEtrs3035($centroidYEtrs3035)
    {
        $this->centroidYEtrs3035 = $centroidYEtrs3035;
    }

    /**
     * @return string
     */
    public function getDateIndiceSupervise()
    {
        return $this->dateIndiceSupervise;
    }

    /**
     * @param string $dateIndiceSupervise
     */
    public function setDateIndiceSupervise($dateIndiceSupervise)
    {
        $this->dateIndiceSupervise = $dateIndiceSupervise;
    }

    /**
     * @return int
     */
    public function getEcheance()
    {
        return $this->echeance;
    }

    /**
     * @param int $echeance
     */
    public function setEcheance($echeance)
    {
        $this->echeance = $echeance;
    }

    /**
     * @return string
     */
    public function getDateEcheance()
    {
        return $this->dateEcheance;
    }

    /**
     * @param string $dateEcheance
     */
    public function setDateEcheance($dateEcheance)
    {
        $this->dateEcheance = $dateEcheance;
    }

    /**
     * @return int
     */
    public function getValeurSsindiceNo2()
    {
        return $this->valeurSsindiceNo2;
    }

    /**
     * @param int $valeurSsindiceNo2
     */
    public function setValeurSsindiceNo2($valeurSsindiceNo2)
    {
        $this->valeurSsindiceNo2 = $valeurSsindiceNo2;
    }

    /**
     * @return int
     */
    public function getValeurSsindiceO3()
    {
        return $this->valeurSsindiceO3;
    }

    /**
     * @param int $valeurSsindiceO3
     */
    public function setValeurSsindiceO3($valeurSsindiceO3)
    {
        $this->valeurSsindiceO3 = $valeurSsindiceO3;
    }

    /**
     * @return int
     */
    public function getValeurSsindicePm10()
    {
        return $this->valeurSsindicePm10;
    }

    /**
     * @param int $valeurSsindicePm10
     */
    public function setValeurSsindicePm10($valeurSsindicePm10)
    {
        $this->valeurSsindicePm10 = $valeurSsindicePm10;
    }

    /**
     * @return int
     */
    public function getValeurSsindiceSo2()
    {
        return $this->valeurSsindiceSo2;
    }

    /**
     * @param int $valeurSsindiceSo2
     */
    public function setValeurSsindiceSo2($valeurSsindiceSo2)
    {
        $this->valeurSsindiceSo2 = $valeurSsindiceSo2;
    }

    /**
     * @return string
     */
    public function getLibelleIndice()
    {
        return $this->libelleIndice;
    }

    /**
     * @param string $libelleIndice
     */
    public function setLibelleIndice($libelleIndice)
    {
        $this->libelleIndice = $libelleIndice;
    }

    /**
     * @return string
     */
    public function getLibelleFamilleIndice()
    {
        return $this->libelleFamilleIndice;
    }

    /**
     * @param string $libelleFamilleIndice
     */
    public function setLibelleFamilleIndice($libelleFamilleIndice)
    {
        $this->libelleFamilleIndice = $libelleFamilleIndice;
    }

    /**
     * @return string
     */
    public function getLibelleQualiteAir()
    {
        return $this->libelleQualiteAir;
    }

    /**
     * @param string $libelleQualiteAir
     */
    public function setLibelleQualiteAir($libelleQualiteAir)
    {
        $this->libelleQualiteAir = $libelleQualiteAir;
    }

    /**
     * @return string
     */
    public function getCouleurCarteGe()
    {
        return $this->couleurCarteGe;
    }

    /**
     * @param string $couleurCarteGe
     */
    public function setCouleurCarteGe($couleurCarteGe)
    {
        $this->couleurCarteGe = $couleurCarteGe;
    }

    /**
     * @return string
     */
    public function getLibellePolluantResponsable()
    {
        return $this->libellePolluantResponsable;
    }

    /**
     * @param string $libellePolluantResponsable
     */
    public function setLibellePolluantResponsable($libellePolluantResponsable)
    {
        $this->libellePolluantResponsable = $libellePolluantResponsable;
    }

    /**
     * @return string
     */
    public function getNotationPolluantResponsable()
    {
        return $this->notationPolluantResponsable;
    }

    /**
     * @param string $notationPolluantResponsable
     */
    public function setNotationPolluantResponsable($notationPolluantResponsable)
    {
        $this->notationPolluantResponsable = $notationPolluantResponsable;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_COMMUNE", type="text", length=65535, nullable=true)
     */
    private $nomCommune;

    /**
     * @var integer
     *
     * @ORM\Column(name="centroid_x_etrs3035", type="integer", nullable=true)
     */
    private $centroidXEtrs3035;

    /**
     * @var integer
     *
     * @ORM\Column(name="centroid_y_etrs3035", type="integer", nullable=true)
     */
    private $centroidYEtrs3035;

    /**
     * @var string
     *
     * @ORM\Column(name="DATE_INDICE_SUPERVISE", type="text", length=65535, nullable=true)
     */
    private $dateIndiceSupervise;

    /**
     * @var integer
     *
     * @ORM\Column(name="ECHEANCE", type="integer", nullable=true)
     */
    private $echeance;

    /**
     * @var string
     *
     * @ORM\Column(name="DATE_ECHEANCE", type="text", length=65535, nullable=true)
     */
    private $dateEcheance;

    /**
     * @var integer
     *
     * @ORM\Column(name="VALEUR_SSINDICE_NO2", type="integer", nullable=true)
     */
    private $valeurSsindiceNo2;

    /**
     * @var integer
     *
     * @ORM\Column(name="VALEUR_SSINDICE_O3", type="integer", nullable=true)
     */
    private $valeurSsindiceO3;

    /**
     * @var integer
     *
     * @ORM\Column(name="VALEUR_SSINDICE_PM10", type="integer", nullable=true)
     */
    private $valeurSsindicePm10;

    /**
     * @var integer
     *
     * @ORM\Column(name="VALEUR_SSINDICE_SO2", type="integer", nullable=true)
     */
    private $valeurSsindiceSo2;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBELLE_INDICE", type="text", length=65535, nullable=true)
     */
    private $libelleIndice;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBELLE_FAMILLE_INDICE", type="text", length=65535, nullable=true)
     */
    private $libelleFamilleIndice;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBELLE_QUALITE_AIR", type="text", length=65535, nullable=true)
     */
    private $libelleQualiteAir;

    /**
     * @var string
     *
     * @ORM\Column(name="COULEUR_CARTE_GE", type="text", length=65535, nullable=true)
     */
    private $couleurCarteGe;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBELLE_POLLUANT_RESPONSABLE", type="text", length=65535, nullable=true)
     */
    private $libellePolluantResponsable;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTATION_POLLUANT_RESPONSABLE", type="text", length=65535, nullable=true)
     */
    private $notationPolluantResponsable;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

