<?php

namespace App\Entity;

use App\Repository\MatchsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MatchsRepository::class)
 */
class Matchs
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Equipe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Adversaire;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DateMatch;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEquipe(): ?string
    {
        return $this->Equipe;
    }

    public function setEquipe(string $Equipe): self
    {
        $this->Equipe = $Equipe;

        return $this;
    }

    public function getAdversaire(): ?string
    {
        return $this->Adversaire;
    }

    public function setAdversaire(string $Adversaire): self
    {
        $this->Adversaire = $Adversaire;

        return $this;
    }

    public function getDateMatch(): ?\DateTimeInterface
    {
        return $this->DateMatch;
    }

    public function setDateMatch(\DateTimeInterface $DateMatch): self
    {
        $this->DateMatch = $DateMatch;

        return $this;
    }
}
