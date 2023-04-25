<?php

namespace App\Repository;

use App\Entity\Vehicule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Vehicule>
 *
 * @method Vehicule|null find($id, $lockMode = null, $lockVersion = null)
 * @method Vehicule|null findOneBy(array $criteria, array $orderBy = null)
 * @method Vehicule[]    findAll()
 * @method Vehicule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VehiculeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Vehicule::class);
    }

    public function save(Vehicule $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Vehicule $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    public function getTotalTypeVoiture(): int
    {
        $queryBuilder = $this->createQueryBuilder('v')
            ->select('SUM(v.type) as total_cars')
            ->where('v.type = :voiture')
            ->setParameter('voiture', 'voiture');
    
        $result = $queryBuilder->getQuery()->getSingleScalarResult();
    
        return $result ? (int) $result : 0;
    }

    public function getTotalTypeTrottinette(): int
{
    $queryBuilder = $this->createQueryBuilder('v')
        ->select('SUM(v.type) as total_trottinettes')
        ->where('v.type = :trottinette')
        ->setParameter('trottinette', 'trottinette');

    $result = $queryBuilder->getQuery()->getSingleScalarResult();

    return $result ? (int) $result : 0;
}



 /*   public function findByLocationOrderByPrix(string $parkName)
    {
        $entitymanager = $this->getEntityManager();
        $queryBuilder = $entitymanager->createQueryBuilder();
    
        $queryBuilder->from(Vehicule::class, 'v')
            ->join('v.idpark', 'p')
            ->where('p.nom = :nom')
            ->andWhere('v.status = :status')
            ->setParameter('nom', $parkName)
            ->setParameter('status', 'disponible')
            ->orderBy('v.prix', 'ASC');
        
        $vehicules = $queryBuilder->getQuery()->getResult();
    
        return $vehicules;
    }*/



//    /**
//     * @return Vehicule[] Returns an array of Vehicule objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('v.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Vehicule
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
