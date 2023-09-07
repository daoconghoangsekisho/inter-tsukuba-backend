<?php

namespace Src\Agenda\Company\Application\UseCases\Queries;

use Src\Agenda\MatchResult\Domain\Policies\MatchResultPolicy;
use Src\Agenda\MatchResult\Domain\Repositories\MatchResultRepositoryInterface;
use Src\Common\Application\UseCases\Queries\FindAllQuery;
use Src\Common\Domain\Repositories\QueryInterface;

class FindAllMatchResultQuery extends FindAllQuery implements QueryInterface
{
    protected function getRepositoryInterface(): string
    {
        return MatchResultRepositoryInterface::class;
    }

    protected function getPolicy(): string
    {
        return MatchResultPolicy::class;
    }
}
