<?php

class Lesson2Variable extends Song
{

    const BOTTLES_OF_BEER = "bottles of beer";
    const TAKE_ONE_DOWN_PASS_IT_AROUND = "Take one down, pass it around";
    const ON_THE_WALL = " on the wall";
    const BOTTLES_OF_BEER_100 = "100 " . self::BOTTLES_OF_BEER;
    const BOTTLES_OF_BEER_99 = "99 " . self::BOTTLES_OF_BEER;

    public function singBottlesOfBeer()
  {
      $this->sing(self::BOTTLES_OF_BEER_100 . self::ON_THE_WALL);
    $this->sing(self::BOTTLES_OF_BEER_100);
    $this->sing(self::TAKE_ONE_DOWN_PASS_IT_AROUND);
    $this->sing(self::BOTTLES_OF_BEER_99 . self::ON_THE_WALL);
    $this->sing(self::BOTTLES_OF_BEER_99 . self::ON_THE_WALL);
    $this->sing(self::BOTTLES_OF_BEER_99);
    $this->sing(self::TAKE_ONE_DOWN_PASS_IT_AROUND);
    $this->sing("98 " . self::BOTTLES_OF_BEER . self::ON_THE_WALL);
  }
}
