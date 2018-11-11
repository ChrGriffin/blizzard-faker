<?php

namespace ChrGriffin\BlizzardFaker\Tests;

use ChrGriffin\BlizzardFaker\{
    Names,
    Exceptions\InvalidRaceException
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

    /**
     * Provide an array of valid franchise + race + name types to test.
     *
     * @return array
     */
    public function provideValidRaceAndFranchiseAndNameType()
    {
        $franchises = [
            'diablo'           => [
                'angel'    => ['full', 'first'],
                'demon'    => ['full', 'first'],
                'human'    => ['full', 'first', 'last'],
                'nephalem' => ['full', 'first'],
            ],
            'hearthstone'      => [
                'bloodElf' => ['full', 'first', 'last'],
                'demon'    => ['full', 'first'],
                'dwarf'    => ['full', 'first', 'last'],
                'gnome'    => ['full', 'first', 'last'],
                'highElf'  => ['full', 'first', 'last'],
                'human'    => ['full', 'first', 'last'],
                'murloc'   => ['full', 'first'],
                'orc'      => ['full', 'first', 'last'],
                'troll'    => ['full', 'first'],
            ],
            'heroesOfTheStorm' => [
                'angel'      => ['first'],
                'bloodElf'   => ['first'],
                'draenei'    => ['first'],
                'dragon'     => ['first'],
                'dwarf'      => ['first'],
                'elemental'  => ['first'],
                'human'      => ['full', 'first', 'last'],
                'murloc'     => ['first'],
                'ogre'       => ['first'],
                'orc'        => ['first'],
                'pandaren'   => ['first'],
                'primalZerg' => ['first'],
                'protoss'    => ['first'],
                'tauren'     => ['full', 'first'],
                'terran'     => ['full', 'first', 'last'],
                'undead'     => ['first'],
                'zerg'       => ['first'],
            ],
            'starcraft'        => [
                'primalZerg' => ['full', 'first'],
                'protoss'    => ['full', 'first'],
                'terran'     => ['full', 'first', 'last'],
                'xelNaga'    => ['full', 'first', 'last'],
                'zerg'       => ['full', 'first', 'last'],
            ],
            'warcraft'         => [
                'bloodElf' => ['full', 'first', 'last'],
                'draenei'  => ['full', 'first'],
                'dwarf'    => ['full', 'first', 'last'],
                'forsaken' => ['full', 'first', 'last'],
                'gnome'    => ['full', 'first', 'last'],
                'goblin'   => ['full', 'first', 'last'],
                'human'    => ['full', 'first', 'last'],
                'nightElf' => ['full', 'first', 'last'],
                'orc'      => ['full', 'first', 'last'],
                'pandaren' => ['full', 'first', 'last'],
                'tauren'   => ['full', 'first', 'last'],
                'troll'    => ['full', 'first'],
                'undead'   => ['full', 'first', 'last'],
                'worgen'   => ['full', 'first', 'last'],
            ]
        ];

        $structured = [];
        foreach($franchises as $franchise => $races) {
            foreach($races as $race => $nameTypes) {
                foreach($nameTypes as $nameType) {
                    $structured[] = [
                        'franchise' => $franchise,
                        'race' => $race,
                        'nameType' => $nameType
                    ];
                }
            }
        }

        return $structured;
    }

    /**
     * Provide an array of invalid franchise + race combos.
     *
     * @return array
     */
    public function provideInvalidRaceAndFranchise()
    {
        return [
            [
                'franchise' => 'diablo',
                'race'      => 'orc'
            ], [
                'franchise' => 'diablo',
                'race'      => 'terran'
            ], [
                'franchise' => 'hearthstone',
                'race'      => 'angel'
            ], [
                'franchise' => 'hearthstone',
                'race'      => 'protoss'
            ], [
                'franchise' => 'starcraft',
                'race'      => 'demon'
            ], [
                'franchise' => 'starcraft',
                'race'      => 'orc'
            ], [
                'franchise' => 'warcraft',
                'race'      => 'zerg'
            ], [
                'franchise' => 'warcraft',
                'race'      => 'angel'
            ]
        ];
    }

    /**
     * Test that we can retrieve names from valid race/franchise combinations.
     *
     * @param string $franchise,
     * @param string $race
     * @param string $type
     * @return void
     * @dataProvider provideValidRaceAndFranchiseAndNameType
     */
    public function testCanGetNamesFromValidFranchisesNameCombinations(string $franchise, string $race, string $type)
    {
        $name = $this->faker
            ->blizzardNames()
            ->{$franchise}()
            ->{$race}()
            ->{$type . 'Name'}();

        $this->assertTrue(is_string($name));
    }

    /**
     * Test that invalid combinations of franchises and names throw exceptions.
     *
     * @param string $franchise
     * @param string $race
     * @dataProvider provideInvalidRaceAndFranchise
     */
    public function testInvalidFranchiseNameCombinationsThrowExceptions(string $franchise, string $race)
    {
        $exception = null;
        try {
            $this->faker
                ->blizzardNames()
                ->{$franchise}()
                ->{$race}();
        }
        catch(\Exception $exception) {
            // do nothing
        }

        $this->assertNotEmpty($exception);
        $this->assertInstanceOf(
            InvalidRaceException::class,
            $exception
        );
    }
}