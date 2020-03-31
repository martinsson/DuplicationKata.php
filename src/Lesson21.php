<?php

class Lesson21 extends Song
{
  public function singSong($style, $names)
  {
      $songStyle = $this->composeSongStyle($style);
      foreach ($names as $name)
        {
            $this->sing( $songStyle->sayLineFor($name) );
        }
  }

    /**
     * @param $style
     * @return mixed
     */
    public function composeSongStyle($style)
    {
        $songStyles = [
            SongStyle::create()
                ->registerSpecialLine("Hip Hip Horray! For %s")
                ->when(
                    function ($name) {
                        return strpos($name, "L") === 0;
                    }
                ),
            SongStyle::create()
                ->registerSpecialLine("Say yeah! Say yo! Say %s")
                ->when(
                    function ($name) {
                        return strpos($name, "am") === 1;
                    }
                ),
            SongStyle::create()
        ];

        $songStyle = $songStyles[$style - 1];
        return $songStyle;
    }
}
