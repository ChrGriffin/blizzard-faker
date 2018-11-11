<?php

namespace ChrGriffin\BlizzardFaker\DataProviders\Warcraft\Names;

use ChrGriffin\BlizzardFaker\DataProviders\{
    DataProvider,
    Traits\FiltersData,
    Traits\ProvidesNames
};

class Orc extends DataProvider
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
        'orc'
    ];

    /**
     * Names that can be provided.
     *
     * @var array
     */
    public static $names = [
        // Orc first names
        'Borgosh'      => ['first', 'male', 'orc'],
        'Bort'         => ['first', 'male', 'orc'],
        'Brunda'       => ['first', 'female', 'orc'],
        'Doras'        => ['first', 'male', 'orc'],
        'Drukma'       => ['first', 'male', 'orc'],
        'Felika'       => ['first', 'female', 'orc'],
        'Garyl'        => ['first', 'female', 'orc'],
        'Gest'         => ['first', 'male', 'orc'],
        'Godan'        => ['first', 'male', 'orc'],
        'Gonto'        => ['first', 'male', 'orc'],
        'Gordul'       => ['first', 'male', 'orc'],
        'Gorina'       => ['first', 'female', 'orc'],
        'Grezz'        => ['first', 'male', 'orc'],
        'Gryshka'      => ['first', 'female', 'orc'],
        'Kardris'      => ['first', 'female', 'orc'],
        'Kark'         => ['first', 'male', 'orc'],
        'Karolek'      => ['first', 'male', 'orc'],
        'Katis'        => ['first', 'female', 'orc'],
        'Krogar'       => ['first', 'male', 'orc'],
        'Kruban'       => ['first', 'male', 'orc'],
        'Lumak'        => ['first', 'male', 'orc'],
        'Magar'        => ['first', 'male', 'orc'],
        'Makaru'       => ['first', 'male', 'orc'],
        'Marogg'       => ['first', 'male', 'orc'],
        'Marud'        => ['first', 'male', 'orc'],
        'Neeru'        => ['first', 'male', 'orc'],
        'Nerog'        => ['first', 'male', 'orc'],
        'Ogunaro'      => ['first', 'male', 'orc'],
        'Okothos'      => ['first', 'male', 'orc'],
        'Ormak'        => ['first', 'male', 'orc'],
        'Orokk'        => ['first', 'male', 'orc'],
        'Pisark'       => ['first', 'male', 'orc'],
        'Razgar'       => ['first', 'male', 'orc'],
        'Rogg'         => ['first', 'male', 'orc'],
        'Ronakada'     => ['first', 'male', 'orc'],
        'Sana'         => ['first', 'female', 'orc'],
        'Saru'         => ['first', 'male', 'orc'],
        'Tumi'         => ['first', 'female', 'orc'],
        'Yelmak'       => ['first', 'male', 'orc'],
        'Zevrost'      => ['first', 'male', 'orc'],

        // Orc last names
        'Blazemaw'     => ['last', 'orc'],
        'Bloodaxe'     => ['last', 'orc'],
        'Bloodeye'     => ['last', 'orc'],
        'Bloodsnarl'   => ['last', 'orc'],
        'Clanbringer'  => ['last', 'orc'],
        'Corebender'   => ['last', 'orc'],
        'Darkblade'    => ['last', 'orc'],
        'Deathbringer' => ['last', 'orc'],
        'Droffers'     => ['last', 'orc'],
        'Fireblade'    => ['last', 'orc'],
        'Flamefist'    => ['last', 'orc'],
        'Flametusk'    => ['last', 'orc'],
        'Giant-slayer' => ['last', 'orc'],
        'Grimshot'     => ['last', 'orc'],
        'Lonetree'     => ['last', 'orc'],
        'Omosh'        => ['last', 'orc'],
        'Ragefist'     => ['last', 'orc'],
        'Skullgore'    => ['last', 'orc'],
        'Steelfury'    => ['last', 'orc'],
        'Stonebleeder' => ['last', 'orc'],
        'Wolfrunner'   => ['last', 'orc'],
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