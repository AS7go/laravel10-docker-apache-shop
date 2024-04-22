<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;

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
        // --- Этот код выдает ошибку -> обращения к базе данных до загрузки
        // и все блокируется ошибкой обращения к БД,
        // даже !!! php artisan выдает ошибку обращение к базе данных
        // $categories = Category::orderBy('id')->get();

        // View::share([
        //     'categories'=>$categories
        // ]);
        // ---

        // Используем View Composer для передачи категорий во все представления
        View::composer('*', function ($view) {
            $categories = Category::orderBy('id')->get();
            $view->with('categories', $categories);
        });
    }
}
