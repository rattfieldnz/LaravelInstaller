<?php

namespace RachidLaasri\LaravelInstaller\Helpers;

/**
 * Class InstallerHelper
 * @package RachidLaasri\LaravelInstaller\Helpers
 */
class InstallerHelper
{
    /**
     * Set the active class to the current opened menu.
     *
     * @param  string|array $route
     * @param  string       $className
     * @return string
     */
    public static function isActive($route, $className = 'active')
    {
        if (is_array($route)) {
            return in_array(\Route::currentRouteName(), $route) ? $className : '';
        }
        if (\Route::currentRouteName() == $route) {
            return $className;
        }
        if (strpos(\URL::current(), $route)) return $className;
    }
}
