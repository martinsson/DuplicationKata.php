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

    public function singFullSong($fullSong) {
        foreach (preg_split('/^.*$/', $fullSong ) as $line) {
            $this->sing($line);
        }
    }
}
