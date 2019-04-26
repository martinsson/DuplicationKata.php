<?php


class Lesson1Straight extends Song
{
    public function singCatSong()
  {
      $this->sing("We gave the cat to a little kid");
      $this->getPartOfSong();
      $this->sing("We sent the cat out on a boat");
      $this->getPartOfSong();
  }

    private function getPartOfSong(): void
    {
        $theCatCameBack = 'the cat came back';
        $this->sing("But $theCatCameBack");
        $this->sing("The very next day");
        $this->sing("Oh $theCatCameBack");
        $this->sing("We thought he was a goner");
        $this->sing("But $theCatCameBack, he just wouldn't go away");
    }
}
