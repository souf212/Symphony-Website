<?php

namespace App\Repository;

use App\Entity\Invoice;
use App\Interfaces\IInvoiceRepo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @extends ServiceEntityRepository<Invoice>
 */
class InvoiceRepository extends ServiceEntityRepository implements IInvoiceRepo
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Invoice::class);
    }
    public function findByUser($user)
    {
        return $this->createQueryBuilder('i')
            ->join('i.client', 'c')
            ->andWhere('c.user = :user')
            ->setParameter('user', $user)
            ->getQuery()
            ->getResult();
    }


//    /**
//     * @return Invoice[] Returns an array of Invoice objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Invoice
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

    public function save(Invoice $invoice): void
    {
        $em = $this->getEntityManager();
        $em->persist($invoice);
        $em->flush();
    }

    public function update(Invoice $invoice): void
    {
        $this->getEntityManager()->flush();
    }
    public function delete(Invoice $invoice): void
    {
        $em = $this->getEntityManager();
        $em->remove($invoice);
        $em->flush();
    }



}
