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

...