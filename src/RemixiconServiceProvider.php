<?php

namespace wulfheart\BladeRemixicon;

use BladeUI\Icons\Factory;
use Carbon\Laravel\ServiceProvider;

/**
 * Class RemixiconServiceProvider
 *
 * @package wulfheart/BladeRemixicon
 */
class RemixiconServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->callAfterResolving(Factory::class, function (Factory $factory) {
            $factory->add('blade-remixicon', [
                'path' => __DIR__ . '/../resources/svg',
                'prefix' => 'ri',
            ]);
        });
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/svg' => public_path('vendor/blade-remixicon'),
            ], 'blade-remixicon');
        }
    }
}
