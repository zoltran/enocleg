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
    public function getTestowyObiekt($name)
    {
        die('a');
        $q= $this->createQueryBuilder('obj')
            ->addOrderBy('obj.obname', 'DESC');
            $query= $q->getQuery();
            var_dump($query->getDQL());die;
            return $query->execute();

            
    }
}
