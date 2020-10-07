<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        'App\Event' => 'App\Policies\EventPolicy',
        'App\Event' => 'App\Policies\PromotionPolicy',
        'App\Event' => 'App\Policies\ArticlePolicy',
        'App\Event' => 'App\Policies\PostPolicy',
        'App\Event' => 'App\Policies\GeneralPolicy',
        'App\Event' => 'App\Policies\AdPolicy',
        'App\Event' => 'App\Policies\HandbookPolicy',
        'App\Event' => 'App\Policies\MemoryPolicy',
        'App\Event' => 'App\Policies\PerformancePolicy',
        'App\Event' => 'App\Policies\RehearsalPolicy',
        'App\Event' => 'App\Policies\SeniorPolicy',
        'App\Event' => 'App\Policies\TicketPolicy',
        'App\Event' => 'App\Policies\PhotoPolicy',
        'App\Event' => 'App\Policies\VolunteerPolicy',
        'App\Student' => 'App\Policies\StudentPolicy',
        'App\Update' => 'App\Policies\UpdatePolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
