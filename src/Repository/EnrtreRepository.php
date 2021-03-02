<?php

namespace App\Repository;

use App\Entity\Enrtre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Enrtre|null find($id, $lockMode = null, $lockVersion = null)
 * @method Enrtre|null findOneBy(array $criteria, array $orderBy = null)
 * @method Enrtre[]    findAll()
 * @method Enrtre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnrtreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Enrtre::class);
    }

    // /**
    //  * @return Enrtre[] Returns an array of Enrtre objects
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
    public function findOneBySomeField($value): ?Enrtre
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
