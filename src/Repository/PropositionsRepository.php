<?php

namespace App\Repository;

use App\Entity\Propositions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Propositions|null find($id, $lockMode = null, $lockVersion = null)
 * @method Propositions|null findOneBy(array $criteria, array $orderBy = null)
 * @method Propositions[]    findAll()
 * @method Propositions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PropositionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Propositions::class);
    }

    // /**
    //  * @return Propositions[] Returns an array of Propositions objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Propositions
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
