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
        'App\Promotion' => 'App\Policies\PromotionPolicy',
        'App\Article' => 'App\Policies\ArticlePolicy',
        'App\Post' => 'App\Policies\PostPolicy',
        'App\General' => 'App\Policies\GeneralPolicy',
        'App\Ad' => 'App\Policies\AdPolicy',
        'App\Handbook' => 'App\Policies\HandbookPolicy',
        'App\Memory' => 'App\Policies\MemoryPolicy',
        'App\Performance' => 'App\Policies\PerformancePolicy',
        'App\Rehearsal' => 'App\Policies\RehearsalPolicy',
        'App\Senior' => 'App\Policies\SeniorPolicy',
        'App\Ticket' => 'App\Policies\TicketPolicy',
        'App\Photo' => 'App\Policies\PhotoPolicy',
        'App\Volunteer' => 'App\Policies\VolunteerPolicy',
        'App\Student' => 'App\Policies\StudentPolicy',
        'App\Update' => 'App\Policies\UpdatePolicy',
        'App\Fest' => 'App\Policies\FestPolicy',
        'App\Hub' => 'App\Policies\HubPolicy',
        'App\Video' => 'App\Policies\VideoPolicy',
        'App\Blog' => 'App\Policies\BlogPolicy',
        'App\Level' => 'App\Policies\LevelPolicy',
        'App\Community' => 'App\Policies\CommunityPolicy',
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
