<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class BowlingGameTest extends TestCase
{
    private BowlingGame $bowlingGame;
     protected function setUp(): void
    {
        $this->bowlingGame = new BowlingGame();
    }

    public function test_bowling_game(): void
    {
        $this->bowlingGame->roll(1);
        $this->bowlingGame->roll(2);
        $this->assertEquals(3, $this->bowlingGame->score());
    }
    //test to validate roll() is recording total score of knocked down pins for each frame
    public function test_game_recording_total_score_of_ten_frame(): void
    {
        $allScores = [
            2, 2,
            2, 2,
            2, 2,
            2, 2,
            2, 2,
            2, 2,
            2, 2,
            2, 2,
            2, 2,
            2, 2
            ];
        foreach ($allScores as $score) {
            $this->bowlingGame->roll($score);
        }
        $this->assertEquals(40, $this->bowlingGame->score());
    }
    
    public function test_recording_total_score_of_ten_frame_gutter_game(): void
    {
        $allScores = [
            0, 0,
            0, 0,
            0, 0,
            0, 0,
            0, 0,
            0, 0,
            0, 0,
            0, 0,
            0, 0,
            0, 0
            ];
        foreach ($allScores as $score) {
            $this->bowlingGame->roll($score);
        }
        $this->assertEquals(0, $this->bowlingGame->score());
    }
}