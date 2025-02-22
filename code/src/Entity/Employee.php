<?php

namespace App\Entity;

use App\Repository\EmployeeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmployeeRepository::class)]
class Employee
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $fullName = null;

    #[ORM\Column(length: 255)]
    private ?string $emailAddress = null;

    #[ORM\Column(length: 255)]
    private ?string $identityCode = null;
 

    /**
     * @var Collection<int, self>
     */
    #[ORM\OneToMany(targetEntity: self::class, mappedBy: 'departement')]
    private Collection $employees;

    #[ORM\ManyToOne(inversedBy: 'employees')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Department $department = null;

    public function __construct()
    {
        $this->employees = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(string $fullName): static
    {
        $this->fullName = $fullName;

        return $this;
    }

    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }

    public function setEmailAddress(string $emailAddress): static
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    public function getIdentityCode(): ?string
    {
        return $this->identityCode;
    }

    public function setIdentityCode(string $identityCode): static
    {
        $this->identityCode = $identityCode;

        return $this;
    }

    
    /**
     * @return Collection<int, self>
     */
    public function getEmployees(): Collection
    {
        return $this->employees;
    }

    public function addEmployee(self $employee): static
    {
        if (!$this->employees->contains($employee)) {
            $this->employees->add($employee);
            
        }

        return $this;
    }

    public function removeEmployee(self $employee): static
    {
        if ($this->employees->removeElement($employee)) {
            // set the owning side to null (unless already changed)
             
        }

        return $this;
    }

    public function getDepartment(): ?Department
    {
        return $this->department;
    }

    public function setDepartment(?Department $department): static
    {
        $this->department = $department;

        return $this;
    }
}
