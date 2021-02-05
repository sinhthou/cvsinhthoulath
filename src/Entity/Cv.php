<?php

namespace App\Entity;

use App\Repository\CvRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CvRepository::class)
 */
class Cv
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photo;

    /**
     * @ORM\Column(type="date")
     */
    private $datenaissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $codepostal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pays;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $portable;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fixe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $emploi;

    /**
     * @ORM\Column(type="text")
     */
    private $presentation;

    /**
     * @ORM\Column(type="text")
     */
    private $apropos;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $competence;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $categorie;

    /**
     * @ORM\Column(type="integer")
     */
    private $anneeform;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieuform;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomformation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $debutexp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $finexp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieuexp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nommetier;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descriptionmetier;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $hobbie;

    /**
     * @ORM\Column(type="text")
     */
    private $descriptionhobbie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mediahobbie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $section;

    /**
     * @ORM\OneToMany(targetEntity=Users::class, mappedBy="cv", orphanRemoval=true)
     */
    private $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
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

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getDatenaissance(): ?\DateTimeInterface
    {
        return $this->datenaissance;
    }

    public function setDatenaissance(\DateTimeInterface $datenaissance): self
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCodepostal(): ?string
    {
        return $this->codepostal;
    }

    public function setCodepostal(string $codepostal): self
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getPortable(): ?string
    {
        return $this->portable;
    }

    public function setPortable(string $portable): self
    {
        $this->portable = $portable;

        return $this;
    }

    public function getFixe(): ?string
    {
        return $this->fixe;
    }

    public function setFixe(string $fixe): self
    {
        $this->fixe = $fixe;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getEmploi(): ?string
    {
        return $this->emploi;
    }

    public function setEmploi(string $emploi): self
    {
        $this->emploi = $emploi;

        return $this;
    }

    public function getPresentation(): ?string
    {
        return $this->presentation;
    }

    public function setPresentation(string $presentation): self
    {
        $this->presentation = $presentation;

        return $this;
    }

    public function getApropos(): ?string
    {
        return $this->apropos;
    }

    public function setApropos(string $apropos): self
    {
        $this->apropos = $apropos;

        return $this;
    }

    public function getCompetence(): ?string
    {
        return $this->competence;
    }

    public function setCompetence(string $competence): self
    {
        $this->competence = $competence;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getAnneeform(): ?int
    {
        return $this->anneeform;
    }

    public function setAnneeform(int $anneeform): self
    {
        $this->anneeform = $anneeform;

        return $this;
    }

    public function getLieuform(): ?string
    {
        return $this->lieuform;
    }

    public function setLieuform(string $lieuform): self
    {
        $this->lieuform = $lieuform;

        return $this;
    }

    public function getNomformation(): ?string
    {
        return $this->nomformation;
    }

    public function setNomformation(string $nomformation): self
    {
        $this->nomformation = $nomformation;

        return $this;
    }

    public function getDebutexp(): ?string
    {
        return $this->debutexp;
    }

    public function setDebutexp(string $debutexp): self
    {
        $this->debutexp = $debutexp;

        return $this;
    }

    public function getFinexp(): ?string
    {
        return $this->finexp;
    }

    public function setFinexp(string $finexp): self
    {
        $this->finexp = $finexp;

        return $this;
    }

    public function getLieuexp(): ?string
    {
        return $this->lieuexp;
    }

    public function setLieuexp(string $lieuexp): self
    {
        $this->lieuexp = $lieuexp;

        return $this;
    }

    public function getNommetier(): ?string
    {
        return $this->nommetier;
    }

    public function setNommetier(string $nommetier): self
    {
        $this->nommetier = $nommetier;

        return $this;
    }

    public function getDescriptionmetier(): ?string
    {
        return $this->descriptionmetier;
    }

    public function setDescriptionmetier(string $descriptionmetier): self
    {
        $this->descriptionmetier = $descriptionmetier;

        return $this;
    }

    public function getHobbie(): ?string
    {
        return $this->hobbie;
    }

    public function setHobbie(string $hobbie): self
    {
        $this->hobbie = $hobbie;

        return $this;
    }

    public function getDescriptionhobbie(): ?string
    {
        return $this->descriptionhobbie;
    }

    public function setDescriptionhobbie(string $descriptionhobbie): self
    {
        $this->descriptionhobbie = $descriptionhobbie;

        return $this;
    }

    public function getMediahobbie(): ?string
    {
        return $this->mediahobbie;
    }

    public function setMediahobbie(string $mediahobbie): self
    {
        $this->mediahobbie = $mediahobbie;

        return $this;
    }

    public function getSection(): ?string
    {
        return $this->section;
    }

    public function setSection(string $section): self
    {
        $this->section = $section;

        return $this;
    }

    /**
     * @return Collection|Users[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(Users $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->setCv($this);
        }

        return $this;
    }

    public function removeUser(Users $user): self
    {
        if ($this->users->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getCv() === $this) {
                $user->setCv(null);
            }
        }

        return $this;
    }

}
