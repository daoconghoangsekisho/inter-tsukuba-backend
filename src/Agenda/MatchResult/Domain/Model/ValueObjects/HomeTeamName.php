<?php

namespace Src\Agenda\User\Domain\Model\ValueObjects;

use Src\Common\Domain\Exceptions\RequiredException;

final class HomeTeamName
{
    private string $homeTeamName;

    public function __construct(?string $homeTeamName)
    {

        if (!$homeTeamName) {
            throw new RequiredException('homeTeamName');
        }

        $this->homeTeamName = $homeTeamName;
    }
}
