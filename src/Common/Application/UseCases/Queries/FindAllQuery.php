<?php

namespace Src\Common\Application\UseCases\Queries;

use Src\Common\Domain\Policies\Policy as Policy;
use Src\Common\Domain\Repositories\QueryInterface;
use Src\Common\Domain\Repositories\RepositoryInterface;

abstract class FindAllQuery implements QueryInterface
{
    protected RepositoryInterface $repository;
    protected Policy $policy;

    public function __construct()
    {
        $this->repository = app()->make($this->getRepositoryInterface());
        $this->policy = $this->getPolicy();
    }

    abstract protected function getRepositoryInterface(): string;
    abstract protected function getPolicy(): string;

    public function handle(): array
    {
        authorize('findAll', $this->policy);
        return $this->repository->findAll();
    }
}
