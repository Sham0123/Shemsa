<?php

namespace App\Entity;

use App\Repository\AdministratorRepository;
use Doctrine\ORM\Mapping as ORM;
// use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
// use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

#[ORM\Entity(repositoryClass: AdministratorRepository::class)]
// #[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class Administrator 
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    // #[ORM\Column(length: 255)]
    // private ?string $roles = null;


    // #[ORM\Column]
    // private array $roles = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    // public function getRoles(): ?string
    // {
    //     return $this->roles;
    // }

    // public function setRoles(string $roles): self
    // {
    //     $this->roles = $roles;

    //     return $this;
    // }
    //  /**
    //  * @see UserInterface
    //  */
    // public function getRoles(): array
    // {
    //     $roles = $this->roles;
    //     // guarantee every user at least has ROLE_USER
    //     $roles[] = 'ROLE_USER';

    //     return array_unique($roles);
    // }

    // public function setRoles(array $roles): self
    // {
    //     $this->roles = $roles;

    //     return $this;
    // }

    // /**
    //  * @see PasswordAuthenticatedUserInterface
    //  */
    // public function getPassword(): string
    // {
    //     return $this->password;
    // }

    // public function setPassword(string $password): self
    // {
    //     $this->password = $password;

    //     return $this;
    // }

    // /**
    //  * @see UserInterface
    //  */
    // public function eraseCredentials()
    // {
    //     // If you store any temporary, sensitive data on the user, clear it here
    //     // $this->plainPassword = null;
    // }

}
