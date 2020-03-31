<?php

class Lesson21 extends Song
{
  public function singSong($style, $names)
  {
      $songStyle = SongComposer::composeWithStyle("Hello %s, it's nice to meet you.", $style);

      $this->singLines($songStyle->repeatFor($names));
  }
}
