# Laravel Alert

[![GitHub tag](https://img.shields.io/github/tag/ankurk91/laravel-alert.svg)](https://github.com/ankurk91/laravel-alert/releases)
[![Total Downloads](https://badgen.net/packagist/dt/ankurk91/laravel-alert)](https://packagist.org/packages/ankurk91/laravel-alert)
[![Latest Version](https://badgen.net/github/release/ankurk91/laravel-alert)](https://github.com/ankurk91/laravel-alert/releases)
[![License](https://badgen.net/packagist/license/ankurk91/laravel-alert)](https://packagist.org/packages/ankurk91/laravel-alert)
[![Build Status](https://travis-ci.com/ankurk91/bandwidth-notification-channel.svg)](https://travis-ci.com/ankurk91/laravel-alert)
[![codecov](https://codecov.io/gh/ankurk91/laravel-alert/branch/master/graph/badge.svg)](https://codecov.io/gh/ankurk91/laravel-alert)

A [Bootstrap](http://getbootstrap.com/) alert helper for Laravel.

## Installation
You can install the package via composer:
```
composer require ankurk91/laravel-alert
```

Include the alert view within your view blade templates.

```blade
@include('alert::bootstrap')
```

## Usage examples
You can use facade.
```php
<?php
// You can alias this facade in your config/app.php.
use Ankurk91\LaravelAlert\Facades\Alert;

// In your controllers
Alert::error('Something went wrong.');
Alert::danger('I am same ar error.');
Alert::success('Contact saved.');
Alert::warning('You are running late.');
```

There is also a helper function if that is what you prefer.

```php
alert()->info('Use anywhere without facade.');

alert('You can use the helper like this too.', 'danger');
```

## Security
If you discover any security related issues, please email `pro.ankurk1[at]gmail[dot]com` instead of using the issue tracker.

## Attribution
Original code taken from [vinkla/laravel-alert](https://github.com/vinkla/laravel-alert)

## License
The [MIT](https://opensource.org/licenses/MIT) License.
