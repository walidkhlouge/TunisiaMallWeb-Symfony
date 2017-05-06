<?php

namespace TunisiaMall\TMBundle\Entity;
use Doctrine\ORM\EntityRepository;
/**
 * Description of PackspubRepository
 *
 * @author Khaled
 */
class PackspubRepository extends EntityRepository {
    public function NombrePack(){
        $query = $this->getEntityManager()
                ->createQuery("SELECT count(u) as number FROM TunisiaMallTMBundle:Packspub u where u.id NOT IN(SELECT x.idpack FROM TunisiaMallTMBundle:Enseigne x)");
 return $query->getSingleScalarResult();
//        return $query->getResult()[0]['number'];
    }
    public function NombrePackV(){
        $query = $this->getEntityManager()
                ->createQuery("SELECT COUNT(u.loginresponsableenseigne) as number FROM TunisiaMallTMBundle:Enseigne u  where u.idpack<>0 ");
//        return $query->getResult()[0]['number'];
        return $query->getSingleScalarResult();
    }
    public function SommeP(){
        $query = $this->getEntityManager()
                ->createQuery("SELECT sum(u.prix) as somme FROM TunisiaMallTMBundle:Packspub u where u.id IN(SELECT x.idpack FROM TunisiaMallTMBundle:Enseigne x)");
        return $query->getResult()[0]['somme'];
        
    }
}
