<?php

namespace Core\Application\Providers;

use Illuminate\Support\ServiceProvider;
use Core\Domain\Repositories\UserRepositoryInterface;
use Core\Infrastructure\Persistence\Eloquent\Repositories\UserRepository;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }
}
