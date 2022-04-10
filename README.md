# trait-singleton, [Packagist](https://packagist.org/packages/falbar/trait-singleton)

## Install

To install package, you need run command:

```bash
composer require falbar/trait-singleton
```

## Example

```php
<?php namespace App\Classes;

use Falbar\TraitSingleton\SingletonTrait;

class ExampleSingletonClass
{
    use SingletonTrait;
}
```

```php
ExampleSingletonClass::instance();
```
