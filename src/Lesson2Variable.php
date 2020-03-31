<?php

class Lesson2Variable extends Song
{
  public function singBottlesOfBeer()
  {
      $songPattern = new SongPattern('%1$d bottles of beer on the wall' . PHP_EOL .
          '%1$d bottles of beer' . PHP_EOL .
          'Take one down, pass it around' . PHP_EOL .
          '%2$d bottles of beer on the wall'
      );
    $this->singLines(
        $songPattern->repeatFor([
            [100, 99],
            [99, 98]
        ])
    );
  }
}
