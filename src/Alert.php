<?php

namespace Ankurk91\LaravelAlert;

use Illuminate\Session\Store;

class Alert
{
    protected Store $session;

    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    public function flash(string $message, string $style = 'info'): self
    {
        $this->session->flash('alert.message', $message);
        $this->session->flash('alert.style', $style);

        return $this;
    }

    public function danger(string $message): self
    {
        return $this->flash($message, 'danger');
    }

    public function error(string $message): self
    {
        return $this->danger($message);
    }

    public function info(string $message): self
    {
        return $this->flash($message, 'info');
    }

    public function success(string $message): self
    {
        return $this->flash($message, 'success');
    }

    public function warning(string $message): self
    {
        return $this->flash($message, 'warning');
    }
}
