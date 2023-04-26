<?php

namespace App\Repository;

use App\Entity\Badge;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;


/**
 * @extends ServiceEntityRepository<Badge>
 *
 * @method Badge|null find($id, $lockMode = null, $lockVersion = null)
 * @method Badge|null findOneBy(array $criteria, array $orderBy = null)
 * @method Badge[]    findAll()
 * @method Badge[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BadgeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Badge::class);
    }

    public function save(Badge $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Badge $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

   /**
    * @return Badge[] Returns an array of Badge objects
    */
   public function findBadgeByNom($searchValue): array
   {
       return $this->createQueryBuilder('b')
           ->andWhere('b.typebadge like :val')
           ->setParameter('val', '%'.$searchValue.'%')
           ->getQuery()
           ->getResult()
       ;
   }

//    public function findOneBySomeField($value): ?Badge
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

    public function OrderByNbpointDESC(){
        return $this->createQueryBuilder('s')
            ->orderBy('s.nbpoint', 'DESC')
            ->getQuery()->getResult();
    }

    public function OrderByNbpointASC(){
        return $this->createQueryBuilder('x')
            ->orderBy('x.nbpoint', 'ASC')
            ->getQuery()->getResult();
    }

//     /**
//      * @return Badge[]
//      */
//     public function findBadgeByNom($sujet){
//         return $this->createQueryBuilder('ex')
//             ->andWhere('ex.typebadge LIKE :sujet ')
//             ->setParameter('sujet', '%'.$sujet.'%')
//             ->getQuery()
//             ->getResult();
//     }
}



