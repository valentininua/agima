<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;


class UserRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * @return mixed
     */
    public function getUsers()
    {
        $data = $this->createQueryBuilder("r")
            ->select()
            ->getQuery()
            ->getResult();
        return $data;
    }

}
