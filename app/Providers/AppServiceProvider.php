<?php
namespace App\Providers;

use App\Contracts\NotificationService;
 use App\Models\Note;
use App\Observers\NoteObserver;
use EmailNotificationService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Log\Logger;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public $singletons = [
        'notification' => EmailNotificationService::class,
    ];

    public function register(): void
    {
        $this->app->scoped(NotificationService::class, function (Application $app) {
            return new EmailNotificationService($app->make(Logger::class));
        });
        $this->app->alias(NotificationService::class, 'notification');
    }

    public function boot(): void
    {
        Note::observe(NoteObserver::class);
    }

    public function provides(): array
    {
        return [NotificationService::class, 'notification'];
    }
}