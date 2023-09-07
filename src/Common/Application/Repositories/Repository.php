<?php

namespace Src\Common\Application\Repositories\Eloquent;

use Src\Common\Application\Mappers\Mapper;
use Src\Common\Domain\Model\Model;
use Src\Common\Domain\Repositories\RepositoryInterface;
use Src\Common\Infrastructure\EloquentModels\EloquentModel;

abstract class Repository implements RepositoryInterface
{
    protected EloquentModel $eloquentModel;
    protected Mapper $mapper;

    public function __construct()
    {
        $this->eloquentModel = app()->make(
            $this->getEloquentModel()
        );
        $this->mapper = app()->make(
            $this->getMapper()
        );
    }

    /** @return EloquentModel class */
    abstract public function getEloquentModel(): string;
    /** @return Mapper class */
    abstract public function getMapper(): string;

    /** @return Model[] $models */
    public function findAll(): array
    {
        $models = [];
        foreach ($this->eloquentModel->all() as $eloquent) {
            $models[] = $this->mapper->fromEloquent($eloquent);
        }
        return $models;
    }

    public function findById(string $id): Model
    {
        $eloquent = $this->eloquentModel->query()->findOrFail($id);
        return $this->mapper->fromEloquent($eloquent);
    }

    public function store(Model $model): Model
    {
        $eloquent = $this->mapper->toEloquent($model);
        $eloquent->save();
        return $this->mapper->fromEloquent($eloquent);
    }

    public function update(Model $model): Model
    {
        $eloquent = $this->mapper->toEloquent($model);
        $eloquent->save();
        return $this->mapper->fromEloquent($eloquent);
    }

    public function delete(int $id): void
    {
        $eloquent = $this->eloquentModel->query()->findOrFail($id);
        $eloquent->delete();
    }
}
