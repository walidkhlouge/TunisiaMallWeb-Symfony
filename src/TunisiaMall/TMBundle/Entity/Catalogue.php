<?php

namespace TunisiaMall\TMBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Catalogue
 *
 * @ORM\Table(name="catalogue", indexes={@ORM\Index(name="enseigne", columns={"enseigne"})})
 * @ORM\Entity
 */
class Catalogue
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCatalogue", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcatalogue;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=40, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="intitule", type="string", length=50, nullable=false)
     */
    private $intitule;

    /**
     * @var \Enseigne
     *
     * @ORM\ManyToOne(targetEntity="Enseigne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="enseigne", referencedColumnName="nomEnseigne")
     * })
     */
    private $enseigne;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Produit", mappedBy="idcatalogue")
     */
    private $idproduit;
   
     /**
     * @Assert\File(maxSize="1024k")
     */
    public $file;
    
     /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=50, nullable=false)
     */
    public $filename;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idproduit = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    public function __toString() {
        
        return (String)$this->idcatalogue;
    }
   


    /**
     * Get idcatalogue
     *
     * @return integer 
     */
    public function getIdcatalogue()
    {
        return $this->idcatalogue;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Catalogue
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     * @return Catalogue
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string 
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set filename
     *
     * @param string $filename
     * @return Catalogue
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set enseigne
     *
     * @param \TunisiaMall\TMBundle\Entity\Enseigne $enseigne
     * @return Catalogue
     */
    public function setEnseigne(\TunisiaMall\TMBundle\Entity\Enseigne $enseigne = null)
    {
        $this->enseigne = $enseigne;

        return $this;
    }

    /**
     * Get enseigne
     *
     * @return \TunisiaMall\TMBundle\Entity\Enseigne 
     */
    public function getEnseigne()
    {
        return $this->enseigne;
    }

    /**
     * Add idproduit
     *
     * @param \TunisiaMall\TMBundle\Entity\Produit $idproduit
     * @return Catalogue
     */
    public function addIdproduit(\TunisiaMall\TMBundle\Entity\Produit $idproduit)
    {
        $this->idproduit[] = $idproduit;

        return $this;
    }

    /**
     * Remove idproduit
     *
     * @param \TunisiaMall\TMBundle\Entity\Produit $idproduit
     */
    public function removeIdproduit(\TunisiaMall\TMBundle\Entity\Produit $idproduit)
    {
        $this->idproduit->removeElement($idproduit);
    }

    /**
     * Get idproduit
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdproduit()
    {
        return $this->idproduit;
    }
}
