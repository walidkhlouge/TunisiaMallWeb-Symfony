<?php

namespace TunisiaMall\TMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;

/**
 * Enseigne
 *
 * @ORM\Table(name="enseigne", indexes={@ORM\Index(name="idResponsableEnseigne", columns={"loginResponsableEnseigne"})})
 * @ORM\Entity
 */
class Enseigne {

    /**
     * 
     *
     * @ORM\Column(name="nomEnseigne", type="string", length=40, nullable=false)
     * @ORM\Id
     * 
     */
    private $nomenseigne;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=40, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=99, nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="text", nullable=true)
     */
    private $info;

    /**
     * @var integer
     *
     * @ORM\Column(name="idPack", type="integer", nullable=true)
     */
    private $idpack;

    /**
     * 
     *
     * @ORM\ManyToOne(targetEntity="Compte")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="loginResponsableEnseigne", referencedColumnName="login")
     * })
     */
    private $loginresponsableenseigne;

    /**
     * @Assert\File(maxSize="500k")
     */
    public $file;

    function __toString() {
        return $this->nomenseigne;
    }

    

    function setLoginresponsableenseigne($loginresponsableenseigne) {
        $this->loginresponsableenseigne = $loginresponsableenseigne;
    }

    public function getWebPath() {
        return null === $this->url ? null : $this->getUploadDir() . '/' . $this->url;
    }

    protected function getUploadRootDir() {
        // le chemin absolu du répertoire dans lequel sauvegarder les photos de profil
        return __DIR__ . '/../../../../web/' . $this->getUploadDir();
    }

    protected function getUploadDir() {
        // get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
        return 'images/enseigne';
    }

    public function uploadProfilePicture() {
        // Nous utilisons le nom de fichier original, donc il est dans la pratique 
        // nécessaire de le nettoyer pour éviter les problèmes de sécurité
        // move copie le fichier présent chez le client dans le répertoire indiqué.
        $this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());
        // On sauvegarde le nom de fichier
        $this->url = $this->file->getClientOriginalName();
        // La propriété file ne servira plus
        $this->file = null;
    }


    /**
     * Set nomenseigne
     *
     * @param string $nomenseigne
     * @return Enseigne
     */
    public function setNomenseigne($nomenseigne)
    {
        $this->nomenseigne = $nomenseigne;

        return $this;
    }

    /**
     * Get nomenseigne
     *
     * @return string 
     */
    public function getNomenseigne()
    {
        return $this->nomenseigne;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Enseigne
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Enseigne
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
     * Set info
     *
     * @param string $info
     * @return Enseigne
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
     * Set idpack
     *
     * @param integer $idpack
     * @return Enseigne
     */
    public function setIdpack($idpack)
    {
        $this->idpack = $idpack;

        return $this;
    }

    /**
     * Get idpack
     *
     * @return integer 
     */
    public function getIdpack()
    {
        return $this->idpack;
    }

    /**
     * Get loginresponsableenseigne
     *
     * @return \TunisiaMall\TMBundle\Entity\Compte 
     */
    public function getLoginresponsableenseigne()
    {
        return $this->loginresponsableenseigne;
    }
}
