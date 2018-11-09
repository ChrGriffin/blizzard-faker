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
        'Duriel'                        => ['first_only', 'male', 'demon'],
        'Duriel, Prince of Pain'        => ['full_only', 'male', 'demon'],
        'Diablo'                        => ['first_only', 'male', 'demon'],
        'Diablo, Lord of Terror'        => ['full_only', 'male', 'demon'],
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
        'Malthael, Archangel of Wisdom' => ['full_only', 'male', 'angel'],
        'Malthael, Archangel of Death'  => ['full_only', 'male', 'angel'],
        'Tyrael'                        => ['first_only', 'male', 'angel'],
        'Tyrael, Archangel of Justice'  => ['full_only', 'male', 'angel'],
        'Tyrael, Archangel of Wisdom'   => ['full_only', 'male', 'angel'],

        // Demons
        'Assur'                         => ['first_only', 'male', 'demon'],
        'Astrogha'                      => ['first_only', 'male', 'demon'],
        'Cydaea'                        => ['first_only', 'female', 'demon'],
        'Gulag'                         => ['first_only', 'male', 'demon'],
        'Thonos'                        => ['first_only', 'male', 'demon'],
        'Kabraxis'                      => ['first_only', 'male', 'demon'],
        'Lilith'                        => ['first_only', 'female', 'demon'],
        'Lucion'                        => ['first_only', 'male', 'demon'],
        'Rakanoth'                      => ['first_only', 'male', 'demon'],
        'Shenk'                         => ['first_only', 'male', 'demon'],
        'Shenk the Overseer'            => ['full_only', 'male', 'demon'],
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
        'Uldyssian'                     => ['first_only', 'male', 'nephalem', 'human'],
        'Uldyssian ul-Diomed'           => ['full_only', 'male', 'nephalem', 'human'],

        // Mortals
        'Adria'                         => ['first_only', 'female', 'human'],
        'Aidan'                         => ['first_only', 'male', 'human'],
        'Akara'                         => ['first_only', 'female', 'human'],
        'Alkor'                         => ['first_only', 'male', 'human'],
        'Asheara'                       => ['first_only', 'female', 'human'],
        'Atma'                          => ['first_only', 'female', 'human'],
        'Anisim'                        => ['first_only', 'male', 'human'],
        'Anya'                          => ['first_only', 'female', 'human'],
        'Brother Malachi the Healer'    => ['full_only', 'male', 'human'],
        'Captain Davyd'                 => ['full_only', 'male', 'human'],
        'Captain Rumford'               => ['full_only', 'male', 'human'],
        'Captain Vonn'                  => ['full_only', 'male', 'human'],
        'Charsi'                        => ['first_only', 'female', 'human'],
        'Covetous Shen'                 => ['full_only', 'male', 'human'],
        'Deckard'                       => ['first_only', 'male', 'human'],
        'Deckard Cain'                  => ['full_only', 'male', 'human'],
        'Drognan'                       => ['first_only', 'male', 'human'],
        'Enkasi'                        => ['first_only', 'male', 'human'],
        'Elzix'                         => ['first_only', 'male', 'human'],
        'Fara'                          => ['first_only', 'female', 'human'],
        'Farnham'                       => ['first_only', 'male', 'human'],
        'Geglash'                       => ['first_only', 'male', 'human'],
        'Gheed'                         => ['first_only', 'male', 'human'],
        'Gillian'                       => ['first_only', 'female', 'human'],
        'Griez'                         => ['first_only', 'male', 'human'],
        'Griswold'                      => ['first_only', 'male', 'human'],
        'Halbu'                         => ['first_only', 'male', 'human'],
        'Halissa'                       => ['first_only', 'female', 'human'],
        'Haedrig'                       => ['first_only', 'male', 'human'],
        'Haedrig Eamon'                 => ['full_only', 'male', 'human'],
        'Hratli'                        => ['first_only', 'male', 'human'],
        'Isendra'                       => ['first_only', 'male', 'human'],
        'Jamella'                       => ['first_only', 'male', 'human'],
        'Jerhyn'                        => ['first_only', 'male', 'human'],
        'Kashya'                        => ['first_only', 'female', 'human'],
        'Khalim'                        => ['first_only', 'male', 'human'],
        'Lachdanan'                     => ['first_only', 'male', 'human'],
        'Lazarus'                       => ['first_only', 'male', 'human'],
        'Larzuk'                        => ['first_only', 'male', 'human'],
        'Leah'                          => ['first_only', 'female', 'human'],
        'Leoric'                        => ['first_only', 'male', 'human'],
        'Lieutenant Clyfton'            => ['full_only', 'male', 'human'],
        'Lieutenant Lavail'             => ['full_only', 'male', 'human'],
        'Lieutenant Merityn'            => ['full_only', 'male', 'human'],
        'Lorath'                        => ['first_only', 'male', 'human'],
        'Lorath Nahr'                   => ['full_only', 'male', 'human'],
        'Lysander'                      => ['first_only', 'male', 'human'],
        'Malah'                         => ['first_only', 'female', 'human'],
        'Master Necromancer Ordan'      => ['full_only', 'male', 'human'],
        'Mehtan'                        => ['first_only', 'male', 'human'],
        'Mehtan the Necromancer'        => ['full_only', 'male', 'human'],
        'Meshif'                        => ['first_only', 'male', 'human'],
        'Mira'                          => ['first_only', 'female', 'human'],
        'Mira Eamon'                    => ['full_only', 'female', 'human'],
        'Miriam'                        => ['first_only', 'female', 'human'],
        'Miriam Jahzia'                 => ['full_only', 'female', 'human'],
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
        'Tremain'                       => ['first_only', 'male', 'human'],
        'Tremain the Priest'            => ['full_only', 'male', 'human'],
        'Warriv'                        => ['first_only', 'male', 'human'],
        'Wirt'                          => ['first_only', 'male', 'human'],
        'Zayl'                          => ['first_only', 'male', 'human'],
        'Zoltun'                        => ['first_only', 'male', 'human'],
        'Zoltun Kulle'                  => ['full_only', 'male', 'human'],

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