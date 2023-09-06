<?php

namespace Src\Agenda\MatchResult\Domain\Model;

class MatchResult
{
    public function __construct(
        public readonly ?int $id,
        public string $homeTeamName,
        public string $awayTeamName,
        public string $result, // win, lose, draw
        public string $score,
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
            'homeTeamName' => $this->homeTeamName,
            'awayTeamName' => $this->awayTeamName,
            'result' => $this->result,
            'score' => $this->score,
        ];
    }
}
