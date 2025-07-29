<?php

namespace App\Repository;

use App\Entity\Client;
use App\Interfaces\IClientService;
use App\Interfaces\IClientRepo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @extends ServiceEntityRepository<Client>
 */
class ClientRepository extends ServiceEntityRepository implements IClientRepo
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Client::class);
    }

    //    /**
    //     * @return Client[] Returns an array of Client objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('c.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Client
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
    public function save(Client $client): void
    {
        $em = $this->getEntityManager();
        $em->persist($client);
        $em->flush();
    }

    public function update(Client $client): void
    {
        $this->getEntityManager()->flush();
    }

    public function delete(Client $client): void
    {
        $em = $this->getEntityManager();
        $em->remove($client);
        $em->flush();
    }

    public function findByUser(UserInterface $user): array
    {
        return $this->findBy(['user' => $user]);
    }
}
