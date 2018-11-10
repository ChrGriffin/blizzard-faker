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
                    $typeFilters[] = 'last_only';
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
                return count(array_intersect($name, ['last', 'last_only'])) > 0;
            }));
        }

        if(in_array('first', $this->filters['name_type'])) {
            $returnNames[] = array_keys(array_filter($names, function ($name) {
                return count(array_intersect($name, ['first', 'first_only'])) > 0;
            }));
        }

        if(in_array('full', $this->filters['name_type'])) {

            // add names that are already full names directly to the return array
            $returnNames[] = array_keys(array_filter($names, function ($name) {
                return in_array('full_only', $name);
            }));

            $singleNames = array_filter($names, function ($name) {
                return count(array_intersect($name, ['first', 'last'])) > 0;
            });

            if(!empty(static::$races)) {

                $races = array_fill_keys(static::$races, []);
                $namesWithoutRace = [];

                foreach($singleNames as $name => $nameFilters) {
                    $nameRaces = array_intersect($nameFilters, static::$races);

                    if(!empty($nameRaces)) {
                        foreach($nameRaces as $nameRace) {
                            $races[$nameRace][$name] = $nameFilters;
                        }
                    }
                    else {
                        $namesWithoutRace[$name] = $nameFilters;
                    }
                }

                foreach($races as $raceNames) {
                    $returnNames[] = $this->combineNames($raceNames);
                }

                $returnNames[] = $this->combineNames($namesWithoutRace);
            }
            else {
                $returnNames[] = $this->combineNames($singleNames);
            }
        }

        return array_merge(...$returnNames);
    }

    /**
     * Work through an array of first and last names, combining them.
     *
     * @param array $names
     * @return mixed
     */
    protected function combineNames(array $names)
    {
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

        return $powerset;
    }
}