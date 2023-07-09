<?php

namespace App\Entity;
use App\Repository\AvailabilityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
#[ORM\Entity(repositoryClass: AvailabilityRepository::class)]
class Availability
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $phone = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    // #[ORM\ManyToMany(targetEntity: Student::class)]
    // private Collection $students;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Building $block = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Office $offices = null;

    #[ORM\ManyToMany(targetEntity: Appointment::class)]
    private Collection $appointments;

    #[ORM\Column(nullable: true)]
    private ?bool $status = null;

    // #[ORM\ManyToOne]
    // #[ORM\JoinColumn(nullable: false)]
    // private ?Lecture $lecturer = null;

    public function __construct()
    {
        $this->appointments = new ArrayCollection();
    }

    // #[ORM\OneToMany(mappedBy: 'avail', targetEntity: Office::class)]
    // private Collection $office;

    // #[ORM\OneToMany(mappedBy: 'avail', targetEntity: Building::class)]
    // private Collection $build;

    // public function __construct()
    // {
    //     $this->students = new ArrayCollection();
    //     // $this->office = new ArrayCollection();
    //     // $this->build = new ArrayCollection();
    // }

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

    public function getPhone(): ?int
    {
        return $this->phone;
    }

    public function setPhone(int $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Student>
     */
    // public function getStudents(): Collection
    // {
    //     return $this->students;
    // }

    // public function addStudent(Student $student): self
    // {
    //     if (!$this->students->contains($student)) {
    //         $this->students->add($student);
    //     }

    //     return $this;
    // }

    // public function removeStudent(Student $student): self
    // {
    //     $this->students->removeElement($student);

    //     return $this;
    // }

    /**
     */
    // public function getOffice(): Collection
    // {
    //     return $this->office;
    // }

    // public function addOffice(Office $office): self
    // {
    //     if (!$this->office->contains($office)) {
    //         $this->office->add($office);
    //     }

    //     return $this;
    // }

    // public function removeOffice(Office $office): self
    // {
    //     $this->office->removeElement($office);

    //     return$this;
            // set the owning side to null (unless already changed)
            
            


  
    // public function getBuild(): Collection
    // {
    //     return $this->build;
    // }

    // public function addBuild(Building $build): self
    // {
    //     if (!$this->build->contains($build)) {
    //         $this->build->add($build);
            
    //     }

    //     return $this;

    public function getBlock(): ?Building
    {
        return $this->block;
    }

    public function setBlock(?Building $block): self
    {
        $this->block = $block;

        return $this;
    }

    public function getOffices(): ?Office
    {
        return $this->offices;
    }

    public function setOffices(?Office $offices): self
    {
        $this->offices = $offices;

        return $this;
    }

    /**
     * @return Collection<int, Appointment>
     */
    public function getAppointments(): Collection
    {
        return $this->appointments;
    }

    public function addAppointment(Appointment $appointment): self
    {
        if (!$this->appointments->contains($appointment)) {
            $this->appointments->add($appointment);
        }

        return $this;
    }

    public function removeAppointment(Appointment $appointment): self
    {
        $this->appointments->removeElement($appointment);

        return $this;
    }

    // public function getLecturer(): ?Lecture
    // {
    //     return $this->lecturer;
    // }

    // public function setLecturer(?Lecture $lecturer): self
    // {
    //     $this->lecturer = $lecturer;

    //     return $this;
    // }

    public function isStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }
    }

    // public function removeBuild(Building $build): self
    // {
    //     $this->build->removeElement($build);


    //     return $this;
    // }

