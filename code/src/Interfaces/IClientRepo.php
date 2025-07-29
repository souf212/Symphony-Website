<?php

namespace App\Interfaces;

use App\Entity\Client;
use phpDocumentor\Reflection\Types\Void_;
use Symfony\Component\Security\Core\User\UserInterface;

interface IClientRepo
{
    public function save(Client $client): Void;
    public function update(Client $client): void;
    public function delete(Client $client): void;
    public function findByUser(UserInterface $user): array;

}