<?php

namespace ChrGriffin\BlizzardFaker\DataProviders\Warcraft\Names;

use ChrGriffin\BlizzardFaker\DataProviders\{
    DataProvider,
    Traits\FiltersData,
    Traits\ProvidesNames
};

class BloodElf extends DataProvider
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
        'blood_elf'
    ];

    /**
     * Names that can be provided.
     *
     * @var array
     */
    public static $names = [
        // Blood Elf first names
        'Aldrae'       => ['first', 'male', 'blood_elf'],
        'Alsudar'      => ['first', 'male', 'blood_elf'],
        'Bachi'        => ['first', 'male', 'blood_elf'],
        'Inethven'     => ['first', 'male', 'blood_elf'],
        'Sathren'      => ['first', 'male', 'blood_elf'],
        'Zandine'      => ['first', 'female', 'blood_elf'],
        'Zelanis'      => ['first', 'male', 'blood_elf'],
        'Lotheolan'    => ['first', 'male', 'blood_elf'],
        'Belestra'     => ['first', 'female', 'blood_elf'],
        'Sarithra'     => ['first', 'female', 'blood_elf'],
        'Beldis'       => ['first', 'male', 'blood_elf'],
        'Ithelis'      => ['first', 'male', 'blood_elf'],
        'Osselan'      => ['first', 'male', 'blood_elf'],
        'Quithas'      => ['first', 'male', 'blood_elf'],
        'Zaedana'      => ['first', 'female', 'blood_elf'],
        'Narinth'      => ['first', 'female', 'blood_elf'],
        'Oninath'      => ['first', 'male', 'blood_elf'],
        'Tana'         => ['first', 'female', 'blood_elf'],
        'Kieupid'      => ['first', 'female', 'blood_elf'],
        'Zanlen'       => ['first', 'male', 'blood_elf'],
        'Elara'        => ['first', 'female', 'blood_elf'],
        'Nerisen'      => ['first', 'male', 'blood_elf'],
        'Alestus'      => ['first', 'male', 'blood_elf'],
        'Belil'        => ['first', 'male', 'blood_elf'],
        'Bemarrin'     => ['first', 'male', 'blood_elf'],
        'Nathera'      => ['first', 'female', 'blood_elf'],
        'Camberon'     => ['first', 'male', 'blood_elf'],
        'Danwe'        => ['first', 'female', 'blood_elf'],
        'Keelen'       => ['first', 'male', 'blood_elf'],
        'Lynalis'      => ['first', 'female', 'blood_elf'],
        'Sedana'       => ['first', 'female', 'blood_elf'],
        'Sylann'       => ['first', 'female', 'blood_elf'],
        'Tyn'          => ['first', 'female', 'blood_elf'],
        'Zantasia'     => ['first', 'female', 'blood_elf'],
        'Andra'        => ['first', 'female', 'blood_elf'],
        'Bithrus'      => ['first', 'male', 'blood_elf'],
        'Celana'       => ['first', 'female', 'blood_elf'],
        'Darlia'       => ['first', 'female', 'blood_elf'],
        'Deynna'       => ['first', 'female', 'blood_elf'],
        'Eriden'       => ['first', 'male', 'blood_elf'],
        'Feledis'      => ['first', 'male', 'blood_elf'],
        'Gelanthis'    => ['first', 'male', 'blood_elf'],
        'Jovia'        => ['first', 'female', 'blood_elf'],
        'Velandra'     => ['first', 'female', 'blood_elf'],
        'Keeli'        => ['first', 'female', 'blood_elf'],
        'Kredis'       => ['first', 'male', 'blood_elf'],
        'Lelorian'     => ['first', 'male', 'blood_elf'],
        'Lyna'         => ['first', 'female', 'blood_elf'],
        'Tynna'        => ['first', 'female', 'blood_elf'],
        'Rahein'       => ['first', 'male', 'blood_elf'],
        'Velanni'      => ['first', 'female', 'blood_elf'],
        'Zalle'        => ['first', 'female', 'blood_elf'],

        // Blood Elf last names
        'Azuredawn'    => ['last', 'blood_elf'],
        'Azurestrider' => ['last', 'blood_elf'],
        'Bloodstar'    => ['last', 'blood_elf'],
        'Bloodsworn'   => ['last', 'blood_elf'],
        'Bloodvalor'   => ['last', 'blood_elf'],
        'Bloodwatcher' => ['last', 'blood_elf'],
        'Bloodwrath'   => ['last', 'blood_elf'],
        'Brightblade'  => ['last', 'blood_elf'],
        'Brightwind'   => ['last', 'blood_elf'],
        'Brightwing'   => ['last', 'blood_elf'],
        'Dawnblaze'    => ['last', 'blood_elf'],
        'Daybringer'   => ['last', 'blood_elf'],
        'Fardawn'      => ['last', 'blood_elf'],
        'Fireheart'    => ['last', 'blood_elf'],
        'Kormar'       => ['last', 'blood_elf'],
        'Skystrider'   => ['last', 'blood_elf'],
        'Starstrider'  => ['last', 'blood_elf'],
        'Stillblade'   => ['last', 'blood_elf'],
        'Sunblade'     => ['last', 'blood_elf'],
        'Sunfury'      => ['last', 'blood_elf'],
        'Sunstalker'   => ['last', 'blood_elf'],
        'Suntouched'   => ['last', 'blood_elf'],
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