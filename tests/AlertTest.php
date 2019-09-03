<?php

namespace Ankurk91\Tests\LaravelAlert;

use Ankurk91\LaravelAlert\Alert;
use Illuminate\Session\Store;
use Mockery;
use PHPUnit\Framework\TestCase;

class AlertTest extends TestCase
{
    use \Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;

    /** @var Alert */
    public $alert;

    public $session;

    public function setUp(): void
    {
        parent::setUp();

        $this->session = Mockery::mock(Store::class);
        $this->alert = new Alert($this->session);
    }

    public function testFlash()
    {
        $this->session->shouldReceive('flash')
            ->once()
            ->with(
                'alert.message',
                'Flash message'
            )
            ->andReturn($this->alert);

        $this->session->shouldReceive('flash')
            ->once()
            ->with(
                'alert.style',
                'info'
            )
            ->andReturn($this->alert);

        $this->alert->flash("Flash message");
    }

}
