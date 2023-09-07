<?php

namespace Src\Agenda\MatchResult\Domain\Model;

use Src\Agenda\User\Domain\Model\ValueObjects\AwayTeamName;
use Src\Agenda\User\Domain\Model\ValueObjects\HomeTeamName;
use Src\Agenda\User\Domain\Model\ValueObjects\LeagueName;
use Src\Agenda\User\Domain\Model\ValueObjects\Result;
use Src\Agenda\User\Domain\Model\ValueObjects\Scrore;
use Src\Common\Domain\Model\Model;

class MatchResult extends Model
{
    public function __construct(
        public readonly ?int $id,
        public readonly LeagueName $leageName,
        public readonly HomeTeamName $homeTeamName,
        public readonly AwayTeamName $awayTeamName,
        public readonly Result $result, // win, lose, draw
        public readonly Scrore $score,
    ) {}

    // public function validateNonAdminWithCompany(): MatchResult
    // {
    //     if (!$this->company_id->value && !$this->is_admin) {
    //         throw new CompanyRequiredException();
    //     }
    //     return $this;
    // }

    // public function setAvatar($binaryData, $filename): void
    // {
    //     $this->avatar = new Avatar(binary_data: $binaryData, filename: $filename);
    // }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'leageName' => $this->leageName,
            'homeTeamName' => $this->homeTeamName,
            'awayTeamName' => $this->awayTeamName,
            'result' => $this->result,
            'score' => $this->score,
        ];
    }
}
