<?php

namespace Src\Agenda\User\Domain\Model\ValueObjects;

use Src\Common\Domain\Exceptions\RequiredException;

final class LeagueName
{
    private string $leagueName;

    public function __construct(?string $leagueName)
    {

        if (!$leagueName) {
            throw new RequiredException('leagueName');
        }

        $this->leagueName = $leagueName;
    }
}
