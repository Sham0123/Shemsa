<?php

namespace App\Entity;

use App\Repository\AppointmentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AppointmentRepository::class)]
class Appointment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

  
    #[ORM\Column(length: 255)]
    private ?string $aim = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?string $regnumber = null;

    #[ORM\Column(length: 255)]
    private ?string $course = null;

    #[ORM\ManyToMany(targetEntity: Lecture::class)]
    private Collection $lectures;

    // #[ORM\ManyToMany(targetEntity: Lecture::class)]
    // private Collection $appointedlec;

    public function __construct()
    {
        $this->lectures = new ArrayCollection();
        // $this->appointedlec = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getAim(): ?string
    {
        return $this->aim;
    }

    public function setAim(string $aim): self
    {
        $this->aim = $aim;

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


    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getRegnumber(): ?string
    {
        return $this->regnumber;
    }

    public function setRegnumber(string $regnumber): self
    {
        $this->regnumber = $regnumber;

        return $this;
    }

    public function getCourse(): ?string
    {
        return $this->course;
    }

    public function setCourse(string $course): self
    {
        $this->course = $course;

        return $this;
    }
    public function __toString()
    {
        return $this->name;
        // return $this->regnumber;
    }

    /**
     * @return Collection<int, Lecture>
     */
    public function getLectures(): Collection
    {
        return $this->lectures;
    }

    public function addLecture(Lecture $lecture): self
    {
        if (!$this->lectures->contains($lecture)) {
            $this->lectures->add($lecture);
        }

        return $this;
    }

    public function removeLecture(Lecture $lecture): self
    {
        $this->lectures->removeElement($lecture);

        return $this;
    }

    /**
     * @return Collection<int, Lecture>
     */
//     public function getAppointedlec(): Collection
//     {
//         return $this->appointedlec;
//     }

//     public function addAppointedlec(Lecture $appointedlec): self
//     {
//         if (!$this->appointedlec->contains($appointedlec)) {
//             $this->appointedlec->add($appointedlec);
//         }

//         return $this;
//     }

//     public function removeAppointedlec(Lecture $appointedlec): self
//     {
//         $this->appointedlec->removeElement($appointedlec);

//         return $this;
//     }
}