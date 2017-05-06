<?php

namespace TunisiaMall\TMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Compte
 *
 * @ORM\Table(name="compte")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="TunisiaMall\TMBundle\Entity\CompteRepository")
 */
class Compte {

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=40, nullable=false)
     * @ORM\Id
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="pwd", type="string", length=40, nullable=false)
     */
    private $pwd;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=40, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=40, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseMail", type="string", length=40, nullable=false)
     */
    private $adressemail;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=20, nullable=true)
     */
    private $sexe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateNaissance", type="date", nullable=true)
     */
    private $datenaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=20, nullable=false)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=100, nullable=true)
     */
    private $photo;



    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set pwd
     *
     * @param string $pwd
     * @return Compte
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;

        return $this;
    }
      /**
     * Set login
     *
     * @param string $login
     * @return Compte
     */
    function setLogin($login) {
        $this->login = $login;
    }

        /**
     * Get pwd
     *
     * @return string 
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Compte
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
     * Set prenom
     *
     * @param string $prenom
     * @return Compte
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set adressemail
     *
     * @param string $adressemail
     * @return Compte
     */
    public function setAdressemail($adressemail)
    {
        $this->adressemail = $adressemail;

        return $this;
    }

    /**
     * Get adressemail
     *
     * @return string 
     */
    public function getAdressemail()
    {
        return $this->adressemail;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Compte
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
     * Set sexe
     *
     * @param string $sexe
     * @return Compte
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set datenaissance
     *
     * @param \DateTime $datenaissance
     * @return Compte
     */
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    /**
     * Get datenaissance
     *
     * @return \DateTime 
     */
    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return Compte
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Compte
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }
    public function __toString()
{
    return (string) $this->getLogin();
}
}
