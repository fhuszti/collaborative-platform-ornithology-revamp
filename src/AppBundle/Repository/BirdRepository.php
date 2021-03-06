<?php

namespace AppBundle\Repository;

/**
 * BirdRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BirdRepository extends \Doctrine\ORM\EntityRepository
{

	public function myFindBy($search)
	{
	  $qb = $this->createQueryBuilder('a');

	  $qb
	    ->orWhere('a.family LIKE :search')
	    ->orWhere('a.commonName LIKE :search')
	    ->setParameter('search', $search.'%')
	    ->setMaxResults(20)
	  ;

	  return $qb
	    ->getQuery()
	    ->getResult()
	  ;
	}
}
