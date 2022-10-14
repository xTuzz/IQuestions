<?php

namespace App\Entity;

use App\Repository\PlayRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlayRepository::class)]
class Play
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $ScoreUser = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getScoreUser(): ?int
    {
        return $this->ScoreUser;
    }

    public function setScoreUser(int $ScoreUser): self
    {
        $this->ScoreUser = $ScoreUser;

        return $this;
    }
}
