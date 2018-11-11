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

    protected $providers = [
        'human'     => Names\Human::class,
        'dwarf'     => Names\Dwarf::class,
        'night_elf' => Names\NightElf::class,
        'gnome'     => Names\Gnome::class,
        'draenei'   => Names\Draenei::class,
        'worgen'    => Names\Worgen::class,
        'orc'       => Names\Orc::class,
        'forsaken'  => Names\Forsaken::class,
        'undead'    => Names\Forsaken::class,
        'troll'     => Names\Troll::class,
        'tauren'    => Names\Tauren::class,
        'blood_elf' => Names\BloodElf::class,
        'goblin'    => Names\Goblin::class,
        'pandaren'  => Names\Pandaren::class
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