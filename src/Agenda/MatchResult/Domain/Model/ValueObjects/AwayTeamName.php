<?php

namespace Src\Agenda\User\Domain\Model\ValueObjects;

use Src\Common\Domain\Exceptions\RequiredException;

final class AwayTeamName
{
    private string $awayTeamName;

    public function __construct(?string $awayTeamName)
    {

        if (!$awayTeamName) {
            throw new RequiredException('awayTeamName');
        }

        $this->awayTeamName = $awayTeamName;
    }
}
