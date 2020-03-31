<?php

class Lesson2Variable extends Song
{
  public function singBottlesOfBeer()
  {
    $this->singPattern( '%1$d bottles of beer on the wall' . PHP_EOL .
        '%1$d bottles of beer' . PHP_EOL .
        'Take one down, pass it around' . PHP_EOL .
        '%2$d bottles of beer on the wall'
    )->fromLineNb(100)->toLineNb(99);
  }
}
