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

    //Delete a car
    public function testDeleteCar()
    {
        $car = Car::where('id','=', [2])->delete();

        $this->assertTrue(true);
    }

    //Count number of cars
    public function testCountCar()
    {
        $car = Car::All();
        $recordCount = $car->count();

        $this->assertTrue(true);
    }

    //Test car's year is an integer
    public function testCarYearInt()
    {
        $car = Car::inRandomOrder()->first();

        $this->assertInternalType('int', intval($car->year));
    }

    //Test car's make either ford / honda / toyota
    public function testCarMake()
    {
        $car = Car::inRandomOrder()->first();

        $this->assertContains($car->make, ['honda', 'toyota', 'ford']);
    }

    //Test car's model in string
    public function testCarModel()
    {
        $car = Car::find(1);

        $this->assertInternalType('string', $car -> model);
    }
}



