<?php

namespace App\Repository;

use App\Entity\RuneSetName;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method RuneSetName|null find($id, $lockMode = null, $lockVersion = null)
 * @method RuneSetName|null findOneBy(array $criteria, array $orderBy = null)
 * @method RuneSetName[]    findAll()
 * @method RuneSetName[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RuneSetNameRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, RuneSetName::class);
    }

    // /**
    //  * @return RuneSetName[] Returns an array of RuneSetName objects
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
    public function findOneBySomeField($value): ?RuneSetName
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
