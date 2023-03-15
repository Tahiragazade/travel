<?php

namespace App\Interfaces;

interface CustomerRepositoryInterface
{
	public function getAllCustomers();
	public function getCustomerById($id);
	public function deleteCustomer($id);
	public function createCustomer(array $Customer);
	public function updateCustomer($id, array $Customer);
}