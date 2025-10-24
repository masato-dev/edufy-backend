<?php
namespace App\Services\Implementations\Course;

use App\Services\Contracts\Course\ICourseMediaService;
use App\Services\Implementations\Service;
class CourseMediaService extends Service implements ICourseMediaService {
    public function __construct(ICourseMediaService $repository) {
        parent::__construct($repository);
    }
}