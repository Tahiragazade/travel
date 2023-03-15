<?php

namespace App\Interfaces;

interface CarRepositoryInterface
{
	public function getAllCars();
	public function getCarById($id);
	public function deleteCar($id);
	public function createCar(array $car);
	public function updateCar($id, array $car);
}