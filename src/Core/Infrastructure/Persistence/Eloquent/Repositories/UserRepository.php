<?php

declare(strict_types=1);

namespace Core\Infrastructure\Persistence\Eloquent\Repositories;

use Core\Infrastructure\Persistence\Eloquent\Models\User;


class UserRepository
{

    private $repository;

    public function __construct(User $user)
    {
        return $this->repository = $user;
    }
}
