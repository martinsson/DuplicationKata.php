<?php


class SongPatternWithStyle extends SongPattern
{

    private $specialLine = '';

    private $condition = null;

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

    public function sayLineFor($word)
    {
        if ($this->hasSpecialLineFor($word)) {
            return $this->saySpecialLineFor($word);
        } else {
            return parent::sayLineFor($word);
        }
    }

}