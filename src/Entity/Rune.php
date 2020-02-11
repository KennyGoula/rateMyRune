<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RuneRepository")
 */
class Rune
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\RuneSetName", inversedBy="runes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $runeSet;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\RarityName", inversedBy="runes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $rarity;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\StatName", inversedBy="runes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $mainStat;

    /**
     * @ORM\Column(type="integer")
     */
    private $mainStatValue;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\StatName", inversedBy="runes")
     */
    private $innateStat;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $innateStatValue;

    /**
     * @ORM\Column(type="integer")
     */
    private $grade;

    /**
     * @ORM\Column(type="integer")
     */
    private $slot;

    /**
     * @ORM\Column(type="integer")
     */
    private $level;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $atkPer;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $atkFlat;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $defPer;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $defFlat;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $hpPer;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $hpFlat;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $spd;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $acc;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $res;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $critRate;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $critDmg;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRuneSet(): ?runeSetName
    {
        return $this->runeSet;
    }

    public function setRuneSet(?runeSetName $runeSet): self
    {
        $this->runeSet = $runeSet;

        return $this;
    }

    public function __toStringRuneSet()
    {
        return (string) $this->runeSet;
    }

    public function getRarity(): ?rarityName
    {
        return $this->rarity;
    }

    public function setRarity(?rarityName $rarity): self
    {
        $this->rarity = $rarity;

        return $this;
    }

    public function __toStringRarity()
    {
        return (string) $this->rarity;
    }

    public function getMainStat(): ?statName
    {
        return $this->mainStat;
    }

    public function setMainStat(?statName $mainStat): self
    {
        $this->mainStat = $mainStat;

        return $this;
    }

    public function __toStringMainStat()
    {
        return (string) $this->mainStat;
    }

    public function getMainStatValue(): ?int
    {
        return $this->mainStatValue;
    }

    public function setMainStatValue(int $mainStatValue): self
    {
        $this->mainStatValue = $mainStatValue;

        return $this;
    }

    public function getInnateStat(): ?statName
    {
        return $this->innateStat;
    }

    public function setInnateStat(?statName $innateStat): self
    {
        $this->innateStat = $innateStat;

        return $this;
    }

    public function __toStringInnateStat()
    {
        return (string) $this->innateStat;
    }

    public function getInnateStatValue(): ?int
    {
        return $this->innateStatValue;
    }

    public function setInnateStatValue(?int $innateStatValue): self
    {
        $this->innateStatValue = $innateStatValue;

        return $this;
    }

    public function getGrade(): ?int
    {
        return $this->grade;
    }

    public function setGrade(int $grade): self
    {
        $this->grade = $grade;

        return $this;
    }

    public function getSlot(): ?int
    {
        return $this->slot;
    }

    public function setSlot(int $slot): self
    {
        $this->slot = $slot;

        return $this;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getAtkPer(): ?int
    {
        return $this->atkPer;
    }

    public function setAtkPer(?int $atkPer): self
    {
        $this->atkPer = $atkPer;

        return $this;
    }

    public function getAtkFlat(): ?int
    {
        return $this->atkFlat;
    }

    public function setAtkFlat(?int $atkFlat): self
    {
        $this->atkFlat = $atkFlat;

        return $this;
    }

    public function getDefPer(): ?int
    {
        return $this->defPer;
    }

    public function setDefPer(?int $defPer): self
    {
        $this->defPer = $defPer;

        return $this;
    }

    public function getDefFlat(): ?int
    {
        return $this->defFlat;
    }

    public function setDefFlat(?int $defFlat): self
    {
        $this->defFlat = $defFlat;

        return $this;
    }

    public function getHpPer(): ?int
    {
        return $this->hpPer;
    }

    public function setHpPer(?int $hpPer): self
    {
        $this->hpPer = $hpPer;

        return $this;
    }

    public function getHpFlat(): ?int
    {
        return $this->hpFlat;
    }

    public function setHpFlat(?int $hpFlat): self
    {
        $this->hpFlat = $hpFlat;

        return $this;
    }

    public function getSpd(): ?int
    {
        return $this->spd;
    }

    public function setSpd(?int $spd): self
    {
        $this->spd = $spd;

        return $this;
    }

    public function getAcc(): ?int
    {
        return $this->acc;
    }

    public function setAcc(?int $acc): self
    {
        $this->acc = $acc;

        return $this;
    }

    public function getRes(): ?int
    {
        return $this->res;
    }

    public function setRes(?int $res): self
    {
        $this->res = $res;

        return $this;
    }

    public function getCritRate(): ?int
    {
        return $this->critRate;
    }

    public function setCritRate(?int $critRate): self
    {
        $this->critRate = $critRate;

        return $this;
    }

    public function getCritDmg(): ?int
    {
        return $this->critDmg;
    }

    public function setCritDmg(?int $critDmg): self
    {
        $this->critDmg = $critDmg;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
