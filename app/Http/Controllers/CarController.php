<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use App\Interfaces\CarRepositoryInterface;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
	private CarRepositoryInterface $carRepository;

	public function __construct(CarRepositoryInterface $carRepository)
	{
		$this->carRepository = $carRepository;
	}

	public function index(Request $request)
	{
		$cars = $this->carRepository->getAllCars();
		return view('cars.index')->with('cars', $cars);
	}

	public function create()
	{
		return view('cars.create');
	}

	public function store(CarRequest $request)
	{
		$car= $request->validated();
		$newcar = $this->carRepository->createcar($car);
		return redirect()->back();
	}

	public function edit($id)
	{
		$car = $this->carRepository->getCarById($id);
		return view('cars.edit')->with('car', $car);
	}

	public function update(CarRequest $request, $id)
	{
		$car = $request->validated();
		$updatedcar = $this->carRepository->updateCar($id, $car);
		return redirect()->back();
	}

	public function delete(Request $request, $id)
	{
		if($request->isMethod('GET')) {
			$car = $this->carRepository->getCarById($id);
			return view('cars.delete')->with('car', $car);
		} else {
			Car::destroy($id);
			return redirect()->back();
		}
	}
}
