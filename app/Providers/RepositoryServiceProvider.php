<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(\App\Repositories\Contracts\UserRepository::class, \App\Repositories\Eloquents\UserRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\RoleRepository::class, \App\Repositories\Eloquents\RoleRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\PermissionRepository::class, \App\Repositories\Eloquents\PermissionRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\CategoryRepository::class, \App\Repositories\Eloquents\CategoryRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\NotificationRepository::class, \App\Repositories\Eloquents\NotificationRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\NewsRepository::class, \App\Repositories\Eloquents\NewsRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\PhotoRepository::class, \App\Repositories\Eloquents\PhotoRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\BannerRepository::class, \App\Repositories\Eloquents\BannerRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\ContactRepository::class, \App\Repositories\Eloquents\ContactRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\ProductRepository::class, \App\Repositories\Eloquents\ProductRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\ServiceRepository::class, \App\Repositories\Eloquents\ServiceRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\SolutionRepository::class, \App\Repositories\Eloquents\SolutionRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\PricingRepository::class, \App\Repositories\Eloquents\PricingRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\AffiliateRepository::class, \App\Repositories\Eloquents\AffiliateRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\CommunityRepository::class, \App\Repositories\Eloquents\CommunityRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\SystemRepository::class, \App\Repositories\Eloquents\SystemRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\StatisticRepository::class, \App\Repositories\Eloquents\StatisticRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\SupportsRepository::class, \App\Repositories\Eloquents\SupportsRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\CategoryProductRepository::class, \App\Repositories\Eloquents\CategoryProductRepositoryEloquent::class);
        //:end-bindings:
    }
}
