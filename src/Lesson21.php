<?php

class Lesson21 extends Song
{
  public function singSong($style, $names)
  {
    $songStyles = [
        SongStyle::create()
            ->registerSpecialLine("Hip Hip Horray! For %s")
            ->when(
                function($name) {
                    return strpos($name, "L") === 0;
                }
            ),
        SongStyle::create()
            ->registerSpecialLine("Say yeah! Say yo! Say %s")
            ->when(
                function($name) {
                    return strpos($name, "am") === 1;
                }
            ),
        SongStyle::create()
    ];

    $songStyle = $songStyles[$style-1];
    foreach ($names as $name)
    {
      if ($songStyle->hasSpecialLineFor($name))
      {
        $this->sing( $songStyle->saySpecialLineFor($name) );
      }
      else
      {
        $this->sing("Hello " . $name . ", it's nice to meet you.");
      }
    }
  }

}
