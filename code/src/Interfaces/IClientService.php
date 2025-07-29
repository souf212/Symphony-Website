<?php

namespace App\Interfaces;

use App\Entity\Client;
use Symfony\Component\Security\Core\User\UserInterface;

interface IClientService
{
    public function new(Client $client, UserInterface $user): void;
    public function edit(Client $client): void;
    public function delete(Client $client): void;
    public function listByUser(UserInterface $user): array;

}