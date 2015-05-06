<?php 

namespace Optimus\OAuth2Server\Middleware;

use Closure;
use LucaDegasperi\OAuth2Server\Filters\OAuthOwnerFilter;

class OAuthOwnerMiddleware extends OAuthOwnerFilter {

    public function handle($request, Closure $next)
    {
        // Will throw exception on failure
        parent::filter();

        return $next($request);
    }
}