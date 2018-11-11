<?php

namespace ChrGriffin\BlizzardFaker\DataProviders\Warcraft\Names;

use ChrGriffin\BlizzardFaker\DataProviders\{
    DataProvider,
    Traits\FiltersData,
    Traits\ProvidesNames
};

class Human extends DataProvider
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
        'human'
    ];

    /**
     * Names that can be provided.
     *
     * @var array
     */
    public static $names = [
        // Human first names
        'Alicia'      => ['first', 'female', 'human'],
        'Ander'       => ['first', 'male', 'human'],
        'Angus'       => ['first', 'male', 'human'],
        'Arnold'      => ['first', 'male', 'human'],
        'Baros'       => ['first', 'male', 'human'],
        'Bartelby'    => ['first', 'male', 'human'],
        'Clavicus'    => ['first', 'male', 'human'],
        'Collin'      => ['first', 'male', 'human'],
        'Connor'      => ['first', 'male', 'human'],
        'Demisette'   => ['first', 'female', 'human'],
        'Donyal'      => ['first', 'male', 'human'],
        'Dungar'      => ['first', 'male', 'human'],
        'Duthorian'   => ['first', 'male', 'human'],
        'Elling'      => ['first', 'male', 'human'],
        'Evert'       => ['first', 'male', 'human'],
        'Gakin'       => ['first', 'male', 'human'],
        'Georgio'     => ['first', 'male', 'human'],
        'Grayson'     => ['first', 'male', 'human'],
        'Hank'        => ['first', 'male', 'human'],
        'Harlan'      => ['first', 'male', 'human'],
        'Harry'       => ['first', 'male', 'human'],
        'Ilsa'        => ['first', 'female', 'human'],
        'Jennea'      => ['first', 'female', 'human'],
        'Jesper'      => ['first', 'male', 'human'],
        'Jocryn'      => ['first', 'male', 'human'],
        'Jorgen'      => ['first', 'male', 'human'],
        'Katherine'   => ['first', 'female', 'human'],
        'Larimaine'   => ['first', 'female', 'human'],
        'Laurena'     => ['first', 'female', 'human'],
        'Lucan'       => ['first', 'male', 'human'],
        'Marcus'      => ['first', 'male', 'human', 'worgen'],
        'Maris'       => ['first', 'female', 'human'],
        'Mathias'     => ['first', 'male', 'human'],
        'Mazen'       => ['first', 'male', 'human'],
        'Milton'      => ['first', 'male', 'human'],
        'Morgan'      => ['first', 'male', 'female', 'human'],
        'Nikova'      => ['first', 'female', 'human'],
        'Osborne'     => ['first', 'male', 'human'],
        'Osric'       => ['first', 'male', 'human'],
        'Reginald'    => ['first', 'male', 'human'],
        'Rema'        => ['first', 'female', 'human'],
        'Renato'      => ['first', 'male', 'human'],
        'Sandahl'     => ['first', 'female', 'human'],
        'Shaina'      => ['first', 'female', 'human'],
        'Simon'       => ['first', 'male', 'human'],
        'Stephanie'   => ['first', 'female', 'human'],
        'Stephen'     => ['first', 'male', 'human'],
        'Thomas'      => ['first', 'male', 'human'],
        'Tony'        => ['first', 'male', 'human'],
        'Ursula'      => ['first', 'female', 'human'],
        'Wu'          => ['first', 'male', 'human'],
        'Wynne'       => ['first', 'male', 'human'],
        'Zardeth'     => ['first', 'male', 'human'],

        // Human last names
        'Afrasiabi'   => ['last', 'human'],
        'Alexston'    => ['last', 'human'],
        'Andromath'   => ['last', 'human'],
        'Bagley'      => ['last', 'human'],
        'Bathrilor'   => ['last', 'human'],
        'Bolero'      => ['last', 'human'],
        'Burlguard'   => ['last', 'human'],
        'Cannon'      => ['last', 'human'],
        'Cloyce'      => ['last', 'human'],
        'Cordell'     => ['last', 'human'],
        'Crowley'     => ['last', 'human'],
        'DeLavey'     => ['last', 'human'],
        'Deline'      => ['last', 'human'],
        'Dellis'      => ['last', 'human'],
        'Dumas'       => ['last', 'human'],
        'Farthing'    => ['last', 'human'],
        'Folsom'      => ['last', 'human'],
        'Fuller'      => ['last', 'human'],
        'Gallina'     => ['last', 'human'],
        'Germaine'    => ['last', 'human'],
        'Goodman'     => ['last', 'human'],
        'Granger'     => ['last', 'human'],
        'Heldric'     => ['last', 'human'],
        'Jonathan'    => ['last', 'human'],
        'Knavingham'  => ['last', 'human'],
        'Kristoff'    => ['last', 'human'],
        'Larson'      => ['last', 'human'],
        'Leland'      => ['last', 'human'],
        'Longdrink'   => ['last', 'human'],
        'Mac\'Nadir'  => ['last', 'human'],
        'Maclure'     => ['last', 'human'],
        'Malin'       => ['last', 'human'],
        'Maloof'      => ['last', 'human'],
        'Mauren'      => ['last', 'human'],
        'Mottar'      => ['last', 'human'],
        'Nightingale' => ['last', 'human'],
        'Pestle'      => ['last', 'human'],
        'Rall'        => ['last', 'human'],
        'Ridgewell'   => ['last', 'human'],
        'Rivers'      => ['last', 'human'],
        'Romano'      => ['last', 'human'],
        'Ryback'      => ['last', 'human'],
        'Sarno'       => ['last', 'human'],
        'Schneider'   => ['last', 'human'],
        'Shaw'        => ['last', 'human'],
        'Sheaf'       => ['last', 'human'],
        'Shen'        => ['last', 'human'],
        'Sorisam'     => ['last', 'human'],
        'Stern'       => ['last', 'human'],
        'Strang'      => ['last', 'human'],
        'Tanner'      => ['last', 'human'],
        'Thelwater'   => ['last', 'human'],
        'Tovald'      => ['last', 'human'],
        'Trias'       => ['last', 'human'],
        'Windsor'     => ['last', 'human']
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