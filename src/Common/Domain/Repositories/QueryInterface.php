<?php

namespace Src\Common\Domain\Repositories;

use Src\Common\Domain\Exceptions\UnauthorizedUserException;
use Src\Common\Domain\Policies\Policy;

interface QueryInterface
{
    // protected function getRepositoryInterface(): RepositoryInterface;
    // protected function getPolicy(): Policy;

    /**
     * @throws UnauthorizedUserException
     */
    public function handle(): mixed;
}
