# trait-singleton, [Packagist](https://packagist.org/packages/akbsit/trait-singleton)

## Install

To install package, you need run command:

```bash
composer require akbsit/trait-singleton
```

## Example

```php
<?php namespace App\Classes;

use Akbsit\TraitSingleton\SingletonTrait;

class ExampleSingletonClass
{
    use SingletonTrait;
}
```

```php
ExampleSingletonClass::instance();
```
