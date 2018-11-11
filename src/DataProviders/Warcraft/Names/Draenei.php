<?php

namespace ChrGriffin\BlizzardFaker\DataProviders\Warcraft\Names;

use ChrGriffin\BlizzardFaker\DataProviders\{
    DataProvider,
    Traits\FiltersData,
    Traits\ProvidesNames
};

class Draenei extends DataProvider
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
        'draenei'
    ];

    /**
     * Names that can be provided.
     *
     * @var array
     */
    public static $names = [
        // Draenei first names
        // they don't have last names!
        'Ahonan'    => ['first', 'full_only', 'male', 'draenei'],
        'Akham'     => ['first', 'full_only', 'male', 'draenei'],
        'Altaa'     => ['first', 'full_only', 'female', 'draenei'],
        'Arras'     => ['first', 'full_only', 'female', 'draenei'],
        'Arred'     => ['first', 'full_only', 'male', 'draenei'],
        'Baatun'    => ['first', 'full_only', 'male', 'draenei'],
        'Bati'      => ['first', 'full_only', 'female', 'draenei'],
        'Behomat'   => ['first', 'full_only', 'male', 'draenei'],
        'Caedmos'   => ['first', 'full_only', 'male', 'draenei'],
        'Cemmorhan' => ['first', 'full_only', 'male', 'draenei'],
        'Deremiis'  => ['first', 'full_only', 'male', 'draenei'],
        'Diya'      => ['first', 'full_only', 'female', 'draenei'],
        'Edirah'    => ['first', 'full_only', 'female', 'draenei'],
        'Erett'     => ['first', 'full_only', 'female', 'draenei'],
        'Fallat'    => ['first', 'full_only', 'male', 'draenei'],
        'Farii'     => ['first', 'full_only', 'female', 'draenei'],
        'Ganaar'    => ['first', 'full_only', 'male', 'draenei'],
        'Hobahken'  => ['first', 'full_only', 'male', 'draenei'],
        'Izmir'     => ['first', 'full_only', 'male', 'draenei'],
        'Jol'       => ['first', 'full_only', 'female', 'draenei'],
        'Kavaan'    => ['first', 'full_only', 'male', 'draenei'],
        'Kazi'      => ['first', 'full_only', 'female', 'draenei'],
        'Killac'    => ['first', 'full_only', 'male', 'draenei'],
        'Lucc'      => ['first', 'full_only', 'male', 'draenei'],
        'Lunaraa'   => ['first', 'full_only', 'female', 'draenei'],
        'Mahri'     => ['first', 'full_only', 'female', 'draenei'],
        'Miall'     => ['first', 'full_only', 'female', 'draenei'],
        'Muaat'     => ['first', 'full_only', 'male', 'draenei'],
        'Mumman'    => ['first', 'full_only', 'female', 'draenei'],
        'Nahogg'    => ['first', 'full_only', 'male', 'draenei'],
        'Nurguni'   => ['first', 'full_only', 'female', 'draenei'],
        'Nus'       => ['first', 'full_only', 'female', 'draenei'],
        'Ockil'     => ['first', 'full_only', 'male', 'draenei'],
        'Phea'      => ['first', 'full_only', 'female', 'draenei'],
        'Refik'     => ['first', 'full_only', 'male', 'draenei'],
        'Remere'    => ['first', 'full_only', 'female', 'draenei'],
        'Sixx'      => ['first', 'full_only', 'female', 'draenei'],
        'Stephanos' => ['first', 'full_only', 'male', 'draenei'],
        'Sulaa'     => ['first', 'full_only', 'female', 'draenei'],
        'Thoth'     => ['first', 'full_only', 'male', 'draenei'],
        'Torallius' => ['first', 'full_only', 'male', 'draenei'],
        'Treall'    => ['first', 'full_only', 'female', 'draenei'],
        'Ven'       => ['first', 'full_only', 'male', 'draenei'],
        'Vord'      => ['first', 'full_only', 'male', 'draenei'],
        'Yil'       => ['first', 'full_only', 'male', 'draenei']
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