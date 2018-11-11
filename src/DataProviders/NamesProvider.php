<?php

namespace ChrGriffin\BlizzardFaker\DataProviders;

use ChrGriffin\BlizzardFaker\Exceptions\{
    InvalidFranchiseException,
    NoResultsException
};

class NamesProvider extends DataProvider
{
    /**
     * Class traits.
     */
    use Traits\FiltersData, Traits\GetsDataFromProviders;

    /**
     * Internal DataProviders.
     *
     * @var array
     */
    protected $providers = [
        'diablo'              => [
            'class'  => Diablo\Names::class,
            'weight' => 26
        ],
        'hearthstone'         => [
            'class'  => Hearthstone\Names::class,
            'weight' => 2
        ],
        'heroes_of_the_storm' => [
            'class'  => HeroesOfTheStorm\Names::class,
            'weight' => 2
        ],
        'starcraft'           => [
            'class'  => Starcraft\Names::class,
            'weight' => 26
        ],
        'warcraft'            => [
            'class'  => Warcraft\Names::class,
            'weight' => 44,
        ]
    ];

    /**
     * Provide configured names.
     *
     * @return array
     * @throws InvalidFranchiseException
     * @throws NoResultsException
     */
    public function provide() : array
    {
        if(!empty($this->filters['franchise'])) {
            $providers = [];
            foreach($this->filters['franchise'] as $franchise) {
                if(!in_array($franchise, array_keys($this->providers))) {
                    throw new InvalidFranchiseException($franchise, ['provider' => self::class]);
                }

                $providers[] = $this->providers[$franchise];
            }
        }
        else {
            $providers = $this->providers;
        }

        $names = $this->getDataFromRandomProvider($providers);
        if(empty($names)) {
            throw new NoResultsException('name');
        }

        return $names;
    }
}