<?php

namespace ChrGriffin\BlizzardFaker\DataProviders;

abstract class DataProvider implements DataProviderInterface
{
    /**
     * Provide all possible combinations of multiple arrays.
     *
     * @param $arrays
     * @param int $i
     * @return array
     * @see https://stackoverflow.com/questions/8567082/how-to-generate-in-php-all-combinations-of-items-in-multiple-arrays
     */
    protected function powerset($arrays, $i = 0) {
        if (!isset($arrays[$i])) {
            return [];
        }

        if ($i == count($arrays) - 1) {
            return $arrays[$i];
        }

        // get combinations from subsequent arrays
        $tmp = $this->powerset($arrays, $i + 1);

        $result = [];

        // concat each array from tmp with each element from $arrays[$i]
        foreach ($arrays[$i] as $v) {
            foreach ($tmp as $t) {
                $result[] = is_array($t)
                    ? array_merge([$v], $t)
                    : [$v, $t];
            }
        }

        return $result;
    }

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