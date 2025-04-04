<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
   #[ORM\Id]
   #[ORM\GeneratedValue]
   #[ORM\Column(type: 'integer')]
   private ?int $id = null;

   #[ORM\Column(type: 'string', length: 255)]
   private ?string $name = null;

   #[ORM\Column(type: 'float')]
   private ?float $price = null;

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

   public function getPrice(): ?float
   {
       return $this->price;
   }

   public function setPrice(float $price): self
   {
       $this->price = $price;

       return $this;
   }
}