<?php


class SongStyle
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

    public function hasSpecialLineFor($name)
    {
        if (null === $this->condition) {
            return false;
        }
        return call_user_func( $this->condition, $name);
    }

    public function saySpecialLineFor($name)
    {
        return sprintf($this->specialLine, $name);
    }

    public function sayDefaultLine($name)
    {
        return sprintf($this->defaultLine, $name);
    }

    public function sayLineFor($name)
    {
        if ($this->hasSpecialLineFor($name)) {
            return $this->saySpecialLineFor($name);
        } else {
            return $this->sayDefaultLine($name);
        }
    }


}