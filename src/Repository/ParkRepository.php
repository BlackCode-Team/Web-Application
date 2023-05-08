<?php

namespace App\Repository;

use App\Entity\Park;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Park>
 *
 * @method Park|null find($id, $lockMode = null, $lockVersion = null)
 * @method Park|null findOneBy(array $criteria, array $orderBy = null)
 * @method Park[]    findAll()
 * @method Park[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ParkRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Park::class);
    }

    public function save(Park $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Park $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function getTotalSpots(): int
{
    $queryBuilder = $this->createQueryBuilder('p')
        ->select('SUM(p.nbspot) as total_spots');

    $result = $queryBuilder->getQuery()->getSingleScalarResult();

    return $result ? (int) $result : 0;
}
//    /**
//     * @return Park[] Returns an array of Park objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

   public function findOneByid(int $id): ?Park
   {
       return $this->createQueryBuilder('p')
           ->andWhere('p.idpark = :idpark')
           ->setParameter('idpark', $id)
           ->getQuery()
           ->getOneOrNullResult()
       ;
   }
}
