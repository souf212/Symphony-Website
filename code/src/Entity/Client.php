<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClientRepository::class)]
class Client
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(
        message: 'client firstname is required',
    )]
    #[Assert\Length(
        min: 5,
        max: 255,
        minMessage: 'client firstname is too short',
        maxMessage: 'client firstname is too long',
    )]
    private ?string $managerFirstName = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(
        message: 'client lastname is required',
    )]
    #[Assert\Length(
        min: 5,
        max: 255,
        minMessage: 'client lastname is too short',
        maxMessage: 'client lastname is too long',
    )]
    private ?string $managerLastName = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(
        message: 'client companyname is required',
    )]
    #[Assert\Length(
        min: 5,
        max: 255,
        minMessage: 'client companyname is too short',
        maxMessage: 'client companyname is too long',
    )]
    private ?string $companyName = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(
        message: 'client phone is required',
    )]
    #[Assert\Length(
        min: 10,
        max: 255,
        minMessage: 'client phone is too short',
        maxMessage: 'client phone is too long',
    )]
    #[Assert\Regex(
        pattern: '/^\+?[0-9\s\-]{7,20}$/',
        message: 'phone number is invalid'
    )]
    private ?string $phone = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(
        message: 'client address is required',
    )]
    #[Assert\Length(
        min: 4,
        max: 255,
        minMessage: 'client address is too short',
        maxMessage: 'client address is too long',
    )]
    private ?string $address = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(
        message: 'client city is required',
    )]
    #[Assert\Length(
        min: 5,
        max: 50,
        minMessage: 'client city is too short',
        maxMessage: 'client city is too long',
    )]
    private ?string $city = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(
        message: 'client country is required',
    )]
    #[Assert\Length(
        min: 5,
        max: 50,
        minMessage: 'client country is too short',
        maxMessage: 'client country is too long',
    )]
    private ?string $country = null;





    /**
     * @var Collection<int, Invoice>
     */
    #[ORM\OneToMany(targetEntity: Invoice::class, mappedBy: 'client')]
    private Collection $Invoice;


    #[ORM\ManyToOne(inversedBy: 'clients')]
    private ?User $user = null;



    public function __construct()
    {
        $this->Invoice = new ArrayCollection();

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getManagerFirstName(): ?string
    {
        return $this->managerFirstName;
    }

    public function setManagerFirstName(string $managerFirstName): static
    {
        $this->managerFirstName = $managerFirstName;

        return $this;
    }

    public function getManagerLastName(): ?string
    {
        return $this->managerLastName;
    }

    public function setManagerLastName(string $managerLastName): static
    {
        $this->managerLastName = $managerLastName;

        return $this;
    }

    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    public function setCompanyName(string $companyName): static
    {
        $this->companyName = $companyName;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): static
    {
        $this->city = $city;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): static
    {
        $this->country = $country;

        return $this;
    }




    /**
     * @return Collection<int, Invoice>
     */
    public function getInvoice(): Collection
    {
        return $this->Invoice;
    }

    public function addInvoice(Invoice $invoice): static
    {
        if (!$this->Invoice->contains($invoice)) {
            $this->Invoice->add($invoice);
            $invoice->setClient($this);
        }

        return $this;
    }

    public function removeInvoice(Invoice $invoice): static
    {
        if ($this->Invoice->removeElement($invoice)) {
            // set the owning side to null (unless already changed)
            if ($invoice->getClient() === $this) {
                $invoice->setClient(null);
            }
        }

        return $this;
    }



    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }


    public function getName(): ?string
    {
        return $this->managerFirstName;
    }

}
