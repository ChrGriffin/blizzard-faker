<?php

namespace ChrGriffin\BlizzardFaker\Traits;

trait GeneratesPowersets
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
}