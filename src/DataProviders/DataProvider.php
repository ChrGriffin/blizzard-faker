<?php

namespace ChrGriffin\BlizzardFaker\DataProviders;

use ChrGriffin\BlizzardFaker\Traits\GeneratesPowersets;

abstract class DataProvider implements DataProviderInterface
{
    /**
     * Class traits.
     */
    use GeneratesPowersets;

    /**
     * Get a random index from a weighted array.
     *
     * ie:
     *     [
     *         'A' => 45, // 45% chance of being chosen
     *         'B' => 50, // 50% chance of being returned
     *         'C' => 5 // 5% chance of being returned
     *     ]
     *
     * @param array $weightedValues
     * @return string
     * @see https://stackoverflow.com/questions/445235/generating-random-results-by-weight-in-php
     */
    protected function weightedRandom(array $weightedValues)
    {
        $rand = mt_rand(1, (int) array_sum($weightedValues));

        foreach ($weightedValues as $key => $value) {
            $rand -= $value;
            if ($rand <= 0) {
                return $key;
            }
        }

        return array_rand($weightedValues);
    }
}