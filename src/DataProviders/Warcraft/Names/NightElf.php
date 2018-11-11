<?php

namespace ChrGriffin\BlizzardFaker\DataProviders\Warcraft\Names;

use ChrGriffin\BlizzardFaker\DataProviders\{
    DataProvider,
    Traits\FiltersData,
    Traits\ProvidesNames
};

class NightElf extends DataProvider
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
        'night_elf'
    ];

    /**
     * Names that can be provided.
     *
     * @var array
     */
    public static $names = [
        // Night elf first names
        'Aessa'        => ['first', 'female', 'night_elf'],
        'Ainethil'     => ['first', 'female', 'night_elf'],
        'Alathea'      => ['first', 'female', 'night_elf'],
        'Alegorn'      => ['first', 'male', 'night_elf'],
        'Aquinne'      => ['first', 'female', 'night_elf'],
        'Arias\'ta'    => ['first', 'male', 'night_elf'],
        'Astaia'       => ['first', 'female', 'night_elf'],
        'Astarii'      => ['first', 'female', 'night_elf'],
        'Cordressa'    => ['first', 'femae', 'night_elf'],
        'Dannelor'     => ['first', 'male', 'night_elf'],
        'Darnath'      => ['first', 'male', 'night_elf'],
        'Daros'        => ['first', 'male', 'night_elf'],
        'Denatharion'  => ['first', 'male', 'night_elf'],
        'Dyrhara'      => ['first', 'female', 'night_elf'],
        'Erion'        => ['first', 'male', 'night_elf'],
        'Feyden'       => ['first', 'male', 'night_elf'],
        'Firodren'     => ['first', 'male', 'night_elf'],
        'Hammon'       => ['first', 'male', 'night_elf'],
        'Jandria'      => ['first', 'female', 'night_elf'],
        'Jeen\'ra'     => ['first', 'female', 'night_elf'],
        'Lelanai'      => ['first', 'female', 'night_elf'],
        'Lotherias'    => ['first', 'female', 'night_elf'],
        'Maelir'       => ['first', 'male', 'night_elf'],
        'Mathrengyl'   => ['first', 'male', 'night_elf'],
        'Me\'lynn'     => ['first', 'female', 'night_elf'],
        'Merelyssa'    => ['first', 'female', 'night_elf'],
        'Mythidan'     => ['first', 'male', 'night_elf'],
        'Saelienne'    => ['first', 'female', 'night_elf'],
        'Talaelar'     => ['first', 'male', 'night_elf'],
        'Tarelvir'     => ['first', 'male', 'night_elf'],
        'Telonis'      => ['first', 'male', 'night_elf'],
        'Ulthir'       => ['first', 'male', 'night_elf'],
        'Vaean'        => ['first', 'male', 'night_elf'],
        'Vinasia'      => ['first', 'female', 'night_elf'],
        'Yldan'        => ['first', 'male', 'night_elf'],

        // Night elf last names
        'Bearwalker'   => ['last', 'night_elf'],
        'Bladedancer'  => ['last', 'night_elf'],
        'Bladesinger'  => ['last', 'night_elf'],
        'Bladeweaver'  => ['last', 'night_elf'],
        'Briarbow'     => ['last', 'night_elf'],
        'Darkin'       => ['last', 'night_elf'],
        'Dewwhisper'   => ['last', 'night_elf'],
        'Evenshade'    => ['last', 'night_elf'],
        'Leafrunner'   => ['last', 'night_elf'],
        'Moonbow'      => ['last', 'night_elf'],
        'Mooncaller'   => ['last', 'night_elf'],
        'Moonclaw'     => ['last', 'night_elf'],
        'Moonlance'    => ['last', 'night_elf'],
        'Moonscribe'   => ['last', 'night_elf'],
        'Nightrunner'  => ['last', 'night_elf'],
        'Ravenoak'     => ['last', 'night_elf'],
        'Shadeleaf'    => ['last', 'night_elf'],
        'Shadewhisper' => ['last', 'night_elf'],
        'Silverdew'    => ['last', 'night_elf'],
        'Skymane'      => ['last', 'night_elf'],
        'Skyshadow'    => ['last', 'night_elf'],
        'Starseeker'   => ['last', 'night_elf'],
        'Stillbough'   => ['last', 'night_elf'],
        'Summermoon'   => ['last', 'night_elf'],
        'Whitespire'   => ['last', 'night_elf'],
        'Wildwoods'    => ['last', 'night_elf']
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