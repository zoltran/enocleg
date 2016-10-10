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
    public function findPageForUser($miasto)
    {
//        var_dump($object); die;

        $qb = $this->getEntityManager()->createQueryBuilder();

        $qb->add('select', 'cit')
            ->from('AppBundle\Entity\Object', 'obj')
            ->join('AppBundle\Entity\Miasto', 'cit', 'WITH', 'obj.obCity = cit.miastoId')
            ->where('obj.obId = :object')
            ->setParameter('object', $miasto);
//        var_dump($qb->getDQL()); die;

         $query = $qb->getQuery();
        return $query ->execute();
    }
}
