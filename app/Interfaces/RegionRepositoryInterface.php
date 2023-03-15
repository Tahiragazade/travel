<?php

namespace App\Interfaces;

interface RegionRepositoryInterface
{
	public function getAllRegions();
	public function getRegionById($id);
	public function deleteRegion($id);
	public function createRegion(array $region);
	public function updateRegion($id, array $region);
}