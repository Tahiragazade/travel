<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCustomerRequest;
use App\Http\Requests\CustomerRequest;
use App\Interfaces\CustomerRepositoryInterface;
use App\Models\Customer;
use App\Repositories\CarColorRepository;
use App\Repositories\CarRepository;
use App\Repositories\RegionRepository;
use App\Repositories\TravelRepository;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
	private CustomerRepositoryInterface $CustomerRepository;
	protected $carRepository;
	protected $carColorRepository;
	protected $regionRepository;

	public function __construct(CustomerRepositoryInterface $CustomerRepository,CarRepository $carRepository,CarColorRepository $carColorRepository,RegionRepository $regionRepository)
	{
		$this->CustomerRepository = $CustomerRepository;
		$this->carRepository = $carRepository;
		$this->regionRepository = $regionRepository;
		$this->carColorRepository = $carColorRepository;
	}

	public function index(Request $request)
	{
		$customers = $this->CustomerRepository->getAllCustomers();
		return view('customers.index')->with('customers', $customers);
	}

	public function create()
	{
		$cars = $this->carRepository->getAllCars();
		$colors = $this->carColorRepository->getAllColors();

		return view('customers.create',['cars' => $cars,'colors'=>$colors]);
	}

	public function store(CreateCustomerRequest $request)
	{
		$customer= $request->validated();
		$newCustomer = $this->CustomerRepository->createCustomer($customer);
		return redirect()->back();
	}

	public function edit($id)
	{
		$customer = $this->CustomerRepository->getCustomerById($id);
		return view('Customers.edit')->with('customer', $customer);
	}

	public function update(CustomerRequest $request, $id)
	{
		$customer = $request->validated();
		$updatedCustomer = $this->CustomerRepository->updateCustomer($id, $customer);
		return redirect()->back();
	}

	public function delete(Request $request, $id)
	{
		if($request->isMethod('GET')) {
			$customer = $this->CustomerRepository->getCustomerById($id);
			return view('Customers.delete')->with('Customer', $customer);
		} else {
			Customer::destroy($id);
			return redirect()->back();
		}
	}
}
