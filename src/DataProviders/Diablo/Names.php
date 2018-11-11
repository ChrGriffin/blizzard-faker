<?php

namespace ChrGriffin\BlizzardFaker\DataProviders\Diablo;

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
        // Prime Evils
        'Andariel'                      => ['first_only', 'female', 'demon'],
        'Andariel, Maiden of Anguish'   => ['full_only', 'female', 'demon'],
        'Azmodan'                       => ['first_only', 'male', 'demon'],
        'Azmodan, Lord of Sin'          => ['full_only', 'male', 'demon'],
        'Baal'                          => ['first_only', 'male', 'demon'],
        'Baal, Lord of Destruction'     => ['full_only', 'male', 'demon'],
        'Belial'                        => ['first_only', 'male', 'demon'],
        'Belial, Lord of Lies'          => ['full_only', 'male', 'demon'],
        'Diablo'                        => ['first_only', 'male', 'demon'],
        'Diablo, Lord of Terror'        => ['full_only', 'male', 'demon'],
        'Duriel'                        => ['first_only', 'male', 'demon'],
        'Duriel, Prince of Pain'        => ['full_only', 'male', 'demon'],
        'Mephisto'                      => ['first_only', 'male', 'demon'],
        'Mephisto, Lord of Hatred'      => ['full_only', 'male', 'demon'],

        // Angiris Council
        'Auriel'                        => ['first_only', 'female', 'angel'],
        'Auriel, Archangel of Hope'     => ['full_only', 'female', 'angel'],
        'Imperius'                      => ['first_only', 'male', 'angel'],
        'Imperius, Archangel of Valor'  => ['full_only', 'male', 'angel'],
        'Itherael'                      => ['first_only', 'male', 'angel'],
        'Itherael, Archangel of Fate'   => ['full_only', 'male', 'angel'],
        'Malthael'                      => ['first_only', 'male', 'angel'],
        'Malthael, Archangel of Death'  => ['full_only', 'male', 'angel'],
        'Malthael, Archangel of Wisdom' => ['full_only', 'male', 'angel'],
        'Tyrael'                        => ['first_only', 'male', 'angel'],
        'Tyrael, Archangel of Justice'  => ['full_only', 'male', 'angel'],
        'Tyrael, Archangel of Wisdom'   => ['full_only', 'male', 'angel'],

        // Demons
        'Assur'                         => ['first_only', 'male', 'demon'],
        'Astrogha'                      => ['first_only', 'male', 'demon'],
        'Cydaea'                        => ['first_only', 'female', 'demon'],
        'Gulag'                         => ['first_only', 'male', 'demon'],
        'Kabraxis'                      => ['first_only', 'male', 'demon'],
        'Lilith'                        => ['first_only', 'female', 'demon'],
        'Lucion'                        => ['first_only', 'male', 'demon'],
        'Rakanoth'                      => ['first_only', 'male', 'demon'],
        'Shenk the Overseer'            => ['full_only', 'male', 'demon'],
        'Shenk'                         => ['first_only', 'male', 'demon'],
        'Thonos'                        => ['first_only', 'male', 'demon'],
        'Xazax'                         => ['first_only', 'male', 'demon'],

        // Angels
        'Erelus'                        => ['first_only', 'male', 'angel'],
        'Hadriel'                       => ['first_only', 'male', 'angel'],
        'Haziael'                       => ['first_only', 'male', 'angel'],
        'Inarius'                       => ['first_only', 'male', 'angel'],
        'Izual'                         => ['first_only', 'male', 'angel'],
        'Urzael'                        => ['first_only', 'male', 'angel'],

        // Nephalem
        'Alaric'                        => ['first_only', 'male', 'nephalem', 'human'],
        'Bul\'Kathos'                   => ['first_only', 'male', 'nephalem', 'human'],
        'Linarian'                      => ['first_only', 'male', 'nephalem', 'human'],
        'Rathma'                        => ['first_only', 'male', 'nephalem', 'human'],
        'Uldyssian ul-Diomed'           => ['full_only', 'male', 'nephalem', 'human'],
        'Uldyssian'                     => ['first_only', 'male', 'nephalem', 'human'],

        // Mortals
        'Adria'                         => ['first_only', 'female', 'human'],
        'Aidan'                         => ['first_only', 'male', 'human'],
        'Akara'                         => ['first_only', 'female', 'human'],
        'Alkor'                         => ['first_only', 'male', 'human'],
        'Anisim'                        => ['first_only', 'male', 'human'],
        'Anya'                          => ['first_only', 'female', 'human'],
        'Asheara'                       => ['first_only', 'female', 'human'],
        'Atma'                          => ['first_only', 'female', 'human'],
        'Brother Malachi the Healer'    => ['full_only', 'male', 'human'],
        'Captain Davyd'                 => ['full_only', 'male', 'human'],
        'Captain Rumford'               => ['full_only', 'male', 'human'],
        'Captain Vonn'                  => ['full_only', 'male', 'human'],
        'Charsi'                        => ['first_only', 'female', 'human'],
        'Covetous Shen'                 => ['full_only', 'male', 'human'],
        'Deckard Cain'                  => ['full_only', 'male', 'human'],
        'Deckard'                       => ['first_only', 'male', 'human'],
        'Drognan'                       => ['first_only', 'male', 'human'],
        'Elzix'                         => ['first_only', 'male', 'human'],
        'Enkasi'                        => ['first_only', 'male', 'human'],
        'Fara'                          => ['first_only', 'female', 'human'],
        'Farnham'                       => ['first_only', 'male', 'human'],
        'Geglash'                       => ['first_only', 'male', 'human'],
        'Gheed'                         => ['first_only', 'male', 'human'],
        'Gillian'                       => ['first_only', 'female', 'human'],
        'Griez'                         => ['first_only', 'male', 'human'],
        'Griswold'                      => ['first_only', 'male', 'human'],
        'Haedrig Eamon'                 => ['full_only', 'male', 'human'],
        'Haedrig'                       => ['first_only', 'male', 'human'],
        'Halbu'                         => ['first_only', 'male', 'human'],
        'Halissa'                       => ['first_only', 'female', 'human'],
        'Hratli'                        => ['first_only', 'male', 'human'],
        'Isendra'                       => ['first_only', 'male', 'human'],
        'Jamella'                       => ['first_only', 'male', 'human'],
        'Jerhyn'                        => ['first_only', 'male', 'human'],
        'Kashya'                        => ['first_only', 'female', 'human'],
        'Khalim'                        => ['first_only', 'male', 'human'],
        'Lachdanan'                     => ['first_only', 'male', 'human'],
        'Larzuk'                        => ['first_only', 'male', 'human'],
        'Lazarus'                       => ['first_only', 'male', 'human'],
        'Leah'                          => ['first_only', 'female', 'human'],
        'Leoric'                        => ['first_only', 'male', 'human'],
        'Lieutenant Clyfton'            => ['full_only', 'male', 'human'],
        'Lieutenant Lavail'             => ['full_only', 'male', 'human'],
        'Lieutenant Merityn'            => ['full_only', 'male', 'human'],
        'Lorath Nahr'                   => ['full_only', 'male', 'human'],
        'Lorath'                        => ['first_only', 'male', 'human'],
        'Lysander'                      => ['first_only', 'male', 'human'],
        'Malah'                         => ['first_only', 'female', 'human'],
        'Master Necromancer Ordan'      => ['full_only', 'male', 'human'],
        'Mehtan the Necromancer'        => ['full_only', 'male', 'human'],
        'Mehtan'                        => ['first_only', 'male', 'human'],
        'Meshif'                        => ['first_only', 'male', 'human'],
        'Mira Eamon'                    => ['full_only', 'female', 'human'],
        'Mira'                          => ['first_only', 'female', 'human'],
        'Miriam Jahzia'                 => ['full_only', 'female', 'human'],
        'Miriam'                        => ['first_only', 'female', 'human'],
        'Natalya'                       => ['first_only', 'female', 'human'],
        'Nihlathak'                     => ['first_only', 'male', 'human'],
        'Ogden'                         => ['first_only', 'male', 'human'],
        'Ordan'                         => ['first_only', 'male', 'human'],
        'Ormus'                         => ['first_only', 'male', 'human'],
        'Patriarch Anisim'              => ['full_only', 'male', 'human'],
        'Pepin'                         => ['first_only', 'male', 'human'],
        'Qual-Kehk'                     => ['first_only', 'male', 'human'],
        'Seargant Dalen'                => ['full_only', 'male', 'human'],
        'Seargant Pale'                 => ['full_only', 'male', 'human'],
        'Shen'                          => ['first_only', 'male', 'human'],
        'Tremain the Priest'            => ['full_only', 'male', 'human'],
        'Tremain'                       => ['first_only', 'male', 'human'],
        'Warriv'                        => ['first_only', 'male', 'human'],
        'Wirt'                          => ['first_only', 'male', 'human'],
        'Zayl'                          => ['first_only', 'male', 'human'],
        'Zoltun Kulle'                  => ['full_only', 'male', 'human'],
        'Zoltun'                        => ['first_only', 'male', 'human'],

        // Generic first names
        'Adenah'                        => ['first', 'female', 'human'],
        'Aleran'                        => ['first', 'male', 'human'],
        'Andreas'                       => ['first', 'male', 'human'],
        'Arghus'                        => ['first', 'male', 'human'],
        'Asylla'                        => ['first', 'female', 'human'],
        'Bron'                          => ['first', 'male', 'human'],
        'Butolph'                       => ['first', 'male', 'human'],
        'Caliem'                        => ['first', 'male', 'human'],
        'Clara'                         => ['first', 'female', 'human'],
        'Derric'                        => ['first', 'male', 'human'],
        'Diadra'                        => ['first', 'female', 'human'],
        'Drian'                         => ['first', 'male', 'human'],
        'Elayne'                        => ['first', 'female', 'human'],
        'Emily'                         => ['first', 'female', 'human'],
        'Flavie'                        => ['first', 'female', 'human'],
        'Garell'                        => ['first', 'male', 'human'],
        'Ghaine'                        => ['first', 'male', 'human'],
        'Halmen'                        => ['first', 'male', 'human'],
        'Jarulf'                        => ['first', 'male', 'human'],
        'Javad'                         => ['first', 'male', 'human'],
        'Kadim'                         => ['first', 'male', 'human'],
        'Kael'                          => ['first', 'male', 'human'],
        'Kaelan'                        => ['first', 'male', 'human'],
        'Karyna'                        => ['first', 'female', 'human'],
        'Kyr'                           => ['first', 'female', 'human'],
        'Lara'                          => ['first', 'female', 'human'],
        'Litton'                        => ['first', 'male', 'human'],
        'Lloigor'                       => ['first', 'male', 'human'],
        'Lugo'                          => ['first', 'male', 'human'],
        'Maldonado'                     => ['first', 'male', 'human'],
        'Marta'                         => ['first', 'female', 'human'],
        'Mia'                           => ['first', 'female', 'human'],
        'Nikola'                        => ['first', 'male', 'human'],
        'Powell'                        => ['first', 'male', 'human'],
        'Radek'                         => ['first', 'male', 'human'],
        'Rodger'                        => ['first', 'male', 'human'],
        'Sadeir'                        => ['first', 'male', 'human'],
        'Sasha'                         => ['first', 'female', 'human'],
        'Silmak'                        => ['first', 'male', 'human'],
        'Sophia'                        => ['first', 'female', 'human'],
        'Tashun'                        => ['first', 'male', 'human'],
        'Thadar'                        => ['first', 'male', 'human'],
        'Tilnean'                       => ['first', 'male', 'human'],
        'Vachem'                        => ['first', 'male', 'human'],
        'Vendel'                        => ['first', 'male', 'human'],
        'Verral'                        => ['first', 'male', 'human'],
        'Virgil'                        => ['first', 'male', 'human'],
        'Willa'                         => ['first', 'female', 'human'],
        'Zaven'                         => ['first', 'male', 'human'],

        // Generic last names
        'Burroughs'                     => ['last', 'human'],
        'Cain'                          => ['last', 'human'],
        'Eamon'                         => ['last', 'human'],
        'Haile'                         => ['last', 'human'],
        'Holus'                         => ['last', 'human'],
        'Martyns'                       => ['last', 'human'],
        'Mattius'                       => ['last', 'human'],
        'Rills'                         => ['last', 'human'],
        'Samuels'                       => ['last', 'human'],
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