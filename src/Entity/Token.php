<?php

namespace App\Entity;

use App\Models\TokenInterface;
use App\Utilities\Utility;
use App\Repository\TokenRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

use DateTime;

#[ORM\Entity(repositoryClass: TokenRepository::class)]
class Token implements TokenInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $userID = null;

    #[ORM\Column(length: 255)]
    private ?string $accessToken = null;

    #[ORM\Column(length: 255)]
    private ?string $refreshToken = null;

    #[ORM\Column]
    private ?int $expireIn = null;

    #[ORM\Column(length: 255)]
    private ?string $scope = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $csrfToken = null;

    #[ORM\Column(length: 255)]
    private ?string $tokenType = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateCreation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserID(): ?string
    {
        return $this->userID;
    }

    public function setUserID(string $userID): static
    {
        $this->userID = $userID;

        return $this;
    }

    public function getAccessToken(): ?string
    {
        return $this->accessToken;
    }

    public function setAccessToken(string $accessToken): static
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    public function getRefreshToken(): ?string
    {
        return $this->refreshToken;
    }

    public function setRefreshToken(string $refreshToken): static
    {
        $this->refreshToken = $refreshToken;

        return $this;
    }

    public function getExpireIn(): ?int
    {
        return $this->expireIn;
    }

    public function setExpireIn(int $expireIn): static
    {
        $this->expireIn = $expireIn;

        return $this;
    }

    public function getScope(): ?string
    {
        return $this->scope;
    }

    public function setScope(string $scope): static
    {
        $this->scope = $scope;

        return $this;
    }

    public function getCsrfToken(): ?string
    {
        return $this->csrfToken;
    }

    public function setCsrfToken(?string $csrfToken): static
    {
        $this->csrfToken = $csrfToken;

        return $this;
    }

    public function getTokenType(): ?string
    {
        return $this->tokenType;
    }

    public function setTokenType(string $tokenType): static
    {
        $this->tokenType = $tokenType;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): static
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function buildTokenFromJson(String $input): void
    {
        $jsonInput = json_decode($input, true);

        $this->setUserID(Utility::getJsonValue($jsonInput['body'], 'userid'));
        $this->setAccessToken(Utility::getJsonValue($jsonInput['body'], 'access_token'));
        $this->setRefreshToken(Utility::getJsonValue($jsonInput['body'], 'refresh_token'));
        $this->setScope(Utility::getJsonValue($jsonInput['body'], 'scope'));
        $this->setExpireIn(Utility::getJsonValue($jsonInput['body'], 'expires_in'));
        $this->setTokenType(Utility::getJsonValue($jsonInput['body'], 'token_type'));
        $this->setCsrfToken(Utility::getJsonValue($jsonInput['body'], 'csrf_token'));
        $this->setDateCreation(new DateTime());
    }
}
