<?php

namespace Ankurk91\LaravelAlert;

use Illuminate\Session\Store;

class Alert
{
    /**
     * The session storage instance.
     *
     * @var \Illuminate\Session\Store
     */
    protected $session;

    /**
     * Create a new alert instance.
     *
     * @param \Illuminate\Session\Store $session
     *
     * @return void
     */
    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    /**
     * Flash an alert.
     *
     * @param string $message
     * @param string $style
     *
     * @return $this
     */
    public function flash(string $message, string $style = 'info'): self
    {
        $this->session->flash('alert.message', $message);
        $this->session->flash('alert.style', $style);

        return $this;
    }

    /**
     * Flash a danger alert.
     *
     * @param string $message
     *
     * @return $this
     */
    public function danger(string $message): self
    {
        return $this->flash($message, 'danger');
    }

    /**
     * Flash an error alert.
     *
     * @param string $message
     *
     * @return $this
     */
    public function error(string $message): self
    {
        return $this->danger($message);
    }

    /**
     * Flash an info alert.
     *
     * @param string $message
     *
     * @return $this
     */
    public function info(string $message): self
    {
        return $this->flash($message, 'info');
    }

    /**
     * Flash a success alert.
     *
     * @param string $message
     *
     * @return $this
     */
    public function success(string $message): self
    {
        return $this->flash($message, 'success');
    }

    /**
     * Flash a warning alert.
     *
     * @param string $message
     *
     * @return $this
     */
    public function warning(string $message): self
    {
        return $this->flash($message, 'warning');
    }
}
