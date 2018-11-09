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
        'Amon'                     => ['first_only', 'full_only', 'male', 'xel\'naga'],
        'Duran'                    => ['first_only', 'male', 'xel\'naga'],
        'Emil'                     => ['first_only', 'male', 'xel\'naga'],
        'Emil Narud'               => ['full_only', 'male', 'xel\'naga'],
        'Maar'                     => ['first_only', 'full_only', 'male', 'xel\'naga'],
        'Narud'                    => ['first_only', 'male', 'xel\'naga'],
        'Ouros'                    => ['first_only', 'full_only', 'male', 'xel\'naga'],
        'Samir'                    => ['first_only', 'male', 'xel\'naga'],
        'Samir Duran'              => ['full_only', 'male', 'xel\'naga'],

        // Terrans
        'Arcturus'                 => ['first_only', 'male', 'terran', 'human'],
        'Arcturus Mengsk'          => ['full_only', 'male', 'terran', 'human'],
        'Ariel'                    => ['first_only', 'female', 'terran', 'human'],
        'Ariel Hansen'             => ['full_only', 'female', 'terran', 'human'],
        'Edmund'                   => ['first_only', 'male', 'terran', 'human'],
        'Edmund Duke'              => ['full_only', 'male', 'terran', 'human'],
        'Egon'                     => ['first_only', 'male', 'terran', 'human'],
        'Egon Stettman'            => ['full_only', 'male', 'terran', 'human'],
        'Gabriel'                  => ['first_only', 'male', 'terran', 'human'],
        'Gabriel Tosh'             => ['full_only', 'male', 'terran', 'human'],
        'General Warfield'         => ['full_only', 'male', 'terran', 'human'],
        'Gerard'                   => ['first_only', 'male', 'terran', 'human'],
        'Gerard DuGalle'           => ['full_only', 'male', 'terran', 'human'],
        'Horace'                   => ['first_only', 'male', 'terran', 'human'],
        'Horace Warfield'          => ['full_only', 'male', 'terran', 'human'],
        'James'                    => ['first_only', 'male', 'terran', 'human'],
        'James Raynor'             => ['full_only', 'male', 'terran', 'human'],
        'Jim'                      => ['first_only', 'male', 'terran', 'human'],
        'Jim Raynor'               => ['full_only', 'male', 'terran', 'human'],
        'Kate'                     => ['first_only', 'female', 'terran', 'human'],
        'Kate Lockwell'            => ['full_only', 'female', 'terran', 'human'],
        'Matt'                     => ['first_only', 'male', 'terran', 'human'],
        'Matthew'                  => ['first_only', 'male', 'terran', 'human'],
        'Matt Horner'              => ['full_only', 'male', 'terran', 'human'],
        'Matthew Horner'           => ['full_only', 'male', 'terran', 'human'],
        'Michael'                  => ['first_only', 'male', 'terran', 'human'],
        'Michael Liberty'          => ['full_only', 'male', 'terran', 'human'],
        'Mira'                     => ['first_only', 'female', 'terran', 'human'],
        'Mira Han'                 => ['full_only', 'female', 'terran', 'human'],
        'Mira Horner'              => ['full_only', 'female', 'terran', 'human'],
        'Nova'                     => ['first_only', 'female', 'terran', 'human'],
        'Nova Terra'               => ['full_only', 'female', 'terran', 'human'],
        'Terra'                    => ['first_only', 'female', 'terran', 'human'],
        'Terra November'           => ['full_only', 'female', 'terran', 'human'],
        'Tosh'                     => ['first_only', 'male', 'terran', 'human'],
        'Tychus'                   => ['first_only', 'male', 'terran', 'human'],
        'Tychus Findlay'           => ['full_only', 'male', 'terran', 'human'],
        'Valerian'                 => ['first_only', 'male', 'terran', 'human'],
        'Valerian Mengsk'          => ['full_only', 'male', 'terran', 'human'],
        'Warfield'                 => ['first_only', 'last', 'male', 'terran', 'human'],

        // Protoss
        'Adun'                     => ['first_only', 'full_only', 'male', 'protoss'],
        'Aldaris'                  => ['first_only', 'full_only', 'male', 'protoss'],
        'Artanis'                  => ['first_only', 'full_only', 'male', 'protoss'],
        'Clolarion'                => ['first_only', 'full_only', 'male', 'protoss'],
        'Executor Clolarion'       => ['full_only', 'male', 'protoss'],
        'Executor Selendis'        => ['full_only', 'female', 'protoss'],
        'Fenix'                    => ['first_only', 'full_only', 'male', 'protoss'],
        'Hierarch Artanis'         => ['full_only', 'male', 'protoss'],
        'Kaldalis'                 => ['first_only', 'full_only', 'male', 'protoss'],
        'Karass'                   => ['first_only', 'full_only', 'male', 'protoss'],
        'Karax'                    => ['first_only', 'full_only', 'male', 'protoss'],
        'Lassara'                  => ['first_only', 'full_only', 'female', 'protoss'],
        'Rohana'                   => ['first_only', 'full_only', 'female', 'protoss'],
        'Selendis'                 => ['first_only', 'full_only', 'female', 'protoss'],
        'Talandar'                 => ['first_only', 'full_only', 'male', 'protoss'],
        'Taldarin'                 => ['first_only', 'full_only', 'male', 'protoss'],
        'Talis'                    => ['first_only', 'full_only', 'female', 'protoss'],
        'Tassadar'                 => ['first_only', 'full_only', 'male', 'protoss'],
        'Urun'                     => ['first_only', 'full_only', 'male', 'protoss'],

        // Dark Templar
        'Matriarch Raszagal'       => ['full_only', 'female', 'protoss'],
        'Matriarch Vorazun'        => ['full_only', 'female', 'protoss'],
        'Mohandar'                 => ['first_only', 'full_only', 'male', 'protoss'],
        'Raszagal'                 => ['first_only', 'full_only', 'female', 'protoss'],
        'Vorazun'                  => ['first_only', 'full_only', 'female', 'protoss'],
        'Ulrezaj'                  => ['first_only', 'full_only', 'male', 'protoss'],
        'Zeratul'                  => ['first_only', 'full_only', 'male', 'protoss'],

        // Tal'Darim
        'Alarak'                   => ['first_only', 'full_only', 'male', 'protoss'],
        'First Ascendant Alarak'   => ['full_only', 'male', 'protoss'],
        'First Ascendant Ji\'nara' => ['full_only', 'female', 'protoss'],
        'Highlord Alarak'          => ['full_only', 'male', 'protoss'],
        'Highlord Ma\'lash'        => ['full_only', 'male', 'protoss'],
        'Ji\'nara'                 => ['first_only', 'full_only', 'female', 'protoss'],
        'Ma\'lash'                 => ['first_only', 'full_only', 'male', 'protoss'],
        'Nyon'                     => ['first_only', 'full_only', 'male', 'protoss'],

        // Zerg
        'Abathur'                  => ['first_only', 'full_only', 'male', 'zerg'],
        'Alexei'                   => ['first_only', 'male', 'zerg', 'terran', 'human'],
        'Alexei Stukov'            => ['full_only', 'male', 'zerg', 'terran', 'human'],
        'Daggoth'                  => ['first_only', 'full_only', 'male', 'zerg'],
        'Iszha'                    => ['first_only', 'full_only', 'female', 'zerg'],
        'Kilysa'                   => ['first_only', 'full_only', 'female', 'zerg'],
        'Kerrigan'                 => ['first_only', 'female', 'zerg', 'terran', 'human'],
        'Nafash'                   => ['first_only', 'full_only', 'female', 'zerg'],
        'Naktul'                   => ['first_only', 'full_only', 'female', 'zerg'],
        'Niadra'                   => ['first_only', 'full_only', 'female', 'zerg'],
        'Rokarr'                   => ['first_only', 'full_only', 'female', 'zerg'],
        'Ryloth'                   => ['first_only', 'full_only', 'female', 'zerg'],
        'Sarah'                    => ['first_only', 'female', 'zerg', 'terran', 'human'],
        'Sarah Kerrigan'           => ['full_only', 'female', 'zerg', 'terran', 'human'],
        'Zagara'                   => ['first_only', 'full_only', 'female', 'zerg'],
        'Zasz'                     => ['first_only', 'full_only', 'male', 'zerg'],

        // Primal Zerg
        'Brakk'                    => ['first_only', 'full_only', 'male', 'zerg', 'primal_zerg'],
        'Dehaka'                   => ['first_only', 'full_only', 'male', 'zerg', 'primal_zerg'],
        'Kraith'                   => ['first_only', 'full_only', 'male', 'zerg', 'primal_zerg'],
        'Slivan'                   => ['first_only', 'full_only', 'female', 'zerg', 'primal_zerg'],
        'Yagdra'                   => ['first_only', 'full_only', 'male', 'zerg', 'primal_zerg'],
        'Zurvan'                   => ['first_only', 'full_only', 'male', 'zerg', 'primal_zerg'],

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