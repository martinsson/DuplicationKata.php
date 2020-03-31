<?php


class SongComposer
{
    public static function composeWithStyle($defaultLine, $style)
    {
        $songStyles = [
            SongPatternWithStyle::create($defaultLine)
                ->registerSpecialLine("Hip Hip Horray! For %s")
                ->when(Word::startsWith('L')),
            SongPatternWithStyle::create($defaultLine)
                ->registerSpecialLine("Say yeah! Say yo! Say %s")
                ->when(Word::contains('am', 1)),
            SongPatternWithStyle::create($defaultLine)
        ];

        return $songStyles[$style - 1];
    }
}