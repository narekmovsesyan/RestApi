<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;

class CustomerController extends ApiController
{
    /**
     * @param Customer $model
     * @param CustomerRequest $request
     */
    public function __constructor(Customer $model) {
        $this->model = $model;
    }

    /**
     * @param CustomerRequest $request
     * @return mixed
     */
    public function createCustomer(CustomerRequest $request) {
        return parent::create($request);
    }

    /**
     * @param int $entityId
     * @param Request $request
     * @return mixed
     */
    public function updateCustomer(int $entityId, Request $request) {
        return parent::update($entityId, $request);
    }
}
