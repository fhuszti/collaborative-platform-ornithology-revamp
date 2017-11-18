<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use AppBundle\Entity\Observation;

/**
 * Bird
 *
 * @ORM\Table(name="bird")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BirdRepository")
 */
class Bird
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="regne", type="string", length=255)
     */
    private $regne;

    /**
     * @var string
     *
     * @ORM\Column(name="phylum", type="string", length=255)
     */
    private $phylum;

    /**
     * @var string
     *
     * @ORM\Column(name="classe", type="string", length=255)
     */
    private $classe;

    /**
     * @var string
     *
     * @ORM\Column(name="ordre", type="string", length=255)
     */
    private $ordre;

    /**
     * @var string
     *
     * @ORM\Column(name="famille", type="string", length=255)
     */
    private $famille;

    /**
     * @var string
     *
     * @ORM\Column(name="cd_nom", type="integer")
     */
    private $cd_nom;

    /**
     * @var string
     *
     * @ORM\Column(name="cd_taxsup", type="integer")
     */
    private $cd_taxsup;

    /**
     * @var string
     *
     * @ORM\Column(name="cd_ref", type="integer")
     */
    private $cd_ref;

    /**
     * @var string
     *
     * @ORM\Column(name="rang", type="string", length=255)
     */
    private $rang;

    /**
     * @var string
     *
     * @ORM\Column(name="lb_nom", type="string", length=255)
     */
    private $lb_nom;

    /**
     * @var string
     *
     * @ORM\Column(name="lb_auteur", type="string", length=255, nullable=true)
     */
    private $lb_auteur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_complet", type="string", length=255)
     */
    private $nom_complet;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_valide", type="string", length=255)
     */
    private $nom_valide;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_vern", type="string", length=255, nullable=true)
     */
    private $nom_vern;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_vern_eng", type="string", length=255, nullable=true)
     */
    private $nom_vern_eng;

    /**
     * @var string
     *
     * @ORM\Column(name="habitat", type="integer")
     */
    private $habitat;

    /**
     * @var string
     *
     * @ORM\Column(name="fr", type="string", length=255, nullable=true)
     */
    private $fr;

    /**
     * @var string
     *
     * @ORM\Column(name="gf", type="string", length=255, nullable=true)
     */
    private $gf;

    /**
     * @var string
     *
     * @ORM\Column(name="mar", type="string", length=255, nullable=true)
     */
    private $mar;

    /**
     * @var string
     *
     * @ORM\Column(name="gua", type="string", length=255, nullable=true)
     */
    private $gua;

    /**
     * @var string
     *
     * @ORM\Column(name="sm", type="string", length=255, nullable=true)
     */
    private $sm;

    /**
     * @var string
     *
     * @ORM\Column(name="sb", type="string", length=255, nullable=true)
     */
    private $sb;

    /**
     * @var string
     *
     * @ORM\Column(name="spm", type="string", length=255, nullable=true)
     */
    private $spm;

    /**
     * @var string
     *
     * @ORM\Column(name="may", type="string", length=255, nullable=true)
     */
    private $may;

    /**
     * @var string
     *
     * @ORM\Column(name="epa", type="string", length=255, nullable=true)
     */
    private $epa;

    /**
     * @var string
     *
     * @ORM\Column(name="reu", type="string", length=255, nullable=true)
     */
    private $reu;

    /**
     * @var string
     *
     * @ORM\Column(name="sa", type="string", length=255, nullable=true)
     */
    private $sa;

    /**
     * @var string
     *
     * @ORM\Column(name="ta", type="string", length=255, nullable=true)
     */
    private $ta;

    /**
     * @var string
     *
     * @ORM\Column(name="taaf", type="string", length=255, nullable=true)
     */
    private $taaf;

    /**
     * @var string
     *
     * @ORM\Column(name="nc", type="string", length=255, nullable=true)
     */
    private $nc;

    /**
     * @var string
     *
     * @ORM\Column(name="wf", type="string", length=255, nullable=true)
     */
    private $wf;

    /**
     * @var string
     *
     * @ORM\Column(name="pf", type="string", length=255, nullable=true)
     */
    private $pf;

    /**
     * @var string
     *
     * @ORM\Column(name="cli", type="string", length=255, nullable=true)
     */
    private $cli;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Observation", mappedBy="bird", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     * @Assert\Valid()
     */
    private $observations;



    /**
     * Constructor
     */
    public function __construct()
    {
        $this->observations = new ArrayCollection();
    }



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set regne
     *
     * @param string $regne
     *
     * @return Bird
     */
    public function setRegne($regne)
    {
        $this->regne = $regne;

        return $this;
    }

    /**
     * Get regne
     *
     * @return string
     */
    public function getRegne()
    {
        return $this->regne;
    }

    /**
     * Set phylum
     *
     * @param string $phylum
     *
     * @return Bird
     */
    public function setPhylum($phylum)
    {
        $this->phylum = $phylum;

        return $this;
    }

    /**
     * Get phylum
     *
     * @return string
     */
    public function getPhylum()
    {
        return $this->phylum;
    }

    /**
     * Set classe
     *
     * @param string $classe
     *
     * @return Bird
     */
    public function setClasse($classe)
    {
        $this->classe = $classe;

        return $this;
    }

    /**
     * Get classe
     *
     * @return string
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Set ordre
     *
     * @param string $ordre
     *
     * @return Bird
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;

        return $this;
    }

    /**
     * Get ordre
     *
     * @return string
     */
    public function getOrdre()
    {
        return $this->ordre;
    }

    /**
     * Set famille
     *
     * @param string $famille
     *
     * @return Bird
     */
    public function setFamille($famille)
    {
        $this->famille = $famille;

        return $this;
    }

    /**
     * Get famille
     *
     * @return string
     */
    public function getFamille()
    {
        return $this->famille;
    }

    /**
     * Set cdNom
     *
     * @param string $cdNom
     *
     * @return Bird
     */
    public function setCdNom($cdNom)
    {
        $this->cd_nom = $cdNom;

        return $this;
    }

    /**
     * Get cdNom
     *
     * @return string
     */
    public function getCdNom()
    {
        return $this->cd_nom;
    }

    /**
     * Set cdTaxsup
     *
     * @param string $cdTaxsup
     *
     * @return Bird
     */
    public function setCdTaxsup($cdTaxsup)
    {
        $this->cd_taxsup = $cdTaxsup;

        return $this;
    }

    /**
     * Get cdTaxsup
     *
     * @return string
     */
    public function getCdTaxsup()
    {
        return $this->cd_taxsup;
    }

    /**
     * Set cdRef
     *
     * @param string $cdRef
     *
     * @return Bird
     */
    public function setCdRef($cdRef)
    {
        $this->cd_ref = $cdRef;

        return $this;
    }

    /**
     * Get cdRef
     *
     * @return string
     */
    public function getCdRef()
    {
        return $this->cd_ref;
    }

    /**
     * Set rang
     *
     * @param string $rang
     *
     * @return Bird
     */
    public function setRang($rang)
    {
        $this->rang = $rang;

        return $this;
    }

    /**
     * Get rang
     *
     * @return string
     */
    public function getRang()
    {
        return $this->rang;
    }

    /**
     * Set lbNom
     *
     * @param string $lbNom
     *
     * @return Bird
     */
    public function setLbNom($lbNom)
    {
        $this->lb_nom = $lbNom;

        return $this;
    }

    /**
     * Get lbNom
     *
     * @return string
     */
    public function getLbNom()
    {
        return $this->lb_nom;
    }

    /**
     * Set lbAuteur
     *
     * @param string $lbAuteur
     *
     * @return Bird
     */
    public function setLbAuteur($lbAuteur)
    {
        $this->lb_auteur = $lbAuteur;

        return $this;
    }

    /**
     * Get lbAuteur
     *
     * @return string
     */
    public function getLbAuteur()
    {
        return $this->lb_auteur;
    }

    /**
     * Set nomComplet
     *
     * @param string $nomComplet
     *
     * @return Bird
     */
    public function setNomComplet($nomComplet)
    {
        $this->nom_complet = $nomComplet;

        return $this;
    }

    /**
     * Get nomComplet
     *
     * @return string
     */
    public function getNomComplet()
    {
        return $this->nom_complet;
    }

    /**
     * Set nomValide
     *
     * @param string $nomValide
     *
     * @return Bird
     */
    public function setNomValide($nomValide)
    {
        $this->nom_valide = $nomValide;

        return $this;
    }

    /**
     * Get nomValide
     *
     * @return string
     */
    public function getNomValide()
    {
        return $this->nom_valide;
    }

    /**
     * Set nomVern
     *
     * @param string $nomVern
     *
     * @return Bird
     */
    public function setNomVern($nomVern)
    {
        $this->nom_vern = $nomVern;

        return $this;
    }

    /**
     * Get nomVern
     *
     * @return string
     */
    public function getNomVern()
    {
        return $this->nom_vern;
    }

    /**
     * Set nomVernEng
     *
     * @param string $nomVernEng
     *
     * @return Bird
     */
    public function setNomVernEng($nomVernEng)
    {
        $this->nom_vern_eng = $nomVernEng;

        return $this;
    }

    /**
     * Get nomVernEng
     *
     * @return string
     */
    public function getNomVernEng()
    {
        return $this->nom_vern_eng;
    }

    /**
     * Set habitat
     *
     * @param string $habitat
     *
     * @return Bird
     */
    public function setHabitat($habitat)
    {
        $this->habitat = $habitat;

        return $this;
    }

    /**
     * Get habitat
     *
     * @return string
     */
    public function getHabitat()
    {
        return $this->habitat;
    }

    /**
     * Set fr
     *
     * @param string $fr
     *
     * @return Bird
     */
    public function setFr($fr)
    {
        $this->fr = $fr;

        return $this;
    }

    /**
     * Get fr
     *
     * @return string
     */
    public function getFr()
    {
        return $this->fr;
    }

    /**
     * Set gf
     *
     * @param string $gf
     *
     * @return Bird
     */
    public function setGf($gf)
    {
        $this->gf = $gf;

        return $this;
    }

    /**
     * Get gf
     *
     * @return string
     */
    public function getGf()
    {
        return $this->gf;
    }

    /**
     * Set mar
     *
     * @param string $mar
     *
     * @return Bird
     */
    public function setMar($mar)
    {
        $this->mar = $mar;

        return $this;
    }

    /**
     * Get mar
     *
     * @return string
     */
    public function getMar()
    {
        return $this->mar;
    }

    /**
     * Set gua
     *
     * @param string $gua
     *
     * @return Bird
     */
    public function setGua($gua)
    {
        $this->gua = $gua;

        return $this;
    }

    /**
     * Get gua
     *
     * @return string
     */
    public function getGua()
    {
        return $this->gua;
    }

    /**
     * Set sm
     *
     * @param string $sm
     *
     * @return Bird
     */
    public function setSm($sm)
    {
        $this->sm = $sm;

        return $this;
    }

    /**
     * Get sm
     *
     * @return string
     */
    public function getSm()
    {
        return $this->sm;
    }

    /**
     * Set sb
     *
     * @param string $sb
     *
     * @return Bird
     */
    public function setSb($sb)
    {
        $this->sb = $sb;

        return $this;
    }

    /**
     * Get sb
     *
     * @return string
     */
    public function getSb()
    {
        return $this->sb;
    }

    /**
     * Set spm
     *
     * @param string $spm
     *
     * @return Bird
     */
    public function setSpm($spm)
    {
        $this->spm = $spm;

        return $this;
    }

    /**
     * Get spm
     *
     * @return string
     */
    public function getSpm()
    {
        return $this->spm;
    }

    /**
     * Set may
     *
     * @param string $may
     *
     * @return Bird
     */
    public function setMay($may)
    {
        $this->may = $may;

        return $this;
    }

    /**
     * Get may
     *
     * @return string
     */
    public function getMay()
    {
        return $this->may;
    }

    /**
     * Set epa
     *
     * @param string $epa
     *
     * @return Bird
     */
    public function setEpa($epa)
    {
        $this->epa = $epa;

        return $this;
    }

    /**
     * Get epa
     *
     * @return string
     */
    public function getEpa()
    {
        return $this->epa;
    }

    /**
     * Set reu
     *
     * @param string $reu
     *
     * @return Bird
     */
    public function setReu($reu)
    {
        $this->reu = $reu;

        return $this;
    }

    /**
     * Get reu
     *
     * @return string
     */
    public function getReu()
    {
        return $this->reu;
    }

    /**
     * Set sa
     *
     * @param string $sa
     *
     * @return Bird
     */
    public function setSa($sa)
    {
        $this->sa = $sa;

        return $this;
    }

    /**
     * Get sa
     *
     * @return string
     */
    public function getSa()
    {
        return $this->sa;
    }

    /**
     * Set ta
     *
     * @param string $ta
     *
     * @return Bird
     */
    public function setTa($ta)
    {
        $this->ta = $ta;

        return $this;
    }

    /**
     * Get ta
     *
     * @return string
     */
    public function getTa()
    {
        return $this->ta;
    }

    /**
     * Set taaf
     *
     * @param string $taaf
     *
     * @return Bird
     */
    public function setTaaf($taaf)
    {
        $this->taaf = $taaf;

        return $this;
    }

    /**
     * Get taaf
     *
     * @return string
     */
    public function getTaaf()
    {
        return $this->taaf;
    }

    /**
     * Set nc
     *
     * @param string $nc
     *
     * @return Bird
     */
    public function setNc($nc)
    {
        $this->nc = $nc;

        return $this;
    }

    /**
     * Get nc
     *
     * @return string
     */
    public function getNc()
    {
        return $this->nc;
    }

    /**
     * Set wf
     *
     * @param string $wf
     *
     * @return Bird
     */
    public function setWf($wf)
    {
        $this->wf = $wf;

        return $this;
    }

    /**
     * Get wf
     *
     * @return string
     */
    public function getWf()
    {
        return $this->wf;
    }

    /**
     * Set pf
     *
     * @param string $pf
     *
     * @return Bird
     */
    public function setPf($pf)
    {
        $this->pf = $pf;

        return $this;
    }

    /**
     * Get pf
     *
     * @return string
     */
    public function getPf()
    {
        return $this->pf;
    }

    /**
     * Set cli
     *
     * @param string $cli
     *
     * @return Bird
     */
    public function setCli($cli)
    {
        $this->cli = $cli;

        return $this;
    }

    /**
     * Get cli
     *
     * @return string
     */
    public function getCli()
    {
        return $this->cli;
    }

    /**
     * Add observation
     *
     * @param \AppBundle\Entity\Observation $observation
     *
     * @return Bird
     */
    public function addObservation(Observation $observation)
    {
        $this->observations[] = $observation;

        return $this;
    }

    /**
     * Remove observation
     *
     * @param \AppBundle\Entity\Observation $observation
     */
    public function removeObservation(Observation $observation)
    {
        $this->observations->removeElement($observation);
    }

    /**
     * Get observations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getObservations()
    {
        return $this->observations;
    }
}
