<?php

class Lesson21 extends Song
{
  public function singSong($style, $names)
  {
      $songStyle = $this->composeSongStyle("Hello %s, it's nice to meet you.", $style);
      foreach ($names as $name)
        {
            $this->sing( $songStyle->sayLineFor($name) );
        }
  }

    /**
     * @param $style
     * @return mixed
     */
    public function composeSongStyle($defaultLine, $style)
    {
        $songStyles = [
            SongStyle::create($defaultLine)
                ->registerSpecialLine("Hip Hip Horray! For %s")
                ->when(Word::startsWith('L')),
            SongStyle::create($defaultLine)
                ->registerSpecialLine("Say yeah! Say yo! Say %s")
                ->when(Word::contains('am', 1)),
            SongStyle::create($defaultLine)
        ];

        $songStyle = $songStyles[$style - 1];
        return $songStyle;
    }
}
