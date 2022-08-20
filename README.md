# Form Request Validation for Lumen
This small package contains a laravel-like solution for request form validation.

## Contents

- Form Request Validation for Lumen
- Artisan Command `make:request`
- Artisan Command `make:rule`

## Installation

You can install the package via composer:

```bash
composer require samuel-nunes/lumen-form-request-validation
```
Next, you must load the Artisan commands:

```php
// app/Console/Kernel.php
protected $commands = [
        \SamuelNunes\LumenFormRequestValidation\Console\Commands\RequestMakeCommand::class,
        \SamuelNunes\LumenFormRequestValidation\Console\Commands\RuleMakeCommand::class
    ];
```

## Usage

### You can use: 

- `php artisan make:request` to generate a new form request validation (it's works like [laravel method](https://laravel.com/docs/validation#form-request-validation)).

- `php artisan make:rule` to generate a new rule to use in your form request validation (it's works like [laravel method](https://laravel.com/docs/6.x/validation) too).
## Credits

- [Samuel Nunes](https://github.com/SamuelNunesDev)

## License

The MIT License (MIT). Please see [LICENSE](LICENSE.md) for more information.
