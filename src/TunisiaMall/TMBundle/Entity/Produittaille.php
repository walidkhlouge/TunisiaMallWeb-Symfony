<?php

namespace TunisiaMall\TMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produittaille
 *
 * @ORM\Table(name="produittaille", indexes={@ORM\Index(name="IDX_CCF40030391C87D5", columns={"idProduit"})})
 * @ORM\Entity
 */
class Produittaille
{
    /**
     * @var string
     *
     * @ORM\Column(name="taille", type="string", length=11, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $taille;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var \Produit
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProduit", referencedColumnName="idProduit")
     * })
     */
    private $idproduit;



    /**
     * Set taille
     *
     * @param string $taille
     * @return Produittaille
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return string 
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     * @return Produittaille
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
     * Set idproduit
     *
     * @param \TunisiaMall\TMBundle\Entity\Produit $idproduit
     * @return Produittaille
     */
    public function setIdproduit(\TunisiaMall\TMBundle\Entity\Produit $idproduit)
    {
        $this->idproduit = $idproduit;

        return $this;
    }

    /**
     * Get idproduit
     *
     * @return \TunisiaMall\TMBundle\Entity\Produit 
     */
    public function getIdproduit()
    {
        return $this->idproduit;
    }
}
