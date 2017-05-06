<?php

namespace TunisiaMall\TMBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping as ORM;

/**
 * Boutique
 *
 * @ORM\Table(name="boutique", indexes={@ORM\Index(name="idEnseigne", columns={"nomEnseigne", "loginResponsableBoutique"}), @ORM\Index(name="loginEnseigne", columns={"nomEnseigne"}), @ORM\Index(name="loginResponsableBoutique", columns={"loginResponsableBoutique"})})
 * @ORM\Entity
 */
class Boutique
{
    /**
     * 
     *
     * @ORM\Column(name="idBoutique", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idboutique;

    /**
     * 
     *
     * @ORM\Column(name="intitule", type="string", length=40)
     */
    private $intitule;

    /**
     * 
     *
     * @ORM\Column(name="url", type="string", length=40)
     */
    private $url;

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
     * 
     *
     * @ORM\ManyToOne(targetEntity="Compte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="loginResponsableBoutique", referencedColumnName="login")
     * })
     */
    private $loginresponsableboutique;
    /**
     * @Assert\File(maxSize="1024k")
     */
    public $file;

    public function __toString() {
        
        return (String)$this->idboutique;
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
        return 'GUI/images/boutique';
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


    /**
     * Get idboutique
     *
     * @return integer 
     */
    public function getIdboutique()
    {
        return $this->idboutique;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     * @return Boutique
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
     * Set url
     *
     * @param string $url
     * @return Boutique
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
     * Set nomenseigne
     *
     * @param \TunisiaMall\TMBundle\Entity\Enseigne $nomenseigne
     * @return Boutique
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
     * Set loginresponsableboutique
     *
     * @param \TunisiaMall\TMBundle\Entity\Compte $loginresponsableboutique
     * @return Boutique
     */
    public function setLoginresponsableboutique(\TunisiaMall\TMBundle\Entity\Compte $loginresponsableboutique = null)
    {
        $this->loginresponsableboutique = $loginresponsableboutique;

        return $this;
    }

    /**
     * Get loginresponsableboutique
     *
     * @return \TunisiaMall\TMBundle\Entity\Compte 
     */
    public function getLoginresponsableboutique()
    {
        return $this->loginresponsableboutique;
    }
}
