<?php


class SongPattern
{

    private $defaultLine;

    public static function create($defaultLine) {
        return new self($defaultLine);
    }
    private $specialLine = '';

    private $condition = null;

    public function __construct($defaultLine) {
        $this->defaultLine = $defaultLine;
    }

    public function registerSpecialLine($line) {
        $this->specialLine = $line;
        return $this;
    }

    public function when($condtion) {
        $this->condition = $condtion;
        return $this;
    }

    public function hasSpecialLineFor($word)
    {
        if (null === $this->condition) {
            return false;
        }
        return call_user_func( $this->condition, $word);
    }

    public function saySpecialLineFor($word)
    {
        return sprintf($this->specialLine, $word);
    }

    public function sayDefaultLine($word)
    {
        if (is_array($word)) {
            $sayIt = sprintf($this->defaultLine, ...$word);
        } else {
            $sayIt = sprintf($this->defaultLine, $word);
        }
        return $sayIt;
    }

    public function sayLineFor($word)
    {
        if ($this->hasSpecialLineFor($word)) {
            return $this->saySpecialLineFor($word);
        } else {
            return $this->sayDefaultLine($word);
        }
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