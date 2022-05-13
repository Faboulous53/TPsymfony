<?php

namespace App\Entity;

use App\Repository\SocialNetworksRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SocialNetworksRepository::class)]
class SocialNetworks
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $social_name;

    #[ORM\Column(type: 'string', length: 255)]
    private $class_icone;

    #[ORM\Column(type: 'string', length: 255)]
    private $social_network_url;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSocialName(): ?string
    {
        return $this->social_name;
    }

    public function setSocialName(string $social_name): self
    {
        $this->social_name = $social_name;

        return $this;
    }

    public function getClassIcone(): ?string
    {
        return $this->class_icone;
    }

    public function setClassIcone(string $class_icone): self
    {
        $this->class_icone = $class_icone;

        return $this;
    }

    public function getSocialNetworkUrl(): ?string
    {
        return $this->social_network_url;
    }

    public function setSocialNetworkUrl(string $social_network_url): self
    {
        $this->social_network_url = $social_network_url;

        return $this;
    }
}
