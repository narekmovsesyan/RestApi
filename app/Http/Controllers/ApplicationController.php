<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;
use App\Http\Requests\ApplicationRequest;

class ApplicationController extends ApiController
{
    /**
     * @param Application $model
     * @param ApplicationRequest $request
     */
    public function __constructor(Application $model, ApplicationRequest $request){
        $this->model = $model;
    }

    /**
     * @param ApplicationRequest $request
     * @return mixed
     */
    public function createApplication(ApplicationRequest $request) {
        return $this->create($request);
    }

    /**
     * @param int $entityId
     * @param ApplicationRequest $request
     * @return mixed
     */
    public function updateApplication(int $entityId, ApplicationRequest $request) {
        return parent::update($entityId, $request);
    }
}
