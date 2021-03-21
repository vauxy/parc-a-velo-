<?php

namespace App\Entity;

use App\Repository\SortieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SortieRepository::class)
 */
class Sortie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $velo;

    /**
     * @ORM\ManyToOne(targetEntity=Eleve::class, inversedBy="sortie")
     * @ORM\JoinColumn(nullable=false)
     */
    private $eleve;

    /**
     * @ORM\Column(type="boolean")
     */
    private $refus;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $codeRfidRefus;


    public function getId(): ?int
    {
        return $this->id;
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

    public function getVelo(): ?bool
    {
        return $this->velo;
    }

    public function setVelo(?bool $velo): self
    {
        $this->velo = $velo;

        return $this;
    }

    public function getEleve(): ?Eleve
    {
        return $this->eleve;
    }

    public function setEleve(?Eleve $eleve): self
    {
        $this->eleve = $eleve;

        return $this;
    }

    public function getRefus(): ?bool
    {
        return $this->refus;
    }

    public function setRefus(bool $refus): self
    {
        $this->refus = $refus;

        return $this;
    }

    public function getCodeRfidRefus(): ?string
    {
        return $this->codeRfidRefus;
    }

    public function setCodeRfidRefus(?string $codeRfidRefus): self
    {
        $this->codeRfidRefus = $codeRfidRefus;

        return $this;
    }

}
