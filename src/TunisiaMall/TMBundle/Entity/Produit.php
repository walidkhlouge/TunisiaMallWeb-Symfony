<?php

namespace TunisiaMall\TMBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit", indexes={@ORM\Index(name="idEnseigne", columns={"nomEnseigne", "idBoutique"}), @ORM\Index(name="nomEnseigne", columns={"nomEnseigne"}), @ORM\Index(name="idBoutique", columns={"idBoutique"})})
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idProduit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idproduit;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=40, nullable=true)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer", nullable=true)
     */
    private $quantite;

    /**
     * @var float
     *
     * @ORM\Column(name="prixVenteUnitaire", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixventeunitaire;

    /**
     * @var float
     *
     * @ORM\Column(name="tauxReduction", type="float", precision=10, scale=0, nullable=true)
     */
    private $tauxreduction;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=100, nullable=true)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="text", nullable=true)
     */
    private $info;
    
    /**
     * @Assert\File(maxSize="1024k")
     */
    public $file;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=40, nullable=true)
     */
    private $url;

    /**
     * @var integer
     *
     * @ORM\Column(name="ptsfidelite", type="integer", nullable=true)
     */
    private $ptsfidelite;

    /**
     * 
     *
     * @ORM\ManyToOne(targetEntity="Boutique")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idBoutique", referencedColumnName="idBoutique")
     * })
     */
    private $idboutique;

    /**
     * 
     *
     * @ORM\ManyToOne(targetEntity="Enseigne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nomEnseigne", referencedColumnName="nomEnseigne")
     * })
     */
    private $nomenseigne;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Catalogue", inversedBy="idproduit")
     * @ORM\JoinTable(name="prodcat",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idProduit", referencedColumnName="idProduit")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idCatalogue", referencedColumnName="idCatalogue")
     *   }
     * )
     */
    private $idcatalogue;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idcatalogue = new \Doctrine\Common\Collections\ArrayCollection();
    }
  

    /**
     * Get idproduit
     *
     * @return integer 
     */
    public function getIdproduit()
    {
        return $this->idproduit;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Produit
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     * @return Produit
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set prixventeunitaire
     *
     * @param float $prixventeunitaire
     * @return Produit
     */
    public function setPrixventeunitaire($prixventeunitaire)
    {
        $this->prixventeunitaire = $prixventeunitaire;

        return $this;
    }

    /**
     * Get prixventeunitaire
     *
     * @return float 
     */
    public function getPrixventeunitaire()
    {
        return $this->prixventeunitaire;
    }

    /**
     * Set tauxreduction
     *
     * @param float $tauxreduction
     * @return Produit
     */
    public function setTauxreduction($tauxreduction)
    {
        $this->tauxreduction = $tauxreduction;

        return $this;
    }

    /**
     * Get tauxreduction
     *
     * @return float 
     */
    public function getTauxreduction()
    {
        return $this->tauxreduction;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return Produit
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set info
     *
     * @param string $info
     * @return Produit
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string 
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Produit
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set ptsfidelite
     *
     * @param integer $ptsfidelite
     * @return Produit
     */
    public function setPtsfidelite($ptsfidelite)
    {
        $this->ptsfidelite = $ptsfidelite;

        return $this;
    }

    /**
     * Get ptsfidelite
     *
     * @return integer 
     */
    public function getPtsfidelite()
    {
        return $this->ptsfidelite;
    }

    /**
     * Set idboutique
     *
     * @param \TunisiaMall\TMBundle\Entity\Boutique $idboutique
     * @return Produit
     */
    public function setIdboutique(\TunisiaMall\TMBundle\Entity\Boutique $idboutique = null)
    {
        $this->idboutique = $idboutique;

        return $this;
    }

    /**
     * Get idboutique
     *
     * @return \TunisiaMall\TMBundle\Entity\Boutique 
     */
    public function getIdboutique()
    {
        return $this->idboutique;
    }

    /**
     * Set nomenseigne
     *
     * @param \TunisiaMall\TMBundle\Entity\Enseigne $nomenseigne
     * @return Produit
     */
    public function setNomenseigne(\TunisiaMall\TMBundle\Entity\Enseigne $nomenseigne = null)
    {
        $this->nomenseigne = $nomenseigne;

        return $this;
    }

    /**
     * Get nomenseigne
     *
     * @return \TunisiaMall\TMBundle\Entity\Enseigne 
     */
    public function getNomenseigne()
    {
        return $this->nomenseigne;
    }

    /**
     * Add idcatalogue
     *
     * @param \TunisiaMall\TMBundle\Entity\Catalogue $idcatalogue
     * @return Produit
     */
    public function addIdcatalogue(\TunisiaMall\TMBundle\Entity\Catalogue $idcatalogue)
    {
        $this->idcatalogue[] = $idcatalogue;

        return $this;
    }

    /**
     * Remove idcatalogue
     *
     * @param \TunisiaMall\TMBundle\Entity\Catalogue $idcatalogue
     */
    public function removeIdcatalogue(\TunisiaMall\TMBundle\Entity\Catalogue $idcatalogue)
    {
        $this->idcatalogue->removeElement($idcatalogue);
    }

    /**
     * Get idcatalogue
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdcatalogue()
    {
        return $this->idcatalogue;
    }
    
     public function __toString() {
        
        return (String) $this->idproduit;
    }
     public function getWebPath()
    {
        return null === $this->url ? null : $this->getUploadDir().'/'.$this->url;
    }

    protected function getUploadRootDir()
    {
        // le chemin absolu du r?pertoire dans lequel sauvegarder les photos de profil
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
        return 'images/produit';
    }
    
    public function uploadProfilePicture()
    {
        // Nous utilisons le nom de fichier original, donc il est dans la pratique 
        // n?cessaire de le nettoyer pour ?viter les probl?mes de s?curit?

        // move copie le fichier pr?sent chez le client dans le r?pertoire indiqu?.
        $this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());

        // On sauvegarde le nom de fichier
        $this->url = $this->file->getClientOriginalName();
        
        // La propri?t? file ne servira plus
        $this->file = null;
    }


}
