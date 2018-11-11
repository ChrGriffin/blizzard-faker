<?php

namespace ChrGriffin\BlizzardFaker\DataProviders\Warcraft\Names;

use ChrGriffin\BlizzardFaker\DataProviders\{
    DataProvider,
    Traits\FiltersData,
    Traits\ProvidesNames
};

class Goblin extends DataProvider
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
        'goblin'
    ];

    /**
     * Names that can be provided.
     *
     * @var array
     */
    public static $names = [
        // Goblin first names
        'Alowicious'     => ['first', 'male', 'goblin'],
        'Bebri'          => ['first', 'female', 'goblin'],
        'Bezzil'         => ['first', 'male', 'goblin'],
        'Binzella'       => ['first', 'female', 'goblin'],
        'Branzlit'       => ['first', 'male', 'goblin'],
        'Dankin'         => ['first', 'male', 'goblin'],
        'Denk'           => ['first', 'male', 'goblin'],
        'Drezbit'        => ['first', 'male', 'goblin'],
        'Drezmit'        => ['first', 'male', 'goblin'],
        'Fazdran'        => ['first', 'male', 'goblin'],
        'Fenk'           => ['first', 'male', 'goblin'],
        'Fibi'           => ['first', 'female', 'goblin'],
        'Frezza'         => ['first', 'male', 'goblin'],
        'Greela'         => ['first', 'female', 'goblin'],
        'Grinkle'        => ['first', 'male', 'goblin'],
        'Janx'           => ['first', 'male', 'goblin'],
        'Kall'           => ['first', 'male', 'goblin'],
        'Karizi'         => ['first', 'female', 'goblin'],
        'Kaymard'        => ['first', 'male', 'goblin'],
        'Kazrali'        => ['first', 'female', 'goblin'],
        'Kixa'           => ['first', 'female', 'goblin'],
        'Krenk'          => ['first', 'male', 'goblin'],
        'Krixx'          => ['first', 'male', 'goblin'],
        'Kuvi'           => ['first', 'female', 'goblin'],
        'Linza'          => ['first', 'female', 'goblin'],
        'Miragohn'       => ['first', 'male', 'goblin'],
        'Mixli'          => ['first', 'female', 'goblin'],
        'Nogg'           => ['first', 'male', 'goblin'],
        'Nuzo'           => ['first', 'male', 'goblin'],
        'Pank'           => ['first', 'male', 'goblin'],
        'Penney'         => ['first', 'female', 'goblin'],
        'Pezik'          => ['first', 'male', 'goblin'],
        'Ralinza'        => ['first', 'female', 'goblin'],
        'Rilgiz'         => ['first', 'male', 'goblin'],
        'Roxxik'         => ['first', 'male', 'goblin'],
        'Sanzi'          => ['first', 'female', 'goblin'],
        'Sinzi'          => ['first', 'female', 'goblin'],
        'Snap'           => ['first', 'male', 'goblin'],
        'Tanzi'          => ['first', 'female', 'goblin'],
        'Tinza'          => ['first', 'female', 'goblin'],
        'Vish'           => ['first', 'male', 'goblin'],
        'Vizna'          => ['first', 'female', 'goblin'],
        'Vizput'         => ['first', 'male', 'goblin'],
        'Zerit'          => ['first', 'male', 'goblin'],
        'Zido'           => ['first', 'male', 'goblin'],
        'Zilbeena'       => ['first', 'female', 'goblin'],

        // Goblin last names
        'Brassbolt'      => ['last', 'goblin'],
        'Coppernut'      => ['last', 'goblin'],
        'Barrowswizzle'  => ['last', 'goblin'],
        'Crosswire'      => ['last', 'goblin'],
        'Deadbolt'       => ['last', 'goblin'],
        'Fastwrench'     => ['last', 'goblin'],
        'Gazzlegear'     => ['last', 'goblin'],
        'Grit'           => ['last', 'goblin'],
        'Paltertop'      => ['last', 'goblin'],
        'Quickfix'       => ['last', 'goblin'],
        'Rusthammer'     => ['last', 'goblin'],
        'Shubbscoop'     => ['last', 'goblin'],
        'Sparkfly'       => ['last', 'goblin'],
        'Bomblast'       => ['last', 'goblin'],
        'Cloudkicker'    => ['last', 'goblin'],
        'Blastnut'       => ['last', 'goblin'],
        'Snagglebolt'    => ['last', 'goblin'],
        'Copperpinch'    => ['last', 'goblin'],
        'Choplimb'       => ['last', 'goblin'],
        'Slamfix'        => ['last', 'goblin'],
        'Czervik'        => ['last', 'goblin'],
        'Villamar'       => ['last', 'goblin'],
        'Porkpatty'      => ['last', 'goblin'],
        'Goldweaver'     => ['last', 'goblin']
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