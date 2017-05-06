<?php

namespace TunisiaMall\TMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panier
 *
 * @ORM\Table(name="panier", indexes={@ORM\Index(name="produitpanier", columns={"idProduit"}), @ORM\Index(name="IDX_24CC0DF24CA02A6B", columns={"loginClient"})})
 * @ORM\Entity
 */
class Panier
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
     * @ORM\Column(name="nombre", type="integer", nullable=false)
     */
    private $nombre;

    /**
     * @var \Compte
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Compte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="loginClient", referencedColumnName="login")
     * })
     */
    private $loginclient;

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
     * @return Panier
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
     * Set nombre
     *
     * @param integer $nombre
     * @return Panier
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return integer 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set loginclient
     *
     * @param \TunisiaMall\TMBundle\Entity\Compte $loginclient
     * @return Panier
     */
    public function setLoginclient(\TunisiaMall\TMBundle\Entity\Compte $loginclient)
    {
        $this->loginclient = $loginclient;

        return $this;
    }

    /**
     * Get loginclient
     *
     * @return \TunisiaMall\TMBundle\Entity\Compte 
     */
    public function getLoginclient()
    {
        return $this->loginclient;
    }

    /**
     * Set idproduit
     *
     * @param \TunisiaMall\TMBundle\Entity\Produit $idproduit
     * @return Panier
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
