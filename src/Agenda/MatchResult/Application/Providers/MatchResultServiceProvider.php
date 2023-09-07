<?php

namespace Src\Agenda\MatchResult\Application\Providers;

use Illuminate\Support\ServiceProvider;

class MatchResultServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            \Src\Agenda\MatchResult\Domain\Repositories\MatchResultRepositoryInterface::class,
            \Src\Agenda\MatchResult\Application\Repositories\Eloquent\MatchResultRepository::class
        );
    }
}