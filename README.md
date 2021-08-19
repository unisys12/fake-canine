# WIP: Fake-Canine

[![Latest Version on Packagist](https://img.shields.io/packagist/v/unisys12/fake-canine.svg?style=flat-square)](https://packagist.org/packages/unisys12/fake-canine)
[![Build Status](https://img.shields.io/travis/unisys12/fake-canine/master.svg?style=flat-square)](https://travis-ci.org/unisys12/fake-canine)
[![Total Downloads](https://img.shields.io/packagist/dt/unisys12/fake-canine.svg?style=flat-square)](https://packagist.org/packages/unisys12/fake-canine)

Extends FakerPHP to add support for adding fake Canines to a project

## Installation

You can install the package via composer:

```bash
composer require unisys12/fake-canine
```

## Usage

```php
<?php

namespace Vendor\YourProject;

use Unisys12\FakeCanine\FakeCanineProvider;
use Faker\Generator;

class CanineModelFactory
{
    $fakeCanine = new FakeCanineProvider((new Generator));

    return [
        'name' => $fakeCanine->name(),
        'breed' => $fakeCanine->breed(),
        'gender' => $fakeCanine->gender
    ]
}
```

In a Laravel project, you would simply pass the `faker` property to the `FakeCanineProvider` like so,

```php
namespace Database\Factories;

use App\Models\Canine;
use Unisys12\FakeCanine\FakeCanineProvider;

class CanineFactory extends Factory
{
    protected $model = Canine::class;

    public function definition()
    {
        $fakeCanine = new FakeCanineProvider($this->faker);

        return [
            'name' => $fakeCanine->name(),
            'breed' => $fakeCanine->breed(),
            'gender' => $fakeCanine->gender
         ]
    }
}
```

## Gender

`gender` is a property of `Unisys12\FakeCanine\FakeCanineProvider` and is set to `null` at initialization of the class. To generate a random name, a gender must be selected first. Once this is done, by calling the `name()` method, the gender selected is stored in a public property that is assessable to the class.

_The above behavior might change in the future._

### Testing

```bash
composer test
```

On Windows, you should add a `-w` tag _(without a space)_ to the script cmds located in the `composer.json`.

```bash
composer test-w
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email unisys12@gmail.com instead of using the issue tracker.

## Credits

- [Phillip Jackson](https://github.com/unisys12)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
