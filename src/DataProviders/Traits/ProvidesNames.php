<?php

namespace ChrGriffin\BlizzardFaker\DataProviders\Traits;

trait ProvidesNames
{
    /**
     * Whether to filter names by gender.
     *
     * @return bool
     */
    protected function filtersByGender()
    {
        return $this->filtersByGender ?? false;
    }

    /**
     * Whether to filter names by type.
     *
     * @returns bool
     */
    protected function filtersByType()
    {
        return $this->filtersByType ?? false;
    }

    /**
     * Whether to filter names by race.
     *
     * @return bool
     */
    protected function filtersByRace()
    {
        return $this->filtersByRace ?? false;
    }

    /**
     * Filter the given names by the configured settings.
     *
     * @param array $names
     * @return array
     */
    protected function filterAndBuildNames(array $names) : array
    {
        // return full names if we have no filter set
        if($this->filtersByType() && empty($this->filters['name_type'])) {
            $this->filters['name_type'] = ['full'];
        }

        // filter down and build the names
        $names = $this->filterByGender($names);
        $names = $this->filterByRace($names);
        return $this->buildNames($names);
    }

    /**
     * Filter names by gender.
     *
     * @param array $names
     * @return array
     */
    protected function filterByGender(array $names) : array
    {
        if(!$this->filtersByGender() || empty($this->filters['gender'])) {
            return $names;
        }

        return array_filter($names, function ($name) {
            return in_array('last', $name)
                ? true
                : count(array_intersect($name, $this->filters['gender'])) > 0;
        });
    }

    /**
     * Filter names by type.
     *
     * @param array $names
     * @return array
     */
    protected function filterByType(array $names) : array
    {
        if(!$this->filtersByType() || empty($this->filters['name_type'])) {
            return $names;
        }

        $typeFilters = [];
        foreach($this->filters['name_type'] as $type) {
            switch($type) {
                case 'first':
                    $typeFilters[] = 'first';
                    $typeFilters[] = 'first_only';
                    break;
                case 'last':
                    $typeFilters[] = 'last';
                    break;
                default: // full
                    $typeFilters[] = 'first';
                    $typeFilters[] = 'last';
                    $typeFilters[] = 'full_only';
                    break;
            }
        }

        return array_filter($names, function ($name) use ($typeFilters) {
            return count(array_intersect($name, $typeFilters)) > 0;
        });
    }

    /**
     * Filter names by race.
     *
     * @param array $names
     * @return array
     */
    protected function filterByRace(array $names) : array
    {
        if(!$this->filtersByRace() || empty($this->filters['race'])) {
            return $names;
        }

        return array_filter($names, function ($name) {
            return count(array_intersect($name, $this->filters['race'])) > 0;
        });
    }

    /**
     * Build and return names based on our configuration.
     *
     * @param array $names
     * @return array
     */
    protected function buildNames(array $names) : array
    {
        if(!$this->filtersByType() || empty($this->filters['name_type'])) {
            return array_keys($names);
        }

        $returnNames = [];

        if(in_array('last', $this->filters['name_type'])) {
            $returnNames[] = array_keys(array_filter($names, function ($name) {
                return in_array('last', $name);
            }));
        }

        if(in_array('first', $this->filters['name_type'])) {
            $returnNames[] = array_keys(array_filter($names, function ($name) {
                return in_array('first_only', $name);
            }));
        }

        if(in_array('full', $this->filters['name_type'])) {

            $fullNames = array_keys(array_filter($names, function ($name) {
                return in_array('full_only', $name);
            }));

            $firstNames = array_keys(array_filter($names, function ($name) {
                return in_array('first', $name);
            }));

            $lastNames = array_keys(array_filter($names, function ($name) {
                return in_array('last', $name);
            }));

            $powerset = $this->powerset([$firstNames, $lastNames]);

            array_walk($powerset, function (&$name) {
                $name = implode(' ', $name);
            });

            $returnNames[] = array_unique(array_merge(
                $powerset,
                $fullNames
            ));
        }

        return array_merge(...$returnNames);
    }
}