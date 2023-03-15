<?php

namespace App\Repositories;

use App\Interfaces\CarColorRepositoryInterface;
use App\Models\CarColor;

class CarColorRepository implements CarColorRepositoryInterface
{
	public function getAllColors()
	{
		return CarColor::all();
	}

	public function getColorById($id)
	{
		return CarColor::findOrFail($id);
	}

	public function deleteColor($id)
	{
		CarColor::destroy($id);
	}

	public function createColor(array $color)
	{
		return CarColor::create($color);
	}

	public function updateColor($id, array $color)
	{
		return CarColor::whereId($id)->update($color);
	}

	
}
