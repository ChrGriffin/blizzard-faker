<?php

namespace ChrGriffin\BlizzardFaker\DataProviders\Names;

use ChrGriffin\BlizzardFaker\DataProviders\{
    DataProvider,
    DataProviderInterface,
    Traits\ConfiguresNames,
    Traits\ProvidesNames
};

class Diablo extends DataProvider implements DataProviderInterface
{
    /**
     * Class traits.
     */
    use ConfiguresNames, ProvidesNames;

    /**
     * Names that can be provided.
     *
     * @var array
     */
    protected static $names = [
        // Prime Evils
        'Andariel'                      => ['first_only', 'female'],
        'Andariel, Maiden of Anguish'   => ['full_only', 'female'],
        'Azmodan'                       => ['first_only', 'male'],
        'Azmodan, Lord of Sin'          => ['full_only', 'male'],
        'Baal'                          => ['first_only', 'male'],
        'Baal, Lord of Destruction'     => ['full_only', 'male'],
        'Belial'                        => ['first_only', 'male'],
        'Belial, Lord of Lies'          => ['full_only', 'male'],
        'Duriel'                        => ['first_only', 'male'],
        'Duriel, Prince of Pain'        => ['full_only', 'male'],
        'Diablo'                        => ['first_only', 'male'],
        'Diablo, Lord of Terror'        => ['full_only', 'male'],
        'Mephisto'                      => ['first_only', 'male'],
        'Mephisto, Lord of Hatred'      => ['full_only', 'male'],

        // Angiris Council
        'Auriel'                        => ['first_only', 'female'],
        'Auriel, Archangel of Hope'     => ['full_only', 'female'],
        'Imperius'                      => ['first_only', 'male'],
        'Imperius, Archangel of Valor'  => ['full_only', 'male'],
        'Itherael'                      => ['first_only', 'male'],
        'Itherael, Archangel of Fate'   => ['full_only', 'male'],
        'Malthael'                      => ['first_only', 'male'],
        'Malthael, Archangel of Wisdom' => ['full_only', 'male'],
        'Malthael, Archangel of Death'  => ['full_only', 'male'],
        'Tyrael'                        => ['first_only', 'male'],
        'Tyrael, Archangel of Justice'  => ['full_only', 'male'],
        'Tyrael, Archangel of Wisdom'   => ['full_only', 'male'],

        // Demons
        'Assur'                         => ['first_only', 'male'],
        'Astrogha'                      => ['first_only', 'male'],
        'Cydaea'                        => ['first_only', 'female'],
        'Gulag'                         => ['first_only', 'male'],
        'Thonos'                        => ['first_only', 'male'],
        'Kabraxis'                      => ['first_only', 'male'],
        'Lilith'                        => ['first_only', 'female'],
        'Lucion'                        => ['first_only', 'male'],
        'Rakanoth'                      => ['first_only', 'male'],
        'Shenk'                         => ['first_only', 'male'],
        'Shenk the Overseer'            => ['full_only', 'male'],
        'Xazax'                         => ['first_only', 'male'],

        // Angels
        'Erelus'                        => ['first_only', 'male'],
        'Hadriel'                       => ['first_only', 'male'],
        'Haziael'                       => ['first_only', 'male'],
        'Inarius'                       => ['first_only', 'male'],
        'Izual'                         => ['first_only', 'male'],
        'Urzael'                        => ['first_only', 'male'],

        // Nephalem
        'Alaric'                        => ['first_only', 'male'],
        'Bul\'Kathos'                   => ['first_only', 'male'],
        'Linarian'                      => ['first_only', 'male'],
        'Rathma'                        => ['first_only', 'male'],
        'Uldyssian'                     => ['first_only', 'male'],
        'Uldyssian ul-Diomed'           => ['full_only', 'male'],

        // Mortals
        'Adria'                         => ['first_only', 'female'],
        'Aidan'                         => ['first_only', 'male'],
        'Akara'                         => ['first_only', 'female'],
        'Alkor'                         => ['first_only', 'male'],
        'Asheara'                       => ['first_only', 'female'],
        'Atma'                          => ['first_only', 'female'],
        'Anisim'                        => ['first_only', 'male'],
        'Anya'                          => ['first_only', 'female'],
        'Brother Malachi the Healer'    => ['full_only', 'male'],
        'Captain Davyd'                 => ['full_only', 'male'],
        'Captain Rumford'               => ['full_only', 'male'],
        'Captain Vonn'                  => ['full_only', 'male'],
        'Charsi'                        => ['first_only', 'female'],
        'Covetous Shen'                 => ['full_only', 'male'],
        'Deckard'                       => ['first_only', 'male'],
        'Deckard Cain'                  => ['full_only', 'male'],
        'Drognan'                       => ['first_only', 'male'],
        'Enkasi'                        => ['first_only', 'male'],
        'Elzix'                         => ['first_only', 'male'],
        'Fara'                          => ['first_only', 'female'],
        'Farnham'                       => ['first_only', 'male'],
        'Geglash'                       => ['first_only', 'male'],
        'Gheed'                         => ['first_only', 'male'],
        'Gillian'                       => ['first_only', 'female'],
        'Griez'                         => ['first_only', 'male'],
        'Griswold'                      => ['first_only', 'male'],
        'Halbu'                         => ['first_only', 'male'],
        'Halissa'                       => ['first_only', 'female'],
        'Haedrig'                       => ['first_only', 'male'],
        'Haedrig Eamon'                 => ['full_only', 'male'],
        'Hratli'                        => ['first_only', 'male'],
        'Isendra'                       => ['first_only', 'male'],
        'Jamella'                       => ['first_only', 'male'],
        'Jerhyn'                        => ['first_only', 'male'],
        'Kashya'                        => ['first_only', 'female'],
        'Khalim'                        => ['first_only', 'male'],
        'Lachdanan'                     => ['first_only', 'male'],
        'Lazarus'                       => ['first_only', 'male'],
        'Larzuk'                        => ['first_only', 'male'],
        'Leah'                          => ['first_only', 'female'],
        'Leoric'                        => ['first_only', 'male'],
        'Lieutenant Clyfton'            => ['full_only', 'male'],
        'Lieutenant Lavail'             => ['full_only', 'male'],
        'Lieutenant Merityn'            => ['full_only', 'male'],
        'Lorath'                        => ['first_only', 'male'],
        'Lorath Nahr'                   => ['full_only', 'male'],
        'Lysander'                      => ['first_only', 'male'],
        'Malah'                         => ['first_only', 'female'],
        'Master Necromancer Ordan'      => ['full_only', 'male'],
        'Mehtan'                        => ['first_only', 'male'],
        'Mehtan the Necromancer'        => ['full_only', 'male'],
        'Meshif'                        => ['first_only', 'male'],
        'Mira'                          => ['first_only', 'female'],
        'Mira Eamon'                    => ['full_only', 'female'],
        'Miriam'                        => ['first_only', 'female'],
        'Miriam Jahzia'                 => ['full_only', 'female'],
        'Natalya'                       => ['first_only', 'female'],
        'Nihlathak'                     => ['first_only', 'male'],
        'Ogden'                         => ['first_only', 'male'],
        'Ordan'                         => ['first_only', 'male'],
        'Ormus'                         => ['first_only', 'male'],
        'Patriarch Anisim'              => ['full_only', 'male'],
        'Pepin'                         => ['first_only', 'male'],
        'Qual-Kehk'                     => ['first_only', 'male'],
        'Seargant Dalen'                => ['full_only', 'male'],
        'Seargant Pale'                 => ['full_only', 'male'],
        'Shen'                          => ['first_only', 'male'],
        'Tremain'                       => ['first_only', 'male'],
        'Tremain the Priest'            => ['full_only', 'male'],
        'Warriv'                        => ['first_only', 'male'],
        'Wirt'                          => ['first_only', 'male'],
        'Zayl'                          => ['first_only', 'male'],
        'Zoltun'                        => ['first_only', 'male'],
        'Zoltun Kulle'                  => ['full_only', 'male'],

        // Generic first names
        'Adenah'                        => ['first', 'female'],
        'Aleran'                        => ['first', 'male'],
        'Asylla'                        => ['first', 'female'],
        'Arghus'                        => ['first', 'male'],
        'Andreas'                       => ['first', 'male'],
        'Bron'                          => ['first', 'male'],
        'Butolph'                       => ['first', 'male'],
        'Caliem'                        => ['first', 'male'],
        'Clara'                         => ['first', 'female'],
        'Derric'                        => ['first', 'male'],
        'Diadra'                        => ['first', 'female'],
        'Drian'                         => ['first', 'male'],
        'Emily'                         => ['first', 'female'],
        'Elayne'                        => ['first', 'female'],
        'Flavie'                        => ['first', 'female'],
        'Garell'                        => ['first', 'male'],
        'Ghaine'                        => ['first', 'male'],
        'Halmen'                        => ['first', 'male'],
        'Jarulf'                        => ['first', 'male'],
        'Javad'                         => ['first', 'male'],
        'Kadim'                         => ['first', 'male'],
        'Kael'                          => ['first', 'male'],
        'Kaelan'                        => ['first', 'male'],
        'Karyna'                        => ['first', 'female'],
        'Kyr'                           => ['first', 'female'],
        'Lara'                          => ['first', 'female'],
        'Litton'                        => ['first', 'male'],
        'Lloigor'                       => ['first', 'male'],
        'Maldonado'                     => ['first', 'male'],
        'Marta'                         => ['first', 'female'],
        'Radek'                         => ['first', 'male'],
        'Rodger'                        => ['first', 'male'],
        'Sasha'                         => ['first', 'female'],
        'Sophia'                        => ['first', 'female'],
        'Tashun'                        => ['first', 'male'],
        'Vachem'                        => ['first', 'male'],
        'Vendel'                        => ['first', 'male'],
        'Verral'                        => ['first', 'male'],
        'Lugo'                          => ['first', 'male'],
        'Mia'                           => ['first', 'female'],
        'Nikola'                        => ['first', 'male'],
        'Powell'                        => ['first', 'male'],
        'Sadeir'                        => ['first', 'male'],
        'Silmak'                        => ['first', 'male'],
        'Thadar'                        => ['first', 'male'],
        'Tilnean'                       => ['first', 'male'],
        'Virgil'                        => ['first', 'male'],
        'Willa'                         => ['first', 'female'],
        'Zaven'                         => ['first', 'male'],

        // Generic last names
        'Burroughs'                     => ['last'],
        'Cain'                          => ['last'],
        'Haile'                         => ['last'],
        'Rills'                         => ['last'],
        'Holus'                         => ['last'],
        'Eamon'                         => ['last'],
        'Martyns'                       => ['last'],
        'Mattius'                       => ['last'],
        'Samuels'                       => ['last']
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