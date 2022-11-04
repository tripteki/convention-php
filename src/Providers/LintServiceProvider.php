<?php

namespace Tripteki\Lint\Providers;

use Illuminate\Support\ServiceProvider;

class LintServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot()
    {
        $this->registerPublishers();
    }

    /**
     * @return void
     */
    protected function registerPublishers()
    {
        $this->publishes(
        [
            __DIR__."/../../pint.json" => base_path("pint.json"),
        ],

        "tripteki-laravelphp-lint");
    }
};