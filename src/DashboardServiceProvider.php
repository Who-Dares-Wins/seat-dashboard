<?php

namespace SAS\Dashboard;

use Seat\Services\AbstractSeatPlugin;

class DashboardServiceProvider extends AbstractSeatPlugin {
  /**
   * Bootstrap the application services.
   *
   * @return void
   */
  public function boot() {
    $this->addRoutes();
    $this->addViews();
    $this->addAssets();
    $this->configureApi();
  }

  /**
   * Register the application services.
   *
   * @return void
   */
  public function register() {
    $this->mergeConfigFrom(
      __DIR__ . '/Config/dashboard.config.php', 'dashboard.config');

    $this->mergeConfigFrom(
        __DIR__ . '/Config/dashboard.permissions.php', 'web.permissions');

    $this->mergeConfigFrom(
        __DIR__ . '/Config/package.sidebar.php', 'package.sidebar');
  }

  /**
   * Register cli commands
   */
  private function addCommands() {
    $this->commands([
      // DiscordUserPolicy::class,
    ]);
  }

  /**
   * Import routes
   */
  private function addRoutes() {
    if (! $this->app->routesAreCached()) {
      include __DIR__ . '/Http/routes.php';
    }
  }

  /**
   * Import views
   */
  private function addViews() {
    $this->loadViewsFrom(__DIR__ . '/resources/views', 'dashboard');
  }

  /**
   * Import static assets
   */
  private function addAssets() {
    $this->publishes([
      __DIR__ . '/resources/assets/css/' => public_path('web/css'),
    ]);
  }

  /**
   * Return the plugin public name as it should be displayed into settings.
    *
    * @example SeAT Web
    *
    * @return string
    */
  public function getName(): string {
    return 'SAS Dashboard';
  }

  /**
   * Return the plugin repository address.
   *
   * @example https://github.com/eveseat/web
   *
   * @return string
   */
  public function getPackageRepositoryUrl(): string {
    return 'https://github.com/who-dares-wins/seat-dashboard';
  }

  /**
   * Return the plugin technical name as published on package manager.
   *
   * @example web
   *
   * @return string
   */
  public function getPackagistPackageName(): string {
    return 'seat-dashboard';
  }

  /**
   * Return the plugin vendor tag as published on package manager.
   *
   * @example eveseat
   *
   * @return string
   */
  public function getPackagistVendorName(): string {
    return 'who-dares-wins';
  }

  /**
   * Return the plugin installed version.
   *
   * @return string
   */
  public function getVersion(): string {
    return config('seat-dashboard.config.version');
  }
}
