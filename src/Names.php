<?php

namespace ChrGriffin\BlizzardFaker;

use Faker\{
    Provider\Base,
    Generator
};

class Names extends Base
{
    /**
     * Class traits.
     */
    use Traits\FiltersByFranchise, Traits\FiltersByRace;

    /**
     * Data provider.
     *
     * @var DataProviders\DataProviderInterface
     */
    protected $dataProvider;

    /**
     * Franchises that can provide names.
     *
     * @var array
     */
    protected $validFranchises = [
        'diablo', 'hearthstone', 'heroes_of_the_storm', 'starcraft', 'warcraft'
    ];

    /**
     * Races that can provide names.
     *
     * @var array
     */
    protected $validRaces = [
        'angel'       => ['franchises' => ['diablo', 'heroes_of_the_storm']],
        'blood_elf'   => ['franchises' => ['warcraft', 'hearthstone', 'heroes_of_the_storm']],
        'demon'       => ['franchises' => ['diablo', 'hearthstone', 'heroes_of_the_storm', 'warcraft']],
        'draenei'     => ['franchises' => ['warcraft', 'heroes_of_the_storm']],
        'dragon'      => ['franchises' => ['heroes_of_the_storm']],
        'dwarf'       => ['franchises' => ['warcraft', 'hearthstone', 'heroes_of_the_storm']],
        'elemental'   => ['franchises' => ['heroes_of_the_storm']],
        'forsaken'    => ['franchises' => ['warcraft', 'hearthstone', 'heroes_of_the_storm']],
        'gnome'       => ['franchises' => ['warcraft', 'hearthstone']],
        'goblin'      => ['franchises' => ['warcraft', 'hearthstone', 'heroes_of_the_storm']],
        'high_elf'    => ['franchises' => ['warcraft', 'hearthstone', 'heroes_of_the_storm']],
        'human'       => ['franchises' => ['diablo', 'hearthstone', 'heroes_of_the_storm', 'starcraft', 'warcraft']],
        'murloc'      => ['franchises' => ['hearthstone', 'heroes_of_the_storm']],
        'nephalem'    => ['franchises' => ['diablo', 'heroes_of_the_storm']],
        'night_elf'   => ['franchises' => ['warcraft', 'hearthstone', 'heroes_of_the_storm']],
        'ogre'        => ['franchises' => ['heroes_of_the_storm']],
        'orc'         => ['franchises' => ['warcraft', 'hearthstone', 'heroes_of_the_storm']],
        'pandaren'    => ['franchises' => ['heroes_of_the_storm', 'warcraft']],
        'primal_zerg' => ['franchises' => ['starcraft', 'heroes_of_the_storm']],
        'protoss'     => ['franchises' => ['starcraft', 'heroes_of_the_storm']],
        'tauren'      => ['franchises' => ['warcraft', 'heroes_of_the_storm']],
        'terran'      => ['franchises' => ['starcraft', 'heroes_of_the_storm']],
        'troll'       => ['franchises' => ['warcraft', 'hearthstone', 'heroes_of_the_storm']],
        'undead'      => ['franchises' => ['warcraft', 'hearthstone', 'heroes_of_the_storm']],
        'worgen'      => ['franchises' => ['warcraft', 'heroes_of_the_storm']],
        'xel\'naga'   => ['franchises' => ['starcraft']],
        'zerg'        => ['franchises' => ['starcraft', 'heroes_of_the_storm']],
    ];

    /**
     * Names constructor.
     *
     * @param Generator $generator
     * @return void
     */
    public function __construct(Generator $generator)
    {
        parent::__construct($generator);
        $this->dataProvider = new DataProviders\NamesProvider;
    }

    /**
     * Return the Names provider.
     *
     * @return $this
     */
    public function blizzardNames()
    {
        return $this;
    }

    /**
     * Generate a random first name.
     *
     * @param null|string $gender
     * @param null|string $franchise
     * @return string
     * @throws \Exception
     */
    public function firstName(?string $gender = null, ?string $franchise = null) : string
    {
        if($franchise) {
            $this->addFranchise($franchise);
        }

        return $this->name(
            $gender,
            'first'
        );
    }

    /**
     * Generate a random last name.
     *
     * @param null|string $gender
     * @param null|string $franchise
     * @return string
     * @throws \Exception
     */
    public function lastName(?string $gender = null, ?string $franchise = null) : string
    {
        if($franchise) {
            $this->addFranchise($franchise);
        }

        return $this->name(
            $gender,
            'last'
        );
    }

    /**
     * Generate a random full name.
     *
     * @param null|string $gender
     * @param null|string $franchise
     * @return string
     * @throws \Exception
     */
    public function fullName(?string $gender = null, ?string $franchise = null) : string
    {
        if($franchise) {
            $this->addFranchise($franchise);
        }

        return $this->name(
            $gender,
            'full'
        );
    }

    /**
     * Generate a random name.
     *
     * @param null|string $gender
     * @param string $nameType
     * @param array $franchises
     * @param array $races
     * @return string
     * @throws \Exception
     */
    public function name(
        ?string $gender = null,
        string $nameType = 'full',
        array $franchises = [],
        array $races = []
    ) : string {

        $franchises = !empty($franchises)
            ? $franchises
            : $this->franchises;

        $races = !empty($races)
            ? $races
            : $this->races;

        if($franchises) {
            $this->dataProvider->setFilter('franchise', $franchises);
        }

        if($races) {
            $this->dataProvider->setFilter('race', $races);
        }

        if($gender) {
            $this->dataProvider->setFilter('gender', [$gender]);
        }

        if($nameType) {
            $this->dataProvider->setFilter('name_type', [$nameType]);
        }

        $names = $this->dataProvider->provide();

        return self::randomElement($names);
    }
}