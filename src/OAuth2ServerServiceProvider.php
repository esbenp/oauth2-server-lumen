<?php

namespace Optimus\OAuth2Server;

use LucaDegasperi\OAuth2Server\OAuth2ServerServiceProvider as BaseServiceProvider;

class OAuth2ServerServiceProvider extends BaseServiceProvider {

    public function boot() {
        // Lumen does not support route filters.
    }

    public function register() {
        parent::register();

        $this->registerConfiguration();
    }

    public function registerAssets() {
        // Lumen cannot publish assets
    }

    public function registerConfiguration() {
        $this->app->configure("oauth2");
    }

}