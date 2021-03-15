<?php

namespace App\Entity;

use App\Repository\EleveRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EleveRepository::class)
 */
class Eleve
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $classe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $codeBarre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $codeRFID;

    /**
     * @ORM\OneToMany(targetEntity=Entre::class, mappedBy="eleve")
     */
    private $entres;

    /**
     * @ORM\OneToMany(targetEntity=Sortie::class, mappedBy="eleve")
     */
    private $sortie;

    public function __construct()
    {
        $this->entres = new ArrayCollection();
        $this->sortie = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getClasse(): ?string
    {
        return $this->classe;
    }

    public function setClasse(string $classe): self
    {
        $this->classe = $classe;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getCodeBarre(): ?string
    {
        return $this->codeBarre;
    }

    public function setCodeBarre(string $codeBarre): self
    {
        $this->codeBarre = $codeBarre;

        return $this;
    }

    public function getCodeRFID(): ?string
    {
        return $this->codeRFID;
    }

    public function setCodeRFID(string $codeRFID): self
    {
        $this->codeRFID = $codeRFID;

        return $this;
    }

    /**
     * @return Collection|Entre[]
     */
    public function getEntres(): Collection
    {
        return $this->entres;
    }

    public function addEntre(Entre $entre): self
    {
        if (!$this->entres->contains($entre)) {
            $this->entres[] = $entre;
            $entre->setEleve($this);
        }

        return $this;
    }

    public function removeEntre(Entre $entre): self
    {
        if ($this->entres->removeElement($entre)) {
            // set the owning side to null (unless already changed)
            if ($entre->getEleve() === $this) {
                $entre->setEleve(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|sortie[]
     */
    public function getSortie(): Collection
    {
        return $this->sortie;
    }

    public function addSortie(sortie $sortie): self
    {
        if (!$this->sortie->contains($sortie)) {
            $this->sortie[] = $sortie;
            $sortie->setEleve($this);
        }

        return $this;
    }

    public function removeSortie(sortie $sortie): self
    {
        if ($this->sortie->removeElement($sortie)) {
            // set the owning side to null (unless already changed)
            if ($sortie->getEleve() === $this) {
                $sortie->setEleve(null);
            }
        }

        return $this;
    }
}
