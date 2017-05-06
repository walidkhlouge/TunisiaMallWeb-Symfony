<?php

namespace TunisiaMall\TMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande", indexes={@ORM\Index(name="idClient", columns={"loginClient", "idProduit"}), @ORM\Index(name="loginClient", columns={"loginClient"}), @ORM\Index(name="idProduit", columns={"idProduit"})})
 * @ORM\Entity
 */
class Commande
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCommande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idcommande;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseLivraison", type="string", length=40, nullable=false)
     */
    private $adresselivraison;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var string
     *
     * @ORM\Column(name="taille", type="string", length=255, nullable=false)
     */
    private $taille;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timeLivraison", type="datetime", nullable=false)
     */
    private $timelivraison;

    /**
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProduit", referencedColumnName="idProduit")
     * })
     */
    private $idproduit;

    /**
     * @var \Compte
     *
     * @ORM\ManyToOne(targetEntity="Compte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="loginClient", referencedColumnName="login")
     * })
     */
    private $loginclient;



    /**
     * Set idcommande
     *
     * @param integer $idcommande
     * @return Commande
     */
    public function setIdcommande($idcommande)
    {
        $this->idcommande = $idcommande;

        return $this;
    }

    /**
     * Get idcommande
     *
     * @return integer 
     */
    public function getIdcommande()
    {
        return $this->idcommande;
    }

    /**
     * Set adresselivraison
     *
     * @param string $adresselivraison
     * @return Commande
     */
    public function setAdresselivraison($adresselivraison)
    {
        $this->adresselivraison = $adresselivraison;

        return $this;
    }

    /**
     * Get adresselivraison
     *
     * @return string 
     */
    public function getAdresselivraison()
    {
        return $this->adresselivraison;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     * @return Commande
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
     * Set taille
     *
     * @param string $taille
     * @return Commande
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
     * Set timelivraison
     *
     * @param \DateTime $timelivraison
     * @return Commande
     */
    public function setTimelivraison($timelivraison)
    {
        $this->timelivraison = $timelivraison;

        return $this;
    }

    /**
     * Get timelivraison
     *
     * @return \DateTime 
     */
    public function getTimelivraison()
    {
        return $this->timelivraison;
    }

    /**
     * Set idproduit
     *
     * @param \TunisiaMall\TMBundle\Entity\Produit $idproduit
     * @return Commande
     */
    public function setIdproduit(\TunisiaMall\TMBundle\Entity\Produit $idproduit = null)
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

    /**
     * Set loginclient
     *
     * @param \TunisiaMall\TMBundle\Entity\Compte $loginclient
     * @return Commande
     */
    public function setLoginclient(\TunisiaMall\TMBundle\Entity\Compte $loginclient = null)
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
}
