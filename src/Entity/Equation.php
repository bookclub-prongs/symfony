<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Equation
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     * @Assert\NotBlank
     */
    private $leftOperand;

    /**
     * @var string
     * @Assert\NotBlank
     */
    private $operator;

    /**
     * @var int
     * @Assert\NotBlank
     */
    private $rightOperand;

    /**
     * @var int
     */
    private $result;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLeftOperand(): ?int
    {
        return $this->leftOperand;
    }

    public function setLeftOperand(int $leftOperand): self
    {
        $this->leftOperand = $leftOperand;

        return $this;
    }

    public function getOperator(): ?array
    {
        return $this->operator;
    }

    public function setOperator(string $operator): self
    {
        $this->operator = $operator;

        return $this;
    }

    public function getRightOperand(): ?int
    {
        return $this->rightOperand;
    }

    public function setRightOperand(int $rightOperand): self
    {
        $this->rightOperand = $rightOperand;

        return $this;
    }

    public function getResult(): ?int
    {
        return $this->result;
    }

    public function setResult(?int $result): self
    {
        $this->result = $result;

        return $this;
    }
}
