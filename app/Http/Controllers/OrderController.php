<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use Illuminate\Http\Request;
use App\Order;

class OrderController extends ApiController
{
    /**
     * @param Order $model
     * @param OrderRequest $request
     */
    public function __constructor(Order $model) {
        $this->model = $model;
    }

    /**
     * @param OrderRequest $request
     * @return mixed
     */
    public function createOrder(OrderRequest $request) {
        return parent::create($request);
    }

    /**
     * @param int $entityId
     * @param Request $request
     * @return mixed
     */
    public function updateOrder(int $entityId, Request $request) {
        return parent::update($entityId, $request);
    }
}
