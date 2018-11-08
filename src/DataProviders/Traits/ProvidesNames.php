<?php

namespace ChrGriffin\BlizzardFaker\DataProviders\Traits;

trait ProvidesNames
{
    /**
     * Filter the given names by the configured settings.
     *
     * @param array $names
     * @return array
     */
    private function filterAndBuildNames(array $names) : array
    {
        $filters = [
            'gender' => [],
            'type' => []
        ];

        if($this->gender !== null && $this->nameType !== 'last') {
            $filters['gender'][] = $this->gender;
        }

        switch($this->nameType) {
            case 'first':
                $filters['type'][] = 'first';
                $filters['type'][] = 'first_only';
                break;
            case 'last':
                $filters['type'][] = 'last';
                break;
            default: // full
                $filters['type'][] = 'first';
                $filters['type'][] = 'last';
                $filters['type'][] = 'full_only';
                break;
        }

        // filter by gender
        if(!empty($filters['gender'])) {
            $names = array_filter($names, function ($name) use ($filters) {
                return in_array('last', $name)
                    ? true
                    : count(array_intersect($name, $filters['gender'])) > 0;
            });
        }

        // filter by type
        if(!empty($filters['type'])) {
            $names = array_filter($names, function ($name) use ($filters) {
                return count(array_intersect($name, $filters['type'])) > 0;
            });
        }

        switch($this->nameType) {
            case 'first':
            case 'last':
                return array_keys($names);

            default:
                $fullNames = array_keys(array_filter($names, function ($name) {
                    return in_array('full_only', $name);
                }));

                $firstNames = array_keys(array_filter($names, function ($name) {
                    return in_array('first', $name);
                }));

                $lastNames = array_keys(array_filter($names, function ($name) {
                    return in_array('last', $name);
                }));

                return array_unique(array_merge(
                    $this->buildFullNames($firstNames, $lastNames),
                    $fullNames
                ));
        }
    }

    /**
     * Generate a powerset of all provided first and last names as full names.
     *
     * @param array $firstNames
     * @param array $lastNames
     * @return array
     */
    private function buildFullNames(array $firstNames, array $lastNames) : array
    {
        $powerset = $this->powerset([$firstNames, $lastNames]);

        array_walk($powerset, function (&$name) {
            $name = implode(' ', $name);
        });

        return $powerset;
    }
}