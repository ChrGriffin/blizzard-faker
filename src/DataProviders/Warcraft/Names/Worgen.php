<?php

namespace ChrGriffin\BlizzardFaker\DataProviders\Warcraft\Names;

use ChrGriffin\BlizzardFaker\DataProviders\{
    DataProvider,
    Traits\FiltersData,
    Traits\ProvidesNames
};

class Worgen extends DataProvider
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
        'worgen'
    ];

    /**
     * Names that can be provided.
     *
     * @var array
     */
    public static $names = [
        // Worgen first names
        'Amelia'         => ['first', 'female', 'worgen'],
        'Benjamin'       => ['first', 'male', 'worgen'],
        'Blake'          => ['first', 'male', 'worgen'],
        'Celestine'      => ['first', 'female', 'worgen'],
        'Cynthia'        => ['first', 'female', 'worgen'],
        'Fenegan'        => ['first', 'male', 'worgen'],
        'Fielding'       => ['first', 'male', 'worgen'],
        'Gerard'         => ['first', 'male', 'worgen'],
        'Gwen'           => ['first', 'female', 'worgen'],
        'Jack'           => ['first', 'male', 'worgen'],
        'Karen'          => ['first', 'female', 'worgen'],
        'Krennan'        => ['first', 'male', 'worgen'],
        'Liam'           => ['first', 'male', 'worgen'],
        'Loren'          => ['first', 'female', 'worgen'],
        'Magda'          => ['first', 'female', 'worgen'],
        'Mary'           => ['first', 'female', 'worgen'],
        'Melinda'        => ['first', 'female', 'worgen'],
        'Mia'            => ['first', 'female', 'worgen'],
        'Myriam'         => ['first', 'female', 'worgen'],
        'Sebastian'      => ['first', 'male', 'worgen'],
        'Tim'            => ['first', 'male', 'worgen'],
        'Vincent'        => ['first', 'male', 'worgen'],
        'Vitus'          => ['first', 'male', 'worgen'],
        'Walt'           => ['first', 'male', 'worgen'],
        'Willa'          => ['first', 'female', 'worgen'],

        // Worgen last names
        'Aranas'         => ['last', 'worgen'],
        'Armstead'       => ['last', 'worgen'],
        'Arnes'          => ['last', 'worgen'],
        'Atherton'       => ['last', 'worgen'],
        'Broderick'      => ['last', 'worgen'],
        'Buckley'        => ['last', 'worgen'],
        'Chesterhill'    => ['last', 'worgen'],
        'Cleese'         => ['last', 'worgen'],
        'Cobbler'        => ['last', 'worgen'],
        'Darkwalker'     => ['last', 'worgen'],
        'Dempsey'        => ['last', 'worgen'],
        'Derrington'     => ['last', 'worgen'],
        'Hammond'        => ['last', 'worgen'],
        'Hayward'        => ['last', 'worgen'],
        'Hersham'        => ['last', 'worgen'],
        'Hewell'         => ['last', 'worgen'],
        'Mistmantle'     => ['last', 'worgen'],
        'Moller'         => ['last', 'worgen'],
        'Murray'         => ['last', 'worgen'],
        'Oxworth'        => ['last', 'worgen'],
        'Sykes'          => ['last', 'worgen'],
        'Wahl'           => ['last', 'worgen'],
        'Walthorn'       => ['last', 'worgen'],
        'Whitewall'      => ['last', 'worgen']
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