<?php
namespace TunisiaMall\UserBundle\Entity;
 
use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
 
/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
 
class User extends BaseUser
{
    public function __construct()
    {
        parent::__construct();
        $this->media = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
  /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /** @ORM\Column(name="facebook_id", type="string", length=255, nullable=true) */
    protected $facebook_id;
    /** @ORM\Column(name="facebook_access_token", type="string", length=255, nullable=true) */
    protected $facebook_access_token;
    /** @ORM\Column(name="google_id", type="string", length=255, nullable=true) */
    protected $google_id;
    /** @ORM\Column(name="google_access_token", type="string", length=255, nullable=true) */
    protected $google_access_token;
    /** @ORM\Column(name="twitter_id", type="string", length=255, nullable=true) */
    protected $twitter_id;
    /** @ORM\Column(name="twitter_access_token", type="string", length=255, nullable=true) */
    protected $twitter_access_token;
    /** @ORM\Column(name="instagram_id", type="string", length=255, nullable=true) */
    protected $instagram_id;
    /** @ORM\Column(name="instagram_access_token", type="string", length=255, nullable=true) */
    protected $instagram_access_token;
        /** @ORM\Column(name="github_id", type="string", length=255, nullable=true) */
    protected $github_id;
    /** @ORM\Column(name="github_access_token", type="string", length=255, nullable=true) */
    protected $github_access_token;
        /** @ORM\Column(name="windows_live_id", type="string", length=255, nullable=true) */
    protected $windows_live_id;
    /** @ORM\Column(name="windows_live_access_token", type="string", length=255, nullable=true) */
    protected $windows_live_access_token;
            /** @ORM\Column(name="linkedin_id", type="string", length=255, nullable=true) */
    protected $linkedin_id;
    /** @ORM\Column(name="linkedin_access_token", type="string", length=255, nullable=true) */
    protected $linkedin_access_token;

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
     * @ORM\Column(name="typeC", type="string", length=40, nullable=false)
     */

    
    
   

            
    /**
     * Set facebook_id
     *
     * @param string $facebookId
     * @return User
     */
    public function setFacebookId($facebookId)
    {
        $this->facebook_id = $facebookId;

        return $this;
    }

    /**
     * Get facebook_id
     *
     * @return string 
     */
    public function getFacebookId()
    {
        return $this->facebook_id;
    }

    /**
     * Set facebook_access_token
     *
     * @param string $facebookAccessToken
     * @return User
     */
    public function setFacebookAccessToken($facebookAccessToken)
    {
        $this->facebook_access_token = $facebookAccessToken;

        return $this;
    }

    /**
     * Get facebook_access_token
     *
     * @return string 
     */
    public function getFacebookAccessToken()
    {
        return $this->facebook_access_token;
    }

    /**
     * Set google_id
     *
     * @param string $googleId
     * @return User
     */
    public function setGoogleId($googleId)
    {
        $this->google_id = $googleId;

        return $this;
    }

    /**
     * Get google_id
     *
     * @return string 
     */
    public function getGoogleId()
    {
        return $this->google_id;
    }
    

    /**
     * Set google_access_token
     *
     * @param string $googleAccessToken
     * @return User
     */
    public function setGoogleAccessToken($googleAccessToken)
    {
        $this->google_access_token = $googleAccessToken;

        return $this;
    }

    /**
     * Get google_access_token
     *
     * @return string 
     */
    public function getGoogleAccessToken()
    {
        return $this->google_access_token;
    }

    /**
     * Set twitter_id
     *
     * @param string $twitterId
     * @return User
     */
    public function setTwitterId($twitterId)
    {
        $this->twitter_id = $twitterId;

        return $this;
    }

    /**
     * Get twitter_id
     *
     * @return string 
     */
    public function getTwitterId()
    {
        return $this->twitter_id;
    }

    /**
     * Set twitter_access_token
     *
     * @param string $twitterAccessToken
     * @return User
     */
    public function setTwitterAccessToken($twitterAccessToken)
    {
        $this->twitter_access_token = $twitterAccessToken;

        return $this;
    }

    /**
     * Get twitter_access_token
     *
     * @return string 
     */
    public function getTwitterAccessToken()
    {
        return $this->twitter_access_token;
    }
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
     * Set instagram_id
     *
     * @param string $instagramId
     * @return User
     */
    public function setInstagramId($instagramId)
    {
        $this->instagram_id = $instagramId;

        return $this;
    }

    /**
     * Get instagram_id
     *
     * @return string 
     */
    public function getInstagramId()
    {
        return $this->instagram_id;
    }

    /**
     * Set instagram_access_token
     *
     * @param string $instagramAccessToken
     * @return User
     */
    public function setInstagramAccessToken($instagramAccessToken)
    {
        $this->instagram_access_token = $instagramAccessToken;

        return $this;
    }

    /**
     * Get instagram_access_token
     *
     * @return string 
     */
    public function getInstagramAccessToken()
    {
        return $this->instagram_access_token;
    }

    /**
     * Set github_id
     *
     * @param string $githubId
     * @return User
     */
    public function setGithubId($githubId)
    {
        $this->github_id = $githubId;

        return $this;
    }

    /**
     * Get github_id
     *
     * @return string 
     */
    public function getGithubId()
    {
        return $this->github_id;
    }

    /**
     * Set github_access_token
     *
     * @param string $githubAccessToken
     * @return User
     */
    public function setGithubAccessToken($githubAccessToken)
    {
        $this->github_access_token = $githubAccessToken;

        return $this;
    }

    /**
     * Get github_access_token
     *
     * @return string 
     */
    public function getGithubAccessToken()
    {
        return $this->github_access_token;
    }

    /**
     * Set windows_live_id
     *
     * @param string $windowsLiveId
     * @return User
     */
    public function setWindowsLiveId($windowsLiveId)
    {
        $this->windows_live_id = $windowsLiveId;

        return $this;
    }

    /**
     * Get windows_live_id
     *
     * @return string 
     */
    public function getWindowsLiveId()
    {
        return $this->windows_live_id;
    }

    /**
     * Set windows_live_access_token
     *
     * @param string $windowsLiveAccessToken
     * @return User
     */
    public function setWindowsLiveAccessToken($windowsLiveAccessToken)
    {
        $this->windows_live_access_token = $windowsLiveAccessToken;

        return $this;
    }

    /**
     * Get windows_live_access_token
     *
     * @return string 
     */
    public function getWindowsLiveAccessToken()
    {
        return $this->windows_live_access_token;
    }

    /**
     * Set linkedin_id
     *
     * @param string $linkedinId
     * @return User
     */
    public function setLinkedinId($linkedinId)
    {
        $this->linkedin_id = $linkedinId;

        return $this;
    }

    /**
     * Get linkedin_id
     *
     * @return string 
     */
    public function getLinkedinId()
    {
        return $this->linkedin_id;
    }

    /**
     * Set linkedin_access_token
     *
     * @param string $linkedinAccessToken
     * @return User
     */
    public function setLinkedinAccessToken($linkedinAccessToken)
    {
        $this->linkedin_access_token = $linkedinAccessToken;

        return $this;
    }

    /**
     * Get linkedin_access_token
     *
     * @return string 
     */
    public function getLinkedinAccessToken()
    {
        return $this->linkedin_access_token;
    }
  


}
