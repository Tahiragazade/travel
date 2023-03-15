<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartravelRequest;
use App\Http\Requests\CreateTravelRequest;
use App\Interfaces\CartravelRepositoryInterface;
use App\Interfaces\TravelRepositoryInterface;
use App\Models\Cartravel;
use App\Repositories\CustomerRepository;
use App\Repositories\RegionRepository;
use Illuminate\Http\Request;

class TravelController extends Controller
{
	private TravelRepositoryInterface $travelRepository;
	protected $regionRepository;
	protected $customerRepository;

	public function __construct(TravelRepositoryInterface $travelRepository,RegionRepository $regionRepository,CustomerRepository $customerRepository)
	{
		$this->travelRepository = $travelRepository;
		$this->regionRepository = $regionRepository;
		$this->customerRepository = $customerRepository;
	}

	public function index(Request $request)
	{
		$travels = $this->travelRepository->getAllTravels();
		return view('travels.index')->with('travels', $travels);
	}

	public function create($id)
	{
		$customer = $this->customerRepository->getCustomerById($id);
		$regions=$this->regionRepository->getAllRegions();

		return view('travels.create',['customer' => $customer,'regions'=>$regions]);

	}

	public function store(CreateTravelRequest $request)
	{
		$travel = $request->validated();
		$newTravel = $this->travelRepository->createTravel($travel);
		return redirect()->back();
	}

	public function edit($id)
	{
		$travel = $this->travelRepository->getTravelById($id);
		return view('travels.edit')->with('travel', $travel);
	}

	public function update(CreateTravelRequest $request, $id)
	{
		$travel = $request->validated();
		$updatedTravel = $this->travelRepository->updateTravel($id, $travel);
		return redirect()->back();
	}

	public function delete(Request $request, $id)
	{
		if($request->isMethod('GET')) {
			$travel = $this->travelRepository->getTravelById($id);
			return view('travels.delete')->with('travel', $travel);
		} else {
			Cartravel::destroy($id);
			return redirect()->back();
		}
	}
}
