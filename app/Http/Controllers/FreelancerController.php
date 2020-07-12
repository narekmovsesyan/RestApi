<?php

namespace App\Http\Controllers;

use App\Http\Requests\FreelancerRequest;
use Illuminate\Http\Request;
use App\Freelancer;

class FreelancerController extends ApiController
{
    /**
     * @param Freelancer $model
     * @param FreelancerRequest $request
     */
    public function __construct(Freelancer $model) {
    	$this->model = $model;
    }

    /**
     * @param FreelancerRequest $request
     * @return mixed
     */
    public function createFreelancer(FreelancerRequest $request) {
        return parent::create($request);
    }

    /**
     * @param int $entityId
     * @param Request $request
     * @return mixed
     */
    public function updateFreelancer(int $entityId, Request $request) {
        return parent::update($entityId, $request);
    }
}
