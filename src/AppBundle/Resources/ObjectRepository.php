<?php

namespace AppBundle\Resources;

use Doctrine\ORM\EntityRepository;

/**
 * ObjectRepository
 * 
 * This class was generated by the PhpStorm "Php Annotations" Plugin. Add your own custom
 * repository methods below.
 */
class ObjectRepository extends EntityRepository
{
    /**
     * @return array
     */
    public function findPageForUser()
    {
//            $dql = "SELECT cit.miastoName FROM AppBundle\Entity\Object obj, AppBundle\Entity\Miasto cit WHERE obj.obId = '1792'";

//        $query = $this->getEntityManager()->createQuery($dql);
//        return $query->execute();
//        $qb = $this->createQueryBuilder('obj')
//            ->where('obj.obname = :obname')
////            ->where('obj.obid = :obid')
//            ->setParameter('obname', 'Willa Rawa')
////            ->setParameter('obid', $obid)
//            ->getQuery();
//
//
////        var_dump($qb->getDQL());die;
//        $query = $qb->getResult();
//
//        return $query;
    }
}
