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
        'diablo'              => Diablo\Names::class,
        'hearthstone'         => Hearthstone\Names::class,
        'heroes_of_the_storm' => HeroesOfTheStorm\Names::class,
        'starcraft'           => Starcraft\Names::class,
        'warcraft'            => Warcraft\Names::class
    ];

    /**
     * Provide configured names.
     *
     * @return array
     * @throws \Exception
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
        while(empty($names) && !empty($providers)) {

            $randomIndex = array_rand($providers);
            $names = array_unique($this->getDataFromProvider(
                $providers[$randomIndex]
            ));

            unset($providers[$randomIndex]);
        }

        if(empty($names)) {
            throw new \Exception('Could not find name. This is likely due to an overly specific query.');
        }

        return $names;
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