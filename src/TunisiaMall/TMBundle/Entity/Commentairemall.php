<?php

namespace TunisiaMall\TMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentairemall
 *
 * @ORM\Table(name="commentairemall", indexes={@ORM\Index(name="client", columns={"client"})})
 * @ORM\Entity
 */
class Commentairemall
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCommentaireM", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcommentairem;

    /**
     * @var string
     *
     * @ORM\Column(name="Commentaire", type="text", nullable=false)
     */
    private $commentaire;

    /**
     * @var \Compte
     *
     * @ORM\ManyToOne(targetEntity="Compte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client", referencedColumnName="login")
     * })
     */
    private $client;



    /**
     * Get idcommentairem
     *
     * @return integer 
     */
    public function getIdcommentairem()
    {
        return $this->idcommentairem;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Commentairemall
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set client
     *
     * @param \TunisiaMall\TMBundle\Entity\Compte $client
     * @return Commentairemall
     */
    public function setClient(\TunisiaMall\TMBundle\Entity\Compte $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \TunisiaMall\TMBundle\Entity\Compte 
     */
    public function getClient()
    {
        return $this->client;
    }
}
