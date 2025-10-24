<?php

namespace App\Http\Controllers\Api\V1\Course;

use App\Http\Controllers\Controller;
use App\Services\Contracts\Course\ICourseService;
use App\Traits\CrudBehaviour;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    use CrudBehaviour;
    protected ICourseService $service;
    public function __construct(ICourseService $service) {
        $this->service = $service;
    }

    public function index(Request $request) {
        return $this->_index($request, $this->service);
    }

    public function store(Request $request) {
        return $this->_store($request, $this->service);
    }

    public function update(Request $request) {
        return $this->_update($request, $this->service);
    }

    public function delete(Request $request) {
        return $this->_delete($request, $this->service);
    }
}
