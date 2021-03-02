<?php

namespace App\Repository;

use App\Entity\Entre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Entre|null find($id, $lockMode = null, $lockVersion = null)
 * @method Entre|null findOneBy(array $criteria, array $orderBy = null)
 * @method Entre[]    findAll()
 * @method Entre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EntreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Entre::class);
    }

    // /**
    //  * @return Entre[] Returns an array of Entre objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Entre
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
