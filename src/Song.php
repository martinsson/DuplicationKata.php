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
        $this->songPattern = $songPattern;
        return $this;
    }

    public function fromLineNb($lineNb) {
        $this->startingLine = $lineNb;
        return $this;
    }
    public function toLineNb($lineNb) {
        $step = $this->startingLine - $lineNb > 0 ? -1 : 1;
        for($currentLine = $this->startingLine; $currentLine != $lineNb + $step; $currentLine += $step) {
            $this->singLines(sprintf( $this->songPattern, $currentLine, $currentLine + $step ));
        }
    }
}
