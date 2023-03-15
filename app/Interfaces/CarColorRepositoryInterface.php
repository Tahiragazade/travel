<?php

namespace App\Interfaces;

interface CarColorRepositoryInterface
{
	public function getAllColors();
	public function getColorById($id);
	public function deleteColor($id);
	public function createColor(array $color);
	public function updateColor($id, array $color);
}