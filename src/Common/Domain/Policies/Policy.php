<?php

namespace Src\Common\Domain\Policies;

use Src\Common\Domain\Model\Model;

abstract class Policy
{
    abstract public static function findAll(): bool;

    // abstract public static function findById(): bool;

    // abstract public static function store(): bool;

    // abstract public static function update(Model $model): bool;

    // abstract public static function delete(): bool;
}
