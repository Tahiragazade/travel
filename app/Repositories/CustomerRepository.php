<?php

namespace App\Repositories;

use App\Interfaces\CustomerRepositoryInterface;
use App\Models\Customer;

class CustomerRepository implements CustomerRepositoryInterface
{
	public function getAllCustomers()
	{
		return Customer::all();
	}

	public function getCustomerById($id)
	{
		return Customer::findOrFail($id);
	}

	public function deleteCustomer($id)
	{
		Customer::destroy($id);
	}

	public function createCustomer(array $customer)
	{
		return Customer::create($customer);
	}

	public function updateCustomer($id, array $customer)
	{
		return Customer::whereId($id)->update($customer);
	}

	
}
