<?php

namespace ChrGriffin\BlizzardFaker\DataProviders\Starcraft;

use ChrGriffin\BlizzardFaker\DataProviders\{
    DataProvider,
    Traits\FiltersData,
    Traits\ProvidesNames
};

class Names extends DataProvider
{
    /**
     * Class traits.
     */
    use FiltersData, ProvidesNames;

    /**
     * Whether to filter names by gender.
     *
     * @var bool
     */
    protected $filtersByGender = true;

    /**
     * Whether to filter names by type.
     *
     * @var bool
     */
    protected $filtersByType = true;

    /**
     * Names that can be provided.
     *
     * @var array
     */
    protected static $names = [
        // Xel'Naga
        'Amon'                     => ['first_only', 'full_only', 'male'],
        'Duran'                    => ['first_only', 'male'],
        'Emil'                     => ['first_only', 'male'],
        'Emil Narud'               => ['full_only', 'male'],
        'Maar'                     => ['first_only', 'full_only', 'male'],
        'Narud'                    => ['first_only', 'male'],
        'Ouros'                    => ['first_only', 'full_only', 'male'],
        'Samir'                    => ['first_only', 'male'],
        'Samir Duran'              => ['full_only', 'male'],

        // Terrans
        'Arcturus'                 => ['first_only', 'male'],
        'Arcturus Mengsk'          => ['full_only', 'male'],
        'Ariel'                    => ['first_only', 'female'],
        'Ariel Hansen'             => ['full_only', 'female'],
        'Edmund'                   => ['first_only', 'male'],
        'Edmund Duke'              => ['full_only', 'male'],
        'Egon'                     => ['first_only', 'male'],
        'Egon Stettman'            => ['full_only', 'male'],
        'Gabriel'                  => ['first_only', 'male'],
        'Gabriel Tosh'             => ['full_only', 'male'],
        'General Warfield'         => ['full_only', 'male'],
        'Gerard'                   => ['first_only', 'male'],
        'Gerard DuGalle'           => ['full_only', 'male'],
        'Horace'                   => ['first_only', 'male'],
        'Horace Warfield'          => ['full_only', 'male'],
        'James'                    => ['first_only', 'male'],
        'James Raynor'             => ['full_only', 'male'],
        'Jim'                      => ['first_only', 'male'],
        'Jim Raynor'               => ['full_only', 'male'],
        'Kate'                     => ['first_only', 'female'],
        'Kate Lockwell'            => ['full_only', 'female'],
        'Matt'                     => ['first_only', 'male'],
        'Matthew'                  => ['first_only', 'male'],
        'Matt Horner'              => ['full_only', 'male'],
        'Matthew Horner'           => ['full_only', 'male'],
        'Michael'                  => ['first_only', 'male'],
        'Michael Liberty'          => ['full_only', 'male'],
        'Mira'                     => ['first_only', 'female'],
        'Mira Han'                 => ['full_only', 'female'],
        'Mira Horner'              => ['full_only', 'female'],
        'Nova'                     => ['first_only', 'female'],
        'Nova Terra'               => ['full_only', 'female'],
        'Terra'                    => ['first_only', 'female'],
        'Terra November'           => ['full_only', 'female'],
        'Tosh'                     => ['first_only', 'male'],
        'Tychus'                   => ['first_only', 'male'],
        'Tychus Findlay'           => ['full_only', 'male'],
        'Valerian'                 => ['first_only', 'male'],
        'Valerian Mengsk'          => ['full_only', 'male'],
        'Warfield'                 => ['first_only', 'last', 'male'],

        // Protoss
        'Adun'                     => ['first_only', 'full_only', 'male'],
        'Aldaris'                  => ['first_only', 'full_only', 'male'],
        'Artanis'                  => ['first_only', 'full_only', 'male'],
        'Clolarion'                => ['first_only', 'full_only', 'male'],
        'Executor Clolarion'       => ['full_only', 'male'],
        'Executor Selendis'        => ['full_only', 'female'],
        'Fenix'                    => ['first_only', 'full_only', 'male'],
        'Hierarch Artanis'         => ['full_only', 'male'],
        'Kaldalis'                 => ['first_only', 'full_only', 'male'],
        'Karass'                   => ['first_only', 'full_only', 'male'],
        'Karax'                    => ['first_only', 'full_only', 'male'],
        'Lassara'                  => ['first_only', 'full_only', 'female'],
        'Rohana'                   => ['first_only', 'full_only', 'female'],
        'Selendis'                 => ['first_only', 'full_only', 'female'],
        'Talandar'                 => ['first_only', 'full_only', 'male'],
        'Taldarin'                 => ['first_only', 'full_only', 'male'],
        'Talis'                    => ['first_only', 'full_only', 'female'],
        'Tassadar'                 => ['first_only', 'full_only', 'male'],
        'Urun'                     => ['first_only', 'full_only', 'male'],

        // Dark Templar
        'Matriarch Raszagal'       => ['full_only', 'female'],
        'Matriarch Vorazun'        => ['full_only', 'female'],
        'Mohandar'                 => ['first_only', 'full_only', 'male'],
        'Raszagal'                 => ['first_only', 'full_only', 'female'],
        'Vorazun'                  => ['first_only', 'full_only', 'female'],
        'Ulrezaj'                  => ['first_only', 'full_only', 'male'],
        'Zeratul'                  => ['first_only', 'full_only', 'male'],

        // Tal'Darim
        'Alarak'                   => ['first_only', 'full_only', 'male'],
        'First Ascendant Alarak'   => ['full_only', 'male'],
        'First Ascendant Ji\'nara' => ['full_only', 'female'],
        'Highlord Alarak'          => ['full_only', 'male'],
        'Highlord Ma\'lash'        => ['full_only', 'male'],
        'Ji\'nara'                 => ['first_only', 'full_only', 'female'],
        'Ma\'lash'                 => ['first_only', 'full_only', 'male'],
        'Nyon'                     => ['first_only', 'full_only', 'male'],

        // Zerg
        'Abathur'                  => ['first_only', 'full_only', 'male'],
        'Alexei'                   => ['first_only', 'male'],
        'Alexei Stukov'            => ['full_only', 'male'],
        'Daggoth'                  => ['first_only', 'full_only', 'male'],
        'Iszha'                    => ['first_only', 'full_only', 'female'],
        'Kilysa'                   => ['first_only', 'full_only', 'female'],
        'Kerrigan'                 => ['first_only', 'female'],
        'Nafash'                   => ['first_only', 'full_only', 'female'],
        'Naktul'                   => ['first_only', 'full_only', 'female'],
        'Niadra'                   => ['first_only', 'full_only', 'female'],
        'Rokarr'                   => ['first_only', 'full_only', 'female'],
        'Ryloth'                   => ['first_only', 'full_only', 'female'],
        'Sarah'                    => ['first_only', 'female'],
        'Sarah Kerrigan'           => ['full_only', 'female'],
        'Zagara'                   => ['first_only', 'full_only', 'female'],
        'Zasz'                     => ['first_only', 'full_only', 'male'],

        // Primal Zerg
        'Brakk'                    => ['first_only', 'full_only', 'male'],
        'Dehaka'                   => ['first_only', 'full_only', 'male'],
        'Kraith'                   => ['first_only', 'full_only', 'male'],
        'Slivan'                   => ['first_only', 'full_only', 'female'],
        'Yagdra'                   => ['first_only', 'full_only', 'male'],
        'Zurvan'                   => ['first_only', 'full_only', 'male'],

        // Generic first names
        'Abram'                    => ['first', 'male'],
        'Andrew'                   => ['first', 'male'],
        'Barris'                   => ['first', 'male'],
        'Colin'                    => ['first', 'male'],
        'Corbin'                   => ['first', 'male'],
        'Dennis'                   => ['first', 'male'],
        'Foster'                   => ['first', 'male'],
        'Jeff'                     => ['first', 'male'],
        'Jesse'                    => ['first', 'male', 'female'],
        'Lena'                     => ['first', 'female'],
        'Louise'                   => ['first', 'female'],
        'Tanya'                    => ['first', 'female'],
        'Talise'                   => ['first', 'female'],
        'Zach'                     => ['first', 'male'],

        // Generic last names
        'Ballenger'                => ['last'],
        'Caulfield'                => ['last'],
        'Cogan'                    => ['last'],
        'Cray'                     => ['last'],
        'Cristofer'                => ['last'],
        'Cruikshank'               => ['last'],
        'Duke'                     => ['last'],
        'DuPre'                    => ['last'],
        'Halkman'                  => ['last'],
        'Mengsk'                   => ['last'],
        'November'                 => ['last'],
        'Oliver'                   => ['last'],
        'Phash'                    => ['last'],
        'Schmidt'                  => ['last']
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