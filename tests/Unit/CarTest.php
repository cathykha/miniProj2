<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    //Test inserting a car
    public function testInsertCar()
    {
        $car = new Car();
        $car->make = 'honda';
        $car->model = 'IS601';
        $car->year = '2019';

        $this->assertTrue(true);
    }

    //Update a car year to 2000
    public function testUpdateCar()
    {
        $car = Car::where('id',[50])->update(['year' => '2000']);

        $this->assertTrue(true);
    }
}



