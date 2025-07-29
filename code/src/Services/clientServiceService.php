<?php

namespace App\Services;

use App\Entity\Client;
use App\Interfaces\IClientService;
use App\Interfaces\IClientRepo;
use App\Repository\ClientRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;

class clientServiceService implements IClientService
{

    private IClientRepo $clientRepo;


    public function __construct( IClientRepo $clientRepo)
    {

        $this->clientRepo = $clientRepo;

    }

    public function new(Client $client, UserInterface $user): void
    {
        $client->setUser($user);
        $this->clientRepo->save($client);

    }

    public function edit(Client $client): void
    {
        $this->clientRepo->update($client);
    }

    public function delete(Client $client): void
    {
        $this->clientRepo->delete($client);
    }
    public function listByUser(UserInterface $user): array
    {
        return $this->clientRepo->findByUser($user);
    }





}