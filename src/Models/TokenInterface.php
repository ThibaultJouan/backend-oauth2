<?php

namespace App\Models;

interface TokenInterface
{
    public function getId(): ?int;
    public function getUserID(): ?string;
    public function setUserID(string $userID): static;
    public function getAccessToken(): ?string;
    public function setAccessToken(string $accessToken): static;
    public function getRefreshToken(): ?string;
    public function setRefreshToken(string $refreshToken): static;
    public function getExpireIn(): ?int;
    public function setExpireIn(int $expireIn): static;
    public function getScope(): ?string;
    public function setScope(string $scope): static;
    public function getCsrfToken(): ?string;
    public function setCsrfToken(?string $csrfToken): static;
    public function getTokenType(): ?string;
    public function setTokenType(string $tokenType): static;
    public function getDateCreation(): ?\DateTimeInterface;
    public function setDateCreation(\DateTimeInterface $dateCreation): static;
    public function buildTokenFromJson(String $input): void;
}
?>