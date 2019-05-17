<?php

namespace App\Repository;

use App\Entity\JoinOrderProduct;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method JoinOrderProduct|null find($id, $lockMode = null, $lockVersion = null)
 * @method JoinOrderProduct|null findOneBy(array $criteria, array $orderBy = null)
 * @method JoinOrderProduct[]    findAll()
 * @method JoinOrderProduct[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JoinOrderProductRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, JoinOrderProduct::class);
    }

    // /**
    //  * @return JoinOrderProduct[] Returns an array of JoinOrderProduct objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?JoinOrderProduct
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
