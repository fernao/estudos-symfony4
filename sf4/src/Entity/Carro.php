<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CarroRepository")
 */
class Carro
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nome;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $modelo;

    public function getId()
    {
        return $this->id;
    }
    
    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getModelo(): ?string
    {
        return $this->modelo;
    }

    public function setModelo(string $modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }
}
