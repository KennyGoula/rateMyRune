<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RarityNameRepository")
 */
class RarityName
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Rune", mappedBy="rarity")
     */
    private $runes;

    public function __construct()
    {
        $this->runes = new ArrayCollection();
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

    /**
     * @return Collection|Rune[]
     */
    public function getRunes(): Collection
    {
        return $this->runes;
    }

    public function addRune(Rune $rune): self
    {
        if (!$this->runes->contains($rune)) {
            $this->runes[] = $rune;
            $rune->setRarity($this);
        }

        return $this;
    }

    public function removeRune(Rune $rune): self
    {
        if ($this->runes->contains($rune)) {
            $this->runes->removeElement($rune);
            // set the owning side to null (unless already changed)
            if ($rune->getRarity() === $this) {
                $rune->setRarity(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->name;
    }
}
