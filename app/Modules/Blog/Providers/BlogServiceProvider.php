<?php

declare(strict_types=1);

namespace App\Modules\Blog\Providers;

use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{
    public function register()
    {
	     $this->mergeConfigFrom(
            __DIR__.'/../Config/config.php', 'blog'
        );
    }

   
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        
        $this->loadViewsFrom(__DIR__.'/../Views', 'blog');
        
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        
        $this->loadTranslationsFrom(__DIR__.'/../Resources/lang', 'blog');
    }
    
}
