<?php

namespace ChrGriffin\BlizzardFaker\DataProviders\Warcraft\Names;

use ChrGriffin\BlizzardFaker\DataProviders\{
    DataProvider,
    Traits\FiltersData,
    Traits\ProvidesNames
};

class Tauren extends DataProvider
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
        'tauren'
    ];

    /**
     * Names that can be provided.
     *
     * @var array
     */
    public static $names = [
        // Tauren first names
        'Ahanu'       => ['first', 'male', 'tauren'],
        'Aska'        => ['first', 'female', 'tauren'],
        'Beram'       => ['first', 'male', 'tauren'],
        'Chepi'       => ['first', 'female', 'tauren'],
        'Delgo'       => ['first', 'male', 'tauren'],
        'Elki'        => ['first', 'male', 'tauren'],
        'Etu'         => ['first', 'male', 'tauren'],
        'Halpa'       => ['first', 'male', 'tauren'],
        'Hesuwa'      => ['first', 'female', 'tauren'],
        'Holt'        => ['first', 'male', 'tauren'],
        'Kador'       => ['first', 'male', 'tauren'],
        'Kah'         => ['first', 'male', 'tauren'],
        'Kard'        => ['first', 'male', 'tauren'],
        'Kary'        => ['first', 'female', 'tauren'],
        'Ker'         => ['first', 'female', 'tauren'],
        'Komin'       => ['first', 'male', 'tauren'],
        'Kurm'        => ['first', 'male', 'tauren'],
        'Kym'         => ['first', 'female', 'tauren'],
        'Mahu'        => ['first', 'male', 'tauren'],
        'Melor'       => ['first', 'male', 'tauren'],
        'Mooranta'    => ['first', 'female', 'tauren'],
        'Mosarn'      => ['first', 'male', 'tauren'],
        'Naal'        => ['first', 'female', 'tauren'],
        'Nahari'      => ['first', 'female', 'tauren'],
        'Nan'         => ['first', 'female', 'tauren'],
        'Nata'        => ['first', 'female', 'tauren'],
        'Nida'        => ['first', 'female', 'tauren'],
        'Ohanko'      => ['first', 'male', 'tauren'],
        'Otoh'        => ['first', 'male', 'tauren'],
        'Pala'        => ['first', 'female', 'tauren'],
        'Pand'        => ['first', 'male', 'tauren'],
        'Reha'        => ['first', 'female', 'tauren'],
        'Sark'        => ['first', 'male', 'tauren'],
        'Searn'       => ['first', 'female', 'tauren'],
        'Sheal'       => ['first', 'female', 'tauren'],
        'Sunn'        => ['first', 'female', 'tauren'],
        'Tagain'      => ['first', 'female', 'tauren'],
        'Tahu'        => ['first', 'male', 'tauren'],
        'Tal'         => ['first', 'male', 'tauren'],
        'Tand'        => ['first', 'male', 'tauren'],
        'Taur'        => ['first', 'male', 'tauren'],
        'Teg'         => ['first', 'male', 'tauren'],
        'Tepa'        => ['first', 'female', 'tauren'],
        'Thrumm'      => ['first', 'male', 'tauren'],
        'Torm'        => ['first', 'male', 'tauren'],
        'Tuho'        => ['first', 'male', 'tauren'],
        'Turak'       => ['first', 'male', 'tauren'],
        'Una'         => ['first', 'female', 'tauren'],
        'Veran'       => ['first', 'male', 'tauren'],

        // Tauren last names
        'Songhorn'    => ['last', 'tauren'],
        'Mistrunner'  => ['last', 'tauren'],
        'Ragetotem'   => ['last', 'tauren'],
        'Wildmane'    => ['last', 'tauren'],
        'Stonehoof'   => ['last', 'tauren'],
        'Grimtotem'   => ['last', 'tauren'],
        'Dawnstrider' => ['last', 'tauren'],
        'Winterhoof'  => ['last', 'tauren'],
        'Thunderhorn' => ['last', 'tauren'],
        'Thunderhoof' => ['last', 'tauren'],
        'Cloudchaser' => ['last', 'tauren'],
        'Palehoof'    => ['last', 'tauren'],
        'Sagewind'    => ['last', 'tauren'],
        'Skychaser'   => ['last', 'tauren'],
        'Runetotem'   => ['last', 'tauren'],
        'Brightmane'  => ['last', 'tauren']
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