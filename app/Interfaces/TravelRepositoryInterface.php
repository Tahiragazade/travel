<?php

namespace App\Interfaces;

interface TravelRepositoryInterface
{
	public function getAllTravels();
	public function getTravelById($id);
	public function deleteTravel($id);
	public function createTravel(array $travel);
	public function updateTravel($id, array $travel);
}