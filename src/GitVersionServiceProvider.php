<?php

namespace TiborHegedus\GitVersion;

use Illuminate\Support\ServiceProvider;
use TiborHegedus\GitVersion\Commands\GitVersionCommand;

class GitVersionServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/laravel-git-version.php' => config_path('laravel-git-version.php'),
            ], 'config');


            $this->commands([
                GitVersionCommand::class,
            ]);
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/laravel-git-version.php', 'laravel-git-version');

        $this->app->bind('git-version', function ($app) {
            return new GitVersion();
        });
    }
}
