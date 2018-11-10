<?php

namespace ChrGriffin\BlizzardFaker\DataProviders\HeroesOfTheStorm;

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
     * Whether to filter names by race.
     *
     * @var bool
     */
    protected $filtersByRace = true;

    /**
     * Names that can be provided.
     *
     * @var array
     */
    public static $names = [
        // Hero first names
        'Abathur'                => ['first_only', 'male', 'zerg'],
        'Alarak'                 => ['first_only', 'male', 'protoss'],
        'Alexstrasza'            => ['first_only', 'female', 'dragon'],
        'Ana'                    => ['first_only', 'male', 'human'],
        'Anub\'Arak'             => ['first_only', 'male', 'undead'],
        'Artanis'                => ['first_only', 'male', 'protoss'],
        'Arthas'                 => ['first_only', 'male', 'human', 'undead'],
        'Auriel'                 => ['first_only', 'female', 'angel'],
        'Azmodan'                => ['first_only', 'male', 'demon'],
        'Blaze'                  => ['first_only', 'male', 'terran', 'human'],
        'Brightwing'             => ['first_only', 'male'],
        'Cassia'                 => ['first_only', 'female', 'human'],
        'Chen'                   => ['first_only', 'male', 'pandaren'],
        'Cho\'gall'              => ['first_only', 'male', 'ogre'],
        'Chromie'                => ['first_only', 'female', 'dragon'],
        'D.Va'                   => ['first_only', 'female', 'human'],
        'Deckard'                => ['first_only', 'male', 'human'],
        'Dehaka'                 => ['first_only', 'male', 'zerg', 'primal_zerg'],
        'Diablo'                 => ['first_only', 'male', 'demon'],
        'E.T.C.'                 => ['first_only', 'male', 'tauren'],
        'Falstad'                => ['first_only', 'male', 'dwarf'],
        'Fenix'                  => ['first_only', 'male', 'protoss'],
        'Garrosh'                => ['first_only', 'male', 'orc'],
        'Gazlowe'                => ['first_only', 'male', 'goblin'],
        'Genji'                  => ['first_only', 'male', 'human'],
        'Gul\'dan'               => ['first_only', 'male', 'orc'],
        'Hanzo'                  => ['first_only', 'male', 'human'],
        'Illidan'                => ['first_only', 'male', 'night_elf'],
        'Jaina'                  => ['first_only', 'female', 'human'],
        'Johanna'                => ['first_only', 'female', 'human'],
        'Junkrat'                => ['first_only', 'male', 'human'],
        'Kael\'Thas'             => ['first_only', 'male', 'blood_elf'],
        'Kel\'thuzad'            => ['first_only', 'male', 'human'],
        'Kerrigan'               => ['first_only', 'female', 'human', 'zerg'],
        'Kharazim'               => ['first_only', 'male', 'human'],
        'Leoric'                 => ['first_only', 'male', 'human', 'undead'],
        'Li-Ming'                => ['first_only', 'female', 'human'],
        'Li Li'                  => ['first_only', 'female', 'pandaren'],
        'Lunara'                 => ['first_only', 'female'],
        'Lucio'                  => ['first_only', 'male', 'human'],
        'Mal\'ganis'             => ['first_only', 'male', 'demon'],
        'Maiev'                  => ['first_only', 'female', 'night_elf'],
        'Malfurion'              => ['first_only', 'male', 'night_elf'],
        'Malthael'               => ['first_only', 'male', 'angel'],
        'Medivh'                 => ['first_only', 'male', 'human'],
        'Mephisto'               => ['first_only', 'male', 'demon'],
        'Muradin'                => ['first_only', 'male', 'dwarf'],
        'Murky'                  => ['first_only', 'male', 'murloc'],
        'Nazeebo'                => ['first_only', 'male', 'human'],
        'Nova'                   => ['first_only', 'female', 'terran', 'human'],
        'Orphea'                 => ['first_only', 'female', 'human'],
        'Probius'                => ['first_only', 'protoss'],
        'Ragnaros'               => ['first_only', 'male', 'elemental'],
        'Rehgar'                 => ['first_only', 'male', 'orc'],
        'Rexxar'                 => ['first_only', 'male', 'orc'],
        'Samuro'                 => ['first_only', 'male', 'orc'],
        'Sonya'                  => ['first_only', 'female', 'human'],
        'Stitches'               => ['first_only', 'male', 'undead'],
        'Sylvanas'               => ['first_only', 'male', 'undead', 'forsaken'],
        'Tassadar'               => ['first_only', 'male', 'protoss'],
        'Thrall'                 => ['first_only', 'male', 'orc'],
        'Tracer'                 => ['first_only', 'female', 'human'],
        'Tychus'                 => ['first_only', 'male', 'human'],
        'Tyrael'                 => ['first_only', 'male', 'angel'],
        'Tyrande'                => ['first_only', 'female', 'night_elf'],
        'Uther'                  => ['first_only', 'male', 'human'],
        'Valeera'                => ['first_only', 'female', 'blood_elf'],
        'Valla'                  => ['first_only', 'female', 'human'],
        'Varian'                 => ['first_only', 'male', 'human'],
        'Xul'                    => ['first_only', 'male', 'human'],
        'Yrel'                   => ['first_only', 'female', 'draenei'],
        'Zagara'                 => ['first_only', 'female', 'zerg'],
        'Zarya'                  => ['first_only', 'female', 'human'],
        'Zeratul'                => ['first_only', 'male', 'protoss'],
        'Zul\'jin'               => ['first_only', 'male', 'troll'],

        // Hero full names
        'Elite Tauren Chieftain' => ['full_only', 'male', 'tauren'],
        'Lt. Morales'            => ['full_only', 'female', 'terran', 'human'],
        'Sgt. Hammer'            => ['full_only', 'female', 'terran', 'human'],
        'The Lost Vikings'       => ['full_only', 'male', 'human'],

        // Hero last names
        'Hammer'                 => ['last_only'],
        'Morales'                => ['last_only'],
        'Raynor'                 => ['last_only'],
        'Stukov'                 => ['last_only'],
        'Whitemane'              => ['last_only']

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