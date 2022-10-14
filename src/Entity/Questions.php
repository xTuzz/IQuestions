<?php

namespace App\Entity;

use App\Repository\QuestionsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuestionsRepository::class)]
class Questions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Wording = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Answers = null;

    #[ORM\Column(length: 255)]
    private ?string $Image = null;

    #[ORM\Column(length: 255)]
    private ?string $CorrectAnswer = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWording(): ?string
    {
        return $this->Wording;
    }

    public function setWording(string $Wording): self
    {
        $this->Wording = $Wording;

        return $this;
    }

    public function getAnswers(): ?string
    {
        return $this->Answers;
    }

    public function setAnswers(string $Answers): self
    {
        $this->Answers = $Answers;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->Image;
    }

    public function setImage(string $Image): self
    {
        $this->Image = $Image;

        return $this;
    }

    public function getCorrectAnswer(): ?string
    {
        return $this->CorrectAnswer;
    }

    public function setCorrectAnswer(string $CorrectAnswer): self
    {
        $this->CorrectAnswer = $CorrectAnswer;

        return $this;
    }
}
