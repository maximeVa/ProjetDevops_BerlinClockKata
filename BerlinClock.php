<?php
class BerlinClock {
    public function getBerlinMinutes(int $minute): String
    {
        if($minute == 0)
            return "OOOOOOOOOOO OOOO";
    }
    public function getBerlinHours(int $hours):String
    {
        if($hours == 0)
            return "OOOO OOOO";
    }
}
