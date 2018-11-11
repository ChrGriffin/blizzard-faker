<?php

namespace ChrGriffin\BlizzardFaker\DataProviders\Warcraft\Names;

use ChrGriffin\BlizzardFaker\DataProviders\{
    DataProvider,
    Traits\FiltersData,
    Traits\ProvidesNames
};

class Forsaken extends DataProvider
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
        'forsaken', 'undead'
    ];

    /**
     * Names that can be provided.
     *
     * @var array
     */
    public static $names = [
        // Forsaken first names
        'Abigail'        => ['first', 'female', 'forsaken', 'undead'],
        'Adam'           => ['first', 'male', 'forsaken', 'undead'],
        'Alessandro'     => ['first', 'male', 'forsaken', 'undead'],
        'Anastasia'      => ['first', 'female', 'forsaken', 'undead'],
        'Angela'         => ['first', 'female', 'forsaken', 'undead'],
        'Apolos'         => ['first', 'male', 'forsaken', 'undead'],
        'Armand'         => ['first', 'male', 'forsaken', 'undead'],
        'Arthur'         => ['first', 'male', 'forsaken', 'undead'],
        'Brom'           => ['first', 'male', 'forsaken', 'undead'],
        'Carolyn'        => ['first', 'female', 'forsaken', 'undead'],
        'Christoph'      => ['first', 'male', 'forsaken', 'undead'],
        'Derek'          => ['first', 'male', 'forsaken', 'undead'],
        'Euinice'        => ['first', 'female', 'forsaken', 'undead'],
        'Eunice'         => ['first', 'female', 'forsaken', 'undead'],
        'Ezekiel'        => ['first', 'male', 'forsaken', 'undead'],
        'Francis'        => ['first', 'male', 'forsaken', 'undead'],
        'Franklin'       => ['first', 'male', 'forsaken', 'undead'],
        'Gordon'         => ['first', 'male', 'forsaken', 'undead'],
        'Graham'         => ['first', 'male', 'forsaken', 'undead'],
        'Gregory'        => ['first', 'male', 'forsaken', 'undead'],
        'James'          => ['first', 'male', 'forsaken', 'undead'],
        'Josef'          => ['first', 'male', 'forsaken', 'undead'],
        'Josephine'      => ['first', 'female', 'forsaken', 'undead'],
        'Killian'        => ['first', 'male', 'forsaken', 'undead'],
        'Lavinia'        => ['first', 'female', 'forsaken', 'undead'],
        'Lexington'      => ['first', 'male', 'forsaken', 'undead'],
        'Lizbeth'        => ['first', 'female', 'forsaken', 'undead'],
        'Louis'          => ['first', 'male', 'forsaken', 'undead'],
        'Luther'         => ['first', 'male', 'forsaken', 'undead'],
        'Margaux'        => ['first', 'female', 'forsaken', 'undead'],
        'Martha'         => ['first', 'female', 'forsaken', 'undead'],
        'Michael'        => ['first', 'male', 'forsaken', 'undead'],
        'Mirelle'        => ['first', 'female', 'forsaken', 'undead'],
        'Neller'         => ['first', 'male', 'forsaken', 'undead'],
        'Norman'         => ['first', 'male', 'forsaken', 'undead'],
        'Pierce'         => ['first', 'male', 'forsaken', 'undead'],
        'Ronald'         => ['first', 'male', 'forsaken', 'undead'],
        'Salazar'        => ['first', 'male', 'forsaken', 'undead'],
        'Samuel'         => ['first', 'male', 'forsaken', 'undead'],
        'Thaddeus'       => ['first', 'male', 'forsaken', 'undead'],
        'Zane'           => ['first', 'male', 'forsaken', 'undead'],

        // Forsaken last names
        'Adams'          => ['last', 'forsaken', 'undead'],
        'Akeley'         => ['last', 'forsaken', 'undead'],
        'Alliestar'      => ['last', 'forsaken', 'undead'],
        'Atwood'         => ['last', 'forsaken', 'undead'],
        'Bates'          => ['last', 'forsaken', 'undead'],
        'Bloch'          => ['last', 'forsaken', 'undead'],
        'Bradford'       => ['last', 'forsaken', 'undead'],
        'Burch'          => ['last', 'forsaken', 'undead'],
        'Chambers'       => ['last', 'forsaken', 'undead'],
        'Charles'        => ['last', 'forsaken', 'undead'],
        'Cromwell'       => ['last', 'forsaken', 'undead'],
        'Crowe'          => ['last', 'forsaken', 'undead'],
        'Curthas'        => ['last', 'forsaken', 'undead'],
        'Dexter'         => ['last', 'forsaken', 'undead'],
        'Edras'          => ['last', 'forsaken', 'undead'],
        'Fayne'          => ['last', 'forsaken', 'undead'],
        'Fenner'         => ['last', 'forsaken', 'undead'],
        'Garret'         => ['last', 'forsaken', 'undead'],
        'Halsey'         => ['last', 'forsaken', 'undead'],
        'Hossack'        => ['last', 'forsaken', 'undead'],
        'Lanner'         => ['last', 'forsaken', 'undead'],
        'Lister'         => ['last', 'forsaken', 'undead'],
        'Lloyd'          => ['last', 'forsaken', 'undead'],
        'Luca'           => ['last', 'forsaken', 'undead'],
        'Moore'          => ['last', 'forsaken', 'undead'],
        'Mortaim'        => ['last', 'forsaken', 'undead'],
        'Newcomb'        => ['last', 'forsaken', 'undead'],
        'Parchley'       => ['last', 'forsaken', 'undead'],
        'Pimlen'         => ['last', 'forsaken', 'undead'],
        'Sawyer'         => ['last', 'forsaken', 'undead'],
        'Seaton'         => ['last', 'forsaken', 'undead'],
        'Shackleton'     => ['last', 'forsaken', 'undead'],
        'Steenwick'      => ['last', 'forsaken', 'undead'],
        'Tremayne'       => ['last', 'forsaken', 'undead'],
        'Upton'          => ['last', 'forsaken', 'undead'],
        'Van Talen'      => ['last', 'forsaken', 'undead'],
        'Von Croy'       => ['last', 'forsaken', 'undead'],
        'Walker'         => ['last', 'forsaken', 'undead'],
        'Ward'           => ['last', 'forsaken', 'undead'],
        'Warren'         => ['last', 'forsaken', 'undead'],
        'Weldon'         => ['last', 'forsaken', 'undead'],
        'Wendham'        => ['last', 'forsaken', 'undead']
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