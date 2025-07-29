<?php

namespace App\Entity;

use App\Enum\InvoiceStatus;
use App\Repository\InvoiceRepository;
use Doctrine\DBAL\Types\Types;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InvoiceRepository::class)]
#[UniqueEntity(
    fields: ['invoiceNumber'],
    message: 'Ce numéro de facture existe déjà. Il doit être unique.'
)]
class Invoice
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 80)]
    #[Assert\NotBlank(message: 'Le numéro de facture est obligatoire')]
    #[Assert\Length(
        min: 5,
        max: 80,
        minMessage: 'Le numéro de facture doit comporter au moins {{ limit }} caractères',
        maxMessage: 'Le numéro de facture ne peut pas dépasser {{ limit }} caractères'
    )]
    private ?string $invoiceNumber = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(
        message: 'La date de facture est obligatoire'
    )]

    private ?\DateTime $invoiceDate = null;

    #[ORM\Column]
    #[Assert\NotBlank(
        message: 'Le montant de la facture est obligatoire'
    )]
    #[Assert\Positive(
        message: 'Le montant doit être positif'
    )]
    private ?float $amount = null;

    #[ORM\Column(
        type: 'string',
        length: 10,
        enumType: InvoiceStatus::class
    )]
    #[Assert\NotNull(
        message: 'Le statut de la facture est obligatoire'
    )]
    private InvoiceStatus $status;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Length(
        max: 255,
        maxMessage: 'La note ne peut pas dépasser {{ limit }} caractères'
    )]
    private ?string $note = null;

    #[ORM\ManyToOne(inversedBy: 'invoices')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Client $client = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInvoiceNumber(): ?string
    {
        return $this->invoiceNumber;
    }

    public function setInvoiceNumber(string $invoiceNumber): static
    {
        $this->invoiceNumber = $invoiceNumber;

        return $this;
    }

    public function getInvoiceDate(): ?\DateTime
    {
        return $this->invoiceDate;
    }

    public function setInvoiceDate(\DateTime $invoiceDate): static
    {
        $this->invoiceDate = $invoiceDate;

        return $this;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): static
    {
        $this->amount = $amount;

        return $this;
    }

    public function getStatus(): InvoiceStatus
    {
        return $this->status;
    }

    public function setStatus(InvoiceStatus $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): static
    {
        $this->note = $note;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): static
    {
        $this->client = $client;

        return $this;
    }
}