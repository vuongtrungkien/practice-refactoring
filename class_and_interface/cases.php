<?php


interface cases
{
    const DEFAULT_SCORE_0 = 0;
    const DEFAULT_SCORE_1 = 1;
    const DEFAULT_CORE_2 = 2;
    const DEFAULT_CORE_3 = 3;
    const Decisive_point_when_Deuce = 4;

    const PLAYER_1_WIN = "Win for player1";
    const PLAYER_2_WIN = "Win for player2";
    const ADVANTAGE_PLAYER_1 = "Advantage player1";
    const ADVANTAGE_PLAYER_2 = "Advantage player2";


    const ALL_ZERO_POINT = "Love-All";
    const ALL_ONE_POINT = "Fifteen-All";
    const ALL_TWO_POINT = "Thirty-All";
    const ALL_THREE_POINT = "Forty-All";
    const ZERO_POINT = "Love";
    const ONE_POINT = "Fifteen";
    const TWO_POINT = "Thirty";
    const THREE_POINT = "Forty";
    const DEUCE = "Deuce";
    const DASH = "-";
}