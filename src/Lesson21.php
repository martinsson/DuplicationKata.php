<?php

class Lesson21 extends Song
{
    public function singSong($specialName, $names)
    {
        foreach ($names as $name) {
            if ($specialName->isSpecialName($name)) {
                $this->sing($specialName->start . $name);
            } else {
                $this->sing("Hello " . $name . ", it's nice to meet you.");
            }
        }

    }


}


interface SpecialName
{

    public function isSpecialName($name);
}

class NeverSpecialName implements SpecialName
{

    var $start = "";

    public function isSpecialName($name)
    {
        return false;
    }
}

class ContainsAm implements SpecialName
{

    var $start = "Say yeah! Say yo! Say ";

    public function isSpecialName($name)
    {
        return strpos($name, "am") === 1;
    }
}

class StartsWithL implements SpecialName
{

    var $start = "Hip Hip Horray! For ";

    public function isSpecialName($name)
    {
        return strpos($name, "L") === 0;
    }
}

