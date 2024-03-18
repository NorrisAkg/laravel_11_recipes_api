<?php

namespace App\Providers;

use App\ApiCore\Users\Repositories\Interfaces\UserRepositoryInterface;
use App\ApiCore\Users\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    private const MODEL_REPOSITORIES = [
        [UserRepositoryInterface::class, UserRepository::class],
        [UserRepositoryInterface::class, UserRepository::class],
    ];

    protected function bindRepositories(): void {
        foreach (self::MODEL_REPOSITORIES as $modelRepository) {
            $this->app->bind($modelRepository[0], $modelRepository[1]);
        }
    }
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->bindRepositories();
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
