<?php

namespace Src\Agenda\User\Domain\Model\ValueObjects;

use Src\Common\Domain\Exceptions\RequiredException;

final class Scrore
{
    private string $score;

    public function __construct(?string $score)
    {

        if (!$score) {
            throw new RequiredException('score');
        }

        $this->score = $score;
    }
}
