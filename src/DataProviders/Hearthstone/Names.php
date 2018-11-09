<?php

namespace ChrGriffin\BlizzardFaker\DataProviders\Hearthstone;

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
    protected static $names = [
        // Hero full names
        'Alleria Windrunner'  => ['full_only', 'female', 'high_elf', 'blood_elf'],
        'Anduin Wrynn'        => ['full_only', 'male', 'human'],
        'Garrosh Hellscream'  => ['full_only', 'male', 'orc'],
        'Jaina Proudmoore'    => ['full_only', 'female', 'human'],
        'Lady Liadrin'        => ['full_only', 'female', 'blood_elf'],
        'Maiev Shadowsong'    => ['full_only', 'female', 'night_elf'],
        'Magni Bronzebeard'   => ['full_only', 'male', 'dwarf'],
        'Malfurion Stormrage' => ['full_only', 'male', 'night_elf'],
        'Morgi the Oracle'    => ['full_only', 'male', 'murloc'],
        'Nemsy Necrofizzle'   => ['full_only', 'female', 'gnome'],
        'Prince Arthas'       => ['full_only', 'male', 'human'],
        'King Rastakhan'      => ['full_only', 'male', 'troll'],
        'Sir Annoy-o'         => ['full_only', 'male'],
        'Tyrande Whisperwind' => ['full_only', 'female', 'night_elf'],
        'Uther Lightbringer'  => ['full_only', 'male', 'human'],
        'Valeera Sanguinar'   => ['full_only', 'female', 'blood_elf'],

        // Hero first names
        'Alleria'             => ['first_only', 'female', 'high_elf', 'blood_elf'],
        'Anduin'              => ['first_only', 'male', 'human'],
        'Arthas'              => ['first_only', 'male', 'human'],
        'Garrosh'             => ['first_only', 'male', 'orc'],
        'Gul\'Dan'            => ['first_only', 'male', 'orc'],
        'Jaina'               => ['first_only', 'female', 'human'],
        'Khadgar'             => ['first_only', 'male', 'human'],
        'Liadrin'             => ['first_only', 'female', 'blood_elf'],
        'Lunara'              => ['first_only', 'full_only', 'female'],
        'Maiev'               => ['first_only', 'female', 'night_elf'],
        'Magni'               => ['first_only', 'male', 'dwarf'],
        'Malfurion'           => ['first_only', 'male', 'night_elf'],
        'Mecha-Jaraxxus'      => ['first_only', 'full_only', 'male', 'demon'],
        'Medivh'              => ['first_only', 'male', 'human'],
        'Morgi'               => ['first_only', 'male', 'murloc'],
        'Nemsy'               => ['first_only', 'female', 'gnome'],
        'Tyrande'             => ['first_only', 'female', 'night_elf'],
        'Rastakhan'           => ['first_only', 'male', 'troll'],
        'Rexxar'              => ['first_only', 'male', 'orc'],
        'Thrall'              => ['first_only', 'male', 'orc'],
        'Uther'               => ['first_only', 'male', 'human'],
        'Valeera'             => ['first_only', 'female', 'blood_elf'],

        // Hero last names
        'Bronzebeard'         => ['last', 'dwarf'],
        'Hellscream'          => ['last', 'orc'],
        'Lightbringer'        => ['last', 'human'],
        'Necrofizzle'         => ['last', 'gnome'],
        'Proudmoore'          => ['last', 'human'],
        'Sanguinar'           => ['last', 'blood_elf'],
        'Shadowsong'          => ['last', 'night_elf'],
        'Stormrage'           => ['last', 'night_elf'],
        'Whisperwind'         => ['last', 'night_elf'],
        'Windrunner'          => ['last', 'high_elf', 'blood_elf', 'forsaken'],
        'Wrynn'               => ['last', 'human'],

        // Cinematic characters
        'Ava'                 => ['first_only', 'female', 'human'],
        'Harth'               => ['first_only', 'male', 'dwarf'],
        'Stonebrew'           => ['last', 'dwarf'],
        'Harth Stonebrew'     => ['full_only', 'male', 'dwarf'],
        'Malto'               => ['first_only', 'male', 'human'],
        'Sarge'               => ['first_only', 'male'],
        'Fewz'                => ['first_only', 'male', 'goblin'],
        'Wick'                => ['first_only', 'male', 'goblin'],
        'Bertie'              => ['first_only', 'male', 'gnome'],
        'Urk'                 => ['first_only', 'male', 'orc'],
        'Velaris'             => ['first_only', 'male', 'blood_elf']
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