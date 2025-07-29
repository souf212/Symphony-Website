<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_EMAIL', fields: ['email'])]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(
        length: 180
    )]
    #[Assert\NotBlank(
        message: 'email cannot be empty'
    )]
    #[Assert\Length(
        min: 10,
        max: 180,
        minMessage: 'email is too short',
        maxMessage: 'email cannot be longer than 180 characters'
    )]
    private ?string $email = null;

    /**
     * @var list<string> The user roles
     */
    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]

    private ?string $password = null;

    #[ORM\Column(
        length: 50
    )]
    #[Assert\NotBlank(
        message: 'firstname cannot be empty'
    )]
    #[Assert\Length(
        min: 5,
        max: 50,
        minMessage: 'firstname cannot be less than 50 characters',
        maxMessage: 'firstname cannot be longer than 50 characters'
    )]
    private ?string $firstName = null;

    #[ORM\Column(
        length: 50
    )]
    #[Assert\NotBlank(
        message: 'lastname cannot be empty'
    )]
    #[Assert\Length(
        min: 5,
        max: 50,
        minMessage: 'lastname cannot be less than 50 characters',
        maxMessage: 'lastname cannot be longer than 50 characters'
    )]
    private ?string $lastName = null;

    #[Assert\Unique()]
    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: 'username cannot be empty')]
    #[Assert\Length(
        min: 5,
        max: 50,
        minMessage: 'username cannot be less than 5 characters',
        maxMessage: 'firstname cannot be longer than 50 characters'
    )]
    private ?string $userName = null;

    /**
     * @var Collection<int, client>
     */
    #[ORM\OneToMany(targetEntity: Client::class, mappedBy: 'user')]
    private Collection $clients;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $lastLoginAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $lastLogoutAt = null;

    public function __construct()
    {
        $this->clients = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    /**
     * @param list<string> $roles
     */
    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): static
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): static
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function setUserName(string $userName): static
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * @return Collection<int, client>
     */
    public function getClients(): Collection
    {
        return $this->clients;
    }

    public function addClient(client $client): static
    {
        if (!$this->clients->contains($client)) {
            $this->clients->add($client);
            $client->setUser($this);
        }

        return $this;
    }

    public function removeClient(client $client): static
    {
        if ($this->clients->removeElement($client)) {
            // set the owning side to null (unless already changed)
            if ($client->getUser() === $this) {
                $client->setUser(null);
            }
        }

        return $this;
    }

    public function getLastLoginAt(): ?\DateTimeImmutable
    {
        return $this->lastLoginAt;
    }

    public function setLastLoginAt(?\DateTimeImmutable $lastLoginAt): static
    {
        $this->lastLoginAt = $lastLoginAt;

        return $this;
    }

    public function getLastLogoutAt(): ?\DateTimeImmutable
    {
        return $this->lastLogoutAt;
    }

    public function setLastLogoutAt(\DateTimeImmutable $lastLogoutAt): static
    {
        $this->lastLogoutAt = $lastLogoutAt;

        return $this;
    }
}
