<?php

class RegressionTest extends \PHPUnit\Framework\TestCase {

  public function testCat()
  {
    $song = new Lesson1Straight();
    $song->singCatSong();
    $expected = $this->readApprovedFile("testCat");
    $this->assertEquals($expected, $song->song);
  }

  public function testBeer()
  {
    $song = new Lesson2Variable();
    $song->singBottlesOfBeer();
    $expected = $this->readApprovedFile("testBeer");
    $this->assertEquals($expected, $song->song);
  }

  public function testNames()
  {
    $song = new Lesson21();
    $names = ["Llewellyn", "Samatha", "Tomas", "Emilia"];
    $song->singSong(1, $names);
    $song->singSong(2, $names);
    $song->singSong(3, $names);

    $expected = $this->readApprovedFile("testNames");
    $this->assertEquals($expected, $song->song);
  }

  public function testNumbers()
  {
    $song = new Lesson3HigherOrderFunctions();
    $song->singCheers();

    $expected = $this->readApprovedFile("testNumbers");
    $this->assertEquals($expected, $song->song);
  }

  public function testNames3()
  {
    $song = new Lesson31();
    $names = ["Llewellyn", "Samatha", "Tomas", "Emilia"];
    $song->singSong(1, $names);
    $song->singSong(2, $names);
    $song->singSong(3, $names);

    $expected = $this->readApprovedFile("testNames3");
    $this->assertEquals($expected, $song->song);
  }

    /**
     * @param string $testname
     * @return false|string
     */
    private function readApprovedFile($testname)
    {
        $expected = file_get_contents(__DIR__ . "/approvals/RegressionTest.{$testname}.approved.txt", true);
        return $expected;
    }
}
