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

    /**
     * @param $style
     * @return mixed
     */
    public function composeSongStyle($defaultLine, $style)
    {
        $songStyles = [
            SongPattern::create($defaultLine)
                ->registerSpecialLine("Hip Hip Horray! For %s")
                ->when(Word::startsWith('L')),
            SongPattern::create($defaultLine)
                ->registerSpecialLine("Say yeah! Say yo! Say %s")
                ->when(Word::contains('am', 1)),
            SongPattern::create($defaultLine)
        ];

        $songStyle = $songStyles[$style - 1];
        return $songStyle;
    }
}
