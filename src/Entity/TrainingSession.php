<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity()]
class TrainingSession
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: "date")]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: "time")]
    private ?\DateTimeInterface $time = null;

    #[ORM\Column(type: "json", nullable: true)]
    private ?array $tasks = [];

    #[ORM\Column(type: "json", nullable: true)]
    private ?array $joueurs = [];

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

    public function getTime(): ?\DateTimeInterface
    {
        return $this->time;
    }

    public function setTime(\DateTimeInterface $time): self
    {
        $this->time = $time;
        return $this;
    }

    public function getTasks(): ?array
    {
        return $this->tasks;
    }

    public function setTasks(array $tasks): self
    {
        $this->tasks = $tasks;
        return $this;
    }

    public function getJoueurs(): ?array
    {
        return $this->joueurs;
    }

    public function setJoueurs(array $joueurs): self
    {
        $this->joueurs = $joueurs;
        return $this;
    }
}
