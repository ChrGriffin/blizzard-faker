<?php

namespace ChrGriffin\BlizzardFaker\DataProviders\Warcraft\Names;

use ChrGriffin\BlizzardFaker\DataProviders\{
    DataProvider,
    Traits\FiltersData,
    Traits\ProvidesNames
};

class Gnome extends DataProvider
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
        'gnome'
    ];

    /**
     * Names that can be provided.
     *
     * @var array
     */
    public static $names = [
        // Gnome first names
        'Bilban'        => ['first', 'male', 'gnome'],
        'Bimble'        => ['first', 'female', 'gnome'],
        'Binny'         => ['first', 'female', 'gnome'],
        'Blingus'       => ['first', 'male', 'gnome'],
        'Bombus'        => ['first', 'male', 'gnome'],
        'Dink'          => ['first', 'male', 'gnome'],
        'Fimble'        => ['first', 'male', 'gnome'],
        'Ginny'         => ['first', 'female', 'gnome'],
        'Gnoarn'        => ['first', 'male', 'gnome'],
        'Gretta'        => ['first', 'female', 'gnome'],
        'Jemma'         => ['first', 'female', 'gnome'],
        'Juli'          => ['first', 'female', 'gnome'],
        'Katrina'       => ['first', 'female', 'gnome'],
        'Klockmort'     => ['first', 'male', 'gnome'],
        'Lago'          => ['first', 'male', 'gnome'],
        'Laris'         => ['first', 'male', 'gnome'],
        'Lixa'          => ['first', 'female', 'gnome'],
        'Milstaff'      => ['first', 'male', 'gnome'],
        'Nittlebur'     => ['first', 'male', 'gnome'],
        'Pithwick'      => ['first', 'male', 'gnome'],
        'Soolie'        => ['first', 'female', 'gnome'],
        'Springspindle' => ['first', 'male', 'gnome'],
        'Tally'         => ['first', 'female', 'gnome'],
        'Talvash'       => ['first', 'male', 'gnome'],
        'Tilli'         => ['first', 'female', 'gnome'],
        'Trini'         => ['first', 'female', 'gnome'],
        'Trixie'        => ['first', 'female', 'gnome'],
        'Tynnus'        => ['first', 'male', 'gnome'],

        // Gnome last names
        'Berryfizz'     => ['last', 'gnome'],
        'Blackwrench'   => ['last', 'gnome'],
        'Booms'         => ['last', 'gnome'],
        'Castpipe'      => ['last', 'gnome'],
        'Cogspinner'    => ['last', 'gnome'],
        'del Kissel'    => ['last', 'gnome'],
        'Felflinger'    => ['last', 'gnome'],
        'Finespindle'   => ['last', 'gnome'],
        'Fizzlegear'    => ['last', 'gnome'],
        'Geardawdle'    => ['last', 'gnome'],
        'Gearstrip'     => ['last', 'gnome'],
        'Longberry'     => ['last', 'gnome'],
        'Lympkin'       => ['last', 'gnome'],
        'Quikswitch'    => ['last', 'gnome'],
        'Shimmerstar'   => ['last', 'gnome'],
        'Spannerspan'   => ['last', 'gnome'],
        'Sparkfizzle'   => ['last', 'gnome'],
        'Springblade'   => ['last', 'gnome'],
        'Thistlefuzz'   => ['last', 'gnome'],
        'Tosslespanner' => ['last', 'gnome'],
        'Venomsprout'   => ['last', 'gnome'],
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