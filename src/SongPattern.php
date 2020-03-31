<?php


class SongPattern
{

    protected $line;

    public function __construct($defaultLine)
    {
        $this->line = $defaultLine;
    }

    public static function create($defaultLine)
    {
        return new SongPatternWithStyle($defaultLine);
    }

    public function sayLineFor($word)
    {
        if (is_array($word)) {
            $sayIt = sprintf($this->line, ...$word);
        } else {
            $sayIt = sprintf($this->line, $word);
        }
        return $sayIt;
    }

    public function repeatFor($words)
    {
        $lines = [];
        foreach ($words as $word) {
            $lines[] = $this->sayLineFor($word);
        }
        return implode(PHP_EOL, $lines);
    }
}