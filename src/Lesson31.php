<?php

class Lesson31 extends Song
{
    public function singSong($style, $names)
    {
        switch ($style) {
            case 1 :
                foreach ($names as $name) {
                    if (strpos($name, "L") === 0) {
                        $this->sing("Hip Hip Horray! For " . $name);
                    } else {
                        $this->sing("Hello " . $name . ", it's nice to meet you.");
                    }
                }
                break;
            case 2 :
                foreach ($names as $name) {

                    if (strpos($name, "a") !== false) {
                        $this->sing(strtoupper($name) . "! Yay " . $name . "!");
                    } else {
                        $this->sing("Hello " . $name . ", it's nice to meet you.");
                    }
                }
                break;
            case 3 :
                foreach ($names as $name) {
                    $this->sing("Hello " . $name . ", it's nice to meet you.");
                }
                break;
        }
    }
}
