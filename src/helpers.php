<?php

use Ankurk91\LaravelAlert\Alert;

if (!function_exists('alert')) {

    function alert(?string $message = null, string $style = 'info'): Alert
    {
        $alert = app(Alert::class);

        if (is_null($message)) {
            return $alert;
        }

        return $alert->flash($message, $style);
    }

}
