<?php
use ApprovalTests\Approvals;

class RegressionTest extends \PHPUnit\Framework\TestCase {

  public function testCat()
  {
    $song = new Lesson1Straight();
    $song->singCatSong();
    Approvals::approveString($song->song);
  }

  public function testBeer()
  {
    $song = new Lesson2Variable();
    $song->singBottlesOfBeer();
    Approvals::verifyString($song->song);
  }

  public function testNames()
  {
    $song = new Lesson21();
    $names = ["Llewellyn", "Samatha", "Tomas", "Emilia"];
    $song->singSong(new StartsWithL(), $names);
    $song->singSong(new ContainsAm(), $names);
    $song->singSong(new NeverSpecialName(), $names);
    Approvals::verifyString($song->song);
  }

  public function testNumbers()
  {
    $song = new Lesson3HigherOrderFunctions();
    $song->singCheers();
    Approvals::verifyString($song->song);
  }

  public function testNames3()
  {
    $song = new Lesson31();
    $names = ["Llewellyn", "Samatha", "Tomas", "Emilia"];
    $song->singSong(1, $names);
    $song->singSong(2, $names);
    $song->singSong(3, $names);
    Approvals::verifyString($song->song);
  }
}
