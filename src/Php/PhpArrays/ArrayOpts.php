<?php

namespace Class\Arrays;

class ArrayOpts
{
    public function getDoubleDataArray(): array
    {
        return [
            [
                'student' => 'Jake',
                'score' => 7.2
            ],
            [
                'student' => 'Rose',
                'score' => 9.3
            ],
            [
                'student' => 'Roxy',
                'score' => 6.9
            ],
        ];
    }

    public function getAssocDataArray(): array
    {
        return [
            'Jake' => 7.2,
            'Rose' => 9.3,
            'Allan' => 7.1,
            'Roxy' => 6.9,
            'Gester' => null,
        ];
    }

    public function getAssocDataArrayForDifference(): array
    {
        return [
            'Diana' => 7.2,
            'Allan' => 7.1,
            'Roxy' => 6.9,
            'Robert' => 4.4,
        ];
    }

    public function getAssocDataArrayForMerge(): array
    {
        return [
            'Diana' => 7.2,
            'Allan' => 9.9,
            'Gester' => 2.1,
            'Robert' => 4.4,
        ];
    }
}
