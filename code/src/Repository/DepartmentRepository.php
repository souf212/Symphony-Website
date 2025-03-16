<?php

namespace App\Repository;

use App\Entity\Department;
use App\Entity\Employee;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

class DepartmentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Department::class);
    }
    public function getDepartmentsOrdered(): QueryBuilder
    {

        return $this->createQueryBuilder('d')
            ->orderBy('d.name', 'Desc');
    }
}
