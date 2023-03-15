<?php

namespace App\Repositories;

use App\Interfaces\TravelRepositoryInterface;
use App\Models\Travel;

class TravelRepository implements TravelRepositoryInterface
{
	public function getAllTravels()
	{
		return Travel::all();
	}

	public function getTravelById($id)
	{
		return Travel::findOrFail($id);
	}

	public function deleteTravel($id)
	{
		Travel::destroy($id);
	}

	public function createTravel(array $travel)
	{
		return Travel::create($travel);
	}

	public function updateTravel($id, array $travel)
	{
		return Travel::whereId($id)->update($travel);
	}

	
}
