<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarColorRequest;
use App\Interfaces\CarColorRepositoryInterface;
use App\Models\CarColor;
use Illuminate\Http\Request;

class ColorController extends Controller
{
	private CarColorRepositoryInterface $colorRepository;

	public function __construct(CarColorRepositoryInterface $colorRepository)
	{
		$this->colorRepository = $colorRepository;
	}

	public function index(Request $request)
	{
		$colors = $this->colorRepository->getAllColors();
		return view('colors.index')->with('colors', $colors);
	}

	public function create()
	{
		return view('colors.create');
	}

	public function store(CarColorRequest $request)
	{
		$color = $request->validated();
		$newColor = $this->colorRepository->createColor($color);
		return redirect()->back();
	}

	public function edit($id)
	{
		$color = $this->colorRepository->getColorById($id);
		return view('colors.edit')->with('color', $color);
	}

	public function update(CarColorRequest $request, $id)
	{
		$color = $request->validated();
		$updatedColor = $this->colorRepository->updateColor($id, $color);
		return redirect()->back();
	}

	public function delete(Request $request, $id)
	{
		if($request->isMethod('GET')) {
			$color = $this->colorRepository->getColorById($id);
			return view('colors.delete')->with('color', $color);
		} else {
			CarColor::destroy($id);
			return redirect()->back();
		}
	}
}
