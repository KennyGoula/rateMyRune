<?php

namespace App\Repository;

use App\Entity\StatName;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method StatName|null find($id, $lockMode = null, $lockVersion = null)
 * @method StatName|null findOneBy(array $criteria, array $orderBy = null)
 * @method StatName[]    findAll()
 * @method StatName[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StatNameRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, StatName::class);
    }

    // /**
    //  * @return StatName[] Returns an array of StatName objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?StatName
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
