<?php

namespace Src\Agenda\MatchResult\Application\Repositories\Eloquent;

use Src\Agenda\MatchResult\Application\Mappers\MatchResultMapper;
use Src\Agenda\MatchResult\Domain\Repositories\MatchResultRepositoryInterface;
use Src\Agenda\MatchResult\Infrastructure\EloquentModels\MatchResultEloquentModel;
use Src\Common\Application\Repositories\Eloquent\Repository;

class MatchResultRepository extends Repository implements MatchResultRepositoryInterface
{
    /** @return EloquentModel class */
    public function getEloquentModel(): string
    {
        return MatchResultEloquentModel::class;
    }
    /** @return Mapper class */
    public function getMapper(): string
    {
        return MatchResultMapper::class;
    }
}
