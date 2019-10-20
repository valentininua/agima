<?php

namespace App\Services;

use App\Entity\User;

use App\Repository\UserRepository;

class UserService
{
    /**
     * @var UserRepository
     */
    private $user;

    /**
     * UserService constructor.
     * @param UserRepository $user
     */
    public function __construct( UserRepository $user )
    {
        $this->user = $user;
    }

}
