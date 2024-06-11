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
        $this->assertEquals("", "");
    }

        
}