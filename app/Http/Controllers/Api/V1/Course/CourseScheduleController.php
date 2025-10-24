<?php

namespace App\Http\Controllers\Api\V1\Course;

use App\Http\Controllers\Api\ApiController;
use App\Services\Contracts\Course\ICourseScheduleService;
use App\Traits\CrudBehaviour;
use Illuminate\Http\Request;

class CourseScheduleController extends ApiController
{
    use CrudBehaviour;
    protected ICourseScheduleService $service;
    public function __construct(ICourseScheduleService $service) {
        $this->service = $service;
    }

    public function index(Request $request) {
        return $this->_index($request, $this->service);
    }

    public function store(Request $request) {
        return $this->_store($request, $this->service);
    }


    public function show(Request $request) {
        return $this->_show($request, $this->service);
    }

    
    public function update(Request $request) {
        return $this->_update($request, $this->service);
    }

    public function destroy(Request $request) {
        return $this->_destroy($request, $this->service);
    }
}
