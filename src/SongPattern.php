<?php


class SongPattern
{

    protected $line;
    protected $lines;

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
        foreach ($words as $word) {
            $this->lines[] = $this->sayLineFor($word);
        }
        return $this;
    }

    public function endsWith($line) {
        $this->lines[] = $line;
        return $this;
    }

    public function singIt() {
        return implode(PHP_EOL, $this->lines);
    }
}