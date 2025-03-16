<?php

namespace App\Repository;

use App\Entity\Employee;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class EmployeeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Employee::class);
    }


    public function search(string $term = ''): array
    {
        $queryBuilder = $this->createQueryBuilder('e');
        if ($term !== '') {
            $expression = $queryBuilder->expr();

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
