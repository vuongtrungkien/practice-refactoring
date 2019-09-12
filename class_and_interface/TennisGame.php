<?php
include "cases.php";

class TennisGame implements cases
{


    public $score = '';
    protected $pointOfPlayer1;
    protected $pointOfPlayer2;

    public function __construct($pointOfPlayer1, $pointOfPlayer2)
    {
        $this->pointOfPlayer1 = $pointOfPlayer1;
        $this->pointOfPlayer2 = $pointOfPlayer2;
    }


    public function gameResults()
    {
        $points_Equal = $this->pointOfPlayer1 == $this->pointOfPlayer2;
        if ($points_Equal) {
            switch ($this->pointOfPlayer1) {
                case self::DEFAULT_SCORE_0:
                    $this->score = self::ALL_ZERO_POINT;
                    break;
                case self::DEFAULT_SCORE_1:
                    $this->score = self::ALL_ONE_POINT;
                    break;
                case self::DEFAULT_CORE_2:
                    $this->score = self::ALL_TWO_POINT;
                    break;
                case self::DEFAULT_CORE_3:
                    $this->score = self::ALL_THREE_POINT;
                    break;
                default:
                    $this->score = self::DEUCE;
                    break;
            }
        } else {
            $hitPoints = $this->pointOfPlayer1 >= self::Decisive_point_when_Deuce || $this->pointOfPlayer2 >= self::Decisive_point_when_Deuce;
            if ($hitPoints) {
                $minusResult = $this->pointOfPlayer1 - $this->pointOfPlayer2;
                if ($minusResult == self::DEFAULT_SCORE_1) $this->score = self::ADVANTAGE_PLAYER_1;
                else if ($minusResult == -self::DEFAULT_SCORE_1) $this->score = self::ADVANTAGE_PLAYER_2;
                else if ($minusResult >= self::DEFAULT_CORE_2) $this->score = self::PLAYER_1_WIN;
                else $this->score = self::PLAYER_2_WIN;
            } else {
                for ($i = self::DEFAULT_SCORE_1; $i < self::DEFAULT_CORE_3; $i++) {
                    if ($i == self::DEFAULT_SCORE_1) $tempScore = $this->pointOfPlayer1;
                    else {
                        $this->score .= self::DASH;
                        $tempScore = $this->pointOfPlayer2;
                    }
                    switch ($tempScore) {
                        case self::DEFAULT_SCORE_0:
                            $this->score .= self::ZERO_POINT;
                            break;
                        case self::DEFAULT_SCORE_1:
                            $this->score .= self::ONE_POINT;
                            break;
                        case self::DEFAULT_CORE_2:
                            $this->score .= self::TWO_POINT;
                            break;
                        case self::DEFAULT_CORE_3:
                            $this->score .= self::THREE_POINT;
                            break;
                    }
                }
            }
        }
    }

    public function __toString()
    {
        $this->gameResults();
        return $this->score;
    }

}

