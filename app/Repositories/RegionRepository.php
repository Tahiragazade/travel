<?php

namespace App\Repositories;

use App\Interfaces\RegionRepositoryInterface;
use App\Models\Region;

class RegionRepository implements RegionRepositoryInterface
{
	public function getAllRegions()
	{
		return Region::all();
	}

	public function getRegionById($id)
	{
		return Region::findOrFail($id);
	}

	public function deleteRegion($id)
	{
		Region::destroy($id);
	}

	public function createRegion(array $region)
	{
		return Region::create($region);
	}

	public function updateRegion($id, array $region)
	{
		return Region::whereId($id)->update($region);
	}

	
}
