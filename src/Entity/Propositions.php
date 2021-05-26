<?php

namespace App\Entity;

use App\Repository\PropositionsRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=PropositionsRepository::class)
 */
class Propositions
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank()
     */
    private ?string $firstname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank()
     */
    private ?string $lastname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $city;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private ?\DateTimeInterface $date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $note;


    public function getId(): ?int
    {
        return $this->id;
    }


    public function getFirstname(): ?string
    {
        return $this->firstname;
    }
    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }


    public function getLastname(): ?string
    {
        return $this->lastname;
    }
    public function setLastname(?string $lastname): void
    {
        $this->lastname = $lastname;
    }


    public function getCity(): ?string
    {
        return $this->city;
    }
    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }


    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }
    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }


    public function getNote(): ?string
    {
        return $this->note;
    }
    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

}
