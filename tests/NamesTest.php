<?php

namespace ChrGriffin\BlizzardFaker\Tests;

use ChrGriffin\BlizzardFaker\{
    Names
};

class NamesTest extends TestCase
{
    /**
     * Set up the test.
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->faker->addProvider(new Names($this->faker));
    }

    public function providesRaceAndFranchise()
    {
        return [
            // Diablo
            'Diablo + Demon'                    => [
                'franchise' => 'diablo',
                'race'      => 'demon'
            ],
            'Diablo + Angel'                    => [
                'franchise' => 'diablo',
                'race'      => 'angel'
            ],
            'Diablo + Nephalem'                 => [
                'franchise' => 'diablo',
                'race'      => 'nephalem'
            ],
            'Diablo + Human'                    => [
                'franchise' => 'diablo',
                'race'      => 'human'
            ],

            // Hearthstone
            'Hearthstone + Blood Elf'           => [
                'franchise' => 'hearthstone',
                'race'      => 'bloodElf'
            ],
            'Hearthstone + Demon'               => [
                'franchise' => 'hearthstone',
                'race'      => 'demon'
            ],
            'Hearthstone + Dwarf'               => [
                'franchise' => 'hearthstone',
                'race'      => 'dwarf'
            ],
            'Hearthstone + Forsaken'            => [
                'franchise' => 'hearthstone',
                'race'      => 'forsaken'
            ],
            'Hearthstone + gnome'               => [
                'franchise' => 'hearthstone',
                'race'      => 'gnome'
            ],
            'Hearthstone + High Elf'            => [
                'franchise' => 'hearthstone',
                'race'      => 'highElf'
            ],
            'Hearthstone + Human'               => [
                'franchise' => 'hearthstone',
                'race'      => 'human'
            ],
            'Hearthstone + Murloc'              => [
                'franchise' => 'hearthstone',
                'race'      => 'murloc'
            ],
            'Hearthstone + Night Elf'           => [
                'franchise' => 'hearthstone',
                'race'      => 'nightElf'
            ],
            'Hearthstone + Orc'                 => [
                'franchise' => 'hearthstone',
                'race'      => 'orc'
            ],
            'Hearthstone + Troll'               => [
                'franchise' => 'hearthstone',
                'race'      => 'troll'
            ],

            // Heroes of the Storm
            'Heroes of the Storm + Angel'       => [
                'franchise' => 'heroesOfTheStorm',
                'race'      => 'angel'
            ],
            'Heroes of the Storm + Blood Elf'   => [
                'franchise' => 'heroesOfTheStorm',
                'race'      => 'bloodElf'
            ],
            'Heroes of the Storm + Draenei'     => [
                'franchise' => 'heroesOfTheStorm',
                'race'      => 'draenei'
            ],
            'Heroes of the Storm + Dragon'      => [
                'franchise' => 'heroesOfTheStorm',
                'race'      => 'dragon'
            ],
            'Heroes of the Storm + Dwarf'       => [
                'franchise' => 'heroesOfTheStorm',
                'race'      => 'dwarf'
            ],
            'Heroes of the Storm + Elemental'   => [
                'franchise' => 'heroesOfTheStorm',
                'race'      => 'elemental'
            ],
            'Heroes of the Storm + Human'       => [
                'franchise' => 'heroesOfTheStorm',
                'race'      => 'human'
            ],
            'Heroes of the Storm + Murloc'      => [
                'franchise' => 'heroesOfTheStorm',
                'race'      => 'murloc'
            ],
            'Heroes of the Storm + Ogre'        => [
                'franchise' => 'heroesOfTheStorm',
                'race'      => 'ogre'
            ],
            'Heroes of the Storm + Orc'         => [
                'franchise' => 'heroesOfTheStorm',
                'race'      => 'orc'
            ],
            'Heroes of the Storm + Pandaren'    => [
                'franchise' => 'heroesOfTheStorm',
                'race'      => 'pandaren'
            ],
            'Heroes of the Storm + Primal Zerg' => [
                'franchise' => 'heroesOfTheStorm',
                'race'      => 'primalZerg'
            ],
            'Heroes of the Storm + Protoss'     => [
                'franchise' => 'heroesOfTheStorm',
                'race'      => 'protoss'
            ],
            'Heroes of the Storm + Tauren'      => [
                'franchise' => 'heroesOfTheStorm',
                'race'      => 'tauren'
            ],
            'Heroes of the Storm + Terran'      => [
                'franchise' => 'heroesOfTheStorm',
                'race'      => 'terran'
            ],
            'Heroes of the Storm + Undead'      => [
                'franchise' => 'heroesOfTheStorm',
                'race'      => 'undead'
            ],
            'Heroes of the Storm + Zerg'        => [
                'franchise' => 'heroesOfTheStorm',
                'race'      => 'zerg'
            ],

            // Starcraft
            'Starcraft + Xel\'Naga'             => [
                'franchise' => 'starcraft',
                'race'      => 'xelNaga'
            ],
            'Starcraft + Terran'                => [
                'franchise' => 'starcraft',
                'race'      => 'terran'
            ],
            'Starcraft + Protoss'               => [
                'franchise' => 'starcraft',
                'race'      => 'protoss'
            ],
            'Starcraft + Zerg'                  => [
                'franchise' => 'starcraft',
                'race'      => 'zerg'
            ],
            'Starcraft + Primal Zerg'           => [
                'franchise' => 'starcraft',
                'race'      => 'primalZerg'
            ],

            // Warcraft
            'Warcraft + Human'                  => [
                'franchise' => 'warcraft',
                'race'      => 'human'
            ],
            'Warcraft + Dwarf'                  => [
                'franchise' => 'warcraft',
                'race'      => 'dwarf'
            ],
            'Warcraft + Night Elf'              => [
                'franchise' => 'warcraft',
                'race'      => 'nightElf'
            ],
            'Warcraft + Gnome'                  => [
                'franchise' => 'warcraft',
                'race'      => 'gnome'
            ],
            'Warcraft + Draenei'                => [
                'franchise' => 'warcraft',
                'race'      => 'draenei'
            ],
            'Warcraft + Worgen'                 => [
                'franchise' => 'warcraft',
                'race'      => 'worgen'
            ],
            'Warcraft + Orc'                    => [
                'franchise' => 'warcraft',
                'race'      => 'orc'
            ],
            'Warcraft + Forsaken'               => [
                'franchise' => 'warcraft',
                'race'      => 'forsaken'
            ],
            'Warcraft + Undead'                 => [
                'franchise' => 'warcraft',
                'race'      => 'undead'
            ],
            'Warcraft + Troll'                  => [
                'franchise' => 'warcraft',
                'race'      => 'troll'
            ],
            'Warcraft + Tauren'                 => [
                'franchise' => 'warcraft',
                'race'      => 'tauren'
            ],
            'Warcraft + Blood Elf'              => [
                'franchise' => 'warcraft',
                'race'      => 'bloodElf'
            ],
            'Warcraft + Goblin'                 => [
                'franchise' => 'warcraft',
                'race'      => 'goblin'
            ],
            'Warcraft + Pandaren'               => [
                'franchise' => 'warcraft',
                'race'      => 'pandaren'
            ]
        ];
    }

    /**
     * Test that we can retrieve names from valid race/franchise combinations.
     *
     * @param string $franchise,
     * @param string $race
     * @return void
     * @dataProvider providesRaceAndFranchise
     */
    public function testCanGetNamesFromValidFranchises(string $franchise, string $race)
    {
        $name = $this->faker
            ->blizzardNames()
            ->{$franchise}()
            ->{$race}()
            ->name();

        $this->assertTrue(is_string($name));
    }
}