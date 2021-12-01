<?php
use PHPUnit\Framework\TestCase;
require 'BerlinClock.php';
class BerlinClockTest extends TestCase
{
    public function testGetBerlinMinutes0ShouldReturn15x0()
    {
        // Arrange
        $berlinClock = new BerlinClock();

        // Act
        $actual = $berlinClock->getBerlinMinutes(0);

        // Assert
        $this->assertEquals("OOOOOOOOOOO OOOO", $actual);
    }
    public function testGetBerlinHours0ShouldReturn8x0()
    {
        // Arrange
        $berlinClock = new BerlinClock();

        // Act
        $actual = $berlinClock->getBerlinHours(0);

        // Assert
        $this->assertEquals("OOOO OOOO", $actual);
    }
    public function testGetBerlinSecond0ShouldReturnY()
    {
        // Arrange
        $berlinClock = new BerlinClock();

        // Act
        $actual = $berlinClock->getBerlinSeconds(0);

        // Assert
        $this->assertEquals("Y", $actual);
    }
}
