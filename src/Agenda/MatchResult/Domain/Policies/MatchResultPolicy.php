<?php

namespace Src\Agenda\MatchResult\Domain\Policies;

use Src\Common\Domain\Policies\Policy;

class MatchResultPolicy extends Policy
{
    public static function findAll(): bool
    {
        return true;
    }

    // public static function findById(): bool;

    // public static function store(): bool;

    // public static function update(Model $model): bool;

    // public static function delete(): bool;
}
