# Blizzard Faker
`blizzard-faker` is a collection of providers for [Faker](https://github.com/fzaninotto/Faker) related to Blizzard Entertainment and its games.

## Requirements

`blizzard-faker` requires PHP 7.0 or greater, and `fzaninotto/faker` 1.6 or greater.

## Installation

You can install via composer:

```
composer install chrgriffin/blizzard-faker
```

_except not yet because I haven't registered it yet lol_

## Usage

You can add a Blizzard provider to Faker the same way you would add any other:

```php
use Faker\Factory;
use ChrGriffin\BlizzardFaker\Names as BlizzardNames;

$faker = Factory::create();
$faker->addProvider(new BlizzardNames($faker));
```

Once added, you can immediately make use of the provider methods as you normally would:

```php
$name = $faker->name();
```

However, `blizzard-faker` offers additional filtering functionality:

```php
$orcName = $faker
    ->blizzardNames() // this line prevents conflict with other Blizzard providers
    ->orc();
```

These filters are additive and chainable, meaning if you want a human _or_ terran name from Diablo, Starcraft, _or_ Warcraft, you can write:

```php
$name = $faker
    ->blizzardNames()
    ->diablo()
    ->starcraft()
    ->warcraft()
    ->human()
    ->terran()
    ->name();
```

## Providers

### `ChrGriffin\BlizzardFaker\Names`

#### Available Methods and Arguments

* `blizzardNames() : ChrGriffin\BlizzardFaker\Names` _(prevents conflict with other providers)_
* `firstName($gender, $franchise) : string`
    * `$gender`: 'male', 'female', or `null` (any)
    * `$franchise`: a camelcased string of a valid franchise, or `null` (any)
* `lastName($gender, $franchise) : string`
    * `$gender`: 'male', 'female', or `null` (any)
    * `$franchise`: a camelcased string of a valid franchise, or `null` (any)
* `fullName($gender, $franchise) : string`
    * `$gender`: 'male', 'female', or `null` (any)
    * `$franchise`: a camelcased string of a valid franchise, or `null` (any)
* `name($type, $gender, $franchise) : string`
    * `$type`: 'first', 'last', 'full', or `null` ('full')
    * `$gender`: 'male', 'female', or `null` (any)
    * `$franchise`: a camelcased string of a valid franchise, or `null` (any)
    
## Filters

After directly calling a provider, you can apply various filters to it before retrieving your data.

Note that not all filters are compatible with all providers, or with each other. Simply apply common sense and you should be fine.

If a filter is applied to an incompatible provider or pre-existing set of filters, it will throw a `ChrGriffin\BlizzardFaker\Invalid{Filter}Exception`. For example, the following code:

```php
$faker
    ->blizzardNames()
    ->starcraft()
    ->orc();
```

will throw a `ChrGriffin\BlizzardFaker\InvalidRaceException`.

### Franchise Filter

You can filter by the following franchises:

* `->diablo()`
* `->hearthstone()`
* `->heroesOfTheStorm()`
* `->starcraft()`
* `->warcraft()`

### Race Filter

You can filter by the following races:

* `->angel()`
* `->bloodElf()`
* `->demon()`
* `->draenei()`
* `->dragon()`
* `->dwarf()`
* `->elemental()`
* `->forsaken()` _(has a lot of, though not 100%, overlap with `undead`)_
* `->gnome()`
* `->goblin()`
* `->human()`
* `->human()`
* `->murloc()`
* `->nephalem()`
* `->nightElf()`
* `->orc()`
* `->pandaren()`
* `->primalZerg()`
* `->protoss()`
* `->tauren()`
* `->terran()`
* `->troll()`
* `->undead()` _(has a lot of, though not 100%, overlap with `forsaken`)_
* `->worgen()`
* `->xelNaga()`
* `->zerg()`

## Roadmap

* include Overwatch franchise
* Monster names provider for Diablo
* Class (ie Paladin, Warlock, etc.) provider for Diablo, Hearthstone, Warcraft
* Ability provider for all franchises
* Investigate feasibility of icon/image provider

## Under the Hood

A cursory investigation of the `src` directory will reveal a distinctly different structure than Faker itself.

In most cases, rather than an individual provider containing a few arrays and selecting an element at random, instead it calls upon multiple - sometimes nested - `DataProvider` classes to provide an array of random data. This is to facilitate the enormous amount of filtering that is possible without overly impacting performance; rather than filtering a single enormous array containing data spanning Blizzard's entire product line, instead we can select only a single `DataProvider` and then apply our filtering to _that_.

In addition to the various ways data can be filtered, there are also built-in 'rules' for returning data for some of the providers:

* `ChrGriffin\BlizzardFaker\Names`:
    * __Lore Character Names__: Significant lore characters will not have their names broken up to be randomly assigned, instead, if returned, it will always be their full, unaltered name. For example, 'Garrosh' can never be assigned a random orcish first name - when retrieving full names, it will _always_ be 'Garrosh Hellscream' (or simply 'Garrosh' if requesting only first names).
    * __Lore Character Last Names__: If a significant lore character has a last name also carried by other characters - for example, a family name, such as 'Cain', or tribe name, such as 'Bloodhoof' - then the last name can be randomly assigned like any other. If they are the only instance of such a name, then the above rule is observed.
    * __Races Without Surnames__: There are some examples of races without surnames, such as Draenei or Protoss. In these cases, their individual name is considered a valid value for either full names _or_ first names: so you may see 'Tassadar' when requesting either first _or_ full names. In the case of significant lore characters with a relevant title, the character plus their title can be returned as the full name (for example, 'Hierarch Artanis', or 'Tyrael, Archangel of Justice'.)