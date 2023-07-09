<?php

namespace App\Entity;

use App\Repository\BuildingRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BuildingRepository::class)]
class Building
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    // #[ORM\ManyToOne(inversedBy: 'build')]
    // private ?Availability $avail = null;



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


   
    

    public function __toString()
    {
        return $this->name;
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
