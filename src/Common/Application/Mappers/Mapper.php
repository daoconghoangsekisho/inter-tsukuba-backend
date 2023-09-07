<?php

namespace Src\Common\Application\Mappers;

use Illuminate\Http\Request;
use Src\Common\Domain\Model\Model;
use Src\Common\Infrastructure\EloquentModels\EloquentModel;

abstract class Mapper
{
    abstract public static function fromRequest(Request $request, ?int $id = null): Model;

    abstract public static function fromEloquent(EloquentModel $eloquent): Model;

    abstract public static function toEloquent(Model $model): EloquentModel;
}