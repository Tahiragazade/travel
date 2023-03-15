<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegionRequest;
use App\Interfaces\RegionRepositoryInterface;
use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
	private RegionRepositoryInterface $regionRepository;

	public function __construct(regionRepositoryInterface $regionRepository)
	{
		$this->regionRepository = $regionRepository;
	}

	public function index(Request $request)
	{
		$regions = $this->regionRepository->getAllRegions();
		return view('regions.index')->with('regions', $regions);
	}

	public function create()
	{
		return view('Regions.create');
	}

	public function store(RegionRequest $request)
	{
		$region= $request->validated();
		$newRegion = $this->regionRepository->createRegion($region);
		return redirect()->back();
	}

	public function edit($id)
	{
		$region = $this->regionRepository->getRegionById($id);
		return view('regions.edit')->with('region', $region);
	}

	public function update(RegionRequest $request, $id)
	{
		$region = $request->validated();
		$updatedRegion = $this->regionRepository->updateRegion($id, $region);
		return redirect()->back();
	}

	public function delete(Request $request, $id)
	{
		if($request->isMethod('GET')) {
			$region = $this->regionRepository->getRegionById($id);
			return view('regions.delete')->with('region', $region);
		} else {
			Region::destroy($id);
			return redirect()->back();
		}
	}
}
