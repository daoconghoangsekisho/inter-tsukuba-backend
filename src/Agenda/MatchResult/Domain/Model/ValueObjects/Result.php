<?php

namespace Src\Agenda\User\Domain\Model\ValueObjects;

use Src\Common\Domain\Exceptions\RequiredException;

final class Result
{
    private string $result;

    public function __construct(?string $result)
    {

        if (!$result) {
            throw new RequiredException('result');
        }

        $this->result = $result;
    }
}
