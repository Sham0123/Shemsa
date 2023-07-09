<?php

namespace App\Entity;

use App\Repository\OfficeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OfficeRepository::class)]
class Office
{

    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $number = null;

    #[ORM\ManyToOne(inversedBy: 'office')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Building $building = null;

    // #[ORM\ManyToOne(inversedBy: 'office')]
    // private ?Availability $avail = null;

    // #[ORM\ManyToOne(inversedBy: 'office')]
    // #[ORM\JoinColumn(nullable: false)]
    // private ?Availability $availability = null;

    // #[ORM\ManyToOne(inversedBy: 'off')]
    // #[ORM\JoinColumn(nullable: false)]
    // private ?Availability $off = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(int $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getBuilding(): ?Building
    {
        return $this->building;
  
    }

    public function setBuilding(Building $building): self
    {
        $this->building = $building;

        return $this;
    }

    public function __toString()
    {
        return $this->number;
    }
    // public function getAvail(): ?Availability
    // {
    //     return $this->avail;
    // }

    // public function setAvail(?Availability $avail): self
    // {
    //     $this->avail = $avail;

    //     return $this;
    // }

    
}
