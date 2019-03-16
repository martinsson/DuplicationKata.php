<?php

class Song
{
    var $song;

    public function __construct()
    {
        $this->song = "";
    }

    public function sing($line)
    {
        $this->song .= $line . "\n";
    }
}
