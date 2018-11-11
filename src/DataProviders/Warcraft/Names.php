<?php

namespace ChrGriffin\BlizzardFaker\DataProviders\Warcraft;

use ChrGriffin\BlizzardFaker\{
    DataProviders\DataProvider,
    DataProviders\Traits\FiltersData,
    DataProviders\Traits\GetsDataFromProviders,
    Exceptions\InvalidRaceException,
    Exceptions\NoResultsException
};

class Names extends DataProvider
{
    /**
     * Class traits.
     */
    use FiltersData, GetsDataFromProviders;

    /**
     * Internal DataProviders.
     *
     * @var array
     */
    protected $providers = [
        'human'     => [
            'class' => Names\Human::class
        ],
        'dwarf'     => [
            'class' => Names\Dwarf::class
        ],
        'night_elf' => [
            'class' => Names\NightElf::class
        ],
        'gnome'     => [
            'class' => Names\Gnome::class
        ],
        'draenei'   => [
            'class' => Names\Draenei::class
        ],
        'worgen'    => [
            'class' => Names\Worgen::class
        ],
        'orc'       => [
            'class' => Names\Orc::class
        ],
        'forsaken'  => [
            'class' => Names\Forsaken::class
        ],
        'undead'    => [
            'class' => Names\Forsaken::class
        ],
        'troll'     => [
            'class' => Names\Troll::class
        ],
        'tauren'    => [
            'class' => Names\Tauren::class
        ],
        'blood_elf' => [
            'class' => Names\BloodElf::class
        ],
        'goblin'    => [
            'class' => Names\Goblin::class
        ],
        'pandaren'  => [
            'class' => Names\Pandaren::class
        ],
    ];

    /**
     * Provide configured names.
     *
     * @return array
     * @throws InvalidRaceException
     * @throws NoResultsException
     */
    public function provide() : array
    {
        $providers = [];

        if(!empty($this->filters['race'])) {
            foreach($this->filters['race'] as $race) {
                if(!isset($this->providers[$race])) {
                    throw new InvalidRaceException($race, ['provider' => self::class]);
                }

                $providers[] = $this->providers[$race];
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