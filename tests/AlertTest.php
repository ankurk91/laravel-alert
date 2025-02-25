<?php

namespace Ankurk91\LaravelAlert\Tests;

use Ankurk91\LaravelAlert\Alert;
use Illuminate\Session\Store;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Alert::class)]
class AlertTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    public Alert $alert;

    public Store $session;

    public function setUp(): void
    {
        parent::setUp();

        $this->session = Mockery::mock(Store::class);
        $this->alert = new Alert($this->session);
    }

    protected function setAssertion(...$args)
    {
        $this->session->shouldReceive('flash')
            ->once()
            ->with(
                $args[0],
                $args[1]
            )
            ->andReturn($this->alert);
    }

    public function testFlash()
    {
        $this->setAssertion(
            'alert.message',
            'Flash message'
        );

        $this->setAssertion(
            'alert.style',
            'info'
        );

        $this->alert->flash("Flash message");
    }

    public function testSuccess()
    {
        $this->setAssertion(
            'alert.message',
            'Flash message'
        );

        $this->setAssertion(
            'alert.style',
            'success'
        );

        $this->alert->success("Flash message");
    }

    public function testError()
    {
        $this->setAssertion(
            'alert.message',
            'Flash message'
        );

        $this->setAssertion(
            'alert.style',
            'danger'
        );

        $this->alert->error("Flash message");
    }

    public function testDanger()
    {
        $this->setAssertion(
            'alert.message',
            'Flash message'
        );

        $this->setAssertion(
            'alert.style',
            'danger'
        );

        $this->alert->danger("Flash message");
    }

    public function testInfo()
    {
        $this->setAssertion(
            'alert.message',
            'Flash message'
        );

        $this->setAssertion(
            'alert.style',
            'info'
        );

        $this->alert->info("Flash message");
    }

    public function testWarning()
    {
        $this->setAssertion(
            'alert.message',
            'Flash message'
        );

        $this->setAssertion(
            'alert.style',
            'warning'
        );

        $this->alert->warning("Flash message");
    }

}
