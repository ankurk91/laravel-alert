<?php
declare(strict_types=1);

namespace Ankurk91\LaravelAlert;

use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

class AlertServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'alert');
    }

    public function register(): void
    {
        $this->app->scoped('alert', function (Container $app) {
            return new Alert($app['session.store']);
        });

        $this->app->alias('alert', Alert::class);
    }

    public function provides(): array
    {
        return [
            Alert::class,
        ];
    }
}
