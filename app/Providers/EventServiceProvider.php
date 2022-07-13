<?php

declare(strict_types = 1);

namespace App\Providers;

use Laravel\Lumen\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\ExampleEvent' => [
            'App\Listeners\ExampleListener',
        ],
        'App\Events\PasswordResetEvent' => [
            'App\Listeners\PasswordResetListener',
        ],
        'App\Events\ForgotPasswordEvent' => [
            'App\Listeners\ForgotPasswordListener',
        ],
    ];
}
