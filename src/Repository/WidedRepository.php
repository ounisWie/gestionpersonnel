<?php

namespace App\Repository;

use App\Entity\Wided;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Wided|null find($id, $lockMode = null, $lockVersion = null)
 * @method Wided|null findOneBy(array $criteria, array $orderBy = null)
 * @method Wided[]    findAll()
 * @method Wided[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WidedRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Wided::class);
    }

    // /**
    //  * @return Wided[] Returns an array of Wided objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Wided
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
