<?php

namespace ChrGriffin\BlizzardFaker\DataProviders\Traits;

trait FiltersData
{
    /**
     * Filters on the returned data.
     *
     * @var array
     */
    protected $filters = [];

    /**
     * Add a new filter.
     *
     * @param string $filter
     * @param string $value
     * @return $this
     */
    public function addFilter(string $filter, string $value)
    {
        if(!isset($this->filters[$filter])) {
            $this->filters[$filter] = [];
        }

        $this->filters[$filter][] = $value;
        return $this;
    }

    /**
     * Set a given filter's value.
     *
     * @param string $filter
     * @param array $value
     * @return $this
     */
    public function setFilter(string $filter, array $value)
    {
        $this->filters[$filter] = $value;
        return $this;
    }
}