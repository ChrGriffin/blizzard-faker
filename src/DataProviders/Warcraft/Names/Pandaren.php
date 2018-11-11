<?php

namespace ChrGriffin\BlizzardFaker\DataProviders\Warcraft\Names;

use ChrGriffin\BlizzardFaker\DataProviders\{
    DataProvider,
    Traits\FiltersData,
    Traits\ProvidesNames
};

class Pandaren extends DataProvider
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
        'pandaren'
    ];

    /**
     * Names that can be provided.
     *
     * @var array
     */
    public static $names = [
        // Pandaren first names
        'Ana'         => ['first', 'female', 'pandaren'],
        'Andi'        => ['first', 'male', 'pandaren'],
        'Ang'         => ['first', 'male', 'pandaren'],
        'Anthea'      => ['first', 'female', 'pandaren'],
        'Ben'         => ['first', 'male', 'pandaren'],
        'Bobo'        => ['first', 'male', 'pandaren'],
        'Claretta'    => ['first', 'female', 'pandaren'],
        'Den'         => ['first', 'male', 'pandaren'],
        'Ella'        => ['first', 'female', 'pandaren'],
        'Emmi'        => ['first', 'female', 'pandaren'],
        'Fish'        => ['first', 'female', 'pandaren'],
        'Francis'     => ['first', 'male', 'pandaren'],
        'Gina'        => ['first', 'female', 'pandaren'],
        'Goh'         => ['first', 'male', 'pandaren'],
        'Haohan'      => ['first', 'male', 'pandaren'],
        'Jian'        => ['first', 'female', 'pandaren'],
        'Kai'         => ['first', 'male', 'pandaren'],
        'Kim'         => ['first', 'male', 'pandaren'],
        'Kol'         => ['first', 'male', 'pandaren'],
        'Lang'        => ['first', 'male', 'pandaren'],
        'Lei'         => ['first', 'female', 'pandaren'],
        'Liang'       => ['first', 'male', 'pandaren'],
        'Lin'         => ['first', 'female', 'pandaren'],
        'Loon'        => ['first', 'male', 'pandaren'],
        'Mac'         => ['first', 'male', 'pandaren'],
        'Mei Mei'     => ['first', 'female', 'pandaren'],
        'Mei'         => ['first', 'female', 'pandaren'],
        'Nam'         => ['first', 'male', 'pandaren'],
        'Nan'         => ['first', 'female', 'pandaren'],
        'Pang'        => ['first', 'male', 'pandaren'],
        'Sho'         => ['first', 'male', 'female', 'pandaren'],
        'Su'          => ['first', 'male', 'pandaren'],
        'Sungshin'    => ['first', 'female', 'pandaren'],
        'Tani'        => ['first', 'female', 'pandaren'],
        'Teng'        => ['first', 'male', 'pandaren'],
        'Tina'        => ['first', 'female', 'pandaren'],
        'Tsai'        => ['first', 'male', 'pandaren'],
        'Xiao'        => ['first', 'male', 'pandaren'],
        'Yan'         => ['first', 'male', 'pandaren'],
        'Yumba'       => ['first', 'male', 'pandaren'],
        'Yun'         => ['first', 'male', 'pandaren'],
        'Zhang'       => ['first', 'female', 'pandaren'],

        // Pandaren last names
        'Applebarrel' => ['last', 'pandaren'],
        'Blacksoil'   => ['last', 'pandaren'],
        'Chu'         => ['last', 'pandaren'],
        'Fellreed'    => ['last', 'pandaren'],
        'Firebrew'    => ['last', 'pandaren'],
        'Flowerbloom' => ['last', 'pandaren'],
        'Fung'        => ['last', 'pandaren'],
        'Gotcher'     => ['last', 'pandaren'],
        'Greenfield'  => ['last', 'pandaren'],
        'Hillpaw'     => ['last', 'pandaren'],
        'Ironpaw'     => ['last', 'pandaren'],
        'Lan'         => ['last', 'pandaren'],
        'Mudclaw'     => ['last', 'pandaren'],
        'Nishi'       => ['last', 'pandaren'],
        'Stormstout'  => ['last', 'pandaren'],
        'Thunderfoot' => ['last', 'pandaren'],
        'Yoon'        => ['last', 'pandaren'],
        'Yue'         => ['last', 'pandaren'],
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