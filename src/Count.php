<?php


class Count
{
    private $start;

    private $end;

    public static function from($start) {
        return new self($start);
    }

    public function __construct($start) {
        $this->start = $start;
    }

    public function to($end) {
        $this->end = $end;
        return $this;
    }

    public function stepBy($stepLogic) {
        $current = $this->start;
        $steps = [$current];
        while($current < $this->end) {
            $current = call_user_func($stepLogic, $current);
            $steps[] = $current;
        }
        return $steps;
    }
}