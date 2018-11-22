<?php

namespace ChrGriffin\BlizzardFaker\DataProviders\Diablo;

use ChrGriffin\BlizzardFaker\{
    DataProviders\DataProvider,
    Traits\GeneratesPowersets
};

class Monsters extends DataProvider
{
    /**
     * Class traits.
     */
    use GeneratesPowersets;

    /**
     * Diablo 2 monster prefixes.
     *
     * @var array
     */
    protected static $monsterPrefixes = [
        'Ash',
        'Bane', 'Bile', 'Black', 'Blade', 'Blight', 'Blister', 'Blood', 'Bone', 'Break',
        'Chaos', 'Cold',
        'Death', 'Devil', 'Dire', 'Doom', 'Dragon', 'Dread', 'Drool',
        'Fester', 'Fire', 'Flame', 'Flesh', 'Foul', 'Froth',
        'Gloom', 'Gore',  'Gray', 'Grief', 'Gut',
        'Haze',
        'Lust',
        'Maul', 'Mind', 'Mold', 'Moon',
        'Night',
        'Ooze',
        'Pit', 'Plague', 'Poison', 'Pox', 'Puke', 'Pulse', 'Pus',
        'Rot', 'Rust',
        'Seethe', 'Shadow', 'Shard', 'Sharp', 'Sin', 'Slime', 'Sludge', 'Snot', 'Soul', 'Spine', 'Spirit',
        'Star', 'Steel', 'Stone', 'Storm',
        'Thirst',
        'Venom', 'Vile', 'Viper',
        'Warp', 'Wind', 'Wrath'
    ];

    /**
     * Diablo 2 monster suffixes.
     *
     * @var array
     */
    protected static $monsterSuffixes = [
        'Bang', 'Bender', 'Bite', 'Brow', 'Burn',
        'Call',	'Claw', 'Cloud', 'Crawler',	'Crow',
        'Dancer', 'Drinker',
        'Eater', 'Eye',
        'Fang', 'Feast', 'Fist',
        'Grin', 'Growler', 'Grumble',
        'Hack', 'Hawk', 'Head', 'Heart', 'Horn',
        'Jade',
        'Kill', 'Killer',
        'Maggot', 'Maim',
        'Maw',
        'Razor', 'Rend', 'Rip',
        'Shank', 'Shield', 'Shifter', 'Skin', 'Skull', 'Snarl', 'Spawn', 'Spell',
        'Thorn', 'Tongue', 'Touch',
        'Vex',
        'Weaver', 'Web', 'Widow', 'Wight', 'Wing', 'Wolf', 'Wound',
    ];

    /**
     * Diablo 2 monster appellations.
     *
     * @var array
     */
    protected static $monsterApellations = [
        'the Axe',
        'the Cold',
        'the Dark', 'the Dead', 'the Destroyer',
        'the Flayer',
        'the Grim',
        'the Hammer', 'the Howler', 'the Hungry', 'the Hunter',
        'the Impaler',
        'the Jagged',
        'the Mad',
        'the Mauler',
        'the Quick',
        'the Shade', 'the Sharp', 'the Slasher', 'the Slayer',
        'the Tainted', 'the Unclean',
        'the Unholy',
        'the Witch', 'the Wraith'
    ];

    /**
     * Provide configured names.
     *
     * @return array
     */
    public function provide() : array
    {
        return array_map(
            function ($name) {
                return implode(' ', $name);
            },
            $this->powerset(
                [
                    self::$monsterPrefixes,
                    self::$monsterSuffixes,
                    self::$monsterApellations
                ]
            )
        );
    }
}


