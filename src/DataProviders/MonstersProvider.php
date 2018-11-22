<?php

namespace ChrGriffin\BlizzardFaker\DataProviders;

use ChrGriffin\BlizzardFaker\Exceptions\{
    InvalidFranchiseException,
    NoResultsException
};

class MonstersProvider extends DataProvider
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
        'diablo' => [
            'class'  => Diablo\Monsters::class
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

        $monsters = $this->getDataFromRandomProvider($providers);
        if(empty($monsters)) {
            throw new NoResultsException('monster');
        }

        return $monsters;
    }
}
