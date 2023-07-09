<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
// use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
// use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

#[ORM\Entity(repositoryClass: StudentRepository::class)]
// #[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class Student 
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column]
    private ?int $phone = null;

    #[ORM\Column]
    private ?int $year = null;

    #[ORM\Column(length: 255)]
    private ?string $school = null;

    #[ORM\ManyToMany(targetEntity: Availability::class, mappedBy: 'students')]
    private Collection $no;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    // #[ORM\Column]
    // private array $roles = [];

    // #[ORM\Column(length: 255)]
    // private ?string $roles = null;

    #[ORM\Column(length: 255)]
    private ?string $registrno = null;

    public function __construct()
    {
        $this->no = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
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

    public function getPhone(): ?int
    {
        return $this->phone;
    }

    public function setPhone(int $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(int $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getSchool(): ?string
    {
        return $this->school;
    }

    public function setSchool(string $school): self
    {
        $this->school = $school;

        return $this;
    }
    // /**
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

    /**
     * @return Collection<int, Availability>
     */
    // public function getNo(): Collection
    // {
    //     return $this->no;
    // }

    // public function addNo(Availability $no): self
    // {
    //     if (!$this->no->contains($no)) {
    //         $this->no->add($no);
    //         $no->addStudent($this);
    //     }

    //     return $this;
    // }

    // public function removeNo(Availability $no): self
    // {
    //     if ($this->no->removeElement($no)) {
    //         $no->removeStudent($this);
    //     }

    //     return $this;
    // }

    // public function getPassword(): ?string
    // {
    //     return $this->password;
    // }

    // public function setPassword(string $password): self
    // {
    //     $this->password = $password;

    //     return $this;
    // }

    // public function getRoles(): ?string
    // {
    //     return $this->roles;
    // }

    // public function setRoles(string $roles): self
    // {
    //     $this->roles = $roles;

    //     return $this;
    // }

     /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getRegistrno(): ?string
    {
        return $this->registrno;
    }

    public function setRegistrno(string $registrno): self
    {
        $this->registrno = $registrno;

        return $this;
    }

   
}
