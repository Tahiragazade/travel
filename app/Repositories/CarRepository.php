<?php

namespace App\Repositories;

use App\Interfaces\CarRepositoryInterface;
use App\Models\Car;

class CarRepository implements CarRepositoryInterface
{
	public function getAllCars()
	{
		return Car::all();
	}

	public function getCarById($id)
	{
		return Car::findOrFail($id);
	}

	public function deleteCar($id)
	{
		Car::destroy($id);
	}

	public function createCar(array $car)
	{
		return Car::create($car);
	}

	public function updateCar($id, array $car)
	{
		return Car::whereId($id)->update($car);
	}

	
}
