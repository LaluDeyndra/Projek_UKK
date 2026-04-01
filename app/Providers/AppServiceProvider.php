<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Fix CSS/JS tidak meload saat menggunakan ngrok/cloudflare tunnel (HTTPS proxy)
        if (env('APP_ENV') === 'production' || request()->server('HTTP_X_FORWARDED_PROTO') == 'https') {
            URL::forceScheme('https');
        }

        // Redirect to APP_URL host to definitively prevent any CORS issue (forces WWW or non-WWW)
        if (app()->environment('production') && !app()->runningInConsole()) {
            $appHost = parse_url(config('app.url'), PHP_URL_HOST);
            if ($appHost && request()->getHost() !== $appHost) {
                // If they access via wrong host, cleanly redirect them before parsing the template
                header("HTTP/1.1 301 Moved Permanently");
                header("Location: " . config('app.url') . request()->getRequestUri());
                exit();
            }
        }
    }
}
