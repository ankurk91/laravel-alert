<?php
declare(strict_types=1);

namespace Ankurk91\LaravelAlert;

use Illuminate\Support\ServiceProvider;

class AlertServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'alert');
    }

    public function register(): void
    {
        $this->app->singleton('alert', function ($app) {
            return new Alert($app['session.store']);
        });

        $this->app->alias('alert', Alert::class);
    }

    public function provides(): array
    {
        return [
            'alert',
        ];
    }
}
