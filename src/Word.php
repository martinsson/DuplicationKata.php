<?php


class Word
{
    public static function startsWith($letters) {
        return function ($word) use ($letters) {
            return strpos($word, $letters) === 0;
        };
    }

    public static function contains($letters, $at) {
        return function ($name) use ($letters, $at) {
            return strpos($name, $letters) === $at;
        };
    }
}