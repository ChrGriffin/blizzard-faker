<?php

namespace ChrGriffin\BlizzardFaker\DataProviders\Warcraft\Names;

use ChrGriffin\BlizzardFaker\DataProviders\{
    DataProvider,
    Traits\FiltersData,
    Traits\ProvidesNames
};

class Dwarf extends DataProvider
{
    /**
     * Class traits.
     */
    use FiltersData, ProvidesNames;

    /**
     * The races which have names represented in the data set.
     *
     * @var array
     */
    protected static $races = [
        'dwarf'
    ];

    /**
     * Names that can be provided.
     *
     * @var array
     */
    public static $names = [
        // Dwarf first names
        'Barrus'         => ['first', 'male', 'dwarf'],
        'Braenna'        => ['first', 'female', 'dwarf'],
        'Brenwyn'        => ['first', 'female', 'dwarf'],
        'Bretta'         => ['first', 'female', 'dwarf'],
        'Daera'          => ['first', 'female', 'dwarf'],
        'Daryl'          => ['first', 'male', 'dwarf'],
        'Elise'          => ['first', 'female', 'dwarf'],
        'Flarna'         => ['first', 'female', 'dwarf'],
        'Goli'           => ['first', 'male', 'dwarf'],
        'Golnir'         => ['first', 'male', 'dwarf'],
        'Grimnur'        => ['first', 'male', 'dwarf'],
        'Gryth'          => ['first', 'male', 'dwarf'],
        'Hulfdan'        => ['first', 'male', 'dwarf'],
        'Ingrys'         => ['first', 'female', 'dwarf'],
        'Karnik'         => ['first', 'male', 'dwarf'],
        'Kelric'         => ['first', 'male', 'dwarf'],
        'Kelstrum'       => ['first', 'male', 'dwarf'],
        'Kelv'           => ['first', 'male', 'dwarf'],
        'Magellas'       => ['first', 'male', 'dwarf'],
        'Melnan'         => ['first', 'male', 'dwarf'],
        'Nissa'          => ['first', 'female', 'dwarf'],
        'Poranna'        => ['first', 'female', 'dwarf'],
        'Rohan'          => ['first', 'male', 'dwarf'],
        'Tormus'         => ['first', 'male', 'dwarf'],
        'Valgar'         => ['first', 'male', 'dwarf'],

        // Dwarf last names,
        'Barleybrew'     => ['last', 'dwarf'],
        'Blackbeard'     => ['last', 'dwarf'],
        'Bouldertoe'     => ['last', 'dwarf'],
        'Brightletter'   => ['last', 'dwarf'],
        'Brightspear'    => ['last', 'dwarf'],
        'Burningbeard'   => ['last', 'dwarf'],
        'Darkstone'      => ['last', 'dwarf'],
        'Deepforge'      => ['last', 'dwarf'],
        'Doombrow'       => ['last', 'dwarf'],
        'Firebrew'       => ['last', 'dwarf'],
        'Firestone'      => ['last', 'dwarf'],
        'Flametongue'    => ['last', 'dwarf'],
        'Highforge'      => ['last', 'dwarf'],
        'Ironhammer'     => ['last', 'dwarf'],
        'Krumn'          => ['last', 'dwarf'],
        'Redstone'       => ['last', 'dwarf'],
        'Riknussen'      => ['last', 'dwarf'],
        'Scorchbrew'     => ['last', 'dwarf'],
        'Smolderblade'   => ['last', 'dwarf'],
        'Steelshaper'    => ['last', 'dwarf'],
        'Sternhammer'    => ['last', 'dwarf'],
        'Stonebranch'    => ['last', 'dwarf'],
        'Stonebrand'     => ['last', 'dwarf'],
        'Stonebreaker'   => ['last', 'dwarf'],
        'Stoneflayer'    => ['last', 'dwarf'],
        'Thundergranite' => ['last', 'dwarf'],
        'Thurden'        => ['last', 'dwarf']
    ];

    /**
     * Provide configured names.
     *
     * @return array
     */
    public function provide() : array
    {
        $names = $this->filterAndBuildNames(self::$names);
        return $names;
    }
}