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
use ChrGriffin\BlizzardFaker\Names;

$faker = Factory::create();
$faker->addProvider(new Names($faker));
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
* `firstName() : string`
    * `$gender`: 'male', 'female', or `null` (any)
    * `$franchise`: a camelcased string of a valid franchise, or `null` (any)
* `lastName() : string`
    * `$gender`: 'male', 'female', or `null` (any)
    * `$franchise`: a camelcased string of a valid franchise, or `null` (any)
* `fullName() : string`
    * `$gender`: 'male', 'female', or `null` (any)
    * `$franchise`: a camelcased string of a valid franchise, or `null` (any)
* `name() : string`
    * `$type`: 'first', 'last', 'full', or `null` ('full')
    * `$gender`: 'male', 'female', or `null` (any)
    * `$franchise`: a camelcased string of a valid franchise, or `null` (any)