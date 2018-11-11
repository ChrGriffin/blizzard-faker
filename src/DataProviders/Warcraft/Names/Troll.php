<?php

namespace ChrGriffin\BlizzardFaker\DataProviders\Warcraft\Names;

use ChrGriffin\BlizzardFaker\DataProviders\{
    DataProvider,
    Traits\FiltersData,
    Traits\ProvidesNames
};

class Troll extends DataProvider
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
        'troll'
    ];

    /**
     * Names that can be provided.
     *
     * @var array
     */
    public static $names = [
        // Troll first names
        // they don't have last names!
        'Batamsi'     => ['first', 'full_only', 'female', 'troll'],
        'Doyo\'da'    => ['first', 'full_only', 'male', 'troll'],
        'Hini\'wana'  => ['first', 'full_only', 'male', 'troll'],
        'Hola\'mahi'  => ['first', 'full_only', 'female', 'troll'],
        'Huju'        => ['first', 'full_only', 'male', 'troll'],
        'Jandi'       => ['first', 'full_only', 'female', 'troll'],
        'Jes\'rimon'  => ['first', 'full_only', 'male', 'troll'],
        'Jin\'diza'   => ['first', 'full_only', 'female', 'troll'],
        'Jo\'mash'    => ['first', 'full_only', 'male', 'troll'],
        'Kor\'ghan'   => ['first', 'full_only', 'male', 'troll'],
        'Ku\'nanji'   => ['first', 'full_only', 'male', 'troll'],
        'Kuzari'      => ['first', 'full_only', 'female', 'troll'],
        'Makavu'      => ['first', 'full_only', 'male', 'troll'],
        'Ray\'ma'     => ['first', 'full_only', 'male', 'troll'],
        'Sesebi'      => ['first', 'full_only', 'female', 'troll'],
        'Sijambi'     => ['first', 'full_only', 'female', 'troll'],
        'Tolwe'       => ['first', 'full_only', 'male', 'troll'],
        'Umbehto'     => ['first', 'full_only', 'male', 'troll'],
        'Uru\'zin'    => ['first', 'full_only', 'male', 'troll'],
        'Uthel\'nay'  => ['first', 'full_only', 'male', 'troll'],
        'Xan\'tish'   => ['first', 'full_only', 'male', 'troll'],
        'Xantili'     => ['first', 'full_only', 'male', 'troll'],
        'Xen\'to'     => ['first', 'full_only', 'male', 'troll'],
        'Xon\'cha'    => ['first', 'full_only', 'male', 'troll'],
        'Zamja'       => ['first', 'full_only', 'female', 'troll'],
        'Zanga'       => ['first', 'full_only', 'male', 'troll'],
        'Zar\'shi'    => ['first', 'full_only', 'male', 'troll'],
        'Zeal\'aya'   => ['first', 'full_only', 'male', 'troll'],
        'Zendo\'jian' => ['first', 'full_only', 'male', 'troll'],
        'Ziji'        => ['first', 'full_only', 'female', 'troll'],
        'Zilzibin'    => ['first', 'full_only', 'male', 'troll'],
        'Zirazi'      => ['first', 'full_only', 'female', 'troll'],
        'Zuru'        => ['first', 'full_only', 'male', 'troll'],
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