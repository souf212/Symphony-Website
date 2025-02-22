<?php

namespace App\Repository;

use App\Entity\Employee;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class EmployeeRepository extends ServiceEntityRepository
{
    /* ajouter un constructeur pour instancier */
    public function __construct(ManagerRegistry $registry)
{
    parent::__construct($registry, Employee::class);
}

    
    public function search(string $term = ''): array
    {
        // create the query builder object
        $queryBuilder = $this->createQueryBuilder('e');

        // only filter if the user sent something
        if ($term !== '') {
            // using the expression, we can build complex queries
            $expression = $queryBuilder->expr();

            // We are searching in the employee's name, email address or identity code
            $condition = $expression->orX(
                $expression->like('e.fullName', ':fullName'),
                $expression->like('e.emailAddress', ':email'),
                $expression->like('e.identityCode', ':code')
            );

            $queryBuilder->where($condition)
                ->setParameter('fullName', '%' . $term . '%')
                ->setParameter('emailAddress', '%' . $term . '%')
                ->setParameter('identityCode', '%' . $term . '%');
        }

        return $queryBuilder
            ->getQuery()
            ->getArrayResult();
    }
}
