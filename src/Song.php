<?php

class Song
{
    var $song;
    private $startingLine;
    private $songPattern;

    public function __construct()
    {
        $this->song = "";
    }

    public function sing($line)
    {
        $this->song .= $line . "\n";
    }

    public function singLines($lines)
    {
        foreach (preg_split('/\n/', $lines) as $line) {
            $this->sing($line);
        }
    }

    public function singPattern($songPattern)
    {
        $this->singLines($songPattern->singIt());
    }
}
