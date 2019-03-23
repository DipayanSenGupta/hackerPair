<?php
namespace Tests\Models;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EventTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function testEventDateTimeFieldIsACarbonObject()
    {
    	$event = factory(\App\Event::class)->create();
      $this->assertTrue(is_a($event->started_at, 'Illuminate\Support\Carbon'));
    }
}
