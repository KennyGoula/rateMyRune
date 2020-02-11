<?php

namespace App\Repository;

use App\Entity\RarityName;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method RarityName|null find($id, $lockMode = null, $lockVersion = null)
 * @method RarityName|null findOneBy(array $criteria, array $orderBy = null)
 * @method RarityName[]    findAll()
 * @method RarityName[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RarityNameRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, RarityName::class);
    }

    // /**
    //  * @return RarityName[] Returns an array of RarityName objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RarityName
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
