<?php

namespace TunisiaMall\TMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Packspub
 *
 * @ORM\Table(name="packspub")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="TunisiaMall\TMBundle\Entity\PackspubRepository")
 */
class Packspub
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=120, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    function getId() {
        return $this->id;
    }

    function getDescription() {
        return $this->description;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrix() {
        return $this->prix;
    }
    function setId($id) {
        $this->id = $id;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }



}
