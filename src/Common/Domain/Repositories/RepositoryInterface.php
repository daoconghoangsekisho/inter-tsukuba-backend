<?php

namespace Src\Common\Domain\Repositories;

use Src\Common\Application\Mappers\Mapper;
use Src\Common\Domain\Model\Model;
use Src\Common\Infrastructure\EloquentModels\EloquentModel;

interface RepositoryInterface
{
    /** @return EloquentModel class */
    public function getEloquentModel(): string;
    /** @return Mapper class */
    public function getMapper(): string;

    /** @return Model[] $models */
    public function findAll(): array;

    public function findById(string $modelId): Model;

    public function store(Model $model): Model;

    public function update(Model $model): Model;

    public function delete(int $id): void;
}
