# Laravel Alert

[![GitHub tag](https://badgen.net/github/tag/ankurk91/laravel-alert)](https://github.com/ankurk91/laravel-alert/releases)
[![Packagist](https://badgen.net/packagist/v/ankurk91/laravel-alert)](https://packagist.org/packages/ankurk91/laravel-alert)
[![Total Downloads](https://badgen.net/packagist/dt/ankurk91/laravel-alert)](https://packagist.org/packages/ankurk91/laravel-alert)
[![License](https://badgen.net/packagist/license/ankurk91/laravel-alert)](https://packagist.org/packages/ankurk91/laravel-alert)
[![Build Status](https://travis-ci.com/ankurk91/laravel-alert.svg)](https://travis-ci.com/ankurk91/laravel-alert)
[![codecov](https://codecov.io/gh/ankurk91/laravel-alert/branch/master/graph/badge.svg)](https://codecov.io/gh/ankurk91/laravel-alert)

A [Bootstrap](https://getbootstrap.com/docs/4.1/components/alerts/) alert helper for Laravel 6+.

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
// Import the facade
use Ankurk91\LaravelAlert\Facades\Alert;

// In your controllers
Alert::error('Something went wrong.');
Alert::danger('I am same as error.');
Alert::success('Contact saved.');
Alert::warning('You are running late.');
Alert::info('Order dispatched.');
```

There is also a global helper function if you prefer.

```php
<?php

alert()->info('Use anywhere without facade.');

alert('You can use the <b>html</b> tags like this too.', 'danger');
```

### BootstrapVue support
The package include the template to support bootstrap vue [alert](https://bootstrap-vue.js.org/docs/components/alert/#alerts) component.

* Import the required javascript components.
```js
// resources/js/bootstrap.js
import { AlertPlugin } from 'bootstrap-vue'
Vue.use(AlertPlugin)
```
* Update your blade template like:
```blade
@include('alert::bootstrapVue')
```

## Changelog
Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing
```
composer test
```

## Security
If you discover any security related issues, please email `pro.ankurk1[at]gmail[dot]com` instead of using the issue tracker.

## Attribution
Original code taken from [vinkla/laravel-alert](https://github.com/vinkla/laravel-alert)

## License
The [MIT](https://opensource.org/licenses/MIT) License.
