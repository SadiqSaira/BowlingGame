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

        
}