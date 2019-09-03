<?php

use Ankurk91\LaravelAlert\Alert;

if (!function_exists('alert')) {
    /**
     * Flash an alert.
     *
     * @param  string|null  $message
     * @param  string|null  $style
     *
     * @return \Ankurk91\LaravelAlert\Alert
     */
    function alert(string $message = null, string $style = 'info'): Alert
    {
        $alert = app('alert');

        if (is_null($message)) {
            return $alert;
        }

        return $alert->flash($message, $style);
    }
}
