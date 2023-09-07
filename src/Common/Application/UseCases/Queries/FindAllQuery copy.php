<?php

namespace Src\Common\Application\UseCases\Queries;

use Src\Agenda\User\Domain\Policies\Policy;
use Src\Common\Domain\Repositories\QueryInterface;
use Src\Common\Domain\Repositories\RepositoryInterface;

abstract class FindByIdQuery implements QueryInterface
{
    private RepositoryInterface $repository;

    public function __construct()
    {
        $this->repository = app()->make($this->getRepository());
    }

    abstract public function getRepository(): RepositoryInterface;

    public function handle(): array
    {
        authorize('findAll', Policy::class);
        return $this->repository->findAll();
    }
}
