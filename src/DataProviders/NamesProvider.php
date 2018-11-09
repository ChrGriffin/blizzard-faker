<?php

namespace ChrGriffin\BlizzardFaker\DataProviders;

class NamesProvider extends DataProvider
{
    /**
     * Class traits.
     */
    use Traits\FiltersData;

    /**
     * Internal DataProviders.
     *
     * @var array
     */
    protected $providers = [
        'diablo'      => Diablo\Names::class,
        'hearthstone' => Hearthstone\Names::class,
        'starcraft'   => Starcraft\Names::class
    ];

    /**
     * Provide configured names.
     *
     * @return array
     */
    public function provide() : array
    {
        if(!empty($this->filters['franchise'])) {
            $providers = [];
            foreach($this->filters['franchise'] as $franchise) {
                if(!in_array($franchise, array_keys($this->providers))) {
                    throw new \InvalidArgumentException($franchise . ' is not a valid franchise.');
                }

                $providers[] = $this->providers[$franchise];
            }
        }
        else {
            $providers = $this->providers;
        }

        $names = [];
        foreach($providers as $providerClass) {
            $names[] = $this->getDataFromProvider($providerClass);
        }

        return array_unique(array_merge(...$names));
    }

    /**
     * Retrieve data from a configured sub-DataProvider.
     *
     * @param string $providerClass
     * @return array
     */
    public function getDataFromProvider(string $providerClass) : array
    {
        $provider = new $providerClass;

        if(!empty($this->filters['gender'])) {
            $provider->setFilter('gender', $this->filters['gender']);
        }

        if(!empty($this->filters['name_type'])) {
            $provider->setFilter('name_type', $this->filters['name_type']);
        }

        if(!empty($this->filters['race'])) {
            $provider->setFilter('race', $this->filters['race']);
        }

        return $provider->provide();
    }
}