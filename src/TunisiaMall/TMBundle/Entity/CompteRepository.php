<?php
namespace TunisiaMall\TMBundle\Entity;
use Doctrine\ORM\EntityRepository;
class CompteRepository extends EntityRepository {
    public function bloquerDebloquerUtilisateur($login, $etat){
        if("Not Activated" == $etat){
            $query = $this->getEntityManager()
                ->createQuery("update TunisiaMallTMBundle:Compte u set u.etat = 'Activated' where u.login = ?1");
        }else{
            $query = $this->getEntityManager()
                ->createQuery("update TunisiaMallTMBundle:Compte u set u.etat = 'Not Activated' where u.login = ?1");
        }
        $query->execute(array(1=>$login));
    }
    public function UserType($type){
    
	
         $query=$this->getEntityManager()
            ->createQuery("SELECT count(u) as number FROM TunisiaMallTMBundle:Compte u where u.type=:type")
            ->setParameter('type',$type);
    //  return $query->getResult();
        return $query->getResult()[0]['number'];
  
 }
  public function accepterrefuserUtilisateur($login, $etat){
        if("Not Activated" == $etat){
            $query = $this->getEntityManager()
                ->createQuery("update TunisiaMallTMBundle:Compte u set u.etat = 'Activated' where u.login = ?1");
        }else{
            $query = $this->getEntityManager()
                ->createQuery("update TunisiaMallTMBundle:Compte u set u.etat = 'Not Activated' where u.login = ?1");
        }
        $query->execute(array(1=>$login));
    }
     public function listedemandeUtilisateur(){
            $query = $this->getEntityManager()
            ->createQuery("select u from TunisiaMallTMBundle:Compte u where (u.etat = 'Not Activated' )and (u.type = 'respensableEnseigne' or u.type='responsableBoutique')");
        return $query->getResult();
    }
     public function findByLogin($login) {
        
        $query=$this->getEntityManager()->createQuery("select n from  TunisiaMallTMBundle:Compte n where n.login=:login")
                ->setParameter('login', $login);
        return $query->getResult();
        
    }  
}
